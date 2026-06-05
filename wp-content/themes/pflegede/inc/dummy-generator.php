<?php
/**
 * Pflegede — Dummy Listings Generator
 * ─────────────────────────────────────────────────────────────
 * Admin-only one-click tool to populate / clean up the
 * `pflegede_listing` CPT with realistic German Pflege data.
 *
 * Removal:
 *   To uninstall after launch — delete this file and remove
 *   the `require_once` line from functions.php. All dummy posts
 *   can be cleaned via the "Delete All" button beforehand.
 *
 * @package pflegede
 */

defined( 'ABSPATH' ) || exit;

class Pflegede_Dummy_Generator {

	const DUMMY_FLAG_KEY = '_pflegede_dummy';
	const MENU_SLUG      = 'pflegede-dummy';
	const NONCE_ACTION   = 'pflegede_dummy_action';

	public static function init() {
		add_action( 'admin_menu',     array( __CLASS__, 'register_menu' ) );
		add_action( 'admin_post_pflegede_dummy_generate', array( __CLASS__, 'handle_generate' ) );
		add_action( 'admin_post_pflegede_dummy_delete',   array( __CLASS__, 'handle_delete' ) );
	}

	public static function register_menu() {
		add_submenu_page(
			'edit.php?post_type=pflegede_listing',
			__( 'Dummy Data', 'pflegede' ),
			__( 'Dummy Data', 'pflegede' ),
			'manage_options',
			self::MENU_SLUG,
			array( __CLASS__, 'render_page' )
		);
	}

	public static function render_page() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( esc_html__( 'Insufficient permissions.', 'pflegede' ) );
		}

		$count = self::count_dummy_posts();
		$total = wp_count_posts( 'pflegede_listing' )->publish;
		?>
		<div class="wrap">
			<h1><span class="dashicons dashicons-database-add" style="font-size:30px;width:30px;height:30px;"></span> Pflegede — Dummy Listings Generator</h1>

			<?php if ( isset( $_GET['generated'] ) ) : ?>
				<div class="notice notice-success is-dismissible"><p><strong><?php echo (int) $_GET['generated']; ?></strong> dummy listings generated successfully!</p></div>
			<?php endif; ?>
			<?php if ( isset( $_GET['deleted'] ) ) : ?>
				<div class="notice notice-success is-dismissible"><p><strong><?php echo (int) $_GET['deleted']; ?></strong> dummy listings deleted!</p></div>
			<?php endif; ?>

			<div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:20px;max-width:900px;">

				<!-- Generate Card -->
				<div class="card" style="padding:20px;border-radius:8px;background:#fff;border:1px solid #c3c4c7;">
					<h2 style="margin-top:0;">⚡ Generate Dummy Listings</h2>
					<p>Each listing gets all 16 meta fields filled with realistic German Pflege data, random categories, and random featured/type flags.</p>
					<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
						<input type="hidden" name="action" value="pflegede_dummy_generate" />
						<?php wp_nonce_field( self::NONCE_ACTION ); ?>
						<p>
							<label for="dummy_count"><strong>How many listings?</strong></label><br/>
							<input type="number" name="count" id="dummy_count" value="20" min="1" max="100" style="width:100px;" />
							<span style="color:#666;"> (max 100 per batch)</span>
						</p>
						<p>
							<button type="submit" class="button button-primary button-large">
								<span class="dashicons dashicons-plus-alt" style="margin-top:4px;"></span>
								Generate Listings
							</button>
						</p>
					</form>
				</div>

				<!-- Delete Card -->
				<div class="card" style="padding:20px;border-radius:8px;background:#fff;border:1px solid #c3c4c7;">
					<h2 style="margin-top:0;">🗑️ Cleanup Dummy Data</h2>
					<p>Permanently delete all listings marked as dummy. Real listings (added manually) are <strong>not affected</strong>.</p>
					<p>
						<strong>Current dummy listings:</strong> <?php echo (int) $count; ?><br/>
						<strong>Total published listings:</strong> <?php echo (int) $total; ?>
					</p>
					<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" onsubmit="return confirm('Delete all <?php echo (int) $count; ?> dummy listings permanently? This cannot be undone.');">
						<input type="hidden" name="action" value="pflegede_dummy_delete" />
						<?php wp_nonce_field( self::NONCE_ACTION ); ?>
						<button type="submit" class="button button-secondary" <?php disabled( 0, $count ); ?>>
							<span class="dashicons dashicons-trash" style="margin-top:4px;"></span>
							Delete All Dummy Listings
						</button>
					</form>
				</div>
			</div>

			<div style="margin-top:30px;padding:16px;background:#f0f6ff;border-left:4px solid #2271b1;border-radius:4px;max-width:880px;">
				<h3 style="margin-top:0;">ℹ️ How it works</h3>
				<ul style="list-style:disc;padding-left:20px;">
					<li>Each generated listing gets a hidden meta flag <code><?php echo esc_html( self::DUMMY_FLAG_KEY ); ?> = 1</code>.</li>
					<li>"Delete All" only removes posts with this flag — your real client listings are safe.</li>
					<li>Listings are <strong>published immediately</strong> with random categories from <code>pflegede_category</code>.</li>
					<li>To remove this tool after launch: delete <code>inc/dummy-generator.php</code> and the <code>require_once</code> line from <code>functions.php</code>.</li>
				</ul>
			</div>
		</div>
		<?php
	}

	public static function handle_generate() {
		if ( ! current_user_can( 'manage_options' ) || ! check_admin_referer( self::NONCE_ACTION ) ) {
			wp_die( 'Unauthorized' );
		}

		$count = isset( $_POST['count'] ) ? (int) $_POST['count'] : 20;
		$count = max( 1, min( 100, $count ) );

		$generated = 0;
		for ( $i = 0; $i < $count; $i++ ) {
			if ( self::create_one() ) {
				$generated++;
			}
		}

		wp_safe_redirect( add_query_arg( array(
			'post_type' => 'pflegede_listing',
			'page'      => self::MENU_SLUG,
			'generated' => $generated,
		), admin_url( 'edit.php' ) ) );
		exit;
	}

	public static function handle_delete() {
		if ( ! current_user_can( 'manage_options' ) || ! check_admin_referer( self::NONCE_ACTION ) ) {
			wp_die( 'Unauthorized' );
		}

		// Delete dummy listings
		$ids = get_posts( array(
			'post_type'      => 'pflegede_listing',
			'post_status'    => 'any',
			'numberposts'    => -1,
			'fields'         => 'ids',
			'meta_key'       => self::DUMMY_FLAG_KEY,
			'meta_value'     => '1',
		) );

		$deleted = 0;
		foreach ( $ids as $id ) {
			if ( wp_delete_post( $id, true ) ) {
				$deleted++;
			}
		}

		// Also delete dummy attachments (featured images)
		$att_ids = get_posts( array(
			'post_type'      => 'attachment',
			'post_status'    => 'any',
			'numberposts'    => -1,
			'fields'         => 'ids',
			'meta_key'       => self::DUMMY_FLAG_KEY,
			'meta_value'     => '1',
		) );
		foreach ( $att_ids as $aid ) {
			wp_delete_attachment( $aid, true );
		}
		delete_option( 'pflegede_dummy_image_map' );

		wp_safe_redirect( add_query_arg( array(
			'post_type' => 'pflegede_listing',
			'page'      => self::MENU_SLUG,
			'deleted'   => $deleted,
		), admin_url( 'edit.php' ) ) );
		exit;
	}

	private static function count_dummy_posts() {
		$ids = get_posts( array(
			'post_type'   => 'pflegede_listing',
			'post_status' => 'any',
			'numberposts' => -1,
			'fields'      => 'ids',
			'meta_key'    => self::DUMMY_FLAG_KEY,
			'meta_value'  => '1',
		) );
		return count( $ids );
	}

	/**
	 * Create one realistic German Pflege listing.
	 */
	private static function create_one() {

		// German first + last names
		$first_names_f = array( 'Anna', 'Maria', 'Petra', 'Sabine', 'Birgit', 'Christine', 'Andrea', 'Monika', 'Ursula', 'Gabi' );
		$first_names_m = array( 'Klaus', 'Thomas', 'Andreas', 'Michael', 'Stefan', 'Wolfgang', 'Hans', 'Jürgen', 'Peter', 'Martin' );
		$last_names    = array( 'Müller', 'Schmidt', 'Schneider', 'Fischer', 'Weber', 'Meyer', 'Wagner', 'Becker', 'Hoffmann', 'Schäfer', 'Koch', 'Richter', 'Bauer', 'Klein', 'Wolf' );

		// Company name parts
		$company_prefix = array( 'Vital', 'Aktiv', 'Senioren', 'Home', 'Care', 'Mobil', 'Mediplus', 'Lebens', 'Pflege', 'Sankt' );
		$company_suffix = array( 'Pflegedienst', 'Pflege GmbH', 'SeniorenCare', 'Pflegeservice', 'Hilfe', 'Care Plus', 'Pflegezentrum' );

		// German cities with their phone codes
		$cities = array(
			'Berlin'           => '30',
			'Hamburg'          => '40',
			'München'          => '89',
			'Köln'             => '221',
			'Frankfurt am Main' => '69',
			'Stuttgart'        => '711',
			'Düsseldorf'       => '211',
			'Bremen'           => '421',
			'Hannover'         => '511',
			'Leipzig'          => '341',
			'Dortmund'         => '231',
			'Nürnberg'         => '911',
			'Essen'            => '201',
			'Dresden'          => '351',
		);

		// Pflege services (German)
		$all_services = array(
			'Grundpflege', 'Behandlungspflege', 'Hauswirtschaftliche Versorgung',
			'Verhinderungspflege', 'Demenzbetreuung', 'Wundversorgung',
			'Medikamentengabe', 'Mobilitätshilfe', '24-Stunden-Pflege',
			'Palliativpflege', 'Beratungsbesuche nach § 37.3 SGB XI',
			'Pflegeberatung', 'Tagespflege', 'Kurzzeitpflege',
			'Injektionen', 'Blutdruckmessung', 'Körperpflege',
		);

		// Languages
		$all_languages = array( 'Deutsch', 'Englisch', 'Türkisch', 'Polnisch', 'Russisch', 'Arabisch', 'Französisch' );

		// Working hours templates
		$hours_templates = array(
			"Mo-Fr: 08:00-18:00\nSa: 09:00-13:00\nSo: Notdienst",
			"Mo-Fr: 07:00-19:00\nSa-So: 08:00-16:00",
			"24/7 erreichbar — Pflege rund um die Uhr",
			"Mo-Fr: 06:00-22:00\nSa-So: 08:00-20:00",
			"Mo-So: 24-Stunden-Bereitschaft",
		);

		// Description templates
		$desc_templates = array(
			"Wir sind ein erfahrener ambulanter Pflegedienst mit über %d Jahren Erfahrung in der professionellen Pflege. Unser qualifiziertes Team unterstützt Sie und Ihre Angehörigen mit Herz und Kompetenz im eigenen Zuhause. Wir bieten individuelle Pflegelösungen nach SGB XI — von der Grundpflege bis zur Behandlungspflege.",
			"Als zertifizierter Pflegedienst in %s bieten wir Ihnen umfassende Pflegeleistungen nach höchsten Qualitätsstandards. Unser engagiertes Team von Pflegefachkräften steht Ihnen rund um die Uhr zur Seite. Wir arbeiten mit allen Pflegekassen zusammen und beraten Sie kostenlos zu allen Fragen rund um die Pflege.",
			"Liebevolle Pflege in vertrauter Umgebung — das ist unser Versprechen. Seit %d Jahren unterstützen wir Pflegebedürftige und ihre Familien in %s. Unser interdisziplinäres Team aus examinierten Pflegefachkräften, Pflegehelfern und Betreuungsassistenten gewährleistet eine ganzheitliche Versorgung.",
			"Professionelle ambulante Pflege mit menschlicher Wärme. Wir bieten Ihnen ein breites Spektrum an Pflege- und Betreuungsleistungen, abgestimmt auf Ihre individuellen Bedürfnisse. Unsere Pflegekräfte sind regelmäßig fortgebildet und arbeiten nach den neuesten pflegewissenschaftlichen Erkenntnissen.",
		);

		// Pick random data
		$is_company = ( wp_rand( 0, 100 ) < 65 ); // 65% companies, 35% individuals
		$type       = $is_company ? 'company' : 'individual';

		// Generate name
		if ( $is_company ) {
			$city_pick = array_rand( $cities );
			$name      = $company_prefix[ array_rand( $company_prefix ) ] . ' ' . $company_suffix[ array_rand( $company_suffix ) ] . ' ' . $city_pick;
			$city      = $city_pick;
		} else {
			$is_female = (bool) wp_rand( 0, 1 );
			$first     = $is_female ? $first_names_f[ array_rand( $first_names_f ) ] : $first_names_m[ array_rand( $first_names_m ) ];
			$last      = $last_names[ array_rand( $last_names ) ];
			$name      = $first . ' ' . $last . ' — Pflegedienst';
			$city_pick = array_rand( $cities );
			$city      = $city_pick;
		}

		$phone_code  = $cities[ $city ];
		$phone_local = wp_rand( 1000000, 99999999 );
		$phone       = '+49 ' . $phone_code . ' ' . $phone_local;
		$whatsapp    = '+49' . $phone_code . str_replace( ' ', '', (string) wp_rand( 1000000, 99999999 ) );

		// Domain slug
		$slug   = sanitize_title( $name );
		$slug   = substr( $slug, 0, 30 );
		$email  = 'kontakt@' . str_replace( '-', '', $slug ) . '.de';
		$website = 'https://www.' . str_replace( '-', '', $slug ) . '.de';

		// Maps link
		$maps_link = 'https://maps.google.com/?q=' . rawurlencode( $name . ', ' . $city . ', Germany' );

		// Pick 3-6 random services
		shuffle( $all_services );
		$picked_services = array_slice( $all_services, 0, wp_rand( 3, 6 ) );
		$services_text   = implode( "\n", $picked_services );

		// Pick 1-3 random languages (Deutsch always)
		$other_languages = array_diff( $all_languages, array( 'Deutsch' ) );
		shuffle( $other_languages );
		$picked_languages = array_merge( array( 'Deutsch' ), array_slice( $other_languages, 0, wp_rand( 0, 3 ) ) );
		$languages_text   = implode( ', ', $picked_languages );

		// Working hours
		$working_hours = $hours_templates[ array_rand( $hours_templates ) ];

		// Description
		$desc_tpl = $desc_templates[ array_rand( $desc_templates ) ];
		$desc     = sprintf( $desc_tpl, wp_rand( 5, 25 ), $city );

		// Social — random presence
		$social_slug = str_replace( '-', '', $slug );
		$facebook    = wp_rand( 0, 100 ) < 70 ? 'https://facebook.com/' . $social_slug : '';
		$instagram   = wp_rand( 0, 100 ) < 50 ? 'https://instagram.com/' . $social_slug : '';
		$linkedin    = wp_rand( 0, 100 ) < 40 ? 'https://linkedin.com/company/' . $social_slug : '';

		// Featured — ~25%
		$is_featured = wp_rand( 0, 100 ) < 25 ? '1' : '';

		// Insert post
		$post_id = wp_insert_post( array(
			'post_type'    => 'pflegede_listing',
			'post_title'   => $name,
			'post_content' => $desc,
			'post_status'  => 'publish',
			'post_author'  => get_current_user_id(),
		) );

		if ( ! $post_id || is_wp_error( $post_id ) ) {
			return false;
		}

		// All 16 meta fields
		update_post_meta( $post_id, '_pflegede_phone',         $phone );
		update_post_meta( $post_id, '_pflegede_whatsapp',      $whatsapp );
		update_post_meta( $post_id, '_pflegede_email',         $email );
		update_post_meta( $post_id, '_pflegede_website',       $website );
		update_post_meta( $post_id, '_pflegede_city',          $city );
		update_post_meta( $post_id, '_pflegede_maps_link',     $maps_link );
		update_post_meta( $post_id, '_pflegede_languages',     $languages_text );
		update_post_meta( $post_id, '_pflegede_working_hours', $working_hours );
		update_post_meta( $post_id, '_pflegede_services',      $services_text );
		update_post_meta( $post_id, '_pflegede_facebook',      $facebook );
		update_post_meta( $post_id, '_pflegede_instagram',     $instagram );
		update_post_meta( $post_id, '_pflegede_linkedin',      $linkedin );
		update_post_meta( $post_id, '_pflegede_type',          $type );
		if ( $is_featured ) {
			update_post_meta( $post_id, '_pflegede_featured', '1' );
		}

		// Dummy flag for safe cleanup
		update_post_meta( $post_id, self::DUMMY_FLAG_KEY, '1' );

		// Assign 1-3 random categories
		$all_terms = get_terms( array(
			'taxonomy'   => 'pflegede_category',
			'hide_empty' => false,
			'fields'     => 'ids',
		) );
		if ( ! empty( $all_terms ) && ! is_wp_error( $all_terms ) ) {
			shuffle( $all_terms );
			$picked = array_slice( $all_terms, 0, min( wp_rand( 1, 3 ), count( $all_terms ) ) );
			wp_set_object_terms( $post_id, array_map( 'intval', $picked ), 'pflegede_category' );
		}

		// Random featured image from pool
		$image_pool = array(
			'care-1.jpg',
			'care-2.jpg',
			'care-3.jpg',
			'care-4.jpg',
			'pflegegrade-section.jpg',
			'quick-pflegegrad.jpg',
			'quick-pflegearten.jpg',
			'quick-ratgeber.jpg',
		);
		$img_file      = $image_pool[ array_rand( $image_pool ) ];
		$attachment_id = self::get_or_create_dummy_attachment( $img_file );
		if ( $attachment_id ) {
			set_post_thumbnail( $post_id, $attachment_id );
		}

		return $post_id;
	}

	/**
	 * Copy a theme asset image into uploads + create a WP attachment.
	 * Cached via wp_options so each file is only attached once.
	 */
	private static function get_or_create_dummy_attachment( $filename ) {
		$map = get_option( 'pflegede_dummy_image_map', array() );

		// Return cached only if attachment post AND file exist
		if ( isset( $map[ $filename ] ) ) {
			$existing = (int) $map[ $filename ];
			if ( $existing && get_post( $existing ) ) {
				$att_file = get_attached_file( $existing );
				if ( $att_file && file_exists( $att_file ) ) {
					return $existing;
				}
				// stale entry — wipe and re-create below
				unset( $map[ $filename ] );
			}
		}

		$src_path = PFLEGEDE_DIR . '/assets/images/' . $filename;
		if ( ! file_exists( $src_path ) || ! is_readable( $src_path ) ) {
			return 0;
		}

		$upload_dir = wp_upload_dir();
		if ( ! empty( $upload_dir['error'] ) || empty( $upload_dir['path'] ) ) {
			return 0;
		}

		// Ensure uploads directory exists
		if ( ! wp_mkdir_p( $upload_dir['path'] ) ) {
			return 0;
		}

		// Unique destination filename in current month's uploads folder
		$dest_basename = wp_unique_filename( $upload_dir['path'], 'pflegede-dummy-' . $filename );
		$dest_path     = trailingslashit( $upload_dir['path'] ) . $dest_basename;
		$dest_url      = trailingslashit( $upload_dir['url'] ) . $dest_basename;

		// Hard copy (no @ — fail loudly if it doesn't work)
		if ( ! copy( $src_path, $dest_path ) ) {
			return 0;
		}

		// Load WP media helpers
		require_once ABSPATH . 'wp-admin/includes/image.php';

		// Detect mime — fallback to image/jpeg for .jpg
		$filetype = wp_check_filetype( $dest_basename, null );
		$mime     = ! empty( $filetype['type'] ) ? $filetype['type'] : 'image/jpeg';

		$attachment = array(
			'guid'           => $dest_url,
			'post_mime_type' => $mime,
			'post_title'     => 'Pflegede Dummy — ' . pathinfo( $filename, PATHINFO_FILENAME ),
			'post_content'   => '',
			'post_status'    => 'inherit',
		);

		$attachment_id = wp_insert_attachment( $attachment, $dest_path, 0, true );
		if ( ! $attachment_id || is_wp_error( $attachment_id ) ) {
			@unlink( $dest_path );
			return 0;
		}

		// CRITICAL: explicitly link the file to the attachment.
		// Some setups need this even though wp_insert_attachment claims to do it.
		update_attached_file( $attachment_id, $dest_path );

		// Generate sub-sizes (thumbnail, medium, large…)
		$metadata = wp_generate_attachment_metadata( $attachment_id, $dest_path );
		if ( ! empty( $metadata ) ) {
			wp_update_attachment_metadata( $attachment_id, $metadata );
		}

		// Mark for safe cleanup
		update_post_meta( $attachment_id, self::DUMMY_FLAG_KEY, '1' );

		// Cache mapping
		$map[ $filename ] = $attachment_id;
		update_option( 'pflegede_dummy_image_map', $map );

		return $attachment_id;
	}
}

Pflegede_Dummy_Generator::init();

<?php
defined( 'ABSPATH' ) || exit;
get_header();

if ( ! have_posts() ) { wp_redirect( home_url( '/404/' ) ); exit; }
the_post();
$post_id     = get_the_ID();
$phone       = pflegede_get_listing_meta( $post_id, 'phone' );
$whatsapp    = pflegede_get_listing_meta( $post_id, 'whatsapp' );
$email       = pflegede_get_listing_meta( $post_id, 'email' );
$website     = pflegede_get_listing_meta( $post_id, 'website' );
$city        = pflegede_get_listing_meta( $post_id, 'city' );
$maps_link   = pflegede_get_listing_meta( $post_id, 'maps_link' );
$hours       = pflegede_get_listing_meta( $post_id, 'working_hours' );
$languages   = pflegede_get_listing_meta( $post_id, 'languages' );
$services    = pflegede_get_listing_meta( $post_id, 'services' );
$facebook    = pflegede_get_listing_meta( $post_id, 'facebook' );
$instagram   = pflegede_get_listing_meta( $post_id, 'instagram' );
$linkedin    = pflegede_get_listing_meta( $post_id, 'linkedin' );
$is_featured = pflegede_is_featured( $post_id );
$type        = get_post_meta( $post_id, '_pflegede_type', true ) ?: 'company';
$type_label  = pflegede_get_type_label( $post_id );
$categories  = pflegede_get_categories( $post_id );
?>

<main role="main">

    <!-- Breadcrumb -->
    <div class="bg-light border-bottom py-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'pflegede' ); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>"><?php esc_html_e( 'Listings', 'pflegede' ); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">

            <!-- ── Main Content ── -->
            <div class="col-lg-8">

                <!-- Header Card -->
                <div class="card listing-header-card mb-4">
                    <div class="card-body d-flex gap-3 align-items-start">
                        <div class="listing-logo-box">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'thumbnail', array( 'alt' => esc_attr( get_the_title() ), 'class' => 'img-fluid' ) ); ?>
                            <?php else : ?>
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#CBD5E1" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            <?php endif; ?>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex flex-wrap gap-2 mb-2">
                                <?php if ( $is_featured ) : ?>
                                    <span class="badge badge-featured">
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <?php esc_html_e( 'Featured', 'pflegede' ); ?>
                                    </span>
                                <?php endif; ?>
                                <span class="badge badge-<?php echo esc_attr( $type ); ?>"><?php echo esc_html( $type_label ); ?></span>
                                <?php foreach ( $categories as $cat ) : ?>
                                    <a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="badge rounded-pill bg-primary bg-opacity-10 text-primary text-decoration-none d-inline-flex align-items-center gap-1">
                                        <?php echo pflegede_get_category_icon( $cat->slug ); ?>
                                        <?php echo esc_html( $cat->name ); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <h1 class="h3 fw-bold mb-2"><?php the_title(); ?></h1>
                            <?php if ( $city ) : ?>
                                <p class="text-muted mb-0 d-flex align-items-center gap-1" style="font-size:.9375rem;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                    <?php echo esc_html( $city ); ?>, Germany
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- About -->
                <?php if ( get_the_content() ) : ?>
                <div class="card listing-section-card mb-4">
                    <div class="card-header">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        <?php esc_html_e( 'About', 'pflegede' ); ?>
                    </div>
                    <div class="card-body">
                        <div class="listing-content"><?php the_content(); ?></div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Services -->
                <?php if ( $services ) : ?>
                <div class="card listing-section-card mb-4">
                    <div class="card-header">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                        <?php esc_html_e( 'Services Offered', 'pflegede' ); ?>
                    </div>
                    <div class="card-body">
                        <ul class="services-list">
                            <?php foreach ( explode( "\n", $services ) as $service ) :
                                $service = trim( $service );
                                if ( ! $service ) continue;
                            ?>
                                <li>
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                    <?php echo esc_html( $service ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Working Hours -->
                <?php if ( $hours ) : ?>
                <div class="card listing-section-card mb-4">
                    <div class="card-header">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <?php esc_html_e( 'Working Hours', 'pflegede' ); ?>
                    </div>
                    <div class="card-body">
                        <pre class="listing-hours text-muted"><?php echo esc_html( $hours ); ?></pre>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Maps -->
                <?php if ( $maps_link ) : ?>
                <div class="card listing-section-card mb-4">
                    <div class="card-header">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <?php esc_html_e( 'Location', 'pflegede' ); ?>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo esc_url( $maps_link ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary">
                            <?php esc_html_e( 'Open in Google Maps', 'pflegede' ); ?>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

            </div>

            <!-- ── Sidebar ── -->
            <div class="col-lg-4">
                <div class="listing-sidebar d-flex flex-column gap-3">

                    <!-- Contact Card -->
                    <div class="card border">
                        <div class="card-header fw-bold"><?php esc_html_e( 'Contact', 'pflegede' ); ?></div>
                        <div class="card-body p-3">
                            <div class="contact-btn-list">
                                <?php if ( $phone ) : ?>
                                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="contact-btn-item contact-btn-phone">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 .01h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                                        <?php echo esc_html( $phone ); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ( $whatsapp ) : ?>
                                    <a href="<?php echo esc_url( pflegede_whatsapp_url( $whatsapp ) ); ?>" target="_blank" rel="noopener noreferrer" class="contact-btn-item contact-btn-wa">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                        WhatsApp
                                    </a>
                                <?php endif; ?>
                                <?php if ( $email ) : ?>
                                    <a href="mailto:<?php echo esc_attr( $email ); ?>" class="contact-btn-item contact-btn-email">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                        <?php echo esc_html( $email ); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ( $website ) : ?>
                                    <a href="<?php echo esc_url( $website ); ?>" target="_blank" rel="noopener noreferrer" class="contact-btn-item contact-btn-web">
                                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                                        <?php esc_html_e( 'Visit Website', 'pflegede' ); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Languages -->
                    <?php if ( $languages ) : ?>
                    <div class="card border">
                        <div class="card-header fw-bold"><?php esc_html_e( 'Languages Spoken', 'pflegede' ); ?></div>
                        <div class="card-body">
                            <p class="mb-0 d-flex align-items-center gap-2">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2"><path d="M5 8l6 6"/><path d="M4 14l6-6 2-3"/><path d="M2 5h12"/><path d="M7 2h1"/><path d="M22 22l-5-10-5 10"/><path d="M14 18h6"/></svg>
                                <?php echo esc_html( $languages ); ?>
                            </p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Social Media -->
                    <?php if ( $facebook || $instagram || $linkedin ) : ?>
                    <div class="card border">
                        <div class="card-header fw-bold"><?php esc_html_e( 'Follow Us', 'pflegede' ); ?></div>
                        <div class="card-body d-flex flex-column gap-2">
                            <?php if ( $facebook ) : ?>
                                <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener noreferrer" class="social-link-item social-link-facebook">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                                    Facebook
                                </a>
                            <?php endif; ?>
                            <?php if ( $instagram ) : ?>
                                <a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener noreferrer" class="social-link-item social-link-instagram">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                                    Instagram
                                </a>
                            <?php endif; ?>
                            <?php if ( $linkedin ) : ?>
                                <a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" rel="noopener noreferrer" class="social-link-item social-link-linkedin">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                                    LinkedIn
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Get Listed CTA -->
                    <div class="card border-0 bg-primary bg-opacity-10 text-center p-3">
                        <p class="text-muted small mb-3"><?php esc_html_e( 'Want to get your business listed here?', 'pflegede' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary w-100">
                            <?php esc_html_e( 'Contact Us', 'pflegede' ); ?>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

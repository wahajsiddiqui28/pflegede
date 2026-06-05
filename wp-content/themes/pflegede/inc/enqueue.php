<?php
defined( 'ABSPATH' ) || exit;

function pflegede_enqueue_assets() {

    // Bootstrap 5.3 — local file
    wp_enqueue_style(
        'bootstrap',
        PFLEGEDE_URI . '/assets/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Google Fonts — Inter (local fallback)
    wp_enqueue_style(
        'pflegede-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
        array( 'bootstrap' ),
        null
    );
    // Inter font waqai load na ho toh system fonts use honge (CSS variables mein fallback already hai)

    // Bootstrap Icons 1.11.3 — local file
    wp_enqueue_style(
        'bootstrap-icons',
        PFLEGEDE_URI . '/assets/css/bootstrap-icons.min.css',
        array( 'bootstrap' ),
        '1.11.3'
    );

    // Custom theme styles (loaded after Bootstrap to override)
    wp_enqueue_style(
        'pflegede-main',
        PFLEGEDE_URI . '/assets/css/main.css',
        array( 'bootstrap', 'pflegede-google-fonts' ),
        PFLEGEDE_VERSION
    );

    // Bootstrap Bundle JS — local file (includes Popper)
    wp_enqueue_script(
        'bootstrap',
        PFLEGEDE_URI . '/assets/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    // Custom JS
    wp_enqueue_script(
        'pflegede-main',
        PFLEGEDE_URI . '/assets/js/main.js',
        array( 'bootstrap' ),
        PFLEGEDE_VERSION,
        true
    );

    // Contact form JS — only on contact page
    if ( is_page( 'contact' ) || is_page_template( 'page-contact.php' ) ) {
        wp_enqueue_script(
            'pflegede-contact',
            PFLEGEDE_URI . '/assets/js/contact-form.js',
            array( 'bootstrap' ),
            PFLEGEDE_VERSION,
            true
        );
        wp_localize_script( 'pflegede-contact', 'pflegedeContact', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'pflegede_contact_nonce' ),
            'sending' => __( 'Sending...', 'pflegede' ),
            'success' => __( 'Your request has been sent successfully! We will contact you soon.', 'pflegede' ),
            'error'   => __( 'Something went wrong. Please try again.', 'pflegede' ),
        ) );
    }

    if ( is_post_type_archive( 'pflegede_listing' ) || is_tax( 'pflegede_category' ) ) {
        wp_localize_script( 'pflegede-main', 'pflegedeListings', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'pflegede_filter_nonce' ),
        ) );
    }
}
add_action( 'wp_enqueue_scripts', 'pflegede_enqueue_assets' );

/**
 * Inject custom SVG favicon (and theme color) into <head>.
 * Only runs if WordPress site-icon is NOT set in Customizer — site-icon takes precedence.
 */
function pflegede_favicon_tags() {
    if ( has_site_icon() ) {
        return;
    }
    $icon = PFLEGEDE_URI . '/assets/images/favicon.svg';
    echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( $icon ) . '">' . "\n";
    echo '<link rel="alternate icon" href="' . esc_url( $icon ) . '">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url( $icon ) . '">' . "\n";
    echo '<meta name="theme-color" content="#0a5743">' . "\n";
    echo '<meta name="msapplication-TileColor" content="#0a5743">' . "\n";
}
add_action( 'wp_head', 'pflegede_favicon_tags', 5 );

/**
 * Homepage SEO meta tags per Inhaltskonzept (Section: SEO-Checkliste).
 * - Meta-Title: "Pflege in Deutschland — Pflegegrade, Leistungen & Ratgeber | pflegede.com"
 * - Meta-Description: ~155 chars with CTA
 * - Hreflang de
 * - Open Graph + Twitter Cards
 */
function pflegede_homepage_meta_tags() {
    if ( ! is_front_page() ) {
        return;
    }
    $title = 'Pflege in Deutschland — Pflegegrade, Leistungen & Ratgeber | pflegede.com';
    $desc  = 'Pflege verstehen: Pflegegrade, Pflegegeld 2025, Pflegearten und Ratgeber für Angehörige. Verlässliche Informationen — jetzt informieren.';
    $url   = home_url( '/' );
    $img   = PFLEGEDE_URI . '/assets/images/favicon.svg';

    echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n";
    echo '<link rel="alternate" hreflang="de" href="' . esc_url( $url ) . '">' . "\n";
    echo '<link rel="alternate" hreflang="x-default" href="' . esc_url( $url ) . '">' . "\n";

    // Open Graph
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:locale" content="de_DE">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
    echo '<meta property="og:site_name" content="pflegede.com">' . "\n";
    echo '<meta property="og:image" content="' . esc_url( $img ) . '">' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url( $img ) . '">' . "\n";
}
add_action( 'wp_head', 'pflegede_homepage_meta_tags', 6 );

/**
 * Override <title> on the homepage per Inhaltskonzept (max 60 chars target).
 */
function pflegede_homepage_title( $title ) {
    if ( is_front_page() ) {
        return 'Pflege in Deutschland — Pflegegrade, Leistungen & Ratgeber | pflegede.com';
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'pflegede_homepage_title' );

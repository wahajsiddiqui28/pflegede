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

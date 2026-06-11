<?php
defined( 'ABSPATH' ) || exit;

define( 'PFLEGEDE_VERSION', '2.17.1' );
define( 'PFLEGEDE_DIR', get_template_directory() );
define( 'PFLEGEDE_URI', get_template_directory_uri() );

require_once PFLEGEDE_DIR . '/inc/security.php';
require_once PFLEGEDE_DIR . '/inc/smtp.php';
require_once PFLEGEDE_DIR . '/inc/nav-walker.php';
require_once PFLEGEDE_DIR . '/inc/enqueue.php';
require_once PFLEGEDE_DIR . '/inc/cpt-listings.php';
require_once PFLEGEDE_DIR . '/inc/meta-boxes.php';
require_once PFLEGEDE_DIR . '/inc/helpers.php';
require_once PFLEGEDE_DIR . '/inc/contact-form.php';

// ── Simple Kontakt Form Handler (page-kontakt.php) ─────────
function pflegede_handle_kontakt_submit() {
    $redirect = wp_get_referer() ? wp_get_referer() : home_url( '/kontakt/' );

    // Nonce + honeypot
    if ( ! isset( $_POST['pflegede_kontakt_nonce'] ) || ! wp_verify_nonce( $_POST['pflegede_kontakt_nonce'], 'pflegede_kontakt' ) ) {
        wp_safe_redirect( add_query_arg( 'kontakt', 'error', $redirect ) );
        exit;
    }
    if ( ! empty( $_POST['kontakt_hp'] ) ) {
        wp_safe_redirect( add_query_arg( 'kontakt', 'success', $redirect ) ); // silent fail
        exit;
    }

    $name    = isset( $_POST['k_name'] )    ? sanitize_text_field( wp_unslash( $_POST['k_name'] ) )    : '';
    $email   = isset( $_POST['k_email'] )   ? sanitize_email( wp_unslash( $_POST['k_email'] ) )         : '';
    $subject = isset( $_POST['k_subject'] ) ? sanitize_text_field( wp_unslash( $_POST['k_subject'] ) ) : '';
    $message = isset( $_POST['k_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['k_message'] ) ) : '';
    $consent = ! empty( $_POST['k_consent'] );

    if ( ! $name || ! $email || ! is_email( $email ) || ! $subject || ! $message || ! $consent ) {
        wp_safe_redirect( add_query_arg( 'kontakt', 'error', $redirect ) );
        exit;
    }

    $to      = get_option( 'admin_email' );
    $mail_subject = '[pflegede.com Kontakt] ' . $subject;
    $body    = "Name: {$name}\nE-Mail: {$email}\nBetreff: {$subject}\n\nNachricht:\n{$message}\n\n— Gesendet über das Kontaktformular auf pflegede.com";
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail( $to, $mail_subject, $body, $headers );

    wp_safe_redirect( add_query_arg( 'kontakt', $sent ? 'success' : 'error', $redirect ) . '#k_name' );
    exit;
}
add_action( 'admin_post_nopriv_pflegede_kontakt_submit', 'pflegede_handle_kontakt_submit' );
add_action( 'admin_post_pflegede_kontakt_submit',        'pflegede_handle_kontakt_submit' );

// ── DEV/PRE-LAUNCH ONLY: Dummy data generator ───────────────
// Remove this file + line before final production launch.
if ( is_admin() ) {
    require_once PFLEGEDE_DIR . '/inc/dummy-generator.php';
}

function pflegede_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pflegede' ),
        'footer'  => __( 'Footer Menu', 'pflegede' ),
    ) );

    load_theme_textdomain( 'pflegede', PFLEGEDE_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'pflegede_setup' );

function pflegede_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'pflegede_content_width', 0 );

function pflegede_show_all_blog_posts( $query ) {
    if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
        $query->set( 'posts_per_page', -1 );
    }
}
add_action( 'pre_get_posts', 'pflegede_show_all_blog_posts' );

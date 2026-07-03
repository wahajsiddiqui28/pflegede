<?php
defined( 'ABSPATH' ) || exit;

define( 'PFLEGEDE_VERSION', '2.27.0' );
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

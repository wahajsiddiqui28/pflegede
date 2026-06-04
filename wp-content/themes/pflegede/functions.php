<?php
defined( 'ABSPATH' ) || exit;

define( 'PFLEGEDE_VERSION', '1.3.0' );
define( 'PFLEGEDE_DIR', get_template_directory() );
define( 'PFLEGEDE_URI', get_template_directory_uri() );

require_once PFLEGEDE_DIR . '/inc/security.php';
require_once PFLEGEDE_DIR . '/inc/nav-walker.php';
require_once PFLEGEDE_DIR . '/inc/enqueue.php';
require_once PFLEGEDE_DIR . '/inc/cpt-listings.php';
require_once PFLEGEDE_DIR . '/inc/meta-boxes.php';
require_once PFLEGEDE_DIR . '/inc/helpers.php';
require_once PFLEGEDE_DIR . '/inc/contact-form.php';

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

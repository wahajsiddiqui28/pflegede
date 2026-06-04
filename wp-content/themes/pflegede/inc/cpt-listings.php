<?php
defined( 'ABSPATH' ) || exit;

// ─── Register Custom Post Type: Listing ──────────────────────────────────────
function pflegede_register_cpt() {
    $labels = array(
        'name'                  => __( 'Listings', 'pflegede' ),
        'singular_name'         => __( 'Listing', 'pflegede' ),
        'add_new'               => __( 'Add New Listing', 'pflegede' ),
        'add_new_item'          => __( 'Add New Listing', 'pflegede' ),
        'edit_item'             => __( 'Edit Listing', 'pflegede' ),
        'new_item'              => __( 'New Listing', 'pflegede' ),
        'view_item'             => __( 'View Listing', 'pflegede' ),
        'view_items'            => __( 'View Listings', 'pflegede' ),
        'search_items'          => __( 'Search Listings', 'pflegede' ),
        'not_found'             => __( 'No listings found.', 'pflegede' ),
        'not_found_in_trash'    => __( 'No listings found in Trash.', 'pflegede' ),
        'all_items'             => __( 'All Listings', 'pflegede' ),
        'menu_name'             => __( 'Listings', 'pflegede' ),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'listing', 'with_front' => false ),
        'capability_type'     => 'post',
        'has_archive'         => 'listings',
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-building',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'        => false,
    );

    register_post_type( 'pflegede_listing', $args );
}
add_action( 'init', 'pflegede_register_cpt' );

// ─── Register Custom Taxonomy: Category ──────────────────────────────────────
function pflegede_register_taxonomy() {
    $labels = array(
        'name'              => __( 'Categories', 'pflegede' ),
        'singular_name'     => __( 'Category', 'pflegede' ),
        'search_items'      => __( 'Search Categories', 'pflegede' ),
        'all_items'         => __( 'All Categories', 'pflegede' ),
        'parent_item'       => __( 'Parent Category', 'pflegede' ),
        'parent_item_colon' => __( 'Parent Category:', 'pflegede' ),
        'edit_item'         => __( 'Edit Category', 'pflegede' ),
        'update_item'       => __( 'Update Category', 'pflegede' ),
        'add_new_item'      => __( 'Add New Category', 'pflegede' ),
        'new_item_name'     => __( 'New Category Name', 'pflegede' ),
        'menu_name'         => __( 'Categories', 'pflegede' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'listing-category', 'with_front' => false ),
        'show_in_rest'      => false,
    );

    register_taxonomy( 'pflegede_category', array( 'pflegede_listing' ), $args );
}
add_action( 'init', 'pflegede_register_taxonomy' );

// ─── Flush rewrite rules on theme activation ──────────────────────────────────
function pflegede_flush_rewrite_rules() {
    pflegede_register_cpt();
    pflegede_register_taxonomy();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'pflegede_flush_rewrite_rules' );

// ─── Add default categories on theme activation ───────────────────────────────
function pflegede_insert_default_categories() {
    $categories = array(
        'Healthcare'      => 'healthcare',
        'Nursing'         => 'nursing',
        'Caregiving'      => 'caregiving',
        'Elderly Care'    => 'elderly-care',
        'Home Care'       => 'home-care',
        'Medical Services'=> 'medical-services',
    );

    foreach ( $categories as $name => $slug ) {
        if ( ! term_exists( $slug, 'pflegede_category' ) ) {
            wp_insert_term( $name, 'pflegede_category', array( 'slug' => $slug ) );
        }
    }
}
add_action( 'after_switch_theme', 'pflegede_insert_default_categories' );

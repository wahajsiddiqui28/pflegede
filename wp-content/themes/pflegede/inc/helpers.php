<?php
defined( 'ABSPATH' ) || exit;

function pflegede_get_listing_meta( $post_id, $key ) {
    return get_post_meta( $post_id, '_pflegede_' . $key, true );
}

function pflegede_get_categories( $post_id ) {
    $terms = get_the_terms( $post_id, 'pflegede_category' );
    if ( is_wp_error( $terms ) || empty( $terms ) ) return array();
    return $terms;
}

function pflegede_is_featured( $post_id ) {
    return '1' === get_post_meta( $post_id, '_pflegede_featured', true );
}

function pflegede_get_type_label( $post_id ) {
    $type = get_post_meta( $post_id, '_pflegede_type', true );
    return ( $type === 'individual' ) ? __( 'Individual', 'pflegede' ) : __( 'Company', 'pflegede' );
}

function pflegede_get_category_icon( $slug ) {
    $icons = array(
        'healthcare'       => 'bi-hospital',
        'nursing'          => 'bi-clipboard2-pulse',
        'caregiving'       => 'bi-person-heart',
        'elderly-care'     => 'bi-person-wheelchair',
        'home-care'        => 'bi-house-heart',
        'medical-services' => 'bi-capsule',
    );
    $icon_class = isset( $icons[ $slug ] ) ? $icons[ $slug ] : 'bi-grid';
    return '<i class="bi ' . esc_attr( $icon_class ) . '"></i>';
}

function pflegede_truncate( $text, $length = 120 ) {
    $text = wp_strip_all_tags( $text );
    if ( mb_strlen( $text ) <= $length ) return $text;
    return mb_substr( $text, 0, $length ) . '…';
}

function pflegede_whatsapp_url( $number ) {
    $number = preg_replace( '/[^0-9+]/', '', $number );
    $number = ltrim( $number, '+' );
    return 'https://wa.me/' . $number;
}

function pflegede_get_all_cities() {
    global $wpdb;
    $results = $wpdb->get_col(
        $wpdb->prepare(
            "SELECT DISTINCT meta_value FROM {$wpdb->postmeta}
             INNER JOIN {$wpdb->posts} ON {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id
             WHERE meta_key = %s
               AND meta_value != ''
               AND post_status = 'publish'
               AND post_type = 'pflegede_listing'
             ORDER BY meta_value ASC",
            '_pflegede_city'
        )
    );
    return array_filter( $results );
}

function pflegede_pagination( $query = null ) {
    global $wp_query;
    $q     = $query ?? $wp_query;
    $pages = $q->max_num_pages;
    if ( $pages <= 1 ) return;

    $current = max( 1, get_query_var( 'paged' ) );
    echo '<nav class="pflegede-pagination" aria-label="' . esc_attr__( 'Listings pagination', 'pflegede' ) . '">';
    echo paginate_links( array(
        'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'format'    => '?paged=%#%',
        'current'   => $current,
        'total'     => $pages,
        'prev_text' => '&larr; ' . __( 'Previous', 'pflegede' ),
        'next_text' => __( 'Next', 'pflegede' ) . ' &rarr;',
        'type'      => 'plain',
    ) );
    echo '</nav>';
}

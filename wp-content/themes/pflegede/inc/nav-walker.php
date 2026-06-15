<?php
defined( 'ABSPATH' ) || exit;

class Pflegede_Bootstrap_Nav_Walker extends Walker_Nav_Menu {

    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item    = $data_object;
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        $class_names = implode( ' ', array_filter( array_map( 'trim', $classes ) ) );
        $output .= '<li class="' . esc_attr( $class_names ) . '">';

        $atts          = array();
        $atts['href']  = ! empty( $item->url ) ? $item->url : '#';
        $atts['class'] = 'nav-link';

        if ( in_array( 'current-menu-item', $classes, true ) ) {
            $atts['class']        .= ' active';
            $atts['aria-current']  = 'page';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title   = apply_filters( 'the_title', $item->title, $item->ID );
        $output .= '<a' . $attributes . '>' . esc_html( $title ) . '</a>';
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}

function pflegede_fallback_nav() {
    // Per SEO-Team Menu Spec (Hassan Abid): Pflegegrade, Leistungen, Pflegearten, Pflegeberufe, Ratgeber, Über uns
    $pages = array(
        home_url( '/pflegegrade/' )  => 'Pflegegrade',
        home_url( '/leistungen/' )   => 'Leistungen',
        home_url( '/pflegearten/' )  => 'Pflegearten',
        home_url( '/pflegeberufe/' ) => 'Pflegeberufe',
        home_url( '/ratgeber/' )     => 'Ratgeber',
        home_url( '/ueber-uns/' )    => 'Über uns',
    );
    echo '<ul class="navbar-nav mx-auto mb-2 mb-lg-0 pf-nav">';
    foreach ( $pages as $url => $label ) {
        echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}

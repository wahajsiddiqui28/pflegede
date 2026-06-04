<?php
defined( 'ABSPATH' ) || exit;

// ─── Register all meta boxes ──────────────────────────────────────────────────
function pflegede_register_meta_boxes() {
    add_meta_box(
        'pflegede_contact_info',
        __( 'Contact Information', 'pflegede' ),
        'pflegede_contact_info_cb',
        'pflegede_listing',
        'normal',
        'high'
    );
    add_meta_box(
        'pflegede_listing_details',
        __( 'Listing Details', 'pflegede' ),
        'pflegede_listing_details_cb',
        'pflegede_listing',
        'normal',
        'high'
    );
    add_meta_box(
        'pflegede_social_links',
        __( 'Social Media Links', 'pflegede' ),
        'pflegede_social_links_cb',
        'pflegede_listing',
        'normal',
        'default'
    );
    add_meta_box(
        'pflegede_listing_options',
        __( 'Listing Options', 'pflegede' ),
        'pflegede_listing_options_cb',
        'pflegede_listing',
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'pflegede_register_meta_boxes' );

// ─── Contact Information fields ───────────────────────────────────────────────
function pflegede_contact_info_cb( $post ) {
    wp_nonce_field( 'pflegede_save_listing_meta', 'pflegede_listing_nonce' );
    $fields = array(
        '_pflegede_phone'     => __( 'Phone Number', 'pflegede' ),
        '_pflegede_whatsapp'  => __( 'WhatsApp Number', 'pflegede' ),
        '_pflegede_email'     => __( 'Email Address', 'pflegede' ),
        '_pflegede_website'   => __( 'Website URL', 'pflegede' ),
        '_pflegede_city'      => __( 'City / Location', 'pflegede' ),
        '_pflegede_maps_link' => __( 'Google Maps Link', 'pflegede' ),
    );
    echo '<table class="form-table" style="width:100%;">';
    foreach ( $fields as $key => $label ) {
        $value = esc_attr( get_post_meta( $post->ID, $key, true ) );
        $type  = ( $key === '_pflegede_email' ) ? 'email' : ( ( strpos( $key, 'website' ) !== false || strpos( $key, 'maps' ) !== false ) ? 'url' : 'text' );
        echo '<tr>';
        echo '<th style="width:200px;padding:8px 10px;"><label for="' . esc_attr( $key ) . '">' . esc_html( $label ) . '</label></th>';
        echo '<td style="padding:8px 10px;"><input type="' . esc_attr( $type ) . '" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . $value . '" style="width:100%;max-width:500px;" /></td>';
        echo '</tr>';
    }
    echo '</table>';
}

// ─── Listing Details fields ───────────────────────────────────────────────────
function pflegede_listing_details_cb( $post ) {
    $working_hours = esc_textarea( get_post_meta( $post->ID, '_pflegede_working_hours', true ) );
    $languages     = esc_attr( get_post_meta( $post->ID, '_pflegede_languages', true ) );
    $services      = esc_textarea( get_post_meta( $post->ID, '_pflegede_services', true ) );
    echo '<table class="form-table" style="width:100%;">';

    echo '<tr>';
    echo '<th style="width:200px;padding:8px 10px;"><label for="_pflegede_languages">' . esc_html__( 'Languages Spoken', 'pflegede' ) . '</label></th>';
    echo '<td style="padding:8px 10px;"><input type="text" id="_pflegede_languages" name="_pflegede_languages" value="' . $languages . '" style="width:100%;max-width:500px;" placeholder="e.g. German, English, Turkish" /></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<th style="padding:8px 10px;vertical-align:top;"><label for="_pflegede_working_hours">' . esc_html__( 'Working Hours', 'pflegede' ) . '</label></th>';
    echo '<td style="padding:8px 10px;"><textarea id="_pflegede_working_hours" name="_pflegede_working_hours" rows="4" style="width:100%;max-width:500px;" placeholder="e.g. Mon-Fri: 08:00-18:00, Sat: 09:00-13:00">' . $working_hours . '</textarea></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<th style="padding:8px 10px;vertical-align:top;"><label for="_pflegede_services">' . esc_html__( 'Services Offered', 'pflegede' ) . '</label></th>';
    echo '<td style="padding:8px 10px;"><textarea id="_pflegede_services" name="_pflegede_services" rows="5" style="width:100%;max-width:500px;" placeholder="List your services, one per line">' . $services . '</textarea></td>';
    echo '</tr>';

    echo '</table>';
}

// ─── Social Media Links fields ────────────────────────────────────────────────
function pflegede_social_links_cb( $post ) {
    $fields = array(
        '_pflegede_facebook'  => __( 'Facebook URL', 'pflegede' ),
        '_pflegede_instagram' => __( 'Instagram URL', 'pflegede' ),
        '_pflegede_linkedin'  => __( 'LinkedIn URL', 'pflegede' ),
    );
    echo '<table class="form-table" style="width:100%;">';
    foreach ( $fields as $key => $label ) {
        $value = esc_attr( get_post_meta( $post->ID, $key, true ) );
        echo '<tr>';
        echo '<th style="width:200px;padding:8px 10px;"><label for="' . esc_attr( $key ) . '">' . esc_html( $label ) . '</label></th>';
        echo '<td style="padding:8px 10px;"><input type="url" id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" value="' . $value . '" style="width:100%;max-width:500px;" /></td>';
        echo '</tr>';
    }
    echo '</table>';
}

// ─── Listing Options (sidebar) ────────────────────────────────────────────────
function pflegede_listing_options_cb( $post ) {
    $is_featured = get_post_meta( $post->ID, '_pflegede_featured', true );
    $type        = get_post_meta( $post->ID, '_pflegede_type', true );
    if ( empty( $type ) ) $type = 'company';

    echo '<p>';
    echo '<label for="_pflegede_type"><strong>' . esc_html__( 'Listing Type', 'pflegede' ) . '</strong></label><br/>';
    echo '<select id="_pflegede_type" name="_pflegede_type" style="width:100%;margin-top:5px;">';
    echo '<option value="company" ' . selected( $type, 'company', false ) . '>' . esc_html__( 'Company', 'pflegede' ) . '</option>';
    echo '<option value="individual" ' . selected( $type, 'individual', false ) . '>' . esc_html__( 'Individual', 'pflegede' ) . '</option>';
    echo '</select>';
    echo '</p>';

    echo '<p style="margin-top:15px;">';
    echo '<label>';
    echo '<input type="checkbox" id="_pflegede_featured" name="_pflegede_featured" value="1" ' . checked( $is_featured, '1', false ) . ' />';
    echo ' <strong>' . esc_html__( 'Featured Listing', 'pflegede' ) . '</strong>';
    echo '</label>';
    echo '<br/><small style="color:#666;margin-top:5px;display:block;">' . esc_html__( 'Featured listings appear at the top of the homepage.', 'pflegede' ) . '</small>';
    echo '</p>';
}

// ─── Save all meta fields ─────────────────────────────────────────────────────
function pflegede_save_listing_meta( $post_id ) {
    if ( ! isset( $_POST['pflegede_listing_nonce'] ) ) return;
    if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['pflegede_listing_nonce'] ) ), 'pflegede_save_listing_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $text_fields = array(
        '_pflegede_phone', '_pflegede_whatsapp', '_pflegede_city', '_pflegede_languages',
    );
    $url_fields = array(
        '_pflegede_website', '_pflegede_maps_link', '_pflegede_facebook', '_pflegede_instagram', '_pflegede_linkedin',
    );
    $email_fields  = array( '_pflegede_email' );
    $textarea_fields = array( '_pflegede_working_hours', '_pflegede_services' );

    foreach ( $text_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( wp_unslash( $_POST[ $field ] ) ) );
        }
    }

    foreach ( $url_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, esc_url_raw( wp_unslash( $_POST[ $field ] ) ) );
        }
    }

    foreach ( $email_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_email( wp_unslash( $_POST[ $field ] ) ) );
        }
    }

    foreach ( $textarea_fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_textarea_field( wp_unslash( $_POST[ $field ] ) ) );
        }
    }

    $type = isset( $_POST['_pflegede_type'] ) && in_array( $_POST['_pflegede_type'], array( 'company', 'individual' ), true )
        ? sanitize_text_field( $_POST['_pflegede_type'] )
        : 'company';
    update_post_meta( $post_id, '_pflegede_type', $type );

    $featured = isset( $_POST['_pflegede_featured'] ) ? '1' : '0';
    update_post_meta( $post_id, '_pflegede_featured', $featured );
}
add_action( 'save_post_pflegede_listing', 'pflegede_save_listing_meta' );

<?php
defined( 'ABSPATH' ) || exit;

function pflegede_handle_contact_form() {
    // Verify nonce
    if ( ! isset( $_POST['pflegede_contact_nonce'] ) ||
         ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['pflegede_contact_nonce'] ) ), 'pflegede_contact_nonce' ) ) {
        wp_send_json_error( array( 'message' => __( 'Security check failed.', 'pflegede' ) ) );
    }

    // Honeypot check — bots fill this, humans don't
    if ( ! empty( $_POST['pflegede_hp_field'] ) ) {
        wp_send_json_success( array( 'message' => __( 'Your request has been sent successfully!', 'pflegede' ) ) );
    }

    // Rate limiting — max 3 submissions per IP per hour
    $ip_key = 'pflegede_contact_' . md5( $_SERVER['REMOTE_ADDR'] ?? 'unknown' );
    $count  = (int) get_transient( $ip_key );
    if ( $count >= 3 ) {
        wp_send_json_error( array( 'message' => __( 'Too many submissions. Please try again later.', 'pflegede' ) ) );
    }
    set_transient( $ip_key, $count + 1, HOUR_IN_SECONDS );

    // Sanitize inputs
    $your_name    = sanitize_text_field( wp_unslash( $_POST['your_name'] ?? '' ) );
    $listing_name = sanitize_text_field( wp_unslash( $_POST['listing_name'] ?? '' ) );
    $email        = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $phone        = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
    $category     = sanitize_text_field( wp_unslash( $_POST['category'] ?? '' ) );
    $city         = sanitize_text_field( wp_unslash( $_POST['city'] ?? '' ) );
    $website      = esc_url_raw( wp_unslash( $_POST['website'] ?? '' ) );
    $description  = sanitize_textarea_field( wp_unslash( $_POST['description'] ?? '' ) );
    $message      = sanitize_textarea_field( wp_unslash( $_POST['extra_message'] ?? '' ) );

    // Validate required fields
    $required = array(
        'your_name'    => $your_name,
        'listing_name' => $listing_name,
        'email'        => $email,
        'phone'        => $phone,
        'category'     => $category,
        'city'         => $city,
        'description'  => $description,
    );
    foreach ( $required as $field => $value ) {
        if ( empty( $value ) ) {
            wp_send_json_error( array( 'message' => __( 'Please fill all required fields.', 'pflegede' ) ) );
        }
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'pflegede' ) ) );
    }

    // Build email body
    $admin_email = get_option( 'admin_email' );
    $site_name   = get_bloginfo( 'name' );

    $subject = sprintf( '[%s] New Listing Request: %s', $site_name, $listing_name );

    $body  = "New listing request received from the Pflegede website.\n\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "CONTACT PERSON\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Name:     " . $your_name . "\n";
    $body .= "Email:    " . $email . "\n";
    $body .= "Phone:    " . $phone . "\n\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "LISTING DETAILS\n";
    $body .= "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Listing Name: " . $listing_name . "\n";
    $body .= "Category:     " . $category . "\n";
    $body .= "City:         " . $city . "\n";
    if ( ! empty( $website ) ) {
        $body .= "Website:  " . $website . "\n";
    }
    $body .= "\nDescription:\n" . $description . "\n";
    if ( ! empty( $message ) ) {
        $body .= "\nAdditional Info:\n" . $message . "\n";
    }
    $body .= "\n━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    $body .= "Submitted: " . current_time( 'Y-m-d H:i:s' ) . "\n";
    $body .= "IP Address: " . ( $_SERVER['REMOTE_ADDR'] ?? 'unknown' ) . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $your_name . ' <' . $email . '>',
    );

    $sent = wp_mail( $admin_email, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => __( 'Your request has been sent successfully! We will contact you soon.', 'pflegede' ) ) );
    } else {
        wp_send_json_error( array( 'message' => __( 'Failed to send email. Please try calling or WhatsApp us directly.', 'pflegede' ) ) );
    }
}
add_action( 'wp_ajax_pflegede_contact',        'pflegede_handle_contact_form' );
add_action( 'wp_ajax_nopriv_pflegede_contact', 'pflegede_handle_contact_form' );

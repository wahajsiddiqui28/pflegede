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
        wp_send_json_success( array( 'message' => __( 'Your message has been sent successfully!', 'pflegede' ) ) );
    }

    // Rate limiting — max 3 submissions per IP per hour
    $ip_key = 'pflegede_contact_' . md5( $_SERVER['REMOTE_ADDR'] ?? 'unknown' );
    $count  = (int) get_transient( $ip_key );
    if ( $count >= 3 ) {
        wp_send_json_error( array( 'message' => __( 'Too many submissions. Please try again later.', 'pflegede' ) ) );
    }
    set_transient( $ip_key, $count + 1, HOUR_IN_SECONDS );

    // Sanitize inputs (simple contact form: name, email, phone optional, message)
    $your_name = sanitize_text_field( wp_unslash( $_POST['your_name'] ?? '' ) );
    $email     = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $phone     = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
    $message   = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    // Validate required fields
    if ( empty( $your_name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => __( 'Please fill all required fields.', 'pflegede' ) ) );
    }

    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'pflegede' ) ) );
    }

    // Recipient — branded inbox (falls back to admin email)
    $to        = defined( 'PFLEGEDE_SMTP_FROM' ) ? PFLEGEDE_SMTP_FROM : get_option( 'admin_email' );
    $site_name = get_bloginfo( 'name' );

    $subject = sprintf( '[%s] Neue Kontaktanfrage von %s', $site_name, $your_name );

    $body = pflegede_contact_email_html( $your_name, $email, $phone, $message );

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $your_name . ' <' . $email . '>',
        'Cc: wahajsiddiqui2828@gmail.com',
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => __( 'Your message has been sent successfully! We will get back to you soon.', 'pflegede' ) ) );
    } else {
        wp_send_json_error( array( 'message' => __( 'Failed to send email. Please try contacting us directly.', 'pflegede' ) ) );
    }
}
add_action( 'wp_ajax_pflegede_contact',        'pflegede_handle_contact_form' );
add_action( 'wp_ajax_nopriv_pflegede_contact', 'pflegede_handle_contact_form' );

/**
 * Handler für das deutsche Kontaktformular (page-kontakt.php).
 * Gleiche Pipeline wie das Listing-Formular: AJAX + Honeypot + Rate-Limit + Branded-HTML-Mail.
 */
function pflegede_handle_kontakt_form() {
    // Verify nonce
    if ( ! isset( $_POST['pflegede_kontakt_nonce'] ) ||
         ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['pflegede_kontakt_nonce'] ) ), 'pflegede_kontakt_nonce' ) ) {
        wp_send_json_error( array( 'message' => __( 'Sicherheitsprüfung fehlgeschlagen. Bitte Seite neu laden.', 'pflegede' ) ) );
    }

    // Honeypot check — bots fill this, humans don't
    if ( ! empty( $_POST['kontakt_hp'] ) ) {
        wp_send_json_success( array( 'message' => __( 'Ihre Nachricht wurde erfolgreich gesendet!', 'pflegede' ) ) );
    }

    // Rate limiting — max 3 submissions per IP per hour (shared bucket with listing form)
    $ip_key = 'pflegede_contact_' . md5( $_SERVER['REMOTE_ADDR'] ?? 'unknown' );
    $count  = (int) get_transient( $ip_key );
    if ( $count >= 3 ) {
        wp_send_json_error( array( 'message' => __( 'Zu viele Anfragen. Bitte versuchen Sie es später erneut.', 'pflegede' ) ) );
    }
    set_transient( $ip_key, $count + 1, HOUR_IN_SECONDS );

    // Sanitize inputs
    $name    = sanitize_text_field( wp_unslash( $_POST['k_name'] ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['k_email'] ?? '' ) );
    $subject = sanitize_text_field( wp_unslash( $_POST['k_subject'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['k_message'] ?? '' ) );
    $consent = ! empty( $_POST['k_consent'] );

    // Validate required fields
    if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => __( 'Bitte füllen Sie alle Pflichtfelder aus.', 'pflegede' ) ) );
    }
    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Bitte geben Sie eine gültige E-Mail-Adresse ein.', 'pflegede' ) ) );
    }
    if ( ! $consent ) {
        wp_send_json_error( array( 'message' => __( 'Bitte stimmen Sie der Datenschutzerklärung zu.', 'pflegede' ) ) );
    }

    // Recipient — branded inbox (falls back to admin email)
    $to        = defined( 'PFLEGEDE_SMTP_FROM' ) ? PFLEGEDE_SMTP_FROM : get_option( 'admin_email' );
    $site_name = get_bloginfo( 'name' );

    $mail_subject = sprintf( '[%s] Kontaktanfrage: %s', $site_name, $subject );

    $body = pflegede_contact_email_html( $name, $email, '', $message, $subject );

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
        'Cc: wahajsiddiqui2828@gmail.com',
    );

    $sent = wp_mail( $to, $mail_subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => __( 'Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet. Wir melden uns in 1–2 Werktagen.', 'pflegede' ) ) );
    } else {
        wp_send_json_error( array( 'message' => __( 'E-Mail konnte nicht gesendet werden. Bitte kontaktieren Sie uns direkt per E-Mail.', 'pflegede' ) ) );
    }
}
add_action( 'wp_ajax_pflegede_kontakt',        'pflegede_handle_kontakt_form' );
add_action( 'wp_ajax_nopriv_pflegede_kontakt', 'pflegede_handle_kontakt_form' );

/**
 * Branded HTML email template for contact submissions.
 * Inline CSS only — email clients strip <style> blocks.
 */
function pflegede_contact_email_html( $name, $email, $phone, $message, $subject = '' ) {
    $name    = esc_html( $name );
    $email   = esc_html( $email );
    $phone   = esc_html( $phone );
    $subject = esc_html( $subject );
    $message = nl2br( esc_html( $message ) );
    $date    = esc_html( current_time( 'd.m.Y H:i' ) );
    $ip      = esc_html( $_SERVER['REMOTE_ADDR'] ?? 'unknown' );
    $site    = esc_url( home_url( '/' ) );

    $phone_row = '';
    if ( ! empty( $phone ) ) {
        $phone_row = '
            <tr>
                <td style="padding:10px 16px;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#6B7B74;border-bottom:1px solid #EBF3EE;width:120px;">Telefon</td>
                <td style="padding:10px 16px;font-size:14px;color:#0F1F1A;border-bottom:1px solid #EBF3EE;"><a href="tel:' . $phone . '" style="color:#0a5743;text-decoration:none;font-weight:600;">' . $phone . '</a></td>
            </tr>';
    }

    $subject_row = '';
    if ( ! empty( $subject ) ) {
        $subject_row = '
            <tr>
                <td style="padding:10px 16px;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#6B7B74;border-bottom:1px solid #EBF3EE;width:120px;">Betreff</td>
                <td style="padding:10px 16px;font-size:14px;color:#0F1F1A;border-bottom:1px solid #EBF3EE;font-weight:600;">' . $subject . '</td>
            </tr>';
    }

    return '<!DOCTYPE html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"></head>
<body style="margin:0;padding:0;background-color:#F4FAF7;font-family:Arial,Helvetica,sans-serif;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#F4FAF7;padding:32px 16px;">
<tr><td align="center">

    <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:16px;overflow:hidden;box-shadow:0 8px 30px rgba(10,87,67,0.12);">

        <!-- Header -->
        <tr>
            <td style="background:linear-gradient(135deg,#0a5743 0%,#073d2f 100%);background-color:#0a5743;padding:28px 32px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <div style="font-size:24px;font-weight:800;color:#ffffff;letter-spacing:-0.5px;">pflege<span style="color:#8FD4BC;">.de</span></div>
                            <div style="font-size:10px;font-weight:700;color:#8FD4BC;text-transform:uppercase;letter-spacing:2px;margin-top:4px;">Ihr Pflegeportal</div>
                        </td>
                        <td align="right">
                            <div style="display:inline-block;background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.25);border-radius:20px;padding:6px 14px;font-size:11px;font-weight:700;color:#ffffff;text-transform:uppercase;letter-spacing:1px;">Neue Anfrage</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Intro -->
        <tr>
            <td style="padding:28px 32px 8px;">
                <h1 style="margin:0 0 6px;font-size:20px;font-weight:800;color:#0F1F1A;">📩 Neue Kontaktanfrage</h1>
                <p style="margin:0;font-size:14px;color:#6B7B74;line-height:1.6;">Jemand hat das Kontaktformular auf Ihrer Website ausgefüllt. Hier sind die Details:</p>
            </td>
        </tr>

        <!-- Contact details table -->
        <tr>
            <td style="padding:20px 32px 8px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #DCEAE3;border-radius:12px;overflow:hidden;">
                    <tr>
                        <td colspan="2" style="background:#EAF5F0;padding:10px 16px;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:1.5px;color:#0a5743;">Kontaktdaten</td>
                    </tr>
                    <tr>
                        <td style="padding:10px 16px;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#6B7B74;border-bottom:1px solid #EBF3EE;width:120px;">Name</td>
                        <td style="padding:10px 16px;font-size:14px;color:#0F1F1A;border-bottom:1px solid #EBF3EE;font-weight:600;">' . $name . '</td>
                    </tr>
                    <tr>
                        <td style="padding:10px 16px;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#6B7B74;border-bottom:1px solid #EBF3EE;width:120px;">E-Mail</td>
                        <td style="padding:10px 16px;font-size:14px;border-bottom:1px solid #EBF3EE;"><a href="mailto:' . $email . '" style="color:#0a5743;text-decoration:none;font-weight:600;">' . $email . '</a></td>
                    </tr>' . $phone_row . $subject_row . '
                </table>
            </td>
        </tr>

        <!-- Message -->
        <tr>
            <td style="padding:16px 32px 8px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #DCEAE3;border-radius:12px;overflow:hidden;">
                    <tr>
                        <td style="background:#EAF5F0;padding:10px 16px;font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:1.5px;color:#0a5743;">Nachricht</td>
                    </tr>
                    <tr>
                        <td style="padding:18px 16px;font-size:14px;color:#0F1F1A;line-height:1.7;">' . $message . '</td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Reply button -->
        <tr>
            <td style="padding:20px 32px 28px;" align="center">
                <a href="mailto:' . $email . '" style="display:inline-block;background:#0a5743;color:#ffffff;font-size:14px;font-weight:700;text-decoration:none;padding:13px 36px;border-radius:10px;">Direkt antworten →</a>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background:#062418;padding:18px 32px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="font-size:11px;color:rgba(255,255,255,0.55);line-height:1.6;">
                            Gesendet am ' . $date . ' Uhr &nbsp;·&nbsp; IP: ' . $ip . '<br>
                            <a href="' . $site . '" style="color:#8FD4BC;text-decoration:none;">pflegede.com</a> — Pflege in Deutschland
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>

</td></tr>
</table>
</body>
</html>';
}

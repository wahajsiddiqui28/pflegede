<?php
/**
 * Pflegede — SMTP Mail Configuration (no plugin needed)
 * ─────────────────────────────────────────────────────
 * Routes ALL wp_mail() through the pflegede.com mailbox via
 * the `phpmailer_init` hook. Credentials live in wp-config.php
 * (PFLEGEDE_SMTP_* constants) — never hardcode them here.
 *
 * @package pflegede
 */

defined( 'ABSPATH' ) || exit;

/**
 * Configure PHPMailer to use SMTP when constants are defined.
 */
function pflegede_smtp_init( $phpmailer ) {
    if ( ! defined( 'PFLEGEDE_SMTP_HOST' ) || ! defined( 'PFLEGEDE_SMTP_USER' ) || ! defined( 'PFLEGEDE_SMTP_PASS' ) ) {
        return; // constants missing — fall back to PHP mail()
    }

    // phpcs:disable WordPress.NamingConventions.ValidVariableName
    $phpmailer->isSMTP();
    $phpmailer->Host       = PFLEGEDE_SMTP_HOST;
    $phpmailer->Port       = defined( 'PFLEGEDE_SMTP_PORT' ) ? (int) PFLEGEDE_SMTP_PORT : 465;
    $phpmailer->SMTPSecure = defined( 'PFLEGEDE_SMTP_SECURE' ) ? PFLEGEDE_SMTP_SECURE : 'ssl';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Username   = PFLEGEDE_SMTP_USER;
    $phpmailer->Password   = PFLEGEDE_SMTP_PASS;

    // Force the From identity — most SMTP servers reject mismatched senders
    if ( defined( 'PFLEGEDE_SMTP_FROM' ) ) {
        $from_name = defined( 'PFLEGEDE_SMTP_FROM_NAME' ) ? PFLEGEDE_SMTP_FROM_NAME : '';
        $phpmailer->setFrom( PFLEGEDE_SMTP_FROM, $from_name, false );
        $phpmailer->Sender = PFLEGEDE_SMTP_FROM; // envelope sender (Return-Path)
    }
    // phpcs:enable
}
add_action( 'phpmailer_init', 'pflegede_smtp_init' );

/**
 * Keep WP's default From headers consistent with the SMTP identity.
 */
function pflegede_mail_from( $email ) {
    return defined( 'PFLEGEDE_SMTP_FROM' ) ? PFLEGEDE_SMTP_FROM : $email;
}
add_filter( 'wp_mail_from', 'pflegede_mail_from' );

function pflegede_mail_from_name( $name ) {
    return defined( 'PFLEGEDE_SMTP_FROM_NAME' ) ? PFLEGEDE_SMTP_FROM_NAME : $name;
}
add_filter( 'wp_mail_from_name', 'pflegede_mail_from_name' );

<?php
defined( 'ABSPATH' ) || exit;

// ─── Remove WordPress version from all outputs ───────────────────────────────
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// ─── Remove version strings from scripts and styles ──────────────────────────
function pflegede_remove_version_strings( $src ) {
    if ( strpos( $src, '?ver=' ) !== false ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src',  'pflegede_remove_version_strings' );
add_filter( 'script_loader_src', 'pflegede_remove_version_strings' );

// ─── Disable XML-RPC completely ───────────────────────────────────────────────
add_filter( 'xmlrpc_enabled', '__return_false' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

// ─── Remove unnecessary head tags ─────────────────────────────────────────────
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

// ─── Disable file editing from admin dashboard ────────────────────────────────
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
    define( 'DISALLOW_FILE_EDIT', true );
}

// ─── Hide login error details ─────────────────────────────────────────────────
add_filter( 'login_errors', function() {
    return __( 'Incorrect username or password.', 'pflegede' );
} );

// ─── Disable author enumeration via ?author=N ────────────────────────────────
function pflegede_block_author_enum() {
    if ( ! is_admin() && isset( $_GET['author'] ) ) {
        wp_die( esc_html__( 'Access denied.', 'pflegede' ), '', array( 'response' => 403 ) );
    }
}
add_action( 'init', 'pflegede_block_author_enum' );

// ─── Security HTTP headers ────────────────────────────────────────────────────
function pflegede_security_headers() {
    if ( headers_sent() ) {
        return;
    }
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1; mode=block' );
    header( 'Referrer-Policy: strict-origin-when-cross-origin' );
    header( 'Permissions-Policy: camera=(), microphone=(), geolocation=()' );
    header( "Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://maps.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; frame-src https://www.google.com; connect-src 'self';" );
}
add_action( 'send_headers', 'pflegede_security_headers' );

// ─── Disable REST API for unauthenticated users (non-critical endpoints) ──────
function pflegede_restrict_rest_api( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_not_logged_in',
            __( 'You must be logged in to use the REST API.', 'pflegede' ),
            array( 'status' => 401 )
        );
    }
    return $result;
}
add_filter( 'rest_authentication_errors', 'pflegede_restrict_rest_api' );

// ─── Prevent direct access to sensitive files via .htaccess hint ──────────────
function pflegede_no_index_on_uploads() {
    $upload_dir = wp_upload_dir();
    $htaccess   = trailingslashit( $upload_dir['basedir'] ) . '.htaccess';
    if ( ! file_exists( $htaccess ) ) {
        $rules = "Options -Indexes\n";
        $rules .= "<Files *.php>\nDeny from all\n</Files>\n";
        file_put_contents( $htaccess, $rules ); // phpcs:ignore
    }
}
add_action( 'init', 'pflegede_no_index_on_uploads' );

// ─── Limit login attempts using transients ────────────────────────────────────
function pflegede_check_login_attempts( $user, $username ) {
    if ( empty( $username ) ) {
        return $user;
    }
    $ip_key   = 'pflegede_login_attempts_' . md5( $_SERVER['REMOTE_ADDR'] ?? '' );
    $attempts = (int) get_transient( $ip_key );

    if ( $attempts >= 5 ) {
        return new WP_Error(
            'too_many_attempts',
            __( 'Too many login attempts. Please try again in 15 minutes.', 'pflegede' )
        );
    }
    return $user;
}
add_filter( 'authenticate', 'pflegede_check_login_attempts', 30, 2 );

function pflegede_record_failed_login( $username ) {
    $ip_key   = 'pflegede_login_attempts_' . md5( $_SERVER['REMOTE_ADDR'] ?? '' );
    $attempts = (int) get_transient( $ip_key );
    set_transient( $ip_key, $attempts + 1, 15 * MINUTE_IN_SECONDS );
}
add_action( 'wp_login_failed', 'pflegede_record_failed_login' );

function pflegede_clear_login_attempts( $user_login ) {
    $ip_key = 'pflegede_login_attempts_' . md5( $_SERVER['REMOTE_ADDR'] ?? '' );
    delete_transient( $ip_key );
}
add_action( 'wp_login', 'pflegede_clear_login_attempts' );

// ─── Sanitize filenames on upload ─────────────────────────────────────────────
function pflegede_sanitize_filename( $filename ) {
    $info      = pathinfo( $filename );
    $ext       = isset( $info['extension'] ) ? '.' . strtolower( $info['extension'] ) : '';
    $basename  = sanitize_title( $info['filename'] );
    return $basename . $ext;
}
add_filter( 'sanitize_file_name', 'pflegede_sanitize_filename' );

// ─── Block PHP uploads ────────────────────────────────────────────────────────
function pflegede_block_php_uploads( $data, $file, $filename ) {
    $ext = strtolower( pathinfo( $filename, PATHINFO_EXTENSION ) );
    $blocked = array( 'php', 'php3', 'php4', 'php5', 'php7', 'phtml', 'phar' );
    if ( in_array( $ext, $blocked, true ) ) {
        $data['error'] = __( 'PHP file uploads are not allowed.', 'pflegede' );
    }
    return $data;
}
add_filter( 'wp_handle_upload_prefilter', function( $file ) {
    return pflegede_block_php_uploads( $file, $file['tmp_name'], $file['name'] );
} );

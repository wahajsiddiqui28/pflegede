<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>

<main role="main">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="error-404-number mb-2">404</div>
                <h1 class="fw-bold mb-3"><?php esc_html_e( 'Page Not Found', 'pflegede' ); ?></h1>
                <p class="text-muted mb-4">
                    <?php esc_html_e( 'The page you are looking for does not exist or has been moved.', 'pflegede' ); ?>
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e( 'Go to Homepage', 'pflegede' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="btn btn-outline-primary btn-lg">
                        <?php esc_html_e( 'Browse Listings', 'pflegede' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

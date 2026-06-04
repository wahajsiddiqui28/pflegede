<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: About Page
 */
get_header();
?>

<main role="main">

    <section class="about-hero">
        <div class="container">
            <h1 class="fw-bold mb-2"><?php esc_html_e( 'About Pflegede', 'pflegede' ); ?></h1>
            <p class="text-muted mb-0"><?php esc_html_e( 'Your trusted directory for care services across Germany', 'pflegede' ); ?></p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <?php if ( have_posts() ) : the_post(); ?>
                    <?php if ( get_the_content() ) : ?>
                        <div class="page-content mb-5"><?php the_content(); ?></div>
                    <?php else : ?>

                    <!-- Default About Content -->
                    <div class="mb-5">
                        <h2 class="fw-bold mb-3"><?php esc_html_e( 'Who We Are', 'pflegede' ); ?></h2>
                        <p class="text-muted fs-5 lh-lg">
                            <?php esc_html_e( 'Pflegede is Germany\'s dedicated directory for care professionals and services. We connect people in need of healthcare, nursing, and caregiving services with trusted providers across the country.', 'pflegede' ); ?>
                        </p>
                    </div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="card about-feature-card h-100 border p-4 text-center">
                                <div class="about-feature-icon mb-3"><i class="bi bi-hospital"></i></div>
                                <h5 class="fw-bold"><?php esc_html_e( 'Comprehensive Directory', 'pflegede' ); ?></h5>
                                <p class="text-muted small mb-0"><?php esc_html_e( 'Find healthcare providers, nursing services, caregivers, and medical professionals all in one place.', 'pflegede' ); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card about-feature-card h-100 border p-4 text-center">
                                <div class="about-feature-icon mb-3"><i class="bi bi-patch-check"></i></div>
                                <h5 class="fw-bold"><?php esc_html_e( 'Verified Listings', 'pflegede' ); ?></h5>
                                <p class="text-muted small mb-0"><?php esc_html_e( 'Every listing is manually reviewed and added by our team to ensure quality and accuracy.', 'pflegede' ); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card about-feature-card h-100 border p-4 text-center">
                                <div class="about-feature-icon mb-3"><i class="bi bi-geo-alt"></i></div>
                                <h5 class="fw-bold"><?php esc_html_e( 'Germany Wide', 'pflegede' ); ?></h5>
                                <p class="text-muted small mb-0"><?php esc_html_e( 'Covering all major cities and regions across Germany to help you find local care services.', 'pflegede' ); ?></p>
                            </div>
                        </div>
                    </div>

                    <?php endif; ?>
                <?php endif; ?>

                <!-- CTA Card -->
                <div class="about-cta-card text-center">
                    <h3 class="fw-bold mb-3"><?php esc_html_e( 'Want to Get Listed?', 'pflegede' ); ?></h3>
                    <p class="mb-4" style="max-width:480px;margin:0 auto 24px;">
                        <?php esc_html_e( 'We are open for publications and company listings. Contact us to add your business to our directory.', 'pflegede' ); ?>
                    </p>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn about-cta-btn">
                        <?php esc_html_e( 'Contact Us', 'pflegede' ); ?>
                    </a>
                </div>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

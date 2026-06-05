<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: About Page
 */
get_header();
?>

<main role="main">

    <section class="page-hero-premium about-hero">
        <span class="page-hero-premium__blob page-hero-premium__blob--1"></span>
        <span class="page-hero-premium__blob page-hero-premium__blob--2"></span>
        <div class="container position-relative">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="page-hero-premium__eyebrow">
                        <i class="bi bi-info-circle"></i> <?php esc_html_e( 'About Us', 'pflegede' ); ?>
                    </span>
                    <h1 class="page-hero-premium__title"><?php esc_html_e( 'About', 'pflegede' ); ?> <span class="page-hero-premium__highlight">Pflegede</span></h1>
                    <p class="page-hero-premium__subtitle"><?php esc_html_e( 'Your trusted directory for verified care professionals and services across Germany.', 'pflegede' ); ?></p>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div class="page-hero-premium__icon-stack">
                        <span class="page-hero-premium__icon-stack-item"><i class="bi bi-hospital"></i></span>
                        <span class="page-hero-premium__icon-stack-item"><i class="bi bi-person-heart"></i></span>
                        <span class="page-hero-premium__icon-stack-item"><i class="bi bi-shield-check"></i></span>
                    </div>
                </div>
            </div>
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
                            <div class="about-feature-card about-feature-card--navy h-100">
                                <div class="about-feature-icon"><i class="bi bi-hospital"></i></div>
                                <h5 class="about-feature-title"><?php esc_html_e( 'Comprehensive Directory', 'pflegede' ); ?></h5>
                                <p class="about-feature-text"><?php esc_html_e( 'Find healthcare providers, nursing services, caregivers, and medical professionals all in one place.', 'pflegede' ); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-feature-card about-feature-card--red h-100">
                                <div class="about-feature-icon"><i class="bi bi-patch-check"></i></div>
                                <h5 class="about-feature-title"><?php esc_html_e( 'Verified Listings', 'pflegede' ); ?></h5>
                                <p class="about-feature-text"><?php esc_html_e( 'Every listing is manually reviewed and added by our team to ensure quality and accuracy.', 'pflegede' ); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-feature-card about-feature-card--green h-100">
                                <div class="about-feature-icon"><i class="bi bi-geo-alt"></i></div>
                                <h5 class="about-feature-title"><?php esc_html_e( 'Germany Wide', 'pflegede' ); ?></h5>
                                <p class="about-feature-text"><?php esc_html_e( 'Covering all major cities and regions across Germany to help you find local care services.', 'pflegede' ); ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Row -->
                    <div class="about-stats row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="about-stat-box">
                                <div class="about-stat-icon"><i class="bi bi-people-fill"></i></div>
                                <div class="about-stat-value">100+</div>
                                <div class="about-stat-label"><?php esc_html_e( 'Care Providers', 'pflegede' ); ?></div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-stat-box">
                                <div class="about-stat-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                <div class="about-stat-value">50+</div>
                                <div class="about-stat-label"><?php esc_html_e( 'Cities Covered', 'pflegede' ); ?></div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-stat-box">
                                <div class="about-stat-icon"><i class="bi bi-grid-fill"></i></div>
                                <div class="about-stat-value">6</div>
                                <div class="about-stat-label"><?php esc_html_e( 'Categories', 'pflegede' ); ?></div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-stat-box">
                                <div class="about-stat-icon"><i class="bi bi-shield-check"></i></div>
                                <div class="about-stat-value">100%</div>
                                <div class="about-stat-label"><?php esc_html_e( 'Verified', 'pflegede' ); ?></div>
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

<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>

<main role="main">

    <!-- ── Hero ──────────────────────────────────────────── -->
    <section class="hero-section">
        <span class="hero-blob hero-blob--1" aria-hidden="true"></span>
        <span class="hero-blob hero-blob--2" aria-hidden="true"></span>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">

                    <!-- Badges -->
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="hero-badge">
                            <span class="hero-badge__dot"></span>
                            <?php esc_html_e( 'Open for Publications', 'pflegede' ); ?>
                        </span>
                        <span class="hero-badge">
                            <span class="hero-badge__dot"></span>
                            <?php esc_html_e( 'Open for Company Listings', 'pflegede' ); ?>
                        </span>
                    </div>

                    <h1 class="hero-title mb-3">
                        <?php esc_html_e( 'Find Trusted Care Services', 'pflegede' ); ?>
                        <span class="hero-title-highlight"><?php esc_html_e( 'Across Germany', 'pflegede' ); ?></span>
                    </h1>

                    <p class="hero-subtitle mb-4">
                        <?php esc_html_e( 'Discover healthcare professionals, nursing services, and caregiving specialists. Your complete care directory.', 'pflegede' ); ?>
                    </p>

                    <!-- Search -->
                    <form class="hero-search-form mb-4" role="search" method="get" action="<?php echo esc_url( home_url( '/listings/' ) ); ?>">
                        <div class="hero-search-input-wrap flex-grow-1">
                            <svg class="search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            <input type="text" name="s" class="form-control form-control-lg hero-search-input"
                                   placeholder="<?php esc_attr_e( 'Search by name or city...', 'pflegede' ); ?>"
                                   autocomplete="off" />
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg px-4">
                            <?php esc_html_e( 'Search', 'pflegede' ); ?>
                        </button>
                    </form>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn hero-btn-primary">
                            <?php esc_html_e( 'Get Your Business Listed', 'pflegede' ); ?>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="btn hero-btn-outline">
                            <?php esc_html_e( 'Browse All Listings', 'pflegede' ); ?>
                        </a>
                    </div>

                    <!-- Stats -->
                    <?php
                    $total = wp_count_posts( 'pflegede_listing' )->publish;
                    $cats  = wp_count_terms( array( 'taxonomy' => 'pflegede_category', 'hide_empty' => true ) );
                    ?>
                    <div class="d-flex align-items-center gap-4 flex-wrap">
                        <div class="hero-stat">
                            <span class="hero-stat-number"><?php echo esc_html( $total ); ?>+</span>
                            <span class="hero-stat-label"><?php esc_html_e( 'Listings', 'pflegede' ); ?></span>
                        </div>
                        <div class="hero-stat-divider"></div>
                        <div class="hero-stat">
                            <span class="hero-stat-number"><?php echo esc_html( $cats ); ?></span>
                            <span class="hero-stat-label"><?php esc_html_e( 'Categories', 'pflegede' ); ?></span>
                        </div>
                        <div class="hero-stat-divider"></div>
                        <div class="hero-stat">
                            <span class="hero-stat-number">DE</span>
                            <span class="hero-stat-label"><?php esc_html_e( 'Germany Wide', 'pflegede' ); ?></span>
                        </div>
                    </div>

                </div>

                <!-- Hero Visual -->
                <div class="col-lg-6 d-none d-lg-block">
                    <?php
                    $hero_slides = array(
                        array( 'img' => 'care-2.jpg', 'name' => __( 'Dr. Anna Weber', 'pflegede' ), 'cat' => __( 'Healthcare', 'pflegede' ), 'city' => __( 'Berlin, Germany', 'pflegede' ), 'rating' => '4.9' ),
                        array( 'img' => 'care-1.jpg', 'name' => __( 'HomeCare Plus', 'pflegede' ),  'cat' => __( 'Elderly Care', 'pflegede' ), 'city' => __( 'Hamburg, Germany', 'pflegede' ), 'rating' => '5.0' ),
                        array( 'img' => 'care-3.jpg', 'name' => __( 'Klaus Müller Care', 'pflegede' ), 'cat' => __( 'Medical Services', 'pflegede' ), 'city' => __( 'Munich, Germany', 'pflegede' ), 'rating' => '4.8' ),
                    );
                    ?>
                    <div class="hero-visual">
                        <span class="hero-visual__backdrop" aria-hidden="true"></span>

                        <div id="heroSlider" class="carousel slide hero-slider" data-bs-ride="carousel" data-bs-interval="3500" data-bs-pause="hover">
                            <div class="carousel-indicators hero-slider__dots">
                                <?php foreach ( $hero_slides as $i => $slide ) : ?>
                                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="<?php echo (int) $i; ?>"
                                        class="<?php echo 0 === $i ? 'active' : ''; ?>"
                                        <?php echo 0 === $i ? 'aria-current="true"' : ''; ?>
                                        aria-label="<?php echo esc_attr( sprintf( __( 'Slide %d', 'pflegede' ), $i + 1 ) ); ?>"></button>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php foreach ( $hero_slides as $i => $slide ) : ?>
                                <div class="carousel-item <?php echo 0 === $i ? 'active' : ''; ?>">
                                    <div class="hero-slide">
                                        <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/' . $slide['img'] ); ?>"
                                             alt="<?php echo esc_attr( $slide['name'] ); ?>"
                                             class="hero-slide__img" loading="lazy" />
                                        <span class="hero-slide__verified"><i class="bi bi-patch-check-fill"></i> <?php esc_html_e( 'Verified', 'pflegede' ); ?></span>
                                        <div class="hero-slide__info">
                                            <span class="hero-slide__cat"><?php echo esc_html( $slide['cat'] ); ?></span>
                                            <h3 class="hero-slide__name"><?php echo esc_html( $slide['name'] ); ?></h3>
                                            <div class="hero-slide__meta">
                                                <span class="hero-slide__loc"><i class="bi bi-geo-alt-fill"></i> <?php echo esc_html( $slide['city'] ); ?></span>
                                                <span class="hero-slide__rating"><i class="bi bi-star-fill"></i> <?php echo esc_html( $slide['rating'] ); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Floating chip -->
                        <div class="hero-visual__chip">
                            <i class="bi bi-star-fill"></i>
                            <?php esc_html_e( 'Featured Listings', 'pflegede' ); ?>
                        </div>
                        <!-- Floating stat badge -->
                        <div class="hero-visual__badge">
                            <span class="hero-visual__badge-icon"><i class="bi bi-shield-check"></i></span>
                            <div class="hero-visual__badge-body">
                                <strong><?php esc_html_e( 'Trusted & Verified', 'pflegede' ); ?></strong>
                                <span><?php esc_html_e( 'Hand-reviewed providers', 'pflegede' ); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ── Categories ────────────────────────────────────── -->
    <section class="categories-section">
        <div class="container">
            <div class="section-head text-center mb-5">
                <span class="section-eyebrow"><?php esc_html_e( 'Categories', 'pflegede' ); ?></span>
                <h2 class="section-title mb-2"><?php esc_html_e( 'Browse by Category', 'pflegede' ); ?></h2>
                <p class="section-subtitle mb-0"><?php esc_html_e( 'Find the right care services in your area', 'pflegede' ); ?></p>
            </div>
            <?php
            $categories = get_terms( array( 'taxonomy' => 'pflegede_category', 'hide_empty' => false ) );
            if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) :
            ?>
            <div class="row g-3">
                <?php foreach ( $categories as $cat ) : ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="category-card">
                        <span class="category-card__icon"><?php echo pflegede_get_category_icon( $cat->slug ); ?></span>
                        <span class="category-card__name"><?php echo esc_html( $cat->name ); ?></span>
                        <span class="category-card__count"><?php echo esc_html( $cat->count ); ?> <?php esc_html_e( 'listings', 'pflegede' ); ?></span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- ── Featured Listings ─────────────────────────────── -->
    <?php
    $featured_q = new WP_Query( array(
        'post_type'      => 'pflegede_listing',
        'post_status'    => 'publish',
        'posts_per_page' => 3,
        'no_found_rows'  => true,
        'meta_query'     => array( array( 'key' => '_pflegede_featured', 'value' => '1' ) ),
    ) );
    if ( $featured_q->have_posts() ) :
    ?>
    <section class="featured-section">
        <div class="container">
            <div class="d-flex align-items-end justify-content-between mb-4">
                <div>
                    <span class="section-eyebrow section-eyebrow--accent"><?php esc_html_e( 'Handpicked', 'pflegede' ); ?></span>
                    <h2 class="section-title mb-0 d-flex align-items-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="#F59E0B"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <?php esc_html_e( 'Featured Listings', 'pflegede' ); ?>
                    </h2>
                </div>
                <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="section-link"><?php esc_html_e( 'View All', 'pflegede' ); ?> &rarr;</a>
            </div>
            <div class="row g-4">
                <?php while ( $featured_q->have_posts() ) : $featured_q->the_post(); ?>
                <div class="col-md-6 col-lg-4">
                    <?php get_template_part( 'template-parts/listing-card' ); ?>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ── Latest Listings ───────────────────────────────── -->
    <?php
    $latest_q = new WP_Query( array(
        'post_type'      => 'pflegede_listing',
        'post_status'    => 'publish',
        'posts_per_page' => 9,
    ) );
    if ( $latest_q->have_posts() ) :
    ?>
    <section class="latest-section">
        <div class="container">
            <div class="d-flex align-items-end justify-content-between mb-4">
                <div>
                    <span class="section-eyebrow"><?php esc_html_e( 'Recently Added', 'pflegede' ); ?></span>
                    <h2 class="section-title mb-0"><?php esc_html_e( 'Latest Listings', 'pflegede' ); ?></h2>
                </div>
                <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="section-link"><?php esc_html_e( 'View All', 'pflegede' ); ?> &rarr;</a>
            </div>
            <div class="row g-4">
                <?php while ( $latest_q->have_posts() ) : $latest_q->the_post(); ?>
                <div class="col-md-6 col-lg-4">
                    <?php get_template_part( 'template-parts/listing-card' ); ?>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="btn btn-outline-primary btn-lg px-5">
                    <?php esc_html_e( 'Browse All Listings', 'pflegede' ); ?>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ── CTA Banner ────────────────────────────────────── -->
    <section class="cta-section">
        <div class="container text-center position-relative">
            <span class="cta-eyebrow"><?php esc_html_e( 'Grow Your Reach', 'pflegede' ); ?></span>
            <h2 class="fw-bold mb-3"><?php esc_html_e( 'Want to Get Listed?', 'pflegede' ); ?></h2>
            <p class="mb-4 mx-auto" style="max-width:540px;">
                <?php esc_html_e( 'Join our growing directory of care professionals and reach thousands of people looking for services like yours.', 'pflegede' ); ?>
            </p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-cta">
                <?php esc_html_e( 'Contact Us Now', 'pflegede' ); ?>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<?php
defined( 'ABSPATH' ) || exit;
get_header();

$search_term = isset( $_GET['s'] )    ? sanitize_text_field( wp_unslash( $_GET['s'] ) )    : '';
$filter_cat  = isset( $_GET['cat'] )  ? sanitize_text_field( wp_unslash( $_GET['cat'] ) )  : '';
$filter_city = isset( $_GET['city'] ) ? sanitize_text_field( wp_unslash( $_GET['city'] ) ) : '';

$query_args = array(
    'post_type'      => 'pflegede_listing',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'paged'          => max( 1, get_query_var( 'paged' ) ),
);
if ( $search_term ) $query_args['s'] = $search_term;
if ( $filter_cat )  $query_args['tax_query'] = array( array( 'taxonomy' => 'pflegede_category', 'field' => 'slug', 'terms' => $filter_cat ) );
if ( $filter_city ) $query_args['meta_query'] = array( array( 'key' => '_pflegede_city', 'value' => $filter_city, 'compare' => 'LIKE' ) );

$listings_query = new WP_Query( $query_args );
$all_categories = get_terms( array( 'taxonomy' => 'pflegede_category', 'hide_empty' => false ) );
$all_cities     = pflegede_get_all_cities();
?>

<main role="main">

    <!-- Hero -->
    <?php
    $total_listings = wp_count_posts( 'pflegede_listing' )->publish;
    $total_cats     = is_wp_error( $all_categories ) ? 0 : count( $all_categories );
    $total_cities   = is_array( $all_cities ) ? count( $all_cities ) : 0;
    ?>
    <section class="page-hero-premium listings-page-hero">
        <span class="page-hero-premium__blob page-hero-premium__blob--1"></span>
        <span class="page-hero-premium__blob page-hero-premium__blob--2"></span>
        <div class="container position-relative">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="page-hero-premium__eyebrow">
                        <i class="bi bi-list-ul"></i> <?php esc_html_e( 'Directory', 'pflegede' ); ?>
                    </span>
                    <h1 class="page-hero-premium__title"><?php esc_html_e( 'Browse All', 'pflegede' ); ?> <span class="page-hero-premium__highlight"><?php esc_html_e( 'Listings', 'pflegede' ); ?></span></h1>
                    <p class="page-hero-premium__subtitle"><?php esc_html_e( 'Discover trusted care services and professionals across Germany. Filter by category or city.', 'pflegede' ); ?></p>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="page-hero-premium__mini-stats">
                        <div class="mini-stat">
                            <div class="mini-stat__value"><?php echo esc_html( $total_listings ); ?>+</div>
                            <div class="mini-stat__label"><?php esc_html_e( 'Listings', 'pflegede' ); ?></div>
                        </div>
                        <div class="mini-stat">
                            <div class="mini-stat__value"><?php echo esc_html( $total_cats ); ?></div>
                            <div class="mini-stat__label"><?php esc_html_e( 'Categories', 'pflegede' ); ?></div>
                        </div>
                        <div class="mini-stat">
                            <div class="mini-stat__value"><?php echo esc_html( $total_cities ); ?>+</div>
                            <div class="mini-stat__label"><?php esc_html_e( 'Cities', 'pflegede' ); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">

        <!-- Filter Bar -->
        <div class="filter-bar-premium mb-4">
            <div class="filter-bar-premium__head">
                <span class="filter-bar-premium__eyebrow"><i class="bi bi-funnel-fill"></i> <?php esc_html_e( 'Filter Listings', 'pflegede' ); ?></span>
            </div>
            <form class="filter-bar-premium__grid" method="get" action="<?php echo esc_url( home_url( '/listings/' ) ); ?>" role="search">

                <div class="filter-field filter-field--search">
                    <label class="filter-field__label"><?php esc_html_e( 'Search', 'pflegede' ); ?></label>
                    <div class="filter-field__control">
                        <i class="bi bi-search filter-field__icon"></i>
                        <input type="text" name="s" value="<?php echo esc_attr( $search_term ); ?>"
                               class="filter-field__input"
                               placeholder="<?php esc_attr_e( 'Search by name or keyword...', 'pflegede' ); ?>"
                               autocomplete="off" />
                    </div>
                </div>

                <div class="filter-field">
                    <label class="filter-field__label"><?php esc_html_e( 'Category', 'pflegede' ); ?></label>
                    <div class="filter-field__control">
                        <i class="bi bi-grid-fill filter-field__icon"></i>
                        <select name="cat" class="filter-field__input filter-field__select" aria-label="<?php esc_attr_e( 'Filter by category', 'pflegede' ); ?>">
                            <option value=""><?php esc_html_e( 'All Categories', 'pflegede' ); ?></option>
                            <?php foreach ( $all_categories as $cat ) : ?>
                                <option value="<?php echo esc_attr( $cat->slug ); ?>" <?php selected( $filter_cat, $cat->slug ); ?>>
                                    <?php echo esc_html( $cat->name ); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <?php if ( ! empty( $all_cities ) ) : ?>
                <div class="filter-field">
                    <label class="filter-field__label"><?php esc_html_e( 'City', 'pflegede' ); ?></label>
                    <div class="filter-field__control">
                        <i class="bi bi-geo-alt-fill filter-field__icon"></i>
                        <select name="city" class="filter-field__input filter-field__select" aria-label="<?php esc_attr_e( 'Filter by city', 'pflegede' ); ?>">
                            <option value=""><?php esc_html_e( 'All Cities', 'pflegede' ); ?></option>
                            <?php foreach ( $all_cities as $city ) : ?>
                                <option value="<?php echo esc_attr( $city ); ?>" <?php selected( $filter_city, $city ); ?>>
                                    <?php echo esc_html( $city ); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <?php endif; ?>

                <div class="filter-field filter-field--actions">
                    <button type="submit" class="filter-btn-primary">
                        <i class="bi bi-search"></i> <?php esc_html_e( 'Search', 'pflegede' ); ?>
                    </button>
                    <?php if ( $search_term || $filter_cat || $filter_city ) : ?>
                        <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="filter-btn-clear">
                            <i class="bi bi-x-lg"></i> <?php esc_html_e( 'Clear', 'pflegede' ); ?>
                        </a>
                    <?php endif; ?>
                </div>

            </form>
        </div>

        <!-- Results count -->
        <?php if ( $listings_query->have_posts() ) : ?>
        <p class="text-muted small mb-3">
            <?php
            printf(
                esc_html( _n( '%s listing found', '%s listings found', $listings_query->found_posts, 'pflegede' ) ),
                '<strong>' . esc_html( number_format_i18n( $listings_query->found_posts ) ) . '</strong>'
            );
            if ( $search_term ) printf( esc_html__( ' for "%s"', 'pflegede' ), '<em>' . esc_html( $search_term ) . '</em>' );
            ?>
        </p>
        <?php endif; ?>

        <!-- Listings Grid -->
        <?php if ( $listings_query->have_posts() ) : ?>
            <div class="row g-4">
                <?php while ( $listings_query->have_posts() ) : $listings_query->the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <?php get_template_part( 'template-parts/listing-card' ); ?>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php pflegede_pagination( $listings_query ); ?>

        <?php else : ?>
            <div class="listings-empty">
                <div class="listings-empty__icon">
                    <i class="bi bi-search"></i>
                </div>
                <h4 class="listings-empty__title"><?php esc_html_e( 'No listings found', 'pflegede' ); ?></h4>
                <p class="listings-empty__text"><?php esc_html_e( 'Try adjusting your search or browse all categories.', 'pflegede' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="listings-empty__btn">
                    <i class="bi bi-arrow-left-circle"></i> <?php esc_html_e( 'View All Listings', 'pflegede' ); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>

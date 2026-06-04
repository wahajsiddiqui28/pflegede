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
    <section class="listings-page-hero">
        <div class="container">
            <h1 class="fw-bold mb-1"><?php esc_html_e( 'All Listings', 'pflegede' ); ?></h1>
            <p class="text-muted mb-0"><?php esc_html_e( 'Browse care services and professionals across Germany', 'pflegede' ); ?></p>
        </div>
    </section>

    <div class="container py-5">

        <!-- Filter Bar -->
        <div class="filter-bar mb-4">
            <form class="row g-2 align-items-center" method="get" action="<?php echo esc_url( home_url( '/listings/' ) ); ?>" role="search">

                <div class="col-12 col-md">
                    <div class="hero-search-input-wrap">
                        <svg class="search-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        <input type="text" name="s" value="<?php echo esc_attr( $search_term ); ?>"
                               class="form-control hero-search-input filter-select"
                               placeholder="<?php esc_attr_e( 'Search listings...', 'pflegede' ); ?>"
                               autocomplete="off" />
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-auto">
                    <select name="cat" class="form-select filter-select" aria-label="<?php esc_attr_e( 'Filter by category', 'pflegede' ); ?>">
                        <option value=""><?php esc_html_e( 'All Categories', 'pflegede' ); ?></option>
                        <?php foreach ( $all_categories as $cat ) : ?>
                            <option value="<?php echo esc_attr( $cat->slug ); ?>" <?php selected( $filter_cat, $cat->slug ); ?>>
                                <?php echo esc_html( $cat->name ); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <?php if ( ! empty( $all_cities ) ) : ?>
                <div class="col-12 col-sm-6 col-md-auto">
                    <select name="city" class="form-select filter-select" aria-label="<?php esc_attr_e( 'Filter by city', 'pflegede' ); ?>">
                        <option value=""><?php esc_html_e( 'All Cities', 'pflegede' ); ?></option>
                        <?php foreach ( $all_cities as $city ) : ?>
                            <option value="<?php echo esc_attr( $city ); ?>" <?php selected( $filter_city, $city ); ?>>
                                <?php echo esc_html( $city ); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php endif; ?>

                <div class="col-12 col-md-auto d-flex gap-2">
                    <button type="submit" class="btn btn-primary"><?php esc_html_e( 'Search', 'pflegede' ); ?></button>
                    <?php if ( $search_term || $filter_cat || $filter_city ) : ?>
                        <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="btn btn-outline-secondary">
                            <?php esc_html_e( 'Clear', 'pflegede' ); ?>
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
            <div class="text-center py-5">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#CBD5E1" stroke-width="1.5" class="mb-3"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <h4 class="fw-bold"><?php esc_html_e( 'No listings found', 'pflegede' ); ?></h4>
                <p class="text-muted"><?php esc_html_e( 'Try adjusting your search or browse all categories.', 'pflegede' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>" class="btn btn-outline-primary">
                    <?php esc_html_e( 'View All Listings', 'pflegede' ); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>

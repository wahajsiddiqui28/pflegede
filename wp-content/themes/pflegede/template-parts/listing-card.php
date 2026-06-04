<?php
defined( 'ABSPATH' ) || exit;
$post_id     = get_the_ID();
$phone       = pflegede_get_listing_meta( $post_id, 'phone' );
$whatsapp    = pflegede_get_listing_meta( $post_id, 'whatsapp' );
$city        = pflegede_get_listing_meta( $post_id, 'city' );
$is_featured = pflegede_is_featured( $post_id );
$type        = get_post_meta( $post_id, '_pflegede_type', true ) ?: 'company';
$type_label  = pflegede_get_type_label( $post_id );
$categories  = pflegede_get_categories( $post_id );
$excerpt     = pflegede_truncate( get_the_excerpt() ?: get_the_content(), 110 );
?>

<div class="listing-card card h-100 border <?php echo $is_featured ? 'listing-card--featured' : ''; ?>">

    <?php if ( $is_featured ) : ?>
        <div class="listing-card__featured-badge">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <?php esc_html_e( 'Featured', 'pflegede' ); ?>
        </div>
    <?php endif; ?>

    <!-- Card Image -->
    <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php echo esc_url( get_the_post_thumbnail_url( $post_id, 'medium' ) ); ?>"
             alt="<?php echo esc_attr( get_the_title() ); ?>"
             class="listing-card__img card-img-top"
             loading="lazy">
    <?php else : ?>
        <div class="listing-card__img-placeholder">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        </div>
    <?php endif; ?>

    <!-- Card Body -->
    <div class="card-body d-flex flex-column gap-2">

        <!-- Badges -->
        <div class="d-flex flex-wrap gap-1">
            <?php if ( ! empty( $categories ) ) : ?>
                <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center gap-1">
                    <?php echo pflegede_get_category_icon( $categories[0]->slug ); ?>
                    <?php echo esc_html( $categories[0]->name ); ?>
                </span>
            <?php endif; ?>
            <span class="badge rounded-pill badge-<?php echo esc_attr( $type ); ?>">
                <?php echo esc_html( $type_label ); ?>
            </span>
        </div>

        <!-- Title -->
        <h5 class="card-title mb-0">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h5>

        <!-- City -->
        <?php if ( $city ) : ?>
            <p class="listing-location mb-0">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <?php echo esc_html( $city ); ?>
            </p>
        <?php endif; ?>

        <!-- Excerpt -->
        <?php if ( $excerpt ) : ?>
            <p class="card-text small text-muted flex-grow-1"><?php echo esc_html( $excerpt ); ?></p>
        <?php endif; ?>

    </div>

    <!-- Card Footer -->
    <div class="card-footer d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div class="d-flex gap-2">
            <?php if ( $phone ) : ?>
                <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"
                   class="btn-call"
                   aria-label="<?php esc_attr_e( 'Call', 'pflegede' ); ?>">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 .01h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                    <?php esc_html_e( 'Call', 'pflegede' ); ?>
                </a>
            <?php endif; ?>
            <?php if ( $whatsapp ) : ?>
                <a href="<?php echo esc_url( pflegede_whatsapp_url( $whatsapp ) ); ?>"
                   target="_blank" rel="noopener noreferrer"
                   class="btn-whatsapp"
                   aria-label="WhatsApp">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    WhatsApp
                </a>
            <?php endif; ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">
            <?php esc_html_e( 'Details', 'pflegede' ); ?> &rarr;
        </a>
    </div>

</div>

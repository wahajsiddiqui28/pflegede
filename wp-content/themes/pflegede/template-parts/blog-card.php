<?php
/**
 * Template Part: Blog Card
 * Use inside a loop. Works on home.php, archive.php, single (related).
 */
defined( 'ABSPATH' ) || exit;

$words    = str_word_count( wp_strip_all_tags( get_the_content() ) );
$read_min = max( 1, (int) round( $words / 200 ) );
$cats     = get_the_category();
$blog_url = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' );
?>
<article class="pf-blog-card h-100">

    <div class="pf-blog-card__media">
        <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium_large', array(
                    'class' => 'pf-blog-card__img',
                    'alt'   => esc_attr( get_the_title() ),
                ) ); ?>
            <?php else : ?>
                <div class="pf-blog-card__img-placeholder">
                    <i class="bi bi-journal-richtext"></i>
                </div>
            <?php endif; ?>
        </a>
        <div class="pf-blog-card__media-overlay"></div>

        <?php if ( $cats ) : ?>
        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"
           class="pf-blog-card__cat">
            <?php echo esc_html( $cats[0]->name ); ?>
        </a>
        <?php endif; ?>
    </div>

    <div class="pf-blog-card__body">
        <h3 class="pf-blog-card__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p class="pf-blog-card__excerpt">
            <?php echo esc_html( wp_trim_words(
                get_the_excerpt() ?: wp_strip_all_tags( get_the_content() ),
                18, '…'
            ) ); ?>
        </p>
    </div>

    <div class="pf-blog-card__footer">
        <div class="pf-blog-meta pf-blog-meta--sm">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 28, '', '', array( 'class' => 'pf-blog-meta__avatar' ) ); ?>
            <div class="pf-blog-meta__text">
                <span class="pf-blog-meta__author"><?php the_author(); ?></span>
                <span class="pf-blog-meta__info">
                    <?php echo esc_html( get_the_date( 'd. M Y' ) ); ?>
                    <span class="pf-blog-meta__sep" aria-hidden="true">·</span>
                    <i class="bi bi-clock" aria-hidden="true"></i>
                    <?php echo (int) $read_min; ?>&nbsp;Min.
                </span>
            </div>
        </div>
        <a href="<?php the_permalink(); ?>"
           class="pf-blog-card__arrow"
           aria-label="<?php echo esc_attr( sprintf( '"%s" lesen', get_the_title() ) ); ?>">
            <i class="bi bi-arrow-right" aria-hidden="true"></i>
        </a>
    </div>

</article>

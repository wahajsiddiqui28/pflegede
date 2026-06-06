<?php
defined( 'ABSPATH' ) || exit;
get_header();

$paged      = max( 1, get_query_var( 'paged' ) );
$blog_url   = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' );
$all_cats   = get_categories( array( 'hide_empty' => true, 'number' => 20 ) );
$current_cat = get_query_var( 'cat' ) ? (int) get_query_var( 'cat' ) : 0;
$total_posts = wp_count_posts()->publish;
?>

<main role="main" class="pf-blog-archive">

    <!-- ═══════════════════════════════════════════════════════
         BLOG HERO
         ═══════════════════════════════════════════════════════ -->
    <section class="pf-blog-hero">
        <span class="pf-blog-hero__blob pf-blog-hero__blob--1" aria-hidden="true"></span>
        <span class="pf-blog-hero__blob pf-blog-hero__blob--2" aria-hidden="true"></span>

        <div class="container position-relative">
            <div class="row align-items-center g-4">

                <div class="col-lg-7">
                    <span class="pf-eyebrow">
                        <i class="bi bi-journal-text" aria-hidden="true"></i>
                        Ratgeber &amp; Wissen
                    </span>

                    <h1 class="pf-blog-hero__title">
                        Ihr Pflege-<span class="pf-blog-hero__highlight">Ratgeber</span>
                    </h1>

                    <p class="pf-blog-hero__sub">
                        Geprüfte Informationen zu Pflegegraden, Leistungen, Angehörigenberatung und aktuellen Gesetzesänderungen — verständlich aufbereitet von Pflegefachkräften.
                    </p>

                    <div class="pf-blog-hero__badges">
                        <span class="pf-blog-hero__badge">
                            <i class="bi bi-shield-check" aria-hidden="true"></i>
                            Medizinisch geprüft
                        </span>
                        <span class="pf-blog-hero__badge">
                            <i class="bi bi-arrow-clockwise" aria-hidden="true"></i>
                            Regelmäßig aktualisiert
                        </span>
                        <span class="pf-blog-hero__badge">
                            <i class="bi bi-mortarboard" aria-hidden="true"></i>
                            Von Fachkräften verfasst
                        </span>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-flex justify-content-end">
                    <div class="pf-blog-hero__stats-card">
                        <div class="pf-blog-hero__stat">
                            <span class="pf-blog-hero__stat-val"><?php echo (int) $total_posts; ?>+</span>
                            <span class="pf-blog-hero__stat-lbl">Ratgeber-Artikel</span>
                        </div>
                        <div class="pf-blog-hero__stat-div" aria-hidden="true"></div>
                        <div class="pf-blog-hero__stat">
                            <span class="pf-blog-hero__stat-val"><?php echo count( $all_cats ); ?></span>
                            <span class="pf-blog-hero__stat-lbl">Themenbereiche</span>
                        </div>
                        <div class="pf-blog-hero__stat-div" aria-hidden="true"></div>
                        <div class="pf-blog-hero__stat">
                            <span class="pf-blog-hero__stat-val">2025</span>
                            <span class="pf-blog-hero__stat-lbl">Aktuell</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════
         CATEGORY FILTER PILLS
         ═══════════════════════════════════════════════════════ -->
    <?php if ( ! empty( $all_cats ) ) : ?>
    <div class="pf-blog-cats">
        <div class="container">
            <div class="pf-blog-cats__scroll" role="navigation" aria-label="Kategorie-Filter">
                <a href="<?php echo esc_url( $blog_url ); ?>"
                   class="pf-blog-cats__pill<?php echo 0 === $current_cat ? ' pf-blog-cats__pill--active' : ''; ?>">
                    <i class="bi bi-grid-3x3-gap" aria-hidden="true"></i>
                    Alle Themen
                </a>
                <?php foreach ( $all_cats as $cat ) : ?>
                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>"
                   class="pf-blog-cats__pill<?php echo $current_cat === $cat->term_id ? ' pf-blog-cats__pill--active' : ''; ?>">
                    <?php echo esc_html( $cat->name ); ?>
                    <span class="pf-blog-cats__count"><?php echo (int) $cat->count; ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <!-- ═══════════════════════════════════════════════════════
         POSTS
         ═══════════════════════════════════════════════════════ -->
    <section class="pf-blog-section pf-section">
        <div class="container">

            <?php if ( have_posts() ) : ?>

                <?php
                $show_featured = ( 1 === $paged && 0 === $current_cat );

                if ( $show_featured ) :
                    the_post();
                    $feat_cats  = get_the_category();
                    $feat_words = str_word_count( wp_strip_all_tags( get_the_content() ) );
                    $feat_read  = max( 1, (int) round( $feat_words / 200 ) );
                ?>

                <!-- ── Featured Post ── -->
                <div class="pf-blog-featured">
                    <div class="pf-blog-featured__media">
                        <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large', array(
                                    'class' => 'pf-blog-featured__img',
                                    'alt'   => esc_attr( get_the_title() ),
                                ) ); ?>
                            <?php else : ?>
                                <div class="pf-blog-featured__img-placeholder">
                                    <i class="bi bi-journal-richtext" aria-hidden="true"></i>
                                </div>
                            <?php endif; ?>
                        </a>
                        <div class="pf-blog-featured__overlay" aria-hidden="true"></div>
                    </div>

                    <div class="pf-blog-featured__body">
                        <div class="pf-blog-featured__cats">
                            <?php foreach ( array_slice( $feat_cats, 0, 2 ) as $c ) : ?>
                            <a href="<?php echo esc_url( get_category_link( $c->term_id ) ); ?>"
                               class="pf-blog-badge pf-blog-badge--teal">
                                <?php echo esc_html( $c->name ); ?>
                            </a>
                            <?php endforeach; ?>
                            <span class="pf-blog-badge pf-blog-badge--star">
                                <i class="bi bi-star-fill" aria-hidden="true"></i>
                                Featured
                            </span>
                        </div>

                        <h2 class="pf-blog-featured__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="pf-blog-featured__excerpt">
                            <?php echo esc_html( wp_trim_words(
                                get_the_excerpt() ?: wp_strip_all_tags( get_the_content() ),
                                35, '…'
                            ) ); ?>
                        </p>

                        <div class="pf-blog-featured__footer">
                            <div class="pf-blog-meta">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 36, '', '', array( 'class' => 'pf-blog-meta__avatar' ) ); ?>
                                <div class="pf-blog-meta__text">
                                    <span class="pf-blog-meta__author"><?php the_author(); ?></span>
                                    <span class="pf-blog-meta__info">
                                        <i class="bi bi-calendar3" aria-hidden="true"></i>
                                        <?php echo esc_html( get_the_date( 'd. M Y' ) ); ?>
                                        <span class="pf-blog-meta__sep" aria-hidden="true">·</span>
                                        <i class="bi bi-clock" aria-hidden="true"></i>
                                        <?php echo (int) $feat_read; ?>&nbsp;Min. Lesezeit
                                    </span>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="pf-blog-featured__cta">
                                Zum Artikel
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <?php if ( have_posts() ) : ?>
                <div class="pf-blog-grid-head">
                    <h3 class="pf-blog-grid-head__title">Weitere Beiträge</h3>
                    <span class="pf-blog-grid-head__line" aria-hidden="true"></span>
                </div>
                <?php endif; ?>

                <?php endif; // show_featured ?>

                <!-- ── Posts Grid ── -->
                <?php if ( have_posts() ) : ?>
                <div class="row g-4">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <?php get_template_part( 'template-parts/blog', 'card' ); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>


            <?php else : ?>

                <!-- ── Empty State ── -->
                <div class="pf-blog-empty">
                    <div class="pf-blog-empty__icon" aria-hidden="true">
                        <i class="bi bi-journal-x"></i>
                    </div>
                    <h3 class="pf-blog-empty__title">Noch keine Artikel vorhanden</h3>
                    <p class="pf-blog-empty__text">
                        Bald finden Sie hier informative Ratgeber-Artikel rund um das Thema Pflege.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pf-blog-empty__btn">
                        <i class="bi bi-house" aria-hidden="true"></i>
                        Zur Startseite
                    </a>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>

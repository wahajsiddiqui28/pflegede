<?php
defined( 'ABSPATH' ) || exit;
get_header();

$blog_url     = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' );
$archive_title = get_the_archive_title();
$archive_desc  = get_the_archive_description();
?>

<main role="main" class="pf-blog-archive">

    <!-- ═══════════════════════════════════════════════════════
         ARCHIVE HERO
         ═══════════════════════════════════════════════════════ -->
    <section class="pf-blog-hero pf-blog-hero--archive">
        <span class="pf-blog-hero__blob pf-blog-hero__blob--1" aria-hidden="true"></span>
        <div class="container position-relative">
            <nav aria-label="Breadcrumb" class="pf-blog-archive__crumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <a href="<?php echo esc_url( $blog_url ); ?>">Ratgeber</a>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span><?php echo esc_html( strip_tags( $archive_title ) ); ?></span>
            </nav>

            <span class="pf-eyebrow">
                <i class="bi bi-folder2-open" aria-hidden="true"></i>
                Themenbereich
            </span>
            <h1 class="pf-blog-hero__title">
                <?php echo wp_kses_post( $archive_title ); ?>
            </h1>
            <?php if ( $archive_desc ) : ?>
            <p class="pf-blog-hero__sub"><?php echo wp_kses_post( $archive_desc ); ?></p>
            <?php endif; ?>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════
         POSTS GRID
         ═══════════════════════════════════════════════════════ -->
    <section class="pf-blog-section pf-section">
        <div class="container">

            <?php if ( have_posts() ) : ?>

                <div class="row g-4">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-6 col-lg-4 d-flex">
                        <?php get_template_part( 'template-parts/blog', 'card' ); ?>
                    </div>
                    <?php endwhile; ?>
                </div>

                <div class="pf-blog-pagination">
                    <?php
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => '<i class="bi bi-arrow-left" aria-hidden="true"></i> Zurück',
                        'next_text' => 'Weiter <i class="bi bi-arrow-right" aria-hidden="true"></i>',
                    ) );
                    ?>
                </div>

            <?php else : ?>
                <div class="pf-blog-empty">
                    <div class="pf-blog-empty__icon" aria-hidden="true"><i class="bi bi-journal-x"></i></div>
                    <h3 class="pf-blog-empty__title">Keine Artikel gefunden</h3>
                    <p class="pf-blog-empty__text">In diesem Themenbereich sind noch keine Artikel vorhanden.</p>
                    <a href="<?php echo esc_url( $blog_url ); ?>" class="pf-blog-empty__btn">
                        <i class="bi bi-arrow-left" aria-hidden="true"></i> Alle Artikel
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>

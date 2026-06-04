<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main class="site-main" role="main">
    <div class="container">
        <div class="page-content-wrap">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-article' ); ?>>
                    <h1 class="page-title"><?php the_title(); ?></h1>
                    <div class="page-content"><?php the_content(); ?></div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>

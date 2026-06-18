<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Ratgeber Hub
 */

add_action( 'wp_head', function() {
    echo '<title>Pflege-Ratgeber: Tipps, News und Wissen rund um die Pflege</title>' . "\n";
    echo '<meta name="description" content="Der Pflege-Ratgeber von pflegede.com: praktische Tipps, aktuelle News und verständliche Erklärungen für Betroffene und pflegende Angehörige.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/ratgeber/' ) ) . '">' . "\n";
}, 5 );

get_header();

$themen_cards = array(
    array( 'icon' => 'bi-house-heart',   'title' => 'Pflege zu Hause',       'desc' => 'Praktische Tipps für den Pflegealltag', 'slug' => '/ratgeber/pflege-zu-hause/' ),
    array( 'icon' => 'bi-emoji-frown',   'title' => 'Demenz',                'desc' => 'Verstehen, begleiten und entlasten',   'slug' => '/ratgeber/demenz/' ),
    array( 'icon' => 'bi-people',        'title' => 'Pflegende Angehörige',  'desc' => 'Unterstützung für Familien',           'slug' => '/ratgeber/pflegende-angehoerige/' ),
    array( 'icon' => 'bi-briefcase',     'title' => 'Recht & Finanzen',      'desc' => 'Kosten, Ansprüche und Vorsorge',       'slug' => '/ratgeber/recht-finanzen/' ),
);

// Get latest posts for "Aktuelle Beiträge" section
$latest_posts = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
) );
?>

<main role="main">

    <section class="pf-page-hero">
        <span class="pf-page-hero__pattern"></span>
        <div class="container">
            <div class="pf-page-hero__inner">
                <nav class="pf-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i> Startseite</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Ratgeber</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-journal-bookmark"></i> Pflege-Wissen</span>
                        <h1 class="pf-page-hero__title">Pflege-Ratgeber: <span class="pf-page-hero__title-accent">Tipps, Wissen</span><br>und News</h1>
                        <p class="pf-page-hero__desc">Willkommen im Ratgeber von pflegede.com. Hier finden Sie verständliche Artikel, praktische Tipps und aktuelle Nachrichten rund um das Thema Pflege in Deutschland.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-journal-text"></i> Verständlich erklärt</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-patch-check"></i> Fachlich geprüft</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-arrow-repeat"></i> Immer aktuell</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/ratgeber/ratgeber-banner-image.webp'); ?>" alt="Pflege-Ratgeber — Tipps und Wissen">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflegewissen 2026</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pf-page-hero__wave">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,30 C360,50 1080,0 1440,30 L1440,50 L0,50 Z"></path></svg>
        </div>
    </section>

    <div class="pf-page-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p style="font-size:1.0625rem;">Ob Sie selbst pflegen, einen Angehörigen unterstützen oder sich einfach informieren möchten: In unseren Beiträgen erklären wir die wichtigsten Themen <strong>Schritt für Schritt</strong> und immer auf dem aktuellen Stand.</p>
                        </div>
                    </div>

                    <!-- 4 Themenbereiche -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-grid text-success"></i> Unsere Ratgeber-Themen</h2>
                    <p class="pf-h-section-sub">Unsere Beiträge sind in vier große Themenbereiche gegliedert. So finden Sie schnell, was zu Ihrer Situation passt.</p>

                    <div class="pf-ratgeber-themen">
                        <?php foreach ( $themen_cards as $c ) : ?>
                            <a href="<?php echo esc_url( home_url( $c['slug'] ) ); ?>" class="pf-ratgeber-thema">
                                <div class="pf-ratgeber-thema__icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>"></i></div>
                                <h3 class="pf-ratgeber-thema__title"><?php echo esc_html( $c['title'] ); ?></h3>
                                <p class="pf-ratgeber-thema__desc"><?php echo esc_html( $c['desc'] ); ?></p>
                                <span class="pf-ratgeber-thema__cta">Mehr erfahren <i class="bi bi-arrow-right"></i></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Worüber wir schreiben split -->
                    <div class="pf-about-split mt-5">
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-pencil-square"></i> Themenvielfalt</span>
                            <h2 class="pf-about-split__title">Worüber wir schreiben</h2>
                            <p class="pf-about-split__text">Unser Ratgeber deckt alle Lebensbereiche der Pflege ab. Im Bereich <strong>Pflege zu Hause</strong> geht es um den Pflegealltag, um Hilfsmittel und um praktische Handgriffe. Der Bereich <strong>Demenz</strong> hilft Familien, mit der Erkrankung umzugehen. Für pflegende Angehörige sammeln wir Tipps zu Entlastung, Beruf und finanzieller Unterstützung. Und im Bereich <strong>Recht & Finanzen</strong> erklären wir Ansprüche, Kosten und die richtige Vorsorge.</p>
                            <p class="pf-about-split__text" style="margin-top:12px;">Wer noch ganz am Anfang steht, findet auch alles Wichtige zu <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegraden</a> und den <a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>">Leistungen der Pflegekasse</a>.</p>
                        </div>
                        <div class="pf-about-split__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/ratgeber/ratgeber-image1.webp'); ?>" alt="Ratgeber-Themenvielfalt">
                            <span class="pf-about-split__media-badge"><i class="bi bi-journal-text"></i> 4 Themenbereiche</span>
                        </div>
                    </div>

                    <!-- Fachlich geprüft -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-check text-success"></i> Immer aktuell und fachlich geprüft</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Unsere Beiträge auf pflegede.com werden <strong>sorgfältig recherchiert</strong> und von Fachleuten geprüft. Wir achten darauf, dass die Informationen korrekt und verständlich sind und dem aktuellen Stand entsprechen. Wie unsere Inhalte entstehen, lesen Sie auf unserer Seite zum <a href="<?php echo esc_url( home_url( '/redaktioneller-prozess/' ) ); ?>">redaktionellen Prozess</a>.</p>
                        </div>
                    </div>

                    <!-- Newsletter CTA -->
                    <div class="pf-newsletter-cta">
                        <div class="pf-newsletter-cta__icon"><i class="bi bi-envelope-paper-heart"></i></div>
                        <div class="pf-newsletter-cta__content">
                            <h3 class="pf-newsletter-cta__title">Keinen Beitrag mehr verpassen</h3>
                            <p class="pf-newsletter-cta__text">Mit unserem kostenlosen Newsletter bleiben Sie immer auf dem Laufenden. Sie erhalten neue Ratgeber, aktuelle Nachrichten und praktische Tipps direkt in Ihr Postfach.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>" class="pf-newsletter-cta__btn">
                            <i class="bi bi-bell"></i> Anmelden
                        </a>
                    </div>

                    <!-- Latest posts -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-journal-text text-success"></i> Aktuelle Beiträge</h2>

                    <?php if ( $latest_posts->have_posts() ) : ?>
                        <div class="pf-ratgeber-posts">
                            <?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
                                <article class="pf-ratgeber-post">
                                    <a href="<?php the_permalink(); ?>" class="pf-ratgeber-post__link">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <div class="pf-ratgeber-post__thumb">
                                                <?php the_post_thumbnail( 'medium', array( 'alt' => esc_attr( get_the_title() ) ) ); ?>
                                            </div>
                                        <?php else : ?>
                                            <div class="pf-ratgeber-post__thumb pf-ratgeber-post__thumb--placeholder">
                                                <i class="bi bi-journal-text"></i>
                                            </div>
                                        <?php endif; ?>
                                        <div class="pf-ratgeber-post__body">
                                            <div class="pf-ratgeber-post__date"><i class="bi bi-calendar3"></i> <?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></div>
                                            <h3 class="pf-ratgeber-post__title"><?php the_title(); ?></h3>
                                            <p class="pf-ratgeber-post__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '…' ) ); ?></p>
                                            <span class="pf-ratgeber-post__cta">Weiterlesen <i class="bi bi-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </article>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php else : ?>
                        <div class="pf-info-note">
                            <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                            <span>Bald finden Sie hier unsere neuesten Ratgeber-Beiträge.</span>
                        </div>
                    <?php endif; ?>

                    <!-- All posts CTA -->
                    <div class="pf-about-team-teaser mt-5">
                        <div class="pf-about-team-teaser__text">
                            <div class="pf-about-team-teaser__label"><i class="bi bi-collection"></i> Alle Beiträge</div>
                            <h3>Das gesamte Pflegewissen entdecken</h3>
                            <p>Hunderte Ratgeber, News und Erfahrungsberichte — sortiert nach Themen.</p>
                        </div>
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/blog/' ) ); ?>" class="pf-about-team-btn">
                            <i class="bi bi-arrow-right"></i> Alle Beiträge ansehen
                        </a>
                    </div>

                    <!-- Bottom Hinweis -->
                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle medizinische, rechtliche oder pflegerische Beratung.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Über uns (DE)
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Pflegede erklärt das deutsche Pflegesystem verständlich. Erfahren Sie, wer hinter den Inhalten steht und wie das Team arbeitet.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/ueber-uns/' ) ) . '">' . "\n";
}, 5 );

get_header();
?>

<main role="main">

    <!-- ── Hero ── -->
    <section class="pf-page-hero">
        <span class="pf-page-hero__pattern"></span>
        <div class="container">
            <div class="pf-page-hero__inner">
                <nav class="pf-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i> Startseite</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Über Pflegede</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-heart-pulse"></i> Wer wir sind</span>
                        <h1 class="pf-page-hero__title">Pflege <span class="pf-page-hero__title-accent">verstehen</span><br>leicht gemacht</h1>
                        <p class="pf-page-hero__desc">Verlässliche, verständliche Informationen rund um das deutsche Pflegesystem — für Betroffene, Angehörige und Fachkräfte.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-people-fill"></i> Festes Redaktionsteam</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-patch-check"></i> Vier-Augen-Prinzip</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-arrow-repeat"></i> Regelmäßige Updates</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?w=900&q=80" alt="Pflegesystem Deutschland">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-heart-fill"></i> Mit Sorgfalt erstellt</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pf-page-hero__wave">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,30 C360,50 1080,0 1440,30 L1440,50 L0,50 Z"></path></svg>
        </div>
    </section>

    <!-- ── Body ── -->
    <div class="pf-page-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Was ist Pflegede – split with image -->
                    <div class="pf-about-split">
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-info-circle"></i> Was ist Pflegede</span>
                            <h2 class="pf-about-split__title">Eine Plattform für verlässliche Pflegeinformationen</h2>
                            <p class="pf-about-split__text">Pflegede ist eine Informationsplattform rund um Pflege, Betreuung und das Gesundheitssystem in Deutschland. Wir erklären komplexe Themen wie Pflegegrade, Pflegegeld, Seniorenbetreuung und Unterstützungsangebote in verständlicher Sprache — fundiert, aktuell und nachvollziehbar.</p>
                        </div>
                        <div class="pf-about-split__media">
                            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=80" alt="Verständliche Pflegeinformationen">
                            <span class="pf-about-split__media-badge"><i class="bi bi-info-square-fill"></i> Klar erklärt</span>
                        </div>
                    </div>

                    <!-- Pillars -->
                    <div class="pf-about-feature-grid">
                        <div class="pf-about-feature">
                            <div class="pf-about-feature__icon"><i class="bi bi-book"></i></div>
                            <div class="pf-about-feature__title">Verständlich</div>
                            <p class="pf-about-feature__text">Komplexe Inhalte in klarer Sprache — ohne unnötigen Fachjargon.</p>
                        </div>
                        <div class="pf-about-feature">
                            <div class="pf-about-feature__icon"><i class="bi bi-patch-check"></i></div>
                            <div class="pf-about-feature__title">Verlässlich</div>
                            <p class="pf-about-feature__text">Quellen vom BMG, SGB XI und Pflegekassen — sorgfältig recherchiert.</p>
                        </div>
                        <div class="pf-about-feature">
                            <div class="pf-about-feature__icon"><i class="bi bi-arrow-repeat"></i></div>
                            <div class="pf-about-feature__title">Aktuell</div>
                            <p class="pf-about-feature__text">Regelmäßige Updates — alle 30 bis 90 Tage und bei Rechtsänderungen.</p>
                        </div>
                    </div>

                    <!-- Mission – reverse split -->
                    <div class="pf-about-split pf-about-split--reverse">
                        <div class="pf-about-split__media">
                            <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=900&q=80" alt="Unsere Mission">
                            <span class="pf-about-split__media-badge"><i class="bi bi-bullseye"></i> Mission</span>
                        </div>
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-compass"></i> Unsere Mission</span>
                            <h2 class="pf-about-split__title">Orientierung in einem komplexen System</h2>
                            <p class="pf-about-split__text">Beim Thema Pflege stehen viele Menschen vor einer unübersichtlichen Informationslage. Wir möchten verlässliche, gut recherchierte und leicht verständliche Inhalte bereitstellen, die bei der Orientierung im deutschen Pflegesystem helfen — ohne unverständlichen Fachjargon, ohne Werbung, ohne Interessenkonflikte.</p>
                        </div>
                    </div>

                    <!-- Team teaser -->
                    <div class="pf-about-team-teaser">
                        <div class="pf-about-team-teaser__text">
                            <div class="pf-about-team-teaser__label"><i class="bi bi-people-fill"></i> Das Team hinter Pflegede.com</div>
                            <h3>Das Team hinter Pflegede.com</h3>
                            <p>Jeder Beitrag ist einer benannten Person zugeordnet und wird vor der Veröffentlichung von einer zweiten Person aus der Redaktion geprüft.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/autoren/' ) ); ?>" class="pf-about-team-btn">
                            <i class="bi bi-people"></i> Team kennenlernen
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Standards quote -->
                    <div class="pf-quote-block">
                        <p class="pf-quote-block__text">„Unsere Inhalte beruhen auf offiziellen und fachlich anerkannten Quellen wie dem BMG, dem SGB XI und den Veröffentlichungen der Pflegekassen — geprüft, aktualisiert und transparent."</p>
                        <div class="pf-quote-block__author">— Pflegede.com Redaktion</div>
                    </div>

                    <!-- Disclaimer -->
                    <div class="pf-about-notice">
                        <div class="pf-about-notice__icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
                        <span><strong>Wichtiger Hinweis:</strong> Alle Inhalte dienen ausschließlich der Information und ersetzen keine professionelle medizinische, pflegerische oder rechtliche Beratung. <a href="<?php echo esc_url( home_url( '/hinweis/' ) ); ?>" style="color:#78350f;font-weight:700;">Mehr erfahren →</a></span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

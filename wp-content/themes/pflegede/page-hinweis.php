<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Hinweis / Disclaimer
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Wichtiger Hinweis: Inhalte auf Pflegede dienen nur Informationszwecken und ersetzen keine medizinische, pflegerische oder rechtliche Beratung.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/hinweis/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Hinweis & Haftung</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-shield-exclamation"></i> Wichtiger Hinweis</span>
                        <h1 class="pf-page-hero__title">Hinweis & <span class="pf-page-hero__title-accent">Haftung</span></h1>
                        <p class="pf-page-hero__desc">Informationen zu den Grenzen unserer Inhalte und zur Haftung — bitte vor der Nutzung sorgfältig lesen.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-exclamation-circle"></i> Keine medizinische Beratung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-info-circle"></i> Nur Informationszwecke</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=900&q=80" alt="Hinweis und Haftung">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-shield-fill-exclamation"></i> Bitte beachten</span>
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
                <div class="col-lg-9">

                    <!-- Main warning -->
                    <div class="pf-hinweis-alert">
                        <div class="pf-hinweis-alert__icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
                        <div>
                            <div class="pf-hinweis-alert__title">Keine medizinische Beratung</div>
                            <p class="pf-hinweis-alert__text">Die Inhalte auf Pflegede dienen ausschließlich zu allgemeinen Informationszwecken. Sie stellen <strong>keine medizinische Beratung</strong> dar und dürfen nicht für Diagnose- oder Behandlungsentscheidungen verwendet werden.</p>
                        </div>
                    </div>

                    <!-- 3 Policy cards -->
                    <div class="pf-policy-grid">
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-person-x"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Kein Beratungsersatz</div>
                                <div class="pf-policy-card__text">Wenden Sie sich an Ärzte, Pflegefachkräfte oder Behörden.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-dash-circle"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Keine Gewähr</div>
                                <div class="pf-policy-card__text">Trotz sorgfältiger Recherche keine Haftung für Inhalte.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-link-45deg"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Externe Links</div>
                                <div class="pf-policy-card__text">Keine Verantwortung für Inhalte verlinkter Seiten.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-clock-history"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Aktualität</div>
                                <div class="pf-policy-card__text">Inhalte werden regelmäßig geprüft — maßgeblich sind offizielle Stellen.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Accent image -->
                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?w=1400&q=80" alt="Medizinische Fachberatung">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-heart-pulse"></i> Wenden Sie sich an Fachpersonal</span>
                            <h3 class="pf-accent-card__overlay-title">Bei individuellen Fragen sind Ärzte, Pflegefachkräfte oder Pflegekassen die richtigen Ansprechpartner.</h3>
                        </div>
                    </div>

                    <!-- Detailed sections -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">

                            <h2><i class="bi bi-person-x"></i> Kein Ersatz für professionelle Beratung</h2>
                            <p>Unsere Inhalte ersetzen keine individuelle Beratung durch Ärztinnen und Ärzte, Pflegefachkräfte, Pflegekassen oder zuständige Behörden. Bei gesundheitlichen, pflegerischen oder rechtlichen Fragen wenden Sie sich bitte an diese qualifizierten Stellen.</p>

                            <h2><i class="bi bi-dash-circle"></i> Haftungsausschluss</h2>
                            <p>Trotz sorgfältiger Recherche übernehmen wir keine Gewähr für Aktualität, Vollständigkeit und Richtigkeit unserer Inhalte. Eine Haftung für Entscheidungen auf Basis dieser Inhalte ist ausgeschlossen.</p>

                            <h2><i class="bi bi-link-45deg"></i> Externe Links</h2>
                            <p>Für Inhalte externer verlinkter Seiten übernehmen wir keine Verantwortung. Beim Bekanntwerden von Rechtsverletzungen entfernen wir entsprechende Links umgehend.</p>

                        </div>
                    </div>

                    <!-- Standard article-end block -->
                    <div class="pf-hinweis-box">
                        <div class="pf-hinweis-box__title"><i class="bi bi-quote"></i> Standard-Hinweis für Artikelseiten</div>
                        <p class="pf-hinweis-box__text">Hinweis: Diese Inhalte stellen keine medizinische Beratung dar und dürfen nicht für Diagnose- oder Behandlungsentscheidungen verwendet werden. Maßgeblich sind stets die offiziellen Stellen. Bei individuellen Fragen wenden Sie sich an Ärzte, Pflegefachkräfte, Ihre Pflegekasse oder die zuständige Behörde.</p>
                    </div>

                    <!-- Related links -->
                    <div class="pf-sidebar-card mt-4">
                        <div class="pf-sidebar-card__title"><i class="bi bi-journals"></i> Weitere rechtliche Seiten</div>
                        <ul class="pf-sidebar-links">
                            <li><a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>"><i class="bi bi-chevron-right"></i> Impressum</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>"><i class="bi bi-chevron-right"></i> Datenschutzerklärung</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/redaktionsrichtlinie/' ) ); ?>"><i class="bi bi-chevron-right"></i> Redaktionsrichtlinie</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/quellen/' ) ); ?>"><i class="bi bi-chevron-right"></i> Quellen & Transparenz</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

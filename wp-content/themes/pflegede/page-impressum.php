<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Impressum
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Rechtliche Angaben für Pflegede mit Kontakt und verantwortlicher Person gemäß deutschen Transparenz- und Impressumspflichten.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/impressum/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Impressum</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-shield-check"></i> Rechtliche Angaben</span>
                        <h1 class="pf-page-hero__title">Impressum &<br><span class="pf-page-hero__title-accent">Transparenz</span></h1>
                        <p class="pf-page-hero__desc">Rechtliche Angaben gemäß § 5 DDG (Digitale-Dienste-Gesetz) sowie Angaben zur verantwortlichen Person — vollständig und transparent.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-check2-circle"></i> § 5 DDG konform</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-check2-circle"></i> § 18 MStV</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clock-history"></i> Stand Juni 2026</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=900&q=80" alt="Rechtliche Dokumente">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-file-earmark-text"></i> Rechtliche Angaben</span>
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
            <div class="row g-5">

                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="pf-content-card">
                        <div class="pf-legal-content">

                            <h2><i class="bi bi-person-vcard"></i> Angaben gemäß § 5 DDG</h2>
                            <p><strong>Diensteanbieter:</strong><br>Tauqeer Ahmed</p>

                            <h2><i class="bi bi-envelope"></i> Kontaktdaten</h2>
                            <p><strong>E-Mail:</strong> <a href="mailto:info@pflegede.com">info@pflegede.com</a></p>

                            <h2><i class="bi bi-person-check"></i> Verantwortlich für den Inhalt</h2>
                            <p>Verantwortlich gemäß § 18 Abs. 2 MStV:<br><strong>Tauqeer Ahmed</strong></p>

                        </div>
                    </div>

                    <!-- Accent image card mid-page -->
                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1400&q=80" alt="Berlin Reichstag — Deutschland">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-geo-alt-fill"></i> Standort Deutschland</span>
                            <h3 class="pf-accent-card__overlay-title">Pflegede unterliegt deutschem Recht und den Vorgaben der DSGVO.</h3>
                        </div>
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">

                            <h2><i class="bi bi-chat-square-dots"></i> Verbraucherstreitbeilegung</h2>
                            <p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

                            <h2><i class="bi bi-link-45deg"></i> Haftung für Inhalte und Links</h2>
                            <p>Als Diensteanbieter sind wir für eigene Inhalte nach den allgemeinen Gesetzen verantwortlich. Für Inhalte externer Links übernehmen wir keine Gewähr; dafür ist der jeweilige Anbieter verantwortlich. Bei Bekanntwerden von Rechtsverletzungen entfernen wir entsprechende Links umgehend.</p>

                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="pf-legal-sidebar">

                        <div class="pf-sidebar-card pf-sidebar-card--accent">
                            <div class="pf-sidebar-card__title"><i class="bi bi-info-circle"></i> Auf einen Blick</div>
                            <div class="pf-sidebar-meta-row">
                                <div class="pf-sidebar-meta-item">
                                    <div class="pf-sidebar-meta-icon"><i class="bi bi-calendar3"></i></div>
                                    <div>
                                        <span class="pf-sidebar-meta-label">Stand</span>
                                        <span class="pf-sidebar-meta-value">Juni 2026</span>
                                    </div>
                                </div>
                                <div class="pf-sidebar-meta-item">
                                    <div class="pf-sidebar-meta-icon"><i class="bi bi-geo-alt"></i></div>
                                    <div>
                                        <span class="pf-sidebar-meta-label">Rechtsraum</span>
                                        <span class="pf-sidebar-meta-value">Deutschland</span>
                                    </div>
                                </div>
                                <div class="pf-sidebar-meta-item">
                                    <div class="pf-sidebar-meta-icon"><i class="bi bi-envelope"></i></div>
                                    <div>
                                        <span class="pf-sidebar-meta-label">Kontakt</span>
                                        <span class="pf-sidebar-meta-value">info@pflegede.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pf-sidebar-card">
                            <div class="pf-sidebar-card__title"><i class="bi bi-journals"></i> Rechtliche Seiten</div>
                            <ul class="pf-sidebar-links">
                                <li><a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>"><i class="bi bi-chevron-right"></i> Datenschutzerklärung</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/cookie-richtlinie/' ) ); ?>"><i class="bi bi-chevron-right"></i> Cookie-Richtlinie</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/hinweis/' ) ); ?>"><i class="bi bi-chevron-right"></i> Hinweis & Haftung</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"><i class="bi bi-chevron-right"></i> Kontakt</a></li>
                            </ul>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

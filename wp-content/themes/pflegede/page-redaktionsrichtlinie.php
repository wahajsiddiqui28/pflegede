<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Redaktionsrichtlinie
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Wie Inhalte bei Pflegede recherchiert, geprüft, aktualisiert und korrigiert werden – transparent und nachvollziehbar.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/redaktionsrichtlinie/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Redaktionsrichtlinie</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-journal-check"></i> Transparenz & Standards</span>
                        <h1 class="pf-page-hero__title">Unsere <span class="pf-page-hero__title-accent">Standards</span></h1>
                        <p class="pf-page-hero__desc">Die Grundsätze unserer redaktionellen Arbeit — von der Quellennutzung bis zur Aktualisierung und Korrektur. Vollständig transparent.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-book"></i> Anerkannte Quellen</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-eye"></i> Vier-Augen-Prinzip</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-arrow-repeat"></i> 30–90 Tage Updates</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?w=900&q=80" alt="Redaktionelle Standards">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-pen-fill"></i> Sorgfältig recherchiert</span>
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

                <div class="col-lg-8">

                    <!-- Intro note -->
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span>Diese Richtlinie beschreibt die Grundsätze unserer Arbeit. <strong>Transparenz</strong> über unsere Arbeitsweise ist uns wichtig.</span>
                    </div>

                    <!-- 4 Pillar cards -->
                    <div class="pf-policy-grid">
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-search"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Verlässliche Quellen</div>
                                <div class="pf-policy-card__text">BMG, SGB XI, Pflegekassen und Fachgesellschaften.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-arrow-repeat"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Regelmäßige Updates</div>
                                <div class="pf-policy-card__text">Überprüfung alle 30–90 Tage und bei Änderungen.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-patch-check"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Vier-Augen-Prinzip</div>
                                <div class="pf-policy-card__text">Jeder Beitrag wird vor Veröffentlichung geprüft.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-megaphone"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Trennung von Werbung</div>
                                <div class="pf-policy-card__text">Werbung wird gekennzeichnet, Redaktion bleibt unabhängig.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Accent image -->
                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?w=1400&q=80" alt="Fachliche Recherche">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-bookmark-star-fill"></i> Auf solider Grundlage</span>
                            <h3 class="pf-accent-card__overlay-title">Jeder Beitrag stützt sich auf nachvollziehbare, anerkannte Quellen — kein Hörensagen.</h3>
                        </div>
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">

                            <h2><i class="bi bi-book"></i> Verlässliche Quellen</h2>
                            <p>Wir stützen Inhalte auf nachvollziehbare, anerkannte Quellen:</p>
                            <ul>
                                <li>Bundesministerium für Gesundheit (BMG)</li>
                                <li>Gesetzliche Pflege- und Krankenkassen sowie der GKV-Spitzenverband</li>
                                <li>Gesetzestexte (insbesondere SGB XI) und amtliche Veröffentlichungen</li>
                                <li>Anerkannte Fachgesellschaften und geprüfte Fachliteratur</li>
                            </ul>

                            <h2><i class="bi bi-shield-x"></i> Grenzen unserer Inhalte</h2>
                            <p>Pflege- und Gesundheitsthemen können erhebliche Auswirkungen auf das Leben haben. Daher gelten ausdrücklich folgende Grenzen:</p>
                            <ul>
                                <li>Keine medizinische Diagnose oder Behandlungsempfehlung.</li>
                                <li>Keine Gewähr für Vollständigkeit und Richtigkeit; maßgeblich sind offizielle Stellen.</li>
                                <li>Kein Ersatz für individuelle Beratung durch Fachpersonal.</li>
                            </ul>

                            <h2><i class="bi bi-calendar-check"></i> Genauigkeit und Aktualität</h2>
                            <p>Wir überprüfen unsere Inhalte regelmäßig — in der Regel alle 30 bis 90 Tage — sowie unmittelbar, sobald sich die Rechtslage oder maßgebliche Beträge (z. B. Pflegegeld) ändern. Jeder Artikel trägt ein sichtbares Datum der letzten Aktualisierung.</p>

                            <h2><i class="bi bi-pencil-square"></i> Korrekturen</h2>
                            <p>Fehler korrigieren wir transparent. Hinweise nehmen wir unter <a href="mailto:info@pflegede.com">info@pflegede.com</a> entgegen und passen Inhalte bei Bedarf an.</p>

                            <h2><i class="bi bi-bar-chart"></i> Trennung von Werbung und Inhalt</h2>
                            <p>Werbung und gesponserte Beiträge kennzeichnen wir klar (z. B. „Anzeige" oder „Sponsored"). Bezahlte Inhalte beeinflussen unsere redaktionellen Empfehlungen nicht; bezahlte Links werden mit <code>rel="sponsored"</code> ausgezeichnet.</p>

                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="pf-legal-sidebar">

                        <div class="pf-sidebar-image-card">
                            <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=600&q=80" alt="Redaktionelle Arbeit">
                            <div class="pf-sidebar-image-card__caption">
                                <div class="pf-sidebar-image-card__caption-eyebrow">Pflegede Redaktion</div>
                                <h3 class="pf-sidebar-image-card__caption-title">Sorgfältig. Geprüft. Aktuell.</h3>
                            </div>
                        </div>

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
                                    <div class="pf-sidebar-meta-icon"><i class="bi bi-arrow-repeat"></i></div>
                                    <div>
                                        <span class="pf-sidebar-meta-label">Update-Zyklus</span>
                                        <span class="pf-sidebar-meta-value">30–90 Tage</span>
                                    </div>
                                </div>
                                <div class="pf-sidebar-meta-item">
                                    <div class="pf-sidebar-meta-icon"><i class="bi bi-people"></i></div>
                                    <div>
                                        <span class="pf-sidebar-meta-label">Prüfung</span>
                                        <span class="pf-sidebar-meta-value">Vier-Augen-Prinzip</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pf-sidebar-card">
                            <div class="pf-sidebar-card__title"><i class="bi bi-journals"></i> Transparenz-Seiten</div>
                            <ul class="pf-sidebar-links">
                                <li><a href="<?php echo esc_url( home_url( '/redaktioneller-prozess/' ) ); ?>"><i class="bi bi-chevron-right"></i> Redaktioneller Prozess</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/autoren/' ) ); ?>"><i class="bi bi-chevron-right"></i> Autorinnen & Autoren</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/quellen/' ) ); ?>"><i class="bi bi-chevron-right"></i> Quellen & Transparenz</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/ueber-uns/' ) ); ?>"><i class="bi bi-chevron-right"></i> Über Pflegede</a></li>
                            </ul>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

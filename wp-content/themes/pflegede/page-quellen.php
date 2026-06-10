<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Quellen & Transparenz
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Welche Quellen Pflegede verwendet, in welcher Rangfolge, und wie wir Informationen belegen – für nachvollziehbare und verlässliche Pflegeinformationen.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/quellen/' ) ) . '">' . "\n";
}, 5 );

get_header();
?>

<main role="main">

    <section class="pf-page-hero">
        <span class="pf-page-hero__pattern"></span>
        <div class="container">
            <div class="pf-page-hero__inner">
                <nav class="pf-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i> Startseite</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Quellen & Transparenz</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-bookmark-star"></i> Nachvollziehbare Quellen</span>
                        <h1 class="pf-page-hero__title">Quellen & <span class="pf-page-hero__title-accent">Transparenz</span></h1>
                        <p class="pf-page-hero__desc">Verlässliche Informationen brauchen nachvollziehbare Quellen. Hier zeigen wir unsere Rangfolge — von amtlichen Stellen bis zu Fachmedien.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-building"></i> Amtliche Stellen</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-book"></i> SGB XI & BMG</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-mortarboard"></i> Fachliteratur</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=900&q=80" alt="Bibliothek und Quellen">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-journal-bookmark-fill"></i> Sorgfältig belegt</span>
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

                    <div class="pf-source-intro">
                        Verlässliche Informationen brauchen nachvollziehbare Quellen. Wir geben in unseren Beiträgen an, worauf sich Aussagen stützen, und verlinken nach Möglichkeit auf die <strong>Originalquelle</strong>.
                    </div>

                    <h2 class="pf-h-section"><i class="bi bi-bar-chart-steps text-success"></i> Quellenhierarchie</h2>
                    <p class="pf-h-section-sub">Bei der Auswahl und Gewichtung von Informationen folgen wir einer festen Rangfolge. Bei Widersprüchen hat die jeweils höherrangige Quelle Vorrang:</p>

                    <ul class="pf-source-list">
                        <li class="pf-source-item">
                            <div class="pf-source-rank pf-source-rank--1">01</div>
                            <div>
                                <div class="pf-source-item__title">Amtliche / staatliche Stellen <span class="pf-source-badge">Höchste Priorität</span></div>
                                <p class="pf-source-item__desc">Bundesministerium für Gesundheit (BMG) und vergleichbare amtliche Quellen.</p>
                            </div>
                        </li>
                        <li class="pf-source-item">
                            <div class="pf-source-rank pf-source-rank--2">02</div>
                            <div>
                                <div class="pf-source-item__title">Gesetzliche Grundlagen</div>
                                <p class="pf-source-item__desc">Insbesondere SGB XI und weitere amtliche Texte mit Gesetzeskraft.</p>
                            </div>
                        </li>
                        <li class="pf-source-item">
                            <div class="pf-source-rank pf-source-rank--3">03</div>
                            <div>
                                <div class="pf-source-item__title">Pflege- und Krankenkassen</div>
                                <p class="pf-source-item__desc">Sowie der GKV-Spitzenverband als zentrale Selbstverwaltungsstelle.</p>
                            </div>
                        </li>
                        <li class="pf-source-item">
                            <div class="pf-source-rank pf-source-rank--4">04</div>
                            <div>
                                <div class="pf-source-item__title">Wissenschaftliche & fachliche Quellen</div>
                                <p class="pf-source-item__desc">Fachgesellschaften und geprüfte Fachliteratur aus dem Pflege- und Gesundheitsbereich.</p>
                            </div>
                        </li>
                        <li class="pf-source-item">
                            <div class="pf-source-rank pf-source-rank--5">05</div>
                            <div>
                                <div class="pf-source-item__title">Sekundärquellen <span class="pf-source-badge" style="background:#fef3c7;color:#92400e;">Nur ergänzend</span></div>
                                <p class="pf-source-item__desc">Seriöse Fachmedien — nur als Ergänzung zu Primärquellen.</p>
                            </div>
                        </li>
                    </ul>

                    <!-- Mid accent image -->
                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1568667256549-094345857637?w=1400&q=80" alt="Akten und Recherche">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-shield-fill-check"></i> Primärquellen zuerst</span>
                            <h3 class="pf-accent-card__overlay-title">Wir prüfen aktuelle Werte direkt an der Originalquelle — nicht aus zweiter Hand.</h3>
                        </div>
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">

                            <h2><i class="bi bi-card-checklist"></i> Umgang mit Quellen</h2>
                            <p>Wir bevorzugen <strong>Primärquellen</strong>, prüfen die Aktualität besonders bei Beträgen und gesetzlichen Regelungen und kennzeichnen das Datum der letzten Aktualisierung. Hinweise auf veraltete oder fehlerhafte Angaben nehmen wir unter <a href="mailto:info@pflegede.com">info@pflegede.com</a> gern entgegen.</p>

                        </div>
                    </div>

                    <!-- Info note -->
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-lightbulb"></i></div>
                        <span>Sie haben einen Fehler entdeckt oder eine veraltete Angabe gefunden? Schreiben Sie uns — <a href="mailto:info@pflegede.com">info@pflegede.com</a> — wir prüfen Hinweise schnell und korrigieren transparent.</span>
                    </div>

                    <!-- Related links -->
                    <div class="pf-sidebar-card mt-4">
                        <div class="pf-sidebar-card__title"><i class="bi bi-journals"></i> Weitere Transparenz-Seiten</div>
                        <ul class="pf-sidebar-links">
                            <li><a href="<?php echo esc_url( home_url( '/redaktionsrichtlinie/' ) ); ?>"><i class="bi bi-chevron-right"></i> Redaktionsrichtlinie</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/redaktioneller-prozess/' ) ); ?>"><i class="bi bi-chevron-right"></i> Redaktioneller Prozess</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/autoren/' ) ); ?>"><i class="bi bi-chevron-right"></i> Autorinnen & Autoren</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/ueber-uns/' ) ); ?>"><i class="bi bi-chevron-right"></i> Über Pflegede</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

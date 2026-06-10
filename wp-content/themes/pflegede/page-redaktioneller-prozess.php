<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Redaktioneller Prozess
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Von der Themenwahl über Recherche und Prüfung bis zur Aktualisierung: der vollständige redaktionelle Prozess bei Pflegede.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/redaktioneller-prozess/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Redaktioneller Prozess</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-diagram-3"></i> So entstehen unsere Inhalte</span>
                        <h1 class="pf-page-hero__title">In <span class="pf-page-hero__title-accent">9 Schritten</span><br>zum geprüften Beitrag</h1>
                        <p class="pf-page-hero__desc">Jeder Beitrag auf Pflegede durchläuft einen festen Ablauf, der Verlässlichkeit und Verständlichkeit sicherstellt — von der Themenwahl bis zur Aktualisierung.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-list-check"></i> 9 Schritte</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-eye"></i> Doppelte Prüfung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-arrow-repeat"></i> Laufende Pflege</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=900&q=80" alt="Redaktioneller Prozess">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-pen-fill"></i> Vom Entwurf bis Online</span>
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

                    <div class="pf-process-intro">
                        <div class="pf-process-intro__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Jeder Beitrag auf Pflegede durchläuft einen festen Ablauf, der <strong>Verlässlichkeit und Verständlichkeit</strong> sicherstellt. So entsteht ein Artikel:</span>
                    </div>

                    <ol class="pf-process-list">
                        <li class="pf-process-step">
                            <div class="pf-process-num">1</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-lightbulb"></i> Themenauswahl</div>
                                <p class="pf-process-content__text">Wir wählen Themen anhand der tatsächlichen Fragen und Bedürfnisse von Menschen, die sich mit Pflege beschäftigen. Maßgeblich sind Relevanz für das deutsche Pflegesystem, häufige Suchanfragen und echte Wissenslücken — nicht reine Suchmaschinenoptimierung.</p>
                            </div>
                        </li>
                        <li class="pf-process-step">
                            <div class="pf-process-num">2</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-search"></i> Recherche</div>
                                <p class="pf-process-content__text">Die Autorin oder der Autor recherchiert auf Basis amtlicher und fachlich anerkannter Primärquellen (z. B. BMG, SGB XI, Pflegekassen). Aktuelle Werte wie Pflegegeld-Beträge oder Pflegegrade werden direkt an der Originalquelle geprüft.</p>
                            </div>
                        </li>
                        <li class="pf-process-step">
                            <div class="pf-process-num">3</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-pencil-square"></i> Erstellung des Entwurfs</div>
                                <p class="pf-process-content__text">Der Beitrag wird von einer benannten Person verfasst, klar strukturiert und in verständlicher Sprache geschrieben. Verwendete Quellen werden dokumentiert.</p>
                            </div>
                        </li>
                        <li class="pf-process-step">
                            <div class="pf-process-num">4</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-eye-fill"></i> Redaktionelle Prüfung</div>
                                <p class="pf-process-content__text">Eine zweite Person aus der Redaktion prüft den Entwurf auf inhaltliche Richtigkeit, Verständlichkeit, aktuelle Rechtslage und die korrekte Angabe der Quellen. Jeder Beitrag trägt „Geprüft von [Name]".</p>
                            </div>
                        </li>
                    </ol>

                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1400&q=80" alt="Redaktionelle Zusammenarbeit">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-people-fill"></i> Im Team</span>
                            <h3 class="pf-accent-card__overlay-title">Vier-Augen-Prinzip: Kein Beitrag erscheint ohne zweite Prüfung durch die Redaktion.</h3>
                        </div>
                    </div>

                    <ol class="pf-process-list" start="5">
                        <li class="pf-process-step">
                            <div class="pf-process-num">5</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-patch-check-fill"></i> Fachliche Prüfung</div>
                                <p class="pf-process-content__text">Wo möglich, lassen wir Beiträge zusätzlich von einer Person mit einschlägigem fachlichem Hintergrund prüfen. Solche Beiträge kennzeichnen wir mit „Fachlich geprüft von [Name]" und Datum.</p>
                            </div>
                        </li>
                        <li class="pf-process-step">
                            <div class="pf-process-num">6</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-send-fill"></i> Veröffentlichung</div>
                                <p class="pf-process-content__text">Jeder veröffentlichte Beitrag nennt die verantwortliche Autorin oder den Autor (mit Verlinkung zum Autorenprofil) sowie das Veröffentlichungsdatum.</p>
                            </div>
                        </li>
                        <li class="pf-process-step">
                            <div class="pf-process-num">7</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-arrow-clockwise"></i> Aktualisierung</div>
                                <p class="pf-process-content__text">Wir überprüfen Inhalte in der Regel alle 30 bis 90 Tage sowie unmittelbar bei rechtlichen oder finanziellen Änderungen und aktualisieren sie entsprechend. Das Datum der letzten Aktualisierung ist sichtbar.</p>
                            </div>
                        </li>
                        <li class="pf-process-step">
                            <div class="pf-process-num">8</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-chat-square-text"></i> Korrekturen und Feedback</div>
                                <p class="pf-process-content__text">Leserhinweise auf Ungenauigkeiten prüfen wir und korrigieren transparent. Sie erreichen uns unter <a href="mailto:info@pflegede.com">info@pflegede.com</a>.</p>
                            </div>
                        </li>
                        <li class="pf-process-step">
                            <div class="pf-process-num">9</div>
                            <div class="pf-process-content">
                                <div class="pf-process-content__title"><i class="bi bi-shield-check"></i> Unabhängigkeit</div>
                                <p class="pf-process-content__text">Unsere Empfehlungen sind redaktionell unabhängig. Werbung und gesponserte Inhalte werden klar gekennzeichnet und beeinflussen die redaktionelle Bewertung nicht.</p>
                            </div>
                        </li>
                    </ol>

                    <div class="pf-quote-block">
                        <p class="pf-quote-block__text">„Wir wollen nicht der schnellste Anbieter sein — sondern der zuverlässigste. Jeder Schritt unseres Prozesses dient diesem Ziel."</p>
                        <div class="pf-quote-block__author">— Tauqeer Ahmed, Redaktionsleitung</div>
                    </div>

                    <div class="pf-sidebar-card mt-4">
                        <div class="pf-sidebar-card__title"><i class="bi bi-journals"></i> Weitere Transparenz-Seiten</div>
                        <ul class="pf-sidebar-links">
                            <li><a href="<?php echo esc_url( home_url( '/redaktionsrichtlinie/' ) ); ?>"><i class="bi bi-chevron-right"></i> Redaktionsrichtlinie</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/autoren/' ) ); ?>"><i class="bi bi-chevron-right"></i> Autorinnen & Autoren</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/quellen/' ) ); ?>"><i class="bi bi-chevron-right"></i> Quellen & Transparenz</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

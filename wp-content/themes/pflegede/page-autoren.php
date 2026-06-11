<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Autoren
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Das Redaktionsteam von Pflegede.com: Autorinnen, Autoren und Redaktion mit ihren Themenschwerpunkten und Verantwortlichkeiten.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/autoren/' ) ) . '">' . "\n";
}, 5 );

get_header();

$authors = array(
    array(
        'initials' => 'TA',
        'name'     => 'Tauqeer Ahmed',
        'role'     => 'Gründer & Redaktionsleitung',
        'intro'    => 'Tauqeer Ahmed ist Gründer von Pflegede.com und verantwortet die redaktionelle Ausrichtung. Er legt die inhaltlichen Standards fest, koordiniert das Team und stellt sicher, dass Beiträge auf nachvollziehbaren, offiziellen Quellen beruhen und regelmäßig aktualisiert werden.',
        'topics'   => array( 'Redaktionelle Standards', 'Qualitätssicherung', 'Pflegesystem-Überblick' ),
        'resp'     => 'Gesamtverantwortung für Inhalte, finale Freigabe vor Veröffentlichung, Pflege der Quellen- und Update-Richtlinie.',
    ),
    array(
        'initials' => 'AT',
        'name'     => 'Amna Tauqeer',
        'role'     => 'Redakteurin',
        'intro'    => 'Amna Tauqeer prüft Beiträge vor der Veröffentlichung auf Verständlichkeit, Genauigkeit und aktuelle Rechtslage und betreut die laufende Aktualisierung bestehender Artikel.',
        'topics'   => array( 'Redaktion & Lektorat', 'Aktualisierung', 'Pflegegrade & Antragsverfahren' ),
        'resp'     => 'Gegenlesen und Freigabe von Beiträgen („Geprüft von"), Überwachung des Aktualisierungszyklus.',
    ),
    array(
        'initials' => 'HA',
        'name'     => 'Hassan Abid',
        'role'     => 'Autor',
        'intro'    => 'Hassan Abid schreibt für Pflegede.com verständliche Ratgeber rund um Pflegeleistungen und Finanzierung. Er recherchiert auf Basis amtlicher Quellen wie dem SGB XI und den Veröffentlichungen der Pflegekassen.',
        'topics'   => array( 'Pflegegeld & Leistungen', 'Finanzierung', 'Anträge & Fristen' ),
        'resp'     => 'Recherche und Erstellung von Beiträgen in seinem Themenbereich, Dokumentation der Quellen.',
    ),
    array(
        'initials' => 'MA',
        'name'     => 'Maaz Ahmed',
        'role'     => 'Autor',
        'intro'    => 'Maaz Ahmed verfasst für Pflegede.com Beiträge zu häuslicher Pflege und zur Situation pflegender Angehöriger. Sein Ziel ist es, komplexe Abläufe in alltagsnaher Sprache zu erklären.',
        'topics'   => array( 'Häusliche Pflege', 'Angehörige', 'Pflegehilfsmittel' ),
        'resp'     => 'Recherche und Erstellung von Beiträgen in seinem Themenbereich, Dokumentation der Quellen.',
    ),
);
?>

<main role="main">

    <section class="pf-page-hero">
        <span class="pf-page-hero__pattern"></span>
        <div class="container">
            <div class="pf-page-hero__inner">
                <nav class="pf-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i> Startseite</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Autorinnen & Autoren</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-people-fill"></i> Das Team hinter Pflegede.com</span>
                        <h1 class="pf-page-hero__title">Unsere <span class="pf-page-hero__title-accent">Autorinnen</span><br>& Autoren</h1>
                        <p class="pf-page-hero__desc">Ein festes Redaktionsteam mit klaren Zuständigkeiten — jeder Beitrag ist einer Person zugeordnet und wird vor Veröffentlichung geprüft.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-people"></i> 4 Teammitglieder</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-check2-circle"></i> Namentlich benannt</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-eye"></i> Geprüft & freigegeben</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900&q=80" alt="Pflegede.com Redaktionsteam">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-people-fill"></i> Pflegede.com Redaktion</span>
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

            <!-- Stats -->
            <div class="pf-authors-hero-stats">
                <div class="pf-authors-stat">
                    <div class="pf-authors-stat__icon"><i class="bi bi-people"></i></div>
                    <div class="pf-authors-stat__value">4</div>
                    <div class="pf-authors-stat__label">Teammitglieder</div>
                </div>
                <div class="pf-authors-stat">
                    <div class="pf-authors-stat__icon"><i class="bi bi-person-check"></i></div>
                    <div class="pf-authors-stat__value">2</div>
                    <div class="pf-authors-stat__label">Redakteure</div>
                </div>
                <div class="pf-authors-stat">
                    <div class="pf-authors-stat__icon"><i class="bi bi-pencil"></i></div>
                    <div class="pf-authors-stat__value">2</div>
                    <div class="pf-authors-stat__label">Autoren</div>
                </div>
                <div class="pf-authors-stat">
                    <div class="pf-authors-stat__icon"><i class="bi bi-patch-check"></i></div>
                    <div class="pf-authors-stat__value">100%</div>
                    <div class="pf-authors-stat__label">Geprüft</div>
                </div>
            </div>

            <!-- Intro -->
            <div class="pf-authors-intro">
                <div class="pf-authors-intro__icon"><i class="bi bi-info-circle"></i></div>
                <span>Hinter Pflegede.com steht ein festes Team. Jeder Beitrag ist einer dieser Personen zugeordnet und wird vor der Veröffentlichung von einer zweiten Person aus der Redaktion <strong>geprüft</strong> („Geprüft von").</span>
            </div>

            <!-- First 2 Authors -->
            <div class="pf-authors-grid">
                <?php foreach ( array_slice( $authors, 0, 2 ) as $a ) : ?>
                    <div class="pf-author-card">
                        <div class="pf-author-card__top">
                            <div class="pf-author-avatar"><?php echo esc_html( $a['initials'] ); ?></div>
                            <div>
                                <div class="pf-author-card__name"><?php echo esc_html( $a['name'] ); ?></div>
                                <span class="pf-author-card__role"><i class="bi bi-star-fill"></i> <?php echo esc_html( $a['role'] ); ?></span>
                            </div>
                        </div>
                        <div class="pf-author-card__body">
                            <div class="pf-author-meta-block">
                                <div class="pf-author-meta-label"><i class="bi bi-person"></i> Über die Person</div>
                                <p class="pf-author-meta-text"><?php echo esc_html( $a['intro'] ); ?></p>
                            </div>
                            <div class="pf-author-meta-block">
                                <div class="pf-author-meta-label"><i class="bi bi-tags"></i> Schwerpunkte</div>
                                <div class="pf-author-topics">
                                    <?php foreach ( $a['topics'] as $t ) : ?>
                                        <span class="pf-author-topic"><?php echo esc_html( $t ); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="pf-author-meta-block">
                                <div class="pf-author-meta-label"><i class="bi bi-check2-square"></i> Verantwortung</div>
                                <p class="pf-author-meta-text"><?php echo esc_html( $a['resp'] ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Mid accent image -->
            <div class="pf-accent-card">
                <div class="pf-accent-card__image">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=1400&q=80" alt="Redaktion im Büro">
                </div>
                <div class="pf-accent-card__overlay">
                    <span class="pf-accent-card__overlay-label"><i class="bi bi-buildings"></i> Pflegede.com Redaktion</span>
                    <h3 class="pf-accent-card__overlay-title">Klare Zuständigkeiten, namentliche Verantwortung — so arbeitet unser Team.</h3>
                </div>
            </div>

            <!-- Other Authors -->
            <div class="pf-authors-grid">
                <?php foreach ( array_slice( $authors, 2 ) as $a ) : ?>
                    <div class="pf-author-card">
                        <div class="pf-author-card__top">
                            <div class="pf-author-avatar"><?php echo esc_html( $a['initials'] ); ?></div>
                            <div>
                                <div class="pf-author-card__name"><?php echo esc_html( $a['name'] ); ?></div>
                                <span class="pf-author-card__role"><i class="bi bi-pen-fill"></i> <?php echo esc_html( $a['role'] ); ?></span>
                            </div>
                        </div>
                        <div class="pf-author-card__body">
                            <div class="pf-author-meta-block">
                                <div class="pf-author-meta-label"><i class="bi bi-person"></i> Über die Person</div>
                                <p class="pf-author-meta-text"><?php echo esc_html( $a['intro'] ); ?></p>
                            </div>
                            <div class="pf-author-meta-block">
                                <div class="pf-author-meta-label"><i class="bi bi-tags"></i> Schwerpunkte</div>
                                <div class="pf-author-topics">
                                    <?php foreach ( $a['topics'] as $t ) : ?>
                                        <span class="pf-author-topic"><?php echo esc_html( $t ); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="pf-author-meta-block">
                                <div class="pf-author-meta-label"><i class="bi bi-check2-square"></i> Verantwortung</div>
                                <p class="pf-author-meta-text"><?php echo esc_html( $a['resp'] ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Team CTA -->
            <div class="pf-about-team-teaser mt-5">
                <div class="pf-about-team-teaser__text">
                    <div class="pf-about-team-teaser__label"><i class="bi bi-journal-text"></i> Wie wir arbeiten</div>
                    <h3>Erfahren Sie mehr über unseren redaktionellen Prozess</h3>
                    <p>Von der Themenwahl bis zur Veröffentlichung — alle Schritte im Detail erklärt.</p>
                </div>
                <a href="<?php echo esc_url( home_url( '/redaktioneller-prozess/' ) ); ?>" class="pf-about-team-btn">
                    <i class="bi bi-diagram-3"></i> Prozess ansehen
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>

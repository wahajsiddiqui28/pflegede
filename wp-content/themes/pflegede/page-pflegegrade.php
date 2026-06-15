<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrade Übersicht
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Pflegegrade 1 bis 5 verständlich erklärt: Einstufung, Voraussetzungen und Leistungen nach SGB XI. Stand 2025.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/' ) ) . '">' . "\n";
}, 5 );

get_header();

$grades = array(
    array( 'num' => '1', 'name' => 'Geringe Beeinträchtigung', 'desc' => 'Geringe Beeinträchtigung der Selbstständigkeit', 'pg' => '—', 'sl' => '—', 'color' => '1' ),
    array( 'num' => '2', 'name' => 'Erhebliche Beeinträchtigung', 'desc' => 'Erhebliche Beeinträchtigung der Selbstständigkeit', 'pg' => '347', 'sl' => '796', 'color' => '2' ),
    array( 'num' => '3', 'name' => 'Schwere Beeinträchtigung', 'desc' => 'Schwere Beeinträchtigung der Selbstständigkeit', 'pg' => '599', 'sl' => '1.497', 'color' => '3' ),
    array( 'num' => '4', 'name' => 'Schwerste Beeinträchtigung', 'desc' => 'Schwerste Beeinträchtigung der Selbstständigkeit', 'pg' => '800', 'sl' => '1.859', 'color' => '4' ),
    array( 'num' => '5', 'name' => 'Höchste Stufe', 'desc' => 'Schwerste Beeinträchtigung mit besonderen Anforderungen', 'pg' => '990', 'sl' => '2.299', 'color' => '5' ),
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
                    <span class="pf-breadcrumb__current">Pflegegrade</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-clipboard2-pulse"></i> SGB XI · Stand 2025</span>
                        <h1 class="pf-page-hero__title">Pflegegrade <span class="pf-page-hero__title-accent">1 bis 5</span></h1>
                        <p class="pf-page-hero__desc">Die fünf Pflegegrade entscheiden über Leistungen und Unterstützung. Hier finden Sie eine verständliche Übersicht — von Einstufung bis Pflegegeld.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-list-ol"></i> 5 Pflegegrade</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Bis 990 € Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> SGB XI konform</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&q=80" alt="Pflegegrade Einstufung">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Aktuell 2025</span>
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

                    <h2 class="pf-h-section"><i class="bi bi-bar-chart-steps text-success"></i> Die 5 Pflegegrade im Überblick</h2>
                    <p class="pf-h-section-sub">Jeder Pflegegrad steht für eine bestimmte Beeinträchtigung der Selbstständigkeit — und entsprechende monatliche Leistungen.</p>

                    <ul class="pf-source-list">
                        <?php foreach ( $grades as $g ) : ?>
                            <li class="pf-source-item">
                                <div class="pf-source-rank pf-source-rank--<?php echo esc_attr( $g['color'] ); ?>"><?php echo esc_html( $g['num'] ); ?></div>
                                <div>
                                    <div class="pf-source-item__title">Pflegegrad <?php echo esc_html( $g['num'] ); ?> — <?php echo esc_html( $g['name'] ); ?>
                                        <?php if ( $g['pg'] !== '—' ) : ?>
                                            <span class="pf-source-badge"><?php echo esc_html( $g['pg'] ); ?> € Pflegegeld</span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="pf-source-item__desc"><?php echo esc_html( $g['desc'] ); ?><?php if ( $g['sl'] !== '—' ) : ?> · Sachleistung bis <strong><?php echo esc_html( $g['sl'] ); ?> €</strong>/Monat<?php endif; ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=1400&q=80" alt="Pflegegrad Antrag stellen">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-file-earmark-check"></i> Antrag stellen</span>
                            <h3 class="pf-accent-card__overlay-title">Der Pflegegrad wird durch den Medizinischen Dienst (MD) festgestellt — wir erklären den Ablauf.</h3>
                        </div>
                    </div>

                    <div class="pf-policy-grid">
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-1-circle"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Antrag stellen</div>
                                <div class="pf-policy-card__text">Bei Ihrer Pflegekasse — formlos oder per Formular.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-2-circle"></i></div>
                            <div>
                                <div class="pf-policy-card__title">MD-Begutachtung</div>
                                <div class="pf-policy-card__text">Der Medizinische Dienst kommt zur Begutachtung.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-3-circle"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Bescheid</div>
                                <div class="pf-policy-card__text">Sie erhalten den Pflegegrad-Bescheid schriftlich.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-4-circle"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Leistungen</div>
                                <div class="pf-policy-card__text">Ab dem Antragsmonat haben Sie Anspruch auf Leistungen.</div>
                            </div>
                        </div>
                    </div>

                    <div class="pf-about-team-teaser">
                        <div class="pf-about-team-teaser__text">
                            <div class="pf-about-team-teaser__label"><i class="bi bi-wallet2"></i> Leistungen</div>
                            <h3>Welche Leistungen stehen Ihnen zu?</h3>
                            <p>Pflegegeld, Sachleistungen, Hilfsmittel und mehr — abhängig vom Pflegegrad.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>" class="pf-about-team-btn">
                            <i class="bi bi-arrow-right"></i> Leistungen ansehen
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

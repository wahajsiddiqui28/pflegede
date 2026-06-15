<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Leistungen Übersicht
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Pflegeleistungen 2025: Pflegegeld, Sachleistungen, Hilfsmittel, Verhinderungspflege und mehr — verständlich erklärt nach SGB XI.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/leistungen/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Leistungen</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-wallet2"></i> Geld- & Sachleistungen 2025</span>
                        <h1 class="pf-page-hero__title">Pflege­leistungen <span class="pf-page-hero__title-accent">verstehen</span></h1>
                        <p class="pf-page-hero__desc">Welche finanziellen und praktischen Leistungen stehen Pflegebedürftigen zu? Wir erklären Pflegegeld, Hilfsmittel und alle wichtigen Ansprüche nach SGB XI.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-box-seam"></i> Hilfsmittel</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-person-arms-up"></i> Entlastung</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=900&q=80" alt="Pflegeleistungen 2025">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Stand 2025</span>
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

                    <h2 class="pf-h-section"><i class="bi bi-grid text-success"></i> Übersicht der wichtigsten Leistungen</h2>
                    <p class="pf-h-section-sub">Je nach Pflegegrad und Pflegesituation haben Sie Anspruch auf verschiedene Leistungen — hier die wichtigsten im Überblick.</p>

                    <div class="pf-about-feature-grid">
                        <div class="pf-about-feature">
                            <div class="pf-about-feature__icon"><i class="bi bi-cash-coin"></i></div>
                            <div class="pf-about-feature__title">Pflegegeld</div>
                            <p class="pf-about-feature__text">Monatlich bis 990 € — wenn Angehörige die Pflege übernehmen.</p>
                        </div>
                        <div class="pf-about-feature">
                            <div class="pf-about-feature__icon"><i class="bi bi-house-heart"></i></div>
                            <div class="pf-about-feature__title">Pflegesachleistungen</div>
                            <p class="pf-about-feature__text">Bis 2.299 € für professionelle ambulante Pflegedienste.</p>
                        </div>
                        <div class="pf-about-feature">
                            <div class="pf-about-feature__icon"><i class="bi bi-box-seam"></i></div>
                            <div class="pf-about-feature__title">Pflegehilfsmittel</div>
                            <p class="pf-about-feature__text">Bis 42 € monatlich für zum Verbrauch bestimmte Hilfsmittel.</p>
                        </div>
                    </div>

                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1400&q=80" alt="Pflegeleistungen Beratung">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-lightbulb"></i> Wichtig zu wissen</span>
                            <h3 class="pf-accent-card__overlay-title">Pflegegeld und Sachleistungen können kombiniert werden — das nennt man Kombinationsleistung.</h3>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-list-check text-success"></i> Weitere wichtige Leistungen</h2>

                    <div class="pf-policy-grid">
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-person-arms-up"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Verhinderungspflege</div>
                                <div class="pf-policy-card__text">Bis 1.685 €/Jahr für Vertretung pflegender Angehöriger.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-calendar-event"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Kurzzeitpflege</div>
                                <div class="pf-policy-card__text">Bis 1.854 €/Jahr für vollstationäre Übergangspflege.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-building"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Tages-/Nachtpflege</div>
                                <div class="pf-policy-card__text">Teilstationäre Pflege als Entlastung für Angehörige.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-tools"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Wohnumfeld-Anpassung</div>
                                <div class="pf-policy-card__text">Bis 4.180 € je Maßnahme für barrierefreies Wohnen.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-gift"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Entlastungsbetrag</div>
                                <div class="pf-policy-card__text">131 €/Monat für haushaltsnahe Dienstleistungen.</div>
                            </div>
                        </div>
                        <div class="pf-policy-card">
                            <div class="pf-policy-card__icon"><i class="bi bi-shield-plus"></i></div>
                            <div>
                                <div class="pf-policy-card__title">Pflegekurse</div>
                                <div class="pf-policy-card__text">Kostenfreie Schulungen für pflegende Angehörige.</div>
                            </div>
                        </div>
                    </div>

                    <div class="pf-about-team-teaser">
                        <div class="pf-about-team-teaser__text">
                            <div class="pf-about-team-teaser__label"><i class="bi bi-clipboard2-pulse"></i> Voraussetzung</div>
                            <h3>Alle Leistungen erfordern einen Pflegegrad</h3>
                            <p>Erfahren Sie, wie die Einstufung in die fünf Pflegegrade funktioniert.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>" class="pf-about-team-btn">
                            <i class="bi bi-arrow-right"></i> Pflegegrade ansehen
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

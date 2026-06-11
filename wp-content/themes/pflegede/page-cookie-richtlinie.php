<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Cookie-Richtlinie
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Welche Cookies Pflegede verwendet, inklusive Google Analytics 4, und wie Sie Ihre Einwilligung jederzeit verwalten und widerrufen können.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/cookie-richtlinie/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Cookie-Richtlinie</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-toggles2"></i> Cookies & Einwilligung</span>
                        <h1 class="pf-page-hero__title">Cookie-<span class="pf-page-hero__title-accent">Richtlinie</span></h1>
                        <p class="pf-page-hero__desc">Welche Cookies wir einsetzen, warum wir sie verwenden und wie Sie Ihre Einwilligung jederzeit anpassen oder widerrufen können.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-check-circle"></i> Opt-in für Analyse</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-arrow-counterclockwise"></i> Widerrufbar</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield"></i> TDDDG-konform</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=900&q=80" alt="Cookie-Einstellungen Analyse">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-bar-chart-fill"></i> Transparente Auswertung</span>
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

                    <!-- What are cookies -->
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Was sind Cookies?</strong> Cookies sind kleine Textdateien, die beim Besuch einer Website auf Ihrem Gerät gespeichert werden. Sie machen die Website funktionsfähig, sicherer oder ermöglichen die Auswertung des Nutzungsverhaltens.</span>
                    </div>

                    <!-- Card 1: Necessary -->
                    <div class="pf-cookie-card">
                        <div class="pf-cookie-card__head">
                            <div class="pf-cookie-card__icon pf-cookie-card__icon--green"><i class="bi bi-shield-check"></i></div>
                            <div>
                                <h2 class="pf-cookie-card__title">Technisch notwendige Cookies</h2>
                                <div class="pf-cookie-card__subtitle">Erforderlich · § 25 Abs. 2 TDDDG · Ohne Einwilligung</div>
                            </div>
                        </div>
                        <p class="pf-cookie-card__text">Diese Cookies sind für den Betrieb der Website erforderlich und werden gemäß § 25 Abs. 2 TDDDG ohne Ihre Einwilligung gesetzt. Sie ermöglichen grundlegende Funktionen wie Seitennavigation und Zugriff auf gesicherte Bereiche. Ohne diese Cookies kann die Website nicht ordnungsgemäß funktionieren.</p>
                    </div>

                    <!-- Mid accent image -->
                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=1400&q=80" alt="Browser und Cookie-Einstellungen">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-sliders"></i> Sie haben die Kontrolle</span>
                            <h3 class="pf-accent-card__overlay-title">Sie haben die volle Kontrolle über alle Cookies, die wir auf pflege.com setzen.</h3>
                        </div>
                    </div>

                    <!-- Card 2: Analytics -->
                    <div class="pf-cookie-card">
                        <div class="pf-cookie-card__head">
                            <div class="pf-cookie-card__icon pf-cookie-card__icon--yellow"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h2 class="pf-cookie-card__title">Nicht notwendige Cookies (Analyse)</h2>
                                <div class="pf-cookie-card__subtitle">Opt-in · Google Analytics 4 · Aktive Einwilligung</div>
                            </div>
                        </div>
                        <p class="pf-cookie-card__text">Für die Reichweitenanalyse setzen wir <strong>Google Analytics 4</strong> ein. Die zugehörigen Cookies werden erst gesetzt, nachdem Sie über unser Cookie-Banner <strong>ausdrücklich und aktiv eingewilligt haben</strong> (Opt-in). Rechtsgrundlage ist Art. 6 Abs. 1 lit. a DSGVO i. V. m. § 25 Abs. 1 TDDDG.</p>
                    </div>

                    <!-- Card 3: Manage consent -->
                    <div class="pf-cookie-card">
                        <div class="pf-cookie-card__head">
                            <div class="pf-cookie-card__icon pf-cookie-card__icon--blue"><i class="bi bi-sliders"></i></div>
                            <div>
                                <h2 class="pf-cookie-card__title">Ihre Einwilligung verwalten</h2>
                                <div class="pf-cookie-card__subtitle">Jederzeit widerrufbar · Cookie-Einstellungen</div>
                            </div>
                        </div>
                        <p class="pf-cookie-card__text">Beim ersten Besuch werden Sie über ein Banner um Ihre Einwilligung gebeten. Sie können Ihre Auswahl jederzeit über die <a href="<?php echo esc_url( home_url( '/cookie-einstellungen/' ) ); ?>">Cookie-Einstellungen</a> ändern oder Ihre Einwilligung mit Wirkung für die Zukunft widerrufen. Weitere Informationen finden Sie in unserer <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutzerklärung</a>.</p>
                    </div>

                    <!-- Related links -->
                    <div class="pf-sidebar-card mt-4">
                        <div class="pf-sidebar-card__title"><i class="bi bi-journals"></i> Weitere rechtliche Seiten</div>
                        <ul class="pf-sidebar-links">
                            <li><a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>"><i class="bi bi-chevron-right"></i> Datenschutzerklärung</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>"><i class="bi bi-chevron-right"></i> Impressum</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/hinweis/' ) ); ?>"><i class="bi bi-chevron-right"></i> Hinweis & Haftung</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

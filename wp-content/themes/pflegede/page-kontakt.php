<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Kontakt (DE)
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Kontaktieren Sie Pflegede für Fragen zu Pflege in Deutschland, Kooperationen oder allgemeine Unterstützung.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/kontakt/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Kontakt</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-envelope-paper-heart"></i> Wir hören zu</span>
                        <h1 class="pf-page-hero__title">Kontakt <span class="pf-page-hero__title-accent">aufnehmen</span></h1>
                        <p class="pf-page-hero__desc">Wir freuen uns über Ihre Nachricht — bei Fragen zu Inhalten, Pflegethemen oder Kooperationen sind wir für Sie da.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clock"></i> Antwort in 1–2 Tagen</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-translate"></i> DE / EN</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> DSGVO-konform</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=900&q=80" alt="Schreiben Sie uns">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-chat-heart-fill"></i> Persönlicher Kontakt</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pf-page-hero__wave">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,30 C360,50 1080,0 1440,30 L1440,50 L0,50 Z"></path></svg>
        </div>
    </section>

    <!-- ── Body — split layout ── -->
    <div class="pf-page-body">
        <div class="container">

            <div class="pf-contact-grid">

                <!-- Left: Dark contact card -->
                <div class="pf-contact-card-v2">
                    <div class="pf-contact-card-v2__icon"><i class="bi bi-envelope-paper-fill"></i></div>
                    <h2 class="pf-contact-card-v2__title">Schreiben Sie uns</h2>
                    <p class="pf-contact-card-v2__desc">Bei Fragen zu Inhalten, Pflege in Deutschland oder Kooperationen — wir bemühen uns um eine zeitnahe Rückmeldung.</p>

                    <a href="mailto:info@pflegede.com" class="pf-contact-email-pill">
                        <div class="pf-contact-email-pill__icon"><i class="bi bi-envelope"></i></div>
                        <div>
                            <span class="pf-contact-email-pill__label">E-Mail-Adresse</span>
                            <span class="pf-contact-email-pill__value">info@pflegede.com</span>
                        </div>
                        <i class="bi bi-arrow-right ms-auto" style="color:rgba(255,255,255,.5);"></i>
                    </a>

                    <ul class="pf-contact-feature-list">
                        <li><i class="bi bi-check-lg"></i> <span>Antwort in der Regel innerhalb von <strong>1–2 Werktagen</strong></span></li>
                        <li><i class="bi bi-check-lg"></i> <span>Inhaltliche Fragen, Korrekturen, Kooperationen</span></li>
                        <li><i class="bi bi-check-lg"></i> <span>Anfragen auf <strong>Deutsch oder Englisch</strong></span></li>
                        <li><i class="bi bi-check-lg"></i> <span>Daten werden gemäß DSGVO verarbeitet</span></li>
                    </ul>

                    <div class="pf-contact-card-v2__footnote">
                        Die im Rahmen der Kontaktaufnahme übermittelten Daten verarbeiten wir gemäß unserer
                        <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutzerklärung</a>.
                    </div>
                </div>

                <!-- Right: Visual image -->
                <div class="pf-contact-visual">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=900&q=80" alt="Wir hören zu — Pflegede Team">
                    <span class="pf-contact-visual__badge"><i class="bi bi-people-fill"></i> Pflegede Redaktion</span>
                    <div class="pf-contact-visual__bottom">
                        <h3>Verlässliche Pflege­informationen für Deutschland</h3>
                        <p>Ein festes Redaktionsteam — jede Anfrage wird persönlich gelesen und beantwortet.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>

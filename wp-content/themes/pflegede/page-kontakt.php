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

                <!-- Right: Contact Form -->
                <div class="pf-kontakt-form-card">
                    <div class="pf-kontakt-form-card__head">
                        <div class="pf-kontakt-form-card__icon"><i class="bi bi-pencil-square"></i></div>
                        <div>
                            <h2 class="pf-kontakt-form-card__title">Nachricht senden</h2>
                            <p class="pf-kontakt-form-card__subtitle">Felder mit * sind Pflichtfelder</p>
                        </div>
                    </div>

                    <!-- AJAX response message -->
                    <div id="kontaktFormMessage" role="alert" aria-live="polite" style="display:none;"></div>

                    <form id="pflegedeKontaktForm" class="pf-kontakt-form" novalidate>
                        <?php wp_nonce_field( 'pflegede_kontakt_nonce', 'pflegede_kontakt_nonce' ); ?>
                        <input type="hidden" name="action" value="pflegede_kontakt">
                        <div style="position:absolute;left:-9999px;" aria-hidden="true">
                            <input type="text" name="kontakt_hp" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="pf-kontakt-field">
                            <label for="k_name">Name <span class="req">*</span></label>
                            <div class="pf-kontakt-input">
                                <i class="bi bi-person"></i>
                                <input type="text" id="k_name" name="k_name" required placeholder="Ihr Name" autocomplete="name">
                            </div>
                        </div>

                        <div class="pf-kontakt-field">
                            <label for="k_email">E-Mail <span class="req">*</span></label>
                            <div class="pf-kontakt-input">
                                <i class="bi bi-envelope"></i>
                                <input type="email" id="k_email" name="k_email" required placeholder="ihre@email.de" autocomplete="email">
                            </div>
                        </div>

                        <div class="pf-kontakt-field">
                            <label for="k_subject">Betreff <span class="req">*</span></label>
                            <div class="pf-kontakt-input">
                                <i class="bi bi-tag"></i>
                                <input type="text" id="k_subject" name="k_subject" required placeholder="Worum geht es?">
                            </div>
                        </div>

                        <div class="pf-kontakt-field">
                            <label for="k_message">Nachricht <span class="req">*</span></label>
                            <textarea id="k_message" name="k_message" rows="5" required placeholder="Ihre Nachricht an uns ..."></textarea>
                        </div>

                        <label class="pf-kontakt-consent">
                            <input type="checkbox" name="k_consent" value="1" required>
                            <span>Ich habe die <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>" target="_blank">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten zu. <span class="req">*</span></span>
                        </label>

                        <button type="submit" class="pf-kontakt-submit" id="kontaktSubmitBtn">
                            <i class="bi bi-send-fill"></i>
                            <span>Nachricht senden</span>
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>

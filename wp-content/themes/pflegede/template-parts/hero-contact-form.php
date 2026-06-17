<?php
/**
 * Hero Contact Form — Reusable Template Part
 *
 * Premium "lead capture" form to be placed in the right column of any
 * pf-page-hero section. Uses the same AJAX backend as /kontakt/
 * (action=pflegede_kontakt, nonce=pflegede_kontakt_nonce).
 *
 * Usage:
 *   get_template_part( 'template-parts/hero-contact-form', null, array(
 *       'eyebrow'      => 'Kostenlose Beratung',
 *       'title'        => 'Jetzt anfragen',
 *       'sub'          => 'Wir melden uns innerhalb von 1–2 Werktagen.',
 *       'subject'      => 'Beratung zu Pflegegrad',
 *       'placeholder'  => 'Ihre Frage zum Pflegegrad ...',
 *       'cta'          => 'Beratung anfragen',
 *   ) );
 *
 * NOTE: This template part renders ONLY ONCE per page. Avoid embedding it
 * twice on the same page — duplicate form IDs break the JS handler.
 *
 * REMINDER for enqueue.php: any page that includes this template part
 * also needs the kontakt-form.js asset enqueued. Add the page slug or
 * template filename to the existing conditional in inc/enqueue.php.
 *
 * @package pflegede
 */

defined( 'ABSPATH' ) || exit;

$defaults = array(
    'eyebrow'     => __( 'Kostenlose Beratung', 'pflegede' ),
    'title'       => __( 'Jetzt anfragen', 'pflegede' ),
    'sub'         => __( 'Wir melden uns innerhalb von 1–2 Werktagen mit Ihrer Frage.', 'pflegede' ),
    'subject'     => '',
    'placeholder' => __( 'Ihre Nachricht an uns ...', 'pflegede' ),
    'cta'         => __( 'Beratung anfragen', 'pflegede' ),
);

$args = wp_parse_args( $args ?? array(), $defaults );
?>

<div class="pf-hero-form">
    <div class="pf-hero-form__head">
        <div class="pf-hero-form__icon"><i class="bi bi-headset"></i></div>
        <div>
            <div class="pf-hero-form__eyebrow"><?php echo esc_html( $args['eyebrow'] ); ?></div>
            <h2 class="pf-hero-form__title"><?php echo esc_html( $args['title'] ); ?></h2>
        </div>
    </div>
    <p class="pf-hero-form__sub"><?php echo esc_html( $args['sub'] ); ?></p>

    <div id="kontaktFormMessage" role="alert" aria-live="polite" style="display:none;"></div>

    <form id="pflegedeKontaktForm" class="pf-hero-form__form" novalidate>
        <?php wp_nonce_field( 'pflegede_kontakt_nonce', 'pflegede_kontakt_nonce' ); ?>
        <input type="hidden" name="action" value="pflegede_kontakt">
        <div style="position:absolute;left:-9999px;" aria-hidden="true">
            <input type="text" name="kontakt_hp" tabindex="-1" autocomplete="off">
        </div>

        <div class="pf-hero-form__field">
            <i class="bi bi-person"></i>
            <input type="text" name="k_name" required placeholder="<?php esc_attr_e( 'Ihr Name *', 'pflegede' ); ?>" autocomplete="name">
        </div>
        <div class="pf-hero-form__field">
            <i class="bi bi-envelope"></i>
            <input type="email" name="k_email" required placeholder="<?php esc_attr_e( 'E-Mail-Adresse *', 'pflegede' ); ?>" autocomplete="email">
        </div>
        <div class="pf-hero-form__field">
            <i class="bi bi-tag"></i>
            <input type="text" name="k_subject" required placeholder="<?php esc_attr_e( 'Worum geht es? *', 'pflegede' ); ?>" value="<?php echo esc_attr( $args['subject'] ); ?>">
        </div>
        <div class="pf-hero-form__field pf-hero-form__field--textarea">
            <textarea name="k_message" rows="3" required placeholder="<?php echo esc_attr( $args['placeholder'] ); ?>"></textarea>
        </div>

        <label class="pf-hero-form__consent">
            <input type="checkbox" name="k_consent" value="1" required>
            <span><?php
                printf(
                    /* translators: %s: link to Datenschutz page */
                    esc_html__( 'Ich habe die %s gelesen. *', 'pflegede' ),
                    '<a href="' . esc_url( home_url( '/datenschutz/' ) ) . '" target="_blank">' . esc_html__( 'Datenschutzerklärung', 'pflegede' ) . '</a>'
                );
            ?></span>
        </label>

        <button type="submit" class="pf-hero-form__submit" id="kontaktSubmitBtn">
            <i class="bi bi-send-fill"></i>
            <span><?php echo esc_html( $args['cta'] ); ?></span>
        </button>

        <div class="pf-hero-form__trust">
            <span><i class="bi bi-shield-check"></i> <?php esc_html_e( 'DSGVO-konform', 'pflegede' ); ?></span>
            <span><i class="bi bi-clock"></i> <?php esc_html_e( 'Antwort in 1–2 Tagen', 'pflegede' ); ?></span>
        </div>
    </form>
</div>

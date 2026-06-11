<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Contact Page
 */
get_header();
$phone    = get_theme_mod( 'pflegede_phone', '' );
$whatsapp = get_theme_mod( 'pflegede_whatsapp', '' );
$email_to = get_option( 'admin_email' );
$all_cats = get_terms( array( 'taxonomy' => 'pflegede_category', 'hide_empty' => false ) );
?>

<main role="main">

    <!-- Hero -->
    <section class="page-hero-premium contact-hero">
        <span class="page-hero-premium__blob page-hero-premium__blob--1"></span>
        <span class="page-hero-premium__blob page-hero-premium__blob--2"></span>
        <div class="container position-relative">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="page-hero-premium__eyebrow">
                        <i class="bi bi-megaphone"></i> <?php esc_html_e( 'Grow Your Reach', 'pflegede' ); ?>
                    </span>
                    <h1 class="page-hero-premium__title"><?php esc_html_e( 'Get Your Business', 'pflegede' ); ?> <span class="page-hero-premium__highlight"><?php esc_html_e( 'Listed', 'pflegede' ); ?></span></h1>
                    <p class="page-hero-premium__subtitle"><?php esc_html_e( 'Fill out the form and we will add your listing to our directory. Simple, fast, and free.', 'pflegede' ); ?></p>
                    <div class="page-hero-premium__pills">
                        <span class="hero-pill"><span class="hero-pill__dot"></span> <?php esc_html_e( 'Open for Publications', 'pflegede' ); ?></span>
                        <span class="hero-pill"><span class="hero-pill__dot"></span> <?php esc_html_e( 'Open for Company Listings', 'pflegede' ); ?></span>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div class="page-hero-premium__icon-stack">
                        <span class="page-hero-premium__icon-stack-item"><i class="bi bi-envelope-paper"></i></span>
                        <span class="page-hero-premium__icon-stack-item"><i class="bi bi-chat-dots"></i></span>
                        <span class="page-hero-premium__icon-stack-item"><i class="bi bi-send"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-4">

            <!-- ── Left: Info + How it Works ── -->
            <div class="col-lg-4">

                <!-- Contact Info Card -->
                <div class="card border mb-4">
                    <div class="card-header fw-bold"><?php esc_html_e( 'Reach Us Directly', 'pflegede' ); ?></div>
                    <div class="card-body p-0">

                        <?php if ( $phone ) : ?>
                        <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="d-flex align-items-center gap-3 p-3 border-bottom text-decoration-none text-dark hover-primary">
                            <div class="d-flex align-items-center justify-content-center rounded-3 bg-primary bg-opacity-10 text-primary" style="width:44px;height:44px;flex-shrink:0;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 .01h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                            </div>
                            <div>
                                <div class="text-muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.04em;"><?php esc_html_e( 'Phone', 'pflegede' ); ?></div>
                                <div class="fw-semibold"><?php echo esc_html( $phone ); ?></div>
                            </div>
                        </a>
                        <?php endif; ?>

                        <?php if ( $whatsapp ) : ?>
                        <a href="<?php echo esc_url( pflegede_whatsapp_url( $whatsapp ) ); ?>" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center gap-3 p-3 border-bottom text-decoration-none text-dark">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="width:44px;height:44px;flex-shrink:0;background:#ECFDF5;color:#25D366;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </div>
                            <div>
                                <div class="text-muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.04em;">WhatsApp</div>
                                <div class="fw-semibold"><?php echo esc_html( $whatsapp ); ?></div>
                            </div>
                        </a>
                        <?php endif; ?>

                        <div class="d-flex align-items-center gap-3 p-3">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="width:44px;height:44px;flex-shrink:0;background:#FFF7ED;color:#EA580C;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <div class="text-muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.04em;"><?php esc_html_e( 'Email', 'pflegede' ); ?></div>
                                <div class="fw-semibold" style="word-break:break-all;"><?php echo esc_html( $email_to ); ?></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- How It Works Card -->
                <div class="card border">
                    <div class="card-header fw-bold"><?php esc_html_e( 'How It Works', 'pflegede' ); ?></div>
                    <div class="card-body">
                        <ol class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-start gap-3">
                                <span class="how-step-number flex-shrink-0">1</span>
                                <div>
                                    <strong class="d-block"><?php esc_html_e( 'Fill the Form', 'pflegede' ); ?></strong>
                                    <span class="text-muted small"><?php esc_html_e( 'Submit your company or individual details.', 'pflegede' ); ?></span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span class="how-step-number flex-shrink-0">2</span>
                                <div>
                                    <strong class="d-block"><?php esc_html_e( 'We Review', 'pflegede' ); ?></strong>
                                    <span class="text-muted small"><?php esc_html_e( 'Our team reviews and may contact you for more details.', 'pflegede' ); ?></span>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span class="how-step-number flex-shrink-0">3</span>
                                <div>
                                    <strong class="d-block"><?php esc_html_e( 'Go Live', 'pflegede' ); ?></strong>
                                    <span class="text-muted small"><?php esc_html_e( 'Your listing goes live and reaches thousands of visitors.', 'pflegede' ); ?></span>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>

            </div>

            <!-- ── Right: Form ── -->
            <div class="col-lg-8">
                <?php if ( false ) : // ── OLD LISTING REQUEST FORM — disabled, preserved for reference ── ?>
                <div class="contact-form-premium">
                    <div class="contact-form-premium__head">
                        <div class="contact-form-premium__head-icon"><i class="bi bi-pencil-square"></i></div>
                        <div>
                            <h2 class="contact-form-premium__title"><?php esc_html_e( 'Listing Request Form', 'pflegede' ); ?></h2>
                            <p class="contact-form-premium__subtitle"><?php esc_html_e( 'Fields marked with * are required.', 'pflegede' ); ?></p>
                        </div>
                    </div>

                    <div class="contact-form-premium__body">

                        <!-- Alert messages -->
                        <div id="contactFormMessage" role="alert" aria-live="polite" style="display:none;"></div>

                        <form id="pflegedeContactForm" novalidate>
                            <?php wp_nonce_field( 'pflegede_contact_nonce', 'pflegede_contact_nonce' ); ?>
                            <div style="display:none!important;" aria-hidden="true">
                                <input type="text" name="pflegede_hp_field" value="" tabindex="-1" autocomplete="off" />
                            </div>
                            <input type="hidden" name="action" value="pflegede_contact" />

                            <!-- Section: Personal Info -->
                            <div class="form-section">
                                <div class="form-section__head">
                                    <span class="form-section__num">1</span>
                                    <div>
                                        <div class="form-section__title"><?php esc_html_e( 'Personal Information', 'pflegede' ); ?></div>
                                        <div class="form-section__hint"><?php esc_html_e( 'Tell us who you are', 'pflegede' ); ?></div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="your_name" class="form-label-premium"><?php esc_html_e( 'Your Name', 'pflegede' ); ?> <span class="req">*</span></label>
                                        <div class="input-with-icon">
                                            <i class="bi bi-person"></i>
                                            <input type="text" id="your_name" name="your_name" class="form-control" required autocomplete="name" placeholder="<?php esc_attr_e( 'John Doe', 'pflegede' ); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label-premium"><?php esc_html_e( 'Email Address', 'pflegede' ); ?> <span class="req">*</span></label>
                                        <div class="input-with-icon">
                                            <i class="bi bi-envelope"></i>
                                            <input type="email" id="email" name="email" class="form-control" required autocomplete="email" placeholder="you@example.com" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label-premium"><?php esc_html_e( 'Phone Number', 'pflegede' ); ?> <span class="req">*</span></label>
                                        <div class="input-with-icon">
                                            <i class="bi bi-telephone"></i>
                                            <input type="tel" id="phone" name="phone" class="form-control" required autocomplete="tel" placeholder="+49 xxx xxx xxxx" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label-premium"><?php esc_html_e( 'City / Location', 'pflegede' ); ?> <span class="req">*</span></label>
                                        <div class="input-with-icon">
                                            <i class="bi bi-geo-alt"></i>
                                            <input type="text" id="city" name="city" class="form-control" required placeholder="<?php esc_attr_e( 'e.g. Berlin', 'pflegede' ); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section: Business Info -->
                            <div class="form-section">
                                <div class="form-section__head">
                                    <span class="form-section__num">2</span>
                                    <div>
                                        <div class="form-section__title"><?php esc_html_e( 'Business Details', 'pflegede' ); ?></div>
                                        <div class="form-section__hint"><?php esc_html_e( 'About your service or company', 'pflegede' ); ?></div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="listing_name" class="form-label-premium"><?php esc_html_e( 'Company / Individual Name', 'pflegede' ); ?> <span class="req">*</span></label>
                                        <div class="input-with-icon">
                                            <i class="bi bi-building"></i>
                                            <input type="text" id="listing_name" name="listing_name" class="form-control" required placeholder="<?php esc_attr_e( 'Your Business Name', 'pflegede' ); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="category" class="form-label-premium"><?php esc_html_e( 'Category', 'pflegede' ); ?> <span class="req">*</span></label>
                                        <div class="input-with-icon">
                                            <i class="bi bi-grid"></i>
                                            <select id="category" name="category" class="form-select" required>
                                                <option value=""><?php esc_html_e( 'Select a category', 'pflegede' ); ?></option>
                                                <?php if ( ! empty( $all_cats ) && ! is_wp_error( $all_cats ) ) : ?>
                                                    <?php foreach ( $all_cats as $cat ) : ?>
                                                        <option value="<?php echo esc_attr( $cat->name ); ?>"><?php echo esc_html( $cat->name ); ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="website" class="form-label-premium"><?php esc_html_e( 'Website URL', 'pflegede' ); ?></label>
                                        <div class="input-with-icon">
                                            <i class="bi bi-globe"></i>
                                            <input type="url" id="website" name="website" class="form-control" autocomplete="url" placeholder="https://yourwebsite.com" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section: Additional -->
                            <div class="form-section">
                                <div class="form-section__head">
                                    <span class="form-section__num">3</span>
                                    <div>
                                        <div class="form-section__title"><?php esc_html_e( 'Description & Notes', 'pflegede' ); ?></div>
                                        <div class="form-section__hint"><?php esc_html_e( 'Help us understand your service', 'pflegede' ); ?></div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="description" class="form-label-premium"><?php esc_html_e( 'Description / About', 'pflegede' ); ?> <span class="req">*</span></label>
                                        <textarea id="description" name="description" class="form-control form-textarea-premium" rows="4" required placeholder="<?php esc_attr_e( 'Tell us about your services, experience, and what makes you unique...', 'pflegede' ); ?>"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="extra_message" class="form-label-premium"><?php esc_html_e( 'Additional Information', 'pflegede' ); ?></label>
                                        <textarea id="extra_message" name="extra_message" class="form-control form-textarea-premium" rows="3" placeholder="<?php esc_attr_e( 'Working hours, languages spoken, services, or any other details...', 'pflegede' ); ?>"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-note">
                                <i class="bi bi-info-circle-fill"></i>
                                <span><?php esc_html_e( 'After submitting, please also send your company logo and images to our email or WhatsApp. Our team will review and add your listing manually.', 'pflegede' ); ?></span>
                            </div>

                            <button type="submit" class="contact-submit-btn w-100" id="contactSubmitBtn">
                                <i class="bi bi-send-fill"></i>
                                <span><?php esc_html_e( 'Send Listing Request', 'pflegede' ); ?></span>
                            </button>
                        </form>

                    </div>
                </div>
                <?php endif; // ── END old form ── ?>

                <!-- ── New Simple Contact Form ── -->
                <div class="contact-form-premium">
                    <div class="contact-form-premium__head">
                        <div class="contact-form-premium__head-icon"><i class="bi bi-chat-dots"></i></div>
                        <div>
                            <h2 class="contact-form-premium__title"><?php esc_html_e( 'Get in Touch', 'pflegede' ); ?></h2>
                            <p class="contact-form-premium__subtitle"><?php esc_html_e( 'We usually reply within 24 hours.', 'pflegede' ); ?></p>
                        </div>
                    </div>

                    <div class="contact-form-premium__body">

                        <!-- Alert messages -->
                        <div id="contactFormMessage" role="alert" aria-live="polite" style="display:none;"></div>

                        <form id="pflegedeContactForm" novalidate>
                            <?php wp_nonce_field( 'pflegede_contact_nonce', 'pflegede_contact_nonce' ); ?>
                            <div style="display:none!important;" aria-hidden="true">
                                <input type="text" name="pflegede_hp_field" value="" tabindex="-1" autocomplete="off" />
                            </div>
                            <input type="hidden" name="action" value="pflegede_contact" />

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="your_name" class="form-label-premium"><?php esc_html_e( 'Name', 'pflegede' ); ?> <span class="req">*</span></label>
                                    <div class="input-with-icon">
                                        <i class="bi bi-person"></i>
                                        <input type="text" id="your_name" name="your_name" class="form-control" required autocomplete="name" placeholder="<?php esc_attr_e( 'John Doe', 'pflegede' ); ?>" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label-premium"><?php esc_html_e( 'Email', 'pflegede' ); ?> <span class="req">*</span></label>
                                    <div class="input-with-icon">
                                        <i class="bi bi-envelope"></i>
                                        <input type="email" id="email" name="email" class="form-control" required autocomplete="email" placeholder="you@example.com" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label-premium"><?php esc_html_e( 'Phone Number', 'pflegede' ); ?> <span class="form-label-optional"><?php esc_html_e( '(optional)', 'pflegede' ); ?></span></label>
                                    <div class="input-with-icon">
                                        <i class="bi bi-telephone"></i>
                                        <input type="tel" id="phone" name="phone" class="form-control" autocomplete="tel" placeholder="+49 xxx xxx xxxx" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label-premium"><?php esc_html_e( 'Message', 'pflegede' ); ?> <span class="req">*</span></label>
                                    <textarea id="message" name="message" class="form-control form-textarea-premium" rows="5" required placeholder="<?php esc_attr_e( 'How can we help you?', 'pflegede' ); ?>"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="contact-submit-btn w-100 mt-4" id="contactSubmitBtn">
                                <i class="bi bi-send-fill"></i>
                                <span><?php esc_html_e( 'Send Message', 'pflegede' ); ?></span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>

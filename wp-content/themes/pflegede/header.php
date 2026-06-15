<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <nav class="navbar navbar-expand-lg sticky-top pf-navbar" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'pflegede' ); ?>">
        <div class="container">

            <!-- Brand / Logo -->
            <a class="navbar-brand pf-brand p-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="pflegede — Startseite">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="pf-brand__mark" aria-hidden="true">
                        <svg viewBox="0 0 40 40" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="pfBrandGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#0e7058"/>
                                    <stop offset="100%" stop-color="#073d2f"/>
                                </linearGradient>
                            </defs>
                            <rect x="0" y="0" width="40" height="40" rx="11" fill="url(#pfBrandGrad)"/>
                            <!-- Plus + Heart hybrid: caring cross -->
                            <path d="M20 11.5c-1.2-1.6-3.5-2.1-5.2-1-2 1.3-2.5 4-1.1 5.9.5.7 1.2 1.4 2 2.1V21h-3.2a1.4 1.4 0 0 0 0 2.8H15v3.5a1.4 1.4 0 0 0 2.8 0v-3.5h4.4v3.5a1.4 1.4 0 0 0 2.8 0v-3.5h2.5a1.4 1.4 0 0 0 0-2.8H25v-2.5c.8-.7 1.5-1.4 2-2.1 1.4-1.9.9-4.6-1.1-5.9-1.7-1.1-4-.6-5.2 1Zm0 3.2c.5-1 1.6-1.4 2.5-.8.7.5.9 1.5.4 2.2-.4.5-.9 1-1.5 1.5l-1.4 1.1-1.4-1.1c-.6-.5-1.1-1-1.5-1.5-.5-.7-.3-1.7.4-2.2.9-.6 2-.2 2.5.8Z" fill="#fff"/>
                        </svg>
                    </span>
                    <span class="pf-brand__word">
                        <span class="pf-brand__word-main">pflegede</span><span class="pf-brand__word-tld">.com</span>
                        <span class="pf-brand__tagline">Pflege in Deutschland</span>
                    </span>
                <?php endif; ?>
            </a>

            <!-- Mobile toggle -->
            <button class="navbar-toggler pf-nav-toggle border-0" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#primaryNavMenu"
                aria-controls="primaryNavMenu"
                aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation', 'pflegede' ); ?>">
                <span class="pf-nav-toggle__bar"></span>
                <span class="pf-nav-toggle__bar"></span>
                <span class="pf-nav-toggle__bar"></span>
            </button>

            <!-- Nav links -->
            <div class="collapse navbar-collapse" id="primaryNavMenu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'navbar-nav mx-auto mb-2 mb-lg-0 pf-nav',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => 'pflegede_fallback_nav',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker'         => new Pflegede_Bootstrap_Nav_Walker(),
                ) );
                ?>

                <!-- CTA Button — per SEO-Team Menu Spec: Kontakt → /kontakt/ -->
                <div class="d-flex align-items-center gap-2 pf-header-actions">
                    <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn-get-listed pf-cta">
                        <i class="bi bi-envelope-paper-heart" aria-hidden="true"></i>
                        <span>Kontakt</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
</header>

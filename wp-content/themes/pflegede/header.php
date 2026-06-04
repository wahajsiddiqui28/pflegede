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
    <nav class="navbar navbar-expand-lg bg-white sticky-top" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'pflegede' ); ?>">
        <div class="container">

            <!-- Brand / Logo -->
            <a class="navbar-brand p-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="navbar-brand-text"><?php bloginfo( 'name' ); ?></span>
                <?php endif; ?>
            </a>

            <!-- Mobile toggle (Bootstrap handles open/close automatically) -->
            <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#primaryNavMenu"
                aria-controls="primaryNavMenu"
                aria-expanded="false"
                aria-label="<?php esc_attr_e( 'Toggle navigation', 'pflegede' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav links -->
            <div class="collapse navbar-collapse" id="primaryNavMenu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => 'pflegede_fallback_nav',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker'         => new Pflegede_Bootstrap_Nav_Walker(),
                ) );
                ?>

                <!-- CTA Button -->
                <div class="d-flex">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-get-listed">
                        <?php esc_html_e( 'Get Listed', 'pflegede' ); ?>
                    </a>
                </div>
            </div>

        </div>
    </nav>
</header>

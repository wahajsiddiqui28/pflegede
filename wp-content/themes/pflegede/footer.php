<footer class="site-footer mt-auto" role="contentinfo">
    <div class="container">

        <div class="row g-4 py-5">

            <!-- Brand col -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-3">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-text d-inline-block mb-2">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <p class="footer-tagline mb-3">
                    <?php esc_html_e( 'Your trusted directory for care services across Germany.', 'pflegede' ); ?>
                </p>
                <?php
                $phone    = get_theme_mod( 'pflegede_phone', '' );
                $whatsapp = get_theme_mod( 'pflegede_whatsapp', '' );
                ?>
                <div class="d-flex flex-column gap-2">
                    <?php if ( $phone ) : ?>
                        <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="footer-contact-link">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.01 1.18 2 2 0 012 .01h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
                            <?php echo esc_html( $phone ); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ( $whatsapp ) : ?>
                        <a href="<?php echo esc_url( pflegede_whatsapp_url( $whatsapp ) ); ?>" target="_blank" rel="noopener noreferrer" class="footer-contact-link">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            <?php esc_html_e( 'WhatsApp Us', 'pflegede' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-3 col-6">
                <h6 class="footer-heading mb-3"><?php esc_html_e( 'Quick Links', 'pflegede' ); ?></h6>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'pflegede' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/listings/' ) ); ?>"><?php esc_html_e( 'All Listings', 'pflegede' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Us', 'pflegede' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'pflegede' ); ?></a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-lg-3 col-md-3 col-6">
                <h6 class="footer-heading mb-3"><?php esc_html_e( 'Categories', 'pflegede' ); ?></h6>
                <?php
                $cats = get_terms( array( 'taxonomy' => 'pflegede_category', 'hide_empty' => false ) );
                if ( ! empty( $cats ) && ! is_wp_error( $cats ) ) : ?>
                <ul class="footer-links-list">
                    <?php foreach ( $cats as $cat ) : ?>
                        <li><a href="<?php echo esc_url( get_term_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>

            <!-- Get Listed -->
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading mb-3"><?php esc_html_e( 'Get Listed', 'pflegede' ); ?></h6>
                <div class="footer-open-for mb-3">
                    <p><?php esc_html_e( 'Open for Publications', 'pflegede' ); ?></p>
                    <p><?php esc_html_e( 'Open for Company Listings', 'pflegede' ); ?></p>
                </div>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-light btn-sm">
                    <?php esc_html_e( 'Submit Your Listing', 'pflegede' ); ?>
                </a>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="footer-bottom text-center">
            <p>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
                <?php esc_html_e( 'All rights reserved.', 'pflegede' ); ?>
            </p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

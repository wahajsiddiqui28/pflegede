<footer class="site-footer mt-auto" role="contentinfo">
    <div class="container">

        <div class="row g-4 py-5">

            <!-- ── Brand col ── -->
            <div class="col-lg-4 col-md-12">
                <div class="footer-brand mb-3">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pf-brand pf-brand--footer" aria-label="pflegede — Startseite">
                            <span class="pf-brand__mark" aria-hidden="true">
                                <svg viewBox="0 0 40 40" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <linearGradient id="pfBrandGradFooter" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#1F8B6E"/>
                                            <stop offset="100%" stop-color="#0a5743"/>
                                        </linearGradient>
                                    </defs>
                                    <rect x="0" y="0" width="40" height="40" rx="11" fill="url(#pfBrandGradFooter)"/>
                                    <path d="M20 11.5c-1.2-1.6-3.5-2.1-5.2-1-2 1.3-2.5 4-1.1 5.9.5.7 1.2 1.4 2 2.1V21h-3.2a1.4 1.4 0 0 0 0 2.8H15v3.5a1.4 1.4 0 0 0 2.8 0v-3.5h4.4v3.5a1.4 1.4 0 0 0 2.8 0v-3.5h2.5a1.4 1.4 0 0 0 0-2.8H25v-2.5c.8-.7 1.5-1.4 2-2.1 1.4-1.9.9-4.6-1.1-5.9-1.7-1.1-4-.6-5.2 1Zm0 3.2c.5-1 1.6-1.4 2.5-.8.7.5.9 1.5.4 2.2-.4.5-.9 1-1.5 1.5l-1.4 1.1-1.4-1.1c-.6-.5-1.1-1-1.5-1.5-.5-.7-.3-1.7.4-2.2.9-.6 2-.2 2.5.8Z" fill="#fff"/>
                                </svg>
                            </span>
                            <span class="pf-brand__word">
                                <span class="pf-brand__word-main">pflege</span><span class="pf-brand__word-tld">.de</span>
                                <span class="pf-brand__tagline">Ihr Pflegeportal</span>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
                <p class="footer-tagline mb-3">
                    Pflege verstehen — für Betroffene, Angehörige und Fachkräfte. Verlässliche Informationen rund um Pflegegrade, Leistungen, Pflegearten und Pflegeberufe.
                </p>
                <a href="<?php echo esc_url( home_url( '/newsletter/' ) ); ?>" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-envelope-paper"></i>
                    Newsletter abonnieren
                </a>
            </div>

            <!-- ── Pflegegrade ── -->
            <div class="col-lg-2 col-md-3 col-sm-6">
                <h6 class="footer-heading">Pflegegrade</h6>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-1/' ) ); ?>">Pflegegrad 1</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-2/' ) ); ?>">Pflegegrad 2</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-3-5/' ) ); ?>">Pflegegrad 3–5</a></li>
                </ul>
            </div>

            <!-- ── Pflegearten ── -->
            <div class="col-lg-2 col-md-3 col-sm-6">
                <h6 class="footer-heading">Pflegearten</h6>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/pflegearten/ambulante-pflege/' ) ); ?>">Ambulante Pflege</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/pflegearten/haeusliche-pflege/' ) ); ?>">Häusliche Pflege</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/pflegearten/stationaere-pflege/' ) ); ?>">Stationäre Pflege</a></li>
                </ul>
            </div>

            <!-- ── Leistungen ── -->
            <div class="col-lg-2 col-md-3 col-sm-6">
                <h6 class="footer-heading">Leistungen</h6>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/leistungen/pflegegeld/' ) ); ?>">Pflegegeld</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/leistungen/hilfsmittel/' ) ); ?>">Hilfsmittel</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/leistungen/verhinderungspflege/' ) ); ?>">Verhinderungspflege</a></li>
                </ul>
            </div>

            <!-- ── Über uns ── -->
            <div class="col-lg-2 col-md-3 col-sm-6">
                <h6 class="footer-heading">Über uns</h6>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">Impressum</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutz</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></li>
                </ul>
            </div>

        </div>

        <hr class="footer-divider">

        <!-- ── Disclaimer (Pflichtangabe gemäß deutsches Recht) ── -->
        <div class="footer-disclaimer">
            <i class="bi bi-info-circle"></i>
            <span>Inhalte dienen der allgemeinen Information und ersetzen keine medizinische Beratung.</span>
        </div>

        <div class="footer-bottom">
            <div class="row g-2 align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">
                        &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">pflegede.com</a>.
                        Alle Rechte vorbehalten.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 footer-bottom__links">
                        <a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">Impressum</a>
                        <span class="footer-sep">·</span>
                        <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutz</a>
                        <span class="footer-sep">·</span>
                        <a href="<?php echo esc_url( home_url( '/cookie-einstellungen/' ) ); ?>">Cookie-Einstellungen</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

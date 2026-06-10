<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Datenschutz
 */

add_action( 'wp_head', function() {
    echo '<meta name="description" content="Datenschutz bei Pflegede: Rechtsgrundlagen, Cookies, Google Analytics 4, Search Console, Speicherdauer und Ihre Rechte nach der DSGVO.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/datenschutz/' ) ) . '">' . "\n";
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
                    <span class="pf-breadcrumb__current">Datenschutzerklärung</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-lock-fill"></i> Datenschutz & DSGVO</span>
                        <h1 class="pf-page-hero__title">Ihre <span class="pf-page-hero__title-accent">Daten</span><br>sind geschützt</h1>
                        <p class="pf-page-hero__desc">Wie wir Ihre personenbezogenen Daten verarbeiten, welche Rechte Sie nach der DSGVO haben und wie Sie sie wahrnehmen können. Stand: Juni 2026.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> DSGVO-konform</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-key"></i> SSL-verschlüsselt</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-eu"></i> EU-Standards</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=900&q=80" alt="Datenschutz und Sicherheit">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-shield-lock-fill"></i> Privacy by Design</span>
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
            <div class="row g-5">

                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="pf-content-card">
                        <div class="pf-legal-content">

                            <div class="pf-section-head" id="ds-1"><div class="pf-section-num">1</div><h2 class="pf-section-title">Verantwortliche Stelle</h2></div>
                            <p>Tauqeer Ahmed<br>E-Mail: <a href="mailto:info@pflegede.com">info@pflegede.com</a></p>

                            <div class="pf-section-head" id="ds-2"><div class="pf-section-num">2</div><h2 class="pf-section-title">Allgemeine Hinweise</h2></div>
                            <p>Der Schutz Ihrer personenbezogenen Daten ist uns wichtig. Wir verarbeiten Ihre Daten ausschließlich auf Grundlage der gesetzlichen Bestimmungen (DSGVO, TDDDG).</p>

                            <div class="pf-section-head" id="ds-3"><div class="pf-section-num">3</div><h2 class="pf-section-title">Rechtsgrundlagen</h2></div>
                            <p>Wir verarbeiten Daten auf Basis von:</p>
                            <ul>
                                <li>Einwilligung (Art. 6 Abs. 1 lit. a DSGVO)</li>
                                <li>Vertragserfüllung (lit. b)</li>
                                <li>Rechtlicher Verpflichtung (lit. c)</li>
                                <li>Berechtigtem Interesse (lit. f)</li>
                            </ul>

                            <div class="pf-section-head" id="ds-4"><div class="pf-section-num">4</div><h2 class="pf-section-title">Server-Logfiles</h2></div>
                            <p>Beim Aufruf der Website werden automatisch Daten erhoben, die Ihr Browser übermittelt (z. B. IP-Adresse, Datum/Uhrzeit, aufgerufene Seite, Browsertyp). Grundlage ist unser berechtigtes Interesse an einem sicheren, störungsfreien Betrieb (Art. 6 Abs. 1 lit. f DSGVO). Die Logfiles werden nach kurzer Zeit gelöscht.</p>

                            <div class="pf-section-head" id="ds-5"><div class="pf-section-num">5</div><h2 class="pf-section-title">Cookies und Einwilligung</h2></div>
                            <p>Technisch notwendige Cookies werden gemäß § 25 Abs. 2 TDDDG ohne Einwilligung gesetzt. Nicht notwendige Cookies (z. B. für Analyse) werden ausschließlich nach Ihrer aktiven, vorherigen Einwilligung über unser Cookie-Banner gesetzt. Sie können Ihre Einwilligung jederzeit mit Wirkung für die Zukunft widerrufen.</p>

                            <div class="pf-section-head" id="ds-6"><div class="pf-section-num">6</div><h2 class="pf-section-title">Kontaktaufnahme</h2></div>
                            <p>Bei einer Kontaktaufnahme per E-Mail werden Ihre Angaben zur Bearbeitung der Anfrage gespeichert (Art. 6 Abs. 1 lit. b bzw. lit. f DSGVO) und gelöscht, sobald sie nicht mehr erforderlich sind.</p>

                        </div>
                    </div>

                    <!-- Quote block -->
                    <div class="pf-quote-block">
                        <p class="pf-quote-block__text">„Datenschutz ist kein Beiwerk — er ist die Grundlage des Vertrauens. Wir behandeln Ihre Daten so, wie wir wollen, dass unsere behandelt werden."</p>
                        <div class="pf-quote-block__author">— Pflegede Redaktion</div>
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">

                            <div class="pf-section-head" id="ds-7"><div class="pf-section-num">7</div><h2 class="pf-section-title">Google Analytics 4</h2></div>
                            <p>Diese Website nutzt Google Analytics 4, einen Webanalysedienst der Google Ireland Limited (Gordon House, Barrow Street, Dublin 4, Irland; Mutterunternehmen: Google LLC, USA).</p>
                            <p>Zweck ist die Analyse des Nutzungsverhaltens, um die Website zu verbessern. Google Analytics 4 verwendet IP-Adressen nur kurzzeitig zur groben Standortbestimmung und speichert sie nicht dauerhaft.</p>
                            <p>Rechtsgrundlage ist Ihre Einwilligung (Art. 6 Abs. 1 lit. a DSGVO, § 25 Abs. 1 TDDDG). Eine Übermittlung an Google LLC in den USA ist möglich; Schutz dienen EU-Standardvertragsklauseln bzw. das EU-US Data Privacy Framework.</p>

                            <div class="pf-section-head" id="ds-8"><div class="pf-section-num">8</div><h2 class="pf-section-title">Google Search Console</h2></div>
                            <p>Wir nutzen die Google Search Console, um die Sichtbarkeit der Website auszuwerten. Die Search Console setzt selbst keine Cookies bei den Besuchern dieser Website und verfolgt einzelne Nutzer nicht direkt.</p>

                            <div class="pf-section-head" id="ds-9"><div class="pf-section-num">9</div><h2 class="pf-section-title">Drittlandübermittlung</h2></div>
                            <p>Bei einer Übermittlung von Daten in Länder außerhalb der EU/des EWR (insbesondere USA) stellen wir geeignete Garantien wie EU-Standardvertragsklauseln sicher.</p>

                            <div class="pf-section-head" id="ds-10"><div class="pf-section-num">10</div><h2 class="pf-section-title">Speicherdauer</h2></div>
                            <p>Wir speichern personenbezogene Daten nur so lange, wie es für die jeweiligen Zwecke erforderlich ist oder gesetzliche Fristen es vorschreiben.</p>

                            <div class="pf-section-head" id="ds-11"><div class="pf-section-num">11</div><h2 class="pf-section-title">Ihre Rechte</h2></div>
                            <ul>
                                <li>Auskunft (Art. 15 DSGVO)</li>
                                <li>Berichtigung (Art. 16 DSGVO)</li>
                                <li>Löschung (Art. 17 DSGVO)</li>
                                <li>Einschränkung der Verarbeitung (Art. 18 DSGVO)</li>
                                <li>Datenübertragbarkeit (Art. 20 DSGVO)</li>
                                <li>Widerspruch (Art. 21 DSGVO)</li>
                                <li>Widerruf einer Einwilligung mit Wirkung für die Zukunft (Art. 7 Abs. 3 DSGVO)</li>
                            </ul>

                            <div class="pf-section-head" id="ds-12"><div class="pf-section-num">12</div><h2 class="pf-section-title">Beschwerderecht</h2></div>
                            <p>Sie haben das Recht, sich bei einer Datenschutz-Aufsichtsbehörde zu beschweren, wenn Sie der Ansicht sind, dass die Verarbeitung Ihrer Daten gegen die DSGVO verstößt.</p>

                            <div class="pf-section-head" id="ds-13"><div class="pf-section-num">13</div><h2 class="pf-section-title">SSL-/TLS-Verschlüsselung</h2></div>
                            <p>Diese Website nutzt aus Sicherheitsgründen eine SSL-/TLS-Verschlüsselung, erkennbar am „https://" in der Adresszeile.</p>

                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="pf-legal-sidebar">

                        <!-- Image card in sidebar -->
                        <div class="pf-sidebar-image-card">
                            <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?w=600&q=80" alt="Datenschutz und Verschlüsselung">
                            <div class="pf-sidebar-image-card__caption">
                                <div class="pf-sidebar-image-card__caption-eyebrow">DSGVO 2024/2025</div>
                                <h3 class="pf-sidebar-image-card__caption-title">Vertrauen durch Transparenz</h3>
                            </div>
                        </div>

                        <div class="pf-sidebar-card">
                            <div class="pf-sidebar-card__title"><i class="bi bi-list-ul"></i> Inhaltsübersicht</div>
                            <ul class="pf-toc-nav">
                                <li><a href="#ds-1"><span class="pf-toc-nav__num">1</span> Verantwortliche Stelle</a></li>
                                <li><a href="#ds-2"><span class="pf-toc-nav__num">2</span> Allgemeine Hinweise</a></li>
                                <li><a href="#ds-3"><span class="pf-toc-nav__num">3</span> Rechtsgrundlagen</a></li>
                                <li><a href="#ds-4"><span class="pf-toc-nav__num">4</span> Server-Logfiles</a></li>
                                <li><a href="#ds-5"><span class="pf-toc-nav__num">5</span> Cookies & Einwilligung</a></li>
                                <li><a href="#ds-6"><span class="pf-toc-nav__num">6</span> Kontaktaufnahme</a></li>
                                <li><a href="#ds-7"><span class="pf-toc-nav__num">7</span> Google Analytics 4</a></li>
                                <li><a href="#ds-8"><span class="pf-toc-nav__num">8</span> Google Search Console</a></li>
                                <li><a href="#ds-9"><span class="pf-toc-nav__num">9</span> Drittlandübermittlung</a></li>
                                <li><a href="#ds-10"><span class="pf-toc-nav__num">10</span> Speicherdauer</a></li>
                                <li><a href="#ds-11"><span class="pf-toc-nav__num">11</span> Ihre Rechte</a></li>
                                <li><a href="#ds-12"><span class="pf-toc-nav__num">12</span> Beschwerderecht</a></li>
                                <li><a href="#ds-13"><span class="pf-toc-nav__num">13</span> SSL-Verschlüsselung</a></li>
                            </ul>
                        </div>

                        <div class="pf-sidebar-card pf-sidebar-card--accent">
                            <div class="pf-sidebar-card__title"><i class="bi bi-info-circle"></i> Stand & Grundlage</div>
                            <div class="pf-sidebar-meta-row">
                                <div class="pf-sidebar-meta-item">
                                    <div class="pf-sidebar-meta-icon"><i class="bi bi-calendar3"></i></div>
                                    <div>
                                        <span class="pf-sidebar-meta-label">Stand</span>
                                        <span class="pf-sidebar-meta-value">Juni 2026</span>
                                    </div>
                                </div>
                                <div class="pf-sidebar-meta-item">
                                    <div class="pf-sidebar-meta-icon"><i class="bi bi-file-earmark-text"></i></div>
                                    <div>
                                        <span class="pf-sidebar-meta-label">Grundlage</span>
                                        <span class="pf-sidebar-meta-value">DSGVO, TDDDG</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pf-sidebar-card">
                            <div class="pf-sidebar-card__title"><i class="bi bi-journals"></i> Weitere Seiten</div>
                            <ul class="pf-sidebar-links">
                                <li><a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>"><i class="bi bi-chevron-right"></i> Impressum</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/cookie-richtlinie/' ) ); ?>"><i class="bi bi-chevron-right"></i> Cookie-Richtlinie</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"><i class="bi bi-chevron-right"></i> Kontakt</a></li>
                            </ul>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

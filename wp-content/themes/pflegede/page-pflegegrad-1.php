<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrad 1 (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegegrad 1: Leistungen, Antrag &amp; Voraussetzungen 2026</title>' . "\n";
    echo '<meta name="description" content="Pflegegrad 1 erklärt: Voraussetzungen, alle Leistungen und der Entlastungsbetrag von 131 €. So beantragen Sie Pflegegrad 1 richtig. Verständlich auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/pflegegrad-1/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viel Geld bekomme ich bei Pflegegrad 1?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 1 gibt es kein Pflegegeld. Sie erhalten den Entlastungsbetrag von 131 Euro im Monat sowie Zuschüsse für Pflegehilfsmittel und den Umbau der Wohnung."}},
    {"@type":"Question","name":"Welche Punktzahl braucht man für Pflegegrad 1?","acceptedAnswer":{"@type":"Answer","text":"Für Pflegegrad 1 sind bei der Begutachtung zwischen 12,5 und unter 27 Gesamtpunkte nötig."}},
    {"@type":"Question","name":"Wofür kann ich den Entlastungsbetrag bei Pflegegrad 1 nutzen?","acceptedAnswer":{"@type":"Answer","text":"Den Entlastungsbetrag von 131 Euro können Sie für anerkannte Angebote nutzen, zum Beispiel für eine Betreuungskraft, einen Haushaltsdienst oder die Tagespflege. Der Betrag wird gegen Rechnung erstattet."}},
    {"@type":"Question","name":"Steht mir bei Pflegegrad 1 ein Pflegedienst zu?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 1 gibt es keine regulären Pflegesachleistungen. Sie können einen ambulanten Pflegedienst aber über den Entlastungsbetrag mitfinanzieren."}},
    {"@type":"Question","name":"Kann ich von Pflegegrad 1 in Pflegegrad 2 wechseln?","acceptedAnswer":{"@type":"Answer","text":"Ja. Wenn der Hilfebedarf steigt, können Sie eine Höherstufung beantragen. Bei der erneuten Begutachtung wird geprüft, ob Pflegegrad 2 oder höher vorliegt."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$leistungen = array(
    array( 'name' => 'Entlastungsbetrag',                   'betrag' => '131 € pro Monat',           'none' => false ),
    array( 'name' => 'Pflegehilfsmittel zum Verbrauch',     'betrag' => 'bis 42 € pro Monat',        'none' => false ),
    array( 'name' => 'Wohnumfeldverbessernde Maßnahmen',    'betrag' => 'bis 4.180 € je Maßnahme',   'none' => false ),
    array( 'name' => 'Zuschuss für Hausnotruf',             'betrag' => '25,50 € pro Monat',         'none' => false ),
    array( 'name' => 'Pflegeberatung',                      'betrag' => 'kostenlos nach §7a SGB XI', 'none' => false ),
    array( 'name' => 'Digitale Pflegeanwendungen (DiPA)',   'betrag' => 'bis 40 € pro Monat (seit 2026)', 'none' => false ),
    array( 'name' => 'Pflegegeld',                          'betrag' => 'kein Anspruch',             'none' => true ),
    array( 'name' => 'Pflegesachleistungen',               'betrag' => 'kein Anspruch',             'none' => true ),
);

$faqs = array(
    array( 'q' => 'Wie viel Geld bekomme ich bei Pflegegrad 1?', 'a' => 'Bei Pflegegrad 1 gibt es <strong>kein Pflegegeld</strong>. Sie erhalten den Entlastungsbetrag von 131 Euro im Monat sowie Zuschüsse für Pflegehilfsmittel und den Umbau der Wohnung.' ),
    array( 'q' => 'Welche Punktzahl braucht man für Pflegegrad 1?', 'a' => 'Für Pflegegrad 1 sind bei der Begutachtung zwischen <strong>12,5 und unter 27 Gesamtpunkte</strong> nötig.' ),
    array( 'q' => 'Wofür kann ich den Entlastungsbetrag bei Pflegegrad 1 nutzen?', 'a' => 'Den Entlastungsbetrag von 131 Euro können Sie für anerkannte Angebote nutzen, zum Beispiel für eine <strong>Betreuungskraft</strong>, einen <strong>Haushaltsdienst</strong> oder die <strong>Tagespflege</strong>. Der Betrag wird gegen Rechnung erstattet.' ),
    array( 'q' => 'Steht mir bei Pflegegrad 1 ein Pflegedienst zu?', 'a' => 'Bei Pflegegrad 1 gibt es keine regulären Pflegesachleistungen. Sie können einen ambulanten Pflegedienst aber über den <strong>Entlastungsbetrag</strong> mitfinanzieren.' ),
    array( 'q' => 'Kann ich von Pflegegrad 1 in Pflegegrad 2 wechseln?', 'a' => '<strong>Ja.</strong> Wenn der Hilfebedarf steigt, können Sie eine Höherstufung beantragen. Bei der erneuten Begutachtung wird geprüft, ob Pflegegrad 2 oder höher vorliegt.' ),
);
?>

<main role="main">

    <section class="pf-page-hero">
        <span class="pf-page-hero__pattern"></span>
        <div class="container">
            <div class="pf-page-hero__inner">
                <nav class="pf-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i> Startseite</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegrade</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Pflegegrad 1</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-1-circle"></i> Geringe Beeinträchtigung</span>
                        <h1 class="pf-page-hero__title">Pflegegrad 1: <span class="pf-page-hero__title-accent">Leistungen</span><br>und Antrag</h1>
                        <p class="pf-page-hero__desc">Pflegegrad 1 ist der niedrigste Pflegegrad und steht für eine geringe Beeinträchtigung der Selbstständigkeit. Es gibt kein Pflegegeld, aber den Entlastungsbetrag von 131 Euro im Monat sowie weitere Zuschüsse.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-gift"></i> 131 € Entlastungsbetrag</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clipboard2-pulse"></i> 12,5–27 Punkte</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> SGB XI · Stand 2025</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrad-pages-images/pflegegrad-1.jpg' ); ?>" alt="Seniorin mit Pflegegrad 1 erhält zu Hause leichte Unterstützung und bespricht Pflegeleistungen mit einer Angehörigen.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflegegrad 1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pf-page-hero__wave">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,30 C360,50 1080,0 1440,30 L1440,50 L0,50 Z"></path></svg>
        </div>
    </section>

    <div class="pf-page-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Byline -->
                    <div class="pf-byline">
                        <span class="pf-byline__item"><i class="bi bi-pencil"></i> Verfasst von <strong>Hassan Abid</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Amna Tauqeer</strong>, Redakteurin</span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <!-- Lead -->
                    <div class="pf-lead-box">
                        Pflegegrad 1 ist der niedrigste Pflegegrad und steht für eine <strong>geringe Beeinträchtigung der Selbstständigkeit</strong>. Es gibt kein Pflegegeld, aber den Entlastungsbetrag von 131 Euro im Monat sowie weitere Zuschüsse.
                    </div>

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 1 ist der erste von fünf Pflegegraden in Deutschland. Vielen ist gar nicht bewusst, dass schon bei einer geringen Beeinträchtigung ein Anspruch auf Unterstützung bestehen kann. Auf dieser Seite erfahren Sie, welche Voraussetzungen für Pflegegrad 1 gelten, welche Leistungen Ihnen 2026 zustehen und wie Sie Pflegegrad 1 beantragen. Eine allgemeine Übersicht über alle Stufen finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegraden</a>. pflegede.com erklärt Ihnen jeden Schritt verständlich.</p>
                        </div>
                    </div>

                    <!-- Was bedeutet -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was bedeutet Pflegegrad 1?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 1 erhalten Menschen mit einer <strong>geringen Beeinträchtigung der Selbstständigkeit</strong>. Das heißt, die Person kommt im Alltag noch weitgehend allein zurecht, braucht aber bei einzelnen Dingen Unterstützung. Pflegegrad 1 wurde mit der Pflegereform 2017 eingeführt, um auch Menschen mit geringem Hilfebedarf früh zu unterstützen und einer Verschlechterung vorzubeugen.</p>
                        </div>
                    </div>

                    <!-- Voraussetzungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Voraussetzungen für Pflegegrad 1</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Ob Pflegegrad 1 vorliegt, wird durch den <strong>Medizinischen Dienst</strong> festgestellt. Bei der Begutachtung werden in sechs Bereichen Punkte vergeben. Für Pflegegrad 1 sind zwischen <strong>12,5 und unter 27 Gesamtpunkte</strong> nötig. Geprüft werden unter anderem die Mobilität, die geistigen Fähigkeiten, das Verhalten und die Selbstversorgung. Wie die Begutachtung abläuft und wie Sie sich vorbereiten, lesen Sie im Ratgeber zur <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>">MDK-Begutachtung</a>.</p>
                        </div>
                    </div>

                    <!-- Leistungen Tabelle -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Welche Leistungen gibt es bei Pflegegrad 1?</h2>
                    <p class="pf-h-section-sub">Anders als bei den höheren Pflegegraden gibt es kein Pflegegeld und keine Pflegesachleistungen. Dafür stehen Ihnen mehrere andere Leistungen zu, die viele Betroffene gar nicht kennen.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Leistung bei Pflegegrad 1</th>
                                    <th>Betrag / Anspruch</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $leistungen as $row ) : ?>
                                <tr>
                                    <td><strong><?php echo esc_html( $row['name'] ); ?></strong></td>
                                    <td><span class="pf-pg-amount<?php echo $row['none'] ? ' pf-pg-amount--none' : ''; ?>"><?php echo esc_html( $row['betrag'] ); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: GKV-Spitzenverband, SGB XI · Leistungsbeträge gültig seit 1. Januar 2025 · Stand der Seite: Juni 2026</div>
                    </div>

                    <!-- Entlastungsbetrag -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-gift text-success"></i> Der Entlastungsbetrag von 131 Euro</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die wichtigste Leistung bei Pflegegrad 1 ist der <strong>Entlastungsbetrag</strong>. Er beträgt 131 Euro im Monat und ist zweckgebunden. Das bedeutet, Sie können ihn für bestimmte anerkannte Angebote einsetzen, zum Beispiel für eine Betreuungskraft, einen Haushaltsdienst, die Tagespflege oder eine ambulante Pflegekraft. Den Betrag bekommen Sie nicht bar ausgezahlt — Sie reichen die Rechnung ein und die Pflegekasse erstattet die Kosten. Nicht genutzte Beträge können Sie ins nächste Halbjahr übertragen.</p>
                        </div>
                    </div>

                    <!-- Zuschüsse -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-tools text-success"></i> Zuschüsse für Hilfsmittel und Wohnung</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Auch bei Pflegegrad 1 haben Sie Anspruch auf <strong>Pflegehilfsmittel zum Verbrauch</strong> im Wert von bis zu 42 Euro im Monat, etwa Einmalhandschuhe oder Desinfektionsmittel. Für den altersgerechten Umbau der Wohnung gibt es bis zu <strong>4.180 Euro je Maßnahme</strong>, zum Beispiel für ein barrierefreies Bad. Eine Übersicht aller Zuschüsse finden Sie bei den <a href="<?php echo esc_url( home_url( '/leistungen/pflegehilfsmittel/' ) ); ?>">Pflegehilfsmitteln</a>. Für digitale Pflegeanwendungen gilt seit 2026 ein Zuschuss von bis zu 40 Euro im Monat, ergänzt um bis zu 30 Euro für Unterstützung bei der Nutzung.</p>
                        </div>
                    </div>

                    <!-- Beantragen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-file-earmark-text text-success"></i> Pflegegrad 1 beantragen</h2>
                    <p class="pf-h-section-sub">Den Pflegegrad 1 beantragen Sie formlos bei Ihrer Pflegekasse. So gehen Sie vor:</p>
                    <ol class="pf-antrag-steps">
                        <li>Antrag bei der Pflegekasse stellen — telefonisch, schriftlich oder online.</li>
                        <li>Die Pflegekasse beauftragt den Medizinischen Dienst mit der Begutachtung.</li>
                        <li>Ein Gutachter besucht die pflegebedürftige Person zu Hause.</li>
                        <li>Sie erhalten den Bescheid mit dem Ergebnis schriftlich.</li>
                        <li>Bei Ablehnung können Sie innerhalb von vier Wochen Widerspruch einlegen.</li>
                    </ol>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-lightbulb"></i></div>
                        <span>Die Leistungen gelten <strong>ab dem Monat der Antragstellung</strong>. Stellen Sie den Antrag daher frühzeitig. Eine ausführliche Anleitung finden Sie unter <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ); ?>">Pflegegrad beantragen</a>. Wurde Ihr Antrag abgelehnt, hilft unser Ratgeber zum <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-widerspruch/' ) ); ?>">Pflegegrad-Widerspruch</a>.</span>
                    </div>

                    <!-- Erhöhen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-up-circle text-success"></i> Pflegegrad 1 erhöhen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Verschlechtert sich der Gesundheitszustand, können Sie einen Antrag auf <strong>Höherstufung</strong> stellen. Dann prüft der Medizinische Dienst erneut und stuft die Person bei höherem Hilfebedarf in <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-2/' ) ); ?>">Pflegegrad 2</a> oder höher ein. Damit steigen auch die Leistungen deutlich, denn ab Pflegegrad 2 gibt es Pflegegeld und Pflegesachleistungen.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegegrad 1</h2>
                    <div class="pf-faq-list">
                        <?php foreach ( $faqs as $i => $f ) : ?>
                            <details class="pf-faq-item"<?php echo $i === 0 ? ' open' : ''; ?>>
                                <summary class="pf-faq-item__q">
                                    <span><?php echo esc_html( $f['q'] ); ?></span>
                                    <i class="bi bi-chevron-down pf-faq-item__chevron"></i>
                                </summary>
                                <div class="pf-faq-item__a"><?php echo wp_kses_post( $f['a'] ); ?></div>
                            </details>
                        <?php endforeach; ?>
                    </div>

                    <!-- Fazit -->
                    <div class="pf-fazit">
                        <div class="pf-fazit__label"><i class="bi bi-flag"></i> Fazit</div>
                        <p class="pf-fazit__text">Pflegegrad 1 bringt zwar kein Pflegegeld, bietet aber wichtige Unterstützung wie den <strong>Entlastungsbetrag von 131 Euro</strong> und Zuschüsse für Hilfsmittel und Wohnung. Wer die Leistungen kennt und nutzt, kann den Alltag spürbar erleichtern.</p>
                    </div>

                    <!-- Bottom Hinweis -->
                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle medizinische, rechtliche oder pflegerische Beratung.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

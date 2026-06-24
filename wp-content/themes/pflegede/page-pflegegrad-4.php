<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrad 4 (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegegrad 4: Pflegegeld, Leistungen &amp; Antrag 2026</title>' . "\n";
    echo '<meta name="description" content="Pflegegrad 4: 800 € Pflegegeld oder 1.859 € Sachleistungen, Voraussetzungen und Antrag. Alle Leistungen 2026 verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/pflegegrad-4/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viel Geld bekomme ich bei Pflegegrad 4?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 4 erhalten Sie 800 Euro Pflegegeld pro Monat oder Pflegesachleistungen im Wert von bis zu 1.859 Euro pro Monat. Dazu kommen der Entlastungsbetrag von 131 Euro pro Monat sowie weitere Leistungen der Pflegeversicherung."}},
    {"@type":"Question","name":"Wie viele Punkte braucht man für Pflegegrad 4?","acceptedAnswer":{"@type":"Answer","text":"Für Pflegegrad 4 sind bei der Begutachtung zwischen 70 und unter 90 Punkte nötig."}},
    {"@type":"Question","name":"Was ist der Unterschied zwischen Pflegegrad 3 und 4?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 4 ist die Selbstständigkeit stärker eingeschränkt als bei Pflegegrad 3, und die Leistungen sind höher. Das Pflegegeld steigt von 599 auf 800 Euro, die Sachleistungen von 1.497 auf 1.859 Euro."}},
    {"@type":"Question","name":"Kann man mit Pflegegrad 4 zu Hause wohnen?","acceptedAnswer":{"@type":"Answer","text":"Ja. Auch mit Pflegegrad 4 ist eine Versorgung zu Hause möglich. Die hohen Sachleistungen ermöglichen eine intensive Unterstützung durch einen Pflegedienst, ergänzt durch Tagespflege und die Hilfe von Angehörigen."}},
    {"@type":"Question","name":"Kann Pflegegrad 4 in Pflegegrad 5 umgewandelt werden?","acceptedAnswer":{"@type":"Answer","text":"Ja. Verschlechtert sich der Gesundheitszustand weiter, kann eine Höherstufung beantragt werden. Erreicht die pflegebedürftige Person bei der Begutachtung mindestens 90 Punkte und besteht ein besonders hoher Unterstützungsbedarf, ist eine Einstufung in Pflegegrad 5 möglich."}},
    {"@type":"Question","name":"Wie oft ist bei Pflegegrad 4 ein Beratungseinsatz nötig?","acceptedAnswer":{"@type":"Answer","text":"Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 4 ein Beratungseinsatz vierteljährlich verpflichtend, also alle drei Monate. Bei Pflegegrad 2 und 3 ist er nur halbjährlich nötig."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$leistungen = array(
    array( 'name' => 'Pflegegeld (Pflege durch Angehörige)', 'betrag' => '800 € pro Monat',              'law' => '§37 SGB XI' ),
    array( 'name' => 'Pflegesachleistungen (Pflegedienst)',   'betrag' => 'bis 1.859 € pro Monat',        'law' => '§36 SGB XI' ),
    array( 'name' => 'Entlastungsbetrag',                     'betrag' => '131 € pro Monat',              'law' => '§45b SGB XI' ),
    array( 'name' => 'Tages- und Nachtpflege',                'betrag' => 'bis 1.685 € pro Monat',        'law' => '§41 SGB XI' ),
    array( 'name' => 'Verhinderungs- und Kurzzeitpflege',     'betrag' => 'bis 3.539 € pro Jahr (gemeinsam)', 'law' => '§42a SGB XI' ),
    array( 'name' => 'Pflegehilfsmittel zum Verbrauch',       'betrag' => 'bis 42 € pro Monat',           'law' => '§40 SGB XI' ),
    array( 'name' => 'Zuschuss für Hausnotruf',               'betrag' => 'bis 25,50 € pro Monat',        'law' => '§40 SGB XI' ),
    array( 'name' => 'Wohnumfeldverbessernde Maßnahmen',      'betrag' => 'bis 4.180 € je Maßnahme',      'law' => '§40 Abs. 4 SGB XI' ),
    array( 'name' => 'Vollstationäre Pflege',                 'betrag' => '1.855 € pro Monat',            'law' => '§43 SGB XI' ),
);

$faqs = array(
    array( 'q' => 'Wie viel Geld bekomme ich bei Pflegegrad 4?', 'a' => 'Bei Pflegegrad 4 erhalten Sie <strong>800 Euro Pflegegeld</strong> pro Monat oder Pflegesachleistungen im Wert von bis zu 1.859 Euro pro Monat. Dazu kommen der Entlastungsbetrag von 131 Euro sowie weitere Leistungen.' ),
    array( 'q' => 'Wie viele Punkte braucht man für Pflegegrad 4?', 'a' => 'Für Pflegegrad 4 sind bei der Begutachtung zwischen <strong>70 und unter 90 Punkte</strong> nötig.' ),
    array( 'q' => 'Was ist der Unterschied zwischen Pflegegrad 3 und 4?', 'a' => 'Bei Pflegegrad 4 ist die Selbstständigkeit stärker eingeschränkt als bei Pflegegrad 3, und die Leistungen sind höher. Das Pflegegeld steigt von 599 auf <strong>800 Euro</strong>, die Sachleistungen von 1.497 auf <strong>1.859 Euro</strong>.' ),
    array( 'q' => 'Kann man mit Pflegegrad 4 zu Hause wohnen?', 'a' => '<strong>Ja.</strong> Auch mit Pflegegrad 4 ist eine Versorgung zu Hause möglich. Die hohen Sachleistungen ermöglichen eine intensive Unterstützung durch einen Pflegedienst, ergänzt durch Tagespflege und die Hilfe von Angehörigen.' ),
    array( 'q' => 'Kann Pflegegrad 4 in Pflegegrad 5 umgewandelt werden?', 'a' => '<strong>Ja.</strong> Verschlechtert sich der Gesundheitszustand weiter, kann eine Höherstufung beantragt werden. Erreicht die Person bei der Begutachtung mindestens 90 Punkte und besteht ein besonders hoher Unterstützungsbedarf, ist eine Einstufung in Pflegegrad 5 möglich.' ),
    array( 'q' => 'Wie oft ist bei Pflegegrad 4 ein Beratungseinsatz nötig?', 'a' => 'Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 4 ein Beratungseinsatz <strong>vierteljährlich</strong> verpflichtend, also alle drei Monate. Bei Pflegegrad 2 und 3 ist er nur halbjährlich nötig.' ),
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
                    <span class="pf-breadcrumb__current">Pflegegrad 4</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-4-circle"></i> Schwerste Beeinträchtigung</span>
                        <h1 class="pf-page-hero__title">Pflegegrad 4: <span class="pf-page-hero__title-accent">Pflegegeld</span><br>und Leistungen</h1>
                        <p class="pf-page-hero__desc">Pflegegrad 4 steht für eine schwerste Beeinträchtigung der Selbstständigkeit. Betroffene erhalten 800 Euro Pflegegeld oder bis zu 1.859 Euro Pflegesachleistungen pro Monat sowie viele weitere Leistungen der Pflegekasse.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> 800 € Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house-heart"></i> 1.859 € Sachleistung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clipboard2-pulse"></i> 70–90 Punkte</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrad-pages-images/pflegegrad-4.jpg' ); ?>" alt="Pflegekraft unterstützt eine Person mit Pflegegrad 4 bei umfangreicher häuslicher Pflege und Mobilität im Alltag.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflegegrad 4</span>
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
                        Pflegegrad 4 steht für eine <strong>schwerste Beeinträchtigung der Selbstständigkeit</strong>. Betroffene erhalten 800 Euro Pflegegeld oder bis zu 1.859 Euro Pflegesachleistungen pro Monat sowie viele weitere Leistungen der Pflegekasse.
                    </div>

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 4 ist der zweithöchste von fünf Pflegegraden und steht für einen sehr hohen Hilfebedarf. Menschen mit Pflegegrad 4 benötigen in fast allen Bereichen des täglichen Lebens umfassende Unterstützung, oft mehrmals täglich. Viele Betroffene können mit der richtigen Hilfe weiterhin zu Hause versorgt werden. Auf dieser Seite erfahren Sie, welche Voraussetzungen gelten, wie viel Geld Ihnen 2026 zusteht und wie Sie Pflegegrad 4 beantragen. Eine allgemeine Übersicht über alle Pflegegrade finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegraden</a>.</p>
                        </div>
                    </div>

                    <!-- Was bedeutet -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was bedeutet Pflegegrad 4?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 4 bedeutet eine <strong>schwerste Beeinträchtigung der Selbstständigkeit</strong>. Betroffene sind in nahezu allen Bereichen des Alltags auf Hilfe angewiesen — etwa bei der Körperpflege, beim Essen, bei der Mobilität und im Haushalt. Je nach Ursache der Pflegebedürftigkeit können auch ausgeprägte kognitive Einschränkungen oder eine schwere Demenz vorliegen. Der Unterstützungsbedarf ist entsprechend hoch und erfordert häufig eine Kombination aus professioneller Pflege, Unterstützung durch Angehörige und Pflegehilfsmitteln.</p>
                        </div>
                    </div>

                    <!-- Voraussetzungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Voraussetzungen für Pflegegrad 4</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Ob Pflegegrad 4 vorliegt, stellt der <strong>Medizinische Dienst</strong> bei der Begutachtung fest. Bewertet wird die Selbstständigkeit in sechs Bereichen, aus denen sich eine Gesamtpunktzahl ergibt. Für Pflegegrad 4 sind zwischen <strong>70 und unter 90 Punkte</strong> nötig. Die sechs Bereiche werden unterschiedlich gewichtet — das Modul Selbstversorgung zählt mit 40 Prozent am stärksten. Wie die Begutachtung abläuft, lesen Sie im Ratgeber zur <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>">MDK-Begutachtung</a>.</p>
                        </div>
                    </div>

                    <!-- Leistungen Tabelle -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Welche Leistungen gibt es bei Pflegegrad 4?</h2>
                    <p class="pf-h-section-sub">Mit Pflegegrad 4 stehen Ihnen alle wichtigen Leistungen der Pflegeversicherung in deutlich höherem Umfang zu als bei Pflegegrad 3.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Leistung bei Pflegegrad 4</th>
                                    <th>Betrag 2025</th>
                                    <th>Rechtsgrundlage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $leistungen as $row ) : ?>
                                <tr>
                                    <td><strong><?php echo esc_html( $row['name'] ); ?></strong></td>
                                    <td><span class="pf-pg-amount"><?php echo esc_html( $row['betrag'] ); ?></span></td>
                                    <td><span class="pf-pg-law"><?php echo esc_html( $row['law'] ); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: Bundesgesundheitsministerium, GKV-Spitzenverband, SGB XI · Leistungsbeträge gültig seit 1. Januar 2025 · Stand der Seite: Juni 2026</div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Die seit Januar 2025 geltenden Leistungsbeträge gelten weiterhin unverändert im Jahr 2026.</span>
                    </div>

                    <!-- Pflegegeld oder Sachleistungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-left-right text-success"></i> Pflegegeld oder Pflegesachleistungen?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Bei Pflegegrad 4 haben Sie die Wahl. Wird die Pflege zu Hause durch Angehörige übernommen, erhalten Sie <strong>800 Euro Pflegegeld</strong> pro Monat. Übernimmt ein ambulanter Pflegedienst die Versorgung, zahlt die Pflegekasse bis zu <strong>1.859 Euro Pflegesachleistungen</strong> pro Monat. Beide Leistungen können auch miteinander kombiniert werden: Nutzen Sie zum Beispiel nur die Hälfte der Sachleistungen, bekommen Sie zusätzlich die Hälfte des Pflegegeldes ausgezahlt. Diese <strong>Kombinationsleistung</strong> ist gerade bei einem hohen Pflegebedarf sinnvoll, wenn Angehörige und Pflegedienst sich die Pflege teilen.</p>
                        </div>
                    </div>

                    <!-- Entlastungsbetrag, Tagespflege -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-plus-circle text-success"></i> Entlastungsbetrag, Tagespflege und mehr</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Zusätzlich steht Ihnen der <strong>Entlastungsbetrag</strong> von 131 Euro pro Monat zu. Für die <strong>Tages- und Nachtpflege</strong> gibt es ein eigenes Budget von bis zu 1.685 Euro pro Monat, das das Sachleistungsbudget nicht verringert. Fällt die Pflegeperson aus, kann <strong>Verhinderungspflege</strong> in Anspruch genommen werden. Seit dem 1. Juli 2025 bilden Verhinderungs- und Kurzzeitpflege ein gemeinsames Jahresbudget von bis zu 3.539 Euro.</p>
                        </div>
                    </div>

                    <!-- Leistungen im Pflegeheim -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-building text-success"></i> Leistungen im Pflegeheim</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Entscheiden Sie sich für eine <strong>vollstationäre Pflege</strong> im Heim, zahlt die Pflegekasse bei Pflegegrad 4 einen Zuschuss von <strong>1.855 Euro pro Monat</strong>. Das ist deutlich mehr als bei Pflegegrad 1 bis 3. Den darüber hinausgehenden Eigenanteil für Unterkunft, Verpflegung und Investitionskosten tragen Sie selbst. Diesen Eigenanteil senkt ein gestaffelter Leistungszuschlag, der mit der Dauer des Heimaufenthalts steigt.</p>
                        </div>
                    </div>

                    <!-- Beantragen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-file-earmark-text text-success"></i> Pflegegrad 4 beantragen</h2>
                    <p class="pf-h-section-sub">Den Pflegegrad 4 beantragen Sie formlos bei Ihrer Pflegekasse. So gehen Sie vor:</p>
                    <ol class="pf-antrag-steps">
                        <li>Antrag bei der Pflegekasse stellen — telefonisch, schriftlich oder online.</li>
                        <li>Die Pflegekasse beauftragt den Medizinischen Dienst mit der Begutachtung.</li>
                        <li>Ein Gutachter besucht die pflegebedürftige Person zu Hause.</li>
                        <li>Sie erhalten den Bescheid mit dem Ergebnis schriftlich.</li>
                        <li>Bei einer zu niedrigen Einstufung können Sie innerhalb eines Monats Widerspruch einlegen.</li>
                    </ol>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-lightbulb"></i></div>
                        <span>Die Leistungen gelten <strong>ab dem Monat der Antragstellung</strong> — stellen Sie den Antrag frühzeitig. Hat die Person bereits einen niedrigeren Pflegegrad und hat sich der Zustand verschlechtert, stellen Sie einen Antrag auf Höherstufung. Eine ausführliche Anleitung finden Sie unter <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ); ?>">Pflegegrad beantragen</a>.</span>
                    </div>

                    <!-- Beratungseinsatz -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-chat-square-heart text-success"></i> Beratungseinsatz bei Pflegegrad 4</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 4 ein <strong>Beratungseinsatz nach §37 Abs. 3 SGB XI</strong> verpflichtend. Anders als bei Pflegegrad 2 und 3 findet er <strong>vierteljährlich</strong> statt, also alle drei Monate. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause, prüft die Pflegesituation und gibt Tipps. Versäumen Sie den Einsatz, kann die Pflegekasse das Pflegegeld kürzen.</p>
                        </div>
                    </div>

                    <!-- Erhöhen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-up-circle text-success"></i> Pflegegrad 4 erhöhen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Verschlechtert sich der Gesundheitszustand weiter, können Sie eine <strong>Höherstufung</strong> beantragen. Erreicht die Person bei der erneuten Begutachtung 90 Punkte oder mehr und liegt ein besonders hoher Versorgungsbedarf vor, wird sie in <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-5/' ) ); ?>">Pflegegrad 5</a> eingestuft. Damit steigen das Pflegegeld und die übrigen Leistungen noch einmal.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegegrad 4</h2>
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
                        <p class="pf-fazit__text">Pflegegrad 4 bringt umfangreiche Leistungen für einen sehr hohen Pflegebedarf. Mit <strong>800 Euro Pflegegeld</strong> oder <strong>1.859 Euro Sachleistungen</strong>, dem Entlastungsbetrag, der Tagespflege und weiteren Leistungen kann auch ein sehr hoher Unterstützungsbedarf zu Hause bewältigt werden.</p>
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

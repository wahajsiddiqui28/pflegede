<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrad 3 (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegegrad 3: Pflegegeld, Leistungen &amp; Antrag 2026</title>' . "\n";
    echo '<meta name="description" content="Pflegegrad 3: 599 € Pflegegeld oder 1.497 € Sachleistungen, Voraussetzungen und Antrag. Alle Leistungen 2026 verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/pflegegrad-3/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viel Geld bekomme ich bei Pflegegrad 3?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 3 erhalten Sie 599 Euro Pflegegeld pro Monat oder Pflegesachleistungen im Wert von bis zu 1.497 Euro pro Monat. Dazu kommen der Entlastungsbetrag von 131 Euro pro Monat sowie weitere Leistungen der Pflegeversicherung."}},
    {"@type":"Question","name":"Wie viele Punkte braucht man für Pflegegrad 3?","acceptedAnswer":{"@type":"Answer","text":"Für Pflegegrad 3 sind bei der Begutachtung zwischen 47,5 und unter 70 Punkte nötig."}},
    {"@type":"Question","name":"Was ist der Unterschied zwischen Pflegegrad 2 und 3?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 3 ist die Selbstständigkeit stärker eingeschränkt als bei Pflegegrad 2, und die Leistungen sind höher. Das Pflegegeld steigt von 347 auf 599 Euro, die Sachleistungen von 796 auf 1.497 Euro."}},
    {"@type":"Question","name":"Bekomme ich bei Pflegegrad 3 eine Tagespflege?","acceptedAnswer":{"@type":"Answer","text":"Ja. Für die Tages- und Nachtpflege steht Ihnen ein eigenes Budget von bis zu 1.357 Euro im Monat zu. Es verringert Ihr Pflegegeld und Ihre Sachleistungen nicht."}},
    {"@type":"Question","name":"Kann man mit Pflegegrad 3 zu Hause wohnen?","acceptedAnswer":{"@type":"Answer","text":"Ja. Viele Menschen mit Pflegegrad 3 werden weiterhin zu Hause versorgt. Angehörige, ambulante Pflegedienste sowie zusätzliche Leistungen der Pflegeversicherung können die Versorgung unterstützen."}},
    {"@type":"Question","name":"Muss ich bei Pflegegrad 3 zur Pflegeberatung?","acceptedAnswer":{"@type":"Answer","text":"Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 3 ein halbjährlicher Beratungseinsatz verpflichtend. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$leistungen = array(
    array( 'name' => 'Pflegegeld (Pflege durch Angehörige)', 'betrag' => '599 € pro Monat',              'law' => '§37 SGB XI' ),
    array( 'name' => 'Pflegesachleistungen (Pflegedienst)',   'betrag' => 'bis 1.497 € pro Monat',        'law' => '§36 SGB XI' ),
    array( 'name' => 'Entlastungsbetrag',                     'betrag' => '131 € pro Monat',              'law' => '§45b SGB XI' ),
    array( 'name' => 'Tages- und Nachtpflege',                'betrag' => 'bis 1.357 € pro Monat',        'law' => '§41 SGB XI' ),
    array( 'name' => 'Verhinderungs- und Kurzzeitpflege',     'betrag' => 'bis 3.539 € pro Jahr (gemeinsam)', 'law' => '§42a SGB XI' ),
    array( 'name' => 'Pflegehilfsmittel zum Verbrauch',       'betrag' => 'bis 42 € pro Monat',           'law' => '§40 SGB XI' ),
    array( 'name' => 'Zuschuss für Hausnotruf',               'betrag' => 'bis 25,50 € pro Monat',        'law' => '§40 SGB XI' ),
    array( 'name' => 'Wohnumfeldverbessernde Maßnahmen',      'betrag' => 'bis 4.180 € je Maßnahme',      'law' => '§40 Abs. 4 SGB XI' ),
    array( 'name' => 'Vollstationäre Pflege',                 'betrag' => '1.319 € pro Monat',            'law' => '§43 SGB XI' ),
);

$faqs = array(
    array( 'q' => 'Wie viel Geld bekomme ich bei Pflegegrad 3?', 'a' => 'Bei Pflegegrad 3 erhalten Sie <strong>599 Euro Pflegegeld</strong> pro Monat oder Pflegesachleistungen im Wert von bis zu 1.497 Euro pro Monat. Dazu kommen der Entlastungsbetrag von 131 Euro sowie weitere Leistungen.' ),
    array( 'q' => 'Wie viele Punkte braucht man für Pflegegrad 3?', 'a' => 'Für Pflegegrad 3 sind bei der Begutachtung zwischen <strong>47,5 und unter 70 Punkte</strong> nötig.' ),
    array( 'q' => 'Was ist der Unterschied zwischen Pflegegrad 2 und 3?', 'a' => 'Bei Pflegegrad 3 ist die Selbstständigkeit stärker eingeschränkt als bei Pflegegrad 2, und die Leistungen sind höher. Das Pflegegeld steigt von 347 auf <strong>599 Euro</strong>, die Sachleistungen von 796 auf <strong>1.497 Euro</strong>.' ),
    array( 'q' => 'Bekomme ich bei Pflegegrad 3 eine Tagespflege?', 'a' => '<strong>Ja.</strong> Für die Tages- und Nachtpflege steht Ihnen ein eigenes Budget von bis zu 1.357 Euro im Monat zu. Es verringert Ihr Pflegegeld und Ihre Sachleistungen nicht.' ),
    array( 'q' => 'Kann man mit Pflegegrad 3 zu Hause wohnen?', 'a' => '<strong>Ja.</strong> Viele Menschen mit Pflegegrad 3 werden weiterhin zu Hause versorgt. Angehörige, ambulante Pflegedienste sowie zusätzliche Leistungen der Pflegeversicherung können die Versorgung unterstützen.' ),
    array( 'q' => 'Muss ich bei Pflegegrad 3 zur Pflegeberatung?', 'a' => 'Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 3 ein <strong>halbjährlicher Beratungseinsatz</strong> verpflichtend. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause.' ),
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
                    <span class="pf-breadcrumb__current">Pflegegrad 3</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-3-circle"></i> Schwere Beeinträchtigung</span>
                        <h1 class="pf-page-hero__title">Pflegegrad 3: <span class="pf-page-hero__title-accent">Pflegegeld</span><br>und Leistungen</h1>
                        <p class="pf-page-hero__desc">Pflegegrad 3 steht für eine schwere Beeinträchtigung der Selbstständigkeit. Betroffene erhalten 599 Euro Pflegegeld oder bis zu 1.497 Euro Pflegesachleistungen im Monat sowie viele weitere Leistungen der Pflegekasse.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> 599 € Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house-heart"></i> 1.497 € Sachleistung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clipboard2-pulse"></i> 47,5–70 Punkte</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrad-pages-images/pflegegrad-3.jpg' ); ?>" alt="Pflegekraft unterstützt eine Person mit Pflegegrad 3 bei intensiver häuslicher Pflege und Versorgung.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflegegrad 3</span>
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
                        Pflegegrad 3 steht für eine <strong>schwere Beeinträchtigung der Selbstständigkeit</strong>. Betroffene erhalten 599 Euro Pflegegeld oder bis zu 1.497 Euro Pflegesachleistungen im Monat sowie viele weitere Leistungen der Pflegekasse.
                    </div>

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 3 ist der mittlere von fünf Pflegegraden und steht für einen bereits hohen Hilfebedarf im Alltag. Menschen mit Pflegegrad 3 benötigen in mehreren Bereichen des täglichen Lebens regelmäßig Unterstützung. Viele Betroffene können weiterhin zu Hause versorgt werden. Auf dieser Seite erfahren Sie, welche Voraussetzungen gelten, wie viel Geld Ihnen 2026 zusteht und wie Sie Pflegegrad 3 beantragen. Eine allgemeine Übersicht über alle Pflegegrade finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegraden</a>.</p>
                        </div>
                    </div>

                    <!-- Was bedeutet -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was bedeutet Pflegegrad 3?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 3 bedeutet eine <strong>schwere Beeinträchtigung der Selbstständigkeit</strong>. Betroffene benötigen in vielen Bereichen des Alltags regelmäßig und in erheblichem Umfang Hilfe — etwa bei der Körperpflege, beim An- und Auskleiden, bei der Mobilität oder bei der Einnahme von Medikamenten. Je nach Ursache der Pflegebedürftigkeit können auch kognitive Einschränkungen oder eine Demenz vorliegen.</p>
                        </div>
                    </div>

                    <!-- Voraussetzungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Voraussetzungen für Pflegegrad 3</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Ob Pflegegrad 3 vorliegt, stellt der <strong>Medizinische Dienst</strong> bei der Begutachtung fest. Bewertet wird die Selbstständigkeit in sechs Bereichen, aus denen sich eine Gesamtpunktzahl ergibt. Für Pflegegrad 3 sind zwischen <strong>47,5 und unter 70 Punkte</strong> nötig. Die sechs Bereiche werden unterschiedlich gewichtet — das Modul Selbstversorgung zählt mit 40 Prozent am stärksten. Wie die Begutachtung abläuft, lesen Sie im Ratgeber zur <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>">MDK-Begutachtung</a>.</p>
                        </div>
                    </div>

                    <!-- Leistungen Tabelle -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Welche Leistungen gibt es bei Pflegegrad 3?</h2>
                    <p class="pf-h-section-sub">Mit Pflegegrad 3 stehen Ihnen alle wichtigen Leistungen der Pflegeversicherung zu. Die Beträge sind deutlich höher als bei Pflegegrad 2.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Leistung bei Pflegegrad 3</th>
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
                            <p>Bei Pflegegrad 3 haben Sie die Wahl. Wird die Pflege zu Hause durch Angehörige übernommen, erhalten Sie <strong>599 Euro Pflegegeld</strong> pro Monat. Übernimmt ein ambulanter Pflegedienst die Versorgung, zahlt die Pflegekasse bis zu <strong>1.497 Euro Pflegesachleistungen</strong> pro Monat. Beide Leistungen können auch miteinander kombiniert werden: Nutzen Sie zum Beispiel nur die Hälfte der Sachleistungen, bekommen Sie zusätzlich die Hälfte des Pflegegeldes ausgezahlt. Diese <strong>Kombinationsleistung</strong> ist ideal, wenn Angehörige und Pflegedienst sich die Pflege teilen.</p>
                        </div>
                    </div>

                    <!-- Entlastungsbetrag, Tagespflege -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-plus-circle text-success"></i> Entlastungsbetrag, Tagespflege und mehr</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Zusätzlich steht Ihnen der <strong>Entlastungsbetrag</strong> von 131 Euro pro Monat zu. Für die <strong>Tages- und Nachtpflege</strong> gibt es ein eigenes Budget von bis zu 1.357 Euro im Monat, das das Sachleistungsbudget nicht verringert. Fällt die Pflegeperson aus, springt die <strong>Verhinderungspflege</strong> ein. Seit dem 1. Juli 2025 bilden Verhinderungs- und Kurzzeitpflege ein gemeinsames Jahresbudget von bis zu 3.539 Euro.</p>
                        </div>
                    </div>

                    <!-- Leistungen im Pflegeheim -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-building text-success"></i> Leistungen im Pflegeheim</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Entscheiden Sie sich für eine <strong>vollstationäre Pflege</strong> im Heim, zahlt die Pflegekasse bei Pflegegrad 3 einen Zuschuss von <strong>1.319 Euro im Monat</strong>. Den darüber hinausgehenden Eigenanteil für Unterkunft, Verpflegung und Investitionskosten tragen Sie selbst. Diesen Eigenanteil senkt ein gestaffelter Leistungszuschlag, der mit der Dauer des Heimaufenthalts steigt.</p>
                        </div>
                    </div>

                    <!-- Beantragen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-file-earmark-text text-success"></i> Pflegegrad 3 beantragen</h2>
                    <p class="pf-h-section-sub">Den Pflegegrad 3 beantragen Sie formlos bei Ihrer Pflegekasse. So gehen Sie vor:</p>
                    <ol class="pf-antrag-steps">
                        <li>Antrag bei der Pflegekasse stellen — telefonisch, schriftlich oder online.</li>
                        <li>Die Pflegekasse beauftragt den Medizinischen Dienst mit der Begutachtung.</li>
                        <li>Ein Gutachter besucht die pflegebedürftige Person zu Hause.</li>
                        <li>Sie erhalten den Bescheid mit dem Ergebnis schriftlich.</li>
                        <li>Bei einer zu niedrigen Einstufung können Sie innerhalb eines Monats Widerspruch einlegen.</li>
                    </ol>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-lightbulb"></i></div>
                        <span>Die Leistungen gelten <strong>ab dem Monat der Antragstellung</strong> — stellen Sie den Antrag frühzeitig. Die Pflegekasse muss in der Regel innerhalb von 25 Arbeitstagen entscheiden. Eine ausführliche Anleitung finden Sie unter <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ); ?>">Pflegegrad beantragen</a>.</span>
                    </div>

                    <!-- Beratungseinsatz -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-chat-square-heart text-success"></i> Beratungseinsatz bei Pflegegrad 3</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 3 ein <strong>Beratungseinsatz nach §37 Abs. 3 SGB XI</strong> verpflichtend. Dieser findet halbjährlich statt. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause, prüft die Pflegesituation und gibt Tipps. Versäumen Sie den Einsatz, kann die Pflegekasse das Pflegegeld kürzen.</p>
                        </div>
                    </div>

                    <!-- Erhöhen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-up-circle text-success"></i> Pflegegrad 3 erhöhen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Verschlechtert sich der Gesundheitszustand, können Sie eine <strong>Höherstufung</strong> beantragen. Erreicht die Person bei der erneuten Begutachtung 70 Punkte oder mehr, wird sie in <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-4/' ) ); ?>">Pflegegrad 4</a> eingestuft. Damit steigen das Pflegegeld und die übrigen Leistungen weiter.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegegrad 3</h2>
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
                        <p class="pf-fazit__text">Pflegegrad 3 bringt deutlich höhere Leistungen als die niedrigeren Grade. Mit <strong>599 Euro Pflegegeld</strong> oder <strong>1.497 Euro Sachleistungen</strong>, dem Entlastungsbetrag, der Tagespflege und weiteren Hilfen lässt sich ein höherer Unterstützungsbedarf zu Hause besser bewältigen.</p>
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

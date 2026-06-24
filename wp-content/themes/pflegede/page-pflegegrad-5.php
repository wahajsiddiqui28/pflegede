<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrad 5 (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegegrad 5: Pflegegeld, Leistungen &amp; Antrag 2026</title>' . "\n";
    echo '<meta name="description" content="Pflegegrad 5: 990 € Pflegegeld oder 2.299 € Sachleistungen, Voraussetzungen und Antrag. Alle Leistungen 2026 verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/pflegegrad-5/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viel Geld bekomme ich bei Pflegegrad 5?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 5 erhalten Sie 990 Euro Pflegegeld pro Monat oder Pflegesachleistungen im Wert von bis zu 2.299 Euro pro Monat. Dazu kommen der Entlastungsbetrag von 131 Euro pro Monat sowie weitere Leistungen der Pflegeversicherung."}},
    {"@type":"Question","name":"Wie viele Punkte braucht man für Pflegegrad 5?","acceptedAnswer":{"@type":"Answer","text":"Für Pflegegrad 5 sind 90 Punkte oder mehr nötig. In besonderen Fällen kann Pflegegrad 5 auch bei einer geringeren Punktzahl vergeben werden, etwa beim vollständigen Verlust der Greif-, Steh- und Gehfähigkeit."}},
    {"@type":"Question","name":"Was ist der Unterschied zwischen Pflegegrad 4 und 5?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 5 ist die Selbstständigkeit am stärksten eingeschränkt, und die Leistungen sind am höchsten. Das Pflegegeld steigt von 800 auf 990 Euro, die Sachleistungen von 1.859 auf 2.299 Euro."}},
    {"@type":"Question","name":"Kann man mit Pflegegrad 5 zu Hause wohnen?","acceptedAnswer":{"@type":"Answer","text":"Ja. Auch mit Pflegegrad 5 ist eine Versorgung zu Hause möglich. Die hohen Sachleistungen ermöglichen eine intensive Unterstützung durch einen Pflegedienst, ergänzt durch Tagespflege und die Hilfe von Angehörigen."}},
    {"@type":"Question","name":"Wie oft ist bei Pflegegrad 5 ein Beratungseinsatz nötig?","acceptedAnswer":{"@type":"Answer","text":"Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 5 ein Beratungseinsatz vierteljährlich verpflichtend, also alle drei Monate, genau wie bei Pflegegrad 4."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$leistungen = array(
    array( 'name' => 'Pflegegeld (Pflege durch Angehörige)', 'betrag' => '990 € pro Monat',              'law' => '§37 SGB XI' ),
    array( 'name' => 'Pflegesachleistungen (Pflegedienst)',   'betrag' => 'bis 2.299 € pro Monat',        'law' => '§36 SGB XI' ),
    array( 'name' => 'Entlastungsbetrag',                     'betrag' => '131 € pro Monat',              'law' => '§45b SGB XI' ),
    array( 'name' => 'Tages- und Nachtpflege',                'betrag' => 'bis 2.085 € pro Monat',        'law' => '§41 SGB XI' ),
    array( 'name' => 'Verhinderungs- und Kurzzeitpflege',     'betrag' => 'bis 3.539 € pro Jahr (gemeinsam)', 'law' => '§42a SGB XI' ),
    array( 'name' => 'Pflegehilfsmittel zum Verbrauch',       'betrag' => 'bis 42 € pro Monat',           'law' => '§40 SGB XI' ),
    array( 'name' => 'Zuschuss für Hausnotruf',               'betrag' => 'bis 25,50 € pro Monat',        'law' => '§40 SGB XI' ),
    array( 'name' => 'Wohnumfeldverbessernde Maßnahmen',      'betrag' => 'bis 4.180 € je Maßnahme',      'law' => '§40 Abs. 4 SGB XI' ),
    array( 'name' => 'Vollstationäre Pflege',                 'betrag' => '2.096 € pro Monat',            'law' => '§43 SGB XI' ),
);

$faqs = array(
    array( 'q' => 'Wie viel Geld bekomme ich bei Pflegegrad 5?', 'a' => 'Bei Pflegegrad 5 erhalten Sie <strong>990 Euro Pflegegeld</strong> pro Monat oder Pflegesachleistungen im Wert von bis zu 2.299 Euro pro Monat. Dazu kommen der Entlastungsbetrag von 131 Euro sowie weitere Leistungen.' ),
    array( 'q' => 'Wie viele Punkte braucht man für Pflegegrad 5?', 'a' => 'Für Pflegegrad 5 sind <strong>90 Punkte oder mehr</strong> nötig. In besonderen Fällen kann Pflegegrad 5 auch bei einer geringeren Punktzahl vergeben werden, etwa beim vollständigen Verlust der Greif-, Steh- und Gehfähigkeit.' ),
    array( 'q' => 'Was ist der Unterschied zwischen Pflegegrad 4 und 5?', 'a' => 'Bei Pflegegrad 5 ist die Selbstständigkeit am stärksten eingeschränkt, und die Leistungen sind am höchsten. Das Pflegegeld steigt von 800 auf <strong>990 Euro</strong>, die Sachleistungen von 1.859 auf <strong>2.299 Euro</strong>.' ),
    array( 'q' => 'Kann man mit Pflegegrad 5 zu Hause wohnen?', 'a' => '<strong>Ja.</strong> Auch mit Pflegegrad 5 ist eine Versorgung zu Hause möglich. Die hohen Sachleistungen ermöglichen eine intensive Unterstützung durch einen Pflegedienst, ergänzt durch Tagespflege und die Hilfe von Angehörigen.' ),
    array( 'q' => 'Wie oft ist bei Pflegegrad 5 ein Beratungseinsatz nötig?', 'a' => 'Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 5 ein Beratungseinsatz <strong>vierteljährlich</strong> verpflichtend, also alle drei Monate — genau wie bei Pflegegrad 4.' ),
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
                    <span class="pf-breadcrumb__current">Pflegegrad 5</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-5-circle"></i> Höchster Pflegegrad</span>
                        <h1 class="pf-page-hero__title">Pflegegrad 5: <span class="pf-page-hero__title-accent">Pflegegeld</span><br>und Leistungen</h1>
                        <p class="pf-page-hero__desc">Pflegegrad 5 ist der höchste Pflegegrad und steht für eine schwerste Beeinträchtigung der Selbstständigkeit mit besonderem Pflegebedarf. Betroffene erhalten 990 Euro Pflegegeld oder bis zu 2.299 Euro Pflegesachleistungen pro Monat.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> 990 € Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house-heart"></i> 2.299 € Sachleistung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clipboard2-pulse"></i> ab 90 Punkte</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrad-pages-images/pflegegrad-5.jpg' ); ?>" alt="Person mit Pflegegrad 5 erhält intensive häusliche Pflege durch eine Pflegekraft und Unterstützung durch Angehörige.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflegegrad 5</span>
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
                        Pflegegrad 5 ist der <strong>höchste Pflegegrad</strong> und steht für eine schwerste Beeinträchtigung der Selbstständigkeit mit besonderem Pflegebedarf. Betroffene erhalten 990 Euro Pflegegeld oder bis zu 2.299 Euro Pflegesachleistungen pro Monat sowie die umfangreichsten Leistungen der Pflegekasse.
                    </div>

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 5 ist der höchste von fünf Pflegegraden und steht für den größtmöglichen Hilfebedarf. Menschen mit Pflegegrad 5 sind in nahezu allen Bereichen des täglichen Lebens auf umfassende Unterstützung angewiesen, häufig über den gesamten Tagesverlauf. Mit Pflegegrad 5 stehen Ihnen die umfangreichsten Leistungen der Pflegeversicherung zu. Auf dieser Seite erfahren Sie, welche Voraussetzungen gelten, wie viel Geld Ihnen 2026 zusteht und wie Sie Pflegegrad 5 beantragen. Eine allgemeine Übersicht über alle Pflegegrade finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegraden</a>.</p>
                        </div>
                    </div>

                    <!-- Was bedeutet -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was bedeutet Pflegegrad 5?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 5 bedeutet eine <strong>schwerste Beeinträchtigung der Selbstständigkeit mit besonderen Anforderungen</strong> an die Pflege. Betroffene sind in nahezu allen Bereichen des Alltags auf umfassende Unterstützung angewiesen und können vieles nicht mehr eigenständig erledigen — etwa die Körperpflege, das Essen, die Mobilität und die Kommunikation. Je nach Ursache der Pflegebedürftigkeit können eine schwere Demenz, ausgeprägte Lähmungen oder mehrere schwerwiegende Erkrankungen zugleich vorliegen. Der Unterstützungsbedarf ist entsprechend hoch und erfordert häufig eine Kombination aus professioneller Pflege, Unterstützung durch Angehörige und Pflegehilfsmitteln.</p>
                        </div>
                    </div>

                    <!-- Voraussetzungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Voraussetzungen für Pflegegrad 5</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Ob Pflegegrad 5 vorliegt, stellt der <strong>Medizinische Dienst</strong> bei der Begutachtung fest. Bewertet wird die Selbstständigkeit in sechs Bereichen, aus denen sich eine Gesamtpunktzahl ergibt. Für Pflegegrad 5 sind <strong>90 Punkte oder mehr</strong> nötig. Pflegegrad 5 kann außerdem bei einer besonderen Bedarfskonstellation vergeben werden, auch wenn die Punktzahl niedriger liegt — etwa bei vollständigem Verlust der Greif-, Steh- und Gehfähigkeit. Die sechs Bereiche werden unterschiedlich gewichtet; das Modul Selbstversorgung zählt mit 40 Prozent am stärksten. Wie die Begutachtung abläuft, lesen Sie im Ratgeber zur <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>">MDK-Begutachtung</a>.</p>
                        </div>
                    </div>

                    <!-- Leistungen Tabelle -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Welche Leistungen gibt es bei Pflegegrad 5?</h2>
                    <p class="pf-h-section-sub">Mit Pflegegrad 5 stehen Ihnen die höchsten Leistungen der Pflegeversicherung zu. Die Beträge liegen über denen von Pflegegrad 4.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Leistung bei Pflegegrad 5</th>
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
                            <p>Bei Pflegegrad 5 haben Sie die Wahl. Wird die Pflege zu Hause durch Angehörige übernommen, erhalten Sie <strong>990 Euro Pflegegeld</strong> pro Monat. Übernimmt ein ambulanter Pflegedienst die Versorgung, zahlt die Pflegekasse bis zu <strong>2.299 Euro Pflegesachleistungen</strong> pro Monat. Beide Leistungen können auch miteinander kombiniert werden: Nutzen Sie zum Beispiel nur einen Teil der Sachleistungen, bekommen Sie den restlichen Anteil als Pflegegeld ausgezahlt. Diese <strong>Kombinationsleistung</strong> ist gerade bei sehr hohem Pflegebedarf sinnvoll, wenn Angehörige und Pflegedienst sich die Pflege teilen.</p>
                        </div>
                    </div>

                    <!-- Entlastungsbetrag, Tagespflege -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-plus-circle text-success"></i> Entlastungsbetrag, Tagespflege und mehr</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Zusätzlich steht Ihnen der <strong>Entlastungsbetrag</strong> von 131 Euro pro Monat zu. Für die <strong>Tages- und Nachtpflege</strong> gibt es ein eigenes Budget von bis zu 2.085 Euro pro Monat, das das Sachleistungsbudget nicht verringert. Fällt die Pflegeperson aus, kann <strong>Verhinderungspflege</strong> in Anspruch genommen werden. Seit dem 1. Juli 2025 bilden Verhinderungs- und Kurzzeitpflege ein gemeinsames Jahresbudget von bis zu 3.539 Euro.</p>
                        </div>
                    </div>

                    <!-- Leistungen im Pflegeheim -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-building text-success"></i> Leistungen im Pflegeheim</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Entscheiden Sie sich für eine <strong>vollstationäre Pflege</strong> im Heim, zahlt die Pflegekasse bei Pflegegrad 5 einen Zuschuss von <strong>2.096 Euro pro Monat</strong>. Das ist der höchste Leistungsbetrag für die vollstationäre Pflege. Den darüber hinausgehenden Eigenanteil für Unterkunft, Verpflegung und Investitionskosten tragen Sie selbst. Diesen Eigenanteil senkt ein gestaffelter Leistungszuschlag, der mit der Dauer des Heimaufenthalts steigt.</p>
                        </div>
                    </div>

                    <!-- Beantragen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-file-earmark-text text-success"></i> Pflegegrad 5 beantragen</h2>
                    <p class="pf-h-section-sub">Den Pflegegrad 5 beantragen Sie formlos bei Ihrer Pflegekasse. So gehen Sie vor:</p>
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
                    <h2 class="pf-h-section mt-5"><i class="bi bi-chat-square-heart text-success"></i> Beratungseinsatz bei Pflegegrad 5</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 5 ein <strong>Beratungseinsatz nach §37 Abs. 3 SGB XI</strong> verpflichtend. Wie bei Pflegegrad 4 findet er <strong>vierteljährlich</strong> statt, also alle drei Monate. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause, prüft die Pflegesituation und gibt Tipps. Versäumen Sie den Einsatz, kann die Pflegekasse das Pflegegeld kürzen.</p>
                        </div>
                    </div>

                    <!-- Höchster Pflegegrad: special section -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-trophy text-success"></i> Höchster Pflegegrad: was Angehörige wissen sollten</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 5 ist der höchste Grad. Eine weitere Höherstufung ist daher nicht möglich. Umso wichtiger ist es, alle zustehenden Leistungen auch wirklich zu nutzen. Viele Familien kombinieren das Pflegegeld mit Sachleistungen und der Tagespflege und entlasten sich zusätzlich über die Verhinderungspflege. Wenn die Pflege zu Hause nicht mehr zu leisten ist, kann eine vollstationäre Pflege im Heim sinnvoll sein. Tipps für die Organisation der Pflege finden Sie in unserem Ratgeber für <a href="<?php echo esc_url( home_url( '/ratgeber/pflegende-angehoerige/' ) ); ?>">pflegende Angehörige</a>.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegegrad 5</h2>
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
                        <p class="pf-fazit__text">Pflegegrad 5 bietet die umfangreichsten Leistungen der Pflegeversicherung. Mit <strong>990 Euro Pflegegeld</strong> oder <strong>2.299 Euro Sachleistungen</strong>, dem Entlastungsbetrag, der Tagespflege und weiteren Leistungen lässt sich auch ein sehr hoher Unterstützungsbedarf auffangen.</p>
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

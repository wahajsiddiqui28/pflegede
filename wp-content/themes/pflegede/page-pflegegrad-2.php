<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrad 2 (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegegrad 2: Pflegegeld, Leistungen &amp; Antrag 2026</title>' . "\n";
    echo '<meta name="description" content="Pflegegrad 2: 347 € Pflegegeld oder 796 € Sachleistungen, Voraussetzungen und Antrag. Alle Leistungen 2026 verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/pflegegrad-2/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viel Geld bekomme ich bei Pflegegrad 2?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 2 erhalten Sie 347 Euro Pflegegeld im Monat oder Pflegesachleistungen im Wert von bis zu 796 Euro. Dazu kommen der Entlastungsbetrag von 131 Euro und weitere Leistungen."}},
    {"@type":"Question","name":"Wie viele Punkte braucht man für Pflegegrad 2?","acceptedAnswer":{"@type":"Answer","text":"Für Pflegegrad 2 sind bei der Begutachtung zwischen 27 und unter 47,5 Punkte nötig."}},
    {"@type":"Question","name":"Was ist der Unterschied zwischen Pflegegrad 1 und 2?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 1 gibt es kein Pflegegeld und keine Sachleistungen, sondern vor allem den Entlastungsbetrag. Ab Pflegegrad 2 stehen Ihnen dagegen alle Leistungen zu, also Pflegegeld, Sachleistungen, Tagespflege und Verhinderungspflege."}},
    {"@type":"Question","name":"Kann ich Pflegegeld und Sachleistungen kombinieren?","acceptedAnswer":{"@type":"Answer","text":"Ja. Wenn Sie nicht den vollen Anspruch auf Sachleistungen nutzen, erhalten Sie den Rest anteilig als Pflegegeld. Das nennt man Kombinationsleistung."}},
    {"@type":"Question","name":"Muss ich bei Pflegegrad 2 zur Pflegeberatung?","acceptedAnswer":{"@type":"Answer","text":"Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 2 ein halbjährlicher Beratungseinsatz verpflichtend. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$leistungen = array(
    array( 'name' => 'Pflegegeld (Pflege durch Angehörige)', 'betrag' => '347 € pro Monat',              'law' => '§37 SGB XI' ),
    array( 'name' => 'Pflegesachleistungen (Pflegedienst)',   'betrag' => 'bis 796 € pro Monat',          'law' => '§36 SGB XI' ),
    array( 'name' => 'Entlastungsbetrag',                     'betrag' => '131 € pro Monat',              'law' => '§45b SGB XI' ),
    array( 'name' => 'Tages- und Nachtpflege',                'betrag' => 'bis 721 € pro Monat',          'law' => '§41 SGB XI' ),
    array( 'name' => 'Verhinderungs- und Kurzzeitpflege',     'betrag' => 'bis 3.539 € pro Jahr (gemeinsam)', 'law' => '§42a SGB XI' ),
    array( 'name' => 'Pflegehilfsmittel zum Verbrauch',       'betrag' => 'bis 42 € pro Monat',           'law' => '§40 SGB XI' ),
    array( 'name' => 'Zuschuss für Hausnotruf',               'betrag' => 'bis 25,50 € pro Monat',        'law' => '§40 SGB XI' ),
    array( 'name' => 'Wohnumfeldverbessernde Maßnahmen',      'betrag' => 'bis 4.180 € je Maßnahme',      'law' => '§40 Abs. 4 SGB XI' ),
    array( 'name' => 'Vollstationäre Pflege',                 'betrag' => '805 € pro Monat',              'law' => '§43 SGB XI' ),
);

$faqs = array(
    array( 'q' => 'Wie viel Geld bekomme ich bei Pflegegrad 2?', 'a' => 'Bei Pflegegrad 2 erhalten Sie <strong>347 Euro Pflegegeld</strong> im Monat oder Pflegesachleistungen im Wert von bis zu 796 Euro. Dazu kommen der Entlastungsbetrag von 131 Euro und weitere Leistungen.' ),
    array( 'q' => 'Wie viele Punkte braucht man für Pflegegrad 2?', 'a' => 'Für Pflegegrad 2 sind bei der Begutachtung zwischen <strong>27 und unter 47,5 Punkte</strong> nötig.' ),
    array( 'q' => 'Was ist der Unterschied zwischen Pflegegrad 1 und 2?', 'a' => 'Bei Pflegegrad 1 gibt es kein Pflegegeld und keine Sachleistungen, sondern vor allem den Entlastungsbetrag. Ab <strong>Pflegegrad 2</strong> stehen Ihnen dagegen alle Leistungen zu — also Pflegegeld, Sachleistungen, Tagespflege und Verhinderungspflege.' ),
    array( 'q' => 'Kann ich Pflegegeld und Sachleistungen kombinieren?', 'a' => '<strong>Ja.</strong> Wenn Sie nicht den vollen Anspruch auf Sachleistungen nutzen, erhalten Sie den Rest anteilig als Pflegegeld. Das nennt man <strong>Kombinationsleistung</strong>.' ),
    array( 'q' => 'Muss ich bei Pflegegrad 2 zur Pflegeberatung?', 'a' => 'Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 2 ein <strong>halbjährlicher Beratungseinsatz</strong> verpflichtend. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause.' ),
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
                    <span class="pf-breadcrumb__current">Pflegegrad 2</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-2-circle"></i> Erhebliche Beeinträchtigung</span>
                        <h1 class="pf-page-hero__title">Pflegegrad 2: <span class="pf-page-hero__title-accent">Pflegegeld</span><br>und Leistungen</h1>
                        <p class="pf-page-hero__desc">Pflegegrad 2 steht für eine erhebliche Beeinträchtigung der Selbstständigkeit und gehört zu den am häufigsten vergebenen Pflegegraden. Betroffene erhalten 347 Euro Pflegegeld oder 796 Euro Pflegesachleistungen im Monat.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> 347 € Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house-heart"></i> 796 € Sachleistung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clipboard2-pulse"></i> 27–47,5 Punkte</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrad-pages-images/pflegegrad-2.jpg' ); ?>" alt="Senior mit Pflegegrad 2 bekommt regelmäßige Unterstützung bei Mobilität und Körperpflege zu Hause.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflegegrad 2</span>
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
                        Pflegegrad 2 steht für eine <strong>erhebliche Beeinträchtigung der Selbstständigkeit</strong>. Er gehört zu den am häufigsten vergebenen Pflegegraden. Betroffene erhalten 347 Euro Pflegegeld oder 796 Euro Pflegesachleistungen im Monat sowie viele weitere Leistungen.
                    </div>

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 2 ist der zweite von fünf Pflegegraden und gehört zu den am häufigsten vergebenen in Deutschland. Mit Pflegegrad 2 besteht erstmals Anspruch auf die meisten Leistungen der Pflegeversicherung. Anders als bei Pflegegrad 1 gibt es jetzt <strong>Pflegegeld und Pflegesachleistungen</strong>. Auf dieser Seite erfahren Sie, welche Voraussetzungen gelten, wie viel Geld Ihnen 2026 zusteht und wie Sie Pflegegrad 2 beantragen. Eine Übersicht über alle Pflegegrade finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegraden</a>.</p>
                        </div>
                    </div>

                    <!-- Was bedeutet -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was bedeutet Pflegegrad 2?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegegrad 2 bedeutet eine <strong>erhebliche Beeinträchtigung der Selbstständigkeit</strong>. Betroffene kommen im Alltag noch mit vielem allein zurecht, brauchen aber bei wiederkehrenden Aufgaben regelmäßig Unterstützung — etwa bei der Körperpflege, beim Anziehen oder im Haushalt. Pflegegrad 2 ist damit der Einstieg in die meisten Leistungen der Pflegeversicherung.</p>
                        </div>
                    </div>

                    <!-- Voraussetzungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Voraussetzungen für Pflegegrad 2</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Ob Pflegegrad 2 vorliegt, stellt der <strong>Medizinische Dienst</strong> bei der Begutachtung fest. Bewertet wird die Selbstständigkeit in sechs Bereichen, aus denen sich eine Gesamtpunktzahl ergibt. Für Pflegegrad 2 sind zwischen <strong>27 und unter 47,5 Punkte</strong> nötig. Die sechs Bereiche werden unterschiedlich gewichtet — das Modul Selbstversorgung zählt mit 40 Prozent am stärksten. Wie die Begutachtung abläuft, lesen Sie im Ratgeber zur <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>">MDK-Begutachtung</a>.</p>
                        </div>
                    </div>

                    <!-- Leistungen Tabelle -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Welche Leistungen gibt es bei Pflegegrad 2?</h2>
                    <p class="pf-h-section-sub">Mit Pflegegrad 2 stehen Ihnen erstmals fast alle Leistungen der Pflegeversicherung zur Verfügung. Die folgende Tabelle zeigt alle Leistungen mit den aktuellen Beträgen.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Leistung bei Pflegegrad 2</th>
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

                    <!-- Pflegegeld oder Sachleistungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-left-right text-success"></i> Pflegegeld oder Pflegesachleistungen?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Bei Pflegegrad 2 haben Sie die Wahl. Wird die Pflege zu Hause durch Angehörige übernommen, erhalten Sie <strong>347 Euro Pflegegeld</strong> im Monat. Übernimmt ein ambulanter Pflegedienst die Versorgung, zahlt die Pflegekasse bis zu <strong>796 Euro Pflegesachleistungen</strong>. Beides lässt sich auch kombinieren: Nutzen Sie zum Beispiel nur die Hälfte der Sachleistungen, bekommen Sie zusätzlich die Hälfte des Pflegegeldes ausgezahlt. Diese sogenannte <strong>Kombinationsleistung</strong> ist ideal, wenn Angehörige und Pflegedienst sich die Pflege teilen.</p>
                        </div>
                    </div>

                    <!-- Entlastungsbetrag, Tagespflege -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-plus-circle text-success"></i> Entlastungsbetrag, Tagespflege und mehr</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Zusätzlich steht Ihnen der <strong>Entlastungsbetrag</strong> von 131 Euro im Monat zu, zum Beispiel für eine Betreuungskraft oder einen Haushaltsdienst. Für die <strong>Tages- und Nachtpflege</strong> gibt es ein eigenes Budget von bis zu 721 Euro im Monat, das das Sachleistungsbudget nicht verringert. Fällt die Pflegeperson aus, springt die <strong>Verhinderungspflege</strong> ein. Seit dem 1. Juli 2025 bilden Verhinderungs- und Kurzzeitpflege ein gemeinsames Jahresbudget von bis zu 3.539 Euro.</p>
                        </div>
                    </div>

                    <!-- Beantragen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-file-earmark-text text-success"></i> Pflegegrad 2 beantragen</h2>
                    <p class="pf-h-section-sub">Den Pflegegrad 2 beantragen Sie formlos bei Ihrer Pflegekasse. So gehen Sie vor:</p>
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
                    <h2 class="pf-h-section mt-5"><i class="bi bi-chat-square-heart text-success"></i> Beratungseinsatz bei Pflegegrad 2</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wenn Sie Pflegegeld beziehen, ist bei Pflegegrad 2 ein <strong>Beratungseinsatz nach §37 Abs. 3 SGB XI</strong> verpflichtend. Dieser findet halbjährlich statt. Eine Pflegefachkraft kommt dabei zu Ihnen nach Hause, prüft die Pflegesituation und gibt Tipps. Der Einsatz ist für Sie kostenlos und sichert die Qualität der Pflege zu Hause.</p>
                        </div>
                    </div>

                    <!-- Erhöhen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-up-circle text-success"></i> Pflegegrad 2 erhöhen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Verschlechtert sich der Gesundheitszustand, können Sie eine <strong>Höherstufung</strong> beantragen. Erreicht die Person bei der erneuten Begutachtung 47,5 Punkte oder mehr, wird sie in <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-3/' ) ); ?>">Pflegegrad 3</a> eingestuft. Damit steigen das Pflegegeld und die übrigen Leistungen deutlich.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegegrad 2</h2>
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
                        <p class="pf-fazit__text">Pflegegrad 2 öffnet die Tür zu allen Leistungen der Pflegeversicherung. Mit <strong>347 Euro Pflegegeld</strong> oder <strong>796 Euro Sachleistungen</strong>, dem Entlastungsbetrag und weiteren Hilfen lässt sich die Pflege zu Hause gut organisieren.</p>
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

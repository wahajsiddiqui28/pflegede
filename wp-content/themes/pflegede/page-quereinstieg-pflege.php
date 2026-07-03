<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Quereinstieg Pflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Quereinstieg in die Pflege: Wege, Umschulung &amp; Förderung</title>' . "\n";
    echo '<meta name="description" content="Quereinstieg in die Pflege: welche Wege es gibt, von der Betreuungskraft bis zur Umschulung zur Pflegefachkraft, und wie sich der Einstieg fördern lässt. Auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegeberufe/quereinstieg/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Kann ich ohne Ausbildung in der Pflege arbeiten?","acceptedAnswer":{"@type":"Answer","text":"Ja. Als Betreuungskraft oder in bestimmten Helfertätigkeiten ist ein Einstieg auch ohne dreijährige Fachkraftausbildung möglich. Für anspruchsvollere Aufgaben und ein höheres Gehalt empfiehlt sich später die Ausbildung oder Umschulung zur Pflegefachkraft."}},
    {"@type":"Question","name":"Bin ich mit 40 oder 50 Jahren zu alt für den Quereinstieg?","acceptedAnswer":{"@type":"Answer","text":"Nein. Auch mit 40 oder 50 Jahren bestehen in der Pflege oft gute Einstiegschancen. Lebenserfahrung und Empathie werden geschätzt."}},
    {"@type":"Question","name":"Wie lange dauert eine Umschulung zur Pflegefachkraft?","acceptedAnswer":{"@type":"Answer","text":"Die Umschulung entspricht der dreijährigen generalistischen Pflegeausbildung. Bei einschlägigen Vorkenntnissen kann sie unter bestimmten Voraussetzungen verkürzt werden."}},
    {"@type":"Question","name":"Wer übernimmt die Kosten für die Umschulung?","acceptedAnswer":{"@type":"Answer","text":"Häufig die Agentur für Arbeit oder das Jobcenter über einen Bildungsgutschein, sofern die Voraussetzungen erfüllt sind. Während der Umschulung zur Pflegefachkraft wird zudem in der Regel eine Vergütung gezahlt."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$faqs = array(
    array( 'q' => 'Kann ich ohne Ausbildung in der Pflege arbeiten?', 'a' => '<strong>Ja.</strong> Als Betreuungskraft oder in bestimmten Helfertätigkeiten ist ein Einstieg auch ohne dreijährige Fachkraftausbildung möglich. Für anspruchsvollere Aufgaben und ein höheres Gehalt empfiehlt sich später die Ausbildung oder Umschulung zur Pflegefachkraft.' ),
    array( 'q' => 'Bin ich mit 40 oder 50 Jahren zu alt für den Quereinstieg?', 'a' => '<strong>Nein.</strong> Auch mit 40 oder 50 Jahren bestehen in der Pflege oft gute Einstiegschancen. Lebenserfahrung und Empathie werden geschätzt.' ),
    array( 'q' => 'Wie lange dauert eine Umschulung zur Pflegefachkraft?', 'a' => 'Die Umschulung entspricht der <strong>dreijährigen</strong> generalistischen Pflegeausbildung. Bei einschlägigen Vorkenntnissen kann sie unter bestimmten Voraussetzungen verkürzt werden.' ),
    array( 'q' => 'Wer übernimmt die Kosten für die Umschulung?', 'a' => 'Häufig die <strong>Agentur für Arbeit</strong> oder das Jobcenter über einen Bildungsgutschein, sofern die Voraussetzungen erfüllt sind. Während der Umschulung wird zudem in der Regel eine Vergütung gezahlt.' ),
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
                    <a href="<?php echo esc_url( home_url( '/pflegeberufe/' ) ); ?>">Pflegeberufe</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Quereinstieg</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-arrow-repeat"></i> Neu anfangen in der Pflege</span>
                        <h1 class="pf-page-hero__title">Quereinstieg: <span class="pf-page-hero__title-accent">neu anfangen</span><br>in der Pflege</h1>
                        <p class="pf-page-hero__desc">Der Quereinstieg in die Pflege ist gut möglich, denn Pflegekräfte werden überall gesucht. Es gibt mehrere Wege — vom kurzen Einstieg als Betreuungskraft über die einjährige Pflegehelferausbildung bis zur Umschulung zur Pflegefachkraft. Viele Wege lassen sich fördern.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-signpost-split"></i> Mehrere Wege</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Oft gefördert</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-people"></i> Jedes Alter</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/quereinstieg/quereinstieg-1.jpg' ); ?>" alt="Quereinsteiger startet einen neuen Beruf in der Pflege.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-arrow-repeat"></i> Quereinstieg</span>
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

                    <div class="pf-byline">
                        <span class="pf-byline__item"><i class="bi bi-pencil"></i> Verfasst von <strong>Maaz Ahmed</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Tauqeer Ahmed</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Der Quereinstieg in die Pflege ist <strong>gut möglich</strong>, denn Pflegekräfte werden überall gesucht. Es gibt mehrere Wege — vom kurzen Einstieg als Betreuungskraft über die einjährige Pflegehelferausbildung bis zur Umschulung zur Pflegefachkraft. Viele dieser Wege lassen sich fördern.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Viele Menschen wünschen sich eine Arbeit, die einen Sinn hat, und denken über einen Wechsel in die Pflege nach. Die gute Nachricht: Der Quereinstieg ist weit verbreitet und aufgrund des Fachkräftemangels oft gut möglich. Pflege ist als <strong>Engpassberuf</strong> anerkannt, Fachkräfte werden bundesweit gesucht, und Lebenserfahrung wird geschätzt. Ein bestimmtes Alter ist kein Hindernis. Einen Überblick über die Berufe finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegeberufe/' ) ); ?>">Pflegeberufen</a>.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-signpost-split text-success"></i> Welche Wege gibt es?</h2>
                    <p class="pf-h-section-sub">Der Quereinstieg ist auf mehreren Wegen möglich, die aufeinander aufbauen können:</p>
                    <ol class="pf-timeline">
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-chat-heart"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Betreuungskraft &amp; Alltagsbegleitung <span class="pf-timeline__badge">Schnellster Weg</span></h3>
                                <p class="pf-timeline__text">Der schnellste Einstieg führt über eine Qualifizierung zur Betreuungskraft nach §53b SGB XI. Der Kurs umfasst mindestens 160 Unterrichtsstunden und ein zweiwöchiges Praktikum. Eine abgeschlossene Berufsausbildung ist nicht nötig — gefragt sind Einfühlungsvermögen und Deutschkenntnisse. Eine Betreuungskraft übernimmt die soziale Betreuung (Beschäftigung, Gespräche, Begleitung), keine Pflege im engeren Sinn.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-person-check"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Pflegehelferin oder Pflegehelfer</h3>
                                <p class="pf-timeline__text">Einen Schritt weiter geht die ein- bis zweijährige Ausbildung zur Pflegehelferin, zum Pflegehelfer oder zur Pflegeassistenz. Sie ist landesrechtlich geregelt und vermittelt bereits Grundlagen der Pflege. Ein guter Einstieg, denn die Helferausbildung kann später auf die Fachkraftausbildung angerechnet werden.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-mortarboard"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Umschulung zur Pflegefachkraft <span class="pf-timeline__badge">Voller Abschluss</span></h3>
                                <p class="pf-timeline__text">Wer den vollwertigen Berufsabschluss anstrebt, absolviert die dreijährige generalistische Pflegeausbildung — für Quereinsteiger meist als Umschulung. Sie führt zum Abschluss als Pflegefachfrau oder Pflegefachmann und eröffnet alle weiteren Möglichkeiten. Unter bestimmten Voraussetzungen lässt sich die Dauer verkürzen.</p>
                            </div>
                        </li>
                    </ol>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Voraussetzungen für den Quereinstieg</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Voraussetzungen hängen vom gewählten Weg ab. Für die Qualifizierung zur <strong>Betreuungskraft</strong> genügen meist Deutschkenntnisse, gesundheitliche Eignung und ein Führungszeugnis. Für die <strong>Umschulung zur Pflegefachkraft</strong> gelten dieselben Anforderungen wie für die reguläre Pflegeausbildung — in der Regel ein mittlerer Schulabschluss oder ein Hauptschulabschluss mit einer abgeschlossenen Berufsausbildung. In allen Fällen wichtig: Freude am Umgang mit Menschen, Zuverlässigkeit und Belastbarkeit.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-piggy-bank text-success"></i> Wie lässt sich der Quereinstieg finanzieren?</h2>
                    <p class="pf-h-section-sub">Der Quereinstieg muss nicht teuer sein. Weil Pflegekräfte dringend gebraucht werden, gibt es gute Fördermöglichkeiten:</p>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Bildungsgutschein</strong> Agentur für Arbeit oder Jobcenter übernimmt die Kosten ganz oder teilweise.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>AZAV-Zertifizierung</strong> Voraussetzung ist meist ein nach AZAV zertifizierter Bildungsträger.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Vergütung während der Umschulung</strong> Zur Pflegefachkraft wird in der Regel eine Vergütung gezahlt.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Arbeitgeberbeteiligung</strong> Auch Arbeitgeber beteiligen sich häufig, um neue Mitarbeiter zu gewinnen.</span></li>
                    </ul>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Am besten klären Sie die Förderung frühzeitig in einem Beratungsgespräch mit der <strong>Agentur für Arbeit</strong> oder dem Jobcenter.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-hand-thumbs-up text-success"></i> Lohnt sich der Quereinstieg?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Für viele ist der Wechsel in die Pflege eine Entscheidung für <strong>mehr Sinn im Beruf</strong>. Hinzu kommen sehr gute Aussichten, denn der Bedarf an Pflegekräften ist hoch und wird weiter steigen. Wer als Betreuungskraft oder Pflegehelfer einsteigt, kann sich später zur Fachkraft weiterqualifizieren und Schritt für Schritt aufsteigen. Was man verdient, zeigt die Seite zum <a href="<?php echo esc_url( home_url( '/pflegeberufe/gehalt/' ) ); ?>">Gehalt in der Pflege</a>. Welche Wege sich nach einer Ausbildung eröffnen, lesen Sie bei den <a href="<?php echo esc_url( home_url( '/pflegeberufe/weiterbildung/' ) ); ?>">Weiterbildungen</a>.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zum Quereinstieg in die Pflege</h2>
                    <div class="pf-faq-list">
                        <?php foreach ( $faqs as $i => $f ) : ?>
                            <details class="pf-faq-item"<?php echo $i === 0 ? ' open' : ''; ?>>
                                <summary class="pf-faq-item__q"><span><?php echo esc_html( $f['q'] ); ?></span><i class="bi bi-chevron-down pf-faq-item__chevron"></i></summary>
                                <div class="pf-faq-item__a"><?php echo wp_kses_post( $f['a'] ); ?></div>
                            </details>
                        <?php endforeach; ?>
                    </div>

                    <div class="pf-fazit">
                        <div class="pf-fazit__label"><i class="bi bi-flag"></i> Fazit</div>
                        <p class="pf-fazit__text">Der Quereinstieg in die Pflege ist auf vielen Wegen möglich und angesichts des Fachkräftemangels gut machbar. Ob als Betreuungskraft, Pflegehelfer oder über die Umschulung zur Pflegefachkraft — für jede Lebenssituation gibt es einen passenden Einstieg. Dank guter Fördermöglichkeiten und sehr sicherer Aussichten ist der Wechsel eine echte Chance für einen <strong>sinnstiftenden Neuanfang</strong>.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesministerium der Justiz: SGB XI, §53b (Qualifikation von Betreuungskräften) und §43b — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesagentur für Arbeit: Förderung der beruflichen Weiterbildung und Bildungsgutschein — arbeitsagentur.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesgesundheitsministerium: Pflegeberufegesetz und Pflegeausbildung — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
                    </div>

                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle Berufs- oder Bildungsberatung. Voraussetzungen und Förderungen können sich je nach Bundesland und Einzelfall unterscheiden.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

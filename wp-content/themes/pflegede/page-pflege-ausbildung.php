<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegeausbildung (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegeausbildung: Ablauf, Voraussetzungen &amp; Gehalt</title>' . "\n";
    echo '<meta name="description" content="Die generalistische Pflegeausbildung zur Pflegefachfrau oder zum Pflegefachmann: Dauer, Voraussetzungen, Ausbildungsvergütung und Ablauf. Verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegeberufe/ausbildung/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie heißt der Abschluss der Pflegeausbildung?","acceptedAnswer":{"@type":"Answer","text":"Der Abschluss heißt seit 2020 Pflegefachfrau oder Pflegefachmann. Er hat die früheren Abschlüsse in der Alten-, Kranken- und Kinderkrankenpflege zusammengeführt."}},
    {"@type":"Question","name":"Kostet die Pflegeausbildung etwas?","acceptedAnswer":{"@type":"Answer","text":"Nein. Die Pflegeausbildung ist kostenlos, ein Schulgeld darf nicht verlangt werden. Auszubildende erhalten zudem vom ersten Tag an eine Ausbildungsvergütung."}},
    {"@type":"Question","name":"Welcher Schulabschluss ist nötig?","acceptedAnswer":{"@type":"Answer","text":"In der Regel ein mittlerer Schulabschluss. Mit einem Hauptschulabschluss ist der Zugang möglich, wenn zusätzlich eine mindestens zweijährige Berufsausbildung oder eine mindestens einjährige Pflegehelfer- oder Pflegeassistenzausbildung vorliegt."}},
    {"@type":"Question","name":"Kann ich mit dem Abschluss auch im Ausland arbeiten?","acceptedAnswer":{"@type":"Answer","text":"Ja. Der generalistische Abschluss erfüllt die Voraussetzungen für die automatische Anerkennung als reglementierter Pflegeberuf innerhalb der Europäischen Union. Je nach Zielland können dennoch formale Verwaltungsverfahren erforderlich sein."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$faqs = array(
    array( 'q' => 'Wie heißt der Abschluss der Pflegeausbildung?', 'a' => 'Der Abschluss heißt seit 2020 <strong>Pflegefachfrau</strong> oder <strong>Pflegefachmann</strong>. Er hat die früheren Abschlüsse in der Alten-, Kranken- und Kinderkrankenpflege zusammengeführt.' ),
    array( 'q' => 'Kostet die Pflegeausbildung etwas?', 'a' => '<strong>Nein.</strong> Die Pflegeausbildung ist kostenlos, ein Schulgeld darf nicht verlangt werden. Auszubildende erhalten zudem vom ersten Tag an eine Ausbildungsvergütung.' ),
    array( 'q' => 'Welcher Schulabschluss ist nötig?', 'a' => 'In der Regel ein <strong>mittlerer Schulabschluss</strong>. Mit einem Hauptschulabschluss ist der Zugang möglich, wenn zusätzlich eine mindestens zweijährige Berufsausbildung oder eine mindestens einjährige Pflegehelfer- oder Pflegeassistenzausbildung vorliegt.' ),
    array( 'q' => 'Kann ich mit dem Abschluss auch im Ausland arbeiten?', 'a' => '<strong>Ja.</strong> Der generalistische Abschluss erfüllt die Voraussetzungen für die automatische Anerkennung als reglementierter Pflegeberuf innerhalb der EU. Je nach Zielland können dennoch formale Verwaltungsverfahren erforderlich sein.' ),
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
                    <span class="pf-breadcrumb__current">Pflegeausbildung</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-mortarboard"></i> Wege in den Pflegeberuf</span>
                        <h1 class="pf-page-hero__title">Pflege­ausbildung: <span class="pf-page-hero__title-accent">Wege</span><br>in den Beruf</h1>
                        <p class="pf-page-hero__desc">Seit 2020 gibt es die generalistische Pflegeausbildung zur Pflegefachfrau oder zum Pflegefachmann. Sie dauert in Vollzeit drei Jahre, ist kostenlos und wird vom ersten Tag an vergütet. Der Abschluss wird EU-weit automatisch anerkannt.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-calendar3"></i> 3 Jahre Vollzeit</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Vergütet ab Tag 1</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-eu"></i> EU-weit anerkannt</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/ausbildung/ausbildung-1.jpg' ); ?>" alt="Auszubildende in der generalistischen Pflegeausbildung lernen praktische Pflege.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-mortarboard-fill"></i> Pflegeausbildung</span>
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
                        <span class="pf-byline__item"><i class="bi bi-pencil"></i> Verfasst von <strong>Tauqeer Ahmed</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Hassan Abid</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Seit 2020 gibt es die <strong>generalistische Pflegeausbildung</strong> zur Pflegefachfrau oder zum Pflegefachmann. Sie dauert in Vollzeit drei Jahre, ist kostenlos und wird vom ersten Tag an vergütet. Der Abschluss erfüllt die Voraussetzungen für die automatische Anerkennung innerhalb der Europäischen Union.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflege zählt zu den wichtigsten und zukunftssicheren Berufsfeldern in Deutschland. Wer Menschen helfen möchte und einen sicheren Arbeitsplatz sucht, findet in der Pflege beste Aussichten. Seit 2020 führt ein neuer, einheitlicher Weg in den Beruf: die generalistische Pflegeausbildung. Einen Überblick über die Berufe finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegeberufe/' ) ); ?>">Pflegeberufen</a>. pflegede.com erklärt Ihnen alles verständlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was ist die generalistische Pflegeausbildung?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Seit dem 1. Januar 2020 gibt es nur noch <strong>eine gemeinsame Pflegeausbildung</strong>. Das Pflegeberufegesetz hat die früher getrennten Ausbildungen in der Altenpflege, der Gesundheits- und Krankenpflege sowie der Gesundheits- und Kinderkrankenpflege zu einer einzigen Ausbildung zusammengeführt. Der Abschluss heißt seitdem <strong>Pflegefachfrau oder Pflegefachmann</strong>. Damit können Pflegefachpersonen in verschiedenen Versorgungsbereichen tätig sein — im Krankenhaus, im Pflegeheim oder in der ambulanten Pflege — und Menschen aller Altersgruppen versorgen.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-clock-history text-success"></i> Wie lange dauert die Ausbildung?</h2>
                    <div class="pf-frist-grid">
                        <div class="pf-frist-card pf-frist-card--1">
                            <i class="bi bi-calendar3 pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">3</div>
                            <div class="pf-frist-card__unit">Jahre Vollzeit</div>
                            <p class="pf-frist-card__desc">In Teilzeit bis zu fünf Jahre.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--2">
                            <i class="bi bi-book pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">~2.100</div>
                            <div class="pf-frist-card__unit">Stunden Theorie</div>
                            <p class="pf-frist-card__desc">Unterricht an einer Pflegeschule.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--3">
                            <i class="bi bi-hospital pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">~2.500</div>
                            <div class="pf-frist-card__unit">Stunden Praxis</div>
                            <p class="pf-frist-card__desc">In verschiedenen Einrichtungen.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--4">
                            <i class="bi bi-arrow-down-short pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">Kürzer</div>
                            <div class="pf-frist-card__unit">bei Anrechnung</div>
                            <p class="pf-frist-card__desc">Vorqualifikationen können angerechnet werden.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Welche Voraussetzungen muss ich erfüllen?</h2>
                    <p class="pf-h-section-sub">Für den Zugang brauchen Sie einen der folgenden Schulabschlüsse:</p>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <ul>
                                <li>einen <strong>mittleren Schulabschluss</strong> (z. B. Realschule) oder einen gleichwertigen Abschluss,</li>
                                <li>oder einen <strong>Hauptschulabschluss</strong> zusammen mit einer abgeschlossenen Berufsausbildung von mindestens zwei Jahren,</li>
                                <li>oder einen Hauptschulabschluss mit einer mindestens einjährigen Ausbildung in der Pflegeassistenz oder Pflegehilfe.</li>
                            </ul>
                            <p>Außerdem sind ausreichende <strong>Deutschkenntnisse</strong> sowie die gesundheitliche Eignung erforderlich. Persönliche Eigenschaften wie Verantwortungsbewusstsein, Empathie und Teamfähigkeit sind von Vorteil. Ein Mindestalter gibt es in der Regel nicht.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-signpost-split text-success"></i> Wie läuft die Ausbildung ab?</h2>
                    <ol class="pf-timeline">
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-people"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Gemeinsamer Start</h3>
                                <p class="pf-timeline__text">Alle Auszubildenden starten mit demselben Ziel: dem Abschluss als Pflegefachfrau oder Pflegefachmann. In den ersten zwei Dritteln werden alle generalistisch ausgebildet und lernen die verschiedenen Bereiche der Pflege kennen.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-pencil-square"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Zwischenprüfung</h3>
                                <p class="pf-timeline__text">Nach zwei Dritteln der Ausbildung gibt es eine Zwischenprüfung.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-diagram-2"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Wahlrecht im letzten Drittel</h3>
                                <p class="pf-timeline__text">Im letzten Drittel besteht die Möglichkeit, statt des generalistischen Abschlusses einen gesonderten Abschluss in der Altenpflege oder Gesundheits- und Kinderkrankenpflege zu wählen. Die meisten wählen den generalistischen Abschluss — er bietet vielseitige Einsatzmöglichkeiten und die Grundlage für die EU-weite Anerkennung.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-award"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Staatliche Prüfung</h3>
                                <p class="pf-timeline__text">Am Ende steht eine staatliche Prüfung aus einem schriftlichen, mündlichen und praktischen Teil.</p>
                            </div>
                        </li>
                    </ol>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-coin text-success"></i> Was verdiene ich in der Ausbildung?</h2>
                    <div class="pf-hinweis-alert">
                        <div class="pf-hinweis-alert__icon"><i class="bi bi-piggy-bank"></i></div>
                        <div>
                            <div class="pf-hinweis-alert__title">Kostenlos &amp; vergütet ab Tag 1</div>
                            <p class="pf-hinweis-alert__text">Ein Schulgeld darf nicht erhoben werden — im Gegenteil: Sie erhalten vom ersten Tag an eine <strong>Ausbildungsvergütung</strong>. In vielen tarifgebundenen Einrichtungen liegt sie im ersten Ausbildungsjahr bei rund 1.300 bis 1.400 Euro brutto pro Monat und steigt in den folgenden Jahren an.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-graph-up-arrow text-success"></i> Wie geht es nach der Ausbildung weiter?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Mit dem Abschluss als Pflegefachkraft stehen Ihnen viele Wege offen. Sie können sich spezialisieren — etwa Intensivpflege, Anästhesie oder Psychiatrie — oder eine Weiterbildung zur Stations- oder Pflegedienstleitung machen. Mehr dazu auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegeberufe/weiterbildung/' ) ); ?>">Weiterbildungen</a>. Auch ein Pflegestudium ist möglich. Wer aus einem anderen Beruf kommt, findet Hinweise auf der Seite zum <a href="<?php echo esc_url( home_url( '/pflegeberufe/quereinstieg/' ) ); ?>">Quereinstieg</a>.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-mortarboard text-success"></i> Das Pflegestudium als Alternative</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Neben der beruflichen Ausbildung gibt es seit der Reform auch ein <strong>berufsqualifizierendes Pflegestudium</strong> an einer Hochschule. Es dauert mindestens drei Jahre und schließt mit einem akademischen Grad ab, zum Beispiel dem Bachelor. Die Berufszulassung ist Teil des Studiums. Seit dem Pflegestudiumstärkungsgesetz erhalten Studierende in der Regel ebenfalls eine angemessene Vergütung. Das Studium richtet sich an alle, die Pflege wissenschaftlich vertiefen möchten.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur Pflegeausbildung</h2>
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
                        <p class="pf-fazit__text">Die generalistische Pflegeausbildung ist ein moderner, <strong>kostenloser und vergüteter</strong> Weg in einen sicheren Beruf mit Zukunft. In drei Jahren erwerben Sie einen staatlich anerkannten Abschluss als Pflegefachfrau oder Pflegefachmann und können anschließend in zahlreichen Bereichen tätig werden — in Deutschland und EU-weit.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesgesundheitsministerium: Pflegeberufegesetz und FAQ — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium für Familie, Senioren, Frauen und Jugend: Neue Pflegeausbildungen — bmfsfj.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: Pflegeberufegesetz (PflBG), §§7 und 11 — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
                    </div>

                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle Berufs- oder Bildungsberatung.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

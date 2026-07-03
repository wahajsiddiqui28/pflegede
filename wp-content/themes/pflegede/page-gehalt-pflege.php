<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Gehalt in der Pflege (Detail)
 */

add_action( 'wp_head', function() {
    // echo '<title>Gehalt in der Pflege: Was Pflegekräfte verdienen</title>' . "\n";
    // echo '<meta name="description" content="Gehalt in der Pflege: Was Pflegefachkräfte und Pflegehilfskräfte verdienen, wie der Pflegemindestlohn wirkt und welche Faktoren das Gehalt beeinflussen. Auf pflegede.com.">' . "\n";
    // echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegeberufe/gehalt/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viel verdient man als Pflegefachkraft?","acceptedAnswer":{"@type":"Answer","text":"Eine examinierte Pflegefachkraft verdient häufig rund 3.900 bis 4.100 Euro brutto im Monat. Mit Erfahrung, Spezialisierung und Zulagen sind auch deutlich höhere Beträge möglich. Die genaue Höhe hängt von Arbeitgeber, Tarifvertrag und Region ab."}},
    {"@type":"Question","name":"Wie hoch ist der Pflegemindestlohn?","acceptedAnswer":{"@type":"Answer","text":"Seit dem 1. Juli 2025 liegt der Pflegemindestlohn bei 16,10 Euro für Pflegehilfskräfte, 17,35 Euro für qualifizierte Pflegehilfskräfte und 20,50 Euro für Pflegefachkräfte pro Stunde. Zum 1. Juli 2026 steigt er auf 16,52, 17,80 und 21,03 Euro."}},
    {"@type":"Question","name":"Verdient man im Krankenhaus mehr als in der Altenpflege?","acceptedAnswer":{"@type":"Answer","text":"Das lässt sich nicht pauschal beantworten. In tarifgebundenen Krankenhäusern sind die Gehälter häufig höher. Entscheidend sind jedoch der Arbeitgeber, der Tarifvertrag, die Region und die Berufserfahrung."}},
    {"@type":"Question","name":"Lohnt sich eine Weiterbildung finanziell?","acceptedAnswer":{"@type":"Answer","text":"In der Regel ja. Eine Fachweiterbildung oder der Wechsel in eine Leitungsfunktion hebt das Gehalt spürbar an. Auch der Aufstieg in höhere Tarifstufen bringt mehr Geld."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$mindestlohn = array(
    array( 'q' => 'Pflegehilfskräfte',              'a' => '16,10 € pro Stunde', 'b' => '16,52 € pro Stunde' ),
    array( 'q' => 'Qualifizierte Pflegehilfskräfte', 'a' => '17,35 € pro Stunde', 'b' => '17,80 € pro Stunde' ),
    array( 'q' => 'Pflegefachkräfte',               'a' => '20,50 € pro Stunde', 'b' => '21,03 € pro Stunde' ),
);

$faqs = array(
    array( 'q' => 'Wie viel verdient man als Pflegefachkraft?', 'a' => 'Eine examinierte Pflegefachkraft verdient häufig rund <strong>3.900 bis 4.100 Euro</strong> brutto im Monat. Mit Erfahrung, Spezialisierung und Zulagen sind auch deutlich höhere Beträge möglich. Die genaue Höhe hängt von Arbeitgeber, Tarifvertrag und Region ab.' ),
    array( 'q' => 'Wie hoch ist der Pflegemindestlohn?', 'a' => 'Seit dem 1. Juli 2025 liegt er bei <strong>16,10 €</strong> für Pflegehilfskräfte, <strong>17,35 €</strong> für qualifizierte Pflegehilfskräfte und <strong>20,50 €</strong> für Pflegefachkräfte pro Stunde. Zum 1. Juli 2026 steigt er auf 16,52, 17,80 und 21,03 Euro.' ),
    array( 'q' => 'Verdient man im Krankenhaus mehr als in der Altenpflege?', 'a' => 'Das lässt sich nicht pauschal beantworten. In tarifgebundenen Krankenhäusern sind die Gehälter häufig höher. Entscheidend sind jedoch der Arbeitgeber, der Tarifvertrag, die Region und die Berufserfahrung.' ),
    array( 'q' => 'Lohnt sich eine Weiterbildung finanziell?', 'a' => '<strong>In der Regel ja.</strong> Eine Fachweiterbildung oder der Wechsel in eine Leitungsfunktion hebt das Gehalt spürbar an. Auch der Aufstieg in höhere Tarifstufen bringt mehr Geld.' ),
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
                    <span class="pf-breadcrumb__current">Gehalt</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-cash-stack"></i> Verdienst in der Pflege</span>
                        <h1 class="pf-page-hero__title">Gehalt in der Pflege: <span class="pf-page-hero__title-accent">Was man</span><br>verdient</h1>
                        <p class="pf-page-hero__desc">Das Gehalt hängt vor allem von der Qualifikation ab. Examinierte Pflegefachkräfte verdienen häufig rund 3.900 bis 4.100 Euro brutto im Monat, Pflegehilfskräfte meist deutlich weniger. Tarifbindung, Region und Berufserfahrung machen einen großen Unterschied.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> ~4.000 € Fachkraft</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-bar-chart"></i> Mindestlohn gestiegen</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-graph-up-arrow"></i> Mehr durch Weiterbildung</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/gehalt/gehalt-1.jpg' ); ?>" alt="Pflegefachkraft bei der Arbeit — Gehalt und Verdienst in der Pflege.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-cash-stack"></i> Gehalt 2026</span>
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
                        <span class="pf-byline__item"><i class="bi bi-pencil"></i> Verfasst von <strong>Hassan Abid</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Tauqeer Ahmed</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Das Gehalt in der Pflege hängt vor allem von der <strong>Qualifikation</strong> ab. Examinierte Pflegefachkräfte verdienen häufig rund 3.900 bis 4.100 Euro brutto im Monat, Pflegehilfskräfte meist deutlich weniger. Tarifbindung, Region und Berufserfahrung machen einen großen Unterschied.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Vergütung in der Pflege hat sich in den vergangenen Jahren deutlich verbessert: Der Pflegemindestlohn ist mehrfach gestiegen, und in tarifgebundenen Einrichtungen sind die Gehälter deutlich gewachsen. Wie viel man konkret verdient, hängt aber stark von der Qualifikation, dem Arbeitgeber und der Region ab. Wie man in den Beruf kommt, lesen Sie auf der Seite zur <a href="<?php echo esc_url( home_url( '/pflegeberufe/ausbildung/' ) ); ?>">Pflegeausbildung</a>. pflegede.com erklärt Ihnen alles verständlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-bar-chart-steps text-success"></i> Der Pflegemindestlohn als Untergrenze</h2>
                    <p class="pf-h-section-sub">Seit dem 1. Juli 2025 gelten bundesweit nach Qualifikation gestaffelte Pflegemindestlöhne. Die Übersicht zeigt die aktuellen Stufen und die nächste Erhöhung zum 1. Juli 2026.</p>
                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Qualifikation</th>
                                    <th>seit 1. Juli 2025</th>
                                    <th>ab 1. Juli 2026</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $mindestlohn as $row ) : ?>
                                <tr>
                                    <td><strong><?php echo esc_html( $row['q'] ); ?></strong></td>
                                    <td><span class="pf-pg-amount"><?php echo esc_html( $row['a'] ); ?></span></td>
                                    <td><span class="pf-pg-amount"><?php echo esc_html( $row['b'] ); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: Pflegekommission, BMAS, 7. Pflegearbeitsbedingungenverordnung · Stand: Juni 2026</div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Der Pflegemindestlohn gilt nur für Einrichtungen mit überwiegend pflegerischen Aufgaben. In Privathaushalten (etwa bei der 24-Stunden-Betreuung) greift der allgemeine gesetzliche Mindestlohn. Die meisten Pflegekräfte verdienen ohnehin mehr als den Mindestlohn.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-person-badge text-success"></i> Was verdient eine Pflegefachkraft?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Eine Pflegefachkraft verdient — abhängig von Arbeitgeber, Tarifvertrag, Region und Berufserfahrung — häufig rund <strong>3.900 bis 4.100 Euro</strong> brutto im Monat. Zum Berufseinstieg liegen die Gehälter häufig unter diesem Wert. Mit Berufserfahrung, Fachweiterbildungen und Schichtzulagen sind auch deutlich höhere Bruttogehälter möglich. Im öffentlichen Dienst (TVöD-P) steigen Pflegefachkräfte automatisch mit der Berufsdauer in höhere Stufen auf.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-person text-success"></i> Was verdient eine Pflegehilfskraft?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Pflegehilfskräfte verdienen — abhängig von Qualifikation, Region und Arbeitgeber — häufig zwischen etwa <strong>2.600 und 2.700 Euro</strong> brutto im Monat. Damit verdient eine examinierte Pflegefachkraft im Schnitt rund <strong>1.000 bis 1.500 Euro</strong> brutto mehr im Monat als eine Pflegehilfskraft. Genau dieser Unterschied ist für viele ein Grund, sich über eine Ausbildung oder eine Weiterbildung zur Fachkraft zu qualifizieren.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-sliders text-success"></i> Was beeinflusst das Gehalt?</h2>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-mortarboard"></i></span><span class="pf-tips__body"><strong>Qualifikation</strong> Dreijährige Ausbildung und Fachweiterbildungen bringen deutlich mehr als eine Helfertätigkeit.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-file-earmark-text"></i></span><span class="pf-tips__body"><strong>Tarifbindung</strong> Öffentlicher Dienst, kirchliche Träger und große Wohlfahrtsverbände zahlen oft besser.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-geo-alt"></i></span><span class="pf-tips__body"><strong>Region</strong> In manchen Bundesländern und Ballungsräumen wird mehr gezahlt.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-hourglass-split"></i></span><span class="pf-tips__body"><strong>Berufserfahrung</strong> Mit den Jahren steigt das Gehalt — im Tarif automatisch über feste Stufen.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-moon-stars"></i></span><span class="pf-tips__body"><strong>Zuschläge</strong> Für Schicht-, Nacht-, Sonn- und Feiertagsarbeit — teils steuerlich begünstigt.</span></li>
                    </ul>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-graph-up-arrow text-success"></i> Mehr verdienen durch Weiterbildung</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wer sein Einkommen steigern möchte, kann dies durch <strong>Fachweiterbildungen</strong> oder <strong>Leitungsfunktionen</strong> erreichen. Eine Fachweiterbildung (z. B. Intensivpflege, OP oder Gerontopsychiatrie) hebt das Gehalt deutlich an. Auch der Schritt in die Leitung — als Stations- oder Pflegedienstleitung — lohnt sich finanziell. Welche Wege es gibt, lesen Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegeberufe/weiterbildung/' ) ); ?>">Weiterbildungen</a>.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zum Gehalt in der Pflege</h2>
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
                        <p class="pf-fazit__text">Die Vergütung in der Pflege ist in den vergangenen Jahren deutlich gestiegen. Das tatsächliche Gehalt hängt von <strong>Qualifikation, Tarifvertrag, Arbeitgeber, Region und Berufserfahrung</strong> ab. Wer sich weiterbildet, kann sein Gehalt zusätzlich steigern.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesregierung: Mindestlohn in der Altenpflege (7. Pflegearbeitsbedingungenverordnung) — bundesregierung.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium für Arbeit und Soziales: Pflegemindestlohn — bmas.de (abgerufen am 24. Juni 2026).</li>
                            <li>Statistisches Bundesamt: Verdienste im Gesundheits- und Pflegebereich — destatis.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
                    </div>

                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die genannten Gehälter sind Orientierungswerte. Die tatsächliche Vergütung hängt von Tarifvertrag, Arbeitgeber, Region, Erfahrung und Zuschlägen ab.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

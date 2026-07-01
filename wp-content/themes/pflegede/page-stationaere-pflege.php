<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Stationäre Pflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Stationäre Pflege: Kosten, Leistungen &amp; Eigenanteil 2026</title>' . "\n";
    echo '<meta name="description" content="Stationäre Pflege im Pflegeheim: Was die Pflegekasse 2026 zahlt, wie hoch der Eigenanteil ist und wie der Leistungszuschlag ihn senkt. Verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegearten/stationaere-pflege/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viel zahlt die Pflegekasse im Pflegeheim?","acceptedAnswer":{"@type":"Answer","text":"Die Pflegekasse zahlt je nach Pflegegrad zwischen 805 Euro (Pflegegrad 2) und 2.096 Euro (Pflegegrad 5) pro Monat. Bei Pflegegrad 1 sind es 131 Euro. Diese Beträge decken nur einen Teil der Heimkosten."}},
    {"@type":"Question","name":"Warum ist der Eigenanteil so hoch?","acceptedAnswer":{"@type":"Answer","text":"Die Pflegeversicherung übernimmt nur einen Teil der pflegebedingten Kosten. Unterkunft, Verpflegung, Investitionskosten und weitere nicht gedeckte Ausgaben müssen in der Regel selbst getragen werden."}},
    {"@type":"Question","name":"Wie funktioniert der Leistungszuschlag?","acceptedAnswer":{"@type":"Answer","text":"Der Leistungszuschlag senkt den pflegebedingten Eigenanteil. Er beträgt im ersten Jahr 15 Prozent und steigt auf 30, 50 und schließlich 75 Prozent, je länger die Person im Heim lebt."}},
    {"@type":"Question","name":"Was passiert, wenn ich mir das Heim nicht leisten kann?","acceptedAnswer":{"@type":"Answer","text":"Reichen Einkommen und Vermögen nicht aus, kann die Hilfe zur Pflege beim Sozialamt beantragt werden. Erwachsene Kinder werden erst ab einem Jahresbruttoeinkommen von über 100.000 Euro zur Zahlung herangezogen."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$leistung = array(
    array( 'pg' => '1', 'chip' => '1', 'betrag' => '131 € pro Monat (über Kostenerstattung)', 'none' => false ),
    array( 'pg' => '2', 'chip' => '2', 'betrag' => '805 € pro Monat',   'none' => false ),
    array( 'pg' => '3', 'chip' => '3', 'betrag' => '1.319 € pro Monat', 'none' => false ),
    array( 'pg' => '4', 'chip' => '4', 'betrag' => '1.855 € pro Monat', 'none' => false ),
    array( 'pg' => '5', 'chip' => '5', 'betrag' => '2.096 € pro Monat', 'none' => false ),
);

$faqs = array(
    array( 'q' => 'Wie viel zahlt die Pflegekasse im Pflegeheim?', 'a' => 'Die Pflegekasse zahlt je nach Pflegegrad zwischen <strong>805 Euro</strong> (Pflegegrad 2) und <strong>2.096 Euro</strong> (Pflegegrad 5) pro Monat. Bei Pflegegrad 1 sind es 131 Euro. Diese Beträge decken nur einen Teil der Heimkosten.' ),
    array( 'q' => 'Warum ist der Eigenanteil so hoch?', 'a' => 'Die Pflegeversicherung übernimmt nur einen Teil der pflegebedingten Kosten. <strong>Unterkunft, Verpflegung, Investitionskosten</strong> und weitere nicht gedeckte Ausgaben müssen in der Regel selbst getragen werden.' ),
    array( 'q' => 'Wie funktioniert der Leistungszuschlag?', 'a' => 'Der Leistungszuschlag senkt den pflegebedingten Eigenanteil. Er beträgt im ersten Jahr <strong>15 Prozent</strong> und steigt auf 30, 50 und schließlich <strong>75 Prozent</strong>, je länger die Person im Heim lebt.' ),
    array( 'q' => 'Was passiert, wenn ich mir das Heim nicht leisten kann?', 'a' => 'Reichen Einkommen und Vermögen nicht aus, kann die <strong>Hilfe zur Pflege</strong> beim Sozialamt beantragt werden. Erwachsene Kinder werden erst ab einem Jahresbruttoeinkommen von über 100.000 Euro zur Zahlung herangezogen.' ),
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
                    <a href="<?php echo esc_url( home_url( '/pflegearten/' ) ); ?>">Pflegearten</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Stationäre Pflege</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-building"></i> Leben im Pflegeheim</span>
                        <h1 class="pf-page-hero__title">Stationäre Pflege: <span class="pf-page-hero__title-accent">Kosten</span><br>&amp; Eigenanteil</h1>
                        <p class="pf-page-hero__desc">Bei der stationären Pflege lebt die pflegebedürftige Person dauerhaft in einem Pflegeheim. Die Pflegekasse zahlt je nach Pflegegrad einen festen Leistungsbetrag, bei Pflegegrad 5 zum Beispiel 2.096 Euro pro Monat. Den Rest tragen die Bewohner als Eigenanteil.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clock-history"></i> Rund-um-die-Uhr</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Bis 2.096 €/Monat</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-graph-down-arrow"></i> Leistungszuschlag</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/stationaere-pflege/stationaere-pflege-1.jpg' ); ?>" alt="Pflegekraft betreut eine Bewohnerin in einem Pflegeheim bei der stationären Pflege.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-building"></i> Stationäre Pflege</span>
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
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Amna Tauqeer</strong>, Redakteurin</span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Bei der stationären Pflege lebt die pflegebedürftige Person <strong>dauerhaft in einem Pflegeheim</strong>. Die Pflegekasse zahlt je nach Pflegegrad einen festen Leistungsbetrag, bei Pflegegrad 5 zum Beispiel 2.096 Euro pro Monat. Die nicht übernommenen Kosten tragen die Bewohner als Eigenanteil selbst.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Nicht immer lässt sich die Pflege zu Hause sicherstellen. Wenn der Pflegebedarf sehr hoch ist oder Angehörige die Versorgung nicht mehr leisten können, ist ein Pflegeheim oft die richtige Lösung. Die stationäre Pflege bietet eine Rundumversorgung durch Fachkräfte, rund um die Uhr. Einen Überblick über alle Pflegeformen finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegearten/' ) ); ?>">Pflegearten</a>. pflegede.com erklärt Ihnen alles verständlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was ist stationäre Pflege?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Stationäre Pflege bedeutet, dass die pflegebedürftige Person <strong>dauerhaft in einer vollstationären Pflegeeinrichtung</strong> lebt und dort versorgt wird — dem Pflegeheim. Anders als bei der häuslichen Pflege übernimmt das Pflegepersonal die komplette Versorgung, von der Körperpflege über die Mahlzeiten bis zur Betreuung am Tag und in der Nacht. Davon zu unterscheiden ist die <a href="<?php echo esc_url( home_url( '/pflegearten/kurzzeitpflege/' ) ); ?>">Kurzzeitpflege</a>, bei der jemand nur vorübergehend im Heim versorgt wird.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-stack text-success"></i> Was zahlt die Pflegekasse für die stationäre Pflege?</h2>
                    <p class="pf-h-section-sub">Für die vollstationäre Pflege zahlt die Pflegekasse nach §43 SGB XI einen festen monatlichen Leistungsbetrag. Wie hoch er ist, hängt vom Pflegegrad ab.</p>
                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Pflegegrad</th>
                                    <th>Leistung vollstationäre Pflege (2025 &amp; 2026)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $leistung as $row ) : ?>
                                <tr>
                                    <td><span class="pf-pg-chip pf-pg-chip--<?php echo esc_attr( $row['chip'] ); ?>">PG <?php echo esc_html( $row['pg'] ); ?></span></td>
                                    <td><span class="pf-pg-amount"><?php echo esc_html( $row['betrag'] ); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: Bundesgesundheitsministerium, GKV-Spitzenverband, SGB XI · gültig seit 1. Januar 2025 · Stand: Juni 2026</div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-exclamation-circle"></i></div>
                        <span>Wichtig: Diese Beträge decken nur einen <strong>Teil</strong> der tatsächlichen Heimkosten. Den Rest zahlen die Bewohner selbst.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-receipt text-success"></i> Wie setzt sich der Eigenanteil zusammen?</h2>
                    <p class="pf-h-section-sub">Die tatsächlichen Kosten eines Pflegeheims liegen in der Regel deutlich über den Leistungen der Pflegekasse. Die Differenz ist der Eigenanteil. Er besteht aus mehreren Bestandteilen:</p>
                    <div class="pf-who-cards">
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-heart-pulse"></i></div>
                            <p class="pf-who-card__text"><strong>Einrichtungseinheitlicher Eigenanteil (EEE)</strong> Der pflegebedingte Anteil — für alle Bewohner ab PG 2 gleich hoch.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-cup-hot"></i></div>
                            <p class="pf-who-card__text"><strong>Unterkunft &amp; Verpflegung</strong> Die sogenannten Hotelkosten für Zimmer und Essen.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-bricks"></i></div>
                            <p class="pf-who-card__text"><strong>Investitionskosten</strong> Anteil an den Bau- und Instandhaltungskosten des Heims.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-mortarboard"></i></div>
                            <p class="pf-who-card__text"><strong>Ausbildungsumlage</strong> Ein Beitrag zur Finanzierung der Pflegeausbildung.</p>
                        </div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Die Höhe des Eigenanteils variiert je nach Einrichtung und Region erheblich. In vielen Pflegeheimen liegt die monatliche Gesamtbelastung dennoch bei mehreren Tausend Euro.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-graph-down-arrow text-success"></i> Der Leistungszuschlag senkt den Eigenanteil</h2>
                    <p class="pf-h-section-sub">Zur Entlastung zahlt die Pflegekasse einen Leistungszuschlag nach §43c SGB XI auf den pflegebedingten Eigenanteil. Er gilt ab Pflegegrad 2 und steigt mit der Dauer des Heimaufenthalts:</p>
                    <div class="pf-frist-grid">
                        <div class="pf-frist-card pf-frist-card--3">
                            <i class="bi bi-hourglass-top pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">15 %</div>
                            <div class="pf-frist-card__unit">bis 12 Monate</div>
                            <p class="pf-frist-card__desc">Zuschlag auf den pflegebedingten Eigenanteil im ersten Jahr.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--2">
                            <i class="bi bi-hourglass-split pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">30 %</div>
                            <div class="pf-frist-card__unit">nach 12 Monaten</div>
                            <p class="pf-frist-card__desc">Der Zuschlag verdoppelt sich im zweiten Jahr.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--1">
                            <i class="bi bi-hourglass-bottom pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">50 %</div>
                            <div class="pf-frist-card__unit">nach 24 Monaten</div>
                            <p class="pf-frist-card__desc">Die Hälfte des pflegebedingten Eigenanteils wird übernommen.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--1">
                            <i class="bi bi-check-circle pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">75 %</div>
                            <div class="pf-frist-card__unit">nach 36 Monaten</div>
                            <p class="pf-frist-card__desc">Ab dem vierten Jahr im Heim der höchste Zuschlag.</p>
                        </div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Der Zuschlag bezieht sich <strong>ausschließlich</strong> auf den pflegebedingten Eigenanteil. Kosten für Unterkunft, Verpflegung und Investitionskosten bleiben davon unberührt. Die Berechnung übernimmt das Pflegeheim; der Zuschlag wird direkt mit der Pflegekasse abgerechnet.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-hand-thumbs-up text-success"></i> Wenn das Einkommen nicht reicht: Hilfe zur Pflege</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Reichen Rente und Vermögen nicht aus, um den Eigenanteil zu tragen, springt unter bestimmten Voraussetzungen das <strong>Sozialamt mit der Hilfe zur Pflege</strong> nach dem SGB XII ein. Geprüft wird dabei das Einkommen und Vermögen der pflegebedürftigen Person. Unterhaltspflichtige Kinder werden grundsätzlich erst dann herangezogen, wenn ihr jährliches Bruttoeinkommen über <strong>100.000 Euro</strong> liegt. Eine Beratung dazu bieten die Pflegestützpunkte und die Sozialämter.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-search text-success"></i> Das passende Pflegeheim finden</h2>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Persönlich besuchen</strong> Besuchen Sie mehrere Heime und achten Sie auf die Atmosphäre.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Personal &amp; Konzept</strong> Informieren Sie sich über Fachkräfteanteil und Betreuungskonzept.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Eigenanteile vergleichen</strong> Sie unterscheiden sich teils erheblich.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Auf die Lage achten</strong> Damit Angehörige die Person leicht besuchen können.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Heimvertrag lesen</strong> Genau prüfen, bevor Sie unterschreiben.</span></li>
                    </ul>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur stationären Pflege</h2>
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
                        <p class="pf-fazit__text">Die stationäre Pflege bietet eine umfassende Versorgung, wenn die Pflege zu Hause nicht mehr möglich ist. Die Pflegekasse beteiligt sich mit einem festen Leistungsbetrag, den Rest tragen die Bewohner als Eigenanteil. Der <strong>Leistungszuschlag</strong> senkt diesen Anteil mit der Zeit spürbar. Wer Heime, Kosten und Verträge sorgfältig vergleicht, trifft eine fundierte Entscheidung.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesgesundheitsministerium: Leistungen der Pflegeversicherung — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §43 Inhalt der Leistung (vollstationäre Pflege) — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §43c Leistungszuschlag — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
                    </div>

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

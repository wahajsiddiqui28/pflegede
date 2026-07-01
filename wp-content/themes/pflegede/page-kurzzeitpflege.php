<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Kurzzeitpflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Kurzzeitpflege: Leistungen, Dauer &amp; Kosten</title>' . "\n";
    echo '<meta name="description" content="Kurzzeitpflege: vorübergehende Pflege im Heim, bis zu acht Wochen pro Jahr und 3.539 Euro aus dem gemeinsamen Jahresbetrag. Voraussetzungen und Kosten auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegearten/kurzzeitpflege/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie lange ist Kurzzeitpflege möglich?","acceptedAnswer":{"@type":"Answer","text":"Die Kurzzeitpflege ist auf acht Wochen, also 56 Tage, pro Kalenderjahr begrenzt."}},
    {"@type":"Question","name":"Ab welchem Pflegegrad gibt es Kurzzeitpflege?","acceptedAnswer":{"@type":"Answer","text":"Anspruch besteht ab Pflegegrad 2. Nach einem Krankenhausaufenthalt kann unter bestimmten Voraussetzungen auch ohne Pflegegrad eine Kurzzeitpflege über die Krankenkasse nach §39c SGB V möglich sein."}},
    {"@type":"Question","name":"Wie viel zahlt die Pflegekasse für die Kurzzeitpflege?","acceptedAnswer":{"@type":"Answer","text":"Die Kurzzeitpflege wird aus dem gemeinsamen Jahresbetrag von bis zu 3.539 Euro finanziert, den sie sich mit der Verhinderungspflege teilt. Davon übernimmt die Pflegekasse die pflegebedingten Kosten, nicht die Kosten für Unterkunft und Verpflegung."}},
    {"@type":"Question","name":"Bekomme ich während der Kurzzeitpflege noch Pflegegeld?","acceptedAnswer":{"@type":"Answer","text":"Ja, allerdings nur zur Hälfte. Das halbe Pflegegeld wird für bis zu acht Wochen im Kalenderjahr weitergezahlt."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$faqs = array(
    array( 'q' => 'Wie lange ist Kurzzeitpflege möglich?', 'a' => 'Die Kurzzeitpflege ist auf <strong>acht Wochen</strong>, also 56 Tage, pro Kalenderjahr begrenzt.' ),
    array( 'q' => 'Ab welchem Pflegegrad gibt es Kurzzeitpflege?', 'a' => 'Anspruch besteht <strong>ab Pflegegrad 2</strong>. Nach einem Krankenhausaufenthalt kann unter bestimmten Voraussetzungen auch ohne Pflegegrad eine Kurzzeitpflege über die Krankenkasse nach §39c SGB V möglich sein.' ),
    array( 'q' => 'Wie viel zahlt die Pflegekasse für die Kurzzeitpflege?', 'a' => 'Die Kurzzeitpflege wird aus dem gemeinsamen Jahresbetrag von bis zu <strong>3.539 Euro</strong> finanziert, den sie sich mit der Verhinderungspflege teilt. Davon übernimmt die Pflegekasse die pflegebedingten Kosten, nicht die Kosten für Unterkunft und Verpflegung.' ),
    array( 'q' => 'Bekomme ich während der Kurzzeitpflege noch Pflegegeld?', 'a' => '<strong>Ja</strong>, allerdings nur zur Hälfte. Das halbe Pflegegeld wird für bis zu acht Wochen im Kalenderjahr weitergezahlt.' ),
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
                    <span class="pf-breadcrumb__current">Kurzzeitpflege</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-calendar-event"></i> Pflege auf Zeit</span>
                        <h1 class="pf-page-hero__title">Kurzzeitpflege: <span class="pf-page-hero__title-accent">vorübergehend</span><br>im Heim</h1>
                        <p class="pf-page-hero__desc">Bei der Kurzzeitpflege wird eine pflegebedürftige Person vorübergehend in einer stationären Einrichtung versorgt, etwa nach einem Krankenhausaufenthalt. Sie ist ab Pflegegrad 2 für bis zu acht Wochen pro Jahr möglich.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-calendar-week"></i> Bis 8 Wochen/Jahr</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Bis 3.539 €</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> §42 SGB XI</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/kurzzeitpflege/kurzzeitpflege-1.jpg' ); ?>" alt="Ältere Person wird vorübergehend in einer Kurzzeitpflege-Einrichtung versorgt.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-calendar-event"></i> Kurzzeitpflege</span>
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
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Amna Tauqeer</strong>, Redakteurin</span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Bei der Kurzzeitpflege wird eine pflegebedürftige Person <strong>vorübergehend in einer stationären Einrichtung</strong> versorgt, etwa nach einem Krankenhausaufenthalt. Sie ist ab Pflegegrad 2 für bis zu acht Wochen pro Jahr möglich und wird aus dem gemeinsamen Jahresbetrag von bis zu 3.539 Euro finanziert.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Manchmal lässt sich die Pflege zu Hause nur für eine begrenzte Zeit nicht sicherstellen — etwa nach einer Operation, in einer Krise oder wenn die Pflegeperson selbst ausfällt. Für solche Situationen gibt es die Kurzzeitpflege. Die pflegebedürftige Person wird dann vorübergehend in einem Pflegeheim versorgt, bis die häusliche Pflege wieder möglich ist. Einen Überblick über alle Pflegeformen finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegearten/' ) ); ?>">Pflegearten</a>. pflegede.com erklärt Ihnen alles verständlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was ist Kurzzeitpflege?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Kurzzeitpflege ist eine <strong>vorübergehende vollstationäre Versorgung</strong> nach §42 SGB XI. Sie kommt zum Einsatz, wenn die häusliche Pflege zeitweise nicht oder noch nicht im nötigen Umfang möglich ist und auch eine Tagespflege nicht ausreicht. Anders als die dauerhafte stationäre Pflege ist die Kurzzeitpflege von vornherein zeitlich begrenzt. Typische Anlässe sind die Zeit nach einem Krankenhausaufenthalt, eine Krise in der Pflege oder ein vorübergehender Ausfall der Pflegeperson.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-check2-circle text-success"></i> Wann kommt Kurzzeitpflege infrage?</h2>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Nach dem Krankenhaus</strong> Wenn zu Hause noch nicht genug Versorgung möglich ist.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Nach einer Operation</strong> In der Übergangszeit bis zur Genesung.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Ausfall der Pflegeperson</strong> Wenn die Versorgung zu Hause nicht organisiert werden kann.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>In einer Krisensituation</strong> Wenn die häusliche Pflege plötzlich nicht mehr klappt.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Zur Überbrückung</strong> Bis ein dauerhafter Heimplatz frei wird.</span></li>
                    </ul>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-clipboard2-check text-success"></i> Voraussetzungen und Dauer</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Anspruch auf Kurzzeitpflege haben Pflegebedürftige <strong>ab Pflegegrad 2</strong>. Die Versorgung findet in einer für die Kurzzeitpflege zugelassenen vollstationären Einrichtung statt. Pro Kalenderjahr ist die Kurzzeitpflege auf <strong>acht Wochen (56 Tage)</strong> begrenzt. Eine Besonderheit gilt nach einem Krankenhausaufenthalt: Unter bestimmten Voraussetzungen kann auch ohne Pflegegrad eine Kurzzeitpflege über die Krankenkasse nach §39c SGB V möglich sein, wenn die häusliche Versorgung nach einer schweren Erkrankung vorübergehend nicht sichergestellt ist.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-stack text-success"></i> Was zahlt die Pflegekasse?</h2>
                    <div class="pf-hinweis-alert">
                        <div class="pf-hinweis-alert__icon"><i class="bi bi-wallet2"></i></div>
                        <div>
                            <div class="pf-hinweis-alert__title">Gemeinsamer Jahresbetrag: bis 3.539 €</div>
                            <p class="pf-hinweis-alert__text">Seit dem 1. Juli 2025 werden Kurzzeitpflege und Verhinderungspflege aus einem gemeinsamen Jahresbetrag finanziert. Er beträgt bis zu <strong>3.539 Euro pro Kalenderjahr</strong> und lässt sich flexibel auf beide Leistungen aufteilen. Wer im Jahr keine Verhinderungspflege nutzt, kann den vollen Betrag für die Kurzzeitpflege einsetzen.</p>
                        </div>
                    </div>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Aus diesem Budget übernimmt die Pflegekasse die pflegebedingten Aufwendungen, die Betreuung und die medizinische Behandlungspflege in der Einrichtung.</p>
                            <p style="font-size:.85rem;color:#6b7280;"><i class="bi bi-info-circle"></i> Quelle: Bundesgesundheitsministerium, GKV-Spitzenverband, SGB XI · Gemeinsamer Jahresbetrag gültig seit 1. Juli 2025 · Stand: Juni 2026.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-receipt text-success"></i> Welche Kosten bleiben als Eigenanteil?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wie bei der dauerhaften Heimpflege deckt die Pflegekasse nur die pflegebedingten Kosten ab. Die Kosten für <strong>Unterkunft und Verpflegung</strong> sowie die Investitionskosten der Einrichtung tragen Sie selbst. Diese Hotelkosten können während der Kurzzeitpflege spürbar ins Gewicht fallen. Eine Entlastung bietet der <strong>Entlastungsbetrag von 131 Euro</strong> pro Monat, der unter bestimmten Voraussetzungen auch zur Entlastung bei Unterkunfts- und Verpflegungskosten eingesetzt werden kann.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-coin text-success"></i> Was passiert mit dem Pflegegeld?</h2>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-percent"></i></div>
                        <span>Während der Kurzzeitpflege läuft das Pflegegeld weiter — allerdings nur <strong>zur Hälfte</strong>. Diese hälftige Fortzahlung gilt für bis zu acht Wochen im Kalenderjahr. So bleibt zumindest ein Teil der gewohnten Leistung erhalten.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-file-earmark-text text-success"></i> Kurzzeitpflege beantragen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Kurzzeitpflege beantragen Sie bei der Pflegekasse, am besten <strong>vor Beginn</strong> der Versorgung. Geht es um die Zeit direkt nach einem Krankenhausaufenthalt, hilft der Sozialdienst des Krankenhauses bei der Organisation und beim Antrag. Wichtig ist, dass die Einrichtung für die Kurzzeitpflege zugelassen ist. Da freie Plätze nicht immer sofort verfügbar sind, lohnt es sich, frühzeitig zu planen und mehrere Einrichtungen anzufragen.</p>
                        </div>
                    </div>

                    <!-- Kurzzeit vs Verhinderung -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-left-right text-success"></i> Kurzzeitpflege und Verhinderungspflege</h2>
                    <p class="pf-h-section-sub">Beide werden oft verwechselt, sind aber nicht dasselbe. Seit Juli 2025 teilen sie sich den gemeinsamen Jahresbetrag:</p>
                    <div class="pf-outcome-grid">
                        <div class="pf-outcome pf-outcome--good">
                            <div class="pf-outcome__head">
                                <div class="pf-outcome__icon"><i class="bi bi-building"></i></div>
                                <h3 class="pf-outcome__title">Kurzzeitpflege</h3>
                            </div>
                            <p class="pf-outcome__text">Findet <strong>stationär im Heim</strong> statt. Die pflegebedürftige Person wird vorübergehend vollstationär versorgt — etwa nach einem Krankenhausaufenthalt.</p>
                        </div>
                        <div class="pf-outcome pf-outcome--neutral">
                            <div class="pf-outcome__head">
                                <div class="pf-outcome__icon"><i class="bi bi-house-heart"></i></div>
                                <h3 class="pf-outcome__title">Verhinderungspflege</h3>
                            </div>
                            <p class="pf-outcome__text">Ersetzt eine <strong>ausgefallene Pflegeperson</strong> — meist zu Hause oder stundenweise, wenn die Pflegeperson verhindert ist.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur Kurzzeitpflege</h2>
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
                        <p class="pf-fazit__text">Die Kurzzeitpflege ist eine wichtige Hilfe, wenn die Pflege zu Hause vorübergehend nicht möglich ist. Sie überbrückt schwierige Phasen, etwa nach einem Krankenhausaufenthalt oder bei Ausfall der Pflegeperson. Über den <strong>gemeinsamen Jahresbetrag</strong> beteiligt sich die Pflegekasse an den Kosten — und das halbe Pflegegeld läuft weiter.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesministerium der Justiz: SGB XI, §42 Kurzzeitpflege — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §42a Gemeinsamer Jahresbetrag — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB V, §39c Kurzzeitpflege bei fehlender Pflegebedürftigkeit — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesgesundheitsministerium: Leistungen der Pflegeversicherung — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
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

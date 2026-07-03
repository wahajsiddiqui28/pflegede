<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: 24-Stunden-Betreuung (Detail)
 */

add_action( 'wp_head', function() {
    // echo '<title>24-Stunden-Betreuung: Kosten, Modelle &amp; Recht</title>' . "\n";
    // echo '<meta name="description" content="24-Stunden-Betreuung zu Hause: legale Modelle, Kosten 2026, was die Pflegekasse beiträgt und worauf Sie rechtlich achten müssen. Verständlich erklärt auf pflegede.com.">' . "\n";
    // echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegearten/24-stunden-pflege/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Arbeitet die Betreuungskraft wirklich 24 Stunden?","acceptedAnswer":{"@type":"Answer","text":"Nein. Der Begriff ist irreführend. Eine durchgehende Arbeit rund um die Uhr ist nach dem Arbeitszeitgesetz nicht zulässig. Die Betreuungskraft lebt im Haushalt und ist ansprechbar, arbeitet aber im Rahmen der gesetzlichen Arbeits- und Ruhezeiten."}},
    {"@type":"Question","name":"Ist die 24-Stunden-Betreuung legal?","acceptedAnswer":{"@type":"Answer","text":"Ja, wenn sie korrekt organisiert ist. Der gängige Weg ist das Entsendemodell mit A1-Bescheinigung, bei dem die Betreuungskraft im Heimatland sozialversichert ist und der deutsche Mindestlohn eingehalten wird."}},
    {"@type":"Question","name":"Zahlt die Pflegekasse die 24-Stunden-Betreuung?","acceptedAnswer":{"@type":"Answer","text":"Es gibt keine eigene Leistung dafür. Die Kosten lassen sich aber mit Pflegegeld, dem gemeinsamen Jahresbetrag für Verhinderungs- und Kurzzeitpflege und dem Entlastungsbetrag teilweise decken. Ein Eigenanteil bleibt in der Regel bestehen."}},
    {"@type":"Question","name":"Darf die Betreuungskraft Medikamente geben oder Wunden versorgen?","acceptedAnswer":{"@type":"Answer","text":"Nein. Medizinische Behandlungspflege wie das Verabreichen von Medikamenten, Injektionen oder die Wundversorgung darf nur ein zugelassener ambulanter Pflegedienst übernehmen. Dieser wird bei Bedarf zusätzlich eingebunden."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$faqs = array(
    array( 'q' => 'Arbeitet die Betreuungskraft wirklich 24 Stunden?', 'a' => '<strong>Nein.</strong> Der Begriff ist irreführend. Eine durchgehende Arbeit rund um die Uhr ist nach dem Arbeitszeitgesetz nicht zulässig. Die Betreuungskraft lebt im Haushalt und ist ansprechbar, arbeitet aber im Rahmen der gesetzlichen Arbeits- und Ruhezeiten.' ),
    array( 'q' => 'Ist die 24-Stunden-Betreuung legal?', 'a' => '<strong>Ja</strong>, wenn sie korrekt organisiert ist. Der gängige Weg ist das <strong>Entsendemodell</strong> mit A1-Bescheinigung, bei dem die Betreuungskraft im Heimatland sozialversichert ist und der deutsche Mindestlohn eingehalten wird.' ),
    array( 'q' => 'Zahlt die Pflegekasse die 24-Stunden-Betreuung?', 'a' => 'Es gibt <strong>keine eigene Leistung</strong> dafür. Die Kosten lassen sich aber mit Pflegegeld, dem gemeinsamen Jahresbetrag für Verhinderungs- und Kurzzeitpflege und dem Entlastungsbetrag teilweise decken. Ein Eigenanteil bleibt in der Regel bestehen.' ),
    array( 'q' => 'Darf die Betreuungskraft Medikamente geben oder Wunden versorgen?', 'a' => '<strong>Nein.</strong> Medizinische Behandlungspflege wie das Verabreichen von Medikamenten, Injektionen oder die Wundversorgung darf nur ein zugelassener ambulanter Pflegedienst übernehmen. Dieser wird bei Bedarf zusätzlich eingebunden.' ),
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
                    <span class="pf-breadcrumb__current">24-Stunden-Betreuung</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-clock-history"></i> Betreuung im Haushalt</span>
                        <h1 class="pf-page-hero__title">24-Stunden-Betreuung: <span class="pf-page-hero__title-accent">Modelle</span><br>Kosten &amp; Recht</h1>
                        <p class="pf-page-hero__desc">Bei der sogenannten 24-Stunden-Betreuung lebt eine Betreuungskraft im Haushalt der pflegebedürftigen Person und unterstützt sie im Alltag. Der Begriff ist irreführend, denn rund um die Uhr darf niemand arbeiten. Die Kosten liegen 2026 meist zwischen 2.500 und 3.500 Euro.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house-heart"></i> Im Haushalt lebend</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> 2.500–3.500 €/Monat</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> Legal mit A1</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/24-stunden-pflege/24-stunden-pflege-1.jpg' ); ?>" alt="Betreuungskraft unterstützt eine ältere Person im Haushalt bei der 24-Stunden-Betreuung.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-clock-history"></i> 24-Stunden-Betreuung</span>
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
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Hassan Abid</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Bei der sogenannten 24-Stunden-Betreuung lebt eine <strong>Betreuungskraft im Haushalt</strong> der pflegebedürftigen Person und unterstützt sie im Alltag. Der Begriff ist irreführend, denn rund um die Uhr darf niemand arbeiten. Die monatlichen Kosten liegen 2026 meist zwischen 2.500 und 3.500 Euro.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Viele Familien wünschen sich, dass ein pflegebedürftiger Angehöriger zu Hause bleiben kann, auch wenn der Betreuungsbedarf hoch ist. Eine Möglichkeit ist die sogenannte 24-Stunden-Betreuung: Eine Betreuungskraft, häufig aus dem europäischen Ausland, zieht in den Haushalt ein und übernimmt Aufgaben, die sonst Angehörige leisten würden. Einen Überblick über alle Pflegeformen finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegearten/' ) ); ?>">Pflegearten</a>. pflegede.com erklärt Ihnen alles verständlich und ehrlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was bedeutet 24-Stunden-Betreuung?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Der Begriff hat sich umgangssprachlich eingebürgert, ist rechtlich aber irreführend. Keine einzelne Betreuungskraft darf 24 Stunden am Tag arbeiten — das verstößt gegen das <strong>Arbeitszeitgesetz</strong>. Gemeint ist eine <strong>Betreuung in häuslicher Gemeinschaft</strong>: Die Betreuungskraft lebt im Haushalt und ist bei Bedarf ansprechbar. In der Praxis arbeitet sie im Rahmen der gesetzlichen Arbeits- und Ruhezeiten. Das unterscheidet sie von einem ambulanten Pflegedienst, der nur stundenweise kommt.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-list-check text-success"></i> Welche Aufgaben übernimmt eine Betreuungskraft?</h2>
                    <div class="pf-who-cards">
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-basket"></i></div>
                            <p class="pf-who-card__text"><strong>Hauswirtschaft</strong> Kochen, Einkaufen, Reinigen und Wäsche.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-person-arms-up"></i></div>
                            <p class="pf-who-card__text"><strong>Unterstützung im Alltag</strong> Hilfe bei Körperpflege, Ankleiden und Mobilität — soweit vereinbart.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-chat-heart"></i></div>
                            <p class="pf-who-card__text"><strong>Soziale Betreuung</strong> Gespräche, Spaziergänge, Beschäftigung und Tagesstruktur.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-signpost"></i></div>
                            <p class="pf-who-card__text"><strong>Begleitung</strong> Zu Arztterminen oder Behördengängen.</p>
                        </div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-exclamation-circle"></i></div>
                        <span>Wichtig: <strong>Medizinische Behandlungspflege</strong> (Medikamente, Injektionen, Wundversorgung) darf eine Betreuungskraft nicht übernehmen. Diese Aufgaben muss ein zugelassener ambulanter Pflegedienst leisten. Beide Formen werden daher oft kombiniert.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-diagram-3 text-success"></i> Die drei rechtlichen Modelle</h2>
                    <ol class="pf-timeline">
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-airplane"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Entsendemodell <span class="pf-timeline__badge">Häufigster Weg</span></h3>
                                <p class="pf-timeline__text">Die Betreuungskraft ist bei einem Unternehmen im Heimatland angestellt und wird nach Deutschland entsandt. Eine Vermittlungsagentur organisiert den Einsatz. Für Familien meist der einfachste Weg, da kein Arbeitgeberaufwand entsteht und bei Ausfall schnell Ersatz kommt.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-house-gear"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Arbeitgebermodell</h3>
                                <p class="pf-timeline__text">Die Familie stellt die Betreuungskraft direkt an und übernimmt alle Arbeitgeberpflichten — also Sozialabgaben, Lohnfortzahlung und Urlaub.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-exclamation-triangle"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Selbständige Betreuungskraft <span class="pf-timeline__badge">Rechtlich heikel</span></h3>
                                <p class="pf-timeline__text">Die Kraft rechnet selbständig ab. Dieser Weg ist rechtlich heikel, weil eine Scheinselbstständigkeit drohen kann.</p>
                            </div>
                        </li>
                    </ol>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-file-earmark-check"></i></div>
                        <span>Beim Entsendemodell ist die <strong>A1-Bescheinigung</strong> das wichtigste Dokument. Sie weist nach, dass die Betreuungskraft im Heimatland sozialversichert ist. Ohne diesen Nachweis drohen rechtliche Risiken bis hin zum Verdacht der Schwarzarbeit.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-bank text-success"></i> Was rechtlich gilt</h2>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Deutsches Arbeitsrecht</strong> Es gelten Mindestlohn, Höchstarbeitszeiten und Ruhezeiten.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Mindestlohn 2026</strong> Seit 1. Januar 2026: 13,90 €/Stunde — ab 1. Januar 2027: 14,60 €.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Bereitschaftszeiten zählen</strong> Sie gelten als Arbeitszeit und müssen vergütet werden (BAG 2021).</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Keine Rund-um-die-Uhr-Arbeit</strong> Durch eine einzelne Person rechtlich nicht zulässig.</span></li>
                    </ul>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-shield-exclamation"></i></div>
                        <span>Seriöse Anbieter berücksichtigen diese Vorgaben. Sehr günstige Pauschalangebote, die mit einer echten Betreuung rund um die Uhr werben, sind ein <strong>Warnsignal</strong>.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-stack text-success"></i> Was kostet die 24-Stunden-Betreuung?</h2>
                    <div class="pf-hinweis-alert">
                        <div class="pf-hinweis-alert__icon"><i class="bi bi-wallet2"></i></div>
                        <div>
                            <div class="pf-hinweis-alert__title">2.500 – 3.500 € pro Monat (Entsendemodell)</div>
                            <p class="pf-hinweis-alert__text">Wie hoch der Betrag ausfällt, hängt vor allem von den Deutschkenntnissen der Betreuungskraft, ihrer Erfahrung und dem Betreuungsaufwand ab. Hinzu kommen <strong>freie Kost und Logis</strong> (eigenes Zimmer + Verpflegung) sowie etwas höhere Lebenshaltungskosten. Bei hohem nächtlichem Bedarf reicht eine einzelne Kraft nicht aus — dann sind ein Wechselmodell oder zusätzliche Hilfe nötig.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-piggy-bank text-success"></i> Was trägt die Pflegekasse bei?</h2>
                    <p class="pf-h-section-sub">Es gibt keine eigene Leistung speziell für die 24-Stunden-Betreuung. Sie lässt sich aber mit mehreren Leistungen finanzieren:</p>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Pflegegeld</strong> Ab Pflegegrad 2, da die Betreuung als häusliche Pflege gilt.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Verhinderungs- &amp; Kurzzeitpflege</strong> Gemeinsamer Jahresbetrag bis 3.539 € überbrückt Wechsel oder Ausfälle.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Entlastungsbetrag</strong> 131 € pro Monat für anerkannte Unterstützungsangebote.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Steuervorteil</strong> Haushaltsnahe Dienstleistungen nach §35a EStG absetzbar.</span></li>
                    </ul>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Das Budget für <strong>Pflegesachleistungen</strong> lässt sich nicht direkt für die Betreuungskraft einsetzen — nur für einen zugelassenen Pflegedienst. Nach Abzug der Leistungen verbleibt oft ein Eigenanteil von etwa <strong>1.000 bis 2.000 Euro</strong> pro Monat.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-people text-success"></i> Für wen eignet sich die 24-Stunden-Betreuung?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die 24-Stunden-Betreuung passt gut, wenn eine Person nicht mehr allein leben sollte, aber zu Hause bleiben möchte und keine ständige medizinische Überwachung braucht. Bei sehr hohem oder durchgehend nächtlichem Betreuungsbedarf — etwa bei einer ausgeprägten Weglauftendenz bei Demenz oder intensivem Pflegebedarf — stößt das Modell an seine Grenzen. Dann können eine <a href="<?php echo esc_url( home_url( '/pflegearten/stationaere-pflege/' ) ); ?>">stationäre Pflege</a> oder ein spezialisierter Pflegedienst die bessere Lösung sein.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur 24-Stunden-Betreuung</h2>
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
                        <p class="pf-fazit__text">Die 24-Stunden-Betreuung kann pflegebedürftigen Menschen ein Leben im eigenen Zuhause ermöglichen — auch bei höherem Betreuungsbedarf. Wichtig sind ein <strong>legales Modell</strong> (am besten Entsendung mit A1-Bescheinigung), faire Arbeitsbedingungen und die Einbindung eines Pflegedienstes für medizinische Aufgaben. Wer die Leistungen der Pflegekasse kombiniert, kann den Eigenanteil deutlich senken.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen und fachlichen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesarbeitsgericht: Urteil vom 24. Juni 2021, Az. 5 AZR 505/20 (Mindestlohn für Bereitschaftszeiten in der häuslichen Betreuung).</li>
                            <li>Bundesministerium der Justiz: Arbeitszeitgesetz (ArbZG), §§3 und 5 — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: Mindestlohngesetz (MiLoG), §1 — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesgesundheitsministerium: Pflege zu Hause — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
                    </div>

                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle rechtliche, steuerliche oder pflegerische Beratung.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

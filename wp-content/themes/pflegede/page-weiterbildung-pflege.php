<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Weiterbildung Pflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Weiterbildung in der Pflege: Möglichkeiten &amp; Wege</title>' . "\n";
    echo '<meta name="description" content="Weiterbildung in der Pflege: Fachweiterbildungen, Praxisanleitung, Leitungsfunktionen und Studium. Welche Wege es gibt und wie sie sich finanzieren lassen. Auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegeberufe/weiterbildung/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie lange dauert eine Fachweiterbildung?","acceptedAnswer":{"@type":"Answer","text":"Eine Fachweiterbildung dauert in der Regel rund zwei Jahre und wird berufsbegleitend absolviert. Sie schließt mit einer Prüfung ab. Viele Fachweiterbildungen sind landesrechtlich geregelt oder orientieren sich an anerkannten fachlichen Standards."}},
    {"@type":"Question","name":"Was bringt eine Praxisanleiter-Weiterbildung?","acceptedAnswer":{"@type":"Answer","text":"Praxisanleiter begleiten Auszubildende in der Praxis. Da ausbildende Einrichtungen verpflichtend qualifizierte Praxisanleiter brauchen, sind sie sehr gefragt. Die Qualifikation umfasst mindestens 300 Stunden, danach sind jährlich 24 Stunden Fortbildung nötig."}},
    {"@type":"Question","name":"Brauche ich für ein Pflegestudium Abitur?","acceptedAnswer":{"@type":"Answer","text":"Nicht zwingend. Viele Hochschulen lassen auch beruflich Qualifizierte mit abgeschlossener Ausbildung und Berufserfahrung zu. Die genauen Voraussetzungen legt die jeweilige Hochschule fest."}},
    {"@type":"Question","name":"Lohnt sich eine Weiterbildung finanziell?","acceptedAnswer":{"@type":"Answer","text":"In den meisten Fällen ja. Eine Fachweiterbildung oder eine Leitungsfunktion führt häufig zu einer höheren Eingruppierung und besseren Aufstiegschancen."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$wege = array(
    array( 'icon' => 'bi-award',           'title' => 'Fachweiterbildung',  'desc' => 'Spezialisierung, z. B. Intensiv-, Notfall- oder Palliativpflege.' ),
    array( 'icon' => 'bi-person-video3',   'title' => 'Praxisanleitung',    'desc' => 'Auszubildende in der Praxis begleiten — sehr gefragt.' ),
    array( 'icon' => 'bi-person-workspace','title' => 'Leitungsfunktion',   'desc' => 'Stations-, Wohnbereichs- oder Pflegedienstleitung.' ),
    array( 'icon' => 'bi-mortarboard',     'title' => 'Studium',            'desc' => 'Pflegemanagement, -pädagogik oder -wissenschaft.' ),
);

$faqs = array(
    array( 'q' => 'Wie lange dauert eine Fachweiterbildung?', 'a' => 'Eine Fachweiterbildung dauert in der Regel rund <strong>zwei Jahre</strong> und wird berufsbegleitend absolviert. Sie schließt mit einer Prüfung ab. Viele sind landesrechtlich geregelt oder orientieren sich an anerkannten fachlichen Standards.' ),
    array( 'q' => 'Was bringt eine Praxisanleiter-Weiterbildung?', 'a' => 'Praxisanleiter begleiten Auszubildende in der Praxis. Da ausbildende Einrichtungen verpflichtend qualifizierte Praxisanleiter brauchen, sind sie <strong>sehr gefragt</strong>. Die Qualifikation umfasst mindestens 300 Stunden, danach sind jährlich 24 Stunden Fortbildung nötig.' ),
    array( 'q' => 'Brauche ich für ein Pflegestudium Abitur?', 'a' => '<strong>Nicht zwingend.</strong> Viele Hochschulen lassen auch beruflich Qualifizierte mit abgeschlossener Ausbildung und Berufserfahrung zu. Die genauen Voraussetzungen legt die jeweilige Hochschule fest.' ),
    array( 'q' => 'Lohnt sich eine Weiterbildung finanziell?', 'a' => '<strong>In den meisten Fällen ja.</strong> Eine Fachweiterbildung oder eine Leitungsfunktion führt häufig zu einer höheren Eingruppierung und besseren Aufstiegschancen. Mehr dazu auf der Seite zum Gehalt in der Pflege.' ),
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
                    <span class="pf-breadcrumb__current">Weiterbildung</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-graph-up-arrow"></i> Spezialisierung &amp; Aufstieg</span>
                        <h1 class="pf-page-hero__title">Weiterbildung: <span class="pf-page-hero__title-accent">Wege</span><br>zum Aufstieg</h1>
                        <p class="pf-page-hero__desc">Wer in der Pflege arbeitet, hat viele Möglichkeiten zur Weiterbildung — von der Fachweiterbildung über die Praxisanleitung bis zur Leitungsfunktion und zum Studium. Eine Weiterbildung erweitert die Kompetenzen, eröffnet neue Aufgaben und wirkt sich meist positiv auf das Gehalt aus.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-award"></i> Fachweiterbildungen</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-person-workspace"></i> Leitungswege</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-mortarboard"></i> Studium möglich</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/weiterbildung/weiterbildung-1.jpg' ); ?>" alt="Pflegekräfte in einer Weiterbildung zur Spezialisierung und Leitung.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-graph-up-arrow"></i> Weiterbildung</span>
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
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Amna Tauqeer</strong>, Redakteurin</span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Wer in der Pflege arbeitet, hat viele Möglichkeiten zur Weiterbildung — von der <strong>Fachweiterbildung</strong> über die Praxisanleitung bis zur Leitungsfunktion und zum Studium. Eine Weiterbildung erweitert die fachlichen Kompetenzen, eröffnet neue Aufgaben und wirkt sich meist positiv auf das Gehalt aus.
                    </div>

                    <!-- Overview cards -->
                    <div class="pf-leist-cards">
                        <?php foreach ( $wege as $w ) : ?>
                            <div class="pf-leist-card" style="cursor:default;">
                                <div class="pf-leist-card__icon"><i class="bi <?php echo esc_attr( $w['icon'] ); ?>"></i></div>
                                <h3 class="pf-leist-card__title"><?php echo esc_html( $w['title'] ); ?></h3>
                                <p class="pf-leist-card__desc"><?php echo esc_html( $w['desc'] ); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-award text-success"></i> Fachweiterbildungen: Spezialisierung</h2>
                    <p class="pf-h-section-sub">Mit einer Fachweiterbildung spezialisieren sich Pflegefachkräfte auf ein Gebiet und übernehmen anspruchsvollere Aufgaben. Sie dauern in der Regel rund zwei Jahre berufsbegleitend. Zu den gefragtesten gehören:</p>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <ul>
                                <li>Intensivpflege und Anästhesie,</li>
                                <li>Pflege im Operationsdienst,</li>
                                <li>Notfallpflege in der Notaufnahme,</li>
                                <li>Onkologie- und Palliativpflege,</li>
                                <li>psychiatrische und gerontopsychiatrische Pflege,</li>
                                <li>Hygiene und Infektionsprävention.</li>
                            </ul>
                            <p>Die Inhalte richten sich nach den Empfehlungen der Deutschen Krankenhausgesellschaft und den Vorgaben der Länder oder Pflegekammern. Eine Fachweiterbildung lohnt sich für alle, die fachlich in die Tiefe gehen möchten.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-person-video3 text-success"></i> Praxisanleitung: Auszubildende begleiten</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Weiterbildung zur <strong>Praxisanleiterin oder zum Praxisanleiter</strong> ist seit der Pflegereform besonders wichtig geworden. Praxisanleiter begleiten Auszubildende während ihrer praktischen Einsätze. Die Qualifikation umfasst mindestens <strong>300 Stunden</strong> berufspädagogische Weiterbildung. Danach sind jährlich mindestens 24 Stunden Fortbildung nachzuweisen. Voraussetzung ist eine abgeschlossene Pflegeausbildung und Berufserfahrung. Weil ausbildende Einrichtungen verpflichtend qualifizierte Praxisanleiter brauchen, sind diese Fachkräfte sehr gefragt.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-person-workspace text-success"></i> Leitungsfunktionen übernehmen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <ul>
                                <li><strong>Stationsleitung / Wohnbereichsleitung:</strong> Verantwortung für ein Team und den Ablauf auf einer Station oder einem Wohnbereich.</li>
                                <li><strong>Pflegedienstleitung (PDL):</strong> Gesamtverantwortung für den Pflegebereich einer Einrichtung oder eines ambulanten Dienstes.</li>
                            </ul>
                            <p>Diese Weiterbildungen vermitteln Kenntnisse in Personalführung, Organisation und Qualitätsmanagement. Sie sind der klassische Weg, um in der Pflege aufzusteigen — und wirken sich meist deutlich auf das Gehalt aus.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-mortarboard text-success"></i> Akademische Wege: Studium in der Pflege</h2>
                    <div class="pf-who-cards">
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-kanban"></i></div>
                            <p class="pf-who-card__text"><strong>Pflegemanagement</strong> Für Führungs- und Organisationsaufgaben in Einrichtungen.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-easel"></i></div>
                            <p class="pf-who-card__text"><strong>Pflegepädagogik</strong> Um an Pflegeschulen zu unterrichten und Nachwuchs auszubilden.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-search"></i></div>
                            <p class="pf-who-card__text"><strong>Pflegewissenschaft</strong> Für Forschung, Konzeptentwicklung und Weiterentwicklung der Pflege.</p>
                        </div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Hinzu kommen <strong>erweiterte pflegerische Rollen</strong>, in denen akademisch qualifizierte Fachkräfte zunehmend mehr Verantwortung übernehmen. Der Gesetzgeber stärkt diese Kompetenzen schrittweise.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-shield-check text-success"></i> Pflichtfortbildungen nicht vergessen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Viele Einrichtungen verlangen regelmäßige <strong>Pflichtfortbildungen</strong>, etwa zu Hygiene, Brandschutz oder Datenschutz. Diese finden in der Regel während der Arbeitszeit statt und werden vom Arbeitgeber bezahlt. Sie dienen der Sicherheit und der Qualität in der Versorgung.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-piggy-bank text-success"></i> Wie lässt sich eine Weiterbildung finanzieren?</h2>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Arbeitgeber</strong> Übernimmt oft die Kosten — häufig mit Bindung an den Betrieb für eine gewisse Zeit.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Bildungsgutschein</strong> Der Agentur für Arbeit kann die Kosten ganz oder teilweise decken.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Aufstiegs-BAföG</strong> Fördert unter Voraussetzungen größere Weiterbildungen wie Leitungsqualifikationen.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Steuerlich absetzbar</strong> Wer selbst zahlt, kann die Kosten in der Regel geltend machen.</span></li>
                    </ul>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur Weiterbildung in der Pflege</h2>
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
                        <p class="pf-fazit__text">Die Pflege bietet außergewöhnlich viele Wege zur Weiterentwicklung — ob Spezialisierung, Praxisanleitung, Aufstieg in die Leitung oder ein Studium. Eine Weiterbildung erweitert nicht nur das Wissen, sondern verbessert auch die <strong>beruflichen und finanziellen Aussichten</strong>.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesministerium der Justiz: Pflegeberufe-Ausbildungs- und Prüfungsverordnung (PflAPrV), §4 (Praxisanleitung) — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Deutsche Krankenhausgesellschaft: Empfehlungen zu Fachweiterbildungen in der Pflege — dkgev.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesgesundheitsministerium: Pflegeberufe und Weiterentwicklung der Pflege — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
                    </div>

                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle Berufs- oder Bildungsberatung. Angebote und Voraussetzungen können sich je nach Bundesland unterscheiden.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

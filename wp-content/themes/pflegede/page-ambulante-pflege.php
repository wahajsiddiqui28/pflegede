<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Ambulante Pflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Ambulante Pflege: Leistungen, Kosten &amp; Pflegedienst</title>' . "\n";
    echo '<meta name="description" content="Ambulante Pflege zu Hause: Welche Leistungen ein Pflegedienst übernimmt, was die Pflegekasse 2026 zahlt und wie Sie den passenden Dienst finden. Erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegearten/ambulante-pflege/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Ab welchem Pflegegrad gibt es ambulante Pflege?","acceptedAnswer":{"@type":"Answer","text":"Pflegesachleistungen für einen ambulanten Pflegedienst gibt es ab Pflegegrad 2. Bei Pflegegrad 1 lässt sich der Entlastungsbetrag von 131 Euro pro Monat für einen Pflegedienst einsetzen."}},
    {"@type":"Question","name":"Was kostet ein ambulanter Pflegedienst?","acceptedAnswer":{"@type":"Answer","text":"Die Kosten hängen vom Umfang der Leistungen ab. Die Pflegekasse übernimmt sie bis zur Höhe des Sachleistungsbudgets, das je nach Pflegegrad zwischen 796 und 2.299 Euro pro Monat liegt. Höhere Kosten tragen Sie selbst."}},
    {"@type":"Question","name":"Was ist der Unterschied zwischen Grundpflege und Behandlungspflege?","acceptedAnswer":{"@type":"Answer","text":"Die Grundpflege umfasst Körperpflege, Ernährung und Mobilität und wird über die Pflegekasse abgerechnet. Die Behandlungspflege umfasst ärztlich verordnete medizinische Leistungen wie Wundversorgung oder Spritzen und läuft über die Krankenkasse."}},
    {"@type":"Question","name":"Kann ich mit dem Sachleistungsbudget eine 24-Stunden-Betreuung bezahlen?","acceptedAnswer":{"@type":"Answer","text":"Nein. Das Sachleistungsbudget ist nur für zugelassene Pflegedienste vorgesehen. Eine Betreuung durch eine Haushaltshilfe im Rahmen der sogenannten 24-Stunden-Betreuung lässt sich darüber nicht abrechnen."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$budget = array(
    array( 'pg' => '1', 'chip' => '1', 'betrag' => 'keine Sachleistungen, aber 131 € Entlastungsbetrag pro Monat', 'none' => true ),
    array( 'pg' => '2', 'chip' => '2', 'betrag' => 'bis 796 € pro Monat',   'none' => false ),
    array( 'pg' => '3', 'chip' => '3', 'betrag' => 'bis 1.497 € pro Monat', 'none' => false ),
    array( 'pg' => '4', 'chip' => '4', 'betrag' => 'bis 1.859 € pro Monat', 'none' => false ),
    array( 'pg' => '5', 'chip' => '5', 'betrag' => 'bis 2.299 € pro Monat', 'none' => false ),
);

$faqs = array(
    array( 'q' => 'Ab welchem Pflegegrad gibt es ambulante Pflege?', 'a' => 'Pflegesachleistungen für einen ambulanten Pflegedienst gibt es <strong>ab Pflegegrad 2</strong>. Bei Pflegegrad 1 lässt sich der Entlastungsbetrag von 131 Euro pro Monat für einen Pflegedienst einsetzen.' ),
    array( 'q' => 'Was kostet ein ambulanter Pflegedienst?', 'a' => 'Die Kosten hängen vom Umfang der Leistungen ab. Die Pflegekasse übernimmt sie bis zur Höhe des Sachleistungsbudgets, das je nach Pflegegrad zwischen <strong>796 und 2.299 Euro</strong> pro Monat liegt. Höhere Kosten tragen Sie selbst.' ),
    array( 'q' => 'Was ist der Unterschied zwischen Grundpflege und Behandlungspflege?', 'a' => 'Die <strong>Grundpflege</strong> umfasst Körperpflege, Ernährung und Mobilität und wird über die Pflegekasse abgerechnet. Die <strong>Behandlungspflege</strong> umfasst ärztlich verordnete medizinische Leistungen wie Wundversorgung oder Spritzen und läuft über die Krankenkasse.' ),
    array( 'q' => 'Kann ich mit dem Sachleistungsbudget eine 24-Stunden-Betreuung bezahlen?', 'a' => '<strong>Nein.</strong> Das Sachleistungsbudget ist nur für zugelassene Pflegedienste vorgesehen. Eine Betreuung durch eine Haushaltshilfe im Rahmen der sogenannten 24-Stunden-Betreuung lässt sich darüber nicht abrechnen.' ),
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
                    <span class="pf-breadcrumb__current">Ambulante Pflege</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-house-heart"></i> Versorgung zu Hause</span>
                        <h1 class="pf-page-hero__title">Ambulante Pflege: <span class="pf-page-hero__title-accent">Pflegedienst</span><br>zu Hause</h1>
                        <p class="pf-page-hero__desc">Bei der ambulanten Pflege versorgt ein Pflegedienst die pflegebedürftige Person zu Hause. Die Pflegekasse übernimmt die Kosten über die Pflegesachleistungen, je nach Pflegegrad bis zu 2.299 Euro pro Monat.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house"></i> Zu Hause bleiben</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Bis 2.299 €/Monat</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> §36 SGB XI</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/ambulante-pflege/ambulante-pflege-1.jpg' ); ?>" alt="Pflegekraft eines ambulanten Pflegedienstes unterstützt eine ältere Frau zu Hause.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-house-heart"></i> Ambulante Pflege</span>
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
                        Bei der ambulanten Pflege versorgt ein <strong>Pflegedienst</strong> die pflegebedürftige Person zu Hause. Die Pflegekasse übernimmt die Kosten über die Pflegesachleistungen, je nach Pflegegrad bis zu 2.299 Euro pro Monat. So kann der Mensch in seiner vertrauten Umgebung bleiben.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die meisten Menschen möchten im Pflegefall so lange wie möglich zu Hause bleiben. Die ambulante Pflege macht das möglich. Ein Pflegedienst kommt regelmäßig in die Wohnung und übernimmt genau die Aufgaben, die nötig sind — von der Körperpflege bis zur Unterstützung im Haushalt. Einen Überblick über alle Formen der Pflege finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/pflegearten/' ) ); ?>">Pflegearten</a>. pflegede.com erklärt Ihnen alles verständlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was ist ambulante Pflege?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Ambulante Pflege bedeutet, dass ein <strong>zugelassener Pflegedienst</strong> die pflegebedürftige Person in ihrem Zuhause versorgt. Die Pflegekräfte kommen so oft, wie es nötig ist — manchmal mehrmals täglich, manchmal nur einmal pro Woche. Anders als bei der stationären Pflege im Heim bleibt der Mensch in seiner gewohnten Umgebung. Die ambulante Pflege ist damit ein zentraler Teil der häuslichen Pflege. Oft ergänzt der Pflegedienst die Pflege durch Angehörige, die einen Großteil der Versorgung übernehmen.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-list-check text-success"></i> Welche Leistungen übernimmt ein ambulanter Pflegedienst?</h2>
                    <p class="pf-h-section-sub">Die Aufgaben eines Pflegedienstes lassen sich in drei Bereiche einteilen:</p>
                    <div class="pf-who-cards">
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-droplet"></i></div>
                            <p class="pf-who-card__text"><strong>Körperbezogene Pflege</strong> Hilfe beim Waschen, Duschen, Anziehen, bei der Toilette und beim Essen.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-emoji-smile"></i></div>
                            <p class="pf-who-card__text"><strong>Pflegerische Betreuung</strong> Unterstützung im Alltag, etwa bei der Beschäftigung oder bei Spaziergängen.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-basket"></i></div>
                            <p class="pf-who-card__text"><strong>Hilfe im Haushalt</strong> Einkaufen, Kochen oder Reinigen — soweit im Leistungsumfang enthalten.</p>
                        </div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Diese Leistungen nennt die Pflegekasse <strong>Pflegesachleistungen</strong>. Davon zu unterscheiden ist die medizinische <strong>Behandlungspflege</strong> (z. B. Verbandswechsel oder Insulin spritzen). Diese wird vom Arzt verordnet und über die Krankenkasse abgerechnet — nicht über das Budget der Pflegekasse.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-stack text-success"></i> Was zahlt die Pflegekasse für die ambulante Pflege?</h2>

                    <figure class="pf-figure">
                        <img class="pf-figure__img" src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/ambulante-pflege/ambulante-pflege-2.jpg' ); ?>" alt="Vergleich von Pflegegeld, Pflegesachleistungen und Kombinationsleistung bei der ambulanten Pflege.">
                        <figcaption class="pf-figure__cap"><i class="bi bi-info-circle"></i> Pflegegeld, Sachleistungen und Kombinationsleistung im Vergleich.</figcaption>
                    </figure>

                    <p class="pf-h-section-sub">Für die ambulante Pflege stehen die Pflegesachleistungen nach §36 SGB XI zur Verfügung. Wie hoch das monatliche Budget ist, hängt vom Pflegegrad ab. Anspruch besteht ab Pflegegrad 2.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Pflegegrad</th>
                                    <th>Pflegesachleistungen (Betrag 2025)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $budget as $row ) : ?>
                                <tr>
                                    <td><span class="pf-pg-chip pf-pg-chip--<?php echo esc_attr( $row['chip'] ); ?>">PG <?php echo esc_html( $row['pg'] ); ?></span></td>
                                    <td><span class="pf-pg-amount<?php echo $row['none'] ? ' pf-pg-amount--none' : ''; ?>"><?php echo esc_html( $row['betrag'] ); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: Bundesgesundheitsministerium, GKV-Spitzenverband, SGB XI · gültig seit 1. Januar 2025 · Stand: Juni 2026</div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-lightbulb"></i></div>
                        <span>Reicht das Budget nicht aus, tragen Sie die Mehrkosten selbst. Bei <strong>Pflegegrad 1</strong> gibt es keine Sachleistungen, wohl aber den Entlastungsbetrag von 131 Euro pro Monat, der für einen Pflegedienst genutzt werden kann.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-left-right text-success"></i> Pflegegeld, Sachleistung oder beides?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wer zu Hause gepflegt wird, hat die Wahl. Übernehmen Angehörige die Pflege, gibt es das <strong>Pflegegeld</strong>. Kommt ein Pflegedienst, rechnet dieser über die <strong>Pflegesachleistungen</strong> ab. Beides lässt sich auch kombinieren: Nutzen Sie nur einen Teil der Sachleistungen, wird der Rest anteilig als Pflegegeld ausgezahlt. Diese sogenannte <strong>Kombinationsleistung</strong> ist sinnvoll, wenn Angehörige und Pflegedienst sich die Versorgung teilen. Mehr dazu auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/leistungen/pflegesachleistungen/' ) ); ?>">Pflegesachleistungen</a>.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-search text-success"></i> Einen guten Pflegedienst finden</h2>
                    <p class="pf-h-section-sub">Bei der Wahl des Pflegedienstes lohnt sich ein genauer Blick. Diese Punkte helfen:</p>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Kostenvoranschläge vergleichen</strong> Lassen Sie sich mehrere geben und vergleichen Sie die Leistungskomplexe.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Zulassung prüfen</strong> Achten Sie darauf, dass der Dienst von der Pflegekasse zugelassen ist.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Feste Bezugspflegekräfte</strong> Fragen Sie danach, damit nicht ständig neue Personen kommen.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Erreichbarkeit klären</strong> Wie ist die Vertretung bei Krankheit oder am Wochenende geregelt?</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Vertrag lesen</strong> Besonders die Kündigungsfristen genau prüfen.</span></li>
                    </ul>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-life-preserver"></i></div>
                        <span>Eine kostenlose und neutrale Beratung bieten die <strong>Pflegestützpunkte</strong> und die Pflegeberatung nach §7a SGB XI.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-scale text-success"></i> Vorteile und Grenzen der ambulanten Pflege</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Der größte Vorteil liegt auf der Hand: Die pflegebedürftige Person bleibt <strong>zu Hause</strong>, in ihrer vertrauten Umgebung und Nachbarschaft. Die Pflege lässt sich flexibel an den Bedarf anpassen. Es gibt aber auch Grenzen: Bei einem sehr hohen oder über den gesamten Tagesverlauf bestehenden Pflegebedarf stößt die ambulante Pflege an ihre Grenzen. Dann können eine <a href="<?php echo esc_url( home_url( '/pflegearten/tagespflege/' ) ); ?>">Tagespflege</a>, eine 24-Stunden-Betreuung oder langfristig ein Umzug in eine <a href="<?php echo esc_url( home_url( '/pflegearten/stationaere-pflege/' ) ); ?>">stationäre Pflege</a> sinnvoll sein.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur ambulanten Pflege</h2>
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
                        <p class="pf-fazit__text">Die ambulante Pflege kann ein möglichst selbstbestimmtes Leben zu Hause unterstützen — auch bei höherem Pflegebedarf. Über die Pflegesachleistungen beteiligt sich die Pflegekasse mit bis zu <strong>2.299 Euro pro Monat</strong>. Wer Leistungen, Kosten und Anbieter gut vergleicht, findet die passende Versorgung.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesgesundheitsministerium: Leistungen der Pflegeversicherung — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §36 Pflegesachleistung — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §38 Kombinationsleistung — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
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

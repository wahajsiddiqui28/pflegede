<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Tagespflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Tagespflege: Leistungen, Kosten &amp; Pflegegeld 2026</title>' . "\n";
    echo '<meta name="description" content="Tagespflege: Was die Pflegekasse 2026 zahlt, warum das Budget zusätzlich zum Pflegegeld besteht und wie der Eigenanteil gedeckt wird. Verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegearten/tagespflege/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wird das Pflegegeld bei Tagespflege gekürzt?","acceptedAnswer":{"@type":"Answer","text":"Nein. Das Tagespflege-Budget wird zusätzlich gezahlt und verringert das Pflegegeld nicht. Sie erhalten das volle Pflegegeld und das volle Tagespflege-Budget nebeneinander."}},
    {"@type":"Question","name":"Ab welchem Pflegegrad gibt es Tagespflege?","acceptedAnswer":{"@type":"Answer","text":"Ein eigenes Budget für die Tagespflege gibt es ab Pflegegrad 2. Bei Pflegegrad 1 lässt sich der Entlastungsbetrag von 131 Euro pro Monat dafür einsetzen."}},
    {"@type":"Question","name":"Werden die Fahrtkosten übernommen?","acceptedAnswer":{"@type":"Answer","text":"Die notwendigen Fahrkosten zur Tagespflegeeinrichtung können grundsätzlich über die Leistungen der Tagespflege abgedeckt werden. Viele Einrichtungen bieten hierfür einen eigenen Fahrdienst an."}},
    {"@type":"Question","name":"Welche Kosten muss ich selbst tragen?","acceptedAnswer":{"@type":"Answer","text":"Selbst zu tragen sind die Kosten für Unterkunft, Verpflegung und die Investitionskosten der Einrichtung. Diesen Eigenanteil können Sie mit dem Entlastungsbetrag von 131 Euro pro Monat senken."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$budget = array(
    array( 'pg' => '1', 'chip' => '1', 'betrag' => 'kein eigenes Budget, aber 131 € Entlastungsbetrag pro Monat', 'none' => true ),
    array( 'pg' => '2', 'chip' => '2', 'betrag' => 'bis 721 € pro Monat',   'none' => false ),
    array( 'pg' => '3', 'chip' => '3', 'betrag' => 'bis 1.357 € pro Monat', 'none' => false ),
    array( 'pg' => '4', 'chip' => '4', 'betrag' => 'bis 1.685 € pro Monat', 'none' => false ),
    array( 'pg' => '5', 'chip' => '5', 'betrag' => 'bis 2.085 € pro Monat', 'none' => false ),
);

$faqs = array(
    array( 'q' => 'Wird das Pflegegeld bei Tagespflege gekürzt?', 'a' => '<strong>Nein.</strong> Das Tagespflege-Budget wird zusätzlich gezahlt und verringert das Pflegegeld nicht. Sie erhalten das volle Pflegegeld und das volle Tagespflege-Budget nebeneinander.' ),
    array( 'q' => 'Ab welchem Pflegegrad gibt es Tagespflege?', 'a' => 'Ein eigenes Budget für die Tagespflege gibt es <strong>ab Pflegegrad 2</strong>. Bei Pflegegrad 1 lässt sich der Entlastungsbetrag von 131 Euro pro Monat dafür einsetzen.' ),
    array( 'q' => 'Werden die Fahrtkosten übernommen?', 'a' => 'Die notwendigen Fahrkosten zur Tagespflegeeinrichtung können grundsätzlich über die Leistungen der Tagespflege abgedeckt werden. Viele Einrichtungen bieten hierfür einen eigenen <strong>Fahrdienst</strong> an.' ),
    array( 'q' => 'Welche Kosten muss ich selbst tragen?', 'a' => 'Selbst zu tragen sind die Kosten für <strong>Unterkunft, Verpflegung</strong> und die Investitionskosten der Einrichtung. Diesen Eigenanteil können Sie mit dem Entlastungsbetrag von 131 Euro pro Monat senken.' ),
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
                    <span class="pf-breadcrumb__current">Tagespflege</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-sun"></i> Betreuung am Tag</span>
                        <h1 class="pf-page-hero__title">Tagespflege: <span class="pf-page-hero__title-accent">Betreuung</span><br>am Tag</h1>
                        <p class="pf-page-hero__desc">Bei der Tagespflege wird die pflegebedürftige Person tagsüber in einer Einrichtung betreut und kehrt abends nach Hause zurück. Das Wichtigste: Die Pflegekasse zahlt das Tagespflege-Budget <strong>zusätzlich</strong> zum Pflegegeld und zu den Sachleistungen.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-sun"></i> Tags betreut</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house"></i> Abends zu Hause</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-plus-circle"></i> Zusätzlich zum Pflegegeld</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/tagespflege/tagespflege-1.jpg' ); ?>" alt="Seniorin wird tagsüber in einer Tagespflegeeinrichtung betreut und beschäftigt.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-sun-fill"></i> Tagespflege</span>
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
                        <strong>Kurz erklärt:</strong> Bei der Tagespflege wird die pflegebedürftige Person tagsüber in einer Einrichtung betreut und kehrt abends nach Hause zurück. Das Wichtigste: Die Pflegekasse zahlt das Tagespflege-Budget <strong>zusätzlich</strong> zum Pflegegeld und zu den Sachleistungen — nicht stattdessen.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Tagespflege zählt zu den wichtigsten Entlastungsangeboten für pflegende Angehörige und ermöglicht die Kombination aus häuslicher Pflege und professioneller Betreuung. Die pflegebedürftige Person verbringt den Tag in einer Einrichtung, wird dort betreut, versorgt und beschäftigt, und kommt am Abend wieder nach Hause. Einen Überblick über alle Pflegeformen finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegearten/' ) ); ?>">Pflegearten</a>. pflegede.com erklärt Ihnen alles verständlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was ist Tagespflege?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Tagespflege ist eine <strong>teilstationäre Pflege</strong> nach §41 SGB XI. Die pflegebedürftige Person wird an einzelnen oder mehreren Tagen pro Woche in einer Tagespflegeeinrichtung betreut, meist von morgens bis zum späten Nachmittag. Den Rest der Zeit lebt sie weiter zu Hause. Wird die Betreuung in der Nacht gebraucht, spricht man von <strong>Nachtpflege</strong>. Die Tagespflege verbindet die häusliche Pflege mit professioneller Betreuung, sozialem Austausch und einer festen Tagesstruktur. Ein Fahrdienst bringt die Person in der Regel hin und zurück.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-stack text-success"></i> Was zahlt die Pflegekasse für die Tagespflege?</h2>
                    <p class="pf-h-section-sub">Für die Tages- und Nachtpflege gibt es ein eigenes monatliches Budget. Wie hoch es ist, hängt vom Pflegegrad ab. Anspruch besteht ab Pflegegrad 2.</p>
                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Pflegegrad</th>
                                    <th>Tages- und Nachtpflege (2025 &amp; 2026)</th>
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
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Aus diesem Budget übernimmt die Pflegekasse grundsätzlich die pflegebedingten Aufwendungen der Tagespflege sowie in der Regel die notwendigen <strong>Fahrkosten</strong> zur Einrichtung und zurück.</span>
                    </div>

                    <!-- Big advantage highlight -->
                    <div class="pf-quote-block">
                        <p class="pf-quote-block__text">Der große Vorteil: Das Budget für die Tagespflege wird <strong>zusätzlich</strong> zum Pflegegeld und zu den Pflegesachleistungen gezahlt — es verringert diese Leistungen nicht. Bei Pflegegrad 3 können Sie z. B. 599 € Pflegegeld beziehen und obendrauf bis zu 1.357 € Tagespflege nutzen.</p>
                        <div class="pf-quote-block__author">— Kombination bei häuslicher Pflege</div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-receipt text-success"></i> Welche Kosten bleiben als Eigenanteil?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Pflegekasse übernimmt die pflegebedingten Kosten, nicht aber die Kosten für <strong>Unterkunft und Verpflegung</strong> sowie die Investitionskosten der Einrichtung. Diese sogenannten Hotelkosten tragen Sie selbst. Die Höhe des Eigenanteils hängt von der Einrichtung, der Region und der Anzahl der Besuchstage ab. Eine gute Nachricht: Den <strong>Entlastungsbetrag von 131 Euro</strong> pro Monat dürfen Sie ausdrücklich für diese Kosten einsetzen. Dadurch kann sich der Eigenanteil deutlich reduzieren.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-people text-success"></i> Für wen eignet sich die Tagespflege?</h2>
                    <ul class="pf-tips">
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Berufstätige Angehörige</strong> Die tagsüber arbeiten und die Pflege nicht durchgehend übernehmen können.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Nicht allein zu Hause</strong> Pflegebedürftige, die nicht allein bleiben sollen, etwa bei einer Demenz.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Struktur &amp; Gesellschaft</strong> Menschen, die feste Tagesstruktur, Gesellschaft und Beschäftigung schätzen.</span></li>
                        <li><span class="pf-tips__check"><i class="bi bi-check-lg"></i></span><span class="pf-tips__body"><strong>Dauerhafte Entlastung</strong> Familien, die entlastet werden wollen, ohne die Pflege ganz abzugeben.</span></li>
                    </ul>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-diagram-3 text-success"></i> Tagespflege und weitere Leistungen kombinieren</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Tagespflege lässt sich mit anderen Leistungen frei verbinden. Neben Pflegegeld und Pflegesachleistungen können auch Leistungen wie <strong>Verhinderungspflege</strong> und <strong>Kurzzeitpflege</strong> genutzt werden. Auch Pflegehilfsmittel und der Entlastungsbetrag stehen weiter zur Verfügung. So entsteht ein Gesamtpaket, das die Pflege zu Hause spürbar entlastet.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur Tagespflege</h2>
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
                        <p class="pf-fazit__text">Die Tagespflege kann dazu beitragen, die häusliche Pflege langfristig zu stabilisieren und pflegende Angehörige zu entlasten. Sie verbindet professionelle Betreuung am Tag mit dem Leben im eigenen Zuhause — und das Budget gibt es <strong>zusätzlich zum Pflegegeld</strong>. Wer berufstätig ist oder Entlastung braucht, findet hier eine wirkungsvolle Hilfe.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesgesundheitsministerium: Leistungen der Pflegeversicherung — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §41 Tagespflege und Nachtpflege — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesgesundheitsministerium: Pflege zu Hause — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
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

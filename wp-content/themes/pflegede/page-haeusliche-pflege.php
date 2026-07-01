<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Häusliche Pflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Häusliche Pflege: Leistungen, Geld &amp; Organisation</title>' . "\n";
    echo '<meta name="description" content="Häusliche Pflege: Pflege zu Hause durch Angehörige oder Pflegedienst, welche Leistungen die Pflegekasse zahlt und wie Sie die Pflege organisieren. Auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegearten/haeusliche-pflege/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Was zählt zur häuslichen Pflege?","acceptedAnswer":{"@type":"Answer","text":"Zur häuslichen Pflege zählt jede Versorgung im eigenen Zuhause oder im Haushalt von Angehörigen, sei es durch Familienmitglieder, durch einen ambulanten Pflegedienst oder durch beide gemeinsam."}},
    {"@type":"Question","name":"Ab welchem Pflegegrad gibt es Geld für die häusliche Pflege?","acceptedAnswer":{"@type":"Answer","text":"Pflegegeld und Pflegesachleistungen gibt es ab Pflegegrad 2. Bei Pflegegrad 1 steht der Entlastungsbetrag von 131 Euro pro Monat zur Verfügung."}},
    {"@type":"Question","name":"Kann ich Pflegegeld und Pflegedienst gleichzeitig nutzen?","acceptedAnswer":{"@type":"Answer","text":"Ja. Über die Kombinationsleistung lassen sich Pflegegeld und Pflegesachleistungen verbinden. Der nicht genutzte Anteil der Sachleistungen wird anteilig als Pflegegeld ausgezahlt."}},
    {"@type":"Question","name":"Wie oft ist bei Pflegegeld ein Beratungseinsatz nötig?","acceptedAnswer":{"@type":"Answer","text":"Seit dem 1. Januar 2026 ist der Beratungseinsatz bei reinem Pflegegeldbezug für alle Pflegegrade von 2 bis 5 einheitlich halbjährlich verpflichtend, also zweimal im Jahr. Bei Pflegegrad 4 und 5 ist eine zusätzliche vierteljährliche Beratung freiwillig möglich."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$budget = array(
    array( 'pg' => '1', 'chip' => '1', 'geld' => 'kein Pflegegeld',    'sach' => 'keine Sachleistungen, 131 € Entlastungsbetrag', 'none' => true ),
    array( 'pg' => '2', 'chip' => '2', 'geld' => '347 € pro Monat',    'sach' => 'bis 796 € pro Monat',   'none' => false ),
    array( 'pg' => '3', 'chip' => '3', 'geld' => '599 € pro Monat',    'sach' => 'bis 1.497 € pro Monat', 'none' => false ),
    array( 'pg' => '4', 'chip' => '4', 'geld' => '800 € pro Monat',    'sach' => 'bis 1.859 € pro Monat', 'none' => false ),
    array( 'pg' => '5', 'chip' => '5', 'geld' => '990 € pro Monat',    'sach' => 'bis 2.299 € pro Monat', 'none' => false ),
);

$faqs = array(
    array( 'q' => 'Was zählt zur häuslichen Pflege?', 'a' => 'Zur häuslichen Pflege zählt <strong>jede Versorgung im eigenen Zuhause</strong> oder im Haushalt von Angehörigen — sei es durch Familienmitglieder, durch einen ambulanten Pflegedienst oder durch beide gemeinsam.' ),
    array( 'q' => 'Ab welchem Pflegegrad gibt es Geld für die häusliche Pflege?', 'a' => 'Pflegegeld und Pflegesachleistungen gibt es <strong>ab Pflegegrad 2</strong>. Bei Pflegegrad 1 steht der Entlastungsbetrag von 131 Euro pro Monat zur Verfügung.' ),
    array( 'q' => 'Kann ich Pflegegeld und Pflegedienst gleichzeitig nutzen?', 'a' => '<strong>Ja.</strong> Über die Kombinationsleistung lassen sich Pflegegeld und Pflegesachleistungen verbinden. Der nicht genutzte Anteil der Sachleistungen wird anteilig als Pflegegeld ausgezahlt.' ),
    array( 'q' => 'Wie oft ist bei Pflegegeld ein Beratungseinsatz nötig?', 'a' => 'Seit dem 1. Januar 2026 ist der Beratungseinsatz bei reinem Pflegegeldbezug für alle Pflegegrade von 2 bis 5 einheitlich <strong>halbjährlich</strong> verpflichtend. Bei Pflegegrad 4 und 5 ist eine zusätzliche vierteljährliche Beratung freiwillig möglich.' ),
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
                    <span class="pf-breadcrumb__current">Häusliche Pflege</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-people"></i> Pflege zu Hause</span>
                        <h1 class="pf-page-hero__title">Häusliche Pflege: <span class="pf-page-hero__title-accent">zu Hause</span><br>organisieren</h1>
                        <p class="pf-page-hero__desc">Häusliche Pflege bedeutet, dass eine pflegebedürftige Person zu Hause versorgt wird — durch Angehörige, durch einen Pflegedienst oder durch beide gemeinsam. Die Pflegekasse unterstützt das mit Pflegegeld, Sachleistungen und vielen weiteren Leistungen.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house-heart"></i> Vertrautes Zuhause</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Pflegegeld &amp; mehr</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-arrow-left-right"></i> Frei kombinierbar</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/haeusliche-pflege/haeusliche-pflege-1.jpg' ); ?>" alt="Familie pflegt einen älteren Angehörigen zu Hause im Wohnzimmer.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-people-fill"></i> Häusliche Pflege</span>
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
                        Häusliche Pflege bedeutet, dass eine pflegebedürftige Person <strong>zu Hause versorgt</strong> wird — durch Angehörige, durch einen Pflegedienst oder durch beide gemeinsam. Die Pflegekasse unterstützt das mit Pflegegeld, Pflegesachleistungen und vielen weiteren Leistungen.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die meisten pflegebedürftigen Menschen in Deutschland werden zu Hause versorgt. Das nennt man häusliche Pflege. Sie ist der Wunsch vieler Familien, denn das vertraute Zuhause gibt Sicherheit und Halt. Häusliche Pflege ist dabei ein Oberbegriff: Sie reicht von der Pflege allein durch Angehörige bis zur Unterstützung durch einen professionellen Pflegedienst. Einen Überblick über alle Pflegeformen finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegearten/' ) ); ?>">Pflegearten</a>. pflegede.com begleitet Sie dabei.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-diagram-2 text-success"></i> Was bedeutet häusliche Pflege?</h2>

                    <figure class="pf-figure">
                        <img class="pf-figure__img" src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/haeusliche-pflege/haeusliche-pflege-2.jpg' ); ?>" alt="Übersicht der häuslichen Pflege mit den drei Optionen Pflegegeld, Pflegedienst und Kombinationsleistung.">
                        <figcaption class="pf-figure__cap"><i class="bi bi-info-circle"></i> Drei Bausteine der häuslichen Pflege — frei kombinierbar.</figcaption>
                    </figure>

                    <p class="pf-h-section-sub">Häusliche Pflege umfasst alle Formen der Versorgung im eigenen Zuhause. Das Gegenstück ist die stationäre Pflege im Pflegeheim. Zur häuslichen Pflege gehören mehrere Bausteine, die sich frei kombinieren lassen:</p>
                    <div class="pf-who-cards">
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-people-fill"></i></div>
                            <p class="pf-who-card__text"><strong>Pflege durch Angehörige</strong> Familie, Freunde oder Nachbarn übernehmen die Versorgung — dafür gibt es das Pflegegeld.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-house-heart"></i></div>
                            <p class="pf-who-card__text"><strong>Ambulante Pflege</strong> Ein Pflegedienst kommt nach Hause — das läuft über die Pflegesachleistungen.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-arrow-left-right"></i></div>
                            <p class="pf-who-card__text"><strong>Kombination aus beidem</strong> Angehörige und Pflegedienst teilen sich die Aufgaben — über die Kombinationsleistung.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-stack text-success"></i> Welche Leistungen zahlt die Pflegekasse?</h2>
                    <p class="pf-h-section-sub">Wer zu Hause gepflegt wird und mindestens Pflegegrad 2 hat, erhält Geld oder Leistungen von der Pflegekasse. Die wichtigsten im Überblick:</p>
                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Pflegegrad</th>
                                    <th>Pflegegeld (Angehörige)</th>
                                    <th>Sachleistungen (Pflegedienst)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $budget as $row ) : ?>
                                <tr>
                                    <td><span class="pf-pg-chip pf-pg-chip--<?php echo esc_attr( $row['chip'] ); ?>">PG <?php echo esc_html( $row['pg'] ); ?></span></td>
                                    <td><span class="pf-pg-amount<?php echo $row['none'] ? ' pf-pg-amount--none' : ''; ?>"><?php echo esc_html( $row['geld'] ); ?></span></td>
                                    <td><span class="pf-pg-amount<?php echo $row['none'] ? ' pf-pg-amount--none' : ''; ?>"><?php echo esc_html( $row['sach'] ); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: Bundesgesundheitsministerium, GKV-Spitzenverband, SGB XI · gültig seit 1. Januar 2025 · Stand: Juni 2026</div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-plus-circle"></i></div>
                        <span>Dazu kommen weitere Leistungen wie der <strong>Entlastungsbetrag</strong> (131 €/Monat), Zuschüsse für Pflegehilfsmittel sowie die Verhinderungs- und Kurzzeitpflege.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-left-right text-success"></i> Pflegegeld, Sachleistung oder Kombination?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <ul>
                                <li><strong>Nur Angehörige:</strong> Es gibt das volle Pflegegeld.</li>
                                <li><strong>Nur Pflegedienst:</strong> Es gibt die Pflegesachleistungen.</li>
                                <li><strong>Beides zusammen:</strong> Bei der Kombinationsleistung wird der nicht genutzte Anteil der Sachleistungen anteilig als Pflegegeld ausgezahlt.</li>
                            </ul>
                            <p>Diese Wahl können Sie an Ihre Lebenssituation anpassen und auch später wieder ändern.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-chat-square-heart text-success"></i> Beratungseinsatz bei Pflegegeld</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wenn Sie ausschließlich Pflegegeld beziehen und keinen Pflegedienst nutzen, ist ein <strong>Beratungseinsatz nach §37 Abs. 3 SGB XI</strong> verpflichtend. Seit dem 1. Januar 2026 gilt für alle Pflegegrade von 2 bis 5 ein einheitlicher Pflichttermin: Der Beratungsbesuch muss nur noch <strong>halbjährlich</strong> nachgewiesen werden. Bei den Pflegegraden 4 und 5 kann die Beratung auf Wunsch zusätzlich vierteljährlich in Anspruch genommen werden. Versäumen Sie den Pflichttermin, kann die Pflegekasse das Pflegegeld kürzen.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-list-ol text-success"></i> Häusliche Pflege organisieren</h2>
                    <p class="pf-h-section-sub">Pflege zu Hause ist eine große Aufgabe. Diese Schritte helfen, sie auf eine solide Grundlage zu stellen:</p>
                    <ol class="pf-timeline">
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-file-earmark-text"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Pflegegrad beantragen</h3>
                                <p class="pf-timeline__text">Ohne anerkannten Pflegegrad gibt es keine Leistungen. Wie das geht, lesen Sie unter <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ); ?>">Pflegegrad beantragen</a>.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-chat-square-heart"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Beratung nutzen</h3>
                                <p class="pf-timeline__text">Die Pflegeberatung nach §7a SGB XI und die Pflegestützpunkte beraten kostenlos und neutral.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-box-seam"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Hilfsmittel besorgen</h3>
                                <p class="pf-timeline__text">Ein Pflegebett, ein Hausnotruf oder Pflegehilfsmittel zum Verbrauch erleichtern den Alltag.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-tools"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Wohnung anpassen</h3>
                                <p class="pf-timeline__text">Für barrierefreie Umbauten gibt es einen Zuschuss von bis zu 4.180 Euro je Maßnahme.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-person-arms-up"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Entlastung einplanen</h3>
                                <p class="pf-timeline__text">Verhinderungspflege, Kurzzeitpflege und Tagespflege schaffen Freiräume für die Angehörigen.</p>
                            </div>
                        </li>
                    </ol>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-heart-pulse text-success"></i> Entlastung für pflegende Angehörige</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wer einen Angehörigen pflegt, trägt viel Verantwortung. Damit die eigene Gesundheit nicht leidet, ist Entlastung wichtig. Die Pflegekasse bietet dafür mehrere Möglichkeiten — etwa kostenlose <strong>Pflegekurse</strong>, die <strong>Tagespflege</strong> und die <strong>Verhinderungspflege</strong> bei Urlaub oder Krankheit der Pflegeperson. Mehr dazu finden Sie in unserem Ratgeber für <a href="<?php echo esc_url( home_url( '/ratgeber/pflegende-angehoerige/' ) ); ?>">pflegende Angehörige</a>. Bei einem Krankenhausaufenthalt der pflegebedürftigen Person kann das Pflegegeld unter bestimmten Voraussetzungen vorübergehend weitergezahlt werden; seit 2026 ist dieser Zeitraum verlängert worden.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-exclamation-triangle text-success"></i> Wann stößt die häusliche Pflege an Grenzen?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Häusliche Pflege ist nicht immer dauerhaft möglich. Bei einem sehr hohen Pflegebedarf, bei fehlender Unterstützung oder wenn Angehörige an ihre Belastungsgrenze kommen, können andere Wege sinnvoll sein. Eine <strong>24-Stunden-Betreuung</strong> durch eine im Haushalt lebende Betreuungskraft kann eine Brücke sein. Lässt sich die Versorgung zu Hause nicht mehr sicherstellen, ist der Umzug in eine <a href="<?php echo esc_url( home_url( '/pflegearten/stationaere-pflege/' ) ); ?>">stationäre Pflege</a> eine Möglichkeit. Wichtig ist, sich rechtzeitig beraten zu lassen — und nicht bis zur völligen Erschöpfung zu warten.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur häuslichen Pflege</h2>
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
                        <p class="pf-fazit__text">Die häusliche Pflege ermöglicht es, im <strong>vertrauten Zuhause</strong> versorgt zu werden — durch Angehörige, einen Pflegedienst oder beide. Die Pflegekasse unterstützt das je nach Pflegegrad mit Pflegegeld, Sachleistungen und vielen weiteren Hilfen. Wer die Leistungen kennt und Entlastung früh einplant, kann die Pflege zu Hause lange und gut gestalten.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesgesundheitsministerium: Pflege zu Hause — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §37 Pflegegeld — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §36 Pflegesachleistung — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
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

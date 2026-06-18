<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegearten Übersicht
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegearten im Überblick: Welche Pflege passt zu Ihnen?</title>' . "\n";
    echo '<meta name="description" content="Ambulant, stationär oder zu Hause? Alle Pflegearten im Vergleich, mit Unterschieden, Vorteilen und Tipps zur Auswahl. Verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegearten/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Welche Pflegearten gibt es?","acceptedAnswer":{"@type":"Answer","text":"Zu den wichtigsten Pflegearten zählen die ambulante Pflege, die häusliche Pflege durch Angehörige, die stationäre Pflege im Heim, die Tagespflege, die Kurzzeitpflege und die 24-Stunden-Pflege zu Hause."}},
    {"@type":"Question","name":"Was ist der Unterschied zwischen ambulanter und stationärer Pflege?","acceptedAnswer":{"@type":"Answer","text":"Bei der ambulanten Pflege wird die Person zu Hause versorgt, meist durch einen Pflegedienst. Bei der stationären Pflege lebt die Person dauerhaft in einem Pflegeheim und wird dort rund um die Uhr betreut."}},
    {"@type":"Question","name":"Kann ich verschiedene Pflegearten kombinieren?","acceptedAnswer":{"@type":"Answer","text":"Ja. Viele Familien kombinieren zum Beispiel die Pflege durch Angehörige mit einem ambulanten Pflegedienst oder der Tagespflege. So lässt sich die Versorgung flexibel an den Bedarf anpassen."}},
    {"@type":"Question","name":"Welche Pflegeart zahlt die Pflegekasse?","acceptedAnswer":{"@type":"Answer","text":"Die Pflegekasse übernimmt je nach Pflegegrad und Pflegeform bestimmte Leistungen oder Zuschüsse. Nicht alle Kosten werden vollständig übernommen. Bei der stationären Pflege tragen Bewohner zum Beispiel einen Eigenanteil für Unterkunft und Verpflegung selbst."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$arten_table = array(
    array( 'name' => 'Ambulante Pflege',       'wo' => 'Zu Hause',                    'fuer' => 'Wer zu Hause wohnen bleiben und vom Pflegedienst versorgt werden möchte', 'icon' => 'bi-house-heart' ),
    array( 'name' => 'Häusliche Pflege',       'wo' => 'Zu Hause',                    'fuer' => 'Wer von Angehörigen oder einer Betreuungskraft zu Hause gepflegt wird',     'icon' => 'bi-people' ),
    array( 'name' => 'Stationäre Pflege',      'wo' => 'Im Pflegeheim',               'fuer' => 'Wer dauerhaft rund um die Uhr Betreuung und Pflege benötigt',               'icon' => 'bi-building' ),
    array( 'name' => 'Tagespflege',            'wo' => 'Tagsüber in einer Einrichtung','fuer' => 'Wer tagsüber Betreuung braucht und abends nach Hause möchte',              'icon' => 'bi-sun' ),
    array( 'name' => 'Kurzzeitpflege',         'wo' => 'Vorübergehend im Heim',       'fuer' => 'Wer nach einem Krankenhausaufenthalt oder in einer Übergangszeit Pflege braucht', 'icon' => 'bi-calendar-event' ),
    array( 'name' => '24-Stunden-Pflege',      'wo' => 'Zu Hause',                    'fuer' => 'Wer zu Hause eine Betreuung rund um die Uhr wünscht',                       'icon' => 'bi-clock-history' ),
);

$arten_cards = array(
    array( 'icon' => 'bi-house-heart',    'title' => 'Ambulante Pflege',  'desc' => 'Versorgung durch den Pflegedienst zu Hause',           'slug' => '/pflegearten/ambulante-pflege/' ),
    array( 'icon' => 'bi-people',         'title' => 'Häusliche Pflege',  'desc' => 'Pflege durch Angehörige zu Hause',                     'slug' => '/pflegearten/haeusliche-pflege/' ),
    array( 'icon' => 'bi-building',       'title' => 'Stationäre Pflege', 'desc' => 'Vollzeitbetreuung im Pflegeheim',                      'slug' => '/pflegearten/stationaere-pflege/' ),
    array( 'icon' => 'bi-sun',            'title' => 'Tagespflege',       'desc' => 'Betreuung am Tag, abends zu Hause',                    'slug' => '/pflegearten/tagespflege/' ),
    array( 'icon' => 'bi-calendar-event', 'title' => 'Kurzzeitpflege',    'desc' => 'Pflege auf Zeit im Heim',                              'slug' => '/pflegearten/kurzzeitpflege/' ),
    array( 'icon' => 'bi-clock-history',  'title' => '24-Stunden-Pflege', 'desc' => 'Betreuung zu Hause mit täglicher Unterstützung',       'slug' => '/pflegearten/24-stunden-pflege/' ),
);

$faqs = array(
    array( 'q' => 'Welche Pflegearten gibt es?', 'a' => 'Zu den wichtigsten Pflegearten zählen die <strong>ambulante Pflege</strong>, die <strong>häusliche Pflege</strong> durch Angehörige, die <strong>stationäre Pflege</strong> im Heim, die Tagespflege, die Kurzzeitpflege und die 24-Stunden-Pflege zu Hause.' ),
    array( 'q' => 'Was ist der Unterschied zwischen ambulanter und stationärer Pflege?', 'a' => 'Bei der <strong>ambulanten Pflege</strong> wird die Person zu Hause versorgt, meist durch einen Pflegedienst. Bei der <strong>stationären Pflege</strong> lebt die Person dauerhaft in einem Pflegeheim und wird dort rund um die Uhr betreut.' ),
    array( 'q' => 'Kann ich verschiedene Pflegearten kombinieren?', 'a' => '<strong>Ja.</strong> Viele Familien kombinieren zum Beispiel die Pflege durch Angehörige mit einem ambulanten Pflegedienst oder der Tagespflege. So lässt sich die Versorgung flexibel an den Bedarf anpassen.' ),
    array( 'q' => 'Welche Pflegeart zahlt die Pflegekasse?', 'a' => 'Die Pflegekasse übernimmt je nach Pflegegrad und Pflegeform bestimmte Leistungen oder Zuschüsse. Nicht alle Kosten werden vollständig übernommen. Bei der <strong>stationären Pflege</strong> tragen Bewohner zum Beispiel einen Eigenanteil für Unterkunft und Verpflegung selbst.' ),
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
                    <span class="pf-breadcrumb__current">Pflegearten</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-house-heart"></i> Aktualisiert: Juni 2026</span>
                        <h1 class="pf-page-hero__title">Pflegearten: <span class="pf-page-hero__title-accent">Welche Pflege</span><br>passt zu Ihnen?</h1>
                        <p class="pf-page-hero__desc">In Deutschland gibt es verschiedene Pflegearten. Die Pflege kann zu Hause durch Angehörige, durch einen ambulanten Pflegedienst oder vollständig in einem Pflegeheim erfolgen. Welche Form passt, hängt vom Pflegebedarf, der Wohnsituation und den persönlichen Wünschen ab.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-list-ol"></i> 6 Pflegearten</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house"></i> Zu Hause &amp; im Heim</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> Stand 2025</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/pflegearten/pflegearten-banner-image.webp'); ?>" alt="Pflegearten — Pflege zu Hause und im Heim">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflege 2025</span>
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

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p style="font-size:1.0625rem;">Wenn ein Mensch pflegebedürftig wird, stellt sich schnell eine zentrale Frage: <strong>Wie soll die Pflege organisiert werden?</strong> Soll die pflegebedürftige Person zu Hause wohnen bleiben oder in ein Pflegeheim ziehen? Wer übernimmt die Pflege? Auf dieser Seite stellen wir Ihnen alle wichtigen Pflegearten vor, zeigen die Unterschiede und helfen Ihnen bei der Entscheidung. Zu jeder Pflegeart finden Sie einen ausführlichen Ratgeber von pflegede.com.</p>
                        </div>
                    </div>

                    <!-- Vergleichstabelle -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Die wichtigsten Pflegearten im Vergleich</h2>
                    <p class="pf-h-section-sub">Die folgende Übersicht zeigt die gängigsten Pflegearten auf einen Blick. So erkennen Sie schnell, welche Form zu Ihrer Situation passt.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Pflegeart</th>
                                    <th>Wo?</th>
                                    <th>Für wen geeignet?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $arten_table as $row ) : ?>
                                <tr>
                                    <td><span class="pf-leist-row"><i class="bi <?php echo esc_attr( $row['icon'] ); ?>"></i> <strong><?php echo esc_html( $row['name'] ); ?></strong></span></td>
                                    <td><?php echo esc_html( $row['wo'] ); ?></td>
                                    <td><?php echo esc_html( $row['fuer'] ); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pflege zu Hause split -->
                    <div class="pf-about-split mt-5">
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-house-heart"></i> Zu Hause</span>
                            <h2 class="pf-about-split__title">Pflege zu Hause: ambulant oder durch Angehörige</h2>
                            <p class="pf-about-split__text">Die meisten Menschen möchten so lange wie möglich in den eigenen vier Wänden wohnen bleiben. Die <strong>häusliche Pflege</strong> ist dabei der Oberbegriff für die Pflege zu Hause. Sie umfasst sowohl die Pflege durch Angehörige als auch die <strong>ambulante Pflege</strong> durch einen professionellen Pflegedienst. Der Pflegedienst kommt regelmäßig ins Haus und übernimmt zum Beispiel die Körperpflege, die Medikamentengabe oder die Wundversorgung. Häufig werden beide Wege miteinander kombiniert.</p>
                        </div>
                        <div class="pf-about-split__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/pflegearten/pflegearten-image1.webp'); ?>" alt="Häusliche Pflege durch Angehörige">
                            <span class="pf-about-split__media-badge"><i class="bi bi-house-heart"></i> Zu Hause</span>
                        </div>
                    </div>

                    <!-- Stationär & Tagespflege content -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-building text-success"></i> Pflege im Heim: stationär, Tages- und Kurzzeitpflege</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Reicht die Pflege zu Hause nicht mehr aus, kommt eine <strong>Pflege im Heim</strong> infrage. Bei der <strong>stationären Pflege</strong> lebt die pflegebedürftige Person dauerhaft im Pflegeheim und wird dort rund um die Uhr versorgt.</p>
                            <p>Die <strong>Tagespflege</strong> ist eine Mischform. Die Person wird tagsüber in einer Einrichtung betreut und verbringt den Abend und die Nacht zu Hause. Die <strong>Kurzzeitpflege</strong> eignet sich für Übergangszeiten, etwa nach einem Krankenhausaufenthalt oder wenn die Pflegeperson selbst einmal ausfällt.</p>
                        </div>
                    </div>

                    <!-- 24-Stunden-Pflege split (reverse) -->
                    <div class="pf-about-split pf-about-split--reverse mt-5">
                        <div class="pf-about-split__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/pflegearten/pflegearten-image2.webp'); ?>" alt="24-Stunden-Pflege zu Hause">
                            <span class="pf-about-split__media-badge"><i class="bi bi-clock-history"></i> 24-Stunden-Pflege</span>
                        </div>
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-clock"></i> Rund um die Uhr</span>
                            <h2 class="pf-about-split__title">24-Stunden-Pflege zu Hause</h2>
                            <p class="pf-about-split__text">Eine besondere Form ist die <strong>24-Stunden-Pflege</strong>. Dabei zieht eine Betreuungskraft, häufig aus dem europäischen Ausland, in den Haushalt der pflegebedürftigen Person ein. Wichtig zu wissen: Die sogenannte 24-Stunden-Pflege bedeutet keine durchgehende Arbeit rund um die Uhr. In der Regel lebt eine Betreuungskraft im Haushalt und unterstützt im Alltag — innerhalb der gesetzlichen Arbeitszeitregelungen. Diese Form bietet viel Nähe und Sicherheit, ist aber mit höheren Kosten verbunden.</p>
                        </div>
                    </div>

                    <!-- Info note -->
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span>Neben den hier vorgestellten Pflegearten gibt es weitere Formen wie die <strong>Nachtpflege</strong>, die <strong>Intensivpflege</strong>, die <strong>Palliativpflege</strong> und das <strong>Betreute Wohnen</strong>. Diese stellen wir in eigenen Ratgebern ausführlich vor.</span>
                    </div>

                    <!-- All Pflegearten cards -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-grid text-success"></i> Alle Pflegearten im Detail</h2>
                    <p class="pf-h-section-sub">Wählen Sie eine Pflegeart und erfahren Sie alles über Ablauf, Kosten und Voraussetzungen:</p>

                    <div class="pf-leist-cards">
                        <?php foreach ( $arten_cards as $c ) : ?>
                            <a href="<?php echo esc_url( home_url( $c['slug'] ) ); ?>" class="pf-leist-card">
                                <div class="pf-leist-card__icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>"></i></div>
                                <h3 class="pf-leist-card__title"><?php echo esc_html( $c['title'] ); ?></h3>
                                <p class="pf-leist-card__desc"><?php echo esc_html( $c['desc'] ); ?></p>
                                <span class="pf-leist-card__cta">Mehr erfahren <i class="bi bi-arrow-right"></i></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Welche Pflegeart ist richtig? -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-question-square text-success"></i> Welche Pflegeart ist die richtige?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die passende Pflegeart hängt von mehreren Faktoren ab. Dazu zählen der <strong>Pflegegrad</strong>, der Gesundheitszustand, die Wohnsituation und die Frage, ob Angehörige die Pflege übernehmen können. Oft ist auch eine Kombination sinnvoll, etwa ambulante Pflege ergänzt durch Tagespflege.</p>
                            <p>Welche Leistungen die Pflegekasse für die jeweilige Pflegeart zahlt, erfahren Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>">Pflegeleistungen</a>. Wenn Sie selbst pflegen, helfen Ihnen die Tipps für <a href="<?php echo esc_url( home_url( '/ratgeber/pflegende-angehoerige/' ) ); ?>">pflegende Angehörige</a>.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegearten</h2>

                    <div class="pf-faq-list">
                        <?php foreach ( $faqs as $i => $f ) : ?>
                            <details class="pf-faq-item"<?php echo $i === 0 ? ' open' : ''; ?>>
                                <summary class="pf-faq-item__q">
                                    <span><?php echo esc_html( $f['q'] ); ?></span>
                                    <i class="bi bi-chevron-down pf-faq-item__chevron"></i>
                                </summary>
                                <div class="pf-faq-item__a"><?php echo wp_kses_post( $f['a'] ); ?></div>
                            </details>
                        <?php endforeach; ?>
                    </div>

                    <!-- Latest posts CTA -->
                    <div class="pf-about-team-teaser mt-5">
                        <div class="pf-about-team-teaser__text">
                            <div class="pf-about-team-teaser__label"><i class="bi bi-journal-text"></i> Aktuelle Beiträge</div>
                            <h3>Mehr lesen zu Pflegearten</h3>
                            <p>Praktische Ratgeber, aktuelle Änderungen und Tipps von unserer Redaktion.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/ratgeber/?kategorie=pflegearten' ) ); ?>" class="pf-about-team-btn">
                            <i class="bi bi-arrow-right"></i> Alle Beiträge ansehen
                        </a>
                    </div>

                    <!-- Bottom Hinweis -->
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

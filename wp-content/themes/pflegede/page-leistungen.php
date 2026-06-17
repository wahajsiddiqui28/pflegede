<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Leistungen Übersicht
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegeleistungen 2026: Alle Leistungen der Pflegekasse</title>' . "\n";
    echo '<meta name="description" content="Welche Leistungen zahlt die Pflegekasse? Pflegegeld, Sachleistungen, Entlastungsbetrag und mehr im Überblick 2026. Alle Beträge und Ansprüche auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/leistungen/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Welche Leistungen zahlt die Pflegekasse?","acceptedAnswer":{"@type":"Answer","text":"Die Pflegekasse zahlt unter anderem Pflegegeld, Pflegesachleistungen, den Entlastungsbetrag, Verhinderungspflege, Kurzzeitpflege sowie Zuschüsse für Hilfsmittel und den Umbau der Wohnung. Die Höhe hängt vom Pflegegrad ab."}},
    {"@type":"Question","name":"Kann ich Pflegegeld und Sachleistungen zusammen bekommen?","acceptedAnswer":{"@type":"Answer","text":"Ja. Wenn Sie nicht den vollen Anspruch auf Sachleistungen ausschöpfen, bekommen Sie den Rest anteilig als Pflegegeld ausgezahlt. Das nennt man Kombinationsleistung."}},
    {"@type":"Question","name":"Bekomme ich bei Pflegegrad 1 schon Leistungen?","acceptedAnswer":{"@type":"Answer","text":"Ja. Bei Pflegegrad 1 erhalten Sie den Entlastungsbetrag von 131 Euro im Monat sowie Zuschüsse für Pflegehilfsmittel und den Umbau der Wohnung. Pflegegeld und Sachleistungen gibt es jedoch erst ab Pflegegrad 2."}},
    {"@type":"Question","name":"Muss ich jede Leistung einzeln beantragen?","acceptedAnswer":{"@type":"Answer","text":"Einige Leistungen sind mit dem Pflegegrad automatisch verbunden, andere wie die Verhinderungspflege oder ein Treppenlift müssen Sie gesondert bei der Pflegekasse beantragen."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$leistungen_table = array(
    array( 'name' => 'Pflegegeld',                                   'anspruch' => 'Pflegegrad 2', 'betrag' => '347 € bis 990 € pro Monat',                          'icon' => 'bi-cash-coin' ),
    array( 'name' => 'Pflegesachleistungen',                         'anspruch' => 'Pflegegrad 2', 'betrag' => '796 € bis 2.299 € pro Monat',                        'icon' => 'bi-house-heart' ),
    array( 'name' => 'Entlastungsbetrag',                            'anspruch' => 'Pflegegrad 1', 'betrag' => '131 € pro Monat',                                    'icon' => 'bi-gift' ),
    array( 'name' => 'Verhinderungspflege + Kurzzeitpflege',         'anspruch' => 'Pflegegrad 2', 'betrag' => 'bis 3.539 € pro Jahr (gemeinsames Budget)',          'icon' => 'bi-person-arms-up' ),
    array( 'name' => 'Pflegehilfsmittel zum Verbrauch',              'anspruch' => 'Pflegegrad 1', 'betrag' => 'bis 42 € pro Monat',                                 'icon' => 'bi-box-seam' ),
    array( 'name' => 'Wohnumfeldverbessernde Maßnahmen',             'anspruch' => 'Pflegegrad 1', 'betrag' => 'bis 4.180 € je Maßnahme',                            'icon' => 'bi-tools' ),
    array( 'name' => 'Digitale Pflegeanwendungen',                   'anspruch' => 'Pflegegrad 1', 'betrag' => 'bis 53 € pro Monat',                                 'icon' => 'bi-phone' ),
);

$leistungen_cards = array(
    array( 'icon' => 'bi-cash-coin',      'title' => 'Pflegegeld',           'desc' => 'Geld für die Pflege durch Angehörige',  'slug' => '/leistungen/pflegegeld/' ),
    array( 'icon' => 'bi-house-heart',    'title' => 'Pflegesachleistungen', 'desc' => 'Leistungen durch den Pflegedienst',     'slug' => '/leistungen/pflegesachleistungen/' ),
    array( 'icon' => 'bi-gift',           'title' => 'Entlastungsbetrag',    'desc' => '131 € im Monat für Entlastung',         'slug' => '/leistungen/entlastungsbetrag/' ),
    array( 'icon' => 'bi-person-arms-up', 'title' => 'Verhinderungspflege',  'desc' => 'Ersatz bei Ausfall der Pflegeperson',   'slug' => '/leistungen/verhinderungspflege/' ),
    array( 'icon' => 'bi-box-seam',       'title' => 'Pflegehilfsmittel',    'desc' => 'Zuschüsse für Hilfsmittel & Umbau',     'slug' => '/leistungen/pflegehilfsmittel/' ),
    array( 'icon' => 'bi-calendar-event', 'title' => 'Kurzzeitpflege',       'desc' => 'Vorübergehende Pflege im Heim',         'slug' => '/leistungen/kurzzeitpflege/' ),
);

$faqs = array(
    array( 'q' => 'Welche Leistungen zahlt die Pflegekasse?', 'a' => 'Die Pflegekasse zahlt unter anderem <strong>Pflegegeld</strong>, <strong>Pflegesachleistungen</strong>, den <strong>Entlastungsbetrag</strong>, Verhinderungspflege, Kurzzeitpflege sowie Zuschüsse für Hilfsmittel und den Umbau der Wohnung. Die Höhe hängt vom Pflegegrad ab.' ),
    array( 'q' => 'Kann ich Pflegegeld und Sachleistungen zusammen bekommen?', 'a' => '<strong>Ja.</strong> Wenn Sie nicht den vollen Anspruch auf Sachleistungen ausschöpfen, bekommen Sie den Rest anteilig als Pflegegeld ausgezahlt. Das nennt man <strong>Kombinationsleistung</strong>.' ),
    array( 'q' => 'Bekomme ich bei Pflegegrad 1 schon Leistungen?', 'a' => '<strong>Ja.</strong> Bei Pflegegrad 1 erhalten Sie den Entlastungsbetrag von 131 Euro im Monat sowie Zuschüsse für Pflegehilfsmittel und den Umbau der Wohnung. Pflegegeld und Sachleistungen gibt es jedoch erst ab Pflegegrad 2.' ),
    array( 'q' => 'Muss ich jede Leistung einzeln beantragen?', 'a' => 'Einige Leistungen sind mit dem Pflegegrad automatisch verbunden, andere wie die <strong>Verhinderungspflege</strong> oder ein <strong>Treppenlift</strong> müssen Sie gesondert bei der Pflegekasse beantragen.' ),
);
?>

<main role="main">

    <!-- ── Hero (with global contact form) ── -->
    <section class="pf-page-hero">
        <span class="pf-page-hero__pattern"></span>
        <div class="container">
            <div class="pf-page-hero__inner">
                <nav class="pf-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i> Startseite</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Leistungen</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-wallet2"></i> Aktualisiert: Juni 2026</span>
                        <h1 class="pf-page-hero__title">Pflege­leistungen: <span class="pf-page-hero__title-accent">Alle Leistungen</span><br>der Pflegekasse</h1>
                        <p class="pf-page-hero__desc"><strong>Kurz erklärt:</strong> Mit einem anerkannten Pflegegrad zahlt die Pflegekasse Pflegegeld, Sachleistungen, den Entlastungsbetrag sowie Zuschüsse für Hilfsmittel und den Umbau der Wohnung. Wie viel Sie bekommen, hängt vom Pflegegrad ab.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Bis 990 € Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-house-heart"></i> Bis 2.299 € Sachleistung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> SGB XI · Stand 2025</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=900&q=80" alt="Pflegeleistungen — Pflegegeld und Sachleistungen 2025">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Stand 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pf-page-hero__wave">
            <svg viewBox="0 0 1440 50" preserveAspectRatio="none"><path d="M0,30 C360,50 1080,0 1440,30 L1440,50 L0,50 Z"></path></svg>
        </div>
    </section>

    <!-- ── Body ── -->
    <div class="pf-page-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p style="font-size:1.0625rem;">Sobald ein Pflegegrad anerkannt ist, stehen Ihnen zahlreiche Leistungen der Pflegeversicherung zu. Viele Familien wissen aber gar nicht, welche Leistungen es gibt und wie sie sich kombinieren lassen. Auf dieser Seite finden Sie einen klaren Überblick über alle wichtigen Pflegeleistungen, die aktuellen Beträge für 2025 und den Weg zum Antrag. Zu jeder einzelnen Leistung gibt es einen ausführlichen Ratgeber von pflegede.com.</p>
                        </div>
                    </div>

                    <!-- Leistungen Table -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Welche Pflegeleistungen gibt es 2026?</h2>
                    <p class="pf-h-section-sub">Die folgende Tabelle zeigt die wichtigsten Leistungen der Pflegekasse mit dem jeweiligen Anspruch und den aktuellen Beträgen. Eine ausführliche Erklärung zu jeder Leistung finden Sie auf den jeweiligen Detailseiten.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Leistung</th>
                                    <th>Anspruch ab</th>
                                    <th>Betrag 2025</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $leistungen_table as $row ) : ?>
                                <tr>
                                    <td><span class="pf-leist-row"><i class="bi <?php echo esc_attr( $row['icon'] ); ?>"></i> <strong><?php echo esc_html( $row['name'] ); ?></strong></span></td>
                                    <td><?php echo esc_html( $row['anspruch'] ); ?></td>
                                    <td><?php echo esc_html( $row['betrag'] ); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: Bundesgesundheitsministerium, GKV-Spitzenverband und SGB XI · Leistungsbeträge gültig ab 1. Januar 2025 · Stand der Seite: Juni 2026</div>
                    </div>

                    <!-- Pflegegeld + Sachleistungen split section (image 1) -->
                    <div class="pf-about-split mt-5">
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-cash-stack"></i> Geld- & Sachleistungen</span>
                            <h2 class="pf-about-split__title">Pflegegeld und Pflegesachleistungen</h2>
                            <p class="pf-about-split__text">Das <strong>Pflegegeld</strong> ist eine Geldleistung, die direkt an die pflegebedürftige Person ausgezahlt wird. Es ist für alle gedacht, die zu Hause von Angehörigen oder Bekannten gepflegt werden. Die <strong>Pflegesachleistungen</strong> dagegen bezahlt die Pflegekasse direkt an einen ambulanten Pflegedienst. Wer beides kombinieren möchte, kann die sogenannte <em>Kombinationsleistung</em> nutzen und so einen Teil des Pflegegeldes behalten.</p>
                        </div>
                        <div class="pf-about-split__media">
                            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=900&q=80" alt="Pflegegeld und Pflegesachleistungen">
                            <span class="pf-about-split__media-badge"><i class="bi bi-cash-coin"></i> Pflegegeld 2025</span>
                        </div>
                    </div>

                    <!-- Entlastungsbetrag (text section) -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-gift text-success"></i> Entlastungsbetrag und Verhinderungspflege</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Der <strong>Entlastungsbetrag von 131 Euro</strong> im Monat steht allen Pflegebedürftigen ab Pflegegrad 1 zu. Er lässt sich zum Beispiel für eine Betreuungskraft, einen Haushaltsdienst oder die Tagespflege einsetzen.</p>
                            <p>Fällt die Pflegeperson einmal aus, etwa durch Urlaub oder Krankheit, springt die <strong>Verhinderungspflege</strong> ein. Seit dem <strong>1. Juli 2025</strong> bilden Verhinderungs- und Kurzzeitpflege ein gemeinsames Jahresbudget von <strong>bis zu 3.539 Euro im Jahr</strong>, das Sie flexibel für beide Leistungen einsetzen können.</p>
                        </div>
                    </div>

                    <!-- Hilfsmittel + Wohnraum split section (image 2) -->
                    <div class="pf-about-split pf-about-split--reverse mt-5">
                        <div class="pf-about-split__media">
                            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=900&q=80" alt="Wohnraumanpassung und Hilfsmittel">
                            <span class="pf-about-split__media-badge"><i class="bi bi-tools"></i> Bis 4.180 € Zuschuss</span>
                        </div>
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-box-seam"></i> Hilfsmittel & Umbau</span>
                            <h2 class="pf-about-split__title">Zuschüsse für Hilfsmittel und Wohnraumanpassung</h2>
                            <p class="pf-about-split__text">Neben den Geldleistungen übernimmt die Pflegekasse auch Zuschüsse für <strong>Pflegehilfsmittel</strong>. Dazu zählen beispielsweise Pflegebetten oder zum Verbrauch bestimmte Hilfsmittel wie Handschuhe und Desinfektionsmittel. Für den <strong>altersgerechten Umbau der Wohnung</strong>, etwa ein barrierefreies Bad oder einen Treppenlift, gibt es bis zu <strong>4.180 Euro je Maßnahme</strong>.</p>
                        </div>
                    </div>

                    <!-- All Leistungen cards -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-grid text-success"></i> Alle Leistungen im Detail</h2>
                    <p class="pf-h-section-sub">Wählen Sie eine Leistung und erfahren Sie alles über Anspruch, Höhe und Antrag:</p>

                    <div class="pf-leist-cards">
                        <?php foreach ( $leistungen_cards as $c ) : ?>
                            <a href="<?php echo esc_url( home_url( $c['slug'] ) ); ?>" class="pf-leist-card">
                                <div class="pf-leist-card__icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>"></i></div>
                                <h3 class="pf-leist-card__title"><?php echo esc_html( $c['title'] ); ?></h3>
                                <p class="pf-leist-card__desc"><?php echo esc_html( $c['desc'] ); ?></p>
                                <span class="pf-leist-card__cta">Mehr erfahren <i class="bi bi-arrow-right"></i></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Wie beantrage ich -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-file-earmark-text text-success"></i> Wie beantrage ich Pflegeleistungen?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Voraussetzung für fast alle Leistungen ist ein <strong>anerkannter Pflegegrad</strong>. Stellen Sie zuerst einen Antrag auf einen Pflegegrad bei Ihrer Pflegekasse. Sobald der Pflegegrad feststeht, können Sie die einzelnen Leistungen abrufen.</p>
                            <p>Der Anspruch auf den <strong>Entlastungsbetrag</strong> entsteht automatisch mit dem Pflegegrad. Die Leistung wird jedoch nur für tatsächlich genutzte anerkannte Angebote erstattet. Andere Leistungen wie die <strong>Verhinderungspflege</strong> müssen Sie gesondert beantragen.</p>
                            <p>Pflegen Sie selbst einen Angehörigen, lohnt sich ein Blick in unsere Tipps für <a href="<?php echo esc_url( home_url( '/ratgeber/pflegende-angehoerige/' ) ); ?>">pflegende Angehörige</a>.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegeleistungen</h2>

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
                            <h3>Mehr lesen zu Pflegeleistungen</h3>
                            <p>Praktische Ratgeber, aktuelle Änderungen und Tipps von unserer Redaktion.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/ratgeber/?kategorie=leistungen' ) ); ?>" class="pf-about-team-btn">
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

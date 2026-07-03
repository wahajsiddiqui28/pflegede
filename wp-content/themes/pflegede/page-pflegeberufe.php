<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegeberufe Übersicht
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegeberufe: Ausbildung, Gehalt und Karriere in der Pflege</title>' . "\n";
    echo '<meta name="description" content="Alle Pflegeberufe im Überblick: Ausbildung, Gehalt, Weiterbildung und Quereinstieg. Ihr Wegweiser für die Karriere in der Pflege auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegeberufe/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Welche Voraussetzungen brauche ich für die Pflegeausbildung?","acceptedAnswer":{"@type":"Answer","text":"Für die Ausbildung ist in der Regel ein mittlerer Schulabschluss erforderlich. Unter bestimmten Voraussetzungen ist der Einstieg auch mit einem Hauptschulabschluss möglich, etwa nach einer Helferausbildung oder einer anderen Berufsqualifikation. Wichtig sind außerdem Einfühlungsvermögen und Freude am Umgang mit Menschen."}},
    {"@type":"Question","name":"Wie viel verdient man in der Pflege?","acceptedAnswer":{"@type":"Answer","text":"Das Gehalt hängt von Qualifikation, Tarif und Bundesland ab. Pflegefachkräfte verdienen mehr als Pflegehelfer, und mit Weiterbildungen steigt das Gehalt weiter."}},
    {"@type":"Question","name":"Kann ich als Quereinsteiger in die Pflege wechseln?","acceptedAnswer":{"@type":"Answer","text":"Ja. Der Quereinstieg in die Pflege ist gut möglich, zum Beispiel über eine Helferqualifikation oder, je nach Vorqualifikation, über eine verkürzte Ausbildung. Aufgrund des Fachkräftemangels sind Quereinsteiger sehr gefragt."}},
    {"@type":"Question","name":"Wie lange dauert die Pflegeausbildung?","acceptedAnswer":{"@type":"Answer","text":"Die generalistische Pflegeausbildung dauert drei Jahre. Eine Helferausbildung dauert je nach Bundesland ein bis zwei Jahre."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$berufe_table = array(
    array( 'name' => 'Pflegefachfrau / Pflegefachmann',                           'ausb' => '3-jährige generalistische Ausbildung',                                    'ort' => 'Krankenhaus, Pflegeheim, ambulanter Dienst', 'icon' => 'bi-heart-pulse' ),
    array( 'name' => 'Altenpflege (Einsatzbereich)',                              'ausb' => 'Pflegefachfrau/Pflegefachmann mit Tätigkeit in der Altenpflege',          'ort' => 'Pflegeheim, ambulante Pflege, Tagespflege',  'icon' => 'bi-person-arms-up' ),
    array( 'name' => 'Pflegehelfer',                                              'ausb' => '1- bis 2-jährige Ausbildung oder Kurs',                                   'ort' => 'Pflegeheim, ambulanter Dienst',              'icon' => 'bi-person-check' ),
    array( 'name' => 'Pflegedienstleitung (PDL)',                                 'ausb' => 'Weiterbildung nach Berufserfahrung',                                      'ort' => 'Leitung in Heim oder ambulantem Dienst',    'icon' => 'bi-person-workspace' ),
);

$berufe_cards = array(
    array( 'icon' => 'bi-mortarboard',     'title' => 'Pflegeausbildung',     'desc' => 'Ablauf, Dauer und Voraussetzungen',  'slug' => '/pflegeberufe/ausbildung/' ),
    array( 'icon' => 'bi-cash-stack',      'title' => 'Gehalt in der Pflege', 'desc' => 'Was Pflegekräfte verdienen',         'slug' => '/pflegeberufe/gehalt/' ),
    array( 'icon' => 'bi-person-heart',    'title' => 'Altenpflege',          'desc' => 'Arbeiten in der Altenpflege',        'slug' => '/pflegeberufe/altenpflege/' ),
    array( 'icon' => 'bi-hospital',        'title' => 'Krankenpflege',        'desc' => 'Pflegefachkraft im Krankenhaus',     'slug' => '/pflegeberufe/krankenpflege/' ),
    array( 'icon' => 'bi-graph-up-arrow',  'title' => 'Weiterbildung',        'desc' => 'Aufstieg und Spezialisierung',       'slug' => '/pflegeberufe/weiterbildung/' ),
    array( 'icon' => 'bi-arrow-repeat',    'title' => 'Quereinstieg',         'desc' => 'Neu in die Pflege wechseln',         'slug' => '/pflegeberufe/quereinstieg/' ),
);

$faqs = array(
    array( 'q' => 'Welche Voraussetzungen brauche ich für die Pflegeausbildung?', 'a' => 'Für die Ausbildung ist in der Regel ein <strong>mittlerer Schulabschluss</strong> erforderlich. Unter bestimmten Voraussetzungen ist der Einstieg auch mit einem Hauptschulabschluss möglich, etwa nach einer Helferausbildung oder einer anderen Berufsqualifikation. Wichtig sind außerdem <em>Einfühlungsvermögen</em> und Freude am Umgang mit Menschen.' ),
    array( 'q' => 'Wie viel verdient man in der Pflege?', 'a' => 'Das Gehalt hängt von Qualifikation, Tarif und Bundesland ab. <strong>Pflegefachkräfte</strong> verdienen mehr als <strong>Pflegehelfer</strong>, und mit Weiterbildungen steigt das Gehalt weiter. Aktuelle Zahlen finden Sie in unserem Ratgeber zum Gehalt in der Pflege.' ),
    array( 'q' => 'Kann ich als Quereinsteiger in die Pflege wechseln?', 'a' => '<strong>Ja.</strong> Der Quereinstieg in die Pflege ist gut möglich, zum Beispiel über eine <strong>Helferqualifikation</strong> oder, je nach Vorqualifikation, über eine verkürzte Ausbildung. Aufgrund des Fachkräftemangels sind Quereinsteiger sehr gefragt.' ),
    array( 'q' => 'Wie lange dauert die Pflegeausbildung?', 'a' => 'Die generalistische Pflegeausbildung dauert <strong>drei Jahre</strong>. Eine Helferausbildung dauert je nach Bundesland <strong>ein bis zwei Jahre</strong>.' ),
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
                    <span class="pf-breadcrumb__current">Pflegeberufe</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-mortarboard"></i> Aktualisiert: Juni 2026</span>
                        <h1 class="pf-page-hero__title">Pflegeberufe: <span class="pf-page-hero__title-accent">Ausbildung, Gehalt</span><br>und Karriere</h1>
                        <p class="pf-page-hero__desc">Die Pflege bietet viele Berufe mit sicheren Jobaussichten. Vom Pflegehelfer über die Pflegefachkraft bis zur Pflegedienstleitung gibt es zahlreiche Wege. Der Einstieg ist über eine Ausbildung, ein Studium oder einen Quereinstieg möglich.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-briefcase"></i> Zukunftssicher</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Faires Gehalt</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-graph-up-arrow"></i> Karrierechancen</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/pflegeberufe/pflegeberufe-banner-image.webp'); ?>" alt="Pflegeberufe — Ausbildung und Karriere in der Pflege">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Karriere 2025</span>
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
                            <p style="font-size:1.0625rem;">Die Pflege ist einer der <strong>wichtigsten und zukunftssichersten Berufsbereiche</strong> in Deutschland. Wer in der Pflege arbeitet, hat sehr gute Jobchancen, denn überall werden Fachkräfte gesucht. Auf dieser Seite geben wir Ihnen einen Überblick über die wichtigsten Pflegeberufe, die Ausbildung, das Gehalt und die Möglichkeiten zur Weiterbildung. Zu jedem Thema finden Sie einen ausführlichen Ratgeber von pflegede.com.</p>
                        </div>
                    </div>

                    <!-- Berufe Tabelle -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Welche Pflegeberufe gibt es?</h2>
                    <p class="pf-h-section-sub">In der Pflege arbeiten Menschen mit ganz unterschiedlichen Qualifikationen zusammen. Die folgende Übersicht zeigt die wichtigsten Berufe und wie man sie ergreift.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Beruf</th>
                                    <th>Ausbildung / Zugang</th>
                                    <th>Typischer Einsatzort</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $berufe_table as $row ) : ?>
                                <tr>
                                    <td><span class="pf-leist-row"><i class="bi <?php echo esc_attr( $row['icon'] ); ?>"></i> <strong><?php echo esc_html( $row['name'] ); ?></strong></span></td>
                                    <td><?php echo esc_html( $row['ausb'] ); ?></td>
                                    <td><?php echo esc_html( $row['ort'] ); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Ausbildung split -->
                    <div class="pf-about-split mt-5">
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-mortarboard"></i> Ausbildung</span>
                            <h2 class="pf-about-split__title">Ausbildung in der Pflege</h2>
                            <p class="pf-about-split__text">Seit <strong>2020</strong> gibt es die <strong>generalistische Pflegeausbildung</strong>. Sie dauert drei Jahre und führt zum Abschluss als <em>Pflegefachfrau</em> oder <em>Pflegefachmann</em>. Während der Ausbildung lernen die Auszubildenden alle Bereiche der Pflege kennen — von der Altenpflege über die Krankenpflege bis zur Kinderkrankenpflege. Wer einen schnelleren Einstieg sucht, kann zunächst eine Ausbildung zum Pflegehelfer machen.</p>
                        </div>
                        <div class="pf-about-split__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/pflegeberufe/pflegeberufe-image1.webp'); ?>" alt="Pflegeausbildung — Auszubildende lernen die Pflege">
                            <span class="pf-about-split__media-badge"><i class="bi bi-mortarboard"></i> 3 Jahre Ausbildung</span>
                        </div>
                    </div>

                    <!-- Gehalt content -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-cash-stack text-success"></i> Gehalt in der Pflege</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Das Gehalt in der Pflege ist in den letzten Jahren <strong>deutlich gestiegen</strong>. Wie viel man verdient, hängt von der Qualifikation, dem Bundesland, der Einrichtung und der Berufserfahrung ab. Viele Einrichtungen zahlen nach Tarif, etwa nach dem <strong>TVöD</strong> im öffentlichen Dienst.</p>
                            <p>Eine Pflegefachkraft verdient in der Regel mehr als ein Pflegehelfer, und mit Weiterbildungen lässt sich das Gehalt weiter steigern. Eine ausführliche Übersicht mit aktuellen Zahlen finden Sie im Beitrag zum <a href="<?php echo esc_url( home_url( '/pflegeberufe/gehalt/' ) ); ?>">Gehalt in der Pflege</a>.</p>
                        </div>
                    </div>

                    <!-- Weiterbildung + Quereinstieg split (reverse) -->
                    <div class="pf-about-split pf-about-split--reverse mt-5">
                        <div class="pf-about-split__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pages-image/pflegeberufe/pflegeberufe-image2.webp'); ?>" alt="Weiterbildung und Quereinstieg in die Pflege">
                            <span class="pf-about-split__media-badge"><i class="bi bi-graph-up-arrow"></i> Karriereweg</span>
                        </div>
                        <div>
                            <span class="pf-about-split__eyebrow"><i class="bi bi-graph-up-arrow"></i> Aufstieg</span>
                            <h2 class="pf-about-split__title">Weiterbildung und Aufstieg</h2>
                            <p class="pf-about-split__text">Die Pflege bietet viele Möglichkeiten zur Spezialisierung und zum Aufstieg. Nach einigen Jahren Berufserfahrung können Pflegekräfte zum Beispiel die Weiterbildung zur <strong>Praxisanleitung</strong>, zur <strong>Fachkraft für Intensivpflege</strong> oder zur <strong>Pflegedienstleitung</strong> absolvieren. Auch ein Studium im Bereich Pflegemanagement ist möglich.</p>
                        </div>
                    </div>

                    <!-- Quereinstieg content -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-repeat text-success"></i> Quereinstieg in die Pflege</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Auch ohne klassische Ausbildung ist der Einstieg in die Pflege möglich. Immer mehr Menschen wechseln aus anderen Berufen in die Pflege. Der <strong>Quereinstieg</strong> gelingt häufig über eine Helferausbildung oder, je nach Vorqualifikation, über eine verkürzte Ausbildung. Gerade weil so viele Fachkräfte fehlen, sind Quereinsteiger in der Pflege <strong>sehr willkommen</strong>.</p>
                        </div>
                    </div>

                    <!-- All themes cards -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-grid text-success"></i> Alle Themen rund um Pflegeberufe</h2>
                    <p class="pf-h-section-sub">Wählen Sie ein Thema und erfahren Sie mehr über Ihren Weg in die Pflege:</p>

                    <div class="pf-leist-cards">
                        <?php foreach ( $berufe_cards as $c ) : ?>
                            <a href="<?php echo esc_url( home_url( $c['slug'] ) ); ?>" class="pf-leist-card">
                                <div class="pf-leist-card__icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>"></i></div>
                                <h3 class="pf-leist-card__title"><?php echo esc_html( $c['title'] ); ?></h3>
                                <p class="pf-leist-card__desc"><?php echo esc_html( $c['desc'] ); ?></p>
                                <span class="pf-leist-card__cta">Mehr erfahren <i class="bi bi-arrow-right"></i></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Fachkräftemangel highlighted quote -->
                    <div class="pf-quote-block mt-5">
                        <p class="pf-quote-block__text">„In Deutschland besteht seit Jahren ein erheblicher Fachkräftemangel in der Pflege — und der Bedarf steigt weiter. Wer heute in die Pflege einsteigt, findet schnell einen Arbeitsplatz und hat gute Aufstiegsmöglichkeiten."</p>
                        <div class="pf-quote-block__author">— Pflegede.com Redaktion</div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegeberufen</h2>

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
                            <h3>Mehr lesen zu Pflegeberufen</h3>
                            <p>Praktische Ratgeber, aktuelle Änderungen und Tipps von unserer Redaktion.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/ratgeber/?kategorie=pflegeberufe' ) ); ?>" class="pf-about-team-btn">
                            <i class="bi bi-arrow-right"></i> Alle Beiträge ansehen
                        </a>
                    </div>

                    <!-- Bottom Hinweis -->
                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle Berufs- oder Karriereberatung.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

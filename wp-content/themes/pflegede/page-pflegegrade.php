<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrade Übersicht
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegegrade 1 bis 5: Übersicht, Leistungen & Pflegegeld 2026</title>' . "\n";
    echo '<meta name="description" content="Alle fünf Pflegegrade im Überblick: Leistungen, Pflegegeld 2026 und der Weg zum Antrag. So finden Sie schnell den passenden Pflegegrad auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/' ) ) . '">' . "\n";

    // FAQ Schema for SEO
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie viele Pflegegrade gibt es?","acceptedAnswer":{"@type":"Answer","text":"Es gibt fünf Pflegegrade. Pflegegrad 1 steht für eine geringe Beeinträchtigung, Pflegegrad 5 für die schwerste Beeinträchtigung mit besonders hohem Pflegeaufwand."}},
    {"@type":"Question","name":"Wie viel Pflegegeld gibt es bei Pflegegrad 2?","acceptedAnswer":{"@type":"Answer","text":"Bei Pflegegrad 2 bekommen Sie 347 Euro Pflegegeld im Monat oder Pflegesachleistungen im Wert von 796 Euro. Sie können beides auch als Kombinationsleistung nutzen."}},
    {"@type":"Question","name":"Bekomme ich bei Pflegegrad 1 Pflegegeld?","acceptedAnswer":{"@type":"Answer","text":"Nein. Bei Pflegegrad 1 gibt es kein Pflegegeld. Sie erhalten aber den Entlastungsbetrag von 131 Euro im Monat sowie Zuschüsse für Hilfsmittel und den Umbau der Wohnung."}},
    {"@type":"Question","name":"Wie schnell wird über meinen Antrag entschieden?","acceptedAnswer":{"@type":"Answer","text":"Die Pflegekasse muss in der Regel innerhalb von 25 Arbeitstagen nach dem Antrag entscheiden. Hält sie diese Frist nicht ein, kann Ihnen eine Entschädigung zustehen."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$grades = array(
    array( 'num' => '1', 'name' => 'Geringe Beeinträchtigung',                                          'pg' => 'kein Pflegegeld', 'sl' => 'keine Sachleistung', 'color' => '1', 'highlight' => 'Entlastungsbetrag 131 €' ),
    array( 'num' => '2', 'name' => 'Erhebliche Beeinträchtigung',                                       'pg' => '347 €',            'sl' => '796 €',              'color' => '2', 'highlight' => '347 € Pflegegeld' ),
    array( 'num' => '3', 'name' => 'Schwere Beeinträchtigung',                                          'pg' => '599 €',            'sl' => '1.497 €',            'color' => '3', 'highlight' => '599 € Pflegegeld' ),
    array( 'num' => '4', 'name' => 'Schwerste Beeinträchtigung',                                        'pg' => '800 €',            'sl' => '1.859 €',            'color' => '4', 'highlight' => '800 € Pflegegeld' ),
    array( 'num' => '5', 'name' => 'Schwerste Beeintr. + besondere Anforderungen',                      'pg' => '990 €',            'sl' => '2.299 €',            'color' => '5', 'highlight' => '990 € Pflegegeld' ),
);

$faqs = array(
    array( 'q' => 'Wie viele Pflegegrade gibt es?', 'a' => 'Es gibt <strong>fünf Pflegegrade</strong>. Pflegegrad 1 steht für eine geringe Beeinträchtigung, Pflegegrad 5 für die schwerste Beeinträchtigung mit besonders hohem Pflegeaufwand.' ),
    array( 'q' => 'Wie viel Pflegegeld gibt es bei Pflegegrad 2?', 'a' => 'Bei Pflegegrad 2 bekommen Sie <strong>347 Euro Pflegegeld</strong> im Monat oder Pflegesachleistungen im Wert von 796 Euro. Sie können beides auch als Kombinationsleistung nutzen.' ),
    array( 'q' => 'Bekomme ich bei Pflegegrad 1 Pflegegeld?', 'a' => '<strong>Nein.</strong> Bei Pflegegrad 1 gibt es kein Pflegegeld. Sie erhalten aber den Entlastungsbetrag von 131 Euro im Monat sowie Zuschüsse für Hilfsmittel und den Umbau der Wohnung.' ),
    array( 'q' => 'Wie schnell wird über meinen Antrag entschieden?', 'a' => 'Die Pflegekasse muss in der Regel innerhalb von <strong>25 Arbeitstagen</strong> nach dem Antrag entscheiden. Hält sie diese Frist nicht ein, kann Ihnen eine Entschädigung zustehen.' ),
);
?>

<main role="main">

    <!-- ── Hero ── -->
    <section class="pf-page-hero">
        <span class="pf-page-hero__pattern"></span>
        <div class="container">
            <div class="pf-page-hero__inner">
                <nav class="pf-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i> Startseite</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">Pflegegrade</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-clipboard2-pulse"></i> Aktualisiert: Juni 2026</span>
                        <h1 class="pf-page-hero__title">Pflegegrade: <span class="pf-page-hero__title-accent">Überblick</span><br>über alle fünf Stufen</h1>
                        <p class="pf-page-hero__desc">In Deutschland gibt es fünf Pflegegrade. Sie reichen von Pflegegrad 1 bei geringer Beeinträchtigung bis zu Pflegegrad 5 bei schwerster Beeinträchtigung. Der Pflegegrad legt fest, welche Leistungen die Pflegekasse zahlt.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-list-ol"></i> 5 Pflegegrade</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-cash-coin"></i> Bis 990 € Pflegegeld</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-shield-check"></i> SGB XI · Stand 2025</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=900&q=80" alt="Pflegegrade — Begutachtung und Antrag">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-stars"></i> Pflegegeld 2025</span>
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
                            <p style="font-size:1.0625rem;">Der Pflegegrad ist die <strong>Grundlage für alle Leistungen</strong> der Pflegeversicherung. Er zeigt, wie stark ein Mensch im Alltag eingeschränkt ist und wie viel Unterstützung ihm zusteht. Auf dieser Seite bekommen Sie einen schnellen Überblick über alle fünf Pflegegrade, die wichtigsten Leistungen und den Weg zum Antrag. Zu jedem Thema finden Sie passende Ratgeber von pflegede.com.</p>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-table text-success"></i> Die fünf Pflegegrade und ihre Leistungen 2025</h2>
                    <p class="pf-h-section-sub">Die folgende Tabelle zeigt alle Pflegegrade mit dem monatlichen Pflegegeld und den Pflegesachleistungen. Eine ausführliche Erklärung zu jedem einzelnen Grad finden Sie auf den jeweiligen Detailseiten.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Pflegegrad</th>
                                    <th>Bezeichnung</th>
                                    <th>Pflegegeld / Monat</th>
                                    <th>Sachleistung / Monat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $grades as $g ) : ?>
                                <tr>
                                    <td><span class="pf-pg-chip pf-pg-chip--<?php echo esc_attr( $g['color'] ); ?>">PG <?php echo esc_html( $g['num'] ); ?></span></td>
                                    <td><strong><?php echo esc_html( $g['name'] ); ?></strong></td>
                                    <td><?php echo esc_html( $g['pg'] ); ?></td>
                                    <td><?php echo esc_html( $g['sl'] ); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="pf-pg-table__source"><i class="bi bi-info-circle"></i> Quelle: GKV-Spitzenverband, SGB XI · Stand: Januar 2025</div>
                    </div>

                    <!-- Hinweis PG1 -->
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-lightbulb"></i></div>
                        <span><strong>Hinweis zu Pflegegrad 1:</strong> Hier gibt es kein Pflegegeld, aber den <strong>Entlastungsbetrag von 131 Euro</strong> im Monat. Dazu kommen Zuschüsse für Pflegehilfsmittel und für den altersgerechten Umbau der Wohnung.</span>
                    </div>

                    <!-- Welcher Pflegegrad -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-question-square text-success"></i> Welcher Pflegegrad trifft zu?</h2>
                    <p class="pf-h-section-sub">Jeder Pflegegrad steht für ein anderes Maß an Selbstständigkeit im Alltag. Hier eine kurze Einordnung:</p>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <ul>
                                <li><strong>Pflegegrad 1:</strong> geringe Beeinträchtigung der Selbstständigkeit</li>
                                <li><strong>Pflegegrad 2:</strong> erhebliche Beeinträchtigung, der am häufigsten vergebene Pflegegrad</li>
                                <li><strong>Pflegegrad 3:</strong> schwere Beeinträchtigung mit deutlichem Hilfebedarf</li>
                                <li><strong>Pflegegrad 4:</strong> schwerste Beeinträchtigung in fast allen Bereichen</li>
                                <li><strong>Pflegegrad 5:</strong> schwerste Beeinträchtigung mit besonders hohem Pflegeaufwand</li>
                            </ul>
                            <p>Welcher Grad im Einzelfall vergeben wird, entscheidet der <strong>Medizinische Dienst</strong> nach einer Begutachtung. Auf den Detailseiten zu jedem Pflegegrad erklären wir die Voraussetzungen und Leistungen jeweils ausführlich.</p>
                        </div>
                    </div>

                    <!-- Mid accent image -->
                    <div class="pf-accent-card">
                        <div class="pf-accent-card__image">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1400&q=80" alt="Pflegebedürftiger und Pflegekraft">
                        </div>
                        <div class="pf-accent-card__overlay">
                            <span class="pf-accent-card__overlay-label"><i class="bi bi-stars"></i> 5 Pflegegrade · Stand 2025</span>
                            <h3 class="pf-accent-card__overlay-title">Wählen Sie Ihren Pflegegrad und erfahren Sie alles über Voraussetzungen, Leistungen und Antrag.</h3>
                        </div>
                    </div>

                    <!-- Alle PG cards -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-grid text-success"></i> Alle Pflegegrade im Detail</h2>
                    <p class="pf-h-section-sub">Wählen Sie Ihren Pflegegrad und erfahren Sie alles über die Voraussetzungen, Leistungen und den Antrag:</p>

                    <div class="pf-pg-cards">
                        <?php foreach ( $grades as $g ) : ?>
                            <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-' . $g['num'] . '/' ) ); ?>" class="pf-pg-card pf-pg-card--<?php echo esc_attr( $g['color'] ); ?>">
                                <span class="pf-pg-card__chip">PG <?php echo esc_html( $g['num'] ); ?></span>
                                <h3 class="pf-pg-card__title">Pflegegrad <?php echo esc_html( $g['num'] ); ?></h3>
                                <p class="pf-pg-card__desc"><?php echo esc_html( $g['name'] ); ?></p>
                                <div class="pf-pg-card__amount"><?php echo esc_html( $g['highlight'] ); ?></div>
                                <span class="pf-pg-card__cta">Mehr erfahren <i class="bi bi-arrow-right"></i></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Weg zum Pflegegrad -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-signpost-split text-success"></i> Der Weg zum Pflegegrad</h2>
                    <p class="pf-h-section-sub">Den Pflegegrad bekommen Sie nur auf Antrag bei der Pflegekasse. Danach prüft der Medizinische Dienst die Pflegebedürftigkeit anhand von sechs Lebensbereichen. Wie Sie den Antrag richtig stellen und worauf es bei der Begutachtung ankommt, lesen Sie in unseren Ratgebern:</p>

                    <div class="pf-pg-steps">
                        <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ); ?>" class="pf-pg-step">
                            <div class="pf-pg-step__icon"><i class="bi bi-file-earmark-text"></i></div>
                            <div class="pf-pg-step__body">
                                <h3 class="pf-pg-step__title">Pflegegrad beantragen</h3>
                                <p class="pf-pg-step__text">So stellen Sie den Antrag richtig</p>
                            </div>
                            <i class="bi bi-arrow-right pf-pg-step__arrow"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>" class="pf-pg-step">
                            <div class="pf-pg-step__icon"><i class="bi bi-clipboard2-check"></i></div>
                            <div class="pf-pg-step__body">
                                <h3 class="pf-pg-step__title">Begutachtung durch den MD</h3>
                                <p class="pf-pg-step__text">So bereiten Sie sich auf den Termin vor</p>
                            </div>
                            <i class="bi bi-arrow-right pf-pg-step__arrow"></i>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-widerspruch/' ) ); ?>" class="pf-pg-step">
                            <div class="pf-pg-step__icon"><i class="bi bi-shield-exclamation"></i></div>
                            <div class="pf-pg-step__body">
                                <h3 class="pf-pg-step__title">Widerspruch einlegen</h3>
                                <p class="pf-pg-step__text">Was tun, wenn der Antrag abgelehnt wird</p>
                            </div>
                            <i class="bi bi-arrow-right pf-pg-step__arrow"></i>
                        </a>
                    </div>

                    <!-- Welche Leistungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-wallet2 text-success"></i> Welche Leistungen gibt es mit einem Pflegegrad?</h2>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Mit einem anerkannten Pflegegrad stehen Ihnen je nach Einstufung verschiedene Leistungen zu. Dazu gehören das <strong>Pflegegeld</strong>, die <strong>Pflegesachleistungen</strong> und Zuschüsse für Pflegehilfsmittel. Einen vollständigen Überblick finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>">Pflegeleistungen</a>. Wenn Sie selbst einen Angehörigen pflegen, helfen Ihnen die Tipps im Bereich <a href="<?php echo esc_url( home_url( '/ratgeber/pflegende-angehoerige/' ) ); ?>">pflegende Angehörige</a>.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zu Pflegegraden</h2>

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
                            <h3>Mehr lesen zu Pflegegraden</h3>
                            <p>Praktische Ratgeber, aktuelle Änderungen und Tipps von unserer Redaktion.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/ratgeber/?kategorie=pflegegrade' ) ); ?>" class="pf-about-team-btn">
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

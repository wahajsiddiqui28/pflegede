<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: MDK-Begutachtung (Guide)
 */

add_action( 'wp_head', function() {
    echo '<title>MDK-Begutachtung vorbereiten: Ablauf, Module &amp; Tipps</title>' . "\n";
    echo '<meta name="description" content="So bereiten Sie sich auf die Pflegebegutachtung vor: Ablauf des Hausbesuchs, die sechs Module und praktische Tipps zum Pflegetagebuch. Verständlich auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie lange dauert die Begutachtung?","acceptedAnswer":{"@type":"Answer","text":"Der Hausbesuch dauert meist zwischen 45 und 60 Minuten. Je nach Situation kann er etwas kürzer oder länger sein."}},
    {"@type":"Question","name":"Welches Modul ist am wichtigsten?","acceptedAnswer":{"@type":"Answer","text":"Das Modul Selbstversorgung ist mit 40 Prozent am stärksten gewichtet. Es umfasst alltägliche Verrichtungen wie Waschen, Anziehen, Essen und den Toilettengang."}},
    {"@type":"Question","name":"Darf eine Vertrauensperson beim Termin dabei sein?","acceptedAnswer":{"@type":"Answer","text":"Ja, unbedingt. Eine vertraute Person, die den Alltag kennt, sollte dabei sein und den tatsächlichen Hilfebedarf ergänzen. Gutachter berücksichtigen die Angaben pflegender Angehöriger ausdrücklich."}},
    {"@type":"Question","name":"Muss ich das Pflegetagebuch abgeben?","acceptedAnswer":{"@type":"Answer","text":"Nein. Der Gutachter nimmt das Pflegetagebuch nicht mit. Sie zeigen es ihm beim Termin und können ihm eine Kopie aushändigen."}},
    {"@type":"Question","name":"Kann die Begutachtung auch telefonisch erfolgen?","acceptedAnswer":{"@type":"Answer","text":"In Ausnahmefällen kann die Pflegekasse eine Begutachtung nach Aktenlage oder andere besondere Verfahren nutzen. In der Regel erfolgt die Begutachtung jedoch im Rahmen eines Hausbesuchs."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$module = array(
    array( 'nr' => '1',     'name' => 'Mobilität',                                                            'gw' => '10 %' ),
    array( 'nr' => '2 / 3', 'name' => 'Kognitive und kommunikative Fähigkeiten sowie Verhaltensweisen',       'gw' => '15 %' ),
    array( 'nr' => '4',     'name' => 'Selbstversorgung',                                                      'gw' => '40 %' ),
    array( 'nr' => '5',     'name' => 'Umgang mit krankheits- und therapiebedingten Anforderungen',           'gw' => '20 %' ),
    array( 'nr' => '6',     'name' => 'Gestaltung des Alltagslebens und sozialer Kontakte',                   'gw' => '15 %' ),
);

$faqs = array(
    array( 'q' => 'Wie lange dauert die Begutachtung?', 'a' => 'Der Hausbesuch dauert meist zwischen <strong>45 und 60 Minuten</strong>. Je nach Situation kann er etwas kürzer oder länger sein.' ),
    array( 'q' => 'Welches Modul ist am wichtigsten?', 'a' => 'Das Modul <strong>Selbstversorgung</strong> ist mit 40 Prozent am stärksten gewichtet. Es umfasst alltägliche Verrichtungen wie Waschen, Anziehen, Essen und den Toilettengang.' ),
    array( 'q' => 'Darf eine Vertrauensperson beim Termin dabei sein?', 'a' => '<strong>Ja, unbedingt.</strong> Eine vertraute Person, die den Alltag kennt, sollte dabei sein und den tatsächlichen Hilfebedarf ergänzen. Gutachter berücksichtigen die Angaben pflegender Angehöriger ausdrücklich.' ),
    array( 'q' => 'Muss ich das Pflegetagebuch abgeben?', 'a' => '<strong>Nein.</strong> Der Gutachter nimmt das Pflegetagebuch nicht mit. Sie zeigen es ihm beim Termin und können ihm eine Kopie aushändigen.' ),
    array( 'q' => 'Kann die Begutachtung auch telefonisch erfolgen?', 'a' => 'In Ausnahmefällen kann die Pflegekasse eine Begutachtung nach Aktenlage nutzen. In der Regel erfolgt die Begutachtung jedoch im Rahmen eines <strong>Hausbesuchs</strong>, da dabei die Wohnsituation und die Selbstständigkeit besser eingeschätzt werden können.' ),
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
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegrade</a>
                    <i class="bi bi-chevron-right pf-breadcrumb__sep"></i>
                    <span class="pf-breadcrumb__current">MDK-Begutachtung</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-clipboard2-pulse"></i> Ablauf, Module &amp; Tipps</span>
                        <h1 class="pf-page-hero__title">MDK-Begutachtung <span class="pf-page-hero__title-accent">vorbereiten</span></h1>
                        <p class="pf-page-hero__desc">Bei der Begutachtung kommt ein Gutachter des Medizinischen Dienstes zu Ihnen nach Hause und bewertet die Selbstständigkeit in sechs Bereichen. Das Modul Selbstversorgung zählt mit 40 Prozent am stärksten. Eine gute Vorbereitung mit Pflegetagebuch und Unterlagen ist entscheidend für das Ergebnis.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clock"></i> 45–60 Minuten</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-grid-3x3-gap"></i> 6 Module</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-journal-check"></i> Pflegetagebuch</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/mdk-begutachtung-vorbereitung/mdk-begutachtung-vorbereitung-1.jpg' ); ?>" alt="Pflegebedürftige Frau und Angehörige bereiten zu Hause Unterlagen und Pflegetagebuch für die MDK-Begutachtung vor.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-house-check"></i> Hausbesuch</span>
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

                    <!-- Byline -->
                    <div class="pf-byline">
                        <span class="pf-byline__item"><i class="bi bi-pencil"></i> Verfasst von <strong>Amna Tauqeer</strong>, Redakteurin</span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Hassan Abid</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <!-- Lead -->
                    <div class="pf-lead-box">
                        Bei der Begutachtung kommt ein Gutachter des Medizinischen Dienstes zu Ihnen nach Hause und bewertet die Selbstständigkeit in <strong>sechs Bereichen</strong>. Das Modul Selbstversorgung zählt mit 40 Prozent am stärksten. Eine gute Vorbereitung mit Pflegetagebuch und Unterlagen ist entscheidend für das Ergebnis.
                    </div>

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Begutachtung ist das Herzstück des Pflegegrad-Antrags. Hier entscheidet sich, welcher Pflegegrad anerkannt wird und welche Leistungen Ihnen zustehen. Viele unterschätzen, wie wichtig eine gute Vorbereitung ist. Der Termin dauert meist nur etwa eine Stunde und bildet daher lediglich eine Momentaufnahme des tatsächlichen Pflegealltags ab. Wie Sie überhaupt einen Pflegegrad beantragen, lesen Sie auf der Seite <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ); ?>">Pflegegrad beantragen</a>. pflegede.com begleitet Sie durch den gesamten Ablauf.</p>
                        </div>
                    </div>

                    <!-- Wer führt durch -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-person-badge text-success"></i> Wer führt die Begutachtung durch?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Nach dem Antrag beauftragt die Pflegekasse den <strong>Medizinischen Dienst</strong> mit der Begutachtung. Bei gesetzlich Versicherten übernimmt der Medizinische Dienst — viele kennen ihn noch unter der früheren Bezeichnung <strong>MDK</strong>. Bei privat Versicherten übernimmt das Unternehmen <strong>Medicproof</strong>. Ein Gutachter, meist eine Pflegefachkraft oder ein Arzt, vereinbart einen Termin und besucht die pflegebedürftige Person in der Regel zu Hause.</p>
                        </div>
                    </div>

                    <!-- Wie läuft ab -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-house-check text-success"></i> Wie läuft die Begutachtung ab?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Der Hausbesuch dauert meist zwischen <strong>45 und 60 Minuten</strong>. Der Gutachter stellt Fragen zum Alltag und bittet die pflegebedürftige Person, einzelne Bewegungen zu zeigen — etwa vom Stuhl aufzustehen oder ein paar Schritte zu gehen. Es findet <strong>keine umfassende medizinische Untersuchung</strong> statt. Häufig schaut sich der Gutachter auch die Wohnung an, zum Beispiel das Bad und das Schlafzimmer, um den Pflegebedarf besser einzuschätzen. Anschließend erstellt er ein Gutachten und leitet es an die Pflegekasse weiter, die dann über den Pflegegrad entscheidet.</p>
                        </div>
                    </div>

                    <!-- 6 Module -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-pie-chart text-success"></i> Die sechs Module der Begutachtung</h2>

                    <figure class="pf-figure">
                        <img class="pf-figure__img" src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/mdk-begutachtung-vorbereitung/mdk-begutachtung-vorbereitung-2.jpg' ); ?>" alt="Diagramm der sechs Module der Pflegebegutachtung mit Gewichtung, Selbstversorgung mit 40 Prozent am stärksten.">
                        <figcaption class="pf-figure__cap"><i class="bi bi-info-circle"></i> Die Gewichtung der sechs Module — Selbstversorgung zählt mit 40 % am stärksten.</figcaption>
                    </figure>

                    <p class="pf-h-section-sub">Bewertet wird die Selbstständigkeit in sechs Lebensbereichen, den sogenannten Modulen. Aus den gewichteten Punkten ergibt sich ein Gesamtwert zwischen 0 und 100, der den Pflegegrad bestimmt. Bei den Modulen 2 und 3 zählt nur der höhere der beiden Werte.</p>

                    <div class="pf-pg-table-wrap">
                        <table class="pf-pg-table">
                            <thead>
                                <tr>
                                    <th>Modul</th>
                                    <th>Lebensbereich</th>
                                    <th>Gewichtung</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $module as $m ) : ?>
                                <tr>
                                    <td><span class="pf-pg-chip pf-pg-chip--2"><?php echo esc_html( $m['nr'] ); ?></span></td>
                                    <td><strong><?php echo esc_html( $m['name'] ); ?></strong></td>
                                    <td><span class="pf-pg-amount"><?php echo esc_html( $m['gw'] ); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-star-fill"></i></div>
                        <span>Das Modul <strong>Selbstversorgung</strong> ist mit 40 Prozent am wichtigsten. Hier geht es um alltägliche Verrichtungen wie Waschen, Anziehen, Essen und den Toilettengang. Schildern Sie gerade in diesem Bereich alle Einschränkungen genau.</span>
                    </div>

                    <!-- So bereiten Sie sich vor -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-check2-circle text-success"></i> So bereiten Sie sich auf die Begutachtung vor</h2>
                    <ol class="pf-timeline">
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-journal-text"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Pflegetagebuch führen</h3>
                                <p class="pf-timeline__text">Das Pflegetagebuch ist ein wichtiges Hilfsmittel — führen Sie es über etwa zwei Wochen vor dem Termin. Notieren Sie täglich, bei welchen Tätigkeiten Hilfe nötig ist, wie oft und in welcher Form (anleiten, teilweise unterstützen oder ganz übernehmen). Konkrete Notizen wie „Beim Duschen ist Hilfe beim Ein- und Ausstieg sowie beim Abtrocknen nötig" sind aussagekräftiger als „Beim Waschen geholfen". Der Gutachter nimmt das Tagebuch nicht mit, aber Sie können ihm eine Kopie aushändigen.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-folder-check"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Unterlagen zusammenstellen</h3>
                                <p class="pf-timeline__text">Legen Sie alle wichtigen Dokumente bereit: aktuelle Arztberichte und Diagnosen, einen aktuellen Medikamentenplan, Entlassungsberichte aus Krankenhaus oder Reha, eine Übersicht der genutzten Hilfsmittel sowie Therapiepläne, falls vorhanden. Machen Sie am besten Kopien, die Sie dem Gutachter mitgeben können.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-people"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Vertrauensperson hinzuziehen</h3>
                                <p class="pf-timeline__text">Bitten Sie einen Angehörigen oder eine andere Vertrauensperson, beim Termin dabei zu sein. Pflegebedürftige spielen ihre Einschränkungen vor fremden Menschen oft herunter, aus Stolz oder Scham. Eine zweite Person kann den Alltag realistisch schildern und an Dinge erinnern, die sonst untergehen. Sprechen Sie vorher ab, wer was sagt.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-eye"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Den Alltag realistisch zeigen</h3>
                                <p class="pf-timeline__text">Zeigen Sie die Situation so, wie sie an einem normalen schlechten Tag ist — nicht an einem besonders guten. Beschönigen Sie nichts und übertreiben Sie nichts. Ziel des Gutachters ist es, den tatsächlichen Unterstützungsbedarf möglichst realistisch zu erfassen. Das trägt zu einer fairen Einstufung bei.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Häufige Fehler -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-exclamation-triangle text-success"></i> Häufige Fehler bei der Begutachtung</h2>
                    <ul class="pf-tips">
                        <li>
                            <span class="pf-tips__check pf-tips__check--warn"><i class="bi bi-x-lg"></i></span>
                            <span class="pf-tips__body"><strong>Einschränkungen herunterspielen</strong> Aus Stolz wirken viele selbstständiger, als sie sind — das führt zu einer zu niedrigen Einstufung.</span>
                        </li>
                        <li>
                            <span class="pf-tips__check pf-tips__check--warn"><i class="bi bi-x-lg"></i></span>
                            <span class="pf-tips__body"><strong>Ohne Vorbereitung in den Termin gehen</strong> Ohne Pflegetagebuch und Unterlagen fehlen dem Gutachter wichtige Informationen.</span>
                        </li>
                        <li>
                            <span class="pf-tips__check pf-tips__check--warn"><i class="bi bi-x-lg"></i></span>
                            <span class="pf-tips__body"><strong>Allein bleiben</strong> Ohne Begleitperson gehen oft wichtige Details verloren.</span>
                        </li>
                        <li>
                            <span class="pf-tips__check pf-tips__check--warn"><i class="bi bi-x-lg"></i></span>
                            <span class="pf-tips__body"><strong>Nur den Ist-Zustand zeigen</strong> Schwankungen und schlechte Tage gehören genauso dazu wie gute.</span>
                        </li>
                    </ul>

                    <!-- Was passiert nach -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-right-circle text-success"></i> Was passiert nach der Begutachtung?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Nach dem Hausbesuch erstellt der Gutachter ein schriftliches Gutachten und leitet es an die Pflegekasse weiter. Diese entscheidet über den Pflegegrad und schickt Ihnen den Bescheid. Fordern Sie das Gutachten an und prüfen Sie, ob die Einschätzung zu Ihren Erfahrungen passt. Sind Sie nicht einverstanden, können Sie innerhalb eines Monats Widerspruch einlegen. Wie das geht, erklären wir im Ratgeber zum <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-widerspruch/' ) ); ?>">Pflegegrad-Widerspruch</a>.</p>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur MDK-Begutachtung</h2>
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

                    <!-- Fazit -->
                    <div class="pf-fazit">
                        <div class="pf-fazit__label"><i class="bi bi-flag"></i> Fazit</div>
                        <p class="pf-fazit__text">Die Begutachtung entscheidet über Ihren Pflegegrad und damit über die Leistungen, die Ihnen zustehen. Wer sich gut vorbereitet, ein <strong>Pflegetagebuch</strong> führt, die Unterlagen bereithält und eine Vertrauensperson dabei hat, geht mit den besten Voraussetzungen in den Termin. Zeigen Sie den Alltag ehrlich und vollständig.</p>
                    </div>

                    <!-- Quellen -->
                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen und fachlichen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Medizinischer Dienst Bund: Begutachtung der Pflegebedürftigkeit — md-bund.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §15 Ermittlung des Grades der Pflegebedürftigkeit — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesgesundheitsministerium: Online-Ratgeber Pflege, Pflegebegutachtung — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
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

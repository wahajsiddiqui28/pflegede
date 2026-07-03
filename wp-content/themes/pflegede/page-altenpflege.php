<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Altenpflege (Detail)
 */

add_action( 'wp_head', function() {
    echo '<title>Altenpflege: Beruf, Ausbildung &amp; Aufgaben im Überblick</title>' . "\n";
    echo '<meta name="description" content="Altenpflege als Berufsfeld: Aufgaben, der Weg über die generalistische Ausbildung, der gesonderte Abschluss und die Aussichten. Verständlich erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegeberufe/altenpflege/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Gibt es noch eine eigene Altenpflegeausbildung?","acceptedAnswer":{"@type":"Answer","text":"Eine eigenständige Altenpflegeausbildung gibt es seit 2020 nicht mehr. Der Weg führt über die generalistische Pflegeausbildung, in der ein Schwerpunkt auf die Pflege älterer Menschen möglich ist."}},
    {"@type":"Question","name":"Was ist der Unterschied zwischen Altenpflege und Krankenpflege?","acceptedAnswer":{"@type":"Answer","text":"Die Altenpflege begleitet ältere Menschen, oft über lange Zeit und mit einem Schwerpunkt auf Betreuung und Lebensqualität. Die Krankenpflege ist stärker auf die medizinische Versorgung von Patienten ausgerichtet, häufig im Krankenhaus. Seit 2020 werden beide in einer Ausbildung zusammengeführt."}},
    {"@type":"Question","name":"Lohnt sich der gesonderte Altenpflegeabschluss?","acceptedAnswer":{"@type":"Answer","text":"In den meisten Fällen ist der generalistische Abschluss die bessere Wahl, da er flexibler einsetzbar und EU-weit automatisch anerkannt ist. Der gesonderte Abschluss wird kaum noch gewählt, und seine Zukunft ist offen."}},
    {"@type":"Question","name":"Welcher Schulabschluss wird für die Ausbildung gebraucht?","acceptedAnswer":{"@type":"Answer","text":"In der Regel ein mittlerer Schulabschluss. Mit einem Hauptschulabschluss ist der Zugang möglich, wenn zusätzlich eine abgeschlossene Berufsausbildung oder eine Pflegehelferausbildung vorliegt."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$faqs = array(
    array( 'q' => 'Gibt es noch eine eigene Altenpflegeausbildung?', 'a' => 'Eine eigenständige Altenpflegeausbildung gibt es <strong>seit 2020 nicht mehr</strong>. Der Weg führt über die generalistische Pflegeausbildung, in der ein Schwerpunkt auf die Pflege älterer Menschen möglich ist.' ),
    array( 'q' => 'Was ist der Unterschied zwischen Altenpflege und Krankenpflege?', 'a' => 'Die <strong>Altenpflege</strong> begleitet ältere Menschen, oft über lange Zeit und mit einem Schwerpunkt auf Betreuung und Lebensqualität. Die <strong>Krankenpflege</strong> ist stärker auf die medizinische Versorgung von Patienten ausgerichtet, häufig im Krankenhaus. Seit 2020 werden beide in einer Ausbildung zusammengeführt.' ),
    array( 'q' => 'Lohnt sich der gesonderte Altenpflegeabschluss?', 'a' => 'In den meisten Fällen ist der <strong>generalistische Abschluss</strong> die bessere Wahl, da er flexibler einsetzbar und EU-weit automatisch anerkannt ist. Der gesonderte Abschluss wird kaum noch gewählt, und seine Zukunft ist offen.' ),
    array( 'q' => 'Welcher Schulabschluss wird für die Ausbildung gebraucht?', 'a' => 'In der Regel ein <strong>mittlerer Schulabschluss</strong>. Mit einem Hauptschulabschluss ist der Zugang möglich, wenn zusätzlich eine abgeschlossene Berufsausbildung oder eine Pflegehelferausbildung vorliegt.' ),
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
                    <span class="pf-breadcrumb__current">Altenpflege</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-person-heart"></i> Beruf &amp; Ausbildung</span>
                        <h1 class="pf-page-hero__title">Altenpflege: <span class="pf-page-hero__title-accent">Beruf</span><br>&amp; Aufgaben</h1>
                        <p class="pf-page-hero__desc">Die Altenpflege umfasst die Pflege und Betreuung älterer Menschen — im Pflegeheim und in der ambulanten Pflege. Eine eigene Altenpflegeausbildung gibt es seit 2020 nicht mehr; der Weg führt heute über die generalistische Pflegeausbildung.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-people"></i> Ältere Menschen</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-mortarboard"></i> Generalistische Ausbildung</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-graph-up-arrow"></i> Sehr gute Aussichten</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/altenpflege/altenpflege-1.jpg' ); ?>" alt="Altenpflegekraft betreut einen älteren Menschen im Pflegeheim.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-person-heart"></i> Altenpflege</span>
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
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Tauqeer Ahmed</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <div class="pf-lead-box">
                        Die Altenpflege umfasst die Pflege und Betreuung <strong>älterer Menschen</strong> — sowohl im Pflegeheim als auch in der ambulanten Pflege. Eine eigene Altenpflegeausbildung gibt es seit 2020 nicht mehr. Der Weg führt heute über die generalistische Pflegeausbildung, mit der Möglichkeit, einen Schwerpunkt auf die Pflege älterer Menschen zu legen.
                    </div>

                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Altenpflege ist eines der wichtigsten Berufsfelder unserer Zeit. Die Bevölkerung wird älter, und damit wächst der Bedarf an Menschen, die ältere Pflegebedürftige professionell begleiten. Wer in der Altenpflege arbeiten möchte, sollte aber wissen, dass sich der Weg in den Beruf seit 2020 grundlegend verändert hat. Einen Überblick über die Berufe finden Sie auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegeberufe/' ) ); ?>">Pflegeberufen</a>. Auf pflegede.com erklären wir Ihnen alles verständlich.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-info-circle text-success"></i> Was bedeutet Altenpflege?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Altenpflege bezeichnet die pflegerische Versorgung und Betreuung älterer Menschen. Sie findet vor allem in der <strong>stationären Pflege</strong> im Pflegeheim, in der <strong>ambulanten Pflege</strong> zu Hause und in der <strong>Tagespflege</strong> statt. Im Mittelpunkt steht nicht nur die körperliche Pflege, sondern der ganze Mensch mit seiner Lebensgeschichte, seinen Wünschen und seinem sozialen Umfeld. Anders als die Krankenpflege, die stärker auf die medizinische Versorgung im Krankenhaus ausgerichtet ist, begleitet die Altenpflege Menschen oft über lange Zeit.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-list-check text-success"></i> Welche Aufgaben hat eine Altenpflegekraft?</h2>
                    <div class="pf-who-cards">
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-droplet"></i></div>
                            <p class="pf-who-card__text"><strong>Körperbezogene Pflege</strong> Unterstützung bei Körperhygiene, Ernährung und Mobilität.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-heart-pulse"></i></div>
                            <p class="pf-who-card__text"><strong>Medizinische Aufgaben</strong> Wundversorgung, Medikamentengabe und Zusammenarbeit mit Ärzten — je nach Qualifikation.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-chat-heart"></i></div>
                            <p class="pf-who-card__text"><strong>Betreuung &amp; Begleitung</strong> Gespräche, Beschäftigung und Förderung sozialer Kontakte.</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-clipboard2-data"></i></div>
                            <p class="pf-who-card__text"><strong>Organisation</strong> Pflegeplanung, Dokumentation und Beratung der Angehörigen.</p>
                        </div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-heart"></i></div>
                        <span>Gerade die Begleitung von Menschen mit <strong>Demenz</strong> und die <strong>Sterbebegleitung</strong> gehören zu den anspruchsvollsten und zugleich wertvollsten Aufgaben in diesem Beruf.</span>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-signpost-split text-success"></i> Wie wird man heute Altenpflegerin oder Altenpfleger?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Hier liegt die größte Veränderung. Bis Ende 2019 gab es eine eigenständige dreijährige Ausbildung zur Altenpflegerin oder zum Altenpfleger. Mit dem Pflegeberufegesetz wurde sie zum 1. Januar 2020 in die neue <strong>generalistische Pflegeausbildung</strong> überführt. Heute starten alle Auszubildenden gemeinsam mit dem Ziel Pflegefachfrau oder Pflegefachmann.</p>
                            <p>Wer den Schwerpunkt auf die Pflege älterer Menschen legen möchte, wählt einen <strong>Vertiefungseinsatz in der Langzeitpflege</strong>. Vor dem letzten Ausbildungsdrittel besteht dann ein Wahlrecht: Man kann die generalistische Ausbildung fortsetzen oder unter den gesetzlichen Voraussetzungen einen gesonderten Abschluss als Altenpflegerin oder Altenpfleger erwerben.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-hourglass-split text-success"></i> Die Zukunft des gesonderten Abschlusses</h2>
                    <div class="pf-hinweis-alert">
                        <div class="pf-hinweis-alert__icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
                        <div>
                            <div class="pf-hinweis-alert__title">Generalistischer Abschluss ist die sichere Wahl</div>
                            <p class="pf-hinweis-alert__text">Fast alle Auszubildenden wählen den <strong>generalistischen Abschluss</strong>, weil er in allen Pflegebereichen flexibel einsetzbar ist und die Grundlage für die EU-weite Anerkennung bildet. Der gesonderte Altenpflegeabschluss wird nur sehr selten gewählt und muss im EU-Ausland im Einzelfall geprüft werden. Ein Regierungsbericht aus dem Jahr 2026 kommt zu dem Ergebnis, dass diese Abschlüsse kaum noch gewählt werden. Ob sie bestehen bleiben, entscheidet der Bundestag.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-person-check text-success"></i> Altenpflegehelferin und Altenpflegehelfer</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Neben der dreijährigen Fachkraftausbildung gibt es die Ausbildung zur <strong>Altenpflegehelferin oder zum Altenpflegehelfer</strong>. Sie dauert je nach Bundesland ein bis zwei Jahre und ist landesrechtlich geregelt. Pflegehelferinnen und Pflegehelfer unterstützen die Fachkräfte bei der Grundpflege und im Alltag. Die Helferausbildung ist außerdem ein guter Einstieg, denn sie kann später auf die Fachkraftausbildung angerechnet werden.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-graph-up-arrow text-success"></i> Aussichten in der Altenpflege</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Aussichten sind ausgesprochen gut. Durch den demografischen Wandel steigt die Zahl pflegebedürftiger Menschen kontinuierlich, während gleichzeitig Fachkräfte fehlen. Wer in der Altenpflege ausgebildet ist, hat daher <strong>sehr sichere Berufsaussichten</strong> und vielfältige Wege der Weiterentwicklung — Fachweiterbildungen (etwa Gerontopsychiatrie oder Palliativpflege) sowie der Aufstieg in die Pflegedienst- oder Einrichtungsleitung. Mehr dazu auf der Seite zu den <a href="<?php echo esc_url( home_url( '/pflegeberufe/weiterbildung/' ) ); ?>">Weiterbildungen</a>. Was man verdient, zeigt die Seite zum <a href="<?php echo esc_url( home_url( '/pflegeberufe/gehalt/' ) ); ?>">Gehalt in der Pflege</a>.</p>
                        </div>
                    </div>

                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zur Altenpflege</h2>
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
                        <p class="pf-fazit__text">Die Altenpflege ist ein <strong>sinnstiftendes Berufsfeld</strong> mit sehr sicheren Zukunftsaussichten. Der Weg führt heute über die generalistische Pflegeausbildung, die in allen Bereichen einsetzbar macht und einen Schwerpunkt auf ältere Menschen erlaubt. Wer Freude an der Begleitung von Menschen hat, findet hier eine erfüllende Aufgabe.</p>
                    </div>

                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesgesundheitsministerium: Pflegeberufegesetz und FAQ — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium für Familie, Senioren, Frauen und Jugend: Neue Pflegeausbildungen — bmfsfj.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: Pflegeberufegesetz (PflBG), §§58 bis 62 — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                        </ol>
                    </div>

                    <div class="pf-about-notice mt-4">
                        <div class="pf-about-notice__icon"><i class="bi bi-info-circle-fill"></i></div>
                        <span><strong>Hinweis:</strong> Die Inhalte dieser Seite dienen der allgemeinen Information und ersetzen keine individuelle Berufs- oder Bildungsberatung.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>

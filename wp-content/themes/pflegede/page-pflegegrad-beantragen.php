<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Pflegegrad beantragen (Guide)
 */

add_action( 'wp_head', function() {
    echo '<title>Pflegegrad beantragen: Anleitung in 5 Schritten</title>' . "\n";
    echo '<meta name="description" content="Pflegegrad beantragen leicht gemacht: formloser Antrag, Ablauf, Fristen und Tipps zur Begutachtung. Schritt für Schritt erklärt auf pflegede.com.">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ) . '">' . "\n";
    ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Wie beantrage ich einen Pflegegrad?","acceptedAnswer":{"@type":"Answer","text":"Sie stellen einen formlosen Antrag bei der Pflegekasse der pflegebedürftigen Person, telefonisch, per E-Mail oder per Brief. Danach folgt die Begutachtung durch den Medizinischen Dienst."}},
    {"@type":"Question","name":"Was kostet es, einen Pflegegrad zu beantragen?","acceptedAnswer":{"@type":"Answer","text":"Der Antrag ist kostenlos. Auch die Begutachtung durch den Medizinischen Dienst und die Pflegeberatung kosten Sie nichts."}},
    {"@type":"Question","name":"Wie lange dauert es, bis ich einen Pflegegrad bekomme?","acceptedAnswer":{"@type":"Answer","text":"Die Pflegekasse muss in der Regel innerhalb von 25 Arbeitstagen nach Eingang des Antrags entscheiden. In Eilfällen, etwa bei einem Krankenhausaufenthalt, gelten kürzere Fristen."}},
    {"@type":"Question","name":"Ab wann bekomme ich die Leistungen?","acceptedAnswer":{"@type":"Answer","text":"Die Leistungen werden rückwirkend ab dem Tag der Antragstellung gezahlt. Deshalb sollten Sie den Antrag so früh wie möglich stellen."}},
    {"@type":"Question","name":"Was kann ich tun, wenn mein Antrag abgelehnt wird?","acceptedAnswer":{"@type":"Answer","text":"Gegen einen ablehnenden oder zu niedrigen Bescheid können Sie innerhalb eines Monats Widerspruch einlegen. Hilft das nicht, bleibt der Weg zum Sozialgericht, der kostenfrei und ohne Anwaltszwang möglich ist."}}
  ]
}
</script>
    <?php
}, 5 );

get_header();

$faqs = array(
    array( 'q' => 'Wie beantrage ich einen Pflegegrad?', 'a' => 'Sie stellen einen <strong>formlosen Antrag</strong> bei der Pflegekasse der pflegebedürftigen Person — telefonisch, per E-Mail oder per Brief. Danach folgt die Begutachtung durch den Medizinischen Dienst.' ),
    array( 'q' => 'Was kostet es, einen Pflegegrad zu beantragen?', 'a' => 'Der Antrag ist <strong>kostenlos</strong>. Auch die Begutachtung durch den Medizinischen Dienst und die Pflegeberatung kosten Sie nichts.' ),
    array( 'q' => 'Wie lange dauert es, bis ich einen Pflegegrad bekomme?', 'a' => 'Die Pflegekasse muss in der Regel innerhalb von <strong>25 Arbeitstagen</strong> nach Eingang des Antrags entscheiden. In Eilfällen, etwa bei einem Krankenhausaufenthalt, gelten kürzere Fristen.' ),
    array( 'q' => 'Ab wann bekomme ich die Leistungen?', 'a' => 'Die Leistungen werden <strong>rückwirkend ab dem Tag der Antragstellung</strong> gezahlt. Deshalb sollten Sie den Antrag so früh wie möglich stellen.' ),
    array( 'q' => 'Was kann ich tun, wenn mein Antrag abgelehnt wird?', 'a' => 'Gegen einen ablehnenden oder zu niedrigen Bescheid können Sie innerhalb eines Monats <strong>Widerspruch</strong> einlegen. Hilft das nicht, bleibt der Weg zum Sozialgericht, der kostenfrei und ohne Anwaltszwang möglich ist.' ),
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
                    <span class="pf-breadcrumb__current">Pflegegrad beantragen</span>
                </nav>
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <span class="pf-page-hero__badge"><i class="bi bi-list-check"></i> Anleitung in 5 Schritten</span>
                        <h1 class="pf-page-hero__title">Pflegegrad <span class="pf-page-hero__title-accent">beantragen</span><br>Schritt für Schritt</h1>
                        <p class="pf-page-hero__desc">Einen Pflegegrad beantragen Sie formlos bei der Pflegekasse — ein Anruf genügt. Danach folgt die Begutachtung durch den Medizinischen Dienst. Die Pflegekasse muss innerhalb von 25 Arbeitstagen entscheiden, und die Leistungen gelten rückwirkend ab dem Tag der Antragstellung.</p>
                        <div class="pf-page-hero__stats">
                            <div class="pf-page-hero__stat-item"><i class="bi bi-telephone"></i> Formlos &amp; kostenlos</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-clock-history"></i> 25 Arbeitstage</div>
                            <div class="pf-page-hero__stat-item"><i class="bi bi-arrow-counterclockwise"></i> Rückwirkend ab Antrag</div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="pf-page-hero__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrad-beantragen/pflegegrad-beantragen-1.jpg' ); ?>" alt="Angehörige hilft einer älteren Frau zu Hause beim Ausfüllen des Antrags für einen Pflegegrad.">
                            <span class="pf-page-hero__media-tag"><i class="bi bi-file-earmark-text"></i> Antrag stellen</span>
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
                        <span class="pf-byline__item"><i class="bi bi-patch-check"></i> Geprüft von <strong>Tauqeer Ahmed</strong></span>
                        <span class="pf-byline__sep">·</span>
                        <span class="pf-byline__item"><i class="bi bi-calendar3"></i> Zuletzt aktualisiert: Juni 2026</span>
                    </div>

                    <!-- Lead -->
                    <div class="pf-lead-box">
                        Einen Pflegegrad beantragen Sie <strong>formlos bei der Pflegekasse</strong> der pflegebedürftigen Person. Ein Anruf genügt. Danach folgt die Begutachtung durch den Medizinischen Dienst. Die Pflegekasse muss innerhalb von 25 Arbeitstagen entscheiden. Die Leistungen gelten rückwirkend ab dem Tag der Antragstellung.
                    </div>

                    <!-- Intro -->
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Wer regelmäßig Hilfe im Alltag braucht, hat oft Anspruch auf Leistungen der Pflegeversicherung. Voraussetzung ist ein anerkannter Pflegegrad. Viele scheuen den Antrag, weil sie viel Bürokratie befürchten. Dabei ist der erste Schritt ganz einfach. Auf dieser Seite zeigen wir Ihnen, wie Sie einen Pflegegrad beantragen, welche Fristen gelten und wie Sie sich auf die Begutachtung vorbereiten. Eine Übersicht über alle Pflegegrade und Leistungen finden Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/pflegegrade/' ) ); ?>">Pflegegraden</a>. pflegede.com begleitet Sie durch jeden Schritt.</p>
                        </div>
                    </div>

                    <!-- Wer kann beantragen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-people text-success"></i> Wer kann einen Pflegegrad beantragen?</h2>
                    <p class="pf-h-section-sub">Den Antrag kann nicht nur die pflegebedürftige Person selbst stellen. Auch andere dürfen das übernehmen:</p>
                    <div class="pf-who-cards">
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-person"></i></div>
                            <p class="pf-who-card__text"><strong>Die pflegebedürftige Person</strong> selbst</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-person-vcard"></i></div>
                            <p class="pf-who-card__text">Ein <strong>Angehöriger</strong> mit einer Vollmacht</p>
                        </div>
                        <div class="pf-who-card">
                            <div class="pf-who-card__icon"><i class="bi bi-bank"></i></div>
                            <p class="pf-who-card__text">Eine gerichtlich bestellte <strong>rechtliche Betreuung</strong></p>
                        </div>
                    </div>
                    <div class="pf-info-note">
                        <div class="pf-info-note__icon"><i class="bi bi-info-circle"></i></div>
                        <span>Eine wichtige Voraussetzung: In den vergangenen zehn Jahren muss in der Regel mindestens <strong>zwei Jahre</strong> eine Versicherung in der Pflegeversicherung bestanden haben. Dazu zählt auch eine Familienversicherung. Außerdem muss die Beeinträchtigung voraussichtlich mindestens sechs Monate bestehen.</span>
                    </div>

                    <!-- 5 Schritte -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-diagram-3 text-success"></i> Pflegegrad beantragen in 5 Schritten</h2>

                    <figure class="pf-figure">
                        <img class="pf-figure__img" src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrad-beantragen/pflegegrad-beantragen-2.jpg' ); ?>" alt="Ablauf in fünf Schritten, um einen Pflegegrad zu beantragen, von der Antragstellung bis zum Widerspruch.">
                        <figcaption class="pf-figure__cap"><i class="bi bi-info-circle"></i> Der Weg vom formlosen Antrag bis zum möglichen Widerspruch im Überblick.</figcaption>
                    </figure>

                    <ol class="pf-timeline">
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-telephone"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Formlosen Antrag stellen <span class="pf-timeline__badge">Schritt 1</span></h3>
                                <p class="pf-timeline__text">Der erste Schritt ist der formlose Antrag bei der Pflegekasse, die bei der Krankenkasse angesiedelt ist. Sie brauchen kein besonderes Formular — oft reicht ein Anruf, eine E-Mail oder ein kurzes Schreiben: „Ich beantrage die Feststellung der Pflegebedürftigkeit und die Einstufung in einen Pflegegrad." Wichtig ist das Datum, denn ab diesem Tag werden später die Leistungen gezahlt. Lassen Sie sich den Eingang schriftlich bestätigen.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-file-earmark-text"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Antragsformulare ausfüllen <span class="pf-timeline__badge">Schritt 2</span></h3>
                                <p class="pf-timeline__text">Nach dem ersten Kontakt schickt Ihnen die Pflegekasse die offiziellen Formulare zu. Darin geben Sie Einzelheiten zur Pflegesituation an — zum Beispiel wer pflegt und welche Einschränkungen bestehen. Füllen Sie die Formulare sorgfältig aus und senden Sie sie zeitnah zurück. Viele Kassen bieten die Formulare inzwischen auch online an.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-clipboard2-check"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Begutachtung vorbereiten <span class="pf-timeline__badge">Schritt 3</span></h3>
                                <p class="pf-timeline__text">Die Pflegekasse beauftragt den Medizinischen Dienst mit der Begutachtung. Ein Gutachter vereinbart einen Termin und besucht die pflegebedürftige Person in der Regel zu Hause. Ein Pflegetagebuch über sieben Tage, ärztliche Unterlagen, eine Medikamentenliste und eine Begleitperson sind sehr hilfreich. Mehr im Ratgeber zur <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>">MDK-Begutachtung</a>.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-envelope-check"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Bescheid prüfen <span class="pf-timeline__badge">Schritt 4</span></h3>
                                <p class="pf-timeline__text">Nach dem Hausbesuch erstellt der Gutachter ein Gutachten und die Pflegekasse entscheidet über den Pflegegrad. Sie erhalten den Bescheid schriftlich — innerhalb von 25 Arbeitstagen. Hält die Kasse diese Frist nicht ein, steht Ihnen für jede begonnene Woche der Verzögerung eine Entschädigung von 70 Euro zu. Prüfen Sie, welcher Pflegegrad festgestellt und welche Punkte vergeben wurden.</p>
                            </div>
                        </li>
                        <li class="pf-timeline__step">
                            <div class="pf-timeline__node"><i class="bi bi-shield-exclamation"></i></div>
                            <div class="pf-timeline__card">
                                <h3 class="pf-timeline__title">Bei Bedarf Widerspruch einlegen <span class="pf-timeline__badge">Schritt 5</span></h3>
                                <p class="pf-timeline__text">Sind Sie mit dem Ergebnis nicht einverstanden, können Sie innerhalb eines Monats nach Erhalt des Bescheids Widerspruch einlegen. Fordern Sie dazu das Gutachten an und vergleichen Sie es mit Ihren eigenen Erfahrungen. Wie Sie vorgehen, erklären wir im Ratgeber zum <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-widerspruch/' ) ); ?>">Pflegegrad-Widerspruch</a>.</p>
                            </div>
                        </li>
                    </ol>

                    <!-- Fristen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-calendar-week text-success"></i> Fristen im Überblick</h2>
                    <p class="pf-h-section-sub">Für die Bearbeitung gelten klare gesetzliche Fristen. Die wichtigsten:</p>
                    <div class="pf-frist-grid">
                        <div class="pf-frist-card pf-frist-card--1">
                            <i class="bi bi-hourglass-split pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">25</div>
                            <div class="pf-frist-card__unit">Arbeitstage</div>
                            <p class="pf-frist-card__desc">Regelfrist für die Entscheidung nach Eingang des Antrags.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--2">
                            <i class="bi bi-house pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">10</div>
                            <div class="pf-frist-card__unit">Arbeitstage</div>
                            <p class="pf-frist-card__desc">Wenn die Person zu Hause lebt und Pflegezeit beim Arbeitgeber angekündigt wurde.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--3">
                            <i class="bi bi-hospital pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">5</div>
                            <div class="pf-frist-card__unit">Arbeitstage</div>
                            <p class="pf-frist-card__desc">Bei Aufenthalt im Krankenhaus oder in der Reha, wenn die Begutachtung nötig ist.</p>
                        </div>
                        <div class="pf-frist-card pf-frist-card--4">
                            <i class="bi bi-shield pf-frist-card__icon"></i>
                            <div class="pf-frist-card__num">1</div>
                            <div class="pf-frist-card__unit">Monat</div>
                            <p class="pf-frist-card__desc">Frist, um nach Erhalt des Bescheids Widerspruch einzulegen.</p>
                        </div>
                    </div>

                    <!-- Ab wann gelten Leistungen -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-counterclockwise text-success"></i> Ab wann gelten die Leistungen?</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Die Leistungen werden <strong>rückwirkend ab dem Tag der Antragstellung</strong> gezahlt — nicht erst ab dem Bescheid und auch nicht rückwirkend ab einer Diagnose. Deshalb gilt: Stellen Sie den Antrag so früh wie möglich, sobald sich abzeichnet, dass regelmäßig Hilfe nötig ist. Jeder Monat, den Sie warten, kann bares Geld kosten. Welche Leistungen Ihnen je nach Pflegegrad zustehen, erfahren Sie auf unserer Seite zu den <a href="<?php echo esc_url( home_url( '/leistungen/' ) ); ?>">Leistungen</a>.</p>
                        </div>
                    </div>

                    <!-- Höherstufung -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-arrow-up-circle text-success"></i> Höherstufung beantragen</h2>
                    <div class="pf-content-card">
                        <div class="pf-legal-content">
                            <p>Verschlechtert sich der Gesundheitszustand, können Sie eine <strong>Höherstufung</strong> beantragen. Das läuft genauso wie der Erstantrag, also formlos bei der Pflegekasse. Es folgt eine erneute Begutachtung nach demselben Punktesystem. Wird der höhere Pflegegrad bewilligt, gibt es die zusätzlichen Leistungen rückwirkend ab dem Tag der Antragstellung. Eine Mindestzeit zwischen Erstantrag und Höherstufung gibt es nicht.</p>
                        </div>
                    </div>

                    <!-- Tipps -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-lightbulb text-success"></i> Tipps für einen erfolgreichen Antrag</h2>
                    <ul class="pf-tips">
                        <li>
                            <span class="pf-tips__check"><i class="bi bi-check-lg"></i></span>
                            <span class="pf-tips__body"><strong>Früh beantragen</strong> Leistungen gelten erst ab dem Antragsmonat — also nicht zögern.</span>
                        </li>
                        <li>
                            <span class="pf-tips__check"><i class="bi bi-check-lg"></i></span>
                            <span class="pf-tips__body"><strong>Pflegetagebuch führen</strong> Notieren Sie über mindestens sieben Tage, bei welchen Tätigkeiten und wie oft Hilfe nötig ist.</span>
                        </li>
                        <li>
                            <span class="pf-tips__check"><i class="bi bi-check-lg"></i></span>
                            <span class="pf-tips__body"><strong>Begleitperson einplanen</strong> Pflegebedürftige spielen ihre Einschränkungen oft herunter. Eine zweite Person schildert den Alltag realistisch.</span>
                        </li>
                        <li>
                            <span class="pf-tips__check"><i class="bi bi-check-lg"></i></span>
                            <span class="pf-tips__body"><strong>Nichts beschönigen</strong> Zeigen Sie den Alltag so, wie er an einem normalen schlechten Tag wirklich ist.</span>
                        </li>
                        <li>
                            <span class="pf-tips__check"><i class="bi bi-check-lg"></i></span>
                            <span class="pf-tips__body"><strong>Beratung nutzen</strong> Die Pflegeberatung nach §7a SGB XI und die Pflegestützpunkte sind kostenlos.</span>
                        </li>
                    </ul>

                    <!-- FAQ -->
                    <h2 class="pf-h-section mt-5"><i class="bi bi-patch-question text-success"></i> Häufige Fragen zum Pflegegrad-Antrag</h2>
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
                        <p class="pf-fazit__text">Einen Pflegegrad zu beantragen ist einfacher, als viele denken. Der erste Schritt ist ein <strong>formloser Antrag</strong> bei der Pflegekasse, danach folgen Formulare, Begutachtung und Bescheid. Wichtig ist vor allem: Stellen Sie den Antrag früh und bereiten Sie die Begutachtung gut vor — so sichern Sie sich alle Leistungen, die Ihnen zustehen.</p>
                    </div>

                    <!-- Quellen -->
                    <div class="pf-sources">
                        <div class="pf-sources__title"><i class="bi bi-journal-bookmark"></i> Quellen</div>
                        <p class="pf-sources__stand">Die Angaben beruhen auf den folgenden offiziellen Quellen. Stand der Prüfung: Juni 2026.</p>
                        <ol class="pf-sources__list">
                            <li>Bundesgesundheitsministerium: Begutachtungsfristen — bundesgesundheitsministerium.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §18 Verfahren zur Feststellung der Pflegebedürftigkeit — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Bundesministerium der Justiz: SGB XI, §33 Leistungsvoraussetzungen — gesetze-im-internet.de (abgerufen am 24. Juni 2026).</li>
                            <li>Verbraucherzentrale: Fristen bei der Pflegekasse — verbraucherzentrale.de (Stand 23. Februar 2026).</li>
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

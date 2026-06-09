<?php
defined( 'ABSPATH' ) || exit;
/*
 * Template Name: Front Page (Pflegede Home)
 */
get_header();
?>

<main role="main" class="pflege-home">

    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 1 – HERO
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-hero">
        <span class="pf-hero__blob pf-hero__blob--1"></span>
        <span class="pf-hero__blob pf-hero__blob--2"></span>

        <div class="container position-relative">
            <div class="row align-items-center g-5">

                <!-- Left: Headline + Search + CTAs -->
                <div class="col-lg-7">
                    <span class="pf-hero__eyebrow">
                        <span class="pf-hero__eyebrow-dot"></span>
                        Ihr Pflegeportal auf Deutsch
                    </span>

                    <h1 class="pf-hero__title">
                        Alles über Pflege in Deutschland. <span class="pf-hero__highlight">Nachrichten</span>, Wissen und Geschichten aus der Pflegewelt.
                    </h1>

                    <p class="pf-hero__subtitle">
                        pflegede.com ist das unabhängige Magazin für die Pflegebranche in Deutschland. Von aktuellen Neuigkeiten bis zu hilfreichen Ratgebern und persönlichen Erfahrungsberichten. Geprüft von Pflegefachkräften und Sozialrechtlern.
                    </p>

                    <!-- Search Bar -->
                    <form class="pf-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="pf-search__field">
                            <i class="bi bi-search pf-search__icon" aria-hidden="true"></i>
                            <input
                                type="text"
                                name="s"
                                class="pf-search__input"
                                id="pfHomeSearch"
                                placeholder="z.B. Pflegegrad 2 beantragen"
                                data-placeholders='["z.B. Pflegegrad 2 beantragen","z.B. Pflegegeld 2025","z.B. MDK-Begutachtung vorbereiten","z.B. ambulante Pflegedienste Berlin"]'
                                autocomplete="off"
                                aria-label="Pflege-Themen suchen" />
                        </div>
                        <button type="submit" class="pf-search__btn">
                            <span>Suchen</span>
                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </button>
                    </form>

                    <!-- CTAs -->
                    <div class="pf-hero__ctas">
                        <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-ermitteln/' ) ); ?>" class="pf-btn pf-btn--primary">
                            <i class="bi bi-clipboard2-check"></i>
                            <span>Pflegegrad ermitteln</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/ratgeber/' ) ); ?>" class="pf-btn pf-btn--ghost">
                            <i class="bi bi-book"></i>
                            <span>Zum Ratgeber</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Image Slider -->
                <?php
                $hero_slides = array(
                    array(
                        'img'      => 'care-2.jpg',
                        'badge'    => 'Medizinisch geprüft',
                        'badge_ic' => 'bi-shield-check',
                        'tag'      => 'Expertenwissen',
                        'title'    => 'Pflege verstehen',
                        'meta'     => 'Inhalte von Pflegefachkräften',
                        'meta_ic'  => 'bi-mortarboard',
                    ),
                    array(
                        'img'      => 'care-1.jpg',
                        'badge'    => 'Für Angehörige',
                        'badge_ic' => 'bi-people',
                        'tag'      => 'Ratgeber',
                        'title'    => 'Praktische Hilfe im Alltag',
                        'meta'     => 'Tipps, Entlastung & Beratung',
                        'meta_ic'  => 'bi-heart',
                    ),
                    array(
                        'img'      => 'care-3.jpg',
                        'badge'    => 'Aktuell 2025',
                        'badge_ic' => 'bi-stars',
                        'tag'      => 'Pflegeleistungen',
                        'title'    => 'Pflegegelder & Gesetze',
                        'meta'     => 'Jährlich aktualisiert nach SGB XI',
                        'meta_ic'  => 'bi-arrow-clockwise',
                    ),
                );
                ?>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-visual">
                        <span class="hero-visual__backdrop"></span>

                        <div id="heroSlider" class="carousel slide hero-slider" data-bs-ride="carousel" data-bs-interval="3800" data-bs-pause="hover">
                            <div class="carousel-indicators hero-slider__dots">
                                <?php foreach ( $hero_slides as $idx => $slide ) : ?>
                                    <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="<?php echo (int) $idx; ?>" class="<?php echo 0 === $idx ? 'active' : ''; ?>" aria-label="Slide <?php echo (int) $idx + 1; ?>"<?php echo 0 === $idx ? ' aria-current="true"' : ''; ?>></button>
                                <?php endforeach; ?>
                            </div>

                            <div class="carousel-inner">
                                <?php foreach ( $hero_slides as $idx => $slide ) : ?>
                                <div class="carousel-item<?php echo 0 === $idx ? ' active' : ''; ?>">
                                    <div class="hero-slide">
                                        <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/' . $slide['img'] ); ?>" alt="<?php echo esc_attr( $slide['title'] ); ?>" class="hero-slide__img" loading="<?php echo 0 === $idx ? 'eager' : 'lazy'; ?>" />
                                        <span class="hero-slide__verified">
                                            <i class="bi <?php echo esc_attr( $slide['badge_ic'] ); ?>"></i>
                                            <?php echo esc_html( $slide['badge'] ); ?>
                                        </span>
                                        <div class="hero-slide__info">
                                            <span class="hero-slide__cat"><?php echo esc_html( $slide['tag'] ); ?></span>
                                            <div class="hero-slide__name"><?php echo esc_html( $slide['title'] ); ?></div>
                                            <div class="hero-slide__meta">
                                                <span class="hero-slide__loc"><i class="bi <?php echo esc_attr( $slide['meta_ic'] ); ?>"></i> <?php echo esc_html( $slide['meta'] ); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <span class="hero-visual__chip">
                            <i class="bi bi-bookmark-star-fill"></i>
                            Verlässliche Informationen
                        </span>
                        <span class="hero-visual__badge">
                            <i class="bi bi-shield-check"></i>
                            Geprüft &amp; Aktuell
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 2 – TRUST BAR
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-trust">
        <div class="container">
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="pf-trust__item">
                        <div class="pf-trust__icon"><i class="bi bi-shield-check"></i></div>
                        <div>
                            <div class="pf-trust__title">Medizinisch geprüft</div>
                            <div class="pf-trust__text">Alle Inhalte werden von Pflegefachkräften oder Gesundheitsjuristen geprüft.</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pf-trust__item">
                        <div class="pf-trust__icon"><i class="bi bi-arrow-clockwise"></i></div>
                        <div>
                            <div class="pf-trust__title">Regelmäßig aktualisiert</div>
                            <div class="pf-trust__text">Pflegegesetze ändern sich jährlich (Pflegegelderhöhungen, SGB XI).</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pf-trust__item">
                        <div class="pf-trust__icon"><i class="bi bi-mortarboard"></i></div>
                        <div>
                            <div class="pf-trust__title">Expertenwissen</div>
                            <div class="pf-trust__text">Autorenprofile mit Qualifikationen bei jedem Artikel.</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pf-trust__item">
                        <div class="pf-trust__icon"><i class="bi bi-gift"></i></div>
                        <div>
                            <div class="pf-trust__title">Redaktionell &amp; unabhängig</div>
                            <div class="pf-trust__text">Unsere redaktionellen Inhalte entstehen unabhängig von kommerziellen Interessen.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 3 – QUICK FINDER
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-section pf-quick">
        <div class="container">
            <div class="pf-section__head text-center">
                <span class="pf-eyebrow">Schnellnavigation</span>
                <h2 class="pf-section__title">Wo möchten Sie starten?</h2>
                <p class="pf-section__sub">Wählen Sie Ihren Themenbereich — wir führen Sie direkt zur passenden Übersicht.</p>
            </div>

            <?php
            $quick_tiles = array(
                array(
                    'url'   => home_url( '#' ),
                    'img'   => 'quick-pflegegrad.jpg',
                    'alt'   => 'Pflegegrad Einstufung und Beratung',
                    'icon'  => 'bi-clipboard2-pulse',
                    'title' => 'Pflegegrad',
                    'desc'  => 'Einstufung &amp; Antrag',
                ),
                array(
                    'url'   => home_url( '#' ),
                    'img'   => 'quick-leistungen.jpg',
                    'alt'   => 'Pflegeleistungen — Geld- und Sachleistungen',
                    'icon'  => 'bi-wallet2',
                    'title' => 'Leistungen',
                    'desc'  => 'Geld- &amp; Sachleistungen',
                ),
                array(
                    'url'   => home_url( '#' ),
                    'img'   => 'quick-pflegearten.jpg',
                    'alt'   => 'Pflegearten — ambulant, stationär und häuslich',
                    'icon'  => 'bi-house-heart',
                    'title' => 'Pflegearten',
                    'desc'  => 'Ambulant, stationär, häuslich',
                ),
                array(
                    'url'   => home_url( '#' ),
                    'img'   => 'quick-pflegearten.jpg',
                    'alt'   => 'Pflegearten — ambulant, stationär und häuslich',
                    'icon'  => 'bi-house-heart',
                    'title' => 'Pflegearten',
                    'desc'  => 'Ambulant, stationär, häuslich',
                ),
                array(
                    'url'   => home_url( '#' ),
                    'img'   => 'quick-ratgeber.jpg',
                    'alt'   => 'Ratgeber für pflegende Angehörige',
                    'icon'  => 'bi-journal-text',
                    'title' => 'Pflegeberufe',
                    'desc'  => 'Ausbildung, Gehalt & Karriere',
                ),
            );
            ?>
            <div class="row g-4 mt-2">
                <?php foreach ( $quick_tiles as $tile ) : ?>
                <div class="col-sm-6 col-lg-2" style="width: 19.666667%;">
                    <a href="<?php echo esc_url( $tile['url'] ); ?>" class="pf-quick__tile">
                        <span class="pf-quick__media">
                            <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/' . $tile['img'] ); ?>"
                                 alt="<?php echo esc_attr( $tile['alt'] ); ?>"
                                 class="pf-quick__img"
                                 loading="lazy"
                                 width="400" height="220" />
                            <span class="pf-quick__media-overlay"></span>
                            <span class="pf-quick__icon"><i class="bi <?php echo esc_attr( $tile['icon'] ); ?>"></i></span>
                        </span>
                        <span class="pf-quick__body">
                            <span class="pf-quick__title"><?php echo $tile['title']; ?></span>
                            <span class="pf-quick__desc"><?php echo $tile['desc']; ?></span>
                            <span class="pf-quick__cta">
                                <span>Mehr erfahren</span>
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 4 – PFLEGEGRADE 1–5 (Übersicht & Tabelle)
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-section pf-pflegegrade">
        <div class="container">
            <div class="pf-section__head text-center">
                <span class="pf-eyebrow pf-eyebrow--accent">Pflegegrade 1–5</span>
                <h2 class="pf-section__title">Pflegegeld-Übersicht 2025</h2>
                <p class="pf-section__sub">
                    Die fünf Pflegegrade sind die meistgesuchten Einzelthemen im deutschen Pflegebereich. Hier finden Sie eine kompakte Übersicht der monatlichen Leistungen.
                </p>
            </div>

            <!-- Pflegegeld Spotlight Banner (relocated from hero) -->
            <div class="pf-spotlight">
                <div class="pf-spotlight__media">
                    <img src="<?php echo esc_url( PFLEGEDE_URI . '/assets/images/pflegegrade-section.jpg' ); ?>"
                         alt="Pflegebedürftiger Senior mit Pflegekraft — Pflegegrad Einstufung"
                         class="pf-spotlight__img"
                         loading="lazy"
                         width="400" height="300" />
                    <span class="pf-spotlight__media-overlay"></span>
                </div>
                <div class="pf-spotlight__intro">
                    <span class="pf-spotlight__eyebrow"><i class="bi bi-stars"></i> Aktuell 2025</span>
                    <h3 class="pf-spotlight__title">Pflegegeld-Übersicht</h3>
                    <p class="pf-spotlight__sub">Monatliche Leistungen nach Pflegegrad</p>
                </div>
                <div class="pf-spotlight__grid">
                    <div class="pf-spotlight__item">
                        <span class="pf-pg-chip pf-pg-chip--2">PG 2</span>
                        <div>
                            <span class="pf-spotlight__label">Pflegegeld</span>
                            <span class="pf-spotlight__val">347 €</span>
                        </div>
                    </div>
                    <div class="pf-spotlight__item">
                        <span class="pf-pg-chip pf-pg-chip--3">PG 3</span>
                        <div>
                            <span class="pf-spotlight__label">Pflegegeld</span>
                            <span class="pf-spotlight__val">599 €</span>
                        </div>
                    </div>
                    <div class="pf-spotlight__item">
                        <span class="pf-pg-chip pf-pg-chip--4">PG 4</span>
                        <div>
                            <span class="pf-spotlight__label">Pflegegeld</span>
                            <span class="pf-spotlight__val">800 €</span>
                        </div>
                    </div>
                    <div class="pf-spotlight__item">
                        <span class="pf-pg-chip pf-pg-chip--5">PG 5</span>
                        <div>
                            <span class="pf-spotlight__label">Pflegegeld</span>
                            <span class="pf-spotlight__val">990 €</span>
                        </div>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url( '/leistungen/pflegegeld/pflegegeld-tabelle-2025/' ) ); ?>" class="pf-spotlight__link">
                    Vollständige Tabelle 2025 <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <!-- Grade Cards -->
            <div class="row g-3 mt-2">
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-1/' ) ); ?>" class="pf-grade-card pf-grade-card--1">
                        <div class="pf-grade-card__num">1</div>
                        <div class="pf-grade-card__name">Geringe Beeinträchtigung</div>
                        <div class="pf-grade-card__rows">
                            <div class="pf-grade-card__row"><span>Pflegegeld</span><strong>–</strong></div>
                            <div class="pf-grade-card__row"><span>Sachleistung</span><strong>–</strong></div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-2/' ) ); ?>" class="pf-grade-card pf-grade-card--2">
                        <div class="pf-grade-card__num">2</div>
                        <div class="pf-grade-card__name">Erhebliche Beeinträchtigung</div>
                        <div class="pf-grade-card__rows">
                            <div class="pf-grade-card__row"><span>Pflegegeld</span><strong>347 €</strong></div>
                            <div class="pf-grade-card__row"><span>Sachleistung</span><strong>796 €</strong></div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-3/' ) ); ?>" class="pf-grade-card pf-grade-card--3">
                        <div class="pf-grade-card__num">3</div>
                        <div class="pf-grade-card__name">Schwere Beeinträchtigung</div>
                        <div class="pf-grade-card__rows">
                            <div class="pf-grade-card__row"><span>Pflegegeld</span><strong>599 €</strong></div>
                            <div class="pf-grade-card__row"><span>Sachleistung</span><strong>1.497 €</strong></div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-4/' ) ); ?>" class="pf-grade-card pf-grade-card--4">
                        <div class="pf-grade-card__num">4</div>
                        <div class="pf-grade-card__name">Schwerste Beeinträchtigung</div>
                        <div class="pf-grade-card__rows">
                            <div class="pf-grade-card__row"><span>Pflegegeld</span><strong>800 €</strong></div>
                            <div class="pf-grade-card__row"><span>Sachleistung</span><strong>1.859 €</strong></div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-5/' ) ); ?>" class="pf-grade-card pf-grade-card--5">
                        <div class="pf-grade-card__num">5</div>
                        <div class="pf-grade-card__name">Schwerste Beeintr. + besondere Anforderungen</div>
                        <div class="pf-grade-card__rows">
                            <div class="pf-grade-card__row"><span>Pflegegeld</span><strong>990 €</strong></div>
                            <div class="pf-grade-card__row"><span>Sachleistung</span><strong>2.299 €</strong></div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Detailed Table -->
            <div class="pf-table-wrap mt-5">
                <div class="pf-table-head">
                    <h3 class="pf-table-head__title"><i class="bi bi-table"></i> Pflegegeld-Übersichtstabelle 2025</h3>
                    <span class="pf-table-head__badge">SGB XI · gültig ab 2024/2025</span>
                </div>
                <div class="table-responsive">
                    <table class="pf-table">
                        <thead>
                            <tr>
                                <th>Pflegegrad</th>
                                <th>Bezeichnung</th>
                                <th class="text-end">Pflegegeld / Monat</th>
                                <th class="text-end">Sachleistung / Monat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="pf-pg-chip pf-pg-chip--1">PG 1</span></td>
                                <td>Geringe Beeinträchtigung</td>
                                <td class="text-end pf-table-val">–</td>
                                <td class="text-end pf-table-val">–</td>
                            </tr>
                            <tr>
                                <td><span class="pf-pg-chip pf-pg-chip--2">PG 2</span></td>
                                <td>Erhebliche Beeinträchtigung</td>
                                <td class="text-end pf-table-val">347 €</td>
                                <td class="text-end pf-table-val">796 €</td>
                            </tr>
                            <tr>
                                <td><span class="pf-pg-chip pf-pg-chip--3">PG 3</span></td>
                                <td>Schwere Beeinträchtigung</td>
                                <td class="text-end pf-table-val">599 €</td>
                                <td class="text-end pf-table-val">1.497 €</td>
                            </tr>
                            <tr>
                                <td><span class="pf-pg-chip pf-pg-chip--4">PG 4</span></td>
                                <td>Schwerste Beeinträchtigung</td>
                                <td class="text-end pf-table-val">800 €</td>
                                <td class="text-end pf-table-val">1.859 €</td>
                            </tr>
                            <tr>
                                <td><span class="pf-pg-chip pf-pg-chip--5">PG 5</span></td>
                                <td>Schwerste Beeintr. + besondere Anforderungen</td>
                                <td class="text-end pf-table-val">990 €</td>
                                <td class="text-end pf-table-val">2.299 €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--<div class="pf-table-foot">-->
                <!--    <i class="bi bi-info-circle"></i>-->
                <!--    Quellenhinweis: Beträge gemäß SGB XI, gültig ab 2024/2025. Tabelle muss jährlich aktualisiert werden.-->
                <!--</div>-->
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 5 – STATISTIKEN
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-section pf-stats">
        <div class="container">
            <div class="pf-section__head text-center">
                <span class="pf-eyebrow">Pflege in Zahlen</span>
                <h2 class="pf-section__title">Pflege in Deutschland</h2>
                <p class="pf-section__sub">Konkrete Kennzahlen aus zitierfähigen Quellen — jährlich aktualisiert.</p>
            </div>

            <div class="row g-3 mt-2">
                <div class="col-sm-6 col-lg-3">
                    <div class="pf-stat">
                        <div class="pf-stat__icon"><i class="bi bi-people-fill"></i></div>
                        <div class="pf-stat__value">5,7 Million.</div>
                        <div class="pf-stat__label">Pflegebedürftige in Deutschland</div>
                        <div class="pf-stat__src">Statistisches Bundesamt, 2023</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="pf-stat">
                        <div class="pf-stat__icon"><i class="bi bi-heart-pulse"></i></div>
                        <div class="pf-stat__value">3,4 Million.</div>
                        <div class="pf-stat__label">Pflegende Angehörige</div>
                        <div class="pf-stat__src">Bundesministerium für Gesundheit, 2023</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="pf-stat">
                        <div class="pf-stat__icon"><i class="bi bi-building"></i></div>
                        <div class="pf-stat__value">16.000+</div>
                        <div class="pf-stat__label">Pflegeheime in Deutschland</div>
                        <div class="pf-stat__src">Pflegestatistik 2022</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="pf-stat">
                        <div class="pf-stat__icon"><i class="bi bi-house-door"></i></div>
                        <div class="pf-stat__value">15.800+</div>
                        <div class="pf-stat__label">Ambulante Pflegedienste</div>
                        <div class="pf-stat__src">Pflegestatistik 2022</div>
                    </div>
                </div>
            </div>

            <p class="pf-stats__source text-center mt-4">
                Quelle: Statistisches Bundesamt, Pflegestatistik 2022/2023
            </p>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 6 – MEISTGELESENE RATGEBER
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-section pf-articles">
        <div class="container">
            <div class="pf-section__head pf-section__head--split">
                <div>
                    <span class="pf-eyebrow">Redaktion</span>
                    <h2 class="pf-section__title">Meistgelesene Ratgeber-Beiträge</h2>
                    <p class="pf-section__sub mb-0">Datengestützte Auswahl nach Suchvolumen und Nutzerintention.</p>
                </div>
                <a href="<?php echo esc_url( home_url( '/ratgeber/' ) ); ?>" class="pf-section__link">
                    Alle Ratgeber ansehen <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/pflegegrad-beantragen/' ) ); ?>" class="pf-article">
                        <span class="pf-article__badge pf-article__badge--navy">Pflegegrade</span>
                        <h3 class="pf-article__title">Pflegegrad beantragen — Schritt für Schritt</h3>
                        <div class="pf-article__meta">
                            <span><i class="bi bi-clock"></i> 8 Min. Lesezeit</span>
                            <span class="pf-article__arrow"><i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/leistungen/pflegegeld/pflegegeld-tabelle-2025/' ) ); ?>" class="pf-article">
                        <span class="pf-article__badge pf-article__badge--teal">Leistungen</span>
                        <h3 class="pf-article__title">Pflegegeld 2025 — aktuelle Beträge nach Pflegegrad</h3>
                        <div class="pf-article__meta">
                            <span><i class="bi bi-clock"></i> 6 Min. Lesezeit</span>
                            <span class="pf-article__arrow"><i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/pflegegrade/mdk-begutachtung-vorbereitung/' ) ); ?>" class="pf-article">
                        <span class="pf-article__badge pf-article__badge--red">Pflegegrade</span>
                        <h3 class="pf-article__title">MDK-Begutachtung — so bereiten Sie sich vor</h3>
                        <div class="pf-article__meta">
                            <span><i class="bi bi-clock"></i> 7 Min. Lesezeit</span>
                            <span class="pf-article__arrow"><i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 7 – THEMENBEREICHE (Topic Hubs)
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-section pf-topics">
        <div class="container">
            <div class="pf-section__head text-center">
                <span class="pf-eyebrow pf-eyebrow--accent">Themenbereiche</span>
                <h2 class="pf-section__title">Pflege-Wissen nach Themen</h2>
                <p class="pf-section__sub">Vom Pflegealltag bis zu Recht &amp; Finanzen — finden Sie umfassende Übersichten zu allen wichtigen Bereichen.</p>
            </div>

            <div class="row g-3 mt-2">
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/pflegearten/ambulante-pflege/' ) ); ?>" class="pf-topic">
                        <span class="pf-topic__icon"><i class="bi bi-house-heart"></i></span>
                        <div>
                            <h3 class="pf-topic__title">Ambulante Pflege</h3>
                            <p class="pf-topic__text">Pflege zuhause durch Dienste</p>
                        </div>
                        <i class="bi bi-chevron-right pf-topic__chev"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/pflegearten/stationaere-pflege/' ) ); ?>" class="pf-topic">
                        <span class="pf-topic__icon"><i class="bi bi-hospital"></i></span>
                        <div>
                            <h3 class="pf-topic__title">Stationäre Pflege</h3>
                            <p class="pf-topic__text">Pflegeheim &amp; vollstationär</p>
                        </div>
                        <i class="bi bi-chevron-right pf-topic__chev"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/ratgeber/demenz/' ) ); ?>" class="pf-topic">
                        <span class="pf-topic__icon"><i class="bi bi-brain"></i></span>
                        <div>
                            <h3 class="pf-topic__title">Demenz</h3>
                            <p class="pf-topic__text">Diagnose, Betreuung, Entlastung</p>
                        </div>
                        <i class="bi bi-chevron-right pf-topic__chev"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/ratgeber/angehoerige/' ) ); ?>" class="pf-topic">
                        <span class="pf-topic__icon"><i class="bi bi-people"></i></span>
                        <div>
                            <h3 class="pf-topic__title">Pflegende Angehörige</h3>
                            <p class="pf-topic__text">Unterstützung &amp; Entlastung</p>
                        </div>
                        <i class="bi bi-chevron-right pf-topic__chev"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/pflegeberufe/' ) ); ?>" class="pf-topic">
                        <span class="pf-topic__icon"><i class="bi bi-mortarboard"></i></span>
                        <div>
                            <h3 class="pf-topic__title">Pflegeberufe</h3>
                            <p class="pf-topic__text">Ausbildung, Gehalt, Karriere</p>
                        </div>
                        <i class="bi bi-chevron-right pf-topic__chev"></i>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo esc_url( home_url( '/ratgeber/recht-finanzen/' ) ); ?>" class="pf-topic">
                        <span class="pf-topic__icon"><i class="bi bi-bank"></i></span>
                        <div>
                            <h3 class="pf-topic__title">Recht &amp; Finanzen</h3>
                            <p class="pf-topic__text">Kosten, Zuschüsse, Vorsorge</p>
                        </div>
                        <i class="bi bi-chevron-right pf-topic__chev"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════════
         SEKTION 8 – NEWSLETTER
         ═══════════════════════════════════════════════════════════ -->
    <section class="pf-newsletter">
        <span class="pf-newsletter__blob"></span>
        <div class="container position-relative">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="pf-newsletter__eyebrow"><i class="bi bi-envelope-paper"></i> Newsletter </span>
                    <h2 class="pf-newsletter__title">Pflegenews &amp; Gesetzesänderungen</h2>
                    <p class="pf-newsletter__sub">
                        Bleiben Sie informiert. Kostenloser Newsletter, kein Spam. Aktuelle Pflegenachrichten und praktische Tipps direkt in Ihr Postfach.
                    </p>
                    <ul class="pf-newsletter__bullets">
                        <li><i class="bi bi-check-circle-fill"></i> Aktuelle Nachrichten aus der Pflegebranche</li>
                        <li><i class="bi bi-check-circle-fill"></i> Neue Pflegegelder & Leistungen</li>
                        <li><i class="bi bi-check-circle-fill"></i> Tipps für pflegende Angehörige</li>
                        <li><i class="bi bi-check-circle-fill"></i> Praxistipps für den Pflegealltag</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <form class="pf-newsletter__form" method="post" action="#">
                        <label for="pfNewsletterEmail" class="pf-newsletter__form-label">Ihre E-Mail-Adresse</label>
                        <div class="pf-newsletter__field">
                            <i class="bi bi-envelope"></i>
                            <input type="email" id="pfNewsletterEmail" name="email" required placeholder="ihre.email@beispiel.de" />
                            <button type="submit" class="pf-newsletter__btn">
                                <i class="bi bi-send-fill"></i>
                                <span>Kostenlos anmelden</span>
                            </button>
                        </div>
                        <p class="pf-newsletter__note">
                            <i class="bi bi-shield-lock"></i>
                            Mit der Anmeldung stimmen Sie unserer <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutzerklärung</a> zu.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- ── Schema.org JSON-LD ─────────────────────────────────── -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "pflegede.com",
      "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
      "description": "Pflege verstehen für Betroffene, Angehörige und Fachkräfte. Pflegegrade, Pflegeleistungen, Pflegearten und Pflegeberufe verständlich erklärt."
    },
    {
      "@type": "WebSite",
      "name": "pflegede.com",
      "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
      "inLanguage": "de-DE",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo esc_url( home_url( '/?s={search_term_string}' ) ); ?>",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Startseite",
          "item": "<?php echo esc_url( home_url( '/' ) ); ?>"
        }
      ]
    }
  ]
}
</script>

<!-- Placeholder rotation for hero search -->
<script>
(function(){
  var el = document.getElementById('pfHomeSearch');
  if (!el) return;
  var list;
  try { list = JSON.parse(el.getAttribute('data-placeholders') || '[]'); } catch(e){ return; }
  if (!list.length) return;
  var i = 0;
  setInterval(function(){
    if (document.activeElement === el || el.value) return;
    i = (i + 1) % list.length;
    el.setAttribute('placeholder', list[i]);
  }, 2800);
})();
</script>

<?php get_footer(); ?>

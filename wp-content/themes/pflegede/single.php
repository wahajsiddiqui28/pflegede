<?php
defined( 'ABSPATH' ) || exit;
get_header();

the_post();

$blog_url      = get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' );
$words         = str_word_count( wp_strip_all_tags( get_the_content() ) );
$read_min      = max( 1, (int) round( $words / 200 ) );
$cats          = get_the_category();
$tags          = get_the_tags();
$prev_post     = get_previous_post();
$next_post     = get_next_post();
$author_id     = get_the_author_meta( 'ID' );
$author_bio    = get_the_author_meta( 'description' );
$thumb_url     = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'full' ) : '';
?>

<!-- ── Reading Progress Bar ── -->
<div class="pf-post-progress" id="pfReadProgress" role="progressbar"
     aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-label="Lesefortschritt">
    <div class="pf-post-progress__bar" id="pfReadProgressBar"></div>
    <div class="pf-post-progress__glow" id="pfReadProgressGlow"></div>
</div>

<main role="main" class="pf-single-post">

    <!-- ═══════════════════════════════════════════════════════
         POST HERO — full-bleed with featured image
         ═══════════════════════════════════════════════════════ -->
    <section class="pf-post-hero">

        <div class="pf-post-hero__overlay" aria-hidden="true"></div>
        <span class="pf-post-hero__blob pf-post-hero__blob--1" aria-hidden="true"></span>
        <span class="pf-post-hero__blob pf-post-hero__blob--2" aria-hidden="true"></span>

        <div class="container pf-post-hero__inner">

            <!-- Breadcrumb -->
            <nav class="pf-post-hero__breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( $blog_url ); ?>" class="pf-post-hero__back">
                    <i class="bi bi-arrow-left" aria-hidden="true"></i>
                    Zum Ratgeber
                </a>
                <?php if ( $cats ) : ?>
                <span class="pf-post-hero__breadcrumb-sep" aria-hidden="true">/</span>
                <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>"
                   class="pf-post-hero__breadcrumb-cat">
                    <?php echo esc_html( $cats[0]->name ); ?>
                </a>
                <?php endif; ?>
            </nav>

            <div class="row">
                <div class="col-xl-8 col-lg-9 mx-auto text-center">

                    <!-- Category badges -->
                    <?php if ( $cats ) : ?>
                    <div class="pf-post-hero__cats">
                        <?php foreach ( array_slice( $cats, 0, 3 ) as $c ) : ?>
                        <a href="<?php echo esc_url( get_category_link( $c->term_id ) ); ?>"
                           class="pf-post-hero__cat-badge">
                            <?php echo esc_html( $c->name ); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Title -->
                    <h1 class="pf-post-hero__title"><?php the_title(); ?></h1>

                    <!-- Excerpt -->
                    <?php if ( has_excerpt() ) : ?>
                    <p class="pf-post-hero__sub"><?php echo wp_strip_all_tags( get_the_excerpt() ); ?></p>
                    <?php endif; ?>

                    <!-- Meta pills -->
                    <div class="pf-post-hero__meta">
                        <div class="pf-post-hero__meta-author">
                            <?php echo get_avatar( $author_id, 40, '', '', array( 'class' => 'pf-post-hero__avatar' ) ); ?>
                            <span class="pf-post-hero__author-name"><?php the_author(); ?></span>
                        </div>
                        <span class="pf-post-hero__meta-dot" aria-hidden="true"></span>
                        <span class="pf-post-hero__meta-chip">
                            <i class="bi bi-calendar3" aria-hidden="true"></i>
                            <?php echo esc_html( get_the_date( 'd. F Y' ) ); ?>
                        </span>
                        <span class="pf-post-hero__meta-dot" aria-hidden="true"></span>
                        <span class="pf-post-hero__meta-chip">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            <?php echo (int) $read_min; ?>&nbsp;Min. Lesezeit
                        </span>
                        <span class="pf-post-hero__meta-dot" aria-hidden="true"></span>
                        <span class="pf-post-hero__meta-chip">
                            <i class="bi bi-file-text" aria-hidden="true"></i>
                            <?php echo number_format_i18n( $words ); ?>&nbsp;Wörter
                        </span>
                    </div>

                </div>
            </div>

        </div><!-- /container -->

        <!-- Scroll cue -->
        <div class="pf-post-hero__scroll-cue" aria-hidden="true">
            <i class="bi bi-chevron-down"></i>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════════════════
         FEATURED IMAGE
         ═══════════════════════════════════════════════════════ -->
    <?php if ( $thumb_url ) : ?>
    <div class="container pf-post-cover-wrap">
        <div class="pf-post-cover">
            <?php the_post_thumbnail( 'full', array(
                'class' => 'pf-post-cover__img',
                'alt'   => esc_attr( get_the_title() ),
            ) ); ?>
            <div class="pf-post-cover__shine" aria-hidden="true"></div>
        </div>
    </div>
    <?php endif; ?>


    <!-- ═══════════════════════════════════════════════════════
         CONTENT + SIDEBAR
         ═══════════════════════════════════════════════════════ -->
    <div class="pf-post-body">
        <div class="container">
            <div class="row g-5 justify-content-center">

                <!-- ── Main Content ── -->
                <div class="col-lg-8">
                    <article class="pf-post-content" id="pfArticleContent">
                        <?php the_content(); ?>
                    </article>

                    <!-- Tags -->
                    <?php if ( $tags ) : ?>
                    <div class="pf-post-tags">
                        <span class="pf-post-tags__icon" aria-hidden="true">
                            <i class="bi bi-tags"></i>
                        </span>
                        <div class="pf-post-tags__list">
                            <?php foreach ( $tags as $tag ) : ?>
                            <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
                               class="pf-post-tag">
                                #<?php echo esc_html( $tag->name ); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Medical disclaimer -->
                    <div class="pf-post-disclaimer">
                        <div class="pf-post-disclaimer__icon" aria-hidden="true">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <p>
                            <strong>Hinweis:</strong> Dieser Artikel dient der allgemeinen Information und ersetzt keine individuelle Beratung durch Pflegefachkräfte oder Ärzte. Bei konkreten Fragen wenden Sie sich bitte an qualifizierte Fachleute.
                        </p>
                    </div>

                    <!-- Author Box -->
                    <div class="pf-post-author">
                        <div class="pf-post-author__top-bar" aria-hidden="true"></div>
                        <div class="pf-post-author__inner">
                            <div class="pf-post-author__avatar-wrap">
                                <?php echo get_avatar( $author_id, 88, '', '', array( 'class' => 'pf-post-author__img' ) ); ?>
                                <div class="pf-post-author__avatar-ring" aria-hidden="true"></div>
                            </div>
                            <div class="pf-post-author__body">
                                <span class="pf-post-author__label">
                                    <i class="bi bi-patch-check-fill" aria-hidden="true"></i>
                                    Über den Autor
                                </span>
                                <h4 class="pf-post-author__name"><?php the_author(); ?></h4>
                                <p class="pf-post-author__bio">
                                    <?php echo $author_bio
                                        ? esc_html( $author_bio )
                                        : 'Redakteur bei pflegede.com — spezialisiert auf Pflegethemen, Gesundheitsrecht und Ratgeber für Angehörige und Betroffene in Deutschland.'; ?>
                                </p>
                                <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>"
                                   class="pf-post-author__link">
                                    Alle Beiträge ansehen
                                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Prev / Next Navigation -->
                    <?php if ( $prev_post || $next_post ) : ?>
                    <nav class="pf-post-nav" aria-label="Artikel-Navigation">
                        <?php if ( $prev_post ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>"
                           class="pf-post-nav__item pf-post-nav__item--prev">
                            <span class="pf-post-nav__dir">
                                <i class="bi bi-arrow-left" aria-hidden="true"></i>
                                Vorheriger Artikel
                            </span>
                            <span class="pf-post-nav__title">
                                <?php echo esc_html( wp_trim_words( $prev_post->post_title, 8, '…' ) ); ?>
                            </span>
                        </a>
                        <?php else : ?>
                        <div></div>
                        <?php endif; ?>
                        <?php if ( $next_post ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>"
                           class="pf-post-nav__item pf-post-nav__item--next">
                            <span class="pf-post-nav__dir">
                                Nächster Artikel
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </span>
                            <span class="pf-post-nav__title">
                                <?php echo esc_html( wp_trim_words( $next_post->post_title, 8, '…' ) ); ?>
                            </span>
                        </a>
                        <?php endif; ?>
                    </nav>
                    <?php endif; ?>

                </div><!-- /col-lg-8 -->


                <!-- ── Sidebar ── -->
                <div class="col-lg-4">
                    <aside class="pf-post-sidebar" id="pfPostSidebar" aria-label="Artikel-Seitenleiste">

                        <!-- Reading Progress Widget -->
                        <div class="pf-post-sidebar-progress">
                            <div class="pf-post-sidebar-progress__head">
                                <i class="bi bi-book" aria-hidden="true"></i>
                                <span>Lesefortschritt</span>
                                <span class="pf-post-sidebar-progress__pct" id="pfSidebarPct">0%</span>
                            </div>
                            <div class="pf-post-sidebar-progress__track">
                                <div class="pf-post-sidebar-progress__fill" id="pfSidebarFill"></div>
                            </div>
                            <span class="pf-post-sidebar-progress__label">
                                <i class="bi bi-clock" aria-hidden="true"></i>
                                <?php echo (int) $read_min; ?>&nbsp;Min. Lesezeit
                            </span>
                        </div>

                        <!-- Table of Contents -->
                        <div class="pf-post-toc" id="pfTOC">
                            <div class="pf-post-toc__head">
                                <i class="bi bi-list-nested" aria-hidden="true"></i>
                                <span>Inhaltsverzeichnis</span>
                                <button class="pf-post-toc__toggle" id="pfTOCToggle" aria-expanded="true" aria-controls="pfTOCBody">
                                    <i class="bi bi-chevron-up" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="pf-post-toc__body" id="pfTOCBody">
                                <nav class="pf-post-toc__nav" id="pfTOCNav" aria-label="Inhaltsverzeichnis">
                                    <p class="pf-post-toc__placeholder">Wird geladen…</p>
                                </nav>
                            </div>
                        </div>

                        <!-- Share -->
                        <div class="pf-post-share">
                            <div class="pf-post-share__head">
                                <i class="bi bi-share" aria-hidden="true"></i>
                                Artikel teilen
                            </div>
                            <div class="pf-post-share__btns">
                                <button class="pf-post-share__btn pf-post-share__btn--copy" id="pfShareCopy">
                                    <i class="bi bi-link-45deg" aria-hidden="true"></i>
                                    <span>Link kopieren</span>
                                </button>
                                <a href="https://wa.me/?text=<?php echo rawurlencode( get_the_title() . ' — ' . get_permalink() ); ?>"
                                   target="_blank" rel="noopener noreferrer"
                                   class="pf-post-share__btn pf-post-share__btn--wa">
                                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                                    <span>WhatsApp</span>
                                </a>
                                <a href="mailto:?subject=<?php echo rawurlencode( get_the_title() ); ?>&body=<?php echo rawurlencode( get_the_title() . "\n\n" . get_permalink() ); ?>"
                                   class="pf-post-share__btn pf-post-share__btn--email">
                                    <i class="bi bi-envelope" aria-hidden="true"></i>
                                    <span>Per E-Mail</span>
                                </a>
                            </div>
                        </div>

                        <!-- Back link -->
                        <a href="<?php echo esc_url( $blog_url ); ?>" class="pf-post-sidebar__back">
                            <i class="bi bi-grid" aria-hidden="true"></i>
                            Alle Artikel
                        </a>

                    </aside>
                </div><!-- /col-lg-4 -->

            </div>
        </div>
    </div>


    <!-- ═══════════════════════════════════════════════════════
         RELATED POSTS
         ═══════════════════════════════════════════════════════ -->
    <?php
    $cat_ids = $cats ? array_map( function ( $c ) { return $c->term_id; }, $cats ) : array();
    $related = new WP_Query( array(
        'posts_per_page'      => 3,
        'post__not_in'        => array( get_the_ID() ),
        'category__in'        => $cat_ids,
        'ignore_sticky_posts' => 1,
        'orderby'             => 'rand',
    ) );
    if ( $related->have_posts() ) :
    ?>
    <section class="pf-post-related pf-section">
        <div class="container">
            <div class="pf-section__head pf-section__head--split">
                <div>
                    <span class="pf-eyebrow">
                        <i class="bi bi-journal-text" aria-hidden="true"></i>
                        Passende Artikel
                    </span>
                    <h2 class="pf-section__title">Das könnte Sie auch interessieren</h2>
                </div>
                <a href="<?php echo esc_url( $blog_url ); ?>" class="pf-section__link">
                    Alle Artikel
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

            <div class="row g-4">
                <?php while ( $related->have_posts() ) : $related->the_post(); ?>
                <div class="col-md-4 d-flex">
                    <?php get_template_part( 'template-parts/blog', 'card' ); ?>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

</main>

<!-- ── Back to Top ── -->
<button class="pf-back-top" id="pfBackTop" aria-label="Nach oben scrollen">
    <i class="bi bi-arrow-up" aria-hidden="true"></i>
</button>


<!-- ═══════════════════════════════════════════════════════
     SINGLE POST SCRIPTS
     ═══════════════════════════════════════════════════════ -->
<script>
(function () {
  'use strict';

  var progressBar   = document.getElementById('pfReadProgressBar');
  var progressGlow  = document.getElementById('pfReadProgressGlow');
  var progressWrap  = document.getElementById('pfReadProgress');
  var article       = document.getElementById('pfArticleContent');
  var sidebarFill   = document.getElementById('pfSidebarFill');
  var sidebarPct    = document.getElementById('pfSidebarPct');
  var backTop       = document.getElementById('pfBackTop');

  /* ── Reading Progress ──────────────────────────────────── */
  function updateProgress() {
    if (!progressBar || !article) return;
    var scrollTop = window.scrollY || document.documentElement.scrollTop;
    var artTop    = article.getBoundingClientRect().top + scrollTop;
    var artH      = article.offsetHeight;
    var winH      = window.innerHeight;
    var pct       = Math.min(100, Math.max(0,
      ((scrollTop - artTop + winH * 0.3) / artH) * 100
    ));
    var w = pct.toFixed(1) + '%';
    if (progressBar)  progressBar.style.width  = w;
    if (progressGlow) progressGlow.style.left  = w;
    if (sidebarFill)  sidebarFill.style.width  = w;
    if (sidebarPct)   sidebarPct.textContent   = Math.round(pct) + '%';
    if (progressWrap) progressWrap.setAttribute('aria-valuenow', Math.round(pct));
    /* Back-to-top visibility */
    if (backTop) backTop.classList.toggle('pf-back-top--visible', scrollTop > 400);
  }
  window.addEventListener('scroll', updateProgress, { passive: true });
  updateProgress();

  /* ── TOC Builder ───────────────────────────────────────── */
  var tocWrap   = document.getElementById('pfTOC');
  var tocNav    = document.getElementById('pfTOCNav');
  var tocToggle = document.getElementById('pfTOCToggle');
  var tocBody   = document.getElementById('pfTOCBody');

  if (tocNav && article) {
    var headings = article.querySelectorAll('h2, h3');

    if (headings.length < 2) {
      if (tocWrap) tocWrap.style.display = 'none';
    } else {
      var html = '<ol class="pf-toc-list">';
      var idx = 0; var h2Idx = 0;
      headings.forEach(function (h) {
        if (!h.id) { h.id = 'pf-toc-' + (++idx); }
        var isH2 = h.tagName === 'H2';
        if (isH2) h2Idx++;
        html += '<li class="pf-toc-item' + (!isH2 ? ' pf-toc-item--sub' : '') + '">'
             + '<a href="#' + h.id + '" class="pf-toc-link">'
             + (isH2 ? '<span class="pf-toc-num">' + h2Idx + '</span>' : '')
             + '<span class="pf-toc-text">' + h.textContent + '</span>'
             + '</a></li>';
      });
      html += '</ol>';
      tocNav.innerHTML = html;

      var tocLinks = tocNav.querySelectorAll('.pf-toc-link');

      function setActiveTOC() {
        var scrollY  = window.scrollY + 120;
        var activeId = null;
        headings.forEach(function (h) {
          if (h.getBoundingClientRect().top + window.scrollY <= scrollY) activeId = h.id;
        });
        tocLinks.forEach(function (a) {
          a.classList.toggle('pf-toc-link--active',
            !!activeId && a.getAttribute('href') === '#' + activeId);
        });
      }
      window.addEventListener('scroll', setActiveTOC, { passive: true });
      setActiveTOC();

      tocLinks.forEach(function (a) {
        a.addEventListener('click', function (e) {
          e.preventDefault();
          var t = document.getElementById(a.getAttribute('href').slice(1));
          if (t) window.scrollTo({ top: t.getBoundingClientRect().top + window.scrollY - 96, behavior: 'smooth' });
        });
      });
    }
  }

  /* ── TOC Toggle ────────────────────────────────────────── */
  if (tocToggle && tocBody) {
    tocToggle.addEventListener('click', function () {
      var collapsed = tocBody.classList.toggle('pf-post-toc__body--collapsed');
      tocToggle.setAttribute('aria-expanded', collapsed ? 'false' : 'true');
      var icon = tocToggle.querySelector('.bi');
      if (icon) icon.className = collapsed ? 'bi bi-chevron-down' : 'bi bi-chevron-up';
    });
  }

  /* ── Sticky Sidebar ────────────────────────────────────── */
  var sidebar = document.getElementById('pfPostSidebar');
  if (sidebar && window.innerWidth >= 992) {
    sidebar.style.position  = 'sticky';
    sidebar.style.top       = '90px';
    sidebar.style.maxHeight = 'calc(100vh - 110px)';
    sidebar.style.overflowY = 'auto';
  }

  /* ── Share: Copy Link ──────────────────────────────────── */
  var copyBtn = document.getElementById('pfShareCopy');
  if (copyBtn && navigator.clipboard) {
    copyBtn.addEventListener('click', function () {
      navigator.clipboard.writeText(window.location.href).then(function () {
        var span = copyBtn.querySelector('span');
        if (!span) return;
        var orig = span.textContent;
        span.textContent = '✓ Kopiert!';
        copyBtn.classList.add('pf-post-share__btn--success');
        setTimeout(function () {
          span.textContent = orig;
          copyBtn.classList.remove('pf-post-share__btn--success');
        }, 2500);
      });
    });
  } else if (copyBtn) { copyBtn.style.display = 'none'; }

  /* ── Back to Top ───────────────────────────────────────── */
  if (backTop) {
    backTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ── Hero scroll cue fade ──────────────────────────────── */
  var scrollCue = document.querySelector('.pf-post-hero__scroll-cue');
  if (scrollCue) {
    window.addEventListener('scroll', function () {
      scrollCue.style.opacity = window.scrollY > 80 ? '0' : '1';
    }, { passive: true });
  }

})();
</script>

<?php get_footer(); ?>

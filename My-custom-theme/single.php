<?php
/*
 * Template Name: Finlanza Single Post
 * Description: Individual post template for Finlanza Insights articles
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php the_post(); ?>
<title><?php the_title(); ?> — Finlanza Insights</title>
<meta name="description" content="<?php echo esc_attr( wp_trim_words( get_the_excerpt(), 25, '…' ) ); ?>">
<link rel="canonical" href="<?php the_permalink(); ?>">
<meta property="og:title" content="<?php the_title_attribute(); ?> — Finlanza Insights">
<meta property="og:description" content="<?php echo esc_attr( wp_trim_words( get_the_excerpt(), 25, '…' ) ); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Finlanza">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php the_title_attribute(); ?> — Finlanza Insights">
<meta name="twitter:description" content="<?php echo esc_attr( wp_trim_words( get_the_excerpt(), 25, '…' ) ); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "<?php echo esc_js( get_the_title() ); ?>",
  "datePublished": "<?php echo get_the_date('c'); ?>",
  "dateModified": "<?php echo get_the_modified_date('c'); ?>",
  "author": {
    "@type": "Person",
    "name": "<?php echo esc_js( get_the_author() ); ?>"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Finlanza Limited",
    "url": "<?php echo home_url('/'); ?>"
  },
  "url": "<?php the_permalink(); ?>"
}
</script>
<?php rewind_posts(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

<style>
  :root {
    --navy:         #0D1B2A;
    --navy-mid:     #152232;
    --navy-light:   #1E3045;
    --gold:         #C8971C;
    --gold-light:   #E8B84B;
    --white:        #FFFFFF;
    --text:         #E8E2D4;
    --text-muted:   #8A9BAD;
    --border:       rgba(200,151,28,0.2);
    --border-light: rgba(255,255,255,0.08);
    --article-bg:   #F8F6F1;
  }

  :focus-visible { outline: 2px solid var(--gold); outline-offset: 2px; }
  @media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { transition: none !important; animation: none !important; }
  }
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body {
    background: var(--navy);
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    font-size: 17px;
    line-height: 1.65;
    overflow-x: hidden;
  }
  body::before {
    content: '';
    position: fixed; inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
    opacity: 0.025; pointer-events: none; z-index: 9999;
  }

  /* ── NAV ── */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    padding: 0 60px; height: 72px;
    display: flex; align-items: center; justify-content: space-between;
    background: rgba(13,27,42,0.95); backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
  }
  .nav-logo { display: flex; align-items: center; text-decoration: none; }
  .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
  .nav-links a {
    text-decoration: none; font-size: 13px; font-weight: 400;
    letter-spacing: 1.5px; text-transform: uppercase;
    color: var(--text-muted); transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--gold); }
  .nav-links a.active { color: var(--white); }
  .nav-cta { background: var(--gold); color: var(--navy) !important; padding: 10px 24px !important; font-weight: 500 !important; letter-spacing: 1px !important; transition: background 0.2s !important; }
  .nav-cta:hover { background: var(--gold-light) !important; }
  .nav-gold { color: var(--gold) !important; }
  .nav-hamburger { display:none; background:none; border:1px solid var(--border); color:var(--text); padding:6px 12px; cursor:pointer; font-size:17px; }
  @media(max-width:900px){
    nav { padding: 0 24px; }
    .nav-links { display:none; flex-direction:column; position:absolute; top:72px; left:0; right:0; background:rgba(13,27,42,0.98); border-bottom:1px solid var(--border); padding:20px 24px; gap:16px; }
    .nav-links.mob-open { display:flex; }
    .nav-hamburger { display:block; }
  }

  /* ── LAYOUT ── */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 60px; }
  @media(max-width:700px){ .container { padding: 0 24px; } }
  .gold { color: var(--gold); }

  /* ── POST HERO ── */
  .post-hero {
    padding: 120px 0 0;
    background: var(--navy);
    border-bottom: 1px solid var(--border);
    position: relative; overflow: hidden;
  }
  .post-hero-bg {
    position: absolute; inset: 0;
    background: radial-gradient(ellipse 70% 60% at 80% 50%, rgba(200,151,28,0.05) 0%, transparent 60%);
    pointer-events: none;
  }
  .post-hero-inner {
    position: relative; z-index: 2;
    max-width: 820px;
    padding: 0 60px 64px;
  }
  @media(max-width:700px){ .post-hero-inner { padding: 0 24px 48px; } }

  .post-breadcrumb {
    display: flex; align-items: center; gap: 10px; margin-bottom: 32px;
    font-size: 12px; letter-spacing: 1px; text-transform: uppercase;
  }
  .post-breadcrumb a { color: var(--text-muted); text-decoration: none; transition: color 0.2s; }
  .post-breadcrumb a:hover { color: var(--gold); }
  .post-breadcrumb span { color: var(--border); }
  .post-breadcrumb .current { color: var(--gold); }

  .post-category-tag {
    display: inline-block;
    background: rgba(200,151,28,0.12); border: 1px solid var(--border);
    color: var(--gold); font-size: 10px; font-weight: 600;
    letter-spacing: 2px; text-transform: uppercase;
    padding: 5px 14px; margin-bottom: 24px; text-decoration: none;
  }

  .post-headline {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(28px, 4vw, 48px);
    line-height: 1.2; color: var(--white);
    margin-bottom: 24px; font-weight: 400;
  }

  .post-meta-row {
    display: flex; align-items: center; gap: 24px; flex-wrap: wrap;
    padding-top: 24px; border-top: 1px solid var(--border-light);
  }
  .post-meta-item { display: flex; flex-direction: column; gap: 3px; }
  .post-meta-label { font-size: 9px; letter-spacing: 2px; text-transform: uppercase; color: var(--gold); }
  .post-meta-value { font-size: 13px; color: var(--text-muted); }
  .post-read-time { margin-left: auto; }
  @media(max-width:600px){ .post-read-time { margin-left: 0; } }

  /* ── ARTICLE BODY ── */
  .article-wrap { background: var(--article-bg); padding: 72px 0 80px; }
  .article-body { max-width: 820px; padding: 0 60px; color: #2A3A4A; }
  @media(max-width:700px){ .article-body { padding: 0 24px; } }

  .article-body p { font-size: 17px; line-height: 1.85; color: #2A3A4A; margin-bottom: 28px; }
  .article-body h1,
  .article-body h2 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(26px, 3vw, 38px); letter-spacing: 1px;
    color: var(--navy); margin: 52px 0 20px; line-height: 1.05;
  }
  .article-body h3 {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(20px, 2.5vw, 26px); color: var(--navy);
    margin: 40px 0 16px; line-height: 1.25; font-weight: 400;
  }
  .article-body h4 {
    font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600;
    letter-spacing: 2px; text-transform: uppercase; color: var(--gold);
    margin: 32px 0 12px;
  }
  .article-body h5, .article-body h6 {
    font-size: 15px; font-weight: 600; color: #1A2530; margin: 24px 0 8px;
  }
  .article-body ul, .article-body ol {
    padding-left: 0; list-style: none; margin-bottom: 28px;
    display: flex; flex-direction: column; gap: 12px;
  }
  .article-body ul li {
    display: flex; gap: 14px; font-size: 16px; line-height: 1.7; color: #2A3A4A;
    padding-bottom: 12px; border-bottom: 1px solid rgba(27,58,107,0.07);
  }
  .article-body ul li::before { content: '→'; color: var(--gold); flex-shrink: 0; margin-top: 1px; }
  .article-body ol { counter-reset: article-counter; }
  .article-body ol li {
    display: flex; gap: 14px; font-size: 16px; line-height: 1.7; color: #2A3A4A;
    padding-bottom: 12px; border-bottom: 1px solid rgba(27,58,107,0.07);
    counter-increment: article-counter;
  }
  .article-body ol li::before {
    content: counter(article-counter, decimal-leading-zero);
    font-family: 'Bebas Neue', sans-serif; font-size: 22px;
    color: var(--gold); opacity: 0.5; flex-shrink: 0; line-height: 1.3; min-width: 28px;
  }
  .article-body blockquote {
    border-left: 3px solid var(--gold); background: rgba(200,151,28,0.04);
    padding: 24px 32px; margin: 36px 0;
    font-family: 'DM Serif Display', serif; font-size: 20px; font-style: italic;
    line-height: 1.6; color: #1A2530;
  }
  .article-body blockquote p { font-family: inherit; font-size: inherit; font-style: inherit; color: inherit; margin-bottom: 0; }
  .article-body a { color: var(--gold); text-decoration: none; border-bottom: 1px solid rgba(200,151,28,0.3); transition: border-color 0.2s; }
  .article-body a:hover { border-bottom-color: var(--gold); }
  .article-body strong, .article-body b { font-weight: 600; color: #0D1B2A; }
  .article-body em, .article-body i { font-style: italic; }
  .article-body code {
    background: rgba(27,58,107,0.08); border: 1px solid rgba(27,58,107,0.12);
    padding: 2px 7px; font-family: 'Courier New', monospace; font-size: 14px; color: #1A3050;
  }
  .article-body pre {
    background: #0D1B2A; color: #E8E2D4; padding: 28px 32px;
    overflow-x: auto; margin-bottom: 28px;
    font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.7;
    border-left: 3px solid var(--gold);
  }
  .article-body pre code { background: none; border: none; padding: 0; color: inherit; }
  .article-body hr { border: none; border-top: 1px solid rgba(27,58,107,0.12); margin: 48px 0; }
  .article-body img { max-width: 100%; height: auto; display: block; margin: 36px 0; border: 1px solid rgba(27,58,107,0.1); }
  .article-body table { width: 100%; border-collapse: collapse; margin-bottom: 28px; font-size: 15px; }
  .article-body th {
    background: var(--navy); color: var(--gold); font-size: 10px;
    letter-spacing: 2px; text-transform: uppercase; padding: 12px 16px;
    text-align: left; border: 1px solid rgba(255,255,255,0.06);
  }
  .article-body td {
    padding: 12px 16px; border: 1px solid rgba(27,58,107,0.1);
    color: #2A3A4A; vertical-align: top;
  }
  .article-body tr:nth-child(even) td { background: rgba(27,58,107,0.03); }

  /* ── POST FOOTER ── */
  .post-footer { background: var(--article-bg); border-top: 1px solid rgba(27,58,107,0.1); padding: 48px 0 64px; }
  .post-footer-inner { max-width: 820px; padding: 0 60px; }
  @media(max-width:700px){ .post-footer-inner { padding: 0 24px; } }

  .post-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 40px; }
  .post-tag {
    background: rgba(200,151,28,0.08); border: 1px solid rgba(200,151,28,0.2);
    color: var(--gold); font-size: 11px; letter-spacing: 1px; text-transform: uppercase;
    padding: 5px 12px; text-decoration: none; transition: background 0.2s;
  }
  .post-tag:hover { background: rgba(200,151,28,0.16); }

  .post-nav {
    display: grid; grid-template-columns: 1fr 1fr; gap: 24px;
    padding-top: 32px; border-top: 1px solid rgba(27,58,107,0.1);
  }
  @media(max-width:600px){ .post-nav { grid-template-columns: 1fr; } }
  .post-nav-item {
    display: flex; flex-direction: column; gap: 8px; padding: 24px;
    background: #fff; border: 1px solid rgba(27,58,107,0.1);
    text-decoration: none; transition: border-color 0.2s, background 0.2s;
  }
  .post-nav-item:hover { border-color: var(--gold); background: rgba(200,151,28,0.02); }
  .post-nav-item.next { text-align: right; }
  .post-nav-direction { font-size: 9px; letter-spacing: 2px; text-transform: uppercase; color: var(--gold); }
  .post-nav-title { font-family: 'DM Serif Display', serif; font-size: 16px; line-height: 1.3; color: #1A2530; font-weight: 400; }

  /* ── CTA BAND ── */
  .post-cta { background: var(--navy); padding: 72px 0; border-top: 1px solid var(--border); text-align: center; }
  .post-cta-inner { max-width: 620px; margin: 0 auto; padding: 0 24px; }
  .post-cta-eyebrow { font-size: 10px; letter-spacing: 3px; text-transform: uppercase; color: var(--gold); margin-bottom: 20px; }
  .post-cta-headline {
    font-family: 'DM Serif Display', serif; font-size: clamp(24px, 3vw, 34px);
    color: var(--white); line-height: 1.25; margin-bottom: 16px; font-weight: 400;
  }
  .post-cta-sub { font-size: 15px; color: var(--text-muted); line-height: 1.7; margin-bottom: 32px; }
  .btn-gold {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--gold); color: var(--navy); padding: 16px 36px;
    font-size: 13px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase;
    text-decoration: none; border: none; cursor: pointer; transition: all 0.2s;
  }
  .btn-gold:hover { background: var(--gold-light); transform: translateY(-1px); }
  .btn-ghost-white {
    display: inline-flex; align-items: center; gap: 10px;
    background: transparent; color: var(--text-muted); padding: 16px 36px;
    font-size: 13px; font-weight: 500; letter-spacing: 2px; text-transform: uppercase;
    text-decoration: none; border: 1px solid var(--border-light); transition: all 0.2s;
  }
  .btn-ghost-white:hover { border-color: var(--gold); color: var(--gold); }

  /* ── FOOTER ── */
  footer { background: var(--navy-mid); border-top: 1px solid var(--border); padding: 60px 0 40px; }
  .footer-bottom { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; }
  .footer-copy { font-size: 13px; color: var(--text-muted); }
  .footer-legal { display: flex; gap: 24px; }
  .footer-legal a { font-size: 13px; color: var(--text-muted); text-decoration: none; }
  .footer-legal a:hover { color: var(--white); }
</style>

<?php wp_head(); ?>
</head>
<body>

<nav id="main-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <img src="<?php echo get_theme_file_uri('images/finlanza-logo.png'); ?>" alt="Finlanza" style="height:36px;width:auto;display:block;">
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="<?php echo home_url('/'); ?>"
       <?php if(is_front_page()) echo 'class="active" aria-current="page"'; ?>>Home</a></li>
    <li><a href="<?php echo home_url('/services/'); ?>"
       <?php if(is_page('services')) echo 'class="active" aria-current="page"'; ?>>Services</a></li>
    <li><a href="<?php echo home_url('/products/'); ?>"
       <?php if(is_page('products')) echo 'class="active" aria-current="page"'; ?>>Products</a></li>
    <li><a href="<?php echo home_url('/dream/'); ?>"
       <?php if(is_page('dream')) echo 'class="active" aria-current="page"'; ?>>DREAM™</a></li>
    <li><a href="<?php echo home_url('/insights/'); ?>"
       class="active" aria-current="page">Insights</a></li>
    <li><a href="<?php echo home_url('/scorecard/'); ?>"
       class="nav-gold">Free Scorecard</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>"
       class="nav-cta">Book a Review</a></li>
  </ul>
  <button class="nav-hamburger"
    onclick="document.getElementById('navLinks').classList.toggle('mob-open');
             this.setAttribute('aria-expanded',
             this.getAttribute('aria-expanded')==='false'?'true':'false');"
    aria-label="Toggle navigation menu"
    aria-expanded="false">☰</button>
</nav>

<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

    $cats       = get_the_category();
    $cat_name   = $cats ? esc_html( $cats[0]->name ) : 'Insights';
    $cat_link   = $cats ? get_category_link( $cats[0]->term_id ) : home_url('/insights/');
    $word_count = str_word_count( strip_tags( get_the_content() ) );
    $read_time  = max( 1, ceil( $word_count / 200 ) );
    $tags       = get_the_tags();
    $prev_post  = get_previous_post();
    $next_post  = get_next_post();
  ?>

  <!-- POST HERO -->
  <header class="post-hero">
    <div class="post-hero-bg" aria-hidden="true"></div>
    <div class="post-hero-inner">

      <nav class="post-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo home_url('/'); ?>">Home</a>
        <span aria-hidden="true">›</span>
        <a href="<?php echo home_url('/insights/'); ?>">Insights</a>
        <span aria-hidden="true">›</span>
        <span class="current"><?php echo $cat_name; ?></span>
      </nav>

      <a href="<?php echo esc_url( $cat_link ); ?>" class="post-category-tag"><?php echo $cat_name; ?></a>

      <h1 class="post-headline"><?php the_title(); ?></h1>

      <div class="post-meta-row">
        <div class="post-meta-item">
          <span class="post-meta-label">Author</span>
          <span class="post-meta-value"><?php the_author(); ?></span>
        </div>
        <div class="post-meta-item">
          <span class="post-meta-label">Published</span>
          <span class="post-meta-value"><?php echo get_the_date('j F Y'); ?></span>
        </div>
        <?php if ( get_the_modified_date('U') > ( get_the_date('U') + 86400 ) ) : ?>
        <div class="post-meta-item">
          <span class="post-meta-label">Updated</span>
          <span class="post-meta-value"><?php echo get_the_modified_date('j F Y'); ?></span>
        </div>
        <?php endif; ?>
        <div class="post-meta-item post-read-time">
          <span class="post-meta-label">Read Time</span>
          <span class="post-meta-value"><?php echo $read_time; ?> min read</span>
        </div>
      </div>

    </div>
  </header>

  <!-- ARTICLE BODY -->
  <div class="article-wrap">
    <article class="article-body" itemscope itemtype="https://schema.org/Article">
      <?php the_content(); ?>
    </article>
  </div>

  <!-- POST FOOTER: tags + prev/next navigation -->
  <div class="post-footer">
    <div class="post-footer-inner">

      <?php if ( $tags ) : ?>
      <div class="post-tags" aria-label="Post tags">
        <?php foreach ( $tags as $tag ) : ?>
          <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
             class="post-tag"><?php echo esc_html( $tag->name ); ?></a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <nav class="post-nav" aria-label="Post navigation">
        <?php if ( $prev_post ) : ?>
          <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="post-nav-item prev">
            <span class="post-nav-direction">← Previous Article</span>
            <span class="post-nav-title"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></span>
          </a>
        <?php else : ?>
          <div></div>
        <?php endif; ?>

        <?php if ( $next_post ) : ?>
          <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="post-nav-item next">
            <span class="post-nav-direction">Next Article →</span>
            <span class="post-nav-title"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></span>
          </a>
        <?php endif; ?>
      </nav>

    </div>
  </div>

  <?php endwhile; endif; ?>

  <!-- CTA BAND -->
  <section class="post-cta">
    <div class="post-cta-inner">
      <div class="post-cta-eyebrow">Take the Next Step</div>
      <h2 class="post-cta-headline">Find out exactly where your business systems are holding you back.</h2>
      <p class="post-cta-sub">Take the free 18-question Finlanza Business Systems Health Check. Instant score across 6 operational dimensions — with a personalised diagnosis. Takes 5 minutes.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo home_url('/scorecard/'); ?>" class="btn-gold">Take the Free Scorecard →</a>
        <a href="<?php echo home_url('/insights/'); ?>" class="btn-ghost-white">← Back to Insights</a>
      </div>
    </div>
  </section>

</main>

<footer role="contentinfo">
  <div class="container">
    <div style="text-align:center;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div style="font-family:'Bebas Neue',sans-serif;font-size:clamp(22px,3vw,38px);color:var(--white);margin-bottom:8px;"><span class="gold">Scalability</span> is not an accident.<br>It is engineered.</div>
      <div style="font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-top:12px;">Zoho Authorized Partner · Enterprise Implementation Specialists · Africa</div>
    </div>
    <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:40px;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div>
        <div style="font-family:'Bebas Neue',sans-serif;font-size:22px;letter-spacing:2px;color:var(--white);margin-bottom:4px;">FINLANZA</div>
        <div style="font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-bottom:12px;">Business Systems Architecture Firm</div>
        <p style="color:var(--text-muted);font-size:13px;line-height:1.7;">We engineer scalable business systems for multi-location, multi-entity organizations across Africa — built on the DREAM™ Transformation Framework.</p>
      </div>
      <div>
        <div style="font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-bottom:14px;">Services</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Diagnose</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Transform</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Managed</a>
          <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Book a Scoping Call</a>
        </div>
      </div>
      <div>
        <div style="font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-bottom:14px;">Company</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/dream/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">DREAM™ Framework</a>
          <a href="<?php echo home_url('/scorecard/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Free Scorecard</a>
          <a href="<?php echo home_url('/insights/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Insights</a>
          <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Contact</a>
        </div>
      </div>
      <div>
        <div style="font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-bottom:14px;">Contact</div>
        <div style="display:flex;flex-direction:column;gap:9px;font-size:13px;">
          <a href="mailto:ask@finlanza.com" style="color:var(--text-muted);text-decoration:none;">ask@finlanza.com</a>
          <a href="tel:+254724463536" style="color:var(--text-muted);text-decoration:none;">+254 724 463 536</a>
          <span style="color:var(--text-muted);">Nairobi, Kenya</span>
        </div>
      </div>
    </div>
    <div class="footer-bottom" style="padding-top:24px;">
      <div class="footer-copy">© <?php echo date('Y'); ?> Finlanza Limited. All rights reserved. DREAM™ is a proprietary transformation framework.</div>
      <div class="footer-legal">
        <a href="<?php echo home_url('/privacy/'); ?>">Privacy</a>
        <a href="<?php echo home_url('/terms/'); ?>">Terms</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
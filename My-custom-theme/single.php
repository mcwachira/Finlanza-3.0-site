<?php
/*
 * single.php — Finlanza Single Post Template
 * Displays individual blog/insights posts in the Finlanza brand style
 */

// Get post data for SEO meta tags
$post_title    = get_the_title();
$post_excerpt  = get_the_excerpt();
$post_url      = get_permalink();
$post_date     = get_the_date( 'Y-m-d' );
$post_date_display = get_the_date( 'F j, Y' );
$cats          = get_the_category();
$cat_name      = $cats ? esc_html( $cats[0]->name ) : 'Insights';
$author_name   = get_the_author();
$thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
$og_image      = $thumbnail_url ? $thumbnail_url : 'https://finlanza.com/images/finlanza-insights-og.jpg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- SEO: Dynamic title from post -->
<title><?php echo esc_html( $post_title ); ?> | Finlanza Insights</title>
<meta name="description" content="<?php echo esc_attr( wp_trim_words( $post_excerpt, 30 ) ); ?>">
<link rel="canonical" href="<?php echo esc_url( $post_url ); ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?php echo esc_attr( $post_title ); ?>">
<meta property="og:description" content="<?php echo esc_attr( wp_trim_words( $post_excerpt, 30 ) ); ?>">
<meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
<meta property="og:url" content="<?php echo esc_url( $post_url ); ?>">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Finlanza">
<meta property="article:published_time" content="<?php echo esc_attr( $post_date ); ?>">
<meta property="article:author" content="<?php echo esc_attr( $author_name ); ?>">
<meta property="article:section" content="<?php echo esc_attr( $cat_name ); ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( $post_title ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( wp_trim_words( $post_excerpt, 30 ) ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $og_image ); ?>">

<!-- Structured Data: BlogPosting -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "<?php echo esc_js( $post_title ); ?>",
  "description": "<?php echo esc_js( wp_trim_words( $post_excerpt, 30 ) ); ?>",
  "datePublished": "<?php echo esc_attr( $post_date ); ?>",
  "dateModified": "<?php echo esc_attr( get_the_modified_date( 'Y-m-d' ) ); ?>",
  "author": {
    "@type": "Organization",
    "name": "Finlanza Limited"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Finlanza Limited",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Nairobi",
      "addressCountry": "Kenya"
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo esc_js( $post_url ); ?>"
  }
  <?php if ( $thumbnail_url ) : ?>
  ,"image": "<?php echo esc_js( $thumbnail_url ); ?>"
  <?php endif; ?>
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

<?php wp_head(); ?>

<style>
  :root {
    --navy: #0D1B2A;
    --navy-mid: #152232;
    --navy-light: #1E3045;
    --gold: #C8971C;
    --gold-light: #E8B84B;
    --white: #FFFFFF;
    --text: #E8E2D4;
    --text-muted: #8A9BAD;
    --border: rgba(200,151,28,0.2);
    --border-light: rgba(255,255,255,0.08);
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

  /* Noise overlay */
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
    opacity: 0.025;
    pointer-events: none;
    z-index: 9999;
  }

  /* ── NAV ── */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    padding: 0 60px;
    height: 72px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(13,27,42,0.92);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
    transition: all 0.3s ease;
  }
  .nav-logo { display: flex; align-items: center; text-decoration: none; }
  .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
  .nav-links a {
    text-decoration: none;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--text-muted);
    transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--gold); }
  .nav-links a.active { color: var(--white); }
  .nav-cta {
    background: var(--gold);
    color: var(--navy) !important;
    padding: 10px 24px !important;
    font-weight: 500 !important;
    letter-spacing: 1px !important;
    transition: background 0.2s !important;
  }
  .nav-cta:hover { background: var(--gold-light) !important; }
  .nav-gold { color: var(--gold) !important; }
  .nav-hamburger {
    display: none;
    background: none;
    border: 1px solid var(--border);
    color: var(--text);
    padding: 6px 12px;
    cursor: pointer;
    font-size: 17px;
  }
  @media(max-width:900px){
    nav { padding: 0 24px; }
    .nav-links { display:none; flex-direction:column; position:absolute; top:72px; left:0; right:0; background:rgba(13,27,42,0.98); border-bottom:1px solid var(--border); padding:20px 24px; gap:16px; }
    .nav-links.mob-open { display:flex; }
    .nav-hamburger { display:block; }
  }

  /* ── LAYOUT ── */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 60px; }
  .label {
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--gold);
    display: block;
  }
  .gold { color: var(--gold); }

  /* ── ARTICLE HERO ── */
  .article-hero {
    padding: 120px 0 60px;
    border-bottom: 1px solid var(--border);
    position: relative;
    overflow: hidden;
  }
  .article-hero-bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 70% 80% at 80% 50%, rgba(200,151,28,0.05) 0%, transparent 60%);
  }
  .article-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 800px;
  }
  .article-meta {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 24px;
  }
  .article-cat {
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--gold);
    border: 1px solid var(--border);
    padding: 4px 12px;
  }
  .article-date {
    font-size: 13px;
    color: var(--text-muted);
  }
  .article-title {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(28px, 4vw, 52px);
    line-height: 1.15;
    color: var(--white);
    margin-bottom: 24px;
    font-weight: 400;
  }
  .article-standfirst {
    font-size: 19px;
    font-weight: 300;
    color: var(--text-muted);
    line-height: 1.75;
    max-width: 680px;
    border-left: 3px solid var(--gold);
    padding-left: 20px;
  }

  /* ── FEATURED IMAGE ── */
  .article-featured-image {
    width: 100%;
    max-height: 480px;
    object-fit: cover;
    display: block;
    margin: 0;
  }

  /* ── ARTICLE BODY ── */
  .article-layout {
    display: grid;
    grid-template-columns: 1fr 280px;
    gap: 80px;
    padding: 80px 0 100px;
    align-items: start;
  }

  /* Post content typography */
  .article-content {
    font-size: 17px;
    line-height: 1.8;
    color: var(--text);
  }
  .article-content h2 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(28px, 3vw, 40px);
    letter-spacing: 1px;
    color: var(--white);
    margin: 48px 0 16px;
    line-height: 1;
  }
  .article-content h3 {
    font-family: 'DM Serif Display', serif;
    font-size: 22px;
    color: var(--white);
    margin: 36px 0 12px;
    font-weight: 400;
  }
  .article-content h4 {
    font-size: 16px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: 1px;
    text-transform: uppercase;
    margin: 28px 0 10px;
  }
  .article-content p {
    margin-bottom: 24px;
    color: var(--text);
  }
  .article-content p:last-child { margin-bottom: 0; }
  .article-content strong { color: var(--white); font-weight: 600; }
  .article-content em { font-style: italic; color: var(--text-muted); }
  .article-content a {
    color: var(--gold);
    text-decoration: underline;
    text-underline-offset: 3px;
    transition: color 0.2s;
  }
  .article-content a:hover { color: var(--gold-light); }
  .article-content ul, .article-content ol {
    padding-left: 0;
    margin: 0 0 24px;
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  .article-content ul li {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    font-size: 16px;
    color: var(--text-muted);
    padding-bottom: 10px;
    border-bottom: 1px solid var(--border-light);
  }
  .article-content ul li::before {
    content: '→';
    color: var(--gold);
    flex-shrink: 0;
    margin-top: 2px;
  }
  .article-content ol { counter-reset: ol-counter; }
  .article-content ol li {
    display: flex;
    gap: 16px;
    align-items: flex-start;
    font-size: 16px;
    color: var(--text-muted);
    padding-bottom: 10px;
    border-bottom: 1px solid var(--border-light);
    counter-increment: ol-counter;
  }
  .article-content ol li::before {
    content: counter(ol-counter, decimal-leading-zero);
    font-family: 'Bebas Neue', sans-serif;
    font-size: 20px;
    color: var(--gold);
    opacity: 0.6;
    flex-shrink: 0;
    line-height: 1.3;
  }
  .article-content blockquote {
    border-left: 3px solid var(--gold);
    padding: 20px 24px;
    margin: 36px 0;
    background: var(--navy-mid);
    font-family: 'DM Serif Display', serif;
    font-size: 20px;
    font-style: italic;
    color: var(--text);
    line-height: 1.6;
  }
  .article-content blockquote p { margin: 0; color: var(--text); }
  .article-content img {
    width: 100%;
    height: auto;
    display: block;
    margin: 36px 0;
  }
  .article-content hr {
    border: none;
    border-top: 1px solid var(--border-light);
    margin: 48px 0;
  }

  /* ── SIDEBAR ── */
  .article-sidebar {
    position: sticky;
    top: 100px;
    display: flex;
    flex-direction: column;
    gap: 32px;
  }
  .sidebar-card {
    background: var(--navy-mid);
    border: 1px solid var(--border);
    padding: 28px;
  }
  .sidebar-card-title {
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 16px;
    display: block;
  }
  .sidebar-card p {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.7;
    margin-bottom: 16px;
  }

  /* Related posts in sidebar */
  .related-post-item {
    padding: 14px 0;
    border-bottom: 1px solid var(--border-light);
  }
  .related-post-item:last-child { border-bottom: none; padding-bottom: 0; }
  .related-post-cat {
    font-size: 9px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 4px;
  }
  .related-post-title {
    font-size: 13px;
    color: var(--text);
    line-height: 1.4;
    text-decoration: none;
    transition: color 0.2s;
    display: block;
  }
  .related-post-title:hover { color: var(--gold-light); }

  /* CTA button */
  .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--gold);
    color: var(--navy);
    padding: 14px 24px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.2s;
    width: 100%;
    justify-content: center;
  }
  .btn-primary:hover { background: var(--gold-light); }

  .btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: transparent;
    color: var(--white);
    padding: 14px 24px;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration: none;
    border: 1px solid var(--border-light);
    cursor: pointer;
    transition: all 0.2s;
    width: 100%;
    justify-content: center;
  }
  .btn-ghost:hover { border-color: var(--gold); color: var(--gold); }

  /* ── POST NAVIGATION ── */
  .post-nav {
    border-top: 1px solid var(--border-light);
    padding: 48px 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
  }
  .post-nav-item { display: flex; flex-direction: column; gap: 8px; }
  .post-nav-item.next { text-align: right; }
  .post-nav-label {
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--text-muted);
  }
  .post-nav-title {
    font-family: 'DM Serif Display', serif;
    font-size: 17px;
    color: var(--white);
    text-decoration: none;
    line-height: 1.35;
    transition: color 0.2s;
  }
  .post-nav-title:hover { color: var(--gold); }

  /* ── BACK LINK ── */
  .back-to-insights {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 12px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--text-muted);
    text-decoration: none;
    margin-bottom: 40px;
    transition: color 0.2s;
  }
  .back-to-insights:hover { color: var(--gold); }

  /* ── FOOTER ── */
  footer { background: var(--navy-mid); border-top: 1px solid var(--border); padding: 60px 0 40px; }
  .footer-bottom { display: flex; justify-content: space-between; align-items: center; padding-top: 24px; }
  .footer-copy { font-size: 13px; color: var(--text-muted); }
  .footer-legal { display: flex; gap: 24px; }
  .footer-legal a { font-size: 13px; color: var(--text-muted); text-decoration: none; }
  .footer-legal a:hover { color: var(--white); }

  /* ── ACCESSIBILITY ── */
  a:focus-visible, button:focus-visible {
    outline: 2px solid #C8971C;
    outline-offset: 2px;
  }

  @media (prefers-reduced-motion: reduce) {
    * { transition: none !important; animation: none !important; }
  }

  /* ── RESPONSIVE ── */
  @media(max-width:900px){
    .article-layout { grid-template-columns: 1fr; gap: 60px; }
    .article-sidebar { position: static; }
    .post-nav { grid-template-columns: 1fr; }
    .post-nav-item.next { text-align: left; }
    .container { padding: 0 24px; }
    .article-hero { padding: 100px 0 48px; }
  }
</style>
</head>
<body>

<!-- Navigation -->
<nav id="main-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <img src="<?php echo get_theme_file_uri('images/finlanza-logo.png'); ?>" alt="Finlanza" style="height:36px;width:auto;display:block;">
  </a>
<ul class="nav-links" id="navLinks">
  <li>
    <a href="<?php echo home_url('/'); ?>"
       <?php if(is_front_page()) echo 'class="active" aria-current="page"'; ?>>
      Home
    </a>
  </li>
  <li>
    <a href="<?php echo home_url('/services/'); ?>"
       <?php if(is_page('services')) echo 'class="active" aria-current="page"'; ?>>
      Services
    </a>
  </li>
   <li>
    <a href="<?php echo home_url('/products/'); ?>"
       <?php if(is_page('products')) echo 'class="active" aria-current="page"'; ?>>
      Products
    </a>
  </li>
  <li>
    <a href="<?php echo home_url('/dream/'); ?>"
       <?php if(is_page('dream')) echo 'class="active" aria-current="page"'; ?>>
      DREAM™
    </a>
  </li>
 
  <li>
    <a href="<?php echo home_url('/insights/'); ?>"
       <?php if(is_page('insights') || is_single()) echo 'class="active" aria-current="page"'; ?>>
      Insights
    </a>
  </li>
  <li>
    <a href="<?php echo home_url('/scorecard/'); ?>"
       class="nav-gold<?php if(is_page('scorecard')) echo ' active'; ?>"
       <?php if(is_page('scorecard')) echo 'aria-current="page"'; ?>>
      Free Scorecard
    </a>
  </li>
  <li>
    <a href="<?php echo home_url('/contact/'); ?>"
       class="nav-cta<?php if(is_page('contact')) echo ' active'; ?>"
       <?php if(is_page('contact')) echo 'aria-current="page"'; ?>>
      Book a Review
    </a>
  </li>
</ul>
  <button class="nav-hamburger"
    onclick="document.getElementById('navLinks').classList.toggle('mob-open'); this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'false' ? 'true' : 'false');"
    aria-label="Toggle navigation menu"
    aria-expanded="false">☰</button>
</nav>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Article hero -->
  <section class="article-hero">
    <div class="article-hero-bg" aria-hidden="true"></div>
    <div class="container">
      <a href="<?php echo home_url('/insights/'); ?>" class="back-to-insights">← Back to Insights</a>
      <div class="article-hero-inner">
        <div class="article-meta">
          <span class="article-cat"><?php echo $cat_name; ?></span>
          <time class="article-date" datetime="<?php echo esc_attr( $post_date ); ?>">
            <?php echo $post_date_display; ?>
          </time>
        </div>
        <h1 class="article-title"><?php the_title(); ?></h1>
        <?php if ( $post_excerpt ) : ?>
        <p class="article-standfirst"><?php echo esc_html( wp_trim_words( $post_excerpt, 40 ) ); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Featured image (only shows if post has one) -->
  <?php if ( has_post_thumbnail() ) : ?>
  <div style="max-height:480px;overflow:hidden;">
    <?php the_post_thumbnail( 'large', array( 'class' => 'article-featured-image', 'alt' => esc_attr( $post_title ) ) ); ?>
  </div>
  <?php endif; ?>

  <!-- Article body + sidebar -->
  <div class="container">
    <div class="article-layout">

      <!-- Main content -->
      <article class="article-content" id="article-content">
        <?php the_content(); ?>

        <!-- Tags -->
        <?php
        $tags = get_the_tags();
        if ( $tags ) : ?>
        <div style="margin-top:48px;padding-top:32px;border-top:1px solid var(--border-light);display:flex;flex-wrap:wrap;gap:8px;align-items:center;">
          <span style="font-size:11px;letter-spacing:2px;text-transform:uppercase;color:var(--text-muted);">Tagged:</span>
          <?php foreach ( $tags as $tag ) : ?>
          <a href="<?php echo get_tag_link( $tag->term_id ); ?>"
             style="background:rgba(200,151,28,0.08);border:1px solid var(--border);color:var(--gold);font-size:11px;letter-spacing:1px;padding:5px 12px;text-decoration:none;transition:background 0.2s;"
             onmouseover="this.style.background='rgba(200,151,28,0.18)'"
             onmouseout="this.style.background='rgba(200,151,28,0.08)'">
            <?php echo esc_html( $tag->name ); ?>
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Post navigation -->
        <nav class="post-nav" aria-label="Article navigation">
          <div class="post-nav-item prev">
            <?php $prev = get_previous_post(); if ( $prev ) : ?>
            <span class="post-nav-label">← Previous Article</span>
            <a href="<?php echo get_permalink( $prev->ID ); ?>" class="post-nav-title">
              <?php echo esc_html( get_the_title( $prev->ID ) ); ?>
            </a>
            <?php endif; ?>
          </div>
          <div class="post-nav-item next">
            <?php $next = get_next_post(); if ( $next ) : ?>
            <span class="post-nav-label">Next Article →</span>
            <a href="<?php echo get_permalink( $next->ID ); ?>" class="post-nav-title">
              <?php echo esc_html( get_the_title( $next->ID ) ); ?>
            </a>
            <?php endif; ?>
          </div>
        </nav>

      </article>

      <!-- Sidebar -->
      <aside class="article-sidebar" aria-label="Article sidebar">

        <!-- CTA card -->
        <div class="sidebar-card">
          <span class="sidebar-card-title">Ready to transform your systems?</span>
          <p>Start with an honest assessment of where your business systems stand. Takes 5 minutes.</p>
          <a href="<?php echo home_url('/scorecard/'); ?>" class="btn-primary" style="margin-bottom:10px;">
            Take the Free Scorecard →
          </a>
          <a href="<?php echo home_url('/contact/'); ?>" class="btn-ghost">
            Book a Review
          </a>
        </div>

        <!-- About Finlanza card -->
        <div class="sidebar-card">
          <span class="sidebar-card-title">About Finlanza</span>
          <p>We engineer scalable business systems for multi-location organizations across Africa — built on the DREAM™ Transformation Framework.</p>
          <a href="<?php echo home_url('/dream/'); ?>"
             style="font-size:12px;letter-spacing:1px;text-transform:uppercase;color:var(--gold);text-decoration:none;">
            Learn about DREAM™ →
          </a>
        </div>

        <!-- Related posts card -->
        <?php
        $related_args = array(
          'post_type'      => 'post',
          'posts_per_page' => 4,
          'post_status'    => 'publish',
          'post__not_in'   => array( get_the_ID() ),
          'orderby'        => 'date',
          'order'          => 'DESC',
        );
        // Try to get posts from same category first
        if ( $cats ) {
          $related_args['category__in'] = array( $cats[0]->term_id );
        }
        $related_query = new WP_Query( $related_args );

        // Fallback: if fewer than 2 same-category posts, just get recent posts
        if ( $related_query->post_count < 2 ) {
          unset( $related_args['category__in'] );
          $related_query = new WP_Query( $related_args );
        }

        if ( $related_query->have_posts() ) : ?>
        <div class="sidebar-card">
          <span class="sidebar-card-title">More Articles</span>
          <?php while ( $related_query->have_posts() ) : $related_query->the_post();
            $rel_cats = get_the_category();
            $rel_cat  = $rel_cats ? esc_html( $rel_cats[0]->name ) : 'Insights';
          ?>
          <div class="related-post-item">
            <div class="related-post-cat"><?php echo $rel_cat; ?></div>
            <a href="<?php the_permalink(); ?>" class="related-post-title">
              <?php the_title(); ?>
            </a>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>

      </aside>
    </div>
  </div>

<?php endwhile; endif; ?>
</main>

<!-- Footer -->
<footer role="contentinfo" aria-label="Site footer">
  <div class="container">
    <div style="text-align:center;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div style="font-family:'Bebas Neue',sans-serif;font-size:clamp(22px,3vw,38px);line-height:1;letter-spacing:1px;color:var(--white);margin-bottom:8px;">
        <span class="gold">Scalability</span> is not an accident.<br>It is engineered.
      </div>
      <span class="label" style="margin-top:12px;">Zoho Authorized Partner · Enterprise Implementation Specialists · Africa</span>
    </div>
    <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:40px;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div>
        <div style="font-family:'Bebas Neue',sans-serif;font-size:22px;letter-spacing:2px;color:var(--white);margin-bottom:4px;">FINLANZA</div>
        <span class="label" style="margin-bottom:12px;">Business Systems Architecture Firm</span>
        <p style="color:var(--text-muted);font-size:13px;line-height:1.7;">We engineer scalable business systems for multi-location, multi-entity organizations across Africa — built on the DREAM™ Transformation Framework.</p>
      </div>
      <div>
        <span class="label" style="margin-bottom:14px;">Services</span>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Diagnose</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Transform</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Managed</a>
          <a href="<?php echo home_url('/pricing/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Pricing</a>
        </div>
      </div>
      <div>
        <span class="label" style="margin-bottom:14px;">Company</span>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/dream/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">DREAM™ Framework</a>
          <a href="<?php echo home_url('/scorecard/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Free Scorecard</a>
          <a href="<?php echo home_url('/insights/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Insights</a>
          <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Contact</a>
        </div>
      </div>
      <div>
        <span class="label" style="margin-bottom:14px;">Contact</span>
        <div style="display:flex;flex-direction:column;gap:9px;font-size:13px;color:var(--text-muted);">
          <a href="mailto:ask@finlanza.com" style="color:var(--text-muted);text-decoration:none;">ask@finlanza.com</a>
          <a href="tel:+254724463536" style="color:var(--text-muted);text-decoration:none;">+254 724 463 536</a>
          <span>Nairobi, Kenya</span>
          <div style="margin-top:8px;display:inline-flex;align-items:center;gap:6px;border:1px solid rgba(200,151,28,0.2);padding:5px 10px;font-size:11px;letter-spacing:1px;text-transform:uppercase;color:rgba(200,151,28,0.55);">
            ZOHO <span style="display:inline-block;width:1px;height:10px;background:rgba(200,151,28,0.25);margin:0 4px;"></span> Partner
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-copy">© <?php echo date('Y'); ?> Finlanza. All rights reserved. DREAM™ is a proprietary transformation framework.</div>
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

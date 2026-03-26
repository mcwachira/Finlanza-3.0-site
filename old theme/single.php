<?php
/*
 * single.php — Finlanza Single Post Template
 * Clean, readable article layout with subtle sidebar
 */

// Remove any actions that inject post navigation or content outside our template
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
// Suppress Twenty-* theme post navigation hooks if parent theme is active
remove_action( 'finlanza_after_post', 'the_post_navigation', 10 );

$post_title        = get_the_title();
$post_excerpt      = get_the_excerpt();
$post_url          = get_permalink();
$post_date         = get_the_date( 'Y-m-d' );
$post_date_display = get_the_date( 'F j, Y' );
$cats              = get_the_category();
$cat_name          = $cats ? esc_html( $cats[0]->name ) : 'Insights';
$author_name       = get_the_author();
$thumbnail_url     = get_the_post_thumbnail_url( get_the_ID(), 'large' );
$og_image_fallback = get_theme_file_uri( 'images/finlanza-insights-og.jpg' );
$og_image          = $thumbnail_url ? $thumbnail_url : $og_image_fallback;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo esc_html( $post_title ); ?> | Finlanza Insights</title>
<meta name="description" content="<?php echo esc_attr( wp_trim_words( $post_excerpt, 30 ) ); ?>">
<link rel="canonical" href="<?php echo esc_url( $post_url ); ?>">
<meta property="og:title" content="<?php echo esc_attr( $post_title ); ?>">
<meta property="og:description" content="<?php echo esc_attr( wp_trim_words( $post_excerpt, 30 ) ); ?>">
<meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
<meta property="og:url" content="<?php echo esc_url( $post_url ); ?>">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Finlanza">
<meta property="article:published_time" content="<?php echo esc_attr( $post_date ); ?>">
<meta property="article:author" content="<?php echo esc_attr( $author_name ); ?>">
<meta property="article:section" content="<?php echo esc_attr( $cat_name ); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr( $post_title ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( wp_trim_words( $post_excerpt, 30 ) ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( $og_image ); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "<?php echo esc_js( $post_title ); ?>",
  "description": "<?php echo esc_js( wp_trim_words( $post_excerpt, 30 ) ); ?>",
  "datePublished": "<?php echo esc_attr( $post_date ); ?>",
  "dateModified": "<?php echo esc_attr( get_the_modified_date( 'Y-m-d' ) ); ?>",
  "author": { "@type": "Organization", "name": "Finlanza Limited" },
  "publisher": {
    "@type": "Organization",
    "name": "Finlanza Limited",
    "url": "<?php echo esc_js( home_url('/') ); ?>",
    "address": { "@type": "PostalAddress", "addressLocality": "Nairobi", "addressCountry": "Kenya" }
  },
  "mainEntityOfPage": { "@type": "WebPage", "@id": "<?php echo esc_js( $post_url ); ?>" }
  <?php if ( $thumbnail_url ) : ?> ,"image": "<?php echo esc_js( $thumbnail_url ); ?>"<?php endif; ?>
}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<style>
  :root {
    --navy: #0D1B2A; --navy-mid: #152232; --navy-light: #1E3045;
    --gold: #C8971C; --gold-light: #E8B84B;
    --white: #FFFFFF; --text: #E8E2D4; --text-muted: #8A9BAD;
    --border: rgba(200,151,28,0.2); --border-light: rgba(255,255,255,0.08);
    /* Article uses light background for readability */
    --article-bg: #F9F7F3;
    --article-text: #1A2530;
    --article-muted: #5A6A7A;
    --article-border: #E2DDD5;
  }
  :focus-visible { outline: 2px solid var(--gold); outline-offset: 2px; }
  @media (prefers-reduced-motion: reduce) { * { transition: none !important; animation: none !important; } }
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body { background: var(--navy); color: var(--text); font-family: 'DM Sans', sans-serif; font-size: 17px; line-height: 1.65; overflow-x: hidden; }
  /* Suppress any WordPress-injected prev/next post navigation rendered outside the template */
  .navigation.post-navigation, .post-navigation, #nav-above, #nav-below,
  .nav-links > .nav-previous, .nav-links > .nav-next { display: none !important; }
  /* Also hide any stray wp_link_pages or adjacent post output */
  main > .navigation, main > .post-navigation,
  main > p > a[rel="prev"], main > p > a[rel="next"] { display: none !important; }

  /* Noise overlay */
  body::before { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E"); opacity: 0.025; pointer-events: none; z-index: 9999; }

  /* ── NAV ── */
  nav { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; padding: 0 60px; height: 72px; display: flex; align-items: center; justify-content: space-between; background: rgba(13,27,42,0.94); backdrop-filter: blur(12px); border-bottom: 1px solid var(--border); }
  .nav-logo { display: flex; align-items: center; text-decoration: none; }
  .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
  .nav-links a { text-decoration: none; font-size: 13px; font-weight: 400; letter-spacing: 1.5px; text-transform: uppercase; color: var(--text-muted); transition: color 0.2s; }
  .nav-links a:hover { color: var(--gold); }
  .nav-links a.active { color: var(--white); }
  .nav-cta { background: var(--gold); color: var(--navy) !important; padding: 10px 24px !important; font-weight: 500 !important; }
  .nav-cta:hover { background: var(--gold-light) !important; }
  .nav-gold { color: var(--gold) !important; }
  .nav-hamburger { display: none; background: none; border: 1px solid var(--border); color: var(--text); padding: 6px 12px; cursor: pointer; font-size: 17px; }
  @media(max-width:900px) { nav { padding: 0 24px; } .nav-links { display:none; flex-direction:column; position:absolute; top:72px; left:0; right:0; background:rgba(13,27,42,0.98); border-bottom:1px solid var(--border); padding:20px 24px; gap:16px; } .nav-links.mob-open { display:flex; } .nav-hamburger { display:block; } }

  /* ── ARTICLE HERO — dark, keeps brand feel ── */
  .article-hero {
    padding: 96px 0 56px;   /* 96px = 72px nav + 24px breathing room */
    background: var(--navy);
    border-bottom: 1px solid var(--border);
    position: relative;
    overflow: hidden;
  }
  .article-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 70% at 75% 50%, rgba(200,151,28,0.05) 0%, transparent 60%);
    pointer-events: none;
  }
  .hero-inner { position: relative; z-index: 2; max-width: 760px; }
  .article-breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--text-muted);
    text-decoration: none;
    margin-bottom: 28px;
    transition: color 0.2s;
    opacity: 0.7;
  }
  .article-breadcrumb:hover { color: var(--gold); opacity: 1; }
  .article-cat-badge {
    display: inline-block;
    font-size: 10px;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--gold);
    border: 1px solid var(--border);
    padding: 4px 12px;
    margin-bottom: 18px;
  }
  .article-title {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(26px, 3.5vw, 46px);
    line-height: 1.12;
    color: var(--white);
    margin-bottom: 20px;
    font-weight: 400;
  }
  .article-standfirst {
    font-size: 17px;
    font-weight: 300;
    color: var(--text-muted);
    line-height: 1.7;
    max-width: 640px;
    border-left: 3px solid var(--gold);
    padding-left: 20px;
    margin-bottom: 28px;
  }
  .article-meta-row {
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 12px;
    color: var(--text-muted);
    padding-top: 20px;
    border-top: 1px solid var(--border-light);
    flex-wrap: wrap;
  }
  .meta-sep { color: var(--border); opacity: 0.5; }

  /* ── FEATURED IMAGE ── */
  .featured-image-wrap {
    width: 100%;
    max-height: 500px;
    overflow: hidden;
    background: var(--navy-light);
  }
  .featured-image-wrap img {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    display: block;
  }

  /* ── ARTICLE BODY — light background for readability ── */
  .article-body-section {
    background: var(--article-bg);
  }

  .article-container {
    max-width: 1140px;
    margin: 0 auto;
    padding: 0 60px;
  }

  .article-layout {
    display: grid;
    grid-template-columns: 1fr 260px;
    gap: 72px;
    padding: 64px 0 80px;
    align-items: start;
  }

  /* ── ARTICLE CONTENT TYPOGRAPHY — optimised for readability ── */
  .article-content {
    font-size: 17px;
    line-height: 1.85;
    color: var(--article-text);
    font-weight: 300;
    max-width: 680px;
  }
  .article-content h2 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(24px, 2.5vw, 34px);
    letter-spacing: 1px;
    color: #0D1B2A;
    margin: 52px 0 16px;
    line-height: 1;
  }
  .article-content h2:first-child { margin-top: 0; }
  .article-content h3 {
    font-family: 'DM Serif Display', serif;
    font-size: 21px;
    color: #0D1B2A;
    margin: 40px 0 12px;
    font-weight: 400;
    line-height: 1.3;
  }
  .article-content h4 {
    font-size: 15px;
    font-weight: 600;
    color: #0D1B2A;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin: 32px 0 8px;
  }
  .article-content p { margin-bottom: 24px; color: var(--article-text); }
  .article-content p:last-child { margin-bottom: 0; }
  .article-content strong { color: #0D1B2A; font-weight: 600; }
  .article-content em { font-style: italic; color: var(--article-muted); }
  .article-content a { color: var(--gold); text-decoration: underline; text-underline-offset: 3px; }
  .article-content a:hover { color: #9A7010; }
  .article-content ul, .article-content ol {
    padding-left: 0; margin: 0 0 24px;
    list-style: none; display: flex; flex-direction: column; gap: 10px;
  }
  .article-content ul li {
    display: flex; gap: 12px; align-items: flex-start;
    font-size: 16px; color: var(--article-muted);
    padding-bottom: 10px; border-bottom: 1px solid var(--article-border);
  }
  .article-content ul li::before { content: '→'; color: var(--gold); flex-shrink: 0; margin-top: 2px; }
  .article-content ol { counter-reset: ol-counter; }
  .article-content ol li {
    display: flex; gap: 16px; align-items: flex-start;
    font-size: 16px; color: var(--article-muted);
    padding-bottom: 10px; border-bottom: 1px solid var(--article-border);
    counter-increment: ol-counter;
  }
  .article-content ol li::before {
    content: counter(ol-counter, decimal-leading-zero);
    font-family: 'Bebas Neue', sans-serif; font-size: 20px;
    color: var(--gold); opacity: 0.7; flex-shrink: 0; line-height: 1.3;
  }
  .article-content blockquote {
    border-left: 3px solid var(--gold);
    padding: 20px 24px; margin: 36px 0;
    background: #EEE9DF;
    font-family: 'DM Serif Display', serif;
    font-size: 19px; font-style: italic;
    color: #1A2530; line-height: 1.6;
  }
  .article-content blockquote p { margin: 0; color: #1A2530; }
  .article-content img { width: 100%; height: auto; display: block; margin: 36px 0; }
  .article-content hr { border: none; border-top: 1px solid var(--article-border); margin: 48px 0; }

  /* Tags */
  .article-tags {
    margin-top: 48px; padding-top: 28px;
    border-top: 1px solid var(--article-border);
    display: flex; flex-wrap: wrap; gap: 8px; align-items: center;
  }
  .tag-label { font-size: 11px; letter-spacing: 2px; text-transform: uppercase; color: var(--article-muted); }
  .tag-link {
    background: #EEE9DF; border: 1px solid var(--article-border);
    color: #7A5C00; font-size: 11px; letter-spacing: 1px;
    padding: 5px 12px; text-decoration: none; transition: background 0.2s;
  }
  .tag-link:hover { background: #E0D9CE; }

  /* Post nav */
  .post-nav {
    margin-top: 48px; padding-top: 32px;
    border-top: 1px solid var(--article-border);
    display: grid; grid-template-columns: 1fr 1fr; gap: 32px;
  }
  .post-nav-item { display: flex; flex-direction: column; gap: 6px; }
  .post-nav-item.next { text-align: right; }
  .post-nav-label { font-size: 10px; letter-spacing: 2px; text-transform: uppercase; color: var(--article-muted); }
  .post-nav-title { font-family: 'DM Serif Display', serif; font-size: 16px; color: #0D1B2A; text-decoration: none; line-height: 1.35; transition: color 0.2s; }
  .post-nav-title:hover { color: var(--gold); }

  /* ── SIDEBAR — light, minimal ── */
  .article-sidebar {
    position: sticky;
    top: 92px;
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  /* Subtle CTA card */
  .sidebar-cta {
    border: 1px solid var(--article-border);
    border-top: 3px solid var(--gold);
    padding: 24px;
    background: #fff;
  }
  .sidebar-cta-label {
    font-size: 10px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 10px; display: block;
  }
  .sidebar-cta-headline {
    font-family: 'DM Serif Display', serif;
    font-size: 17px; color: #0D1B2A; line-height: 1.3; margin-bottom: 10px;
  }
  .sidebar-cta-body { font-size: 13px; color: var(--article-muted); line-height: 1.6; margin-bottom: 16px; }
  .sidebar-btn {
    display: block; text-align: center;
    background: var(--gold); color: #0D1B2A;
    padding: 10px 16px; font-size: 11px; font-weight: 600;
    letter-spacing: 1.5px; text-transform: uppercase; text-decoration: none;
    transition: background 0.2s; margin-bottom: 8px;
  }
  .sidebar-btn:hover { background: var(--gold-light); }
  .sidebar-btn-ghost {
    display: block; text-align: center;
    border: 1px solid var(--article-border);
    color: #0D1B2A; padding: 10px 16px; font-size: 11px; font-weight: 500;
    letter-spacing: 1.5px; text-transform: uppercase; text-decoration: none;
    transition: border-color 0.2s;
  }
  .sidebar-btn-ghost:hover { border-color: var(--gold); color: #7A5C00; }

  /* Sidebar divider card */
  .sidebar-divider {
    border-top: 1px solid var(--article-border);
    padding-top: 20px;
  }
  .sidebar-divider-label {
    font-size: 10px; letter-spacing: 2px; text-transform: uppercase;
    color: var(--article-muted); margin-bottom: 14px; display: block;
  }

  /* Related posts */
  .sidebar-related-item {
    padding: 12px 0; border-bottom: 1px solid var(--article-border);
  }
  .sidebar-related-item:last-child { border-bottom: none; padding-bottom: 0; }
  .sidebar-related-cat { font-size: 9px; letter-spacing: 1.5px; text-transform: uppercase; color: var(--gold); margin-bottom: 3px; }
  .sidebar-related-title { font-size: 13px; color: #1A2530; line-height: 1.4; text-decoration: none; display: block; transition: color 0.2s; }
  .sidebar-related-title:hover { color: #7A5C00; }

  /* ── POST-ARTICLE CTA BAND ── */
  .post-cta-band {
    background: var(--navy-mid);
    border-top: 1px solid var(--border);
    padding: 64px 60px;
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 40px;
    align-items: center;
  }
  .post-cta-label { font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: var(--gold); margin-bottom: 8px; display: block; }
  .post-cta-headline { font-family: 'DM Serif Display', serif; font-size: 26px; color: var(--white); line-height: 1.2; margin-bottom: 8px; }
  .post-cta-sub { font-size: 14px; color: var(--text-muted); line-height: 1.6; max-width: 500px; }
  .post-cta-actions { display: flex; flex-direction: column; gap: 10px; min-width: 200px; }
  .btn-primary { display: inline-flex; align-items: center; justify-content: center; gap: 8px; background: var(--gold); color: var(--navy); padding: 14px 28px; font-size: 12px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; transition: all 0.2s; white-space: nowrap; }
  .btn-primary:hover { background: var(--gold-light); }
  .btn-ghost { display: inline-flex; align-items: center; justify-content: center; gap: 8px; background: transparent; color: var(--text-muted); padding: 14px 28px; font-size: 12px; font-weight: 400; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; border: 1px solid var(--border-light); transition: all 0.2s; white-space: nowrap; }
  .btn-ghost:hover { border-color: var(--gold); color: var(--gold); }

  /* ── FOOTER ── */
  footer { background: var(--navy-mid); border-top: 1px solid var(--border); padding: 60px 0 40px; }
  .footer-bottom { display: flex; justify-content: space-between; align-items: center; padding-top: 24px; }
  .footer-copy { font-size: 13px; color: var(--text-muted); }
  .footer-legal { display: flex; gap: 24px; }
  .footer-legal a { font-size: 13px; color: var(--text-muted); text-decoration: none; }
  .footer-legal a:hover { color: var(--white); }

  /* ── RESPONSIVE ── */
  @media(max-width:900px) {
    .article-container { padding: 0 24px; }
    .article-layout { grid-template-columns: 1fr; gap: 48px; padding: 48px 0 60px; }
    .article-sidebar { position: static; }
    .post-nav { grid-template-columns: 1fr; }
    .post-nav-item.next { text-align: left; }
    .post-cta-band { grid-template-columns: 1fr; padding: 48px 24px; gap: 24px; }
    .post-cta-actions { flex-direction: row; flex-wrap: wrap; }
  }
</style>
</head>
<body>

<nav id="main-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABJ0AAAFiCAYAAABcTKksAAAKMWlDQ1BJQ0MgUHJvZmlsZQAAeJydlndUU9kWh8+9N71QkhCKlNBraFICSA29SJEuKjEJEErAkAAiNkRUcERRkaYIMijggKNDkbEiioUBUbHrBBlE1HFwFBuWSWStGd+8ee/Nm98f935rn73P3Wfvfda6AJD8gwXCTFgJgAyhWBTh58WIjYtnYAcBDPAAA2wA4HCzs0IW+EYCmQJ82IxsmRP4F726DiD5+yrTP4zBAP+flLlZIjEAUJiM5/L42VwZF8k4PVecJbdPyZi2NE3OMErOIlmCMlaTc/IsW3z2mWUPOfMyhDwZy3PO4mXw5Nwn4405Er6MkWAZF+cI+LkyviZjg3RJhkDGb+SxGXxONgAoktwu5nNTZGwtY5IoMoIt43kA4EjJX/DSL1jMzxPLD8XOzFouEiSniBkmXFOGjZMTi+HPz03ni8XMMA43jSPiMdiZGVkc4XIAZs/8WRR5bRmyIjvYODk4MG0tbb4o1H9d/JuS93aWXoR/7hlEH/jD9ld+mQ0AsKZltdn6h21pFQBd6wFQu/2HzWAvAIqyvnUOfXEeunxeUsTiLGcrq9zcXEsBn2spL+jv+p8Of0NffM9Svt3v5WF485M4knQxQ143bmZ6pkTEyM7icPkM5p+H+B8H/nUeFhH8JL6IL5RFRMumTCBMlrVbyBOIBZlChkD4n5r4D8P+pNm5lona+BHQllgCpSEaQH4eACgqESAJe2Qr0O99C8ZHA/nNi9GZmJ37z4L+fVe4TP7IFiR/jmNHRDK4ElHO7Jr8WgI0IABFQAPqQBvoAxPABLbAEbgAD+ADAkEoiARxYDHgghSQAUQgFxSAtaAYlIKtYCeoBnWgETSDNnAYdIFj4DQ4By6By2AE3AFSMA6egCnwCsxAEISFyBAVUod0IEPIHLKFWJAb5AMFQxFQHJQIJUNCSAIVQOugUqgcqobqoWboW+godBq6AA1Dt6BRaBL6FXoHIzAJpsFasBFsBbNgTzgIjoQXwcnwMjgfLoK3wJVwA3wQ7oRPw5fgEVgKP4GnEYAQETqiizARFsJGQpF4JAkRIauQEqQCaUDakB6kH7mKSJGnyFsUBkVFMVBMlAvKHxWF4qKWoVahNqOqUQdQnag+1FXUKGoK9RFNRmuizdHO6AB0LDoZnYsuRlegm9Ad6LPoEfQ4+hUGg6FjjDGOGH9MHCYVswKzGbMb0445hRnGjGGmsVisOtYc64oNxXKwYmwxtgp7EHsSewU7jn2DI+J0cLY4X1w8TogrxFXgWnAncFdwE7gZvBLeEO+MD8Xz8MvxZfhGfA9+CD+OnyEoE4wJroRIQiphLaGS0EY4S7hLeEEkEvWITsRwooC4hlhJPEQ8TxwlviVRSGYkNimBJCFtIe0nnSLdIr0gk8lGZA9yPFlM3kJuJp8h3ye/UaAqWCoEKPAUVivUKHQqXFF4pohXNFT0VFysmK9YoXhEcUjxqRJeyUiJrcRRWqVUo3RU6YbStDJV2UY5VDlDebNyi/IF5UcULMWI4kPhUYoo+yhnKGNUhKpPZVO51HXURupZ6jgNQzOmBdBSaaW0b2iDtCkVioqdSrRKnkqNynEVKR2hG9ED6On0Mvph+nX6O1UtVU9Vvuom1TbVK6qv1eaoeajx1UrU2tVG1N6pM9R91NPUt6l3qd/TQGmYaYRr5Grs0Tir8XQObY7LHO6ckjmH59zWhDXNNCM0V2ju0xzQnNbS1vLTytKq0jqj9VSbru2hnaq9Q/uE9qQOVcdNR6CzQ+ekzmOGCsOTkc6oZPQxpnQ1df11Jbr1uoO6M3rGelF6hXrtevf0Cfos/ST9Hfq9+lMGOgYhBgUGrQa3DfGGLMMUw12G/YavjYyNYow2GHUZPTJWMw4wzjduNb5rQjZxN1lm0mByzRRjyjJNM91tetkMNrM3SzGrMRsyh80dzAXmu82HLdAWThZCiwaLG0wS05OZw2xljlrSLYMtCy27LJ9ZGVjFW22z6rf6aG1vnW7daH3HhmITaFNo02Pzq62ZLde2xvbaXPJc37mr53bPfW5nbse322N3055qH2K/wb7X/oODo4PIoc1h0tHAMdGx1vEGi8YKY21mnXdCO3k5rXY65vTW2cFZ7HzY+RcXpkuaS4vLo3nG8/jzGueNueq5clzrXaVuDLdEt71uUnddd457g/sDD30PnkeTx4SnqWeq50HPZ17WXiKvDq/XbGf2SvYpb8Tbz7vEe9CH4hPlU+1z31fPN9m31XfKz95vhd8pf7R/kP82/xsBWgHcgOaAqUDHwJWBfUGkoAVB1UEPgs2CRcE9IXBIYMj2kLvzDecL53eFgtCA0O2h98KMw5aFfR+OCQ8Lrwl/GGETURDRv4C6YMmClgWvIr0iyyLvRJlESaJ6oxWjE6Kbo1/HeMeUx0hjrWJXxl6K04gTxHXHY+Oj45vipxf6LNy5cDzBPqE44foi40V5iy4s1licvvj4EsUlnCVHEtGJMYktie85oZwGzvTSgKW1S6e4bO4u7hOeB28Hb5Lvyi/nTyS5JpUnPUp2Td6ePJninlKR8lTAFlQLnqf6p9alvk4LTduf9ik9Jr09A5eRmHFUSBGmCfsytTPzMoezzLOKs6TLnJftXDYlChI1ZUPZi7K7xTTZz9SAxESyXjKa45ZTk/MmNzr3SJ5ynjBvYLnZ8k3LJ/J9879egVrBXdFboFuwtmB0pefK+lXQqqWrelfrry5aPb7Gb82BtYS1aWt/KLQuLC98uS5mXU+RVtGaorH1futbixWKRcU3NrhsqNuI2ijYOLhp7qaqTR9LeCUXS61LK0rfb+ZuvviVzVeVX33akrRlsMyhbM9WzFbh1uvb3LcdKFcuzy8f2x6yvXMHY0fJjpc7l+y8UGFXUbeLsEuyS1oZXNldZVC1tep9dUr1SI1XTXutZu2m2te7ebuv7PHY01anVVda926vYO/Ner/6zgajhop9mH05+x42Rjf2f836urlJo6m06cN+4X7pgYgDfc2Ozc0tmi1lrXCrpHXyYMLBy994f9Pdxmyrb6e3lx4ChySHHn+b+O31w0GHe4+wjrR9Z/hdbQe1o6QT6lzeOdWV0iXtjusePhp4tLfHpafje8vv9x/TPVZzXOV42QnCiaITn07mn5w+lXXq6enk02O9S3rvnIk9c60vvG/wbNDZ8+d8z53p9+w/ed71/LELzheOXmRd7LrkcKlzwH6g4wf7HzoGHQY7hxyHui87Xe4Znjd84or7ldNXva+euxZw7dLI/JHh61HXb95IuCG9ybv56Fb6ree3c27P3FlzF3235J7SvYr7mvcbfjT9sV3qID0+6j068GDBgztj3LEnP2X/9H686CH5YcWEzkTzI9tHxyZ9Jy8/Xvh4/EnWk5mnxT8r/1z7zOTZd794/DIwFTs1/lz0/NOvm1+ov9j/0u5l73TY9P1XGa9mXpe8UX9z4C3rbf+7mHcTM7nvse8rP5h+6PkY9PHup4xPn34D94Tz+6TMXDkAABbdSURBVHic7d1dltw2kgbQADKl7tXMm2V5RSNpQ7OleZq23T5ntjJWFYl5kOxuWfWXWZEkQNz7JNvyORSICIKfIrNKay0AAAAAIFPd+wIAAAAAOB6hEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkO689wVsrO19AUC6svcFAAAA8D2TTgAAAACkEzoBAAAAkE7oBIzMR+sAAAA6JXQCAAAAIJ3QCRiVKScAAICOCZ0AAAAASCd0AkZkygkAAKBzQicAAAAA0gmdgNGYcgIAABiA0AkAAACAdEInYCSmnAAAAAYhdAIAAAAgndAJGIUpJwAAgIEInQAAAABIJ3QCRmDKCQAAYDBCJwAAAADSCZ2A3plyAgAAGJDQCQAAAIB0QicAAAAA0gmdgJ75aB0AAMCghE4AAAAApBM6Ab0y5QQAADAwoRMAAAAA6YROQI9MOQEAAAxO6AQAAABAOqET0BtTTgAAAAcgdAIAAAAgndAJ6IkpJwAAgIMQOgEAAACQTugE9MKUEwAAwIEInQAAAABIJ3QCemDKCQAA4GCETgAAAACkEzoBezPlBAAAcEBCJwAAAADSCZ2APZlyAgAAOCihEwAAAADphE7AXkw5AQAAHJjQCQAAAIB0QidgD6acAAAADk7oBAAAAEA6oROwNVNOAAAAExA6AQAAAJBO6AQAAABAOqETsCUfrQMAAJiE0AkAAACAdEInYCumnAAAACYidAIAAAAgndAJ2IIpJwAAgMkInQAAAABIJ3QCbs2UEwAAwISETgAAAACkEzoBt2TKCQAAYFJCJwAAAADSCZ2AWzHlBAAAMDGhEwAAAADphE7ALZhyAgAAmJzQCQAAAIB0QicgmyknAAAAhE4AAAAA5BM6AZlMOQEAABARQicAAAAAbkDoBGQx5QQAAMCfhE4AAAAApBM6ARlMOQEAAPANoRMAAAAA6YROwGuZcgIAAOA7QicAAAAA0p33voCNmcjgWm3vCwAAurTHGcGZFhiB/sh0oROQS1N/OcFljkv33KiHna2vu/daHnE9Rt17sLUR6/uWRusdzje31ft+hWf5eB08z8MUODp9DsaiZq9n7eDY1HhnhE7AtfzNCxyLQxpcTt2MyX2D21NnRITQCZ6jWQIAPXJGAXiY/tgRoRNwDVNOcEwOafBy6mVs7h/cjvriT0IneJxmCcxI7wNmod8B3NhUP73uv//rP9qprXFXWqynEn9fTnHvWTO1Ukr8+OEXUzuXsV5wfC3UOoxArb6eNYRcvbxgq+1OTDXpVGqL+1rj3N7EeTnH5/J570tiZ2sse18CADCeXl6qyOF+AtzIXKHTWqK0iLXeRysRb+Lt3pfEzn768Ntj6bfDx8P8bQHMQx+EMahVgIfpjx2YKnRa//hFq1HaGkuzB4+vfvOrVr78ai13UdtU2x/gGh6U8D11cUzuK7yeOuI73ro5tFJatFKjlTXWiCgtorUlTvE23n362ZTTZUw5wZz0ROifOs1hHeF41PXOhE4c2hotzu1zlHaO1lpEWaPWczRTTgCXcGCDL9TC8bnHcB21w4Om+ul1zKe0Uyy1RGtr1FKjtRLR7uP9p3+acrqMKScAAAAuYtyDQ6txF6VFxFqixRI11ohq2wNcQSgPfVOjeawlHIua3pG3bw5tjXO0WKKUEtFqRKvx44dfTDldxpQT8Ad9kpnZ/3Nxv+Hl1AuPEjoxhVNZYo0Sa73f+1IARudgCf1Sn7msJxyHet6J0ImDWyMiYmmnOMcS7z/8ZsrpMqacAMA5YWbuPTxNjfAkoROH1kpE/doGF/EJQBYHTOiX+gR4mP64A6ETh1baKVprEbXET6acLiWmA56idzILex17AB6mNniW0IljK3dR6zliXfa+EoAjctgEZqHfAVxB6MSxtRr30eL9x19NOV3GlBPwUvoo9Edd3oZ1hfGp440JnTi02mpEO+19GQDAmLyc8Ff2BHyhFngRoROHtpY1fvr4D1NOlzHlBFxKP4X+qEsYmzP57eiPGxI6AQAZHOA4Gnuax9gb3FrvgZMa4MXOe18A3JLvcgLYVIv+D8owEzV5O9b2i9HXoMd3gtHXFL4hdGJwNSLWP3+1lIjSaqzl9zivf9v1ygblIXcs7ifAdXp8EaU/gqex9VjnI+ynHtftGup3Iz5ex9BKadFKjVbWWCOitIjWljjF23j36WdTTgDb02MB6F2PzyoBCIckdGJoa7Q4t89R2jlaaxFljVrP0ZqtfQUPOiBLj4d5mJV6vC3rOx73jD/YCxvw8TqGVtopllqitTVqqdFaiWj38f7TP005AezL2DqjclbgUvrdOHqt71H2T6/rR8eMgzC0GndRWkSsJVosUWONqLb1FUZ50AFjcTiFPqjF27PG/ev1HjmH76vXfXEY3s4Z2hrnaLFEKSWi1YhW48cPv5hyAgCu4azAa9g//er13owUOPW6hnRO6MQhnMoSa5RY6/3elzKikR52wHgcUgHYU6/PIWdwpiB0YnBrREQs7RTnWOL9h980b4D+9Hrgh5mow21YZ17CO0tf1O0NCZ0Y2lIj6tefVLc+vZ01kod54AFb0YfpnT1KFnupHz3eixHP3z2uI4MQOjG0U5RobYmINd5//HXEBg4AsBUvjtux1vvr8R54X+lXj/vlEIRODK0ta9Ty9stPrXvit211PYPx0AO2ph/Tqz32pucw3E6Pz5tRa15/5FWETgyt1BattXj30Xc5AQyixxcBmIka3I613od151r2zg0InRjeEstT/1njeJiQDtiT3kxP9vxbfM/j49PvttXreo9a6/ojryZ0YmgtzvHTp39qSADj6fXFACCbfreNXtfZuwpTEzoxtBL3T/3nXh88e/PgA4C5OSNtz5rfVq/r69w9nl730rCETgzt/Qff5QQwMAc79tbDF+Q6y8Dr9PosGb229UdSnPe+AHhajfj6k+lqRCwlorQaa/k9zuvfnvofe3347E3jnsvIdWCvzqOF+w17UHvbs+bzcJ/HplYTmXSia6W0aKVGK2usEVFaRGtLnOJtvPv0s0YAcAwjB6SMq4e/xX/u33M8+l2uHtfzCPWsP5JG6ETX1mhxbp+jtHO01iLKGrWeo7Unt26PD58eaNhAz/Ru2J6624d1z9HjOjpvH0eP+2tIPl5H10o7xVJLtLZGLTVaKxHtPt77iXUAwPW8TMDYeqzho7yf9Li2DMykE12rcRelRcRaosUSNdaIasrpCkd5CALHpodzZM89iz2r56LfXc/aHY/+eGBCJ7q2xjlaLFFKiWg1otX48cMvmg7AcXmZgG2puf1Y+8v1umbeT46p1/02FKETQziVJdYosdb7p36bpvAwD0FgNPo5t9TTF+Re+/s4Dv3u5XpdqyPVrf5IOqETnVsjImJppzjHEu8//KbZANyG/grz6vVl/lZ663ezrf81el2j3vYS+Xrde8MQOjGENdqX73Z6nGYAcCz6OrdgX/EHYcE4eq3bo+2hXteZwQmd6FtZI9o5aq3xwydTTlewZsAleusZDsAcwaV11Vsdsg39bizqNIf+OAGhE31r54hYoy5P/65tLgZgCr0d6PR42MaMtabf9a/HNelt32TocZ17Yn1eQehE59YotcW7T/84YnO/NWsGXEv/4Ih6/oLcrP+Py1nrfvX4om+/5NEfJyF0omut3sW6np/8LVtdCwDAwc16rvIS258e96J9Mrce9+QQnnybh73V9jZ+/GjK6QrWDHitEg5YHIe9DONQr9uy3tyUSSe6VlbZCcCONGG43mvrZ6/6m/UFVL/rQ6/7z/7IpT9OROhE1959+vmphqLoH+ahCGTSUxid8wIvpd/tq9daPfK+6HXNORChE7uqrcYaS0QtUWONVtaorUbUU7S42/vyAPjiyAduuIWsmlF727Pm++g1/LAf8umPkxE6saul3kcpp1iXEqWc4hynuDutEesSP338X1NOl9N8AYDXmv2c5Ty1rV73m33AQ3rdr90SOrGrU4uo6xJvSon7dh/30eLNUiPKuvelAfAth29G5OUAuMYMzzz9kU0IndhVK6eIdo77dh+1nKOUEsvpc7z/8Jspp8vN8HAE9qXPwPOy68QX5u5Dv9tGj/vMvb8d/XFC570vgLmtsUQ5vY03bY27NaKcatTltPdlAfC4Eg5bjGGvfao+jkO/u60e13aWwEl/ZDMmndhViYho93FXSpRTjbX9X9Sne71G9bBZHpAAwHacu5yxbqXHveVec4ke93CXhE7sq72JU1mifP1up9r+Hj98+lXDB+ibPk3vvAxAv9Tnvqw/mxI6sa9yF62dopUarS1Rnv4CcQ3yYV7+gD3oPcAs9Ls8vZ7n3WO4Ed/pxL7aOSLuv/yylnj/4RcNH/KoJ27N953A8bXwPInQ7zL0un72N9fSH1/ApBO7qrHGGuc4tfVrAPWoXh9Se9PkgL3pQ/TGmYFb0e+u12tdznZPe70PHJjQiV2tEVFKizVqvP/482xNHwBgBF5U/8V59XK97h/3kgy97u9uCJ3Y1Xo6RbtvcSp+Yt0VPCiBXuhH9MKZAXiJGZ9b+iO7EDqxqzfL7xFvSvzgu5wARqePw7F5Yf0X/e7letw37h9sSOjErpY4R2mnp35Ljw+qHnhYAj3Sm9iTMwNb0u+e12NNznrferwXR2J9nyB0Ync/fvifWZs/AADjcoZ9XI8v4e4X7EDoxK6e2YA9Pqx64IEJ9EyPguNyNuMl7BNmZN8/Qug0uFOLiKhR4z5aiSjlFKdWo5U1Rri97z7+6uUE4Hj0drbmsM9e9Ltv9VqLM9+nXu8Jk+g/leBJv5/XOEeLiBprqbHGXdyffo/T+iai3O99ea+hOQKMbeYDPhyZM9r39Lsvet0b7g9b6bUGdnXe+wJ4nbdLjbuyRGk1zq1EjVP88J+/aazH5d4CIynhAMbt2WP0YPZ+1+ufffazc6/3hYkInQa3Ro1ztLhvLUpZ466te19SBs0RAC53hOfn7C+IjG3W4KnXP7N+Ah0QOo2u3MfSapR6jtLuo5Zeez4JPDiBEc36EgZH1sK5hP4d4dmjzsajP/6F73QaXF2+7OdS7mIpa0QbPkc8wsMBgG85fHErzg30ZrZ+pwb75d7QBaHT4NZaopRTrO0U5/WPn1rHAc12gAGORx+DY/FC+7hZ+p09AA9TG/9m+LGY2bVSI9oSp4hY6hqlyREBgCk41NOzo3+0+Mh/tiNwf+iGhGJw5esXh68REeMHTprjw2b52zLg+PQzOBZnN4CH6Y9fDZ9SAABDETyRwWGeEeh37EF/pCs+XkcvNMeHOawAR3T0j51wXL0+l9VTv/Q7ZqE/8iCTTgDAHno9nMKI9qwnL3TP0+9gP/rjzoRO9EAxPswBBQC+59zAiJzr2IL+SHeETgDAXryEMZLe96u/zQf20nt/3NP0/VHoxN6mL8JHaNzALPQ7LuHcwMj0O25Jf3yc2tuR0AkA2JvDIL2zR5/nhfdl7CWOxp5+3tT9UejEnqYuvido3ADwPeeG5zlDjMF9Ipv++Dx1txOhEwDQA4dBYCZ6HjAFoRN7kcY/zAEEmJkeSI9G25e+UBzYiv74ctP2R6ETANCT0Q6wbGPawzqHpt+RQX+ka0In9qAxPszBA+AL/ZBe2IuXc867jD3GqOzdy03ZH4VOAAD0bMpD+it5GRyL+8W19MfLqbeNCZ3Ymsb4MM0P4Fv6IgDA4IROAECvBE/safT95wtzxzL6fmN7e9bZ6PtVf9yQ0IktTVdgALza6AdbXsfZgZnod8DhCJ1gfw4YAE/TJ9maPfd6AsPr2Hv0zh59van6o9CJrUxVWADAqzk7vJ6XwzG5bzxHf3w9dbYRoRPsS7MDeBn9EsbjxRjgYdP0x/PeF8AUpimoK1ib1xvlRXSU6zyaUdd91Ou+tZHWZaRr7ZU1zNH7OvZ+fXvpfV16v76js/45rOMGTDoBAAAAkE7oBAAAAEA6oRO35uNjAAAAMCGhEwAAAADphE7ckiknAAAAmJTQCQAAAIB0QiduxZQTAAAATEzoBAAAAEA6oRO3YMoJAAAAJid0AgAAACCd0IlsppwAAAAAoRMAAAAA+YROZDLlBAAAAESE0AkAAACAGxA6kcWUEwAAAPAnoRMAAAAA6YROZDDlBAAAAHxD6AQAAABAOqETr2XKCQAAAPiO0AkAAACAdEInXsOUEwAAAPAgoRMAAAAA6YROXMuUEwAAAPAooRMAAAAA6YROXMOUEwAAAPAkoRMAAAAA6YROAAAAAKQTOnEpH60DAAAAniV0AgAAACCd0IlLmHICAAAAXkToBAAAAEA6oRMvZcoJAAAAeDGhEwAAAADphE68hCknAAAA4CJCJwAAAADSCZ14jiknAAAA4GJCJwAAAADSCZ14iiknAAAA4CpCJwAAAADSCZ14jCknAAAA4GpCJwAAAADSCZ14iCknAAAA4FWETgAAAACkEzrxV6acAAAAgFcTOgEAAACQTujEvzPlBAAAAKQQOgEAAACQTujEH0w5AQAAAGmETgAAAACkEzoRYcoJAAAASCZ0AgAAACCd0AkAAACAdEInfLQOAAAASCd0AgAAACCd0GluppwAAACAmxA6AQAAAJBO6DQvU04AAADAzQidAAAAAEgndJqTKScAAADgpoROAAAAAKQTOs3HlBMAAABwc0InAAAAANIJneZiygkAAADYhNAJAAAAgHRCp3mYcgIAAAA2I3QCAAAAIJ3QaQ6mnAAAAIBNTRU61YiosUaU9c9/Ht2ff4ayRo31EH8mAAAAYHylNUMwAAAAAOQyGAMAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQTugEAAAAQDqhEwAAAADphE4AAAAApBM6AQAAAJBO6AQAAABAOqETAAAAAOmETgAAAACkEzoBAAAAkE7oBAAAAEA6oRMAAAAA6YROAAAAAKQTOgEAAACQ7v8BeaBZGmCg0WcAAAAASUVORK5CYII=" alt="Finlanza" style="height:36px;width:auto;display:block;">
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="<?php echo home_url('/'); ?>" <?php if(is_front_page()) echo 'class="active" aria-current="page"'; ?>>Home</a></li>
    <li><a href="<?php echo home_url('/services/'); ?>" <?php if(is_page('services')) echo 'class="active" aria-current="page"'; ?>>Services</a></li>
    <li><a href="<?php echo home_url('/products/'); ?>" <?php if(is_page('products')) echo 'class="active" aria-current="page"'; ?>>Products</a></li>
    <li><a href="<?php echo home_url('/dream/'); ?>" <?php if(is_page('dream')) echo 'class="active" aria-current="page"'; ?>>DREAM™</a></li>
    <li><a href="<?php echo home_url('/insights/'); ?>" <?php if(is_page('insights') || is_single()) echo 'class="active" aria-current="page"'; ?>>Insights</a></li>
    <li><a href="<?php echo home_url('/scorecard/'); ?>" class="nav-gold<?php if(is_page('scorecard')) echo ' active'; ?>" <?php if(is_page('scorecard')) echo 'aria-current="page"'; ?>>Free Scorecard</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>" class="nav-cta<?php if(is_page('contact')) echo ' active'; ?>" <?php if(is_page('contact')) echo 'aria-current="page"'; ?>>Book a Review</a></li>
  </ul>
  <button class="nav-hamburger"
    onclick="document.getElementById('navLinks').classList.toggle('mob-open');
             this.setAttribute('aria-expanded',
             this.getAttribute('aria-expanded')==='false'?'true':'false');"
    aria-label="Toggle navigation menu" aria-expanded="false">☰</button>
</nav>

<main>
<?php
// Discard any post navigation output injected before our loop by theme functions
ob_start();
if ( have_posts() ) : while ( have_posts() ) : the_post();
ob_end_clean();
?>

  <!-- ARTICLE HERO — dark brand header -->
  <section class="article-hero">
    <div class="article-container">
      <a href="<?php echo home_url('/insights/'); ?>" class="article-breadcrumb">← All Insights</a>
      <div class="hero-inner">
        <span class="article-cat-badge"><?php echo $cat_name; ?></span>
        <h1 class="article-title"><?php the_title(); ?></h1>
        <?php if ( $post_excerpt ) : ?>
        <p class="article-standfirst"><?php echo esc_html( wp_trim_words( $post_excerpt, 45 ) ); ?></p>
        <?php endif; ?>
        <div class="article-meta-row">
          <time datetime="<?php echo esc_attr( $post_date ); ?>"><?php echo $post_date_display; ?></time>
          <span class="meta-sep">·</span>
          <span><?php echo get_the_author(); ?></span>
          <?php
          $word_count = str_word_count( strip_tags( get_the_content() ) );
          $read_time  = max( 1, ceil( $word_count / 220 ) );
          ?>
          <span class="meta-sep">·</span>
          <span><?php echo $read_time; ?> min read</span>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURED IMAGE -->
  <?php if ( has_post_thumbnail() ) : ?>
  <div class="featured-image-wrap">
    <?php the_post_thumbnail( 'large', array( 'alt' => esc_attr( $post_title ) ) ); ?>
  </div>
  <?php endif; ?>

  <!-- ARTICLE BODY — light background -->
  <div class="article-body-section">
    <div class="article-container">
      <div class="article-layout">

        <!-- MAIN ARTICLE CONTENT -->
        <article class="article-content" id="article-content">
          <?php the_content(); ?>

          <!-- Tags -->
          <?php $tags = get_the_tags(); if ( $tags ) : ?>
          <div class="article-tags">
            <span class="tag-label">Tags:</span>
            <?php foreach ( $tags as $tag ) : ?>
            <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="tag-link">
              <?php echo esc_html( $tag->name ); ?>
            </a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <!-- Post navigation -->
          <nav class="post-nav" aria-label="Article navigation">
            <div class="post-nav-item prev">
              <?php $prev = get_previous_post(); if ( $prev ) : ?>
              <span class="post-nav-label">← Previous</span>
              <a href="<?php echo get_permalink( $prev->ID ); ?>" class="post-nav-title">
                <?php echo esc_html( get_the_title( $prev->ID ) ); ?>
              </a>
              <?php endif; ?>
            </div>
            <div class="post-nav-item next">
              <?php $next = get_next_post(); if ( $next ) : ?>
              <span class="post-nav-label">Next →</span>
              <a href="<?php echo get_permalink( $next->ID ); ?>" class="post-nav-title">
                <?php echo esc_html( get_the_title( $next->ID ) ); ?>
              </a>
              <?php endif; ?>
            </div>
          </nav>
        </article>

        <!-- SIDEBAR — subtle, non-distracting -->
        <aside class="article-sidebar" aria-label="Article sidebar">

          <!-- Minimal CTA -->
          <div class="sidebar-cta">
            <span class="sidebar-cta-label">Free Assessment</span>
            <div class="sidebar-cta-headline">How healthy are your business systems?</div>
            <p class="sidebar-cta-body">Take the 18-question health check. Get a scored breakdown across 6 operational dimensions in 5 minutes.</p>
            <a href="<?php echo home_url('/scorecard/'); ?>" class="sidebar-btn">Take the Scorecard →</a>
            <a href="<?php echo home_url('/contact/'); ?>" class="sidebar-btn-ghost">Book a Review</a>
          </div>

          <!-- About Finlanza — minimal -->
          <div class="sidebar-divider">
            <span class="sidebar-divider-label">About Finlanza</span>
            <p style="font-size:13px;color:var(--article-muted);line-height:1.65;margin-bottom:12px;">Business Systems Architecture Firm. We engineer scalable operations for African enterprises on the DREAM™ Framework.</p>
            <a href="<?php echo home_url('/dream/'); ?>" style="font-size:12px;letter-spacing:1px;text-transform:uppercase;color:var(--gold);text-decoration:none;">Learn about DREAM™ →</a>
          </div>

          <!-- Related posts -->
          <?php
          $related_args = array(
            'post_type'      => 'post',
            'posts_per_page' => 4,
            'post_status'    => 'publish',
            'post__not_in'   => array( get_the_ID() ),
            'orderby'        => 'date',
            'order'          => 'DESC',
          );
          if ( $cats ) { $related_args['category__in'] = array( $cats[0]->term_id ); }
          $related_query = new WP_Query( $related_args );
          if ( $related_query->post_count < 2 ) {
            unset( $related_args['category__in'] );
            $related_query = new WP_Query( $related_args );
          }
          if ( $related_query->have_posts() ) : ?>
          <div class="sidebar-divider">
            <span class="sidebar-divider-label">More Articles</span>
            <?php while ( $related_query->have_posts() ) : $related_query->the_post();
              $rel_cats = get_the_category();
              $rel_cat  = $rel_cats ? esc_html( $rel_cats[0]->name ) : 'Insights';
            ?>
            <div class="sidebar-related-item">
              <div class="sidebar-related-cat"><?php echo $rel_cat; ?></div>
              <a href="<?php the_permalink(); ?>" class="sidebar-related-title"><?php the_title(); ?></a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>

        </aside>
      </div>
    </div>
  </div>

  <!-- POST-ARTICLE CTA BAND — dark, full width -->
  <div class="post-cta-band">
    <div>
      <span class="post-cta-label">Your Next Step</span>
      <div class="post-cta-headline">Know where your business systems stand.</div>
      <p class="post-cta-sub">The 18-question Finlanza Business Systems Health Check gives you a scored assessment across 6 operational dimensions. Takes 5 minutes. Free.</p>
    </div>
    <div class="post-cta-actions">
      <a href="<?php echo home_url('/scorecard/'); ?>" class="btn-primary">Take the Free Scorecard →</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="btn-ghost">Book a Consultation</a>
    </div>
  </div>

<?php endwhile; endif; ?>
</main>

<footer role="contentinfo" aria-label="Site footer">
  <div style="max-width:1200px;margin:0 auto;padding:0 60px;">
    <div style="text-align:center;padding:0 0 32px;border-bottom:1px solid var(--border-light);">
      <div style="font-family:'Bebas Neue',sans-serif;font-size:clamp(22px,3vw,38px);line-height:1;letter-spacing:1px;color:var(--white);margin-bottom:8px;">
        <span style="color:var(--gold);">Scalability</span> is not an accident.<br>It is engineered.
      </div>
      <span style="font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-top:12px;display:block;">Zoho Authorized Partner · Enterprise Implementation Specialists · Africa</span>
    </div>
    <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:40px;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div>
        <div style="font-family:'Bebas Neue',sans-serif;font-size:22px;letter-spacing:2px;color:var(--white);margin-bottom:4px;">FINLANZA</div>
        <p style="color:var(--text-muted);font-size:13px;line-height:1.7;">We engineer scalable business systems for multi-location, multi-entity organizations across Africa — built on the DREAM™ Transformation Framework.</p>
      </div>
      <div>
        <div style="font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-bottom:14px;">Services</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Diagnose</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Transform</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Managed</a>
          <a href="<?php echo home_url('/pricing/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Pricing</a>
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
        <div style="display:flex;flex-direction:column;gap:9px;font-size:13px;color:var(--text-muted);">
          <a href="mailto:ask@finlanza.com" style="color:var(--text-muted);text-decoration:none;">ask@finlanza.com</a>
          <a href="tel:+254724463536" style="color:var(--text-muted);text-decoration:none;">+254 724 463 536</a>
          <span>Nairobi, Kenya</span>
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
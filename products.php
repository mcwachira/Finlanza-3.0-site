<?php /* Template Name: Finlanza Products */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>F2 Transform — Vertical Products · Finlanza</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

<!-- SEO Meta Tags -->
<meta name="description" content="F2 Transform vertical products built for specific industries. GarageERP for automotive workshops, PoultryOS for poultry farming, and more - all engineered on Zoho Creator for East Africa.">
<link rel="canonical" href="<?php echo home_url('/products/'); ?>">

<!-- Open Graph Tags -->
<meta property="og:title" content="F2 Transform — Vertical Products · Finlanza">
<meta property="og:description" content="Industry-specific business systems built on Zoho Creator. GarageERP, PoultryOS, and more vertical products for East Africa.">
<meta property="og:image" content="<?php echo home_url('/wp-content/themes/My-custom-theme/images/finlanza-social.jpg'); ?>">
<meta property="og:url" content="<?php echo home_url('/products/'); ?>">
<meta property="og:type" content="website">

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="F2 Transform — Vertical Products · Finlanza">
<meta name="twitter:description" content="Industry-specific business systems built on Zoho Creator for East Africa.">
<meta name="twitter:image" content="<?php echo home_url('/wp-content/themes/My-custom-theme/images/finlanza-social.jpg'); ?>">

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "F2 Transform — Vertical Products",
  "description": "Industry-specific business systems built on Zoho Creator for East Africa",
  "url": "<?php echo home_url('/products/'); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "Finlanza",
    "url": "<?php echo home_url('/'); ?>"
  }
}
</script>

<style>
  :root {
    --navy: #0D1B2A;
    --navy-mid: #152232;
    --navy-light: #1E3045;
    --gold: #C8971C;
    --gold-light: #E8B84B;
    --gold-pale: #FBF0D4;
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

  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3Cfilter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
    opacity: 0.025;
    pointer-events: none;
    z-index: 9999;
  }

  /* Focus styles */
  :focus-visible {
    outline: 2px solid var(--gold);
    outline-offset: 2px;
  }

  /* Reduced motion */
  @media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
      animation-duration: 0.01ms !important;
      animation-iteration-count: 1 !important;
      transition-duration: 0.01ms !important;
    }
  }

  /* NAV */
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
    transition: border-color 0.3s;
  }

  .nav-logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    gap: 0;
  }
  .nav-logo img {
    height: 36px;
    width: auto;
    display: block;
  }

  .nav-links {
    display: flex;
    align-items: center;
    gap: 36px;
    list-style: none;
  }
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
  .nav-links a[aria-current="page"] { color: var(--white); }
  .nav-cta {
    background: var(--gold) !important;
    color: var(--navy) !important;
    padding: 10px 24px !important;
    font-weight: 500 !important;
  }
  .nav-cta:hover { background: var(--gold-light) !important; }

  /* LAYOUT */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 60px; }

  .label {
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 16px;
    display: block;
  }

  .display-xl {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(64px, 10vw, 140px);
    line-height: 0.9;
    letter-spacing: 2px;
    color: var(--white);
  }
  .display-lg {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(48px, 6vw, 88px);
    line-height: 0.95;
    letter-spacing: 1px;
    color: var(--white);
  }
  .display-md {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(36px, 4vw, 56px);
    line-height: 1;
    letter-spacing: 1px;
    color: var(--white);
  }

  .gold { color: var(--gold); }

  .btn-primary {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--gold); color: var(--navy);
    padding: 14px 32px; font-size: 13px; font-weight: 600;
    letter-spacing: 2px; text-transform: uppercase;
    text-decoration: none; border: none; cursor: pointer; transition: all 0.2s;
  }
  .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }

  .btn-ghost {
    display: inline-flex; align-items: center; gap: 10px;
    background: transparent; color: var(--white);
    padding: 14px 32px; font-size: 13px; font-weight: 500;
    letter-spacing: 2px; text-transform: uppercase;
    text-decoration: none; border: 1px solid var(--border-light); cursor: pointer; transition: all 0.2s;
  }
  .btn-ghost:hover { border-color: var(--gold); color: var(--gold); }

  /* ANIMATIONS */
  .reveal { opacity: 0; transform: translateY(28px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .reveal.visible { opacity: 1; transform: none; }
  .reveal-d1 { transition-delay: 0.1s; }
  .reveal-d2 { transition-delay: 0.2s; }
  .reveal-d3 { transition-delay: 0.3s; }
  .reveal-d4 { transition-delay: 0.4s; }

  /* HERO */
  .hero {
    min-height: 100vh;
    display: flex; align-items: center;
    padding-top: 72px;
    position: relative; overflow: hidden;
  }
  .hero-bg {
    position: absolute; inset: 0;
    background:
      radial-gradient(ellipse 60% 60% at 80% 50%, rgba(200,151,28,0.06) 0%, transparent 70%),
      radial-gradient(ellipse 40% 40% at 10% 80%, rgba(200,151,28,0.04) 0%, transparent 70%);
  }
  .hero-rule {
    position: absolute; top: 0; right: 0;
    width: 1px; height: 100%;
    background: linear-gradient(to bottom, transparent, var(--gold) 40%, transparent);
    opacity: 0.15;
    transform: translateX(-340px) skewX(-12deg);
  }
  .hero-inner { position: relative; z-index: 2; padding: 80px 0; }

  .hero-eyebrow {
    font-family: 'Space Mono', monospace;
    font-size: 11px; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 32px;
    display: flex; align-items: center; gap: 16px;
  }
  .hero-eyebrow::before { content: ''; width: 40px; height: 1px; background: var(--gold); opacity: 0.6; }

  .hero-sub {
    font-size: 18px; font-weight: 300; color: var(--text-muted);
    max-width: 560px; line-height: 1.75; margin: 28px 0 48px;
  }
  .hero-stats {
    display: flex; gap: 48px;
    padding-top: 48px; border-top: 1px solid var(--border-light); margin-top: 48px;
  }
  .hero-stat-val {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 36px; letter-spacing: 1px; color: var(--gold); display: block;
  }
  .hero-stat-label { font-size: 12px; color: var(--text-muted); letter-spacing: 1px; }

  /* PRODUCT GRID */
  .products-section { padding: 100px 0; background: var(--navy-mid); }

  .products-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px; margin-top: 60px;
  }

  /* BETA CARD */
  .product-card {
    background: var(--navy); padding: 48px 40px;
    position: relative; overflow: hidden;
    transition: transform 0.3s ease, background 0.3s ease;
    display: flex; flex-direction: column; min-height: 380px;
  }
  .product-card::before {
    content: ''; position: absolute; top: 0; left: 0;
    width: 100%; height: 2px;
    background: linear-gradient(90deg, var(--gold), transparent);
    opacity: 0; transition: opacity 0.3s;
  }
  .product-card:hover { background: var(--navy-light); transform: translateY(-3px); }
  .product-card:hover::before { opacity: 1; }

  .product-card-tag {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 10px; font-weight: 600; letter-spacing: 2.5px; text-transform: uppercase;
    padding: 5px 12px; margin-bottom: 28px; align-self: flex-start;
  }
  .tag-beta {
    background: rgba(200,151,28,0.12); color: var(--gold);
    border: 1px solid rgba(200,151,28,0.3);
  }
  .tag-beta::before {
    content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--gold);
  }

  .product-card-vertical {
    font-family: 'Space Mono', monospace; font-size: 10px;
    letter-spacing: 3px; text-transform: uppercase; color: var(--text-muted); margin-bottom: 10px;
  }
  .product-card-name {
    font-family: 'Bebas Neue', sans-serif; font-size: 42px;
    letter-spacing: 2px; color: var(--white); line-height: 1; margin-bottom: 16px;
  }
  .product-card-hook {
    font-family: 'DM Serif Display', serif; font-style: italic;
    font-size: 15px; color: var(--gold-light); margin-bottom: 16px;
  }
  .product-card-desc {
    font-size: 14px; color: var(--text-muted); line-height: 1.75; flex: 1; margin-bottom: 32px;
  }
  .product-card-cta {
    display: inline-flex; align-items: center; gap: 10px;
    font-size: 12px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase;
    color: var(--gold); text-decoration: none; transition: gap 0.2s; align-self: flex-start;
  }
  .product-card-cta:hover { gap: 16px; }
  .product-card-cta::after { content: '→'; }

  /* PIPELINE CARD */
  .product-card-pipeline {
    background: rgba(13,27,42,0.4); padding: 48px 40px;
    position: relative; overflow: hidden;
    display: flex; flex-direction: column; min-height: 380px;
    border: 1px solid var(--border-light);
  }
  .tag-pipeline {
    display: inline-block;
    background: rgba(255,255,255,0.04); color: var(--text-muted);
    border: 1px solid var(--border-light);
    font-size: 10px; font-weight: 600; letter-spacing: 2.5px; text-transform: uppercase;
    padding: 5px 12px; margin-bottom: 28px;
  }
  .product-card-pipeline .product-card-name { color: rgba(255,255,255,0.2); }
  .product-card-pipeline .product-card-vertical { color: rgba(138,155,173,0.35); }
  .product-card-pipeline .product-card-hook { color: rgba(232,184,75,0.2); }
  .product-card-pipeline .product-card-desc { color: rgba(138,155,173,0.45); }
  .product-card-pipeline::after {
    content: ''; position: absolute; inset: 0;
    background: repeating-linear-gradient(-45deg, transparent, transparent 8px, rgba(255,255,255,0.012) 8px, rgba(255,255,255,0.012) 9px);
    pointer-events: none;
  }
  .pipeline-label {
    font-family: 'Space Mono', monospace; font-size: 10px;
    letter-spacing: 3px; color: rgba(138,155,173,0.3); text-transform: uppercase;
    margin-top: auto; padding-top: 24px; border-top: 1px solid rgba(255,255,255,0.04);
  }

  /* ABOUT */
  .about-section { padding: 100px 0; }
  .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
  .about-principle { padding: 28px 0; border-bottom: 1px solid var(--border-light); }
  .about-principle:first-child { border-top: 1px solid var(--border-light); }
  .about-principle-num { font-family: 'Space Mono', monospace; font-size: 10px; color: var(--gold); letter-spacing: 2px; margin-bottom: 8px; }
  .about-principle-title { font-family: 'Bebas Neue', sans-serif; font-size: 22px; letter-spacing: 1.5px; color: var(--white); margin-bottom: 8px; }
  .about-principle-body { font-size: 14px; color: var(--text-muted); line-height: 1.75; }

  /* CTA */
  .cta-section { padding: 100px 0; background: var(--navy-mid); text-align: center; }

  /* FOOTER */
  footer { border-top: 1px solid var(--border-light); }
  .footer-top { text-align: center; padding: 40px 0 32px; border-bottom: 1px solid var(--border-light); }
  .footer-grid {
    display: grid; grid-template-columns: 1.4fr 1fr 1fr 1fr;
    gap: 40px; padding: 40px 0 32px; border-bottom: 1px solid var(--border-light);
  }
  .footer-col-title { font-family: 'Bebas Neue', sans-serif; font-size: 22px; letter-spacing: 2px; color: var(--white); margin-bottom: 4px; }
  .footer-links { display: flex; flex-direction: column; gap: 9px; }
  .footer-links a { color: var(--text-muted); font-size: 13px; text-decoration: none; transition: color 0.2s; }
  .footer-links a:hover { color: var(--gold); }

  .footer-bottom {
    display: flex; justify-content: space-between; align-items: center;
    padding: 20px 0; font-size: 12px; color: var(--text-muted);
    flex-wrap: wrap; gap: 12px;
  }

  /* ZOHO PARTNER BADGE */
  .zoho-partner-badge {
    display: inline-flex; align-items: center; gap: 10px;
    border: 1px solid rgba(200,151,28,0.18);
    padding: 7px 14px;
    opacity: 0.65;
    transition: opacity 0.3s;
  }
  .zoho-partner-badge:hover { opacity: 0.9; }
  .zoho-partner-badge-logo {
    font-family: 'Space Mono', monospace;
    font-size: 11px; letter-spacing: 2px;
    color: rgba(255,255,255,0.5);
    font-weight: 700;
  }
  .zoho-partner-badge-sep {
    width: 1px; height: 16px;
    background: rgba(200,151,28,0.3);
  }
  .zoho-partner-badge-label {
    font-family: 'Space Mono', monospace;
    font-size: 9px; letter-spacing: 2px; text-transform: uppercase;
    color: rgba(200,151,28,0.75);
  }

  .footer-logo img { height: 28px; width: auto; opacity: 0.85; margin-bottom: 12px; display: block; }

  /* HAMBURGER */
  .nav-hamburger { display: none; background: none; border: none; color: var(--white); font-size: 22px; cursor: pointer; }

  @media (max-width: 900px) {
    nav { padding: 0 24px; }
    .container { padding: 0 24px; }
    .products-grid { grid-template-columns: 1fr; gap: 2px; }
    .about-grid { grid-template-columns: 1fr; gap: 48px; }
    .footer-grid { grid-template-columns: 1fr 1fr; }
    .hero-stats { flex-direction: column; gap: 24px; }
    .nav-links { display: none; }
    .nav-hamburger { display: block; }
    .nav-links.mob-open {
      display: flex; flex-direction: column;
      position: fixed; top: 72px; left: 0; right: 0;
      background: var(--navy); padding: 24px; gap: 20px;
      border-bottom: 1px solid var(--border);
    }
    .footer-bottom { flex-direction: column; align-items: flex-start; gap: 16px; }
  }

  /* ── PAGE HERO ── */
  .page-hero {
    min-height: 50vh;
    display: flex;
    align-items: center;
    padding-top: 72px;
    position: relative;
    overflow: hidden;
  }
  .page-hero-bg {
    position: absolute; inset: 0;
    background: radial-gradient(ellipse 60% 60% at 80% 50%, rgba(200,151,28,0.06) 0%, transparent 70%);
  }

</style>
<?php wp_head(); ?>
</head>
<body>

<!-- NAV -->
<nav id="main-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <img src="<?php echo get_theme_file_uri('images/finlanza-logo.png'); ?>" alt="Finlanza">
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
    <li><a href="<?php echo home_url('/services/'); ?>">Services</a></li>
    <li><a href="<?php echo home_url('/products/'); ?>" aria-current="page">Products</a></li>
    <li><a href="<?php echo home_url('/dream/'); ?>">DREAM™</a></li>
    <li><a href="<?php echo home_url('/insights/'); ?>">Insights</a></li>
    <li><a href="<?php echo home_url('/scorecard/'); ?>" style="color: var(--gold);">Free Scorecard</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>" class="nav-cta">Book a Review</a></li>
  </ul>
  <button class="nav-hamburger" onclick="document.getElementById('navLinks').classList.toggle('mob-open')" aria-label="Menu" aria-expanded="false">☰</button>
</nav>

<main>
<!-- HERO -->
<section class="hero">
  <div class="hero-bg" aria-hidden="true"></div>
  <div class="hero-rule" aria-hidden="true"></div>
  <div class="container">
    <div class="hero-inner">
      <div class="hero-eyebrow reveal">F2 Transform · Vertical Products</div>
      <div class="display-xl reveal reveal-d1">BUILT FOR<br>YOUR <span class="gold">INDUSTRY.</span></div>
      <p class="hero-sub reveal reveal-d2">
        Most business software is built for everyone — which means it fits no one precisely.
        F2 Transform products are purpose-built vertical systems for specific industries,
        engineered on Zoho Creator and deployed across East Africa.
      </p>
      <div style="display:flex;gap:16px;flex-wrap:wrap;" class="reveal reveal-d3">
        <a href="<?php echo home_url('/contact/'); ?>" class="btn-primary">Discuss Your Industry</a>
        <a href="<?php echo home_url('/services/'); ?>" class="btn-ghost">How We Implement</a>
      </div>
      <div class="hero-stats reveal reveal-d4">
        <div>
          <span class="hero-stat-val">7</span>
          <span class="hero-stat-label">Vertical products in suite</span>
        </div>
        <div>
          <span class="hero-stat-val">2</span>
          <span class="hero-stat-label">Now accepting pilot clients</span>
        </div>
        <div>
          <span class="hero-stat-val">Zoho</span>
          <span class="hero-stat-label">Built on Zoho Creator · Authorised Partner</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRODUCT GRID -->
<section class="products-section">
  <div class="container">
    <span class="label reveal">The F2 Transform Suite</span>
    <div class="display-lg reveal reveal-d1">THE FULL <span class="gold">SUITE.</span></div>
    <p style="color:var(--text-muted);font-size:16px;max-width:580px;margin-top:20px;line-height:1.8;" class="reveal reveal-d2">
      Two products are currently available to pilot clients. The remaining five are in active development — each solving a specific operational problem in its sector.
    </p>

    <div class="products-grid">

      <!-- BETA: GarageERP -->
      <div class="product-card reveal">
        <span class="product-card-tag tag-beta">Now Accepting Pilots</span>
        <div class="product-card-vertical">Automotive · Workshops</div>
        <div class="product-card-name">GarageERP</div>
        <div class="product-card-hook">"Run your workshop. Not spreadsheets."</div>
        <p class="product-card-desc">A complete garage management system — job cards, quotations, parts tracking, technician scheduling, insurance claims, and owner dashboards. All in one Zoho Creator system.</p>
        <a href="<?php echo home_url('/garage-erp/'); ?>" class="product-card-cta">Explore GarageERP</a>
      </div>

      <!-- BETA: PoultryOS -->
      <div class="product-card reveal reveal-d1">
        <span class="product-card-tag tag-beta">Now Accepting Pilots</span>
        <div class="product-card-vertical">Agriculture · Poultry Farming</div>
        <div class="product-card-name">PoultryOS</div>
        <div class="product-card-hook">"Know your true cost per bird."</div>
        <p class="product-card-desc">Batch management, feed tracking, mortality recording, flock performance analytics, and cost-per-bird reporting built specifically for commercial poultry operations.</p>
        <a href="<?php echo home_url('/poultry-os/'); ?>" class="product-card-cta">Explore PoultryOS</a>
      </div>

      <!-- PIPELINE: PayrollOS -->
      <div class="product-card-pipeline reveal reveal-d2">
        <span class="tag-pipeline">In Development</span>
        <div class="product-card-vertical">HR & Finance · Payroll</div>
        <div class="product-card-name">PayrollOS</div>
        <div class="product-card-hook">"Kenya payroll. Built into your Zoho stack."</div>
        <p class="product-card-desc">A Kenya-statutory payroll engine covering PAYE, NSSF, SHIF, AHL, and NITA — integrated directly into Zoho People and Zoho Books.</p>
        <div class="pipeline-label">Coming Soon · Register Interest ↓</div>
      </div>

      <!-- PIPELINE: DataBridge -->
      <div class="product-card-pipeline reveal">
        <span class="tag-pipeline">In Development</span>
        <div class="product-card-vertical">Data & Migration</div>
        <div class="product-card-name">DataBridge</div>
        <div class="product-card-hook">"Clean migration. Zero data loss."</div>
        <p class="product-card-desc">Automated data migration and transformation tooling for businesses moving from legacy systems — QuickBooks, Sage, Excel — into a unified Zoho stack.</p>
        <div class="pipeline-label">Coming Soon · Register Interest ↓</div>
      </div>

      <!-- PIPELINE: AIDEN -->
      <div class="product-card-pipeline reveal reveal-d1">
        <span class="tag-pipeline">In Development</span>
        <div class="product-card-vertical">AI · Agent Engineering</div>
        <div class="product-card-name">AIDEN™</div>
        <div class="product-card-hook">"Your business, intelligently automated."</div>
        <p class="product-card-desc">A library of 20+ AI agents across Finance, Sales, Operations, HR, and Executive PA functions — watching your Zoho data and acting so your team focuses on decisions.</p>
        <div class="pipeline-label">Coming Soon · Register Interest ↓</div>
      </div>

      <!-- PIPELINE: Transport OS -->
      <div class="product-card-pipeline reveal reveal-d2">
        <span class="tag-pipeline">In Development</span>
        <div class="product-card-vertical">Logistics & Fleet</div>
        <div class="product-card-name">Transport OS</div>
        <div class="product-card-hook">"Run your fleet. Not your spreadsheets."</div>
        <p class="product-card-desc">Trip management, fleet oversight, fuel tracking, vendor settlements, and multi-branch logistics visibility — built for transport operators across East Africa.</p>
        <div class="pipeline-label">Coming Soon · Register Interest ↓</div>
      </div>

      <!-- PIPELINE: Education EMS -->
      <div class="product-card-pipeline reveal" style="grid-column: 1 / 3;">
        <span class="tag-pipeline">In Development</span>
        <div class="product-card-vertical">Education · Schools</div>
        <div class="product-card-name">Education EMS</div>
        <div class="product-card-hook">"Fee management that actually works."</div>
        <p class="product-card-desc">Term billing, fee management, parent communication, and financial visibility for school operators — ending the spreadsheet chaos of term-end collections.</p>
        <div class="pipeline-label">Coming Soon · Register Interest ↓</div>
      </div>

    </div>
  </div>
</section>

<!-- HOW WE BUILD -->
<section class="about-section">
  <div class="container">
    <div class="about-grid">
      <div>
        <span class="label reveal">Our Build Philosophy</span>
        <div class="display-lg reveal reveal-d1">HOW WE <span class="gold">BUILD.</span></div>
        <p style="color:var(--text-muted);font-size:16px;line-height:1.8;margin-top:24px;" class="reveal reveal-d2">
          Every F2 Transform product starts the same way — with a sector problem, not a feature list. We implement with a real client first, then productise. Nothing ships until it's been run in production.
        </p>
      </div>
      <div>
        <div class="about-principle reveal">
          <div class="about-principle-num">01</div>
          <div class="about-principle-title">Sector-first, not feature-first</div>
          <p class="about-principle-body">We identify operational problems specific to an industry — cost per bird, insurance claim turnaround, technician utilisation — and architect from there.</p>
        </div>
        <div class="about-principle reveal reveal-d1">
          <div class="about-principle-num">02</div>
          <div class="about-principle-title">Built on Zoho Creator</div>
          <p class="about-principle-body">Every product lives in Zoho Creator and integrates natively with Zoho CRM, Books, People, and the wider Zoho One suite — no custom code silos.</p>
        </div>
        <div class="about-principle reveal reveal-d2">
          <div class="about-principle-num">03</div>
          <div class="about-principle-title">Deployed with DREAM Framework</div>
          <p class="about-principle-body">Implementation follows our five-phase DREAM process. Clients don't just get software — they get a restructured operation and trained users.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <div style="max-width:680px;margin:0 auto;">
      <span class="label reveal" style="display:block;text-align:center;">Pipeline Products</span>
      <div class="display-md reveal reveal-d1">INTERESTED IN A<br><span class="gold">PIPELINE PRODUCT?</span></div>
      <p style="color:var(--text-muted);font-size:16px;line-height:1.8;margin:24px auto 36px;max-width:500px;" class="reveal reveal-d2">
        If one of the in-development products solves a problem you're facing right now, reach out. Early clients shape the product — and get preferential pricing.
      </p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;" class="reveal reveal-d3">
        <a href="<?php echo home_url('/contact/'); ?>" class="btn-primary">Register Your Interest</a>
        <a href="<?php echo home_url('/scorecard/'); ?>" class="btn-ghost">Take Free Scorecard</a>
      </div>
    </div>
  </div>
</section>

</main>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div style="text-align:center;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div class="display-md" style="font-size:clamp(22px,3vw,38px);margin-bottom:8px;"><span class="gold">Scalability</span> is not an accident.<br>It is engineered.</div>
      <div class="label" style="margin-top:12px;">Zoho Authorised Partner · Enterprise Implementation Specialists · Africa</div>
    </div>
    <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:40px;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div>
        <img src="<?php echo get_theme_file_uri('images/finlanza-logo.png'); ?>" alt="Finlanza" class="footer-logo">
        <div class="label" style="margin-bottom:12px;">Business Systems Architecture Firm</div>
        <p style="color:var(--text-muted);font-size:13px;line-height:1.7;">We engineer scalable business systems for multi-location, multi-entity organizations across Africa — built on DREAM™ Transformation Framework.</p>
        <div style="margin-top:20px;display:inline-flex;align-items:center;gap:8px;border:1px solid rgba(200,151,28,0.16);padding:6px 12px;opacity:0.65;">
          <span style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:2px;color:rgba(255,255,255,0.45);">ZOHO</span>
          <span style="display:inline-block;width:1px;height:14px;background:rgba(200,151,28,0.25);"></span>
          <span style="font-family:'Space Mono',monospace;font-size:8.5px;letter-spacing:2px;text-transform:uppercase;color:rgba(200,151,28,0.7);">Authorised Partner · Africa</span>
        </div>
      </div>
      <div>
        <div class="label" style="margin-bottom:14px;">Services</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Diagnose</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Transform</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Managed</a>
          <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Book a Scoping Call</a>
        </div>
      </div>
      <div>
        <div class="label" style="margin-bottom:14px;">Products</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/garage-erp/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">GarageERP</a>
          <a href="<?php echo home_url('/poultry-os/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">PoultryOS</a>
          <a href="<?php echo home_url('/products/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Full Suite →</a>
        </div>
      </div>
      <div>
        <div class="label" style="margin-bottom:14px;">Company</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/dream/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">DREAM™ Framework</a>
          <a href="<?php echo home_url('/scorecard/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Free Scorecard</a>
          <a href="<?php echo home_url('/insights/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Insights</a>
          <a href="<?php echo home_url('/academy/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Academy</a>
          <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Contact</a>
        </div>
      </div>
    </div>
    <div style="display:flex;justify-content:space-between;align-items:center;padding:20px 0;flex-wrap:wrap;gap:12px;">
      <div style="font-size:12px;color:var(--text-muted);">© <?php echo date('Y'); ?> Finlanza Limited. All rights reserved. DREAM™ is a proprietary transformation framework.</div>
      <div style="display:flex;gap:20px;align-items:center;">
        <a href="mailto:ask@finlanza.com" style="color:var(--text-muted);font-size:12px;text-decoration:none;">ask@finlanza.com</a>
        <a href="<?php echo home_url('/privacy/'); ?>" style="color:var(--text-muted);font-size:12px;text-decoration:none;">Privacy Policy</a>
        <a href="<?php echo home_url('/terms/'); ?>" style="color:var(--text-muted);font-size:12px;text-decoration:none;">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

<script>
// Hamburger toggle functionality
document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector('.nav-hamburger');
  const navLinks = document.getElementById('navLinks');
  
  hamburger.addEventListener('click', function() {
    const isOpen = navLinks.classList.contains('mob-open');
    navLinks.classList.toggle('mob-open');
    hamburger.setAttribute('aria-expanded', !isOpen);
  });
  
  // Close mobile menu when clicking outside
  document.addEventListener('click', function(e) {
    if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
      navLinks.classList.remove('mob-open');
      hamburger.setAttribute('aria-expanded', 'false');
    }
  });
});

// Reveal animation
(function(){
  var els = document.querySelectorAll('.reveal');
  if(!els.length) return;
  // Make all visible immediately as fallback, then animate via observer
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('visible'); } });
  },{threshold:0.07,rootMargin:'0px 0px -20px 0px'});
  els.forEach(function(el){ io.observe(el); });
  // Fallback: show all after 800ms in case observer doesn't fire
  setTimeout(function(){
    els.forEach(function(el){ el.classList.add('visible'); });
  }, 800);
})();
</script>

<?php wp_footer(); ?>
</body>
</html>

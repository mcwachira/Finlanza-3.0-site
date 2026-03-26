<?php /* Template Name: Finlanza Home */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Business Systems Architecture Firm — Finlanza | <?php bloginfo('name'); ?></title>
<meta name="description" content="Finlanza engineers scalable business systems for multi-location, multi-entity organizations across Africa — built on the DREAM&#8482; Transformation Framework. Zoho Authorized Partner.">
<link rel="canonical" href="<?php echo home_url('/'); ?>">
<meta property="og:title" content="Business Systems Architecture Firm — Finlanza">
<meta property="og:description" content="We engineer scalable business systems for African enterprises. Zoho Authorized Partner.">
<meta property="og:url" content="<?php echo home_url('/'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Finlanza">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Business Systems Architecture Firm — Finlanza">
<meta name="twitter:description" content="We engineer scalable business systems for African enterprises.">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Organization","name":"Finlanza Limited","url":"<?php echo home_url('/'); ?>","description":"Business Systems Architecture Firm. Zoho Authorized Partner. Africa.","contactPoint":{"@type":"ContactPoint","email":"ask@finlanza.com","telephone":"+254724463536"}}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
<style>
  :root {
    --navy:#0D1B2A; --navy-mid:#152232; --navy-light:#1E3045;
    --gold:#C8971C; --gold-light:#E8B84B; --gold-pale:#FBF0D4;
    --white:#FFFFFF; --text:#E8E2D4; --text-muted:#8A9BAD;
    --border:rgba(200,151,28,0.2); --border-light:rgba(255,255,255,0.08);
  }
  :focus-visible{outline:2px solid var(--gold);outline-offset:2px;}
  @media(prefers-reduced-motion:reduce){*,*::before,*::after{transition:none!important;animation:none!important;}}
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
  html{scroll-behavior:smooth;}
  body{background:var(--navy);color:var(--text);font-family:'DM Sans',sans-serif;font-size:17px;line-height:1.65;overflow-x:hidden;}
  body::before{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");opacity:0.025;pointer-events:none;z-index:9999;}
  nav{position:fixed;top:0;left:0;right:0;z-index:1000;padding:0 60px;height:72px;display:flex;align-items:center;justify-content:space-between;background:rgba(13,27,42,0.92);backdrop-filter:blur(12px);border-bottom:1px solid var(--border);transition:all 0.3s ease;}
  .nav-logo{display:flex;align-items:center;text-decoration:none;}
  .nav-links{display:flex;align-items:center;gap:36px;list-style:none;}
  .nav-links a{text-decoration:none;font-size:13px;font-weight:400;letter-spacing:1.5px;text-transform:uppercase;color:var(--text-muted);transition:color 0.2s;}
  .nav-links a:hover{color:var(--gold);}
  .nav-links a.active{color:var(--white);}
  .nav-cta{background:var(--gold);color:var(--navy)!important;padding:10px 24px!important;font-weight:500!important;letter-spacing:1px!important;transition:background 0.2s,transform 0.1s!important;}
  .nav-cta:hover{background:var(--gold-light)!important;}
  .nav-gold{color:var(--gold)!important;}
  .nav-hamburger{display:none;background:none;border:1px solid var(--border);color:var(--text);padding:6px 12px;cursor:pointer;font-size:17px;}
  @media(max-width:900px){nav{padding:0 24px;}.nav-links{display:none;flex-direction:column;position:absolute;top:72px;left:0;right:0;background:rgba(13,27,42,0.98);border-bottom:1px solid var(--border);padding:20px 24px;gap:16px;}.nav-links.mob-open{display:flex;}.nav-hamburger{display:block;}}
  .container{max-width:1200px;margin:0 auto;padding:0 60px;}
  .section{padding:100px 0;}
  @media(max-width:700px){.container{padding:0 24px;}}
  .label{font-size:11px;font-weight:500;letter-spacing:3px;text-transform:uppercase;color:var(--gold);margin-bottom:16px;display:block;}
  .display-xl{font-family:'Bebas Neue',sans-serif;font-size:clamp(64px,10vw,140px);line-height:0.9;letter-spacing:2px;color:var(--white);}
  .display-lg{font-family:'Bebas Neue',sans-serif;font-size:clamp(48px,6vw,88px);line-height:0.95;letter-spacing:1px;color:var(--white);}
  .display-md{font-family:'Bebas Neue',sans-serif;font-size:clamp(36px,4vw,56px);line-height:1;letter-spacing:1px;color:var(--white);}
  .gold{color:var(--gold);}
  .btn-primary{display:inline-flex;align-items:center;gap:10px;background:var(--gold);color:var(--navy);padding:16px 36px;font-size:13px;font-weight:600;letter-spacing:2px;text-transform:uppercase;text-decoration:none;border:none;cursor:pointer;transition:all 0.2s;}
  .btn-primary:hover{background:var(--gold-light);transform:translateY(-1px);}
  .btn-ghost{display:inline-flex;align-items:center;gap:10px;background:transparent;color:var(--white);padding:16px 36px;font-size:13px;font-weight:500;letter-spacing:2px;text-transform:uppercase;text-decoration:none;border:1px solid var(--border-light);cursor:pointer;transition:all 0.2s;}
  .btn-ghost:hover{border-color:var(--gold);color:var(--gold);}
  @keyframes fadeUp{from{opacity:0;transform:translateY(24px);}to{opacity:1;transform:translateY(0);}}
  @keyframes spin{to{transform:translateY(-50%) rotate(360deg);}}
  @keyframes spinSlow{to{transform:rotate(360deg);}}
  .reveal{opacity:0;transform:translateY(24px);transition:opacity 0.65s ease,transform 0.65s ease;}
  .reveal.visible{opacity:1;transform:translateY(0);}
  .reveal-d1{transition-delay:0.1s;}.reveal-d2{transition-delay:0.2s;}.reveal-d3{transition-delay:0.3s;}.reveal-d4{transition-delay:0.4s;}
  .hero{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;border-bottom:1px solid var(--border);}
  .hero-bg{position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 70% 50%,rgba(200,151,28,0.06) 0%,transparent 60%),radial-gradient(ellipse 40% 80% at 10% 30%,rgba(30,48,69,0.8) 0%,transparent 50%);}
  .hero-grid-overlay{position:absolute;inset:0;background-image:linear-gradient(rgba(200,151,28,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(200,151,28,0.04) 1px,transparent 1px);background-size:80px 80px;mask-image:radial-gradient(ellipse 80% 80% at 50% 50%,black 30%,transparent 100%);}
  .hero-orbit{position:absolute;right:-80px;top:50%;transform:translateY(-50%);width:580px;height:580px;border:1px dashed rgba(200,151,28,0.08);border-radius:50%;animation:spin 60s linear infinite;pointer-events:none;}
  .hero-orbit2{position:absolute;right:-40px;top:50%;transform:translateY(-50%);width:440px;height:440px;border:1px solid rgba(200,151,28,0.05);border-radius:50%;pointer-events:none;}
  .zoho-badge{display:inline-flex;align-items:center;gap:8px;border:1px solid rgba(200,151,28,0.2);padding:6px 13px;margin-bottom:20px;opacity:0.75;}
  .zoho-badge span{font-size:11px;letter-spacing:1.5px;text-transform:uppercase;}
  .stat-strip{background:var(--navy-mid);border-top:1px solid var(--border);border-bottom:1px solid var(--border);}
  .stat-strip-inner{display:grid;grid-template-columns:repeat(4,1fr);}
  .stat-cell{padding:32px 28px;border-right:1px solid var(--border);}
  .stat-cell:last-child{border-right:none;}
  .stat-n{font-family:'DM Serif Display',serif;font-size:46px;color:var(--gold-light);line-height:1;margin-bottom:6px;}
  .stat-l{font-size:13px;color:var(--text-muted);line-height:1.5;}
  .home-infra-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--border);margin-bottom:32px;}
  .infra-card{background:var(--navy);padding:30px 26px;transition:background 0.2s;position:relative;}
  .infra-card::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:var(--gold);transform:scaleX(0);transform-origin:left;transition:transform 0.28s ease;}
  .infra-card:hover{background:var(--navy-mid);}.infra-card:hover::before{transform:scaleX(1);}
  .infra-icon{width:32px;height:32px;background:rgba(200,151,28,0.1);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;margin-bottom:16px;}
  .infra-icon svg{width:14px;height:14px;stroke:var(--gold);fill:none;stroke-width:1.5;}
  .infra-name{font-size:14px;font-weight:500;color:var(--white);margin-bottom:8px;}
  .infra-desc{font-size:13px;color:var(--text-muted);line-height:1.6;}
  .dream-strip{display:flex;flex-direction:column;gap:0;border:1px solid var(--border);}
  .dream-row{display:flex;align-items:center;gap:14px;padding:14px 18px;border-bottom:1px solid var(--border);transition:background 0.2s;min-height:56px;}
  .dream-row:last-child{border-bottom:none;}.dream-row:hover{background:rgba(255,255,255,0.03);}
  .dream-letter{display:flex;align-items:center;justify-content:center;width:60px;height:40px;background:rgba(200,151,28,0.1);border:1px solid var(--border);font-family:'DM Serif Display',serif;font-size:26px;line-height:1;color:var(--gold);flex-shrink:0;}
  .dream-name{font-size:13px;font-weight:500;color:var(--white);}
  .dream-tag{font-size:12px;color:var(--text-muted);margin-left:auto;font-style:italic;}
  .ind-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--border);}
  .ind-card{background:var(--navy);padding:26px 22px;border-bottom:2px solid transparent;transition:background 0.2s,border-color 0.2s;}
  .ind-card:hover{background:var(--navy-mid);border-bottom-color:var(--gold);}
  .ind-name{font-size:13.5px;font-weight:500;color:var(--white);margin-bottom:9px;}
  .ind-tags{display:flex;flex-wrap:wrap;gap:5px;}
  .ind-tag{font-size:10px;letter-spacing:0.8px;text-transform:uppercase;color:var(--text-muted);border:1px solid rgba(255,255,255,0.08);padding:3px 7px;}
  .cta-home-grid{display:grid;grid-template-columns:1fr 360px;gap:72px;align-items:start;}
  .cta-box{background:var(--navy-mid);border:1px solid var(--border);border-top:3px solid var(--gold);padding:36px 30px;}
  .cta-box h3{font-family:'DM Serif Display',serif;font-size:22px;color:var(--white);margin-bottom:10px;line-height:1.25;}
  .cta-box p{color:var(--text-muted);font-size:13.5px;line-height:1.7;margin-bottom:22px;}
  .cta-note{font-size:12px;color:var(--text-muted);margin-top:12px;text-align:center;}
  #dreamSvg{display:block;width:100%;height:auto;}
  .arc-fill{opacity:1;transition:opacity 0.35s ease,filter 0.35s ease;}
  .phase-arc{cursor:pointer;}
  .phase-arc:hover .arc-fill{filter:brightness(1.18) drop-shadow(0 0 10px rgba(200,151,28,0.55))!important;opacity:1!important;}
  .p-letter{font-family:'Bebas Neue','DM Sans',sans-serif;font-size:38px;font-weight:400;letter-spacing:2px;fill:rgba(255,255,255,0.92);text-anchor:middle;dominant-baseline:central;pointer-events:none;transition:opacity 0.3s,fill 0.3s;}
  .p-name{font-family:'Space Mono',monospace;font-size:9px;font-weight:400;letter-spacing:3px;fill:rgba(255,255,255,0.6);text-anchor:middle;text-transform:uppercase;pointer-events:none;transition:opacity 0.3s,fill 0.3s;}
  .p-word{font-family:'DM Serif Display',serif;font-size:11px;font-style:italic;fill:rgba(255,255,255,0.32);text-anchor:middle;pointer-events:none;transition:opacity 0.3s,fill 0.3s;}
  .spin-ring{animation:spinSlow 60s linear infinite;transform-origin:280px 280px;}
  footer{background:var(--navy-mid);border-top:1px solid var(--border);padding:60px 0 40px;}
  .footer-bottom{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;}
  .footer-copy{font-size:13px;color:var(--text-muted);}
  .footer-legal{display:flex;gap:24px;}
  .footer-legal a{font-size:13px;color:var(--text-muted);text-decoration:none;}
  .footer-legal a:hover{color:var(--white);}
  @media(max-width:900px){.stat-strip-inner{grid-template-columns:1fr 1fr;}.home-infra-grid,.ind-grid{grid-template-columns:1fr 1fr;}.cta-home-grid{grid-template-columns:1fr;}.hero-diagram-col{display:none;}}
  @media(max-width:600px){.home-infra-grid,.ind-grid{grid-template-columns:1fr;}}
</style>
<?php wp_head(); ?>
</head>
<body>

  <nav id="main-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <img src="data:image/png;base64,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" alt="Finlanza" style="height:36px;width:auto;display:block;">
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="<?php echo home_url('/'); ?>" class="active" aria-current="page">Home</a></li>
    <li><a href="<?php echo home_url('/services/'); ?>">Services</a></li>
    <li><a href="<?php echo home_url('/products/'); ?>">Products</a></li>
    <li><a href="<?php echo home_url('/dream/'); ?>">DREAM&#8482;</a></li>
    <li><a href="<?php echo home_url('/insights/'); ?>">Insights</a></li>
    <li><a href="<?php echo home_url('/scorecard/'); ?>" class="nav-gold">Free Scorecard</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>" class="nav-cta">Book a Review</a></li>
  </ul>
  <button class="nav-hamburger"
    onclick="document.getElementById('navLinks').classList.toggle('mob-open');this.setAttribute('aria-expanded',this.getAttribute('aria-expanded')==='false'?'true':'false');"
    aria-label="Toggle navigation menu" aria-expanded="false">&#9776;</button>
</nav>

<main>

<!-- HERO -->
<section class="hero" aria-label="Hero">
  <div class="hero-bg" aria-hidden="true"></div>
  <div class="hero-grid-overlay" aria-hidden="true"></div>
  <div class="hero-orbit" aria-hidden="true"></div>
  <div class="hero-orbit2" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:2;display:grid;grid-template-columns:1fr 420px;gap:64px;align-items:center;">
    <div>
      <div class="zoho-badge reveal">
        <span style="color:rgba(255,255,255,0.45);">ZOHO</span>
        <span style="display:inline-block;width:1px;height:12px;background:rgba(200,151,28,0.3);"></span>
        <span style="color:rgba(200,151,28,0.75);">Authorized Partner &#183; Africa</span>
      </div>
      <div class="reveal reveal-d1" style="display:flex;align-items:center;gap:16px;margin-bottom:28px;">
        <div style="width:40px;height:1px;background:var(--gold);"></div>
        <span style="font-size:12px;letter-spacing:4px;text-transform:uppercase;color:var(--gold);font-weight:400;">Business Systems Architecture Firm</span>
      </div>
      <h1 class="display-xl reveal reveal-d2" style="margin-bottom:0;">WE ENGINEER<br><span class="gold">SCALABLE</span><br>BUSINESS SYSTEMS.</h1>
      <div class="reveal reveal-d3" style="display:flex;flex-wrap:wrap;gap:8px;margin:24px 0 32px;">
        <span style="font-size:11px;letter-spacing:1.2px;text-transform:uppercase;color:var(--text-muted);border:1px solid var(--border-light);padding:5px 10px;">Enterprise Automation</span>
        <span style="font-size:11px;letter-spacing:1.2px;text-transform:uppercase;color:var(--text-muted);border:1px solid var(--border-light);padding:5px 10px;">Finance Infrastructure</span>
        <span style="font-size:11px;letter-spacing:1.2px;text-transform:uppercase;color:var(--text-muted);border:1px solid var(--border-light);padding:5px 10px;">ERP Architecture</span>
        <span style="font-size:11px;letter-spacing:1.2px;text-transform:uppercase;color:var(--text-muted);border:1px solid var(--border-light);padding:5px 10px;">AI Enablement</span>
      </div>
      <div class="reveal reveal-d4" style="display:flex;gap:20px;align-items:center;">
        <a href="<?php echo home_url('/contact/'); ?>" class="btn-primary">Book a Systems Review &#8594;</a>
      </div>
    </div>
    <div class="hero-diagram-col reveal reveal-d2">
      <svg id="dreamSvg" viewBox="0 0 560 560" xmlns="http://www.w3.org/2000/svg" aria-label="DREAM Framework" role="img">
        <title>DREAM&#8482; Framework</title>
        <defs>
          <filter id="glow" x="-30%" y="-30%" width="160%" height="160%"><feGaussianBlur stdDeviation="3.5" result="blur"/><feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
          <linearGradient id="ag0" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#E8B84B"/><stop offset="100%" stop-color="#8A6510"/></linearGradient>
          <linearGradient id="ag1" x1="100%" y1="0%" x2="0%" y2="100%"><stop offset="0%" stop-color="#D4A830"/><stop offset="100%" stop-color="#7A5C00"/></linearGradient>
          <linearGradient id="ag2" x1="0%" y1="100%" x2="100%" y2="0%"><stop offset="0%" stop-color="#C8971C"/><stop offset="100%" stop-color="#9A6E10"/></linearGradient>
          <linearGradient id="ag3" x1="50%" y1="0%" x2="50%" y2="100%"><stop offset="0%" stop-color="#D4A830"/><stop offset="100%" stop-color="#8A6510"/></linearGradient>
          <linearGradient id="ag4" x1="0%" y1="50%" x2="100%" y2="50%"><stop offset="0%" stop-color="#BF9218"/><stop offset="100%" stop-color="#7A5C00"/></linearGradient>
        </defs>
        <g class="spin-ring"><circle cx="280" cy="280" r="268" fill="none" stroke="rgba(200,151,28,0.08)" stroke-width="1" stroke-dasharray="3 9"/></g>
        <circle cx="280" cy="280" r="252" fill="none" stroke="rgba(200,151,28,0.05)" stroke-width="0.5"/>
        <circle cx="280" cy="280" r="234" fill="none" stroke="rgba(200,151,28,0.03)" stroke-width="0.5"/>
        <g id="ticks"></g><g id="arcGroup"></g><g id="connectorDots"></g>
        <circle cx="280" cy="280" r="114" fill="none" stroke="rgba(200,151,28,0.12)" stroke-width="1"/>
        <circle cx="280" cy="280" r="100" fill="rgba(13,27,42,0.95)" stroke="rgba(200,151,28,0.22)" stroke-width="0.8"/>
        <circle cx="280" cy="280" r="76" fill="#0D1B2A" stroke="rgba(200,151,28,0.18)" stroke-width="1"/>
        <text x="280" y="267" font-family="'Bebas Neue',sans-serif" font-size="26" letter-spacing="5" fill="#E8B84B" text-anchor="middle">DREAM&#8482;</text>
        <line x1="240" y1="278" x2="320" y2="278" stroke="rgba(200,151,28,0.3)" stroke-width="0.6"/>
        <text x="280" y="295" font-family="'Space Mono',monospace" font-size="8.5" letter-spacing="2.5" fill="rgba(255,255,255,0.45)" text-anchor="middle">Framework</text>
      </svg>
    </div>
  </div>
</section>

<!-- STAT STRIP -->
<div class="stat-strip">
  <div class="stat-strip-inner">
    <div class="stat-cell reveal"><div class="stat-n">50+</div><div class="stat-l">System transformation engagements</div></div>
    <div class="stat-cell reveal reveal-d1"><div class="stat-n">100+</div><div class="stat-l">User enterprise systems engineered</div></div>
    <div class="stat-cell reveal reveal-d2"><div class="stat-n">3+</div><div class="stat-l">Countries of active deployment</div></div>
    <div class="stat-cell reveal reveal-d3"><div class="stat-n">Multi</div><div class="stat-l">Legacy migrations from QuickBooks, Sage &amp; Tally</div></div>
  </div>
</div>

<!-- PROBLEM -->
<section class="section" style="background:var(--navy-mid);border-bottom:1px solid var(--border);">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:start;">
      <div>
        <span class="label reveal">Structural Problem</span>
        <h2 class="display-md reveal reveal-d1" style="margin-bottom:28px;">GROWTH WITHOUT STRUCTURE CREATES <span class="gold">OPERATIONAL FRICTION.</span></h2>
        <ul style="list-style:none;margin-bottom:28px;" class="reveal reveal-d2">
          <li style="display:flex;align-items:flex-start;gap:12px;padding:12px 0;border-bottom:1px solid var(--border-light);font-size:14px;color:var(--text-muted);"><span style="color:var(--gold);flex-shrink:0;margin-top:2px;">&#8212;</span>Disconnected operational systems operating in silos</li>
          <li style="display:flex;align-items:flex-start;gap:12px;padding:12px 0;border-bottom:1px solid var(--border-light);font-size:14px;color:var(--text-muted);"><span style="color:var(--gold);flex-shrink:0;margin-top:2px;">&#8212;</span>Manual financial reconciliation cycles consuming senior capacity</li>
          <li style="display:flex;align-items:flex-start;gap:12px;padding:12px 0;border-bottom:1px solid var(--border-light);font-size:14px;color:var(--text-muted);"><span style="color:var(--gold);flex-shrink:0;margin-top:2px;">&#8212;</span>Delayed executive reporting limiting governance quality</li>
          <li style="display:flex;align-items:flex-start;gap:12px;padding:12px 0;border-bottom:1px solid var(--border-light);font-size:14px;color:var(--text-muted);"><span style="color:var(--gold);flex-shrink:0;margin-top:2px;">&#8212;</span>Approval bottlenecks across departments slowing execution</li>
          <li style="display:flex;align-items:flex-start;gap:12px;padding:12px 0;font-size:14px;color:var(--text-muted);"><span style="color:var(--gold);flex-shrink:0;margin-top:2px;">&#8212;</span>Limited cross-functional visibility at leadership level</li>
        </ul>
        <blockquote style="font-family:'DM Serif Display',serif;font-size:19px;font-style:italic;color:var(--white);padding-left:18px;border-left:2px solid var(--gold);margin-bottom:12px;line-height:1.45;" class="reveal reveal-d3">&#8220;Technology alone does not solve this. Architecture does.&#8221;</blockquote>
        <span class="label reveal reveal-d3">Proven across multi-location environments in Kenya and Zambia.</span>
      </div>
      <div class="reveal reveal-d2" style="display:flex;flex-direction:column;gap:12px;padding-top:8px;">
        <div style="background:rgba(200,151,28,0.06);border:1px solid var(--border);border-left:3px solid var(--gold);padding:22px 24px;"><div class="stat-n">50+</div><div class="stat-l">System transformation engagements delivered</div></div>
        <div style="background:rgba(200,151,28,0.06);border:1px solid var(--border);border-left:3px solid var(--gold);padding:22px 24px;"><div class="stat-n">100+</div><div class="stat-l">User enterprise systems engineered</div></div>
        <div style="background:rgba(200,151,28,0.06);border:1px solid var(--border);border-left:3px solid var(--gold);padding:22px 24px;"><div class="stat-n">3+</div><div class="stat-l">Countries &#8212; Kenya, Zambia, and expanding</div></div>
      </div>
    </div>
  </div>
</section>

<!-- INFRASTRUCTURE -->
<section class="section">
  <div class="container">
    <span class="label reveal">Infrastructure Layer</span>
    <h2 class="display-md reveal reveal-d1" style="margin-bottom:12px;">WE OPERATE AT THE LEVEL OF <span class="gold">INFRASTRUCTURE.</span></h2>
    <p style="color:var(--text-muted);font-size:16px;max-width:580px;line-height:1.8;margin-bottom:40px;" class="reveal reveal-d2">We engineer interconnected operational systems aligned to governance, control, and scale.</p>
    <div class="home-infra-grid reveal reveal-d2">
      <div class="infra-card"><div class="infra-icon"><svg viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><div class="infra-name">CRM Architecture</div><div class="infra-desc">Structured revenue architecture and lifecycle governance from lead to recognition.</div></div>
      <div class="infra-card"><div class="infra-icon"><svg viewBox="0 0 24 24"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><div class="infra-name">Finance Infrastructure</div><div class="infra-desc">Multi-entity financial governance, consolidated reporting, and audit-ready controls.</div></div>
      <div class="infra-card"><div class="infra-icon"><svg viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></div><div class="infra-name">Procurement Architecture</div><div class="infra-desc">Approval frameworks, vendor governance, and structured spend control.</div></div>
      <div class="infra-card"><div class="infra-icon"><svg viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><div class="infra-name">Inventory &amp; Operations</div><div class="infra-desc">Multi-location inventory visibility and operational process control.</div></div>
      <div class="infra-card"><div class="infra-icon"><svg viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg></div><div class="infra-name">Workforce Governance</div><div class="infra-desc">HR systems, payroll integration, and structured accountability frameworks.</div></div>
      <div class="infra-card"><div class="infra-icon"><svg viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><div class="infra-name">Executive Reporting</div><div class="infra-desc">Real-time dashboards aligned to leadership decisions and KPI governance cycles.</div></div>
    </div>
    <div style="text-align:center;padding:16px;border:1px solid var(--border);font-size:12px;letter-spacing:1.5px;text-transform:uppercase;color:var(--gold);" class="reveal">All systems engineered under the DREAM&#8482; Transformation Framework &nbsp;&#183;&nbsp; <a href="<?php echo home_url('/services/'); ?>" style="color:var(--gold-light);text-decoration:none;">View Service Tiers &#8594;</a></div>
  </div>
</section>

<!-- DREAM FRAMEWORK -->
<section class="section" style="background:var(--navy-mid);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 360px;gap:72px;align-items:start;">
      <div>
        <span class="label reveal">The DREAM&#8482; Framework</span>
        <h2 class="display-md reveal reveal-d1" style="margin-bottom:16px;">SCALABLE ORGANIZATIONS ARE <span class="gold">ENGINEERED &#8212; NOT INSTALLED.</span></h2>
        <p style="color:var(--text-muted);font-size:16px;max-width:520px;line-height:1.8;margin-bottom:28px;" class="reveal reveal-d2">Most automation fails not because of technology &#8212; but because structure was never redesigned. DREAM is the five-phase transformation discipline applied across every Finlanza engagement.</p>
        <div class="dream-strip reveal reveal-d3">
          <div class="dream-row"><div class="dream-letter">D</div><div><div class="dream-name">Diagnose</div></div><div class="dream-tag">Current State</div></div>
          <div class="dream-row"><div class="dream-letter">R</div><div><div class="dream-name">Reengineer</div></div><div class="dream-tag">Future State Design</div></div>
          <div class="dream-row"><div class="dream-letter">E</div><div><div class="dream-name">Execute</div></div><div class="dream-tag">Build &amp; Deploy</div></div>
          <div class="dream-row"><div class="dream-letter">A</div><div><div class="dream-name">Align</div></div><div class="dream-tag">Embed &amp; Adopt</div></div>
          <div class="dream-row"><div class="dream-letter">M</div><div><div class="dream-name">Measure</div></div><div class="dream-tag">Govern &amp; Improve</div></div>
        </div>
        <div style="margin-top:20px;" class="reveal reveal-d4"><a href="<?php echo home_url('/dream/'); ?>" class="btn-ghost">Explore the Framework &#8594;</a></div>
      </div>
      <div class="reveal reveal-d2" style="text-align:center;padding-top:8px;">
        <div style="font-family:'DM Serif Display',serif;font-size:clamp(28px,3vw,42px);font-style:italic;color:var(--white);line-height:1.15;margin-bottom:8px;">From Chaos<br>to Control.</div>
        <span class="label" style="margin-bottom:24px;">A continuous improvement cycle</span>
      </div>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section class="section">
  <div class="container">
    <span class="label reveal">Operating Environments</span>
    <h2 class="display-md reveal reveal-d1" style="margin-bottom:12px;">ENGINEERED ACROSS COMPLEX <span class="gold">OPERATING ENVIRONMENTS.</span></h2>
    <p style="color:var(--text-muted);font-size:16px;max-width:580px;line-height:1.8;margin-bottom:36px;" class="reveal reveal-d2">Systems architecture tailored to sector-specific governance, reporting, and operational demands.</p>
    <div class="ind-grid reveal reveal-d2">
      <div class="ind-card"><div class="ind-name">NGOs &amp; Donor-Funded Programs</div><div class="ind-tags"><span class="ind-tag">Grant Tracking</span><span class="ind-tag">Multi-Project Budgeting</span><span class="ind-tag">Compliance</span></div></div>
      <div class="ind-card"><div class="ind-name">Logistics &amp; Transport</div><div class="ind-tags"><span class="ind-tag">Trip Management</span><span class="ind-tag">Fleet Oversight</span><span class="ind-tag">Multi-Branch</span></div></div>
      <div class="ind-card"><div class="ind-name">Manufacturing</div><div class="ind-tags"><span class="ind-tag">BoM Architecture</span><span class="ind-tag">Production Costs</span><span class="ind-tag">Material Variance</span></div></div>
      <div class="ind-card"><div class="ind-name">Education</div><div class="ind-tags"><span class="ind-tag">Term Billing</span><span class="ind-tag">Fee Management</span><span class="ind-tag">Financial Visibility</span></div></div>
      <div class="ind-card"><div class="ind-name">Retail &amp; Distribution</div><div class="ind-tags"><span class="ind-tag">Inventory Governance</span><span class="ind-tag">Warehouse Control</span><span class="ind-tag">Revenue</span></div></div>
      <div class="ind-card"><div class="ind-name">Construction &amp; Field Ops</div><div class="ind-tags"><span class="ind-tag">Project Budgeting</span><span class="ind-tag">Approvals</span><span class="ind-tag">Cost Monitoring</span></div></div>
    </div>
    <div style="padding-top:20px;text-align:center;font-size:12px;letter-spacing:1.2px;text-transform:uppercase;color:var(--gold);" class="reveal">Regional deployment footprint across Kenya, Zambia, and multi-country environments</div>
  </div>
</section>

<!-- CTA -->
<section class="section" style="background:var(--navy-mid);border-top:1px solid var(--border);">
  <div class="container">
    <div class="cta-home-grid">
      <div>
        <span class="label reveal">Systems Architecture Review</span>
        <h2 class="display-md reveal reveal-d1" style="margin-bottom:16px;">ENGAGE AT THE LEVEL OF <span class="gold">INFRASTRUCTURE.</span></h2>
        <p style="color:var(--text-muted);font-size:16px;line-height:1.8;margin-bottom:28px;" class="reveal reveal-d2">For organizations experiencing operational friction, reporting delays, or governance complexity &#8212; we begin with a structured Systems Architecture Review.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="reveal reveal-d3">
          <a href="<?php echo home_url('/contact/'); ?>" class="btn-primary">Book a Systems Review &#8594;</a>
        </div>
      </div>
      <div class="cta-box reveal reveal-d2">
        <h3>Not sure where to start?</h3>
        <p>Take our 18-question Business Systems Health Check. In 5 minutes you&#8217;ll know exactly where your operational gaps are &#8212; and what to do about them.</p>
        <a href="<?php echo home_url('/scorecard/'); ?>" class="btn-primary" style="display:block;text-align:center;width:100%;">Start the Free Scorecard &#8594;</a>
        <div class="cta-note">Free &#183; 5 minutes &#183; No demo attached</div>
      </div>
    </div>
  </div>
</section>

</main>

<footer role="contentinfo">
  <div class="container">
    <div style="text-align:center;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div class="display-md" style="font-size:clamp(22px,3vw,38px);margin-bottom:8px;"><span class="gold">Scalability</span> is not an accident.<br>It is engineered.</div>
      <div class="label" style="margin-top:12px;">Zoho Authorised Partner &#183; Enterprise Implementation Specialists &#183; Africa</div>
    </div>
    <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:40px;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div>
        <div style="font-family:'Bebas Neue',sans-serif;font-size:22px;letter-spacing:2px;color:var(--white);margin-bottom:4px;">FINLANZA</div>
        <div class="label" style="margin-bottom:12px;">Business Systems Architecture Firm</div>
        <p style="color:var(--text-muted);font-size:13px;line-height:1.7;">We engineer scalable business systems for multi-location, multi-entity organizations across Africa &#8212; built on the DREAM&#8482; Transformation Framework.</p>
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
          <a href="<?php echo home_url('/products/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Full Suite &#8594;</a>
        </div>
      </div>
      <div>
        <div class="label" style="margin-bottom:14px;">Company</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/dream/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">DREAM&#8482; Framework</a>
          <a href="<?php echo home_url('/scorecard/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Free Scorecard</a>
          <a href="<?php echo home_url('/insights/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Insights</a>
          <a href="<?php echo home_url('/insights/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Academy</a>
          <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Contact</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom" style="padding-top:24px;">
      <div class="footer-copy">&#169; <?php echo date('Y'); ?> Finlanza Limited. All rights reserved. DREAM&#8482; is a proprietary transformation framework.</div>
      <div class="footer-legal">
        <a href="mailto:ask@finlanza.com">ask@finlanza.com</a>
        <a href="<?php echo home_url('/privacy/'); ?>">Privacy Policy</a>
        <a href="<?php echo home_url('/terms/'); ?>">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

<script>
(function(){
  var els=document.querySelectorAll('.reveal');
  if(!els.length) return;
  var io=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting)e.target.classList.add('visible');});},{threshold:0.07,rootMargin:'0px 0px -20px 0px'});
  els.forEach(function(el){io.observe(el);});
  setTimeout(function(){els.forEach(function(el){el.classList.add('visible');});},800);
})();
</script>
<script>
(function(){
  var PHASES=[{letter:'D',name:'DIAGNOSE',word:'Current State',grad:'ag0'},{letter:'R',name:'REENGINEER',word:'Future State Design',grad:'ag1'},{letter:'E',name:'EXECUTE',word:'Build & Deploy',grad:'ag2'},{letter:'A',name:'ALIGN',word:'Embed & Adopt',grad:'ag3'},{letter:'M',name:'MEASURE',word:'Govern & Improve',grad:'ag4'}];
  var CX=280,CY=280,OR=210,IR=120,GAP=3.5,LABEL_R=236,DOT_R=212,START=-90,SEG=72;
  function P(r,d){var a=(d-90)*Math.PI/180;return{x:CX+r*Math.cos(a),y:CY+r*Math.sin(a)};}
  function arcD(or,ir,s,e){var a=P(or,s),b=P(or,e),c=P(ir,e),d=P(ir,s),lg=e-s>180?1:0;return'M'+a.x+' '+a.y+' A'+or+' '+or+' 0 '+lg+' 1 '+b.x+' '+b.y+' L'+c.x+' '+c.y+' A'+ir+' '+ir+' 0 '+lg+' 0 '+d.x+' '+d.y+'Z';}
  function ns(t){return document.createElementNS('http://www.w3.org/2000/svg',t);}
  function at(el,o){Object.entries(o).forEach(function(kv){el.setAttribute(kv[0],kv[1]);});return el;}
  function init(){
    var svg=document.getElementById('dreamSvg');if(!svg)return;
    var tG=svg.querySelector('#ticks');
    for(var i=0;i<72;i++){var d=i*5,maj=i%5===0,r1=maj?OR+18:OR+8,r2=OR+3,p1=P(r1,START+d),p2=P(r2,START+d),l=ns('line');at(l,{x1:p1.x,y1:p1.y,x2:p2.x,y2:p2.y,stroke:maj?'rgba(200,151,28,0.4)':'rgba(200,151,28,0.14)','stroke-width':maj?'1.5':'0.7'});tG.appendChild(l);}
    var aG=svg.querySelector('#arcGroup'),dG=svg.querySelector('#connectorDots');
    PHASES.forEach(function(ph,i){
      var s=START+i*SEG+GAP/2,e=START+(i+1)*SEG-GAP/2,mid=(s+e)/2,g=ns('g');g.setAttribute('class','phase-arc');g.dataset.i=i;
      var path=ns('path');at(path,{class:'arc-fill',d:arcD(OR,IR,s,e),fill:'url(#'+ph.grad+')',filter:'url(#glow)'});g.appendChild(path);
      var mp=P((OR+IR)/2,mid),lt=ns('text');at(lt,{class:'p-letter',x:mp.x,y:mp.y});lt.textContent=ph.letter;g.appendChild(lt);
      var nlp=P(LABEL_R,mid),nt=ns('text');at(nt,{class:'p-name',x:nlp.x,y:nlp.y-7});nt.textContent=ph.name;g.appendChild(nt);
      var wt=ns('text');at(wt,{class:'p-word',x:nlp.x,y:nlp.y+9});wt.textContent=ph.word;g.appendChild(wt);
      g.addEventListener('click',function(){select(i);});aG.appendChild(g);
      var dp=P(DOT_R,s),dot=ns('circle');at(dot,{cx:dp.x,cy:dp.y,r:'3.5',fill:'#C8971C',opacity:'0.5'});dG.appendChild(dot);
    });
  }
  var active=null;
  function reset(){var svg=document.getElementById('dreamSvg');svg.querySelectorAll('.phase-arc').forEach(function(g){g.querySelector('.arc-fill').style.cssText='opacity:1;filter:none';g.querySelector('.p-letter').style.cssText='opacity:1;fill:rgba(255,255,255,0.92)';g.querySelectorAll('.p-name,.p-word').forEach(function(t){t.style.cssText='';});});active=null;}
  function select(idx){var svg=document.getElementById('dreamSvg');if(active===idx){reset();return;}active=idx;svg.querySelectorAll('.phase-arc').forEach(function(g,i){var fill=g.querySelector('.arc-fill'),letter=g.querySelector('.p-letter'),name=g.querySelector('.p-name'),word=g.querySelector('.p-word');if(i===idx){fill.style.cssText='opacity:1;filter:brightness(1.25) drop-shadow(0 0 16px rgba(200,151,28,0.75))';letter.style.cssText='opacity:1;fill:#FFFFFF;font-size:46px';if(name)name.style.cssText='opacity:1;fill:#E8B84B';if(word)word.style.cssText='opacity:0.8;fill:rgba(232,184,75,0.7)';}else{fill.style.cssText='opacity:0.18;filter:none';letter.style.cssText='opacity:0.18';if(name)name.style.cssText='opacity:0.15';if(word)word.style.cssText='opacity:0.12';}});}
  document.readyState==='loading'?document.addEventListener('DOMContentLoaded',init):setTimeout(init,0);
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
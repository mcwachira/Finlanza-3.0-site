<?php /* Template Name: Finlanza Poultry OS */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Finlanza Poultry OS — Know Your True Cost Per Bird | <?php bloginfo('name'); ?></title>
<meta name="description" content="Finlanza Poultry OS is a complete production management and profitability system for commercial poultry farms. Track every batch, bird, and shilling from chick arrival to slaughter.">
<link rel="canonical" href="<?php echo home_url('/poultry-os/'); ?>">
<meta property="og:title" content="Finlanza Poultry OS — Know Your True Cost Per Bird">
<meta property="og:description" content="Finlanza Poultry OS is a complete production management and profitability system for commercial poultry farms. Track every batch, bird, and shilling from chick arrival to slaughter.">
<meta property="og:url" content="<?php echo home_url('/poultry-os/'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Finlanza">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Finlanza Poultry OS — Know Your True Cost Per Bird">
<meta name="twitter:description" content="Finlanza Poultry OS is a complete production management and profitability system for commercial poultry farms. Track every batch, bird, and shilling from chick arrival to slaughter.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Finlanza Poultry OS",
  "description": "Finlanza Poultry OS is a complete production management and profitability system for commercial poultry farms. Track every batch, bird, and shilling from chick arrival to slaughter.",
  "brand": {
    "@type": "Brand",
    "name": "Finlanza Limited"
  },
  "url": "<?php echo home_url('/poultry-os/'); ?>",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "KES",
    "price": "120000",
    "availability": "https://schema.org/InStock"
  }
}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
  :root{--navy:#0D1B2A;--navy2:#112338;--navy3:#0A1520;--gold:#C8971C;--gold-light:#E6B84A;--white:#FFFFFF;--slate:#8AAAC0;--grey:#94A3B8;--mid:#374151;--green:#16A34A;--amber:#D97706;--red:#DC2626;--teal:#0E7490;}
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
  html{scroll-behavior:smooth;}
  body{font-family:'DM Sans',sans-serif;background:var(--navy);color:var(--white);overflow-x:hidden;}
  nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:1rem 4rem;background:rgba(13,27,42,0.94);backdrop-filter:blur(12px);border-bottom:1px solid rgba(200,151,28,0.15);}
  .nav-logo img{height:28px;width:auto;}
  .nav-links{display:flex;align-items:center;gap:2.5rem;}
  .nav-links a{font-size:0.8rem;font-weight:500;letter-spacing:0.08em;text-transform:uppercase;color:var(--grey);text-decoration:none;transition:color 0.2s;}
  .nav-links a:hover{color:var(--gold);}
  .nav-cta{background:var(--gold);color:var(--navy);padding:0.5rem 1.4rem;font-size:0.8rem;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;text-decoration:none;transition:background 0.2s;}
  .nav-cta:hover{background:var(--gold-light);}
  .nav-back{font-family:'Space Mono',monospace;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:rgba(138,155,173,0.6);text-decoration:none;transition:color 0.2s;padding-right:24px;border-right:1px solid rgba(255,255,255,0.06);}
  .nav-back:hover{color:var(--gold);}

  .hero{min-height:100vh;display:flex;align-items:center;padding:8rem 4rem 5rem;position:relative;overflow:hidden;}
  .hero::before{content:'';position:absolute;top:0;right:0;width:45%;height:100%;background:radial-gradient(ellipse at 80% 40%,rgba(200,151,28,0.07) 0%,transparent 65%);pointer-events:none;}
  .hero-left{max-width:640px;position:relative;z-index:2;}
  .hero-eyebrow{display:inline-flex;align-items:center;gap:0.6rem;font-size:0.75rem;font-weight:600;letter-spacing:0.16em;text-transform:uppercase;color:var(--gold);margin-bottom:1.5rem;}
  .hero-eyebrow span{width:32px;height:1px;background:var(--gold);display:inline-block;}
  .hero h1{font-family:'DM Serif Display',serif;font-size:clamp(3rem,5.5vw,4.8rem);line-height:1.05;color:var(--white);margin-bottom:1.4rem;}
  .hero h1 em{color:var(--gold);font-style:italic;}
  .hero-sub{font-size:1.15rem;color:var(--grey);line-height:1.7;max-width:520px;margin-bottom:2.5rem;}
  .hero-actions{display:flex;align-items:center;gap:1.2rem;flex-wrap:wrap;}
  .btn-primary{background:var(--gold);color:var(--navy);padding:0.85rem 2rem;font-size:0.85rem;font-weight:600;letter-spacing:0.06em;text-transform:uppercase;text-decoration:none;display:inline-block;transition:background 0.2s;}
  .btn-primary:hover{background:var(--gold-light);}
  .btn-ghost{border:1px solid rgba(200,151,28,0.4);color:var(--gold);padding:0.85rem 2rem;font-size:0.85rem;font-weight:500;text-decoration:none;display:inline-block;transition:border-color 0.2s,color 0.2s;}
  .btn-ghost:hover{border-color:var(--gold);color:var(--gold-light);}
  .hero-stats{display:flex;gap:2.5rem;margin-top:3rem;padding-top:2rem;border-top:1px solid rgba(200,151,28,0.15);}
  .hero-stat-val{font-family:'Space Mono',monospace;font-size:2rem;color:var(--gold);display:block;}
  .hero-stat-label{font-size:0.78rem;color:var(--grey);margin-top:0.2rem;letter-spacing:0.04em;}

  section{padding:6rem 4rem;}
  .section-label{font-size:0.72rem;font-weight:600;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;display:block;}
  .section-title{font-family:'DM Serif Display',serif;font-size:clamp(1.8rem,3vw,2.8rem);color:var(--white);line-height:1.15;margin-bottom:1rem;}
  .section-sub{font-size:1rem;color:var(--grey);line-height:1.7;max-width:580px;margin-bottom:3rem;}

  .problem-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.2rem;max-width:860px;}
  .problem-card{background:var(--navy2);border:1px solid rgba(30,48,80,0.8);padding:1.5rem;border-left:3px solid var(--red);}
  .problem-card.sol{border-left-color:var(--green);}
  .problem-label{font-size:0.7rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;margin-bottom:0.5rem;}
  .problem-card .problem-label{color:var(--red);}
  .problem-card.sol .problem-label{color:var(--green);}
  .problem-title{font-size:1rem;font-weight:600;color:var(--white);margin-bottom:0.4rem;}
  .problem-body{font-size:0.86rem;color:var(--grey);line-height:1.6;}

  .demo-box{background:var(--navy2);border:1px solid rgba(200,151,28,0.3);padding:2rem;max-width:680px;margin-top:3rem;}
  .demo-box-title{font-size:0.75rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase;color:var(--gold);margin-bottom:1.2rem;}
  .demo-table{width:100%;border-collapse:collapse;}
  .demo-table th{background:rgba(13,27,42,0.8);color:var(--gold);font-size:0.78rem;font-weight:600;padding:0.6rem 0.8rem;text-align:left;border-bottom:1px solid rgba(200,151,28,0.2);}
  .demo-table td{padding:0.55rem 0.8rem;font-size:0.88rem;color:var(--grey);border-bottom:1px solid rgba(30,48,80,0.6);}
  .demo-table tr:last-child td{color:var(--white);font-weight:600;background:rgba(200,151,28,0.06);border-bottom:none;}
  .demo-table td.highlight{color:var(--gold);font-family:'Space Mono',monospace;}

  .module-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem;}
  .module-card{background:var(--navy2);border:1px solid rgba(30,48,80,0.8);padding:1.4rem;position:relative;}
  .module-card::before{content:'';position:absolute;top:0;left:0;width:100%;height:3px;background:var(--gold);}
  .module-icon{font-size:1.4rem;margin-bottom:0.7rem;}
  .module-name{font-size:0.95rem;font-weight:600;color:var(--white);margin-bottom:0.4rem;}
  .module-desc{font-size:0.84rem;color:var(--grey);line-height:1.6;}
  .v2-badge{font-size:0.65rem;background:rgba(217,119,6,0.15);color:var(--amber);border:1px solid rgba(217,119,6,0.3);padding:0.1rem 0.4rem;margin-left:0.4rem;vertical-align:middle;}

  .lifecycle{background:var(--navy3);}
  .lifecycle-flow{display:flex;flex-wrap:wrap;gap:0.5rem;align-items:center;max-width:900px;}
  .lf-step{background:var(--navy2);border:1px solid rgba(30,48,80,0.8);padding:0.6rem 1rem;font-size:0.84rem;font-weight:500;color:var(--white);}
  .lf-arrow{color:var(--gold);font-size:1rem;font-weight:700;}

  .pricing-section{background:var(--navy3);}
  .tier-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;}
  .tier-card{background:var(--navy2);border:1px solid rgba(30,48,80,0.8);padding:2rem;}
  .tier-card.featured{border:1.5px solid var(--gold);position:relative;}
  .tier-badge{position:absolute;top:-1px;left:50%;transform:translateX(-50%);background:var(--gold);color:var(--navy);font-size:0.65rem;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;padding:0.22rem 0.8rem;white-space:nowrap;}
  .tier-name{font-family:'DM Serif Display',serif;font-size:1.6rem;color:var(--white);margin-bottom:0.3rem;}
  .tier-target{font-size:0.8rem;color:var(--grey);margin-bottom:1rem;}
  .tier-price{font-family:'Space Mono',monospace;font-size:1.1rem;color:var(--gold);margin-bottom:1rem;padding-bottom:1rem;border-bottom:1px solid rgba(30,48,80,0.8);}
  .tier-feature{font-size:0.86rem;color:var(--grey);padding:0.28rem 0;display:flex;align-items:center;gap:0.5rem;}
  .tier-feature::before{content:'✓';color:var(--green);font-weight:700;flex-shrink:0;}
  .revenue-box{background:rgba(10,21,32,0.8);border:1px solid rgba(200,151,28,0.25);padding:1.5rem 2rem;margin-top:2rem;display:flex;gap:3rem;align-items:center;flex-wrap:wrap;}
  .rev-item{text-align:center;}
  .rev-val{font-family:'Space Mono',monospace;font-size:1.4rem;color:var(--gold);display:block;}
  .rev-label{font-size:0.78rem;color:var(--grey);margin-top:0.2rem;}

  .market-section{background:var(--navy);}
  .market-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;margin-bottom:3rem;}
  .market-card{background:var(--navy2);border:1px solid rgba(30,48,80,0.8);padding:1.2rem;text-align:center;}
  .market-val{font-family:'Space Mono',monospace;font-size:1.5rem;color:var(--gold);display:block;margin-bottom:0.2rem;}
  .market-label{font-size:0.8rem;color:var(--grey);}
  .channel-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;}
  .channel-card{background:var(--navy2);border:1px solid rgba(30,48,80,0.8);padding:1.4rem;border-left:3px solid var(--gold);}
  .channel-name{font-size:0.95rem;font-weight:600;color:var(--white);margin-bottom:0.4rem;}
  .channel-desc{font-size:0.84rem;color:var(--grey);line-height:1.6;}
  .channel-example{font-size:0.75rem;color:var(--gold);margin-top:0.5rem;font-style:italic;}

  .cta-section{text-align:center;padding:7rem 4rem;position:relative;overflow:hidden;}
  .cta-section::before{content:'';position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:600px;height:600px;background:radial-gradient(circle,rgba(200,151,28,0.08) 0%,transparent 65%);pointer-events:none;}
  .cta-section h2{font-family:'DM Serif Display',serif;font-size:clamp(2rem,4vw,3.2rem);color:var(--white);margin-bottom:1rem;line-height:1.15;}
  .cta-section h2 em{color:var(--gold);font-style:italic;}
  .cta-section p{font-size:1rem;color:var(--grey);margin-bottom:2.5rem;max-width:520px;margin-left:auto;margin-right:auto;}
  footer{background:var(--navy3);border-top:1px solid rgba(200,151,28,0.15);padding:2.5rem 4rem;display:flex;align-items:center;justify-content:space-between;}
  .footer-brand{font-size:0.78rem;color:var(--grey);}
  .footer-brand strong{color:var(--white);}
  .footer-links{display:flex;gap:2rem;}
  .footer-links a{font-size:0.78rem;color:var(--grey);text-decoration:none;transition:color 0.2s;}
  .footer-links a:hover{color:var(--gold);}

  :focus-visible{outline:2px solid var(--gold);outline-offset:2px;}

  @media (prefers-reduced-motion: reduce) {
    *,*::before,*::after{transition:none !important;animation:none !important;}
  }
</style>
<?php wp_head(); ?>
</head>
<body>

<nav role="navigation" aria-label="Poultry OS navigation">
  <a href="<?php echo home_url('/'); ?>" class="nav-back">← Finlanza</a>
  <div class="nav-logo"><img src="<?php echo get_theme_file_uri('images/finlanza-logo.png'); ?>" alt="Finlanza" style="height:28px;width:auto;display:block;"></div>
  <div class="nav-links">
    <a href="#problem">The Problem</a>
    <a href="#modules">Modules</a>
    <a href="#pricing">Pricing</a>
    <a href="#market">Market</a>
  </div>
  <a href="#cta" class="nav-cta">Now Accepting Pilots</a>
</nav>

<main>

<section class="hero" id="top">
  <div class="hero-left">
    <div class="hero-eyebrow"><span></span> F2 Transform — Agri-Tech Vertical</div>
    <h1>Know your true<br><em>cost per bird.</em></h1>
    <p class="hero-sub">Finlanza Poultry OS is a complete production management and profitability system for commercial poultry farms. From chick arrival to slaughter — every batch, every bird, every shilling tracked.</p>
    <div class="hero-actions">
      <a href="#cta" class="btn-primary">Book a Demo</a>
      <a href="#problem" class="btn-ghost">See the Problem We Solve</a>
    </div>
    <div class="hero-stats">
      <div><span class="hero-stat-val">70%</span><span class="hero-stat-label">of production cost is feed — do you know your FCR?</span></div>
      <div><span class="hero-stat-val">KES 448</span><span class="hero-stat-label">average cost per bird (sample batch — your farm may differ)</span></div>
      <div><span class="hero-stat-val">4 sprints</span><span class="hero-stat-label">from sign-off to go-live on your farm</span></div>
    </div>
  </div>
</section>

<section id="problem" style="background:var(--navy3);">
  <span class="section-label">The Problem</span>
  <h2 class="section-title">Most poultry farms don't know<br>if they're making money.</h2>
  <p class="section-sub">Feed is 70% of production cost. A farm losing 3% feed efficiency can lose millions per year — and never see it coming because the numbers live in notebooks and WhatsApp messages.</p>
  <div class="problem-grid">
    <div class="problem-card">
      <div class="problem-label">Before Poultry OS</div>
      <div class="problem-title">No cost visibility</div>
      <div class="problem-body">Feed, medicine, and overhead costs are tracked in Excel or notebooks. No consolidated cost per bird. Profitability is estimated at best.</div>
    </div>
    <div class="problem-card sol">
      <div class="problem-label">With Poultry OS</div>
      <div class="problem-title">Real-time cost per bird</div>
      <div class="problem-body">Every cost posted to the batch as it occurs. Estimated cost per bird updates daily. Final cost per bird calculated at slaughter.</div>
    </div>
    <div class="problem-card">
      <div class="problem-label">Before Poultry OS</div>
      <div class="problem-title">Blind on feed efficiency</div>
      <div class="problem-body">Feed conversion ratio (FCR) — the single most important production metric — is never calculated or tracked. Losses are invisible until the batch ends.</div>
    </div>
    <div class="problem-card sol">
      <div class="problem-label">With Poultry OS</div>
      <div class="problem-title">FCR updated daily</div>
      <div class="problem-body">FCR = Cumulative Feed Issued ÷ (Live Birds × Average Body Weight). Calculated and displayed on every daily log. Running trend visible at a glance.</div>
    </div>
    <div class="problem-card">
      <div class="problem-label">Before Poultry OS</div>
      <div class="problem-title">Mortality has no system</div>
      <div class="problem-body">Mortality is recorded by WhatsApp message to the owner. No cumulative mortality rate, no comparison across batches, no early warning.</div>
    </div>
    <div class="problem-card sol">
      <div class="problem-label">With Poultry OS</div>
      <div class="problem-title">Mortality tracked &amp; alerted</div>
      <div class="problem-body">Every bird death logged with cause. Cumulative mortality rate calculated. Dashboard shows mortality trend vs batch benchmark.</div>
    </div>
  </div>

  <div class="demo-box">
    <div class="demo-box-title">Sample Dashboard — What You See in Poultry OS</div>
    <table class="demo-table">
      <thead><tr><th>Metric</th><th>Value</th><th>Status</th></tr></thead>
      <tbody>
        <tr><td>Batch</td><td>BATCH-2026-004</td><td></td></tr>
        <tr><td>Chicks Placed</td><td>1,000</td><td></td></tr>
        <tr><td>Current Live Birds</td><td>940</td><td style="color:var(--amber)">Mortality: 60 (6%)</td></tr>
        <tr><td>Total Feed Issued</td><td class="highlight">3,200 kg</td><td></td></tr>
        <tr><td>Feed Conversion Ratio (FCR)</td><td class="highlight">1.88</td><td style="color:var(--green)">Good</td></tr>
        <tr><td>Estimated Cost Per Bird</td><td class="highlight">KES 448</td><td></td></tr>
        <tr><td>Estimated Profit Per Bird</td><td class="highlight">KES 72</td><td style="color:var(--green)">Profitable</td></tr>
      </tbody>
    </table>
  </div>
</section>

<section id="modules">
  <span class="section-label">System Modules</span>
  <h2 class="section-title">The full production lifecycle.<br>Built for broiler farms.</h2>
  <p class="section-sub">Poultry OS V1 is purpose-built for broiler (meat bird) farms. Every module covers one phase of the batch lifecycle — from chick intake to dispatch.</p>
  <div class="module-grid">
    <div class="module-card"><div class="module-icon">🐥</div><div class="module-name">Batch Management</div><div class="module-desc">Create and track batches from chick purchase to close. Each batch has a unique ID, house assignment, chick source, and expected slaughter date.</div></div>
    <div class="module-card"><div class="module-icon">📋</div><div class="module-name">Daily Production Log</div><div class="module-desc">Daily record of live bird count, average body weight, FCR update, feed consumption, and water usage. Core operational input — takes under 3 minutes per day.</div></div>
    <div class="module-card"><div class="module-icon">⚖️</div><div class="module-name">Feed &amp; Medicine Tracking</div><div class="module-desc">Feed and medicine issues recorded against each batch. Cost automatically posted to batch cost centre in Zoho Books. Running feed cost and FCR always current.</div></div>
    <div class="module-card"><div class="module-icon">💀</div><div class="module-name">Mortality Log</div><div class="module-desc">Individual mortality entries with cause classification. Single source of truth. Cumulative mortality rate calculated and compared against batch benchmark.</div></div>
    <div class="module-card"><div class="module-icon">🔬</div><div class="module-name">Vaccination &amp; Treatment</div><div class="module-desc">Vaccination schedule and treatment records per batch. Product, dosage, withdrawal period, and administering staff recorded. Required for farms supplying regulated buyers.</div></div>
    <div class="module-card"><div class="module-icon">📏</div><div class="module-name">Weighing &amp; Sampling</div><div class="module-desc">Periodic weight sampling events. Sample weight data feeds FCR calculation and slaughter date forecasting. Logged by farm supervisor at each weighing event.</div></div>
    <div class="module-card"><div class="module-icon">🔪</div><div class="module-name">Slaughter &amp; Packing</div><div class="module-desc">Slaughter event records birds processed, weight classes, and packing output. Automatically triggers inventory conversion and barcode label generation.</div></div>
    <div class="module-card"><div class="module-icon">🏷️</div><div class="module-name">Barcode Traceability</div><div class="module-desc">Every packing unit gets a unique barcode linking back to the originating batch. Format configurable per client. GS1 compliance available in V2.<span class="v2-badge">V2</span></div></div>
    <div class="module-card"><div class="module-icon">📊</div><div class="module-name">Batch Cost Analysis</div><div class="module-desc">Full cost rollup at batch close: chick cost, feed cost, medicine cost, labour, overhead. Cost per bird and profit per bird calculated and stored permanently.</div></div>
  </div>
</section>

<section class="lifecycle" id="lifecycle">
  <span class="section-label">Production Lifecycle</span>
  <h2 class="section-title">Every stage of the batch.<br>Every record in one system.</h2>
  <p class="section-sub" style="margin-bottom:2.5rem">From the moment chicks arrive to the moment the last pack leaves the farm — Poultry OS tracks every event.</p>
  <div class="lifecycle-flow">
    <div class="lf-step">Chick Purchase</div><div class="lf-arrow">→</div>
    <div class="lf-step">Batch Creation</div><div class="lf-arrow">→</div>
    <div class="lf-step">Daily Production Logs</div><div class="lf-arrow">→</div>
    <div class="lf-step">Feed &amp; Medicine Issues</div><div class="lf-arrow">→</div>
    <div class="lf-step">Mortality Recording</div><div class="lf-arrow">→</div>
    <div class="lf-step">Vaccination &amp; Treatment</div><div class="lf-arrow">→</div>
    <div class="lf-step">Weighing &amp; Sampling</div><div class="lf-arrow">→</div>
    <div class="lf-step">Slaughter &amp; Packing</div><div class="lf-arrow">→</div>
    <div class="lf-step">Barcode Labelling</div><div class="lf-arrow">→</div>
    <div class="lf-step">Sales &amp; Dispatch</div><div class="lf-arrow">→</div>
    <div class="lf-step">Batch Cost Analysis</div>
  </div>
</section>

<section class="pricing-section" id="pricing">
  <span class="section-label">Pricing &amp; Packages</span>
  <h2 class="section-title">Three packages. One product.<br>From small farm to large operation.</h2>
  <p class="section-sub">Finlanza Poultry OS is deployed as a configured instance. You pay for implementation, configuration, and training — not per-user licensing.</p>
  <div class="tier-grid">
    <div class="tier-card">
      <div class="tier-name">Starter</div>
      <div class="tier-target">Small farm · 1–5 active batches</div>
      <div class="tier-price">KES 120,000 – 200,000</div>
      <div class="tier-feature">Batch tracking (creation to close)</div>
      <div class="tier-feature">Daily production logs + FCR</div>
      <div class="tier-feature">Mortality tracking</div>
      <div class="tier-feature">Feed consumption tracking</div>
      <div class="tier-feature">Batch cost rollup</div>
      <div class="tier-feature">Zoho Books setup + cost posting</div>
      <div class="tier-feature">Farm manager + staff training</div>
    </div>
    <div class="tier-card featured">
      <div class="tier-badge">Most Common Sale</div>
      <div class="tier-name" style="margin-top:1.2rem">Professional</div>
      <div class="tier-target">Medium farm · 5–20 active batches</div>
      <div class="tier-price">KES 250,000 – 400,000</div>
      <div class="tier-feature">Everything in Starter</div>
      <div class="tier-feature">Slaughter &amp; packing register</div>
      <div class="tier-feature">Barcode traceability</div>
      <div class="tier-feature">Zoho Books project costing per batch</div>
      <div class="tier-feature">Vaccination &amp; treatment logs</div>
      <div class="tier-feature">Production analytics dashboard</div>
      <div class="tier-feature">Profit per batch reporting</div>
    </div>
    <div class="tier-card">
      <div class="tier-name">Enterprise</div>
      <div class="tier-target">Large or integrated operation</div>
      <div class="tier-price">KES 500,000 – 900,000</div>
      <div class="tier-feature">Everything in Professional</div>
      <div class="tier-feature">Multi-farm structure (V2 dashboard)</div>
      <div class="tier-feature">Multi-house production tracking</div>
      <div class="tier-feature">Zoho Inventory integration</div>
      <div class="tier-feature">Executive dashboard + forecasting</div>
      <div class="tier-feature">Feed supplier integration</div>
      <div class="tier-feature">Priority support + SLA</div>
    </div>
  </div>
</section>

<section class="market-section" id="support" style="background:var(--navy3);">
  <span class="section-label">Ongoing Support</span>
  <h2 class="section-title">Implementation is the beginning.<br>Not the end.</h2>
  <p class="section-sub" style="margin-bottom:2.5rem">Every Finlanza PoultryOS client is offered a monthly support retainer — keeping your system accurate, your team trained, and your data clean as your operation grows.</p>

  <div class="tier-grid">
    <div class="tier-card">
      <div class="tier-name">Basic</div>
      <div class="tier-target">Small farms · steady-state operations</div>
      <div class="tier-price">KES 10,000 / mo</div>
      <div class="tier-feature">System support and user queries</div>
      <div class="tier-feature">Minor configuration adjustments</div>
      <div class="tier-feature">Zoho platform updates applied</div>
      <div class="tier-feature">Email and WhatsApp support</div>
    </div>
    <div class="tier-card featured">
      <div class="tier-badge">Most Popular</div>
      <div class="tier-name" style="margin-top:1.2rem">Professional</div>
      <div class="tier-target">Growing farms · multi-batch operations</div>
      <div class="tier-price">KES 20,000 / mo</div>
      <div class="tier-feature">Everything in Basic</div>
      <div class="tier-feature">Monthly performance report review</div>
      <div class="tier-feature">New feature configuration</div>
      <div class="tier-feature">Additional staff training sessions</div>
      <div class="tier-feature">Batch data audit and cleanup</div>
    </div>
    <div class="tier-card">
      <div class="tier-name">Enterprise</div>
      <div class="tier-target">Large or multi-farm operations</div>
      <div class="tier-price">KES 35,000 / mo</div>
      <div class="tier-feature">Everything in Professional</div>
      <div class="tier-feature">Advanced analytics and dashboards</div>
      <div class="tier-feature">Priority response SLA</div>
      <div class="tier-feature">Quarterly system optimisation review</div>
      <div class="tier-feature">Custom reporting on request</div>
    </div>
  </div>

  <p style="text-align:center;color:var(--grey);font-size:0.85rem;margin-top:2rem;line-height:1.7;">
    Support retainers run month-to-month with no lock-in. Available to all PoultryOS clients post go-live.
  </p>
</section>

<section class="cta-section" id="cta">
  <h2>Does your farm know its true<br><em>cost per bird?</em></h2>
  <p>Book a 60-minute Poultry OS demo. We'll show you exactly what your farm's dashboard would look like with your own numbers.</p>
  <div style="display:flex;gap:1.2rem;justify-content:center;flex-wrap:wrap">
    <a href="mailto:ask@finlanza.com" class="btn-primary">Book a Demo</a>
    <a href="mailto:ask@finlanza.com?subject=Poultry OS Enquiry" class="btn-ghost">Send an Enquiry</a>
  </div>
  <p style="margin-top:1.5rem;font-size:0.82rem;color:var(--grey)">ask@finlanza.com · +254 724 463 536 · finlanza.com</p>
</section>

</main>

<footer role="contentinfo" style="background:var(--navy);border-top:1px solid rgba(255,255,255,0.06);padding:32px 40px;">
  <div style="max-width:1200px;margin:0 auto;">
    <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:20px;padding-bottom:20px;border-bottom:1px solid rgba(255,255,255,0.06);">
      <img src="<?php echo get_theme_file_uri('images/finlanza-logo.png'); ?>" alt="Finlanza" style="height:28px;width:auto;display:block;">
      <div style="display:flex;gap:24px;flex-wrap:wrap;">
        <a href="<?php echo home_url('/'); ?>" style="color:rgba(138,155,173,0.6);font-size:12px;text-decoration:none;letter-spacing:1px;">← Back to Finlanza</a>
        <a href="<?php echo home_url('/products/'); ?>" style="color:rgba(138,155,173,0.6);font-size:12px;text-decoration:none;letter-spacing:1px;">All Products</a>
        <a href="<?php echo home_url('/contact/'); ?>" style="color:rgba(138,155,173,0.6);font-size:12px;text-decoration:none;letter-spacing:1px;">Book a Scoping Call</a>
        <a href="<?php echo home_url('/privacy/'); ?>" style="color:rgba(138,155,173,0.5);font-size:12px;text-decoration:none;letter-spacing:1px;">Privacy Policy</a>
        <a href="<?php echo home_url('/terms/'); ?>" style="color:rgba(138,155,173,0.5);font-size:12px;text-decoration:none;letter-spacing:1px;">Terms of Service</a>
      </div>
    </div>
    <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;padding-top:16px;">
      <div style="font-size:11px;color:rgba(138,155,173,0.4);letter-spacing:0.5px;">© <?php echo date('Y'); ?> Finlanza Limited · Business Systems Architecture Firm</div>
      <div style="display:inline-flex;align-items:center;gap:8px;border:1px solid rgba(200,151,28,0.16);padding:5px 10px;opacity:0.6;">
        <span style="font-family:'Space Mono',monospace;font-size:9px;letter-spacing:2px;color:rgba(255,255,255,0.4);">ZOHO</span>
        <span style="display:inline-block;width:1px;height:12px;background:rgba(200,151,28,0.25);"></span>
        <span style="font-family:'Space Mono',monospace;font-size:8px;letter-spacing:2px;text-transform:uppercase;color:rgba(200,151,28,0.6);">Authorised Partner · Africa</span>
      </div>
    </div>
  </div>
</footer>

<script>
(function(){
  var els=document.querySelectorAll(".reveal");
  if(!els.length)return;
  var io=new IntersectionObserver(function(e){e.forEach(function(x){if(x.isIntersecting)x.target.classList.add("visible");});},{threshold:0.07});
  els.forEach(function(el){io.observe(el);});
  setTimeout(function(){els.forEach(function(el){el.classList.add("visible");});},800);
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
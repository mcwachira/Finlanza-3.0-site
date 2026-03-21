<?php
/* Template Name: Finlanza Garage ERP */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Finlanza Poultry OS — Know Your True Cost Per Bird.</title>
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
</style>
<?php wp_head(); ?>
</head>
<body>

<nav>
    <a class="nav-logo" href="https://finlanza.com/index.html">
      <!-- SEO: Added alt text to logo image -->

    <img src="data:image/png;base64,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" alt="Finlanza" style="height:36px;width:auto;display:block;">
  </a>
   <div class="nav-links">
    <a href="#problem">The Problem</a>
    <a href="#modules">Modules</a>
    <a href="#pricing">Pricing</a>
    <a href="#market">Market</a>
  </div>
  <a href="#cta" class="nav-cta">Now Accepting Pilots</a>
</nav>

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
      <div class="problem-title">Mortality tracked & alerted</div>
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
    <div class="module-card"><div class="module-icon">⚖️</div><div class="module-name">Feed & Medicine Tracking</div><div class="module-desc">Feed and medicine issues recorded against each batch. Cost automatically posted to batch cost centre in Zoho Books. Running feed cost and FCR always current.</div></div>
    <div class="module-card"><div class="module-icon">💀</div><div class="module-name">Mortality Log</div><div class="module-desc">Individual mortality entries with cause classification. Single source of truth. Cumulative mortality rate calculated and compared against batch benchmark.</div></div>
    <div class="module-card"><div class="module-icon">🔬</div><div class="module-name">Vaccination & Treatment</div><div class="module-desc">Vaccination schedule and treatment records per batch. Product, dosage, withdrawal period, and administering staff recorded. Required for farms supplying regulated buyers.</div></div>
    <div class="module-card"><div class="module-icon">📏</div><div class="module-name">Weighing & Sampling</div><div class="module-desc">Periodic weight sampling events. Sample weight data feeds FCR calculation and slaughter date forecasting. Logged by farm supervisor at each weighing event.</div></div>
    <div class="module-card"><div class="module-icon">🔪</div><div class="module-name">Slaughter & Packing</div><div class="module-desc">Slaughter event records birds processed, weight classes, and packing output. Automatically triggers inventory conversion and barcode label generation.</div></div>
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
  <span class="section-label">Pricing & Packages</span>
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

  <div class="revenue-box">
    <div class="rev-item"><span class="rev-val">KES 600K</span><span class="rev-label">average total Year 1 value per farm client</span></div>
    <div class="rev-item"><span class="rev-val">KES 300K</span><span class="rev-label">average implementation fee</span></div>
    <div class="rev-item"><span class="rev-val">KES 240K/yr</span><span class="rev-label">annual support retainer (KES 20K/month)</span></div>
    <div class="rev-item"><span class="rev-val">KES 60K/yr</span><span class="rev-label">Zoho licence margin</span></div>
  </div>
</section>

<section class="market-section" id="market">
  <span class="section-label">Market Opportunity</span>
  <h2 class="section-title">East Africa has 15,000–20,000<br>commercial poultry farms.</h2>
  <p class="section-sub" style="margin-bottom:2.5rem">You don't need a large share to build a significant business. 80 farms at KES 600K each = KES 48M revenue.</p>
  <div class="market-grid">
    <div class="market-card"><span class="market-val">~6,000</span><div class="market-label">Commercial farms in Kenya</div></div>
    <div class="market-card"><span class="market-val">~4,000</span><div class="market-label">Commercial farms in Uganda</div></div>
    <div class="market-card"><span class="market-val">~8,000</span><div class="market-label">Commercial farms in Tanzania</div></div>
    <div class="market-card"><span class="market-val">~10,000</span><div class="market-label">Commercial farms in Ethiopia</div></div>
  </div>
  <h3 style="font-size:1rem;font-weight:600;color:var(--white);margin-bottom:1.2rem">Go-To-Market Channels</h3>
  <div class="channel-grid">
    <div class="channel-card"><div class="channel-name">Feed Companies</div><div class="channel-desc">Feed companies already supply thousands of farms and have their trust. Position Poultry OS as a feed efficiency monitoring system. The feed company introduces you.</div><div class="channel-example">Unga Farm Care · Pembe Feeds · Sigma Feeds</div></div>
    <div class="channel-card"><div class="channel-name">Hatcheries</div><div class="channel-desc">Every chick buyer is a potential client. Hatcheries see the full market. A partnership with a hatchery provides warm introductions to farms that are already scaling.</div><div class="channel-example">Kenchic Hatchery · Muguku · Bradegate</div></div>
    <div class="channel-card"><div class="channel-name">Poultry Consultants</div><div class="channel-desc">Many commercial farms use production consultants. Partnering with consultants — who can recommend Poultry OS to their client base — provides credible warm leads.</div><div class="channel-example">Veterinary consultants · Production advisors</div></div>
  </div>
</section>

<section class="cta-section" id="cta">
  <h2>Does your farm know its true<br><em>cost per bird?</em></h2>
  <p>Book a 60-minute Poultry OS demo. We'll show you exactly what your farm's dashboard would look like with your own numbers.</p>
  <div style="display:flex;gap:1.2rem;justify-content:center;flex-wrap:wrap">
    <a href="/cdn-cgi/l/email-protection#fd9e92919194938ebd9b9493919c93879cd39e9290" class="btn-primary">Book a Demo</a>
    <a href="/cdn-cgi/l/email-protection#086b67646461667b486e61666469667269266b6765377b7d6a626d6b7c3558677d647c7a712d3a38475b2d3a384d66797d617a71" class="btn-ghost">Send an Enquiry</a>
  </div>
  <p style="margin-top:1.5rem;font-size:0.82rem;color:var(--grey)"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9efdf1f2f2f7f0eddef8f7f0f2fff0e4ffb0fdf1f3">[email&#160;protected]</a> · +254 724 463 536 · finlanza.com</p>
</section>

<footer>
  <div class="footer-brand"><strong>Finlanza Limited</strong> · Business Systems Architecture Firm</div>
  <div class="footer-links" style="display:flex;gap:24px;margin-top:8px;flex-wrap:wrap;">
    <a href="index.html" style="color:rgba(138,155,173,0.6);font-size:12px;text-decoration:none;letter-spacing:1px;">← Back to Finlanza</a>
    <a href="contact.html" style="color:rgba(138,155,173,0.6);font-size:12px;text-decoration:none;letter-spacing:1px;">Book a Scoping Call</a>
    <a href="mailto:collins@finlanza.com" style="color:rgba(138,155,173,0.6);font-size:12px;text-decoration:none;letter-spacing:1px;">collins@finlanza.com</a>
  </div>
  <div style="margin-top:12px;display:inline-flex;align-items:center;gap:8px;border:1px solid rgba(200,151,28,0.16);padding:6px 12px;opacity:0.65;">
    <span style="font-family:'Space Mono',monospace;font-size:10px;letter-spacing:2px;color:rgba(255,255,255,0.45);">ZOHO</span>
    <span style="display:inline-block;width:1px;height:14px;background:rgba(200,151,28,0.25);"></span>
    <span style="font-family:'Space Mono',monospace;font-size:8.5px;letter-spacing:2px;text-transform:uppercase;color:rgba(200,151,28,0.7);">Authorised Partner · Africa</span>
  </div>
  <div style="margin-top:12px;font-size:11px;color:rgba(138,155,173,0.4);letter-spacing:1px;">© 2026 Finlanza Limited. All rights reserved.</div>

  <?php wp_footer(); ?>
</footer>
</body>
</html>
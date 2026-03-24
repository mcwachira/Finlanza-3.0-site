<?php
/*
 * Template Name: Finlanza Scorecard
 * Description: Interactive Business Systems Health Check
 */
remove_action('wp_head', 'wp_generator');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Free Business Systems Scorecard — How Healthy Are Your Systems? | Finlanza</title>
<meta name="description" content="Take the 5-minute Finlanza Business Systems Health Check. Get an instant score across 6 operational dimensions and a personalised diagnosis of where your business is bleeding efficiency. Free assessment for African businesses.">
<meta name="robots" content="index, follow">
<!-- FIXED: WordPress canonical URL -->
<link rel="canonical" href="<?php echo home_url('/scorecard/'); ?>">
<meta property="og:title" content="Free Business Systems Scorecard — How Healthy Are Your Systems? | Finlanza">
<meta property="og:description" content="Take the 5-minute Finlanza Business Systems Health Check. Get an instant score across 6 operational dimensions and a personalised diagnosis.">
<!-- FIXED: WordPress theme file URI for OG image -->
<meta property="og:image" content="<?php echo get_theme_file_uri('images/finlanza-scorecard-og.jpg'); ?>">
<!-- FIXED: WordPress og:url -->
<meta property="og:url" content="<?php echo home_url('/scorecard/'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Finlanza">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Free Business Systems Scorecard — How Healthy Are Your Systems? | Finlanza">
<meta name="twitter:description" content="Take the 5-minute Finlanza Business Systems Health Check. Get an instant score across 6 operational dimensions.">
<!-- FIXED: WordPress theme file URI for Twitter image -->
<meta name="twitter:image" content="<?php echo get_theme_file_uri('images/finlanza-scorecard-twitter.jpg'); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Finlanza Business Systems Health Check",
  "description": "Free 5-minute assessment that scores your business systems across 6 operational dimensions and provides personalised recommendations.",
  "url": "<?php echo home_url('/scorecard/'); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "Finlanza",
    "url": "<?php echo home_url('/'); ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Nairobi",
      "addressCountry": "Kenya"
    }
  }
}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --navy:       #1B3A6B;
    --navy-deep:  #0D1B2A;
    --navy-mid:   #0F2340;
    --gold:       #C8971C;
    --gold-light: #E8B84B;
    --gold-pale:  #F5EDD4;
    --offwhite:   #F8F6F1;
    --warm-grey:  #EAE6DC;
    --text:       #1A2530;
    --muted:      #6B7A8D;
    --slate:      #3A4A5C;
    --red:        #8B2020;
    --amber:      #7A5C00;
    --green:      #1A4A2A;
    --white:      #FFFFFF;
    --text-muted: #8A9BAD;
    --border-light: rgba(255,255,255,0.08);
    --border: rgba(200,151,28,0.2);
  }

  :focus-visible { outline: 2px solid #C8971C; outline-offset: 2px; }

  @media (prefers-reduced-motion: reduce) {
    .screen { animation: none; }
    .score-ring-fill { transition: none; }
    .breakdown-bar-fill { transition: none; }
  }

  html { scroll-behavior: smooth; }
  body { font-family: 'DM Sans', sans-serif; background: var(--navy-deep); color: var(--text); min-height: 100vh; overflow-x: hidden; padding-top: 0 !important; }

  /* Nav */
  nav { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; padding: 0 60px; height: 72px; display: flex; align-items: center; justify-content: space-between; background: rgba(13,27,42,0.92); backdrop-filter: blur(12px); border-bottom: 1px solid var(--border); transition: all 0.3s ease; }
  .nav-logo { display: flex; align-items: center; text-decoration: none; }
  .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
  .nav-links a { text-decoration: none; font-size: 13px; font-weight: 400; letter-spacing: 1.5px; text-transform: uppercase; color: var(--text-muted); transition: color 0.2s; }
  .nav-links a:hover { color: var(--gold); }
  .nav-links a.active { color: var(--white); }
  .nav-cta { background: var(--gold); color: var(--navy-deep) !important; padding: 10px 24px !important; font-weight: 500 !important; letter-spacing: 1px !important; transition: background 0.2s !important; }
  .nav-cta:hover { background: var(--gold-light) !important; }
  .nav-gold { color: var(--gold) !important; }
  .nav-hamburger { display:none; background:none; border:1px solid var(--border); color:var(--white); padding:6px 12px; cursor:pointer; font-size:17px; }
  @media(max-width:900px){ nav { padding: 0 24px; } .nav-links { display:none; flex-direction:column; position:absolute; top:72px; left:0; right:0; background:rgba(13,27,42,0.98); border-bottom:1px solid var(--border); padding:20px 24px; gap:16px; } .nav-links.mob-open { display:flex; } .nav-hamburger { display:block; } }

  /* Layout */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 60px; }
  .label { font-size: 11px; font-weight: 500; letter-spacing: 3px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; display: block; }
  .display-md { font-family: 'Bebas Neue', sans-serif; font-size: clamp(36px, 4vw, 56px); line-height: 1; letter-spacing: 1px; color: var(--white); }
  .gold { color: var(--gold); }

  /* Grid background */
  .grid-bg { position: fixed; inset: 0; background-image: linear-gradient(rgba(200,151,28,0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(200,151,28,0.04) 1px, transparent 1px); background-size: 40px 40px; pointer-events: none; z-index: 0; }

  /* Screen system */
  #scorecard-wrap { padding-top: 72px; }
  .screen { display: none; min-height: calc(100vh - 72px); position: relative; z-index: 1; animation: fadeUp 0.5s ease both; }
  .screen.active { display: flex; flex-direction: column; align-items: center; }

  @keyframes fadeUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }

  /* Intro screen */
  #screen-intro { justify-content: center; padding: 60px 24px; background: linear-gradient(160deg, var(--navy-deep) 0%, var(--navy) 60%, var(--navy-mid) 100%); }
  .intro-inner { max-width: 720px; width: 100%; display: flex; flex-direction: column; align-items: center; text-align: center; gap: 0; }
  .brand-lockup { display: flex; align-items: center; gap: 14px; margin-bottom: 64px; }
  .fz-mark { width: 44px; height: 44px; flex-shrink: 0; }
  .brand-name { font-family: 'DM Sans', sans-serif; font-size: 15px; font-weight: 300; letter-spacing: 0.22em; color: rgba(255,255,255,0.7); text-transform: uppercase; }
  .intro-eyebrow { font-size: 11px; font-weight: 400; letter-spacing: 0.18em; text-transform: uppercase; color: var(--gold); margin-bottom: 24px; display: flex; align-items: center; gap: 12px; }
  .intro-eyebrow::before, .intro-eyebrow::after { content: ''; display: block; width: 40px; height: 1px; background: var(--gold); opacity: 0.5; }
  .intro-headline { font-family: 'DM Serif Display', serif; font-size: clamp(42px, 6vw, 68px); font-weight: 600; line-height: 1.05; color: #fff; margin-bottom: 12px; }
  .intro-headline em { font-style: italic; color: var(--gold-light); }
  .intro-sub { font-size: 17px; font-weight: 300; line-height: 1.65; color: rgba(255,255,255,0.65); max-width: 560px; margin: 0 auto 48px; }
  .stats-row { display: flex; gap: 40px; justify-content: center; flex-wrap: wrap; margin-bottom: 56px; }
  .stat { display: flex; flex-direction: column; align-items: center; gap: 4px; }
  .stat-num { font-family: 'DM Serif Display', serif; font-size: 36px; font-weight: 600; color: var(--gold-light); line-height: 1; }
  .stat-label { font-size: 11px; font-weight: 400; color: rgba(255,255,255,0.45); letter-spacing: 0.08em; text-align: center; }
  .start-btn { background: var(--gold); color: var(--navy-deep); border: none; cursor: pointer; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; padding: 18px 48px; transition: all 0.2s ease; clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 12px 100%, 0 calc(100% - 12px)); }
  .start-btn:hover { background: var(--gold-light); transform: translateY(-2px); box-shadow: 0 12px 40px rgba(200,151,28,0.35); }
  .intro-note { margin-top: 20px; font-size: 12px; color: rgba(255,255,255,0.3); letter-spacing: 0.04em; }
  .section-pills { display: flex; gap: 8px; flex-wrap: wrap; justify-content: center; margin-bottom: 56px; }
  .pill { border: 1px solid rgba(200,151,28,0.3); color: rgba(255,255,255,0.55); font-size: 11px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; padding: 6px 14px; display: flex; align-items: center; gap: 6px; }
  .pill-dot { width: 5px; height: 5px; border-radius: 50%; background: var(--gold); opacity: 0.7; }

  /* Progress bar */
  .progress-bar-wrap { position: fixed; top: 0; left: 0; right: 0; height: 3px; background: rgba(255,255,255,0.08); z-index: 100; }
  .progress-bar-fill { height: 100%; background: linear-gradient(90deg, var(--gold), var(--gold-light)); transition: width 0.4s ease; }

  /* Question screen */
  #screen-questions { background: var(--offwhite); padding: 0 0 80px; }
  .q-header { width: 100%; background: var(--navy-deep); padding: 20px 40px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid rgba(200,151,28,0.2); }
  .q-brand { display: flex; align-items: center; gap: 10px; }
  .q-brand-name { font-size: 13px; font-weight: 400; letter-spacing: 0.16em; color: rgba(255,255,255,0.6); text-transform: uppercase; }
  .q-counter { font-size: 12px; color: var(--gold); letter-spacing: 0.08em; }
  .q-body { max-width: 760px; width: 100%; padding: 60px 24px 0; }
  .q-section-label { font-size: 10px; font-weight: 500; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-bottom: 10px; display: flex; align-items: center; gap: 10px; }
  .q-section-label::after { content: ''; display: block; flex: 1; height: 1px; background: linear-gradient(90deg, rgba(200,151,28,0.3), transparent); }
  .q-number { font-size: 13px; font-weight: 400; color: var(--muted); margin-bottom: 16px; }
  .q-text { font-family: 'DM Serif Display', serif; font-size: clamp(24px, 3.5vw, 32px); font-weight: 600; line-height: 1.25; color: var(--navy); margin-bottom: 40px; }
  .q-options { display: flex; flex-direction: column; gap: 12px; margin-bottom: 48px; }
  .q-option { display: flex; align-items: flex-start; gap: 16px; padding: 18px 22px; background: #fff; border: 1.5px solid rgba(27,58,107,0.12); cursor: pointer; transition: all 0.18s ease; }
  .q-option:hover { border-color: var(--gold); background: var(--gold-pale); transform: translateX(4px); }
  .q-option.selected { border-color: var(--navy); background: rgba(27,58,107,0.04); }
  .q-option.selected .opt-score-badge { opacity: 1; }
  .opt-key { width: 28px; height: 28px; flex-shrink: 0; border: 1.5px solid rgba(27,58,107,0.2); display: flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 500; color: var(--muted); transition: all 0.18s ease; }
  .q-option.selected .opt-key { background: var(--navy); border-color: var(--navy); color: #fff; }
  .opt-text { flex: 1; font-size: 15px; font-weight: 400; line-height: 1.5; color: var(--text); padding-top: 3px; }
  .opt-score-badge { font-size: 10px; font-weight: 500; color: var(--muted); opacity: 0; padding-top: 5px; flex-shrink: 0; transition: opacity 0.18s; }
  .q-nav { display: flex; align-items: center; justify-content: space-between; }
  .btn-back { background: none; border: 1.5px solid rgba(27,58,107,0.2); color: var(--muted); font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 500; padding: 12px 24px; cursor: pointer; transition: all 0.18s; letter-spacing: 0.04em; }
  .btn-back:hover { border-color: var(--navy); color: var(--navy); }
  .btn-next { background: var(--navy); color: #fff; border: none; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; padding: 14px 36px; cursor: pointer; transition: all 0.2s; clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 10px, 100% 100%, 10px 100%, 0 calc(100% - 10px)); opacity: 0.4; pointer-events: none; }
  .btn-next.enabled { opacity: 1; pointer-events: all; }
  .btn-next.enabled:hover { background: var(--gold); color: var(--navy-deep); transform: translateY(-1px); }

  /* Gate screen */
  #screen-gate { background: var(--navy-deep); background-image: linear-gradient(rgba(200,151,28,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(200,151,28,0.03) 1px, transparent 1px); background-size: 40px 40px; justify-content: center; padding: 60px 24px; }
  .gate-inner { max-width: 560px; width: 100%; text-align: center; }
  .gate-icon { width: 64px; height: 64px; margin: 0 auto 32px; border: 1px solid rgba(200,151,28,0.3); display: flex; align-items: center; justify-content: center; position: relative; }
  .gate-icon::before { content: ''; position: absolute; inset: -6px; border: 1px solid rgba(200,151,28,0.1); }
  .gate-eyebrow { font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-bottom: 20px; }
  .gate-headline { font-family: 'DM Serif Display', serif; font-size: clamp(30px, 4vw, 42px); font-weight: 600; color: #fff; line-height: 1.15; margin-bottom: 16px; }
  .gate-sub { font-size: 15px; font-weight: 300; line-height: 1.65; color: rgba(255,255,255,0.55); margin-bottom: 40px; }
  .gate-form { display: flex; flex-direction: column; gap: 14px; margin-bottom: 20px; }
  .form-row { display: flex; gap: 14px; }
  .form-row .form-field { flex: 1; }
  .form-field { display: flex; flex-direction: column; gap: 6px; text-align: left; }
  .form-label { font-size: 11px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; color: rgba(255,255,255,0.4); }
  .form-input { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.12); color: #fff; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 300; padding: 13px 16px; outline: none; transition: border-color 0.18s; width: 100%; }
  .form-input::placeholder { color: rgba(255,255,255,0.2); }
  .form-input:focus { border-color: var(--gold); }
  .form-select { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.12); color: rgba(255,255,255,0.7); font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 300; padding: 13px 16px; outline: none; width: 100%; -webkit-appearance: none; cursor: pointer; transition: border-color 0.18s; }
  .form-select:focus { border-color: var(--gold); }
  .form-select option { background: var(--navy-deep); color: #fff; }
  .btn-reveal { background: var(--gold); color: var(--navy-deep); border: none; font-family: 'DM Sans', sans-serif; font-size: 14px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 18px; cursor: pointer; width: 100%; transition: all 0.2s; clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 12px 100%, 0 calc(100% - 12px)); margin-top: 8px; }
  .btn-reveal:hover { background: var(--gold-light); transform: translateY(-2px); box-shadow: 0 12px 40px rgba(200,151,28,0.35); }
  .gate-privacy { font-size: 11px; color: rgba(255,255,255,0.25); margin-top: 12px; }

  /* Results screen */
  #screen-results { background: var(--offwhite); padding-bottom: 80px; }
  .results-hero { width: 100%; background: var(--navy-deep); padding: 56px 24px; display: flex; flex-direction: column; align-items: center; text-align: center; position: relative; overflow: hidden; }
  .results-hero::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, transparent, var(--gold), transparent); }
  .results-eyebrow { font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-bottom: 32px; }
  .score-ring-wrap { position: relative; width: 180px; height: 180px; margin: 0 auto 32px; }
  .score-ring-svg { transform: rotate(-90deg); width: 180px; height: 180px; }
  .score-ring-track { fill: none; stroke: rgba(255,255,255,0.06); stroke-width: 10; }
  .score-ring-fill { fill: none; stroke-width: 10; stroke-linecap: round; transition: stroke-dashoffset 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
  .score-text-inner { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; display: flex; flex-direction: column; align-items: center; }
  .score-num { font-family: 'DM Serif Display', serif; font-size: 56px; font-weight: 600; line-height: 1; color: #fff; }
  .score-denom { font-size: 12px; color: rgba(255,255,255,0.35); letter-spacing: 0.1em; }
  .score-tier-name { font-family: 'DM Serif Display', serif; font-size: 28px; font-weight: 600; color: #fff; margin-bottom: 8px; }
  .score-tier-sub { font-size: 14px; font-weight: 300; color: rgba(255,255,255,0.5); max-width: 480px; }
  .results-body { max-width: 760px; width: 100%; padding: 56px 24px 0; }
  .section-breakdown { margin-bottom: 48px; }
  .breakdown-title { font-size: 10px; font-weight: 500; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-bottom: 20px; padding-bottom: 12px; border-bottom: 1px solid rgba(200,151,28,0.2); }
  .breakdown-item { display: flex; align-items: center; gap: 16px; margin-bottom: 16px; }
  .breakdown-label { font-size: 13px; font-weight: 500; color: var(--navy); width: 180px; flex-shrink: 0; }
  .breakdown-bar-track { flex: 1; height: 6px; background: rgba(27,58,107,0.08); }
  .breakdown-bar-fill { height: 100%; background: linear-gradient(90deg, var(--navy), var(--gold)); transition: width 1s cubic-bezier(0.22, 1, 0.36, 1) 0.3s; width: 0; }
  .breakdown-pct { font-size: 12px; color: var(--muted); width: 36px; text-align: right; flex-shrink: 0; }
  .diagnosis-block { background: #fff; border: 1px solid rgba(27,58,107,0.1); border-left: 4px solid var(--gold); padding: 28px 32px; margin-bottom: 32px; }
  .diagnosis-block h3 { font-family: 'DM Serif Display', serif; font-size: 22px; font-weight: 600; color: var(--navy); margin-bottom: 12px; }
  .diagnosis-block p { font-size: 14px; line-height: 1.75; color: var(--slate); }
  .findings-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 48px; }
  .finding-card { background: #fff; border: 1px solid rgba(27,58,107,0.08); padding: 22px 20px; position: relative; }
  .finding-card::before { content: ''; position: absolute; top: 0; left: 0; width: 3px; height: 100%; }
  .finding-card.critical::before { background: #8B2020; }
  .finding-card.moderate::before { background: var(--gold); }
  .finding-card.strength::before { background: #1A4A2A; }
  .finding-badge { font-size: 9px; font-weight: 500; letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 8px; }
  .finding-card.critical .finding-badge { color: #8B2020; }
  .finding-card.moderate .finding-badge { color: var(--amber); }
  .finding-card.strength .finding-badge { color: #1A4A2A; }
  .finding-title { font-size: 14px; font-weight: 600; color: var(--navy); margin-bottom: 6px; }
  .finding-desc { font-size: 12.5px; line-height: 1.6; color: var(--muted); }
  .cta-block { background: var(--navy); padding: 48px 40px; text-align: center; position: relative; overflow: hidden; }
  .cta-block::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, transparent, var(--gold), transparent); }
  .cta-eyebrow { font-size: 10px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; }
  .cta-headline { font-family: 'DM Serif Display', serif; font-size: clamp(26px, 3.5vw, 36px); font-weight: 600; color: #fff; margin-bottom: 14px; line-height: 1.2; }
  .cta-sub { font-size: 14px; font-weight: 300; color: rgba(255,255,255,0.55); max-width: 460px; margin: 0 auto 32px; line-height: 1.65; }
  .cta-btn { display: inline-block; background: var(--gold); color: var(--navy-deep); border: none; font-family: 'DM Sans', sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; padding: 16px 44px; cursor: pointer; transition: all 0.2s; clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 10px, 100% 100%, 10px 100%, 0 calc(100% - 10px)); text-decoration: none; }
  .cta-btn:hover { background: var(--gold-light); transform: translateY(-2px); box-shadow: 0 12px 40px rgba(200,151,28,0.35); }
  .cta-note { margin-top: 16px; font-size: 12px; color: rgba(255,255,255,0.25); }
  .share-row { display: flex; justify-content: center; gap: 12px; margin-top: 32px; flex-wrap: wrap; }
  .share-btn { border: 1px solid rgba(255,255,255,0.15); color: rgba(255,255,255,0.5); background: none; font-family: 'DM Sans', sans-serif; font-size: 11px; font-weight: 500; letter-spacing: 0.1em; text-transform: uppercase; padding: 9px 20px; cursor: pointer; transition: all 0.18s; }
  .share-btn:hover { border-color: var(--gold); color: var(--gold); }

  /* Footer */
  footer { background: #152232; border-top: 1px solid var(--border); padding: 60px 0 40px; }
  .footer-bottom { display: flex; justify-content: space-between; align-items: center; }
  .footer-copy { font-size: 13px; color: var(--text-muted); }
  .footer-legal { display: flex; gap: 24px; }
  .footer-legal a { font-size: 13px; color: var(--text-muted); text-decoration: none; }
  .footer-legal a:hover { color: var(--white); }

  @media (max-width: 600px) {
    .q-header { padding: 16px 20px; }
    .q-body { padding: 40px 20px 0; }
    .form-row { flex-direction: column; }
    .breakdown-label { width: 130px; font-size: 12px; }
    .diagnosis-block { padding: 22px 20px; }
    .cta-block { padding: 40px 24px; }
    .stats-row { gap: 24px; }
    .container { padding: 0 24px; }
  }
</style>
</head>
<body>

  <nav id="main-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <img src="data:image/png;base64,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" alt="Finlanza" style="height:36px;width:auto;display:block;">
  </a>
  <ul class="nav-links" id="navLinks">
    <li>
      <a href="<?php echo home_url('/'); ?>"
         <?php if(is_front_page()) echo 'class="active" aria-current="page"'; ?>>Home</a>
    </li>
    <li>
      <a href="<?php echo home_url('/services/'); ?>"
         <?php if(is_page('services')) echo 'class="active" aria-current="page"'; ?>>Services</a>
    </li>
    <li>
      <a href="<?php echo home_url('/products/'); ?>"
         <?php if(is_page('products')) echo 'class="active" aria-current="page"'; ?>>Products</a>
    </li>
    <li>
      <a href="<?php echo home_url('/dream/'); ?>"
         <?php if(is_page('dream')) echo 'class="active" aria-current="page"'; ?>>DREAM™</a>
    </li>
    <li>
      <a href="<?php echo home_url('/insights/'); ?>"
         <?php if(is_page('insights') || is_single()) echo 'class="active" aria-current="page"'; ?>>Insights</a>
    </li>
    <li>
      <a href="<?php echo home_url('/scorecard/'); ?>"
         class="nav-gold<?php if(is_page('scorecard')) echo ' active'; ?>"
         <?php if(is_page('scorecard')) echo 'aria-current="page"'; ?>>Free Scorecard</a>
    </li>
    <li>
      <a href="<?php echo home_url('/contact/'); ?>"
         class="nav-cta<?php if(is_page('contact')) echo ' active'; ?>"
         <?php if(is_page('contact')) echo 'aria-current="page"'; ?>>Book a Review</a>
    </li>
  </ul>
  <button class="nav-hamburger"
    onclick="document.getElementById('navLinks').classList.toggle('mob-open');
             this.setAttribute('aria-expanded',
             this.getAttribute('aria-expanded')==='false'?'true':'false');"
    aria-label="Toggle navigation menu"
    aria-expanded="false"
    aria-controls="navLinks">☰</button>
</nav>

<main id="scorecard-wrap">
  <div class="grid-bg" aria-hidden="true"></div>

  <div class="progress-bar-wrap" id="progressWrap" style="display:none;">
    <div class="progress-bar-fill" id="progressFill"
         role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
         aria-label="Assessment progress"></div>
  </div>

  <!-- INTRO SCREEN -->
  <div class="screen active" id="screen-intro" role="region" aria-label="Assessment introduction">
    <div class="intro-inner">
      <div class="brand-lockup">
        <svg class="fz-mark" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" aria-label="Finlanza mark" role="img">
          <rect width="300" height="300" fill="#1B3A6B"/>
          <rect x="55" y="88" width="30" height="164" fill="#C8971C"/>
          <rect x="55" y="152" width="106" height="28" fill="#C8971C"/>
          <rect x="55" y="55" width="210" height="33" fill="white"/>
          <polygon points="218,88 244,88 178,219 152,219" fill="white"/>
          <rect x="55" y="219" width="210" height="33" fill="white"/>
        </svg>
        <span class="brand-name">Finlanza</span>
      </div>
      <div class="intro-eyebrow">Free Assessment</div>
      <h1 class="intro-headline">How healthy are your<br><em>business systems?</em></h1>
      <p class="intro-sub">Take the 5-minute Finlanza Business Systems Health Check. Get an instant score across 6 operational dimensions — and a personalised diagnosis of where your business is bleeding efficiency.</p>
      <div class="section-pills">
        <div class="pill"><span class="pill-dot"></span>Process &amp; Operations</div>
        <div class="pill"><span class="pill-dot"></span>Finance Infrastructure</div>
        <div class="pill"><span class="pill-dot"></span>Data &amp; Reporting</div>
        <div class="pill"><span class="pill-dot"></span>Technology Stack</div>
        <div class="pill"><span class="pill-dot"></span>People &amp; Alignment</div>
        <div class="pill"><span class="pill-dot"></span>Growth Readiness</div>
      </div>
      <div class="stats-row">
        <div class="stat"><span class="stat-num">18</span><span class="stat-label">Diagnostic questions</span></div>
        <div class="stat"><span class="stat-num">5</span><span class="stat-label">Minutes to complete</span></div>
        <div class="stat"><span class="stat-num">6</span><span class="stat-label">Operational dimensions</span></div>
      </div>
      <button class="start-btn" onclick="startAssessment()">Begin Health Check →</button>
      <p class="intro-note">No payment required · Instant results · Used by African businesses</p>
    </div>
  </div>

  <!-- QUESTION SCREEN -->
  <div class="screen" id="screen-questions" role="region" aria-label="Assessment questions">
    <div class="q-header">
      <div class="q-brand">
        <svg width="28" height="28" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <rect width="300" height="300" fill="#1B3A6B"/>
          <rect x="55" y="88" width="30" height="164" fill="#C8971C"/>
          <rect x="55" y="152" width="106" height="28" fill="#C8971C"/>
          <rect x="55" y="55" width="210" height="33" fill="white"/>
          <polygon points="218,88 244,88 178,219 152,219" fill="white"/>
          <rect x="55" y="219" width="210" height="33" fill="white"/>
        </svg>
        <span class="q-brand-name">Business Systems Health Check</span>
      </div>
      <span class="q-counter" id="qCounter" aria-live="polite" aria-atomic="true">01 / 18</span>
    </div>
    <div class="q-body">
      <div class="q-section-label" id="qSectionLabel">Process &amp; Operations</div>
      <div class="q-number" id="qNumber">Question 1 of 18</div>
      <div class="q-text" id="qText" aria-live="polite" aria-atomic="true"></div>
      <div class="q-options" id="qOptions" role="radiogroup" aria-labelledby="qText"></div>
      <div class="q-nav">
        <button class="btn-back" id="btnBack" onclick="prevQuestion()" aria-label="Go to previous question">← Back</button>
        <button class="btn-next" id="btnNext" onclick="nextQuestion()" aria-label="Go to next question">Next →</button>
      </div>
    </div>
  </div>

  <!-- GATE SCREEN -->
  <div class="screen" id="screen-gate" role="region" aria-label="Results unlock form">
    <div class="gate-inner">
      <div class="gate-icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#C8971C" stroke-width="1.5" aria-hidden="true">
          <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
      </div>
      <div class="gate-eyebrow">Assessment Complete</div>
      <h2 class="gate-headline">Your results are ready.<br>Where should we send them?</h2>
      <p class="gate-sub">Enter your details below to unlock your full Business Systems Health Score — including a section-by-section breakdown and personalised recommendations.</p>
      <div class="gate-form">
        <div class="form-row">
          <div class="form-field">
            <label class="form-label" for="firstName">First Name</label>
            <input class="form-input" type="text" id="firstName" placeholder="Amara" autocomplete="given-name">
          </div>
          <div class="form-field">
            <label class="form-label" for="lastName">Last Name</label>
            <input class="form-input" type="text" id="lastName" placeholder="Osei" autocomplete="family-name">
          </div>
        </div>
        <div class="form-field">
          <label class="form-label" for="email">Work Email</label>
          <input class="form-input" type="email" id="email" placeholder="amara@company.com" autocomplete="email">
        </div>
        <div class="form-field">
          <label class="form-label" for="company">Company Name</label>
          <input class="form-input" type="text" id="company" placeholder="Your company" autocomplete="organization">
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="form-label" for="role">Role</label>
            <select class="form-select" id="role" autocomplete="organization-title">
              <option value="">Select role</option>
              <option>Founder / CEO</option>
              <option>Managing Director</option>
              <option>COO / Operations</option>
              <option>CFO / Finance</option>
              <option>Other Director</option>
              <option>Manager</option>
            </select>
          </div>
          <div class="form-field">
            <label class="form-label" for="companySize">Company Size</label>
            <select class="form-select" id="companySize">
              <option value="">Select size</option>
              <option>1–10 employees</option>
              <option>11–50 employees</option>
              <option>51–200 employees</option>
              <option>200+ employees</option>
            </select>
          </div>
        </div>
        <button class="btn-reveal" onclick="revealResults()">Reveal My Score →</button>
      </div>
      <p class="gate-privacy">We respect your privacy. No spam — ever. Unsubscribe anytime.</p>
    </div>
  </div>

  <!-- RESULTS SCREEN -->
  <div class="screen" id="screen-results" role="region" aria-label="Your results">
    <div class="results-hero">
      <div class="results-eyebrow">Your Business Systems Health Score</div>
      <div class="score-ring-wrap">
        <svg class="score-ring-svg" viewBox="0 0 180 180" aria-hidden="true">
          <circle class="score-ring-track" cx="90" cy="90" r="76"/>
          <circle class="score-ring-fill" id="scoreRingFill" cx="90" cy="90" r="76"
            stroke-dasharray="477.5" stroke-dashoffset="477.5"/>
        </svg>
        <div class="score-text-inner">
          <span class="score-num" id="scoreDisplay">0</span>
          <span class="score-denom">/ 100</span>
        </div>
      </div>
      <div class="score-tier-name" id="tierName"></div>
      <div class="score-tier-sub" id="tierSub"></div>
    </div>
    <div class="results-body">
      <div class="section-breakdown">
        <div class="breakdown-title">Score by Dimension</div>
        <div id="breakdownBars"></div>
      </div>
      <div class="diagnosis-block" id="diagnosisBlock">
        <h3 id="diagnosisTitle"></h3>
        <p id="diagnosisBody"></p>
      </div>
      <div class="breakdown-title" style="margin-bottom:16px;">Key Findings</div>
      <div class="findings-grid" id="findingsGrid"></div>
      <div class="cta-block">
        <div class="cta-eyebrow">Your Next Step</div>
        <h3 class="cta-headline" id="ctaHeadline"></h3>
        <p class="cta-sub" id="ctaSub"></p>
        <!-- FIXED: WordPress contact URL -->
        <a class="cta-btn" id="ctaBtn" href="<?php echo home_url('/contact/'); ?>">Book a Free Consultation →</a>
        <p class="cta-note">30-minute call · No commitment · With a senior Finlanza consultant</p>
        <div class="share-row">
          <button class="share-btn" onclick="shareLinkedIn()">Share on LinkedIn</button>
          <button class="share-btn" onclick="retakeAssessment()">Retake Assessment</button>
        </div>
      </div>
    </div>
  </div>

</main>

<footer role="contentinfo" aria-label="Site footer">
  <div class="container">
    <div style="text-align:center;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div class="display-md" style="font-size:clamp(22px,3vw,38px);margin-bottom:8px;"><span class="gold">Scalability</span> is not an accident.<br>It is engineered.</div>
      <div class="label" style="margin-top:12px;">Zoho Authorized Partner · Enterprise Implementation Specialists · Africa</div>
    </div>
    <div style="display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:40px;padding:40px 0 32px;border-bottom:1px solid var(--border-light);">
      <div>
        <div style="font-family:'Bebas Neue',sans-serif;font-size:22px;letter-spacing:2px;color:var(--white);margin-bottom:4px;">FINLANZA</div>
        <div class="label" style="margin-bottom:12px;">Business Systems Architecture Firm</div>
        <p style="color:var(--text-muted);font-size:13px;line-height:1.7;">We engineer scalable business systems for multi-location, multi-entity organizations across Africa — built on the DREAM™ Transformation Framework.</p>
      </div>
      <div>
        <div class="label" style="margin-bottom:14px;">Services</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <!-- FIXED: All footer links use WordPress URLs -->
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Diagnose</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Transform</a>
          <a href="<?php echo home_url('/services/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Managed</a>
          <a href="<?php echo home_url('/pricing/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Pricing</a>
        </div>
      </div>
      <div>
        <div class="label" style="margin-bottom:14px;">Company</div>
        <div style="display:flex;flex-direction:column;gap:9px;">
          <a href="<?php echo home_url('/dream/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">DREAM™ Framework</a>
          <a href="<?php echo home_url('/scorecard/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Free Scorecard</a>
          <a href="<?php echo home_url('/insights/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Insights</a>
          <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--text-muted);font-size:13px;text-decoration:none;">Contact</a>
        </div>
      </div>
      <div>
        <div class="label" style="margin-bottom:14px;">Contact</div>
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
    <div class="footer-bottom" style="padding-top:24px;">
      <!-- FIXED: Dynamic copyright year -->
      <div class="footer-copy">© <?php echo date('Y'); ?> Finlanza. All rights reserved. DREAM™ is a proprietary transformation framework.</div>
      <div class="footer-legal">
        <a href="<?php echo home_url('/privacy/'); ?>">Privacy</a>
        <a href="<?php echo home_url('/terms/'); ?>">Terms</a>
      </div>
    </div>
  </div>
</footer>

<script>
const QUESTIONS = [
  { section:"Process & Operations", text:"How would you describe the way core business processes are documented in your organisation?", options:[{text:"We have no written documentation — processes live in people's heads.",score:0},{text:"Some things are written down but it's inconsistent and often outdated.",score:1},{text:"Most processes are documented but not always followed consistently.",score:2},{text:"We have clear, current SOPs that staff actively follow.",score:3}]},
  { section:"Process & Operations", text:"When a key employee leaves, how much operational disruption does their departure typically cause?", options:[{text:"It's a crisis — we lose significant knowledge and capability with each departure.",score:0},{text:"It takes weeks of firefighting to stabilise things.",score:1},{text:"Some disruption, but we recover relatively quickly.",score:2},{text:"Minimal disruption — our systems carry the knowledge, not individuals.",score:3}]},
  { section:"Process & Operations", text:"How consistently are your operational processes actually executed across the business?", options:[{text:"Every person does things their own way — there is no standard.",score:0},{text:"There is a rough standard but significant variation in practice.",score:1},{text:"Mostly consistent, with occasional deviations that get corrected.",score:2},{text:"High consistency — deviations are rare and flagged immediately.",score:3}]},
  { section:"Finance Infrastructure", text:"How quickly can your finance team produce a clear picture of the business's financial position?", options:[{text:"It takes days or weeks — we're often not sure where we stand.",score:0},{text:"We can get there eventually but it requires significant manual work.",score:1},{text:"We can pull together a reasonable picture within a day or two.",score:2},{text:"Real-time or near-real-time visibility — dashboards are updated automatically.",score:3}]},
  { section:"Finance Infrastructure", text:"How would you describe your invoicing, collections, and accounts receivable process?", options:[{text:"Ad hoc and manual — invoices are sent inconsistently and chasing is reactive.",score:0},{text:"We have a process but it relies heavily on one person and misses frequently.",score:1},{text:"Generally works but has gaps — some invoices still slip through.",score:2},{text:"Systematic and largely automated — AR is tracked and chased consistently.",score:3}]},
  { section:"Finance Infrastructure", text:"How accurately can you forecast cashflow for the next 90 days?", options:[{text:"We cannot forecast cashflow — we find out when there's a problem.",score:0},{text:"Very rough estimates only — we're frequently surprised by cashflow gaps.",score:1},{text:"Reasonable accuracy, built on some data and some assumptions.",score:2},{text:"Strong accuracy — we build rolling forecasts based on real pipeline and cost data.",score:3}]},
  { section:"Data & Reporting", text:"When leadership wants to understand business performance, how do you get the answer?", options:[{text:"Someone has to manually compile data from multiple places — it takes time and is often incomplete.",score:0},{text:"We have some reports but they're not always accurate or current.",score:1},{text:"We have dashboards but they require some manual updating.",score:2},{text:"We have live dashboards that give leadership real-time performance visibility.",score:3}]},
  { section:"Data & Reporting", text:"How confident are you in the accuracy of the data your business decisions are based on?", options:[{text:"Not confident — data quality is a known problem but nothing has been done about it.",score:0},{text:"Somewhat confident, but we know there are gaps and errors we haven't fixed.",score:1},{text:"Reasonably confident — we've cleaned things up but know there's more to do.",score:2},{text:"Very confident — data governance is taken seriously and quality is maintained.",score:3}]},
  { section:"Data & Reporting", text:"How are KPIs tracked and communicated across your organisation?", options:[{text:"We don't have defined KPIs — performance is tracked informally if at all.",score:0},{text:"KPIs exist on paper but aren't regularly tracked or reviewed.",score:1},{text:"KPIs are tracked and shared in monthly or quarterly reviews.",score:2},{text:"KPIs are tracked in real time and reviewed formally at all levels of the business.",score:3}]},
  { section:"Technology Stack", text:"How integrated are the software systems your business uses day-to-day?", options:[{text:"No integration — different teams use different tools and data never comes together.",score:0},{text:"Minimal integration — some manual exports and imports between systems.",score:1},{text:"Partially integrated — some systems talk to each other but not all.",score:2},{text:"Fully integrated — data flows automatically between all core systems.",score:3}]},
  { section:"Technology Stack", text:"How much time does your team spend on manual, repetitive administrative tasks each week?", options:[{text:"An enormous amount — manual work is one of our biggest productivity drains.",score:0},{text:"Significant — several hours per person per week on avoidable manual tasks.",score:1},{text:"Some — we've automated parts of it but a meaningful amount remains.",score:2},{text:"Very little — most routine work is automated.",score:3}]},
  { section:"Technology Stack", text:"How would you describe your organisation's technology adoption and utilisation?", options:[{text:"We are significantly behind where we should be — tech is a competitive disadvantage.",score:0},{text:"We have technology but don't use it well — poor adoption is a recurring issue.",score:1},{text:"Decent adoption but we know we're only using a fraction of what's available to us.",score:2},{text:"Strong — we use technology as a strategic asset and continuously improve our stack.",score:3}]},
  { section:"People & Alignment", text:"How clearly do team members understand what is expected of them and how their work connects to business goals?", options:[{text:"Most people don't have a clear picture — roles and expectations are vague.",score:0},{text:"Job descriptions exist but there's often confusion about priorities and expectations.",score:1},{text:"Generally clear, though alignment breaks down during busy periods.",score:2},{text:"Very clear — every person understands their role, KPIs, and how they contribute.",score:3}]},
  { section:"People & Alignment", text:"How effectively does information flow across departments and teams in your organisation?", options:[{text:"Poorly — silos are a serious problem. Teams operate without awareness of what others are doing.",score:0},{text:"There are silos but people work around them — it creates friction.",score:1},{text:"Reasonable flow, but we miss things and important updates don't always reach the right people.",score:2},{text:"Strong cross-functional visibility — teams are aligned and communication is systematic.",score:3}]},
  { section:"People & Alignment", text:"When you implement a new process or system, how well does your organisation actually adopt it?", options:[{text:"Poorly — change rarely sticks. New initiatives are launched but old habits return.",score:0},{text:"Mixed — some people adopt, others resist. Compliance is inconsistent.",score:1},{text:"Reasonable adoption with management follow-through, though it takes time.",score:2},{text:"Strong — we have a structured approach to change and people generally follow through.",score:3}]},
  { section:"Growth Readiness", text:"If your revenue doubled in the next 12 months, how well could your current systems handle that growth?", options:[{text:"They would completely break down — we couldn't handle double the volume with current systems.",score:0},{text:"We would struggle significantly and need to rebuild almost everything under pressure.",score:1},{text:"We could manage but it would be stressful and we'd need to upgrade key areas.",score:2},{text:"We are built to scale — our systems can handle significantly more without breaking.",score:3}]},
  { section:"Growth Readiness", text:"How confident are you that your leadership team has real-time visibility of the information needed to make good decisions?", options:[{text:"Not confident — decisions are often made on gut feel or outdated information.",score:0},{text:"Partially — some good information exists but significant blind spots remain.",score:1},{text:"Mostly confident — visibility is reasonable but not complete.",score:2},{text:"Very confident — we have the information we need when we need it.",score:3}]},
  { section:"Growth Readiness", text:"Overall, to what extent do your business systems feel like an asset versus a liability?", options:[{text:"Significant liability — our systems hold us back more than they help us move forward.",score:0},{text:"More liability than asset — we spend too much time managing system failures.",score:1},{text:"Broadly neutral — they work but they're not a source of competitive advantage.",score:2},{text:"Clear asset — our systems genuinely enable performance and growth.",score:3}]},
];

const SECTIONS = ["Process & Operations","Finance Infrastructure","Data & Reporting","Technology Stack","People & Alignment","Growth Readiness"];

let currentQ = 0;
let answers  = new Array(QUESTIONS.length).fill(null);

function showScreen(id) {
  document.querySelectorAll('.screen').forEach(s => s.classList.remove('active'));
  document.getElementById(id).classList.add('active');
  window.scrollTo(0,0);
}

function startAssessment() {
  currentQ = 0;
  answers  = new Array(QUESTIONS.length).fill(null);
  document.getElementById('progressWrap').style.display = 'block';
  showScreen('screen-questions');
  renderQuestion();
}

function renderQuestion() {
  const q = QUESTIONS[currentQ];
  document.getElementById('qSectionLabel').textContent = q.section;
  document.getElementById('qNumber').textContent       = `Question ${currentQ+1} of ${QUESTIONS.length}`;
  document.getElementById('qCounter').textContent      = `${String(currentQ+1).padStart(2,'0')} / ${String(QUESTIONS.length).padStart(2,'0')}`;
  document.getElementById('qText').textContent         = q.text;

  const pct = (currentQ / QUESTIONS.length) * 100;
  const fill = document.getElementById('progressFill');
  fill.style.width = pct + '%';
  fill.setAttribute('aria-valuenow', Math.round(pct));

  const keys = ['A','B','C','D'];
  const container = document.getElementById('qOptions');
  container.innerHTML = '';
  q.options.forEach((opt, i) => {
    const div = document.createElement('div');
    div.className = 'q-option' + (answers[currentQ] === i ? ' selected' : '');
    div.setAttribute('role', 'radio');
    div.setAttribute('aria-checked', answers[currentQ] === i ? 'true' : 'false');
    div.innerHTML = `<div class="opt-key">${keys[i]}</div><div class="opt-text">${opt.text}</div><div class="opt-score-badge">${opt.score}/3</div>`;
    div.onclick = () => selectOption(i);
    container.appendChild(div);
  });

  document.getElementById('btnBack').style.visibility = currentQ === 0 ? 'hidden' : 'visible';
  const nextBtn = document.getElementById('btnNext');
  if (answers[currentQ] !== null) {
    nextBtn.classList.add('enabled');
    nextBtn.textContent = currentQ === QUESTIONS.length - 1 ? 'See My Score →' : 'Next →';
  } else {
    nextBtn.classList.remove('enabled');
    nextBtn.textContent = 'Next →';
  }
}

function selectOption(i) {
  answers[currentQ] = i;
  document.querySelectorAll('#qOptions [role="radio"]').forEach((opt, idx) => {
    opt.setAttribute('aria-checked', idx === i ? 'true' : 'false');
  });
  renderQuestion();
}

function nextQuestion() {
  if (answers[currentQ] === null) return;
  if (currentQ < QUESTIONS.length - 1) {
    currentQ++;
    renderQuestion();
  } else {
    document.getElementById('progressFill').style.width = '100%';
    showScreen('screen-gate');
  }
}

function prevQuestion() {
  if (currentQ > 0) { currentQ--; renderQuestion(); }
}

function computeScores() {
  const sectionScores = {}, sectionMax = {};
  SECTIONS.forEach(s => { sectionScores[s] = 0; sectionMax[s] = 0; });
  QUESTIONS.forEach((q, i) => {
    sectionMax[q.section] += 3;
    if (answers[i] !== null) sectionScores[q.section] += q.options[answers[i]].score;
  });
  let total = 0, maxTotal = 0;
  SECTIONS.forEach(s => { total += sectionScores[s]; maxTotal += sectionMax[s]; });
  const overall = Math.round((total / maxTotal) * 100);
  const sectionPcts = {};
  SECTIONS.forEach(s => { sectionPcts[s] = Math.round((sectionScores[s] / sectionMax[s]) * 100); });
  return { overall, sectionPcts };
}

function getTier(score) {
  if (score >= 80) return { name:"Systems Strong", sub:"Your business is operating with above-average systems maturity. There are still opportunities to optimise, but you have solid foundations in place.", ringColor:"#2ECC71", diagnosis:{title:"You are ahead of most businesses your size.",body:"Your systems are broadly functional and you have meaningful infrastructure in place. The opportunity now is to close the remaining gaps, integrate your stack more tightly, and build the kind of real-time visibility that separates good businesses from great ones."}, ctaHeadline:"You're close to world-class — let's close the gap.", ctaSub:"Even strong systems have blind spots. A free 30-minute consultation will show you exactly where your biggest remaining opportunities are.", findings:[{type:'strength',title:'Solid Foundations',desc:'Your core systems are functional and your team understands how to use them.'},{type:'moderate',title:'Integration Gaps',desc:'Even strong businesses typically have disconnected systems creating invisible inefficiency.'},{type:'moderate',title:'Optimisation Opportunity',desc:'Tightening your stack and reporting infrastructure will unlock the next level of performance.'}]};
  if (score >= 60) return { name:"Developing Infrastructure", sub:"You have systems in place but they are not working together effectively. Operational drag is increasing as your business grows.", ringColor:"#E8B84B", diagnosis:{title:"Your systems are starting to hold your growth back.",body:"You have invested in processes and technology, but they are not integrated and not consistently followed. The result is a growing gap between where your business is and where it could be — and the gap widens as you grow."}, ctaHeadline:"This is the inflection point. Let's engineer your systems for scale.", ctaSub:"Businesses at this stage that act now grow faster and more profitably. Those that wait spend the next two years firefighting.", findings:[{type:'critical',title:'Integration Risk',desc:'Disconnected systems are creating invisible costs and slowing your team down daily.'},{type:'moderate',title:'Process Inconsistency',desc:'Standards exist but are not embedded — performance depends too much on individuals.'},{type:'strength',title:'Reform-Ready',desc:'You have enough infrastructure to build on — this is an optimisation, not a rebuild from zero.'}]};
  if (score >= 40) return { name:"Operational Strain", sub:"Your business is running on informal systems and individual effort. Growth is constrained and risk is accumulating beneath the surface.", ringColor:"#C8971C", diagnosis:{title:"Your business is carrying a significant systems debt.",body:"The informal arrangements and manual workarounds that got you to this point are now active constraints on your growth. Revenue is being lost to inefficiency, key-person dependencies are creating fragility, and leadership is spending too much time managing operations rather than building the business."}, ctaHeadline:"Your systems are costing you more than a Finlanza engagement.", ctaSub:"At your current scale, operational inefficiency costs most businesses KES 4–8M per year in lost productivity and missed revenue. Let's quantify yours.", findings:[{type:'critical',title:'Key-Person Dependency',desc:'Critical knowledge and processes are locked in individuals — a major business risk.'},{type:'critical',title:'Manual Process Overhead',desc:'Significant revenue and time is being consumed by avoidable manual work.'},{type:'moderate',title:'Reporting Blind Spots',desc:'Leadership is making decisions without the data infrastructure to support them.'}]};
  return { name:"Systems at Crisis Point", sub:"Your business is operating without the foundational systems it needs. Every day without intervention increases cost and risk.", ringColor:"#E74C3C", diagnosis:{title:"Your business is being held hostage by its own systems — or lack of them.",body:"At this score, your operational infrastructure is a significant constraint on everything the business is trying to do. Processes are not documented, technology is not integrated, financial visibility is poor, and your organisation is running on heroic individual effort. The DREAM Framework was built for exactly this situation."}, ctaHeadline:"Every month of delay compounds the cost. Let's start the diagnosis.", ctaSub:"A free 30-minute consultation is the first step of DREAM Phase 1 — Diagnose. No pitch. Just a clear picture of what needs to change and in what order.", findings:[{type:'critical',title:'No Process Documentation',desc:'The business runs on individual knowledge — a fragile, unscalable foundation.'},{type:'critical',title:'Financial Visibility Gap',desc:'Leadership cannot see the business clearly — decisions are made on incomplete information.'},{type:'critical',title:'Technology Underutilisation',desc:'Available technology is not being used effectively, or the right tools are not in place.'}]};
}

function revealResults() {
  const fname = document.getElementById('firstName').value.trim();
  const email = document.getElementById('email').value.trim();
  if (!fname || !email) { alert('Please enter at least your name and email to see your results.'); return; }

  const { overall, sectionPcts } = computeScores();
  const tier = getTier(overall);

  showScreen('screen-results');
  document.getElementById('progressWrap').style.display = 'none';

  const circumference = 477.5;
  const offset = circumference - (overall / 100) * circumference;
  const ring = document.getElementById('scoreRingFill');
  ring.style.stroke = tier.ringColor;
  setTimeout(() => { ring.style.strokeDashoffset = offset; }, 200);

  let count = 0;
  const interval = setInterval(() => {
    count += Math.ceil(overall / 60);
    if (count >= overall) { count = overall; clearInterval(interval); }
    document.getElementById('scoreDisplay').textContent = count;
  }, 20);

  document.getElementById('tierName').textContent = tier.name;
  document.getElementById('tierSub').textContent  = tier.sub;

  const barsEl = document.getElementById('breakdownBars');
  barsEl.innerHTML = '';
  SECTIONS.forEach(s => {
    const pct = sectionPcts[s];
    const div = document.createElement('div');
    div.className = 'breakdown-item';
    div.innerHTML = `<div class="breakdown-label">${s}</div><div class="breakdown-bar-track"><div class="breakdown-bar-fill" style="width:0%" data-pct="${pct}"></div></div><div class="breakdown-pct">${pct}%</div>`;
    barsEl.appendChild(div);
  });
  setTimeout(() => {
    document.querySelectorAll('.breakdown-bar-fill').forEach(b => { b.style.width = b.dataset.pct + '%'; });
  }, 300);

  document.getElementById('diagnosisTitle').textContent = tier.diagnosis.title;
  document.getElementById('diagnosisBody').textContent  = tier.diagnosis.body;

  const grid = document.getElementById('findingsGrid');
  grid.innerHTML = '';
  tier.findings.forEach(f => {
    const card = document.createElement('div');
    card.className = `finding-card ${f.type}`;
    const badgeMap = { critical:'Critical Issue', moderate:'Area to Address', strength:'Strength' };
    card.innerHTML = `<div class="finding-badge">${badgeMap[f.type]}</div><div class="finding-title">${f.title}</div><div class="finding-desc">${f.desc}</div>`;
    grid.appendChild(card);
  });

  document.getElementById('ctaHeadline').textContent = tier.ctaHeadline;
  document.getElementById('ctaSub').textContent      = tier.ctaSub;
}

function retakeAssessment() {
  currentQ = 0;
  answers  = new Array(QUESTIONS.length).fill(null);
  document.getElementById('progressWrap').style.display = 'block';
  showScreen('screen-questions');
  renderQuestion();
}

function shareLinkedIn() {
  const { overall } = computeScores();
  const tier = getTier(overall);
  const text = encodeURIComponent(`I just completed the Finlanza Business Systems Health Check and scored ${overall}/100 — ${tier.name}. Find out how your business systems stack up: <?php echo home_url('/scorecard/'); ?>`);
  window.open(`https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(home_url('/scorecard/')); ?>&summary=${text}`, '_blank');
}

document.addEventListener('keydown', e => {
  const active = document.querySelector('.screen.active');
  if (!active || active.id !== 'screen-questions') return;
  const keys = {'a':0,'b':1,'c':2,'d':3,'1':0,'2':1,'3':2,'4':3};
  const key = e.key.toLowerCase();
  if (keys[key] !== undefined) selectOption(keys[key]);
  if (e.key === 'Enter' || e.key === 'ArrowRight') nextQuestion();
  if (e.key === 'ArrowLeft') prevQuestion();
});
</script>

<?php wp_footer(); ?>
</body>
</html>
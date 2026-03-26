<?php /* Template Name: Finlanza Terms of Service */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Terms of Service — Finlanza Limited | <?php bloginfo('name'); ?></title>
<meta name="description" content="Terms of Service for Finlanza Limited. These terms govern use of finlanza.com and all service engagements. Governed by the laws of Kenya.">
<meta name="robots" content="noindex, follow">
<link rel="canonical" href="<?php echo home_url('/terms/'); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
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
    font-size: 16px;
    line-height: 1.7;
    overflow-x: hidden;
  }

  body::before {
    content: '';
    position: fixed; inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
    opacity: 0.025;
    pointer-events: none;
    z-index: 0;
  }

  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    padding: 0 60px; height: 72px;
    display: flex; align-items: center; justify-content: space-between;
    background: rgba(13,27,42,0.92);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
  }
  .nav-logo { display: flex; align-items: center; text-decoration: none; }
  .nav-logo img { height: 36px; width: auto; display: block; }
  .nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
  .nav-links a {
    text-decoration: none; font-size: 13px; font-weight: 400;
    letter-spacing: 1.5px; text-transform: uppercase;
    color: var(--text-muted); transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--gold); }
  .nav-cta { background: var(--gold) !important; color: var(--navy) !important; padding: 10px 24px !important; font-weight: 500 !important; }
  .nav-hamburger { display: none; background: none; border: none; color: var(--white); font-size: 22px; cursor: pointer; }

  .container { max-width: 800px; margin: 0 auto; padding: 0 40px; position: relative; z-index: 1; }

  .page-header {
    padding: 140px 0 60px;
    border-bottom: 1px solid var(--border-light);
    margin-bottom: 64px;
  }
  .page-eyebrow {
    font-family: 'Space Mono', monospace;
    font-size: 10px; letter-spacing: 4px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 20px;
    display: flex; align-items: center; gap: 14px;
  }
  .page-eyebrow::before { content: ''; width: 32px; height: 1px; background: var(--gold); opacity: 0.5; }
  .page-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(48px, 6vw, 80px);
    letter-spacing: 2px; line-height: 0.95;
    color: var(--white); margin-bottom: 20px;
  }
  .page-meta {
    font-size: 13px; color: var(--text-muted);
    font-family: 'Space Mono', monospace; letter-spacing: 1px;
  }

  .doc-body { padding-bottom: 100px; }
  .doc-section { margin-bottom: 52px; }
  .doc-section-num {
    font-family: 'Space Mono', monospace;
    font-size: 10px; letter-spacing: 3px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 10px; display: block;
  }

  h2 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 26px; letter-spacing: 2px;
    color: var(--white); margin-bottom: 16px;
    padding-bottom: 12px; border-bottom: 1px solid var(--border-light);
  }
  h3 {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px; font-weight: 600; letter-spacing: 0.5px;
    color: var(--white); margin: 24px 0 10px;
  }

  p { color: var(--text-muted); margin-bottom: 14px; font-size: 15px; line-height: 1.8; }
  p:last-child { margin-bottom: 0; }

  ul, ol { color: var(--text-muted); font-size: 15px; line-height: 1.8; padding-left: 20px; margin-bottom: 14px; }
  li { margin-bottom: 6px; }
  li::marker { color: var(--gold); }

  .highlight-box {
    background: var(--navy-mid);
    border-left: 3px solid var(--gold);
    padding: 20px 24px; margin: 24px 0;
    font-size: 14px; color: var(--text-muted); line-height: 1.75;
  }
  .highlight-box strong { color: var(--white); }

  .warning-box {
    background: rgba(200,151,28,0.06);
    border: 1px solid rgba(200,151,28,0.2);
    padding: 20px 24px; margin: 24px 0;
    font-size: 14px; color: var(--text-muted); line-height: 1.75;
  }
  .warning-box strong { color: var(--gold); }

  a { color: var(--gold); text-decoration: none; }
  a:hover { text-decoration: underline; }
  strong { color: var(--text); font-weight: 500; }

  footer { border-top: 1px solid var(--border-light); position: relative; z-index: 1; }
  .footer-bottom {
    display: flex; justify-content: space-between; align-items: center;
    padding: 20px 40px; font-size: 12px; color: var(--text-muted);
    max-width: 800px; margin: 0 auto; flex-wrap: wrap; gap: 12px;
  }
  .footer-legal { display: flex; gap: 20px; }
  .footer-legal a { color: var(--text-muted); text-decoration: none; font-size: 12px; }
  .footer-legal a:hover { color: var(--gold); }

  :focus-visible { outline: 2px solid var(--gold); outline-offset: 2px; }

  @media (prefers-reduced-motion: reduce) { *, *::before, *::after { transition: none !important; animation: none !important; } }

  @media (max-width: 768px) {
    nav { padding: 0 24px; }
    .container { padding: 0 24px; }
    .page-header { padding: 110px 0 48px; }
    .nav-links { display: none; }
    .nav-hamburger { display: block; }
    .nav-links.mob-open {
      display: flex; flex-direction: column;
      position: fixed; top: 72px; left: 0; right: 0;
      background: var(--navy); padding: 24px; gap: 20px;
      border-bottom: 1px solid var(--border);
    }
    .footer-bottom { padding: 20px 24px; }
  }
</style>
<?php wp_head(); ?>
</head>
<body>

<nav id="main-nav" role="navigation" aria-label="Main navigation">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <img src="data:image/png;base64,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" alt="Finlanza" style="height:36px;width:auto;display:block;">
  </a>
  <ul class="nav-links" id="navLinks">
    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
    <li><a href="<?php echo home_url('/services/'); ?>">Services</a></li>
    <li><a href="<?php echo home_url('/products/'); ?>">Products</a></li>
    <li><a href="<?php echo home_url('/dream/'); ?>">DREAM™</a></li>
    <li><a href="<?php echo home_url('/insights/'); ?>">Insights</a></li>
    <li><a href="<?php echo home_url('/scorecard/'); ?>">Free Scorecard</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>" class="nav-cta">Book a Review</a></li>
  </ul>
  <button class="nav-hamburger" onclick="document.getElementById('navLinks').classList.toggle('mob-open'); this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');" aria-label="Menu" aria-expanded="false">☰</button>
</nav>

<main>
<div class="container">

  <div class="page-header">
    <div class="page-eyebrow">Legal · finlanza.com</div>
    <h1 class="page-title">TERMS OF<br>SERVICE.</h1>
    <div class="page-meta">Effective date: 1 January 2026 &nbsp;·&nbsp; Last updated: March 2026</div>
  </div>

  <div class="doc-body">

    <div class="highlight-box">
      <strong>Plain summary:</strong> These terms govern your use of finlanza.com and any engagement with Finlanza Limited's services. By using our site or working with us, you agree to these terms. Formal service engagements are additionally governed by a signed Statement of Work or Service Agreement between Finlanza and the client.
    </div>

    <div class="doc-section">
      <span class="doc-section-num">01</span>
      <h2>PARTIES AND AGREEMENT</h2>
      <p>These Terms of Service ("Terms") govern the relationship between <strong>Finlanza Limited</strong>, a company registered in Kenya ("Finlanza", "we", "us"), and any person or organisation ("you", "Client") that accesses our website at finlanza.com or engages our services.</p>
      <p>By using our website or engaging our services, you confirm that you have read, understood, and agree to these Terms. If you are acting on behalf of a company or organisation, you confirm that you have authority to bind that entity.</p>
      <p>These Terms are governed by the laws of Kenya. Any disputes shall be subject to the jurisdiction of the Kenyan courts.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">02</span>
      <h2>SERVICES</h2>
      <p>Finlanza provides business systems architecture services including:</p>
      <ul>
        <li>Zoho platform implementation, configuration, and integration</li>
        <li>Business process mapping and systems audit (Diagnose)</li>
        <li>Technology strategy and implementation planning (Roadmap)</li>
        <li>Custom application development on Zoho Creator</li>
        <li>Workflow automation and system integration</li>
        <li>Ongoing managed services, support, and optimisation</li>
        <li>Vertical product deployment (GarageERP, PoultryOS, and future F2 Transform products)</li>
      </ul>

      <h3>Scope of individual engagements</h3>
      <p>The specific scope, deliverables, timeline, and fees for each engagement are defined in a <strong>Statement of Work (SOW)</strong> or <strong>Service Agreement</strong> signed by both parties. In the event of conflict between these Terms and a signed SOW, the SOW prevails for that engagement.</p>

      <h3>Website use</h3>
      <p>Use of finlanza.com is subject to these Terms. The website is provided for informational purposes. Nothing on the website constitutes a binding offer or guarantee of services.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">03</span>
      <h2>FEES AND PAYMENT</h2>

      <h3>Pricing</h3>
      <p>Fees are scoped and agreed per engagement. Published indicative ranges (where shown) are starting points only and do not constitute binding quotes. A formal proposal and SOW will confirm exact fees before any engagement commences.</p>

      <h3>Payment terms</h3>
      <ul>
        <li>Implementation engagements are billed on a <strong>milestone basis</strong> as defined in the SOW</li>
        <li>Invoices are due within <strong>30 days</strong> of the invoice date unless otherwise agreed in writing</li>
        <li>Managed services retainers are billed monthly, in advance</li>
        <li>Overdue balances accrue interest at <strong>2% per month</strong> from the due date until payment is received in full</li>
      </ul>

      <h3>Currency</h3>
      <p>Fees for Kenya-based clients are invoiced in <strong>Kenya Shillings (KES)</strong> unless otherwise agreed. Fees for clients in other jurisdictions may be invoiced in KES or USD as agreed in the SOW.</p>

      <h3>Taxes</h3>
      <p>All fees are exclusive of applicable taxes. Where VAT or withholding tax applies under Kenyan law, this will be stated on the invoice. Clients are responsible for any withholding tax obligations in their own jurisdiction.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">04</span>
      <h2>CLIENT OBLIGATIONS</h2>
      <p>To enable Finlanza to deliver services effectively, the Client agrees to:</p>
      <ul>
        <li>Provide timely access to relevant personnel, systems, and documentation as reasonably requested</li>
        <li>Designate a named point of contact with authority to make decisions on behalf of the organisation</li>
        <li>Review and approve deliverables within agreed timelines — delays caused by the Client may affect delivery schedules</li>
        <li>Ensure that any data provided to Finlanza for migration or integration purposes has been lawfully collected and that Finlanza is authorised to process it</li>
        <li>Maintain valid Zoho licences as required for the systems being implemented</li>
        <li>Not share Finlanza-produced work product, documentation, or system configurations with third parties without prior written consent</li>
      </ul>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">05</span>
      <h2>INTELLECTUAL PROPERTY</h2>

      <h3>Finlanza IP</h3>
      <p>All methodologies, frameworks (including the DREAM™ Framework), templates, toolkits, and proprietary processes developed by Finlanza remain the intellectual property of Finlanza Limited. Delivery of a project does not transfer ownership of Finlanza's underlying IP.</p>

      <h3>Client deliverables</h3>
      <p>Upon full payment of all fees, the Client owns the specific configured systems, custom applications, and documentation produced for that engagement, excluding Finlanza's underlying frameworks and reusable components.</p>

      <h3>Zoho platform</h3>
      <p>Systems built on Zoho Creator and the Zoho One platform are subject to Zoho Corporation's own terms and licence agreements. Finlanza's implementation work is separate from the underlying Zoho platform licence, which the Client must maintain independently.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">06</span>
      <h2>CONFIDENTIALITY</h2>
      <p>Both parties agree to treat as confidential any non-public business information received from the other party in connection with an engagement ("Confidential Information"). This includes business data, financial information, system configurations, personnel information, and strategic plans.</p>
      <p>Confidentiality obligations do not apply to information that:</p>
      <ul>
        <li>Is or becomes publicly available through no fault of the receiving party</li>
        <li>Was already known to the receiving party prior to disclosure</li>
        <li>Is required to be disclosed by law or court order</li>
        <li>Is independently developed without use of Confidential Information</li>
      </ul>
      <p>Confidentiality obligations survive the end of any engagement for a period of <strong>3 years</strong>.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">07</span>
      <h2>WARRANTIES AND DISCLAIMERS</h2>

      <h3>Finlanza warranties</h3>
      <p>Finlanza warrants that services will be performed with reasonable care and skill by qualified personnel, and that deliverables will materially conform to the agreed specifications in the SOW.</p>

      <h3>Disclaimers</h3>
      <p>Finlanza does not warrant that:</p>
      <ul>
        <li>Systems will be error-free or uninterrupted after go-live</li>
        <li>Business outcomes (revenue growth, cost savings, productivity gains) will be achieved — these depend on the Client's own operations and adoption</li>
        <li>Third-party platforms (including Zoho) will remain available or unchanged — Finlanza is not responsible for Zoho platform outages, pricing changes, or feature deprecations</li>
      </ul>

      <div class="warning-box">
        <strong>Statutory rates notice:</strong> Where Finlanza implements payroll, tax, or statutory systems, these are configured based on rates current at the time of implementation. Finlanza is not responsible for statutory rate changes (PAYE bands, NSSF rates, SHIF, AHL) that occur after go-live. The Client is responsible for updating rate settings or engaging Finlanza for update support.
      </div>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">08</span>
      <h2>LIMITATION OF LIABILITY</h2>
      <p>To the maximum extent permitted by Kenyan law:</p>
      <ul>
        <li>Finlanza's total liability to the Client for any claim arising from a specific engagement shall not exceed the <strong>total fees paid by the Client for that engagement</strong> in the 12 months preceding the claim</li>
        <li>Finlanza shall not be liable for indirect, consequential, incidental, or special damages, including loss of profit, loss of data, or business interruption</li>
        <li>Nothing in these Terms limits liability for death, personal injury caused by negligence, or fraud</li>
      </ul>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">09</span>
      <h2>TERMINATION</h2>

      <h3>By either party</h3>
      <p>Either party may terminate an engagement by giving <strong>30 days' written notice</strong>, unless the SOW specifies a different notice period.</p>

      <h3>For cause</h3>
      <p>Either party may terminate immediately if the other party:</p>
      <ul>
        <li>Materially breaches these Terms or the SOW and fails to remedy the breach within 14 days of written notice</li>
        <li>Becomes insolvent, enters administration, or ceases trading</li>
      </ul>

      <h3>Effect of termination</h3>
      <p>On termination, the Client shall pay all fees due for work completed up to the termination date. Finlanza shall deliver all completed deliverables and reasonably assist with transition. Clauses covering confidentiality, IP, and liability survive termination.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">10</span>
      <h2>DISPUTE RESOLUTION</h2>
      <p>If a dispute arises in connection with these Terms or any engagement, both parties agree to first attempt resolution through good-faith negotiation within 30 days of written notice of the dispute.</p>
      <p>If the dispute is not resolved through negotiation, either party may refer it to mediation under the Nairobi Centre for International Arbitration (NCIA) Mediation Rules, before commencing litigation.</p>
      <p>These Terms are governed by the laws of Kenya. The courts of Kenya shall have exclusive jurisdiction over any disputes not resolved by the above process.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">11</span>
      <h2>WEBSITE USE</h2>
      <p>You may use finlanza.com for lawful purposes only. You must not:</p>
      <ul>
        <li>Attempt to gain unauthorised access to any part of the website or its underlying systems</li>
        <li>Use the website to transmit malicious code, spam, or unsolicited commercial communications</li>
        <li>Reproduce, redistribute, or commercially exploit website content without written permission</li>
        <li>Use automated tools to scrape or extract data from the website</li>
      </ul>
      <p>We reserve the right to restrict access to the website at our discretion and without notice.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">12</span>
      <h2>CHANGES TO THESE TERMS</h2>
      <p>We may update these Terms from time to time. The effective date at the top of this page will reflect the most recent revision. For active engagements, material changes to the commercial terms will be communicated directly and require mutual agreement before taking effect.</p>
      <p>Continued use of our website after an update constitutes acceptance of the revised Terms for website use purposes.</p>
    </div>

    <div class="doc-section">
      <span class="doc-section-num">13</span>
      <h2>CONTACT</h2>
      <p>For any questions regarding these Terms, contact:</p>
      <div class="highlight-box">
        <strong>Finlanza Limited</strong><br>
        Business Systems Architecture Firm<br>
        Nairobi, Kenya<br><br>
        Email: <a href="mailto:legal@finlanza.com">legal@finlanza.com</a><br>
        Phone: +254 724 463 536<br>
        Website: <a href="https://finlanza.com">finlanza.com</a>
      </div>
    </div>

  </div>
</div>
</main>

<footer role="contentinfo">
  <div class="footer-bottom">
    <div>© <?php echo date('Y'); ?> Finlanza Limited. All rights reserved.</div>
    <div class="footer-legal">
      <a href="<?php echo home_url('/privacy/'); ?>">Privacy Policy</a>
      <a href="<?php echo home_url('/terms/'); ?>">Terms of Service</a>
      <a href="<?php echo home_url('/contact/'); ?>">Contact</a>
    </div>
  </div>
</footer>

<script>
  window.addEventListener('scroll', () => {
    document.getElementById('main-nav').style.borderBottomColor =
      window.scrollY > 40 ? 'rgba(200,151,28,0.2)' : 'rgba(200,151,28,0.1)';
  });
</script>

<?php wp_footer(); ?>
</body>
</html>

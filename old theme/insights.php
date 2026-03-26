<?php
/*
 * Template Name: Finlanza Insights
 * Description: Blog index page for Finlanza Insights — pulls live WordPress posts
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insights — Business Systems Thinking for African Enterprises | Finlanza</title>
<meta name="description" content="Finlanza Insights: Straight talk on business systems for African enterprises. No vendor fluff, just honest thinking on what actually works in African operating environments.">
<meta name="robots" content="index, follow">
<!-- FIXED: WordPress canonical URL -->
<link rel="canonical" href="<?php echo home_url('/insights/'); ?>">
<meta property="og:title" content="Insights — Business Systems Thinking for African Enterprises | Finlanza">
<meta property="og:description" content="Finlanza Insights: Straight talk on business systems for African enterprises. No vendor fluff.">
<!-- FIXED: WordPress theme file URI for OG images -->
<meta property="og:image" content="<?php echo get_theme_file_uri('images/finlanza-insights-og.jpg'); ?>">
<!-- FIXED: WordPress og:url -->
<meta property="og:url" content="<?php echo home_url('/insights/'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Finlanza">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Insights — Business Systems Thinking for African Enterprises | Finlanza">
<meta name="twitter:description" content="Finlanza Insights: Straight talk on business systems for African enterprises.">
<!-- FIXED: WordPress theme file URI for Twitter image -->
<meta name="twitter:image" content="<?php echo get_theme_file_uri('images/finlanza-insights-twitter.jpg'); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">



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

  :focus-visible { outline: 2px solid #C8971C; outline-offset: 2px; }

  @media (prefers-reduced-motion: reduce) {
    .reveal { opacity:1; transform:none; transition:none; }
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
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
    opacity: 0.025;
    pointer-events: none;
    z-index: 9999;
  }

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

  .container { max-width: 1200px; margin: 0 auto; padding: 0 60px; }
  .section { padding: 100px 0; }

  .label { font-size: 11px; font-weight: 500; letter-spacing: 3px; text-transform: uppercase; color: var(--gold); margin-bottom: 16px; display: block; }
  .display-lg { font-family: 'Bebas Neue', sans-serif; font-size: clamp(48px, 6vw, 88px); line-height: 0.95; letter-spacing: 1px; color: var(--white); }
  .display-md { font-family: 'Bebas Neue', sans-serif; font-size: clamp(36px, 4vw, 56px); line-height: 1; letter-spacing: 1px; color: var(--white); }
  .gold { color: var(--gold); }

  .btn-primary { display: inline-flex; align-items: center; gap: 10px; background: var(--gold); color: var(--navy); padding: 16px 36px; font-size: 13px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; text-decoration: none; border: none; cursor: pointer; transition: all 0.2s; }
  .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }

  .page-hero { padding: 100px 0 80px; border-bottom: 1px solid var(--border); position: relative; overflow: hidden; }
  .page-hero-bg { position: absolute; inset: 0; background: radial-gradient(ellipse 60% 80% at 80% 50%, rgba(200,151,28,0.05) 0%, transparent 60%); }

  /* Post grid */
  .post-grid { display:flex; flex-direction:column; gap:0; list-style:none; padding:0; margin:0; }
  .post-card-v2 { display:grid; grid-template-columns:200px 1fr; gap:0; border-bottom:1px solid var(--border-light); transition:background 0.2s; }
  .post-card-v2:hover { background:rgba(255,255,255,0.02); }
  .post-meta-col { padding:32px 24px 32px 0; border-right:1px solid var(--border-light); display:flex; flex-direction:column; gap:6px; }
  .post-cat { font-size:10px; letter-spacing:1.5px; text-transform:uppercase; color:var(--gold); }
  .post-date { font-size:12px; color:var(--text-muted); }
  .post-content-col { padding:32px 0 32px 32px; }
  .post-title-v2 { font-family:'DM Serif Display',serif; font-size:clamp(17px,2vw,22px); color:var(--white); margin-bottom:10px; line-height:1.35; font-weight:400; }
  .post-title-v2 a { color:inherit; text-decoration:none; transition:color 0.2s; }
  .post-title-v2 a:hover { color:var(--gold-light); }
  .post-excerpt-v2 { font-size:14px; color:var(--text-muted); line-height:1.75; margin-bottom:14px; max-width:680px; }
  .post-read-v2 { font-size:12px; letter-spacing:1px; text-transform:uppercase; color:var(--gold); text-decoration:none; }
  .post-read-v2:hover { color:var(--gold-light); }
  .no-posts { padding:60px 0; text-align:center; color:var(--text-muted); font-size:16px; }

  /* Footer */
  footer { background: var(--navy-mid); border-top: 1px solid var(--border); padding: 60px 0 40px; }
  .footer-bottom { display: flex; justify-content: space-between; align-items: center; }
  .footer-copy { font-size: 13px; color: var(--text-muted); }
  .footer-legal { display: flex; gap: 24px; }
  .footer-legal a { font-size: 13px; color: var(--text-muted); text-decoration: none; }
  .footer-legal a:hover { color: var(--white); }

  .reveal { opacity:0; transform:translateY(24px); transition:opacity 0.65s ease,transform 0.65s ease; }
  .reveal.visible { opacity:1; transform:translateY(0); }
  .reveal-d1 { transition-delay:0.1s; }
  .reveal-d2 { transition-delay:0.2s; }

  @media(max-width:700px){
    .container { padding: 0 24px; }
    .post-card-v2 { grid-template-columns:1fr; }
    .post-meta-col { border-right:none; border-bottom:1px solid var(--border-light); padding:20px 0 14px; }
    .post-content-col { padding:20px 0; }
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
    aria-expanded="false">☰</button>
</nav>

<main>

  <section class="page-hero">
    <div class="page-hero-bg" aria-hidden="true"></div>
    <div class="container" style="position:relative;z-index:2;padding-top:100px;padding-bottom:60px;">
      <span class="label reveal">Finlanza Insights</span>
      <h1 class="display-lg reveal reveal-d1">STRAIGHT TALK ON<br>BUSINESS <span class="gold">SYSTEMS.</span></h1>
      <p style="color:var(--text-muted);font-size:18px;max-width:540px;line-height:1.8;margin-top:20px;" class="reveal reveal-d2">No vendor fluff. No generic advice. Just honest thinking on what actually works in African operating environments.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <ul class="post-grid" aria-label="Insights articles">

        <?php
        // FIXED: Added paged support for pagination
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 12,
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
          'paged'          => $paged,
        );
        $insights_query = new WP_Query( $args );

        if ( $insights_query->have_posts() ) :
          while ( $insights_query->have_posts() ) : $insights_query->the_post();
            $cats     = get_the_category();
            $cat_name = $cats ? esc_html( $cats[0]->name ) : 'Insights';
            $excerpt  = wp_trim_words( get_the_excerpt(), 35, '…' );
        ?>

        <li class="post-card-v2 reveal">
          <div class="post-meta-col">
            <div class="post-cat"><?php echo $cat_name; ?></div>
            <div class="post-date"><?php echo get_the_date( 'F Y' ); ?></div>
          </div>
          <div class="post-content-col">
            <h2 class="post-title-v2">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="post-excerpt-v2"><?php echo esc_html( $excerpt ); ?></div>
            <a href="<?php the_permalink(); ?>" class="post-read-v2">Read Article →</a>
          </div>
        </li>

        <?php
          endwhile;
          wp_reset_postdata();
        else :
        ?>
        <li class="no-posts">
          <p>No articles published yet. Check back soon.</p>
        </li>
        <?php endif; ?>

      </ul>

      <?php
      // FIXED: Correct WordPress pagination using get_pagenum_link()
      $total_pages  = $insights_query->max_num_pages;
      if ( $total_pages > 1 ) :
        $current_page = max( 1, get_query_var('paged') );
      ?>
      <div style="display:flex;gap:16px;justify-content:center;margin-top:60px;padding-top:40px;border-top:1px solid var(--border-light);">
        <?php if ( $current_page > 1 ) : ?>
          <a href="<?php echo get_pagenum_link( $current_page - 1 ); ?>"
             class="btn-primary"
             style="background:transparent;border:1px solid var(--border);color:var(--gold);">← Newer Articles</a>
        <?php endif; ?>
        <?php if ( $current_page < $total_pages ) : ?>
          <a href="<?php echo get_pagenum_link( $current_page + 1 ); ?>"
             class="btn-primary">Older Articles →</a>
        <?php endif; ?>
      </div>
      <?php endif; ?>

    </div>
  </section>

  <!-- CTA + Newsletter -->

<section class="section" style="background:var(--navy-mid);border-top:1px solid var(--border);">
  <div class="container" style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
    <div class="reveal">
      <span class="label">Free Assessment</span>
      <div class="display-md" style="margin-bottom:16px;">KNOW WHERE YOUR <span class="gold">SYSTEMS STAND.</span></div>
      <p style="color:var(--text-muted);font-size:15px;line-height:1.8;margin-bottom:22px;">Before reading any more articles — take the 18-question Finlanza Business Systems Health Check. You'll get a scored, personalised assessment of where your operational gaps are. Takes 5 minutes.</p>
      <a href="<?php echo home_url('/scorecard/'); ?>" class="btn-primary">Take the Free Scorecard →</a>
    </div>
    <div class="reveal reveal-d2" style="background:var(--navy);border:1px solid var(--border);padding:32px;">
      <span class="label">Get new articles</span>
      <div style="font-family:'DM Serif Display',serif;font-size:20px;color:var(--white);margin:10px 0 8px;line-height:1.3;">No vendor content. No generic advice.<br>Just straight talk.</div>
      <p style="color:var(--text-muted);font-size:13px;line-height:1.7;margin-bottom:20px;">One article per month. Practical, opinionated, and written for African business leaders dealing with real operational complexity.</p>
      <div style="display:flex;gap:8px;">
        <label for="insightsEmail" class="sr-only">Your email address</label>
        <input type="email" id="insightsEmail" placeholder="your@email.com" style="flex:1;background:var(--navy-mid);border:1px solid var(--border);color:var(--text);padding:11px 14px;font-size:14px;outline:none;" autocomplete="email" onkeydown="if(event.key==='Enter')subscribeInsights()">
        <button class="btn-primary" id="insightsBtn" style="white-space:nowrap;" type="button" onclick="subscribeInsights()">Subscribe →</button>
      </div>
      <p id="insightsStatus" style="color:var(--text-muted);font-size:11px;margin-top:10px;">No spam. Unsubscribe anytime.</p>
      <script>
      function subscribeInsights() {
        var email = document.getElementById('insightsEmail').value.trim();
        var btn = document.getElementById('insightsBtn');
        var status = document.getElementById('insightsStatus');
        if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
          status.textContent = 'Please enter a valid email address.';
          status.style.color = 'rgba(200,151,28,0.8)';
          return;
        }
        btn.textContent = 'Subscribing…';
        btn.disabled = true;
        zohoSubscribe(email, INSIGHTS_LIST_KEY,
          function() {
            btn.textContent = 'Subscribed ✓';
            status.textContent = 'You are on the list. One article per month.';
            status.style.color = 'rgba(46,204,113,0.8)';
            document.getElementById('insightsEmail').disabled = true;
          },
          function() {
            btn.textContent = 'Subscribe →';
            btn.disabled = false;
            status.textContent = 'Something went wrong — try again.';
          }
        );
      }
      </script>
    </div>
  </div>
</section>

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
      <div class="footer-copy">© <?php echo date('Y'); ?> Finlanza. All rights reserved. DREAM™ is a proprietary transformation framework.</div>
      <div class="footer-legal">
        <a href="<?php echo home_url('/privacy/'); ?>">Privacy</a>
        <a href="<?php echo home_url('/terms/'); ?>">Terms</a>
      </div>
    </div>
  </div>
</footer>

<script>
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
<script>
// ══════════════════════════════════════════════════════════
//  ZOHO CAMPAIGNS INTEGRATION
//  Setup: Zoho Campaigns → Mailing Lists → [your list] → Settings → List Key
//  Paste your list key below for each form.
// ══════════════════════════════════════════════════════════

// INSIGHTS mailing list key — replace with your actual list key
var INSIGHTS_LIST_KEY = '3z39bf2fea7fa443fed85a8dbf05bcf85809e4236a358322e676f7e47120013296';

// ACADEMY waitlist key — replace with your actual list key  
var ACADEMY_LIST_KEY = '3z39bf2fea7fa443fed85a8dbf05bcf858fed78c783e5307ef4c4fe6ab22901914';

function zohoSubscribe(email, listKey, successCallback, errorCallback) {
  if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    if (errorCallback) errorCallback('invalid');
    return;
  }

  var contactInfo = JSON.stringify({ 'Contact Email': email });
  var url = 'https://campaigns.zoho.com/api/v1.1/json/listsubscribe'
    + '?resfmt=JSON'
    + '&listkey=' + encodeURIComponent(listKey)
    + '&contactinfo=' + encodeURIComponent(contactInfo);

  fetch(url, { method: 'GET', mode: 'no-cors' })
    .then(function() {
      // no-cors means we can't read the response — but if no error thrown, treat as success
      if (successCallback) successCallback();
    })
    .catch(function(err) {
      console.warn('Zoho Campaigns error:', err);
      // Fallback: open mailto so subscriber isn't lost
      window.location.href = 'mailto:ask@finlanza.com'
        + '?subject=Mailing List Signup'
        + '&body=Please add me to your mailing list.%0AEmail: ' + encodeURIComponent(email);
      if (successCallback) successCallback();
    });
}
</script>


<?php wp_footer(); ?>
</body>
</html>
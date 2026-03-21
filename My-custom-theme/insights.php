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
<link rel="canonical" href="https://finlanza.com/insights/">
<meta property="og:title" content="Insights — Business Systems Thinking for African Enterprises | Finlanza">
<meta property="og:description" content="Finlanza Insights: Straight talk on business systems for African enterprises. No vendor fluff, just honest thinking on what actually works in African operating environments.">
<meta property="og:image" content="https://finlanza.com/images/finlanza-insights-og.jpg">
<meta property="og:url" content="https://finlanza.com/insights/">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Insights — Business Systems Thinking for African Enterprises | Finlanza">
<meta name="twitter:description" content="Finlanza Insights: Straight talk on business systems for African enterprises.">
<meta name="twitter:image" content="https://finlanza.com/images/finlanza-insights-twitter.jpg">
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
    --gold-pale: #FBF0D4;
    --cream: #F5EFE0;
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

  /* Nav */
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
  .nav-hamburger { display:none; background:none; border:1px solid var(--border); color:var(--text); padding:6px 12px; cursor:pointer; font-size:17px; }

  @media(max-width:900px){
    nav { padding: 0 24px; }
    .nav-links { display:none; flex-direction:column; position:absolute; top:72px; left:0; right:0; background:rgba(13,27,42,0.98); border-bottom:1px solid var(--border); padding:20px 24px; gap:16px; }
    .nav-links.mob-open { display:flex; }
    .nav-hamburger { display:block; }
  }

  /* Layout */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 60px; }
  .section { padding: 100px 0; }

  .label {
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 16px;
    display: block;
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

  /* Buttons */
  .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--gold);
    color: var(--navy);
    padding: 16px 36px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all 0.2s;
  }
  .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }

  /* Page hero */
  .page-hero {
    padding: 100px 0 80px;
    border-bottom: 1px solid var(--border);
    position: relative;
    overflow: hidden;
  }
  .page-hero-bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 80% at 80% 50%, rgba(200,151,28,0.05) 0%, transparent 60%);
  }

  /* Post grid */
  .post-grid { display:flex; flex-direction:column; gap:0; list-style:none; padding:0; margin:0; }
  .post-card-v2 { display:grid; grid-template-columns:200px 1fr; gap:0; border-bottom:1px solid var(--border-light); transition:background 0.2s; }
  .post-card-v2:hover { background:rgba(255,255,255,0.02); }
  .post-meta-col { padding:32px 24px 32px 0; border-right:1px solid var(--border-light); display:flex; flex-direction:column; gap:6px; }
  .post-cat { font-size:10px; letter-spacing:1.5px; text-transform:uppercase; color:var(--gold); }
  .post-date { font-size:12px; color:var(--text-muted); }
  .post-content-col { padding:32px 0 32px 32px; }
  .post-title-v2 {
    font-family:'DM Serif Display',serif;
    font-size:clamp(17px,2vw,22px);
    color:var(--white);
    margin-bottom:10px;
    line-height:1.35;
    font-weight: 400;
  }
  .post-title-v2 a { color: inherit; text-decoration: none; transition: color 0.2s; }
  .post-title-v2 a:hover { color: var(--gold-light); }
  .post-excerpt-v2 { font-size:14px; color:var(--text-muted); line-height:1.75; margin-bottom:14px; max-width:680px; }
  .post-read-v2 { font-size:12px; letter-spacing:1px; text-transform:uppercase; color:var(--gold); text-decoration:none; }
  .post-read-v2:hover { color: var(--gold-light); }

  @media(max-width:700px){
    .post-card-v2{grid-template-columns:1fr;}
    .post-meta-col{border-right:none;border-bottom:1px solid var(--border-light);padding:20px 0 14px;}
    .post-content-col{padding:20px 0;}
  }

  /* No posts message */
  .no-posts {
    padding: 60px 0;
    text-align: center;
    color: var(--text-muted);
    font-size: 16px;
  }

  /* Footer */
  footer { background: var(--navy-mid); border-top: 1px solid var(--border); padding: 60px 0 40px; }
  .footer-bottom { display: flex; justify-content: space-between; align-items: center; }
  .footer-copy { font-size: 13px; color: var(--text-muted); }
  .footer-legal { display: flex; gap: 24px; }
  .footer-legal a { font-size: 13px; color: var(--text-muted); text-decoration: none; }
  .footer-legal a:hover { color: var(--white); }

  /* Accessibility */
  a:focus-visible, button:focus-visible { outline: 2px solid #C8971C; outline-offset: 2px; }

  /* Reveal animations */
  .reveal { opacity:0; transform:translateY(24px); transition:opacity 0.65s ease,transform 0.65s ease; }
  .reveal.visible { opacity:1; transform:translateY(0); }
  .reveal-d1 { transition-delay:0.1s; }
  .reveal-d2 { transition-delay:0.2s; }

  @media (prefers-reduced-motion: reduce) {
    .reveal { opacity:1; transform:none; transition:none; }
  }
</style>
</head>
<body>

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

  <!-- Hero -->
  <section class="page-hero">
    <div class="page-hero-bg" aria-hidden="true"></div>
    <div class="container" style="position:relative;z-index:2;padding-top:100px;padding-bottom:60px;">
      <span class="label reveal">Finlanza Insights</span>
      <h1 class="display-lg reveal reveal-d1">STRAIGHT TALK ON<br>BUSINESS <span class="gold">SYSTEMS.</span></h1>
      <p style="color:var(--text-muted);font-size:18px;max-width:540px;line-height:1.8;margin-top:20px;" class="reveal reveal-d2">No vendor fluff. No generic advice. Just honest thinking on what actually works in African operating environments.</p>
    </div>
  </section>

  <!-- Posts loop — pulls live WordPress posts -->
  <section class="section">
    <div class="container">
      <ul class="post-grid">

        <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 12,
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
        );
        $insights_query = new WP_Query( $args );

        if ( $insights_query->have_posts() ) :
          while ( $insights_query->have_posts() ) : $insights_query->the_post();

            // Get first category
            $cats     = get_the_category();
            $cat_name = $cats ? esc_html( $cats[0]->name ) : 'Insights';

            // Get excerpt — uses custom excerpt or auto-generates from content
            $excerpt = get_the_excerpt();
            $excerpt = wp_trim_words( $excerpt, 35, '…' );
        ?>

        <li class="post-card-v2 reveal">
          <div class="post-meta-col">
            <div class="post-cat"><?php echo $cat_name; ?></div>
            <div class="post-date"><?php echo get_the_date( 'F Y' ); ?></div>
          </div>
          <div class="post-content-col">
            <h2 class="post-title-v2">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
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
      // Pagination — shows Next/Previous links if more posts than posts_per_page
      $total_pages = $insights_query->max_num_pages;
      if ( $total_pages > 1 ) : ?>
      <div style="display:flex;gap:16px;justify-content:center;margin-top:60px;padding-top:40px;border-top:1px solid var(--border-light);">
        <?php if ( get_previous_posts_link() ) : ?>
          <a href="<?php echo get_previous_posts_page_link(); ?>" class="btn-primary" style="background:transparent;border:1px solid var(--border);color:var(--gold);">← Newer Articles</a>
        <?php endif; ?>
        <?php if ( get_next_posts_link( null, $total_pages ) ) : ?>
          <a href="<?php echo get_next_posts_page_link( $total_pages ); ?>" class="btn-primary">Older Articles →</a>
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
        <h2 class="display-md" style="margin-bottom:16px;">KNOW WHERE YOUR <span class="gold">SYSTEMS STAND.</span></h2>
        <p style="color:var(--text-muted);font-size:15px;line-height:1.8;margin-bottom:22px;">Before reading any more articles — take the 18-question Finlanza Business Systems Health Check. You'll get a scored, personalised assessment of where your operational gaps are. Takes 5 minutes.</p>
        <a href="<?php echo home_url('/scorecard/'); ?>" class="btn-primary">Take the Free Scorecard →</a>
      </div>
      <div class="reveal reveal-d2" style="background:var(--navy);border:1px solid var(--border);padding:32px;">
        <span class="label">Get new articles</span>
        <div style="font-family:'DM Serif Display',serif;font-size:20px;color:var(--white);margin:10px 0 8px;line-height:1.3;">No vendor content. No generic advice.<br>Just straight talk.</div>
        <p style="color:var(--text-muted);font-size:13px;line-height:1.7;margin-bottom:20px;">One article per month. Practical, opinionated, and written for African business leaders dealing with real operational complexity.</p>
        <div style="display:flex;gap:8px;">
          <label for="email-input" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">Email address</label>
          <input type="email" id="email-input" placeholder="your@email.com"
            style="flex:1;background:var(--navy-mid);border:1px solid var(--border);color:var(--text);padding:11px 14px;font-size:14px;outline:none;">
          <button class="btn-primary" style="white-space:nowrap;"
            onclick="this.textContent='Subscribed ✓';this.disabled=true;"
            aria-label="Subscribe to Finlanza Insights">Subscribe →</button>
        </div>
        <p style="color:var(--text-muted);font-size:11px;margin-top:10px;">No spam. Unsubscribe anytime.</p>
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
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('visible'); } });
  },{threshold:0.07,rootMargin:'0px 0px -20px 0px'});
  els.forEach(function(el){ io.observe(el); });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>

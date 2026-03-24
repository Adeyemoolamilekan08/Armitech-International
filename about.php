<?php
$page_title       = "About Us – Armitech International";
$page_description = "Learn about Armitech International – our mission, vision, values, and the expert team dedicated to securing Africa's digital future.";
include 'includes/header.php';
?>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">

<!-- PAGE HERO -->
<section class="page-hero" aria-labelledby="about-hero-heading">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span aria-current="page">About Us</span>
    </nav>
    <span class="section-label">Our Story</span>
    <h1 class="section-title" id="about-hero-heading" style="max-width:700px;">
      Who We Are & <span class="text-gradient">What Drives Us</span>
    </h1>
    <p style="color:var(--text-secondary);max-width:580px;line-height:1.85;">
      Armitech International was built on the conviction that every organization — regardless of size —
      deserves enterprise-grade cybersecurity. We exist to make that a reality.
    </p>
  </div>
</section>

<!-- WHO WE ARE -->
<section class="section-pad" aria-labelledby="who-heading">
  <div class="container">
    <div class="about-preview-grid">
      <div class="reveal-left">
        <span class="section-label">Our Identity</span>
        <h2 class="section-title" id="who-heading">More Than a Security Company</h2>
        <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
          Armitech International is a full-spectrum cybersecurity firm offering consulting, training,
          and technical services. Founded with a mission to bridge the glaring cybersecurity skills
          gap in Africa, we have grown into a trusted partner for enterprises, SMEs, government
          agencies, and individual professionals.
        </p>
        <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
          Our approach blends global best practices with on-the-ground intelligence about the African
          threat landscape, regulatory environment, and unique business challenges. We don't just
          deliver reports — we deliver transformation.
        </p>
        <p style="color:var(--text-secondary);line-height:1.85;">
          From penetration testing and security audits to immersive bootcamps and mentorship programs,
          every service we offer is designed to produce measurable, lasting security outcomes.
        </p>
      </div>
      <div class="reveal-right">
        <div class="about-image-placeholder" style="background:var(--bg-card);">
          <i class="fas fa-globe-africa" style="font-size:6rem;color:rgba(0,200,255,0.12);position:relative;z-index:1;"></i>
          <div style="text-align:center;position:relative;z-index:1;padding:0 20px;">
            <div style="font-family:var(--font-display);font-size:1.3rem;font-weight:700;color:var(--white);">Protecting Africa's Digital Economy</div>
            <div style="font-family:var(--font-mono);font-size:0.72rem;color:var(--accent-cyan);margin-top:8px;letter-spacing:0.15em;">SINCE 2020</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION / VISION / VALUES -->
<section class="section-pad" style="background:var(--bg-secondary);" aria-labelledby="mvv-heading">
  <div class="container">
    <header class="section-header centered reveal">
      <span class="section-label">Our Foundation</span>
      <h2 class="section-title" id="mvv-heading">Mission, Vision & <span class="text-gradient">Values</span></h2>
    </header>

    <div class="mission-grid">
      <article class="mission-card reveal delay-1">
        <div class="mission-icon"><i class="fas fa-bullseye" aria-hidden="true"></i></div>
        <h3 class="card-title">Our Mission</h3>
        <p class="card-text">
          To empower African organizations and individuals with world-class cybersecurity knowledge,
          tools, and strategies that enable them to operate securely and confidently in the digital economy.
        </p>
      </article>

      <article class="mission-card reveal delay-2">
        <div class="mission-icon"><i class="fas fa-eye" aria-hidden="true"></i></div>
        <h3 class="card-title">Our Vision</h3>
        <p class="card-text">
          A digitally secure Africa — where every business, government, and individual has the
          knowledge and resources to defend against cyber threats and thrive in a connected world.
        </p>
      </article>

      <article class="mission-card reveal delay-3">
        <div class="mission-icon"><i class="fas fa-star" aria-hidden="true"></i></div>
        <h3 class="card-title">Our Values</h3>
        <p class="card-text">
          Integrity, Excellence, Innovation, and Impact. We hold ourselves to the highest professional
          standards and measure success by the tangible security improvements we deliver to every client.
        </p>
      </article>
    </div>
  </div>
</section>

<!-- FOUNDER SECTION -->
<section class="section-pad founder-section" aria-labelledby="founder-heading">
  <div class="container">
    <header class="section-header centered reveal" style="margin-bottom:60px;">
      <span class="section-label">Leadership</span>
      <h2 class="section-title" id="founder-heading">Meet the <span class="text-gradient">Founder</span></h2>
    </header>

    <div class="founder-grid">
      <div class="reveal-left">
        <div class="founder-img-wrap" aria-hidden="true">
          <i class="fas fa-user-tie"></i>
        </div>
      </div>
      <div class="reveal-right">
        <div style="font-family:var(--font-mono);font-size:0.75rem;color:var(--accent-cyan);letter-spacing:0.2em;text-transform:uppercase;margin-bottom:8px;">Founder & CEO</div>
        <h2 class="founder-name">Armitech Leadership</h2>
        <p class="founder-title">Chief Executive Officer & Cybersecurity Strategist</p>

        <p class="founder-bio">
          With over a decade of experience in cybersecurity, the founder of Armitech International
          identified a critical gap in Africa's digital security landscape — organizations were
          investing in technology without investing in the knowledge to protect it.
        </p>
        <p class="founder-bio">
          Armed with global certifications and experience working with enterprises, financial institutions,
          and government agencies, they established Armitech International to deliver the kind of
          practical, results-driven security expertise that Africa's growing digital economy demands.
        </p>
        <p class="founder-bio">
          Their philosophy: <em style="color:var(--accent-cyan);">"Security is not a product — it's a discipline. And discipline starts with education."</em>
        </p>

        <div style="display:flex;gap:12px;margin-top:28px;">
          <a href="contact.php" class="btn btn-primary"><i class="fas fa-envelope"></i> Get in Touch</a>
          <a href="#" class="btn btn-ghost"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY PARTNER WITH US STATS -->
<section class="cta-section" aria-labelledby="stats-heading">
  <div class="cta-glow" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="reveal">
      <span class="section-label">Our Impact</span>
      <h2 class="section-title" id="stats-heading" style="margin-bottom:60px;">
        Numbers That <span class="text-gradient">Speak for Themselves</span>
      </h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:40px;max-width:900px;margin:0 auto;">
      <div class="reveal delay-1" style="text-align:center;">
        <div style="font-family:var(--font-display);font-size:3rem;font-weight:700;background:var(--gradient-accent);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;" data-count="500" data-suffix="+">0+</div>
        <div style="color:var(--text-secondary);font-size:0.9rem;margin-top:8px;">Professionals Trained</div>
      </div>
      <div class="reveal delay-2" style="text-align:center;">
        <div style="font-family:var(--font-display);font-size:3rem;font-weight:700;background:var(--gradient-accent);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;" data-count="50" data-suffix="+">0+</div>
        <div style="color:var(--text-secondary);font-size:0.9rem;margin-top:8px;">Enterprise Clients</div>
      </div>
      <div class="reveal delay-3" style="text-align:center;">
        <div style="font-family:var(--font-display);font-size:3rem;font-weight:700;background:var(--gradient-accent);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;" data-count="98" data-suffix="%">0%</div>
        <div style="color:var(--text-secondary);font-size:0.9rem;margin-top:8px;">Satisfaction Rate</div>
      </div>
      <div class="reveal delay-4" style="text-align:center;">
        <div style="font-family:var(--font-display);font-size:3rem;font-weight:700;background:var(--gradient-accent);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;" data-count="5" data-suffix="+">0+</div>
        <div style="color:var(--text-secondary);font-size:0.9rem;margin-top:8px;">Years of Excellence</div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

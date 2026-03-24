<?php
$page_title       = "Armitech International – Securing Futures. Empowering Digital Excellence.";
$page_description = "Armitech International is a leading cybersecurity consulting, corporate training, and technical services company empowering organizations and individuals to secure their digital futures.";
$page_keywords    = "cybersecurity consulting Nigeria, ethical hacking training, corporate cybersecurity training, cybersecurity courses Africa, Armitech International";
include 'includes/header.php';
?>

  <!-- SEO Page Meta (injected into head via PHP output buffering ideally; placed here for simplicity) -->
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:url" content="https://armitechinternational.com/">

  <!-- ===== HERO ===== -->
  <section class="hero" id="home" aria-label="Hero section">
    <canvas id="heroCanvas" class="hero-canvas" aria-hidden="true"
            style="position:absolute;inset:0;width:100%;height:100%;"></canvas>
    <div class="hero-grid" aria-hidden="true"></div>
    <div class="hero-orb hero-orb-1" aria-hidden="true"></div>
    <div class="hero-orb hero-orb-2" aria-hidden="true"></div>

    <div class="container hero-content">
      <div class="hero-inner">
        <!-- Text Side -->
        <div>
          <div class="hero-badge" role="status">
            <span class="hero-badge-dot" aria-hidden="true"></span>
            Trusted Cybersecurity Partner
          </div>

          <h1 class="hero-title">
            Empowering<br>
            <span class="line-highlight">Secure Digital</span><br>
            Futures
          </h1>

          <p class="hero-text">
            Armitech International delivers world-class cybersecurity consulting,
            corporate training, and technical services — protecting organizations
            and shaping the next generation of security professionals.
          </p>

          <div class="hero-actions">
            <a href="contact.php" class="btn btn-primary btn-lg">
              <i class="fas fa-calendar-check"></i> Book a Consultation
            </a>
            <a href="courses.php" class="btn btn-outline btn-lg">
              <i class="fas fa-graduation-cap"></i> Enroll in Training
            </a>
          </div>

          <div class="hero-stats" aria-label="Key statistics">
            <div class="hero-stat">
              <div class="hero-stat-num" data-count="500" data-suffix="+">0+</div>
              <div class="hero-stat-label">Professionals Trained</div>
            </div>
            <div class="hero-stat">
              <div class="hero-stat-num" data-count="50" data-suffix="+">0+</div>
              <div class="hero-stat-label">Corporate Clients</div>
            </div>
            <div class="hero-stat">
              <div class="hero-stat-num" data-count="98" data-suffix="%">0%</div>
              <div class="hero-stat-label">Satisfaction Rate</div>
            </div>
          </div>
        </div>

        <!-- Visual Side -->
        <div class="hero-visual" aria-hidden="true">
          <div class="hero-shield">
            <div class="shield-ring shield-ring-1"></div>
            <div class="shield-ring shield-ring-2"></div>
            <div class="shield-ring shield-ring-3"></div>
            <svg class="shield-svg" viewBox="0 0 200 240" fill="none" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="shieldGrad" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#00c8ff" stop-opacity="0.9"/>
                  <stop offset="100%" stop-color="#0057ff" stop-opacity="0.7"/>
                </linearGradient>
                <filter id="glow">
                  <feGaussianBlur stdDeviation="3" result="blur"/>
                  <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                </filter>
              </defs>
              <!-- Shield body -->
              <path d="M100 10 L180 45 L180 115 C180 165 100 230 100 230 C100 230 20 165 20 115 L20 45 Z"
                    fill="url(#shieldGrad)" fill-opacity="0.12" stroke="url(#shieldGrad)" stroke-width="1.5" filter="url(#glow)"/>
              <!-- Inner shield -->
              <path d="M100 30 L162 58 L162 112 C162 150 100 210 100 210 C100 210 38 150 38 112 L38 58 Z"
                    fill="none" stroke="url(#shieldGrad)" stroke-width="0.8" stroke-opacity="0.4"/>
              <!-- Lock icon -->
              <rect x="82" y="110" width="36" height="30" rx="4" fill="url(#shieldGrad)" fill-opacity="0.8"/>
              <path d="M88 110 L88 100 C88 88 112 88 112 100 L112 110" stroke="url(#shieldGrad)" stroke-width="3" stroke-linecap="round" fill="none"/>
              <circle cx="100" cy="126" r="4" fill="#000" fill-opacity="0.6"/>
              <!-- Check mark at bottom -->
              <path d="M84 155 L93 164 L116 141" stroke="#00c8ff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== ABOUT PREVIEW ===== -->
  <section class="section-pad" aria-labelledby="about-preview-heading">
    <div class="container">
      <div class="about-preview-grid">
        <div class="reveal-left">
          <div class="about-tag"><i class="fas fa-building"></i> Who We Are</div>
          <h2 class="section-title" id="about-preview-heading">
            Africa's Premier <span class="text-gradient">Cybersecurity</span> Partner
          </h2>
          <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
            Armitech International is a cutting-edge cybersecurity firm dedicated to empowering
            businesses and individuals with the skills and infrastructure needed to thrive securely
            in today's threat-laden digital landscape.
          </p>
          <p style="color:var(--text-secondary);line-height:1.85;">
            From Lagos to the global stage, we combine world-class expertise with a deep
            understanding of local challenges to deliver cybersecurity solutions that truly work.
          </p>
          <ul class="about-list">
            <li class="about-list-item"><i class="fas fa-check-circle"></i> Expert-led consulting and advisory services</li>
            <li class="about-list-item"><i class="fas fa-check-circle"></i> Industry-recognized certification programs</li>
            <li class="about-list-item"><i class="fas fa-check-circle"></i> Tailored corporate security training</li>
            <li class="about-list-item"><i class="fas fa-check-circle"></i> Ongoing mentorship and career development</li>
          </ul>
          <a href="about.php" class="btn btn-outline" style="margin-top:16px;">
            <i class="fas fa-arrow-right"></i> Learn More About Us
          </a>
        </div>
        <div class="reveal-right">
          <div class="about-image-placeholder">
            <i class="fas fa-shield-alt about-icon-big"></i>
            <div style="text-align:center;position:relative;z-index:1;">
              <div style="font-family:var(--font-display);font-size:1.2rem;font-weight:700;color:var(--white);letter-spacing:0.05em;">ARMITECH INTERNATIONAL</div>
              <div style="font-family:var(--font-mono);font-size:0.75rem;color:var(--accent-cyan);letter-spacing:0.2em;margin-top:8px;">SECURING FUTURES</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SERVICES ===== -->
  <section class="section-pad" style="background:var(--bg-secondary);" aria-labelledby="services-heading">
    <div class="container">
      <header class="section-header centered reveal">
        <span class="section-label">What We Do</span>
        <h2 class="section-title" id="services-heading">Our Core <span class="text-gradient">Services</span></h2>
        <p class="section-subtitle">
          Comprehensive cybersecurity solutions designed to protect, educate, and empower your organization.
        </p>
      </header>

      <div class="services-grid">
        <article class="card reveal delay-1">
          <div class="card-icon"><i class="fas fa-shield-alt" aria-hidden="true"></i></div>
          <h3 class="card-title">Cybersecurity Consulting</h3>
          <p class="card-text">
            Expert risk assessments, vulnerability analysis, and strategic security roadmaps
            tailored to your organization's unique threat landscape.
          </p>
          <a href="services.php" class="read-more" style="margin-top:20px;">
            Explore <i class="fas fa-arrow-right"></i>
          </a>
        </article>

        <article class="card reveal delay-2">
          <div class="card-icon"><i class="fas fa-users-cog" aria-hidden="true"></i></div>
          <h3 class="card-title">Corporate Training</h3>
          <p class="card-text">
            Security awareness programs, hands-on workshops, and customized training
            that build a security-first culture across your entire workforce.
          </p>
          <a href="services.php" class="read-more" style="margin-top:20px;">
            Explore <i class="fas fa-arrow-right"></i>
          </a>
        </article>

        <article class="card reveal delay-3">
          <div class="card-icon"><i class="fas fa-network-wired" aria-hidden="true"></i></div>
          <h3 class="card-title">Technical Services</h3>
          <p class="card-text">
            Penetration testing, SOC implementation, incident response, and security
            infrastructure deployment to fortify your digital assets.
          </p>
          <a href="services.php" class="read-more" style="margin-top:20px;">
            Explore <i class="fas fa-arrow-right"></i>
          </a>
        </article>
      </div>
    </div>
  </section>

  <!-- ===== WHY CHOOSE US ===== -->
  <section class="section-pad why-section" aria-labelledby="why-heading">
    <div class="container">
      <div class="why-grid">
        <div>
          <header class="section-header reveal">
            <span class="section-label">Why Armitech</span>
            <h2 class="section-title" id="why-heading">Built for the <span class="text-gradient">Modern Threat</span> Era</h2>
            <p class="section-subtitle">
              We don't just offer generic security advice. We deliver precision-engineered
              solutions backed by real-world experience.
            </p>
          </header>

          <div class="why-features">
            <div class="why-feature reveal delay-1">
              <div class="why-feature-icon"><i class="fas fa-certificate" aria-hidden="true"></i></div>
              <div>
                <h3 class="why-feature-title">Industry-Certified Experts</h3>
                <p class="why-feature-text">Our team holds globally recognized certifications — CISSP, CEH, CompTIA Security+, and more.</p>
              </div>
            </div>
            <div class="why-feature reveal delay-2">
              <div class="why-feature-icon"><i class="fas fa-map-marked-alt" aria-hidden="true"></i></div>
              <div>
                <h3 class="why-feature-title">Africa-Focused Expertise</h3>
                <p class="why-feature-text">Deep knowledge of local regulatory frameworks, threat actors, and business environments.</p>
              </div>
            </div>
            <div class="why-feature reveal delay-3">
              <div class="why-feature-icon"><i class="fas fa-headset" aria-hidden="true"></i></div>
              <div>
                <h3 class="why-feature-title">24/7 Support & Response</h3>
                <p class="why-feature-text">Round-the-clock monitoring, incident response, and dedicated support for all clients.</p>
              </div>
            </div>
            <div class="why-feature reveal delay-4">
              <div class="why-feature-icon"><i class="fas fa-chart-line" aria-hidden="true"></i></div>
              <div>
                <h3 class="why-feature-title">Proven Track Record</h3>
                <p class="why-feature-text">500+ professionals trained, 50+ enterprises secured, with a 98% client satisfaction rate.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Terminal Visual -->
        <div class="why-visual reveal-right">
          <div class="why-terminal" aria-label="Security audit terminal demonstration">
            <div class="terminal-bar">
              <span class="t-dot t-dot-r"></span>
              <span class="t-dot t-dot-y"></span>
              <span class="t-dot t-dot-g"></span>
              <span class="terminal-title">armitech_security_audit.sh</span>
            </div>
            <div class="terminal-body" aria-hidden="true">
              <span class="t-line"><span class="t-prompt">root@armitech:~$</span> <span class="t-cmd">./security_audit.sh --target client</span></span>
              <span class="t-line t-out">[ * ] Initializing security assessment...</span>
              <span class="t-line t-out">[ * ] Scanning network infrastructure...</span>
              <span class="t-line t-out success">[ ✓ ] Firewall rules validated</span>
              <span class="t-line t-out success">[ ✓ ] Endpoint protection active</span>
              <span class="t-line t-out" style="color:#ffbd2e;">[ ! ] Outdated SSL certificate detected</span>
              <span class="t-line t-out success">[ ✓ ] Patching vulnerability CVE-2024-XXX...</span>
              <span class="t-line t-out success">[ ✓ ] MFA enforcement verified</span>
              <span class="t-line t-out">[ * ] Generating security report...</span>
              <span class="t-line t-out success">[ ✓ ] Audit complete — Security Score: 94/100</span>
              <span class="t-line"><span class="t-prompt">root@armitech:~$</span> <span class="t-cursor"></span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FEATURED PROGRAMS ===== -->
  <section class="section-pad programs-preview" aria-labelledby="programs-heading">
    <div class="container">
      <header class="section-header centered reveal">
        <span class="section-label">Our Programs</span>
        <h2 class="section-title" id="programs-heading">Launch Your <span class="text-gradient">Security Career</span></h2>
        <p class="section-subtitle">
          Structured pathways from beginner to advanced, designed to accelerate your cybersecurity journey.
        </p>
      </header>

      <div class="programs-grid">
        <article class="program-card reveal delay-1">
          <div class="card-icon" style="margin-bottom:20px;"><i class="fas fa-user-graduate" aria-hidden="true"></i></div>
          <h3 class="card-title">Mentorship Program</h3>
          <p class="card-text">1-on-1 guidance from senior security professionals to accelerate your growth and career transition.</p>
          <ul class="course-features" style="margin-top:16px;">
            <li class="course-feature"><i class="fas fa-check-circle"></i> Personalized learning roadmap</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Weekly 1:1 sessions</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Real-world project exposure</li>
          </ul>
          <a href="programs.php" class="btn btn-outline btn-sm" style="margin-top:20px;">Learn More</a>
        </article>

        <article class="program-card reveal delay-2">
          <div class="card-icon" style="margin-bottom:20px;"><i class="fas fa-laptop-code" aria-hidden="true"></i></div>
          <h3 class="card-title">Hands-On Training</h3>
          <p class="card-text">Intensive lab-based training with real attack simulations, CTF challenges, and practical assessments.</p>
          <ul class="course-features" style="margin-top:16px;">
            <li class="course-feature"><i class="fas fa-check-circle"></i> Live lab environment</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> CTF competitions</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Industry certifications</li>
          </ul>
          <a href="programs.php" class="btn btn-outline btn-sm" style="margin-top:20px;">Learn More</a>
        </article>

        <article class="program-card reveal delay-3">
          <div class="card-icon" style="margin-bottom:20px;"><i class="fas fa-briefcase" aria-hidden="true"></i></div>
          <h3 class="card-title">Career Support</h3>
          <p class="card-text">Resume building, interview coaching, and job placement assistance to get you hired in cybersecurity.</p>
          <ul class="course-features" style="margin-top:16px;">
            <li class="course-feature"><i class="fas fa-check-circle"></i> CV & portfolio review</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Mock interviews</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Employer network access</li>
          </ul>
          <a href="programs.php" class="btn btn-outline btn-sm" style="margin-top:20px;">Learn More</a>
        </article>
      </div>
    </div>
  </section>

  <!-- ===== BLOG PREVIEW ===== -->
  <section class="section-pad" style="background:var(--bg-secondary);" aria-labelledby="blog-preview-heading">
    <div class="container">
      <header class="section-header centered reveal">
        <span class="section-label">Insights</span>
        <h2 class="section-title" id="blog-preview-heading">Latest from Our <span class="text-gradient">Security Blog</span></h2>
        <p class="section-subtitle">Stay current with cybersecurity trends, tips, and expert insights.</p>
      </header>

      <div class="blog-grid">
        <article class="blog-card reveal delay-1">
          <div class="blog-card-img"><i class="fas fa-shield-halved"></i></div>
          <div class="blog-card-body">
            <span class="blog-tag">Career</span>
            <div class="blog-meta">
              <span><i class="fas fa-calendar"></i> March 2026</span>
              <span><i class="fas fa-clock"></i> 6 min read</span>
            </div>
            <h3 class="blog-card-title">Top Cybersecurity Skills in Demand in 2026</h3>
            <p class="blog-card-excerpt">Discover the most sought-after cybersecurity skills that employers are desperately seeking this year and how to acquire them.</p>
            <a href="blog.php" class="read-more">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>

        <article class="blog-card reveal delay-2">
          <div class="blog-card-img"><i class="fas fa-bug"></i></div>
          <div class="blog-card-body">
            <span class="blog-tag">Threat Intel</span>
            <div class="blog-meta">
              <span><i class="fas fa-calendar"></i> February 2026</span>
              <span><i class="fas fa-clock"></i> 8 min read</span>
            </div>
            <h3 class="blog-card-title">How African Businesses Can Defend Against Ransomware</h3>
            <p class="blog-card-excerpt">Ransomware attacks are surging across African enterprises. Here's a practical playbook to protect your organization.</p>
            <a href="blog.php" class="read-more">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>

        <article class="blog-card reveal delay-3">
          <div class="blog-card-img"><i class="fas fa-lock"></i></div>
          <div class="blog-card-body">
            <span class="blog-tag">Best Practices</span>
            <div class="blog-meta">
              <span><i class="fas fa-calendar"></i> January 2026</span>
              <span><i class="fas fa-clock"></i> 5 min read</span>
            </div>
            <h3 class="blog-card-title">Zero Trust Architecture: Is Your Company Ready?</h3>
            <p class="blog-card-excerpt">Zero Trust is no longer optional. We break down how to implement a Zero Trust security model for SMEs and enterprises.</p>
            <a href="blog.php" class="read-more">Read Article <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ===== CTA ===== -->
  <section class="cta-section" aria-labelledby="cta-heading">
    <div class="cta-glow" aria-hidden="true"></div>
    <div class="container" style="position:relative;z-index:1;">
      <div class="reveal">
        <span class="section-label">Get Started Today</span>
        <h2 class="section-title" id="cta-heading">
          Ready to Secure Your<br><span class="text-gradient">Digital Future?</span>
        </h2>
        <p class="section-subtitle" style="margin:20px auto 40px;">
          Whether you need a security audit, corporate training, or want to launch your cybersecurity career —
          Armitech International is your trusted partner.
        </p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
          <a href="contact.php" class="btn btn-primary btn-lg">
            <i class="fas fa-calendar-check"></i> Book Free Consultation
          </a>
          <a href="courses.php" class="btn btn-outline btn-lg">
            <i class="fas fa-graduation-cap"></i> View Our Courses
          </a>
        </div>
        <p style="margin-top:24px;font-family:var(--font-mono);font-size:0.75rem;color:var(--text-muted);letter-spacing:0.1em;">
          <i class="fas fa-envelope"></i>&nbsp; armitechinternational@gmail.com &nbsp;|&nbsp;
          <i class="fab fa-whatsapp"></i>&nbsp; +234 706 759 5688
        </p>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>

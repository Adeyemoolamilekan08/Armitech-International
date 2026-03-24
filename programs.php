<?php
$page_title       = "Programs – Armitech International";
$page_description = "Armitech International's structured programs: Mentorship, Hands-On Training, and Career Support to launch and accelerate your cybersecurity career.";
include 'includes/header.php';
?>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">

<!-- PAGE HERO -->
<section class="page-hero" aria-labelledby="programs-hero-heading">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span aria-current="page">Programs</span>
    </nav>
    <span class="section-label">Pathways to Success</span>
    <h1 class="section-title" id="programs-hero-heading" style="max-width:700px;">
      Programs Designed to <span class="text-gradient">Launch Careers</span>
    </h1>
    <p style="color:var(--text-secondary);max-width:580px;line-height:1.85;">
      Beyond courses, Armitech International offers structured programs that provide the
      mentorship, training, and career support needed to succeed in cybersecurity.
    </p>
  </div>
</section>

<!-- PROGRAM OVERVIEW -->
<section class="section-pad" aria-labelledby="overview-heading">
  <div class="container">
    <header class="section-header centered reveal">
      <span class="section-label">The Armitech Way</span>
      <h2 class="section-title" id="overview-heading">A Complete <span class="text-gradient">Ecosystem</span> for Growth</h2>
      <p class="section-subtitle">
        Our programs go beyond teaching — they provide everything you need from learning to landing your dream job in cybersecurity.
      </p>
    </header>

    <!-- Program 1 -->
    <div class="programs-list">
      <article class="program-detail-card reveal">
        <div class="program-num">01</div>
        <div>
          <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px;">
            <div class="card-icon" style="margin:0;"><i class="fas fa-user-graduate" aria-hidden="true"></i></div>
            <div>
              <h2 class="program-detail-title">Mentorship Program</h2>
              <div style="font-family:var(--font-mono);font-size:0.75rem;color:var(--accent-cyan);letter-spacing:0.1em;">1-on-1 | 3 & 6 Month Tracks</div>
            </div>
          </div>
          <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:16px;">
            Paired with a senior cybersecurity professional, you'll receive personalized guidance,
            career coaching, and real-world project exposure. Whether you're starting out or pivoting careers,
            our mentors help you navigate the path with clarity and confidence.
          </p>
          <p style="color:var(--text-secondary);line-height:1.85;">
            Your mentor will help you set career goals, review your work, introduce you to their professional
            network, and provide the kind of guidance that textbooks and courses simply can't replicate.
          </p>
          <div class="program-tags">
            <span class="program-tag">Weekly 1:1 Sessions</span>
            <span class="program-tag">Career Roadmap</span>
            <span class="program-tag">Project Reviews</span>
            <span class="program-tag">Network Access</span>
            <span class="program-tag">LinkedIn Optimization</span>
          </div>
        </div>
        <a href="contact.php?program=mentorship" class="btn btn-outline" style="white-space:nowrap;align-self:flex-start;">Apply Now</a>
      </article>

      <!-- Program 2 -->
      <article class="program-detail-card reveal">
        <div class="program-num">02</div>
        <div>
          <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px;">
            <div class="card-icon" style="margin:0;"><i class="fas fa-laptop-code" aria-hidden="true"></i></div>
            <div>
              <h2 class="program-detail-title">Hands-On Training Labs</h2>
              <div style="font-family:var(--font-mono);font-size:0.75rem;color:var(--accent-cyan);letter-spacing:0.1em;">Live Labs | CTF Challenges | Real-World Scenarios</div>
            </div>
          </div>
          <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:16px;">
            Security is a skill — and skills are built through practice, not just theory. Our training
            labs provide access to a fully managed virtual environment where you can practice attack
            and defense techniques in a safe, legal, and structured setting.
          </p>
          <p style="color:var(--text-secondary);line-height:1.85;">
            From Capture the Flag (CTF) competitions to simulated enterprise environments, our lab
            challenges are designed to replicate real-world scenarios that prepare you for the demands
            of the job.
          </p>
          <div class="program-tags">
            <span class="program-tag">Virtual Lab Access</span>
            <span class="program-tag">CTF Competitions</span>
            <span class="program-tag">Kali Linux</span>
            <span class="program-tag">Metasploit</span>
            <span class="program-tag">Burp Suite</span>
            <span class="program-tag">Weekly Challenges</span>
          </div>
        </div>
        <a href="contact.php?program=labs" class="btn btn-outline" style="white-space:nowrap;align-self:flex-start;">Get Access</a>
      </article>

      <!-- Program 3 -->
      <article class="program-detail-card reveal">
        <div class="program-num">03</div>
        <div>
          <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px;">
            <div class="card-icon" style="margin:0;"><i class="fas fa-briefcase" aria-hidden="true"></i></div>
            <div>
              <h2 class="program-detail-title">Career Support Program</h2>
              <div style="font-family:var(--font-mono);font-size:0.75rem;color:var(--accent-cyan);letter-spacing:0.1em;">Job Placement | Interview Prep | Alumni Network</div>
            </div>
          </div>
          <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:16px;">
            Completing a course is just the beginning. Our Career Support Program bridges the gap
            between education and employment. We work closely with our hiring partners, alumni,
            and industry contacts to connect qualified graduates with real job opportunities.
          </p>
          <p style="color:var(--text-secondary);line-height:1.85;">
            From crafting the perfect security-focused CV to acing technical interviews, our team
            provides hands-on support at every stage of your job search.
          </p>
          <div class="program-tags">
            <span class="program-tag">CV & Portfolio Review</span>
            <span class="program-tag">Mock Interviews</span>
            <span class="program-tag">Employer Network</span>
            <span class="program-tag">Job Board Access</span>
            <span class="program-tag">Salary Negotiation</span>
          </div>
        </div>
        <a href="contact.php?program=career" class="btn btn-outline" style="white-space:nowrap;align-self:flex-start;">Learn More</a>
      </article>

      <!-- Program 4 -->
      <article class="program-detail-card reveal">
        <div class="program-num">04</div>
        <div>
          <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px;">
            <div class="card-icon" style="margin:0;"><i class="fas fa-building" aria-hidden="true"></i></div>
            <div>
              <h2 class="program-detail-title">Enterprise Security Program</h2>
              <div style="font-family:var(--font-mono);font-size:0.75rem;color:var(--accent-cyan);letter-spacing:0.1em;">Custom | On-Site | Retainer-Based</div>
            </div>
          </div>
          <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:16px;">
            Designed for organizations that want a comprehensive, ongoing security improvement
            program rather than one-off interventions. We embed with your team, assess your entire
            security posture, and implement a structured improvement roadmap over 6–12 months.
          </p>
          <p style="color:var(--text-secondary);line-height:1.85;">
            This program includes consulting, training, technical services, and executive reporting
            — all delivered as a cohesive, managed engagement.
          </p>
          <div class="program-tags">
            <span class="program-tag">Security Roadmap</span>
            <span class="program-tag">Staff Training</span>
            <span class="program-tag">Monthly Audits</span>
            <span class="program-tag">CISO Advisory</span>
            <span class="program-tag">Incident Response SLA</span>
          </div>
        </div>
        <a href="contact.php?program=enterprise" class="btn btn-primary" style="white-space:nowrap;align-self:flex-start;">Request Proposal</a>
      </article>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-labelledby="programs-cta-heading">
  <div class="cta-glow" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="reveal">
      <h2 class="section-title" id="programs-cta-heading">Find the Right Program for You</h2>
      <p class="section-subtitle" style="margin:16px auto 36px;">
        Not sure which program fits your goals? Our team will help you choose the right path.
      </p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php" class="btn btn-primary btn-lg"><i class="fas fa-calendar-check"></i> Book Free Consultation</a>
        <a href="courses.php" class="btn btn-outline btn-lg"><i class="fas fa-graduation-cap"></i> View Courses</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php
$page_title       = "Cybersecurity Services – Armitech International";
$page_description = "Armitech International offers cybersecurity consulting, corporate training, and technical services to protect your organization from modern digital threats.";
include 'includes/header.php';
?>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">

<!-- PAGE HERO -->
<section class="page-hero" aria-labelledby="services-hero-heading">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span aria-current="page">Services</span>
    </nav>
    <span class="section-label">What We Offer</span>
    <h1 class="section-title" id="services-hero-heading" style="max-width:700px;">
      Comprehensive <span class="text-gradient">Cybersecurity Solutions</span>
    </h1>
    <p style="color:var(--text-secondary);max-width:580px;line-height:1.85;">
      From strategic consulting to hands-on technical implementation, our services are designed
      to address every dimension of your organization's cybersecurity needs.
    </p>
  </div>
</section>

<!-- SERVICE 1: CONSULTING -->
<section class="section-pad" id="consulting" aria-labelledby="consulting-heading">
  <div class="container">
    <div class="service-detail-grid">
      <div class="reveal-left">
        <div class="service-detail-icon"><i class="fas fa-shield-alt" aria-hidden="true"></i></div>
        <span class="section-label">Service 01</span>
        <h2 class="section-title" id="consulting-heading">Cybersecurity <span class="text-gradient">Consulting</span></h2>
        <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
          Our consulting practice helps organizations identify vulnerabilities, assess risk exposure,
          and build resilient security strategies. We work as an extension of your team — providing
          the expertise you need without the overhead of a full in-house security department.
        </p>
        <ul class="service-list">
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Cybersecurity Risk Assessment & Gap Analysis</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Security Policy & Governance Framework Development</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Compliance Readiness (GDPR, NDPR, ISO 27001, PCI-DSS)</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Business Continuity & Disaster Recovery Planning</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> CISO Advisory Services (vCISO)</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Third-Party Vendor Risk Management</li>
        </ul>
        <a href="contact.php" class="btn btn-primary" style="margin-top:28px;">
          <i class="fas fa-calendar-check"></i> Request Consultation
        </a>
      </div>
      <div class="reveal-right">
        <div class="service-visual" aria-hidden="true">
          <i class="fas fa-shield-alt" style="position:relative;z-index:1;"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICE 2: CORPORATE TRAINING -->
<section class="section-pad" style="background:var(--bg-secondary);" id="training" aria-labelledby="training-heading">
  <div class="container">
    <div class="service-detail-grid reverse">
      <div class="reveal-right">
        <div class="service-detail-icon"><i class="fas fa-users-cog" aria-hidden="true"></i></div>
        <span class="section-label">Service 02</span>
        <h2 class="section-title" id="training-heading">Corporate <span class="text-gradient">Training</span></h2>
        <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
          People are both the greatest vulnerability and the strongest defense in any security posture.
          Our corporate training programs transform your employees from a security liability into a
          security asset through engaging, practical, and customized learning experiences.
        </p>
        <ul class="service-list">
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Security Awareness & Phishing Simulation Programs</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Executive & Board Cybersecurity Briefings</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Secure Software Development Training (DevSecOps)</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Incident Response & Crisis Management Workshops</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Role-Based Cybersecurity Training (IT, Finance, HR)</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Customized On-Site or Virtual Delivery</li>
        </ul>
        <a href="contact.php" class="btn btn-primary" style="margin-top:28px;">
          <i class="fas fa-calendar-check"></i> Schedule Training
        </a>
      </div>
      <div class="reveal-left">
        <div class="service-visual" aria-hidden="true">
          <i class="fas fa-chalkboard-teacher" style="position:relative;z-index:1;"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICE 3: TECHNICAL SERVICES -->
<section class="section-pad" id="technical" aria-labelledby="technical-heading">
  <div class="container">
    <div class="service-detail-grid">
      <div class="reveal-left">
        <div class="service-detail-icon"><i class="fas fa-network-wired" aria-hidden="true"></i></div>
        <span class="section-label">Service 03</span>
        <h2 class="section-title" id="technical-heading">Technical <span class="text-gradient">Services</span></h2>
        <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
          Our technical team delivers hands-on security implementation, testing, and monitoring
          services. We go beyond assessments to actually fix the vulnerabilities we find —
          leaving your systems more secure than we found them.
        </p>
        <ul class="service-list">
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Penetration Testing (Network, Web App, Mobile)</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Vulnerability Assessment & Management</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Security Operations Centre (SOC) Implementation</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> SIEM Deployment & Configuration</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Incident Response & Digital Forensics</li>
          <li class="service-list-item"><i class="fas fa-angle-right"></i> Cloud Security Architecture & Review</li>
        </ul>
        <a href="contact.php" class="btn btn-primary" style="margin-top:28px;">
          <i class="fas fa-wrench"></i> Get Technical Assessment
        </a>
      </div>
      <div class="reveal-right">
        <div class="service-visual" aria-hidden="true">
          <i class="fas fa-server" style="position:relative;z-index:1;"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-labelledby="services-cta-heading">
  <div class="cta-glow" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="reveal">
      <h2 class="section-title" id="services-cta-heading">Not Sure Where to Start?</h2>
      <p class="section-subtitle" style="margin:16px auto 36px;">
        Book a free 30-minute consultation and our experts will help identify the right
        services for your organization's specific security needs.
      </p>
      <a href="contact.php" class="btn btn-primary btn-lg">
        <i class="fas fa-calendar-check"></i> Book Free Consultation
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

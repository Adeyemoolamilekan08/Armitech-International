<?php
$page_title       = "Cybersecurity Courses – Armitech International";
$page_description = "Enroll in Armitech International's cybersecurity courses – Beginner Cybersecurity and Ethical Hacking Bootcamp. Launch your security career today.";
include 'includes/header.php';
?>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">

<!-- PAGE HERO -->
<section class="page-hero" aria-labelledby="courses-hero-heading">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span aria-current="page">Courses</span>
    </nav>
    <span class="section-label">Learn With Us</span>
    <h1 class="section-title" id="courses-hero-heading" style="max-width:700px;">
      Industry-Ready <span class="text-gradient">Cybersecurity Courses</span>
    </h1>
    <p style="color:var(--text-secondary);max-width:580px;line-height:1.85;">
      Hands-on, instructor-led programs designed to take you from zero to job-ready
      in cybersecurity. Learn by doing — not just watching.
    </p>
  </div>
</section>

<!-- COURSES LISTING -->
<section class="section-pad" aria-labelledby="courses-heading">
  <div class="container">
    <header class="section-header centered reveal">
      <span class="section-label">Our Courses</span>
      <h2 class="section-title" id="courses-heading">Choose Your <span class="text-gradient">Learning Path</span></h2>
      <p class="section-subtitle">From fundamentals to advanced offensive security — we have a course for every stage of your journey.</p>
    </header>

    <div class="courses-grid">

      <!-- COURSE 1: BEGINNER -->
      <article class="course-card reveal delay-1">
        <div class="course-badge-wrap">
          <span class="course-level beginner"><i class="fas fa-seedling"></i> Beginner</span>
          <div class="course-price">₦45,000 <span>/ course</span></div>
        </div>
        <div class="course-body">
          <h2 class="course-title">Cybersecurity Fundamentals</h2>
          <p class="course-description">
            The perfect starting point for anyone looking to enter the cybersecurity field.
            Master the core concepts, tools, and frameworks used by security professionals worldwide.
          </p>

          <div class="course-meta">
            <div class="course-meta-item">
              <i class="fas fa-clock"></i>
              <span>8 Weeks</span>
            </div>
            <div class="course-meta-item">
              <i class="fas fa-layer-group"></i>
              <span>Beginner</span>
            </div>
            <div class="course-meta-item">
              <i class="fas fa-video"></i>
              <span>Online + Live</span>
            </div>
          </div>

          <ul class="course-features">
            <li class="course-feature"><i class="fas fa-check-circle"></i> Introduction to cybersecurity concepts & frameworks</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Network security fundamentals (TCP/IP, firewalls, VPNs)</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Operating systems security (Linux & Windows)</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Introduction to cryptography & PKI</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Security compliance & regulations (NDPR, GDPR)</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> CompTIA Security+ exam preparation</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Certificate of completion</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Career guidance & job search support</li>
          </ul>

          <a href="contact.php?course=fundamentals" class="btn btn-outline" style="width:100%;justify-content:center;">
            <i class="fas fa-graduation-cap"></i> Enroll Now
          </a>
        </div>
      </article>

      <!-- COURSE 2: ETHICAL HACKING -->
      <article class="course-card reveal delay-2">
        <span class="course-popular">Most Popular</span>
        <div class="course-badge-wrap">
          <span class="course-level advanced"><i class="fas fa-fire"></i> Advanced</span>
          <div class="course-price">₦85,000 <span>/ course</span></div>
        </div>
        <div class="course-body">
          <h2 class="course-title">Ethical Hacking Bootcamp</h2>
          <p class="course-description">
            An intensive, hands-on bootcamp that trains you to think like an attacker.
            Master offensive security techniques used by professional penetration testers and bug bounty hunters.
          </p>

          <div class="course-meta">
            <div class="course-meta-item">
              <i class="fas fa-clock"></i>
              <span>12 Weeks</span>
            </div>
            <div class="course-meta-item">
              <i class="fas fa-layer-group"></i>
              <span>Intermediate+</span>
            </div>
            <div class="course-meta-item">
              <i class="fas fa-video"></i>
              <span>Live Lab</span>
            </div>
          </div>

          <ul class="course-features">
            <li class="course-feature"><i class="fas fa-check-circle"></i> Reconnaissance & OSINT techniques</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Network scanning & enumeration (Nmap, Nessus)</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Exploitation with Metasploit Framework</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Web application hacking (OWASP Top 10)</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Wireless & social engineering attacks</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Post-exploitation & privilege escalation</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> CEH exam preparation & mock tests</li>
            <li class="course-feature"><i class="fas fa-check-circle"></i> Professional pen test report writing</li>
          </ul>

          <a href="contact.php?course=bootcamp" class="btn btn-primary" style="width:100%;justify-content:center;">
            <i class="fas fa-graduation-cap"></i> Enroll Now
          </a>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- WHAT YOU GET -->
<section class="section-pad" style="background:var(--bg-secondary);" aria-labelledby="benefits-heading">
  <div class="container">
    <header class="section-header centered reveal">
      <span class="section-label">Why Our Training</span>
      <h2 class="section-title" id="benefits-heading">The Armitech <span class="text-gradient">Difference</span></h2>
    </header>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:24px;">
      <?php
      $benefits = [
        ['fas fa-laptop-code',  'Hands-On Labs',         'Practice on real systems in our dedicated virtual lab environment — not just theory.'],
        ['fas fa-user-tie',     'Expert Instructors',    'Learn from certified security professionals with real-world consulting and red team experience.'],
        ['fas fa-certificate',  'Globally Recognized',  'Courses aligned with CEH, CompTIA, and OSCP certification standards.'],
        ['fas fa-users',        'Community Access',      'Join a community of security learners and professionals for networking and collaboration.'],
        ['fas fa-headset',      'Lifetime Support',      'Access to course materials, updates, and our alumni Slack channel — forever.'],
        ['fas fa-briefcase',    'Job Placement Help',    'Resume reviews, mock interviews, and connections to our hiring partner network.'],
      ];
      foreach ($benefits as $i => [$icon, $title, $text]):
      ?>
      <article class="card reveal delay-<?= $i+1 ?>">
        <div class="card-icon"><i class="<?= $icon ?>" aria-hidden="true"></i></div>
        <h3 class="card-title"><?= htmlspecialchars($title) ?></h3>
        <p class="card-text"><?= htmlspecialchars($text) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section-pad" aria-labelledby="faq-heading">
  <div class="container" style="max-width:800px;">
    <header class="section-header centered reveal">
      <span class="section-label">Questions</span>
      <h2 class="section-title" id="faq-heading">Frequently Asked <span class="text-gradient">Questions</span></h2>
    </header>
    <?php
    $faqs = [
      ['Do I need prior IT experience?', 'The Cybersecurity Fundamentals course is designed for complete beginners. The Ethical Hacking Bootcamp requires basic IT/networking knowledge or completion of the fundamentals course.'],
      ['Are the courses online or in-person?', 'Both courses are offered in a hybrid format — live online sessions with access to our virtual lab environment. In-person options are available in Lagos.'],
      ['Do I get a certificate?', 'Yes! All students receive a certificate of completion from Armitech International. Our bootcamp also prepares you for globally recognized certifications like CEH.'],
      ['What payment options are available?', 'We accept full payment, installment plans, and corporate sponsorship. Contact us to discuss flexible payment arrangements.'],
      ['How do I enroll?', 'Click the Enroll Now button on any course or contact us via WhatsApp or email. Our team will guide you through the enrollment and payment process.'],
    ];
    foreach ($faqs as $i => [$q, $a]):
    ?>
    <details class="reveal" style="background:var(--bg-card);border:1px solid var(--border);border-radius:10px;padding:0;margin-bottom:12px;overflow:hidden;transition:var(--transition);" open="<?= $i===0?'true':'false' ?>">
      <summary style="padding:20px 24px;cursor:pointer;font-family:var(--font-display);font-weight:600;font-size:1rem;color:var(--white);letter-spacing:0.02em;list-style:none;display:flex;justify-content:space-between;align-items:center;">
        <?= htmlspecialchars($q) ?>
        <i class="fas fa-plus" style="color:var(--accent-cyan);font-size:0.8rem;flex-shrink:0;"></i>
      </summary>
      <p style="padding:0 24px 20px;color:var(--text-secondary);line-height:1.8;"><?= htmlspecialchars($a) ?></p>
    </details>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="cta-section" aria-labelledby="courses-cta-heading">
  <div class="cta-glow" aria-hidden="true"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="reveal">
      <h2 class="section-title" id="courses-cta-heading">Ready to Start Your Security Journey?</h2>
      <p class="section-subtitle" style="margin:16px auto 36px;">Seats are limited. Secure your spot today and take the first step toward a rewarding cybersecurity career.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php" class="btn btn-primary btn-lg"><i class="fas fa-graduation-cap"></i> Enroll Now</a>
        <a href="https://wa.me/2347067595688" class="btn btn-outline btn-lg" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

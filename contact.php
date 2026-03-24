<?php
$page_title       = "Contact Us – Armitech International";
$page_description = "Get in touch with Armitech International for cybersecurity consulting, training enrollment, or any other inquiries. Email or WhatsApp us today.";
include 'includes/header.php';
?>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">

<!-- PAGE HERO -->
<section class="page-hero" aria-labelledby="contact-hero-heading">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span aria-current="page">Contact</span>
    </nav>
    <span class="section-label">Get in Touch</span>
    <h1 class="section-title" id="contact-hero-heading" style="max-width:700px;">
      Let's <span class="text-gradient">Secure</span> Your Future Together
    </h1>
    <p style="color:var(--text-secondary);max-width:560px;line-height:1.85;">
      Whether you have a question, need a custom quote, or want to enroll in a program —
      our team is ready to help. Expect a response within 24 hours.
    </p>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="section-pad" aria-labelledby="contact-form-heading">
  <div class="container">
    <div class="contact-grid">

      <!-- LEFT: INFO -->
      <div>
        <span class="section-label">Our Details</span>
        <h2 class="section-title" id="contact-form-heading" style="font-size:1.8rem;margin-bottom:32px;">
          Reach Out <span class="text-gradient">Directly</span>
        </h2>

        <div class="contact-info-item reveal delay-1">
          <div class="contact-info-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
          <div>
            <div class="contact-info-label">Email Address</div>
            <a href="mailto:armitechinternational@gmail.com" class="contact-info-value">
              armitechinternational@gmail.com
            </a>
          </div>
        </div>

        <div class="contact-info-item reveal delay-2">
          <div class="contact-info-icon"><i class="fab fa-whatsapp" aria-hidden="true"></i></div>
          <div>
            <div class="contact-info-label">WhatsApp / Phone</div>
            <a href="https://wa.me/2347067595688" class="contact-info-value" target="_blank" rel="noopener">
              +234 706 759 5688
            </a>
          </div>
        </div>

        <div class="contact-info-item reveal delay-3">
          <div class="contact-info-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
          <div>
            <div class="contact-info-label">Location</div>
            <div class="contact-info-value">Lagos, Nigeria (West Africa)</div>
          </div>
        </div>

        <div class="contact-info-item reveal delay-4">
          <div class="contact-info-icon"><i class="fas fa-clock" aria-hidden="true"></i></div>
          <div>
            <div class="contact-info-label">Working Hours</div>
            <div class="contact-info-value">Mon – Sat: 9:00 AM – 6:00 PM WAT</div>
          </div>
        </div>

        <!-- Quick WhatsApp -->
        <a href="https://wa.me/2347067595688?text=Hello%20Armitech%20International,%20I%20would%20like%20to%20enquire%20about%20your%20services."
           class="btn btn-primary" style="width:100%;justify-content:center;margin-top:8px;" target="_blank" rel="noopener">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp Now
        </a>

        <!-- Socials -->
        <div style="margin-top:32px;">
          <p style="font-family:var(--font-mono);font-size:0.75rem;color:var(--text-muted);letter-spacing:0.1em;text-transform:uppercase;margin-bottom:16px;">Follow Us</p>
          <div class="social-links">
            <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <!-- RIGHT: FORM -->
      <div class="reveal-right">
        <form class="contact-form" id="contactForm" novalidate aria-labelledby="form-title">
          <h3 id="form-title" style="font-family:var(--font-display);font-size:1.3rem;font-weight:700;color:var(--white);margin-bottom:8px;letter-spacing:0.03em;">
            Send Us a Message
          </h3>
          <p style="color:var(--text-muted);font-size:0.85rem;margin-bottom:28px;font-family:var(--font-mono);">
            // We'll respond within 24 hours
          </p>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="fname">First Name *</label>
              <input type="text" id="fname" name="first_name" class="form-input" placeholder="John" required autocomplete="given-name">
            </div>
            <div class="form-group">
              <label class="form-label" for="lname">Last Name *</label>
              <input type="text" id="lname" name="last_name" class="form-input" placeholder="Doe" required autocomplete="family-name">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="email">Email Address *</label>
            <input type="email" id="email" name="email" class="form-input" placeholder="john@company.com" required autocomplete="email">
          </div>

          <div class="form-group">
            <label class="form-label" for="phone">Phone / WhatsApp</label>
            <input type="tel" id="phone" name="phone" class="form-input" placeholder="+234 XXX XXX XXXX" autocomplete="tel">
          </div>

          <div class="form-group">
            <label class="form-label" for="service">I'm Interested In</label>
            <select id="service" name="service" class="form-select">
              <option value="">– Select a Service –</option>
              <option value="consulting">Cybersecurity Consulting</option>
              <option value="corporate-training">Corporate Training</option>
              <option value="technical-services">Technical Services</option>
              <option value="fundamentals-course">Cybersecurity Fundamentals Course</option>
              <option value="bootcamp">Ethical Hacking Bootcamp</option>
              <option value="mentorship">Mentorship Program</option>
              <option value="enterprise-program">Enterprise Security Program</option>
              <option value="other">Other / General Enquiry</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="company">Organization / Company</label>
            <input type="text" id="company" name="company" class="form-input" placeholder="Your Company (optional)" autocomplete="organization">
          </div>

          <div class="form-group">
            <label class="form-label" for="message">Message *</label>
            <textarea id="message" name="message" class="form-textarea" placeholder="Tell us about your needs, goals, or questions..." required></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;" aria-label="Send message">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>

          <div class="form-message" role="alert" aria-live="polite"></div>

          <p style="font-size:0.78rem;color:var(--text-muted);margin-top:16px;text-align:center;font-family:var(--font-mono);">
            <i class="fas fa-lock"></i> Your data is secure and never shared with third parties.
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- MAP PLACEHOLDER -->
<section style="background:var(--bg-secondary);padding:60px 0;" aria-labelledby="location-heading">
  <div class="container">
    <header class="section-header centered reveal" style="margin-bottom:40px;">
      <span class="section-label">Location</span>
      <h2 class="section-title" id="location-heading" style="font-size:1.8rem;">Serving Africa & <span class="text-gradient">Beyond</span></h2>
    </header>
    <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:16px;height:280px;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:16px;position:relative;overflow:hidden;" class="reveal">
      <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(0,200,255,0.03) 1px, transparent 1px),linear-gradient(90deg,rgba(0,200,255,0.03) 1px, transparent 1px);background-size:40px 40px;" aria-hidden="true"></div>
      <i class="fas fa-map-marker-alt" style="font-size:3rem;color:var(--accent-cyan);position:relative;z-index:1;" aria-hidden="true"></i>
      <div style="text-align:center;position:relative;z-index:1;">
        <div style="font-family:var(--font-display);font-size:1.2rem;font-weight:700;color:var(--white);">Lagos, Nigeria</div>
        <div style="font-family:var(--font-mono);font-size:0.75rem;color:var(--text-muted);margin-top:6px;letter-spacing:0.1em;">SERVING CLIENTS ACROSS AFRICA & GLOBALLY</div>
      </div>
      <a href="https://wa.me/2347067595688" class="btn btn-outline btn-sm" target="_blank" rel="noopener" style="position:relative;z-index:1;">
        <i class="fab fa-whatsapp"></i> Get Directions via WhatsApp
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

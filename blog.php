<?php
$page_title       = "Security Blog – Armitech International";
$page_description = "Cybersecurity insights, threat intelligence, career advice, and industry news from the Armitech International expert team.";
include 'includes/header.php';

$articles = [
  [
    'icon'     => 'fas fa-shield-halved',
    'tag'      => 'Career',
    'date'     => 'March 15, 2026',
    'read'     => '6 min read',
    'title'    => 'Top Cybersecurity Skills in Demand in 2026',
    'excerpt'  => 'The cybersecurity landscape evolves rapidly. We break down the most sought-after skills — from cloud security to AI-driven threat detection — that organizations are urgently hiring for this year. Whether you\'re just starting out or looking to level up, these are the competencies that will set you apart.',
    'main'     => true,
    'author'   => 'Armitech Team',
  ],
  [
    'icon'   => 'fas fa-bug',
    'tag'    => 'Threat Intel',
    'date'   => 'February 28, 2026',
    'read'   => '8 min read',
    'title'  => 'How African Businesses Can Defend Against Ransomware',
    'excerpt'=> 'Ransomware attacks targeting African enterprises surged by 65% in 2025. Here\'s a practical playbook for defending your organization.',
    'main'   => false,
    'author' => 'Armitech Team',
  ],
  [
    'icon'   => 'fas fa-lock',
    'tag'    => 'Best Practices',
    'date'   => 'January 20, 2026',
    'read'   => '5 min read',
    'title'  => 'Zero Trust Architecture: Is Your Company Ready?',
    'excerpt'=> 'Zero Trust is no longer optional. We break down how to implement it for SMEs and enterprises without breaking the bank.',
    'main'   => false,
    'author' => 'Armitech Team',
  ],
  [
    'icon'   => 'fas fa-user-secret',
    'tag'    => 'Ethical Hacking',
    'date'   => 'December 10, 2025',
    'read'   => '7 min read',
    'title'  => 'A Beginner\'s Guide to Ethical Hacking in 2026',
    'excerpt'=> 'Everything you need to know to start your journey in ethical hacking — tools, certifications, labs, and career opportunities.',
    'main'   => false,
    'author' => 'Armitech Team',
  ],
];
$main = $articles[0];
$sidebar = array_slice($articles, 1, 3);
$rest = array_slice($articles, 1);
?>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">

<!-- PAGE HERO -->
<section class="page-hero" aria-labelledby="blog-hero-heading">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-content">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php">Home</a>
      <i class="fas fa-chevron-right" aria-hidden="true"></i>
      <span aria-current="page">Blog</span>
    </nav>
    <span class="section-label">Security Insights</span>
    <h1 class="section-title" id="blog-hero-heading" style="max-width:700px;">
      Cybersecurity <span class="text-gradient">Knowledge Hub</span>
    </h1>
    <p style="color:var(--text-secondary);max-width:580px;line-height:1.85;">
      Expert insights, threat intelligence, and practical guides from the Armitech International team
      to keep you ahead of the evolving threat landscape.
    </p>
  </div>
</section>

<!-- BLOG CONTENT -->
<section class="section-pad" aria-labelledby="blog-heading">
  <div class="container">
    <div class="blog-listing">

      <!-- MAIN ARTICLE -->
      <div>
        <article class="blog-main-card reveal">
          <div class="blog-main-img">
            <i class="<?= $main['icon'] ?> blog-img-icon" aria-hidden="true"></i>
          </div>
          <div class="blog-main-body">
            <span class="blog-tag"><?= htmlspecialchars($main['tag']) ?></span>
            <div class="blog-meta" style="margin-top:12px;">
              <span><i class="fas fa-calendar"></i> <?= $main['date'] ?></span>
              <span><i class="fas fa-clock"></i> <?= $main['read'] ?></span>
              <span><i class="fas fa-user"></i> <?= htmlspecialchars($main['author']) ?></span>
            </div>
            <h2 class="blog-main-title"><?= htmlspecialchars($main['title']) ?></h2>
            <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:24px;"><?= htmlspecialchars($main['excerpt']) ?></p>

            <!-- Article content -->
            <h3 style="font-family:var(--font-display);font-size:1.1rem;font-weight:700;color:var(--white);margin-bottom:12px;">1. Cloud Security Architecture</h3>
            <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
              As organizations accelerate cloud adoption, professionals with deep AWS, Azure, and GCP security knowledge
              are in extremely high demand. Understanding IAM policies, cloud-native security tools, and shared responsibility models
              is now a baseline expectation for mid-senior security roles.
            </p>

            <h3 style="font-family:var(--font-display);font-size:1.1rem;font-weight:700;color:var(--white);margin-bottom:12px;">2. AI-Driven Threat Detection</h3>
            <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
              Security teams are increasingly using machine learning models to detect anomalous behavior at scale.
              Professionals who understand both cybersecurity fundamentals and AI/ML concepts are uniquely positioned
              for high-value roles in security analytics and threat intelligence.
            </p>

            <h3 style="font-family:var(--font-display);font-size:1.1rem;font-weight:700;color:var(--white);margin-bottom:12px;">3. Penetration Testing & Red Teaming</h3>
            <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:20px;">
              Offensive security skills remain among the highest-paid in the industry. Ethical hackers with hands-on
              experience and certifications like CEH, OSCP, or PNPT can command premium salaries and independent consulting rates.
            </p>

            <h3 style="font-family:var(--font-display);font-size:1.1rem;font-weight:700;color:var(--white);margin-bottom:12px;">4. GRC & Compliance</h3>
            <p style="color:var(--text-secondary);line-height:1.85;margin-bottom:28px;">
              Governance, Risk, and Compliance (GRC) roles are growing rapidly as regulations like NDPR, GDPR, and
              new African data protection laws expand. Organizations need professionals who can translate compliance
              requirements into actionable security controls.
            </p>

            <div style="background:rgba(0,200,255,0.05);border:1px solid rgba(0,200,255,0.15);border-radius:10px;padding:24px;margin-bottom:24px;">
              <p style="font-family:var(--font-mono);font-size:0.85rem;color:var(--accent-cyan);margin-bottom:8px;">// ARMITECH TIP</p>
              <p style="color:var(--text-secondary);line-height:1.8;">
                The fastest path to gaining these skills? Combine structured training (like our courses) with hands-on
                lab practice and real-world project experience. Theory without practice is just information — security
                requires skill.
              </p>
            </div>

            <a href="courses.php" class="btn btn-primary"><i class="fas fa-graduation-cap"></i> Start Learning Today</a>
          </div>
        </article>

        <!-- MORE ARTICLES -->
        <h2 class="section-title" style="margin-top:60px;margin-bottom:30px;font-size:1.5rem;">More Articles</h2>
        <div class="blog-grid" style="grid-template-columns:1fr 1fr;">
          <?php foreach($rest as $i => $article): ?>
          <article class="blog-card reveal delay-<?= $i+1 ?>">
            <div class="blog-card-img"><i class="<?= $article['icon'] ?>"></i></div>
            <div class="blog-card-body">
              <span class="blog-tag"><?= htmlspecialchars($article['tag']) ?></span>
              <div class="blog-meta">
                <span><i class="fas fa-calendar"></i> <?= $article['date'] ?></span>
                <span><i class="fas fa-clock"></i> <?= $article['read'] ?></span>
              </div>
              <h3 class="blog-card-title"><?= htmlspecialchars($article['title']) ?></h3>
              <p class="blog-card-excerpt"><?= htmlspecialchars($article['excerpt']) ?></p>
              <a href="#" class="read-more">Read Article <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- SIDEBAR -->
      <aside aria-label="Blog sidebar">
        <!-- Newsletter -->
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:28px;margin-bottom:24px;" class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1.1rem;font-weight:700;color:var(--white);margin-bottom:8px;">Security Newsletter</h3>
          <p style="color:var(--text-secondary);font-size:0.88rem;margin-bottom:20px;line-height:1.7;">Get the latest threats, tips, and Armitech updates delivered weekly.</p>
          <input type="email" class="form-input" placeholder="your@email.com" style="margin-bottom:12px;" aria-label="Email address">
          <button class="btn btn-primary" style="width:100%;justify-content:center;">
            <i class="fas fa-paper-plane"></i> Subscribe
          </button>
        </div>

        <!-- Recent Posts -->
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:28px;margin-bottom:24px;" class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1rem;font-weight:700;color:var(--white);margin-bottom:20px;text-transform:uppercase;letter-spacing:0.08em;">Recent Posts</h3>
          <?php foreach($sidebar as $s): ?>
          <div class="blog-sidebar-card">
            <span class="blog-tag" style="font-size:0.65rem;"><?= htmlspecialchars($s['tag']) ?></span>
            <h4 class="blog-sidebar-title"><?= htmlspecialchars($s['title']) ?></h4>
            <p class="blog-sidebar-date"><i class="fas fa-calendar"></i> <?= $s['date'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Categories -->
        <div style="background:var(--bg-card);border:1px solid var(--border);border-radius:12px;padding:28px;" class="reveal">
          <h3 style="font-family:var(--font-display);font-size:1rem;font-weight:700;color:var(--white);margin-bottom:20px;text-transform:uppercase;letter-spacing:0.08em;">Categories</h3>
          <?php
          $cats = [
            ['Career Tips', 5, '#00c8ff'],
            ['Threat Intelligence', 8, '#ff4444'],
            ['Best Practices', 6, '#00ff88'],
            ['Ethical Hacking', 4, '#ffbd2e'],
            ['Compliance & GRC', 3, '#a855f7'],
          ];
          foreach ($cats as [$cat, $count, $color]):
          ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:10px 0;border-bottom:1px solid var(--border);">
            <a href="#" style="color:var(--text-secondary);font-size:0.9rem;transition:var(--transition);" class="footer-link">
              <i class="fas fa-tag" style="color:<?= $color ?>;"></i> <?= htmlspecialchars($cat) ?>
            </a>
            <span style="background:rgba(255,255,255,0.05);border:1px solid var(--border);border-radius:100px;font-size:0.72rem;color:var(--text-muted);padding:2px 8px;font-family:var(--font-mono);"><?= $count ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </aside>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php
// Get current page for active nav
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Armitech International">
  <meta name="theme-color" content="#000000">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/logo.png">
  <meta property="og:site_name" content="Armitech International">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="apple-touch-icon" href="assets/images/logo.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Exo+2:ital,wght@0,100..900;1,100..900&family=Share+Tech+Mono&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" role="navigation" aria-label="Main navigation">
  <div class="nav-container">
    <a href="index.php" class="nav-logo" aria-label="Armitech International Home">
      <img src="assets/images/logo.png" alt="Armitech International Logo" width="52" height="52">
      <div class="nav-logo-text">
        <span class="nav-logo-name">ARMITECH</span>
        <span class="nav-logo-sub">International</span>
      </div>
    </a>

    <ul class="nav-menu" role="menubar">
      <li role="none"><a href="index.php"    class="nav-link <?= $current_page==='index.php'    ? 'active':'' ?>" role="menuitem">Home</a></li>
      <li role="none"><a href="about.php"    class="nav-link <?= $current_page==='about.php'    ? 'active':'' ?>" role="menuitem">About</a></li>
      <li role="none"><a href="services.php" class="nav-link <?= $current_page==='services.php' ? 'active':'' ?>" role="menuitem">Services</a></li>
      <li role="none"><a href="courses.php"  class="nav-link <?= $current_page==='courses.php'  ? 'active':'' ?>" role="menuitem">Courses</a></li>
      <li role="none"><a href="programs.php" class="nav-link <?= $current_page==='programs.php' ? 'active':'' ?>" role="menuitem">Programs</a></li>
      <li role="none"><a href="blog.php"     class="nav-link <?= $current_page==='blog.php'     ? 'active':'' ?>" role="menuitem">Blog</a></li>
      <li role="none"><a href="contact.php"  class="nav-link nav-cta <?= $current_page==='contact.php' ? 'active':'' ?>" role="menuitem"><i class="fas fa-shield-alt"></i> Contact</a></li>
    </ul>

    <button class="nav-toggle" aria-label="Toggle mobile menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

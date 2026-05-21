<?php
/**
 * Header Include — Workhorse Site Solutions LLC
 * Phase 2: Skip-link, glassmorphism nav, services dropdown, mobile menu
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
$currentPage = $currentPage ?? 'home';
?>

<!-- Skip to Content -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
  <nav class="navbar" aria-label="Main navigation">
    <div class="header-inner container">

      <!-- Logo -->
      <a href="/" class="navbar-logo site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
        <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="<?php echo htmlspecialchars($siteName); ?>" width="280" height="70">
      </a>

      <!-- Desktop Nav Links -->
      <ul class="nav-links">
        <li>
          <a href="/"<?php echo ($currentPage === 'home') ? ' aria-current="page"' : ''; ?>>Home</a>
        </li>
        <li class="nav-dropdown">
          <a href="/services/"<?php echo ($currentPage === 'services') ? ' aria-current="page"' : ''; ?>>Services</a>
          <ul class="nav-dropdown-menu" role="menu" style="display:none">
            <?php foreach ($services as $service): ?>
            <li role="menuitem">
              <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li>
          <a href="/service-area/"<?php echo ($currentPage === 'service-area') ? ' aria-current="page"' : ''; ?>>Service Area</a>
        </li>
        <li>
          <a href="/about/"<?php echo ($currentPage === 'about') ? ' aria-current="page"' : ''; ?>>About</a>
        </li>
        <li>
          <a href="/contact/"<?php echo ($currentPage === 'contact') ? ' aria-current="page"' : ''; ?>>Contact</a>
        </li>
      </ul>

      <!-- Desktop CTA -->
      <div class="header-cta">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-accent btn-sm click-to-call">
          <i data-lucide="phone" style="width:16px;height:16px"></i>
          Call <?php echo htmlspecialchars($phone); ?>
        </a>
        <?php endif; ?>
        <a href="/contact/" class="btn btn-outline-white btn-sm">Free Estimate</a>
      </div>

      <!-- Hamburger Toggle -->
      <button class="hamburger" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

    </div>
  </nav>

  <!-- Mobile Full-Screen Menu -->
  <div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation">
    <a href="/"<?php echo ($currentPage === 'home') ? ' aria-current="page"' : ''; ?>>Home</a>
    <a href="/services/"<?php echo ($currentPage === 'services') ? ' aria-current="page"' : ''; ?>>Services</a>
    <span class="mobile-services-label">Our Services</span>
    <?php foreach ($services as $service): ?>
    <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="mobile-service-link"><?php echo htmlspecialchars($service['name']); ?></a>
    <?php endforeach; ?>
    <a href="/service-area/"<?php echo ($currentPage === 'service-area') ? ' aria-current="page"' : ''; ?>>Service Area</a>
    <a href="/about/"<?php echo ($currentPage === 'about') ? ' aria-current="page"' : ''; ?>>About</a>
    <a href="/contact/"<?php echo ($currentPage === 'contact') ? ' aria-current="page"' : ''; ?>>Contact</a>
    <div class="mobile-cta-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white">
        <i data-lucide="phone" style="width:18px;height:18px"></i> Call Now
      </a>
      <?php endif; ?>
      <a href="/contact/" class="btn btn-accent">Get Free Estimate</a>
    </div>
  </div>
</header>

<main id="main-content">

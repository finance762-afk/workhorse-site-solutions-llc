<?php
/**
 * Footer Include — Workhorse Site Solutions LLC
 * Phase 2: Entity block, legal row, mobile CTA, cookie banner, scripts
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
?>
</main>

<footer class="site-footer">
  <div class="container">

    <!-- Footer Grid -->
    <div class="footer-grid">

      <!-- Column 1: About / Trust -->
      <div class="footer-col">
        <a href="/" class="navbar-logo site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?>">
          <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="<?php echo htmlspecialchars($siteName); ?>" width="200" height="50">
        </a>
        <p style="margin-top:var(--space-4)"><?php echo htmlspecialchars($tagline); ?></p>
        <p>Family-owned and locally-operated, serving the Portland Metro Area with junk removal, excavation, demolition, and site preparation services.</p>
        <div class="footer-trust">
          <span class="trust-badge"><i data-lucide="shield-check"></i> Licensed</span>
          <span class="trust-badge"><i data-lucide="badge-check"></i> Bonded</span>
          <span class="trust-badge"><i data-lucide="shield"></i> Insured</span>
          <span class="trust-badge"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
        </div>
      </div>

      <!-- Column 2: Services -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <?php
          $halfCount = ceil(count($services) / 2);
          $firstHalf = array_slice($services, 0, $halfCount);
          foreach ($firstHalf as $service): ?>
          <li><a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Column 3: More Services / Areas -->
      <div class="footer-col">
        <h4>More Services</h4>
        <ul>
          <?php
          $secondHalf = array_slice($services, $halfCount);
          foreach ($secondHalf as $service): ?>
          <li><a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
          <?php endforeach; ?>
        </ul>
        <h4 style="margin-top:var(--space-6)">Service Areas</h4>
        <ul>
          <li><a href="/service-area/">Damascus &amp; Portland Metro</a></li>
        </ul>
      </div>

      <!-- Column 4: Contact -->
      <div class="footer-col">
        <h4>Contact Us</h4>
        <?php if (!empty($phone)): ?>
        <div class="contact-item">
          <i data-lucide="phone"></i>
          <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars($phone); ?></a>
        </div>
        <?php endif; ?>
        <?php if (!empty($email)): ?>
        <div class="contact-item">
          <i data-lucide="mail"></i>
          <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
        </div>
        <?php endif; ?>
        <div class="contact-item">
          <i data-lucide="map-pin"></i>
          <span><?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
        </div>
        <div class="contact-item">
          <i data-lucide="clock"></i>
          <span>Mon–Sat: 7:00 AM – 6:00 PM</span>
        </div>
        <a href="/contact/" class="btn btn-accent btn-sm" style="margin-top:var(--space-4)">Get Free Estimate</a>

        <!-- Social Links -->
        <?php if (!empty($socialLinks['facebook']) || !empty($socialLinks['instagram']) || !empty($socialLinks['google'])): ?>
        <div style="display:flex;gap:var(--space-3);margin-top:var(--space-4)">
          <?php if (!empty($socialLinks['facebook'])): ?>
          <a href="<?php echo htmlspecialchars($socialLinks['facebook']); ?>" target="_blank" rel="noopener" aria-label="Facebook"><i data-lucide="facebook"></i></a>
          <?php endif; ?>
          <?php if (!empty($socialLinks['instagram'])): ?>
          <a href="<?php echo htmlspecialchars($socialLinks['instagram']); ?>" target="_blank" rel="noopener" aria-label="Instagram"><i data-lucide="instagram"></i></a>
          <?php endif; ?>
          <?php if (!empty($socialLinks['google'])): ?>
          <a href="<?php echo htmlspecialchars($socialLinks['google']); ?>" target="_blank" rel="noopener" aria-label="Google Business"><i data-lucide="star"></i></a>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- AEO Entity Block -->
    <div class="footer-entity" itemscope itemtype="https://schema.org/GeneralContractor">
      <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
      <meta itemprop="url" content="<?php echo $siteUrl; ?>">
      <?php if (!empty($phone)): ?>
      <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
      <?php endif; ?>
      <h4>About <?php echo htmlspecialchars($siteName); ?></h4>
      <p><?php echo htmlspecialchars($siteName); ?> is a licensed, bonded, and insured general contractor based in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>, serving the Portland Metro Area for <?php echo $yearsInBusiness; ?>+ years. We specialize in junk removal, excavation, demolition, land clearing, site preparation, grading, trenching, fence installation, deck and patio construction, driveway services, general contracting, and commercial and residential cleanup. <?php echo htmlspecialchars($siteName); ?> is a family-owned business committed to delivering reliable, professional results for residential, commercial, and construction clients throughout Damascus, Gresham, Happy Valley, Sandy, Boring, and Clackamas, Oregon.</p>
    </div>

    <!-- Footer Legal Row -->
    <div class="footer-legal-row">
      <a href="/privacy-policy/">Privacy Policy</a>
      <span class="divider">|</span>
      <a href="/terms/">Terms of Service</a>
      <span class="divider">|</span>
      <a href="/cookie-policy/">Cookie Policy</a>
      <span class="divider">|</span>
      <a href="/accessibility/">Accessibility</a>
      <span class="divider">|</span>
      <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
      <span class="divider">|</span>
      <a href="/sitemap.xml">Sitemap</a>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($companyLegal); ?>. All rights reserved.</p>
      <p class="footer-credit">
        <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a>
      </p>
    </div>

  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" aria-label="Back to top">
  <i data-lucide="chevron-up"></i>
</button>

<!-- Mobile Floating CTA Bar -->
<div class="mobile-cta-bar" aria-label="Quick contact options">
  <div class="mobile-cta-bar-inner container">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-accent">
      <i data-lucide="phone" style="width:18px;height:18px"></i> Call Now
    </a>
    <?php endif; ?>
    <a href="/contact/" class="btn btn-outline-white">
      <i data-lucide="file-text" style="width:18px;height:18px"></i> Free Estimate
    </a>
  </div>
</div>

<!-- Cookie Banner -->
<div class="cookie-banner" id="cookie-banner" style="display:none">
  <p>We use cookies to improve your experience. By continuing, you agree to our <a href="/cookie-policy/">Cookie Policy</a>.</p>
  <button class="cookie-banner__dismiss" id="cookie-dismiss">Got it</button>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>document.addEventListener('DOMContentLoaded',function(){if(window.lucide){lucide.createIcons();}});</script>
<script src="/assets/js/main.js?v=<?php echo $cssVersion ?? '6'; ?>" defer></script>
<script src="/assets/js/animations.js?v=<?php echo $cssVersion ?? '6'; ?>" defer></script>
<script src="/assets/js/effects.js?v=<?php echo $cssVersion ?? '6'; ?>" defer></script>

<!-- Cookie Banner Dismissal + Back to Top -->
<script>
(function() {
  // Cookie banner
  var banner = document.getElementById('cookie-banner');
  var dismiss = document.getElementById('cookie-dismiss');
  if (banner && !localStorage.getItem('cookie_consent_dismissed')) {
    banner.style.display = 'flex';
  }
  if (dismiss) {
    dismiss.addEventListener('click', function() {
      banner.style.display = 'none';
      localStorage.setItem('cookie_consent_dismissed', '1');
    });
  }

  // Back to top
  var btt = document.querySelector('.back-to-top');
  if (btt) {
    window.addEventListener('scroll', function() {
      btt.classList.toggle('visible', window.scrollY > 600);
    });
    btt.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Mobile menu toggle
  var hamburger = document.querySelector('.hamburger');
  var mobileMenu = document.querySelector('.mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function() {
      var isOpen = mobileMenu.classList.toggle('active');
      hamburger.classList.toggle('active');
      hamburger.setAttribute('aria-expanded', isOpen.toString());
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });
    mobileMenu.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });
  }

  // Reveal system (IntersectionObserver)
  var reveals = document.querySelectorAll('.reveal-up, .reveal-down, .reveal-left, .reveal-right, .reveal-scale');
  if (reveals.length > 0 && 'IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function(el) { revealObserver.observe(el); });
  }
})();
</script>
</body>
</html>

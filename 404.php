<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Page Not Found | ' . $siteName;
$pageDescription = 'The page you were looking for could not be found. Browse our services or contact Workhorse Site Solutions in Damascus, OR.';
$canonicalUrl    = $siteUrl . '/404';
$currentPage     = '404';
$noindex         = true;
$cssVersion      = '6';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
.error-page {
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-10)) var(--space-6) var(--space-10);
  background: var(--color-light);
}
.error-code {
  font-family: var(--font-heading);
  font-size: clamp(6rem, 15vw, 12rem);
  font-weight: 900;
  line-height: 1;
  color: var(--color-accent);
  opacity: 0.15;
  margin-bottom: var(--space-4);
}
.error-page h1 {
  font-size: var(--font-size-3xl);
  margin-bottom: var(--space-3);
}
.error-page p {
  color: var(--color-gray);
  max-width: 480px;
  margin: 0 auto var(--space-6);
  line-height: 1.7;
}
.error-links {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
  margin-top: var(--space-6);
}
.error-link-card {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4) var(--space-5);
  background: var(--color-white);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  text-decoration: none;
  color: var(--color-dark);
  font-weight: 600;
  font-size: var(--font-size-sm);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.error-link-card:hover {
  border-color: var(--color-accent);
  box-shadow: var(--shadow-sm);
}
.error-link-card i,
.error-link-card svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
}
</style>

<section class="error-page" aria-label="Page not found">
  <div>
    <div class="error-code">404</div>
    <h1>This Page Doesn't Exist</h1>
    <p>The page you're looking for may have been moved, removed, or never existed. Here are some places to start instead.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/" class="btn btn-accent">Back to Homepage</a>
      <a href="/contact/" class="btn btn-secondary">Contact Us</a>
    </div>

    <div class="error-links">
      <a href="/services/" class="error-link-card"><i data-lucide="wrench"></i> All Services</a>
      <a href="/services/junk-removal-cleanouts/" class="error-link-card"><i data-lucide="trash-2"></i> Junk Removal</a>
      <a href="/services/excavation-services/" class="error-link-card"><i data-lucide="hard-hat"></i> Excavation</a>
      <a href="/services/demolition/" class="error-link-card"><i data-lucide="hammer"></i> Demolition</a>
      <a href="/about/" class="error-link-card"><i data-lucide="users"></i> About Us</a>
      <a href="/faq/" class="error-link-card"><i data-lucide="help-circle"></i> FAQ</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

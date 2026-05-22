<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Thank You | ' . $siteName;
$pageDescription = 'Your message has been received. Workhorse Site Solutions will respond within 24 hours.';
$canonicalUrl    = $siteUrl . '/thank-you';
$currentPage     = 'thank-you';
$noindex         = true;
$cssVersion      = '6';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
.thankyou-page {
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-10)) var(--space-6) var(--space-10);
  background: var(--color-light);
}
.thankyou-icon {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-6);
  box-shadow: 0 8px 30px rgba(227, 70, 2, 0.25);
}
.thankyou-icon i,
.thankyou-icon svg { width: 36px; height: 36px; }
.thankyou-page h1 {
  font-size: var(--font-size-3xl);
  margin-bottom: var(--space-3);
}
.thankyou-page p {
  color: var(--color-gray);
  max-width: 520px;
  margin: 0 auto var(--space-4);
  line-height: 1.7;
}
.next-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  max-width: 420px;
  margin: var(--space-6) auto;
  text-align: left;
}
.next-step {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-3) var(--space-4);
  background: var(--color-white);
  border-radius: var(--radius-md);
  border: 1px solid var(--color-border);
  font-size: var(--font-size-sm);
  color: var(--color-text);
}
.next-step-num {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: var(--font-size-xs);
  flex-shrink: 0;
}
</style>

<section class="thankyou-page" aria-label="Thank you">
  <div>
    <div class="thankyou-icon"><i data-lucide="check"></i></div>
    <h1>Message Received</h1>
    <p>Thank you for reaching out to <?php echo htmlspecialchars($siteName); ?>. We've got your information and will be in touch shortly.</p>

    <div class="next-steps">
      <div class="next-step">
        <span class="next-step-num">1</span>
        We review your project details and prepare an estimate
      </div>
      <div class="next-step">
        <span class="next-step-num">2</span>
        We'll call or email you within 24 hours — usually the same day
      </div>
      <div class="next-step">
        <span class="next-step-num">3</span>
        We schedule a free on-site walkthrough at your convenience
      </div>
    </div>

    <p>Need to talk sooner?</p>
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-accent btn-lg">
      <i data-lucide="phone" style="width:18px;height:18px"></i> Call <?php echo formatPhone($phone); ?>
    </a>
    <?php endif; ?>
    <div style="margin-top:var(--space-6);">
      <a href="/" class="btn btn-secondary">Back to Homepage</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

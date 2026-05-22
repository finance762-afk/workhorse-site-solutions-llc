<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$companyName       = $siteName;
$companyEntityType = 'Limited Liability Company';
$companyState      = 'Oregon';
$companyEmail      = $contactEmail ?: $email;
$companyPhone      = $phone;
$companyAddress    = trim($address['street'] . ' ' . $address['city'] . ', ' . $address['state'] . ' ' . $address['zip']);
$lastUpdated       = 'May 21, 2026';

$pageTitle       = 'Terms of Service | ' . $siteName;
$pageDescription = 'Terms of Service for ' . $siteName . ' — terms governing your use of our website and services.';
$canonicalUrl    = $siteUrl . '/terms/';
$currentPage     = 'legal';
$cssVersion      = '7';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Terms of Service",
  "url": "<?php echo $siteUrl; ?>/terms/",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($companyName); ?>"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "<?php echo $siteUrl; ?>/" },
      { "@type": "ListItem", "position": 2, "name": "Terms of Service", "item": "<?php echo $siteUrl; ?>/terms/" }
    ]
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
.legal-hero {
  position: relative;
  min-height: 40vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-8)) var(--space-6) var(--space-8);
  background: var(--color-primary);
  overflow: hidden;
}
.legal-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  opacity: 0.5;
}
.legal-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.legal-hero > * { position: relative; z-index: 2; }
.legal-hero h1 { color: var(--color-white); margin: 0; }

.legal-content { padding: var(--space-10) var(--space-6); }
.content-narrow { max-width: 65ch; margin: 0 auto; }
.legal-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-bottom: var(--space-8);
  padding-bottom: var(--space-4);
  border-bottom: 1px solid var(--color-border);
}
.legal-content h2 {
  font-size: var(--font-size-xl);
  margin-top: var(--space-8);
  margin-bottom: var(--space-3);
  color: var(--color-dark);
}
.legal-content p {
  font-size: var(--font-size-base);
  line-height: 1.8;
  color: var(--color-text);
  margin-bottom: var(--space-4);
}
.legal-content ul {
  margin-bottom: var(--space-4);
  padding-left: var(--space-6);
}
.legal-content ul li {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin-bottom: var(--space-2);
}
.legal-content a { color: var(--color-accent); text-decoration: underline; }
</style>

<section class="legal-hero">
  <div class="container">
    <h1>Terms of Service</h1>
  </div>
</section>

<section class="legal-content">
  <div class="content-narrow">
    <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

    <h2>Acceptance of Terms</h2>
    <p>These Terms of Service ("Terms") constitute a legally binding agreement between you ("you" or "user") and <?php echo htmlspecialchars($companyName); ?>, a <?php echo htmlspecialchars($companyEntityType); ?> formed in the State of <?php echo htmlspecialchars($companyState); ?> ("Company," "we," "us," or "our"). By accessing or using our website, you agree to be bound by these Terms. If you do not agree, do not use our website.</p>

    <h2>Description of Services</h2>
    <p><?php echo htmlspecialchars($companyName); ?> provides professional services as described on this website. The specific services available, service areas, and pricing are subject to change without notice. Descriptions of services on this website are for informational purposes and do not constitute a binding offer.</p>

    <h2>Use of This Website</h2>
    <p>You agree to use this website only for lawful purposes. You may not:</p>
    <ul>
      <li>Use the website in any way that violates applicable federal, state, or local laws</li>
      <li>Attempt to gain unauthorized access to any portion of the website or its systems</li>
      <li>Use automated tools to scrape, crawl, or extract data from the website without written permission</li>
      <li>Transmit any material that is defamatory, obscene, threatening, or that constitutes harassment</li>
      <li>Interfere with or disrupt the website's infrastructure or other users' access</li>
    </ul>

    <h2>Intellectual Property</h2>
    <p>All content on this website — including text, graphics, logos, images, photographs, and software — is the property of <?php echo htmlspecialchars($companyName); ?> or its content suppliers and is protected by United States and international copyright, trademark, and other intellectual property laws. You may not reproduce, distribute, modify, or create derivative works from any content without our prior written consent.</p>

    <h2>User Submissions</h2>
    <p>When you submit information through our contact forms, request-a-quote forms, or review platforms, you represent that:</p>
    <ul>
      <li>The information you provide is accurate and complete</li>
      <li>You have the right to submit the information</li>
      <li>Your submission does not violate any third-party rights</li>
    </ul>
    <p>By submitting content, you grant <?php echo htmlspecialchars($companyName); ?> a non-exclusive, royalty-free, perpetual license to use, display, and reproduce such content in connection with our business operations, including marketing and testimonials.</p>

    <h2>Estimates and Pricing</h2>
    <p>Any estimates, quotes, or pricing information provided through this website or in response to inquiries are for informational purposes only and do not constitute binding offers. Final pricing is determined after a site assessment, inspection, or detailed consultation and may differ from initial estimates based on actual conditions, scope of work, materials required, and other factors.</p>

    <h2>Service Disclaimers</h2>
    <p>This website and all services are provided on an "AS IS" and "AS AVAILABLE" basis without warranties of any kind, either express or implied, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We do not warrant that the website will be uninterrupted, error-free, or free of viruses or other harmful components.</p>

    <h2>Limitation of Liability</h2>
    <p>To the fullest extent permitted by applicable law, <?php echo htmlspecialchars($companyName); ?> shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or use, arising out of or in connection with your use of this website or our services. Our total liability for any claim arising out of or relating to these Terms or our services shall not exceed the total amount you have paid to us in the twelve (12) months preceding the claim. Some states do not allow the exclusion or limitation of certain damages, so the above limitations may not apply to you.</p>

    <h2>Indemnification</h2>
    <p>You agree to indemnify, defend, and hold harmless <?php echo htmlspecialchars($companyName); ?>, its officers, directors, employees, agents, and affiliates from and against any claims, liabilities, damages, judgments, awards, losses, costs, or expenses (including reasonable attorneys' fees) arising out of or relating to your violation of these Terms or your use of the website.</p>

    <h2>Governing Law</h2>
    <p>These Terms are governed by the laws of the State of <?php echo htmlspecialchars($companyState); ?>, without regard to conflict of laws principles. Any dispute arising out of or relating to these Terms shall be resolved in the state or federal courts located in <?php echo htmlspecialchars($companyState); ?>.</p>

    <h2>Changes to These Terms</h2>
    <p>We reserve the right to update or modify these Terms at any time. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of the website after changes constitutes acceptance of the revised Terms.</p>

    <h2>Severability</h2>
    <p>If any provision of these Terms is held to be invalid or unenforceable, the remaining provisions shall continue in full force and effect.</p>

    <h2>Entire Agreement</h2>
    <p>These Terms, together with our Privacy Policy and Cookie Policy, constitute the entire agreement between you and <?php echo htmlspecialchars($companyName); ?> regarding your use of this website.</p>

    <h2>Contact Us</h2>
    <p>If you have questions about these Terms of Service, contact us:</p>
    <ul>
      <li><strong><?php echo htmlspecialchars($companyName); ?></strong></li>
      <?php if (!empty($companyEmail)): ?><li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li><?php endif; ?>
      <?php if (!empty($companyPhone)): ?><li>Phone: <a href="tel:<?php echo htmlspecialchars($companyPhone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li><?php endif; ?>
      <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
    </ul>

    <p style="margin-top:var(--space-8);font-size:var(--font-size-xs);color:var(--color-gray);font-style:italic;">This Terms of Service is provided as a general template. We recommend reviewing this document with a licensed Oregon attorney before publication.</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

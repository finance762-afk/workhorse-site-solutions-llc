<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Contact Workhorse Site Solutions | Free Estimates in Damascus, OR';
$pageDescription = 'Request a free estimate from Workhorse Site Solutions in Damascus, OR. Call or fill out our form for junk removal, excavation, demolition, land clearing, and site work across the Portland Metro Area.';
$canonicalUrl    = $siteUrl . '/contact/';
$currentPage     = 'contact';
$cssVersion      = '7';

/* ── Schema ──────────────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Contact', 'url' => '/contact/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     CONTACT PAGE — Workhorse Site Solutions LLC
     Phase 5 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Contact Hero ────────────────────────────────────────── */
.hero--contact {
  position: relative;
  min-height: 45vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-10)) var(--space-6) var(--space-10);
  background: var(--color-primary);
  overflow: hidden;
}
.hero--contact::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  opacity: 0.6;
}
.hero--contact::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--contact > * { position: relative; z-index: 2; }
.hero--contact h1 { color: var(--color-white); margin-bottom: var(--space-3); text-wrap: balance; }
.hero--contact p {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  max-width: 560px;
  margin: 0 auto;
}

/* ── Contact Layout ──────────────────────────────────────── */
.contact-grid {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: var(--space-10);
  align-items: start;
}

/* ── Contact Form ────────────────────────────────────────── */
.contact-form-wrap {
  background: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  box-shadow: var(--shadow-lg);
  border: 1px solid var(--color-border);
}
.contact-form-wrap h2 {
  margin-bottom: var(--space-2);
}
.contact-form-wrap .form-subtitle {
  color: var(--color-gray);
  margin-bottom: var(--space-6);
  font-size: var(--font-size-sm);
}
.contact-form .form-row { margin-bottom: var(--space-4); }
.contact-form label {
  display: block;
  font-size: var(--font-size-sm);
  font-weight: 600;
  margin-bottom: var(--space-1);
  color: var(--color-dark);
}
.contact-form input,
.contact-form select,
.contact-form textarea {
  width: 100%;
  padding: var(--space-3) var(--space-4);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-dark);
  background: var(--color-light);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
  outline: none;
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(227, 70, 2, 0.12);
}
.contact-form textarea { resize: vertical; min-height: 120px; }

/* ── Consent Fieldset ────────────────────────────────────── */
.form-consent-fieldset {
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  padding: var(--space-5);
  margin: var(--space-6) 0;
  background: var(--color-light);
}
.form-consent-legend {
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-dark);
  padding: 0 var(--space-2);
}
.form-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-3) 0;
  border-bottom: 1px solid var(--color-border);
  cursor: pointer;
  font-weight: 400;
  margin: 0;
}
.form-consent-item:last-child { border-bottom: none; }
.consent-checkbox {
  width: 18px;
  height: 18px;
  flex-shrink: 0;
  margin-top: 2px;
  accent-color: var(--color-accent);
  cursor: pointer;
}
.consent-label {
  font-size: var(--font-size-xs);
  line-height: 1.55;
  color: var(--color-gray);
}
.consent-label strong { color: var(--color-dark); }
.consent-label a { color: var(--color-accent); text-decoration: underline; }
.required-star { color: var(--color-accent); font-weight: 700; }
.form-consent-required { background: rgba(227, 70, 2, 0.04); border-radius: var(--radius-sm); padding: var(--space-3); }

/* ── Contact Info Sidebar ────────────────────────────────── */
.contact-info-card {
  padding: var(--space-6);
  border-radius: var(--radius-xl);
  border: 1px solid var(--color-border);
  background: var(--color-light);
}
.contact-info-card h3 {
  margin-bottom: var(--space-5);
  font-size: var(--font-size-xl);
}
.contact-detail {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-4) 0;
  border-bottom: 1px solid var(--color-border);
}
.contact-detail:last-of-type { border-bottom: none; }
.contact-detail-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.contact-detail-icon i,
.contact-detail-icon svg { width: 18px; height: 18px; }
.contact-detail h4 {
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-1);
}
.contact-detail p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
  line-height: 1.5;
}
.contact-detail a { color: var(--color-accent); font-weight: 600; }

/* ── Map Placeholder ─────────────────────────────────────── */
.map-wrap {
  margin-top: var(--space-6);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid var(--color-border);
  aspect-ratio: 16 / 9;
  background: var(--color-light);
}
.map-wrap iframe {
  width: 100%;
  height: 100%;
  border: 0;
  display: block;
}

/* ── CTA Section ─────────────────────────────────────────── */
.contact-cta {
  background: var(--color-dark);
  text-align: center;
}
.contact-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.contact-cta p {
  color: rgba(255,255,255,0.8);
  max-width: 550px;
  margin: 0 auto var(--space-6);
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 960px) {
  .contact-grid { grid-template-columns: 1fr; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     HERO — Contact
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--contact">
  <div>
    <h1>Get Your <span class="text-accent">Free Estimate</span></h1>
    <p>Tell us about your project and we'll get back to you the same day with an honest quote. No obligation, no pressure.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     CONTACT FORM + INFO
     ═══════════════════════════════════════════════════════ -->
<section class="section" aria-label="Contact form and business information">
  <div class="container">
    <div class="contact-grid">

      <!-- Contact Form -->
      <div class="contact-form-wrap reveal-up">
        <h2>Send Us a <span class="text-accent">Message</span></h2>
        <p class="form-subtitle">Fill out the form below and we'll respond within 24 hours — usually much sooner.</p>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="contact-form">
          <!-- Honeypot -->
          <input type="text" name="_honeypot" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <!-- Hidden Fields -->
          <input type="hidden" name="_next" value="/thank-you">
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="form-row">
            <label for="contact-name">Your Name</label>
            <input type="text" id="contact-name" name="name" placeholder="Full name" required>
          </div>

          <div class="form-row">
            <label for="contact-phone">Phone Number</label>
            <input type="tel" id="contact-phone" name="phone" placeholder="(503) 555-1234" required>
          </div>

          <div class="form-row">
            <label for="contact-email">Email Address</label>
            <input type="email" id="contact-email" name="email" placeholder="you@email.com" required>
          </div>

          <div class="form-row">
            <label for="contact-service">Service Needed</label>
            <select id="contact-service" name="service">
              <option value="">Select a service</option>
              <?php foreach ($services as $s): ?>
              <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-row">
            <label for="contact-message">Tell Us About Your Project</label>
            <textarea id="contact-message" name="message" rows="5" placeholder="Describe your project — location, scope, timeline, anything helpful."></textarea>
          </div>

          <!-- ═══ SEPARATE CONSENT CHECKBOXES (TCPA 2025/2026 + Texas TCPA) ═══ -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?php echo htmlspecialchars($siteName); ?> about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email<?php if (!empty($contactEmail)): ?> or by emailing <?php echo htmlspecialchars($contactEmail); ?><?php endif; ?>. Message frequency varies.
              </span>
            </label>

            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?php echo htmlspecialchars($siteName); ?> at the phone number I provided. Message types may include appointment reminders, service updates, and promotional offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a>
                and
                <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
              </span>
            </label>
          </fieldset>

          <button type="submit" class="btn btn-accent btn-lg" style="width:100%;justify-content:center;">Send Message</button>
        </form>
      </div>

      <!-- Contact Info Sidebar -->
      <div>
        <div class="contact-info-card reveal-right">
          <h3>Contact <span class="text-accent">Info</span></h3>

          <?php if (!empty($phone)): ?>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i data-lucide="phone"></i></div>
            <div>
              <h4>Phone</h4>
              <p><a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo formatPhone($phone); ?></a></p>
            </div>
          </div>
          <?php endif; ?>

          <?php if (!empty($email)): ?>
          <div class="contact-detail">
            <div class="contact-detail-icon"><i data-lucide="mail"></i></div>
            <div>
              <h4>Email</h4>
              <p><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
            </div>
          </div>
          <?php endif; ?>

          <div class="contact-detail">
            <div class="contact-detail-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h4>Location</h4>
              <p><?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></p>
              <p>Serving the Portland Metro Area within a 50-mile radius</p>
            </div>
          </div>

          <div class="contact-detail">
            <div class="contact-detail-icon"><i data-lucide="clock"></i></div>
            <div>
              <h4>Business Hours</h4>
              <p>Monday – Saturday: 7:00 AM – 6:00 PM</p>
              <p>Sunday: Closed</p>
            </div>
          </div>

          <div class="contact-detail">
            <div class="contact-detail-icon"><i data-lucide="zap"></i></div>
            <div>
              <h4>Response Time</h4>
              <p>Same-day response on all estimates. Emergency scheduling available.</p>
            </div>
          </div>
        </div>

        <!-- Map -->
        <div class="map-wrap reveal-up" style="margin-top:var(--space-6);">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44917.04!2d-122.458!3d45.417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495a3f8d9e7d0f3%3A0x3b2b9e7c7d5e3f2a!2sDamascus%2C%20OR%2097089!5e0!3m2!1sen!2sus!4v1"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Map of Damascus, OR service area"></iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════ -->
<section class="contact-cta section" aria-label="Call to action">
  <div class="container">
    <h2>Prefer to Talk? Call Us Directly</h2>
    <p>We pick up the phone. If you'd rather talk through your project live, give us a call during business hours and we'll walk through options together.</p>
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-accent btn-lg">
      <i data-lucide="phone" style="width:18px;height:18px"></i> Call <?php echo formatPhone($phone); ?>
    </a>
    <?php else: ?>
    <a href="/contact/" class="btn btn-accent btn-lg">Request a Callback</a>
    <?php endif; ?>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

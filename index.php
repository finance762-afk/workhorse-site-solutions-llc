<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Workhorse Site Solutions | Junk Removal, Excavation & Site Work in Damascus, OR';
$pageDescription = 'Workhorse Site Solutions provides junk removal, excavation, demolition, land clearing, grading, and site preparation in Damascus, OR and the Portland Metro Area. Licensed, bonded, insured. Free estimates.';
$canonicalUrl    = $siteUrl . '/';
$currentPage     = 'home';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396299803-tx16dq-481656131_605127309177923_4080066704641508745_n.jpg';
$heroPreloadImage = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396299803-tx16dq-481656131_605127309177923_4080066704641508745_n.jpg';
$heroImagePreload = $heroPreloadImage;
$cssVersion      = '2';

/* ── Photo Library (curated from client assets) ──────────── */
$photoLibrary = [
    'hero'       => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396299803-tx16dq-481656131_605127309177923_4080066704641508745_n.jpg',
    'about'      => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396305026-gall8t-481679864_606598672364120_4541778524350946207_n.jpg',
    'junk'       => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg',
    'excavation' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396273035-84csrf-481103535_608058122218175_6060079720789259957_n.jpg',
    'demolition' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg',
    'clearing'   => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396313562-xq2js1-481701393_605954449095209_2349548257896328613_n.jpg',
    'tree'       => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396318170-psrogl-481705784_605960762427911_845944733817866550_n.jpg',
    'grading'    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396323298-kfnmea-481764174_605959765761344_5422074130262060362_n.jpg',
    'trenching'  => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396334785-q74t8c-481770500_605969619093692_3211402394288864358_n.jpg',
    'fence'      => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396339937-xc7wc2-481770700_605954432428544_6388616634957804134_n.jpg',
    'cta'        => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396345329-4xwqvr-481781508_604897055867615_8724621068892141888_n.jpg',
];

/* ── Service Card Image Map ──────────────────────────────── */
$serviceImages = [
    'junk-removal-cleanouts'        => $photoLibrary['junk'],
    'excavation-services'           => $photoLibrary['excavation'],
    'demolition'                    => $photoLibrary['demolition'],
    'land-clearing'                 => $photoLibrary['clearing'],
    'tree-services'                 => $photoLibrary['tree'],
    'site-preparation-grading'      => $photoLibrary['grading'],
    'trenching'                     => $photoLibrary['trenching'],
    'fence-installation'            => $photoLibrary['fence'],
    'deck-patio-construction'       => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396350225-vjqwww-481782847_604444459246208_4830443631052873384_n.jpg',
    'driveway-services'             => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396355425-qis7fl-481783972_604904149200239_7919437156192045435_n.jpg',
    'general-contracting'           => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396363449-wyzf8f-481785958_604894925867828_2034594633166557511_n.jpg',
    'commercial-residential-cleanup'=> 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396375954-kc1dx4-481899092_608065538884100_6123232012629192040_n.jpg',
];

/* ── Service Card Lucide Icons ───────────────────────────── */
$serviceIcons = [
    'junk-removal-cleanouts'         => 'trash-2',
    'excavation-services'            => 'hard-hat',
    'demolition'                     => 'hammer',
    'land-clearing'                  => 'tree-pine',
    'tree-services'                  => 'axe',
    'site-preparation-grading'       => 'ruler',
    'trenching'                      => 'shovel',
    'fence-installation'             => 'fence',
    'deck-patio-construction'        => 'home',
    'driveway-services'              => 'truck',
    'general-contracting'            => 'wrench',
    'commercial-residential-cleanup' => 'sparkles',
];

/* ── Service Card Bullets ────────────────────────────────── */
$serviceBullets = [
    'junk-removal-cleanouts'         => ['Same-day pickup available', 'Residential and commercial', 'Responsible disposal and recycling'],
    'excavation-services'            => ['Foundation and utility digs', 'Heavy equipment on-site', 'Residential and commercial scope'],
    'demolition'                     => ['Interior and full-structure', 'Debris hauling included', 'Licensed and insured crews'],
    'land-clearing'                  => ['Trees, stumps, and brush', 'Lot prep for development', 'Grading-ready finish'],
    'tree-services'                  => ['Hazardous tree removal', 'Trimming and pruning', 'Stump grinding included'],
    'site-preparation-grading'       => ['Cut-and-fill grading', 'Drainage and slope work', 'Build-ready site finish'],
    'trenching'                      => ['Utility and drainage lines', 'Precision depth control', 'Backfill and compaction'],
    'fence-installation'             => ['Wood, vinyl, and chain-link', 'Post-hole and rail setting', 'Property line compliance'],
    'deck-patio-construction'        => ['Custom deck framing', 'Covered patio options', 'Composite and wood builds'],
    'driveway-services'              => ['Gravel and base installation', 'Grading and drainage', 'Residential and commercial'],
    'general-contracting'            => ['Project management start-to-finish', 'Permit coordination', 'Multi-trade oversight'],
    'commercial-residential-cleanup' => ['Post-construction debris', 'Property cleanout service', 'Bulk material hauling'],
];

/* ── FAQs ────────────────────────────────────────────────── */
$faqs = [
    [
        'question' => 'How much does junk removal cost in Damascus, OR?',
        'answer'   => 'Most residential junk removal jobs in the Damascus area range from $150 to $600, depending on volume and item type. We provide free on-site estimates so you know the exact cost before we load a single item. No hidden fees, no surprises.',
    ],
    [
        'question' => 'Do you handle demolition permits in Clackamas County?',
        'answer'   => 'Yes. We coordinate with Clackamas County permitting for structural demolition projects. Our team handles the paperwork, scheduling, and inspections so you can focus on the rebuild. Permit timelines typically run 2-4 weeks.',
    ],
    [
        'question' => 'What areas does Workhorse Site Solutions serve?',
        'answer'   => 'We serve Damascus, Gresham, Happy Valley, Sandy, Boring, Clackamas, and the greater Portland Metro Area within a 50-mile radius. Most of our work happens in eastern Clackamas and Multnomah counties.',
    ],
    [
        'question' => 'Can you clear land for a new home build near Damascus?',
        'answer'   => 'Absolutely. Land clearing for residential construction is one of our core services. We remove trees, stumps, brush, and debris, then grade the lot to your builder\'s specifications. We handle everything from rural acreage to tight suburban lots.',
    ],
    [
        'question' => 'How fast can you start an excavation project?',
        'answer'   => 'For most excavation jobs, we can schedule a site visit within 48 hours and begin work within 1-2 weeks of estimate approval. Emergency and priority scheduling is available for time-sensitive construction projects.',
    ],
    [
        'question' => 'Are you licensed, bonded, and insured in Oregon?',
        'answer'   => 'Yes. Workhorse Site Solutions is fully licensed, bonded, and insured to operate in the state of Oregon. We carry general liability and workers\' compensation coverage on every project, protecting both our crew and your property.',
    ],
];

/* ── Schema Markup ───────────────────────────────────────── */
$schemaMarkup = generateFAQSchema($faqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     HOMEPAGE — Workhorse Site Solutions LLC
     Phase 3 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Hero Split Layout ─────────────────────────────────── */
.hero--home {
  position: relative;
  min-height: 100vh;
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  align-items: center;
  gap: var(--space-8);
  padding: calc(var(--nav-height) + var(--space-8)) var(--space-8) var(--space-8);
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.hero--home::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(0,0,0,0.92) 0%, rgba(0,0,0,0.78) 40%, rgba(77,94,111,0.65) 100%);
  z-index: 1;
}
.hero--home::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--home > * { position: relative; z-index: 2; }

.hero-text { max-width: 640px; }
.hero-text .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
}
.hero-text .hero-eyebrow i,
.hero-text .hero-eyebrow svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.hero-title { color: var(--color-white); margin-bottom: var(--space-4); }
.hero-title .text-accent { color: var(--color-accent); font-style: normal; }
.hero-subtitle {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  margin-bottom: var(--space-6);
  max-width: 540px;
}
.hero-actions { display: flex; gap: var(--space-4); flex-wrap: wrap; margin-bottom: var(--space-8); }
.hero-trust {
  display: flex;
  gap: var(--space-5);
  flex-wrap: wrap;
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.8);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.hero-trust-item i,
.hero-trust-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
}

/* ── Hero Form Card ───────────────────────────────────── */
.hero-form-card {
  background: rgba(255,255,255,0.07);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
}
.hero-form-card h2 {
  color: var(--color-white);
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-2);
}
.hero-form-tagline {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-6);
}
.hero-form .form-row { margin-bottom: var(--space-4); }
.hero-form input,
.hero-form select {
  width: 100%;
  padding: var(--space-4);
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.18);
  border-radius: var(--radius-md);
  color: var(--color-white);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  transition: border-color var(--transition-fast), background var(--transition-fast);
}
.hero-form input::placeholder,
.hero-form select { color: rgba(255,255,255,0.5); }
.hero-form select option { color: var(--color-dark); background: var(--color-white); }
.hero-form input:focus,
.hero-form select:focus {
  outline: none;
  border-color: var(--color-accent);
  background: rgba(255,255,255,0.12);
}
.btn-block { width: 100%; justify-content: center; }
.form-footnote {
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.5);
  text-align: center;
  margin-top: var(--space-3);
  margin-bottom: 0;
}
.form-footnote a { color: var(--color-accent); text-decoration: underline; }

/* ── Ticker Strip Enhancement ─────────────────────────── */
.ticker-strip .ticker-track span i,
.ticker-strip .ticker-track span svg {
  width: 16px;
  height: 16px;
  display: inline-block;
  vertical-align: middle;
  margin-right: var(--space-1);
}

/* ── Numbered Section Headers ─────────────────────────── */
.numbered-section { position: relative; }
.numbered-section::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-8);
  right: var(--space-8);
  font-family: var(--font-heading);
  font-size: clamp(6rem, 12vw, 10rem);
  font-weight: 900;
  color: rgba(0,0,0,0.03);
  line-height: 1;
  pointer-events: none;
  z-index: 0;
}
.numbered-section.dark-num::before { color: rgba(255,255,255,0.04); }

/* ── Stats Section Custom ─────────────────────────────── */
.stats-section {
  position: relative;
  background: var(--color-primary);
}
.stats-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(90deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  opacity: 0.6;
}
.stats-section .container { position: relative; z-index: 1; }
.stat-item { text-align: center; }
.stat-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-5xl);
  font-weight: 900;
  color: var(--color-white);
  line-height: 1;
}
.stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.8);
  margin-top: var(--space-2);
  text-transform: uppercase;
  letter-spacing: 1px;
}
.stat-accent { color: var(--color-accent); }

/* ── Process Steps ────────────────────────────────────── */
.process-steps {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.process-step {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-4);
  background: var(--color-light);
  border-radius: var(--radius-md);
  border-left: 3px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.process-step:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}
.process-num {
  font-family: var(--font-heading);
  font-weight: 900;
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  line-height: 1;
  flex-shrink: 0;
}
.process-step h4 {
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-1);
  color: var(--color-dark);
}
.process-step p {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  margin: 0;
  line-height: 1.5;
}

/* ── About Image with Stat Overlay ───────────────────── */
.about-image-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: visible;
}
.about-image-wrap img {
  border-radius: var(--radius-lg);
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
}
.about-stat-card {
  position: absolute;
  bottom: -24px;
  right: -16px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
}
.about-stat-card .big-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  line-height: 1;
}
.about-stat-card .label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-1);
}

/* ── Elfsight Reviews Widget ─────────────────────────── */
.elfsight-reviews-wrap {
  max-width: var(--max-width-wide);
  margin: 0 auto;
}

/* ── CTA Banner Enhancement ──────────────────────────── */
.cta-banner .cta-inner {
  display: flex;
  align-items: center;
  gap: var(--space-8);
}
.cta-banner .cta-text { flex: 1; text-align: left; }
.cta-banner .cta-text h2 { margin-bottom: var(--space-3); }
.cta-banner .cta-text p { margin-bottom: 0; max-width: none; }
.cta-banner .cta-action { flex-shrink: 0; }

/* ── FAQ Toggle Behavior ─────────────────────────────── */
.faq-item { cursor: pointer; }
.faq-item .faq-toggle {
  margin-left: auto;
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item.active .faq-toggle { transform: rotate(45deg); }
.faq-item .faq-answer {
  display: none;
  margin-top: var(--space-3);
  padding-top: var(--space-3);
  border-top: 1px solid var(--color-border);
}
.faq-item.active .faq-answer { display: block; }

/* ── Closing CTA ─────────────────────────────────────── */
.closing-cta {
  background: var(--color-dark);
  text-align: center;
}
.closing-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.closing-cta p {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-8);
}

/* ── Section Divider Shapes ──────────────────────────── */
.divider-slant--top {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-slant--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-slant--bottom svg,
.divider-slant--top svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Floating Accents ────────────────────────────────── */
.hero-float-1 {
  position: absolute;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
  top: 10%;
  right: -80px;
  z-index: 1;
  animation: float-bob 8s ease-in-out infinite;
}
.hero-float-2 {
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: var(--color-secondary);
  opacity: 0.05;
  bottom: 15%;
  left: -60px;
  z-index: 1;
  animation: float-bob 12s ease-in-out infinite;
}

/* ── Services Section Intro Text ─────────────────────── */
.services-intro { max-width: 700px; margin: 0 auto var(--space-4); text-align: center; }

/* ── View All CTA Below Grid ─────────────────────────── */
.view-all-cta { text-align: center; margin-top: var(--space-8); }

/* ── Responsive: Hero ────────────────────────────────── */
@media (max-width: 960px) {
  .hero--home {
    grid-template-columns: 1fr;
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) var(--space-4) var(--space-8);
  }
  .hero-form-card { max-width: 500px; margin: 0 auto; }
  .hero-text { max-width: 100%; }
}
@media (max-width: 768px) {
  .process-steps { grid-template-columns: 1fr; }
  .reviews-grid { grid-template-columns: 1fr; }
  .cta-banner .cta-inner { flex-direction: column; text-align: center; }
  .cta-banner .cta-text { text-align: center; }
  .about-stat-card { right: 0; bottom: -16px; }
  .numbered-section::before { display: none; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     HERO SECTION — 60/40 split with lead-capture form
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--home" style="background-image: url('<?php echo $photoLibrary['hero']; ?>');">
  <div class="hero-float-1"></div>
  <div class="hero-float-2"></div>

  <div class="hero-text">
    <span class="hero-eyebrow">
      <i data-lucide="shield-check"></i> Serving Damascus Since <?php echo $yearEstablished; ?>
    </span>
    <h1 class="hero-title">Junk Removal, <span class="text-accent">Excavation</span> &amp; Site Work Done Right</h1>
    <p class="hero-subtitle">Workhorse Site Solutions is a family-owned contractor based in Damascus, OR, handling everything from cleanouts and demolition to grading, trenching, and full site prep across the Portland Metro Area.</p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-accent btn-lg">Get a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px"></i> Call <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="star"></i> 5.0 Google Rating</span>
      <span class="hero-trust-item"><i data-lucide="truck"></i> Same-Day Available</span>
    </div>
  </div>

  <aside class="hero-form-card" id="estimate-form">
    <h2>Get Your Free Estimate</h2>
    <p class="hero-form-tagline">No obligation. Same-day response.</p>
    <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
      <input type="text" name="_honeypot" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
      <input type="hidden" name="_form_location" value="hero">
      <input type="hidden" name="_consent_version" value="v2.1">
      <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
      <input type="hidden" name="_next" value="/thank-you">
      <div class="form-row">
        <input type="text" name="name" placeholder="Full name" required>
      </div>
      <div class="form-row">
        <input type="tel" name="phone" placeholder="Phone number" required>
      </div>
      <div class="form-row">
        <input type="email" name="email" placeholder="Email address" required>
      </div>
      <div class="form-row">
        <select name="service">
          <option value="">What do you need?</option>
          <?php foreach ($services as $s): ?>
          <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" class="btn btn-accent btn-lg btn-block">Get My Free Estimate</button>
      <p class="form-footnote">By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.</p>
    </form>
  </aside>
</section>

<!-- ═══════════════════════════════════════════════════════
     TICKER STRIP — social proof
     ═══════════════════════════════════════════════════════ -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years in Business</span>
    <span><i data-lucide="star"></i> 5.0 Google Rating</span>
    <span><i data-lucide="shield-check"></i> Licensed, Bonded &amp; Insured</span>
    <span><i data-lucide="truck"></i> Same-Day Scheduling</span>
    <span><i data-lucide="hard-hat"></i> Heavy Equipment On-Site</span>
    <span><i data-lucide="tree-pine"></i> Land Clearing Specialists</span>
    <span><i data-lucide="map-pin"></i> Damascus &amp; Portland Metro</span>
    <span><i data-lucide="hammer"></i> Demolition to Finish</span>
    <span><i data-lucide="recycle"></i> Responsible Disposal</span>
    <span><i data-lucide="users"></i> Family-Owned &amp; Operated</span>
    <!-- Duplicate for seamless loop -->
    <span><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years in Business</span>
    <span><i data-lucide="star"></i> 5.0 Google Rating</span>
    <span><i data-lucide="shield-check"></i> Licensed, Bonded &amp; Insured</span>
    <span><i data-lucide="truck"></i> Same-Day Scheduling</span>
    <span><i data-lucide="hard-hat"></i> Heavy Equipment On-Site</span>
    <span><i data-lucide="tree-pine"></i> Land Clearing Specialists</span>
    <span><i data-lucide="map-pin"></i> Damascus &amp; Portland Metro</span>
    <span><i data-lucide="hammer"></i> Demolition to Finish</span>
    <span><i data-lucide="recycle"></i> Responsible Disposal</span>
    <span><i data-lucide="users"></i> Family-Owned &amp; Operated</span>
  </div>
</div>

<!-- ═══════════════════════════════════════════════════════
     SERVICES SECTION — Tinted Image Cards (01)
     ═══════════════════════════════════════════════════════ -->
<section class="numbered-section" data-num="01" aria-label="Junk removal and site work services">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">Services</span> Does Workhorse Site Solutions Offer in Damascus?</h2>
      <p class="hero-answer">Workhorse Site Solutions handles the full scope of site work — from junk removal and demolition to excavation, grading, land clearing, and construction. We bring heavy equipment and hands-on crews to residential, commercial, and construction projects across the Portland Metro Area.</p>
      <span class="section-subtitle">One crew. Every phase of your project.</span>
    </div>

    <div class="services-grid">
      <?php
      $tintClasses = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      $displayServices = array_slice($services, 0, 8);
      foreach ($displayServices as $i => $service):
        $tint = $tintClasses[$i % 3];
        $delay = ($i % 3) + 1;
        $icon = $serviceIcons[$service['slug']] ?? 'wrench';
        $img = $serviceImages[$service['slug']] ?? '';
        $bullets = $serviceBullets[$service['slug']] ?? [];
      ?>
      <article class="service-card-with-image <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($service['name']); ?> in Damascus, OR" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i></div>
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($service['description']); ?></p>
          <?php if (!empty($bullets)): ?>
          <ul>
            <?php foreach (array_slice($bullets, 0, 3) as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="view-all-cta reveal-up">
      <a href="/services/" class="btn btn-secondary">View All <?php echo count($services); ?> Services</a>
    </div>
  </div>

  <!-- Section Divider -->
  <div class="divider-slant--bottom">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-primary)">
      <path d="M0,0 L1440,60 L1440,60 L0,60 Z"/>
    </svg>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     STATS SECTION
     ═══════════════════════════════════════════════════════ -->
<section class="stats-section">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal-up reveal-delay-1">
        <div class="stat-number" data-counter data-target="<?php echo $yearsInBusiness; ?>">0</div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-2">
        <div class="stat-number" data-counter data-target="500">0</div>
        <div class="stat-label">Projects Completed</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-3">
        <div class="stat-number stat-accent">5.0</div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item reveal-up reveal-delay-4">
        <div class="stat-number" data-counter data-target="50">0</div>
        <div class="stat-label">Mile Service Radius</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     MID-PAGE CTA BANNER
     ═══════════════════════════════════════════════════════ -->
<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div class="cta-text">
        <h2>Your Property Isn't Going to Clear Itself</h2>
        <p>Whether you need a full cleanout, a lot graded for construction, or a building brought down safely — our crew and equipment are ready. Most jobs start within two weeks of your estimate.</p>
      </div>
      <div class="cta-action">
        <a href="/contact/" class="btn btn-accent btn-lg">Schedule Your Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ABOUT / PROCESS SECTION (02)
     ═══════════════════════════════════════════════════════ -->
<section class="numbered-section" data-num="02" aria-label="About Workhorse Site Solutions">
  <div class="container">
    <div class="about-split">
      <div class="about-content reveal-left">
        <span class="eyebrow-label">Who We Are</span>
        <h2>A <span class="text-accent">Family-Owned</span> Crew That Shows Up and Gets It Done</h2>
        <p>Workhorse Site Solutions started as a junk hauling service in Damascus, OR, and grew into a full-spectrum site solutions company because our clients kept asking us to do more. We've been handling excavation, demolition, land clearing, grading, trenching, and construction work across the Portland Metro Area for <?php echo $yearsInBusiness; ?> years — and we bring the same work ethic to a single-item pickup as we do to a multi-acre land clear.</p>
        <p>Licensed, bonded, and insured in Oregon, we own our equipment and run our own crews. That means faster scheduling, cleaner communication, and no subcontractor surprises. When you call Workhorse, you get Workhorse.</p>

        <div class="process-steps">
          <div class="process-step reveal-up reveal-delay-1">
            <span class="process-num">01</span>
            <div>
              <h4>Assess</h4>
              <p>Free on-site walkthrough to scope the work and give you an honest estimate.</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-2">
            <span class="process-num">02</span>
            <div>
              <h4>Plan</h4>
              <p>We handle permits, scheduling, and equipment staging before day one.</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-3">
            <span class="process-num">03</span>
            <div>
              <h4>Execute</h4>
              <p>Our crew and heavy equipment arrive on time and work clean until the job is done.</p>
            </div>
          </div>
          <div class="process-step reveal-up reveal-delay-4">
            <span class="process-num">04</span>
            <div>
              <h4>Inspect</h4>
              <p>Final walkthrough with you to confirm everything meets spec. Not done until you say so.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="about-image-wrap reveal-right">
        <img src="<?php echo $photoLibrary['about']; ?>" alt="Workhorse Site Solutions crew at work in Damascus, Oregon" width="600" height="750" loading="lazy">
        <div class="about-stat-card">
          <div class="big-number"><?php echo $yearsInBusiness; ?>+</div>
          <div class="label">Years Serving<br>Damascus</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     REVIEWS SECTION (03)
     ═══════════════════════════════════════════════════════ -->
<section class="reviews-section numbered-section dark-num" data-num="03" aria-label="Customer reviews">
  <!-- Top divider -->
  <div class="divider-slant--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 L1440,0 L1440,0 L0,0 Z"/>
    </svg>
  </div>

  <div class="container">
    <div class="section-header reveal-up">
      <span class="eyebrow" style="color:var(--color-accent);">What Clients Say</span>
      <h2>Rated <span class="text-accent">5.0 Stars</span> Across 47 Google Reviews</h2>
      <p>Real feedback from homeowners, contractors, and property managers in Damascus, Gresham, Happy Valley, and the Portland Metro Area.</p>
    </div>

    <!-- Elfsight All-in-One Reviews | Workhorse Reviews -->
    <div class="elfsight-reviews-wrap">
      <script src="https://elfsightcdn.com/platform.js" async></script>
      <div class="elfsight-app-e80a217d-e526-4dcf-b987-0e6f24b6cf1b" data-elfsight-app-lazy></div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     FAQ SECTION (04)
     ═══════════════════════════════════════════════════════ -->
<section class="numbered-section" data-num="04" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Answers About <span class="text-accent">Our Services</span> in Damascus, OR</h2>
      <p>Straight answers to the questions Damascus, Gresham, and Portland Metro homeowners ask most.</p>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $j => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($j % 3) + 1; ?>" onclick="this.classList.toggle('active')">
        <div class="faq-icon"><i data-lucide="help-circle"></i></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
          <div class="faq-answer">
            <p><?php echo htmlspecialchars($faq['answer']); ?></p>
          </div>
        </div>
        <span class="faq-toggle"><i data-lucide="plus" style="width:20px;height:20px"></i></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════ -->
<section class="closing-cta">
  <div class="container">
    <span class="eyebrow" style="color:var(--color-accent);">Ready to Start?</span>
    <h2>Get a Free, No-Obligation Estimate for Your Project</h2>
    <p>From a single junk pickup to a multi-phase construction site — tell us what you need and we'll get back to you the same day with a clear, honest quote.</p>
    <a href="/contact/" class="btn btn-accent btn-lg">Request Your Free Estimate</a>
  </div>
</section>

<!-- Stat Counter Animation -->
<script>
(function(){
  var counters = document.querySelectorAll('[data-counter]');
  if (!counters.length || !('IntersectionObserver' in window)) return;
  var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var el = entry.target;
        var target = parseInt(el.getAttribute('data-target'), 10);
        var duration = 2000;
        var start = 0;
        var startTime = null;
        function animate(ts) {
          if (!startTime) startTime = ts;
          var progress = Math.min((ts - startTime) / duration, 1);
          var eased = 1 - Math.pow(1 - progress, 3);
          el.textContent = Math.floor(eased * target);
          if (progress < 1) requestAnimationFrame(animate);
          else el.textContent = target + '+';
        }
        requestAnimationFrame(animate);
        observer.unobserve(el);
      }
    });
  }, { threshold: 0.3 });
  counters.forEach(function(c) { observer.observe(c); });
})();
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

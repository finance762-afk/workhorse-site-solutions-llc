<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Our Services | ' . $siteName . ' | Damascus, OR';
$pageDescription = 'Workhorse Site Solutions offers 12 professional services in Damascus, OR — junk removal, excavation, demolition, land clearing, tree services, grading, trenching, fence installation, decks, driveways, general contracting, and cleanup. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396299803-tx16dq-481656131_605127309177923_4080066704641508745_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '6';

/* ── Service Card Image Map ──────────────────────────────── */
$serviceImages = [
    'junk-removal-cleanouts'        => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg',
    'excavation-services'           => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396273035-84csrf-481103535_608058122218175_6060079720789259957_n.jpg',
    'demolition'                    => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg',
    'land-clearing'                 => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396313562-xq2js1-481701393_605954449095209_2349548257896328613_n.jpg',
    'tree-services'                 => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396318170-psrogl-481705784_605960762427911_845944733817866550_n.jpg',
    'site-preparation-grading'      => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396323298-kfnmea-481764174_605959765761344_5422074130262060362_n.jpg',
    'trenching'                     => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396334785-q74t8c-481770500_605969619093692_3211402394288864358_n.jpg',
    'fence-installation'            => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396339937-xc7wc2-481770700_605954432428544_6388616634957804134_n.jpg',
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

/* ── Schema Markup ───────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     SERVICES LISTING — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Services Listing Hero ───────────────────────────────── */
.hero--services {
  position: relative;
  min-height: 50vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-12)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($ogImage); ?>');
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.hero--services::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,0.88) 0%, rgba(0,0,0,0.72) 50%, rgba(77,94,111,0.6) 100%);
  z-index: 1;
}
.hero--services::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--services > * { position: relative; z-index: 2; }
.hero--services .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: var(--color-accent);
  font-size: var(--font-size-sm);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: var(--space-4);
}
.hero--services .hero-eyebrow i,
.hero--services .hero-eyebrow svg {
  width: 16px;
  height: 16px;
}
.hero--services h1 {
  color: var(--color-white);
  max-width: 800px;
  margin-bottom: var(--space-4);
}
.hero--services h1 .text-accent { color: var(--color-accent); }
.hero--services .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin: 0 auto var(--space-6);
}
.hero--services .breadcrumb {
  display: flex;
  gap: var(--space-2);
  justify-content: center;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
}
.hero--services .breadcrumb a { color: rgba(255,255,255,0.7); }
.hero--services .breadcrumb a:hover { color: var(--color-accent); }
.hero--services .breadcrumb-sep { color: rgba(255,255,255,0.4); }

/* ── Services Grid Section ───────────────────────────────── */
.services-listing-section {
  background: var(--color-bg);
}
.services-listing-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.services-listing-section .section-title h2 {
  margin-bottom: var(--space-3);
}
.services-listing-section .section-title .answer-block {
  max-width: 700px;
  margin: 0 auto;
  color: var(--color-text-light);
  line-height: 1.7;
}

/* ── Floating accent behind grid ─────────────────────────── */
.services-float-accent {
  position: absolute;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.03;
  top: 20%;
  right: -120px;
  z-index: 0;
  animation: float-bob 10s ease-in-out infinite;
}
.services-float-accent-2 {
  position: absolute;
  width: 280px;
  height: 280px;
  border-radius: 50%;
  background: var(--color-secondary);
  opacity: 0.04;
  bottom: 15%;
  left: -80px;
  z-index: 0;
  animation: float-bob 14s ease-in-out infinite;
}

/* ── CTA Section ─────────────────────────────────────────── */
.services-cta {
  background: var(--color-dark);
  text-align: center;
}
.services-cta h2 { color: var(--color-white); margin-bottom: var(--space-3); }
.services-cta .answer-block {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-6);
}

/* ── Divider ─────────────────────────────────────────────── */
.divider-wave--top {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave--top svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Trust Row ───────────────────────────────────────────── */
.trust-row {
  display: flex;
  justify-content: center;
  gap: var(--space-6);
  flex-wrap: wrap;
  margin-top: var(--space-10);
  padding-top: var(--space-8);
  border-top: 1px solid var(--color-border);
}
.trust-row-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-gray-dark);
}
.trust-row-item i,
.trust-row-item svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
}

@keyframes float-bob {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(3deg); }
}

@media (max-width: 768px) {
  .hero--services { min-height: 40vh; }
  .trust-row { gap: var(--space-4); }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--services">
  <div>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Services</span>
    </nav>
    <span class="hero-eyebrow"><i data-lucide="hard-hat"></i> 12 Professional Services</span>
    <h1>Site Work &amp; <span class="text-accent">Property Solutions</span> in Damascus, OR</h1>
    <p class="hero-answer">Workhorse Site Solutions delivers junk removal, excavation, demolition, land clearing, grading, trenching, fence installation, deck construction, driveway work, and full general contracting across the Portland Metro Area. One crew handles your entire project from start to finish.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     ALL SERVICES GRID
     ═══════════════════════════════════════════════════════ -->
<section class="services-listing-section" aria-label="All services">
  <div class="services-float-accent"></div>
  <div class="services-float-accent-2"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">services</span> does Workhorse Site Solutions provide in Damascus?</h2>
      <p class="answer-block">We handle 12 distinct services spanning junk removal, heavy equipment work, construction, and property improvements. Each service is backed by our own crews and equipment — no subcontractors, no middlemen. Select any service below for pricing, process details, and FAQs specific to your project.</p>
    </div>

    <div class="services-grid">
      <?php
      $tintClasses = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      foreach ($services as $i => $service):
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

    <div class="trust-row reveal-up">
      <span class="trust-row-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="trust-row-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="trust-row-item"><i data-lucide="star"></i> 5.0 Google Rating</span>
      <span class="trust-row-item"><i data-lucide="truck"></i> Same-Day Available</span>
      <span class="trust-row-item"><i data-lucide="users"></i> Family-Owned</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════ -->
<section class="services-cta">
  <div class="divider-wave--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C360,0 1080,0 1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <h2>Ready to get your <span class="text-accent">project</span> started?</h2>
    <p class="answer-block">Every project begins with a free, no-obligation estimate. Tell us what you need — junk hauled, land cleared, a structure demolished, or a site graded — and we'll have a clear quote to you within 24 hours.</p>
    <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

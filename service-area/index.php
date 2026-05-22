<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Junk Removal, Excavation & Site Work in Damascus, OR & Surrounding Communities | ' . $siteName;
$pageDescription = 'Workhorse Site Solutions serves Damascus, Gresham, Happy Valley, Sandy, Boring, Clackamas, and Portland with junk removal, excavation, demolition, land clearing, and site preparation. Licensed, bonded, insured.';
$canonicalUrl    = $siteUrl . '/service-area/';
$currentPage     = 'service-area';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396299803-tx16dq-481656131_605127309177923_4080066704641508745_n.jpg';
$cssVersion      = '7';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396299803-tx16dq-481656131_605127309177923_4080066704641508745_n.jpg';

/* ── Service Areas Data ──────────────────────────────────────── */
$areas = [
    [
        'name'  => 'Damascus',
        'slug'  => 'damascus',
        'state' => 'OR',
        'desc'  => 'Our home base. Full-service junk removal, excavation, demolition, grading, and site prep throughout Damascus and unincorporated Clackamas County.',
        'icon'  => 'home',
        'photo' => $photoBase . '1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg',
    ],
    [
        'name'  => 'Gresham',
        'slug'  => 'gresham',
        'state' => 'OR',
        'desc'  => 'Serving Gresham residential and commercial properties with excavation, hauling, land clearing, and construction site cleanup.',
        'icon'  => 'building-2',
        'photo' => $photoBase . '1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg',
    ],
    [
        'name'  => 'Happy Valley',
        'slug'  => 'happy-valley',
        'state' => 'OR',
        'desc'  => 'Excavation, grading, trenching, and site preparation for Happy Valley\'s growing residential developments and hillside lots.',
        'icon'  => 'mountain',
        'photo' => $photoBase . '1779396313562-xq2js1-481701393_605954449095209_2349548257896328613_n.jpg',
    ],
    [
        'name'  => 'Sandy',
        'slug'  => 'sandy',
        'state' => 'OR',
        'desc'  => 'Land clearing, tree removal, excavation, and rural property services for Sandy and the Mt. Hood corridor.',
        'icon'  => 'tree-pine',
        'photo' => $photoBase . '1779396318170-psrogl-481705784_605960762427911_845944733817866550_n.jpg',
    ],
    [
        'name'  => 'Boring',
        'slug'  => 'boring',
        'state' => 'OR',
        'desc'  => 'Junk removal, cleanouts, demolition, and site work for Boring\'s rural-residential properties and acreage lots.',
        'icon'  => 'fence',
        'photo' => $photoBase . '1779396334785-q74t8c-481770500_605969619093692_3211402394288864358_n.jpg',
    ],
    [
        'name'  => 'Clackamas',
        'slug'  => 'clackamas',
        'state' => 'OR',
        'desc'  => 'Commercial and residential site solutions throughout Clackamas — from construction debris cleanup to full excavation and grading.',
        'icon'  => 'hard-hat',
        'photo' => $photoBase . '1779396339937-xc7wc2-481770700_605954432428544_6388616634957804134_n.jpg',
    ],
    [
        'name'  => 'Portland',
        'slug'  => 'portland',
        'state' => 'OR',
        'desc'  => 'East Portland junk removal, demolition, and site preparation — serving SE and NE Portland neighborhoods with heavy equipment and hauling.',
        'icon'  => 'map-pin',
        'photo' => $photoBase . '1779396350225-vjqwww-481782847_604444459246208_4830443631052873384_n.jpg',
    ],
];

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     SERVICE AREA OVERVIEW — Workhorse Site Solutions LLC
     Phase 6 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Service Area Hero ────────────────────────────────────── */
.hero--areas {
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: center;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: var(--color-dark);
}
.hero--areas__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.hero--areas__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 35%;
}
.hero--areas::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    160deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.65) 55%,
    rgba(var(--color-primary-rgb), 0.35) 100%
  );
}
.hero--areas::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events: none;
}
.hero--areas .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.hero--areas .breadcrumb {
  position: absolute;
  top: calc(var(--nav-height) + var(--space-4));
  left: var(--space-4);
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  color: rgba(255, 255, 255, 0.55);
  z-index: 3;
}
.hero--areas .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.hero--areas .breadcrumb a:hover {
  color: var(--color-accent);
}
.hero--areas__content {
  max-width: 740px;
}
.hero--areas__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.hero--areas__eyebrow i,
.hero--areas__eyebrow svg {
  width: 18px;
  height: 18px;
}
.hero--areas h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.hero--areas h1 .text-accent {
  color: var(--color-accent);
}
.hero--areas .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.85);
  max-width: 60ch;
  margin-bottom: var(--space-8);
}
.hero--areas__stats {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-8);
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255, 255, 255, 0.15);
}
.hero--areas__stat {
  text-align: center;
}
.hero--areas__stat strong {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.hero--areas__stat span {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: 700;
  color: rgba(255, 255, 255, 0.6);
}

/* ── Section Base ──────────────────────────────────────────── */
.areas-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.areas-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.areas-section__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.areas-section h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.areas-section h2 .text-accent {
  color: var(--color-accent);
}
.areas-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}
.areas-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.areas-section .floating-accent--1 {
  width: 380px;
  height: 380px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  top: -100px;
  right: -140px;
}
.areas-section .floating-accent--2 {
  width: 280px;
  height: 280px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  bottom: -80px;
  left: -100px;
}

/* ── SVG Dividers ───────────────────────────────────────── */
.divider-chevron,
.divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.divider-chevron svg,
.divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section 2: Area Cards Grid ──────────────────────────── */
.areas-grid-section {
  background: var(--color-bg);
}
.areas-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.area-card {
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.area-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-lg);
}
.area-card__image {
  position: relative;
  aspect-ratio: 16 / 10;
  overflow: hidden;
}
.area-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.area-card:hover .area-card__image img {
  transform: scale(1.05);
}
.area-card__image::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.4) 0%, transparent 50%);
  pointer-events: none;
}
.area-card__badge {
  position: absolute;
  bottom: var(--space-3);
  left: var(--space-3);
  z-index: 2;
  display: inline-flex;
  align-items: center;
  gap: var(--space-1);
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-1) var(--space-3);
  border-radius: var(--radius-sm);
}
.area-card__badge i,
.area-card__badge svg {
  width: 14px;
  height: 14px;
}
.area-card__body {
  padding: var(--space-6) var(--space-5) var(--space-5);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  flex: 1;
}
.area-card__icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-top: -38px;
  box-shadow: var(--shadow-md);
  background-color: var(--color-white);
}
.area-card__icon i,
.area-card__icon svg {
  width: 22px;
  height: 22px;
}
.area-card h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  font-size: var(--font-size-xl);
  line-height: 1.2;
}
.area-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray-dark);
  line-height: 1.6;
}
.area-card__cta {
  margin-top: auto;
  color: var(--color-accent);
  font-weight: 700;
  font-size: var(--font-size-sm);
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: var(--space-1);
  transition: color var(--transition-fast);
  border-top: 1px solid rgba(0,0,0,0.06);
  padding-top: var(--space-4);
}
.area-card__cta::after {
  content: ' →';
  display: inline-block;
  transition: transform var(--transition-fast);
}
.area-card__cta:hover { color: var(--color-primary); }
.area-card__cta:hover::after { transform: translateX(3px); }

/* ── Section 3: Coverage Info — Dark Split ────────────────── */
.coverage-section {
  background: var(--color-dark);
  color: var(--color-white);
}
.coverage-section h2 { color: var(--color-white); }
.coverage-section .answer-block { color: rgba(255,255,255,0.7); }
.coverage-section .areas-section__eyebrow { color: var(--color-accent); }
.coverage__layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.coverage__stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.coverage__stat-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  text-align: center;
}
.coverage__stat-card strong {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.coverage__stat-card span {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  font-weight: 600;
}
.coverage__services h3 {
  color: var(--color-white);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-6);
}
.coverage__service-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.coverage__service-list li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  color: rgba(255,255,255,0.8);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.coverage__service-list li i,
.coverage__service-list li svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── Section 4: Why Local — Asymmetric ───────────────────── */
.why-local {
  background: var(--color-light);
}
.why-local__layout {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: var(--space-12);
  align-items: center;
}
.why-local__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.why-local__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.why-local__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.why-local__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.why-local__point {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.why-local__point-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.why-local__point-icon i,
.why-local__point-icon svg {
  width: 22px;
  height: 22px;
}
.why-local__point h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.why-local__point p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.6;
  max-width: 48ch;
}

/* ── Section 5: Final CTA ────────────────────────────────── */
.final-cta-areas {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.final-cta-areas::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 700px;
  height: 700px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 70%);
  pointer-events: none;
}
.final-cta-areas h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.final-cta-areas .answer-block {
  color: rgba(255,255,255,0.7);
  margin: 0 auto var(--space-8);
}
.final-cta-areas__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── Last Updated ──────────────────────────────────────────── */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── Responsive ────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .hero--areas {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .areas-grid { grid-template-columns: repeat(2, 1fr); }
  .coverage__layout { grid-template-columns: 1fr; gap: var(--space-8); }
  .why-local__layout { grid-template-columns: 1fr; gap: var(--space-8); }
  .why-local__image { max-width: 500px; aspect-ratio: 16 / 10; order: -1; }
}
@media (max-width: 600px) {
  .hero--areas h1 { font-size: clamp(2rem, 8vw, 3rem); }
  .hero--areas__stats { flex-direction: column; gap: var(--space-4); align-items: flex-start; }
  .areas-grid { grid-template-columns: 1fr; }
  .coverage__stats { grid-template-columns: 1fr; }
  .final-cta-areas__ctas { flex-direction: column; }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero--areas" aria-label="Service area overview">
  <div class="hero--areas__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions equipment working on a job site in Damascus, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Service Area</span>
  </nav>
  <div class="container">
    <div class="hero--areas__content">
      <span class="hero--areas__eyebrow"><i data-lucide="map-pin"></i> Service Area</span>
      <h1>Site Work &amp; <span class="text-accent">Junk Removal</span> in Damascus, OR &amp; Surrounding Communities</h1>
      <p class="hero-answer">Workhorse Site Solutions is a licensed, bonded, and insured Oregon contractor headquartered in Damascus, serving the Portland Metro East corridor. From junk removal and cleanouts to excavation, demolition, and land clearing — we bring heavy equipment and hands-on crews to seven communities within a 50-mile radius.</p>
      <div class="hero--areas__stats">
        <div class="hero--areas__stat">
          <strong>7</strong>
          <span>Communities Served</span>
        </div>
        <div class="hero--areas__stat">
          <strong>50</strong>
          <span>Mile Service Radius</span>
        </div>
        <div class="hero--areas__stat">
          <strong><?php echo $yearsInBusiness; ?>+</strong>
          <span>Years in Business</span>
        </div>
        <div class="hero--areas__stat">
          <strong>12</strong>
          <span>Services Offered</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron
     ═══════════════════════════════════════════════════════ -->
<div class="divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: AREA CARDS GRID
     ═══════════════════════════════════════════════════════ -->
<section class="areas-section areas-grid-section" aria-label="Service areas">
  <div class="floating-accent floating-accent--1"></div>
  <div class="container">
    <span class="areas-section__eyebrow reveal-up">Where We Work</span>
    <h2 class="reveal-up">Which <span class="text-accent">communities</span> does Workhorse Site Solutions serve?</h2>
    <p class="answer-block reveal-up">We operate across seven cities and unincorporated areas in Clackamas and Multnomah counties. Damascus is our home base — surrounding communities benefit from the same crew, the same equipment fleet, and the same flat-rate project pricing with minimal mobilization costs.</p>

    <div class="areas-grid">
      <?php
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      foreach ($areas as $i => $area):
        $tint = $tints[$i % 3];
        $delay = ($i % 4) + 1;
      ?>
      <article class="area-card <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
        <div class="area-card__image">
          <img src="<?php echo htmlspecialchars($area['photo']); ?>" alt="Workhorse Site Solutions project in <?php echo htmlspecialchars($area['name']); ?>, OR" width="600" height="375" loading="lazy">
          <?php if ($area['slug'] === 'damascus'): ?>
          <span class="area-card__badge"><i data-lucide="star"></i> Home Base</span>
          <?php endif; ?>
        </div>
        <div class="area-card__body">
          <div class="area-card__icon"><i data-lucide="<?php echo htmlspecialchars($area['icon']); ?>"></i></div>
          <h3><?php echo htmlspecialchars($area['name']); ?>, <?php echo htmlspecialchars($area['state']); ?></h3>
          <p><?php echo htmlspecialchars($area['desc']); ?></p>
          <a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>/" class="area-card__cta">View area details</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: COVERAGE INFO — Dark
     ═══════════════════════════════════════════════════════ -->
<section class="areas-section coverage-section" aria-label="Coverage details">
  <div class="container">
    <span class="areas-section__eyebrow reveal-up">Full Coverage</span>
    <h2 class="reveal-up">What services are <span class="text-accent">available in every</span> community we serve?</h2>
    <p class="answer-block reveal-up">Every community in our coverage area receives the same complete lineup of site solutions. No matter where your property sits in the Portland Metro East corridor, Workhorse brings the same equipment fleet, the same licensed crew, and the same commitment to on-time, on-budget project delivery.</p>

    <div class="coverage__layout">
      <div class="coverage__stats reveal-up">
        <div class="coverage__stat-card">
          <strong data-target="500">500</strong>
          <span>Projects Completed</span>
        </div>
        <div class="coverage__stat-card">
          <strong>5.0</strong>
          <span>Star Rating</span>
        </div>
        <div class="coverage__stat-card">
          <strong><?php echo $yearsInBusiness; ?>+</strong>
          <span>Years Serving OR</span>
        </div>
        <div class="coverage__stat-card">
          <strong>24hr</strong>
          <span>Quote Turnaround</span>
        </div>
      </div>
      <div class="coverage__services reveal-right">
        <h3>Available in Every Area</h3>
        <ul class="coverage__service-list">
          <?php foreach ($services as $service): ?>
          <li><i data-lucide="check"></i> <?php echo htmlspecialchars($service['name']); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron (light)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: WHY LOCAL — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="areas-section why-local" aria-label="Why hire a local contractor">
  <div class="floating-accent floating-accent--2"></div>
  <div class="container">
    <span class="areas-section__eyebrow reveal-up">Local Advantage</span>
    <h2 class="reveal-up">Why does hiring a <span class="text-accent">Damascus-based contractor</span> matter?</h2>
    <p class="answer-block reveal-up">Because Clackamas County soil, permit systems, and site access challenges are hyperlocal. A contractor who knows the clay layers, the seasonal water tables, and the county planning department delivers fewer delays, fewer surprises, and fewer change orders.</p>

    <div class="why-local__layout">
      <div class="why-local__image reveal-left">
        <img src="<?php echo htmlspecialchars($photoBase . '1779396363449-wyzf8f-481785958_604894925867828_2034594633166557511_n.jpg'); ?>" alt="Workhorse Site Solutions crew operating equipment in Damascus, Oregon" width="500" height="625" loading="lazy">
      </div>
      <div>
        <div class="why-local__points">
          <div class="why-local__point reveal-right reveal-delay-1">
            <div class="why-local__point-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h3>Damascus Home Base</h3>
              <p>Our shop and equipment yard are in Damascus. Nearby communities get priority scheduling and reduced mobilization costs — we are already in the neighborhood.</p>
            </div>
          </div>
          <div class="why-local__point reveal-right reveal-delay-2">
            <div class="why-local__point-icon"><i data-lucide="mountain"></i></div>
            <div>
              <h3>Oregon Soil Expertise</h3>
              <p>Willamette Valley clay, volcanic rock layers, and seasonal water tables require operators who have dug in these conditions for years — not crews imported from out of state.</p>
            </div>
          </div>
          <div class="why-local__point reveal-right reveal-delay-3">
            <div class="why-local__point-icon"><i data-lucide="file-text"></i></div>
            <div>
              <h3>Clackamas County Permit Knowledge</h3>
              <p>We know the county grading permit process, the setback rules, and the inspection schedules. Projects pass the first time — no rework, no re-inspection fees.</p>
            </div>
          </div>
          <div class="why-local__point reveal-right reveal-delay-4">
            <div class="why-local__point-icon"><i data-lucide="truck"></i></div>
            <div>
              <h3>Own Equipment Fleet</h3>
              <p>Excavators, skid steers, dump trucks — all ours. No rented equipment billed by the hour. Flat-rate project pricing means no surprises on your invoice.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant (dark)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="areas-section final-cta-areas" aria-label="Request estimate for your area">
  <div class="container">
    <span class="areas-section__eyebrow reveal-up">Get Started</span>
    <h2 class="reveal-up">Ready for a <span class="text-accent">free estimate</span> in your area?</h2>
    <p class="answer-block reveal-up">Whether your property is in Damascus, Gresham, Happy Valley, Sandy, Boring, Clackamas, or Portland — Workhorse Site Solutions delivers the same licensed, insured, flat-rate project pricing. Tell us what you need and we will have an estimate back within 24 hours.</p>
    <div class="final-cta-areas__ctas reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="last-updated">Last Updated: <?php echo date('F Y'); ?></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

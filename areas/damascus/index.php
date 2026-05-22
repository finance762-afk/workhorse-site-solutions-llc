<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Junk Removal, Excavation & Site Work in Damascus, OR | Workhorse Site Solutions';
$pageDescription = 'Workhorse Site Solutions is a licensed Oregon contractor based in Damascus, OR. Junk removal, excavation, demolition, land clearing, grading, and site prep for Clackamas County properties.';
$canonicalUrl    = $siteUrl . '/areas/damascus/';
$currentPage     = 'service-area';
$cssVersion      = '6';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg';
$bodyPhoto1 = $photoBase . '1779396387280-1qrrhz-481907660_605960769094577_6392559895595472105_n.jpg';
$bodyPhoto2 = $photoBase . '1779396400930-ormkb1-481948854_605972842426703_2204700847253730316_n.jpg';
$heroImagePreload = $heroPhoto;

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
    ['name' => 'Damascus', 'url' => '/areas/damascus/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- BreadcrumbList Schema -->
<?php echo $schemaMarkup; ?>

<!-- LocalBusiness Schema with areaServed -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "GeneralContractor",
  "@id": "<?php echo $siteUrl; ?>/#organization",
  "name": "<?php echo htmlspecialchars($siteName); ?>",
  "url": "<?php echo $siteUrl; ?>",
  <?php if (!empty($phone)): ?>
  "telephone": "<?php echo htmlspecialchars($phone); ?>",
  <?php endif; ?>
  "description": "Licensed Oregon general contractor providing junk removal, excavation, demolition, land clearing, and site preparation in Damascus, OR and the Portland Metro Area.",
  "address": {
    "@type": "PostalAddress",
    <?php if (!empty($address['street'])): ?>
    "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
    <?php endif; ?>
    "addressLocality": "Damascus",
    "addressRegion": "OR",
    "postalCode": "97089",
    "addressCountry": "US"
  },
  "areaServed": {
    "@type": "City",
    "name": "Damascus",
    "containedInPlace": {
      "@type": "AdministrativeArea",
      "name": "Clackamas County",
      "containedInPlace": {
        "@type": "State",
        "name": "Oregon"
      }
    }
  },
  "foundingDate": "<?php echo $yearEstablished; ?>"
}
</script>

<style>
/* ============================================
   Damascus, OR — City Service Area Page
   Unique prefix: dms-
   ============================================ */

/* ── Hero ──────────────────────────────────── */
.dms-hero {
  position: relative;
  min-height: 85vh;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  background: url('<?php echo htmlspecialchars($heroPhoto); ?>') center/cover no-repeat;
  padding: var(--space-4xl) var(--space-lg) var(--space-3xl);
  overflow: hidden;
}
.dms-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    175deg,
    rgba(var(--color-primary-rgb), 0.85) 0%,
    rgba(var(--color-primary-rgb), 0.65) 40%,
    rgba(var(--color-accent-rgb), 0.35) 100%
  );
  z-index: 1;
}
.dms-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
  opacity: 0.5;
}
.dms-hero__inner {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  width: 100%;
  margin: 0 auto;
}
.dms-hero__breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-lg);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.7);
}
.dms-hero__breadcrumb a {
  color: rgba(255,255,255,0.8);
  transition: color var(--transition-fast);
}
.dms-hero__breadcrumb a:hover {
  color: var(--color-accent);
}
.dms-hero__breadcrumb .breadcrumb-sep {
  color: rgba(255,255,255,0.4);
  font-size: var(--font-size-xs);
}
.dms-hero h1 {
  font-family: var(--font-heading);
  font-size: var(--fs-h1);
  font-weight: 800;
  color: var(--color-white);
  line-height: 1.1;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
  max-width: 18ch;
}
.dms-hero h1 .text-accent {
  color: var(--color-accent);
}
.dms-hero__answer {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.9);
  line-height: 1.7;
  max-width: 60ch;
  margin-bottom: var(--space-xl);
}
.dms-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-bottom: var(--space-xl);
}
.dms-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-4);
  color: var(--color-white);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.dms-hero__badge i,
.dms-hero__badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.dms-hero__cta {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}
.dms-hero__cta .btn {
  font-size: var(--font-size-base);
  padding: var(--space-4) var(--space-8);
}

/* ── Section Dividers ─────────────────────── */
.dms-divider-chevron {
  display: block;
  width: 100%;
  height: 60px;
  background: var(--color-bg);
  position: relative;
}
.dms-divider-chevron svg {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  height: 60px;
}
.dms-divider-slant {
  display: block;
  width: 100%;
  height: 70px;
  position: relative;
}
.dms-divider-slant svg {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  height: 70px;
}
.dms-divider-wave {
  display: block;
  width: 100%;
  height: 50px;
  position: relative;
}
.dms-divider-wave svg {
  position: absolute;
  top: -1px;
  left: 0;
  width: 100%;
  height: 50px;
}

/* ── About Damascus Section ───────────────── */
.dms-about {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg);
  position: relative;
  overflow: hidden;
}
.dms-about__inner {
  max-width: var(--max-width);
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-3xl);
  align-items: start;
}
.dms-about__content {
  position: relative;
}
.dms-about .eyebrow-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.dms-about h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1.15;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.dms-about h2 .text-accent {
  color: var(--color-accent);
}
.dms-about .answer-block {
  background: var(--color-card-tint-3);
  border-left: 4px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-lg);
  margin-bottom: var(--space-xl);
}
.dms-about .answer-block h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h3);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.dms-about .answer-block p {
  color: var(--color-text);
  line-height: 1.7;
  max-width: var(--content-width);
}
.dms-about p {
  color: var(--color-text);
  line-height: 1.75;
  margin-bottom: var(--space-lg);
  max-width: var(--content-width);
}
.dms-about__image-wrap {
  position: relative;
}
.dms-about__image-wrap img {
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  width: 100%;
  height: auto;
  object-fit: cover;
}
.dms-about__float {
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  top: -40px;
  right: -60px;
  animation: dms-float 8s ease-in-out infinite;
  pointer-events: none;
}
@keyframes dms-float {
  0%, 100% { transform: translate(0, 0); }
  50% { transform: translate(-12px, 16px); }
}

/* ── Services Grid Section ────────────────── */
.dms-services {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-dark);
  position: relative;
  overflow: hidden;
}
.dms-services__inner {
  max-width: var(--max-width);
  margin: 0 auto;
}
.dms-services .eyebrow-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.dms-services h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.dms-services h2 .text-accent {
  color: var(--color-accent);
}
.dms-services__subtitle {
  color: rgba(255,255,255,0.65);
  font-size: var(--font-size-lg);
  max-width: 55ch;
  margin-bottom: var(--space-3xl);
  line-height: 1.6;
}
.dms-services__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
.dms-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-4);
  padding: var(--space-lg);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-md);
  transition: transform var(--transition-base), background var(--transition-base), border-color var(--transition-base);
}
.dms-service-item:hover {
  transform: translateY(-3px);
  background: rgba(255,255,255,0.08);
  border-color: rgba(var(--color-accent-rgb), 0.3);
}
.dms-service-item__icon {
  flex-shrink: 0;
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.dms-service-item__icon i,
.dms-service-item__icon svg {
  width: 22px;
  height: 22px;
}
.dms-service-item__text {
  color: var(--color-white);
  font-weight: 600;
  font-size: var(--font-size-sm);
  line-height: 1.3;
}
.dms-services__float {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.05);
  bottom: -100px;
  left: -80px;
  pointer-events: none;
  animation: dms-float 10s ease-in-out infinite reverse;
}

/* ── Why Choose Section ───────────────────── */
.dms-why {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-alt);
  position: relative;
  overflow: hidden;
}
.dms-why__inner {
  max-width: var(--max-width);
  margin: 0 auto;
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: var(--space-3xl);
  align-items: center;
}
.dms-why__image-col {
  position: relative;
}
.dms-why__image-col img {
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  width: 100%;
  height: auto;
  object-fit: cover;
}
.dms-why__image-accent {
  position: absolute;
  bottom: -20px;
  left: -20px;
  width: 120px;
  height: 120px;
  background: var(--color-accent);
  border-radius: var(--radius-lg);
  z-index: -1;
  opacity: 0.15;
}
.dms-why__content {
  position: relative;
}
.dms-why .eyebrow-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.dms-why h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  line-height: 1.15;
  text-wrap: balance;
  margin-bottom: var(--space-xl);
}
.dms-why h2 .text-accent {
  color: var(--color-accent);
}
.dms-why__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}
.dms-why__point {
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: var(--space-4);
  align-items: start;
}
.dms-why__point-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: var(--color-card-tint-3);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  flex-shrink: 0;
}
.dms-why__point-icon i,
.dms-why__point-icon svg {
  width: 22px;
  height: 22px;
}
.dms-why__point h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.dms-why__point p {
  color: var(--color-text-light);
  line-height: 1.6;
  font-size: var(--font-size-sm);
  max-width: 50ch;
}
.dms-why__float {
  position: absolute;
  width: 160px;
  height: 160px;
  border-radius: 50%;
  background: rgba(var(--color-secondary-rgb), 0.06);
  top: 40px;
  right: -40px;
  pointer-events: none;
  animation: dms-float 9s ease-in-out infinite;
}

/* ── CTA Section ──────────────────────────── */
.dms-cta {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-dark);
  position: relative;
  overflow: hidden;
  text-align: center;
}
.dms-cta::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 600px;
  height: 600px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.12) 0%, transparent 70%);
  pointer-events: none;
}
.dms-cta__inner {
  position: relative;
  z-index: 1;
  max-width: 640px;
  margin: 0 auto;
}
.dms-cta .eyebrow-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.dms-cta h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-white);
  line-height: 1.15;
  text-wrap: balance;
  margin-bottom: var(--space-lg);
}
.dms-cta h2 .text-accent {
  color: var(--color-accent);
}
.dms-cta p {
  color: rgba(255,255,255,0.75);
  font-size: var(--font-size-lg);
  line-height: 1.65;
  margin-bottom: var(--space-xl);
  max-width: 50ch;
  margin-left: auto;
  margin-right: auto;
}
.dms-cta__actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}
.dms-cta__actions .btn {
  font-size: var(--font-size-base);
  padding: var(--space-4) var(--space-10);
}

/* ── Last Updated ─────────────────────────── */
.dms-updated {
  padding: var(--space-xl) var(--space-lg);
  background: var(--color-bg);
  text-align: center;
}
.dms-updated p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
}

/* ── Responsive ───────────────────────────── */
@media (max-width: 1024px) {
  .dms-about__inner {
    grid-template-columns: 1fr;
    gap: var(--space-xl);
  }
  .dms-about__image-wrap {
    max-width: 500px;
  }
  .dms-services__grid {
    grid-template-columns: repeat(3, 1fr);
  }
  .dms-why__inner {
    grid-template-columns: 1fr;
    gap: var(--space-xl);
  }
  .dms-why__image-col {
    max-width: 500px;
    order: -1;
  }
  .dms-hero h1 {
    max-width: none;
  }
}
@media (max-width: 600px) {
  .dms-hero {
    min-height: 75vh;
    padding: var(--space-3xl) var(--space-4) var(--space-xl);
  }
  .dms-hero__badges {
    gap: var(--space-2);
  }
  .dms-hero__badge {
    font-size: var(--font-size-xs);
    padding: var(--space-1) var(--space-3);
  }
  .dms-hero__cta {
    flex-direction: column;
  }
  .dms-hero__cta .btn {
    width: 100%;
    text-align: center;
    justify-content: center;
  }
  .dms-services__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-sm);
  }
  .dms-service-item {
    flex-direction: column;
    text-align: center;
    padding: var(--space-md);
  }
  .dms-why__points {
    gap: var(--space-md);
  }
  .dms-cta__actions {
    flex-direction: column;
  }
  .dms-cta__actions .btn {
    width: 100%;
    text-align: center;
    justify-content: center;
  }
  .dms-about {
    padding: var(--space-3xl) var(--space-4);
  }
  .dms-services {
    padding: var(--space-3xl) var(--space-4);
  }
  .dms-why {
    padding: var(--space-3xl) var(--space-4);
  }
  .dms-cta {
    padding: var(--space-3xl) var(--space-4);
  }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


<!-- ═══════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════ -->
<section class="dms-hero" aria-label="Damascus Oregon service area hero">
  <div class="dms-hero__inner">

    <nav class="dms-hero__breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Damascus</span>
    </nav>

    <h1><span class="text-accent">Junk Removal, Excavation</span> &amp; Site Work in Damascus, OR</h1>

    <p class="dms-hero__answer">
      <?php echo htmlspecialchars($siteName); ?> is a licensed, bonded, and insured Oregon contractor headquartered in Damascus. We operate our own fleet of excavators, dump trucks, and heavy equipment to handle junk removal, demolition, land clearing, grading, and full site preparation across Clackamas County. Family-owned since <?php echo $yearEstablished; ?>, Damascus is where we live, work, and maintain our equipment yard.
    </p>

    <div class="dms-hero__badges">
      <span class="dms-hero__badge"><i data-lucide="shield-check"></i> Licensed &amp; Bonded</span>
      <span class="dms-hero__badge"><i data-lucide="shield"></i> Fully Insured</span>
      <span class="dms-hero__badge"><i data-lucide="home"></i> Damascus Home Base</span>
      <span class="dms-hero__badge"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
    </div>

    <div class="dms-hero__cta">
      <a href="/contact/" class="btn btn-accent">Get a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white">
        <i data-lucide="phone" style="width:18px;height:18px"></i> <?php echo htmlspecialchars($phone); ?>
      </a>
      <?php endif; ?>
    </div>

  </div>
</section>


<!-- Chevron Divider -->
<div class="dms-divider-chevron" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
    <path d="M0,0 L720,55 L1440,0 L1440,60 L0,60 Z"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════
     ABOUT DAMASCUS
     ═══════════════════════════════════════════════ -->
<section class="dms-about" aria-label="About Damascus Oregon">
  <div class="dms-about__inner">

    <div class="dms-about__content">
      <span class="eyebrow-label reveal-up">Our Home Base</span>
      <h2 class="reveal-up">Why Damascus Properties <span class="text-accent">Need Specialized Site Work</span></h2>

      <div class="answer-block reveal-up">
        <h3>What makes site work in Damascus, OR different from urban projects?</h3>
        <p>Damascus sits on volcanic basalt and heavy Clackamas County clay soils that complicate excavation, drainage, and grading. Properties here range from one to five acres with mature tree cover, steep grades, and limited road frontage along Boring-Damascus Road and the Hwy 212/224 corridor. Standard residential contractors often lack the heavy equipment and terrain experience these lots demand.</p>
      </div>

      <p class="reveal-left">Located in unincorporated Clackamas County southeast of Portland, Damascus retains a rural-residential character distinct from its neighbors. While Happy Valley grows rapidly to the west and Boring stretches east toward Mt. Hood, Damascus properties face unique challenges: dense undergrowth, aging outbuildings, abandoned structures, and overgrown lots that require professional demolition and land clearing before any new construction can begin.</p>

      <p class="reveal-left">Seasonal rainfall in the Willamette Valley amplifies drainage issues on Damascus land. The clay-heavy soils expand and contract with moisture cycles, which means grading, trenching, and site preparation must account for water management from the start. Our crews have worked Damascus terrain for <?php echo $yearsInBusiness; ?>+ years and understand how to stage equipment on soft ground, route drainage through clay layers, and navigate the narrow private roads that lead to many properties off Hwy 212.</p>

      <p class="reveal-left">Because our equipment yard sits right here in Damascus, mobilization costs stay low and response times stay fast. When a storm drops a tree across your driveway or a cleanout needs to happen before an estate sale closes, we can have a truck on-site within hours rather than days. That home-base advantage matters on tight project timelines.</p>
    </div>

    <div class="dms-about__image-wrap reveal-right">
      <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Workhorse Site Solutions excavation and site clearing work in Damascus, Oregon" width="600" height="450" loading="lazy">
      <div class="dms-about__float" aria-hidden="true"></div>
    </div>

  </div>
</section>


<!-- Slant Divider -->
<div class="dms-divider-slant" aria-hidden="true" style="background:var(--color-bg)">
  <svg viewBox="0 0 1440 70" preserveAspectRatio="none" fill="var(--color-bg-dark)">
    <path d="M0,70 L1440,0 L1440,70 Z"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════
     SERVICES IN DAMASCUS
     ═══════════════════════════════════════════════ -->
<section class="dms-services" aria-label="Services available in Damascus Oregon">
  <div class="dms-services__inner">

    <span class="eyebrow-label reveal-up">What We Do</span>
    <h2 class="reveal-up">Every Service We Offer <span class="text-accent">in Damascus</span></h2>
    <p class="dms-services__subtitle reveal-up">From junk removal and cleanouts to full-scale excavation and site preparation, here is every service available to Damascus property owners and builders.</p>

    <div class="dms-services__grid">
      <?php
      $serviceIcons = [
        'junk-removal-cleanouts'         => 'trash-2',
        'excavation-services'            => 'shovel',
        'demolition'                     => 'hammer',
        'land-clearing'                  => 'tree-pine',
        'tree-services'                  => 'axe',
        'site-preparation-grading'       => 'layers',
        'trenching'                      => 'ruler',
        'fence-installation'             => 'fence',
        'deck-patio-construction'        => 'home',
        'driveway-services'              => 'truck',
        'general-contracting'            => 'hard-hat',
        'commercial-residential-cleanup' => 'sparkles',
      ];
      $delay = 0;
      foreach ($services as $i => $service):
        $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
        $delay = ($i % 4) + 1;
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="dms-service-item reveal-up reveal-delay-<?php echo $delay; ?>">
        <span class="dms-service-item__icon"><i data-lucide="<?php echo $icon; ?>"></i></span>
        <span class="dms-service-item__text"><?php echo htmlspecialchars($service['name']); ?></span>
      </a>
      <?php endforeach; ?>
    </div>

    <div class="dms-services__float" aria-hidden="true"></div>
  </div>
</section>


<!-- Wave Divider -->
<div class="dms-divider-wave" aria-hidden="true" style="background:var(--color-bg-dark)">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="var(--color-bg-alt)">
    <path d="M0,25 C360,0 720,50 1080,25 C1260,12 1380,20 1440,25 L1440,50 L0,50 Z"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════
     WHY CHOOSE WORKHORSE IN DAMASCUS
     ═══════════════════════════════════════════════ -->
<section class="dms-why" aria-label="Why choose Workhorse Site Solutions in Damascus">
  <div class="dms-why__inner">

    <div class="dms-why__image-col reveal-left">
      <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse Site Solutions heavy equipment on a Damascus, OR job site" width="600" height="450" loading="lazy">
      <div class="dms-why__image-accent" aria-hidden="true"></div>
    </div>

    <div class="dms-why__content">
      <span class="eyebrow-label reveal-up">Why Workhorse</span>
      <h2 class="reveal-up">The Damascus <span class="text-accent">Home-Base Advantage</span></h2>
      <div class="dms-why__float" aria-hidden="true"></div>

      <div class="dms-why__points">

        <div class="dms-why__point reveal-right reveal-delay-1">
          <div class="dms-why__point-icon"><i data-lucide="map-pin"></i></div>
          <div>
            <h3>Based Right Here in Damascus</h3>
            <p>Our equipment yard is in Damascus, which means reduced mobilization costs and faster response times for every project in the 97089 zip code and surrounding Clackamas County.</p>
          </div>
        </div>

        <div class="dms-why__point reveal-right reveal-delay-2">
          <div class="dms-why__point-icon"><i data-lucide="truck"></i></div>
          <div>
            <h3>Own Equipment Fleet</h3>
            <p>We own our excavators, dump trucks, skid steers, and trailers. No rental markups, no waiting on third-party availability. Equipment is maintained in-house and ready to deploy.</p>
          </div>
        </div>

        <div class="dms-why__point reveal-right reveal-delay-3">
          <div class="dms-why__point-icon"><i data-lucide="file-check"></i></div>
          <div>
            <h3>Clackamas County Permit Knowledge</h3>
            <p>We know the Clackamas County permitting process for demolition, grading, and land clearing. Our crew handles setback requirements, environmental buffers, and erosion control plans specific to Damascus lots.</p>
          </div>
        </div>

        <div class="dms-why__point reveal-right reveal-delay-4">
          <div class="dms-why__point-icon"><i data-lucide="users"></i></div>
          <div>
            <h3>Family-Owned Since <?php echo $yearEstablished; ?></h3>
            <p>Workhorse is a family-run operation with <?php echo $yearsInBusiness; ?>+ years of hands-on Damascus experience. You deal directly with the owners, not a call center or sales team.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- Slant Divider (reversed) -->
<div class="dms-divider-slant" aria-hidden="true" style="background:var(--color-bg-alt)">
  <svg viewBox="0 0 1440 70" preserveAspectRatio="none" fill="var(--color-bg-dark)">
    <path d="M0,0 L1440,70 L0,70 Z"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════
     CTA SECTION
     ═══════════════════════════════════════════════ -->
<section class="dms-cta" aria-label="Get a free estimate in Damascus">
  <div class="dms-cta__inner">

    <span class="eyebrow-label reveal-up">Ready to Start?</span>
    <h2 class="reveal-up">Get a <span class="text-accent">Free Estimate</span> in Damascus</h2>
    <p class="reveal-up">Whether you need junk hauled off a Damascus property, land cleared for new construction, or a full demolition and site prep job along the Hwy 212 corridor, reach out for a no-obligation quote.</p>

    <div class="dms-cta__actions reveal-scale">
      <a href="/contact/" class="btn btn-accent">Request Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white">
        <i data-lucide="phone" style="width:18px;height:18px"></i> Call Now
      </a>
      <?php endif; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════
     LAST UPDATED
     ═══════════════════════════════════════════════ -->
<div class="dms-updated">
  <p>Last Updated: <?php echo date('F Y'); ?></p>
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

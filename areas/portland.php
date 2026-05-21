<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Junk Removal, Demolition & Site Work in Portland, OR | Workhorse Site Solutions';
$pageDescription = 'East Portland junk removal, demolition, excavation, and land clearing by Workhorse Site Solutions. Serving SE and NE Portland neighborhoods from our Damascus, OR base via I-205.';
$canonicalUrl    = $siteUrl . '/areas/portland/';
$currentPage     = 'service-area';
$cssVersion      = '2';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396350225-vjqwww-481782847_604444459246208_4830443631052873384_n.jpg';
$bodyPhoto1 = $photoBase . '1779396502364-ltrx2b-482023061_604897422534245_7415809128781428540_n.jpg';
$bodyPhoto2 = $photoBase . '1779396507580-zwl8bx-482026924_606595582364429_7705477222852745276_n.jpg';
$heroImagePreload = $heroPhoto;

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
    ['name' => 'Portland', 'url' => '/areas/portland/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>

<!-- LocalBusiness Schema — Portland Area -->
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
  "description": "Junk removal, demolition, excavation, land clearing, and site preparation services in Portland, OR.",
  "address": {
    "@type": "PostalAddress",
    <?php if (!empty($address['street'])): ?>
    "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
    <?php endif; ?>
    "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
    "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
    "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
    "addressCountry": "US"
  },
  "areaServed": {
    "@type": "City",
    "name": "Portland",
    "containedInPlace": {
      "@type": "State",
      "name": "Oregon"
    }
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     PORTLAND, OR — Service Area Page
     Workhorse Site Solutions LLC | Premium Tier
     ════════════════════════════════════════════════════════ -->

<style>
/* ══════════════════════════════════════════════════════════
   PORTLAND AREA PAGE — pdx- prefix
   400+ lines | Premium Tier | var() tokens only
   ══════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────────────── */
.pdx-hero {
  position: relative;
  min-height: 78vh;
  display: flex;
  align-items: center;
  padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
  overflow: hidden;
  background: var(--color-dark);
}
.pdx-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.pdx-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 40%;
}
.pdx-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.72) 45%,
    rgba(var(--color-primary-rgb), 0.38) 100%
  );
}
.pdx-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.pdx-hero .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.pdx-hero .breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  color: rgba(255, 255, 255, 0.55);
  margin-bottom: var(--space-6);
}
.pdx-hero .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.pdx-hero .breadcrumb a:hover {
  color: var(--color-accent);
}
.pdx-hero__content {
  max-width: 760px;
}
.pdx-hero__eyebrow {
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
.pdx-hero__eyebrow i,
.pdx-hero__eyebrow svg {
  width: 18px;
  height: 18px;
}
.pdx-hero h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.pdx-hero h1 .text-accent {
  color: var(--color-accent);
}
.pdx-hero__identity {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.85);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}
.pdx-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.pdx-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.7);
  padding: var(--space-2) var(--space-3);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: var(--radius-md);
  background: rgba(255, 255, 255, 0.05);
}
.pdx-hero__badge i,
.pdx-hero__badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.pdx-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── SVG Dividers ─────────────────────────────────────────── */
.pdx-divider-chevron,
.pdx-divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.pdx-divider-chevron svg,
.pdx-divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section Base ─────────────────────────────────────────── */
.pdx-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.pdx-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.pdx-section__eyebrow {
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
.pdx-section h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.pdx-section h2 .text-accent {
  color: var(--color-accent);
}
.pdx-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}

/* ── Floating Accents ─────────────────────────────────────── */
.pdx-section .pdx-float {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.pdx-float--1 {
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  top: -120px;
  right: -160px;
}
.pdx-float--2 {
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  bottom: -100px;
  left: -120px;
}
.pdx-float--3 {
  width: 350px;
  height: 350px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 70%);
  top: -80px;
  left: -120px;
}

/* ── Section 2: About Portland — Asymmetric Split ─────────── */
.pdx-about {
  background: var(--color-light);
}
.pdx-about__layout {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.pdx-about__text {
  position: relative;
  z-index: 1;
}
.pdx-about__text h3 {
  font-size: var(--fs-h3);
  margin-bottom: var(--space-4);
  text-wrap: balance;
  color: var(--color-primary);
}
.pdx-about__text p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  margin-bottom: var(--space-4);
  max-width: var(--content-width);
}
.pdx-about__text p:last-child {
  margin-bottom: 0;
}
.pdx-about__image-stack {
  position: relative;
  z-index: 1;
}
.pdx-about__img-primary {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3;
}
.pdx-about__img-primary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.pdx-about__img-secondary {
  position: absolute;
  bottom: -40px;
  left: -30px;
  width: 55%;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  border: 4px solid var(--color-light);
  aspect-ratio: 4 / 3;
}
.pdx-about__img-secondary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.pdx-about__highlight {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4);
  background: rgba(var(--color-accent-rgb), 0.08);
  border-left: 4px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-6) 0;
  font-weight: 600;
  color: var(--color-primary);
  font-size: var(--font-size-sm);
}
.pdx-about__highlight i,
.pdx-about__highlight svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── Section 4: Services — Dark Background ────────────────── */
.pdx-services {
  background: var(--color-dark);
  color: var(--color-white);
}
.pdx-services h2 {
  color: var(--color-white);
}
.pdx-services .answer-block {
  color: rgba(255, 255, 255, 0.7);
}
.pdx-services .pdx-section__eyebrow {
  color: var(--color-accent);
}
.pdx-services__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
}
.pdx-services__item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4) var(--space-5);
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-md);
  transition: background var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast);
}
.pdx-services__item:hover {
  background: rgba(255, 255, 255, 0.08);
  border-color: rgba(var(--color-accent-rgb), 0.3);
  transform: translateY(-2px);
}
.pdx-services__item i,
.pdx-services__item svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.pdx-services__item span {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.9);
}

/* ── Section 6: Why Choose — Asymmetric Split ─────────────── */
.pdx-why {
  background: var(--color-bg);
}
.pdx-why__layout {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-12);
  align-items: center;
}
.pdx-why__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 3 / 4;
  box-shadow: var(--shadow-lg);
}
.pdx-why__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.pdx-why__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.pdx-why__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.pdx-why__point {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.pdx-why__point-icon {
  flex-shrink: 0;
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.pdx-why__point-icon i,
.pdx-why__point-icon svg {
  width: 24px;
  height: 24px;
}
.pdx-why__point h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  color: var(--color-primary);
}
.pdx-why__point p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.65;
  max-width: 50ch;
}

/* ── Section 8: CTA ───────────────────────────────────────── */
.pdx-cta {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.pdx-cta::before {
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
.pdx-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.pdx-cta .answer-block {
  color: rgba(255, 255, 255, 0.7);
  margin: 0 auto var(--space-8);
}
.pdx-cta__actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── Last Updated ─────────────────────────────────────────── */
.pdx-last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── Responsive: 1024px ───────────────────────────────────── */
@media (max-width: 1024px) {
  .pdx-hero {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .pdx-about__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .pdx-about__image-stack {
    order: -1;
    max-width: 560px;
  }
  .pdx-about__img-secondary {
    bottom: -20px;
    left: -15px;
    width: 45%;
  }
  .pdx-services__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .pdx-why__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .pdx-why__image {
    max-width: 480px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
}

/* ── Responsive: 600px ────────────────────────────────────── */
@media (max-width: 600px) {
  .pdx-hero h1 {
    font-size: clamp(1.75rem, 7vw, 2.5rem);
  }
  .pdx-hero__badges {
    flex-direction: column;
    gap: var(--space-2);
  }
  .pdx-hero__ctas {
    flex-direction: column;
  }
  .pdx-services__grid {
    grid-template-columns: 1fr;
  }
  .pdx-about__img-secondary {
    width: 50%;
    bottom: -15px;
    left: -10px;
  }
  .pdx-cta__actions {
    flex-direction: column;
  }
  .pdx-why__point {
    flex-direction: column;
    gap: var(--space-3);
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="pdx-hero" aria-label="Portland service area">
  <div class="pdx-hero__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions heavy equipment on a Portland, Oregon job site" width="1920" height="1080" fetchpriority="high">
  </div>
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/service-area/">Service Area</a>
      <span class="breadcrumb-sep">/</span>
      <span aria-current="page">Portland</span>
    </nav>
    <div class="pdx-hero__content">
      <span class="pdx-hero__eyebrow"><i data-lucide="map-pin"></i> Portland, OR</span>
      <h1>Junk Removal, Demolition &amp; <span class="text-accent">Site Work</span> in Portland, OR</h1>
      <p class="pdx-hero__identity">Workhorse Site Solutions is a licensed, bonded, and insured Oregon general contractor based in Damascus, OR, providing junk removal, demolition, excavation, and land clearing services throughout East Portland. We reach SE and NE Portland job sites in under 25 minutes via I-205 and 82nd Avenue.</p>
      <div class="pdx-hero__badges">
        <span class="pdx-hero__badge"><i data-lucide="shield-check"></i> Licensed</span>
        <span class="pdx-hero__badge"><i data-lucide="badge-check"></i> Bonded</span>
        <span class="pdx-hero__badge"><i data-lucide="shield"></i> Insured</span>
        <span class="pdx-hero__badge"><i data-lucide="clock"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      </div>
      <div class="pdx-hero__ctas">
        <a href="/contact/" class="btn btn-accent">Get a Free Portland Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron
     ═══════════════════════════════════════════════════════ -->
<div class="pdx-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: ABOUT PORTLAND — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="pdx-section pdx-about" aria-label="About Portland service area">
  <div class="pdx-float pdx-float--1"></div>
  <div class="container">
    <span class="pdx-section__eyebrow reveal-up">East Portland Focus</span>
    <h2 class="reveal-up">What makes Portland's <span class="text-accent">east side</span> different for site work?</h2>
    <div class="answer-block reveal-up">
      <p>East Portland properties present a distinct set of challenges: aging post-war homes on compact 5,000 to 7,000 square-foot lots, overgrown backyard structures from decades of deferred maintenance, and active infill development that demands precise demolition and excavation on tight urban parcels. Workhorse Site Solutions handles all of it.</p>
    </div>

    <div class="pdx-about__layout">
      <div class="pdx-about__text reveal-up">
        <h3>SE &amp; NE Portland Neighborhoods We Serve</h3>
        <p>Our Portland crews work primarily in East Portland neighborhoods where teardown-and-rebuild projects are reshaping the housing stock. In Lents, we clear overgrown lots and remove condemned structures to make way for new construction. Along the Foster-Powell corridor, we handle junk removal and cleanout work for flipped bungalows and aging duplexes. In Montavilla, our compact equipment fits through narrow side yards that full-size rigs cannot reach.</p>

        <p>Powellhurst-Gilbert sees some of the heaviest infill development in Portland right now. Developers split standard lots into two or three parcels, and each one needs demolition of the existing structure, site clearing, grading, and utility trenching before new foundations go in. We run these projects from start to backfill, keeping the timeline tight and the neighbors informed.</p>

        <div class="pdx-about__highlight">
          <i data-lucide="alert-triangle"></i>
          <span>Portland projects fall under Multnomah County jurisdiction — different permit requirements than our Clackamas County home base. We handle both.</span>
        </div>

        <p>The Division Street corridor between SE 82nd and SE 162nd is a mix of commercial strip properties and residential side streets. We provide construction site cleanup for contractors building mixed-use projects along Division, and junk removal for the residential streets behind them. Powell Boulevard commercial properties regularly need demolition, concrete removal, and site prep for tenant improvements and redevelopment.</p>

        <p>Getting to Portland from our Damascus base is straightforward. I-205 puts us at SE 82nd Avenue in under 20 minutes. We stage equipment early and run full-day shifts to minimize mobilization costs for Portland clients. Our crew knows which Portland side streets can handle a dump truck and which require a smaller trailer setup — saving time and avoiding damage to curbs and landscaping.</p>
      </div>
      <div class="pdx-about__image-stack reveal-right">
        <div class="pdx-about__img-primary">
          <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Excavation and site clearing on an East Portland residential lot" width="600" height="450" loading="lazy">
        </div>
        <div class="pdx-about__img-secondary">
          <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse crew performing junk removal in a Portland, OR neighborhood" width="360" height="270" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="pdx-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: SERVICES — Dark Background
     ═══════════════════════════════════════════════════════ -->
<section class="pdx-section pdx-services" aria-label="Services available in Portland">
  <div class="container">
    <span class="pdx-section__eyebrow reveal-up">Full Service Lineup</span>
    <h2 class="reveal-up">Which <span class="text-accent">site services</span> does Workhorse bring to Portland?</h2>
    <p class="answer-block reveal-up">Every service we offer in Damascus is available in Portland. From single-item junk pickups to full-lot demolition and regrading, the same licensed crew and owned equipment fleet handles your Portland project at flat-rate pricing.</p>

    <div class="pdx-services__grid">
      <?php
      $serviceIcons = [
        'Junk Removal & Cleanouts' => 'trash-2',
        'Excavation Services' => 'shovel',
        'Demolition' => 'hammer',
        'Land Clearing' => 'trees',
        'Tree Services' => 'tree-pine',
        'Site Preparation & Grading' => 'ruler',
        'Trenching' => 'pickaxe',
        'Fence Installation' => 'fence',
        'Deck & Patio Construction' => 'home',
        'Driveway Services' => 'truck',
        'General Contracting' => 'hard-hat',
        'Commercial & Residential Cleanup' => 'sparkles',
      ];
      foreach ($services as $i => $service):
        $icon = $serviceIcons[$service['name']] ?? 'check-circle';
        $delay = ($i % 4) + 1;
      ?>
      <div class="pdx-services__item reveal-up reveal-delay-<?php echo $delay; ?>">
        <i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i>
        <span><?php echo htmlspecialchars($service['name']); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron (light)
     ═══════════════════════════════════════════════════════ -->
<div class="pdx-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 6: WHY CHOOSE — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="pdx-section pdx-why" aria-label="Why choose Workhorse for Portland projects">
  <div class="pdx-float pdx-float--2"></div>
  <div class="container">
    <span class="pdx-section__eyebrow reveal-up">Portland Advantage</span>
    <h2 class="reveal-up">Why hire a <span class="text-accent">Damascus-based crew</span> for your Portland project?</h2>
    <p class="answer-block reveal-up">East Portland junk removal and demolition near me in Portland means a crew that arrives with its own equipment, knows the Multnomah County permit process, and finishes the job without subcontracting. Here is what sets Workhorse apart on Portland job sites.</p>

    <div class="pdx-why__layout">
      <div class="pdx-why__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse Site Solutions equipment operating on a tight Portland lot" width="480" height="640" loading="lazy">
      </div>
      <div>
        <div class="pdx-why__points">
          <div class="pdx-why__point reveal-right reveal-delay-1">
            <div class="pdx-why__point-icon"><i data-lucide="building-2"></i></div>
            <div>
              <h3>Urban Lot Experience</h3>
              <p>Portland's East Side lots average 5,000 to 7,000 square feet with narrow side access. We bring compact excavators and skid steers that fit through 8-foot gates and work within 3 feet of property lines without damaging neighboring structures.</p>
            </div>
          </div>
          <div class="pdx-why__point reveal-right reveal-delay-2">
            <div class="pdx-why__point-icon"><i data-lucide="trash-2"></i></div>
            <div>
              <h3>Junk Removal Specialization</h3>
              <p>Portland estate cleanouts, tenant turnovers, and renovation debris account for a large share of our urban work. We handle the hauling, sorting, donation drops, and dump runs in a single visit — no dumpster rental wait times.</p>
            </div>
          </div>
          <div class="pdx-why__point reveal-right reveal-delay-3">
            <div class="pdx-why__point-icon"><i data-lucide="hammer"></i></div>
            <div>
              <h3>Demolition for Older Structures</h3>
              <p>Many East Portland homes date to the 1940s through 1960s. Demolition on these structures requires asbestos awareness, lead paint protocols, and careful material separation. Our crew is trained and equipped for pre-1980 teardowns.</p>
            </div>
          </div>
          <div class="pdx-why__point reveal-right reveal-delay-4">
            <div class="pdx-why__point-icon"><i data-lucide="route"></i></div>
            <div>
              <h3>Short Commute, No Surcharge</h3>
              <p>Damascus to East Portland is a 20-minute drive on I-205. We do not charge mobilization premiums for Portland projects. Same flat-rate pricing as jobs at our home base — the short commute means more hours on your site, not on the road.</p>
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
<div class="pdx-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 8: CTA
     ═══════════════════════════════════════════════════════ -->
<section class="pdx-section pdx-cta" aria-label="Get a free estimate in Portland">
  <div class="container">
    <span class="pdx-section__eyebrow reveal-up">Get Started</span>
    <h2 class="reveal-up">Get a Free Estimate <span class="text-accent">in Portland</span></h2>
    <p class="answer-block reveal-up">Whether you need a single-load junk pickup in Lents, a full structure demolition in Montavilla, or site grading for new construction in Powellhurst-Gilbert — Workhorse Site Solutions delivers licensed, insured, flat-rate project pricing across East Portland. Tell us what you need and expect an estimate within 24 hours.</p>
    <div class="pdx-cta__actions reveal-up">
      <a href="/contact/" class="btn btn-accent">Request Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="pdx-last-updated">Last Updated: <?php echo date('F Y'); ?></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

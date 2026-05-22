<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Junk Removal & Excavation Services in Gresham, OR | Workhorse Site Solutions';
$pageDescription = 'Workhorse Site Solutions provides junk removal, excavation, demolition, and land clearing in Gresham, OR. Licensed Oregon contractor based in Damascus serving Multnomah County.';
$canonicalUrl    = $siteUrl . '/areas/gresham/';
$currentPage     = 'service-area';
$cssVersion      = '6';
$heroImagePreload = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg';
$bodyPhoto1 = $photoBase . '1779396406327-bhwsnx-481952463_607412438949410_6548744902460523750_n.jpg';
$bodyPhoto2 = $photoBase . '1779396417127-e2a67v-481978105_604909045866416_5049096311889908819_n.jpg';

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
    ['name' => 'Gresham', 'url' => '/areas/gresham/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>

<!-- LocalBusiness Schema — Gresham Service Area -->
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
  "areaServed": {
    "@type": "City",
    "name": "Gresham",
    "containedInPlace": {
      "@type": "State",
      "name": "Oregon"
    }
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     SERVICE AREA PAGE — Gresham, OR
     Workhorse Site Solutions LLC | Premium Tier
     ════════════════════════════════════════════════════════ -->

<style>
/* ══════════════════════════════════════════════════════════
   GRESHAM, OR — Service Area Page Styles
   Prefix: grsh-
   ══════════════════════════════════════════════════════════ */

/* ── Hero ────────────────────────────────────────────────── */
.grsh-hero {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: var(--color-dark);
}
.grsh-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.grsh-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 40%;
}
.grsh-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.68) 50%,
    rgba(var(--color-primary-rgb), 0.32) 100%
  );
}
.grsh-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.grsh-hero .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.grsh-hero .breadcrumb {
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
.grsh-hero .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.grsh-hero .breadcrumb a:hover {
  color: var(--color-accent);
}
.grsh-hero__content {
  max-width: 760px;
}
.grsh-hero__eyebrow {
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
.grsh-hero__eyebrow i,
.grsh-hero__eyebrow svg {
  width: 18px;
  height: 18px;
}
.grsh-hero h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.grsh-hero h1 .text-accent {
  color: var(--color-accent);
}
.grsh-hero .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.85);
  max-width: 60ch;
  margin-bottom: var(--space-8);
}
.grsh-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.grsh-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.75);
  padding: var(--space-2) var(--space-3);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: var(--radius-md);
  background: rgba(255, 255, 255, 0.04);
}
.grsh-hero__badge i,
.grsh-hero__badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.grsh-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── Section Base ─────────────────────────────────────────── */
.grsh-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.grsh-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.grsh-section__eyebrow {
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
.grsh-section h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.grsh-section h2 .text-accent {
  color: var(--color-accent);
}
.grsh-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}

/* ── SVG Dividers ─────────────────────────────────────────── */
.grsh-divider-chevron,
.grsh-divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.grsh-divider-chevron svg,
.grsh-divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section: About Gresham ───────────────────────────────── */
.grsh-about {
  background: var(--color-bg);
}
.grsh-about__layout {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.grsh-about__text {
  position: relative;
  z-index: 1;
}
.grsh-about__text p {
  font-size: var(--font-size-base);
  line-height: 1.75;
  color: var(--color-gray-dark);
  margin-bottom: var(--space-6);
  max-width: 62ch;
}
.grsh-about__text p:last-child {
  margin-bottom: 0;
}
.grsh-about__image-wrap {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.grsh-about__image-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.grsh-about__image-wrap::before {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-xl);
  pointer-events: none;
  z-index: 2;
}
.grsh-about__image-wrap::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 40%;
  background: linear-gradient(to top, rgba(var(--color-primary-rgb), 0.2), transparent);
  pointer-events: none;
  z-index: 1;
}
.grsh-about .floating-accent--a1 {
  width: 350px;
  height: 350px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  top: -120px;
  right: -100px;
}
.grsh-about .floating-accent--a2 {
  width: 260px;
  height: 260px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.05) 0%, transparent 70%);
  bottom: -80px;
  left: -80px;
}

/* ── Answer Block ─────────────────────────────────────────── */
.grsh-answer-block {
  background: var(--color-card-tint-3);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-6) var(--space-8);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
}
.grsh-answer-block h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.grsh-answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: 0;
}

/* ── Section: Services — Dark ─────────────────────────────── */
.grsh-services {
  background: var(--color-dark);
  color: var(--color-white);
}
.grsh-services h2 {
  color: var(--color-white);
}
.grsh-services .grsh-section__eyebrow {
  color: var(--color-accent);
}
.grsh-services__intro {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.7);
  max-width: 62ch;
  margin-bottom: var(--space-10);
}
.grsh-services__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-4);
}
.grsh-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-5) var(--space-6);
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  transition: background var(--transition-base), border-color var(--transition-base), transform var(--transition-base);
}
.grsh-service-item:hover {
  background: rgba(255, 255, 255, 0.08);
  border-color: rgba(var(--color-accent-rgb), 0.3);
  transform: translateY(-2px);
}
.grsh-service-item i,
.grsh-service-item svg {
  width: 22px;
  height: 22px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.grsh-service-item span {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.85);
}
.grsh-service-item a {
  color: rgba(255, 255, 255, 0.85);
  text-decoration: none;
  font-size: var(--font-size-sm);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.grsh-service-item a:hover {
  color: var(--color-accent);
}

/* ── Section: Why Choose — Asymmetric Split ───────────────── */
.grsh-why {
  background: var(--color-light);
}
.grsh-why__layout {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-12);
  align-items: center;
}
.grsh-why__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 3 / 4;
}
.grsh-why__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.grsh-why__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.grsh-why__image-badge {
  position: absolute;
  bottom: var(--space-4);
  left: var(--space-4);
  z-index: 2;
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-sm);
}
.grsh-why__image-badge i,
.grsh-why__image-badge svg {
  width: 14px;
  height: 14px;
}
.grsh-why__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.grsh-why__point {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.grsh-why__point-icon {
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
.grsh-why__point-icon i,
.grsh-why__point-icon svg {
  width: 24px;
  height: 24px;
}
.grsh-why__point h3 {
  font-size: var(--font-size-lg);
  color: var(--color-primary);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.grsh-why__point p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.65;
  max-width: 50ch;
}
.grsh-why .floating-accent--w1 {
  width: 320px;
  height: 320px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 70%);
  top: -60px;
  left: -120px;
}

/* ── Section: Final CTA ───────────────────────────────────── */
.grsh-cta {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.grsh-cta::before {
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
.grsh-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.grsh-cta__desc {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.7);
  max-width: 54ch;
  margin: 0 auto var(--space-8);
}
.grsh-cta__buttons {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── Last Updated ─────────────────────────────────────────── */
.grsh-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ══════════════════════════════════════════════════════════
   RESPONSIVE — 1024px
   ══════════════════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .grsh-hero {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .grsh-about__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .grsh-about__image-wrap {
    max-width: 500px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
  .grsh-services__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .grsh-why__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .grsh-why__image {
    max-width: 480px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
}

/* ══════════════════════════════════════════════════════════
   RESPONSIVE — 600px
   ══════════════════════════════════════════════════════════ */
@media (max-width: 600px) {
  .grsh-hero h1 {
    font-size: clamp(1.8rem, 7vw, 2.8rem);
  }
  .grsh-hero__badges {
    flex-direction: column;
    gap: var(--space-2);
  }
  .grsh-hero__ctas {
    flex-direction: column;
  }
  .grsh-services__grid {
    grid-template-columns: 1fr;
  }
  .grsh-answer-block {
    padding: var(--space-4) var(--space-5);
  }
  .grsh-cta__buttons {
    flex-direction: column;
  }
  .grsh-why__point {
    flex-direction: column;
    gap: var(--space-3);
  }
}
</style>

<main id="main-content">

<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="grsh-hero" aria-label="Gresham OR service area hero">
  <div class="grsh-hero__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions equipment clearing a job site near Gresham, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/service-area/">Service Area</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Gresham</span>
  </nav>
  <div class="container">
    <div class="grsh-hero__content">
      <span class="grsh-hero__eyebrow"><i data-lucide="map-pin"></i> Gresham, OR</span>
      <h1>Junk Removal &amp; <span class="text-accent">Excavation Services</span> in Gresham, OR</h1>
      <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed, bonded, and insured Oregon contractor based in Damascus — just minutes south of Gresham. We provide junk removal, excavation, demolition, land clearing, and site preparation for residential and commercial properties across Gresham and eastern Multnomah County.</p>
      <div class="grsh-hero__badges">
        <span class="grsh-hero__badge"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
        <span class="grsh-hero__badge"><i data-lucide="clock"></i> <?php echo $yearsInBusiness; ?>+ Years Experience</span>
        <span class="grsh-hero__badge"><i data-lucide="truck"></i> Own Equipment Fleet</span>
      </div>
      <div class="grsh-hero__ctas">
        <a href="/contact/" class="btn btn-accent">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call <?php echo formatPhone($phone); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron
     ═══════════════════════════════════════════════════════ -->
<div class="grsh-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: ABOUT GRESHAM
     ═══════════════════════════════════════════════════════ -->
<section class="grsh-section grsh-about" aria-label="About Gresham Oregon">
  <div class="floating-accent floating-accent--a1"></div>
  <div class="floating-accent floating-accent--a2"></div>
  <div class="container">
    <span class="grsh-section__eyebrow reveal-up">Local Knowledge</span>
    <h2 class="reveal-up">Why does Gresham need <span class="text-accent">specialized site work</span> contractors?</h2>

    <div class="grsh-about__layout">
      <div class="grsh-about__text">
        <div class="grsh-answer-block answer-block reveal-up">
          <h3>What junk removal and excavation services are available near me in Gresham, OR?</h3>
          <p><?php echo htmlspecialchars($siteName); ?> handles junk removal, property cleanouts, excavation, demolition, land clearing, grading, trenching, and fence installation throughout Gresham. As a Damascus-based contractor operating <?php echo $yearsInBusiness; ?>+ years in the Portland Metro area, we bring heavy equipment and trained crews to Gresham job sites with typical response times under 48 hours.</p>
        </div>

        <p class="reveal-up">Gresham is the second-largest city in Multnomah County and the fourth-largest in Oregon — a growing hub of residential infill development and commercial construction along the Powell Blvd corridor. From the older neighborhoods surrounding Main City Park and the historic downtown district to the rapid development happening in Pleasant Valley and Rockwood, Gresham properties face a wide range of site work demands that require experienced operators and proper equipment.</p>

        <p class="reveal-up">The city sits at the base of the Cascade foothills, where soil conditions shift from Willamette Valley clay to volcanic rock within a few miles. Residential lots near Mt. Hood Community College and the Pleasant Valley area often require excavation crews who understand these transitional soil layers — poor preparation leads to drainage failures, foundation settling, and costly rework. Gresham's mix of 1950s-era homes needing cleanouts and modern subdivisions requiring full site prep keeps our crews busy year-round.</p>

        <p class="reveal-up">New infill development east of 182nd Avenue and the ongoing commercial growth along Burnside Road mean more demolition, land clearing, and grading projects in Gresham than at any point in the last decade. Our Damascus headquarters is located just south of Gresham via Highway 212 — a 15-minute drive that keeps mobilization costs low and scheduling responsive for Gresham homeowners and developers.</p>

        <p class="reveal-up">Whether you are clearing a wooded lot near Hogan Butte, hauling construction debris from a Rockwood renovation, or grading a new driveway in the Powell Valley corridor, <?php echo htmlspecialchars($siteName); ?> brings the same licensed, insured, flat-rate approach that has earned repeat business across eastern Multnomah and northern Clackamas counties.</p>
      </div>

      <div class="grsh-about__image-wrap reveal-right">
        <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Excavation and land clearing project completed by Workhorse Site Solutions near Gresham, Oregon" width="600" height="750" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="grsh-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: SERVICES — Dark Background
     ═══════════════════════════════════════════════════════ -->
<section class="grsh-section grsh-services" aria-label="Services available in Gresham">
  <div class="container">
    <span class="grsh-section__eyebrow reveal-up"><i data-lucide="wrench"></i> Full Service Menu</span>
    <h2 class="reveal-up">What services does <?php echo htmlspecialchars($siteName); ?> offer <span class="text-accent">in Gresham</span>?</h2>
    <p class="grsh-services__intro reveal-up">Every service we provide in Damascus is available to Gresham properties. Same crew, same equipment fleet, same flat-rate pricing — with minimal mobilization time from our shop to your Gresham job site.</p>

    <div class="grsh-services__grid">
      <?php
      $serviceIcons = [
        'junk-removal-cleanouts' => 'trash-2',
        'excavation-services' => 'hard-hat',
        'demolition' => 'hammer',
        'land-clearing' => 'tree-pine',
        'tree-services' => 'axe',
        'site-preparation-grading' => 'ruler',
        'trenching' => 'shovel',
        'fence-installation' => 'fence',
        'deck-patio-construction' => 'home',
        'driveway-services' => 'truck',
        'general-contracting' => 'building-2',
        'commercial-residential-cleanup' => 'sparkles',
      ];
      $delay = 0;
      foreach ($services as $i => $service):
        $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
        $delay = ($i % 4) + 1;
      ?>
      <div class="grsh-service-item reveal-up reveal-delay-<?php echo $delay; ?>">
        <i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i>
        <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/"><?php echo htmlspecialchars($service['name']); ?></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron (into light bg)
     ═══════════════════════════════════════════════════════ -->
<div class="grsh-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: WHY CHOOSE — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="grsh-section grsh-why" aria-label="Why hire Workhorse in Gresham">
  <div class="floating-accent floating-accent--w1"></div>
  <div class="container">
    <span class="grsh-section__eyebrow reveal-up">Local Advantage</span>
    <h2 class="reveal-up">Why hire a <span class="text-accent">Damascus-based contractor</span> for Gresham projects?</h2>

    <div class="grsh-why__layout">
      <div class="grsh-why__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse Site Solutions crew and equipment on a Gresham area project" width="600" height="800" loading="lazy">
        <span class="grsh-why__image-badge"><i data-lucide="map-pin"></i> 15 min from Gresham</span>
      </div>
      <div>
        <div class="grsh-why__points">
          <div class="grsh-why__point reveal-right reveal-delay-1">
            <div class="grsh-why__point-icon"><i data-lucide="navigation"></i></div>
            <div>
              <h3>Damascus Is Next Door</h3>
              <p>Our equipment yard in Damascus sits 15 minutes south of Gresham via Highway 212 and SE 172nd Avenue. That proximity means faster response, lower mobilization fees, and same-week scheduling for most Gresham projects.</p>
            </div>
          </div>
          <div class="grsh-why__point reveal-right reveal-delay-2">
            <div class="grsh-why__point-icon"><i data-lucide="truck"></i></div>
            <div>
              <h3>Full Equipment Fleet — No Rentals</h3>
              <p>Excavators, skid steers, dump trucks, and trailers — all owned outright. No hourly rental markups on your invoice. Flat-rate project pricing means the price we quote is the price you pay.</p>
            </div>
          </div>
          <div class="grsh-why__point reveal-right reveal-delay-3">
            <div class="grsh-why__point-icon"><i data-lucide="mountain"></i></div>
            <div>
              <h3>Multnomah County Soil Knowledge</h3>
              <p>Gresham lots sit on transitional soil — Willamette Valley clay in the lowlands, volcanic rock near the foothills. Our operators have dug thousands of yards in these conditions and know what lies beneath before the bucket hits dirt.</p>
            </div>
          </div>
          <div class="grsh-why__point reveal-right reveal-delay-4">
            <div class="grsh-why__point-icon"><i data-lucide="shield-check"></i></div>
            <div>
              <h3>Licensed, Bonded &amp; Insured</h3>
              <p>Oregon CCB licensed with full general liability and worker's compensation coverage. Every Gresham project is backed by proper insurance — no gaps, no excuses, no risk transferred to the property owner.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant (into dark CTA)
     ═══════════════════════════════════════════════════════ -->
<div class="grsh-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="grsh-section grsh-cta" aria-label="Request free estimate in Gresham">
  <div class="container">
    <span class="grsh-section__eyebrow reveal-up">Get Started</span>
    <h2 class="reveal-up">Get a <span class="text-accent">Free Estimate</span> in Gresham</h2>
    <p class="grsh-cta__desc reveal-up">Whether you need a full property cleanout in Rockwood, excavation for a new build near Pleasant Valley, or demolition along the Powell Blvd corridor — <?php echo htmlspecialchars($siteName); ?> delivers licensed, insured, flat-rate project pricing with estimates returned within 24 hours.</p>
    <div class="grsh-cta__buttons reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>

</main>

<!-- Last Updated -->
<div class="grsh-updated">Last Updated: <?php echo date('F Y'); ?></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Site Preparation, Junk Removal & Excavation in Clackamas, OR | Workhorse Site Solutions';
$pageDescription = 'Workhorse Site Solutions provides junk removal, excavation, demolition, land clearing, and site preparation in Clackamas, OR. Licensed, bonded, insured contractor based in Damascus serving the I-205 corridor.';
$canonicalUrl    = $siteUrl . '/areas/clackamas/';
$currentPage     = 'service-area';
$cssVersion      = '6';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase  = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto  = $photoBase . '1779396339937-xc7wc2-481770700_605954432428544_6388616634957804134_n.jpg';
$bodyPhoto1 = $photoBase . '1779396489173-cg4ed1-482006548_606613672362620_3354096622405912585_n.jpg';
$bodyPhoto2 = $photoBase . '1779396497349-2dn37x-482022810_604444699246184_1773549380605693853_n.jpg';

$heroImagePreload = $heroPhoto;

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
    ['name' => 'Clackamas',    'url' => '/areas/clackamas/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>

<!-- LocalBusiness Schema — Clackamas Area Served -->
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
  "description": "<?php echo htmlspecialchars($tagline); ?>",
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
    "name": "Clackamas",
    "containedInPlace": {
      "@type": "State",
      "name": "Oregon"
    }
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     SERVICE AREA: CLACKAMAS, OR — Workhorse Site Solutions LLC
     Premium Tier | Individual City Page
     ════════════════════════════════════════════════════════ -->

<style>
/* ══════════════════════════════════════════════════════════
   CLACKAMAS AREA PAGE — clk- prefix
   Premium Tier | 400+ lines | var() tokens only
   ══════════════════════════════════════════════════════════ */

/* ── Hero ─────────────────────────────────────────────────── */
.clk-hero {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: var(--color-dark);
}
.clk-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.clk-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 40%;
}
.clk-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.68) 50%,
    rgba(var(--color-primary-rgb), 0.32) 100%
  );
}
.clk-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events: none;
}
.clk-hero .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.clk-hero .breadcrumb {
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
.clk-hero .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.clk-hero .breadcrumb a:hover {
  color: var(--color-accent);
}
.clk-hero__content {
  max-width: 740px;
}
.clk-hero__eyebrow {
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
.clk-hero__eyebrow i,
.clk-hero__eyebrow svg {
  width: 18px;
  height: 18px;
}
.clk-hero h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.clk-hero h1 .text-accent {
  color: var(--color-accent);
}
.clk-hero .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.85);
  max-width: 60ch;
  margin-bottom: var(--space-8);
}
.clk-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.clk-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.8);
  padding: var(--space-2) var(--space-3);
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-sm);
}
.clk-hero__badge i,
.clk-hero__badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.clk-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── Section Base ─────────────────────────────────────────── */
.clk-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.clk-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.clk-section__eyebrow {
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
.clk-section h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.clk-section h2 .text-accent {
  color: var(--color-accent);
}
.clk-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}
.clk-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.clk-section .clk-float-1 {
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  top: -120px;
  right: -160px;
}
.clk-section .clk-float-2 {
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  bottom: -90px;
  left: -120px;
}

/* ── SVG Dividers ─────────────────────────────────────────── */
.clk-divider-chevron,
.clk-divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.clk-divider-chevron svg,
.clk-divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section: About Clackamas ─────────────────────────────── */
.clk-about {
  background: var(--color-bg);
}
.clk-about__layout {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-12);
  align-items: center;
}
.clk-about__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.clk-about__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.clk-about__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.clk-about__text p {
  font-size: var(--font-size-base);
  color: var(--color-gray-dark);
  line-height: 1.7;
  max-width: var(--content-width);
  margin-bottom: var(--space-4);
}
.clk-about__text p:last-child {
  margin-bottom: 0;
}
.clk-about__highlights {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.clk-about__highlight {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-card-tint-neutral);
  border: 1px solid var(--color-border);
}
.clk-about__highlight i,
.clk-about__highlight svg {
  width: 20px;
  height: 20px;
  flex-shrink: 0;
  color: var(--color-accent);
  margin-top: 2px;
}
.clk-about__highlight span {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-primary);
  line-height: 1.4;
}

/* ── Section: Services — Dark ─────────────────────────────── */
.clk-services {
  background: var(--color-dark);
  color: var(--color-white);
}
.clk-services h2 {
  color: var(--color-white);
}
.clk-services .answer-block {
  color: rgba(255, 255, 255, 0.7);
}
.clk-services .clk-section__eyebrow {
  color: var(--color-accent);
}
.clk-services__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
}
.clk-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4) var(--space-5);
  border-radius: var(--radius-md);
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.08);
  transition: background var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast);
}
.clk-service-item:hover {
  background: rgba(255, 255, 255, 0.08);
  border-color: rgba(var(--color-accent-rgb), 0.3);
  transform: translateY(-2px);
}
.clk-service-item i,
.clk-service-item svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.clk-service-item span {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.85);
}

/* ── Section: Why Choose ─────────────────────────────────── */
.clk-why {
  background: var(--color-light);
}
.clk-why__layout {
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.clk-why__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.clk-why__point {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.clk-why__point-icon {
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
.clk-why__point-icon i,
.clk-why__point-icon svg {
  width: 24px;
  height: 24px;
}
.clk-why__point h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  color: var(--color-primary);
}
.clk-why__point p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.65;
  max-width: 48ch;
}
.clk-why__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.clk-why__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.clk-why__image::before {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-xl);
  pointer-events: none;
  z-index: 1;
}
.clk-why__image::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 30%;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.25) 0%, transparent 100%);
  pointer-events: none;
  z-index: 1;
}

/* ── CTA Banner ───────────────────────────────────────────── */
.clk-cta {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.clk-cta::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 750px;
  height: 750px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 70%);
  pointer-events: none;
}
.clk-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.clk-cta .answer-block {
  color: rgba(255, 255, 255, 0.7);
  margin: 0 auto var(--space-8);
}
.clk-cta__buttons {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── Last Updated ─────────────────────────────────────────── */
.clk-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ══════════════════════════════════════════════════════════
   RESPONSIVE
   ══════════════════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .clk-hero {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .clk-about__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .clk-about__image {
    max-width: 500px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
  .clk-services__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .clk-why__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .clk-why__image {
    max-width: 500px;
    aspect-ratio: 16 / 10;
  }
  .clk-about__highlights {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 600px) {
  .clk-hero h1 {
    font-size: clamp(2rem, 8vw, 3rem);
  }
  .clk-hero__badges {
    flex-direction: column;
    gap: var(--space-2);
  }
  .clk-hero__ctas {
    flex-direction: column;
  }
  .clk-services__grid {
    grid-template-columns: 1fr;
  }
  .clk-cta__buttons {
    flex-direction: column;
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="clk-hero" aria-label="Clackamas service area overview">
  <div class="clk-hero__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions equipment working on a commercial job site in Clackamas, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/service-area/">Service Area</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Clackamas</span>
  </nav>
  <div class="container">
    <div class="clk-hero__content">
      <span class="clk-hero__eyebrow"><i data-lucide="map-pin"></i> Clackamas, OR</span>
      <h1>Site Preparation, <span class="text-accent">Junk Removal</span> &amp; Excavation in Clackamas, OR</h1>
      <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed, bonded, and insured Oregon general contractor based in Damascus, providing full-service junk removal, excavation, demolition, and land clearing to residential and commercial properties throughout Clackamas. From warehouse cleanouts along the I-205 corridor to site grading for new infill development, our crew and equipment fleet are minutes away.</p>
      <div class="clk-hero__badges">
        <span class="clk-hero__badge"><i data-lucide="shield-check"></i> Licensed</span>
        <span class="clk-hero__badge"><i data-lucide="badge-check"></i> Bonded</span>
        <span class="clk-hero__badge"><i data-lucide="shield"></i> Insured</span>
        <span class="clk-hero__badge"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      </div>
      <div class="clk-hero__ctas">
        <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
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
<div class="clk-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: ABOUT CLACKAMAS
     ═══════════════════════════════════════════════════════ -->
<section class="clk-section clk-about" aria-label="About Clackamas service area">
  <div class="floating-accent clk-float-1"></div>
  <div class="container">
    <span class="clk-section__eyebrow reveal-up">Local Knowledge</span>
    <h2 class="reveal-up">Why do <span class="text-accent">Clackamas properties</span> need specialized site work?</h2>
    <div class="answer-block reveal-up">
      <p>Clackamas is an unincorporated census-designated place in Clackamas County that sits at the crossroads of suburban growth and commercial density along the I-205 corridor. Property owners here face a mix of challenges — aging industrial parks that need demolition and cleanup, infill residential lots carved from larger parcels, and commercial developments near Clackamas Town Center that demand precise grading and excavation.</p>
    </div>

    <div class="clk-about__layout">
      <div class="clk-about__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Excavation and site preparation work on a Clackamas, Oregon property" width="600" height="750" loading="lazy">
      </div>
      <div class="clk-about__text reveal-right">
        <p>Unlike neighboring Damascus or Sandy, Clackamas carries a higher residential and commercial density with properties along the SE 82nd Avenue corridor, near the Clackamas River, and throughout the industrial zones south of Sunnyside Road. Teardown projects are common — older single-family homes and small commercial structures making way for new multi-unit and mixed-use development. That means demolition, debris hauling, and full site prep before builders ever break ground.</p>

        <p>The Clackamas River watershed adds complexity to any excavation or grading project. Seasonal water tables sit close to the surface along the floodplain, and Clackamas County enforces strict erosion control and stormwater management requirements for any project disturbing more than one cubic yard of soil. A contractor who understands these regulations keeps your project on schedule and out of compliance trouble.</p>

        <p>Workhorse Site Solutions handles junk removal and site cleanup near me in Clackamas for both commercial warehouse spaces and residential properties. Our Damascus shop is less than 15 minutes from most Clackamas addresses, and we bring the same excavators, skid steers, and dump trucks we use on large-scale projects to every job — whether it is clearing a half-acre residential lot near Happy Valley or hauling construction debris from a commercial teardown near Milwaukie.</p>

        <div class="clk-about__highlights">
          <div class="clk-about__highlight reveal-up reveal-delay-1">
            <i data-lucide="building-2"></i>
            <span>Clackamas Town Center commercial zone</span>
          </div>
          <div class="clk-about__highlight reveal-up reveal-delay-2">
            <i data-lucide="route"></i>
            <span>I-205 corridor access</span>
          </div>
          <div class="clk-about__highlight reveal-up reveal-delay-3">
            <i data-lucide="waves"></i>
            <span>Clackamas River watershed</span>
          </div>
          <div class="clk-about__highlight reveal-up reveal-delay-4">
            <i data-lucide="hard-hat"></i>
            <span>Infill &amp; teardown projects</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="clk-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: SERVICES — Dark Background
     ═══════════════════════════════════════════════════════ -->
<section class="clk-section clk-services" aria-label="Services available in Clackamas">
  <div class="container">
    <span class="clk-section__eyebrow reveal-up">Full-Service Contractor</span>
    <h2 class="reveal-up">What site services are <span class="text-accent">available in Clackamas</span>, OR?</h2>
    <p class="answer-block reveal-up">Every service in our lineup is available to Clackamas residential and commercial properties. From single-item junk removal to multi-phase demolition and excavation projects, Workhorse Site Solutions delivers flat-rate pricing with no hidden mobilization fees — our equipment yard in Damascus is a short drive down Hwy 212.</p>

    <div class="clk-services__grid">
      <div class="clk-service-item reveal-up reveal-delay-1">
        <i data-lucide="trash-2"></i>
        <span>Junk Removal &amp; Cleanouts</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-2">
        <i data-lucide="shovel"></i>
        <span>Excavation Services</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-3">
        <i data-lucide="hammer"></i>
        <span>Demolition</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-1">
        <i data-lucide="tree-pine"></i>
        <span>Land Clearing</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-2">
        <i data-lucide="axe"></i>
        <span>Tree Services</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-3">
        <i data-lucide="ruler"></i>
        <span>Site Preparation &amp; Grading</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-1">
        <i data-lucide="construction"></i>
        <span>Trenching</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-2">
        <i data-lucide="fence"></i>
        <span>Fence Installation</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-3">
        <i data-lucide="home"></i>
        <span>Deck &amp; Patio Construction</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-1">
        <i data-lucide="car"></i>
        <span>Driveway Services</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-2">
        <i data-lucide="wrench"></i>
        <span>General Contracting</span>
      </div>
      <div class="clk-service-item reveal-up reveal-delay-3">
        <i data-lucide="sparkles"></i>
        <span>Commercial &amp; Residential Cleanup</span>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron (light)
     ═══════════════════════════════════════════════════════ -->
<div class="clk-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: WHY CHOOSE — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="clk-section clk-why" aria-label="Why choose Workhorse for Clackamas projects">
  <div class="floating-accent clk-float-2"></div>
  <div class="container">
    <span class="clk-section__eyebrow reveal-up">Local Advantage</span>
    <h2 class="reveal-up">Why hire <span class="text-accent">Workhorse Site Solutions</span> for your Clackamas project?</h2>
    <p class="answer-block reveal-up">Clackamas property owners benefit from a Damascus-based contractor who already knows the county permitting process, the soil conditions near the Clackamas River, and the access challenges on tight commercial lots along the I-205 corridor. Here is what sets us apart on every Clackamas job.</p>

    <div class="clk-why__layout">
      <div class="clk-why__points">
        <div class="clk-why__point reveal-left reveal-delay-1">
          <div class="clk-why__point-icon"><i data-lucide="building-2"></i></div>
          <div>
            <h3>Commercial Project Experience</h3>
            <p>Clackamas has industrial parks, warehouse complexes, and commercial strips that require heavy equipment and experienced operators. We handle full-building demolition, concrete removal, and large-scale debris hauling for commercial properties near Clackamas Town Center and SE 82nd Ave.</p>
          </div>
        </div>
        <div class="clk-why__point reveal-left reveal-delay-2">
          <div class="clk-why__point-icon"><i data-lucide="map-pin"></i></div>
          <div>
            <h3>Damascus Proximity — 15 Minutes Out</h3>
            <p>Our shop and equipment yard in Damascus sit just east of Clackamas on Hwy 212. Shorter mobilization distance means lower project costs and faster response times when schedules shift or emergency cleanups arise.</p>
          </div>
        </div>
        <div class="clk-why__point reveal-left reveal-delay-3">
          <div class="clk-why__point-icon"><i data-lucide="truck"></i></div>
          <div>
            <h3>Full Equipment Fleet — No Rentals</h3>
            <p>Excavators, skid steers, dump trucks, trailers — all company-owned. That means flat-rate project pricing for Clackamas clients with no hourly equipment rental surcharges driving up the final invoice.</p>
          </div>
        </div>
        <div class="clk-why__point reveal-left reveal-delay-4">
          <div class="clk-why__point-icon"><i data-lucide="file-text"></i></div>
          <div>
            <h3>Clackamas County Familiarity</h3>
            <p>We pull permits, schedule inspections, and coordinate with Clackamas County Development Services regularly. Our crew understands the erosion control, stormwater, and grading setback requirements that apply to every Clackamas site project.</p>
          </div>
        </div>
      </div>
      <div class="clk-why__image reveal-right">
        <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse Site Solutions crew and equipment on a residential Clackamas project" width="600" height="750" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant (dark)
     ═══════════════════════════════════════════════════════ -->
<div class="clk-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: CTA BANNER
     ═══════════════════════════════════════════════════════ -->
<section class="clk-section clk-cta" aria-label="Request a free estimate in Clackamas">
  <div class="container">
    <span class="clk-section__eyebrow reveal-up" style="color:var(--color-accent)">Get Started</span>
    <h2 class="reveal-up">Get a <span class="text-accent">Free Estimate</span> in Clackamas</h2>
    <p class="answer-block reveal-up">Whether you need junk hauled from a warehouse near the Clackamas industrial district, a residential lot cleared for new construction, or a full demolition and excavation project along the I-205 corridor — Workhorse Site Solutions delivers licensed, insured, flat-rate project pricing. Tell us what you need and we will respond within 24 hours.</p>
    <div class="clk-cta__buttons reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="clk-updated">Last Updated: <?php echo date('F Y'); ?></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

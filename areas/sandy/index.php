<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Land Clearing, Excavation & Junk Removal in Sandy, OR | Workhorse Site Solutions';
$pageDescription = 'Workhorse Site Solutions provides land clearing, excavation, demolition, and junk removal in Sandy, OR. Heavy equipment for large rural lots near Mt. Hood. Licensed, bonded, insured.';
$canonicalUrl    = $siteUrl . '/areas/sandy/';
$currentPage     = 'service-area';
$cssVersion      = '7';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396318170-psrogl-481705784_605960762427911_845944733817866550_n.jpg';
$bodyPhoto1 = $photoBase . '1779396440982-2uqglt-481992905_605969129093741_5125438628730597269_n.jpg';
$bodyPhoto2 = $photoBase . '1779396452574-uisrya-481991957_604897309200923_770848034743067187_n.jpg';
$heroImagePreload = $heroPhoto;

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
    ['name' => 'Sandy', 'url' => '/areas/sandy/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>

<!-- LocalBusiness JSON-LD — Sandy Service Area -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "GeneralContractor",
  "name": "<?php echo htmlspecialchars($siteName); ?>",
  "url": "<?php echo $siteUrl; ?>",
  <?php if (!empty($phone)): ?>
  "telephone": "<?php echo htmlspecialchars($phone); ?>",
  <?php endif; ?>
  "description": "Land clearing, excavation, demolition, and junk removal services in Sandy, OR and the Mt. Hood corridor.",
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
    "name": "Sandy",
    "containedInPlace": {
      "@type": "State",
      "name": "Oregon"
    }
  },
  "provider": {
    "@type": "GeneralContractor",
    "@id": "<?php echo $siteUrl; ?>/#organization"
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     SERVICE AREA: SANDY, OR — Workhorse Site Solutions LLC
     Premium Tier | Individual City Page
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Sandy Hero ────────────────────────────────────────────── */
.sdy-hero {
  position: relative;
  min-height: 74vh;
  display: flex;
  align-items: center;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: var(--color-dark);
}
.sdy-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.sdy-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 30%;
}
.sdy-hero::before {
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
.sdy-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events: none;
}
.sdy-hero .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.sdy-hero .breadcrumb {
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
.sdy-hero .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.sdy-hero .breadcrumb a:hover {
  color: var(--color-accent);
}
.sdy-hero__content {
  max-width: 740px;
}
.sdy-hero__eyebrow {
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
.sdy-hero__eyebrow i,
.sdy-hero__eyebrow svg {
  width: 18px;
  height: 18px;
}
.sdy-hero h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.sdy-hero h1 .text-accent {
  color: var(--color-accent);
}
.sdy-hero .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.85);
  max-width: 60ch;
  margin-bottom: var(--space-6);
}
.sdy-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-bottom: var(--space-8);
}
.sdy-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-3);
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-full);
  font-size: var(--font-size-xs);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.8);
}
.sdy-hero__badge i,
.sdy-hero__badge svg {
  width: 14px;
  height: 14px;
  color: var(--color-accent);
}
.sdy-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── Sandy Section Base ──────────────────────────────────── */
.sdy-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.sdy-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.sdy-section__eyebrow {
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
.sdy-section h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.sdy-section h2 .text-accent {
  color: var(--color-accent);
}
.sdy-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}
.sdy-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.sdy-section .sdy-float-1 {
  width: 360px;
  height: 360px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.05) 0%, transparent 70%);
  top: -80px;
  right: -120px;
}
.sdy-section .sdy-float-2 {
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.06) 0%, transparent 70%);
  bottom: -60px;
  left: -100px;
}

/* ── SVG Dividers ─────────────────────────────────────────── */
.sdy-divider-chevron,
.sdy-divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.sdy-divider-chevron svg,
.sdy-divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section 2: About Sandy ───────────────────────────────── */
.sdy-about {
  background: var(--color-bg);
}
.sdy-about__layout {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.sdy-about__prose {
  position: relative;
  z-index: 1;
}
.sdy-about__prose p {
  font-size: var(--font-size-base);
  color: var(--color-gray-dark);
  line-height: 1.7;
  max-width: var(--content-width);
  margin-bottom: var(--space-4);
}
.sdy-about__prose p:last-child {
  margin-bottom: 0;
}
.sdy-about__image-stack {
  position: relative;
  z-index: 1;
}
.sdy-about__img-primary {
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  box-shadow: var(--shadow-lg);
}
.sdy-about__img-primary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.sdy-about__img-secondary {
  position: absolute;
  bottom: -24px;
  left: -24px;
  width: 55%;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  border: 4px solid var(--color-bg);
  aspect-ratio: 4 / 3;
}
.sdy-about__img-secondary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.sdy-about__highlights {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.sdy-highlight {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-card-tint-neutral);
  border: 1px solid var(--color-border);
}
.sdy-highlight i,
.sdy-highlight svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}
.sdy-highlight span {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-text);
  line-height: 1.4;
}

/* ── Section 3: Services — Dark ───────────────────────────── */
.sdy-services {
  background: var(--color-dark);
  color: var(--color-white);
}
.sdy-services h2 {
  color: var(--color-white);
}
.sdy-services .answer-block {
  color: rgba(255, 255, 255, 0.7);
}
.sdy-services .sdy-section__eyebrow {
  color: var(--color-accent);
}
.sdy-services__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
}
.sdy-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4) var(--space-5);
  border-radius: var(--radius-md);
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.08);
  transition: background var(--transition-base), border-color var(--transition-base), transform var(--transition-base);
}
.sdy-service-item:hover {
  background: rgba(255, 255, 255, 0.08);
  border-color: rgba(var(--color-accent-rgb), 0.3);
  transform: translateY(-2px);
}
.sdy-service-item i,
.sdy-service-item svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.sdy-service-item span {
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.85);
}

/* ── Section 4: Why Choose — Asymmetric Split ─────────────── */
.sdy-why {
  background: var(--color-light);
}
.sdy-why__layout {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: var(--space-12);
  align-items: center;
}
.sdy-why__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.sdy-why__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.sdy-why__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.sdy-why__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.sdy-why__point {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.sdy-why__point-icon {
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
.sdy-why__point-icon i,
.sdy-why__point-icon svg {
  width: 22px;
  height: 22px;
}
.sdy-why__point h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.sdy-why__point p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.6;
  max-width: 48ch;
}

/* ── Section 5: Final CTA ─────────────────────────────────── */
.sdy-cta {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.sdy-cta::before {
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
.sdy-cta .container {
  position: relative;
  z-index: 1;
}
.sdy-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.sdy-cta .answer-block {
  color: rgba(255, 255, 255, 0.7);
  margin: 0 auto var(--space-8);
  text-align: center;
}
.sdy-cta__buttons {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── Last Updated ──────────────────────────────────────────── */
.sdy-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── Responsive ─────────────────────────────────────────── */
@media (max-width: 1024px) {
  .sdy-hero {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .sdy-about__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .sdy-about__image-stack {
    max-width: 500px;
    order: -1;
  }
  .sdy-about__img-secondary {
    bottom: -16px;
    left: -16px;
    width: 45%;
  }
  .sdy-services__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .sdy-why__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .sdy-why__image {
    max-width: 500px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
}
@media (max-width: 600px) {
  .sdy-hero h1 {
    font-size: clamp(2rem, 8vw, 3rem);
  }
  .sdy-hero__badges {
    flex-direction: column;
    gap: var(--space-2);
  }
  .sdy-hero__ctas {
    flex-direction: column;
  }
  .sdy-about__highlights {
    grid-template-columns: 1fr;
  }
  .sdy-services__grid {
    grid-template-columns: 1fr;
  }
  .sdy-cta__buttons {
    flex-direction: column;
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="sdy-hero" aria-label="Sandy service area overview">
  <div class="sdy-hero__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions heavy equipment clearing a rural lot near Sandy, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/service-area/">Service Area</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Sandy</span>
  </nav>
  <div class="container">
    <div class="sdy-hero__content">
      <span class="sdy-hero__eyebrow"><i data-lucide="tree-pine"></i> Sandy, OR</span>
      <h1>Land Clearing, <span class="text-accent">Excavation</span> &amp; Junk Removal in Sandy, OR</h1>
      <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed, bonded, and insured Oregon contractor based in Damascus, serving Sandy and the Hwy 26 corridor with land clearing, excavation, demolition, junk removal, and full-scope site preparation for rural residential and commercial properties.</p>
      <div class="sdy-hero__badges">
        <span class="sdy-hero__badge"><i data-lucide="shield-check"></i> Licensed &amp; Bonded</span>
        <span class="sdy-hero__badge"><i data-lucide="shield"></i> Fully Insured</span>
        <span class="sdy-hero__badge"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
        <span class="sdy-hero__badge"><i data-lucide="star"></i> 5.0 Rating</span>
      </div>
      <div class="sdy-hero__ctas">
        <a href="/contact/" class="btn btn-accent">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:16px;height:16px"></i> <?php echo htmlspecialchars($phone); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Chevron
     ═══════════════════════════════════════════════════════ -->
<div class="sdy-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: ABOUT SANDY
     ═══════════════════════════════════════════════════════ -->
<section class="sdy-section sdy-about" aria-label="About Sandy Oregon site work">
  <div class="floating-accent sdy-float-1"></div>
  <div class="container">
    <span class="sdy-section__eyebrow reveal-up"><i data-lucide="mountain"></i> Gateway to Mt. Hood</span>
    <h2 class="reveal-up">What makes <span class="text-accent">Sandy, OR</span> site work different from metro-area projects?</h2>

    <div class="answer-block reveal-up">
      <p>Sandy sits at the western gateway to Mt. Hood along the Hwy 26 corridor, roughly 15 minutes east of our Damascus headquarters. Properties here run larger than anything inside the Portland city limits — two-acre parcels are common, and 10- to 20-acre rural lots are not unusual in unincorporated Clackamas County zones south and east of town.</p>
    </div>

    <div class="sdy-about__layout">
      <div class="sdy-about__prose reveal-up">
        <p>The Sandy area presents site conditions that flat-lot metro contractors rarely encounter. Heavy Douglas fir and western red cedar cover, dense underbrush, and steep volcanic-soil grades mean land clearing in Sandy requires tracked equipment — not just a crew with chainsaws. The Sandy River watershed adds environmental considerations, and Clackamas County rural zoning imposes setback and grading permit requirements that differ from city rules.</p>

        <p>Wildfire risk is a defining factor for Sandy-area properties. The Oregon Department of Forestry maps much of the corridor east of Sandy as moderate to high wildfire hazard, and defensible space clearing has become a regular request from homeowners near Marmot and Brightwood. Storm debris from seasonal windstorms piles up on larger lots, blocking driveways and damaging outbuildings. Our excavation and land clearing crews remove blowdown timber, grind stumps, and haul debris in a single mobilization.</p>

        <p>Most Sandy properties rely on septic systems rather than city sewer, which means excavation and trenching for new construction, septic repairs, or drain field replacements require operators who understand soil percolation testing and the specific Clackamas County environmental health requirements. We handle the digging, grading, and backfill — coordinating with the septic installer so the site stays on schedule.</p>

        <div class="sdy-about__highlights reveal-up">
          <div class="sdy-highlight">
            <i data-lucide="tree-pine"></i>
            <span>Heavy tree cover and dense underbrush clearing</span>
          </div>
          <div class="sdy-highlight">
            <i data-lucide="mountain"></i>
            <span>Steep volcanic-soil grades and hillside lots</span>
          </div>
          <div class="sdy-highlight">
            <i data-lucide="flame"></i>
            <span>Wildfire defensible space creation</span>
          </div>
          <div class="sdy-highlight">
            <i data-lucide="droplets"></i>
            <span>Septic system excavation and drain fields</span>
          </div>
        </div>
      </div>

      <div class="sdy-about__image-stack reveal-right">
        <div class="sdy-about__img-primary">
          <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Excavation and land clearing work on a rural Sandy, Oregon property" width="600" height="450" loading="lazy">
        </div>
        <div class="sdy-about__img-secondary">
          <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse Site Solutions demolition and debris removal near Sandy, OR" width="330" height="248" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="sdy-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: SERVICES IN SANDY — Dark
     ═══════════════════════════════════════════════════════ -->
<section class="sdy-section sdy-services" aria-label="Services available in Sandy Oregon">
  <div class="container">
    <span class="sdy-section__eyebrow reveal-up"><i data-lucide="wrench"></i> Full Service Lineup</span>
    <h2 class="reveal-up">What services does <span class="text-accent">Workhorse Site Solutions</span> offer in Sandy?</h2>
    <p class="answer-block reveal-up">Every service we provide in Damascus is available to Sandy properties. Our equipment fleet mobilizes east on Hwy 26 — setup to teardown, the same crew and the same flat-rate pricing whether you are on Bluff Road or Revenue Lane.</p>

    <div class="sdy-services__grid">
      <?php
      $serviceIcons = [
        'junk-removal-cleanouts' => 'trash-2',
        'excavation-services' => 'shovel',
        'demolition' => 'hammer',
        'land-clearing' => 'tree-pine',
        'tree-services' => 'axe',
        'site-preparation-grading' => 'ruler',
        'trenching' => 'construction',
        'fence-installation' => 'fence',
        'deck-patio-construction' => 'home',
        'driveway-services' => 'truck',
        'general-contracting' => 'hard-hat',
        'commercial-residential-cleanup' => 'sparkles',
      ];
      foreach ($services as $i => $service):
        $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
        $delay = ($i % 4) + 1;
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="sdy-service-item reveal-up reveal-delay-<?php echo $delay; ?>">
        <i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i>
        <span><?php echo htmlspecialchars($service['name']); ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Chevron (dark to light)
     ═══════════════════════════════════════════════════════ -->
<div class="sdy-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: WHY CHOOSE — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="sdy-section sdy-why" aria-label="Why hire Workhorse for Sandy projects">
  <div class="floating-accent sdy-float-2"></div>
  <div class="container">
    <span class="sdy-section__eyebrow reveal-up"><i data-lucide="award"></i> Why Workhorse</span>
    <h2 class="reveal-up">Why hire a <span class="text-accent">Damascus-based contractor</span> for Sandy site work?</h2>
    <p class="answer-block reveal-up">Sandy is only 15 minutes east of our Damascus equipment yard on Hwy 26. That proximity means lower mobilization costs, faster response on storm cleanups, and a crew that already knows Clackamas County grading permits and rural zoning rules inside and out.</p>

    <div class="sdy-why__layout">
      <div class="sdy-why__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Heavy equipment operating on a large rural lot near Sandy, Oregon" width="500" height="625" loading="lazy">
      </div>
      <div>
        <div class="sdy-why__points">
          <div class="sdy-why__point reveal-right reveal-delay-1">
            <div class="sdy-why__point-icon"><i data-lucide="tractor"></i></div>
            <div>
              <h3>Heavy Equipment for Large Lots</h3>
              <p>Sandy properties often span 2 to 20 acres of heavy timber and steep terrain. We bring tracked excavators, skid steers, and dump trucks — not undersized rental machines that stall on inclines.</p>
            </div>
          </div>
          <div class="sdy-why__point reveal-right reveal-delay-2">
            <div class="sdy-why__point-icon"><i data-lucide="tree-pine"></i></div>
            <div>
              <h3>Tree Removal and Brush Clearing</h3>
              <p>Dense fir and cedar stands, overgrown blackberry thickets, and storm blowdown are routine on Mt. Hood corridor properties. We fell, buck, chip, and haul in one trip — clearing the lot from canopy to stumps.</p>
            </div>
          </div>
          <div class="sdy-why__point reveal-right reveal-delay-3">
            <div class="sdy-why__point-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h3>15 Minutes from Damascus</h3>
              <p>Proximity matters for project costs. Our Damascus shop is a straight shot east on Hwy 26 — minimal mobilization charges, and we can have equipment on your Sandy property the same week you call.</p>
            </div>
          </div>
          <div class="sdy-why__point reveal-right reveal-delay-4">
            <div class="sdy-why__point-icon"><i data-lucide="file-text"></i></div>
            <div>
              <h3>Rural Zoning and Permit Expertise</h3>
              <p>Clackamas County rural zoning, septic setbacks, and environmental review for Sandy River watershed projects add complexity that general metro contractors overlook. We file the right permits the first time.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Slant (light to dark)
     ═══════════════════════════════════════════════════════ -->
<div class="sdy-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="sdy-cta" aria-label="Get a free estimate in Sandy">
  <div class="container">
    <span class="sdy-section__eyebrow reveal-up" style="color:var(--color-accent)"><i data-lucide="phone"></i> Ready to Start?</span>
    <h2 class="reveal-up">Get a Free Estimate for Your <span class="text-accent">Sandy</span> Project</h2>
    <p class="answer-block reveal-up">Whether you need land cleared for a new build, an old structure demolished, junk hauled off a rural lot, or excavation for a septic system — Workhorse Site Solutions delivers the heavy equipment and experienced crew to get it done right in Sandy, OR.</p>
    <div class="sdy-cta__buttons reveal-scale">
      <a href="/contact/" class="btn btn-accent">Request Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:16px;height:16px"></i> Call <?php echo htmlspecialchars($phone); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     LAST UPDATED
     ═══════════════════════════════════════════════════════ -->
<p class="sdy-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

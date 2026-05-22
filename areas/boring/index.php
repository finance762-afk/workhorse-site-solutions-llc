<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Junk Removal, Demolition & Land Clearing in Boring, OR | Workhorse Site Solutions';
$pageDescription = 'Workhorse Site Solutions provides junk removal, demolition, excavation, and land clearing in Boring, OR. Licensed Oregon contractor based 5 minutes away in Damascus. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/boring/';
$currentPage     = 'service-area';
$cssVersion      = '6';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396334785-q74t8c-481770500_605969619093692_3211402394288864358_n.jpg';
$bodyPhoto1 = $photoBase . '1779396470463-iyj4tj-481999678_608071048883549_557956764048998778_n.jpg';
$bodyPhoto2 = $photoBase . '1779396475677-h3vyba-482003679_607408478949806_3932923103008527784_n.jpg';
$heroImagePreload = $heroPhoto;

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
    ['name' => 'Boring, OR', 'url' => '/areas/boring/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>

<!-- LocalBusiness Schema — Boring Service Area -->
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
  "description": "Junk removal, demolition, excavation, and land clearing services in Boring, OR. Licensed, bonded, insured Oregon contractor based in Damascus.",
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
    "name": "Boring",
    "containedInPlace": {
      "@type": "State",
      "name": "Oregon"
    }
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     SERVICE AREA: BORING, OR — Workhorse Site Solutions LLC
     Premium Tier | brg- prefix
     ════════════════════════════════════════════════════════ -->

<style>
/* ── brg- Hero ──────────────────────────────────────────── */
.brg-hero {
  position: relative;
  min-height: 74vh;
  display: flex;
  align-items: center;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: var(--color-dark);
}
.brg-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.brg-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 40%;
}
.brg-hero::before {
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
.brg-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events: none;
}
.brg-hero .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.brg-hero .breadcrumb {
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
.brg-hero .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.brg-hero .breadcrumb a:hover {
  color: var(--color-accent);
}
.brg-hero__content {
  max-width: 740px;
}
.brg-hero__eyebrow {
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
.brg-hero__eyebrow i,
.brg-hero__eyebrow svg {
  width: 18px;
  height: 18px;
}
.brg-hero h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.brg-hero h1 .text-accent {
  color: var(--color-accent);
}
.brg-hero .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.85);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}
.brg-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.brg-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255, 255, 255, 0.8);
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-sm);
  padding: var(--space-2) var(--space-3);
}
.brg-hero__badge i,
.brg-hero__badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.brg-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── brg- Shared Section ────────────────────────────────── */
.brg-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.brg-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.brg-section__eyebrow {
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
.brg-section h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.brg-section h2 .text-accent {
  color: var(--color-accent);
}
.brg-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}

/* ── brg- Floating Accents ───────────────────────────────── */
.brg-section .brg-float {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.brg-float--a {
  width: 360px;
  height: 360px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  top: -80px;
  right: -120px;
}
.brg-float--b {
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  bottom: -60px;
  left: -100px;
}
.brg-float--c {
  width: 250px;
  height: 250px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 70%);
  top: 20%;
  left: -80px;
}

/* ── brg- SVG Dividers ───────────────────────────────────── */
.brg-divider-chevron,
.brg-divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.brg-divider-chevron svg,
.brg-divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── brg- About Boring Section ───────────────────────────── */
.brg-about {
  background: var(--color-bg);
}
.brg-about__layout {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.brg-about__prose {
  font-size: var(--font-size-base);
  line-height: 1.75;
  color: var(--color-gray-dark);
  max-width: var(--content-width);
}
.brg-about__prose p {
  margin-bottom: var(--space-6);
}
.brg-about__prose p:last-child {
  margin-bottom: 0;
}
.brg-about__image-stack {
  position: relative;
}
.brg-about__img-primary {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3;
}
.brg-about__img-primary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.brg-about__img-secondary {
  position: absolute;
  bottom: -30px;
  left: -30px;
  width: 55%;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  border: 4px solid var(--color-bg);
  aspect-ratio: 4 / 3;
}
.brg-about__img-secondary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.brg-about__accent-stripe {
  position: absolute;
  top: -12px;
  right: -12px;
  width: 100px;
  height: 6px;
  background: var(--color-accent);
  border-radius: var(--radius-sm);
}

/* ── brg- Services Section (Dark) ────────────────────────── */
.brg-services {
  background: var(--color-dark);
  color: var(--color-white);
}
.brg-services h2 { color: var(--color-white); }
.brg-services .brg-section__eyebrow { color: var(--color-accent); }
.brg-services .answer-block { color: rgba(255,255,255,0.7); }
.brg-services__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
}
.brg-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4) var(--space-5);
  border-radius: var(--radius-md);
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.07);
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-sm);
  font-weight: 600;
  transition: background var(--transition-base), border-color var(--transition-base);
}
.brg-service-item:hover {
  background: rgba(255, 255, 255, 0.08);
  border-color: rgba(var(--color-accent-rgb), 0.3);
}
.brg-service-item i,
.brg-service-item svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── brg- Why Choose Section (Asymmetric Split) ──────────── */
.brg-why {
  background: var(--color-light);
}
.brg-why__layout {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-12);
  align-items: center;
}
.brg-why__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.brg-why__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.brg-why__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.brg-why__image .brg-why__tag {
  position: absolute;
  bottom: var(--space-4);
  left: var(--space-4);
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-2) var(--space-3);
  border-radius: var(--radius-sm);
  display: inline-flex;
  align-items: center;
  gap: var(--space-1);
}
.brg-why__tag i,
.brg-why__tag svg {
  width: 14px;
  height: 14px;
}
.brg-why__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.brg-why__point {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.brg-why__point-icon {
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
.brg-why__point-icon i,
.brg-why__point-icon svg {
  width: 22px;
  height: 22px;
}
.brg-why__point h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  text-wrap: balance;
}
.brg-why__point p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.65;
  max-width: 50ch;
}

/* ── brg- CTA Banner ─────────────────────────────────────── */
.brg-cta {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.brg-cta::before {
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
.brg-cta .container {
  position: relative;
  z-index: 1;
}
.brg-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.brg-cta .answer-block {
  color: rgba(255, 255, 255, 0.7);
  margin: 0 auto var(--space-8);
  text-align: center;
}
.brg-cta__actions {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── brg- Last Updated ───────────────────────────────────── */
.brg-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── brg- Answer Block (standalone) ──────────────────────── */
.brg-answer-block {
  background: rgba(var(--color-accent-rgb), 0.04);
  border-left: 4px solid var(--color-accent);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  padding: var(--space-6) var(--space-8);
  margin: var(--space-8) 0;
}
.brg-answer-block h3 {
  font-size: var(--fs-h3);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.brg-answer-block p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: var(--content-width);
}

/* ── brg- Responsive ─────────────────────────────────────── */
@media (max-width: 1024px) {
  .brg-hero {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .brg-about__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .brg-about__image-stack {
    max-width: 500px;
  }
  .brg-services__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .brg-why__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .brg-why__image {
    max-width: 500px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
}
@media (max-width: 600px) {
  .brg-hero h1 {
    font-size: clamp(2rem, 8vw, 3rem);
  }
  .brg-hero__badges {
    flex-direction: column;
    gap: var(--space-2);
  }
  .brg-hero__ctas {
    flex-direction: column;
  }
  .brg-about__img-secondary {
    position: relative;
    bottom: auto;
    left: auto;
    width: 80%;
    margin-top: var(--space-4);
  }
  .brg-services__grid {
    grid-template-columns: 1fr;
  }
  .brg-why__points {
    gap: var(--space-4);
  }
  .brg-cta__actions {
    flex-direction: column;
  }
  .brg-answer-block {
    padding: var(--space-4) var(--space-5);
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="brg-hero" aria-label="Boring OR service area">
  <div class="brg-hero__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions heavy equipment on a rural Boring, Oregon property clearing land and debris" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/service-area/">Service Area</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Boring, OR</span>
  </nav>
  <div class="container">
    <div class="brg-hero__content">
      <span class="brg-hero__eyebrow"><i data-lucide="map-pin"></i> Boring, Oregon</span>
      <h1>Junk Removal, Demolition &amp; <span class="text-accent">Land Clearing</span> in Boring, OR</h1>
      <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed, bonded, and insured Oregon general contractor based in Damascus — just five minutes from Boring via Boring-Damascus Road. We bring excavators, skid steers, and dump trucks to Boring's large acreage lots for junk removal, demolition, land clearing, and full site preparation. <?php echo $yearsInBusiness; ?>+ years serving the Clackamas County corridor.</p>

      <div class="brg-hero__badges">
        <span class="brg-hero__badge"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
        <span class="brg-hero__badge"><i data-lucide="clock"></i> 5 Min from Boring</span>
        <span class="brg-hero__badge"><i data-lucide="star"></i> 5.0 Star Rating</span>
        <span class="brg-hero__badge"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      </div>

      <div class="brg-hero__ctas">
        <a href="/contact/" class="btn btn-accent">Get a Free Estimate in Boring</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Chevron
     ═══════════════════════════════════════════════════════ -->
<div class="brg-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: ABOUT BORING
     ═══════════════════════════════════════════════════════ -->
<section class="brg-section brg-about" aria-label="About Boring Oregon">
  <div class="brg-float brg-float--a"></div>
  <div class="container">
    <span class="brg-section__eyebrow reveal-up">Boring, Oregon</span>
    <h2 class="reveal-up">Why do <span class="text-accent">Boring properties</span> need specialized site work?</h2>

    <div class="brg-about__layout">
      <div class="brg-about__prose reveal-up">
        <p>Boring is an unincorporated community in Clackamas County, connected to our Damascus headquarters by Boring-Damascus Road — a straight five-minute drive that makes Boring the fastest service call in our coverage area. The community sits along the Hwy 212 corridor between Damascus and Sandy, surrounded by the volcanic geology of the Boring Lava Field that shaped the region's terrain thousands of years ago.</p>

        <p>What makes Boring distinct from nearby suburbs is its rural-residential character. Properties here range from one to ten acres, many with agricultural heritage and older outbuildings that eventually need demolition or cleanout. Large-lot homeowners in Boring regularly deal with overgrown brush, fallen timber from seasonal Pacific Northwest storms, and aging structures — barns, sheds, fencing — that have outlived their usefulness.</p>

        <div class="brg-answer-block answer-block">
          <h3>What junk removal and site services does <?php echo htmlspecialchars($siteName); ?> offer near me in Boring, OR?</h3>
          <p><?php echo htmlspecialchars($siteName); ?> provides 12 site solution services throughout Boring, including junk removal and property cleanouts, full-structure demolition, land clearing for overgrown acreage, excavation, grading, and trenching for septic and utility lines. Our Damascus shop is a five-minute drive from Boring, which means lower mobilization costs and same-day availability for most projects. We handle properties from a quarter acre to ten acres or more.</p>
        </div>

        <p>Boring's septic and well systems are common on properties outside the metro sewer grid, meaning excavation and trenching work here requires knowledge of Clackamas County setback rules and drain field placement. Tree-dense lots along the Boring Lava Field corridor often need clearing before any construction or improvement can begin — and storm debris from Douglas fir, Western red cedar, and big-leaf maple creates year-round cleanup demand.</p>

        <p>The Boring Station Trailhead, where the Springwater Corridor Trail passes through, reflects the community's connection to the surrounding landscape. Many homeowners near the trailhead and along SE Richey Road maintain larger hobby farms and equestrian properties that periodically require fence demolition, pasture clearing, or driveway regrading after wet Oregon winters erode gravel surfaces.</p>
      </div>

      <div class="brg-about__image-stack reveal-right">
        <div class="brg-about__accent-stripe"></div>
        <div class="brg-about__img-primary">
          <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Land clearing and excavation work on a rural Boring, Oregon property by Workhorse Site Solutions" width="600" height="450" loading="lazy">
        </div>
        <div class="brg-about__img-secondary">
          <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Demolition debris removal from a residential property in the Boring, OR area" width="400" height="300" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="brg-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: SERVICES — Dark
     ═══════════════════════════════════════════════════════ -->
<section class="brg-section brg-services" aria-label="Services available in Boring">
  <div class="container">
    <span class="brg-section__eyebrow reveal-up">Available in Boring</span>
    <h2 class="reveal-up">All <span class="text-accent">12 services</span> available for Boring properties</h2>
    <p class="answer-block reveal-up">Every service we offer at our Damascus headquarters is fully available throughout Boring and the Hwy 212 corridor. Same crew, same equipment fleet, same flat-rate project pricing — with the shortest mobilization time in our coverage area.</p>

    <div class="brg-services__grid">
      <?php foreach ($services as $i => $service): ?>
      <div class="brg-service-item reveal-up reveal-delay-<?php echo ($i % 4) + 1; ?>">
        <i data-lucide="check-circle"></i>
        <span><?php echo htmlspecialchars($service['name']); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Chevron (to light)
     ═══════════════════════════════════════════════════════ -->
<div class="brg-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: WHY CHOOSE — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="brg-section brg-why" aria-label="Why choose Workhorse for Boring projects">
  <div class="brg-float brg-float--b"></div>
  <div class="brg-float brg-float--c"></div>
  <div class="container">
    <span class="brg-section__eyebrow reveal-up">The Boring Advantage</span>
    <h2 class="reveal-up">Why hire <?php echo htmlspecialchars($siteName); ?> for your <span class="text-accent">Boring property</span>?</h2>
    <p class="answer-block reveal-up">Boring is our immediate neighbor. Damascus and Boring share a road, a landscape, and the same Clackamas County regulations. That proximity translates directly into faster response times, lower costs, and a crew that already knows the terrain under your property.</p>

    <div class="brg-why__layout">
      <div class="brg-why__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse Site Solutions crew operating an excavator on a Boring, Oregon acreage property" width="500" height="625" loading="lazy">
        <span class="brg-why__tag"><i data-lucide="map-pin"></i> 5 Min from Boring</span>
      </div>
      <div>
        <div class="brg-why__points">
          <div class="brg-why__point reveal-right reveal-delay-1">
            <div class="brg-why__point-icon"><i data-lucide="zap"></i></div>
            <div>
              <h3>Fastest Response in the Area</h3>
              <p>Boring-Damascus Road connects our shop to your property in under five minutes. No other contractor in the Portland Metro serves Boring with shorter mobilization times or lower transport overhead.</p>
            </div>
          </div>
          <div class="brg-why__point reveal-right reveal-delay-2">
            <div class="brg-why__point-icon"><i data-lucide="trees"></i></div>
            <div>
              <h3>Rural Acreage Expertise</h3>
              <p>Boring's one-to-ten-acre lots require different equipment strategy than suburban quarter-acre parcels. We bring the right machine for the parcel size — from compact track loaders to full-size excavators.</p>
            </div>
          </div>
          <div class="brg-why__point reveal-right reveal-delay-3">
            <div class="brg-why__point-icon"><i data-lucide="truck"></i></div>
            <div>
              <h3>Heavy Equipment Already on Hand</h3>
              <p>Our fleet — excavators, skid steers, dump trucks, brush mowers — is owned, not rented. Boring jobs get flat-rate pricing without hourly rental surcharges eating into your budget.</p>
            </div>
          </div>
          <div class="brg-why__point reveal-right reveal-delay-4">
            <div class="brg-why__point-icon"><i data-lucide="users"></i></div>
            <div>
              <h3>Family-Owned, Community-Minded</h3>
              <p>We live and work in this corner of Clackamas County. Boring isn't a pin on a coverage map — it's where we shop, drive, and know the neighbors. That means accountability, not a corporate call center.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SVG DIVIDER: Slant (to dark)
     ═══════════════════════════════════════════════════════ -->
<div class="brg-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: CTA BANNER
     ═══════════════════════════════════════════════════════ -->
<section class="brg-cta" aria-label="Get a free estimate in Boring">
  <div class="container">
    <span class="brg-section__eyebrow reveal-up" style="color:var(--color-accent);">Get Started</span>
    <h2 class="reveal-up">Get a <span class="text-accent">Free Estimate</span> in Boring</h2>
    <p class="answer-block reveal-up">Whether you need a full property cleanout, brush clearing on acreage, demolition of an old outbuilding, or excavation for a new septic system — <?php echo htmlspecialchars($siteName); ?> delivers flat-rate pricing with a 24-hour quote turnaround for every Boring project.</p>
    <div class="brg-cta__actions reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="brg-updated">Last Updated: <?php echo date('F Y'); ?></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

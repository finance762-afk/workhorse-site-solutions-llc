<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'Excavation, Demolition & Site Work in Happy Valley, OR | Workhorse Site Solutions';
$pageDescription = 'Workhorse Site Solutions provides excavation, demolition, land clearing, grading, and junk removal in Happy Valley, OR. Hillside lot experts serving Clackamas County since 2022.';
$canonicalUrl    = $siteUrl . '/areas/happy-valley/';
$currentPage     = 'service-area';
$cssVersion      = '6';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396313562-xq2js1-481701393_605954449095209_2349548257896328613_n.jpg';
$bodyPhoto1 = $photoBase . '1779396422190-fkuakh-481982904_605954445761876_5082188994743706509_n.jpg';
$bodyPhoto2 = $photoBase . '1779396427064-8fxum7-481987081_608069152217072_7714576008596587681_n.jpg';

$heroImagePreload = $heroPhoto;

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Service Area', 'url' => '/service-area/'],
    ['name' => 'Happy Valley', 'url' => '/areas/happy-valley/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>

<!-- LocalBusiness Schema — Happy Valley Area -->
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
  "areaServed": {
    "@type": "City",
    "name": "Happy Valley",
    "containedInPlace": {
      "@type": "State",
      "name": "Oregon"
    }
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     HAPPY VALLEY SERVICE AREA — Workhorse Site Solutions LLC
     Premium Tier | Unique prefix: hv-
     ════════════════════════════════════════════════════════ -->

<style>
/* ── hv- Happy Valley Hero ──────────────────────────────── */
.hv-hero {
  position: relative;
  min-height: 75vh;
  display: flex;
  align-items: center;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: var(--color-dark);
}
.hv-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.hv-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 30%;
}
.hv-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.6) 50%,
    rgba(var(--color-primary-rgb), 0.3) 100%
  );
}
.hv-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events: none;
}
.hv-hero .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.hv-hero .breadcrumb {
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
.hv-hero .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.hv-hero .breadcrumb a:hover {
  color: var(--color-accent);
}
.hv-hero__content {
  max-width: 740px;
}
.hv-hero__eyebrow {
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
.hv-hero__eyebrow i,
.hv-hero__eyebrow svg {
  width: 18px;
  height: 18px;
}
.hv-hero h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
  text-wrap: balance;
}
.hv-hero h1 .text-accent {
  color: var(--color-accent);
}
.hv-hero .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.85);
  max-width: 60ch;
  margin-bottom: var(--space-8);
}
.hv-hero__badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.hv-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: var(--radius-sm);
  padding: var(--space-2) var(--space-3);
  font-size: var(--font-size-xs);
  font-weight: 700;
  color: rgba(255, 255, 255, 0.85);
  letter-spacing: 0.04em;
}
.hv-hero__badge i,
.hv-hero__badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.hv-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
}

/* ── hv- Section Base ─────────────────────────────────────── */
.hv-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.hv-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.hv-section__eyebrow {
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
.hv-section h2 {
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.hv-section h2 .text-accent {
  color: var(--color-accent);
}
.hv-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}
.hv-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}

/* ── hv- SVG Dividers ──────────────────────────────────────── */
.hv-divider-chevron,
.hv-divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.hv-divider-chevron svg,
.hv-divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── hv- About Section ─────────────────────────────────────── */
.hv-about {
  background: var(--color-bg);
}
.hv-about__layout {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-12);
  align-items: start;
}
.hv-about__text h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.hv-about__text p {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 58ch;
  margin-bottom: var(--space-4);
}
.hv-about__text p:last-child {
  margin-bottom: 0;
}
.hv-about__image-wrapper {
  position: relative;
}
.hv-about__image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  position: relative;
}
.hv-about__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.hv-about__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-lg);
  pointer-events: none;
}
.hv-about__image-badge {
  position: absolute;
  bottom: var(--space-4);
  right: var(--space-4);
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
  z-index: 2;
}
.hv-about__image-badge i,
.hv-about__image-badge svg {
  width: 14px;
  height: 14px;
}
.hv-about__floating-1 {
  width: 320px;
  height: 320px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  top: -80px;
  right: -120px;
}
.hv-about__floating-2 {
  width: 220px;
  height: 220px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  bottom: -60px;
  left: -80px;
}

/* ── hv- Services Section (Dark) ──────────────────────────── */
.hv-services {
  background: var(--color-dark);
  color: var(--color-white);
}
.hv-services h2 {
  color: var(--color-white);
}
.hv-services .answer-block {
  color: rgba(255, 255, 255, 0.7);
}
.hv-services__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
}
.hv-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4);
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-md);
  transition: background var(--transition-base), transform var(--transition-base);
  text-decoration: none;
  color: rgba(255, 255, 255, 0.85);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.hv-service-item:hover {
  background: rgba(255, 255, 255, 0.08);
  transform: translateY(-2px);
}
.hv-service-item i,
.hv-service-item svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── hv- Why Choose Section — Asymmetric ──────────────────── */
.hv-why {
  background: var(--color-light);
}
.hv-why__layout {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-12);
  align-items: center;
}
.hv-why__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.hv-why__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.hv-why__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.hv-why__points {
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}
.hv-why__point {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.hv-why__point-icon {
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
.hv-why__point-icon i,
.hv-why__point-icon svg {
  width: 22px;
  height: 22px;
}
.hv-why__point h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.hv-why__point p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.6;
  max-width: 48ch;
}
.hv-why__floating {
  width: 300px;
  height: 300px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  bottom: -100px;
  right: -120px;
}

/* ── hv- CTA Section ──────────────────────────────────────── */
.hv-cta {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.hv-cta::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 650px;
  height: 650px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 70%);
  pointer-events: none;
}
.hv-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.hv-cta .answer-block {
  color: rgba(255, 255, 255, 0.7);
  margin: 0 auto var(--space-8);
}
.hv-cta__buttons {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── hv- Last Updated ─────────────────────────────────────── */
.hv-last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── hv- Responsive ───────────────────────────────────────── */
@media (max-width: 1024px) {
  .hv-hero {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .hv-about__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .hv-about__image-wrapper {
    max-width: 500px;
  }
  .hv-services__grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .hv-why__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .hv-why__image {
    max-width: 500px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
}
@media (max-width: 600px) {
  .hv-hero h1 {
    font-size: clamp(2rem, 8vw, 3rem);
  }
  .hv-hero__badges {
    flex-direction: column;
    gap: var(--space-2);
  }
  .hv-hero__ctas {
    flex-direction: column;
  }
  .hv-services__grid {
    grid-template-columns: 1fr;
  }
  .hv-cta__buttons {
    flex-direction: column;
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hv-hero" aria-label="Happy Valley service area overview">
  <div class="hv-hero__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions excavation equipment on a hillside job site near Happy Valley, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/service-area/">Service Area</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Happy Valley</span>
  </nav>
  <div class="container">
    <div class="hv-hero__content">
      <span class="hv-hero__eyebrow"><i data-lucide="map-pin"></i> Happy Valley, OR</span>
      <h1>Excavation, Demolition &amp; <span class="text-accent">Site Work</span> in Happy Valley, OR</h1>
      <p class="hero-answer answer-block">Workhorse Site Solutions is a licensed Oregon general contractor based in Damascus, serving Happy Valley with excavation, demolition, land clearing, grading, and junk removal. From steep hillside lots along Scouters Mountain to new housing pads in the Pleasant Valley corridor, we bring the heavy equipment and local permit knowledge that Happy Valley projects demand.</p>
      <div class="hv-hero__badges">
        <span class="hv-hero__badge"><i data-lucide="shield-check"></i> Licensed &amp; Bonded</span>
        <span class="hv-hero__badge"><i data-lucide="shield"></i> Fully Insured</span>
        <span class="hv-hero__badge"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
        <span class="hv-hero__badge"><i data-lucide="truck"></i> Own Equipment Fleet</span>
      </div>
      <div class="hv-hero__ctas">
        <a href="/contact/" class="btn btn-accent">Get a Free Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     DIVIDER: Chevron
     ═══════════════════════════════════════════════════════ -->
<div class="hv-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: ABOUT HAPPY VALLEY
     ═══════════════════════════════════════════════════════ -->
<section class="hv-section hv-about" aria-label="About site work in Happy Valley">
  <div class="floating-accent hv-about__floating-1"></div>
  <div class="floating-accent hv-about__floating-2"></div>
  <div class="container">
    <span class="hv-section__eyebrow reveal-up">Happy Valley, Oregon</span>
    <h2 class="reveal-up">Why does site work in <span class="text-accent">Happy Valley</span> require specialized excavation?</h2>
    <p class="answer-block reveal-up">Happy Valley sits on some of the steepest developable terrain in the Portland Metro Area. Hillside lots along Scouters Mountain and the Pleasant Valley corridor demand precision grading, engineered retaining cuts, and stormwater management plans that meet Clackamas County standards before a single foundation form goes in.</p>

    <div class="hv-about__layout">
      <div class="hv-about__text reveal-up">
        <h3>One of Oregon's Fastest-Growing Cities</h3>
        <p>Happy Valley has grown from a quiet bedroom community south of Damascus into one of the fastest-growing cities in the state. New housing developments push into previously undeveloped hillsides east of Sunnyside Road and south toward the Mt. Scott ridgeline. Each of these projects starts with site work — clearing, grading, and utility trenching — before framers ever arrive.</p>
        <p>The terrain here is not flat farmland. Happy Valley lots regularly feature 15-30% grade changes, clay-heavy soils that drain poorly during Oregon's wet season, and mature tree stands that require professional removal before equipment can access a building pad. Clackamas County enforces strict erosion control and stormwater management requirements on any project disturbing more than 500 square feet of soil.</p>
        <p>Workhorse Site Solutions handles these conditions daily across Happy Valley. We run excavation, demolition, and land clearing projects along the Sunnyside Road corridor, in neighborhoods near Happy Valley Town Center, and up the steep lots bordering the Mt. Scott area. Our Damascus shop is less than 15 minutes from most Happy Valley job sites — the same proximity we share with Milwaukie to the west and Clackamas to the north.</p>
        <p>Whether you are preparing a hillside pad for a custom home, demolishing an aging structure on a re-development parcel, or clearing brush and stumps from a vacant lot, we bring the right-sized equipment and the Clackamas County permit knowledge to keep your Happy Valley project on schedule.</p>
      </div>
      <div class="hv-about__image-wrapper reveal-right">
        <div class="hv-about__image">
          <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Excavation and grading work on a residential lot in Happy Valley, Oregon" width="600" height="450" loading="lazy">
          <span class="hv-about__image-badge"><i data-lucide="map-pin"></i> Happy Valley, OR</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="hv-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: SERVICES (Dark Background)
     ═══════════════════════════════════════════════════════ -->
<section class="hv-section hv-services" aria-label="Services available in Happy Valley">
  <div class="container">
    <span class="hv-section__eyebrow reveal-up">What We Do</span>
    <h2 class="reveal-up">What services does Workhorse offer in <span class="text-accent">Happy Valley</span>?</h2>
    <p class="answer-block reveal-up">Every service we run out of our Damascus headquarters is available to Happy Valley properties. From single-day junk removal jobs to multi-week excavation and grading contracts, the full lineup deploys with the same crew and equipment fleet.</p>

    <div class="hv-services__grid">
      <?php
      $serviceIcons = [
        'junk-removal-cleanouts'        => 'trash-2',
        'excavation-services'           => 'hard-hat',
        'demolition'                    => 'hammer',
        'land-clearing'                 => 'tree-pine',
        'tree-services'                 => 'axe',
        'site-preparation-grading'      => 'ruler',
        'trenching'                     => 'shovel',
        'fence-installation'            => 'fence',
        'deck-patio-construction'       => 'home',
        'driveway-services'             => 'truck',
        'general-contracting'           => 'wrench',
        'commercial-residential-cleanup' => 'sparkles',
      ];
      foreach ($services as $i => $service):
        $icon = $serviceIcons[$service['slug']] ?? 'check-circle';
        $delay = ($i % 4) + 1;
      ?>
      <a href="/services/<?php echo htmlspecialchars($service['slug']); ?>/" class="hv-service-item reveal-up reveal-delay-<?php echo $delay; ?>">
        <i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i>
        <?php echo htmlspecialchars($service['name']); ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     DIVIDER: Chevron (light)
     ═══════════════════════════════════════════════════════ -->
<div class="hv-divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: WHY CHOOSE — Asymmetric Split
     ═══════════════════════════════════════════════════════ -->
<section class="hv-section hv-why" aria-label="Why choose Workhorse in Happy Valley">
  <div class="floating-accent hv-why__floating"></div>
  <div class="container">
    <span class="hv-section__eyebrow reveal-up">Local Advantage</span>
    <h2 class="reveal-up">Why hire Workhorse for <span class="text-accent">Happy Valley</span> site work?</h2>
    <p class="answer-block reveal-up">Happy Valley's hillside terrain, clay soils, and Clackamas County permit requirements make choosing the right excavation contractor the difference between a smooth build and months of delays. Workhorse operates from Damascus — 10 minutes from most Happy Valley job sites.</p>

    <div class="hv-why__layout">
      <div class="hv-why__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse Site Solutions crew working on site preparation in Happy Valley, Oregon" width="500" height="625" loading="lazy">
      </div>
      <div>
        <div class="hv-why__points">
          <div class="hv-why__point reveal-right reveal-delay-1">
            <div class="hv-why__point-icon"><i data-lucide="mountain"></i></div>
            <div>
              <h3>Hillside Lot Specialists</h3>
              <p>Happy Valley lots along Scouters Mountain and the Pleasant Valley corridor feature 15-30% grades. We cut pads, build retaining walls, and manage drainage on steep terrain every week.</p>
            </div>
          </div>
          <div class="hv-why__point reveal-right reveal-delay-2">
            <div class="hv-why__point-icon"><i data-lucide="truck"></i></div>
            <div>
              <h3>Own Equipment Fleet — No Rental Markups</h3>
              <p>Excavators, skid steers, dump trucks, and grading attachments — all ours. Flat-rate project pricing with no hourly rental surprises on your Happy Valley invoice.</p>
            </div>
          </div>
          <div class="hv-why__point reveal-right reveal-delay-3">
            <div class="hv-why__point-icon"><i data-lucide="file-text"></i></div>
            <div>
              <h3>Clackamas County Permit Knowledge</h3>
              <p>We know the county's grading permit process, erosion control requirements, and stormwater management standards. Projects in Happy Valley pass inspection the first time.</p>
            </div>
          </div>
          <div class="hv-why__point reveal-right reveal-delay-4">
            <div class="hv-why__point-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h3>Damascus Home Base — 10 Minutes Away</h3>
              <p>Our shop and yard in Damascus sit just east of Happy Valley. Reduced mobilization costs, faster response times, and priority scheduling for nearby communities.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     DIVIDER: Slant (dark)
     ═══════════════════════════════════════════════════════ -->
<div class="hv-divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="hv-section hv-cta" aria-label="Request a free estimate in Happy Valley">
  <div class="container">
    <span class="hv-section__eyebrow reveal-up">Get Started</span>
    <h2 class="reveal-up">Get a <span class="text-accent">Free Estimate</span> in Happy Valley</h2>
    <p class="answer-block reveal-up">Whether you need excavation for a new build, demolition of an existing structure, land clearing on a hillside parcel, or junk removal from a property cleanout — Workhorse Site Solutions delivers licensed, insured, flat-rate project pricing across Happy Valley and the entire Portland Metro East corridor. Tell us what your project needs and we will have an estimate back within 24 hours.</p>
    <div class="hv-cta__buttons reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="hv-last-updated">Last Updated: <?php echo date('F Y'); ?></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

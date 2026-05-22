<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'About Workhorse Site Solutions | Damascus, OR Contractor';
$pageDescription = 'Workhorse Site Solutions is a family-owned site work contractor in Damascus, OR. Licensed, bonded, and insured — serving the Portland Metro Area with junk removal, excavation, demolition, and more.';
$canonicalUrl    = $siteUrl . '/about/';
$currentPage     = 'about';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396305026-gall8t-481679864_606598672364120_4541778524350946207_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '6';

/* ── Photos ──────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto   = $photoBase . '1779396305026-gall8t-481679864_606598672364120_4541778524350946207_n.jpg';
$storyPhoto  = $photoBase . '1779396417127-e2a67v-481978105_604909045866416_5049096311889908819_n.jpg';
$teamPhoto   = $photoBase . '1779396422190-fkuakh-481982904_605954445761876_5082188994743706509_n.jpg';
$equipPhoto  = $photoBase . '1779396427064-8fxum7-481987081_608069152217072_7714576008596587681_n.jpg';
$jobPhoto    = $photoBase . '1779396431758-bqt0qh-481989209_608065692217418_5578218413298992080_n.jpg';

/* ── Schema ──────────────────────────────────────────────── */
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'About', 'url' => '/about/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     ABOUT PAGE — Workhorse Site Solutions LLC
     Phase 5 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── About Hero ──────────────────────────────────────────── */
.hero--about {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-10)) var(--space-6) var(--space-10);
  background-image: url('<?php echo $heroPhoto; ?>');
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.hero--about::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,0.88) 0%, rgba(0,0,0,0.7) 50%, rgba(77,94,111,0.6) 100%);
  z-index: 1;
}
.hero--about::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--about > * { position: relative; z-index: 2; }
.hero--about .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  margin-bottom: var(--space-4);
}
.hero--about .hero-eyebrow i,
.hero--about .hero-eyebrow svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
}
.hero--about h1 {
  color: var(--color-white);
  max-width: 700px;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.hero--about .hero-subtitle {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.7;
}

/* ── Story Section ───────────────────────────────────────── */
.about-story-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: var(--space-10);
  align-items: center;
}
.about-story-img {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: visible;
}
.about-story-img img {
  border-radius: var(--radius-lg);
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  box-shadow: var(--shadow-xl);
}
.about-story-badge {
  position: absolute;
  bottom: -20px;
  right: -16px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-5) var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
}
.about-story-badge .big-num {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  line-height: 1;
}
.about-story-badge .badge-label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-1);
}

/* ── Timeline Section ────────────────────────────────────── */
.timeline-section {
  position: relative;
  background: var(--color-primary);
  overflow: hidden;
}
.timeline-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%);
  opacity: 0.5;
}
.timeline-section .container { position: relative; z-index: 1; }
.timeline-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-8);
}
.timeline-card {
  padding: var(--space-6);
  background: rgba(255,255,255,0.06);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(255,255,255,0.08);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.timeline-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 40px rgba(0,0,0,0.3);
}
.timeline-year {
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  font-weight: 900;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.timeline-card h3 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.timeline-card p {
  color: rgba(255,255,255,0.75);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  margin: 0;
}

/* ── Dividers ────────────────────────────────────────────── */
.divider-wave--top {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave--top svg,
.divider-wave--bottom svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Values Grid ─────────────────────────────────────────── */
.values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-8);
}
.value-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.value-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}
.value-icon {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-4);
  box-shadow: var(--shadow-md);
  color: var(--color-accent);
}
.value-icon i,
.value-icon svg { width: 28px; height: 28px; }
.value-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  color: var(--color-primary);
}
.value-card p {
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-gray);
  margin: 0;
}

/* ── Credentials Section ─────────────────────────────────── */
.credentials-strip {
  display: flex;
  gap: var(--space-8);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-8);
}
.credential-item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  font-weight: 600;
  font-size: var(--font-size-base);
}
.credential-item i,
.credential-item svg {
  width: 28px;
  height: 28px;
  color: var(--color-accent);
}

/* ── Equipment Split ─────────────────────────────────────── */
.equip-split {
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: var(--space-10);
  align-items: center;
}
.equip-split img {
  border-radius: var(--radius-lg);
  width: 100%;
  aspect-ratio: 16 / 10;
  object-fit: cover;
  box-shadow: var(--shadow-lg);
}
.equip-list {
  list-style: none;
  padding: 0;
  margin: var(--space-6) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.equip-list li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  font-size: var(--font-size-base);
  color: var(--color-text);
}
.equip-list li i,
.equip-list li svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── CTA Section ─────────────────────────────────────────── */
.about-cta {
  background: var(--color-dark);
  text-align: center;
}
.about-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.about-cta p {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-8);
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 960px) {
  .about-story-grid { grid-template-columns: 1fr; }
  .about-story-img { max-width: 500px; margin: 0 auto; }
  .equip-split { grid-template-columns: 1fr; }
  .timeline-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
  .values-grid { grid-template-columns: 1fr; }
  .timeline-grid { grid-template-columns: 1fr; }
  .about-story-badge { right: 0; bottom: -16px; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     HERO — About
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--about">
  <div class="hero-content">
    <span class="hero-eyebrow">
      <i data-lucide="users"></i> Family-Owned Since <?php echo $yearEstablished; ?>
    </span>
    <h1>The Crew Behind <span class="text-accent">Workhorse</span> Site Solutions</h1>
    <p class="hero-subtitle">A Damascus, OR contractor built on showing up, doing the work right, and treating every property like our own. Licensed, bonded, and insured across the Portland Metro Area.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     OUR STORY
     ═══════════════════════════════════════════════════════ -->
<section class="section" aria-label="Our story">
  <div class="container">
    <div class="about-story-grid">
      <div class="about-story-img reveal-left">
        <img src="<?php echo $storyPhoto; ?>" alt="Workhorse Site Solutions crew working on a Damascus, Oregon property" width="600" height="750" loading="lazy">
        <div class="about-story-badge">
          <div class="big-num"><?php echo $yearsInBusiness; ?>+</div>
          <div class="badge-label">Years Serving<br>Damascus</div>
        </div>
      </div>

      <div class="reveal-right">
        <span class="eyebrow-label">Our Story</span>
        <h2>From <span class="text-accent">Junk Hauling</span> to Full-Scale Site Solutions</h2>
        <div class="answer-block">
          <h3>How did Workhorse Site Solutions get started in Damascus, OR?</h3>
          <p>Workhorse Site Solutions began in <?php echo $yearEstablished; ?> as a small junk hauling operation in Damascus, Oregon. What started with a single truck and a willingness to take on any load grew into something bigger when clients started asking us to handle more — demolish the old shed, clear the back lot, grade the driveway, dig the foundation trench.</p>
        </div>
        <p>We said yes to every challenge and built the skills, equipment fleet, and crew to back it up. Today, Workhorse Site Solutions is a full-service site work contractor handling junk removal, excavation, demolition, land clearing, grading, trenching, fence installation, deck construction, driveway services, and general contracting for residential, commercial, and construction clients across the Portland Metro Area.</p>
        <p>We're still family-owned, still based in Damascus, and still operate the same way we did on day one: show up when we say we will, work until the job is done, and leave the site cleaner than we found it. That work ethic is why our customers keep calling back — and why we've grown from hauling junk to transforming properties.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     MILESTONE TIMELINE
     ═══════════════════════════════════════════════════════ -->
<section class="timeline-section section" aria-label="Company milestones">
  <div class="divider-wave--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C480,0 960,60 1440,0 L1440,0 L0,0 Z"/>
    </svg>
  </div>

  <div class="container">
    <div class="section-header reveal-up" style="text-align:center;">
      <span class="eyebrow" style="color:var(--color-accent);">Milestones</span>
      <h2 style="color:var(--color-white);">How <span class="text-accent">Workhorse</span> Grew Into a Full-Service Contractor</h2>
    </div>

    <div class="timeline-grid">
      <div class="timeline-card reveal-up reveal-delay-1">
        <div class="timeline-year"><?php echo $yearEstablished; ?></div>
        <h3>Founded in Damascus</h3>
        <p>Launched as Workhorse Hauling & Junk Removal with one truck and a commitment to honest, hard work in the Portland Metro Area.</p>
      </div>
      <div class="timeline-card reveal-up reveal-delay-2">
        <div class="timeline-year"><?php echo $yearEstablished + 1; ?></div>
        <h3>Equipment Fleet Expanded</h3>
        <p>Added excavators, skid steers, and dump trailers to handle demolition, land clearing, and site preparation alongside hauling.</p>
      </div>
      <div class="timeline-card reveal-up reveal-delay-3">
        <div class="timeline-year"><?php echo $yearEstablished + 2; ?></div>
        <h3>Rebranded as Site Solutions</h3>
        <p>Evolved from hauling-only to a comprehensive site work company — excavation, grading, trenching, fencing, and general contracting.</p>
      </div>
      <div class="timeline-card reveal-up reveal-delay-4">
        <div class="timeline-year"><?php echo date('Y'); ?></div>
        <h3>500+ Projects Complete</h3>
        <p>Serving Damascus, Gresham, Happy Valley, Sandy, Boring, Clackamas, and beyond with 12 specialized services and a 5.0 Google rating.</p>
      </div>
    </div>
  </div>

  <div class="divider-wave--bottom">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,0 C480,60 960,0 1440,60 L1440,60 L0,60 Z"/>
    </svg>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     VALUES
     ═══════════════════════════════════════════════════════ -->
<section class="section" aria-label="Our values">
  <div class="container">
    <div class="section-header reveal-up" style="text-align:center;">
      <span class="eyebrow-label">What Drives Us</span>
      <h2>Built on <span class="text-accent">Work Ethic</span>, Not Marketing Promises</h2>
      <p class="prose-centered">Every project gets the same treatment — whether it's a single-item haul or a multi-acre land clear.</p>
    </div>

    <div class="values-grid">
      <div class="value-card card-tint-1 reveal-up reveal-delay-1">
        <div class="value-icon"><i data-lucide="clock"></i></div>
        <h3>Show Up On Time</h3>
        <p>We schedule tight and arrive ready. No last-minute reschedules, no all-day windows. Your project starts when we say it will.</p>
      </div>
      <div class="value-card card-tint-2 reveal-up reveal-delay-2">
        <div class="value-icon"><i data-lucide="shield-check"></i></div>
        <h3>Own the Outcome</h3>
        <p>We don't leave until you walk the site and confirm everything meets spec. Our crew takes personal responsibility for every job.</p>
      </div>
      <div class="value-card card-tint-3 reveal-up reveal-delay-3">
        <div class="value-icon"><i data-lucide="handshake"></i></div>
        <h3>Straight Talk, Fair Price</h3>
        <p>No bait-and-switch, no surprise charges. We walk the site, give you an honest number, and stick to it. That's how we've kept a 5.0 rating across 100+ reviews.</p>
      </div>
      <div class="value-card card-tint-1 reveal-up reveal-delay-1">
        <div class="value-icon"><i data-lucide="recycle"></i></div>
        <h3>Responsible Disposal</h3>
        <p>Everything we haul gets sorted. Recyclables go to the right facilities, salvageable material gets donated, and only true waste hits the landfill.</p>
      </div>
      <div class="value-card card-tint-2 reveal-up reveal-delay-2">
        <div class="value-icon"><i data-lucide="hard-hat"></i></div>
        <h3>Safety-First Crews</h3>
        <p>Licensed, bonded, and insured in Oregon. Workers' compensation on every project. Proper PPE, flagging, and equipment protocols — no shortcuts.</p>
      </div>
      <div class="value-card card-tint-3 reveal-up reveal-delay-3">
        <div class="value-icon"><i data-lucide="map-pin"></i></div>
        <h3>Local Knowledge</h3>
        <p>Based in Damascus, we know Clackamas County permitting, the soil conditions off Boring Road, and the drainage challenges in Happy Valley subdivisions.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     CREDENTIALS
     ═══════════════════════════════════════════════════════ -->
<section class="section" style="background:var(--color-light);" aria-label="Credentials">
  <div class="container" style="text-align:center;">
    <div class="section-header reveal-up">
      <span class="eyebrow-label">Credentials</span>
      <h2>Licensed, Bonded &amp; <span class="text-accent">Insured</span> in Oregon</h2>
      <p class="prose-centered">Workhorse Site Solutions carries full liability coverage and workers' compensation on every project. We handle permits, inspections, and responsible disposal as part of the job.</p>
    </div>

    <div class="credentials-strip reveal-up">
      <div class="credential-item"><i data-lucide="shield-check"></i> Oregon Licensed Contractor</div>
      <div class="credential-item"><i data-lucide="badge-check"></i> Bonded</div>
      <div class="credential-item"><i data-lucide="shield"></i> General Liability Insurance</div>
      <div class="credential-item"><i data-lucide="hard-hat"></i> Workers' Compensation</div>
      <div class="credential-item"><i data-lucide="recycle"></i> DEQ-Compliant Disposal</div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     EQUIPMENT & CAPABILITIES
     ═══════════════════════════════════════════════════════ -->
<section class="section" aria-label="Equipment and capabilities">
  <div class="container">
    <div class="equip-split">
      <div class="reveal-left">
        <span class="eyebrow-label">Our Fleet</span>
        <h2>The Right <span class="text-accent">Equipment</span> for Every Job</h2>
        <p>We own and operate our own heavy equipment — no renting, no waiting on third-party schedules. That means faster mobilization, lower costs, and complete control over every project.</p>

        <ul class="equip-list">
          <li><i data-lucide="truck"></i> Dump trucks and hauling trailers</li>
          <li><i data-lucide="hard-hat"></i> Mini and full-size excavators</li>
          <li><i data-lucide="wrench"></i> Skid steers and track loaders</li>
          <li><i data-lucide="shovel"></i> Trenching machines and compactors</li>
          <li><i data-lucide="hammer"></i> Demolition attachments and breakers</li>
          <li><i data-lucide="tree-pine"></i> Stump grinders and brush chippers</li>
        </ul>
      </div>

      <div class="reveal-right">
        <img src="<?php echo $equipPhoto; ?>" alt="Workhorse Site Solutions heavy equipment on a job site near Damascus, Oregon" width="700" height="438" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════ -->
<section class="about-cta section" aria-label="Call to action">
  <div class="container">
    <span class="eyebrow" style="color:var(--color-accent);">Ready to Start?</span>
    <h2>Put the Workhorse Crew on Your Next Project</h2>
    <p>Whether you need a single load hauled or a full site prepped for construction, we'll give you a straight estimate and show up ready to work.</p>
    <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

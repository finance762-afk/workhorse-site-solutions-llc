<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('site-preparation-grading');
$pageTitle       = 'Site Preparation & Grading Damascus, OR | ' . $siteName;
$pageDescription = 'Professional site preparation and grading in Damascus, OR. Workhorse Site Solutions delivers cut-and-fill grading, drainage solutions, and build-ready surfaces for residential and commercial construction. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/site-preparation-grading/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396323298-kfnmea-481764174_605959765761344_5422074130262060362_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '7';

/* ── Page Photos ────────────────────────────────────────────── */
$photos = [
    'hero'  => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396323298-kfnmea-481764174_605959765761344_5422074130262060362_n.jpg',
    'body1' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396519820-v5xuh9-482055630_608071475550173_8034668472513829664_n.jpg',
    'body2' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396526740-pgf11b-482056194_606603682363619_1857155265235995056_n.jpg',
    'body3' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396539549-5a1vjk-482069291_604897465867574_548965737041469412_n.jpg',
];

/* ── Service Card Image Map (for related services) ──────────── */
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

/* ── FAQs ────────────────────────────────────────────────── */
$faqs = [
    [
        'question' => 'How much does site preparation and grading cost in Damascus, OR?',
        'answer'   => 'Residential site prep and grading in Damascus typically ranges from $2,000 to $10,000 depending on lot size, slope severity, soil conditions, and whether clearing is needed first. A flat quarter-acre lot costs less than a sloped half-acre parcel in the foothills. We provide free on-site estimates with itemized pricing.',
    ],
    [
        'question' => 'What is the difference between rough grading and finish grading?',
        'answer'   => 'Rough grading establishes the overall contour and drainage pattern — moving large volumes of soil to create the correct slope. Finish grading refines the surface to within 1-2 inches of final grade, compacts the soil, and prepares it for concrete, asphalt, or landscaping. We handle both phases.',
    ],
    [
        'question' => 'Do I need a grading permit in Clackamas County?',
        'answer'   => 'Grading permits are required in Clackamas County when moving more than 50 cubic yards of soil or when grading changes the drainage pattern on a property. Most residential construction sites require one. We coordinate the permit application, submit the grading plan, and schedule county inspections.',
    ],
    [
        'question' => 'How long does site preparation take for a residential build?',
        'answer'   => 'A standard residential lot (0.25 to 0.5 acres) typically takes 3 to 7 days from initial clearing through finish grade and compaction. Larger or heavily sloped lots in Damascus and Sandy can take 10 to 14 days. Weather delays are possible during Oregon\'s wet season — we build buffer days into every schedule.',
    ],
    [
        'question' => 'Can you grade a lot that has an existing slope?',
        'answer'   => 'Yes. Damascus and the surrounding foothills have significant grade changes. We perform cut-and-fill operations to create level building pads, install retaining walls where needed, and engineer drainage to handle runoff. Slopes up to 30% are within our equipment capability.',
    ],
    [
        'question' => 'What types of projects need site preparation?',
        'answer'   => 'New home construction, shop and barn pads, ADU foundations, commercial buildings, driveways, septic systems, and retaining wall installations all require proper site prep. We also re-grade existing properties to fix drainage problems, standing water, and erosion damage.',
    ],
    [
        'question' => 'Does Workhorse handle utility trenching during site prep?',
        'answer'   => 'Yes. We dig utility trenches for water, sewer, electrical, and gas lines as part of the site preparation scope. Combining trenching with grading in one contract saves mobilization costs and keeps your project on a single timeline.',
    ],
    [
        'question' => 'What soil types are common in the Damascus area?',
        'answer'   => 'Damascus sits on a mix of Jory clay loam and Woodburn silt loam — both hold water and compact differently. The Boring and Sandy corridor has volcanic loam with better drainage. We adjust compaction methods and base material specifications based on your site\'s actual soil conditions.',
    ],
];

/* ── Schema Markup ───────────────────────────────────────── */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Site Preparation & Grading', 'url' => '/services/site-preparation-grading/'],
];
$schemaMarkup  = generateServiceSchema($service);
$schemaMarkup .= generateFAQSchema($faqs);
$schemaMarkup .= generateBreadcrumbSchema($breadcrumbs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     SITE PREPARATION & GRADING — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Site Preparation & Grading Page ────────────────────────
   Premium Tier | 400+ lines | 6+ visual techniques
   Techniques: layered hero, SVG dividers, floating accents,
   asymmetric layouts, tinted cards, pull-quote, bento grid,
   process timeline, comparison table, FAQ accordion
   ──────────────────────────────────────────────────────── */

/* ── 1. HERO ──────────────────────────────────────────────── */
.hero--service {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: flex-end;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($photos['hero']); ?>');
  background-size: cover;
  background-position: center 60%;
  overflow: hidden;
}
.hero--service::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(175deg, rgba(0,0,0,0.93) 0%, rgba(0,0,0,0.62) 50%, rgba(77,94,111,0.3) 100%);
  z-index: 1;
}
.hero--service::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--service > * { position: relative; z-index: 2; }
.hero--service .container { max-width: var(--max-width); }
.hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: var(--color-accent);
  font-size: var(--font-size-sm);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  margin-bottom: var(--space-4);
}
.hero__eyebrow i, .hero__eyebrow svg { width: 16px; height: 16px; }
.hero--service h1 {
  color: var(--color-white);
  font-size: var(--fs-h1);
  font-family: var(--font-heading);
  font-weight: 800;
  line-height: 1.08;
  max-width: 760px;
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.hero--service h1 .text-accent { color: var(--color-accent); }
.hero--service .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 620px;
  margin-bottom: var(--space-6);
}
.hero__ctas {
  display: flex;
  gap: var(--space-3);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero__trust {
  display: flex;
  gap: var(--space-6);
  flex-wrap: wrap;
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255,255,255,0.15);
}
.hero__trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.8);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.hero__trust-item i, .hero__trust-item svg { width: 18px; height: 18px; color: var(--color-accent); }
.hero__breadcrumb {
  position: absolute;
  top: calc(var(--nav-height) + var(--space-4));
  left: var(--space-4);
  display: flex;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
  z-index: 3;
}
.hero__breadcrumb a { color: rgba(255,255,255,0.65); transition: color var(--transition-fast); }
.hero__breadcrumb a:hover { color: var(--color-accent); }
.hero__breadcrumb .breadcrumb-sep { color: rgba(255,255,255,0.35); }

/* ── 2. PROBLEM STATEMENT ─────────────────────────────────── */
.problem-section {
  position: relative;
  background: var(--color-dark);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.problem-section .float-ring {
  position: absolute;
  border-radius: 50%;
  border: 2px solid var(--color-accent);
  opacity: 0.04;
  z-index: 0;
}
.problem-section .float-ring--1 {
  width: 400px; height: 400px;
  top: -120px; right: -100px;
  animation: ringPulse 16s ease-in-out infinite;
}
.problem-section .float-ring--2 {
  width: 250px; height: 250px;
  bottom: -60px; left: -60px;
  animation: ringPulse 20s ease-in-out infinite reverse;
}
.problem__pull-quote {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  font-weight: 700;
  line-height: 1.3;
  color: var(--color-white);
  max-width: 800px;
  margin: 0 auto var(--space-10);
  text-align: center;
  text-wrap: balance;
  position: relative;
  z-index: 1;
}
.problem__pull-quote .text-accent { color: var(--color-accent); }
.problem__bento {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: var(--space-4);
  position: relative;
  z-index: 1;
}
.problem__card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.06);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.problem__card:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 30px rgba(227,70,2,0.1);
}
.problem__card-icon {
  width: 48px; height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(227,70,2,0.12);
  color: var(--color-accent);
}
.problem__card-icon i, .problem__card-icon svg { width: 24px; height: 24px; }
.problem__card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-white);
}
.problem__card p {
  font-size: var(--font-size-base);
  color: rgba(255,255,255,0.7);
  line-height: 1.65;
}

/* ── 3. EXPERT POSITIONING ────────────────────────────────── */
.expert-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.expert-section .divider-top {
  position: absolute;
  top: -1px; left: 0; right: 0;
  width: 100%;
  line-height: 0;
}
.expert-section .divider-top svg { display: block; width: 100%; height: auto; }
.expert-section .float-accent {
  position: absolute;
  width: 300px; height: 300px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.03;
  bottom: -80px; right: -80px;
  animation: ringPulse 14s ease-in-out infinite;
  z-index: 0;
}
.expert__grid {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-10);
  align-items: center;
  position: relative;
  z-index: 1;
}
.expert__media { position: relative; }
.expert__media-primary {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.expert__media-primary img { width: 100%; display: block; aspect-ratio: 4/3; object-fit: cover; }
.expert__media-badge {
  position: absolute;
  bottom: -16px; right: -16px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-4) var(--space-5);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  text-align: center;
  z-index: 2;
}
.expert__media-badge-num {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 900;
  line-height: 1;
}
.expert__media-badge-lbl {
  font-size: var(--font-size-sm);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.expert__content h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.expert__content h2 .text-accent { color: var(--color-accent); }
.expert__content .answer-block {
  color: var(--color-text-light);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  margin-bottom: var(--space-6);
}
.expert__diffs {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.expert__diff {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.expert__diff-icon {
  width: 40px; height: 40px; min-width: 40px;
  border-radius: 50%;
  background: rgba(227,70,2,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.expert__diff-icon i, .expert__diff-icon svg { width: 20px; height: 20px; }
.expert__diff h4 { font-weight: 700; color: var(--color-primary); margin-bottom: var(--space-1); }
.expert__diff p { color: var(--color-text-light); font-size: var(--font-size-base); line-height: 1.6; }

/* ── 4. SERVICE BREAKDOWN ─────────────────────────────────── */
.breakdown-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.breakdown__grid {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-10);
  align-items: start;
}
.breakdown__list h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.breakdown__list h2 .text-accent { color: var(--color-accent); }
.breakdown__list .answer-block {
  color: var(--color-text-light);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  margin-bottom: var(--space-6);
}
.breakdown__items {
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.breakdown__item {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-bg);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-fast);
}
.breakdown__item:hover { transform: translateX(4px); }
.breakdown__item-check {
  width: 28px; height: 28px; min-width: 28px;
  border-radius: 50%;
  background: rgba(227,70,2,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.breakdown__item-check i, .breakdown__item-check svg { width: 16px; height: 16px; }
.breakdown__item span { font-weight: 600; color: var(--color-primary); }
.breakdown__timeline h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h3);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-6);
}
.timeline {
  position: relative;
  padding-left: var(--space-8);
}
.timeline::before {
  content: '';
  position: absolute;
  left: 12px; top: 0; bottom: 0;
  width: 3px;
  background: linear-gradient(180deg, var(--color-accent), var(--color-secondary));
  border-radius: var(--radius-full);
}
.timeline__step { position: relative; padding-bottom: var(--space-6); }
.timeline__step:last-child { padding-bottom: 0; }
.timeline__dot {
  position: absolute;
  left: calc(-1 * var(--space-8) + 6px);
  top: 4px;
  width: 16px; height: 16px;
  border-radius: 50%;
  background: var(--color-accent);
  border: 3px solid var(--color-bg-alt);
  z-index: 1;
}
.timeline__step h4 { font-weight: 700; color: var(--color-primary); margin-bottom: var(--space-1); }
.timeline__step p { color: var(--color-text-light); font-size: var(--font-size-base); line-height: 1.6; }

/* ── 5. PROOF / REVIEWS ───────────────────────────────────── */
.proof-section {
  position: relative;
  background: var(--color-dark);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.proof-section .divider-top {
  position: absolute;
  top: -1px; left: 0; right: 0;
  width: 100%;
  line-height: 0;
}
.proof-section .divider-top svg { display: block; width: 100%; height: auto; }
.proof-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.proof-section .section-title h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.proof-section .section-title h2 .text-accent { color: var(--color-accent); }
.proof-section .section-title .answer-block {
  max-width: 650px;
  margin: 0 auto;
  color: rgba(255,255,255,0.7);
  line-height: 1.7;
}
.proof__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.proof__card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.06);
  position: relative;
}
.proof__card::before {
  content: '\201C';
  font-family: var(--font-heading);
  font-size: 4rem;
  color: var(--color-accent);
  opacity: 0.2;
  position: absolute;
  top: var(--space-3); left: var(--space-4);
  line-height: 1;
}
.proof__quote {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: rgba(255,255,255,0.85);
  margin-bottom: var(--space-4);
  font-style: italic;
  position: relative; z-index: 1;
}
.proof__author { display: flex; align-items: center; gap: var(--space-2); }
.proof__stars { color: var(--color-star); display: flex; gap: 2px; }
.proof__stars i, .proof__stars svg { width: 14px; height: 14px; }
.proof__name { font-weight: 700; color: var(--color-white); font-size: var(--font-size-sm); }
.proof__location { font-size: var(--font-size-xs); color: rgba(255,255,255,0.55); }

/* ── 6. COMPARISON TABLE ──────────────────────────────────── */
.compare-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.compare-section .divider-top {
  position: absolute;
  top: -1px; left: 0; right: 0;
  width: 100%;
  line-height: 0;
}
.compare-section .divider-top svg { display: block; width: 100%; height: auto; }
.compare-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.compare-section .section-title h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.compare-section .section-title h2 .text-accent { color: var(--color-accent); }
.compare-section .section-title .answer-block {
  max-width: 600px;
  margin: 0 auto;
  color: var(--color-text-light);
  line-height: 1.7;
}
.compare__table {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  max-width: 900px;
  margin: 0 auto;
}
.compare__col {
  border-radius: var(--radius-lg);
  padding: var(--space-6);
}
.compare__col--other { background: var(--color-bg-alt); border: 1px solid var(--color-border); }
.compare__col--us { background: rgba(227,70,2,0.06); border: 2px solid rgba(227,70,2,0.25); }
.compare__col-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  margin-bottom: var(--space-4);
  padding-bottom: var(--space-3);
  border-bottom: 2px solid var(--color-border);
}
.compare__col--other .compare__col-title { color: var(--color-text-light); }
.compare__col--us .compare__col-title { color: var(--color-accent); }
.compare__point {
  display: flex;
  gap: var(--space-2);
  align-items: flex-start;
  padding: var(--space-2) 0;
}
.compare__point i, .compare__point svg { width: 18px; height: 18px; min-width: 18px; margin-top: 3px; }
.compare__col--other .compare__point i,
.compare__col--other .compare__point svg { color: var(--color-text-light); }
.compare__col--us .compare__point i,
.compare__col--us .compare__point svg { color: var(--color-accent); }
.compare__point span { font-size: var(--font-size-base); line-height: 1.5; color: var(--color-text); }

/* ── 7. FAQ ACCORDION ─────────────────────────────────────── */
.faq-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.faq-section .section-title h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.faq-section .section-title h2 .text-accent { color: var(--color-accent); }
.faq-section .section-title .answer-block {
  max-width: 600px;
  margin: 0 auto;
  color: var(--color-text-light);
  line-height: 1.7;
}
.faq__list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: box-shadow var(--transition-fast);
}
.faq-item:hover { box-shadow: var(--shadow-md); }
.faq-item summary {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: var(--space-4) var(--space-5);
  cursor: pointer;
  font-weight: 700;
  font-size: var(--font-size-base);
  color: var(--color-primary);
  list-style: none;
  gap: var(--space-3);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: '+';
  font-size: var(--font-size-xl);
  color: var(--color-accent);
  font-weight: 700;
  transition: transform var(--transition-fast);
  flex-shrink: 0;
}
.faq-item[open] summary::after { content: '\2212'; transform: rotate(180deg); }
.faq-item .faq-answer {
  padding: 0 var(--space-5) var(--space-5);
  color: var(--color-text-light);
  line-height: 1.7;
  font-size: var(--font-size-base);
}

/* ── 8. FINAL CTA ─────────────────────────────────────────── */
.final-cta {
  position: relative;
  background: var(--color-dark);
  padding: var(--space-16) var(--space-4);
  text-align: center;
  overflow: hidden;
}
.final-cta .divider-top {
  position: absolute;
  top: -1px; left: 0; right: 0;
  width: 100%;
  line-height: 0;
}
.final-cta .divider-top svg { display: block; width: 100%; height: auto; }
.final-cta h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-white);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.final-cta h2 .text-accent { color: var(--color-accent); }
.final-cta .answer-block {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-6);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.final-cta .hero__ctas { justify-content: center; }

/* ── 9. RELATED SERVICES ──────────────────────────────────── */
.related-section {
  background: var(--color-bg-alt);
  padding: var(--space-16) var(--space-4);
}
.related-section .section-title {
  text-align: center;
  margin-bottom: var(--space-8);
}
.related-section .section-title h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h3);
  color: var(--color-primary);
}

/* ── Updated meta ─────────────────────────────────────────── */
.page-updated {
  text-align: center;
  padding: var(--space-4);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
}

/* ── Keyframes ────────────────────────────────────────────── */
@keyframes ringPulse {
  0%, 100% { transform: scale(1) rotate(0deg); }
  50% { transform: scale(1.06) rotate(4deg); }
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1024px) {
  .expert__grid { grid-template-columns: 1fr; }
  .expert__media { max-width: 550px; margin: 0 auto; }
  .breakdown__grid { grid-template-columns: 1fr; }
  .compare__table { grid-template-columns: 1fr; }
  .proof__grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .hero--service { min-height: 55vh; align-items: center; padding-top: calc(var(--nav-height) + var(--space-10)); }
  .hero__breadcrumb { position: static; margin-bottom: var(--space-4); }
  .problem__bento { grid-template-columns: 1fr 1fr; }
  .hero__trust { gap: var(--space-4); justify-content: center; }
}
@media (max-width: 480px) {
  .problem__bento { grid-template-columns: 1fr; }
  .hero__ctas { flex-direction: column; }
  .hero__ctas .btn { width: 100%; text-align: center; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--service" aria-label="Site preparation and grading in Damascus, OR">
  <nav class="hero__breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/services/">Services</a>
    <span class="breadcrumb-sep">/</span>
    <span>Site Preparation &amp; Grading</span>
  </nav>
  <div class="container">
    <span class="hero__eyebrow"><i data-lucide="ruler"></i> Site Prep &amp; Grading</span>
    <h1><span class="text-accent">Site Preparation</span> &amp; Grading in Damascus, OR</h1>
    <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon contractor based in Damascus, delivering cut-and-fill grading, drainage engineering, and build-ready site preparation for residential and commercial projects across the Portland Metro Area since <?php echo $yearEstablished; ?>. We grade to spec — your foundation crew pours directly on our finished surface.</p>
    <div class="hero__ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <a href="#breakdown" class="btn btn-outline-white btn-lg">See What's Included</a>
    </div>
    <div class="hero__trust">
      <span class="hero__trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero__trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero__trust-item"><i data-lucide="star"></i> 5.0 Google Rating</span>
      <span class="hero__trust-item"><i data-lucide="ruler"></i> Grade-to-Spec Guarantee</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="problem-section" aria-label="Why site preparation matters">
  <div class="float-ring float-ring--1"></div>
  <div class="float-ring float-ring--2"></div>
  <div class="container">
    <p class="problem__pull-quote reveal-up">Pouring a foundation on ungraded soil is like building on sand — the <span class="text-accent">cracks show up later</span>, and the fix costs ten times the prep.</p>

    <div class="problem__bento">
      <article class="problem__card reveal-up reveal-delay-1">
        <div class="problem__card-icon"><i data-lucide="droplets"></i></div>
        <h3>Standing Water &amp; Runoff</h3>
        <p>Without proper grading, rainwater pools against foundations, floods crawl spaces, and erodes driveways. Damascus averages 50+ inches of rain per year — every inch of slope matters.</p>
      </article>
      <article class="problem__card reveal-up reveal-delay-2">
        <div class="problem__card-icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Foundation Settlement</h3>
        <p>Uncompacted fill and uneven subgrade cause differential settlement. Cracks in slabs, sticking doors, and cracked drywall start within the first year — and worsen every season after.</p>
      </article>
      <article class="problem__card reveal-up reveal-delay-3">
        <div class="problem__card-icon"><i data-lucide="clock"></i></div>
        <h3>Builder Delays</h3>
        <p>Concrete and framing crews won't start on a lot that isn't graded to spec. Every week your site sits unprepped, your construction timeline slips and carrying costs compound.</p>
      </article>
      <article class="problem__card reveal-up reveal-delay-4">
        <div class="problem__card-icon"><i data-lucide="file-warning"></i></div>
        <h3>Permit Failures</h3>
        <p>Clackamas County inspectors reject sites that don't meet drainage slope minimums or compaction requirements. A failed inspection means re-grading, re-testing, and re-scheduling — at your expense.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="expert-section" aria-label="Why choose Workhorse for site prep">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-dark)">
      <path d="M0,0 L1440,0 L1440,48 C960,16 480,16 0,48 Z"/>
    </svg>
  </div>
  <div class="float-accent"></div>
  <div class="container">
    <div class="expert__grid">
      <div class="expert__media reveal-left">
        <div class="expert__media-primary">
          <img src="<?php echo htmlspecialchars($photos['body1']); ?>" alt="Workhorse excavator performing precision grading on a Damascus construction site" width="600" height="450" loading="lazy">
        </div>
        <div class="expert__media-badge">
          <div class="expert__media-badge-num"><?php echo $yearsInBusiness; ?>+</div>
          <div class="expert__media-badge-lbl">Years Grading</div>
        </div>
      </div>
      <div class="expert__content reveal-up reveal-delay-1">
        <h2>Why do builders in Damascus <span class="text-accent">choose Workhorse</span> for site prep?</h2>
        <p class="answer-block">Because we understand that grading isn't just moving dirt — it's engineering the surface your entire structure sits on. Our operators grade to within an inch of spec using GPS-guided equipment, and we compact every lift to Proctor density standards. The result is a pad that passes county inspection the first time.</p>
        <div class="expert__diffs">
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="target"></i></div>
            <div>
              <h4>Precision-Grade Equipment</h4>
              <p>Our CAT excavators and motor graders cut to plan-specified elevations. We verify with laser levels on every pad — not eyeball estimates. Your foundation contractor pours on our finished surface without callbacks.</p>
            </div>
          </div>
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="layers"></i></div>
            <div>
              <h4>Full-Stack Site Work</h4>
              <p>Clearing, grading, trenching, and drainage in a single contract. One mobilization, one crew, one schedule. That eliminates the coordination chaos of juggling three separate subcontractors.</p>
            </div>
          </div>
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h4>Damascus Soil Expertise</h4>
              <p>Jory clay, Woodburn silt loam, volcanic fill near Boring — each soil type compacts and drains differently. We spec base rock, geotextile, and drainage solutions matched to your lot's actual conditions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="breakdown-section" id="breakdown" aria-label="What's included in site preparation">
  <div class="container">
    <div class="breakdown__grid">
      <div class="breakdown__list reveal-up">
        <h2>What's <span class="text-accent">included</span> in site preparation and grading?</h2>
        <p class="answer-block">Every site prep project includes clearing, rough grading, finish grading, soil compaction, drainage slope engineering, and erosion control. We deliver a pad that meets Clackamas County specifications and passes inspection on the first visit — no re-work, no surprise charges.</p>

        <div class="breakdown__items">
          <div class="breakdown__item reveal-left reveal-delay-1">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Vegetation clearing and topsoil stripping</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-2">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Cut-and-fill earthwork to plan grade</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-3">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Rough grading and drainage slope establishment</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-1">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Soil compaction to Proctor density specs</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-2">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Base rock installation and leveling</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-3">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Finish grading to within 1 inch of final spec</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-1">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Erosion control (silt fence, wattles, seeding)</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-2">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Utility trenching for water, sewer, and electric</span>
          </div>
        </div>
      </div>

      <div class="breakdown__timeline reveal-up reveal-delay-2">
        <h3>How Our Process Works</h3>
        <div class="timeline">
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>1. Site Evaluation</h4>
            <p>We walk your lot, review civil plans, assess soil conditions, and identify drainage challenges. Written estimate with itemized scope delivered within 48 hours.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>2. Permit &amp; Plan Review</h4>
            <p>We coordinate with Clackamas County for grading permits, review elevation plans, and confirm utility locations before any equipment arrives on-site.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>3. Clearing &amp; Stripping</h4>
            <p>Vegetation removed, topsoil stripped and stockpiled, and the subgrade exposed. We protect trees marked for retention and install initial erosion controls.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>4. Cut, Fill &amp; Compact</h4>
            <p>High spots cut, low spots filled in lifts, each lift compacted to spec. Drainage slopes established per plan. Base rock installed where specified.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>5. Finish Grade &amp; Inspection</h4>
            <p>Final surface graded to within 1 inch of plan elevation. Laser-verified. Erosion controls finalized. We coordinate county inspection and hand off a build-ready pad.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="proof-section" aria-label="Customer reviews for site preparation">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-bg-alt)">
      <path d="M0,48 C480,0 960,0 1440,48 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <h2>What do <span class="text-accent">builders and homeowners</span> say about our grading work?</h2>
      <p class="answer-block">Builders return to us because our finished grade passes inspection the first time. Homeowners hire us because we solve drainage problems other contractors ignore. Here's what they report.</p>
    </div>

    <div class="proof__grid">
      <article class="proof__card reveal-up reveal-delay-1">
        <p class="proof__quote">"We've used Workhorse for site prep on three builds in Happy Valley. Every pad passed county compaction testing on the first shot. Our concrete crew pours directly on their finish grade without any rework. That saves us a week on every project."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Mark H.</span>
            <span class="proof__location">Happy Valley, OR — Custom Home Builder</span>
          </div>
        </div>
      </article>
      <article class="proof__card reveal-up reveal-delay-2">
        <p class="proof__quote">"Our backyard in Damascus flooded every winter. Workhorse re-graded the entire lot, installed a French drain along the foundation, and sloped everything toward the street. First heavy rain after the work — completely dry. Should have called them years ago."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Lisa A.</span>
            <span class="proof__location">Damascus, OR — Drainage &amp; Re-Grade</span>
          </div>
        </div>
      </article>
      <article class="proof__card reveal-up reveal-delay-3">
        <p class="proof__quote">"Needed a shop pad graded on a sloped lot near Boring. They cut into the hillside, built a proper retaining wall base, compacted in lifts, and finished dead-level. The concrete guys said it was the cleanest pad they'd poured on all year."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Greg T.</span>
            <span class="proof__location">Boring, OR — Shop Pad Grading</span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON
     ═══════════════════════════════════════════════════════ -->
<section class="compare-section" aria-label="Workhorse vs other grading contractors">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-dark)">
      <path d="M0,0 L1440,0 L1440,48 Q720,0 0,48 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <h2>How does Workhorse <span class="text-accent">compare</span> to other grading contractors?</h2>
      <p class="answer-block">Most grading crews in the Portland Metro Area rough-grade and move on. We finish-grade, compact, and verify — so your next contractor can start immediately without rework.</p>
    </div>
    <div class="compare__table reveal-up reveal-delay-1">
      <div class="compare__col compare__col--other">
        <div class="compare__col-title">Other Grading Contractors</div>
        <div class="compare__point"><i data-lucide="x"></i><span>Rough grade only — finish grading billed extra</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>No compaction testing or documentation</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Drainage slopes eyeballed, not laser-verified</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Clearing and trenching subcontracted out</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Permit coordination left to the homeowner</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>No erosion controls — you handle wet-season risk</span></div>
      </div>
      <div class="compare__col compare__col--us">
        <div class="compare__col-title">Workhorse Site Solutions</div>
        <div class="compare__point"><i data-lucide="check"></i><span>Rough and finish grade included in every bid</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Compaction tested and documented per spec</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Laser-level verification on every pad</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Clearing, grading, and trenching in one contract</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Clackamas County permit coordination built in</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Full erosion control installed on every job</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="faq-section" aria-label="Site preparation frequently asked questions">
  <div class="container">
    <div class="section-title reveal-up">
      <h2>What do builders ask about <span class="text-accent">site prep and grading</span> in Damascus?</h2>
      <p class="answer-block">Direct answers from our crew. If your question isn't here, request a free estimate and we'll walk through it on-site with you.</p>
    </div>
    <div class="faq__list">
      <?php foreach ($faqs as $i => $faq): ?>
      <details class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
        <div class="faq-answer answer-block">
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     8. FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="final-cta" aria-label="Request a site preparation estimate">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-bg-alt)">
      <path d="M0,48 C480,0 960,0 1440,48 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <h2>Ready to get your <span class="text-accent">site graded</span> and build-ready?</h2>
    <p class="answer-block">Every grading project starts with a free site evaluation. We review your plans, walk the lot, and deliver an itemized estimate within 48 hours. No pressure, no obligation — just a clear scope from a Damascus crew that owns every machine on the job.</p>
    <div class="hero__ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════ -->
<section class="related-section" aria-label="Related services">
  <div class="container">
    <div class="section-title reveal-up">
      <h2>Other Services You May Need</h2>
    </div>
    <div class="services-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php
      $related = getRelatedServices('site-preparation-grading', 3);
      $tintClasses = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      foreach ($related as $i => $rel):
        $tint = $tintClasses[$i % 3];
        $delay = $i + 1;
        $icon = $serviceIcons[$rel['slug']] ?? 'wrench';
        $img = $serviceImages[$rel['slug']] ?? '';
        $bullets = $serviceBullets[$rel['slug']] ?? [];
      ?>
      <article class="service-card-with-image <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($rel['name']); ?> in Damascus, OR" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i></div>
          <h3><?php echo htmlspecialchars($rel['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($rel['description']); ?></p>
          <?php if (!empty($bullets)): ?>
          <ul>
            <?php foreach (array_slice($bullets, 0, 3) as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <a href="/services/<?php echo htmlspecialchars($rel['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="page-updated">
  <p>Last Updated: <?php echo date('F Y'); ?></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('land-clearing');
$pageTitle       = 'Land Clearing Services Damascus, OR | ' . $siteName;
$pageDescription = 'Professional land clearing in Damascus, OR. Workhorse Site Solutions removes trees, stumps, brush, and debris to prepare your lot for construction or development. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/land-clearing/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396313562-xq2js1-481701393_605954449095209_2349548257896328613_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '3';

/* ── Page Photos ────────────────────────────────────────────── */
$photos = [
    'hero'  => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396313562-xq2js1-481701393_605954449095209_2349548257896328613_n.jpg',
    'body1' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396470463-iyj4tj-481999678_608071048883549_557956764048998778_n.jpg',
    'body2' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396475677-h3vyba-482003679_607408478949806_3932923103008527784_n.jpg',
    'body3' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396489173-cg4ed1-482006548_606613672362620_3354096622405912585_n.jpg',
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
        'question' => 'How much does land clearing cost in Damascus, OR?',
        'answer'   => 'Land clearing in Damascus typically ranges from $1,500 to $6,000 per acre depending on terrain density, slope, tree count, and debris volume. Heavily wooded lots near Boring or Sandy with large conifers cost more than flat brush-only parcels. We provide free on-site estimates with transparent, per-acre pricing.',
    ],
    [
        'question' => 'What does the land clearing process include?',
        'answer'   => 'Our land clearing covers tree felling, stump grinding, brush removal, rock extraction, and final grading to leave your lot build-ready. We haul all debris off-site and recycle usable timber when possible. Every project ends with a compacted, level surface ready for the next phase of development.',
    ],
    [
        'question' => 'How long does it take to clear a lot in the Portland Metro Area?',
        'answer'   => 'A standard residential lot (0.25 to 0.5 acres) takes 1 to 3 days. Larger parcels in areas like Damascus or Sandy with heavy timber can take 5 to 10 days. We schedule around Oregon weather to keep timelines tight and avoid mud-season delays.',
    ],
    [
        'question' => 'Do I need a permit for land clearing in Clackamas County?',
        'answer'   => 'Most land clearing in unincorporated Clackamas County requires a grading or land-use permit, especially within the Damascus urban growth boundary. Tree removal permits may also apply if protected species are present. We coordinate with county planning so you never face surprise violations.',
    ],
    [
        'question' => 'Can you clear land on steep or sloped terrain?',
        'answer'   => 'Yes. Damascus and the surrounding foothills have some of the most varied terrain in the Metro Area. We use tracked excavators and low-ground-pressure equipment designed for slopes up to 35 degrees, with erosion-control measures installed during and after clearing.',
    ],
    [
        'question' => 'What happens to the trees and brush after clearing?',
        'answer'   => 'Usable timber goes to local mills. Clean wood chips are recycled into landscaping material or biomass. Stumps are ground below grade and mixed into fill. Non-recyclable debris is hauled to licensed facilities in Clackamas County. Nothing sits on your property longer than necessary.',
    ],
    [
        'question' => 'Do you handle selective clearing or just full-lot removal?',
        'answer'   => 'We offer both. Selective clearing preserves specific trees, natural buffers, or riparian zones while removing only targeted vegetation. Full-lot clearing strips everything to bare dirt. Many Damascus homeowners choose selective clearing to keep mature Doug firs while removing underbrush and hazard trees.',
    ],
    [
        'question' => 'Is land clearing available year-round in Oregon?',
        'answer'   => 'We clear land year-round, though the dry season from May through October is ideal for larger projects. Winter clearing is possible with proper erosion control — silt fencing, straw wattles, and temporary seeding — which we include on every wet-season job at no extra charge.',
    ],
];

/* ── Schema Markup ───────────────────────────────────────── */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Land Clearing', 'url' => '/services/land-clearing/'],
];
$schemaMarkup  = generateServiceSchema($service);
$schemaMarkup .= generateFAQSchema($faqs);
$schemaMarkup .= generateBreadcrumbSchema($breadcrumbs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     LAND CLEARING — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Land Clearing Service Page ─────────────────────────────
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
  background-position: center 40%;
  overflow: hidden;
}
.hero--service::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(170deg, rgba(0,0,0,0.92) 0%, rgba(0,0,0,0.65) 45%, rgba(227,70,2,0.2) 100%);
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
  max-width: 720px;
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.hero--service h1 .text-accent { color: var(--color-accent); }
.hero--service .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 600px;
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
  background: var(--color-bg);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.problem-section .float-circle {
  position: absolute;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
  z-index: 0;
}
.problem-section .float-circle--1 {
  width: 320px; height: 320px;
  top: -80px; right: -60px;
  animation: floatSlow 12s ease-in-out infinite;
}
.problem-section .float-circle--2 {
  width: 200px; height: 200px;
  bottom: 40px; left: -50px;
  animation: floatSlow 16s ease-in-out infinite reverse;
}
.problem__pull-quote {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  font-weight: 700;
  line-height: 1.3;
  color: var(--color-primary);
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
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
  position: relative;
  z-index: 1;
}
.problem__card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.problem__card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-lg);
}
.problem__card-icon {
  width: 48px; height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(227,70,2,0.1);
  color: var(--color-accent);
}
.problem__card-icon i, .problem__card-icon svg { width: 24px; height: 24px; }
.problem__card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-primary);
}
.problem__card p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.65;
}

/* ── 3. EXPERT POSITIONING ────────────────────────────────── */
.expert-section {
  position: relative;
  background: var(--color-dark);
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
.expert__grid {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-10);
  align-items: center;
  position: relative;
  z-index: 1;
}
.expert__stat-block { text-align: center; }
.expert__stat-number {
  font-family: var(--font-heading);
  font-size: clamp(4rem, 8vw, 7rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.expert__stat-label {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.7);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}
.expert__content h2 {
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  margin-bottom: var(--space-4);
  text-wrap: balance;
}
.expert__content h2 .text-accent { color: var(--color-accent); }
.expert__content .answer-block {
  color: rgba(255,255,255,0.8);
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
  width: 40px; height: 40px;
  min-width: 40px;
  border-radius: 50%;
  background: rgba(227,70,2,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.expert__diff-icon i, .expert__diff-icon svg { width: 20px; height: 20px; }
.expert__diff h4 {
  color: var(--color-white);
  font-weight: 700;
  margin-bottom: var(--space-1);
}
.expert__diff p {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-base);
  line-height: 1.6;
}

/* ── 4. SERVICE BREAKDOWN ─────────────────────────────────── */
.breakdown-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.breakdown-section .divider-top {
  position: absolute;
  top: -1px; left: 0; right: 0;
  width: 100%;
  line-height: 0;
}
.breakdown-section .divider-top svg { display: block; width: 100%; height: auto; }
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
  width: 28px; height: 28px;
  min-width: 28px;
  border-radius: 50%;
  background: rgba(227,70,2,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.breakdown__item-check i, .breakdown__item-check svg { width: 16px; height: 16px; }
.breakdown__item span {
  font-weight: 600;
  color: var(--color-primary);
}
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
  left: 12px;
  top: 0;
  bottom: 0;
  width: 3px;
  background: linear-gradient(180deg, var(--color-accent), var(--color-secondary));
  border-radius: var(--radius-full);
}
.timeline__step {
  position: relative;
  padding-bottom: var(--space-6);
}
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
.timeline__step h4 {
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-1);
}
.timeline__step p {
  color: var(--color-text-light);
  font-size: var(--font-size-base);
  line-height: 1.6;
}

/* ── 5. PROOF / REVIEWS ───────────────────────────────────── */
.proof-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) var(--space-4);
}
.proof-section .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.proof-section .section-title h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.proof-section .section-title h2 .text-accent { color: var(--color-accent); }
.proof-section .answer-block {
  max-width: 650px;
  margin: 0 auto;
  color: var(--color-text-light);
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
  position: relative;
}
.proof__card::before {
  content: '\201C';
  font-family: var(--font-heading);
  font-size: 4rem;
  color: var(--color-accent);
  opacity: 0.15;
  position: absolute;
  top: var(--space-3);
  left: var(--space-4);
  line-height: 1;
}
.proof__quote {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin-bottom: var(--space-4);
  font-style: italic;
  position: relative;
  z-index: 1;
}
.proof__author {
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.proof__stars { color: var(--color-star); display: flex; gap: 2px; }
.proof__stars i, .proof__stars svg { width: 14px; height: 14px; }
.proof__name {
  font-weight: 700;
  color: var(--color-primary);
  font-size: var(--font-size-sm);
}
.proof__location {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
}

/* ── 6. COMPARISON TABLE ──────────────────────────────────── */
.compare-section {
  position: relative;
  background: var(--color-dark);
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
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.compare-section .section-title h2 .text-accent { color: var(--color-accent); }
.compare-section .answer-block {
  max-width: 600px;
  margin: 0 auto;
  color: rgba(255,255,255,0.75);
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
.compare__col--other { background: rgba(255,255,255,0.05); }
.compare__col--us { background: rgba(227,70,2,0.1); border: 2px solid rgba(227,70,2,0.3); }
.compare__col-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  margin-bottom: var(--space-4);
  padding-bottom: var(--space-3);
  border-bottom: 2px solid rgba(255,255,255,0.1);
}
.compare__col--other .compare__col-title { color: rgba(255,255,255,0.5); }
.compare__col--us .compare__col-title { color: var(--color-accent); }
.compare__point {
  display: flex;
  gap: var(--space-2);
  align-items: flex-start;
  padding: var(--space-2) 0;
}
.compare__point i, .compare__point svg { width: 18px; height: 18px; min-width: 18px; margin-top: 3px; }
.compare__col--other .compare__point i,
.compare__col--other .compare__point svg { color: rgba(255,255,255,0.3); }
.compare__col--us .compare__point i,
.compare__col--us .compare__point svg { color: var(--color-accent); }
.compare__point span {
  font-size: var(--font-size-base);
  line-height: 1.5;
}
.compare__col--other .compare__point span { color: rgba(255,255,255,0.55); }
.compare__col--us .compare__point span { color: rgba(255,255,255,0.9); }

/* ── 7. FAQ ACCORDION ─────────────────────────────────────── */
.faq-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.faq-section .divider-top {
  position: absolute;
  top: -1px; left: 0; right: 0;
  width: 100%;
  line-height: 0;
}
.faq-section .divider-top svg { display: block; width: 100%; height: auto; }
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
.faq-item[open] summary::after {
  content: '\2212';
  transform: rotate(180deg);
}
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
  background: var(--color-bg);
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

/* ── Split image section ──────────────────────────────────── */
.split-image-section {
  position: relative;
}
.split-image-section .img-frame {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.split-image-section .img-frame img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* ── Updated meta ─────────────────────────────────────────── */
.page-updated {
  text-align: center;
  padding: var(--space-4);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
}

/* ── Keyframes ────────────────────────────────────────────── */
@keyframes floatSlow {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-18px) rotate(2deg); }
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1024px) {
  .expert__grid { grid-template-columns: 1fr; text-align: center; }
  .expert__content { text-align: left; }
  .breakdown__grid { grid-template-columns: 1fr; }
  .compare__table { grid-template-columns: 1fr; }
  .proof__grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .hero--service { min-height: 55vh; align-items: center; padding-top: calc(var(--nav-height) + var(--space-10)); }
  .hero__breadcrumb { position: static; margin-bottom: var(--space-4); }
  .problem__bento { grid-template-columns: 1fr 1fr; }
  .hero__trust { gap: var(--space-4); justify-content: center; }
  .proof__grid { grid-template-columns: 1fr; }
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
<section class="hero hero--service" aria-label="Land Clearing in Damascus, OR">
  <nav class="hero__breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/services/">Services</a>
    <span class="breadcrumb-sep">/</span>
    <span>Land Clearing</span>
  </nav>
  <div class="container">
    <span class="hero__eyebrow"><i data-lucide="tree-pine"></i> Land Clearing</span>
    <h1><span class="text-accent">Land Clearing</span> in Damascus, OR &amp; Portland Metro</h1>
    <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon contractor based in Damascus, clearing residential and commercial lots across the Portland Metro Area since <?php echo $yearEstablished; ?>. We remove trees, stumps, brush, and debris, then grade your property to a build-ready finish — typically within 1 to 5 days.</p>
    <div class="hero__ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <a href="#breakdown" class="btn btn-outline-white btn-lg">See What's Included</a>
    </div>
    <div class="hero__trust">
      <span class="hero__trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero__trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years in Business</span>
      <span class="hero__trust-item"><i data-lucide="star"></i> 5.0 Google Rating</span>
      <span class="hero__trust-item"><i data-lucide="truck"></i> Own Equipment — No Subs</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="problem-section" aria-label="Signs you need land clearing">
  <div class="float-circle float-circle--1"></div>
  <div class="float-circle float-circle--2"></div>
  <div class="container">
    <p class="problem__pull-quote reveal-up">An overgrown lot doesn't just delay your build — it <span class="text-accent">hides problems</span> that get more expensive the longer they sit.</p>

    <div class="problem__bento">
      <article class="problem__card card-tint-1 reveal-up reveal-delay-1">
        <div class="problem__card-icon"><i data-lucide="tree-pine"></i></div>
        <h3>Overgrown Vegetation</h3>
        <p>Blackberry thickets, invasive ivy, and dense brush conceal drainage issues, old foundations, and property-line disputes that surface mid-project.</p>
      </article>
      <article class="problem__card card-tint-2 reveal-up reveal-delay-2">
        <div class="problem__card-icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Hazardous Dead Trees</h3>
        <p>Standing dead conifers near Damascus homes shed limbs during ice storms and east wind events. One downed Doug fir across a power line costs $5,000+ in emergency response.</p>
      </article>
      <article class="problem__card card-tint-3 reveal-up reveal-delay-3">
        <div class="problem__card-icon"><i data-lucide="construction"></i></div>
        <h3>Stalled Development</h3>
        <p>Builders won't start foundation work on an uncleared lot. Every week your property sits undeveloped, permitting timelines slip and material costs creep up.</p>
      </article>
      <article class="problem__card card-tint-1 reveal-up reveal-delay-4">
        <div class="problem__card-icon"><i data-lucide="droplets"></i></div>
        <h3>Drainage &amp; Erosion Risk</h3>
        <p>Unmanaged root systems channel water toward structures. In the rain-heavy Willamette Valley, poor surface drainage leads to foundation failures and flooded crawl spaces.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="expert-section" aria-label="Why choose Workhorse for land clearing">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,48 C480,0 960,0 1440,48 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="expert__grid">
      <div class="expert__stat-block reveal-up">
        <div class="expert__stat-number" data-target="<?php echo $yearsInBusiness; ?>"><?php echo $yearsInBusiness; ?>+</div>
        <div class="expert__stat-label">Years Clearing Land in Oregon</div>
        <div style="margin-top:var(--space-6)">
          <img src="<?php echo htmlspecialchars($photos['body1']); ?>" alt="Workhorse excavator clearing a wooded lot in Damascus, OR" width="600" height="400" loading="lazy" style="border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);">
        </div>
      </div>
      <div class="expert__content reveal-up reveal-delay-1">
        <h2>Why do Damascus property owners <span class="text-accent">choose Workhorse</span> for land clearing?</h2>
        <p class="answer-block">Because we own every machine on the job — tracked excavators, mulchers, stump grinders, dump trucks — and run our own crews. No subcontractors means faster scheduling, consistent workmanship, and a single point of accountability from the first tree felled to the final grade check.</p>
        <div class="expert__diffs">
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="truck"></i></div>
            <div>
              <h4>Owner-Operated Equipment</h4>
              <p>Our fleet includes CAT excavators and Fecon mulching heads. We don't rent — we deploy. That cuts mobilization time in half compared to rental-dependent crews.</p>
            </div>
          </div>
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h4>Damascus-Based, Metro-Wide</h4>
              <p>Based in the 97089 zip code. We serve Gresham, Happy Valley, Sandy, Boring, and Clackamas County with same-week availability on most residential lots.</p>
            </div>
          </div>
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="shield-check"></i></div>
            <div>
              <h4>Permit-Aware Process</h4>
              <p>We know Clackamas County's grading permits, tree ordinances, and wetland buffers. We flag permit requirements during your free estimate so nothing stalls your project.</p>
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
<section class="breakdown-section" id="breakdown" aria-label="What's included in land clearing">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-dark)">
      <path d="M0,0 L1440,0 L1440,48 Q720,0 0,48 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="breakdown__grid">
      <div class="breakdown__list reveal-up">
        <h2>What's <span class="text-accent">included</span> in our land clearing service?</h2>
        <p class="answer-block">Every land clearing project includes tree felling, stump removal, brush and debris hauling, rock extraction, surface grading, and erosion-control measures. We leave your lot compacted and level — ready for foundation work, driveways, or landscaping without additional site prep.</p>

        <div class="breakdown__items">
          <div class="breakdown__item reveal-left reveal-delay-1">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Tree felling and limb removal (any diameter)</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-2">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Stump grinding 6-12 inches below grade</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-3">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Brush, blackberry, and invasive species removal</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-1">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Rock and boulder extraction</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-2">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Debris hauling to licensed facilities</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-3">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Rough grading and surface compaction</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-1">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Erosion control (silt fence / straw wattles)</span>
          </div>
          <div class="breakdown__item reveal-left reveal-delay-2">
            <div class="breakdown__item-check"><i data-lucide="check"></i></div>
            <span>Timber recycling and chip salvage</span>
          </div>
        </div>
      </div>

      <div class="breakdown__timeline reveal-up reveal-delay-2">
        <h3>How Our Process Works</h3>
        <div class="timeline">
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>1. Free Site Walk</h4>
            <p>We visit your property, mark boundaries, identify protected trees, and assess access points. You get a written quote within 24 hours.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>2. Permit Coordination</h4>
            <p>If Clackamas County requires grading or tree-removal permits, we handle the application and keep your project on schedule.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>3. Equipment Mobilization</h4>
            <p>Tracked excavators, mulchers, and dump trucks arrive on-site. We stage equipment to minimize impact on neighboring properties.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>4. Clearing &amp; Grinding</h4>
            <p>Trees come down directionally. Stumps are ground below grade. Brush runs through the mulcher. Debris loads into our trucks.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>5. Grading &amp; Cleanup</h4>
            <p>Final grading levels the lot. Erosion controls go in. We sweep access roads and leave your property build-ready.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="proof-section" aria-label="Customer reviews for land clearing">
  <div class="container">
    <div class="section-title reveal-up">
      <h2>What do <span class="text-accent">customers say</span> about our land clearing work?</h2>
      <p class="answer-block">Property owners across the Damascus area trust Workhorse to clear their land on time, on budget, and without damage to surrounding structures or retained trees. Here's what they report.</p>
    </div>

    <div class="proof__grid">
      <article class="proof__card card-tint-1 reveal-up reveal-delay-1">
        <p class="proof__quote">"We had a half-acre lot covered in 40-year-old blackberry and dead alders. Workhorse cleared it in two days and left the grade so clean our builder started footings the next week. No other company even returned our call that fast."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Jason R.</span>
            <span class="proof__location">Damascus, OR — Residential Lot Clearing</span>
          </div>
        </div>
      </article>
      <article class="proof__card card-tint-2 reveal-up reveal-delay-2">
        <p class="proof__quote">"They handled the county permits for us, cleared 15 mature Doug firs, and ground every stump below grade. The grading was level enough for our concrete crew to pour without any additional site work. Genuinely impressed."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Michelle T.</span>
            <span class="proof__location">Happy Valley, OR — New Construction Prep</span>
          </div>
        </div>
      </article>
      <article class="proof__card card-tint-3 reveal-up reveal-delay-3">
        <p class="proof__quote">"Needed selective clearing on a sloped lot near Sandy — keep the big cedars, remove everything else. Workhorse threaded excavators through tight access and didn't touch a single tree we wanted saved. Price was exactly what they quoted."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">David K.</span>
            <span class="proof__location">Sandy, OR — Selective Lot Clearing</span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON
     ═══════════════════════════════════════════════════════ -->
<section class="compare-section" aria-label="Workhorse vs other land clearing contractors">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,48 C360,16 1080,16 1440,48 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <h2>How does Workhorse <span class="text-accent">compare</span> to other clearing contractors?</h2>
      <p class="answer-block">Most clearing crews in the Portland Metro Area rent equipment project-by-project. We own ours. That difference shows up in pricing, scheduling, and the finished grade you're left with.</p>
    </div>
    <div class="compare__table reveal-up reveal-delay-1">
      <div class="compare__col compare__col--other">
        <div class="compare__col-title">Other Contractors</div>
        <div class="compare__point"><i data-lucide="x"></i><span>Rent equipment per job — longer mobilization</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Subcontract stump grinding separately</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Leave debris piles for you to handle</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>No permit knowledge — delays mid-project</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Rough-cut surface requires additional grading</span></div>
      </div>
      <div class="compare__col compare__col--us">
        <div class="compare__col-title">Workhorse Site Solutions</div>
        <div class="compare__point"><i data-lucide="check"></i><span>Owner-operated fleet deploys same week</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Stump grinding included in every bid</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Full debris haul-off and recycling included</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Clackamas County permit coordination built in</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Finish-graded surface ready for construction</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="faq-section" aria-label="Land clearing frequently asked questions">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-dark)">
      <path d="M0,0 L1440,0 L1440,48 C960,16 480,16 0,48 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <h2>What do Damascus property owners ask about <span class="text-accent">land clearing</span>?</h2>
      <p class="answer-block">Straight answers from our crew — no jargon, no runaround. If your question isn't here, call us or request a free estimate and we'll walk through it in person.</p>
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
<section class="final-cta" aria-label="Request a land clearing estimate">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-bg-alt)">
      <path d="M0,48 C480,0 960,0 1440,48 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <h2>Ready to <span class="text-accent">clear your lot</span> and start building?</h2>
    <p class="answer-block">Every clearing project begins with a free on-site walk. We measure, mark, and quote — usually within 24 hours. No pressure, no obligation. Just a clear scope and honest price from a Damascus-based crew that owns every machine on the job.</p>
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
      $related = getRelatedServices('land-clearing', 3);
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
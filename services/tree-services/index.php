<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('tree-services');
$pageTitle       = 'Tree Removal & Trimming Damascus, OR | ' . $siteName;
$pageDescription = 'Professional tree removal, trimming, and stump grinding in Damascus, OR. Workhorse Site Solutions handles hazardous trees, lot clearing, and emergency storm damage across the Portland Metro Area. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/tree-services/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396318170-psrogl-481705784_605960762427911_845944733817866550_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '7';

/* ── Page Photos ────────────────────────────────────────────── */
$photos = [
    'hero'  => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396318170-psrogl-481705784_605960762427911_845944733817866550_n.jpg',
    'body1' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396497349-2dn37x-482022810_604444699246184_1773549380605693853_n.jpg',
    'body2' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396502364-ltrx2b-482023061_604897422534245_7415809128781428540_n.jpg',
    'body3' => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396507580-zwl8bx-482026924_606595582364429_7705477222852745276_n.jpg',
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
        'question' => 'How much does tree removal cost in Damascus, OR?',
        'answer'   => 'Tree removal in Damascus typically costs $500 to $3,500 per tree depending on height, trunk diameter, proximity to structures, and access. A 60-foot Doug fir near a house costs more than a 30-foot alder in an open yard. We provide free written estimates with per-tree pricing before any work begins.',
    ],
    [
        'question' => 'Do I need a permit to remove trees in Clackamas County?',
        'answer'   => 'In unincorporated Clackamas County and the Damascus urban growth boundary, tree removal permits are required for trees over 6 inches in diameter at breast height (DBH) on lots smaller than 2 acres. We check permit requirements during every estimate and handle the application if one is needed.',
    ],
    [
        'question' => 'Can you remove trees near power lines or buildings?',
        'answer'   => 'Yes. We handle trees within fall distance of structures, power lines, fences, and driveways daily across the Metro Area. We use directional felling, rigging, and sectional removal techniques to drop each piece exactly where planned — no guesswork, no roof damage.',
    ],
    [
        'question' => 'What happens to the wood and debris after removal?',
        'answer'   => 'Trunk sections are bucked into manageable rounds — you can keep firewood-length pieces if you want them. Limbs run through our chipper. Chips are available for landscaping or hauled off-site. Stumps are ground below grade. Nothing stays on your property unless you request it.',
    ],
    [
        'question' => 'How long does tree removal take?',
        'answer'   => 'A single tree takes 2 to 6 hours depending on size and access. Multi-tree removal projects on residential lots usually complete in 1 to 2 days. We schedule within 1 to 2 weeks of your estimate — same-week availability for hazard trees and storm damage.',
    ],
    [
        'question' => 'Do you offer stump grinding with tree removal?',
        'answer'   => 'Stump grinding is included in every removal bid. We grind 6 to 12 inches below grade and backfill with the grindings. If you need the stump area completely excavated for construction or a new planting, we can dig and haul the root ball for an additional fee.',
    ],
    [
        'question' => 'What tree species do you handle most in the Damascus area?',
        'answer'   => 'Douglas fir, Western red cedar, big-leaf maple, red alder, and Oregon white oak are the most common species we remove or trim in Damascus, Boring, and the Sandy corridor. Each species has different weight, grain, and fall characteristics — our crews know how each one behaves under tension and lean.',
    ],
    [
        'question' => 'Do you provide emergency storm damage tree removal?',
        'answer'   => 'Yes. East wind events and ice storms regularly topple trees across roads, power lines, and roofs in the Damascus foothills. We offer priority scheduling for storm damage — typically on-site within 24 hours of your call. Debris removal and temporary tarping are included.',
    ],
];

/* ── Schema Markup ───────────────────────────────────────── */
$breadcrumbs = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Tree Services', 'url' => '/services/tree-services/'],
];
$schemaMarkup  = generateServiceSchema($service);
$schemaMarkup .= generateFAQSchema($faqs);
$schemaMarkup .= generateBreadcrumbSchema($breadcrumbs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     TREE SERVICES — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Tree Services Page ─────────────────────────────────────
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
  background-position: center 35%;
  overflow: hidden;
}
.hero--service::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(165deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, rgba(77,94,111,0.35) 100%);
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
  background: var(--color-bg-alt);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.problem-section .float-orb {
  position: absolute;
  border-radius: 50%;
  opacity: 0.05;
  z-index: 0;
}
.problem-section .float-orb--1 {
  width: 280px; height: 280px;
  background: var(--color-secondary);
  top: -60px; left: -80px;
  animation: orbDrift 14s ease-in-out infinite;
}
.problem-section .float-orb--2 {
  width: 350px; height: 350px;
  background: var(--color-accent);
  bottom: -100px; right: -100px;
  animation: orbDrift 18s ease-in-out infinite reverse;
}
.problem__pull-quote {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  font-weight: 700;
  line-height: 1.3;
  color: var(--color-primary);
  max-width: 780px;
  margin: 0 auto var(--space-10);
  text-align: center;
  text-wrap: balance;
  position: relative;
  z-index: 1;
}
.problem__pull-quote .text-accent { color: var(--color-accent); }
.problem__cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
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
.problem__card:hover { transform: translateY(-3px); box-shadow: var(--shadow-lg); }
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
  background: var(--color-bg);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
.expert__layout {
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: var(--space-10);
  align-items: center;
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
.expert__stats-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-4);
  margin-bottom: var(--space-6);
}
.expert__stat {
  text-align: center;
  padding: var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-bg-alt);
}
.expert__stat-num {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1.1;
}
.expert__stat-lbl {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
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
.expert__image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  position: relative;
}
.expert__image img { width: 100%; height: 100%; object-fit: cover; display: block; aspect-ratio: 4/5; }
.expert__image::after {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(227,70,2,0.15);
  border-radius: var(--radius-lg);
  pointer-events: none;
}

/* ── 4. SERVICE BREAKDOWN ─────────────────────────────────── */
.breakdown-section {
  position: relative;
  background: var(--color-dark);
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
.breakdown__header {
  text-align: center;
  margin-bottom: var(--space-10);
}
.breakdown__header h2 {
  font-family: var(--font-heading);
  font-size: var(--fs-h2);
  font-weight: 800;
  color: var(--color-white);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.breakdown__header h2 .text-accent { color: var(--color-accent); }
.breakdown__header .answer-block {
  color: rgba(255,255,255,0.8);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 650px;
  margin: 0 auto;
}
.breakdown__split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-10);
  align-items: start;
}
.breakdown__list {
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
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.06);
  transition: transform var(--transition-fast), background var(--transition-fast);
}
.breakdown__item:hover {
  transform: translateX(4px);
  background: rgba(255,255,255,0.07);
}
.breakdown__item-check {
  width: 28px; height: 28px; min-width: 28px;
  border-radius: 50%;
  background: rgba(227,70,2,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.breakdown__item-check i, .breakdown__item-check svg { width: 16px; height: 16px; }
.breakdown__item span { font-weight: 600; color: rgba(255,255,255,0.9); }
.breakdown__timeline h3 {
  font-family: var(--font-heading);
  font-size: var(--fs-h3);
  font-weight: 700;
  color: var(--color-white);
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
  border: 3px solid var(--color-dark);
  z-index: 1;
}
.timeline__step h4 { font-weight: 700; color: var(--color-white); margin-bottom: var(--space-1); }
.timeline__step p { color: rgba(255,255,255,0.65); font-size: var(--font-size-base); line-height: 1.6; }

/* ── 5. PROOF / REVIEWS ───────────────────────────────────── */
.proof-section {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) var(--space-4);
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
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.proof-section .section-title h2 .text-accent { color: var(--color-accent); }
.proof-section .section-title .answer-block {
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
  top: var(--space-3); left: var(--space-4);
  line-height: 1;
}
.proof__quote {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  margin-bottom: var(--space-4);
  font-style: italic;
  position: relative; z-index: 1;
}
.proof__author { display: flex; align-items: center; gap: var(--space-2); }
.proof__stars { color: var(--color-star); display: flex; gap: 2px; }
.proof__stars i, .proof__stars svg { width: 14px; height: 14px; }
.proof__name { font-weight: 700; color: var(--color-primary); font-size: var(--font-size-sm); }
.proof__location { font-size: var(--font-size-xs); color: var(--color-text-light); }

/* ── 6. COMPARISON TABLE ──────────────────────────────────── */
.compare-section {
  position: relative;
  background: var(--color-bg);
  padding: var(--space-16) var(--space-4);
  overflow: hidden;
}
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
  background: var(--color-dark);
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
  color: var(--color-white);
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.faq-section .section-title h2 .text-accent { color: var(--color-accent); }
.faq-section .section-title .answer-block {
  max-width: 600px;
  margin: 0 auto;
  color: rgba(255,255,255,0.7);
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
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-md);
  overflow: hidden;
  transition: box-shadow var(--transition-fast);
}
.faq-item:hover { box-shadow: 0 4px 20px rgba(227,70,2,0.08); }
.faq-item summary {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: var(--space-4) var(--space-5);
  cursor: pointer;
  font-weight: 700;
  font-size: var(--font-size-base);
  color: var(--color-white);
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
  color: rgba(255,255,255,0.75);
  line-height: 1.7;
  font-size: var(--font-size-base);
}

/* ── 8. FINAL CTA ─────────────────────────────────────────── */
.final-cta {
  position: relative;
  background: var(--color-bg);
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
  color: var(--color-primary);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.final-cta h2 .text-accent { color: var(--color-accent); }
.final-cta .answer-block {
  color: var(--color-text-light);
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
@keyframes orbDrift {
  0%, 100% { transform: translate(0, 0) scale(1); }
  50% { transform: translate(12px, -16px) scale(1.04); }
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1024px) {
  .expert__layout { grid-template-columns: 1fr; }
  .expert__image { max-width: 500px; margin: 0 auto; }
  .breakdown__split { grid-template-columns: 1fr; }
  .compare__table { grid-template-columns: 1fr; }
  .proof__grid { grid-template-columns: 1fr; }
  .expert__stats-row { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 768px) {
  .hero--service { min-height: 55vh; align-items: center; padding-top: calc(var(--nav-height) + var(--space-10)); }
  .hero__breadcrumb { position: static; margin-bottom: var(--space-4); }
  .problem__cards { grid-template-columns: 1fr; }
  .hero__trust { gap: var(--space-4); justify-content: center; }
  .expert__stats-row { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .hero__ctas { flex-direction: column; }
  .hero__ctas .btn { width: 100%; text-align: center; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--service" aria-label="Tree services in Damascus, OR">
  <nav class="hero__breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/services/">Services</a>
    <span class="breadcrumb-sep">/</span>
    <span>Tree Services</span>
  </nav>
  <div class="container">
    <span class="hero__eyebrow"><i data-lucide="axe"></i> Tree Services</span>
    <h1><span class="text-accent">Tree Removal</span> &amp; Trimming in Damascus, OR</h1>
    <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon contractor based in Damascus, handling tree removal, trimming, and stump grinding across the Portland Metro Area since <?php echo $yearEstablished; ?>. We fell hazardous trees, clear timber for development, and respond to storm damage — typically on-site within 24 to 48 hours of your call.</p>
    <div class="hero__ctas">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <a href="#breakdown" class="btn btn-outline-white btn-lg">See What's Included</a>
    </div>
    <div class="hero__trust">
      <span class="hero__trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero__trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero__trust-item"><i data-lucide="star"></i> 5.0 Google Rating</span>
      <span class="hero__trust-item"><i data-lucide="zap"></i> Storm Damage Response</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="problem-section" aria-label="Signs you need tree services">
  <div class="float-orb float-orb--1"></div>
  <div class="float-orb float-orb--2"></div>
  <div class="container">
    <p class="problem__pull-quote reveal-up">A leaning tree doesn't fix itself. Every storm season it leans a little more — until it <span class="text-accent">lands on something expensive</span>.</p>

    <div class="problem__cards">
      <article class="problem__card card-tint-1 reveal-up reveal-delay-1">
        <div class="problem__card-icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Hazardous Lean or Root Lift</h3>
        <p>Mature Doug firs and big-leaf maples develop root heave during saturated winter soil. Visible lean over 15 degrees means the root plate is failing — and it accelerates with each east wind event.</p>
      </article>
      <article class="problem__card card-tint-2 reveal-up reveal-delay-2">
        <div class="problem__card-icon"><i data-lucide="cloud-lightning"></i></div>
        <h3>Storm Damage Blocking Access</h3>
        <p>Ice storms in the Boring and Sandy corridor drop limbs across driveways, power lines, and roofs. A downed tree blocking your driveway costs more in lost time than a prompt removal call.</p>
      </article>
      <article class="problem__card card-tint-3 reveal-up reveal-delay-3">
        <div class="problem__card-icon"><i data-lucide="home"></i></div>
        <h3>Canopy Crowding Structures</h3>
        <p>Branches scraping roofing, gutters packed with needles, and root systems lifting foundation slabs — these issues compound every year and get more expensive to resolve the longer they sit.</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="expert-section" aria-label="Why choose Workhorse for tree services">
  <div class="container">
    <div class="expert__layout">
      <div class="expert__content reveal-up">
        <h2>Why do Portland Metro homeowners <span class="text-accent">hire Workhorse</span> for tree work?</h2>
        <p class="answer-block">Because we bring excavation-grade equipment to every tree job. Where most tree crews work with rope and a stump grinder, we deploy tracked excavators, grapple trucks, and chippers — removing entire trees faster, safer, and with less yard damage than hand-felling alone.</p>
        <div class="expert__stats-row reveal-up reveal-delay-1">
          <div class="expert__stat">
            <div class="expert__stat-num"><?php echo $yearsInBusiness; ?>+</div>
            <div class="expert__stat-lbl">Years Operating</div>
          </div>
          <div class="expert__stat">
            <div class="expert__stat-num">24hr</div>
            <div class="expert__stat-lbl">Storm Response</div>
          </div>
          <div class="expert__stat">
            <div class="expert__stat-num">5.0</div>
            <div class="expert__stat-lbl">Google Rating</div>
          </div>
        </div>
        <div class="expert__diffs">
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="truck"></i></div>
            <div>
              <h4>Heavy Equipment Advantage</h4>
              <p>CAT excavators with grapple attachments lift entire trunk sections instead of hand-cutting piece by piece. Faster removal, less risk, lower labor cost passed on to you.</p>
            </div>
          </div>
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h4>Local to Damascus</h4>
              <p>Based in the 97089 zip code. We know the soil types, the wind patterns off the Gorge, and which neighborhoods have the most storm-prone canopy. Gresham, Happy Valley, Sandy, Boring, and Clackamas are all in our regular service radius.</p>
            </div>
          </div>
          <div class="expert__diff">
            <div class="expert__diff-icon"><i data-lucide="recycle"></i></div>
            <div>
              <h4>Full Cleanup Included</h4>
              <p>Chips, logs, stumps — everything leaves your property. We recycle usable timber through local mills and offer free firewood rounds to homeowners who want them.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="expert__image reveal-right reveal-delay-2">
        <img src="<?php echo htmlspecialchars($photos['body1']); ?>" alt="Workhorse crew removing a large tree from a Damascus property" width="600" height="750" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="breakdown-section" id="breakdown" aria-label="What's included in tree services">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,48 Q720,0 1440,48 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="breakdown__header reveal-up">
      <h2>What tree services does <span class="text-accent">Workhorse</span> provide?</h2>
      <p class="answer-block">We handle every phase of tree work — from selective pruning and canopy reduction to full removal, stump grinding, and debris haul-off. Every bid includes cleanup. No surprise charges, no return trips at extra cost.</p>
    </div>

    <div class="breakdown__split">
      <div class="breakdown__list reveal-up">
        <div class="breakdown__item reveal-left reveal-delay-1">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Full tree removal (any species, any diameter)</span>
        </div>
        <div class="breakdown__item reveal-left reveal-delay-2">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Hazardous and leaning tree assessment</span>
        </div>
        <div class="breakdown__item reveal-left reveal-delay-3">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Crown reduction and canopy thinning</span>
        </div>
        <div class="breakdown__item reveal-left reveal-delay-1">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Deadwood pruning and limb removal</span>
        </div>
        <div class="breakdown__item reveal-left reveal-delay-2">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Stump grinding 6-12 inches below grade</span>
        </div>
        <div class="breakdown__item reveal-left reveal-delay-3">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Emergency storm damage removal</span>
        </div>
        <div class="breakdown__item reveal-left reveal-delay-1">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Sectional removal near structures and lines</span>
        </div>
        <div class="breakdown__item reveal-left reveal-delay-2">
          <div class="breakdown__item-check"><i data-lucide="check"></i></div>
          <span>Debris chipping, hauling, and recycling</span>
        </div>
      </div>

      <div class="breakdown__timeline reveal-up reveal-delay-2">
        <h3>How Our Process Works</h3>
        <div class="timeline">
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>1. On-Site Assessment</h4>
            <p>We walk your property, assess lean, root condition, proximity to structures, and access points. Written quote delivered within 24 hours.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>2. Permit Check</h4>
            <p>If the tree is protected or the lot is in the Damascus urban growth boundary, we handle the permit application and county coordination.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>3. Prep &amp; Protection</h4>
            <p>Drop zone cleared. Structures, landscaping, and utilities protected. Equipment staged for efficient removal with minimal yard impact.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>4. Felling or Sectional Removal</h4>
            <p>Open-yard trees are directionally felled. Tight-access trees are sectioned from the top down. Excavator lifts trunk sections out.</p>
          </div>
          <div class="timeline__step">
            <div class="timeline__dot"></div>
            <h4>5. Grind, Chip &amp; Clean</h4>
            <p>Stumps ground below grade. Limbs and debris run through the chipper. Yard raked and blown clean. You're left with a finished result, not a mess.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="proof-section" aria-label="Customer reviews for tree services">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-dark)">
      <path d="M0,0 L1440,0 L1440,48 C960,16 480,16 0,48 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <h2>What do <span class="text-accent">homeowners say</span> about our tree work?</h2>
      <p class="answer-block">Real feedback from customers across Damascus, Gresham, Happy Valley, and Sandy. We don't cherry-pick — these reflect the consistent experience our tree service clients report.</p>
    </div>

    <div class="proof__grid">
      <article class="proof__card card-tint-1 reveal-up reveal-delay-1">
        <p class="proof__quote">"Had three huge Doug firs leaning toward our house after a wind storm. Workhorse was out the next morning, sectioned all three without touching the roof, and ground the stumps by afternoon. Yard looked better than before the trees were a problem."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Brian M.</span>
            <span class="proof__location">Damascus, OR — Hazardous Tree Removal</span>
          </div>
        </div>
      </article>
      <article class="proof__card card-tint-2 reveal-up reveal-delay-2">
        <p class="proof__quote">"We called five companies for a large cedar near our power line. Workhorse was the only one who came out the same day to assess it. The quote was fair, they pulled the permit, and the tree was down within a week. Stump grinding included — no extra bill."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Tanya W.</span>
            <span class="proof__location">Happy Valley, OR — Cedar Removal Near Power Line</span>
          </div>
        </div>
      </article>
      <article class="proof__card card-tint-3 reveal-up reveal-delay-3">
        <p class="proof__quote">"Needed 8 trees taken down on a steep slope in Boring for a new build. Their excavator handled the grade like it was flat ground. Every stump was ground, chips hauled, and the lot was graded smooth for our foundation crew. Absolutely professional."</p>
        <div class="proof__author">
          <div>
            <div class="proof__stars">
              <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
            </div>
            <span class="proof__name">Carlos P.</span>
            <span class="proof__location">Boring, OR — Multi-Tree Removal for Construction</span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON
     ═══════════════════════════════════════════════════════ -->
<section class="compare-section" aria-label="Workhorse vs other tree service companies">
  <div class="container">
    <div class="section-title reveal-up">
      <h2>How does Workhorse <span class="text-accent">stack up</span> against other tree services?</h2>
      <p class="answer-block">Most tree companies in the Portland Metro Area are rope-and-chainsaw crews. We combine arborist-level technique with excavation-grade equipment — that changes what's possible on your property.</p>
    </div>
    <div class="compare__table reveal-up reveal-delay-1">
      <div class="compare__col compare__col--other">
        <div class="compare__col-title">Typical Tree Companies</div>
        <div class="compare__point"><i data-lucide="x"></i><span>Hand-fell only — limited by access and lean</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Stump grinding billed as separate job</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>Debris left in piles for homeowner</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>1-3 week wait for non-emergency work</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>No permit knowledge — you figure it out</span></div>
        <div class="compare__point"><i data-lucide="x"></i><span>No grading or site work capability</span></div>
      </div>
      <div class="compare__col compare__col--us">
        <div class="compare__col-title">Workhorse Site Solutions</div>
        <div class="compare__point"><i data-lucide="check"></i><span>Excavator lift + directional felling combined</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Stump grinding included in every bid</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Full cleanup — chips, logs, debris hauled</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Same-week scheduling, 24hr storm response</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Clackamas County permit coordination</span></div>
        <div class="compare__point"><i data-lucide="check"></i><span>Land clearing and grading in one contract</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="faq-section" aria-label="Tree services frequently asked questions">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,48 C360,16 1080,16 1440,48 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title reveal-up">
      <h2>What do homeowners ask about <span class="text-accent">tree services</span> near Damascus?</h2>
      <p class="answer-block">Straight answers from our crew. If your question isn't covered here, call us or request a free estimate and we'll walk through it on-site.</p>
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
<section class="final-cta" aria-label="Request a tree service estimate">
  <div class="divider-top">
    <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-dark)">
      <path d="M0,0 L1440,0 L1440,48 Q720,0 0,48 Z"/>
    </svg>
  </div>
  <div class="container">
    <h2>Need a tree <span class="text-accent">removed or trimmed</span> in Damascus?</h2>
    <p class="answer-block">Every tree job begins with a free on-site assessment. We measure, quote, and schedule — usually within 48 hours. Storm damage gets priority. No pressure, no obligation, just a clear scope from a crew that owns every piece of equipment on the job.</p>
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
      $related = getRelatedServices('tree-services', 3);
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
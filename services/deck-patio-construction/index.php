<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service      = getServiceBySlug('deck-patio-construction');
$currentPage  = 'services';
$pageTitle    = 'Deck & Patio Construction in Damascus, OR | ' . $siteName;
$pageDescription = 'Custom deck and patio construction for Damascus, OR homes. Covered patios, composite decks, pergolas, and outdoor living spaces. Licensed, bonded, insured. Free estimates from Workhorse Site Solutions.';
$canonicalUrl = $siteUrl . '/services/deck-patio-construction/';
$cssVersion      = '6';

$heroImage    = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396350225-vjqwww-481782847_604444459246208_4830443631052873384_n.jpg';
$bodyImage1   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396586930-1poydj-482217249_604902059200448_385938872536582839_n.jpg';
$bodyImage2   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396591545-wccdq3-482221184_604897052534282_835431890404334834_n.jpg';
$bodyImage3   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396600057-08e3ap-482223922_608071052216882_5799788544410171645_n.jpg';

$heroImagePreload = $heroImage;
$ogImage = $heroImage;

/* ── Service Card Maps (for Related Services) ─────────────── */
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
    'junk-removal-cleanouts' => 'trash-2', 'excavation-services' => 'hard-hat',
    'demolition' => 'hammer', 'land-clearing' => 'tree-pine',
    'tree-services' => 'axe', 'site-preparation-grading' => 'ruler',
    'trenching' => 'shovel', 'fence-installation' => 'fence',
    'deck-patio-construction' => 'home', 'driveway-services' => 'truck',
    'general-contracting' => 'wrench', 'commercial-residential-cleanup' => 'sparkles',
];

/* ── FAQ Data ─────────────────────────────────────────────── */
$faqs = [
    [
        'question' => 'How much does deck or patio construction cost in Damascus, OR?',
        'answer'   => 'A standard pressure-treated wood deck in Damascus costs $35 to $60 per square foot installed. Composite decking runs $50 to $90 per square foot. Covered patios with roofing and posts typically range from $45 to $85 per square foot. A 300-square-foot deck project averages $12,000 to $22,000 depending on material, height, and features like railings and stairs.'
    ],
    [
        'question' => 'Do I need a permit to build a deck in Clackamas County?',
        'answer'   => 'Yes. Clackamas County requires a building permit for any deck over 30 inches above grade and for all covered structures that attach to the house. The permit process includes plan review, footing inspection, framing inspection, and final inspection. We handle the full permit application, plan submission, and inspection scheduling as part of our service.'
    ],
    [
        'question' => 'What is the difference between composite and wood decking?',
        'answer'   => 'Pressure-treated wood costs less upfront ($3-5 per board foot) but requires annual staining and sealing to prevent rot in Oregon rain. Composite decking costs more ($6-12 per board foot) but needs no staining, resists mold and moisture, and typically carries a 25-year manufacturer warranty. We install both and help you choose based on budget, maintenance preference, and aesthetic goals.'
    ],
    [
        'question' => 'How long does deck construction take?',
        'answer'   => 'Most residential deck projects in the Damascus area take 5 to 10 working days from footing excavation to final railing installation. A simple 200-square-foot ground-level deck may finish in 3 to 4 days. Larger elevated decks with covered structures, stairs, and built-in seating take 10 to 14 days. Permit inspections may add 1 to 3 days of hold time between phases.'
    ],
    [
        'question' => 'Can you build a covered patio or pergola in Damascus?',
        'answer'   => 'Absolutely. Covered patios are one of our most requested projects in the Damascus area because Oregon homeowners want usable outdoor space year-round. We build solid-roof covered patios with aluminum or shingle roofing, open-beam pergolas, and hybrid designs with partial coverage. All covered structures include proper drainage, post footings to code, and ledger board flashing.'
    ],
    [
        'question' => 'Will you handle site prep and grading for the deck area?',
        'answer'   => 'Yes — and this is where our site work background gives us an edge. We excavate for footings, grade the ground beneath the deck for drainage, remove stumps or debris in the build area, and install weed barrier fabric. Most deck-only contractors subcontract the site prep. We do it with our own equipment on the same crew schedule.'
    ],
    [
        'question' => 'What type of footings do you use for decks?',
        'answer'   => 'We pour concrete footings to a minimum of 18 inches below grade per Oregon frost line requirements. For elevated decks, we use 12-inch diameter Sonotube forms with post brackets cast into the concrete. Every footing is inspected by Clackamas County before framing begins. This meets Oregon Residential Specialty Code requirements for structural deck support.'
    ],
    [
        'question' => 'Can you remove my old deck before building the new one?',
        'answer'   => 'Yes. We handle full demolition of existing decks including concrete footing removal, ledger board detachment, and debris haul-off. Old deck removal is quoted as a separate line item so you see the exact cost. Most tear-out projects take 1 to 2 days depending on deck size and whether the structure is elevated.'
    ],
];

/* ── Schema Markup ───────────────────────────────────────── */
$schemaService    = generateServiceSchema($service);
$schemaFAQ        = generateFAQSchema($faqs);
$schemaBreadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Deck & Patio Construction', 'url' => '/services/deck-patio-construction/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaService; ?>
<?php echo $schemaFAQ; ?>
<?php echo $schemaBreadcrumb; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     DECK & PATIO CONSTRUCTION SERVICE PAGE — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── 1. HERO ────────────────────────────────────────────── */
.hero--deck {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($heroImage); ?>');
  background-size: cover;
  background-position: center 45%;
  overflow: hidden;
}
.hero--deck::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(165deg, rgba(0,0,0,0.91) 0%, rgba(0,0,0,0.65) 50%, rgba(77,94,111,0.52) 100%);
  z-index: 1;
}
.hero--deck::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--deck > * { position: relative; z-index: 2; }
.hero--deck .hero-eyebrow {
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
.hero--deck .hero-eyebrow i,
.hero--deck .hero-eyebrow svg { width: 16px; height: 16px; }
.hero--deck h1 {
  color: var(--color-white);
  max-width: 850px;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.hero--deck h1 .text-accent { color: var(--color-accent); }
.hero--deck .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 660px;
  margin: 0 auto var(--space-6);
}
.hero--deck .hero-cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero--deck .hero-trust-row {
  display: flex;
  gap: var(--space-6);
  justify-content: center;
  flex-wrap: wrap;
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255,255,255,0.12);
}
.hero--deck .hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.hero--deck .hero-trust-item i,
.hero--deck .hero-trust-item svg {
  width: 18px; height: 18px;
  color: var(--color-accent);
}
.hero--deck .breadcrumb {
  display: flex;
  gap: var(--space-2);
  justify-content: center;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
  margin-bottom: var(--space-6);
}
.hero--deck .breadcrumb a { color: rgba(255,255,255,0.65); }
.hero--deck .breadcrumb a:hover { color: var(--color-accent); }
.hero--deck .breadcrumb-sep { color: rgba(255,255,255,0.35); }

/* ── Hero SVG Divider ───────────────────────────────────── */
.divider-peak--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  z-index: 3;
}
.divider-peak--bottom svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── 2. PROBLEM STATEMENT ───────────────────────────────── */
.deck-problem {
  position: relative;
  background: var(--color-bg);
  overflow: hidden;
}
.deck-problem .pull-quote {
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 700;
  line-height: 1.35;
  color: var(--color-dark);
  max-width: 720px;
  margin: 0 auto var(--space-10);
  text-wrap: balance;
  position: relative;
  padding: var(--space-6) var(--space-8);
  background: var(--color-card-tint-3);
  border-radius: var(--radius-lg);
  text-align: center;
}
.deck-problem .pull-quote .text-accent { color: var(--color-accent); }
.deck-problem .bento-grid {
  display: grid;
  grid-template-columns: 1.2fr 1fr 1fr;
  grid-template-rows: auto auto;
  gap: var(--space-5);
}
.deck-problem .bento-card--wide {
  grid-column: 1;
  grid-row: 1 / 3;
}
.deck-problem .bento-card {
  padding: var(--space-6) var(--space-5);
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.deck-problem .bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.deck-problem .bento-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.deck-problem .bento-card p {
  color: var(--color-text-light);
  line-height: 1.65;
  font-size: var(--font-size-sm);
}
.deck-problem .bento-card-icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-3);
  background: rgba(227,70,2,0.1);
  color: var(--color-accent);
}
.deck-problem .bento-card-icon i,
.deck-problem .bento-card-icon svg { width: 22px; height: 22px; }

/* Floating accent diamond */
.deck-float-diamond {
  position: absolute;
  width: 200px;
  height: 200px;
  background: var(--color-accent);
  opacity: 0.03;
  right: -50px;
  top: 15%;
  z-index: 0;
  transform: rotate(45deg);
  border-radius: var(--radius-lg);
  animation: float-diamond 16s ease-in-out infinite;
}
@keyframes float-diamond {
  0%, 100% { transform: rotate(45deg) translateY(0); }
  50% { transform: rotate(45deg) translateY(-20px); }
}

/* ── 3. EXPERT POSITIONING ──────────────────────────────── */
.deck-expert {
  background: var(--color-bg-alt);
  position: relative;
  overflow: hidden;
}
.deck-expert .grid-asym {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: var(--space-10);
  align-items: center;
}
.deck-expert .image-showcase {
  border-radius: var(--radius-xl);
  overflow: hidden;
  position: relative;
  box-shadow: var(--shadow-xl);
}
.deck-expert .image-showcase img {
  width: 100%;
  height: auto;
  display: block;
}
.deck-expert .image-showcase .image-badge {
  position: absolute;
  bottom: var(--space-4);
  left: var(--space-4);
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-md);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-sm);
}
.deck-expert .differ-list {
  list-style: none;
  padding: 0;
  margin: var(--space-6) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.deck-expert .differ-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-lg);
  line-height: 1.55;
}
.deck-expert .differ-icon {
  flex-shrink: 0;
  width: 32px;
  height: 32px;
  border-radius: var(--radius-full);
  background: rgba(227,70,2,0.1);
  color: var(--color-accent);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 2px;
}
.deck-expert .differ-icon i,
.deck-expert .differ-icon svg { width: 16px; height: 16px; }
.deck-expert .answer-block {
  max-width: var(--content-width);
  color: var(--color-text-light);
  line-height: 1.7;
}
.deck-expert h2 { text-wrap: balance; }
.deck-expert .stat-row {
  display: flex;
  gap: var(--space-8);
  margin-top: var(--space-8);
}
.deck-expert .stat-item {
  text-align: center;
}
.deck-expert .stat-item .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.deck-expert .stat-item .stat-label {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  font-weight: 600;
  margin-top: var(--space-1);
}

/* ── SVG Dividers ───────────────────────────────────────── */
.divider-wave--top {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave--top svg { display: block; width: 100%; height: auto; }
.divider-wave--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  z-index: 3;
}
.divider-wave--bottom svg { display: block; width: 100%; height: auto; }

/* ── 4. SERVICE BREAKDOWN ───────────────────────────────── */
.deck-breakdown {
  background: var(--color-bg);
  position: relative;
}
.deck-breakdown .split-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-10);
  align-items: start;
}
.deck-breakdown .checklist {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.deck-breakdown .checklist li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-3) var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-card-tint-3);
  font-size: var(--font-size-base);
  line-height: 1.5;
  transition: transform var(--transition-fast);
}
.deck-breakdown .checklist li:hover { transform: translateX(4px); }
.deck-breakdown .checklist-icon {
  flex-shrink: 0;
  color: var(--color-accent);
  margin-top: 2px;
}
.deck-breakdown .checklist-icon i,
.deck-breakdown .checklist-icon svg { width: 18px; height: 18px; }
.deck-breakdown .timeline {
  display: flex;
  flex-direction: column;
  gap: 0;
  position: relative;
  padding-left: var(--space-8);
}
.deck-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 15px;
  top: 0;
  bottom: 0;
  width: 3px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-secondary));
  border-radius: var(--radius-full);
}
.deck-breakdown .timeline-step {
  position: relative;
  padding: var(--space-4) 0;
}
.deck-breakdown .timeline-step::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-8) + 8px);
  top: calc(var(--space-4) + 4px);
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: var(--color-accent);
  border: 3px solid var(--color-bg);
  box-shadow: var(--shadow-sm);
  z-index: 1;
}
.deck-breakdown .timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-dark);
  margin-bottom: var(--space-1);
}
.deck-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.deck-breakdown .answer-block {
  max-width: var(--content-width);
  color: var(--color-text-light);
  line-height: 1.7;
}
.deck-breakdown h2 { text-wrap: balance; }
.deck-breakdown .dual-image-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.deck-breakdown .dual-image-row .img-frame {
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.deck-breakdown .dual-image-row img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* ── 5. PROOF / REVIEWS ─────────────────────────────────── */
.deck-reviews {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.deck-reviews::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, transparent 40%, rgba(227,70,2,0.08) 100%);
}
.deck-reviews > * { position: relative; z-index: 1; }
.deck-reviews h2 {
  color: var(--color-white);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.deck-reviews .answer-block {
  text-align: center;
  max-width: 600px;
  margin: 0 auto var(--space-10);
  color: rgba(255,255,255,0.7);
  line-height: 1.7;
}
.deck-reviews .review-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.deck-review-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.08);
  backdrop-filter: blur(6px);
  transition: transform var(--transition-base);
}
.deck-review-card:hover { transform: translateY(-4px); }
.deck-review-card .stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-3);
  color: var(--color-star);
}
.deck-review-card .stars i,
.deck-review-card .stars svg { width: 18px; height: 18px; }
.deck-review-card blockquote {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-base);
  line-height: 1.7;
  font-style: italic;
  margin-bottom: var(--space-4);
}
.deck-review-card .reviewer {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.5);
  font-weight: 600;
}

/* ── 6. COMPARISON TABLE ────────────────────────────────── */
.deck-compare {
  background: var(--color-bg-alt);
  position: relative;
}
.deck-compare h2 { text-align: center; text-wrap: balance; margin-bottom: var(--space-3); }
.deck-compare .answer-block {
  text-align: center;
  max-width: 600px;
  margin: 0 auto var(--space-10);
  color: var(--color-text-light);
  line-height: 1.7;
}
.deck-compare .compare-table {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  border-collapse: separate;
  border-spacing: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.deck-compare .compare-table thead th {
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-base);
  text-align: left;
}
.deck-compare .compare-table thead th:first-child {
  background: var(--color-gray-light);
  color: var(--color-gray-dark);
}
.deck-compare .compare-table thead th:last-child {
  background: var(--color-accent);
  color: var(--color-white);
}
.deck-compare .compare-table tbody td {
  padding: var(--space-4) var(--space-6);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  vertical-align: top;
  border-bottom: 1px solid var(--color-border);
}
.deck-compare .compare-table tbody tr:last-child td { border-bottom: none; }
.deck-compare .compare-table tbody td:first-child {
  background: var(--color-white);
  color: var(--color-text-light);
}
.deck-compare .compare-table tbody td:last-child {
  background: rgba(227,70,2,0.04);
  color: var(--color-dark);
  font-weight: 500;
}

/* ── 7. FAQ ─────────────────────────────────────────────── */
.deck-faq {
  background: var(--color-bg);
  position: relative;
}
.deck-faq h2 { text-align: center; text-wrap: balance; margin-bottom: var(--space-3); }
.deck-faq .section-subtitle {
  text-align: center;
  color: var(--color-text-light);
  margin-bottom: var(--space-10);
}
.deck-faq .faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.deck-faq .faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-left: 4px solid var(--color-accent);
  transition: box-shadow var(--transition-base);
}
.deck-faq .faq-item:hover { box-shadow: var(--shadow-md); }
.deck-faq .faq-item h3 {
  font-size: var(--fs-h3);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.deck-faq .faq-answer {
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: var(--content-width);
}
.deck-faq .faq-image-col {
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-top: var(--space-10);
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}
.deck-faq .faq-image-col img {
  width: 100%;
  height: auto;
  display: block;
}

/* ── 8. FINAL CTA ───────────────────────────────────────── */
.deck-final-cta {
  background: var(--color-dark);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.deck-final-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 30% 80%, rgba(227,70,2,0.1) 0%, transparent 55%);
}
.deck-final-cta > * { position: relative; z-index: 1; }
.deck-final-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.deck-final-cta .answer-block {
  color: rgba(255,255,255,0.75);
  max-width: 600px;
  margin: 0 auto var(--space-6);
  line-height: 1.7;
}
.deck-final-cta .cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RELATED SERVICES ───────────────────────────────────── */
.deck-related {
  background: var(--color-bg-alt);
}
.deck-related h2 {
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-10);
}

/* ── RESPONSIVE ─────────────────────────────────────────── */
@media (max-width: 1024px) {
  .deck-expert .grid-asym { grid-template-columns: 1fr; }
  .deck-breakdown .split-content { grid-template-columns: 1fr; }
  .deck-problem .bento-grid {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto;
  }
  .deck-problem .bento-card--wide {
    grid-column: 1 / -1;
    grid-row: auto;
  }
}
@media (max-width: 768px) {
  .hero--deck { min-height: 55vh; }
  .deck-problem .bento-grid { grid-template-columns: 1fr; }
  .deck-reviews .review-grid { grid-template-columns: 1fr; }
  .deck-compare .compare-table thead th,
  .deck-compare .compare-table tbody td {
    padding: var(--space-3) var(--space-4);
  }
  .hero--deck .hero-trust-row { gap: var(--space-4); }
  .deck-problem .pull-quote { font-size: var(--font-size-xl); padding: var(--space-4) var(--space-5); }
  .deck-breakdown .dual-image-row { grid-template-columns: 1fr; }
  .deck-expert .stat-row { gap: var(--space-4); }
}
@media (max-width: 480px) {
  .hero--deck .hero-cta-row { flex-direction: column; align-items: center; }
  .hero--deck .hero-cta-row .btn { width: 100%; max-width: 300px; }
  .deck-expert .stat-row { flex-direction: column; align-items: center; }
}

/* ── Updated timestamp ──────────────────────────────────── */
.last-updated {
  text-align: center;
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  padding: var(--space-4) 0;
}
</style>

<!-- ═══════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--deck">
  <div>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Deck &amp; Patio Construction</span>
    </nav>
    <span class="hero-eyebrow"><i data-lucide="home"></i> Deck &amp; Patio Construction</span>
    <h1>Custom <span class="text-accent">Deck &amp; Patio</span> Construction in Damascus, OR</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed general contractor based in Damascus, Oregon, building custom decks, covered patios, and pergolas for homes throughout the Portland Metro Area. We handle everything from footing excavation and concrete pours to framing, decking, railings, and Clackamas County permit coordination.</p>
    <div class="hero-cta-row">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Deck Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
    <div class="hero-trust-row">
      <span class="hero-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="star"></i> 5.0 Google Rating</span>
      <span class="hero-trust-item"><i data-lucide="map-pin"></i> Damascus, OR</span>
    </div>
  </div>
  <div class="divider-peak--bottom">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 L720,0 L1440,60 Z"/>
    </svg>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="section deck-problem" aria-label="Why deck construction matters">
  <div class="deck-float-diamond"></div>
  <div class="container" style="position:relative;z-index:1;">
    <span class="eyebrow-label reveal-up">Common Pitfalls</span>
    <h2 class="reveal-up" style="text-align:center;margin-bottom:var(--space-3);text-wrap:balance;">What goes wrong when a deck is <span class="text-accent">built by the wrong crew</span>?</h2>
    <p class="answer-block reveal-up" style="text-align:center;max-width:650px;margin:0 auto var(--space-8);color:var(--color-text-light);line-height:1.7;">Oregon's 9-month rain season, freeze-thaw cycles near the Cascades foothills, and strict Clackamas County building codes expose every construction shortcut. A deck that looks fine on day one can develop serious structural and safety problems within a few years if footings, framing, or ledger connections are done wrong.</p>

    <div class="pull-quote reveal-up">
      The three most expensive words in deck ownership: <span class="text-accent">"tear it out."</span> Build it right the first time.
    </div>

    <div class="bento-grid">
      <div class="bento-card bento-card--wide card-tint-1 reveal-left">
        <div class="bento-card-icon"><i data-lucide="triangle-alert"></i></div>
        <h3>Undersized Footings That Shift</h3>
        <p>Footings poured too shallow or with undersized diameter can't support a loaded deck through Oregon's wet winters. When saturated clay soil freezes, it heaves footings upward — warping the frame, popping fasteners, and creating an uneven surface that worsens each year. Clackamas County code requires 18-inch minimum depth for good reason.</p>
      </div>
      <div class="bento-card card-tint-2 reveal-up reveal-delay-1">
        <div class="bento-card-icon"><i data-lucide="droplets"></i></div>
        <h3>Rot from Poor Flashing</h3>
        <p>The ledger board — where the deck meets your house — is the number one failure point. Without proper flashing and a drainage gap, rainwater wicks behind the siding and rots the rim joist. Repairs cost $3,000 to $8,000 and involve opening your exterior wall.</p>
      </div>
      <div class="bento-card card-tint-3 reveal-up reveal-delay-2">
        <div class="bento-card-icon"><i data-lucide="file-x"></i></div>
        <h3>No Permit, No Resale</h3>
        <p>Unpermitted decks show up during home inspections and appraisals. In Clackamas County, unpermitted structures must be retroactively permitted or removed before sale — costing the seller $2,000 to $5,000 in fees, engineering, and inspections.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="section deck-expert" aria-label="Why choose Workhorse">
  <div class="divider-wave--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C480,0 960,0 1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <span class="eyebrow-label reveal-up">Our Approach</span>
    <h2 class="reveal-up">Why choose <?php echo htmlspecialchars($siteName); ?> for <span class="text-accent">deck and patio construction</span> near me in Damascus?</h2>
    <p class="answer-block reveal-up">Most deck builders subcontract their excavation and concrete work. We own the equipment to dig footings, pour concrete, frame the structure, and install decking — all with one crew. That eliminates scheduling gaps between trades and keeps your project on a single timeline.</p>

    <div class="grid-asym reveal-up">
      <div class="image-showcase reveal-left">
        <img src="<?php echo htmlspecialchars($bodyImage1); ?>" alt="Custom deck construction by Workhorse Site Solutions in Damascus, OR" width="700" height="450" loading="lazy">
        <span class="image-badge">Damascus, OR</span>
      </div>
      <div>
        <ul class="differ-list">
          <li class="reveal-right reveal-delay-1">
            <span class="differ-icon"><i data-lucide="hard-hat"></i></span>
            <div><strong>Full Site-to-Finish Capability</strong> — We excavate footings, pour concrete, frame the substructure, install decking and railings, and build stairs — no subcontractors in the chain. One crew, one schedule, one point of contact.</div>
          </li>
          <li class="reveal-right reveal-delay-2">
            <span class="differ-icon"><i data-lucide="clipboard-check"></i></span>
            <div><strong>Permit Coordination Included</strong> — We prepare the permit application, submit the plan, and schedule all Clackamas County inspections (footing, framing, final). You don't make a single call to the building department.</div>
          </li>
          <li class="reveal-right reveal-delay-3">
            <span class="differ-icon"><i data-lucide="cloud-rain"></i></span>
            <div><strong>Built for Oregon Weather</strong> — Every deck includes proper ledger flashing, post-to-beam hardware, and ground-contact rated lumber. We build to withstand 40+ inches of annual rainfall and seasonal freeze-thaw without warping, rotting, or shifting.</div>
          </li>
        </ul>

        <div class="stat-row reveal-up">
          <div class="stat-item">
            <div class="stat-number" data-target="200">200+</div>
            <div class="stat-label">Decks &amp; Patios Built</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">100%</div>
            <div class="stat-label">Permit Pass Rate</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">2-Year</div>
            <div class="stat-label">Workmanship Warranty</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="section deck-breakdown" aria-label="What deck construction includes">
  <div class="container">
    <span class="eyebrow-label reveal-up">What's Included</span>
    <h2 class="reveal-up">What does <span class="text-accent">deck and patio construction</span> include from start to finish?</h2>
    <p class="answer-block reveal-up">Every deck project includes design consultation, permit application, footing excavation and pour, structural framing, decking installation, railing and stair construction, and final county inspection. Covered patio projects add post, beam, and roof structure with integrated drainage.</p>

    <div class="split-content">
      <div class="reveal-left">
        <h3 style="margin-bottom:var(--space-4);">Included in Every Deck &amp; Patio Build</h3>
        <ul class="checklist">
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Design consultation with material and layout options</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Clackamas County permit application and plan submission</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Footing excavation and concrete pour to 18"+ depth</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Ledger board installation with proper flashing</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Structural framing with Simpson Strong-Tie hardware</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Decking installation (wood or composite)</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Railing and stair construction to code</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> All county inspections scheduled and attended</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Final cleanup and debris haul-off</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3 style="margin-bottom:var(--space-4);">Our Process — Step by Step</h3>
        <div class="timeline">
          <div class="timeline-step">
            <h4>1. Design &amp; Estimate</h4>
            <p>We visit your property, discuss layout, material preferences, and features (stairs, railings, built-in seating, cover). You receive a fixed-price proposal within 48 hours.</p>
          </div>
          <div class="timeline-step">
            <h4>2. Permit &amp; Material Order</h4>
            <p>We submit plans to Clackamas County, order materials, and schedule the project start date once the permit is approved (typically 2-3 weeks).</p>
          </div>
          <div class="timeline-step">
            <h4>3. Footing Excavation &amp; Pour</h4>
            <p>Holes dug to 18 inches minimum, Sonotube forms placed, concrete poured with post brackets embedded. Footing inspection scheduled.</p>
          </div>
          <div class="timeline-step">
            <h4>4. Framing &amp; Ledger</h4>
            <p>Ledger board fastened to house framing with lag bolts and flashing. Posts, beams, and joists installed with structural connectors throughout.</p>
          </div>
          <div class="timeline-step">
            <h4>5. Decking, Railings &amp; Stairs</h4>
            <p>Deck boards installed with proper gapping for drainage. Railings built to 36-inch height (42-inch for elevated decks). Stairs with proper rise/run per code.</p>
          </div>
          <div class="timeline-step">
            <h4>6. Final Inspection &amp; Handoff</h4>
            <p>County final inspection, walk-through with you, material warranty documentation delivered, and site cleaned. Your deck is ready to use.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="dual-image-row reveal-up">
      <div class="img-frame">
        <img src="<?php echo htmlspecialchars($bodyImage2); ?>" alt="Deck framing and construction progress in Damascus, OR" width="600" height="400" loading="lazy">
      </div>
      <div class="img-frame">
        <img src="<?php echo htmlspecialchars($bodyImage3); ?>" alt="Completed covered patio project by Workhorse Site Solutions" width="600" height="400" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="section deck-reviews" aria-label="Customer reviews">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;color:var(--color-accent);">What Clients Say</span>
    <h2 class="reveal-up">What do Damascus homeowners say about our <span class="text-accent">deck and patio builds</span>?</h2>
    <p class="answer-block reveal-up">From ground-level patios to elevated multi-level decks with covered structures, our clients consistently highlight the single-crew advantage and the peace of mind that comes with proper permitting and inspections.</p>

    <div class="review-grid">
      <div class="deck-review-card reveal-up reveal-delay-1">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"We wanted a 400 sq ft composite deck with a covered pergola in Damascus. Workhorse handled the permit, poured the footings, framed it, and installed the composite boards in under two weeks. The county inspector said it was one of the cleanest builds he'd seen. Couldn't be happier."</blockquote>
        <span class="reviewer">— Chris &amp; Amy W., Damascus, OR | Composite Deck + Pergola</span>
      </div>
      <div class="deck-review-card reveal-up reveal-delay-2">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"Our hillside lot in Happy Valley made this project tricky — the deck needed to be 8 feet above grade at one end. They engineered the post heights, poured oversized footings, and built it level and solid. Three years later, not a single board has shifted or warped."</blockquote>
        <span class="reviewer">— Nathan P., Happy Valley, OR | Elevated Cedar Deck</span>
      </div>
      <div class="deck-review-card reveal-up reveal-delay-3">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"They tore out our rotting 20-year-old deck, regraded the area underneath, and built a beautiful covered patio with composite decking. One company handled everything — demolition, grading, construction, and the county permit. Price beat the other two bids by $2,500."</blockquote>
        <span class="reviewer">— Debbie M., Gresham, OR | Covered Patio Replacement</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON TABLE
     ═══════════════════════════════════════════════════════ -->
<section class="section deck-compare" aria-label="Contractor comparison">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;">How We Stack Up</span>
    <h2 class="reveal-up">How does <?php echo htmlspecialchars($siteName); ?> compare to other <span class="text-accent">deck builders</span>?</h2>
    <p class="answer-block reveal-up">The gap between a deck that passes inspection first try and one that needs rework comes down to structural knowledge, hardware selection, and whether the builder can handle their own site prep. Here is how we differ.</p>

    <table class="compare-table reveal-up">
      <thead>
        <tr>
          <th>Other Deck Builders</th>
          <th>Workhorse Site Solutions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Subcontract excavation and concrete — delays between trades</td>
          <td>Own excavation equipment — footings dug and poured by our crew same week</td>
        </tr>
        <tr>
          <td>Generic flashing tape over ledger — fails within 5 years</td>
          <td>Metal drip-edge flashing with drainage gap per IRC Section R507.2.1</td>
        </tr>
        <tr>
          <td>Nails or basic screws for structural connections</td>
          <td>Simpson Strong-Tie connectors at every post-beam and joist-ledger joint</td>
        </tr>
        <tr>
          <td>Leave permit process to homeowner</td>
          <td>Handle full permit application, plan submission, and all inspections</td>
        </tr>
        <tr>
          <td>Skip ground prep under the deck</td>
          <td>Grade for drainage, install weed barrier, and slope soil away from foundation</td>
        </tr>
        <tr>
          <td>No demo capability — old deck stays or you hire someone else</td>
          <td>Full tear-out, footing removal, and debris haul-off with our equipment</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="section deck-faq" aria-label="Frequently asked questions">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;">Deck &amp; Patio FAQ</span>
    <h2 class="reveal-up">What questions do Damascus homeowners ask about <span class="text-accent">deck and patio construction</span>?</h2>
    <p class="section-subtitle reveal-up">Answers from our crew based on <?php echo $yearsInBusiness; ?>+ years of building in the Portland Metro Area</p>

    <div class="faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="faq-image-col reveal-scale">
      <img src="<?php echo htmlspecialchars($bodyImage3); ?>" alt="Finished deck and patio construction project in Damascus, OR" width="700" height="420" loading="lazy">
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     8. FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="section deck-final-cta" aria-label="Get started">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="display:block;text-align:center;color:var(--color-accent);">Start Your Project</span>
    <h2 class="reveal-up">Ready to build your <span class="text-accent">dream deck or patio</span>?</h2>
    <p class="answer-block reveal-up">Every project starts with a free design consultation. We visit your property, discuss your vision — open deck, covered patio, pergola, or a combination — and deliver a detailed proposal with material options and a fixed price. No surprises, no hourly billing.</p>
    <div class="cta-row reveal-up">
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
<section class="section deck-related" aria-label="Related services">
  <div class="container">
    <h2 class="reveal-up">Other Services You May Need</h2>
    <div class="services-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php
      $related = getRelatedServices('deck-patio-construction', 3);
      $tintClasses = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      foreach ($related as $i => $rel):
        $tint = $tintClasses[$i % 3];
        $icon = $serviceIcons[$rel['slug']] ?? 'wrench';
        $img  = $serviceImages[$rel['slug']] ?? '';
      ?>
      <article class="service-card-with-image <?php echo $tint; ?> reveal-up reveal-delay-<?php echo $i + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($rel['name']); ?> in Damascus, OR" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo htmlspecialchars($icon); ?>"></i></div>
          <h3><?php echo htmlspecialchars($rel['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($rel['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($rel['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="last-updated">
  <p>Last Updated: <?php echo date('F Y'); ?></p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

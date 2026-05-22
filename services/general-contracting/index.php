<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('general-contracting');
$pageTitle       = 'General Contracting Services | ' . $siteName . ' | Damascus, OR';
$pageDescription = 'Full-service general contracting for residential and commercial projects in Damascus, OR. Workhorse Site Solutions manages site prep through final build — licensed, bonded, insured. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/general-contracting/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396363449-wyzf8f-481785958_604894925867828_2034594633166557511_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '6';

/* ── Photo Map ──────────────────────────────────────────────── */
$photoBase   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto   = $photoBase . '1779396363449-wyzf8f-481785958_604894925867828_2034594633166557511_n.jpg';
$bodyPhoto1  = $photoBase . '1779396632764-dbwd8m-482253907_609039062120081_8506379556936315532_n.jpg';
$bodyPhoto2  = $photoBase . '1779396641424-yu78lj-482259457_609041108786543_7216240674560658349_n.jpg';
$bodyPhoto3  = $photoBase . '1779396650784-vc4dyr-482269447_609049555452365_6166042618994524871_n.jpg';

/* ── Related Services ───────────────────────────────────────── */
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

/* ── FAQ Array ──────────────────────────────────────────────── */
$faqs = [
    [
        'question' => 'What does a general contractor do differently than a specialty contractor?',
        'answer'   => 'A general contractor manages the entire project — coordinating permits, scheduling subcontractors, ordering materials, overseeing inspections, and keeping the build on timeline and budget. Specialty contractors handle only their specific trade.',
    ],
    [
        'question' => 'How much does general contracting cost for a residential project in Damascus?',
        'answer'   => 'Residential projects typically range from $15,000 to $150,000+ depending on scope. A garage build might run $25,000 to $50,000, while a full ADU or addition can reach $100,000+. We provide detailed line-item estimates after a site visit.',
    ],
    [
        'question' => 'Does Workhorse handle permits and inspections in Clackamas County?',
        'answer'   => 'Yes. We pull all required building permits through Clackamas County Development Services, schedule inspections at each milestone, and handle code compliance documentation. Permit fees are itemized separately in your estimate.',
    ],
    [
        'question' => 'What types of construction projects does Workhorse manage?',
        'answer'   => 'We manage site preparation, foundations, structural framing, outbuildings, garages, barns, retaining walls, commercial site improvements, and property infrastructure projects. Our strength is projects that combine earthwork with construction.',
    ],
    [
        'question' => 'How long does a typical general contracting project take in Damascus?',
        'answer'   => 'A simple outbuilding or garage takes 4 to 8 weeks from permit to completion. Larger projects like ADUs or commercial site work can take 3 to 6 months. We provide a detailed project timeline before breaking ground.',
    ],
    [
        'question' => 'Do you work on commercial properties in the Portland Metro Area?',
        'answer'   => 'Yes. We handle commercial site improvements, access road construction, parking areas, outbuildings, and property infrastructure for businesses across Damascus, Gresham, Happy Valley, Sandy, and the greater Portland Metro corridor.',
    ],
    [
        'question' => 'Can you manage a project that involves multiple trades?',
        'answer'   => 'Absolutely. We coordinate with licensed electricians, plumbers, concrete contractors, and other specialists as needed. Every sub we bring in is licensed and insured in Oregon, and we manage all scheduling and quality control.',
    ],
    [
        'question' => 'What is included in a general contracting estimate from Workhorse?',
        'answer'   => 'Every estimate includes a detailed scope of work, material specifications, labor breakdown, permit costs, project timeline, and payment schedule. No hidden fees — if something changes during the build, we discuss it before proceeding.',
    ],
];

/* ── Schema Markup ──────────────────────────────────────────── */
$schemaMarkup  = generateServiceSchema($service);
$schemaMarkup .= generateFAQSchema($faqs);
$schemaMarkup .= generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'General Contracting', 'url' => '/services/general-contracting/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     GENERAL CONTRACTING — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── 1. HERO ────────────────────────────────────────────────── */
.hero--gc {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($heroPhoto); ?>');
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
}
.hero--gc::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(0,0,0,0.93) 0%, rgba(0,0,0,0.72) 45%, rgba(77,94,111,0.55) 100%);
  z-index: 1;
}
.hero--gc::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--gc > * { position: relative; z-index: 2; }
.hero--gc .container { max-width: var(--max-width); }
.hero--gc .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  color: var(--color-accent);
  font-size: var(--font-size-sm);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: var(--space-4);
}
.hero--gc .hero-eyebrow i,
.hero--gc .hero-eyebrow svg { width: 16px; height: 16px; }
.hero--gc h1 {
  color: var(--color-white);
  max-width: 740px;
  margin-bottom: var(--space-4);
}
.hero--gc h1 .text-accent { color: var(--color-accent); }
.hero--gc .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 620px;
  margin-bottom: var(--space-6);
}
.hero--gc .hero-cta-row {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero--gc .trust-row {
  display: flex;
  gap: var(--space-6);
  flex-wrap: wrap;
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255,255,255,0.12);
}
.hero--gc .trust-row-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255,255,255,0.8);
}
.hero--gc .trust-row-item i,
.hero--gc .trust-row-item svg { width: 18px; height: 18px; color: var(--color-accent); }
.hero--gc .breadcrumb {
  display: flex;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  margin-bottom: var(--space-4);
}
.hero--gc .breadcrumb a { color: rgba(255,255,255,0.7); }
.hero--gc .breadcrumb a:hover { color: var(--color-accent); }
.hero--gc .breadcrumb-sep { color: rgba(255,255,255,0.35); }

/* ── 2. PROBLEM STATEMENT ───────────────────────────────────── */
.gc-problem {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.gc-problem .pull-quote {
  font-family: var(--font-heading);
  font-size: clamp(1.3rem, 2.4vw, 1.7rem);
  font-weight: 700;
  line-height: 1.45;
  color: var(--color-dark);
  max-width: 680px;
  margin-bottom: var(--space-10);
  position: relative;
  padding-left: var(--space-6);
  border-left: 4px solid var(--color-accent);
}
.gc-problem .bento-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr) 1.2fr;
  gap: var(--space-4);
}
.gc-problem .bento-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.gc-problem .bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.gc-problem .bento-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent), var(--color-secondary));
  opacity: 0;
  transition: opacity var(--transition-base);
}
.gc-problem .bento-card:hover::after { opacity: 1; }
.gc-problem .bento-card-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-3);
  color: var(--color-accent);
}
.gc-problem .bento-card-icon i,
.gc-problem .bento-card-icon svg { width: 24px; height: 24px; }
.gc-problem .bento-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.gc-problem .bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.gc-problem .bento-card--feature {
  grid-row: span 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.gc-problem .float-accent {
  position: absolute;
  width: 380px;
  height: 380px;
  border-radius: 50%;
  background: var(--color-secondary);
  opacity: 0.04;
  top: -120px;
  left: -100px;
  z-index: 0;
  animation: gc-float 14s ease-in-out infinite;
}

/* ── 3. EXPERT POSITIONING ──────────────────────────────────── */
.gc-expert {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-bg);
}
.gc-expert .grid-asym {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-10);
  align-items: center;
}
.gc-expert .expert-content h2 {
  margin-bottom: var(--space-4);
}
.gc-expert .expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.75;
  margin-bottom: var(--space-6);
  max-width: var(--content-width);
}
.gc-expert .diff-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gc-expert .diff-item {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.gc-expert .diff-icon {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.gc-expert .diff-icon i,
.gc-expert .diff-icon svg { width: 20px; height: 20px; }
.gc-expert .diff-text strong { display: block; color: var(--color-dark); margin-bottom: 2px; }
.gc-expert .diff-text span { font-size: var(--font-size-sm); color: var(--color-text-light); }
.gc-expert .stat-stack {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.gc-expert .stat-card {
  background: var(--color-dark);
  border-radius: var(--radius-xl);
  padding: var(--space-8) var(--space-6);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.gc-expert .stat-card::after {
  content: '';
  position: absolute;
  bottom: -30px;
  right: -30px;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.08;
}
.gc-expert .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.gc-expert .stat-label {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-base);
  font-weight: 600;
}

/* ── 4. SERVICE BREAKDOWN ───────────────────────────────────── */
.gc-breakdown {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-bg-alt);
  overflow: hidden;
}
.gc-breakdown .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.gc-breakdown .section-title .answer-block {
  max-width: 640px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
  line-height: 1.7;
}
.gc-breakdown .split-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  align-items: start;
}
.gc-breakdown .scope-list {
  list-style: none;
  padding: 0;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3);
}
.gc-breakdown .scope-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-3) var(--space-4);
  background: var(--color-bg);
  border-radius: var(--radius-md);
  font-weight: 500;
  font-size: var(--font-size-sm);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-fast);
}
.gc-breakdown .scope-item:hover { transform: translateX(4px); }
.gc-breakdown .scope-item i,
.gc-breakdown .scope-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.gc-breakdown .timeline {
  position: relative;
  padding-left: var(--space-8);
}
.gc-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 14px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-secondary));
}
.gc-breakdown .timeline-step {
  position: relative;
  margin-bottom: var(--space-6);
  padding-left: var(--space-4);
}
.gc-breakdown .timeline-step::before {
  content: '';
  position: absolute;
  left: calc(-1 * var(--space-8) + 8px);
  top: 4px;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  background: var(--color-accent);
  border: 3px solid var(--color-bg-alt);
  z-index: 1;
}
.gc-breakdown .timeline-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-1);
}
.gc-breakdown .timeline-step .step-meta {
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 600;
  margin-bottom: var(--space-1);
}
.gc-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* Dividers */
.gc-divider--wave {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.gc-divider--wave svg { display: block; width: 100%; height: auto; }
.gc-divider--angle {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.gc-divider--angle svg { display: block; width: 100%; height: auto; }

/* ── 5. PROOF / REVIEWS ─────────────────────────────────────── */
.gc-reviews {
  padding: var(--space-16) 0;
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.gc-reviews .section-title { text-align: center; margin-bottom: var(--space-10); }
.gc-reviews .section-title h2 { color: var(--color-white); }
.gc-reviews .section-title .answer-block {
  color: rgba(255,255,255,0.7);
  max-width: 600px;
  margin: var(--space-3) auto 0;
}
.gc-reviews .reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.gc-reviews .review-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.gc-reviews .review-card:hover {
  transform: translateY(-4px);
  border-color: rgba(var(--color-accent-rgb), 0.3);
}
.gc-reviews .review-stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-3);
  color: var(--color-star);
}
.gc-reviews .review-stars i,
.gc-reviews .review-stars svg { width: 16px; height: 16px; }
.gc-reviews .review-text {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  font-style: italic;
}
.gc-reviews .review-author {
  font-weight: 700;
  color: var(--color-white);
  font-size: var(--font-size-sm);
}
.gc-reviews .review-meta {
  color: rgba(255,255,255,0.5);
  font-size: var(--font-size-xs);
}
.gc-reviews .float-blob {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
  top: -80px;
  right: -80px;
  animation: gc-float 16s ease-in-out infinite reverse;
}

/* ── 6. COMPARISON TABLE ────────────────────────────────────── */
.gc-compare {
  padding: var(--space-16) 0;
  background: var(--color-bg);
  position: relative;
}
.gc-compare .section-title { text-align: center; margin-bottom: var(--space-10); }
.gc-compare .section-title .answer-block {
  max-width: 620px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
}
.gc-compare .compare-table {
  max-width: 860px;
  margin: 0 auto;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.gc-compare .compare-header {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.gc-compare .compare-header-cell {
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-lg);
  text-align: center;
}
.gc-compare .compare-header-cell:first-child {
  background: var(--color-gray-light);
  color: var(--color-gray-dark);
}
.gc-compare .compare-header-cell:last-child {
  background: var(--color-dark);
  color: var(--color-white);
}
.gc-compare .compare-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border-bottom: 1px solid var(--color-border);
}
.gc-compare .compare-row:last-child { border-bottom: none; }
.gc-compare .compare-cell {
  padding: var(--space-3) var(--space-6);
  font-size: var(--font-size-sm);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.gc-compare .compare-cell:first-child {
  background: rgba(var(--color-secondary-rgb), 0.04);
  color: var(--color-gray);
}
.gc-compare .compare-cell:last-child {
  background: var(--color-bg);
  color: var(--color-dark);
  font-weight: 600;
}
.gc-compare .compare-cell i,
.gc-compare .compare-cell svg { width: 16px; height: 16px; flex-shrink: 0; }
.gc-compare .compare-cell .icon-x { color: var(--color-danger); }
.gc-compare .compare-cell .icon-check { color: var(--color-success); }

/* ── 7. FAQ ACCORDION ───────────────────────────────────────── */
.gc-faq {
  padding: var(--space-16) 0;
  background: var(--color-bg-alt);
  position: relative;
}
.gc-faq .section-title { text-align: center; margin-bottom: var(--space-10); }
.gc-faq .section-title .answer-block {
  max-width: 620px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
}
.gc-faq .faq-list {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.gc-faq .faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.gc-faq .faq-item:hover { box-shadow: var(--shadow-md); }
.gc-faq .faq-question {
  width: 100%;
  background: none;
  border: none;
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-dark);
  text-align: left;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-4);
}
.gc-faq .faq-question:focus-visible {
  outline: 3px solid var(--color-accent);
  outline-offset: -3px;
  border-radius: var(--radius-md);
}
.gc-faq .faq-question i,
.gc-faq .faq-question svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.gc-faq .faq-item.active .faq-question svg,
.gc-faq .faq-item.active .faq-question i {
  transform: rotate(45deg);
}
.gc-faq .faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.gc-faq .faq-item.active .faq-answer { max-height: 400px; }
.gc-faq .faq-answer-inner {
  padding: 0 var(--space-6) var(--space-5);
  color: var(--color-text-light);
  line-height: 1.75;
  font-size: var(--font-size-sm);
}

/* ── 8. FINAL CTA ───────────────────────────────────────────── */
.gc-cta-final {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-dark);
  text-align: center;
  overflow: hidden;
}
.gc-cta-final::before {
  content: '';
  position: absolute;
  bottom: -80px;
  right: -60px;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.05;
}
.gc-cta-final h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.gc-cta-final .answer-block {
  color: rgba(255,255,255,0.8);
  max-width: 580px;
  margin: 0 auto var(--space-6);
  line-height: 1.7;
}
.gc-cta-final .cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RELATED SERVICES ───────────────────────────────────────── */
.gc-related {
  padding: var(--space-16) 0;
  background: var(--color-bg);
}
.gc-related .section-title { text-align: center; margin-bottom: var(--space-10); }

/* ── Inline Image Block ─────────────────────────────────────── */
.gc-img-block {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 16 / 9;
}
.gc-img-block img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* ── Keyframes ──────────────────────────────────────────────── */
@keyframes gc-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-15px) rotate(3deg); }
}

/* ── Page last-updated ──────────────────────────────────────── */
.page-updated {
  text-align: center;
  padding: var(--space-4) 0;
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
}

/* ── Responsive ─────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .gc-problem .bento-grid { grid-template-columns: 1fr 1fr; }
  .gc-problem .bento-card--feature { grid-row: auto; }
  .gc-expert .grid-asym { grid-template-columns: 1fr; }
  .gc-expert .stat-stack { flex-direction: row; }
  .gc-breakdown .split-content { grid-template-columns: 1fr; }
  .gc-breakdown .scope-list { grid-template-columns: 1fr; }
  .gc-reviews .reviews-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .hero--gc { min-height: 55vh; padding-top: calc(var(--nav-height) + var(--space-10)); }
  .hero--gc .trust-row { gap: var(--space-4); }
  .gc-problem .bento-grid { grid-template-columns: 1fr; }
  .gc-expert .stat-stack { flex-direction: column; }
  .gc-compare .compare-header-cell { font-size: var(--font-size-base); padding: var(--space-3) var(--space-4); }
  .gc-compare .compare-cell { padding: var(--space-2) var(--space-4); font-size: var(--font-size-xs); }
  .gc-cta-final .cta-row { flex-direction: column; align-items: center; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--gc">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>General Contracting</span>
    </nav>
    <span class="hero-eyebrow"><i data-lucide="wrench"></i> General Contracting</span>
    <h1><span class="text-accent">General Contracting</span> Services in Damascus, OR &amp; Portland Metro</h1>
    <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon general contractor based in Damascus, managing residential and commercial construction projects from permitting through final inspection since 2022. We coordinate every trade, keep the timeline tight, and own the equipment to handle site work in-house.</p>
    <div class="hero-cta-row">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Project Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
    <div class="trust-row">
      <span class="trust-row-item"><i data-lucide="shield-check"></i> Licensed &amp; Bonded</span>
      <span class="trust-row-item"><i data-lucide="file-check"></i> Permit Management</span>
      <span class="trust-row-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="trust-row-item"><i data-lucide="users"></i> Family-Owned</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="gc-problem" aria-label="Construction project challenges">
  <div class="float-accent"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="pull-quote reveal-up">
      Construction projects stall when the general contractor doesn't control the site work. Separate excavation, grading, and building crews create handoff delays that push timelines weeks past schedule.
    </div>

    <h2 class="reveal-up" style="margin-bottom:var(--space-3);">What <span class="text-accent">problems</span> does a general contractor solve on your project?</h2>
    <p class="answer-block reveal-up" style="margin-bottom:var(--space-8);max-width:650px;">A general contractor eliminates the coordination burden from property owners, manages permits, schedules trades in sequence, and catches code issues before they become expensive rework during inspections.</p>

    <div class="bento-grid">
      <div class="bento-card reveal-up reveal-delay-1">
        <div class="bento-card-icon"><i data-lucide="clock"></i></div>
        <h3>Schedule Conflicts</h3>
        <p>Without a GC, trades arrive out of sequence — electricians before framers, concrete before grading. Every out-of-order day costs money.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-2">
        <div class="bento-card-icon"><i data-lucide="file-warning"></i></div>
        <h3>Permit Gaps</h3>
        <p>Clackamas County requires multiple permits for most builds. Missing one triggers stop-work orders that idle your crew and inflate costs.</p>
      </div>
      <div class="bento-card bento-card--feature reveal-up reveal-delay-3">
        <div class="bento-card-icon"><i data-lucide="arrow-up-down"></i></div>
        <h3>Handoff Failures</h3>
        <p>When site prep and construction are separate contracts, critical details fall through the cracks — drainage grades don't match foundation plans, utility trenches land in the wrong spot, and retaining walls aren't engineered for actual soil conditions. Workhorse eliminates these gaps because we handle both the dirt work and the build.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-4">
        <div class="bento-card-icon"><i data-lucide="dollar-sign"></i></div>
        <h3>Cost Overruns</h3>
        <p>Uncoordinated projects routinely exceed budget by 20-35%. A single point of management catches scope changes before they spiral.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="gc-expert" aria-label="Why choose Workhorse">
  <div class="container">
    <div class="grid-asym">
      <div class="expert-content">
        <span class="eyebrow-label reveal-up">Our Approach</span>
        <h2 class="reveal-up">Why hire Workhorse as your <span class="text-accent">general contractor</span> in Damascus?</h2>
        <p class="answer-block reveal-up">Most general contractors subcontract the site work and mark it up 15-20%. We own excavators, dump trucks, and grading equipment — so your project's earthwork phase costs less and starts faster than waiting on a subcontractor's schedule.</p>

        <ul class="diff-list">
          <li class="diff-item reveal-right reveal-delay-1">
            <div class="diff-icon"><i data-lucide="building-2"></i></div>
            <div class="diff-text">
              <strong>Site Work + Construction Under One Contract</strong>
              <span>Excavation, grading, trenching, and building all managed by one team — no handoff gaps, no conflicting schedules.</span>
            </div>
          </li>
          <li class="diff-item reveal-right reveal-delay-2">
            <div class="diff-icon"><i data-lucide="clipboard-check"></i></div>
            <div class="diff-text">
              <strong>Full Permit Management</strong>
              <span>We handle all Clackamas County permits, schedule inspections, and maintain compliance documentation through project close.</span>
            </div>
          </li>
          <li class="diff-item reveal-right reveal-delay-3">
            <div class="diff-icon"><i data-lucide="shield-check"></i></div>
            <div class="diff-text">
              <strong>Licensed, Bonded &amp; Insured in Oregon</strong>
              <span>CCB-licensed general contractor carrying full liability and worker's compensation coverage on every project.</span>
            </div>
          </li>
        </ul>
      </div>

      <div class="stat-stack reveal-scale">
        <div class="stat-card">
          <div class="stat-number" data-target="150">150+</div>
          <div class="stat-label">Projects Completed in Clackamas County</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">100%</div>
          <div class="stat-label">Permit Approval Rate</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="gc-breakdown" aria-label="What's included">
  <div class="gc-divider--wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C360,0 1080,0 1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Scope of Work</span>
      <h2 class="reveal-up">What's included in a <span class="text-accent">general contracting</span> engagement?</h2>
      <p class="answer-block reveal-up">Every Workhorse general contracting project includes a detailed scope of work, project timeline, permit management, trade coordination, materials procurement, and weekly progress reporting — from the first shovel to final occupancy.</p>
    </div>

    <div class="split-content">
      <div>
        <h3 class="reveal-up" style="margin-bottom:var(--space-4);">Project Scope Capabilities</h3>
        <ul class="scope-list">
          <li class="scope-item reveal-right reveal-delay-1"><i data-lucide="check"></i> Site clearing and demolition</li>
          <li class="scope-item reveal-right reveal-delay-1"><i data-lucide="check"></i> Excavation and grading</li>
          <li class="scope-item reveal-right reveal-delay-2"><i data-lucide="check"></i> Foundation preparation</li>
          <li class="scope-item reveal-right reveal-delay-2"><i data-lucide="check"></i> Structural framing</li>
          <li class="scope-item reveal-right reveal-delay-3"><i data-lucide="check"></i> Utility trenching and hookups</li>
          <li class="scope-item reveal-right reveal-delay-3"><i data-lucide="check"></i> Retaining walls</li>
          <li class="scope-item reveal-right reveal-delay-4"><i data-lucide="check"></i> Outbuildings and garages</li>
          <li class="scope-item reveal-right reveal-delay-4"><i data-lucide="check"></i> Driveways and access roads</li>
          <li class="scope-item reveal-right"><i data-lucide="check"></i> Fencing and property borders</li>
          <li class="scope-item reveal-right"><i data-lucide="check"></i> Final grading and cleanup</li>
        </ul>

        <div class="gc-img-block reveal-up" style="margin-top:var(--space-6);">
          <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="General contracting project underway in Damascus, OR" width="800" height="450" loading="lazy">
        </div>
      </div>

      <div>
        <h3 class="reveal-up" style="margin-bottom:var(--space-4);">How We Manage Your Build</h3>
        <div class="timeline">
          <div class="timeline-step reveal-up reveal-delay-1">
            <div class="step-meta">Phase 1</div>
            <h3>Planning &amp; Permits</h3>
            <p>We review plans, submit permit applications to Clackamas County Development Services, and create a sequenced project schedule with clear milestones.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-2">
            <div class="step-meta">Phase 2</div>
            <h3>Site Work &amp; Foundation</h3>
            <p>Our crew handles clearing, excavation, grading, and drainage — preparing the site to receive foundation work. No subcontractor delay on the earthwork phase.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-3">
            <div class="step-meta">Phase 3</div>
            <h3>Structural Build</h3>
            <p>Framing, roofing, and structural elements go up with licensed trade crews. We schedule inspections at each required checkpoint and correct issues same-day.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-4">
            <div class="step-meta">Phase 4</div>
            <h3>Systems &amp; Finishing</h3>
            <p>Electrical, plumbing, and HVAC rough-ins are coordinated with licensed specialists. We manage sequencing so no trade idles waiting for another.</p>
          </div>
          <div class="timeline-step reveal-up">
            <div class="step-meta">Phase 5</div>
            <h3>Final Inspection &amp; Handoff</h3>
            <p>Final walkthrough with the owner, punch-list completion, final county inspection, and project closeout. We leave the site clean and documented.</p>
          </div>
        </div>

        <div class="gc-img-block reveal-up" style="margin-top:var(--space-6);">
          <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Workhorse crew managing construction project near Gresham, Oregon" width="800" height="450" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="gc-reviews" aria-label="Customer reviews">
  <div class="float-blob"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="section-title">
      <span class="eyebrow-label reveal-up" style="color:var(--color-accent);">Customer Reviews</span>
      <h2 class="reveal-up">What do clients say about Workhorse as a <span class="text-accent">general contractor</span>?</h2>
      <p class="answer-block reveal-up">Property owners across Damascus, Gresham, and Happy Valley rate us 5 stars for clear communication, staying on schedule, and managing every detail without surprises.</p>
    </div>

    <div class="reviews-grid">
      <div class="review-card reveal-up reveal-delay-1">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"We needed a 30x40 shop built on our Damascus property. Workhorse handled the site clearing, grading, foundation, and framing all under one contract. No finger-pointing between subs — one crew, one schedule, done on time."</p>
        <p class="review-author">Brian K.</p>
        <p class="review-meta">Damascus, OR &mdash; 30x40 Shop Build</p>
      </div>
      <div class="review-card reveal-up reveal-delay-2">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"The permit process in Clackamas County intimidated us. Workhorse handled every application, met every inspector, and kept us updated weekly. Our ADU foundation was poured ahead of the original schedule."</p>
        <p class="review-author">Sarah M.</p>
        <p class="review-meta">Happy Valley, OR &mdash; ADU Foundation + Site Prep</p>
      </div>
      <div class="review-card reveal-up reveal-delay-3">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"Commercial site improvement for our equipment yard off Hwy 26 near Sandy. They built the access road, graded the lot, installed drainage, and put up a 2,400 sq ft equipment cover. Everything passed inspection first try."</p>
        <p class="review-author">Tom L.</p>
        <p class="review-meta">Sandy, OR &mdash; Commercial Site Improvement</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON
     ═══════════════════════════════════════════════════════ -->
<section class="gc-compare" aria-label="Why Workhorse">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">The Difference</span>
      <h2 class="reveal-up">How does Workhorse compare to other <span class="text-accent">general contractors</span> in Damascus?</h2>
      <p class="answer-block reveal-up">Most GCs subcontract everything and manage by phone. We control the heaviest, most delay-prone phase of your project — the site work — with our own equipment and crew.</p>
    </div>

    <div class="compare-table reveal-up">
      <div class="compare-header">
        <div class="compare-header-cell">Typical GC</div>
        <div class="compare-header-cell">Workhorse Site Solutions</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Subcontracts all site work</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> In-house excavation and grading</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Equipment rental markups</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Own fleet — no markups</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Weeks waiting for sub availability</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Same-week site work starts</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Multiple contracts, multiple liabilities</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Single contract, single point of accountability</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Owner coordinates between trades</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Full trade coordination and scheduling</div>
      </div>
    </div>

    <div class="gc-img-block reveal-up" style="max-width:860px;margin:var(--space-8) auto 0;">
      <img src="<?php echo htmlspecialchars($bodyPhoto3); ?>" alt="Completed construction project by Workhorse in Damascus, Oregon" width="800" height="450" loading="lazy">
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="gc-faq" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">FAQ</span>
      <h2 class="reveal-up">What should you know about <span class="text-accent">general contracting</span> near me in Damascus?</h2>
      <p class="answer-block reveal-up">Answers to questions we hear from homeowners, developers, and business owners across Damascus, Gresham, Happy Valley, and the surrounding Portland Metro communities.</p>
    </div>

    <div class="faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <button class="faq-question" aria-expanded="false" onclick="this.parentElement.classList.toggle('active');this.setAttribute('aria-expanded',this.parentElement.classList.contains('active'))">
          <?php echo htmlspecialchars($faq['question']); ?>
          <i data-lucide="plus"></i>
        </button>
        <div class="faq-answer">
          <p class="faq-answer-inner"><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     8. FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="gc-cta-final" aria-label="Get started">
  <div class="gc-divider--wave" style="top:-1px;">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg-alt)">
      <path d="M0,0 L1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container" style="position:relative;z-index:1;">
    <span class="eyebrow-label reveal-up" style="color:var(--color-accent);">Start Your Build</span>
    <h2 class="reveal-up">Ready to break ground on your <span class="text-accent">next project</span>?</h2>
    <p class="answer-block reveal-up">Every construction estimate is free, detailed, and includes a project timeline. Tell us the scope — residential or commercial — and we'll schedule a site visit within 48 hours from our Damascus home base.</p>
    <div class="cta-row">
      <a href="/contact/" class="btn btn-accent btn-lg reveal-up">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg reveal-up"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════ -->
<section class="gc-related" aria-label="Related services">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">More From Workhorse</span>
      <h2 class="reveal-up">Other Services <span class="text-accent">You May Need</span></h2>
    </div>

    <div class="services-grid">
      <?php
      $related = getRelatedServices('general-contracting', 3);
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

<div class="page-updated">Last Updated: <?php echo date('F Y'); ?></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

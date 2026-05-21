<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('driveway-services');
$pageTitle       = 'Driveway Installation & Gravel Services | ' . $siteName . ' | Damascus, OR';
$pageDescription = 'Professional driveway installation, gravel delivery, grading, and drainage solutions in Damascus, OR. Workhorse Site Solutions builds driveways that handle Oregon weather — free estimates.';
$canonicalUrl    = $siteUrl . '/services/driveway-services/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396355425-qis7fl-481783972_604904149200239_7919437156192045435_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '2';

/* ── Photo Map ──────────────────────────────────────────────── */
$photoBase   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto   = $photoBase . '1779396355425-qis7fl-481783972_604904149200239_7919437156192045435_n.jpg';
$bodyPhoto1  = $photoBase . '1779396616104-v3b86g-482246135_608065672217420_2959763275566108685_n.jpg';
$bodyPhoto2  = $photoBase . '1779396622768-f1vhl3-482249511_609038858786768_2372833905609594076_n.jpg';
$bodyPhoto3  = $photoBase . '1779396627744-x62f9x-482249863_609035788787075_8164555034268411145_n.jpg';

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
        'question' => 'How much does a gravel driveway cost in Damascus, OR?',
        'answer'   => 'Most gravel driveways in Damascus run between $1,500 and $5,000 depending on length, depth of base rock, and whether drainage improvements are needed. A typical single-car driveway of 40 feet costs roughly $2,200 to $3,500 installed.',
    ],
    [
        'question' => 'What type of gravel works best for driveways in the Portland Metro Area?',
        'answer'   => 'We recommend 3/4-inch minus crushed rock for the base layer and 1/4-inch minus compaction gravel for the surface. This combination handles Oregon rain well and locks together under traffic for a firm, long-lasting surface.',
    ],
    [
        'question' => 'How long does a driveway installation take?',
        'answer'   => 'A standard residential gravel driveway takes 1 to 3 days from excavation to final compaction. Longer driveways with steep grades or drainage work may take up to 5 days. We provide a specific timeline during your free estimate.',
    ],
    [
        'question' => 'Do you handle driveway drainage issues in Damascus?',
        'answer'   => 'Yes. Many Damascus properties sit on clay-heavy soil that drains poorly. We install French drains, culverts, and crown grading to move water off the driveway surface and away from your property foundation.',
    ],
    [
        'question' => 'Can you widen or extend an existing driveway?',
        'answer'   => 'Absolutely. We extend existing gravel driveways, widen them for additional parking, and add turnaround areas. We match the existing grade and material to keep a consistent look across old and new sections.',
    ],
    [
        'question' => 'What preparation work happens before driveway gravel is laid?',
        'answer'   => 'We clear vegetation, excavate to proper depth (usually 6 to 10 inches), grade the subgrade for drainage, compact the soil, install geotextile fabric where needed, then lay base rock in lifts with compaction between each layer.',
    ],
    [
        'question' => 'Do you provide driveway services in Gresham, Sandy, and Happy Valley?',
        'answer'   => 'Yes. We serve the entire east Portland Metro corridor including Damascus, Gresham, Sandy, Boring, Happy Valley, and Clackamas. Travel charges may apply for jobs beyond our standard service radius.',
    ],
    [
        'question' => 'How often does a gravel driveway need maintenance?',
        'answer'   => 'A properly installed gravel driveway needs a top-dress of fresh gravel every 2 to 3 years and occasional regrading after heavy winters. We offer maintenance packages and can schedule seasonal touch-ups.',
    ],
];

/* ── Schema Markup ──────────────────────────────────────────── */
$schemaMarkup  = generateServiceSchema($service);
$schemaMarkup .= generateFAQSchema($faqs);
$schemaMarkup .= generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Driveway Services', 'url' => '/services/driveway-services/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     DRIVEWAY SERVICES — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── 1. HERO ────────────────────────────────────────────────── */
.hero--driveway {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($heroPhoto); ?>');
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.hero--driveway::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(0,0,0,0.92) 0%, rgba(0,0,0,0.7) 40%, rgba(77,94,111,0.5) 100%);
  z-index: 1;
}
.hero--driveway::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--driveway > * { position: relative; z-index: 2; }
.hero--driveway .container { max-width: var(--max-width); }
.hero--driveway .hero-eyebrow {
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
.hero--driveway .hero-eyebrow i,
.hero--driveway .hero-eyebrow svg { width: 16px; height: 16px; }
.hero--driveway h1 {
  color: var(--color-white);
  max-width: 720px;
  margin-bottom: var(--space-4);
}
.hero--driveway h1 .text-accent { color: var(--color-accent); }
.hero--driveway .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 620px;
  margin-bottom: var(--space-6);
}
.hero--driveway .hero-cta-row {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero--driveway .trust-row {
  display: flex;
  gap: var(--space-6);
  flex-wrap: wrap;
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255,255,255,0.12);
}
.hero--driveway .trust-row-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255,255,255,0.8);
}
.hero--driveway .trust-row-item i,
.hero--driveway .trust-row-item svg { width: 18px; height: 18px; color: var(--color-accent); }
.hero--driveway .breadcrumb {
  display: flex;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  margin-bottom: var(--space-4);
}
.hero--driveway .breadcrumb a { color: rgba(255,255,255,0.7); }
.hero--driveway .breadcrumb a:hover { color: var(--color-accent); }
.hero--driveway .breadcrumb-sep { color: rgba(255,255,255,0.35); }

/* ── 2. PROBLEM STATEMENT ───────────────────────────────────── */
.driveway-problem {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.driveway-problem .pull-quote {
  font-family: var(--font-heading);
  font-size: clamp(1.35rem, 2.5vw, 1.75rem);
  font-weight: 700;
  line-height: 1.4;
  color: var(--color-dark);
  max-width: 700px;
  margin-bottom: var(--space-10);
  position: relative;
  padding-left: var(--space-6);
  border-left: 4px solid var(--color-accent);
}
.driveway-problem .bento-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
}
.driveway-problem .bento-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.driveway-problem .bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.driveway-problem .bento-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: var(--color-accent);
  opacity: 0;
  transition: opacity var(--transition-base);
}
.driveway-problem .bento-card:hover::before { opacity: 1; }
.driveway-problem .bento-card-icon {
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
.driveway-problem .bento-card-icon i,
.driveway-problem .bento-card-icon svg { width: 24px; height: 24px; }
.driveway-problem .bento-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.driveway-problem .bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.driveway-problem .float-accent {
  position: absolute;
  width: 320px;
  height: 320px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
  top: -100px;
  right: -80px;
  z-index: 0;
  animation: float-drift 12s ease-in-out infinite;
}

/* ── 3. EXPERT POSITIONING ──────────────────────────────────── */
.driveway-expert {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-bg);
}
.driveway-expert .grid-asym {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-10);
  align-items: center;
}
.driveway-expert .stat-hero {
  text-align: center;
  padding: var(--space-10);
  background: var(--color-dark);
  border-radius: var(--radius-xl);
  position: relative;
  overflow: hidden;
}
.driveway-expert .stat-hero::after {
  content: '';
  position: absolute;
  bottom: -40px;
  right: -40px;
  width: 160px;
  height: 160px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.08;
}
.driveway-expert .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.driveway-expert .stat-label {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-lg);
  font-weight: 600;
}
.driveway-expert .expert-content h2 {
  margin-bottom: var(--space-4);
}
.driveway-expert .expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.75;
  margin-bottom: var(--space-6);
  max-width: var(--content-width);
}
.driveway-expert .diff-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.driveway-expert .diff-item {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.driveway-expert .diff-icon {
  flex-shrink: 0;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.driveway-expert .diff-icon i,
.driveway-expert .diff-icon svg { width: 18px; height: 18px; }
.driveway-expert .diff-text strong { display: block; color: var(--color-dark); margin-bottom: 2px; }
.driveway-expert .diff-text span { font-size: var(--font-size-sm); color: var(--color-text-light); }

/* ── 4. SERVICE BREAKDOWN ───────────────────────────────────── */
.driveway-breakdown {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-bg-alt);
  overflow: hidden;
}
.driveway-breakdown .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.driveway-breakdown .section-title .answer-block {
  max-width: 640px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
  line-height: 1.7;
}
.driveway-breakdown .split-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  align-items: start;
}
.driveway-breakdown .includes-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.driveway-breakdown .includes-list li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-3) var(--space-4);
  background: var(--color-bg);
  border-radius: var(--radius-md);
  font-weight: 500;
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-fast);
}
.driveway-breakdown .includes-list li:hover { transform: translateX(4px); }
.driveway-breakdown .includes-list li i,
.driveway-breakdown .includes-list li svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.driveway-breakdown .timeline {
  position: relative;
  padding-left: var(--space-8);
}
.driveway-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 14px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-secondary));
}
.driveway-breakdown .timeline-step {
  position: relative;
  margin-bottom: var(--space-6);
  padding-left: var(--space-4);
}
.driveway-breakdown .timeline-step::before {
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
.driveway-breakdown .timeline-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-1);
}
.driveway-breakdown .timeline-step .step-meta {
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 600;
  margin-bottom: var(--space-1);
}
.driveway-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* Divider: wave between sections */
.divider-slant--top {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-slant--top svg { display: block; width: 100%; height: auto; }
.divider-curve--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  transform: rotate(180deg);
}
.divider-curve--bottom svg { display: block; width: 100%; height: auto; }

/* ── 5. PROOF / REVIEWS ─────────────────────────────────────── */
.driveway-reviews {
  padding: var(--space-16) 0;
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.driveway-reviews .section-title { text-align: center; margin-bottom: var(--space-10); }
.driveway-reviews .section-title h2 { color: var(--color-white); }
.driveway-reviews .section-title .answer-block {
  color: rgba(255,255,255,0.7);
  max-width: 600px;
  margin: var(--space-3) auto 0;
}
.driveway-reviews .reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.driveway-reviews .review-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.driveway-reviews .review-card:hover {
  transform: translateY(-4px);
  border-color: rgba(var(--color-accent-rgb), 0.3);
}
.driveway-reviews .review-stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-3);
  color: var(--color-star);
}
.driveway-reviews .review-stars i,
.driveway-reviews .review-stars svg { width: 16px; height: 16px; }
.driveway-reviews .review-text {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  font-style: italic;
}
.driveway-reviews .review-author {
  font-weight: 700;
  color: var(--color-white);
  font-size: var(--font-size-sm);
}
.driveway-reviews .review-meta {
  color: rgba(255,255,255,0.5);
  font-size: var(--font-size-xs);
}
.driveway-reviews .float-accent-2 {
  position: absolute;
  width: 260px;
  height: 260px;
  border-radius: 50%;
  background: var(--color-secondary);
  opacity: 0.06;
  bottom: -60px;
  left: -60px;
  animation: float-drift 14s ease-in-out infinite reverse;
}

/* ── 6. COMPARISON TABLE ────────────────────────────────────── */
.driveway-compare {
  padding: var(--space-16) 0;
  background: var(--color-bg);
  position: relative;
}
.driveway-compare .section-title { text-align: center; margin-bottom: var(--space-10); }
.driveway-compare .section-title .answer-block {
  max-width: 620px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
}
.driveway-compare .compare-table {
  max-width: 860px;
  margin: 0 auto;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.driveway-compare .compare-header {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.driveway-compare .compare-header-cell {
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-lg);
  text-align: center;
}
.driveway-compare .compare-header-cell:first-child {
  background: var(--color-gray-light);
  color: var(--color-gray-dark);
}
.driveway-compare .compare-header-cell:last-child {
  background: var(--color-dark);
  color: var(--color-white);
}
.driveway-compare .compare-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border-bottom: 1px solid var(--color-border);
}
.driveway-compare .compare-row:last-child { border-bottom: none; }
.driveway-compare .compare-cell {
  padding: var(--space-3) var(--space-6);
  font-size: var(--font-size-sm);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.driveway-compare .compare-cell:first-child {
  background: rgba(var(--color-secondary-rgb), 0.04);
  color: var(--color-gray);
}
.driveway-compare .compare-cell:last-child {
  background: var(--color-bg);
  color: var(--color-dark);
  font-weight: 600;
}
.driveway-compare .compare-cell i,
.driveway-compare .compare-cell svg { width: 16px; height: 16px; flex-shrink: 0; }
.driveway-compare .compare-cell .icon-x { color: var(--color-danger); }
.driveway-compare .compare-cell .icon-check { color: var(--color-success); }

/* ── 7. FAQ ACCORDION ───────────────────────────────────────── */
.driveway-faq {
  padding: var(--space-16) 0;
  background: var(--color-bg-alt);
  position: relative;
}
.driveway-faq .section-title { text-align: center; margin-bottom: var(--space-10); }
.driveway-faq .section-title .answer-block {
  max-width: 620px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
}
.driveway-faq .faq-list {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.driveway-faq .faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.driveway-faq .faq-item:hover { box-shadow: var(--shadow-md); }
.driveway-faq .faq-question {
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
.driveway-faq .faq-question:focus-visible {
  outline: 3px solid var(--color-accent);
  outline-offset: -3px;
  border-radius: var(--radius-md);
}
.driveway-faq .faq-question i,
.driveway-faq .faq-question svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.driveway-faq .faq-item.active .faq-question svg,
.driveway-faq .faq-item.active .faq-question i {
  transform: rotate(45deg);
}
.driveway-faq .faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.driveway-faq .faq-item.active .faq-answer { max-height: 400px; }
.driveway-faq .faq-answer-inner {
  padding: 0 var(--space-6) var(--space-5);
  color: var(--color-text-light);
  line-height: 1.75;
  font-size: var(--font-size-sm);
}

/* ── 8. FINAL CTA ───────────────────────────────────────────── */
.driveway-cta-final {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-dark);
  text-align: center;
  overflow: hidden;
}
.driveway-cta-final::before {
  content: '';
  position: absolute;
  top: -100px;
  left: 50%;
  transform: translateX(-50%);
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.05;
}
.driveway-cta-final h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.driveway-cta-final .answer-block {
  color: rgba(255,255,255,0.8);
  max-width: 580px;
  margin: 0 auto var(--space-6);
  line-height: 1.7;
}
.driveway-cta-final .cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RELATED SERVICES ───────────────────────────────────────── */
.driveway-related {
  padding: var(--space-16) 0;
  background: var(--color-bg);
}
.driveway-related .section-title { text-align: center; margin-bottom: var(--space-10); }

/* ── Inline Image Block ─────────────────────────────────────── */
.driveway-img-block {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 16 / 9;
}
.driveway-img-block img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* ── Keyframes ──────────────────────────────────────────────── */
@keyframes float-drift {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-18px) rotate(2deg); }
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
  .driveway-problem .bento-grid { grid-template-columns: repeat(2, 1fr); }
  .driveway-expert .grid-asym { grid-template-columns: 1fr; gap: var(--space-8); }
  .driveway-breakdown .split-content { grid-template-columns: 1fr; }
  .driveway-reviews .reviews-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .hero--driveway { min-height: 55vh; padding-top: calc(var(--nav-height) + var(--space-10)); }
  .hero--driveway .trust-row { gap: var(--space-4); }
  .driveway-problem .bento-grid { grid-template-columns: 1fr; }
  .driveway-compare .compare-header-cell { font-size: var(--font-size-base); padding: var(--space-3) var(--space-4); }
  .driveway-compare .compare-cell { padding: var(--space-2) var(--space-4); font-size: var(--font-size-xs); }
  .driveway-cta-final .cta-row { flex-direction: column; align-items: center; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--driveway">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Driveway Services</span>
    </nav>
    <span class="hero-eyebrow"><i data-lucide="truck"></i> Driveway Services</span>
    <h1>Professional <span class="text-accent">Driveway Installation</span> &amp; Gravel Services in Damascus, OR</h1>
    <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon contractor based in Damascus, building and repairing gravel driveways across the Portland Metro Area since 2022. We handle excavation, grading, base rock, drainage, and finish gravel — one crew, one call, from bare dirt to a finished drive.</p>
    <div class="hero-cta-row">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Driveway Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
    <div class="trust-row">
      <span class="trust-row-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="trust-row-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      <span class="trust-row-item"><i data-lucide="truck"></i> Own Equipment</span>
      <span class="trust-row-item"><i data-lucide="users"></i> Family-Owned</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="driveway-problem" aria-label="Common driveway problems">
  <div class="float-accent"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="pull-quote reveal-up">
      Oregon's rain-soaked winters and freeze-thaw cycles destroy driveways that weren't built with proper drainage and compacted base rock. Most driveway failures in Damascus start underground.
    </div>

    <h2 class="reveal-up" style="margin-bottom:var(--space-3);">What are the <span class="text-accent">warning signs</span> your Damascus driveway needs work?</h2>
    <p class="answer-block reveal-up" style="margin-bottom:var(--space-8);max-width:650px;">Potholes, standing water, rutting, and exposed subsoil are the four most common signs that a driveway needs professional grading, drainage correction, or a full rebuild with proper base layers.</p>

    <div class="bento-grid">
      <div class="bento-card reveal-up reveal-delay-1">
        <div class="bento-card-icon"><i data-lucide="droplets"></i></div>
        <h3>Standing Water &amp; Puddles</h3>
        <p>Water pooling after rain means the grade has settled or was never crowned properly. Leads to soft spots and accelerated erosion.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-2">
        <div class="bento-card-icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Deep Ruts &amp; Potholes</h3>
        <p>Heavy vehicles compress poorly compacted base rock. Without re-grading, ruts deepen every season and trap more water.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-3">
        <div class="bento-card-icon"><i data-lucide="layers"></i></div>
        <h3>Exposed Subsoil</h3>
        <p>When gravel migrates off the driving surface, clay subsoil is exposed. This creates mud in winter and dust clouds in summer.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-4">
        <div class="bento-card-icon"><i data-lucide="mountain"></i></div>
        <h3>Erosion at Edges</h3>
        <p>Gravel washing into ditches or yards means the driveway lacks proper edge containment or the drainage plan failed.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="driveway-expert" aria-label="Why choose Workhorse">
  <div class="container">
    <div class="grid-asym">
      <div class="stat-hero reveal-scale">
        <div class="stat-number" data-target="200">200+</div>
        <div class="stat-label">Driveways Installed Across Clackamas County</div>
      </div>
      <div class="expert-content">
        <span class="eyebrow-label reveal-up">Our Approach</span>
        <h2 class="reveal-up">Why do Damascus property owners choose <span class="text-accent">Workhorse</span> for driveway work?</h2>
        <p class="answer-block reveal-up">We own our excavators, dump trucks, and compaction equipment — no rental markups, no subcontractor delays. Every driveway we build starts with proper excavation, geotextile fabric on soft soils, and compacted base rock laid in lifts.</p>

        <ul class="diff-list">
          <li class="diff-item reveal-left reveal-delay-1">
            <div class="diff-icon"><i data-lucide="truck"></i></div>
            <div class="diff-text">
              <strong>Own Fleet, No Middlemen</strong>
              <span>Our equipment rolls out of our Damascus yard — no rental delays, no inflated equipment fees.</span>
            </div>
          </li>
          <li class="diff-item reveal-left reveal-delay-2">
            <div class="diff-icon"><i data-lucide="droplets"></i></div>
            <div class="diff-text">
              <strong>Drainage-First Design</strong>
              <span>Every driveway is crowned or side-sloped for positive drainage. We install culverts and French drains where Clackamas County soil demands it.</span>
            </div>
          </li>
          <li class="diff-item reveal-left reveal-delay-3">
            <div class="diff-icon"><i data-lucide="layers"></i></div>
            <div class="diff-text">
              <strong>Engineered Base Layers</strong>
              <span>We compact base rock in 3-inch lifts with a plate compactor or roller — not just dumped and spread.</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="driveway-breakdown" aria-label="What's included">
  <div class="divider-slant--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C480,0 960,0 1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Service Details</span>
      <h2 class="reveal-up">What does a professional <span class="text-accent">driveway installation</span> include?</h2>
      <p class="answer-block reveal-up">A full driveway build from Workhorse covers site clearing, excavation to depth, subgrade compaction, geotextile fabric installation, base rock in compacted lifts, finish gravel, and crown grading for drainage — typically completed in 1 to 3 days.</p>
    </div>

    <div class="split-content">
      <div>
        <h3 class="reveal-up" style="margin-bottom:var(--space-4);">Included in Every Driveway Project</h3>
        <ul class="includes-list">
          <li class="reveal-right reveal-delay-1"><i data-lucide="check"></i> Vegetation clearing and debris removal</li>
          <li class="reveal-right reveal-delay-1"><i data-lucide="check"></i> Excavation to engineered depth (6-10")</li>
          <li class="reveal-right reveal-delay-2"><i data-lucide="check"></i> Subgrade compaction and grading</li>
          <li class="reveal-right reveal-delay-2"><i data-lucide="check"></i> Geotextile fabric on soft or clay soils</li>
          <li class="reveal-right reveal-delay-3"><i data-lucide="check"></i> 3/4" minus base rock in compacted lifts</li>
          <li class="reveal-right reveal-delay-3"><i data-lucide="check"></i> Finish gravel with crown grading</li>
          <li class="reveal-right reveal-delay-4"><i data-lucide="check"></i> Culvert or French drain installation</li>
          <li class="reveal-right reveal-delay-4"><i data-lucide="check"></i> Final site cleanup and walkthrough</li>
        </ul>

        <div class="driveway-img-block reveal-up" style="margin-top:var(--space-6);">
          <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Gravel driveway installation in progress in Damascus, OR" width="800" height="450" loading="lazy">
        </div>
      </div>

      <div>
        <h3 class="reveal-up" style="margin-bottom:var(--space-4);">Our Process: Step by Step</h3>
        <div class="timeline">
          <div class="timeline-step reveal-up reveal-delay-1">
            <div class="step-meta">Step 1 &mdash; Day 1</div>
            <h3>Site Assessment &amp; Marking</h3>
            <p>We survey the property, mark the driveway footprint, identify drainage paths, and confirm utility locations before any equipment rolls.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-2">
            <div class="step-meta">Step 2 &mdash; Day 1</div>
            <h3>Excavation &amp; Subgrade Prep</h3>
            <p>Our excavator removes topsoil, vegetation, and soft material to design depth. The subgrade is compacted with a vibratory roller for a stable foundation.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-3">
            <div class="step-meta">Step 3 &mdash; Day 1-2</div>
            <h3>Base Rock &amp; Compaction</h3>
            <p>We lay 3/4-inch minus base rock in 3-inch lifts, compacting each lift before adding the next. Geotextile fabric goes down first on clay soils near Boring and Damascus.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-4">
            <div class="step-meta">Step 4 &mdash; Day 2-3</div>
            <h3>Finish Gravel &amp; Drainage</h3>
            <p>Surface gravel is spread and crowned for positive drainage. Culverts, ditches, or French drains are installed where water management requires them.</p>
          </div>
          <div class="timeline-step reveal-up">
            <div class="step-meta">Step 5 &mdash; Final Day</div>
            <h3>Walkthrough &amp; Cleanup</h3>
            <p>We walk the finished driveway with you, verify drainage flow, clean all equipment tracks from your yard, and haul out every piece of debris.</p>
          </div>
        </div>

        <div class="driveway-img-block reveal-up" style="margin-top:var(--space-6);">
          <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Completed gravel driveway with drainage in Damascus, Oregon" width="800" height="450" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="driveway-reviews" aria-label="Customer reviews">
  <div class="float-accent-2"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="section-title">
      <span class="eyebrow-label reveal-up" style="color:var(--color-accent);">Customer Reviews</span>
      <h2 class="reveal-up">What do Damascus homeowners say about our <span class="text-accent">driveway work</span>?</h2>
      <p class="answer-block reveal-up">Our driveway clients consistently rate us 5 stars for clear communication, clean job sites, and driveways that hold up through Oregon's worst weather.</p>
    </div>

    <div class="reviews-grid">
      <div class="review-card reveal-up reveal-delay-1">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"Our old driveway was a mud pit every winter. Workhorse dug it out, put in proper base rock, and graded it so water drains to the ditch instead of pooling. Two rainy seasons later and it still looks great."</p>
        <p class="review-author">Mike T.</p>
        <p class="review-meta">Damascus, OR &mdash; 180-ft Gravel Driveway</p>
      </div>
      <div class="review-card reveal-up reveal-delay-2">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"I needed a turnaround added and the existing driveway regraded. They matched the new section perfectly to the old gravel, installed a culvert at the road edge, and cleaned up the same day. Fair price, fast work."</p>
        <p class="review-author">Jennifer S.</p>
        <p class="review-meta">Boring, OR &mdash; Driveway Extension + Culvert</p>
      </div>
      <div class="review-card reveal-up reveal-delay-3">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"Commercial property off SE Foster — they built a 400-foot gravel access road for our equipment yard in under a week. The compaction is solid enough for loaded dump trucks. Exactly what we needed."</p>
        <p class="review-author">Dave R.</p>
        <p class="review-meta">Happy Valley, OR &mdash; Commercial Access Road</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON
     ═══════════════════════════════════════════════════════ -->
<section class="driveway-compare" aria-label="Why Workhorse">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">The Difference</span>
      <h2 class="reveal-up">How does Workhorse compare to other <span class="text-accent">driveway contractors</span>?</h2>
      <p class="answer-block reveal-up">Many driveway contractors dump gravel on bare soil and call it done. We excavate, compact, layer, and grade — because shortcuts wash out after the first Oregon winter.</p>
    </div>

    <div class="compare-table reveal-up">
      <div class="compare-header">
        <div class="compare-header-cell">Other Contractors</div>
        <div class="compare-header-cell">Workhorse Site Solutions</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Gravel dumped on bare soil</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Excavated and compacted base</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> No drainage planning</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Crown grading + culverts</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Rented equipment, scheduling delays</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Own fleet, same-week starts</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Subcontracted labor</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> In-house crew on every job</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> No geotextile on clay soils</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Fabric installed where needed</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Debris left behind</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Full cleanup, every job</div>
      </div>
    </div>

    <div class="driveway-img-block reveal-up" style="max-width:860px;margin:var(--space-8) auto 0;">
      <img src="<?php echo htmlspecialchars($bodyPhoto3); ?>" alt="Workhorse crew finishing driveway grading near Damascus, Oregon" width="800" height="450" loading="lazy">
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="driveway-faq" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">FAQ</span>
      <h2 class="reveal-up">What should you know about <span class="text-accent">driveway services</span> near me in Damascus?</h2>
      <p class="answer-block reveal-up">Answers to the driveway questions we hear most from homeowners and contractors in Damascus, Gresham, Sandy, and the surrounding Portland Metro communities.</p>
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
<section class="driveway-cta-final" aria-label="Get started">
  <div class="divider-slant--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg-alt)">
      <path d="M0,0 L1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container" style="position:relative;z-index:1;">
    <span class="eyebrow-label reveal-up" style="color:var(--color-accent);">Start Your Project</span>
    <h2 class="reveal-up">Ready for a driveway that handles <span class="text-accent">Oregon weather</span>?</h2>
    <p class="answer-block reveal-up">Every driveway estimate is free, detailed, and delivered within 24 hours. Tell us the length, terrain, and timeline — we'll handle the rest from our Damascus home base.</p>
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
<section class="driveway-related" aria-label="Related services">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">More From Workhorse</span>
      <h2 class="reveal-up">Other Services <span class="text-accent">You May Need</span></h2>
    </div>

    <div class="services-grid">
      <?php
      $related = getRelatedServices('driveway-services', 3);
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

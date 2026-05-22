<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('commercial-residential-cleanup');
$pageTitle       = 'Commercial & Residential Cleanup Services | ' . $siteName . ' | Damascus, OR';
$pageDescription = 'Professional property cleanup for commercial and residential sites in Damascus, OR. Post-construction debris, estate cleanouts, lot clearing, and bulk hauling — Workhorse Site Solutions. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/commercial-residential-cleanup/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396375954-kc1dx4-481899092_608065538884100_6123232012629192040_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '7';

/* ── Photo Map ──────────────────────────────────────────────── */
$photoBase   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto   = $photoBase . '1779396375954-kc1dx4-481899092_608065538884100_6123232012629192040_n.jpg';
$bodyPhoto1  = $photoBase . '1779396655531-iclgqo-482278758_609049342119053_2665136311179304740_n.jpg';
$bodyPhoto2  = $photoBase . '1779396660431-3x1oa0-482282172_609052812118706_8037945693727336864_n.jpg';
$bodyPhoto3  = $photoBase . '1779396668023-8xwq2q-482346668_609525702071417_1646037453176965500_n.jpg';

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
        'question' => 'How much does commercial property cleanup cost in Damascus, OR?',
        'answer'   => 'Commercial cleanup projects typically run $1,200 to $8,000+ depending on lot size, debris volume, and equipment needed. A standard post-construction cleanup on a half-acre commercial lot runs $2,500 to $4,500. We provide exact quotes after a site walkthrough.',
    ],
    [
        'question' => 'What is the difference between cleanup and junk removal?',
        'answer'   => 'Junk removal focuses on hauling specific items — furniture, appliances, household goods. Property cleanup is broader: we clear entire lots, remove construction debris, grade disturbed soil, haul bulk materials, and leave the site ready for its next use.',
    ],
    [
        'question' => 'Do you handle post-construction cleanup for builders in the Portland Metro Area?',
        'answer'   => 'Yes. We partner with builders, remodelers, and general contractors across Damascus, Gresham, Happy Valley, Sandy, and Boring. We clear lumber scraps, drywall waste, packaging, concrete chunks, and grade disturbed areas after construction wraps.',
    ],
    [
        'question' => 'Can you clean up a property after a tenant moves out?',
        'answer'   => 'Absolutely. We handle residential and commercial tenant cleanouts — removing abandoned furniture, appliances, trash, yard debris, and any items left behind. We dispose of everything legally and can coordinate with property managers on scheduling.',
    ],
    [
        'question' => 'How fast can you start a cleanup project?',
        'answer'   => 'Most residential cleanups start within 2 to 3 days of the estimate. Emergency or time-sensitive cleanups — foreclosure properties, pre-inspection, fire damage — can often begin same-day or next-day depending on equipment availability.',
    ],
    [
        'question' => 'Do you recycle or donate usable materials?',
        'answer'   => 'When possible, yes. We separate recyclable metals, concrete, and clean wood from landfill waste. Usable items in good condition are directed to local donation centers. We track disposal receipts for clients who need documentation.',
    ],
    [
        'question' => 'What areas do you serve for property cleanup services?',
        'answer'   => 'We serve the entire east Portland Metro corridor: Damascus, Gresham, Happy Valley, Sandy, Boring, Clackamas, Oregon City, and surrounding communities. Travel fees may apply for locations beyond our standard service area.',
    ],
    [
        'question' => 'Can you handle hazardous materials during a cleanup?',
        'answer'   => 'We handle standard construction debris, vegetation, furniture, and bulk waste. Hazardous materials like asbestos, lead paint, or chemical contaminants require licensed hazmat contractors. We can coordinate referrals if hazmat is identified on your site.',
    ],
];

/* ── Schema Markup ──────────────────────────────────────────── */
$schemaMarkup  = generateServiceSchema($service);
$schemaMarkup .= generateFAQSchema($faqs);
$schemaMarkup .= generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Commercial & Residential Cleanup', 'url' => '/services/commercial-residential-cleanup/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     COMMERCIAL & RESIDENTIAL CLEANUP — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── 1. HERO ────────────────────────────────────────────────── */
.hero--cleanup {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($heroPhoto); ?>');
  background-size: cover;
  background-position: center 30%;
  overflow: hidden;
}
.hero--cleanup::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(0,0,0,0.93) 0%, rgba(0,0,0,0.7) 45%, rgba(77,94,111,0.5) 100%);
  z-index: 1;
}
.hero--cleanup::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--cleanup > * { position: relative; z-index: 2; }
.hero--cleanup .container { max-width: var(--max-width); }
.hero--cleanup .hero-eyebrow {
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
.hero--cleanup .hero-eyebrow i,
.hero--cleanup .hero-eyebrow svg { width: 16px; height: 16px; }
.hero--cleanup h1 {
  color: var(--color-white);
  max-width: 760px;
  margin-bottom: var(--space-4);
}
.hero--cleanup h1 .text-accent { color: var(--color-accent); }
.hero--cleanup .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin-bottom: var(--space-6);
}
.hero--cleanup .hero-cta-row {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero--cleanup .trust-row {
  display: flex;
  gap: var(--space-6);
  flex-wrap: wrap;
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255,255,255,0.12);
}
.hero--cleanup .trust-row-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: rgba(255,255,255,0.8);
}
.hero--cleanup .trust-row-item i,
.hero--cleanup .trust-row-item svg { width: 18px; height: 18px; color: var(--color-accent); }
.hero--cleanup .breadcrumb {
  display: flex;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  margin-bottom: var(--space-4);
}
.hero--cleanup .breadcrumb a { color: rgba(255,255,255,0.7); }
.hero--cleanup .breadcrumb a:hover { color: var(--color-accent); }
.hero--cleanup .breadcrumb-sep { color: rgba(255,255,255,0.35); }

/* ── 2. PROBLEM STATEMENT ───────────────────────────────────── */
.cleanup-problem {
  position: relative;
  background: var(--color-bg-alt);
  padding: var(--space-16) 0;
  overflow: hidden;
}
.cleanup-problem .pull-quote {
  font-family: var(--font-heading);
  font-size: clamp(1.3rem, 2.4vw, 1.7rem);
  font-weight: 700;
  line-height: 1.45;
  color: var(--color-dark);
  max-width: 700px;
  margin-bottom: var(--space-10);
  position: relative;
  padding-left: var(--space-6);
  border-left: 4px solid var(--color-accent);
}
.cleanup-problem .bento-grid {
  display: grid;
  grid-template-columns: 1.3fr repeat(2, 1fr);
  gap: var(--space-4);
}
.cleanup-problem .bento-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  position: relative;
  overflow: hidden;
}
.cleanup-problem .bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.cleanup-problem .bento-card::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 4px;
  background: var(--color-accent);
  opacity: 0;
  transition: opacity var(--transition-base);
}
.cleanup-problem .bento-card:hover::before { opacity: 1; }
.cleanup-problem .bento-card-icon {
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
.cleanup-problem .bento-card-icon i,
.cleanup-problem .bento-card-icon svg { width: 24px; height: 24px; }
.cleanup-problem .bento-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.cleanup-problem .bento-card p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.cleanup-problem .bento-card--tall {
  grid-row: span 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.cleanup-problem .float-accent {
  position: absolute;
  width: 350px;
  height: 350px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
  bottom: -100px;
  right: -100px;
  z-index: 0;
  animation: cleanup-float 12s ease-in-out infinite;
}

/* ── 3. EXPERT POSITIONING ──────────────────────────────────── */
.cleanup-expert {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-bg);
}
.cleanup-expert .grid-asym {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: var(--space-10);
  align-items: center;
}
.cleanup-expert .visual-block {
  position: relative;
}
.cleanup-expert .visual-block .img-primary {
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.cleanup-expert .visual-block .img-primary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  aspect-ratio: 4 / 3;
}
.cleanup-expert .stat-badge {
  position: absolute;
  bottom: -20px;
  right: -20px;
  background: var(--color-dark);
  border-radius: var(--radius-lg);
  padding: var(--space-4) var(--space-6);
  text-align: center;
  box-shadow: var(--shadow-xl);
  z-index: 2;
}
.cleanup-expert .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-1);
}
.cleanup-expert .stat-label {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.cleanup-expert .expert-content h2 { margin-bottom: var(--space-4); }
.cleanup-expert .expert-content .answer-block {
  color: var(--color-text-light);
  line-height: 1.75;
  margin-bottom: var(--space-6);
  max-width: var(--content-width);
}
.cleanup-expert .diff-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.cleanup-expert .diff-item {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.cleanup-expert .diff-icon {
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
.cleanup-expert .diff-icon i,
.cleanup-expert .diff-icon svg { width: 20px; height: 20px; }
.cleanup-expert .diff-text strong { display: block; color: var(--color-dark); margin-bottom: 2px; }
.cleanup-expert .diff-text span { font-size: var(--font-size-sm); color: var(--color-text-light); }

/* ── 4. SERVICE BREAKDOWN ───────────────────────────────────── */
.cleanup-breakdown {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-bg-alt);
  overflow: hidden;
}
.cleanup-breakdown .section-title {
  text-align: center;
  margin-bottom: var(--space-10);
}
.cleanup-breakdown .section-title .answer-block {
  max-width: 660px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
  line-height: 1.7;
}
.cleanup-breakdown .two-col {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-8);
  align-items: start;
}
.cleanup-breakdown .service-types {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.cleanup-breakdown .type-card {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  padding: var(--space-4);
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
}
.cleanup-breakdown .type-card:hover {
  transform: translateX(4px);
  box-shadow: var(--shadow-md);
}
.cleanup-breakdown .type-card-icon {
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
.cleanup-breakdown .type-card-icon i,
.cleanup-breakdown .type-card-icon svg { width: 18px; height: 18px; }
.cleanup-breakdown .type-card strong {
  display: block;
  margin-bottom: 2px;
  color: var(--color-dark);
  font-size: var(--font-size-base);
}
.cleanup-breakdown .type-card span {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.55;
}
.cleanup-breakdown .timeline {
  position: relative;
  padding-left: var(--space-8);
}
.cleanup-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 14px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-secondary));
}
.cleanup-breakdown .timeline-step {
  position: relative;
  margin-bottom: var(--space-6);
  padding-left: var(--space-4);
}
.cleanup-breakdown .timeline-step::before {
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
.cleanup-breakdown .timeline-step h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-1);
}
.cleanup-breakdown .timeline-step .step-meta {
  font-size: var(--font-size-sm);
  color: var(--color-accent);
  font-weight: 600;
  margin-bottom: var(--space-1);
}
.cleanup-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* Dividers */
.cleanup-divider--curve {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.cleanup-divider--curve svg { display: block; width: 100%; height: auto; }
.cleanup-divider--angle {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.cleanup-divider--angle svg { display: block; width: 100%; height: auto; }

/* ── 5. PROOF / REVIEWS ─────────────────────────────────────── */
.cleanup-reviews {
  padding: var(--space-16) 0;
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.cleanup-reviews .section-title { text-align: center; margin-bottom: var(--space-10); }
.cleanup-reviews .section-title h2 { color: var(--color-white); }
.cleanup-reviews .section-title .answer-block {
  color: rgba(255,255,255,0.7);
  max-width: 600px;
  margin: var(--space-3) auto 0;
}
.cleanup-reviews .reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.cleanup-reviews .review-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.cleanup-reviews .review-card:hover {
  transform: translateY(-4px);
  border-color: rgba(var(--color-accent-rgb), 0.3);
}
.cleanup-reviews .review-stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-3);
  color: var(--color-star);
}
.cleanup-reviews .review-stars i,
.cleanup-reviews .review-stars svg { width: 16px; height: 16px; }
.cleanup-reviews .review-text {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  font-style: italic;
}
.cleanup-reviews .review-author {
  font-weight: 700;
  color: var(--color-white);
  font-size: var(--font-size-sm);
}
.cleanup-reviews .review-meta {
  color: rgba(255,255,255,0.5);
  font-size: var(--font-size-xs);
}
.cleanup-reviews .float-blob {
  position: absolute;
  width: 280px;
  height: 280px;
  border-radius: 50%;
  background: var(--color-secondary);
  opacity: 0.05;
  top: -60px;
  left: -60px;
  animation: cleanup-float 15s ease-in-out infinite reverse;
}

/* ── 6. COMPARISON TABLE ────────────────────────────────────── */
.cleanup-compare {
  padding: var(--space-16) 0;
  background: var(--color-bg);
  position: relative;
}
.cleanup-compare .section-title { text-align: center; margin-bottom: var(--space-10); }
.cleanup-compare .section-title .answer-block {
  max-width: 640px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
}
.cleanup-compare .compare-table {
  max-width: 860px;
  margin: 0 auto;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.cleanup-compare .compare-header {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.cleanup-compare .compare-header-cell {
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-lg);
  text-align: center;
}
.cleanup-compare .compare-header-cell:first-child {
  background: var(--color-gray-light);
  color: var(--color-gray-dark);
}
.cleanup-compare .compare-header-cell:last-child {
  background: var(--color-dark);
  color: var(--color-white);
}
.cleanup-compare .compare-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border-bottom: 1px solid var(--color-border);
}
.cleanup-compare .compare-row:last-child { border-bottom: none; }
.cleanup-compare .compare-cell {
  padding: var(--space-3) var(--space-6);
  font-size: var(--font-size-sm);
  display: flex;
  align-items: center;
  gap: var(--space-2);
}
.cleanup-compare .compare-cell:first-child {
  background: rgba(var(--color-secondary-rgb), 0.04);
  color: var(--color-gray);
}
.cleanup-compare .compare-cell:last-child {
  background: var(--color-bg);
  color: var(--color-dark);
  font-weight: 600;
}
.cleanup-compare .compare-cell i,
.cleanup-compare .compare-cell svg { width: 16px; height: 16px; flex-shrink: 0; }
.cleanup-compare .compare-cell .icon-x { color: var(--color-danger); }
.cleanup-compare .compare-cell .icon-check { color: var(--color-success); }

/* ── 7. FAQ ACCORDION ───────────────────────────────────────── */
.cleanup-faq {
  padding: var(--space-16) 0;
  background: var(--color-bg-alt);
  position: relative;
}
.cleanup-faq .section-title { text-align: center; margin-bottom: var(--space-10); }
.cleanup-faq .section-title .answer-block {
  max-width: 640px;
  margin: var(--space-3) auto 0;
  color: var(--color-text-light);
}
.cleanup-faq .faq-list {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.cleanup-faq .faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  overflow: hidden;
  transition: box-shadow var(--transition-base);
}
.cleanup-faq .faq-item:hover { box-shadow: var(--shadow-md); }
.cleanup-faq .faq-question {
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
.cleanup-faq .faq-question:focus-visible {
  outline: 3px solid var(--color-accent);
  outline-offset: -3px;
  border-radius: var(--radius-md);
}
.cleanup-faq .faq-question i,
.cleanup-faq .faq-question svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.cleanup-faq .faq-item.active .faq-question svg,
.cleanup-faq .faq-item.active .faq-question i {
  transform: rotate(45deg);
}
.cleanup-faq .faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.cleanup-faq .faq-item.active .faq-answer { max-height: 400px; }
.cleanup-faq .faq-answer-inner {
  padding: 0 var(--space-6) var(--space-5);
  color: var(--color-text-light);
  line-height: 1.75;
  font-size: var(--font-size-sm);
}

/* ── 8. FINAL CTA ───────────────────────────────────────────── */
.cleanup-cta-final {
  position: relative;
  padding: var(--space-16) 0;
  background: var(--color-dark);
  text-align: center;
  overflow: hidden;
}
.cleanup-cta-final::before {
  content: '';
  position: absolute;
  top: -60px;
  left: -60px;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
}
.cleanup-cta-final::after {
  content: '';
  position: absolute;
  bottom: -80px;
  right: -80px;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background: var(--color-secondary);
  opacity: 0.06;
}
.cleanup-cta-final h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.cleanup-cta-final .answer-block {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-6);
  line-height: 1.7;
}
.cleanup-cta-final .cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RELATED SERVICES ───────────────────────────────────────── */
.cleanup-related {
  padding: var(--space-16) 0;
  background: var(--color-bg);
}
.cleanup-related .section-title { text-align: center; margin-bottom: var(--space-10); }

/* ── Inline Image Block ─────────────────────────────────────── */
.cleanup-img-block {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 16 / 9;
}
.cleanup-img-block img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* ── Keyframes ──────────────────────────────────────────────── */
@keyframes cleanup-float {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(-2deg); }
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
  .cleanup-problem .bento-grid { grid-template-columns: 1fr 1fr; }
  .cleanup-problem .bento-card--tall { grid-row: auto; }
  .cleanup-expert .grid-asym { grid-template-columns: 1fr; }
  .cleanup-breakdown .two-col { grid-template-columns: 1fr; }
  .cleanup-reviews .reviews-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .hero--cleanup { min-height: 55vh; padding-top: calc(var(--nav-height) + var(--space-10)); }
  .hero--cleanup .trust-row { gap: var(--space-4); }
  .cleanup-problem .bento-grid { grid-template-columns: 1fr; }
  .cleanup-expert .stat-badge { position: relative; bottom: auto; right: auto; margin-top: var(--space-4); }
  .cleanup-compare .compare-header-cell { font-size: var(--font-size-base); padding: var(--space-3) var(--space-4); }
  .cleanup-compare .compare-cell { padding: var(--space-2) var(--space-4); font-size: var(--font-size-xs); }
  .cleanup-cta-final .cta-row { flex-direction: column; align-items: center; }
}
</style>

<!-- ═══════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--cleanup">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Commercial &amp; Residential Cleanup</span>
    </nav>
    <span class="hero-eyebrow"><i data-lucide="sparkles"></i> Property Cleanup</span>
    <h1><span class="text-accent">Commercial &amp; Residential Cleanup</span> in Damascus, OR</h1>
    <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon contractor based in Damascus, providing full-scale property cleanup for homeowners, landlords, builders, and commercial property managers across the Portland Metro Area. We bring dump trucks, excavators, and labor — you get a clean, graded, ready-to-use site.</p>
    <div class="hero-cta-row">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Cleanup Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
    <div class="trust-row">
      <span class="trust-row-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="trust-row-item"><i data-lucide="truck"></i> Own Equipment</span>
      <span class="trust-row-item"><i data-lucide="clock"></i> Same-Day Available</span>
      <span class="trust-row-item"><i data-lucide="recycle"></i> Responsible Disposal</span>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="cleanup-problem" aria-label="Property cleanup challenges">
  <div class="float-accent"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="pull-quote reveal-up">
      Neglected properties attract code violations, pest problems, and liability exposure. Every month a property sits full of debris, the cleanup cost climbs and the usable value drops.
    </div>

    <h2 class="reveal-up" style="margin-bottom:var(--space-3);">When does a Damascus property need <span class="text-accent">professional cleanup</span>?</h2>
    <p class="answer-block reveal-up" style="margin-bottom:var(--space-8);max-width:660px;">Post-construction debris, tenant move-outs, estate cleanouts, and overgrown lots are the four most common situations where property owners in Damascus and the Portland Metro Area need heavy-duty cleanup beyond what a dumpster rental can handle.</p>

    <div class="bento-grid">
      <div class="bento-card bento-card--tall reveal-up reveal-delay-1">
        <div class="bento-card-icon"><i data-lucide="building-2"></i></div>
        <h3>Post-Construction Sites</h3>
        <p>Builders leave behind lumber scraps, drywall waste, concrete chunks, roofing material, and packaging that needs sorting, hauling, and proper disposal. Without cleanup, the property can't pass final inspection or get its certificate of occupancy. We work with GCs and homeowners across Clackamas County to clear construction sites within 1 to 3 days of project completion.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-2">
        <div class="bento-card-icon"><i data-lucide="home"></i></div>
        <h3>Tenant Move-Outs</h3>
        <p>Abandoned furniture, appliances, personal items, and trash left by departing tenants. We clear the property fast so you can list it again.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-3">
        <div class="bento-card-icon"><i data-lucide="package"></i></div>
        <h3>Estate Cleanouts</h3>
        <p>Decades of accumulated belongings, storage sheds full of materials, and outbuildings that need emptying. We handle sensitive situations with care.</p>
      </div>
      <div class="bento-card reveal-up reveal-delay-4">
        <div class="bento-card-icon"><i data-lucide="tree-pine"></i></div>
        <h3>Overgrown &amp; Neglected Lots</h3>
        <p>Brush, fallen trees, old fencing, and dumped materials on vacant or foreclosed properties. We clear and grade for resale or development.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="cleanup-expert" aria-label="Why choose Workhorse">
  <div class="container">
    <div class="grid-asym">
      <div class="visual-block reveal-scale">
        <div class="img-primary">
          <img src="<?php echo htmlspecialchars($bodyPhoto1); ?>" alt="Workhorse crew performing property cleanup in Damascus, OR" width="600" height="450" loading="lazy">
        </div>
        <div class="stat-badge">
          <div class="stat-number" data-target="500">500+</div>
          <div class="stat-label">Properties Cleaned</div>
        </div>
      </div>

      <div class="expert-content">
        <span class="eyebrow-label reveal-up">Our Approach</span>
        <h2 class="reveal-up">Why do property owners choose <span class="text-accent">Workhorse</span> for cleanup in Damascus?</h2>
        <p class="answer-block reveal-up">A pickup truck and a trailer can't handle a full property cleanup. We bring dump trucks, an excavator for heavy debris, and enough labor to finish in days — not weeks. That's the difference between a hauling service and a site contractor.</p>

        <ul class="diff-list">
          <li class="diff-item reveal-left reveal-delay-1">
            <div class="diff-icon"><i data-lucide="truck"></i></div>
            <div class="diff-text">
              <strong>Heavy Equipment On-Site</strong>
              <span>Excavators, skid steers, and dump trucks — we handle concrete slabs, buried debris, and bulk material that hand labor can't move.</span>
            </div>
          </li>
          <li class="diff-item reveal-left reveal-delay-2">
            <div class="diff-icon"><i data-lucide="recycle"></i></div>
            <div class="diff-text">
              <strong>Sorted Disposal &amp; Recycling</strong>
              <span>Metals, concrete, and clean wood go to recyclers. Usable items go to donation. Landfill is the last option, not the first.</span>
            </div>
          </li>
          <li class="diff-item reveal-left reveal-delay-3">
            <div class="diff-icon"><i data-lucide="ruler"></i></div>
            <div class="diff-text">
              <strong>Site Grading After Removal</strong>
              <span>We don't just haul and leave. Disturbed areas are graded smooth so the property is ready for landscaping, construction, or sale.</span>
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
<section class="cleanup-breakdown" aria-label="What's included">
  <div class="cleanup-divider--curve">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C720,0 720,60 1440,0 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">Cleanup Details</span>
      <h2 class="reveal-up">What types of <span class="text-accent">property cleanup</span> does Workhorse handle?</h2>
      <p class="answer-block reveal-up">We handle residential cleanouts, commercial lot clearing, post-construction site cleanup, estate cleanouts, and foreclosure property preparation — all with our own trucks, equipment, and crew. No subcontractors, no rental delays.</p>
    </div>

    <div class="two-col">
      <div>
        <h3 class="reveal-up" style="margin-bottom:var(--space-4);">Cleanup Types We Handle</h3>
        <div class="service-types">
          <div class="type-card reveal-right reveal-delay-1">
            <div class="type-card-icon"><i data-lucide="hard-hat"></i></div>
            <div>
              <strong>Post-Construction Cleanup</strong>
              <span>Lumber, drywall, packaging, concrete, roofing debris. Sorted and hauled within 1-3 days of project completion.</span>
            </div>
          </div>
          <div class="type-card reveal-right reveal-delay-2">
            <div class="type-card-icon"><i data-lucide="home"></i></div>
            <div>
              <strong>Residential Cleanouts</strong>
              <span>Tenant move-outs, hoarding situations, garage and basement cleanouts, shed tear-downs. All items removed and disposed properly.</span>
            </div>
          </div>
          <div class="type-card reveal-right reveal-delay-3">
            <div class="type-card-icon"><i data-lucide="building-2"></i></div>
            <div>
              <strong>Commercial Lot Clearing</strong>
              <span>Parking lot debris, old signage, fencing, vegetation overgrowth, and accumulated waste from commercial properties.</span>
            </div>
          </div>
          <div class="type-card reveal-right reveal-delay-4">
            <div class="type-card-icon"><i data-lucide="package"></i></div>
            <div>
              <strong>Estate &amp; Foreclosure Prep</strong>
              <span>Full property cleanout for estates, bank-owned properties, and pre-sale preparation. Sensitive, efficient, and documented.</span>
            </div>
          </div>
        </div>

        <div class="cleanup-img-block reveal-up" style="margin-top:var(--space-6);">
          <img src="<?php echo htmlspecialchars($bodyPhoto2); ?>" alt="Commercial property cleanup in progress near Gresham, OR" width="800" height="450" loading="lazy">
        </div>
      </div>

      <div>
        <h3 class="reveal-up" style="margin-bottom:var(--space-4);">Our Cleanup Process</h3>
        <div class="timeline">
          <div class="timeline-step reveal-up reveal-delay-1">
            <div class="step-meta">Step 1</div>
            <h3>Site Walkthrough &amp; Estimate</h3>
            <p>We walk the entire property, inventory debris types and volumes, identify any materials requiring special handling, and provide a fixed-price quote within 24 hours.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-2">
            <div class="step-meta">Step 2</div>
            <h3>Mobilization &amp; Sorting</h3>
            <p>Our crew arrives with dump trucks, a skid steer or excavator if needed, and hand tools. We sort materials on-site: recyclables separated from landfill waste.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-3">
            <div class="step-meta">Step 3</div>
            <h3>Loading &amp; Hauling</h3>
            <p>Sorted materials are loaded and hauled to the appropriate facility — recycling center, donation drop, or transfer station. Heavy items and buried debris use machine loading.</p>
          </div>
          <div class="timeline-step reveal-up reveal-delay-4">
            <div class="step-meta">Step 4</div>
            <h3>Grading &amp; Final Sweep</h3>
            <p>After removal, we grade disturbed areas, fill depressions, and rake the site clean. You get a property that's ready for its next chapter — not just cleared of junk.</p>
          </div>
        </div>

        <div class="cleanup-img-block reveal-up" style="margin-top:var(--space-6);">
          <img src="<?php echo htmlspecialchars($bodyPhoto3); ?>" alt="Cleaned and graded property ready for use in Damascus, Oregon" width="800" height="450" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="cleanup-reviews" aria-label="Customer reviews">
  <div class="float-blob"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="section-title">
      <span class="eyebrow-label reveal-up" style="color:var(--color-accent);">Customer Reviews</span>
      <h2 class="reveal-up">What do property owners say about our <span class="text-accent">cleanup services</span>?</h2>
      <p class="answer-block reveal-up">From tenant move-outs to post-construction sites, our cleanup clients rate us 5 stars for fast turnaround, fair pricing, and sites left cleaner than expected.</p>
    </div>

    <div class="reviews-grid">
      <div class="review-card reveal-up reveal-delay-1">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"Inherited a property in Damascus with two sheds full of junk and a yard covered in old fencing and concrete. Workhorse cleared everything in two days, graded the yard smooth, and hauled 6 truck loads. The property sold within a month."</p>
        <p class="review-author">Lisa H.</p>
        <p class="review-meta">Damascus, OR &mdash; Estate Cleanout + Lot Grading</p>
      </div>
      <div class="review-card reveal-up reveal-delay-2">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"We use Workhorse for post-construction cleanup on our builds in the Gresham and Happy Valley area. They show up the day we finish, sort everything, and leave the site inspection-ready. Reliable every time."</p>
        <p class="review-author">Mark D.</p>
        <p class="review-meta">Gresham, OR &mdash; Ongoing Post-Construction Cleanup</p>
      </div>
      <div class="review-card reveal-up reveal-delay-3">
        <div class="review-stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="review-text">"Tenant left a rental in Boring absolutely trashed — furniture, appliances, garbage everywhere. Workhorse had it cleared and cleaned out in one day. I was able to start repairs the next morning. Fair price, zero hassle."</p>
        <p class="review-author">Carlos R.</p>
        <p class="review-meta">Boring, OR &mdash; Tenant Move-Out Cleanout</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON
     ═══════════════════════════════════════════════════════ -->
<section class="cleanup-compare" aria-label="Why Workhorse">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">The Difference</span>
      <h2 class="reveal-up">How does Workhorse compare to <span class="text-accent">dumpster rentals</span> and hauling services?</h2>
      <p class="answer-block reveal-up">A dumpster sits in your driveway while you do the work. A hauling service brings a pickup truck. We bring a crew, dump trucks, and heavy equipment — and we leave the property graded and ready.</p>
    </div>

    <div class="compare-table reveal-up">
      <div class="compare-header">
        <div class="compare-header-cell">Dumpster Rental / Haulers</div>
        <div class="compare-header-cell">Workhorse Site Solutions</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> You load the dumpster yourself</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Full crew loads everything</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Limited to hand-carryable items</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Excavator for heavy debris</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Dumpster sits for days or weeks</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Cleared in 1-3 days</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> No sorting or recycling</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Materials sorted on-site</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Property left as-is after pickup</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Site graded and raked clean</div>
      </div>
      <div class="compare-row">
        <div class="compare-cell"><i data-lucide="x" class="icon-x"></i> Overage fees for excess weight</div>
        <div class="compare-cell"><i data-lucide="check" class="icon-check"></i> Fixed-price quote upfront</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="cleanup-faq" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">FAQ</span>
      <h2 class="reveal-up">What should you know about <span class="text-accent">property cleanup</span> near me in Damascus?</h2>
      <p class="answer-block reveal-up">Answers to cleanup questions from homeowners, landlords, and contractors in Damascus, Gresham, Sandy, Happy Valley, and the surrounding Portland Metro communities.</p>
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
<section class="cleanup-cta-final" aria-label="Get started">
  <div class="cleanup-divider--curve" style="top:-1px;">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg-alt)">
      <path d="M0,0 L1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container" style="position:relative;z-index:1;">
    <span class="eyebrow-label reveal-up" style="color:var(--color-accent);">Clear Your Property</span>
    <h2 class="reveal-up">Ready to get your property <span class="text-accent">cleaned up</span>?</h2>
    <p class="answer-block reveal-up">Every cleanup estimate is free, fixed-price, and delivered within 24 hours after our site walkthrough. Residential or commercial — tell us what needs to go and we'll handle the rest from our Damascus home base.</p>
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
<section class="cleanup-related" aria-label="Related services">
  <div class="container">
    <div class="section-title">
      <span class="eyebrow-label reveal-up">More From Workhorse</span>
      <h2 class="reveal-up">Other Services <span class="text-accent">You May Need</span></h2>
    </div>

    <div class="services-grid">
      <?php
      $related = getRelatedServices('commercial-residential-cleanup', 3);
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

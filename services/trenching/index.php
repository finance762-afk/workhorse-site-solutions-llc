<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service      = getServiceBySlug('trenching');
$currentPage  = 'services';
$pageTitle    = 'Trenching Services in Damascus, OR | ' . $siteName;
$pageDescription = 'Professional trenching for utilities, drainage, irrigation, and foundations in Damascus, OR. Precision depth control with mini excavators and trenchers. Free estimates from Workhorse Site Solutions.';
$canonicalUrl = $siteUrl . '/services/trenching/';
$cssVersion   = '2';

$heroImage    = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396334785-q74t8c-481770500_605969619093692_3211402394288864358_n.jpg';
$bodyImage1   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396545443-ah4f2k-482072604_605969519093702_8544514331207501703_n.jpg';
$bodyImage2   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396550603-kdx6vn-482073091_604258729264781_9220497696950446602_n.jpg';
$bodyImage3   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396557330-lo5rfw-482077938_605114759179178_1772918835985556714_n.jpg';

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
        'question' => 'How much does trenching cost in Damascus, OR?',
        'answer'   => 'Most residential trenching projects in the Damascus and Portland Metro area cost between $4 and $12 per linear foot, depending on depth, soil conditions, and whether rock or tree roots are present. A typical 100-foot utility trench runs $400 to $1,200. We provide free on-site estimates with exact pricing before any work begins.'
    ],
    [
        'question' => 'How deep can you trench for utility lines?',
        'answer'   => 'Our equipment handles trenches from 12 inches for irrigation lines up to 6 feet deep for water mains and sewer connections. Oregon code requires electrical lines at 24 inches minimum and water lines at 30 inches below grade. We verify local Damascus requirements and call 811 before every dig.'
    ],
    [
        'question' => 'Do I need a permit for trenching in Damascus?',
        'answer'   => 'Permit requirements depend on the purpose of the trench. Utility connections to public systems typically require a Clackamas County permit. Irrigation and drainage trenching on private property usually does not. We coordinate with Clackamas County permitting and handle the 811 utility locate call as part of our service.'
    ],
    [
        'question' => 'How long does a residential trenching project take?',
        'answer'   => 'Most residential trenching jobs in the Damascus area take 1 to 3 days depending on total linear footage, depth requirements, and soil conditions. A standard 100-foot drainage trench is typically completed in a single day. Rocky soil common in parts of Boring and Sandy may add half a day.'
    ],
    [
        'question' => 'What types of trenching does Workhorse Site Solutions handle?',
        'answer'   => 'We handle utility trenching for water, sewer, gas, and electrical lines, plus French drain installation, irrigation system lines, foundation drainage, and conduit trenching for fiber optic or cable. We also trench for fence post footings and retaining wall foundations across Damascus, Gresham, and Happy Valley.'
    ],
    [
        'question' => 'Will trenching damage my yard or landscaping?',
        'answer'   => 'We use compact equipment specifically sized for residential access to minimize disruption. Our mini excavators and walk-behind trenchers create narrow cuts that are backfilled and compacted the same day. We protect existing landscaping with plywood pathways and restore disturbed areas to pre-work condition.'
    ],
    [
        'question' => 'Does Workhorse handle backfill and compaction after trenching?',
        'answer'   => 'Yes. Every trenching project includes proper backfill and mechanical compaction. We backfill in 6- to 8-inch lifts using the specified fill material — native soil, gravel, or engineered fill — and compact each lift to meet Oregon building code requirements. You never need to hire a separate crew for backfill.'
    ],
    [
        'question' => 'Can you trench through rocky soil in the Damascus area?',
        'answer'   => 'Absolutely. The volcanic soil and basalt deposits around Damascus, Boring, and the Clackamas River corridor are familiar territory for our crews. Our excavators are fitted with rock teeth and hydraulic breakers when needed. Rocky conditions may adjust timeline and cost, which we identify during our free estimate visit.'
    ],
];

/* ── Schema Markup ───────────────────────────────────────── */
$schemaService    = generateServiceSchema($service);
$schemaFAQ        = generateFAQSchema($faqs);
$schemaBreadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Trenching', 'url' => '/services/trenching/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaService; ?>
<?php echo $schemaFAQ; ?>
<?php echo $schemaBreadcrumb; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     TRENCHING SERVICE PAGE — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── 1. HERO ────────────────────────────────────────────── */
.hero--trenching {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($heroImage); ?>');
  background-size: cover;
  background-position: center 40%;
  overflow: hidden;
}
.hero--trenching::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(175deg, rgba(0,0,0,0.92) 0%, rgba(0,0,0,0.7) 45%, rgba(77,94,111,0.55) 100%);
  z-index: 1;
}
.hero--trenching::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--trenching > * { position: relative; z-index: 2; }
.hero--trenching .hero-eyebrow {
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
.hero--trenching .hero-eyebrow i,
.hero--trenching .hero-eyebrow svg { width: 16px; height: 16px; }
.hero--trenching h1 {
  color: var(--color-white);
  max-width: 820px;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.hero--trenching h1 .text-accent { color: var(--color-accent); }
.hero--trenching .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin: 0 auto var(--space-6);
}
.hero--trenching .hero-cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero--trenching .hero-trust-row {
  display: flex;
  gap: var(--space-6);
  justify-content: center;
  flex-wrap: wrap;
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255,255,255,0.12);
}
.hero--trenching .hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.hero--trenching .hero-trust-item i,
.hero--trenching .hero-trust-item svg {
  width: 18px; height: 18px;
  color: var(--color-accent);
}
.hero--trenching .breadcrumb {
  display: flex;
  gap: var(--space-2);
  justify-content: center;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
  margin-bottom: var(--space-6);
}
.hero--trenching .breadcrumb a { color: rgba(255,255,255,0.65); }
.hero--trenching .breadcrumb a:hover { color: var(--color-accent); }
.hero--trenching .breadcrumb-sep { color: rgba(255,255,255,0.35); }

/* ── Hero SVG Divider ───────────────────────────────────── */
.divider-angle--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  z-index: 3;
}
.divider-angle--bottom svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── 2. PROBLEM STATEMENT ───────────────────────────────── */
.trench-problem {
  position: relative;
  background: var(--color-bg);
  overflow: hidden;
}
.trench-problem .pull-quote {
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 700;
  line-height: 1.35;
  color: var(--color-dark);
  max-width: 700px;
  margin: 0 auto var(--space-10);
  text-align: center;
  text-wrap: balance;
  position: relative;
  padding-left: var(--space-6);
  border-left: 4px solid var(--color-accent);
}
.trench-problem .pull-quote .text-accent { color: var(--color-accent); }
.trench-problem .bento-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.trench-problem .bento-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.trench-problem .bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.trench-problem .bento-card h3 {
  font-size: var(--fs-h3);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.trench-problem .bento-card p {
  color: var(--color-text-light);
  line-height: 1.65;
}
.trench-problem .bento-card-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
  background: rgba(227,70,2,0.1);
  color: var(--color-accent);
}
.trench-problem .bento-card-icon i,
.trench-problem .bento-card-icon svg { width: 24px; height: 24px; }

/* Floating accent sphere */
.trench-float-sphere {
  position: absolute;
  width: 350px;
  height: 350px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
  right: -100px;
  top: 10%;
  z-index: 0;
  animation: float-drift 12s ease-in-out infinite;
}
@keyframes float-drift {
  0%, 100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-25px) scale(1.03); }
}

/* ── 3. EXPERT POSITIONING ──────────────────────────────── */
.trench-expert {
  background: var(--color-bg-alt);
  position: relative;
  overflow: hidden;
}
.trench-expert .grid-asym {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: var(--space-10);
  align-items: center;
}
.trench-expert .stat-hero {
  text-align: center;
  padding: var(--space-10);
  background: var(--color-dark);
  border-radius: var(--radius-xl);
  position: relative;
  overflow: hidden;
}
.trench-expert .stat-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, transparent 40%, rgba(227,70,2,0.12) 100%);
}
.trench-expert .stat-hero > * { position: relative; z-index: 1; }
.trench-expert .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.trench-expert .stat-label {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  font-weight: 600;
}
.trench-expert .stat-sub {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.5);
  margin-top: var(--space-2);
}
.trench-expert .differ-list {
  list-style: none;
  padding: 0;
  margin: var(--space-6) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.trench-expert .differ-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-lg);
  line-height: 1.55;
}
.trench-expert .differ-icon {
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
.trench-expert .differ-icon i,
.trench-expert .differ-icon svg { width: 16px; height: 16px; }
.trench-expert .answer-block {
  max-width: var(--content-width);
  color: var(--color-text-light);
  line-height: 1.7;
}
.trench-expert h2 { text-wrap: balance; }

/* ── SVG Divider: Wave Top ──────────────────────────────── */
.divider-wave--top {
  position: absolute;
  top: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.divider-wave--top svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── 4. SERVICE BREAKDOWN ───────────────────────────────── */
.trench-breakdown {
  background: var(--color-bg);
  position: relative;
}
.trench-breakdown .split-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-10);
  align-items: start;
}
.trench-breakdown .checklist {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.trench-breakdown .checklist li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-3) var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-card-tint-1);
  font-size: var(--font-size-base);
  line-height: 1.5;
  transition: transform var(--transition-fast);
}
.trench-breakdown .checklist li:hover {
  transform: translateX(4px);
}
.trench-breakdown .checklist-icon {
  flex-shrink: 0;
  color: var(--color-accent);
  margin-top: 2px;
}
.trench-breakdown .checklist-icon i,
.trench-breakdown .checklist-icon svg { width: 18px; height: 18px; }
.trench-breakdown .timeline {
  display: flex;
  flex-direction: column;
  gap: 0;
  position: relative;
  padding-left: var(--space-8);
}
.trench-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 15px;
  top: 0;
  bottom: 0;
  width: 3px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-secondary));
  border-radius: var(--radius-full);
}
.trench-breakdown .timeline-step {
  position: relative;
  padding: var(--space-4) 0;
}
.trench-breakdown .timeline-step::before {
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
.trench-breakdown .timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-dark);
  margin-bottom: var(--space-1);
}
.trench-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.trench-breakdown .answer-block {
  max-width: var(--content-width);
  color: var(--color-text-light);
  line-height: 1.7;
}
.trench-breakdown h2 { text-wrap: balance; }
.trench-breakdown .section-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-top: var(--space-8);
}
.trench-breakdown .section-image img {
  width: 100%;
  height: auto;
  display: block;
}

/* ── 5. PROOF / REVIEWS ─────────────────────────────────── */
.trench-reviews {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.trench-reviews::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, transparent 50%, rgba(227,70,2,0.06) 100%);
}
.trench-reviews > * { position: relative; z-index: 1; }
.trench-reviews h2 {
  color: var(--color-white);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.trench-reviews .answer-block {
  text-align: center;
  max-width: 600px;
  margin: 0 auto var(--space-10);
  color: rgba(255,255,255,0.7);
  line-height: 1.7;
}
.trench-reviews .review-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.trench-review-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.08);
  backdrop-filter: blur(6px);
  transition: transform var(--transition-base);
}
.trench-review-card:hover {
  transform: translateY(-4px);
}
.trench-review-card .stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-3);
  color: var(--color-star);
}
.trench-review-card .stars i,
.trench-review-card .stars svg { width: 18px; height: 18px; }
.trench-review-card blockquote {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-base);
  line-height: 1.7;
  font-style: italic;
  margin-bottom: var(--space-4);
}
.trench-review-card .reviewer {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.5);
  font-weight: 600;
}

/* ── 6. COMPARISON TABLE ────────────────────────────────── */
.trench-compare {
  background: var(--color-bg-alt);
  position: relative;
}
.trench-compare h2 { text-align: center; text-wrap: balance; margin-bottom: var(--space-3); }
.trench-compare .answer-block {
  text-align: center;
  max-width: 600px;
  margin: 0 auto var(--space-10);
  color: var(--color-text-light);
  line-height: 1.7;
}
.trench-compare .compare-table {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  border-collapse: separate;
  border-spacing: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.trench-compare .compare-table thead th {
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-base);
  text-align: left;
}
.trench-compare .compare-table thead th:first-child {
  background: var(--color-gray-light);
  color: var(--color-gray-dark);
}
.trench-compare .compare-table thead th:last-child {
  background: var(--color-accent);
  color: var(--color-white);
}
.trench-compare .compare-table tbody td {
  padding: var(--space-4) var(--space-6);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  vertical-align: top;
  border-bottom: 1px solid var(--color-border);
}
.trench-compare .compare-table tbody tr:last-child td { border-bottom: none; }
.trench-compare .compare-table tbody td:first-child {
  background: var(--color-white);
  color: var(--color-text-light);
}
.trench-compare .compare-table tbody td:last-child {
  background: rgba(227,70,2,0.04);
  color: var(--color-dark);
  font-weight: 500;
}

/* ── 7. FAQ ACCORDION ───────────────────────────────────── */
.trench-faq {
  background: var(--color-bg);
  position: relative;
}
.trench-faq h2 { text-align: center; text-wrap: balance; margin-bottom: var(--space-3); }
.trench-faq .section-subtitle {
  text-align: center;
  color: var(--color-text-light);
  margin-bottom: var(--space-10);
}
.trench-faq .faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.trench-faq .faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-left: 4px solid var(--color-accent);
  transition: box-shadow var(--transition-base);
}
.trench-faq .faq-item:hover {
  box-shadow: var(--shadow-md);
}
.trench-faq .faq-item h3 {
  font-size: var(--fs-h3);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.trench-faq .faq-answer {
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: var(--content-width);
}
.trench-faq .faq-image-col {
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-top: var(--space-10);
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}
.trench-faq .faq-image-col img {
  width: 100%;
  height: auto;
  display: block;
}

/* ── 8. FINAL CTA ───────────────────────────────────────── */
.trench-final-cta {
  background: var(--color-dark);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.trench-final-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at center bottom, rgba(227,70,2,0.1) 0%, transparent 65%);
}
.trench-final-cta > * { position: relative; z-index: 1; }
.trench-final-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.trench-final-cta .answer-block {
  color: rgba(255,255,255,0.75);
  max-width: 600px;
  margin: 0 auto var(--space-6);
  line-height: 1.7;
}
.trench-final-cta .cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RELATED SERVICES ───────────────────────────────────── */
.trench-related {
  background: var(--color-bg-alt);
}
.trench-related h2 {
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-10);
}

/* ── SVG Divider: Slant Bottom ──────────────────────────── */
.divider-slant--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  z-index: 3;
}
.divider-slant--bottom svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── RESPONSIVE ─────────────────────────────────────────── */
@media (max-width: 1024px) {
  .trench-expert .grid-asym { grid-template-columns: 1fr; }
  .trench-breakdown .split-content { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .hero--trenching { min-height: 55vh; }
  .trench-problem .bento-grid { grid-template-columns: 1fr; }
  .trench-reviews .review-grid { grid-template-columns: 1fr; }
  .trench-compare .compare-table { font-size: var(--font-size-sm); }
  .trench-compare .compare-table thead th,
  .trench-compare .compare-table tbody td {
    padding: var(--space-3) var(--space-4);
  }
  .hero--trenching .hero-trust-row { gap: var(--space-4); }
  .trench-problem .pull-quote { font-size: var(--font-size-xl); }
}
@media (max-width: 480px) {
  .hero--trenching .hero-cta-row { flex-direction: column; align-items: center; }
  .hero--trenching .hero-cta-row .btn { width: 100%; max-width: 300px; }
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
<section class="hero hero--trenching">
  <div>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Trenching</span>
    </nav>
    <span class="hero-eyebrow"><i data-lucide="shovel"></i> Trenching Services</span>
    <h1>Professional <span class="text-accent">Trenching</span> in Damascus, OR</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed general contractor based in Damascus, Oregon, providing precision trenching for utility lines, drainage systems, irrigation, and foundation work across the Portland Metro Area. Our crews operate mini excavators and walk-behind trenchers sized for both residential lots and commercial sites.</p>
    <div class="hero-cta-row">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Trenching Estimate</a>
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
  <div class="divider-angle--bottom">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,0 L1440,60 L0,60 Z"/>
    </svg>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="section trench-problem" aria-label="Why trenching matters">
  <div class="trench-float-sphere"></div>
  <div class="container" style="position:relative;z-index:1;">
    <span class="eyebrow-label reveal-up">Common Challenges</span>
    <h2 class="reveal-up" style="text-align:center;margin-bottom:var(--space-3);text-wrap:balance;">What problems does <span class="text-accent">poor trenching</span> cause for Damascus homeowners?</h2>
    <p class="answer-block reveal-up" style="text-align:center;max-width:650px;margin:0 auto var(--space-8);color:var(--color-text-light);line-height:1.7;">Improperly dug trenches lead to collapsed utility lines, standing water against foundations, and costly re-excavation. Damascus properties often sit on compacted clay and volcanic rock that punish guesswork. These three warning signs indicate you need professional trenching help.</p>
    <div class="pull-quote reveal-left">
      A bad trench doesn't just fail once — it <span class="text-accent">compounds damage</span> every time it rains, freezes, or settles.
    </div>
    <div class="bento-grid">
      <div class="bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="bento-card-icon"><i data-lucide="droplets"></i></div>
        <h3>Standing Water Near Your Foundation</h3>
        <p>Clay-heavy Damascus soil traps moisture against basement walls and footings. Without a properly graded drainage trench, water pools during Oregon's wet season and seeps through cracks — leading to mold, rot, and structural damage.</p>
      </div>
      <div class="bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="bento-card-icon"><i data-lucide="zap"></i></div>
        <h3>Utility Lines Buried at Wrong Depth</h3>
        <p>Electrical, water, and gas lines each have Oregon-specific depth codes. A trench dug 6 inches too shallow puts your household at risk of severed lines during landscaping, fence post drilling, or future construction work.</p>
      </div>
      <div class="bento-card card-tint-3 reveal-up reveal-delay-3">
        <div class="bento-card-icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Settled Backfill Causing Sinkholes</h3>
        <p>Trenches backfilled without proper compaction in 6-inch lifts settle unevenly over months. The result is sunken yard lines, tripping hazards, and drainage channels that redirect water toward your home instead of away.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="section trench-expert" aria-label="Why choose Workhorse">
  <div class="divider-wave--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C480,0 960,0 1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <span class="eyebrow-label reveal-up">Our Approach</span>
    <h2 class="reveal-up">Why choose <?php echo htmlspecialchars($siteName); ?> for <span class="text-accent">trenching</span> near me in Damascus?</h2>
    <p class="answer-block reveal-up">We own our excavators and trenchers — no renting equipment at markup and no waiting for availability. Our crews know the soil profile from Sandy's volcanic loam to Boring's basalt layers, and we size the machine to your property so we don't tear up more than necessary.</p>

    <div class="grid-asym reveal-up">
      <div class="stat-hero">
        <div class="stat-number" data-target="500">500+</div>
        <div class="stat-label">Trenching Projects Completed</div>
        <div class="stat-sub">Damascus, Gresham, Happy Valley &amp; Portland Metro</div>
      </div>
      <div>
        <ul class="differ-list">
          <li class="reveal-right reveal-delay-1">
            <span class="differ-icon"><i data-lucide="truck"></i></span>
            <div><strong>Own Equipment Fleet</strong> — Mini excavators, walk-behind trenchers, and compaction plates. No subcontractor delays, no rental markups. Your project stays on schedule.</div>
          </li>
          <li class="reveal-right reveal-delay-2">
            <span class="differ-icon"><i data-lucide="ruler"></i></span>
            <div><strong>Precision Depth Control</strong> — Laser-guided grade stakes and GPS-calibrated bucket depths. Every inch of trench meets Oregon code for the specific utility being installed.</div>
          </li>
          <li class="reveal-right reveal-delay-3">
            <span class="differ-icon"><i data-lucide="shield-check"></i></span>
            <div><strong>811 Locate &amp; Permit Coordination</strong> — We call Oregon 811 before every dig and pull required Clackamas County permits. You don't chase paperwork — we hand you a compliant, inspected trench.</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="section trench-breakdown" aria-label="What trenching includes">
  <div class="container">
    <span class="eyebrow-label reveal-up">What's Included</span>
    <h2 class="reveal-up">What does a <span class="text-accent">trenching project</span> include from start to finish?</h2>
    <p class="answer-block reveal-up">Every trenching job includes the 811 utility locate, machine excavation to spec depth, pipe or conduit bedding, backfill in compacted lifts, and surface restoration. We handle the full scope so you hire one crew instead of three.</p>

    <div class="split-content">
      <div class="reveal-left">
        <h3 style="margin-bottom:var(--space-4);">Included in Every Trenching Project</h3>
        <ul class="checklist">
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Oregon 811 utility locate request and marking</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Machine excavation to code-required depth</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Bedding material (gravel or sand) for pipe support</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Warning tape placement per Oregon utility code</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Backfill in 6-8 inch compacted lifts</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Mechanical compaction to 95% Proctor density</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Surface grade restoration and cleanup</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Debris removal and haul-off</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3 style="margin-bottom:var(--space-4);">Our Process — Step by Step</h3>
        <div class="timeline">
          <div class="timeline-step">
            <h4>1. Site Visit &amp; Free Estimate</h4>
            <p>We walk your property, identify soil conditions, locate existing utilities, and deliver a fixed-price quote within 24 hours.</p>
          </div>
          <div class="timeline-step">
            <h4>2. 811 Locate &amp; Permits</h4>
            <p>We schedule the Oregon 811 utility locate and pull any required Clackamas County permits before equipment arrives.</p>
          </div>
          <div class="timeline-step">
            <h4>3. Excavation &amp; Trenching</h4>
            <p>Our mini excavator or walk-behind trencher cuts the trench to exact depth and width. We stage spoil material for backfill reuse.</p>
          </div>
          <div class="timeline-step">
            <h4>4. Bedding &amp; Pipe Placement</h4>
            <p>We lay gravel or sand bedding and position conduit, pipe, or drain tile per manufacturer specs and Oregon code.</p>
          </div>
          <div class="timeline-step">
            <h4>5. Backfill &amp; Compaction</h4>
            <p>Fill material is placed in 6-8 inch lifts and mechanically compacted. We restore surface grade to pre-work condition.</p>
          </div>
          <div class="timeline-step">
            <h4>6. Inspection &amp; Cleanup</h4>
            <p>Final grade check, site cleanup, and debris haul-off. If a county inspection is required, we schedule and attend it.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section-image reveal-scale" style="margin-top:var(--space-10);">
      <img src="<?php echo htmlspecialchars($bodyImage1); ?>" alt="Trenching equipment on a residential property in Damascus, OR" width="900" height="540" loading="lazy">
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="section trench-reviews" aria-label="Customer reviews">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;color:var(--color-accent);">What Clients Say</span>
    <h2 class="reveal-up">What do Damascus-area homeowners say about our <span class="text-accent">trenching work</span>?</h2>
    <p class="answer-block reveal-up">Our 5.0 Google rating reflects hundreds of completed projects across Damascus, Gresham, Happy Valley, and beyond. Here is what recent trenching clients had to say about working with our crew.</p>

    <div class="review-grid">
      <div class="trench-review-card reveal-up reveal-delay-1">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"We needed a 200-foot French drain trench along our back fence line in Damascus. The crew showed up on time, dug the trench through some seriously rocky soil, and had it backfilled and compacted by end of day. No standing water since."</blockquote>
        <span class="reviewer">— Sarah M., Damascus, OR | French Drain Installation</span>
      </div>
      <div class="trench-review-card reveal-up reveal-delay-2">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"Had Workhorse trench for new water and electrical lines to our detached shop in Happy Valley. They handled the 811 locate, pulled the permit, and the county inspector passed it first try. Price was $800 less than the other two bids."</blockquote>
        <span class="reviewer">— Kevin D., Happy Valley, OR | Utility Trenching</span>
      </div>
      <div class="trench-review-card reveal-up reveal-delay-3">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"Our irrigation contractor refused to trench through the basalt in our Boring property. Workhorse brought the right excavator with rock teeth and knocked it out in two days. Clean work, minimal yard damage, fair price."</blockquote>
        <span class="reviewer">— Lisa &amp; Tom R., Boring, OR | Irrigation Trenching</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON TABLE
     ═══════════════════════════════════════════════════════ -->
<section class="section trench-compare" aria-label="Contractor comparison">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;">How We Stack Up</span>
    <h2 class="reveal-up">How does <?php echo htmlspecialchars($siteName); ?> compare to other <span class="text-accent">trenching contractors</span>?</h2>
    <p class="answer-block reveal-up">Not all trenching work is equal. The difference between a properly compacted trench and a quick-fill job shows up within one rainy season. Here is how our process compares to what most contractors deliver.</p>

    <table class="compare-table reveal-up">
      <thead>
        <tr>
          <th>Other Contractors</th>
          <th>Workhorse Site Solutions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Rent equipment per job — scheduling delays and rental surcharges passed to you</td>
          <td>Own fleet of excavators and trenchers — no wait time, no rental markup</td>
        </tr>
        <tr>
          <td>Eyeball depth — "looks about right" approach to trench depth</td>
          <td>Laser-graded depth verified at every 10-foot interval per Oregon code</td>
        </tr>
        <tr>
          <td>Dump spoil back in as one lift — settles within months</td>
          <td>Backfill in 6-8 inch lifts with mechanical compaction to 95% density</td>
        </tr>
        <tr>
          <td>Leave 811 locate and permits to you</td>
          <td>Handle 811 call, permit application, and county inspection scheduling</td>
        </tr>
        <tr>
          <td>Oversized equipment that tears up landscaping</td>
          <td>Right-sized machine selection with plywood access paths to protect yards</td>
        </tr>
        <tr>
          <td>Extra charges for backfill and cleanup</td>
          <td>Backfill, compaction, grade restoration, and debris haul-off all included</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="section trench-faq" aria-label="Frequently asked questions">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;">Trenching FAQ</span>
    <h2 class="reveal-up">What questions do Damascus homeowners ask about <span class="text-accent">trenching</span>?</h2>
    <p class="section-subtitle reveal-up">Answers from our crew based on <?php echo $yearsInBusiness; ?>+ years of local experience</p>

    <div class="faq-list">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="faq-image-col reveal-scale">
      <img src="<?php echo htmlspecialchars($bodyImage2); ?>" alt="Completed trenching project in Damascus showing proper backfill and compaction" width="700" height="420" loading="lazy">
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     8. FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="section trench-final-cta" aria-label="Get started">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="display:block;text-align:center;color:var(--color-accent);">Start Your Project</span>
    <h2 class="reveal-up">Ready to get your <span class="text-accent">trenching project</span> scheduled?</h2>
    <p class="answer-block reveal-up">Every project starts with a free on-site estimate. We walk the trench line, identify soil conditions, and deliver a fixed-price quote within 24 hours. No surprise charges, no hourly billing — just a clear number before we break ground.</p>
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
<section class="section trench-related" aria-label="Related services">
  <div class="container">
    <h2 class="reveal-up">Other Services You May Need</h2>
    <div class="services-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php
      $related = getRelatedServices('trenching', 3);
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

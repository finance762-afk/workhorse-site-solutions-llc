<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service      = getServiceBySlug('fence-installation');
$currentPage  = 'services';
$pageTitle    = 'Fence Installation in Damascus, OR | ' . $siteName;
$pageDescription = 'Professional fence installation for residential and commercial properties in Damascus, OR. Wood, vinyl, chain-link, and custom fencing. Post-hole drilling, grading, and permit coordination included. Free estimates.';
$canonicalUrl = $siteUrl . '/services/fence-installation/';
$cssVersion   = '2';

$heroImage    = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396339937-xc7wc2-481770700_605954432428544_6388616634957804134_n.jpg';
$bodyImage1   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396563082-lgsepy-482134089_605970275760293_8409989844546383936_n.jpg';
$bodyImage2   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396568746-cr8r60-482191609_608069255550395_5776164817726315898_n.jpg';
$bodyImage3   = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396578618-f6gpsw-482201772_609058802118107_7809450140627945692_n.jpg';

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
        'question' => 'How much does fence installation cost in Damascus, OR?',
        'answer'   => 'Residential fence installation in Damascus typically runs $25 to $55 per linear foot depending on material, height, and terrain. A standard 150-foot cedar privacy fence costs between $3,750 and $6,500 installed. Chain-link runs $15 to $30 per linear foot. We provide free on-site estimates with material options and exact pricing.'
    ],
    [
        'question' => 'What types of fencing does Workhorse Site Solutions install?',
        'answer'   => 'We install cedar privacy fencing, pressure-treated wood fencing, vinyl/PVC fencing, chain-link (residential and commercial gauge), split-rail fencing, and custom combinations. We also build gates — single swing, double swing, and sliding — and install post caps, trim, and lattice toppers for a finished look.'
    ],
    [
        'question' => 'Do I need a permit for a fence in Damascus or Clackamas County?',
        'answer'   => 'Clackamas County requires a building permit for fences over 6 feet tall in residential zones and for any fence in a front yard setback area. Most standard 6-foot backyard privacy fences do not require a permit. We verify your property\'s zoning and pull permits when needed as part of our service.'
    ],
    [
        'question' => 'How long does a fence installation take?',
        'answer'   => 'A typical 150 to 200 linear foot residential fence takes 2 to 4 days from post-hole drilling to final rail and picket installation. Smaller projects like a single side yard (50-80 feet) are often completed in a single day. Rocky soil conditions near Boring or Sandy may add half a day for post-hole drilling.'
    ],
    [
        'question' => 'Will you remove my old fence before installing the new one?',
        'answer'   => 'Yes. We handle full tear-out and disposal of existing fencing including posts set in concrete. Old fence removal and haul-off is quoted separately so you see the exact cost upfront. Most tear-out projects add a half-day to the total timeline.'
    ],
    [
        'question' => 'How deep are fence posts set in Oregon?',
        'answer'   => 'We set fence posts a minimum of 36 inches deep in the Damascus area — deeper than the standard 24-inch minimum — because of Oregon\'s freeze-thaw cycles and clay soil movement. Posts are set in concrete with a crowned top to shed water away from the wood and prevent premature rot at the base.'
    ],
    [
        'question' => 'Can you install a fence on a slope or uneven terrain?',
        'answer'   => 'Absolutely. Damascus properties frequently have grade changes from the foothills terrain. We install fences using either the stepped method (panels follow the slope in uniform drops) or the racked method (rails follow the grade continuously). We recommend the best approach based on your slope angle and fence style.'
    ],
    [
        'question' => 'What warranty comes with your fence installation?',
        'answer'   => 'Our labor carries a 2-year workmanship warranty covering post stability, rail attachment, and structural integrity. Material warranties vary by manufacturer — most cedar carries 5 to 10 years, vinyl carries a lifetime limited warranty, and chain-link fabric carries 10 to 15 years. We provide all warranty documentation at project completion.'
    ],
];

/* ── Schema Markup ───────────────────────────────────────── */
$schemaService    = generateServiceSchema($service);
$schemaFAQ        = generateFAQSchema($faqs);
$schemaBreadcrumb = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => 'Fence Installation', 'url' => '/services/fence-installation/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaService; ?>
<?php echo $schemaFAQ; ?>
<?php echo $schemaBreadcrumb; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     FENCE INSTALLATION SERVICE PAGE — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── 1. HERO ────────────────────────────────────────────── */
.hero--fence {
  position: relative;
  min-height: 65vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-16)) var(--space-4) var(--space-12);
  background-image: url('<?php echo htmlspecialchars($heroImage); ?>');
  background-size: cover;
  background-position: center 35%;
  overflow: hidden;
}
.hero--fence::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(170deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.68) 50%, rgba(77,94,111,0.5) 100%);
  z-index: 1;
}
.hero--fence::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--fence > * { position: relative; z-index: 2; }
.hero--fence .hero-eyebrow {
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
.hero--fence .hero-eyebrow i,
.hero--fence .hero-eyebrow svg { width: 16px; height: 16px; }
.hero--fence h1 {
  color: var(--color-white);
  max-width: 820px;
  margin: 0 auto var(--space-4);
  text-wrap: balance;
}
.hero--fence h1 .text-accent { color: var(--color-accent); }
.hero--fence .hero-answer {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  line-height: 1.75;
  max-width: 640px;
  margin: 0 auto var(--space-6);
}
.hero--fence .hero-cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero--fence .hero-trust-row {
  display: flex;
  gap: var(--space-6);
  justify-content: center;
  flex-wrap: wrap;
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255,255,255,0.12);
}
.hero--fence .hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.hero--fence .hero-trust-item i,
.hero--fence .hero-trust-item svg {
  width: 18px; height: 18px;
  color: var(--color-accent);
}
.hero--fence .breadcrumb {
  display: flex;
  gap: var(--space-2);
  justify-content: center;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
  margin-bottom: var(--space-6);
}
.hero--fence .breadcrumb a { color: rgba(255,255,255,0.65); }
.hero--fence .breadcrumb a:hover { color: var(--color-accent); }
.hero--fence .breadcrumb-sep { color: rgba(255,255,255,0.35); }

/* ── Hero SVG Divider ───────────────────────────────────── */
.divider-curve--bottom {
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  z-index: 3;
}
.divider-curve--bottom svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── 2. PROBLEM STATEMENT ───────────────────────────────── */
.fence-problem {
  position: relative;
  background: var(--color-bg);
  overflow: hidden;
}
.fence-problem .pull-quote {
  font-family: var(--font-heading);
  font-size: var(--font-size-2xl);
  font-weight: 700;
  line-height: 1.35;
  color: var(--color-dark);
  max-width: 720px;
  margin: 0 auto var(--space-10);
  text-align: center;
  text-wrap: balance;
  position: relative;
}
.fence-problem .pull-quote::before {
  content: '';
  display: block;
  width: 60px;
  height: 4px;
  background: var(--color-accent);
  margin: 0 auto var(--space-6);
  border-radius: var(--radius-full);
}
.fence-problem .pull-quote .text-accent { color: var(--color-accent); }
.fence-problem .bento-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: var(--space-5);
}
.fence-problem .bento-card {
  padding: var(--space-6) var(--space-5);
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.fence-problem .bento-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.fence-problem .bento-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.fence-problem .bento-card p {
  color: var(--color-text-light);
  line-height: 1.6;
  font-size: var(--font-size-sm);
}
.fence-problem .bento-card-icon {
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
.fence-problem .bento-card-icon i,
.fence-problem .bento-card-icon svg { width: 22px; height: 22px; }

/* Floating accent */
.fence-float-ring {
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  border: 40px solid var(--color-secondary);
  opacity: 0.04;
  left: -80px;
  bottom: 5%;
  z-index: 0;
  animation: float-ring 14s ease-in-out infinite;
}
@keyframes float-ring {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-18px) rotate(8deg); }
}

/* ── 3. EXPERT POSITIONING ──────────────────────────────── */
.fence-expert {
  background: var(--color-bg-alt);
  position: relative;
  overflow: hidden;
}
.fence-expert .grid-asym-reverse {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-10);
  align-items: center;
}
.fence-expert .stat-hero {
  text-align: center;
  padding: var(--space-10);
  background: var(--color-dark);
  border-radius: var(--radius-xl);
  position: relative;
  overflow: hidden;
}
.fence-expert .stat-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(225deg, transparent 40%, rgba(227,70,2,0.12) 100%);
}
.fence-expert .stat-hero > * { position: relative; z-index: 1; }
.fence-expert .stat-number {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-2);
}
.fence-expert .stat-label {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  font-weight: 600;
}
.fence-expert .stat-sub {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.5);
  margin-top: var(--space-2);
}
.fence-expert .differ-list {
  list-style: none;
  padding: 0;
  margin: var(--space-6) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.fence-expert .differ-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  font-size: var(--font-size-lg);
  line-height: 1.55;
}
.fence-expert .differ-icon {
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
.fence-expert .differ-icon i,
.fence-expert .differ-icon svg { width: 16px; height: 16px; }
.fence-expert .answer-block {
  max-width: var(--content-width);
  color: var(--color-text-light);
  line-height: 1.7;
}
.fence-expert h2 { text-wrap: balance; }

/* ── SVG Divider: Wave ──────────────────────────────────── */
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

/* ── 4. SERVICE BREAKDOWN ───────────────────────────────── */
.fence-breakdown {
  background: var(--color-bg);
  position: relative;
}
.fence-breakdown .split-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-10);
  align-items: start;
}
.fence-breakdown .checklist {
  list-style: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.fence-breakdown .checklist li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  padding: var(--space-3) var(--space-4);
  border-radius: var(--radius-md);
  background: var(--color-card-tint-2);
  font-size: var(--font-size-base);
  line-height: 1.5;
  transition: transform var(--transition-fast);
}
.fence-breakdown .checklist li:hover { transform: translateX(4px); }
.fence-breakdown .checklist-icon {
  flex-shrink: 0;
  color: var(--color-accent);
  margin-top: 2px;
}
.fence-breakdown .checklist-icon i,
.fence-breakdown .checklist-icon svg { width: 18px; height: 18px; }
.fence-breakdown .timeline {
  display: flex;
  flex-direction: column;
  gap: 0;
  position: relative;
  padding-left: var(--space-8);
}
.fence-breakdown .timeline::before {
  content: '';
  position: absolute;
  left: 15px;
  top: 0;
  bottom: 0;
  width: 3px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-secondary));
  border-radius: var(--radius-full);
}
.fence-breakdown .timeline-step {
  position: relative;
  padding: var(--space-4) 0;
}
.fence-breakdown .timeline-step::before {
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
.fence-breakdown .timeline-step h4 {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-dark);
  margin-bottom: var(--space-1);
}
.fence-breakdown .timeline-step p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}
.fence-breakdown .answer-block {
  max-width: var(--content-width);
  color: var(--color-text-light);
  line-height: 1.7;
}
.fence-breakdown h2 { text-wrap: balance; }
.fence-breakdown .section-image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-top: var(--space-8);
}
.fence-breakdown .section-image img {
  width: 100%;
  height: auto;
  display: block;
}

/* ── 5. PROOF / REVIEWS ─────────────────────────────────── */
.fence-reviews {
  background: var(--color-dark);
  position: relative;
  overflow: hidden;
}
.fence-reviews::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, transparent 45%, rgba(227,70,2,0.07) 100%);
}
.fence-reviews > * { position: relative; z-index: 1; }
.fence-reviews h2 {
  color: var(--color-white);
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-3);
}
.fence-reviews .answer-block {
  text-align: center;
  max-width: 600px;
  margin: 0 auto var(--space-10);
  color: rgba(255,255,255,0.7);
  line-height: 1.7;
}
.fence-reviews .review-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.fence-review-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.08);
  backdrop-filter: blur(6px);
  transition: transform var(--transition-base);
}
.fence-review-card:hover { transform: translateY(-4px); }
.fence-review-card .stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-3);
  color: var(--color-star);
}
.fence-review-card .stars i,
.fence-review-card .stars svg { width: 18px; height: 18px; }
.fence-review-card blockquote {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-base);
  line-height: 1.7;
  font-style: italic;
  margin-bottom: var(--space-4);
}
.fence-review-card .reviewer {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.5);
  font-weight: 600;
}

/* ── 6. COMPARISON TABLE ────────────────────────────────── */
.fence-compare {
  background: var(--color-bg-alt);
  position: relative;
}
.fence-compare h2 { text-align: center; text-wrap: balance; margin-bottom: var(--space-3); }
.fence-compare .answer-block {
  text-align: center;
  max-width: 600px;
  margin: 0 auto var(--space-10);
  color: var(--color-text-light);
  line-height: 1.7;
}
.fence-compare .compare-table {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  border-collapse: separate;
  border-spacing: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.fence-compare .compare-table thead th {
  padding: var(--space-4) var(--space-6);
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: var(--font-size-base);
  text-align: left;
}
.fence-compare .compare-table thead th:first-child {
  background: var(--color-gray-light);
  color: var(--color-gray-dark);
}
.fence-compare .compare-table thead th:last-child {
  background: var(--color-accent);
  color: var(--color-white);
}
.fence-compare .compare-table tbody td {
  padding: var(--space-4) var(--space-6);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  vertical-align: top;
  border-bottom: 1px solid var(--color-border);
}
.fence-compare .compare-table tbody tr:last-child td { border-bottom: none; }
.fence-compare .compare-table tbody td:first-child {
  background: var(--color-white);
  color: var(--color-text-light);
}
.fence-compare .compare-table tbody td:last-child {
  background: rgba(227,70,2,0.04);
  color: var(--color-dark);
  font-weight: 500;
}

/* ── 7. FAQ ─────────────────────────────────────────────── */
.fence-faq {
  background: var(--color-bg);
  position: relative;
}
.fence-faq h2 { text-align: center; text-wrap: balance; margin-bottom: var(--space-3); }
.fence-faq .section-subtitle {
  text-align: center;
  color: var(--color-text-light);
  margin-bottom: var(--space-10);
}
.fence-faq .faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-5);
  max-width: 1000px;
  margin: 0 auto;
}
.fence-faq .faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border-left: 4px solid var(--color-accent);
  transition: box-shadow var(--transition-base);
}
.fence-faq .faq-item:hover { box-shadow: var(--shadow-md); }
.fence-faq .faq-item h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.fence-faq .faq-answer {
  color: var(--color-text-light);
  line-height: 1.75;
  font-size: var(--font-size-sm);
}
.fence-faq .faq-image-col {
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-top: var(--space-10);
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}
.fence-faq .faq-image-col img {
  width: 100%;
  height: auto;
  display: block;
}

/* ── 8. FINAL CTA ───────────────────────────────────────── */
.fence-final-cta {
  background: var(--color-dark);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.fence-final-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at center top, rgba(227,70,2,0.1) 0%, transparent 60%);
}
.fence-final-cta > * { position: relative; z-index: 1; }
.fence-final-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-3);
  text-wrap: balance;
}
.fence-final-cta .answer-block {
  color: rgba(255,255,255,0.75);
  max-width: 600px;
  margin: 0 auto var(--space-6);
  line-height: 1.7;
}
.fence-final-cta .cta-row {
  display: flex;
  gap: var(--space-4);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── RELATED SERVICES ───────────────────────────────────── */
.fence-related {
  background: var(--color-bg-alt);
}
.fence-related h2 {
  text-align: center;
  text-wrap: balance;
  margin-bottom: var(--space-10);
}

/* ── SVG Divider: Slant ─────────────────────────────────── */
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

/* ── RESPONSIVE ─────────────────────────────────────────── */
@media (max-width: 1024px) {
  .fence-expert .grid-asym-reverse { grid-template-columns: 1fr; }
  .fence-breakdown .split-content { grid-template-columns: 1fr; }
  .fence-problem .bento-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .hero--fence { min-height: 55vh; }
  .fence-problem .bento-grid { grid-template-columns: 1fr; }
  .fence-reviews .review-grid { grid-template-columns: 1fr; }
  .fence-faq .faq-grid { grid-template-columns: 1fr; }
  .fence-compare .compare-table thead th,
  .fence-compare .compare-table tbody td {
    padding: var(--space-3) var(--space-4);
  }
  .hero--fence .hero-trust-row { gap: var(--space-4); }
  .fence-problem .pull-quote { font-size: var(--font-size-xl); }
}
@media (max-width: 480px) {
  .hero--fence .hero-cta-row { flex-direction: column; align-items: center; }
  .hero--fence .hero-cta-row .btn { width: 100%; max-width: 300px; }
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
<section class="hero hero--fence">
  <div>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Fence Installation</span>
    </nav>
    <span class="hero-eyebrow"><i data-lucide="fence"></i> Fence Installation</span>
    <h1>Professional <span class="text-accent">Fence Installation</span> in Damascus, OR</h1>
    <p class="hero-answer"><?php echo htmlspecialchars($siteName); ?> is a licensed general contractor based in Damascus, Oregon, building residential and commercial fences from cedar, vinyl, chain-link, and custom materials. We drill our own post holes, set posts in concrete at 36-inch depth, and handle old fence removal, grading, and Clackamas County permit coordination.</p>
    <div class="hero-cta-row">
      <a href="/contact/" class="btn btn-accent btn-lg">Get a Free Fence Estimate</a>
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
  <div class="divider-curve--bottom">
    <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,80 C360,0 1080,0 1440,80 L1440,80 L0,80 Z"/>
    </svg>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     2. PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="section fence-problem" aria-label="Why fencing matters">
  <div class="fence-float-ring"></div>
  <div class="container" style="position:relative;z-index:1;">
    <span class="eyebrow-label reveal-up">Common Issues</span>
    <h2 class="reveal-up" style="text-align:center;margin-bottom:var(--space-3);text-wrap:balance;">What happens when a fence is <span class="text-accent">installed incorrectly</span> in Oregon?</h2>
    <p class="answer-block reveal-up" style="text-align:center;max-width:650px;margin:0 auto var(--space-8);color:var(--color-text-light);line-height:1.7;">A poorly built fence fails within 3 to 5 years in Oregon's wet climate. Shallow posts heave in freeze-thaw cycles, untreated wood rots from ground contact, and fences built on the wrong side of property lines create costly legal disputes. These four signs point to installation shortcuts.</p>
    <div class="pull-quote reveal-up">
      Oregon's rain and clay soil punish every shortcut — a fence built <span class="text-accent">right the first time</span> lasts 20 years instead of 5.
    </div>
    <div class="bento-grid">
      <div class="bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="bento-card-icon"><i data-lucide="move-vertical"></i></div>
        <h3>Leaning Posts</h3>
        <p>Posts set less than 30 inches deep shift when Damascus clay soil expands and contracts seasonally. Within two winters, entire fence sections lean 10+ degrees.</p>
      </div>
      <div class="bento-card card-tint-2 reveal-up reveal-delay-2">
        <div class="bento-card-icon"><i data-lucide="droplets"></i></div>
        <h3>Premature Rot</h3>
        <p>Untreated or improperly sealed wood absorbs moisture from the ground up. Oregon's 40+ inches of annual rainfall accelerates rot at the post base where it's invisible until the fence collapses.</p>
      </div>
      <div class="bento-card card-tint-3 reveal-up reveal-delay-3">
        <div class="bento-card-icon"><i data-lucide="map"></i></div>
        <h3>Property Line Disputes</h3>
        <p>Fences built without a survey can encroach on a neighbor's lot. In Clackamas County, the encroaching party may be forced to remove the fence and rebuild at their expense.</p>
      </div>
      <div class="bento-card card-tint-1 reveal-up reveal-delay-1">
        <div class="bento-card-icon"><i data-lucide="wind"></i></div>
        <h3>Wind Damage</h3>
        <p>Solid privacy fences without proper post spacing catch wind like a sail. Columbia Gorge gusts hitting the east Portland Metro area can flatten under-engineered fence runs in a single storm.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     3. EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="section fence-expert" aria-label="Why choose Workhorse">
  <div class="divider-wave--top">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)">
      <path d="M0,60 C480,0 960,0 1440,60 L1440,0 L0,0 Z"/>
    </svg>
  </div>
  <div class="container">
    <span class="eyebrow-label reveal-up">Our Approach</span>
    <h2 class="reveal-up">Why choose <?php echo htmlspecialchars($siteName); ?> for <span class="text-accent">fence installation</span> near me in Damascus?</h2>
    <p class="answer-block reveal-up">We are not a fence-only company. We are a site work contractor that also builds fences — which means we own the excavation equipment to drill post holes through rock, grade uneven terrain before setting posts, and haul off old fencing without hiring a second crew.</p>

    <div class="grid-asym-reverse reveal-up">
      <div>
        <ul class="differ-list">
          <li class="reveal-left reveal-delay-1">
            <span class="differ-icon"><i data-lucide="hard-hat"></i></span>
            <div><strong>Site Work Capability</strong> — We grade slopes, remove stumps, and drill through basalt before setting a single post. Other fence contractors call someone like us when they hit rock. We handle it in-house.</div>
          </li>
          <li class="reveal-left reveal-delay-2">
            <span class="differ-icon"><i data-lucide="ruler"></i></span>
            <div><strong>36-Inch Deep Posts in Concrete</strong> — Every post is set a full 36 inches deep with concrete and a crowned top. That's 50% deeper than many contractors use in this area — and the reason our fences stay plumb for decades.</div>
          </li>
          <li class="reveal-left reveal-delay-3">
            <span class="differ-icon"><i data-lucide="shield-check"></i></span>
            <div><strong>2-Year Workmanship Warranty</strong> — Our labor warranty covers post stability, rail connections, and structural integrity. If a post shifts or a rail detaches within two years, we fix it at no charge.</div>
          </li>
        </ul>
      </div>
      <div class="stat-hero">
        <div class="stat-number" data-target="350">350+</div>
        <div class="stat-label">Fences Installed</div>
        <div class="stat-sub">Damascus, Gresham, Happy Valley, Sandy &amp; Boring</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     4. SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="section fence-breakdown" aria-label="What fence installation includes">
  <div class="container">
    <span class="eyebrow-label reveal-up">What's Included</span>
    <h2 class="reveal-up">What does <span class="text-accent">fence installation</span> include from start to finish?</h2>
    <p class="answer-block reveal-up">Every fence project includes property line verification, post-hole drilling, concrete setting, rail and picket installation, gate construction, and cleanup. We handle old fence tear-out as an add-on and coordinate any required Clackamas County permits.</p>

    <div class="split-content">
      <div class="reveal-left">
        <h3 style="margin-bottom:var(--space-4);">Included in Every Fence Project</h3>
        <ul class="checklist">
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Property line review with existing survey or plat map</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> 811 utility locate before drilling</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Post-hole drilling to 36-inch minimum depth</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Concrete post setting with crowned water-shedding top</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Pressure-treated or cedar posts with ground-contact rating</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Level and plumb rail installation</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Gate framing with heavy-duty hardware</li>
          <li><span class="checklist-icon"><i data-lucide="check-circle"></i></span> Full cleanup and debris haul-off</li>
        </ul>
      </div>
      <div class="reveal-right">
        <h3 style="margin-bottom:var(--space-4);">Our Process — Step by Step</h3>
        <div class="timeline">
          <div class="timeline-step">
            <h4>1. Site Visit &amp; Estimate</h4>
            <p>We walk the fence line, measure total linear footage, identify terrain challenges, and provide a fixed-price quote with material options.</p>
          </div>
          <div class="timeline-step">
            <h4>2. Material Selection</h4>
            <p>Choose from cedar, pressure-treated wood, vinyl, chain-link, or split rail. We bring samples and explain the lifespan, maintenance, and cost of each.</p>
          </div>
          <div class="timeline-step">
            <h4>3. Old Fence Removal (If Needed)</h4>
            <p>Tear-out of existing fencing including posts set in concrete. All material hauled off-site for disposal or recycling.</p>
          </div>
          <div class="timeline-step">
            <h4>4. Post-Hole Drilling &amp; Setting</h4>
            <p>Holes drilled to 36 inches with our auger equipment. Posts set in concrete, leveled, braced, and left to cure 24-48 hours.</p>
          </div>
          <div class="timeline-step">
            <h4>5. Rails, Pickets &amp; Gate Install</h4>
            <p>Horizontal rails attached, pickets fastened with stainless or galvanized fasteners, and gates hung with self-closing or latch hardware.</p>
          </div>
          <div class="timeline-step">
            <h4>6. Final Inspection &amp; Cleanup</h4>
            <p>Full walk-through with you to verify alignment, gate operation, and finish. All debris removed, site raked clean.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section-image reveal-scale" style="margin-top:var(--space-10);">
      <img src="<?php echo htmlspecialchars($bodyImage1); ?>" alt="Fence post installation in Damascus, OR by Workhorse Site Solutions" width="900" height="540" loading="lazy">
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     5. PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="section fence-reviews" aria-label="Customer reviews">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;color:var(--color-accent);">What Clients Say</span>
    <h2 class="reveal-up">What do Damascus homeowners say about our <span class="text-accent">fence work</span>?</h2>
    <p class="answer-block reveal-up">Our fencing clients consistently mention post depth, material selection guidance, and the fact that we handle terrain challenges other contractors walk away from. Here is what three recent clients had to say.</p>

    <div class="review-grid">
      <div class="fence-review-card reveal-up reveal-delay-1">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"Two other fence companies told us they couldn't drill through the rock on our Damascus hillside property. Workhorse brought their excavator, drilled every hole, and installed a beautiful 6-foot cedar fence in three days. Solid as a rock — literally."</blockquote>
        <span class="reviewer">— Mike &amp; Jen P., Damascus, OR | Cedar Privacy Fence</span>
      </div>
      <div class="fence-review-card reveal-up reveal-delay-2">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"They removed our 25-year-old chain link, graded the fence line to fix a drainage issue, and installed a vinyl privacy fence — all in one project. No coordinating multiple contractors. Price was competitive with the fence-only companies."</blockquote>
        <span class="reviewer">— Andrea S., Happy Valley, OR | Vinyl Privacy Fence</span>
      </div>
      <div class="fence-review-card reveal-up reveal-delay-3">
        <div class="stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <blockquote>"Needed a 300-foot perimeter fence for our Boring property. The crew handled the slope changes with a stepped design that looks great and follows the terrain perfectly. They even installed a double-swing gate for equipment access. Highly recommend."</blockquote>
        <span class="reviewer">— Dave R., Boring, OR | Cedar Perimeter Fence</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     6. COMPARISON TABLE
     ═══════════════════════════════════════════════════════ -->
<section class="section fence-compare" aria-label="Contractor comparison">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;">How We Stack Up</span>
    <h2 class="reveal-up">How does <?php echo htmlspecialchars($siteName); ?> compare to other <span class="text-accent">fence contractors</span>?</h2>
    <p class="answer-block reveal-up">The gap between a fence that lasts 5 years and one that lasts 20 comes down to post depth, fastener quality, and whether anyone graded the site first. Here is how our approach differs from the standard fence contractor.</p>

    <table class="compare-table reveal-up">
      <thead>
        <tr>
          <th>Other Fence Contractors</th>
          <th>Workhorse Site Solutions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Posts set 18-24 inches deep — minimum code compliance</td>
          <td>Posts set 36 inches deep in concrete — 50% deeper than minimum</td>
        </tr>
        <tr>
          <td>Walk away from rocky soil — "we can't drill here"</td>
          <td>Own excavation equipment with rock auger and hydraulic breaker</td>
        </tr>
        <tr>
          <td>Refer you to another company for old fence removal</td>
          <td>Full tear-out, haul-off, and disposal handled by our crew</td>
        </tr>
        <tr>
          <td>Skip grading — install fence on uneven ground as-is</td>
          <td>Grade fence line for proper drainage and consistent fence height</td>
        </tr>
        <tr>
          <td>Standard wood screws that rust in Oregon rain</td>
          <td>Stainless steel or hot-dipped galvanized fasteners throughout</td>
        </tr>
        <tr>
          <td>No warranty or verbal-only promises</td>
          <td>Written 2-year workmanship warranty on every installation</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     7. FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="section fence-faq" aria-label="Frequently asked questions">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="text-align:center;display:block;">Fence Installation FAQ</span>
    <h2 class="reveal-up">What questions do Damascus homeowners ask about <span class="text-accent">fence installation</span>?</h2>
    <p class="section-subtitle reveal-up">Answers based on <?php echo $yearsInBusiness; ?>+ years of local fencing experience</p>

    <div class="faq-grid">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>">
        <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="faq-image-col reveal-scale">
      <img src="<?php echo htmlspecialchars($bodyImage2); ?>" alt="Completed fence installation on a residential property in Damascus, OR" width="700" height="420" loading="lazy">
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     8. FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="section fence-final-cta" aria-label="Get started">
  <div class="container">
    <span class="eyebrow-label reveal-up" style="display:block;text-align:center;color:var(--color-accent);">Start Your Project</span>
    <h2 class="reveal-up">Ready to get your new <span class="text-accent">fence</span> built?</h2>
    <p class="answer-block reveal-up">Every fence project begins with a free on-site estimate. We measure the fence line, assess terrain and soil conditions, present material options with pricing, and deliver a fixed-price quote — typically within 24 hours of the visit.</p>
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
<section class="section fence-related" aria-label="Related services">
  <div class="container">
    <h2 class="reveal-up">Other Services You May Need</h2>
    <div class="services-grid" style="grid-template-columns:repeat(3,1fr);">
      <?php
      $related = getRelatedServices('fence-installation', 3);
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

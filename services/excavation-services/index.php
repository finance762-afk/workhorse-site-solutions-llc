<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('excavation-services');
$pageTitle       = $service['name'] . ' in Damascus, OR | ' . $siteName;
$pageDescription = 'Licensed excavation contractor in Damascus, OR. Workhorse Site Solutions handles residential and commercial digs — foundations, utilities, drainage, and land development across the Portland Metro Area.';
$canonicalUrl    = $siteUrl . '/services/' . $service['slug'] . '/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396273035-84csrf-481103535_608058122218175_6060079720789259957_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '7';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396273035-84csrf-481103535_608058122218175_6060079720789259957_n.jpg';
$bodyPhotos = [
    $photoBase . '1779396417127-e2a67v-481978105_604909045866416_5049096311889908819_n.jpg',
    $photoBase . '1779396422190-fkuakh-481982904_605954445761876_5082188994743706509_n.jpg',
    $photoBase . '1779396427064-8fxum7-481987081_608069152217072_7714576008596587681_n.jpg',
];

/* ── Service Image + Icon Maps (for related services cards) ── */
$serviceImages = [
    'junk-removal-cleanouts'        => $photoBase . '1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg',
    'excavation-services'           => $heroPhoto,
    'demolition'                    => $photoBase . '1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg',
    'land-clearing'                 => $photoBase . '1779396313562-xq2js1-481701393_605954449095209_2349548257896328613_n.jpg',
    'tree-services'                 => $photoBase . '1779396318170-psrogl-481705784_605960762427911_845944733817866550_n.jpg',
    'site-preparation-grading'      => $photoBase . '1779396323298-kfnmea-481764174_605959765761344_5422074130262060362_n.jpg',
    'trenching'                     => $photoBase . '1779396334785-q74t8c-481770500_605969619093692_3211402394288864358_n.jpg',
    'fence-installation'            => $photoBase . '1779396339937-xc7wc2-481770700_605954432428544_6388616634957804134_n.jpg',
    'deck-patio-construction'       => $photoBase . '1779396350225-vjqwww-481782847_604444459246208_4830443631052873384_n.jpg',
    'driveway-services'             => $photoBase . '1779396355425-qis7fl-481783972_604904149200239_7919437156192045435_n.jpg',
    'general-contracting'           => $photoBase . '1779396363449-wyzf8f-481785958_604894925867828_2034594633166557511_n.jpg',
    'commercial-residential-cleanup'=> $photoBase . '1779396375954-kc1dx4-481899092_608065538884100_6123232012629192040_n.jpg',
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

/* ── FAQs ────────────────────────────────────────────────── */
$faqs = [
    [
        'question' => 'How much does residential excavation cost in Damascus, OR?',
        'answer'   => 'Residential excavation in Damascus typically ranges from $1,500 to $8,000 depending on scope, soil conditions, and equipment required. A simple utility trench runs around $1,500 while a full foundation dig for a new build can reach $6,000 to $8,000. We provide free on-site estimates.',
    ],
    [
        'question' => 'What types of excavation does Workhorse Site Solutions perform?',
        'answer'   => 'We handle foundation digs, utility trenching, drainage installation, pond and retention basin excavation, driveway grading, septic system prep, and general earthmoving. Both residential and commercial projects are within our scope across Damascus and the Portland Metro Area.',
    ],
    [
        'question' => 'Do I need a permit for excavation work in Damascus?',
        'answer'   => 'Most excavation projects in Clackamas County require a grading or development permit, especially for work near setbacks, wetlands, or slopes exceeding 20%. We coordinate with the county planning department and can guide you through the permit requirements before breaking ground.',
    ],
    [
        'question' => 'How long does a typical excavation project take?',
        'answer'   => 'Simple utility trenches take 1 to 2 days. Foundation excavation for a residential project averages 3 to 5 days. Larger commercial or multi-phase earthmoving projects may run 1 to 3 weeks. Weather and soil conditions in the Willamette Valley can affect scheduling during winter months.',
    ],
    [
        'question' => 'Can you excavate on steep or sloped lots in the Damascus hills?',
        'answer'   => 'Yes. Damascus properties often sit on rolling terrain with clay-heavy soils and seasonal water tables. Our operators have years of experience cutting and benching hillside lots, managing erosion control, and working within the slope stability requirements of Clackamas County.',
    ],
    [
        'question' => 'What equipment does Workhorse bring to an excavation site?',
        'answer'   => 'We run mini excavators, standard excavators, skid steers, and dump trucks sized to fit the job. For tight residential lots in Damascus neighborhoods, our compact equipment accesses spaces that full-size machines cannot reach without damaging driveways or landscaping.',
    ],
    [
        'question' => 'Do you handle utility locates before digging?',
        'answer'   => 'We coordinate with Oregon Utility Notification Center (OUNC) to schedule utility locates before every dig. This is legally required and protects against hitting gas, water, electric, or communication lines. We never break ground until all utilities are marked and cleared.',
    ],
    [
        'question' => 'Is excavation available in Gresham, Sandy, and Happy Valley?',
        'answer'   => 'Absolutely. We serve the full Portland Metro East corridor — Damascus, Gresham, Sandy, Boring, Happy Valley, Clackamas, and Milwaukie. Our shop is in Damascus, so nearby communities receive priority scheduling and reduced mobilization costs.',
    ],
];

/* ── Schema Markup ──────────────────────────────────────── */
$schemaMarkup  = generateServiceSchema($service);
$schemaMarkup .= generateFAQSchema($faqs);
$schemaMarkup .= generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Services', 'url' => '/services/'],
    ['name' => $service['name'], 'url' => '/services/' . $service['slug'] . '/'],
]);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $schemaMarkup; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     EXCAVATION SERVICES — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Excavation Hero ────────────────────────────────────── */
.hero--excavation {
  position: relative;
  min-height: 88vh;
  display: flex;
  align-items: center;
  padding: var(--space-16) 0;
  overflow: hidden;
  background: var(--color-dark);
}
.hero--excavation__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.hero--excavation__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 40%;
}
.hero--excavation::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.6) 50%,
    rgba(var(--color-primary-rgb), 0.3) 100%
  );
}
.hero--excavation::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events: none;
}
.hero--excavation .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.hero--excavation__split {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.hero--excavation__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-4);
}
.hero--excavation__eyebrow i,
.hero--excavation__eyebrow svg {
  width: 18px;
  height: 18px;
}
.hero--excavation h1 {
  color: var(--color-white);
  max-width: 18ch;
  margin-bottom: var(--space-6);
}
.hero--excavation h1 .text-accent {
  color: var(--color-accent);
}
.hero--excavation .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.85);
  max-width: 54ch;
  margin-bottom: var(--space-8);
}
.hero--excavation__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.hero--excavation__trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255, 255, 255, 0.15);
}
.hero--excavation__trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.75);
  font-weight: 600;
}
.hero--excavation__trust-item i,
.hero--excavation__trust-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
}
.hero--excavation__image-col {
  position: relative;
}
.hero--excavation__image-col img {
  border-radius: var(--radius-xl);
  width: 100%;
  height: auto;
  box-shadow: var(--shadow-xl);
}
.hero--excavation__stat-badge {
  position: absolute;
  bottom: -20px;
  left: -20px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-4) var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  box-shadow: var(--shadow-lg);
  z-index: 4;
}
.hero--excavation__stat-badge strong {
  display: block;
  font-family: var(--font-heading);
  font-size: var(--font-size-3xl);
  font-weight: 900;
  line-height: 1;
}
.hero--excavation__stat-badge span {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: 700;
}
.hero--excavation .breadcrumb {
  position: absolute;
  top: calc(var(--nav-height) + var(--space-4));
  left: var(--space-4);
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-xs);
  color: rgba(255, 255, 255, 0.55);
  z-index: 3;
}
.hero--excavation .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.hero--excavation .breadcrumb a:hover {
  color: var(--color-accent);
}
.breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
}

/* ── Section Base (shared) ──────────────────────────────── */
.exc-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.exc-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.exc-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.exc-section .floating-accent--1 {
  width: 380px;
  height: 380px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  top: -100px;
  left: -140px;
}
.exc-section .floating-accent--2 {
  width: 280px;
  height: 280px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  bottom: -80px;
  right: -100px;
}
.exc-section__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.exc-section h2 {
  margin-bottom: var(--space-4);
}
.exc-section h2 .text-accent {
  color: var(--color-accent);
}
.exc-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}

/* ── SVG Dividers ───────────────────────────────────────── */
.divider-chevron {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.divider-chevron svg {
  display: block;
  width: 100%;
  height: auto;
}
.divider-slant {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.divider-slant svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section 2: Problem — Bento Grid ───────────────────── */
.problem-exc {
  background: var(--color-bg);
}
.problem-exc__intro {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: var(--space-10);
  align-items: start;
  margin-bottom: var(--space-10);
}
.problem-exc__pullquote {
  font-family: var(--font-heading);
  font-size: clamp(1.3rem, 2.2vw, 1.75rem);
  font-weight: 700;
  line-height: 1.35;
  color: var(--color-dark);
  position: relative;
  padding-left: var(--space-6);
}
.problem-exc__pullquote::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 4px;
  background: var(--color-accent);
  border-radius: 2px;
}
.problem-exc__image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  aspect-ratio: 16 / 10;
}
.problem-exc__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.problem-bento {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: auto auto;
  gap: var(--space-4);
}
.problem-bento__card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  transition: transform var(--transition-base);
}
.problem-bento__card:hover {
  transform: translateY(-3px);
}
.problem-bento__card--wide {
  grid-column: span 2;
}
.problem-bento__icon {
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.problem-bento__icon i,
.problem-bento__icon svg {
  width: 20px;
  height: 20px;
}
.problem-bento__card h3 {
  font-size: var(--font-size-lg);
  color: var(--color-dark);
}
.problem-bento__card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.6;
}

/* ── Section 3: Expert — Asymmetric Split ──────────────── */
.expert-exc {
  background: var(--color-light);
}
.expert-exc__layout {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: var(--space-12);
  align-items: center;
}
.expert-exc__image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 3 / 4;
}
.expert-exc__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.expert-exc__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.expert-exc__stat {
  display: flex;
  align-items: baseline;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
}
.expert-exc__stat-num {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.expert-exc__stat-label {
  font-size: var(--font-size-lg);
  color: var(--color-gray);
  font-weight: 600;
}
.expert-exc__text {
  font-size: var(--font-size-lg);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 52ch;
  margin-bottom: var(--space-8);
}
.expert-exc__diffs {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.expert-exc__diff {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.expert-exc__diff-icon {
  flex-shrink: 0;
  width: 44px;
  height: 44px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.expert-exc__diff-icon i,
.expert-exc__diff-icon svg {
  width: 20px;
  height: 20px;
}
.expert-exc__diff h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
}
.expert-exc__diff p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.55;
}

/* ── Section 4: Breakdown — Dark Split ─────────────────── */
.breakdown-exc {
  background: var(--color-dark);
  color: var(--color-white);
}
.breakdown-exc h2 { color: var(--color-white); }
.breakdown-exc .answer-block { color: rgba(255,255,255,0.7); }
.breakdown-exc .exc-section__eyebrow { color: var(--color-accent); }
.breakdown-exc__layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
}
.breakdown-exc__list h3 {
  font-size: var(--font-size-xl);
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.breakdown-exc__items {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.breakdown-exc__items li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  color: rgba(255,255,255,0.8);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.breakdown-exc__items li i,
.breakdown-exc__items li svg {
  width: 18px; height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.breakdown-exc__process h3 {
  font-size: var(--font-size-xl);
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.exc-timeline {
  position: relative;
  padding-left: var(--space-8);
}
.exc-timeline::before {
  content: '';
  position: absolute;
  left: 15px;
  top: 8px;
  bottom: 8px;
  width: 2px;
  background: rgba(var(--color-accent-rgb), 0.3);
}
.exc-timeline__step {
  position: relative;
  padding-bottom: var(--space-8);
}
.exc-timeline__step:last-child { padding-bottom: 0; }
.exc-timeline__num {
  position: absolute;
  left: calc(-1 * var(--space-8) - 1px);
  top: 0;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: var(--color-accent);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
}
.exc-timeline__step h4 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.exc-timeline__step p {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  line-height: 1.6;
  max-width: 42ch;
}

/* ── Section 5: Proof ───────────────────────────────────── */
.proof-exc {
  background: var(--color-bg);
}
.proof-exc__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.proof-exc__card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  position: relative;
}
.proof-exc__card::before {
  content: '\201C';
  position: absolute;
  top: var(--space-4);
  right: var(--space-6);
  font-family: var(--font-heading);
  font-size: 4rem;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 0.1);
}
.proof-exc__stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-4);
  color: var(--color-star);
}
.proof-exc__stars i, .proof-exc__stars svg { width: 18px; height: 18px; }
.proof-exc__quote {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  margin-bottom: var(--space-6);
  font-style: italic;
}
.proof-exc__author {
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-dark);
}
.proof-exc__meta {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
}

/* ── Section 6: Comparison ──────────────────────────────── */
.compare-exc {
  background: var(--color-light);
}
.compare-exc__table {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.compare-exc__col {
  padding: var(--space-8) var(--space-6);
}
.compare-exc__col--other { background: var(--color-bg); }
.compare-exc__col--us { background: var(--color-dark); color: var(--color-white); }
.compare-exc__col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-6);
  padding-bottom: var(--space-4);
  border-bottom: 2px solid rgba(var(--color-accent-rgb), 0.3);
}
.compare-exc__col--us h3 { color: var(--color-accent); }
.compare-exc__col--other h3 { color: var(--color-gray); }
.compare-exc__list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.compare-exc__list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  line-height: 1.55;
}
.compare-exc__list li i, .compare-exc__list li svg {
  width: 20px; height: 20px;
  flex-shrink: 0;
  margin-top: 2px;
}
.compare-exc__col--other .compare-exc__list li i { color: var(--color-danger); }
.compare-exc__col--us .compare-exc__list li i { color: var(--color-success); }

/* ── Section 7: FAQ ─────────────────────────────────────── */
.faq-exc {
  background: var(--color-bg);
}
.faq-exc__container {
  max-width: 780px;
  margin: 0 auto;
}
.faq-exc__item {
  border-bottom: 1px solid var(--color-border);
  overflow: hidden;
}
.faq-exc__item:first-child {
  border-top: 1px solid var(--color-border);
}
.faq-exc__question {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-4);
  padding: var(--space-6) 0;
  background: none;
  border: none;
  cursor: pointer;
  text-align: left;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-dark);
  line-height: 1.3;
  transition: color var(--transition-fast);
}
.faq-exc__question:hover { color: var(--color-accent); }
.faq-exc__toggle {
  flex-shrink: 0;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  border: 2px solid var(--color-border);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform var(--transition-base), border-color var(--transition-base);
}
.faq-exc__toggle i, .faq-exc__toggle svg {
  width: 14px; height: 14px;
  transition: transform var(--transition-base);
}
.faq-exc__item.active .faq-exc__toggle {
  border-color: var(--color-accent);
  transform: rotate(180deg);
}
.faq-exc__answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.faq-exc__answer-inner {
  padding: 0 0 var(--space-6);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 62ch;
}

/* ── Section 8: Final CTA ──────────────────────────────── */
.final-cta-exc {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.final-cta-exc::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 700px;
  height: 700px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 70%);
  pointer-events: none;
}
.final-cta-exc h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.final-cta-exc .answer-block {
  color: rgba(255,255,255,0.7);
  margin: 0 auto var(--space-8);
}
.final-cta-exc__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── Related Services ───────────────────────────────────── */
.related-exc {
  background: var(--color-bg);
  padding: var(--space-16) 0;
}
.related-exc .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.related-exc h2 {
  margin-bottom: var(--space-8);
  text-align: center;
}
.related-exc .services-grid {
  grid-template-columns: repeat(3, 1fr);
}

/* ── Last Updated ───────────────────────────────────────── */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── Responsive ─────────────────────────────────────────── */
@media (max-width: 1024px) {
  .hero--excavation {
    min-height: auto;
    padding: calc(var(--nav-height) + var(--space-8)) 0 var(--space-10);
  }
  .hero--excavation__split {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .hero--excavation__image-col {
    max-width: 500px;
  }
  .problem-exc__intro {
    grid-template-columns: 1fr;
  }
  .problem-bento {
    grid-template-columns: 1fr 1fr;
  }
  .problem-bento__card--wide {
    grid-column: span 1;
  }
  .expert-exc__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .expert-exc__image {
    max-width: 500px;
    aspect-ratio: 16 / 10;
    order: -1;
  }
  .breakdown-exc__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .proof-exc__grid {
    grid-template-columns: 1fr;
    gap: var(--space-4);
  }
  .compare-exc__table {
    grid-template-columns: 1fr;
  }
  .related-exc .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .hero--excavation h1 {
    font-size: clamp(2rem, 8vw, 3rem);
  }
  .hero--excavation__trust {
    flex-direction: column;
    gap: var(--space-3);
  }
  .hero--excavation__ctas {
    flex-direction: column;
  }
  .problem-bento {
    grid-template-columns: 1fr;
  }
  .related-exc .services-grid {
    grid-template-columns: 1fr;
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO — Split Layout
     ═══════════════════════════════════════════════════════ -->
<section class="hero--excavation" aria-label="Excavation Services">
  <div class="hero--excavation__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions excavator working on a residential site in Damascus, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/services/">Services</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Excavation Services</span>
  </nav>
  <div class="container">
    <div class="hero--excavation__split">
      <div>
        <span class="hero--excavation__eyebrow"><i data-lucide="hard-hat"></i> Excavation Services</span>
        <h1><span class="text-accent">Excavation</span> Services in Damascus, OR</h1>
        <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon excavation contractor based in Damascus, delivering precise earthwork for foundations, utilities, drainage, and land development. We operate the heavy equipment, manage permits, and prepare your site for construction — residential or commercial, any scale.</p>
        <div class="hero--excavation__ctas">
          <a href="/contact/" class="btn btn-accent">Request a Free Estimate</a>
          <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
          <?php endif; ?>
        </div>
        <div class="hero--excavation__trust">
          <span class="hero--excavation__trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Bonded</span>
          <span class="hero--excavation__trust-item"><i data-lucide="hard-hat"></i> Heavy Equipment On-Site</span>
          <span class="hero--excavation__trust-item"><i data-lucide="star"></i> 5-Star Rated</span>
          <span class="hero--excavation__trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
        </div>
      </div>
      <div class="hero--excavation__image-col">
        <img src="<?php echo htmlspecialchars($bodyPhotos[0]); ?>" alt="Excavation equipment on a Damascus job site" width="600" height="400" loading="lazy">
        <div class="hero--excavation__stat-badge">
          <strong><?php echo $yearsInBusiness; ?>+</strong>
          <span>Years in Business</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron
     ═══════════════════════════════════════════════════════ -->
<div class="divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: PROBLEM STATEMENT — Bento Grid
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section problem-exc" aria-label="When you need excavation">
  <div class="floating-accent floating-accent--1"></div>
  <div class="container">
    <span class="exc-section__eyebrow reveal-up">When to Call</span>
    <h2 class="reveal-up">What <span class="text-accent">excavation challenges</span> do Damascus property owners face?</h2>
    <p class="answer-block reveal-up">Oregon's Willamette Valley soil — heavy clay, seasonal water tables, and volcanic rock layers — creates unique digging conditions. Without proper equipment and experience, excavation projects stall, flood, or fail inspection. These are the situations where professional excavation makes the difference.</p>

    <div class="problem-exc__intro reveal-up">
      <p class="problem-exc__pullquote">"We spent three weekends trying to dig our own drainage trench. Six inches down we hit clay that a shovel could not penetrate. Workhorse had the whole run done in four hours."</p>
      <div class="problem-exc__image reveal-right">
        <img src="<?php echo htmlspecialchars($bodyPhotos[1]); ?>" alt="Excavation work in progress on a Damascus residential property" width="600" height="375" loading="lazy">
      </div>
    </div>

    <div class="problem-bento">
      <div class="problem-bento__card card-tint-1 problem-bento__card--wide reveal-up reveal-delay-1">
        <div class="problem-bento__icon"><i data-lucide="home"></i></div>
        <h3>Foundation &amp; Footing Digs</h3>
        <p>New construction requires precisely graded excavation to depth, with compacted subgrade and drainage provisions. Getting the foundation wrong costs tens of thousands in repairs.</p>
      </div>
      <div class="problem-bento__card card-tint-2 reveal-up reveal-delay-2">
        <div class="problem-bento__icon"><i data-lucide="droplets"></i></div>
        <h3>Drainage Problems</h3>
        <p>Standing water in your yard, crawlspace flooding, and eroded slopes all trace back to poor grading or missing drain lines.</p>
      </div>
      <div class="problem-bento__card card-tint-3 reveal-up reveal-delay-3">
        <div class="problem-bento__icon"><i data-lucide="zap"></i></div>
        <h3>Utility Line Installation</h3>
        <p>Water, sewer, electric, and gas lines need precision trenching to code-compliant depth with proper backfill and compaction.</p>
      </div>
      <div class="problem-bento__card card-tint-1 reveal-up reveal-delay-4">
        <div class="problem-bento__icon"><i data-lucide="mountain"></i></div>
        <h3>Steep Lot Preparation</h3>
        <p>Damascus hillside lots require cut-and-fill grading, retaining wall prep, and erosion control before any structure goes up.</p>
      </div>
      <div class="problem-bento__card card-tint-2 problem-bento__card--wide reveal-up">
        <div class="problem-bento__icon"><i data-lucide="shovel"></i></div>
        <h3>Septic System &amp; Retention Basin Work</h3>
        <p>Rural Damascus properties on septic need properly sized excavation for drain fields, tanks, and stormwater retention basins that pass Clackamas County inspection.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: EXPERT POSITIONING — Reverse Asymmetric
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section expert-exc" aria-label="Why choose Workhorse for excavation">
  <div class="floating-accent floating-accent--2"></div>
  <div class="container">
    <span class="exc-section__eyebrow reveal-up">Why Workhorse</span>
    <h2 class="reveal-up">Why hire a <span class="text-accent">local excavation</span> contractor in Damascus?</h2>
    <p class="answer-block reveal-up">Because soil conditions, permit requirements, and site access challenges are hyperlocal. A contractor who knows the clay layers under Clackamas County, the setback rules along Boring-Damascus Road, and the seasonal groundwater patterns will dig it right the first time.</p>

    <div class="expert-exc__layout">
      <div class="expert-exc__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhotos[2]); ?>" alt="Workhorse Site Solutions excavator operator grading a lot near Damascus" width="500" height="667" loading="lazy">
      </div>
      <div class="reveal-up">
        <div class="expert-exc__stat">
          <span class="expert-exc__stat-num" data-target="200">200</span>
          <span class="expert-exc__stat-label">excavation projects completed</span>
        </div>
        <p class="expert-exc__text">Workhorse Site Solutions operates our own fleet of excavators, skid steers, and dump trucks — no subcontracted equipment, no middlemen. When we quote a job, we control the timeline. That means fewer delays, lower costs, and direct communication with the operators doing the work.</p>

        <div class="expert-exc__diffs">
          <div class="expert-exc__diff reveal-right reveal-delay-1">
            <div class="expert-exc__diff-icon"><i data-lucide="target"></i></div>
            <div>
              <h3>GPS-Guided Grading Precision</h3>
              <p>Our equipment operators use laser and GPS leveling to achieve grade tolerances within 1/10th of a foot — critical for foundations and drainage slopes.</p>
            </div>
          </div>
          <div class="expert-exc__diff reveal-right reveal-delay-2">
            <div class="expert-exc__diff-icon"><i data-lucide="file-text"></i></div>
            <div>
              <h3>Permit &amp; Inspection Coordination</h3>
              <p>We handle Clackamas County grading permits and schedule inspections so your project passes the first time. No rework, no re-inspection fees.</p>
            </div>
          </div>
          <div class="expert-exc__diff reveal-right reveal-delay-3">
            <div class="expert-exc__diff-icon"><i data-lucide="truck"></i></div>
            <div>
              <h3>Own Equipment Fleet</h3>
              <p>Mini excavators for tight residential lots, full-size rigs for commercial pads. We match the machine to the job — no renting oversized equipment you pay for by the hour.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron (dark)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section breakdown-exc" aria-label="What excavation services include">
  <div class="container">
    <span class="exc-section__eyebrow reveal-up">Scope of Work</span>
    <h2 class="reveal-up">What does a <span class="text-accent">professional excavation</span> project include?</h2>
    <p class="answer-block reveal-up">From the initial site survey to final compaction and cleanup, our excavation service covers every phase. We coordinate utility locates, manage spoils hauling, and leave your site graded and ready for the next trade. Here is the full breakdown.</p>

    <div class="breakdown-exc__layout">
      <div class="breakdown-exc__list reveal-up">
        <h3>Excavation Services Include</h3>
        <ul class="breakdown-exc__items">
          <li><i data-lucide="check"></i> Site survey and grading plan review</li>
          <li><i data-lucide="check"></i> Utility locate coordination (OUNC)</li>
          <li><i data-lucide="check"></i> Foundation and footing excavation</li>
          <li><i data-lucide="check"></i> Utility trenching (water, sewer, electric, gas)</li>
          <li><i data-lucide="check"></i> French drain and stormwater system digs</li>
          <li><i data-lucide="check"></i> Septic system and drain field excavation</li>
          <li><i data-lucide="check"></i> Cut-and-fill grading for slopes and pads</li>
          <li><i data-lucide="check"></i> Backfill, compaction, and spoils removal</li>
          <li><i data-lucide="check"></i> Erosion control and site stabilization</li>
        </ul>
      </div>
      <div class="breakdown-exc__process reveal-up">
        <h3>Our Excavation Process</h3>
        <div class="exc-timeline">
          <div class="exc-timeline__step">
            <span class="exc-timeline__num">1</span>
            <h4>Site Assessment</h4>
            <p>We walk your Damascus property, review plans, assess soil type, and identify access constraints. You receive a detailed written estimate.</p>
          </div>
          <div class="exc-timeline__step">
            <span class="exc-timeline__num">2</span>
            <h4>Permits &amp; Utility Locates</h4>
            <p>We file for grading permits and schedule OUNC utility locates. No surprises underground, no code violations above ground.</p>
          </div>
          <div class="exc-timeline__step">
            <span class="exc-timeline__num">3</span>
            <h4>Excavation &amp; Grading</h4>
            <p>Equipment mobilizes on schedule. Our operators cut to grade with laser precision, manage spoils, and coordinate with other trades on-site.</p>
          </div>
          <div class="exc-timeline__step">
            <span class="exc-timeline__num">4</span>
            <h4>Compaction &amp; Cleanup</h4>
            <p>Backfill is placed and compacted to engineering specifications. We remove excess material, stabilize exposed soil, and prepare the site for inspection.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant (light)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,60 0,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section proof-exc" aria-label="Excavation reviews">
  <div class="container">
    <span class="exc-section__eyebrow reveal-up">Client Experiences</span>
    <h2 class="reveal-up">What do <span class="text-accent">contractors and homeowners</span> say about our excavation work?</h2>
    <p class="answer-block reveal-up">Our excavation crew works alongside general contractors, homebuilders, and property owners across the Portland Metro East corridor. Precision, timeliness, and clean sites — that is what they report back.</p>

    <div class="proof-exc__grid">
      <div class="proof-exc__card card-tint-1 reveal-up reveal-delay-1">
        <div class="proof-exc__stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="proof-exc__quote">"We hired Workhorse to dig the foundation for a new shop building on our Damascus property. They were on-site when they said they would be, hit grade within a quarter inch, and hauled all the spoils the same day."</p>
        <p class="proof-exc__author">Mike T.</p>
        <p class="proof-exc__meta">Damascus, OR — Foundation Excavation</p>
      </div>
      <div class="proof-exc__card card-tint-2 reveal-up reveal-delay-2">
        <div class="proof-exc__stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="proof-exc__quote">"Our property in Sandy had serious drainage issues — standing water every winter. Workhorse installed a French drain system and regraded the yard. First rainy season since and not a puddle anywhere."</p>
        <p class="proof-exc__author">Lisa &amp; Mark P.</p>
        <p class="proof-exc__meta">Sandy, OR — Drainage Excavation</p>
      </div>
      <div class="proof-exc__card card-tint-3 reveal-up reveal-delay-3">
        <div class="proof-exc__stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="proof-exc__quote">"I use Workhorse for all my excavation subcontracting in East Portland. They show up with the right equipment, coordinate with my other subs, and never hold up the schedule. Solid crew."</p>
        <p class="proof-exc__author">Jason W.</p>
        <p class="proof-exc__meta">Gresham, OR — Commercial Site Prep</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Chevron (light)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-chevron">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 720,60 1440,0 1440,60 0,60" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 6: COMPARISON TABLE
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section compare-exc" aria-label="Workhorse vs other excavation contractors">
  <div class="container">
    <span class="exc-section__eyebrow reveal-up">The Difference</span>
    <h2 class="reveal-up">How does Workhorse <span class="text-accent">compare to other</span> excavation contractors?</h2>
    <p class="answer-block reveal-up">Some contractors rent equipment by the hour and pass the cost to you. Others subcontract the dig and lose control of the timeline. Workhorse owns our fleet, employs our operators, and manages every phase of excavation in-house.</p>

    <div class="compare-exc__table reveal-scale">
      <div class="compare-exc__col compare-exc__col--other">
        <h3>Other Excavation Contractors</h3>
        <ul class="compare-exc__list">
          <li><i data-lucide="x"></i> Rented equipment billed by the hour</li>
          <li><i data-lucide="x"></i> Subcontracted operators unfamiliar with local soil</li>
          <li><i data-lucide="x"></i> Permit delays due to missing paperwork</li>
          <li><i data-lucide="x"></i> Spoils left on-site for you to manage</li>
          <li><i data-lucide="x"></i> No compaction testing or grade verification</li>
          <li><i data-lucide="x"></i> Weather delays with no rescheduling priority</li>
        </ul>
      </div>
      <div class="compare-exc__col compare-exc__col--us">
        <h3>Workhorse Site Solutions</h3>
        <ul class="compare-exc__list">
          <li><i data-lucide="check"></i> Own fleet — flat-rate project pricing, not hourly</li>
          <li><i data-lucide="check"></i> In-house operators with Damascus soil experience</li>
          <li><i data-lucide="check"></i> Permit coordination before mobilization</li>
          <li><i data-lucide="check"></i> Full spoils hauling and disposal included</li>
          <li><i data-lucide="check"></i> Laser/GPS grading with documented final elevations</li>
          <li><i data-lucide="check"></i> Priority rescheduling for weather-delayed projects</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Slant
     ═══════════════════════════════════════════════════════ -->
<div class="divider-slant">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 7: FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section faq-exc" aria-label="Excavation frequently asked questions">
  <div class="container">
    <span class="exc-section__eyebrow reveal-up">Common Questions</span>
    <h2 class="reveal-up">What should you know before <span class="text-accent">hiring an excavation</span> contractor in Damascus?</h2>
    <p class="answer-block reveal-up">Excavation is the foundation of every construction project — literally. Here are the questions Damascus property owners and builders ask most before breaking ground.</p>

    <div class="faq-exc__container">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-exc__item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <button class="faq-exc__question" aria-expanded="false" aria-controls="exc-faq-<?php echo $i; ?>">
          <span><?php echo htmlspecialchars($faq['question']); ?></span>
          <span class="faq-exc__toggle"><i data-lucide="chevron-down"></i></span>
        </button>
        <div class="faq-exc__answer" id="exc-faq-<?php echo $i; ?>" role="region">
          <div class="faq-exc__answer-inner answer-block">
            <?php echo htmlspecialchars($faq['answer']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION 8: FINAL CTA
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section final-cta-exc" aria-label="Request excavation estimate">
  <div class="container">
    <span class="exc-section__eyebrow reveal-up">Break Ground with Confidence</span>
    <h2 class="reveal-up">Ready to start your <span class="text-accent">excavation project</span> in Damascus?</h2>
    <p class="answer-block reveal-up">Whether you are building a new home, installing utilities, or fixing drainage on a hillside lot, Workhorse Site Solutions brings the equipment, the expertise, and the local knowledge to dig it right. Free estimates with project-based pricing — no hourly surprises.</p>
    <div class="final-cta-exc__ctas reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now — Free Consultation</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════ -->
<section class="exc-section related-exc" aria-label="Related services">
  <div class="container">
    <h2 class="reveal-up">Other Services You May Need</h2>
    <div class="services-grid">
      <?php
      $related = getRelatedServices('excavation-services', 3);
      $tints = ['card-tint-1', 'card-tint-2', 'card-tint-3'];
      foreach ($related as $i => $rel):
        $relImage = $serviceImages[$rel['slug']] ?? '';
        $relIcon  = $serviceIcons[$rel['slug']] ?? 'wrench';
      ?>
      <article class="service-card-with-image <?php echo $tints[$i]; ?> reveal-up reveal-delay-<?php echo $i + 1; ?>">
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($relImage); ?>" alt="<?php echo htmlspecialchars($rel['name']); ?> in Damascus, OR" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo htmlspecialchars($relIcon); ?>"></i></div>
          <h3><?php echo htmlspecialchars($rel['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($rel['description']); ?></p>
          <a href="/services/<?php echo htmlspecialchars($rel['slug']); ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- Last Updated -->
<div class="last-updated">Last Updated: <?php echo date('F Y'); ?></div>


<!-- FAQ Accordion Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.faq-exc__question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = btn.closest('.faq-exc__item');
      var answer = item.querySelector('.faq-exc__answer');
      var isOpen = item.classList.contains('active');

      document.querySelectorAll('.faq-exc__item.active').forEach(function(open) {
        open.classList.remove('active');
        open.querySelector('.faq-exc__question').setAttribute('aria-expanded', 'false');
        open.querySelector('.faq-exc__answer').style.maxHeight = '0';
      });

      if (!isOpen) {
        item.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

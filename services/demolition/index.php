<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('demolition');
$pageTitle       = $service['name'] . ' Services in Damascus, OR | ' . $siteName;
$pageDescription = 'Licensed demolition contractor in Damascus, OR. Workhorse Site Solutions handles interior strip-outs, full-structure teardowns, and debris removal for residential and commercial projects across the Portland Metro Area.';
$canonicalUrl    = $siteUrl . '/services/' . $service['slug'] . '/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '6';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396278387-cuojt2-481225095_604441245913196_3812417594365928414_n.jpg';
$bodyPhotos = [
    $photoBase . '1779396431758-bqt0qh-481989209_608065692217418_5578218413298992080_n.jpg',
    $photoBase . '1779396440982-2uqglt-481992905_605969129093741_5125438628730597269_n.jpg',
    $photoBase . '1779396452574-uisrya-481991957_604897309200923_770848034743067187_n.jpg',
];

/* ── Service Image + Icon Maps (for related services cards) ── */
$serviceImages = [
    'junk-removal-cleanouts'        => $photoBase . '1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg',
    'excavation-services'           => $photoBase . '1779396273035-84csrf-481103535_608058122218175_6060079720789259957_n.jpg',
    'demolition'                    => $heroPhoto,
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
        'question' => 'How much does demolition cost in Damascus, OR?',
        'answer'   => 'Interior demolition projects in Damascus typically range from $2,000 to $8,000 depending on square footage and material types. Full-structure teardowns for garages, sheds, or small residential buildings run $5,000 to $25,000. We provide free on-site estimates with all-inclusive pricing.',
    ],
    [
        'question' => 'Do I need a permit for demolition work in Clackamas County?',
        'answer'   => 'Yes. Most demolition projects in Clackamas County require a demolition permit, and structures connected to utilities need disconnect approvals from PGE, NW Natural, and the local water district. We handle permit applications and utility disconnect coordination as part of our service.',
    ],
    [
        'question' => 'What types of structures can Workhorse demolish?',
        'answer'   => 'We demolish garages, sheds, barns, decks, patios, concrete slabs, interior walls, kitchens, bathrooms, mobile homes, and small commercial structures. Asbestos-containing buildings require abatement by a certified specialist before mechanical demolition — we coordinate that as needed.',
    ],
    [
        'question' => 'How long does a demolition project take?',
        'answer'   => 'Interior strip-outs for a single room take 1 to 2 days. A full garage or shed teardown with debris hauling is typically a 1-day job. Larger structures — barns, mobile homes, or multi-room interiors — require 2 to 5 days depending on size, access, and disposal requirements.',
    ],
    [
        'question' => 'Is demolition debris recycled or sent to landfill?',
        'answer'   => 'We sort all demolition debris on-site. Concrete, metal, and clean wood are separated for recycling. Salvageable materials like fixtures, hardware, and dimensional lumber are set aside for reuse. Non-recyclable waste goes to licensed disposal facilities. We aim to recycle 50% or more per project.',
    ],
    [
        'question' => 'Can you do selective interior demolition without damaging surrounding walls?',
        'answer'   => 'Absolutely. Selective demo is one of our specialties. We remove specific walls, flooring, cabinets, and fixtures while protecting adjacent finishes, wiring, and plumbing. We use hand tools and precision cutting for surgical interior work that preserves what you want to keep.',
    ],
    [
        'question' => 'Do you handle demolition for commercial properties?',
        'answer'   => 'Yes. We work with property managers, developers, and business owners on commercial strip-outs, tenant improvement demolition, and small commercial teardowns throughout Damascus, Gresham, Happy Valley, and the Portland Metro Area. We carry the insurance and licensing required for commercial work.',
    ],
    [
        'question' => 'What happens to the site after demolition is complete?',
        'answer'   => 'We remove all debris, backfill any below-grade openings, and rough-grade the site to a clean, buildable condition. If you are planning new construction, we can coordinate directly with your builder or transition into our excavation and site prep services for a seamless next phase.',
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
     DEMOLITION SERVICES — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Demolition Hero — Full-bleed with offset content ──── */
.hero--demo {
  position: relative;
  min-height: 90vh;
  display: flex;
  align-items: flex-end;
  padding: var(--space-16) 0 var(--space-12);
  overflow: hidden;
  background: var(--color-dark);
}
.hero--demo__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.hero--demo__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 35%;
}
.hero--demo::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    to right,
    rgba(var(--color-primary-rgb), 0.95) 0%,
    rgba(var(--color-primary-rgb), 0.7) 45%,
    rgba(var(--color-primary-rgb), 0.25) 100%
  );
}
.hero--demo::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.hero--demo .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.hero--demo__content {
  max-width: 640px;
}
.hero--demo__eyebrow {
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
.hero--demo__eyebrow i,
.hero--demo__eyebrow svg {
  width: 18px;
  height: 18px;
}
.hero--demo h1 {
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.hero--demo h1 .text-accent {
  color: var(--color-accent);
}
.hero--demo .hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.85);
  max-width: 54ch;
  margin-bottom: var(--space-8);
}
.hero--demo__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.hero--demo__trust {
  display: inline-flex;
  flex-wrap: wrap;
  gap: var(--space-5);
  padding: var(--space-4) var(--space-6);
  background: rgba(255, 255, 255, 0.06);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(8px);
}
.hero--demo__trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.8);
  font-weight: 600;
}
.hero--demo__trust-item i,
.hero--demo__trust-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
}
.hero--demo .breadcrumb {
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
.hero--demo .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.hero--demo .breadcrumb a:hover {
  color: var(--color-accent);
}
.breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
}

/* ── Section Base ───────────────────────────────────────── */
.demo-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.demo-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.demo-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.demo-section .floating-accent--a {
  width: 320px;
  height: 320px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.05) 0%, transparent 70%);
  top: -80px;
  right: -100px;
}
.demo-section .floating-accent--b {
  width: 260px;
  height: 260px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.04) 0%, transparent 70%);
  bottom: -60px;
  left: -80px;
}
.demo-section__eyebrow {
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
.demo-section h2 {
  margin-bottom: var(--space-4);
}
.demo-section h2 .text-accent {
  color: var(--color-accent);
}
.demo-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}

/* ── SVG Dividers ───────────────────────────────────────── */
.divider-teeth {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.divider-teeth svg { display: block; width: 100%; height: auto; }
.divider-curve {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.divider-curve svg { display: block; width: 100%; height: auto; }

/* ── Section 2: Problem — Cards with accent stripe ─────── */
.problem-demo {
  background: var(--color-bg);
}
.problem-demo__pullquote {
  font-family: var(--font-heading);
  font-size: clamp(1.3rem, 2.3vw, 1.85rem);
  font-weight: 700;
  line-height: 1.35;
  color: var(--color-dark);
  max-width: 42ch;
  margin-bottom: var(--space-10);
  position: relative;
  padding-left: var(--space-6);
}
.problem-demo__pullquote::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 4px;
  background: var(--color-accent);
  border-radius: 2px;
}
.problem-demo__grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-4);
}
.problem-demo__card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
  border-left: 4px solid transparent;
  transition: border-color var(--transition-base), transform var(--transition-base);
}
.problem-demo__card:hover {
  border-left-color: var(--color-accent);
  transform: translateX(4px);
}
.problem-demo__card-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.problem-demo__card-icon i,
.problem-demo__card-icon svg {
  width: 22px;
  height: 22px;
}
.problem-demo__card h3 {
  font-size: var(--font-size-lg);
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}
.problem-demo__card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.6;
}

/* ── Section 3: Expert — Image-heavy asymmetric ────────── */
.expert-demo {
  background: var(--color-light);
}
.expert-demo__layout {
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.expert-demo__stat-row {
  display: flex;
  gap: var(--space-8);
  margin-bottom: var(--space-6);
}
.expert-demo__stat {
  text-align: left;
}
.expert-demo__stat-num {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.expert-demo__stat-label {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-weight: 600;
}
.expert-demo__text {
  font-size: var(--font-size-lg);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 52ch;
  margin-bottom: var(--space-8);
}
.expert-demo__diffs {
  display: flex;
  flex-direction: column;
  gap: var(--space-5);
}
.expert-demo__diff {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.expert-demo__diff-icon {
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
.expert-demo__diff-icon i,
.expert-demo__diff-icon svg {
  width: 20px;
  height: 20px;
}
.expert-demo__diff h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
}
.expert-demo__diff p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.55;
}
.expert-demo__gallery {
  display: grid;
  grid-template-rows: 1fr 1fr;
  gap: var(--space-4);
}
.expert-demo__gallery-img {
  border-radius: var(--radius-lg);
  overflow: hidden;
}
.expert-demo__gallery-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.expert-demo__gallery-img:first-child {
  aspect-ratio: 16 / 9;
}
.expert-demo__gallery-img:last-child {
  aspect-ratio: 16 / 9;
}

/* ── Section 4: Breakdown — Dark with accent borders ───── */
.breakdown-demo {
  background: var(--color-dark);
  color: var(--color-white);
}
.breakdown-demo h2 { color: var(--color-white); }
.breakdown-demo .answer-block { color: rgba(255,255,255,0.7); }
.breakdown-demo .demo-section__eyebrow { color: var(--color-accent); }
.breakdown-demo__layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
}
.breakdown-demo__list h3 {
  font-size: var(--font-size-xl);
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.breakdown-demo__items {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.breakdown-demo__items li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  color: rgba(255,255,255,0.8);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.breakdown-demo__items li i,
.breakdown-demo__items li svg {
  width: 18px; height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.breakdown-demo__process h3 {
  font-size: var(--font-size-xl);
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.demo-timeline {
  position: relative;
  padding-left: var(--space-8);
}
.demo-timeline::before {
  content: '';
  position: absolute;
  left: 15px;
  top: 8px;
  bottom: 8px;
  width: 2px;
  background: rgba(var(--color-accent-rgb), 0.3);
}
.demo-timeline__step {
  position: relative;
  padding-bottom: var(--space-8);
}
.demo-timeline__step:last-child { padding-bottom: 0; }
.demo-timeline__num {
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
.demo-timeline__step h4 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.demo-timeline__step p {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  line-height: 1.6;
  max-width: 42ch;
}

/* ── Section 5: Proof ───────────────────────────────────── */
.proof-demo {
  background: var(--color-light);
}
.proof-demo__layout {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: var(--space-8);
  align-items: start;
}
.proof-demo__image {
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  position: relative;
}
.proof-demo__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.proof-demo__image::after {
  content: '';
  position: absolute;
  inset: 0;
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius-xl);
  pointer-events: none;
}
.proof-demo__cards {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.proof-demo__card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  position: relative;
}
.proof-demo__card::before {
  content: '\201C';
  position: absolute;
  top: var(--space-3);
  right: var(--space-4);
  font-family: var(--font-heading);
  font-size: 3.5rem;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 0.1);
}
.proof-demo__stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-3);
  color: var(--color-star);
}
.proof-demo__stars i, .proof-demo__stars svg { width: 16px; height: 16px; }
.proof-demo__quote {
  font-size: var(--font-size-base);
  line-height: 1.65;
  color: var(--color-gray-dark);
  margin-bottom: var(--space-4);
  font-style: italic;
}
.proof-demo__author {
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-dark);
}
.proof-demo__meta {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
}

/* ── Section 6: Comparison — Stacked Cards ─────────────── */
.compare-demo {
  background: var(--color-bg);
}
.compare-demo__table {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.compare-demo__col {
  padding: var(--space-8) var(--space-6);
}
.compare-demo__col--other { background: var(--color-light); }
.compare-demo__col--us { background: var(--color-dark); color: var(--color-white); }
.compare-demo__col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-6);
  padding-bottom: var(--space-4);
  border-bottom: 2px solid rgba(var(--color-accent-rgb), 0.3);
}
.compare-demo__col--us h3 { color: var(--color-accent); }
.compare-demo__col--other h3 { color: var(--color-gray); }
.compare-demo__list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.compare-demo__list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  line-height: 1.55;
}
.compare-demo__list li i, .compare-demo__list li svg {
  width: 20px; height: 20px;
  flex-shrink: 0;
  margin-top: 2px;
}
.compare-demo__col--other .compare-demo__list li i { color: var(--color-danger); }
.compare-demo__col--us .compare-demo__list li i { color: var(--color-success); }

/* ── Section 7: FAQ ─────────────────────────────────────── */
.faq-demo {
  background: var(--color-light);
}
.faq-demo__container {
  max-width: 780px;
  margin: 0 auto;
}
.faq-demo__item {
  border-bottom: 1px solid var(--color-border);
  overflow: hidden;
}
.faq-demo__item:first-child {
  border-top: 1px solid var(--color-border);
}
.faq-demo__question {
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
.faq-demo__question:hover { color: var(--color-accent); }
.faq-demo__toggle {
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
.faq-demo__toggle i, .faq-demo__toggle svg {
  width: 14px; height: 14px;
  transition: transform var(--transition-base);
}
.faq-demo__item.active .faq-demo__toggle {
  border-color: var(--color-accent);
  transform: rotate(180deg);
}
.faq-demo__answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.faq-demo__answer-inner {
  padding: 0 0 var(--space-6);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 62ch;
}

/* ── Section 8: Final CTA ──────────────────────────────── */
.final-cta-demo {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.final-cta-demo::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 650px;
  height: 650px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 70%);
  pointer-events: none;
}
.final-cta-demo h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.final-cta-demo .answer-block {
  color: rgba(255,255,255,0.7);
  margin: 0 auto var(--space-8);
}
.final-cta-demo__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  justify-content: center;
}

/* ── Related ────────────────────────────────────────────── */
.related-demo {
  background: var(--color-bg);
  padding: var(--space-16) 0;
}
.related-demo .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.related-demo h2 {
  margin-bottom: var(--space-8);
  text-align: center;
}
.related-demo .services-grid {
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
  .hero--demo {
    min-height: 70vh;
  }
  .problem-demo__grid {
    grid-template-columns: 1fr;
  }
  .expert-demo__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .expert-demo__gallery {
    max-width: 600px;
  }
  .breakdown-demo__layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .proof-demo__layout {
    grid-template-columns: 1fr;
    gap: var(--space-6);
  }
  .proof-demo__image {
    max-width: 500px;
  }
  .compare-demo__table {
    grid-template-columns: 1fr;
  }
  .related-demo .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .hero--demo {
    min-height: 65vh;
    padding-bottom: var(--space-8);
  }
  .hero--demo h1 {
    font-size: clamp(2rem, 8vw, 3rem);
  }
  .hero--demo__trust {
    flex-direction: column;
    gap: var(--space-3);
    padding: var(--space-3) var(--space-4);
  }
  .hero--demo__ctas {
    flex-direction: column;
  }
  .expert-demo__stat-row {
    flex-direction: column;
    gap: var(--space-4);
  }
  .related-demo .services-grid {
    grid-template-columns: 1fr;
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO — Horizontal gradient overlay
     ═══════════════════════════════════════════════════════ -->
<section class="hero--demo" aria-label="Demolition Services">
  <div class="hero--demo__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions demolition crew tearing down a structure in Damascus, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/services/">Services</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Demolition</span>
  </nav>
  <div class="container">
    <div class="hero--demo__content">
      <span class="hero--demo__eyebrow"><i data-lucide="hammer"></i> Demolition Services</span>
      <h1><span class="text-accent">Demolition</span> Services in Damascus, OR</h1>
      <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon demolition contractor based in Damascus. We tear down structures, strip interiors, and remove every piece of debris from your property — garages, sheds, barns, concrete slabs, kitchens, and bathrooms. All hauling and disposal included in the price.</p>
      <div class="hero--demo__ctas">
        <a href="/contact/" class="btn btn-accent">Get a Free Demolition Estimate</a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
        <?php endif; ?>
      </div>
      <div class="hero--demo__trust">
        <span class="hero--demo__trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
        <span class="hero--demo__trust-item"><i data-lucide="hammer"></i> Full Teardowns</span>
        <span class="hero--demo__trust-item"><i data-lucide="recycle"></i> 50%+ Recycled</span>
        <span class="hero--demo__trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Teeth
     ═══════════════════════════════════════════════════════ -->
<div class="divider-teeth">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L60,50 L120,0 L180,50 L240,0 L300,50 L360,0 L420,50 L480,0 L540,50 L600,0 L660,50 L720,0 L780,50 L840,0 L900,50 L960,0 L1020,50 L1080,0 L1140,50 L1200,0 L1260,50 L1320,0 L1380,50 L1440,0 L1440,50 L0,50 Z" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: PROBLEM STATEMENT — Horizontal cards
     ═══════════════════════════════════════════════════════ -->
<section class="demo-section problem-demo" aria-label="When you need demolition">
  <div class="floating-accent floating-accent--a"></div>
  <div class="container">
    <span class="demo-section__eyebrow reveal-up">Time to Tear It Down</span>
    <h2 class="reveal-up">When does a <span class="text-accent">Damascus property</span> need professional demolition?</h2>
    <p class="answer-block reveal-up">Some structures cannot be saved. Rotted decks, termite-damaged outbuildings, fire-damaged rooms, and obsolete commercial spaces all reach a point where repair costs exceed replacement. Here are the situations where demolition is the right move.</p>

    <p class="problem-demo__pullquote reveal-up">"We quoted three contractors to fix the barn. All three said the same thing: tear it down. Workhorse had it flat, cleaned, and graded in two days."</p>

    <div class="problem-demo__grid">
      <div class="problem-demo__card card-tint-1 reveal-left reveal-delay-1">
        <div class="problem-demo__card-icon"><i data-lucide="alert-triangle"></i></div>
        <div>
          <h3>Structurally Compromised Buildings</h3>
          <p>Rot, termites, fire damage, or foundation failure makes a structure unsafe. Demolition eliminates liability and frees the lot for new construction.</p>
        </div>
      </div>
      <div class="problem-demo__card card-tint-2 reveal-right reveal-delay-2">
        <div class="problem-demo__card-icon"><i data-lucide="home"></i></div>
        <div>
          <h3>Kitchen &amp; Bathroom Gut Remodels</h3>
          <p>Full renovation starts with full demolition — cabinets, tile, drywall, and fixtures stripped to studs so your contractor works from a clean slate.</p>
        </div>
      </div>
      <div class="problem-demo__card card-tint-3 reveal-left reveal-delay-3">
        <div class="problem-demo__card-icon"><i data-lucide="building-2"></i></div>
        <div>
          <h3>Commercial Tenant Improvement</h3>
          <p>Incoming tenants need the space stripped. Old partition walls, flooring, ceiling grids, and fixtures removed to make way for the new buildout.</p>
        </div>
      </div>
      <div class="problem-demo__card card-tint-1 reveal-right reveal-delay-4">
        <div class="problem-demo__card-icon"><i data-lucide="trash-2"></i></div>
        <div>
          <h3>Shed, Deck &amp; Concrete Removal</h3>
          <p>Aging decks, deteriorating sheds, and cracked concrete slabs that drag down your property value. Tear it out and reclaim the space.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Curve
     ═══════════════════════════════════════════════════════ -->
<div class="divider-curve">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,80 C360,0 1080,0 1440,80 L1440,80 L0,80 Z" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: EXPERT POSITIONING — Gallery + Stats
     ═══════════════════════════════════════════════════════ -->
<section class="demo-section expert-demo" aria-label="Why choose Workhorse for demolition">
  <div class="floating-accent floating-accent--b"></div>
  <div class="container">
    <span class="demo-section__eyebrow reveal-up">Why Workhorse</span>
    <h2 class="reveal-up">Why do <span class="text-accent">homeowners and contractors</span> hire Workhorse for demolition?</h2>
    <p class="answer-block reveal-up">Because we do not just knock it down — we plan the teardown, protect what stays, haul every scrap of debris, and leave the site graded and ready. Our demolition crew works alongside our excavation and site prep teams, so your project moves forward without hiring three different companies.</p>

    <div class="expert-demo__layout">
      <div class="reveal-up">
        <div class="expert-demo__stat-row">
          <div class="expert-demo__stat">
            <span class="expert-demo__stat-num" data-target="150">150</span>
            <span class="expert-demo__stat-label">demolition jobs completed</span>
          </div>
          <div class="expert-demo__stat">
            <span class="expert-demo__stat-num">50<span style="font-size:0.6em">%+</span></span>
            <span class="expert-demo__stat-label">materials recycled</span>
          </div>
        </div>
        <p class="expert-demo__text">From single-room strip-outs in Happy Valley to full barn teardowns on rural Damascus properties, our crew has handled it all. We own our equipment, employ our operators, and carry the insurance to work on both residential and commercial sites.</p>

        <div class="expert-demo__diffs">
          <div class="expert-demo__diff reveal-left reveal-delay-1">
            <div class="expert-demo__diff-icon"><i data-lucide="shield"></i></div>
            <div>
              <h3>Safety-First Demolition Protocol</h3>
              <p>Every job starts with a structural assessment. We identify hazards — load-bearing walls, live utilities, asbestos indicators — and plan the sequence to protect workers and neighboring structures.</p>
            </div>
          </div>
          <div class="expert-demo__diff reveal-left reveal-delay-2">
            <div class="expert-demo__diff-icon"><i data-lucide="recycle"></i></div>
            <div>
              <h3>On-Site Material Sorting</h3>
              <p>We separate concrete, metal, clean wood, and salvageable fixtures during teardown. This reduces landfill waste and often lowers disposal costs — savings we pass to you.</p>
            </div>
          </div>
          <div class="expert-demo__diff reveal-left reveal-delay-3">
            <div class="expert-demo__diff-icon"><i data-lucide="arrow-right-circle"></i></div>
            <div>
              <h3>Seamless Transition to Site Prep</h3>
              <p>After demolition, we can move directly into excavation, grading, or land clearing without mobilizing a separate contractor. One crew, one call, one timeline.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="expert-demo__gallery reveal-right">
        <div class="expert-demo__gallery-img">
          <img src="<?php echo htmlspecialchars($bodyPhotos[0]); ?>" alt="Demolition in progress on a Damascus residential structure" width="600" height="338" loading="lazy">
        </div>
        <div class="expert-demo__gallery-img">
          <img src="<?php echo htmlspecialchars($bodyPhotos[1]); ?>" alt="Post-demolition cleanup and grading by Workhorse crew" width="600" height="338" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Teeth (dark)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-teeth">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,50 L60,0 L120,50 L180,0 L240,50 L300,0 L360,50 L420,0 L480,50 L540,0 L600,50 L660,0 L720,50 L780,0 L840,50 L900,0 L960,50 L1020,0 L1080,50 L1140,0 L1200,50 L1260,0 L1320,50 L1380,0 L1440,50 L1440,50 L0,50 Z" fill="var(--color-dark)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="demo-section breakdown-demo" aria-label="What demolition services include">
  <div class="container">
    <span class="demo-section__eyebrow reveal-up">Full Scope</span>
    <h2 class="reveal-up">What does <span class="text-accent">professional demolition</span> include from start to finish?</h2>
    <p class="answer-block reveal-up">Demolition is more than swinging a sledgehammer. It requires planning, permits, utility disconnects, controlled teardown, debris management, and site restoration. Here is exactly what our demolition service covers and the steps we follow on every project.</p>

    <div class="breakdown-demo__layout">
      <div class="breakdown-demo__list reveal-up">
        <h3>Demolition Services Include</h3>
        <ul class="breakdown-demo__items">
          <li><i data-lucide="check"></i> Structural assessment and demolition plan</li>
          <li><i data-lucide="check"></i> Permit acquisition and utility disconnects</li>
          <li><i data-lucide="check"></i> Interior strip-outs (kitchens, baths, rooms)</li>
          <li><i data-lucide="check"></i> Full-structure teardowns (garages, sheds, barns)</li>
          <li><i data-lucide="check"></i> Concrete slab and foundation breaking</li>
          <li><i data-lucide="check"></i> Deck, patio, and fence removal</li>
          <li><i data-lucide="check"></i> On-site debris sorting and recycling</li>
          <li><i data-lucide="check"></i> Complete hauling and disposal</li>
          <li><i data-lucide="check"></i> Backfill, rough grading, and site cleanup</li>
        </ul>
      </div>
      <div class="breakdown-demo__process reveal-up">
        <h3>Our Demolition Process</h3>
        <div class="demo-timeline">
          <div class="demo-timeline__step">
            <span class="demo-timeline__num">1</span>
            <h4>Site Walk &amp; Assessment</h4>
            <p>We inspect the structure, identify hazards, check for asbestos indicators, and document utility connections. You receive a written scope and price.</p>
          </div>
          <div class="demo-timeline__step">
            <span class="demo-timeline__num">2</span>
            <h4>Permits &amp; Disconnects</h4>
            <p>We pull Clackamas County demolition permits and coordinate utility shutoffs with PGE, NW Natural, and the water district.</p>
          </div>
          <div class="demo-timeline__step">
            <span class="demo-timeline__num">3</span>
            <h4>Controlled Teardown</h4>
            <p>Selective or full demolition executed in planned sequence. We protect adjacent structures, manage dust, and sort materials on-site for recycling.</p>
          </div>
          <div class="demo-timeline__step">
            <span class="demo-timeline__num">4</span>
            <h4>Hauling &amp; Site Restoration</h4>
            <p>Every piece of debris leaves the property. We backfill below-grade voids, rough grade the cleared area, and leave the site build-ready.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Curve (to light)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-curve">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 C360,80 1080,80 1440,0 L1440,80 L0,80 Z" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: PROOF — Asymmetric Image + Cards
     ═══════════════════════════════════════════════════════ -->
<section class="demo-section proof-demo" aria-label="Demolition reviews">
  <div class="container">
    <span class="demo-section__eyebrow reveal-up">Project Results</span>
    <h2 class="reveal-up">What do <span class="text-accent">Damascus property owners</span> say about our demolition work?</h2>
    <p class="answer-block reveal-up">Every demolition project has a story. Here are three recent jobs from clients who needed clean, safe, and complete teardowns across the Portland Metro Area.</p>

    <div class="proof-demo__layout">
      <div class="proof-demo__image reveal-left">
        <img src="<?php echo htmlspecialchars($bodyPhotos[2]); ?>" alt="Completed demolition and site cleanup on a Damascus property" width="600" height="450" loading="lazy">
      </div>
      <div class="proof-demo__cards">
        <div class="proof-demo__card card-tint-1 reveal-right reveal-delay-1">
          <div class="proof-demo__stars">
            <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
          </div>
          <p class="proof-demo__quote">"Our old detached garage was leaning and full of rotted framing. Workhorse had it down, debris gone, and the pad broken out in one day. The lot looks ten times better."</p>
          <p class="proof-demo__author">Brian C.</p>
          <p class="proof-demo__meta">Damascus, OR — Garage Demolition</p>
        </div>
        <div class="proof-demo__card card-tint-2 reveal-right reveal-delay-2">
          <div class="proof-demo__stars">
            <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
          </div>
          <p class="proof-demo__quote">"Needed a complete kitchen gut for our remodel in Happy Valley. They protected the hardwood floors in the dining room, stripped the kitchen to studs, and hauled everything in under five hours."</p>
          <p class="proof-demo__author">Amanda &amp; Steve L.</p>
          <p class="proof-demo__meta">Happy Valley, OR — Interior Demo</p>
        </div>
        <div class="proof-demo__card card-tint-3 reveal-right reveal-delay-3">
          <div class="proof-demo__stars">
            <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
          </div>
          <p class="proof-demo__quote">"We hired them to demo a barn and two sheds on a 5-acre property in Boring. They recycled the metal roofing and lumber, and the site was graded flat by end of day two. Best price we got from any contractor."</p>
          <p class="proof-demo__author">Randy M.</p>
          <p class="proof-demo__meta">Boring, OR — Multi-Structure Demolition</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Teeth
     ═══════════════════════════════════════════════════════ -->
<div class="divider-teeth">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,0 L60,50 L120,0 L180,50 L240,0 L300,50 L360,0 L420,50 L480,0 L540,50 L600,0 L660,50 L720,0 L780,50 L840,0 L900,50 L960,0 L1020,50 L1080,0 L1140,50 L1200,0 L1260,50 L1320,0 L1380,50 L1440,0 L1440,50 L0,50 Z" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 6: COMPARISON TABLE
     ═══════════════════════════════════════════════════════ -->
<section class="demo-section compare-demo" aria-label="Workhorse vs other demolition contractors">
  <div class="container">
    <span class="demo-section__eyebrow reveal-up">The Difference</span>
    <h2 class="reveal-up">How does Workhorse <span class="text-accent">compare to other</span> demolition contractors?</h2>
    <p class="answer-block reveal-up">Demolition is the highest-risk phase of any construction project. Cutting corners on insurance, safety protocols, or debris disposal creates liabilities that outlast the project. Here is how our approach differs from what you will find elsewhere.</p>

    <div class="compare-demo__table reveal-scale">
      <div class="compare-demo__col compare-demo__col--other">
        <h3>Other Demolition Companies</h3>
        <ul class="compare-demo__list">
          <li><i data-lucide="x"></i> No pre-demo structural assessment</li>
          <li><i data-lucide="x"></i> Debris left on-site for you to manage</li>
          <li><i data-lucide="x"></i> Everything sent to landfill — no recycling</li>
          <li><i data-lucide="x"></i> Damage to adjacent walls, floors, and landscaping</li>
          <li><i data-lucide="x"></i> Permit shortcuts that fail inspection</li>
        </ul>
      </div>
      <div class="compare-demo__col compare-demo__col--us">
        <h3>Workhorse Site Solutions</h3>
        <ul class="compare-demo__list">
          <li><i data-lucide="check"></i> Full structural walk-through before any work begins</li>
          <li><i data-lucide="check"></i> Complete debris hauling and site cleanup included</li>
          <li><i data-lucide="check"></i> On-site sorting — 50%+ of materials recycled</li>
          <li><i data-lucide="check"></i> Selective demo with protection of adjacent finishes</li>
          <li><i data-lucide="check"></i> All permits pulled and inspections coordinated</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Curve
     ═══════════════════════════════════════════════════════ -->
<div class="divider-curve">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,80 C480,0 960,0 1440,80 L1440,80 L0,80 Z" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 7: FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="demo-section faq-demo" aria-label="Demolition frequently asked questions">
  <div class="container">
    <span class="demo-section__eyebrow reveal-up">Common Questions</span>
    <h2 class="reveal-up">What should you know before <span class="text-accent">hiring a demolition</span> contractor in Damascus?</h2>
    <p class="answer-block reveal-up">Demolition touches permits, utilities, hazardous materials, and site restoration. Here are the questions Damascus property owners ask most before tearing something down.</p>

    <div class="faq-demo__container">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-demo__item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <button class="faq-demo__question" aria-expanded="false" aria-controls="demo-faq-<?php echo $i; ?>">
          <span><?php echo htmlspecialchars($faq['question']); ?></span>
          <span class="faq-demo__toggle"><i data-lucide="chevron-down"></i></span>
        </button>
        <div class="faq-demo__answer" id="demo-faq-<?php echo $i; ?>" role="region">
          <div class="faq-demo__answer-inner answer-block">
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
<section class="demo-section final-cta-demo" aria-label="Request demolition estimate">
  <div class="container">
    <span class="demo-section__eyebrow reveal-up">Tear It Down, Build It Right</span>
    <h2 class="reveal-up">Need a <span class="text-accent">demolition contractor</span> in Damascus, OR?</h2>
    <p class="answer-block reveal-up">Whether it is an old garage, a gutted kitchen, or a commercial strip-out, Workhorse Site Solutions handles the entire demolition process — permits, teardown, hauling, and site restoration. Free estimates with all-inclusive pricing. One call, and the structure is gone.</p>
    <div class="final-cta-demo__ctas reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Demolition Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now — Free Consultation</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════ -->
<section class="demo-section related-demo" aria-label="Related services">
  <div class="container">
    <h2 class="reveal-up">Other Services You May Need</h2>
    <div class="services-grid">
      <?php
      $related = getRelatedServices('demolition', 3);
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
  document.querySelectorAll('.faq-demo__question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = btn.closest('.faq-demo__item');
      var answer = item.querySelector('.faq-demo__answer');
      var isOpen = item.classList.contains('active');

      document.querySelectorAll('.faq-demo__item.active').forEach(function(open) {
        open.classList.remove('active');
        open.querySelector('.faq-demo__question').setAttribute('aria-expanded', 'false');
        open.querySelector('.faq-demo__answer').style.maxHeight = '0';
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

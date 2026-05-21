<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$service         = getServiceBySlug('junk-removal-cleanouts');
$pageTitle       = $service['name'] . ' in Damascus, OR | ' . $siteName;
$pageDescription = 'Fast, affordable junk removal and property cleanouts in Damascus, OR. Workhorse Site Solutions hauls residential and commercial debris with same-day availability across the Portland Metro Area.';
$canonicalUrl    = $siteUrl . '/services/' . $service['slug'] . '/';
$currentPage     = 'services';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg';
$heroImagePreload = $ogImage;
$cssVersion      = '2';

/* ── Photos ─────────────────────────────────────────────────── */
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/photos/';
$heroPhoto = $photoBase . '1779396246317-e1s2om-455041530_17860755687208933_1806338545953806347_n.jpg';
$bodyPhotos = [
    $photoBase . '1779396387280-1qrrhz-481907660_605960769094577_6392559895595472105_n.jpg',
    $photoBase . '1779396400930-ormkb1-481948854_605972842426703_2204700847253730316_n.jpg',
    $photoBase . '1779396406327-bhwsnx-481952463_607412438949410_6548744902460523750_n.jpg',
];

/* ── Service Image + Icon Maps (for related services cards) ── */
$serviceImages = [
    'junk-removal-cleanouts'        => $heroPhoto,
    'excavation-services'           => $photoBase . '1779396273035-84csrf-481103535_608058122218175_6060079720789259957_n.jpg',
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
        'question' => 'How much does junk removal cost in Damascus, OR?',
        'answer'   => 'Most residential junk removal jobs in Damascus range from $250 to $800 depending on volume and item type. A single truckload of household debris averages around $350. We provide free on-site estimates before any work begins, so there are no surprise charges after the haul.',
    ],
    [
        'question' => 'What items can Workhorse Site Solutions haul away?',
        'answer'   => 'We remove furniture, appliances, yard waste, construction debris, hot tubs, sheds, and general household clutter. Hazardous materials like paint, chemicals, and asbestos require specialized handling and are not included in standard junk removal. Everything else is fair game.',
    ],
    [
        'question' => 'Do you offer same-day junk removal near Damascus?',
        'answer'   => 'Yes. When our schedule allows, we can arrive the same day you call. Most Damascus and Portland Metro pickups are scheduled within 24 to 48 hours. We prioritize urgent cleanouts for property sales, evictions, and construction timelines that cannot wait.',
    ],
    [
        'question' => 'How long does a typical property cleanout take?',
        'answer'   => 'A single-room cleanout usually takes 1 to 2 hours. Full-house cleanouts for estate sales or tenant turnovers typically require 4 to 8 hours depending on the volume. We bring the crew and equipment to complete most jobs in a single visit.',
    ],
    [
        'question' => 'Is junk removal available in Gresham, Happy Valley, and Sandy?',
        'answer'   => 'Absolutely. We serve the entire Portland Metro East corridor including Gresham, Happy Valley, Sandy, Boring, Clackamas, and surrounding Clackamas County communities. Damascus is our home base, so nearby cities receive priority scheduling.',
    ],
    [
        'question' => 'What happens to the junk after you haul it away?',
        'answer'   => 'We sort every load at a licensed transfer facility. Recyclable metals, wood, and cardboard are separated and processed. Usable items in good condition are donated to local organizations. The remainder goes to approved disposal sites. We aim to divert at least 40% from landfills.',
    ],
    [
        'question' => 'Do you handle commercial junk removal for businesses?',
        'answer'   => 'Yes. We work with property managers, general contractors, and business owners across Damascus and Portland Metro. Services include office cleanouts, warehouse debris removal, post-renovation hauling, and ongoing scheduled pickups for commercial properties.',
    ],
    [
        'question' => 'Do I need to be present during the junk removal?',
        'answer'   => 'Not necessarily. If the items are accessible and you have authorized the work, we can complete the removal without you on-site. Many clients leave a key or provide gate access. We send before-and-after photos so you can confirm the job is done right.',
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
     JUNK REMOVAL & CLEANOUTS — Workhorse Site Solutions LLC
     Phase 4 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── Service Page Hero ──────────────────────────────────── */
.hero--service {
  position: relative;
  min-height: 85vh;
  display: flex;
  align-items: flex-end;
  padding: var(--space-16) 0 var(--space-12);
  overflow: hidden;
  background: var(--color-dark);
}
.hero--service__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.hero--service__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 30%;
}
.hero--service::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    180deg,
    rgba(var(--color-primary-rgb), 0.25) 0%,
    rgba(var(--color-primary-rgb), 0.55) 40%,
    rgba(var(--color-primary-rgb), 0.88) 100%
  );
}
.hero--service::after {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 2;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.hero--service .container {
  position: relative;
  z-index: 3;
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.hero--service__eyebrow {
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
.hero--service__eyebrow i,
.hero--service__eyebrow svg {
  width: 18px;
  height: 18px;
}
.hero--service h1 {
  color: var(--color-white);
  max-width: 18ch;
  margin-bottom: var(--space-6);
}
.hero--service h1 .text-accent {
  color: var(--color-accent);
}
.hero-answer {
  font-size: var(--font-size-lg);
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.85);
  max-width: 58ch;
  margin-bottom: var(--space-8);
}
.hero--service__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-4);
  margin-bottom: var(--space-8);
}
.hero--service__trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-6);
  padding-top: var(--space-6);
  border-top: 1px solid rgba(255, 255, 255, 0.15);
}
.hero--service__trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.75);
  font-weight: 600;
}
.hero--service__trust-item i,
.hero--service__trust-item svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
}
.hero--service .breadcrumb {
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
.hero--service .breadcrumb a {
  color: rgba(255, 255, 255, 0.65);
  transition: color var(--transition-fast);
}
.hero--service .breadcrumb a:hover {
  color: var(--color-accent);
}
.breadcrumb-sep {
  color: rgba(255, 255, 255, 0.35);
}

/* ── Section Divider: Angled ────────────────────────────── */
.divider-angled {
  position: relative;
  margin-top: -1px;
}
.divider-angled svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section Base ───────────────────────────────────────── */
.svc-section {
  position: relative;
  padding: var(--space-16) 0;
  overflow: hidden;
}
.svc-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}

/* ── Floating Decorative Accent ─────────────────────────── */
.svc-section .floating-accent {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}
.svc-section .floating-accent--1 {
  width: 340px;
  height: 340px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  top: -80px;
  right: -120px;
}
.svc-section .floating-accent--2 {
  width: 260px;
  height: 260px;
  background: radial-gradient(circle, rgba(var(--color-secondary-rgb), 0.05) 0%, transparent 70%);
  bottom: -60px;
  left: -100px;
}

/* ── Section Titles ─────────────────────────────────────── */
.svc-section__eyebrow {
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
.svc-section h2 {
  margin-bottom: var(--space-4);
}
.svc-section h2 .text-accent {
  color: var(--color-accent);
}
.svc-section .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.65;
  color: var(--color-gray-dark);
  max-width: 62ch;
  margin-bottom: var(--space-8);
}

/* ── Section 2: Problem Statement — Pull Quote + Bento ── */
.problem-section {
  background: var(--color-light);
}
.problem-pullquote {
  font-family: var(--font-heading);
  font-size: clamp(1.35rem, 2.5vw, 2rem);
  font-weight: 700;
  line-height: 1.3;
  color: var(--color-dark);
  max-width: 38ch;
  margin-bottom: var(--space-10);
  position: relative;
  padding-left: var(--space-6);
  border-left: 4px solid var(--color-accent);
}
.problem-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-4);
}
.problem-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
  position: relative;
  overflow: hidden;
}
.problem-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: var(--color-accent);
  opacity: 0;
  transition: opacity var(--transition-base);
}
.problem-card:hover::before {
  opacity: 1;
}
.problem-card__icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.problem-card__icon i,
.problem-card__icon svg {
  width: 22px;
  height: 22px;
}
.problem-card h3 {
  font-size: var(--font-size-lg);
  color: var(--color-dark);
}
.problem-card p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.6;
}

/* ── Section 3: Expert Positioning ──────────────────────── */
.expert-section {
  background: var(--color-bg);
}
.expert-layout {
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.expert-stat {
  display: flex;
  align-items: baseline;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
}
.expert-stat__number {
  font-family: var(--font-heading);
  font-size: clamp(3rem, 6vw, 5.5rem);
  font-weight: 900;
  color: var(--color-accent);
  line-height: 1;
}
.expert-stat__label {
  font-size: var(--font-size-lg);
  color: var(--color-gray);
  font-weight: 600;
}
.expert-text {
  font-size: var(--font-size-lg);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 52ch;
  margin-bottom: var(--space-8);
}
.expert-diffs {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.expert-diff {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.expert-diff__icon {
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
.expert-diff__icon i,
.expert-diff__icon svg {
  width: 20px;
  height: 20px;
}
.expert-diff h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
}
.expert-diff p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  line-height: 1.55;
}
.expert-image {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  aspect-ratio: 4 / 5;
}
.expert-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.expert-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-xl);
  box-shadow: inset 0 0 0 2px rgba(var(--color-accent-rgb), 0.15);
  pointer-events: none;
}

/* ── Section 4: Service Breakdown ───────────────────────── */
.breakdown-section {
  background: var(--color-dark);
  color: var(--color-white);
}
.breakdown-section h2 {
  color: var(--color-white);
}
.breakdown-section .answer-block {
  color: rgba(255, 255, 255, 0.7);
}
.breakdown-section .svc-section__eyebrow {
  color: var(--color-accent);
}
.breakdown-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
}
.breakdown-includes h3 {
  font-size: var(--font-size-xl);
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.breakdown-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-3);
}
.breakdown-list li {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  font-size: var(--font-size-base);
  color: rgba(255, 255, 255, 0.8);
  padding: var(--space-3) 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.breakdown-list li i,
.breakdown-list li svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.breakdown-timeline h3 {
  font-size: var(--font-size-xl);
  color: var(--color-white);
  margin-bottom: var(--space-6);
}
.timeline-steps {
  position: relative;
  padding-left: var(--space-8);
}
.timeline-steps::before {
  content: '';
  position: absolute;
  left: 15px;
  top: 8px;
  bottom: 8px;
  width: 2px;
  background: rgba(var(--color-accent-rgb), 0.3);
}
.timeline-step {
  position: relative;
  padding-bottom: var(--space-8);
}
.timeline-step:last-child {
  padding-bottom: 0;
}
.timeline-step__number {
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
.timeline-step h4 {
  color: var(--color-white);
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
}
.timeline-step p {
  font-size: var(--font-size-sm);
  color: rgba(255, 255, 255, 0.6);
  line-height: 1.6;
  max-width: 42ch;
}

/* ── Divider: Wave ──────────────────────────────────────── */
.divider-wave {
  position: relative;
  margin-top: -1px;
  line-height: 0;
}
.divider-wave svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ── Section 5: Proof / Reviews ─────────────────────────── */
.proof-section {
  background: var(--color-light);
}
.proof-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.proof-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  position: relative;
}
.proof-card__stars {
  display: flex;
  gap: 2px;
  margin-bottom: var(--space-4);
  color: var(--color-star);
}
.proof-card__stars i,
.proof-card__stars svg {
  width: 18px;
  height: 18px;
}
.proof-card__quote {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  margin-bottom: var(--space-6);
  font-style: italic;
}
.proof-card__author {
  font-weight: 700;
  font-size: var(--font-size-sm);
  color: var(--color-dark);
}
.proof-card__meta {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
}
.proof-card::before {
  content: '\201C';
  position: absolute;
  top: var(--space-4);
  right: var(--space-6);
  font-family: var(--font-heading);
  font-size: 4rem;
  line-height: 1;
  color: rgba(var(--color-accent-rgb), 0.1);
}

/* ── Section 6: Comparison Table ────────────────────────── */
.compare-section {
  background: var(--color-bg);
}
.compare-table {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.compare-col {
  padding: var(--space-8) var(--space-6);
}
.compare-col--other {
  background: var(--color-light);
}
.compare-col--us {
  background: var(--color-dark);
  color: var(--color-white);
}
.compare-col h3 {
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-6);
  padding-bottom: var(--space-4);
  border-bottom: 2px solid rgba(var(--color-accent-rgb), 0.3);
}
.compare-col--us h3 {
  color: var(--color-accent);
}
.compare-col--other h3 {
  color: var(--color-gray);
}
.compare-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.compare-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  font-size: var(--font-size-base);
  line-height: 1.55;
}
.compare-list li i,
.compare-list li svg {
  width: 20px;
  height: 20px;
  flex-shrink: 0;
  margin-top: 2px;
}
.compare-col--other .compare-list li i,
.compare-col--other .compare-list li svg {
  color: var(--color-danger);
}
.compare-col--us .compare-list li i,
.compare-col--us .compare-list li svg {
  color: var(--color-success);
}

/* ── Section 7: FAQ Accordion ───────────────────────────── */
.faq-section {
  background: var(--color-light);
}
.faq-container {
  max-width: 780px;
  margin: 0 auto;
}
.faq-item {
  border-bottom: 1px solid var(--color-border);
  overflow: hidden;
}
.faq-item:first-child {
  border-top: 1px solid var(--color-border);
}
.faq-question {
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
.faq-question:hover {
  color: var(--color-accent);
}
.faq-question__icon {
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
.faq-question__icon i,
.faq-question__icon svg {
  width: 14px;
  height: 14px;
  transition: transform var(--transition-base);
}
.faq-item.active .faq-question__icon {
  border-color: var(--color-accent);
  transform: rotate(180deg);
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.faq-answer__inner {
  padding: 0 0 var(--space-6);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-gray-dark);
  max-width: 62ch;
}

/* ── Section 8: Final CTA ──────────────────────────────── */
.final-cta-section {
  background: var(--color-dark);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-16) 0;
  position: relative;
  overflow: hidden;
}
.final-cta-section::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 600px;
  height: 600px;
  transform: translate(-50%, -50%);
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 70%);
  pointer-events: none;
}
.final-cta-section h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.final-cta-section .answer-block {
  color: rgba(255, 255, 255, 0.7);
  margin: 0 auto var(--space-8);
}
.final-cta-section .hero--service__ctas {
  justify-content: center;
}

/* ── Related Services ───────────────────────────────────── */
.related-section {
  background: var(--color-bg);
  padding: var(--space-16) 0;
}
.related-section .container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: 0 var(--space-4);
}
.related-section h2 {
  margin-bottom: var(--space-8);
  text-align: center;
}
.related-section .services-grid {
  grid-template-columns: repeat(3, 1fr);
}

/* ── Last Updated Stamp ─────────────────────────────────── */
.last-updated {
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── Responsive ─────────────────────────────────────────── */
@media (max-width: 1024px) {
  .hero--service {
    min-height: 70vh;
  }
  .problem-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .expert-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .expert-image {
    max-width: 500px;
    aspect-ratio: 16 / 10;
  }
  .breakdown-layout {
    grid-template-columns: 1fr;
    gap: var(--space-8);
  }
  .proof-grid {
    grid-template-columns: 1fr;
    gap: var(--space-4);
  }
  .compare-table {
    grid-template-columns: 1fr;
  }
  .related-section .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  .hero--service {
    min-height: 65vh;
    padding-bottom: var(--space-8);
  }
  .hero--service h1 {
    font-size: clamp(2rem, 8vw, 3rem);
  }
  .hero--service__trust {
    flex-direction: column;
    gap: var(--space-3);
  }
  .problem-grid {
    grid-template-columns: 1fr;
  }
  .hero--service__ctas {
    flex-direction: column;
  }
  .related-section .services-grid {
    grid-template-columns: 1fr;
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════
     SECTION 1: HERO
     ═══════════════════════════════════════════════════════ -->
<section class="hero--service" aria-label="Junk Removal and Cleanouts">
  <div class="hero--service__bg">
    <img src="<?php echo htmlspecialchars($heroPhoto); ?>" alt="Workhorse Site Solutions crew loading debris during a junk removal job in Damascus, Oregon" width="1920" height="1080" fetchpriority="high">
  </div>
  <nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span class="breadcrumb-sep">/</span>
    <a href="/services/">Services</a>
    <span class="breadcrumb-sep">/</span>
    <span aria-current="page">Junk Removal &amp; Cleanouts</span>
  </nav>
  <div class="container">
    <span class="hero--service__eyebrow"><i data-lucide="trash-2"></i> Junk Removal &amp; Cleanouts</span>
    <h1><span class="text-accent">Junk Removal</span> &amp; Cleanout Services in Damascus, OR</h1>
    <p class="hero-answer">Workhorse Site Solutions is a licensed Oregon contractor based in Damascus, serving the Portland Metro Area with fast, reliable junk removal. We haul residential and commercial debris — furniture, appliances, yard waste, construction materials — with same-day availability and upfront pricing. No hidden fees.</p>
    <div class="hero--service__ctas">
      <a href="/contact/" class="btn btn-accent">Get a Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now</a>
      <?php endif; ?>
    </div>
    <div class="hero--service__trust">
      <span class="hero--service__trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero--service__trust-item"><i data-lucide="clock"></i> Same-Day Available</span>
      <span class="hero--service__trust-item"><i data-lucide="star"></i> 5-Star Rated</span>
      <span class="hero--service__trust-item"><i data-lucide="calendar-check"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Angled
     ═══════════════════════════════════════════════════════ -->
<div class="divider-angled">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-light)" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 2: PROBLEM STATEMENT
     ═══════════════════════════════════════════════════════ -->
<section class="svc-section problem-section" aria-label="Signs you need junk removal">
  <div class="floating-accent floating-accent--1"></div>
  <div class="container">
    <span class="svc-section__eyebrow reveal-up">Sound Familiar?</span>
    <h2 class="reveal-up">What are the <span class="text-accent">signs you need</span> a professional junk removal service?</h2>
    <p class="answer-block reveal-up">Most property owners wait too long to call. Piled-up debris attracts pests, creates safety hazards, and lowers your property value. If any of these situations describe your Damascus property, you need a professional cleanout — not another weekend of hauling bags to the curb.</p>

    <p class="problem-pullquote reveal-up">"We tried doing it ourselves for three weekends straight. One call to Workhorse and the entire garage was cleared in two hours."</p>

    <div class="problem-grid">
      <div class="problem-card card-tint-1 reveal-up reveal-delay-1">
        <div class="problem-card__icon"><i data-lucide="alert-triangle"></i></div>
        <h3>Garage or Basement Overflow</h3>
        <p>You cannot park in your garage or walk through your basement. Storage has turned into a dumping ground over months or years.</p>
      </div>
      <div class="problem-card card-tint-2 reveal-up reveal-delay-2">
        <div class="problem-card__icon"><i data-lucide="home"></i></div>
        <h3>Estate or Tenant Cleanout</h3>
        <p>A property needs to be emptied for sale, rental turnover, or estate settlement. Time is limited and the volume is overwhelming.</p>
      </div>
      <div class="problem-card card-tint-3 reveal-up reveal-delay-3">
        <div class="problem-card__icon"><i data-lucide="construction"></i></div>
        <h3>Post-Construction Debris</h3>
        <p>Renovation scraps, torn-out drywall, old fixtures, and lumber piles are blocking the next phase of your project.</p>
      </div>
      <div class="problem-card card-tint-1 reveal-up reveal-delay-4">
        <div class="problem-card__icon"><i data-lucide="tree-pine"></i></div>
        <h3>Yard Waste Accumulation</h3>
        <p>Branches, leaves, dirt, and landscape debris have piled up past what your weekly curbside pickup can handle. The yard looks neglected.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Wave
     ═══════════════════════════════════════════════════════ -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,40 C360,80 720,0 1440,40 L1440,80 L0,80 Z" fill="var(--color-bg)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 3: EXPERT POSITIONING
     ═══════════════════════════════════════════════════════ -->
<section class="svc-section expert-section" aria-label="Why choose Workhorse for junk removal">
  <div class="floating-accent floating-accent--2"></div>
  <div class="container">
    <span class="svc-section__eyebrow reveal-up">Why Workhorse</span>
    <h2 class="reveal-up">Why do Damascus homeowners <span class="text-accent">choose Workhorse</span> for junk removal?</h2>
    <p class="answer-block reveal-up">Because we show up on time, charge fair prices, and finish the job in a single visit. Our crew handles the heavy lifting — literally — so you never touch a thing. We have hauled over 500 loads across the Portland Metro Area since 2022.</p>

    <div class="expert-layout">
      <div class="reveal-up">
        <div class="expert-stat">
          <span class="expert-stat__number" data-target="500">500</span>
          <span class="expert-stat__label">loads hauled since 2022</span>
        </div>
        <p class="expert-text">We are not a franchise with call-center pricing. Workhorse Site Solutions is family-owned, based right here in Damascus. That means lower overhead, faster response, and a crew that takes pride in leaving your property spotless.</p>

        <div class="expert-diffs">
          <div class="expert-diff reveal-left reveal-delay-1">
            <div class="expert-diff__icon"><i data-lucide="clock"></i></div>
            <div>
              <h3>Same-Day &amp; Next-Day Scheduling</h3>
              <p>Most Damascus jobs are completed within 24 hours of your call. Urgent cleanouts for real estate closings or construction timelines get priority.</p>
            </div>
          </div>
          <div class="expert-diff reveal-left reveal-delay-2">
            <div class="expert-diff__icon"><i data-lucide="recycle"></i></div>
            <div>
              <h3>Responsible Disposal &amp; Recycling</h3>
              <p>We sort metals, wood, and usable goods at licensed facilities. At least 40% of every load is diverted from the landfill through donation or recycling.</p>
            </div>
          </div>
          <div class="expert-diff reveal-left reveal-delay-3">
            <div class="expert-diff__icon"><i data-lucide="dollar-sign"></i></div>
            <div>
              <h3>Transparent, Upfront Pricing</h3>
              <p>You get a written estimate before we load a single item. No trip fees, no hidden surcharges. The price we quote is the price you pay.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="expert-image reveal-right">
        <img src="<?php echo htmlspecialchars($bodyPhotos[0]); ?>" alt="Workhorse crew completing a residential junk removal in the Portland Metro Area" width="600" height="750" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Angled (inverted)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-angled">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-dark)" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1440,60 0,60"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 4: SERVICE BREAKDOWN
     ═══════════════════════════════════════════════════════ -->
<section class="svc-section breakdown-section" aria-label="What junk removal includes">
  <div class="container">
    <span class="svc-section__eyebrow reveal-up">What's Included</span>
    <h2 class="reveal-up">What does a <span class="text-accent">full junk removal</span> service include?</h2>
    <p class="answer-block reveal-up">Every job includes arrival, assessment, loading, hauling, and cleanup of the work area. We bring the labor, the truck, and the disposal fees — you point at what goes. Here is exactly what you get and how the process works from call to clean.</p>

    <div class="breakdown-layout">
      <div class="breakdown-includes reveal-up">
        <h3>Service Inclusions</h3>
        <ul class="breakdown-list">
          <li><i data-lucide="check"></i> On-site assessment and written estimate</li>
          <li><i data-lucide="check"></i> All labor — you never lift a finger</li>
          <li><i data-lucide="check"></i> Furniture, appliances, and electronics removal</li>
          <li><i data-lucide="check"></i> Yard waste and outdoor debris hauling</li>
          <li><i data-lucide="check"></i> Construction and renovation scrap removal</li>
          <li><i data-lucide="check"></i> Hot tub, shed, and play structure teardown</li>
          <li><i data-lucide="check"></i> Broom-clean finish after loading</li>
          <li><i data-lucide="check"></i> Responsible disposal, donation, and recycling</li>
        </ul>
      </div>
      <div class="breakdown-timeline reveal-up">
        <h3>How It Works</h3>
        <div class="timeline-steps">
          <div class="timeline-step">
            <span class="timeline-step__number">1</span>
            <h4>Call or Request Online</h4>
            <p>Reach out by phone or our online form. Describe what you need removed and your preferred timeframe.</p>
          </div>
          <div class="timeline-step">
            <span class="timeline-step__number">2</span>
            <h4>Free On-Site Estimate</h4>
            <p>We assess the volume, access, and item types at your Damascus property. You receive an all-inclusive price before we start.</p>
          </div>
          <div class="timeline-step">
            <span class="timeline-step__number">3</span>
            <h4>Load &amp; Haul</h4>
            <p>Our crew loads everything onto the truck. Heavy items, awkward items, attic and basement hauls — we handle it all.</p>
          </div>
          <div class="timeline-step">
            <span class="timeline-step__number">4</span>
            <h4>Clean &amp; Close</h4>
            <p>We sweep the area clean, sort recyclables at a licensed facility, and donate usable goods. You get before-and-after photos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Wave (dark to light)
     ═══════════════════════════════════════════════════════ -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,20 C480,80 960,0 1440,40 L1440,80 L0,80 Z" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 5: PROOF / REVIEWS
     ═══════════════════════════════════════════════════════ -->
<section class="svc-section proof-section" aria-label="Junk removal reviews">
  <div class="container">
    <span class="svc-section__eyebrow reveal-up">Real Results</span>
    <h2 class="reveal-up">What do Damascus <span class="text-accent">property owners</span> say about our junk removal?</h2>
    <p class="answer-block reveal-up">Our 5-star reputation is built on consistent, no-hassle junk removal for homeowners and businesses across Clackamas County. Here are a few recent experiences from clients who needed fast, professional hauling.</p>

    <div class="proof-grid">
      <div class="proof-card card-tint-1 reveal-up reveal-delay-1">
        <div class="proof-card__stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="proof-card__quote">"We had a full garage, half a basement, and a backyard shed to empty before listing our house. Workhorse had everything gone in one afternoon. The price was exactly what they quoted — no surprises."</p>
        <p class="proof-card__author">Sarah M.</p>
        <p class="proof-card__meta">Damascus, OR — Estate Cleanout</p>
      </div>
      <div class="proof-card card-tint-2 reveal-up reveal-delay-2">
        <div class="proof-card__stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="proof-card__quote">"I manage three rental properties in Gresham. Every time a tenant moves out and leaves junk behind, I call Workhorse. They are always available within 48 hours and the units are left broom-clean."</p>
        <p class="proof-card__author">David K.</p>
        <p class="proof-card__meta">Gresham, OR — Rental Turnover Cleanup</p>
      </div>
      <div class="proof-card card-tint-3 reveal-up reveal-delay-3">
        <div class="proof-card__stars">
          <i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i><i data-lucide="star"></i>
        </div>
        <p class="proof-card__quote">"After our kitchen remodel, we had drywall scraps, old cabinets, and tile everywhere. Workhorse loaded it all in under two hours and swept the driveway before they left. Highly recommend."</p>
        <p class="proof-card__author">Jennifer &amp; Tom R.</p>
        <p class="proof-card__meta">Happy Valley, OR — Post-Renovation Hauling</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION divider: Angled
     ═══════════════════════════════════════════════════════ -->
<div class="divider-angled">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1440,0 1440,60"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 6: COMPARISON
     ═══════════════════════════════════════════════════════ -->
<section class="svc-section compare-section" aria-label="Why Workhorse vs other junk removal companies">
  <div class="container">
    <span class="svc-section__eyebrow reveal-up">The Difference</span>
    <h2 class="reveal-up">How does Workhorse <span class="text-accent">compare to other</span> junk removal companies?</h2>
    <p class="answer-block reveal-up">National franchises charge premium rates with hidden fees. Independent haulers may not carry insurance. Workhorse Site Solutions gives you the reliability of a licensed contractor with the responsiveness of a local, family-run operation.</p>

    <div class="compare-table reveal-scale">
      <div class="compare-col compare-col--other">
        <h3>Other Haulers</h3>
        <ul class="compare-list">
          <li><i data-lucide="x"></i> Call-center scheduling with vague windows</li>
          <li><i data-lucide="x"></i> Price changes after arrival based on "volume"</li>
          <li><i data-lucide="x"></i> No cleanup after loading — debris left behind</li>
          <li><i data-lucide="x"></i> Everything goes to the landfill</li>
          <li><i data-lucide="x"></i> Unlicensed, uninsured, or out-of-state operators</li>
        </ul>
      </div>
      <div class="compare-col compare-col--us">
        <h3>Workhorse Site Solutions</h3>
        <ul class="compare-list">
          <li><i data-lucide="check"></i> Same-day and next-day scheduling direct with our crew</li>
          <li><i data-lucide="check"></i> Locked-in pricing with a written on-site estimate</li>
          <li><i data-lucide="check"></i> Broom-clean finish after every load</li>
          <li><i data-lucide="check"></i> 40%+ diverted through recycling and donation</li>
          <li><i data-lucide="check"></i> Licensed, bonded, and insured Oregon contractor</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     SECTION DIVIDER: Wave
     ═══════════════════════════════════════════════════════ -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,40 C360,80 720,0 1440,40 L1440,80 L0,80 Z" fill="var(--color-light)"/></svg>
</div>


<!-- ═══════════════════════════════════════════════════════
     SECTION 7: FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="svc-section faq-section" aria-label="Junk removal frequently asked questions">
  <div class="container">
    <span class="svc-section__eyebrow reveal-up">Common Questions</span>
    <h2 class="reveal-up">What should you know before booking <span class="text-accent">junk removal</span> in Damascus?</h2>
    <p class="answer-block reveal-up">We answer the questions Damascus and Portland Metro homeowners ask most. If you do not see your question here, call us or submit a request — we respond within the hour during business hours.</p>

    <div class="faq-container">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up<?php echo ($i < 4) ? ' reveal-delay-' . ($i + 1) : ''; ?>">
        <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-<?php echo $i; ?>">
          <span><?php echo htmlspecialchars($faq['question']); ?></span>
          <span class="faq-question__icon"><i data-lucide="chevron-down"></i></span>
        </button>
        <div class="faq-answer" id="faq-answer-<?php echo $i; ?>" role="region">
          <div class="faq-answer__inner answer-block">
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
<section class="svc-section final-cta-section" aria-label="Request junk removal estimate">
  <div class="container">
    <span class="svc-section__eyebrow reveal-up">Ready to Clear the Clutter?</span>
    <h2 class="reveal-up">Need <span class="text-accent">junk removed</span> from your Damascus property?</h2>
    <p class="answer-block reveal-up">Stop stacking, stop hauling bags to the curb, stop putting it off. One call to Workhorse Site Solutions and your property is cleared — often within 24 hours. Free estimates, upfront pricing, and a broom-clean finish every time.</p>
    <div class="hero--service__ctas reveal-up">
      <a href="/contact/" class="btn btn-accent">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white"><i data-lucide="phone" style="width:18px;height:18px"></i> Call Now — Same-Day Available</a>
      <?php endif; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════ -->
<section class="svc-section related-section" aria-label="Related services">
  <div class="container">
    <h2 class="reveal-up">Other Services You May Need</h2>
    <div class="services-grid">
      <?php
      $related = getRelatedServices('junk-removal-cleanouts', 3);
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
  document.querySelectorAll('.faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var item = btn.closest('.faq-item');
      var answer = item.querySelector('.faq-answer');
      var isOpen = item.classList.contains('active');

      // Close all
      document.querySelectorAll('.faq-item.active').forEach(function(open) {
        open.classList.remove('active');
        open.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        open.querySelector('.faq-answer').style.maxHeight = '0';
      });

      // Open clicked (if it was closed)
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

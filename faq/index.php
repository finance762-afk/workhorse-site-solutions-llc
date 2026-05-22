<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ── Page-Level Setup ─────────────────────────────────────── */
$pageTitle       = 'FAQ | Workhorse Site Solutions | Damascus, OR';
$pageDescription = 'Frequently asked questions about junk removal, excavation, demolition, land clearing, and site work services from Workhorse Site Solutions in Damascus, OR.';
$canonicalUrl    = $siteUrl . '/faq/';
$currentPage     = 'faq';
$cssVersion      = '6';

/* ── FAQ Data ────────────────────────────────────────────── */
$faqCategories = [
    'General' => [
        [
            'question' => 'What services does Workhorse Site Solutions provide?',
            'answer'   => 'We offer 12 specialized services: junk removal and cleanouts, excavation, demolition, land clearing, tree services, site preparation and grading, trenching, fence installation, deck and patio construction, driveway services, general contracting, and commercial and residential cleanup. Every service is available for residential, commercial, and construction clients.',
        ],
        [
            'question' => 'What areas does Workhorse Site Solutions serve?',
            'answer'   => 'We\'re based in Damascus, OR and serve the entire Portland Metro Area within a 50-mile radius. Our most active service areas include Damascus, Gresham, Happy Valley, Sandy, Boring, Clackamas, and southeast Portland. We work throughout Clackamas and Multnomah counties.',
        ],
        [
            'question' => 'Are you licensed, bonded, and insured in Oregon?',
            'answer'   => 'Yes. Workhorse Site Solutions is fully licensed, bonded, and insured to operate in the state of Oregon. We carry general liability insurance and workers\' compensation coverage on every project, protecting both our crew and your property.',
        ],
        [
            'question' => 'How long has Workhorse Site Solutions been in business?',
            'answer'   => 'We\'ve been serving the Damascus and Portland Metro Area since ' . $yearEstablished . ' — that\'s ' . $yearsInBusiness . '+ years. We started as a junk hauling company and expanded into full-service site work as our clients\' needs grew.',
        ],
    ],
    'Services' => [
        [
            'question' => 'How much does junk removal cost in Damascus, OR?',
            'answer'   => 'Most residential junk removal jobs range from $150 to $600, depending on volume and item type. Commercial cleanouts and larger loads may run higher. We always provide a free on-site estimate before loading anything, so you know the exact price upfront. No hidden fees.',
        ],
        [
            'question' => 'Can you handle both residential and commercial demolition?',
            'answer'   => 'Yes. We handle interior strip-outs, garage and shed demos, partial structure removal, and full building demolition for both residential and commercial properties. All demolition work includes debris hauling and responsible disposal. We coordinate Clackamas County permits on structural jobs.',
        ],
        [
            'question' => 'Do you provide land clearing for new construction sites?',
            'answer'   => 'Absolutely. Land clearing for residential and commercial construction is one of our core services. We remove trees, stumps, brush, and debris, then grade the lot to your builder\'s specifications. We handle everything from rural acreage off Boring Road to tight suburban lots in Happy Valley.',
        ],
        [
            'question' => 'What types of fences do you install?',
            'answer'   => 'We install wood, vinyl, chain-link, and composite fencing for residential and commercial properties. Our work includes post-hole digging, rail and panel setting, gate installation, and property line compliance verification. Most residential fence projects finish in 1-3 days.',
        ],
        [
            'question' => 'Do you build custom decks and patios?',
            'answer'   => 'Yes. We build custom decks and patios using both pressure-treated wood and composite decking materials. We also build covered patio structures and pergolas. All builds include footings, framing, railings, and stairs to current Oregon building code.',
        ],
    ],
    'Pricing & Estimates' => [
        [
            'question' => 'How do I get a free estimate?',
            'answer'   => 'You can request a free estimate by filling out the form on our contact page, calling us directly, or texting us a description and photos of the work. For most jobs, we schedule an on-site walkthrough within 48 hours and provide a written estimate the same day we visit.',
        ],
        [
            'question' => 'Do you charge for on-site estimates?',
            'answer'   => 'No. Every estimate is free and comes with no obligation. We walk the site, discuss the scope, and give you an honest number. If the price works, we schedule the job. If not, there\'s no pressure and no follow-up sales calls.',
        ],
        [
            'question' => 'What payment methods do you accept?',
            'answer'   => 'We accept cash, checks, and digital payment methods. For larger projects, we may offer phased billing tied to project milestones. Payment terms are outlined in your project agreement before any work begins.',
        ],
        [
            'question' => 'Do prices include hauling and disposal?',
            'answer'   => 'Yes. For junk removal, demolition, land clearing, and cleanup services, hauling and disposal costs are included in our estimate. We don\'t hit you with surprise dump fees after the fact. For site prep and construction services, material costs are itemized separately.',
        ],
    ],
    'Process & Scheduling' => [
        [
            'question' => 'How quickly can you start a project?',
            'answer'   => 'For junk removal and small cleanouts, we often have same-day or next-day availability. For excavation, demolition, and site prep projects, we typically schedule within 1-2 weeks of estimate approval. Emergency and priority scheduling is available for time-sensitive jobs.',
        ],
        [
            'question' => 'Do you handle permits for demolition and excavation?',
            'answer'   => 'Yes. We coordinate with Clackamas County and other local jurisdictions for all required permits on demolition, excavation, grading, and construction projects. Permit timelines vary — typically 2-4 weeks for structural demolition — and we factor that into your project schedule.',
        ],
        [
            'question' => 'What happens to the junk and debris you haul away?',
            'answer'   => 'We sort everything we haul. Recyclable materials go to licensed recycling facilities, salvageable items get donated when possible, and only true waste goes to the landfill. We use DEQ-compliant disposal facilities for all construction debris and hazardous materials.',
        ],
        [
            'question' => 'Can you work on my property while I\'m not home?',
            'answer'   => 'Yes, as long as we have site access and clear instructions from you. Many of our clients — especially commercial property managers and general contractors — give us site access and we handle the work independently. We send progress photos and a final walkthrough report.',
        ],
        [
            'question' => 'What if the scope of work changes during the project?',
            'answer'   => 'It happens, and we handle it transparently. If we discover additional work during a project — like buried concrete during excavation or a rotted substructure during demolition — we stop, document it, and contact you with a revised estimate before proceeding. No surprise charges.',
        ],
    ],
];

/* ── Build flat FAQ array for schema ─────────────────────── */
$allFaqs = [];
foreach ($faqCategories as $cat => $items) {
    foreach ($items as $faq) {
        $allFaqs[] = $faq;
    }
}

/* ── Schema ──────────────────────────────────────────────── */
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'FAQ', 'url' => '/faq/'],
]);
$faqSchema = generateFAQSchema($allFaqs);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php echo $breadcrumbSchema; ?>
<?php echo $faqSchema; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ════════════════════════════════════════════════════════
     FAQ PAGE — Workhorse Site Solutions LLC
     Phase 5 | Premium Tier | Damascus, OR
     ════════════════════════════════════════════════════════ -->

<style>
/* ── FAQ Hero ────────────────────────────────────────────── */
.hero--faq {
  position: relative;
  min-height: 45vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--nav-height) + var(--space-10)) var(--space-6) var(--space-10);
  background: var(--color-primary);
  overflow: hidden;
}
.hero--faq::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, rgba(77,94,111,0.9) 100%);
}
.hero--faq::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero--faq > * { position: relative; z-index: 2; }
.hero--faq h1 { color: var(--color-white); margin-bottom: var(--space-3); text-wrap: balance; }
.hero--faq p {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  max-width: 560px;
  margin: 0 auto;
}

/* ── Category Headers ────────────────────────────────────── */
.faq-category {
  margin-bottom: var(--space-10);
}
.faq-category-title {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  margin-bottom: var(--space-6);
  padding-bottom: var(--space-3);
  border-bottom: 2px solid var(--color-accent);
}
.faq-category-title i,
.faq-category-title svg {
  width: 24px;
  height: 24px;
  color: var(--color-accent);
}
.faq-category-title h2 {
  font-size: var(--font-size-xl);
  margin: 0;
}

/* ── FAQ Items ───────────────────────────────────────────── */
.faq-list { display: flex; flex-direction: column; gap: var(--space-3); }
.faq-item {
  background: var(--color-white);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  padding: var(--space-5);
  cursor: pointer;
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
  transition: box-shadow var(--transition-base), border-color var(--transition-base);
}
.faq-item:hover {
  box-shadow: var(--shadow-sm);
  border-color: var(--color-accent);
}
.faq-icon {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: var(--color-light);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--color-accent);
}
.faq-icon i,
.faq-icon svg { width: 16px; height: 16px; }
.faq-item h3 {
  font-size: var(--font-size-base);
  font-weight: 600;
  margin: 0;
  line-height: 1.4;
  color: var(--color-dark);
}
.faq-toggle {
  margin-left: auto;
  flex-shrink: 0;
  transition: transform var(--transition-base);
  color: var(--color-gray);
}
.faq-item.active .faq-toggle { transform: rotate(45deg); color: var(--color-accent); }
.faq-answer {
  display: none;
  margin-top: var(--space-3);
  padding-top: var(--space-3);
  border-top: 1px solid var(--color-border);
}
.faq-item.active .faq-answer { display: block; }
.faq-answer p {
  font-size: var(--font-size-sm);
  line-height: 1.7;
  color: var(--color-gray);
  margin: 0;
  max-width: 65ch;
}

/* ── CTA Section ─────────────────────────────────────────── */
.faq-cta {
  background: var(--color-dark);
  text-align: center;
}
.faq-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.faq-cta p {
  color: rgba(255,255,255,0.8);
  max-width: 550px;
  margin: 0 auto var(--space-6);
}
</style>

<!-- ═══════════════════════════════════════════════════════
     HERO — FAQ
     ═══════════════════════════════════════════════════════ -->
<section class="hero hero--faq">
  <div>
    <h1>Frequently Asked <span class="text-accent">Questions</span></h1>
    <p>Straight answers to the most common questions about our services, pricing, and process in the Damascus and Portland Metro Area.</p>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     FAQ SECTIONS
     ═══════════════════════════════════════════════════════ -->
<section class="section" aria-label="Frequently asked questions">
  <div class="container">

    <?php
    $catIcons = [
        'General'               => 'info',
        'Services'              => 'wrench',
        'Pricing & Estimates'   => 'dollar-sign',
        'Process & Scheduling'  => 'calendar',
    ];
    $catIndex = 0;
    foreach ($faqCategories as $category => $faqs):
      $catIndex++;
      $icon = $catIcons[$category] ?? 'help-circle';
    ?>
    <div class="faq-category reveal-up">
      <div class="faq-category-title">
        <i data-lucide="<?php echo $icon; ?>"></i>
        <h2><?php echo htmlspecialchars($category); ?></h2>
      </div>

      <div class="faq-list">
        <?php foreach ($faqs as $j => $faq): ?>
        <div class="faq-item" onclick="this.classList.toggle('active')">
          <div class="faq-icon"><i data-lucide="help-circle"></i></div>
          <div style="flex:1;">
            <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
            <div class="faq-answer">
              <p><?php echo htmlspecialchars($faq['answer']); ?></p>
            </div>
          </div>
          <span class="faq-toggle"><i data-lucide="plus" style="width:20px;height:20px"></i></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════ -->
<section class="faq-cta section" aria-label="Call to action">
  <div class="container">
    <h2>Still Have Questions?</h2>
    <p>We're happy to talk through your project in detail. Get in touch for a free, no-obligation estimate or just to ask us anything.</p>
    <div style="display:flex;gap:var(--space-4);justify-content:center;flex-wrap:wrap;">
      <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px"></i> Call <?php echo formatPhone($phone); ?>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

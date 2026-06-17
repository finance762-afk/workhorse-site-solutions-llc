<?php
/**
 * Head Include — Workhorse Site Solutions LLC
 * Phase 2: DOCTYPE, <head>, meta, OG, schema, CSS, fonts
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

// Page-level variables (set before including this file)
$pageTitle       = $pageTitle       ?? $siteName . ' | Junk Removal, Excavation & Site Work in Damascus, OR';
$pageDescription = $pageDescription ?? $siteName . ' provides professional junk removal, excavation, demolition, land clearing, and site preparation services in Damascus, OR and the Portland Metro Area. Licensed, bonded, insured.';
$canonicalUrl    = $canonicalUrl    ?? $siteUrl . '/';
$currentPage     = $currentPage     ?? 'home';
$noindex         = $noindex         ?? false;
$heroImagePreload = $heroImagePreload ?? '';
$cssVersion      = $cssVersion      ?? '2';
$ogImage         = $ogImage         ?? 'https://db.pageone.cloud/storage/v1/object/public/client-assets/workhorse-site-solutions-llc/logo/1779395834513-8d2g9i-IMG_7612.jpeg';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <?php if ($noindex): ?>
  <meta name="robots" content="noindex,nofollow">
  <?php endif; ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale" content="en_US">

  <!-- Fonts: Unbounded (headings) + Source Sans 3 (body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400..900&family=Source+Sans+3:ital,wght@0,400..900;1,400..700&display=swap" rel="stylesheet">

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="//i.imgur.com">
  <link rel="dns-prefetch" href="//db.pageone.cloud">
  <link rel="dns-prefetch" href="//elfsightcdn.com">

  <?php if (!empty($heroImagePreload)): ?>
  <!-- Hero Image Preload -->
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImagePreload); ?>">
  <?php endif; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion; ?>">

  <!-- Google Analytics (replace G-XXXXXXXXXX with actual ID post-launch) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId); ?>');
  </script> -->

  <?php if ($currentPage === 'home'): ?>
  <!-- JSON-LD: LocalBusiness Schema (Homepage) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "GeneralContractor",
    "@id": "<?php echo $siteUrl; ?>/#organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "url": "<?php echo $siteUrl; ?>",
    <?php if (!empty($phone)): ?>
    "telephone": "<?php echo htmlspecialchars($phone); ?>",
    <?php endif; ?>
    <?php if (!empty($email)): ?>
    "email": "<?php echo htmlspecialchars($email); ?>",
    <?php endif; ?>
    "description": "<?php echo htmlspecialchars($tagline); ?>",
    "address": {
      "@type": "PostalAddress",
      <?php if (!empty($address['street'])): ?>
      "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
      <?php endif; ?>
      "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 45.4168,
      "longitude": -122.4587
    },
    "image": "<?php echo htmlspecialchars($ogImage); ?>",
    "priceRange": "$$",
    "areaServed": [
      {
        "@type": "City",
        "name": "Damascus",
        "containedInPlace": {
          "@type": "State",
          "name": "Oregon"
        }
      },
      {
        "@type": "City",
        "name": "Portland"
      },
      {
        "@type": "City",
        "name": "Gresham"
      },
      {
        "@type": "City",
        "name": "Happy Valley"
      },
      {
        "@type": "City",
        "name": "Sandy"
      },
      {
        "@type": "City",
        "name": "Boring"
      },
      {
        "@type": "City",
        "name": "Clackamas"
      }
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Site Solutions Services",
      "itemListElement": [
        <?php foreach ($services as $i => $service): ?>
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "<?php echo htmlspecialchars($service['name']); ?>",
            "description": "<?php echo htmlspecialchars($service['description']); ?>"
          }
        }<?php echo ($i < count($services) - 1) ? ',' : ''; ?>
        <?php endforeach; ?>
      ]
    },
    "foundingDate": "<?php echo $yearEstablished; ?>",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "5.0",
      "reviewCount": "100",
      "bestRating": "5",
      "worstRating": "1"
    }
  }
  </script>
  <?php endif; ?>
<?php require_once __DIR__ . '/edit-mode.php'; ?>
</head>
<body>

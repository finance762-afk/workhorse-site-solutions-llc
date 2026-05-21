<?php
/**
 * Helper Functions — Workhorse Site Solutions LLC
 * Phase 2: Navigation, formatting, schema, SEO helpers
 */

/**
 * Check if the current page matches the given identifier.
 * Usage: isActivePage('home') returns true when $currentPage === 'home'
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format phone number for display: (503) 555-1234
 */
function formatPhone($phone) {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '(' . substr($digits, 1, 3) . ') ' . substr($digits, 4, 3) . '-' . substr($digits, 7);
    }
    return $phone;
}

/**
 * Generate a URL-safe slug from a service name.
 */
function getServiceSlug($name) {
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Generate a URL-safe slug from a city name.
 */
function getAreaSlug($city) {
    $slug = strtolower(trim($city));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Generate Service schema JSON-LD for a service page.
 */
function generateServiceSchema($service) {
    global $siteUrl, $siteName, $address, $phone;
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'description' => $service['description'],
        'url' => $siteUrl . '/services/' . $service['slug'] . '/',
        'provider' => [
            '@type' => 'GeneralContractor',
            '@id' => $siteUrl . '/#organization',
            'name' => $siteName,
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'],
            'containedInPlace' => [
                '@type' => 'State',
                'name' => $address['state'],
            ],
        ],
    ];
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate FAQPage schema JSON-LD from an array of Q&A pairs.
 * Each item: ['question' => '...', 'answer' => '...']
 */
function generateFAQSchema($faqs) {
    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ];
    }
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $items,
    ];
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate BreadcrumbList schema JSON-LD.
 * $crumbs: [['name' => 'Home', 'url' => '/'], ['name' => 'Services', 'url' => '/services/'], ...]
 */
function generateBreadcrumbSchema($crumbs) {
    global $siteUrl;
    $items = [];
    foreach ($crumbs as $i => $crumb) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $crumb['name'],
            'item' => $siteUrl . $crumb['url'],
        ];
    }
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate <title> and <meta> tags for inner pages.
 * Returns array of [$pageTitle, $pageDescription, $canonicalUrl] for use before head.php include.
 */
function generateMetaTags($title, $description, $canonical) {
    return [
        'pageTitle' => $title,
        'pageDescription' => $description,
        'canonicalUrl' => $canonical,
    ];
}

/**
 * Get a service by slug from the global $services array.
 */
function getServiceBySlug($slug) {
    global $services;
    foreach ($services as $service) {
        if ($service['slug'] === $slug) {
            return $service;
        }
    }
    return null;
}

/**
 * Get related services (excluding the current one) for "Related Services" sections.
 * Returns up to $count random services.
 */
function getRelatedServices($currentSlug, $count = 3) {
    global $services;
    $others = array_filter($services, function($s) use ($currentSlug) {
        return $s['slug'] !== $currentSlug;
    });
    $others = array_values($others);
    shuffle($others);
    return array_slice($others, 0, $count);
}

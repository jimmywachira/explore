<?php

declare(strict_types=1);

$baseDir = __DIR__;
$hostFromEnv = getenv('STATIC_SITE_HOST') ?: 'your-domain.com';
$siteUrlFromEnv = getenv('STATIC_SITE_URL') ?: ('https://' . $hostFromEnv);

$siteUrl = rtrim($siteUrlFromEnv, '/');
$parsedHost = parse_url($siteUrl, PHP_URL_HOST);
$httpHost = $parsedHost ?: $hostFromEnv;
$httpsFlag = str_starts_with($siteUrl, 'https://') ? 'on' : 'off';

$pages = [
    ['controller' => 'index.php', 'uri' => '/', 'output' => 'index.html'],
    ['controller' => 'about.php', 'uri' => '/about', 'output' => 'about.html'],
    ['controller' => 'contact.php', 'uri' => '/contact', 'output' => 'contact.html'],
    ['controller' => 'testimonials.php', 'uri' => '/testimonials', 'output' => 'testimonials.html'],
    ['controller' => 'car-importation.php', 'uri' => '/car-importation', 'output' => 'car-importation.html'],
    ['controller' => 'inspection-guidance.php', 'uri' => '/inspection-guidance', 'output' => 'inspection-guidance.html'],
    ['controller' => 'shipping-clearing.php', 'uri' => '/shipping-clearing', 'output' => 'shipping-clearing.html'],
    ['controller' => 'vehicle-sourcing-support.php', 'uri' => '/vehicle-sourcing-support', 'output' => 'vehicle-sourcing-support.html'],
];

$linkReplacements = [
    '/index.php' => '/',
    '/about.php' => '/about',
    '/contact.php' => '/contact',
    '/testimonials.php' => '/testimonials',
    '/car-importation.php' => '/car-importation',
    '/inspection-guidance.php' => '/inspection-guidance',
    '/shipping-clearing.php' => '/shipping-clearing',
    '/vehicle-sourcing-support.php' => '/vehicle-sourcing-support',
];

foreach ($pages as $page) {
    $_SERVER['REQUEST_URI'] = $page['uri'];
    $_SERVER['HTTP_HOST'] = $httpHost;
    $_SERVER['HTTPS'] = $httpsFlag;

    ob_start();
    require $baseDir . DIRECTORY_SEPARATOR . $page['controller'];
    $html = ob_get_clean();

    if (!is_string($html) || $html === '') {
        throw new RuntimeException('Failed to render page: ' . $page['controller']);
    }

    $html = str_replace(array_keys($linkReplacements), array_values($linkReplacements), $html);
    $outPath = $baseDir . DIRECTORY_SEPARATOR . $page['output'];
    file_put_contents($outPath, $html);
}

$entries = [
    ['path' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['path' => '/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => '/contact', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['path' => '/testimonials', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => '/car-importation', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['path' => '/inspection-guidance', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => '/shipping-clearing', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['path' => '/vehicle-sourcing-support', 'priority' => '0.8', 'changefreq' => 'monthly'],
];

$today = date('Y-m-d');
$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

foreach ($entries as $entry) {
    $loc = htmlspecialchars($siteUrl . $entry['path'], ENT_QUOTES, 'UTF-8');
    $changefreq = htmlspecialchars($entry['changefreq'], ENT_QUOTES, 'UTF-8');
    $priority = htmlspecialchars($entry['priority'], ENT_QUOTES, 'UTF-8');
    $xml .= "  <url>\n";
    $xml .= "    <loc>{$loc}</loc>\n";
    $xml .= "    <lastmod>{$today}</lastmod>\n";
    $xml .= "    <changefreq>{$changefreq}</changefreq>\n";
    $xml .= "    <priority>{$priority}</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= "</urlset>\n";
file_put_contents($baseDir . DIRECTORY_SEPARATOR . 'sitemap.xml', $xml);

$robots = "User-agent: *\n";
$robots .= "Allow: /\n";
$robots .= "Disallow: /views/\n";
$robots .= "Disallow: /views/partials/\n";
$robots .= 'Sitemap: ' . $siteUrl . "/sitemap.xml\n";
file_put_contents($baseDir . DIRECTORY_SEPARATOR . 'robots.txt', $robots);

echo "Static export complete for {$siteUrl}\n";

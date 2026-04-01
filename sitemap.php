<?php
header('Content-Type: application/xml; charset=UTF-8');

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$siteUrl = $scheme . '://' . $host;
$today = date('Y-m-d');

$pages = [
    ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['loc' => '/about.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/contact.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/testimonials.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/car-importation.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/inspection-guidance.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/shipping-clearing.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/vehicle-sourcing-support.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $page): ?>
        <url>
            <loc><?= htmlspecialchars($siteUrl . $page['loc'], ENT_QUOTES, 'UTF-8') ?></loc>
            <lastmod><?= htmlspecialchars($today, ENT_QUOTES, 'UTF-8') ?></lastmod>
            <changefreq><?= htmlspecialchars($page['changefreq'], ENT_QUOTES, 'UTF-8') ?></changefreq>
            <priority><?= htmlspecialchars($page['priority'], ENT_QUOTES, 'UTF-8') ?></priority>
        </url>
    <?php endforeach; ?>
</urlset>
<?php
$currentPath = strtok($_SERVER['REQUEST_URI'] ?? '/', '?') ?: '/';
$currentPath = $currentPath === '/index.php' ? '/' : $currentPath;
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$siteUrl = $scheme . '://' . $host;
$siteName = 'Xplore Car Imports';
$defaultTitle = 'Xplore Car Imports | Japanese Car Imports in Kenya';
$pageTitle = $metaTitle ?? (($heading ?? '') === 'Home' ? $defaultTitle : (($heading ?? '') !== '' ? $heading . ' | ' . $siteName : $defaultTitle));
$pageDescription = $metaDescription ?? 'Xplore Car Imports helps Kenyan buyers source, inspect, ship, clear, and collect quality Japanese vehicles with transparent guidance.';
$canonicalUrl = $metaCanonical ?? ($siteUrl . $currentPath);
$pageType = $metaType ?? (($currentPath === '/') ? 'website' : 'article');
$isHomePage = $currentPath === '/';
$pageContextClass = $isHomePage ? 'page-home' : 'page-inner';
$metaImage = $metaImage ?? '';
$robots = $metaRobots ?? 'index,follow';
$extraSchemas = $metaSchema ?? [];
$extraSchemas = isset($extraSchemas['@context']) ? [$extraSchemas] : $extraSchemas;
$organizationSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => $siteName,
    'url' => $siteUrl . '/',
    'email' => 'info@xplorecar.com',
    'telephone' => '+254757356989',
];
$websiteSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => $siteName,
    'url' => $siteUrl . '/',
    'description' => $pageDescription,
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="<?= htmlspecialchars($robots, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="theme-color" content="#0f766e">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">

    <meta property="og:site_name" content="<?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="<?= htmlspecialchars($pageType, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
    <?php if ($metaImage !== ''): ?>
        <meta property="og:image" content="<?= htmlspecialchars($metaImage, ENT_QUOTES, 'UTF-8') ?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="<?= htmlspecialchars($metaImage, ENT_QUOTES, 'UTF-8') ?>">
    <?php else: ?>
        <meta name="twitter:card" content="summary">
    <?php endif; ?>
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">

    <script type="application/ld+json">
        <?= json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
    </script>
    <script type="application/ld+json">
        <?= json_encode($websiteSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
    </script>
    <?php foreach ($extraSchemas as $schema): ?>
        <script type="application/ld+json">
            <?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
        </script>
    <?php endforeach; ?>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/site.css?v=20260403">
</head>

<body class="<?= htmlspecialchars($pageContextClass, ENT_QUOTES, 'UTF-8') ?> w-full min-h-screen flex flex-col antialiased transition-colors duration-300 text-blue-900 dark:text-blue-100">
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_10%_10%,rgba(14,165,233,0.14),transparent_34%),radial-gradient(circle_at_90%_0%,rgba(16,185,129,0.16),transparent_36%),radial-gradient(circle_at_50%_90%,rgba(255,255,255,0.8),transparent_28%),linear-gradient(165deg,#f8fffe_0%,#f5fbff_48%,#eef7f3_100%)] dark:bg-[radial-gradient(circle_at_10%_10%,rgba(14,165,233,0.18),transparent_34%),radial-gradient(circle_at_90%_0%,rgba(16,185,129,0.2),transparent_38%),linear-gradient(165deg,#020617_0%,#071a2d_52%,#082b2b_100%)]"></div>
        <div class="absolute inset-0 opacity-35 dark:opacity-30 bg-[linear-gradient(to_right,rgba(14,165,233,0.16)_1px,transparent_1px),linear-gradient(to_bottom,rgba(16,185,129,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,rgba(51,65,85,0.45)_1px,transparent_1px),linear-gradient(to_bottom,rgba(51,65,85,0.38)_1px,transparent_1px)] bg-[size:7rem_4.5rem]"></div>
        <div class="absolute -top-20 right-0 h-80 w-80 rounded-full bg-sky-400/12 dark:bg-sky-400/20 blur-3xl"></div>
        <div class="absolute -bottom-24 left-0 h-96 w-96 rounded-full bg-emerald-400/12 dark:bg-emerald-400/20 blur-3xl"></div>
    </div>
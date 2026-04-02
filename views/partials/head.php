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

    <style>
        :root {
            --ui-text: #000000;
            --ui-heading: #0A66E0;
            --ui-muted: #475569;
            --ui-link: #1877F2;
            --facebook-blue: #1877F2;
            --facebook-blue-dark: #0A66E0;
            --facebook-blue-darker: #075ACD;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --ui-text: #e2e8f0;
                --ui-heading: #f8fafc;
                --ui-muted: #94a3b8;
                --ui-link: #60a5fa;
            }
        }

        .dark {
            --ui-text: #e2e8f0;
            --ui-heading: #f8fafc;
            --ui-muted: #94a3b8;
            --ui-link: #60a5fa;
        }

        body {
            color: #000000;
            font-family: 'Tilt Neon', cursive;
            font-weight: 600;
            line-height: 1.65;
            text-rendering: optimizeLegibility;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        img,
        video,
        canvas,
        svg {
            max-width: 100%;
            height: auto;
        }

        iframe {
            max-width: 100%;
            display: block;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        li,
        a {
            overflow-wrap: anywhere;
        }

        body::selection {
            background: rgba(34, 197, 94, 0.2);
            color: #000000;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .ui-title,
        .ui-heading {
            color: #0ddc2c;
            font-family: 'Tilt Neon', cursive;
            font-weight: 600;
            letter-spacing: -0.02em;
        }

        /* Advanced fluid heading scale for strong responsiveness */
        h1 {
            font-size: clamp(1.85rem, 1.15rem + 3.2vw, 4rem);
            line-height: 1.05;
            letter-spacing: -0.04em;
        }

        h2 {
            font-size: clamp(1.5rem, 1.1rem + 2.1vw, 3rem);
            line-height: 1.1;
            letter-spacing: -0.03em;
        }

        h3 {
            font-size: clamp(1.25rem, 1rem + 1.4vw, 2.25rem);
            line-height: 1.14;
        }

        h4 {
            font-size: clamp(1.1rem, 0.95rem + 0.9vw, 1.75rem);
            line-height: 1.2;
        }

        h5 {
            font-size: clamp(1rem, 0.92rem + 0.55vw, 1.35rem);
            line-height: 1.25;
        }

        h6 {
            font-size: clamp(0.92rem, 0.88rem + 0.3vw, 1.1rem);
            line-height: 1.3;
        }

        p,
        li,
        label,
        input,
        textarea,
        select,
        .ui-body,
        .page-shell {
            color: #000000;
            font-weight: 600;
        }

        /* Force semibold typography across all utility font-weight classes */
        .font-thin,
        .font-extralight,
        .font-light,
        .font-normal,
        .font-medium,
        .font-semibold,
        .font-bold,
        .font-extrabold,
        .font-black {
            font-weight: 600 !important;
        }

        p {
            color: #000000 !important;
            line-height: 1.7;
        }

        p[class*="text-"] {
            color: #000000 !important;
        }

        /* Precision CTA type rhythm: fluid label sizing for text-sm/sm:text-base buttons */
        a.inline-flex[class*="text-sm"],
        button.inline-flex[class*="text-sm"],
        a.inline-flex[class*="sm:text-base"],
        button.inline-flex[class*="sm:text-base"] {
            font-size: clamp(0.84rem, 0.8rem + 0.28vw, 0.98rem);
            line-height: 1.2;
            letter-spacing: 0.01em;
        }

        body.page-home a.inline-flex[class*="sm:text-base"],
        body.page-home button.inline-flex[class*="sm:text-base"] {
            font-size: clamp(0.88rem, 0.8rem + 0.42vw, 1.05rem);
        }

        body.page-inner a.inline-flex[class*="sm:text-base"],
        body.page-inner button.inline-flex[class*="sm:text-base"] {
            font-size: clamp(0.85rem, 0.79rem + 0.32vw, 1rem);
        }

        .ui-muted,
        .text-muted {
            color: var(--ui-muted) !important;
        }

        a.ui-link,
        .ui-link {
            color: var(--ui-link);
        }

        .hero-kicker,
        .section-kicker {
            letter-spacing: 0.3em !important;
            text-transform: uppercase !important;
            font-size: clamp(0.68rem, 0.62rem + 0.35vw, 0.86rem) !important;
            font-weight: 600 !important;
            color: #032cf8 !important;
            background: linear-gradient(to right, rgba(3, 246, 92, 0.2), rgba(8, 228, 89, 0.2)) !important;
            padding: 0.5rem 1rem !important;
            border-radius: 9999px !important;
            border: 1px solid rgba(74, 222, 128, 0.5) !important;
            backdrop-filter: blur(20px);
            transition: all 0.25s ease;
        }

        .hero-kicker:hover,
        .section-kicker:hover {
            background: linear-gradient(to right, rgba(74, 222, 128, 0.3), rgba(134, 239, 172, 0.3)) !important;
            border-color: rgba(134, 239, 172, 0.7) !important;
        }

        .hero-title {
            font-size: clamp(2rem, 1.2rem + 4.2vw, 5.1rem);
            text-wrap: balance;
            line-height: 1.02;
            letter-spacing: -0.04em;
        }

        .section-title {
            font-size: clamp(1.5rem, 1rem + 2.6vw, 3.45rem);
            text-wrap: balance;
            line-height: 1.08;
            letter-spacing: -0.03em;
        }

        /* Context-aware micro-tuning by page type */
        body.page-home .hero-title {
            font-size: clamp(2.15rem, 1.2rem + 4.8vw, 5.6rem);
            line-height: 1.01;
            letter-spacing: -0.045em;
        }

        body.page-inner .hero-title {
            font-size: clamp(1.85rem, 1.1rem + 3.6vw, 4.25rem);
            line-height: 1.05;
            letter-spacing: -0.035em;
        }

        body.page-home .section-title {
            font-size: clamp(1.6rem, 1.03rem + 2.95vw, 3.7rem);
        }

        body.page-inner .section-title {
            font-size: clamp(1.45rem, 0.98rem + 2.45vw, 3.2rem);
        }

        /* Card heading rhythm across service, stats, and testimonial cards */
        .page-surface h3,
        .page-surface-strong h3,
        article h3 {
            font-size: clamp(1.02rem, 0.93rem + 0.72vw, 1.42rem);
            line-height: 1.2;
            letter-spacing: -0.015em;
        }

        .page-surface .section-kicker,
        .page-surface-strong .section-kicker {
            font-size: clamp(0.66rem, 0.6rem + 0.32vw, 0.82rem) !important;
        }

        .page-surface {
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid rgba(34, 197, 94, 0.2);
            box-shadow: 0 18px 50px rgba(15, 23, 42, 0.08);
            backdrop-filter: blur(14px);
        }

        .page-surface-strong {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.92), rgba(240, 249, 255, 0.88));
            border: 1px solid rgba(34, 197, 94, 0.26);
            box-shadow: 0 22px 60px rgba(15, 23, 42, 0.1);
            backdrop-filter: blur(16px);
        }

        .headline-accent {
            background: linear-gradient(90deg, #16a34a 0%, #1877F2 55%, #22c55e 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Facebook Blue Color Override */
        .text-blue-50 {
            color: #F0F4FF !important;
        }

        .text-blue-100 {
            color: #E7EFFF !important;
        }

        .text-blue-200 {
            color: #CDE0FF !important;
        }

        .text-blue-300 {
            color: #A8C8FF !important;
        }

        .text-blue-400 {
            color: #7BA7FF !important;
        }

        .text-blue-500 {
            color: #5A8FFF !important;
        }

        .text-blue-600 {
            color: #1877F2 !important;
        }

        .text-blue-700 {
            color: #0A66E0 !important;
            font-weight: 700 !important;
        }

        .text-blue-800 {
            color: #075ACD !important;
        }

        .text-blue-900 {
            color: #034DB8 !important;
        }

        .text-blue-950 {
            color: #023999 !important;
        }

        /* Override neutral text colors to black semibold */
        .text-slate-600,
        .text-slate-700,
        .text-slate-800,
        .text-slate-900,
        .text-gray-600,
        .text-gray-700,
        .text-gray-800,
        .text-gray-900,
        .text-stone-600,
        .text-stone-700,
        .text-stone-800,
        .text-stone-900 {
            color: #000000 !important;
            font-weight: 600 !important;
        }

        .bg-blue-50 {
            background-color: #F0F4FF !important;
        }

        .bg-blue-100 {
            background-color: #E7EFFF !important;
        }

        .bg-blue-200 {
            background-color: #CDE0FF !important;
        }

        .bg-blue-300 {
            background-color: #A8C8FF !important;
        }

        .bg-blue-400 {
            background-color: #7BA7FF !important;
        }

        .bg-blue-500 {
            background-color: #5A8FFF !important;
        }

        .bg-blue-600 {
            background-color: #1877F2 !important;
        }

        .bg-blue-700 {
            background-color: #0A66E0 !important;
        }

        .bg-blue-800 {
            background-color: #075ACD !important;
        }

        .bg-blue-900 {
            background-color: #034DB8 !important;
        }

        .bg-blue-950 {
            background-color: #023999 !important;
        }

        .border-blue-50 {
            border-color: #F0F4FF !important;
        }

        .border-blue-100 {
            border-color: #E7EFFF !important;
        }

        .border-blue-200 {
            border-color: #CDE0FF !important;
        }

        .border-blue-300 {
            border-color: #A8C8FF !important;
        }

        .border-blue-400 {
            border-color: #7BA7FF !important;
        }

        .border-blue-500 {
            border-color: #5A8FFF !important;
        }

        .border-blue-600 {
            border-color: #1877F2 !important;
        }

        .border-blue-700 {
            border-color: #0A66E0 !important;
        }

        .border-blue-800 {
            border-color: #075ACD !important;
        }

        .border-blue-900 {
            border-color: #034DB8 !important;
        }

        .border-blue-950 {
            border-color: #023999 !important;
        }

        /* Shadow colors with Facebook blue */
        .shadow-blue-500\/20 {
            --tw-shadow-color: rgba(90, 143, 255, 0.2) !important;
            box-shadow: var(--tw-shadow) !important;
        }

        .shadow-blue-900\/80 {
            --tw-shadow-color: rgba(3, 77, 184, 0.8) !important;
            box-shadow: var(--tw-shadow) !important;
        }

        /* Opacity utilities for blue */
        .bg-blue-50\/5 {
            background-color: rgba(240, 244, 255, 0.05) !important;
        }

        .bg-blue-50\/10 {
            background-color: rgba(240, 244, 255, 0.1) !important;
        }

        .bg-blue-100\/10 {
            background-color: rgba(231, 239, 255, 0.1) !important;
        }

        .bg-blue-200\/50 {
            background-color: rgba(205, 224, 255, 0.5) !important;
        }

        .bg-blue-300\/20 {
            background-color: rgba(168, 200, 255, 0.2) !important;
        }

        .bg-blue-400\/15 {
            background-color: rgba(123, 167, 255, 0.15) !important;
        }

        .bg-blue-500\/20 {
            background-color: rgba(90, 143, 255, 0.2) !important;
        }

        .bg-blue-600\/10 {
            background-color: rgba(24, 119, 242, 0.1) !important;
        }

        .bg-blue-900\/80 {
            background-color: rgba(3, 77, 184, 0.8) !important;
        }

        .bg-blue-900\/85 {
            background-color: rgba(3, 77, 184, 0.85) !important;
        }

        .bg-blue-950\/80 {
            background-color: rgba(2, 57, 153, 0.8) !important;
        }

        /* Border opacity */
        .border-blue-600\/20 {
            border-color: rgba(24, 119, 242, 0.2) !important;
        }

        .border-blue-600\/30 {
            border-color: rgba(24, 119, 242, 0.3) !important;
        }

        .border-blue-300\/20 {
            border-color: rgba(168, 200, 255, 0.2) !important;
        }

        .border-blue-300\/60 {
            border-color: rgba(168, 200, 255, 0.6) !important;
        }

        .border-blue-400\/50 {
            border-color: rgba(123, 167, 255, 0.5) !important;
        }

        /* Hover state overrides */
        .hover\:bg-blue-50:hover {
            background-color: #F0F4FF !important;
        }

        .hover\:bg-blue-600\/10:hover {
            background-color: rgba(24, 119, 242, 0.1) !important;
        }

        .hover\:text-blue-600:hover {
            color: #1877F2 !important;
        }

        .hover\:text-blue-700:hover {
            color: #0A66E0 !important;
        }

        .hover\:border-blue-600:hover {
            border-color: #1877F2 !important;
        }

        input::placeholder,
        textarea::placeholder {
            color: color-mix(in srgb, var(--ui-muted) 80%, transparent);
        }

        ion-icon {
            font-size: 1.35rem;
            vertical-align: middle;
        }

        .icon-lg {
            font-size: 1.75rem;
        }

        .icon-xl {
            font-size: 2.1rem;
        }

        .icon-2xl {
            font-size: 2.45rem;
        }

        @media (min-width: 1024px) {
            ion-icon {
                font-size: 1.55rem;
            }

            .icon-lg {
                font-size: 2rem;
            }

            .icon-xl {
                font-size: 2.5rem;
            }

            .icon-2xl {
                font-size: 2.8rem;
            }
        }
    </style>
</head>

<body class="<?= htmlspecialchars($pageContextClass, ENT_QUOTES, 'UTF-8') ?> w-full min-h-screen flex flex-col antialiased transition-colors duration-300 text-blue-900 dark:text-blue-100">
    <!-- Facebook Blue CSS Variable Gradient Stops -->
    <style>
        :root {
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(24, 119, 242, 0)) !important;
        }

        /* Gradient FROM stops */
        .from-blue-50 {
            --tw-gradient-from: #F0F4FF !important;
            --tw-gradient-to: rgba(240, 244, 255, 0) !important;
        }

        .from-blue-100 {
            --tw-gradient-from: #E7EFFF !important;
            --tw-gradient-to: rgba(231, 239, 255, 0) !important;
        }

        .from-blue-200 {
            --tw-gradient-from: #CDE0FF !important;
            --tw-gradient-to: rgba(205, 224, 255, 0) !important;
        }

        .from-blue-300 {
            --tw-gradient-from: #A8C8FF !important;
            --tw-gradient-to: rgba(168, 200, 255, 0) !important;
        }

        .from-blue-400 {
            --tw-gradient-from: #7BA7FF !important;
            --tw-gradient-to: rgba(123, 167, 255, 0) !important;
        }

        .from-blue-500 {
            --tw-gradient-from: #5A8FFF !important;
            --tw-gradient-to: rgba(90, 143, 255, 0) !important;
        }

        .from-blue-600 {
            --tw-gradient-from: #1877F2 !important;
            --tw-gradient-to: rgba(24, 119, 242, 0) !important;
        }

        .from-blue-700 {
            --tw-gradient-from: #0A66E0 !important;
            --tw-gradient-to: rgba(10, 102, 224, 0) !important;
        }

        .from-blue-800 {
            --tw-gradient-from: #075ACD !important;
            --tw-gradient-to: rgba(7, 90, 205, 0) !important;
        }

        .from-blue-900 {
            --tw-gradient-from: #034DB8 !important;
            --tw-gradient-to: rgba(3, 77, 184, 0) !important;
        }

        .from-blue-950 {
            --tw-gradient-from: #023999 !important;
            --tw-gradient-to: rgba(2, 57, 153, 0) !important;
        }

        /* Gradient VIA stops */
        .via-blue-50 {
            --tw-gradient-via: #F0F4FF !important;
        }

        .via-blue-100 {
            --tw-gradient-via: #E7EFFF !important;
        }

        .via-blue-200 {
            --tw-gradient-via: #CDE0FF !important;
        }

        .via-blue-300 {
            --tw-gradient-via: #A8C8FF !important;
        }

        .via-blue-400 {
            --tw-gradient-via: #7BA7FF !important;
        }

        .via-blue-500 {
            --tw-gradient-via: #5A8FFF !important;
        }

        .via-blue-600 {
            --tw-gradient-via: #1877F2 !important;
        }

        .via-blue-700 {
            --tw-gradient-via: #0A66E0 !important;
        }

        .via-blue-800 {
            --tw-gradient-via: #075ACD !important;
        }

        .via-blue-900 {
            --tw-gradient-via: #034DB8 !important;
        }

        .via-blue-950 {
            --tw-gradient-via: #023999 !important;
        }

        /* Gradient TO stops */
        .to-blue-50 {
            --tw-gradient-to: #F0F4FF !important;
        }

        .to-blue-100 {
            --tw-gradient-to: #E7EFFF !important;
        }

        .to-blue-200 {
            --tw-gradient-to: #CDE0FF !important;
        }

        .to-blue-300 {
            --tw-gradient-to: #A8C8FF !important;
        }

        .to-blue-400 {
            --tw-gradient-to: #7BA7FF !important;
        }

        .to-blue-500 {
            --tw-gradient-to: #5A8FFF !important;
        }

        .to-blue-600 {
            --tw-gradient-to: #1877F2 !important;
        }

        .to-blue-700 {
            --tw-gradient-to: #0A66E0 !important;
        }

        .to-blue-800 {
            --tw-gradient-to: #075ACD !important;
        }

        .to-blue-900 {
            --tw-gradient-to: #034DB8 !important;
        }

        .to-blue-950 {
            --tw-gradient-to: #023999 !important;
        }
    </style>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_10%_10%,rgba(14,165,233,0.14),transparent_34%),radial-gradient(circle_at_90%_0%,rgba(16,185,129,0.16),transparent_36%),radial-gradient(circle_at_50%_90%,rgba(255,255,255,0.8),transparent_28%),linear-gradient(165deg,#f8fffe_0%,#f5fbff_48%,#eef7f3_100%)] dark:bg-[radial-gradient(circle_at_10%_10%,rgba(14,165,233,0.18),transparent_34%),radial-gradient(circle_at_90%_0%,rgba(16,185,129,0.2),transparent_38%),linear-gradient(165deg,#020617_0%,#071a2d_52%,#082b2b_100%)]"></div>
        <div class="absolute inset-0 opacity-35 dark:opacity-30 bg-[linear-gradient(to_right,rgba(14,165,233,0.16)_1px,transparent_1px),linear-gradient(to_bottom,rgba(16,185,129,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,rgba(51,65,85,0.45)_1px,transparent_1px),linear-gradient(to_bottom,rgba(51,65,85,0.38)_1px,transparent_1px)] bg-[size:7rem_4.5rem]"></div>
        <div class="absolute -top-20 right-0 h-80 w-80 rounded-full bg-sky-400/12 dark:bg-sky-400/20 blur-3xl"></div>
        <div class="absolute -bottom-24 left-0 h-96 w-96 rounded-full bg-emerald-400/12 dark:bg-emerald-400/20 blur-3xl"></div>
    </div>
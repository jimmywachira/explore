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
    <meta name="theme-color" content="#10b981">
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
            --ui-text: #0f172a;
            --ui-heading: #020617;
            --ui-muted: #334155;
            --ui-link: #0f766e;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --ui-text: #e2e8f0;
                --ui-heading: #f8fafc;
                --ui-muted: #94a3b8;
                --ui-link: #34d399;
            }
        }

        .dark {
            --ui-text: #e2e8f0;
            --ui-heading: #f8fafc;
            --ui-muted: #94a3b8;
            --ui-link: #34d399;
        }

        body {
            color: var(--ui-text);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .ui-title,
        .ui-heading {
            color: var(--ui-heading);
        }

        p,
        li,
        label,
        input,
        textarea,
        select,
        .ui-body,
        .page-shell {
            color: var(--ui-text);
        }

        .ui-muted,
        .text-muted {
            color: var(--ui-muted) !important;
        }

        a.ui-link,
        .ui-link {
            color: var(--ui-link);
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
        }
    </style>
</head>

<body class="w-full min-h-screen font-semibold flex flex-col antialiased transition-colors duration-300 text-slate-900 dark:text-slate-100" style="font-family: 'Tilt Neon', cursive;">
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_10%_10%,rgba(16,185,129,0.12),transparent_35%),radial-gradient(circle_at_90%_0%,rgba(14,165,233,0.12),transparent_38%),linear-gradient(165deg,#f8fffc_0%,#f5f8ff_52%,#eef5f2_100%)] dark:bg-[radial-gradient(circle_at_10%_10%,rgba(16,185,129,0.16),transparent_36%),radial-gradient(circle_at_90%_0%,rgba(14,165,233,0.15),transparent_40%),linear-gradient(165deg,#020617_0%,#0b1d39_50%,#0a2530_100%)]"></div>
        <div class="absolute inset-0 opacity-35 dark:opacity-30 bg-[linear-gradient(to_right,rgba(148,163,184,0.18)_1px,transparent_1px),linear-gradient(to_bottom,rgba(148,163,184,0.14)_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,rgba(51,65,85,0.45)_1px,transparent_1px),linear-gradient(to_bottom,rgba(51,65,85,0.38)_1px,transparent_1px)] bg-[size:7rem_4.5rem]"></div>
        <div class="absolute -top-20 right-0 h-80 w-80 rounded-full bg-emerald-400/10 dark:bg-emerald-400/20 blur-3xl"></div>
        <div class="absolute -bottom-24 left-0 h-96 w-96 rounded-full bg-cyan-400/10 dark:bg-cyan-400/20 blur-3xl"></div>
    </div>
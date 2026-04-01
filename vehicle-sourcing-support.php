<?php
$heading = 'Vehicle Sourcing Support';
$metaTitle = 'Vehicle Sourcing Support | Xplore Car Imports Kenya';
$metaDescription = 'Find the right Japanese vehicle for your budget and use-case. Xplore Car Imports provides sourcing support with practical, risk-aware recommendations.';
$metaSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Vehicle Sourcing Support',
    'serviceType' => 'Japanese Vehicle Sourcing',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Xplore Car Imports',
        'url' => 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/',
    ],
    'areaServed' => 'Kenya',
    'description' => $metaDescription,
];

require_once 'views/vehicle-sourcing-support.view.php';

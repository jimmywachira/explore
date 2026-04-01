<?php
$heading = 'Car Importation';
$metaTitle = 'Car Importation Services in Kenya | Xplore Car Imports';
$metaDescription = 'Import a car from Japan to Kenya with complete guidance from Xplore Car Imports. Get sourcing, cost estimates, shipping, clearing, and handover support.';
$metaSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Car Importation Services in Kenya',
    'serviceType' => 'Japanese Car Importation',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Xplore Car Imports',
        'url' => 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/',
    ],
    'areaServed' => 'Kenya',
    'description' => $metaDescription,
];

require_once 'views/car-importation.view.php';

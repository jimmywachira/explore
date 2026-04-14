<?php
$heading = 'Tazi Business Advisory';
$metaTitle = 'Tazi Business Advisory | Taxi Business Masterclass in Kenya';
$metaDescription = 'Launch or scale your online taxi business in Kenya with Tazi Business Advisory. Learn platform setup, profitability, driver management, compliance, and vehicle maintenance.';
$metaSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Tazi Business Advisory',
    'serviceType' => 'Taxi Business Advisory and Training',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Xplore Car Imports',
        'url' => 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/',
    ],
    'areaServed' => 'Kenya',
    'description' => $metaDescription,
];

require_once 'views/tazi-business-advisory.view.php';

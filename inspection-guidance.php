<?php
$heading = 'Inspection Guidance';
$metaTitle = 'Inspection Guidance for Imported Cars | Xplore Car Imports';
$metaDescription = 'Review auction sheets, mileage, condition notes, and risk flags before you buy. Xplore Car Imports helps you inspect units with confidence.';
$metaSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Inspection Guidance for Imported Cars',
    'serviceType' => 'Vehicle Inspection Guidance',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Xplore Car Imports',
        'url' => 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/',
    ],
    'areaServed' => 'Kenya',
    'description' => $metaDescription,
];

require_once 'views/inspection-guidance.view.php';

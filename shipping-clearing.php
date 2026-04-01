<?php
$heading = 'Shipping and Clearing';
$metaTitle = 'Shipping and Clearing Support | Xplore Car Imports Kenya';
$metaDescription = 'Track shipment milestones and get customs clearing support for your imported vehicle with practical guidance from Xplore Car Imports.';
$metaSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Shipping and Clearing Support',
    'serviceType' => 'Vehicle Shipping and Customs Clearing',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Xplore Car Imports',
        'url' => 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . '/',
    ],
    'areaServed' => 'Kenya',
    'description' => $metaDescription,
];

require_once 'views/shipping-clearing.view.php';

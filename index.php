<?php
$heading = 'Home';
$metaTitle = 'Xplore Car Imports | Japanese Car Imports in Kenya';
$metaDescription = 'Import Japanese cars into Kenya with Xplore Car Imports. Get sourcing, inspection, shipping, clearing, and delivery support with transparent guidance.';

require_once __DIR__ . '/controllers/cars-data.php';
$featuredCars = getFeaturedCars();

require_once 'views/index.view.php';

<?php

declare(strict_types=1);

require_once __DIR__ . '/controllers/cars-data.php';

$cars = getFeaturedCars();
$carKeys = array_keys($cars);
$fallbackCarId = $carKeys[0] ?? '';
$requestedCarId = isset($_GET['car']) ? (string) $_GET['car'] : $fallbackCarId;

if (!isset($cars[$requestedCarId])) {
    $requestedCarId = $fallbackCarId;
}

$car = $cars[$requestedCarId] ?? null;

if ($car === null) {
    http_response_code(404);
    echo 'No car data available.';
    exit;
}

$heading = 'Car Details';
$metaTitle = 'Featured Vehicle Details | Xplore Car Imports';
$metaDescription = 'View featured vehicle import details, pricing guidance, and consultation options with Xplore Car Imports.';
$metaImage = $car['image'];

$similarCars = array_values(array_filter($cars, static function (array $candidate) use ($requestedCarId): bool {
    return $candidate['id'] !== $requestedCarId;
}));

$similarCars = array_slice($similarCars, 0, 3);

require_once __DIR__ . '/views/car-details.view.php';

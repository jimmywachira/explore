<?php
$heading = 'Contact Us';
$metaTitle = 'Contact Xplore Car Imports | Get Import Support';
$metaDescription = 'Contact Xplore Car Imports for vehicle sourcing, inspection guidance, shipping updates, and customs support. Call, WhatsApp, or email the team.';

if (session_status() !== PHP_SESSION_ACTIVE && !headers_sent()) {
    $isHttpsRequest = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => $isHttpsRequest,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

require_once 'views/contact.view.php';

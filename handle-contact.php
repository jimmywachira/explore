<?php
// handle-contact.php - Form submission handler for contact form

function wantsJsonResponse(): bool
{
    $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
    $xhr = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '';
    return stripos($accept, 'application/json') !== false || strtolower($xhr) === 'xmlhttprequest';
}

function sendResponse(bool $success, string $message): void
{
    if (wantsJsonResponse()) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => $success,
            'message' => $message,
        ]);
        exit;
    }

    $status = $success ? 'success' : 'error';
    $query = http_build_query([
        'status' => $status,
        'message' => $message,
    ]);
    header('Location: /contact.php?' . $query);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Invalid request method.');
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$subject = trim((string) ($_POST['subject'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $phone === '' || $subject === '' || $message === '') {
    sendResponse(false, 'Please fill in all fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendResponse(false, 'Please enter a valid email address.');
}

// Avoid header injection
$email = str_replace(["\r", "\n"], '', $email);
$name = str_replace(["\r", "\n"], ' ', $name);
$subject = str_replace(["\r", "\n"], ' ', $subject);

$to = 'info@xplorecar.com';
$emailSubject = "New Contact Form Submission: {$subject}";
$emailBody = "Name: {$name}\n";
$emailBody .= "Email: {$email}\n";
$emailBody .= "Phone: {$phone}\n";
$emailBody .= "Subject: {$subject}\n\n";
$emailBody .= "Message:\n{$message}\n";

// Use a trusted sender and set reply-to to user email
$headers = "From: Xplore Car Imports <info@xplorecar.com>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $emailSubject, $emailBody, $headers)) {
    sendResponse(true, 'Thank you. Your message has been sent to info@xplorecar.com. We will respond during business hours.');
}

sendResponse(false, 'Sorry, there was an error sending your message. Please try again or contact us directly at info@xplorecar.com.');

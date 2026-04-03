<?php
// handle-contact.php - Form submission handler for contact form

function wantsJsonResponse(): bool
{
    $accept = $_SERVER['HTTP_ACCEPT'] ?? '';
    $xhr = $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '';
    return stripos($accept, 'application/json') !== false || strtolower($xhr) === 'xmlhttprequest';
}

function getClientIp(): string
{
    $forwarded = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
    if ($forwarded !== '') {
        $parts = explode(',', $forwarded);
        $ip = trim($parts[0]);
        if ($ip !== '') {
            return $ip;
        }
    }

    $remoteAddr = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    return trim($remoteAddr) !== '' ? trim($remoteAddr) : 'unknown';
}

function isRateLimited(string $ip, int $maxRequests, int $windowSeconds): bool
{
    $storePath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'xplore-contact-rate-limit.json';
    $now = time();
    $windowStart = $now - $windowSeconds;

    $fp = @fopen($storePath, 'c+');
    if ($fp === false) {
        // Fail open if filesystem storage is unavailable.
        return false;
    }

    if (!flock($fp, LOCK_EX)) {
        fclose($fp);
        return false;
    }

    $raw = stream_get_contents($fp);
    $data = [];
    if (is_string($raw) && trim($raw) !== '') {
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $data = $decoded;
        }
    }

    foreach ($data as $key => $timestamps) {
        if (!is_array($timestamps)) {
            unset($data[$key]);
            continue;
        }
        $filtered = array_values(array_filter($timestamps, static function ($timestamp) use ($windowStart): bool {
            return is_int($timestamp) && $timestamp >= $windowStart;
        }));
        if ($filtered === []) {
            unset($data[$key]);
            continue;
        }
        $data[$key] = $filtered;
    }

    $timestamps = $data[$ip] ?? [];
    if (count($timestamps) >= $maxRequests) {
        flock($fp, LOCK_UN);
        fclose($fp);
        return true;
    }

    $timestamps[] = $now;
    $data[$ip] = $timestamps;

    rewind($fp);
    ftruncate($fp, 0);
    fwrite($fp, json_encode($data, JSON_UNESCAPED_SLASHES));
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);

    return false;
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

$honeypot = trim((string) ($_POST['website'] ?? ''));
if ($honeypot !== '') {
    // Silently accept bot submissions to reduce probing feedback.
    sendResponse(true, 'Thank you. Your message has been sent to info@xplorecar.com. We will respond during business hours.');
}

$clientIp = getClientIp();
if (isRateLimited($clientIp, 4, 600)) {
    sendResponse(false, 'Too many requests. Please wait a few minutes before sending another message.');
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

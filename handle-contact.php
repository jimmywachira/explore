<?php
// handle-contact.php - Form submission handler for contact form

header('Content-Type: application/json');

// Handle form submission
$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        $response['message'] = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Please enter a valid email address.';
    } else {
        // Prepare email
        $to = 'info@xplorecar.com';
        $emailSubject = "New Contact Form Submission: {$subject}";
        $emailBody = "Name: {$name}\n";
        $emailBody .= "Email: {$email}\n";
        $emailBody .= "Phone: {$phone}\n";
        $emailBody .= "Subject: {$subject}\n";
        $emailBody .= "Message:\n{$message}\n";

        $headers = "From: {$email}\n";
        $headers .= "Reply-To: {$email}\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\n";

        // Send email
        if (mail($to, $emailSubject, $emailBody, $headers)) {
            $response['success'] = true;
            $response['message'] = 'Thank you! Your message has been sent successfully. We will respond within 24 business hours.';
        } else {
            $response['message'] = 'Sorry, there was an error sending your message. Please try again or contact us directly.';
        }
    }

    echo json_encode($response);
    exit;
}

// If not POST, return error
$response['message'] = 'Invalid request method.';
echo json_encode($response);
exit;

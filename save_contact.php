<?php
require_once __DIR__ . '/api/resend.php';

enable_cors();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Read raw JSON body if sent via fetch
    $rawInput = file_get_contents('php://input');
    $jsonInput = json_decode($rawInput, true);

    $fullname = $_POST['fullname'] ?? ($jsonInput['fullname'] ?? ($jsonInput['name'] ?? ''));
    $email = $_POST['email'] ?? ($jsonInput['email'] ?? '');
    $contactno = $_POST['contactno'] ?? ($jsonInput['contactno'] ?? ($jsonInput['phone'] ?? ''));
    $subject = $_POST['subject'] ?? ($jsonInput['subject'] ?? 'New Contact Us Message');
    $message = $_POST['message'] ?? ($jsonInput['message'] ?? '');

    if (empty($fullname) || empty($email) || empty($message)) {
        send_api_response(false, 'Please fill in all required fields (Name, Email, Message).');
    }

    $htmlBody = "
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> " . htmlspecialchars($fullname) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Contact No:</strong> " . htmlspecialchars($contactno) . "</p>
    <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
    <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    $result = send_resend_email("Contact Form: " . $subject, $htmlBody);

    if ($result['success']) {
        send_api_response(true, 'Thank you! Your message has been sent successfully.');
    } else {
        $errorMsg = "Error sending message: HTTP " . $result['http_code'];
        send_api_response(false, $errorMsg);
    }
} else {
    send_api_response(false, 'Invalid request method. Only POST is supported.');
}


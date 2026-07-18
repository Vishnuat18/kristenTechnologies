<?php
require_once __DIR__ . '/api/resend.php';

enable_cors();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rawInput = file_get_contents('php://input');
    $jsonInput = json_decode($rawInput, true);

    $fullname = $_POST['fullname'] ?? ($jsonInput['fullname'] ?? ($jsonInput['name'] ?? ''));
    $phone = $_POST['phone'] ?? ($jsonInput['phone'] ?? '');
    $email = $_POST['email'] ?? ($jsonInput['email'] ?? '');
    $description = $_POST['description'] ?? ($jsonInput['description'] ?? '');

    if (empty($fullname) || empty($phone) || empty($email)) {
        send_api_response(false, 'Please fill in all required fields (Name, Phone, Email).');
    }

    $htmlBody = "
    <h2>New Custom PC Quote Request</h2>
    <p><strong>Name:</strong> " . htmlspecialchars($fullname) . "</p>
    <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Description:</strong><br>" . nl2br(htmlspecialchars($description)) . "</p>
    ";

    $result = send_resend_email("New Custom PC Quote Request", $htmlBody);

    if ($result['success']) {
        send_api_response(true, 'Thank you! We will get back to you with a quote shortly.');
    } else {
        send_api_response(false, 'Error submitting request. Please try again later.');
    }
} else {
    send_api_response(false, 'Invalid request method. Only POST is supported.');
}


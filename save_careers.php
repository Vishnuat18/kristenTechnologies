<?php
require_once __DIR__ . '/api/resend.php';

enable_cors();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rawInput = file_get_contents('php://input');
    $jsonInput = json_decode($rawInput, true);

    $name = $_POST['name'] ?? ($jsonInput['name'] ?? ($jsonInput['fullname'] ?? ''));
    $phone = $_POST['phone'] ?? ($jsonInput['phone'] ?? '');
    $email = $_POST['email'] ?? ($jsonInput['email'] ?? '');

    if (empty($name) || empty($phone) || empty($email)) {
        send_api_response(false, 'Please fill in required fields (Name, Phone, Email).');
    }

    $htmlBody = "
    <h2>New General Career Inquiry</h2>
    <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
    <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    ";

    $attachments = [];
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $fileContent = file_get_contents($_FILES['resume']['tmp_name']);
        $base64Content = base64_encode($fileContent);
        
        $attachments[] = [
            'filename' => $_FILES['resume']['name'],
            'content' => $base64Content
        ];
    }

    $result = send_resend_email("New Career Inquiry: " . $name, $htmlBody, $attachments);

    if ($result['success']) {
        send_api_response(true, 'Thank you! Your resume has been submitted successfully.');
    } else {
        send_api_response(false, 'Error submitting your application. Please try again later.');
    }
} else {
    send_api_response(false, 'Invalid request method. Only POST is supported.');
}


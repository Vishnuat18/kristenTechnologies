<?php
require_once __DIR__ . '/api/resend.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $description = $_POST['description'] ?? '';

    $htmlBody = "
    <h2>New Custom PC Quote Request</h2>
    <p><strong>Name:</strong> " . htmlspecialchars($fullname) . "</p>
    <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Description:</strong><br>" . nl2br(htmlspecialchars($description)) . "</p>
    ";

    $result = send_resend_email("New Custom PC Quote Request", $htmlBody);

    if ($result['success']) {
        echo "<script>alert('Thank you! We will get back to you with a quote shortly.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error submitting request. Please try again later.'); window.history.back();</script>";
    }
} else {
    header("Location: /");
}

<?php
require_once __DIR__ . '/api/resend.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

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
        echo "<script>alert('Thank you! Your resume has been submitted successfully.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error submitting your application. Please try again later.'); window.history.back();</script>";
    }
} else {
    header("Location: /");
}

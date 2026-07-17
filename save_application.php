<?php
require_once __DIR__ . '/api/resend.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobTitle = $_POST['job_title'] ?? 'General Application';
    $fullname = $_POST['fullname'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $portfolio = $_POST['portfolio'] ?? '';
    $cover_letter = $_POST['cover_letter'] ?? '';

    $htmlBody = "
    <h2>New Job Application: " . htmlspecialchars($jobTitle) . "</h2>
    <p><strong>Name:</strong> " . htmlspecialchars($fullname) . "</p>
    <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Portfolio:</strong> " . htmlspecialchars($portfolio) . "</p>
    <p><strong>Cover Letter:</strong><br>" . nl2br(htmlspecialchars($cover_letter)) . "</p>
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

    $result = send_resend_email("New Job Application: " . $jobTitle, $htmlBody, $attachments);

    if ($result['success']) {
        echo "<script>alert('Thank you! Your application for " . addslashes($jobTitle) . " has been submitted successfully.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error submitting your application. Please try again later.'); window.history.back();</script>";
    }
} else {
    header("Location: /");
}

<?php
require_once __DIR__ . '/api/resend.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $contactno = $_POST['contactno'] ?? '';
    $subject = $_POST['subject'] ?? 'New Contact Us Message';
    $message = $_POST['message'] ?? '';

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
        echo "<script>alert('Thank you! Your message has been sent successfully.'); window.history.back();</script>";
    } else {
        $errorMsg = addslashes("Error: HTTP " . $result['http_code'] . " - " . $result['response']);
        echo "<script>alert('Error sending message. Details: " . $errorMsg . "'); window.history.back();</script>";
    }
} else {
    header("Location: /");
}

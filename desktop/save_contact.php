<?php
// OPTIONAL: enable errors while testing (remove or comment in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// --- 1. Include Database Config ---
require_once '../db.php';

// --- 2. Get form data safely ---
// Accept both `phone` and `contactno` from form
$fullname = trim($_POST['fullname'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? ($_POST['contactno'] ?? ''));
$subject  = trim($_POST['subject'] ?? '');
$message  = trim($_POST['message'] ?? '');

// Basic validation
if ($fullname === '' || $email === '' || $message === '') {
    die("Please fill the required fields: Full name, Email, Message.");
}

// --- 3. Insert into DB using PDO prepared statement ---
try {
    $stmt = $pdo->prepare("
        INSERT INTO contact_messages (fullname, email, phone, subject, message)
        VALUES (:fullname, :email, :phone, :subject, :message)
    ");
    
    $stmt->execute([
        ':fullname' => $fullname,
        ':email'    => $email,
        ':phone'    => $phone,
        ':subject'  => $subject,
        ':message'  => $message
    ]);
} catch (PDOException $e) {
    die("Error saving your message: " . $e->getMessage());
}

// -------------------------------------------------------------------
// 5. ADMIN EMAIL (you receive this)
// -------------------------------------------------------------------
$admin_to       = "mail@kristenbytes.com";
$admin_subject  = "New Contact Form Submission";
$submitted_time = date("d-m-Y h:i A");

$admin_html = "
<html>
<head>
  <meta charset='UTF-8'>
  <title>New Contact Form Submission</title>
</head>
<body style='font-family: Arial, sans-serif; background:#f5f5f5; padding:20px;'>
  <div style=\"max-width:600px;margin:auto;background:#ffffff;border-radius:8px;padding:20px;
              box-shadow:0 2px 8px rgba(0,0,0,0.1);\">
    <h2 style='margin-top:0;color:#333;'>New Contact Enquiry</h2>
    <p><strong>Name:</strong> {$fullname}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Contact No:</strong> {$phone}</p>
    <p><strong>Subject:</strong> {$subject}</p>
    <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
    <hr>
    <p style='font-size:12px;color:#777;'>Submitted On: {$submitted_time}</p>
  </div>
</body>
</html>
";

$admin_headers  = "MIME-Version: 1.0\r\n";
$admin_headers .= "Content-type: text/html; charset=UTF-8\r\n";
$admin_headers .= "From: Website Form <noreply@kristenbytes.com>\r\n";
$admin_headers .= "Reply-To: {$email}\r\n";

mail($admin_to, $admin_subject, $admin_html, $admin_headers);

// -------------------------------------------------------------------
// 6. CUSTOMER AUTO-REPLY (HTML formatted)
// -------------------------------------------------------------------
$site_name       = "Kristen Byte Solutions";
$support_email   = "info@kristenbytes.com";
$website_url     = "https://kristenbytes.com";
$whatsapp_number = "+91 95147 27796";

$customer_to      = $email;
$customer_subject = "Thank you for contacting {$site_name}";

$customer_html = "
<html>
<head>
  <meta charset='UTF-8'>
  <title>Thank You</title>
</head>
<body style='font-family: Arial, sans-serif; background:#f0f2f5; padding:20px;'>
  <div style=\"max-width:600px;margin:auto;background:#ffffff;border-radius:10px;
              padding:25px;box-shadow:0 2px 10px rgba(0,0,0,0.08);\">
    <h2 style='margin-top:0;color:#1d8348;'>Thank you, {$fullname}!</h2>
    <p style='color:#444;font-size:14px;'>
      We have received your message and our team at <strong>{$site_name}</strong> will get back to you shortly.
    </p>

    <div style='background:#f8f9fa;border-radius:8px;padding:15px;margin-top:15px;'>
      <p style='margin:0 0 8px 0;font-size:13px;color:#555;'><strong>Your details:</strong></p>
      <p style='margin:0;font-size:13px;color:#555;'>
        <strong>Subject:</strong> {$subject}<br>
        <strong>Message:</strong><br>
        " . nl2br(htmlspecialchars($message)) . "
      </p>
    </div>

    <p style='margin-top:20px;font-size:13px;color:#555;'>
      If this is urgent, you can reach us at:<br>
      Email: <a href='mailto:{$support_email}' style='color:#1d72b8;'>{$support_email}</a><br>
      WhatsApp / Phone: {$whatsapp_number}
    </p>

    <p style='margin-top:20px;font-size:12px;color:#999;'>
      Warm Regards,<br>
      <strong>{$site_name}</strong><br>
      <a href='{$website_url}' style='color:#1d72b8;'>{$website_url}</a>
    </p>
  </div>
</body>
</html>
";

$customer_headers  = "MIME-Version: 1.0\r\n";
$customer_headers .= "Content-type: text/html; charset=UTF-8\r\n";
$customer_headers .= "From: {$site_name} <noreply@kristenbytes.com>\r\n";
$customer_headers .= "Reply-To: {$support_email}\r\n";

mail($customer_to, $customer_subject, $customer_html, $customer_headers);

// -------------------------------------------------------------------
// 7. Redirect to Thank You page
// -------------------------------------------------------------------
header("Location: thankyou.html");
exit();
?>
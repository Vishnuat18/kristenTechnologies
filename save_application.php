<?php
// OPTIONAL: enable errors while testing (remove or comment in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get form data safely
$fullname = trim($_POST['fullname'] ?? '');
$email    = trim($_POST['email'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$portfolio = trim($_POST['portfolio'] ?? '');
$job_title = trim($_POST['job_title'] ?? 'General Application');
$cover_letter = trim($_POST['cover_letter'] ?? '');

// Basic validation
if ($fullname === '' || $email === '' || $phone === '') {
    die("Please fill the required fields: Full name, Email, Phone.");
}

// -------------------------------------------------------------------
// FILE UPLOAD HANDLING (RESUME)
// -------------------------------------------------------------------
$resume_name = '';
$resume_tmp  = '';
$resume_type = '';
$resume_size = 0;

if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
    $resume_name = $_FILES['resume']['name'];
    $resume_tmp  = $_FILES['resume']['tmp_name'];
    $resume_type = $_FILES['resume']['type'];
    $resume_size = $_FILES['resume']['size'];
    
    // Optional: add a size check (e.g., 5MB limit)
    if ($resume_size > 5242880) {
        die("Resume file is too large. Max size is 5MB.");
    }
} else {
    die("Resume upload is required.");
}

// -------------------------------------------------------------------
// DATABASE CONNECTION AND INSERT (PostgreSQL)
// -------------------------------------------------------------------
$db_host = "localhost";
$db_port = "5432";
$db_name = "kristen_careers_db";
$db_user = "postgres";
$db_pass = "Semester6!";

try {
    $dsn = "pgsql:host=$db_host;port=$db_port;dbname=$db_name";
    $pdo = new PDO($dsn, $db_user, $db_pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
    $stmt = $pdo->prepare("INSERT INTO applications (job_title, fullname, email, phone, portfolio, cover_letter, resume_name, resume_data) 
                           VALUES (:job_title, :fullname, :email, :phone, :portfolio, :cover_letter, :resume_name, :resume_data)");
    
    // Read the file content to store in DB as binary data (bytea)
    $resume_data = file_get_contents($resume_tmp);
    
    $stmt->execute([
        ':job_title' => $job_title,
        ':fullname' => $fullname,
        ':email' => $email,
        ':phone' => $phone,
        ':portfolio' => $portfolio,
        ':cover_letter' => $cover_letter,
        ':resume_name' => $resume_name,
        ':resume_data' => $resume_data
    ]);
    
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage() . "<br>Please ensure the 'applications' table exists and pdo_pgsql extension is enabled in your php.ini.");
}

// -------------------------------------------------------------------
// SEND EMAIL TO ADMIN WITH ATTACHMENT
// -------------------------------------------------------------------
$admin_to       = "careers@kristenbytes.com";
$admin_subject  = "New Job Application: {$job_title} from {$fullname}";
$submitted_time = date("d-m-Y h:i A");

// Prepare boundary for multipart/mixed email
$boundary = md5(time());

// Headers
$headers = "From: Website Careers <noreply@kristenbytes.com>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";

// HTML Message
$message_body = "
<html>
<head>
  <style>
    body { font-family: Arial, sans-serif; background:#f5f5f5; padding:20px; }
    .container { max-width:600px; margin:auto; background:#ffffff; border-radius:8px; padding:20px; box-shadow:0 2px 8px rgba(0,0,0,0.1); }
    h2 { margin-top:0; color:#0B3D91; }
    p { color:#333; line-height:1.5; }
    strong { color:#555; }
  </style>
</head>
<body>
  <div class='container'>
    <h2>New Job Application Received</h2>
    <p><strong>Applying For:</strong> {$job_title}</p>
    <p><strong>Name:</strong> {$fullname}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    <p><strong>Portfolio/LinkedIn:</strong> " . ($portfolio ? $portfolio : 'N/A') . "</p>
    <p><strong>Cover Letter:</strong><br>" . ($cover_letter ? nl2br(htmlspecialchars($cover_letter)) : 'N/A') . "</p>
    <hr>
    <p style='font-size:12px;color:#777;'>Submitted On: {$submitted_time}</p>
  </div>
</body>
</html>
";

// First section of multipart is the HTML body
$body = "--{$boundary}\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\n";
$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$body .= $message_body . "\r\n\r\n";

// Second section is the attached file
if ($resume_tmp) {
    $file_content = file_get_contents($resume_tmp);
    $encoded_content = chunk_split(base64_encode($file_content));

    $body .= "--{$boundary}\r\n";
    $body .= "Content-Type: application/octet-stream; name=\"{$resume_name}\"\r\n";
    $body .= "Content-Disposition: attachment; filename=\"{$resume_name}\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= $encoded_content . "\r\n\r\n";
}

$body .= "--{$boundary}--";

// Send Admin Email
mail($admin_to, $admin_subject, $body, $headers);

// -------------------------------------------------------------------
// SEND AUTO-REPLY TO APPLICANT (HTML formatted)
// -------------------------------------------------------------------
$applicant_subject = "Application Received - {$job_title} at Kristen Technologies";
$applicant_headers  = "MIME-Version: 1.0\r\n";
$applicant_headers .= "Content-type: text/html; charset=UTF-8\r\n";
$applicant_headers .= "From: Kristen Technologies Careers <careers@kristenbytes.com>\r\n";

$applicant_html = "
<html>
<body style='font-family: Arial, sans-serif; background:#f5f5f5; padding:20px;'>
  <div style=\"max-width:600px;margin:auto;background:#ffffff;border-radius:8px;padding:20px;
              box-shadow:0 2px 8px rgba(0,0,0,0.1);\">
    <h2 style='margin-top:0;color:#0B3D91;'>Application Received</h2>
    <p>Dear {$fullname},</p>
    <p>Thank you for applying for the <strong>{$job_title}</strong> position at Kristen Technologies.</p>
    <p>We have successfully received your application and resume. Our hiring team will review your profile, and if your qualifications match our requirements, we will reach out to you to discuss the next steps.</p>
    <p>We appreciate your interest in joining our team.</p>
    <br>
    <p>Best regards,<br>
    <strong>Hiring Team</strong><br>
    Kristen Technologies<br>
    <a href='https://kristenbytes.com' style='color:#22C55E;'>kristenbytes.com</a></p>
  </div>
</body>
</html>
";

mail($email, $applicant_subject, $applicant_html, $applicant_headers);

// Redirect to thank you page
header("Location: thankyou.html");
exit;
?>

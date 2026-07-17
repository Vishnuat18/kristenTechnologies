<?php

// -----------------
// CONNECT TO DB
// -----------------
require_once '../db.php';

// -----------------
// HANDLE FORM SUBMIT
// -----------------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get and validate email
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email – simple response (you can redirect back with a message instead)
        echo "Invalid email address.";
        exit;
    }

    try {
        // Insert email using prepared statement
        $stmt = $pdo->prepare("INSERT INTO newsletter_subscribers (email) VALUES (:email)");
        $stmt->execute([":email" => $email]);

        // Success – you can customize this message or redirect to a thank-you page
        echo "Thank you for subscribing!";
    } catch (PDOException $e) {
        // Handle duplicate email (unique constraint)
        if ($e->getCode() == 23000) {
            echo "This email is already subscribed.";
        } else {
            // Other DB errors
            echo "Something went wrong. Please try again later.";
        }
    }
} else {
    // If someone opens subscribe.php directly
    echo "Invalid request.";
}

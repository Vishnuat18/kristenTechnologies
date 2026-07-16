<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($fullname) || empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: signup.php");
        exit;
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (fullname, email, password_hash) VALUES (:fullname, :email, :password_hash)");
        $stmt->execute([
            ':fullname' => $fullname,
            ':email' => $email,
            ':password_hash' => $password_hash
        ]);
        
        $_SESSION['success'] = "Registration successful! You can now log in.";
        header("Location: signin.php");
        exit;
    } catch (PDOException $e) {
        if ($e->getCode() == 23505) { // Unique violation in Postgres
            $_SESSION['error'] = "Email already registered.";
        } else {
            $_SESSION['error'] = "Registration failed. Try again.";
        }
        header("Location: signup.php");
        exit;
    }
}
header("Location: signup.php");
exit;
?>

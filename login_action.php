<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: signin.php");
        exit;
    }

    try {
        $stmt = $pdo->prepare("SELECT id, fullname, password_hash, role FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['role'] = $user['role'];
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: signin.php");
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Login failed. Try again.";
        header("Location: signin.php");
        exit;
    }
}
header("Location: signin.php");
exit;
?>

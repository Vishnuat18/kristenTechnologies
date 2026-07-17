<?php
$db_host = "localhost";
$db_port = "5432";
$db_name = "kristen_careers_db"; // Can rename to kristen_db later
$db_user = "postgres";
$db_pass = "Semester6!";

try {
    $dsn = "pgsql:host=$db_host;port=$db_port;dbname=$db_name";
    $pdo = new PDO($dsn, $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage() . "<br>Please ensure the pdo_pgsql extension is enabled in your php.ini.");
}
?>

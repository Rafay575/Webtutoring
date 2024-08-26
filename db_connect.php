<?php
// Database configuration
$host       = "localhost";
$username   = "root"; // Just the username, without @localhost
$password   = "";
$dbname     = "webtutoring";
$dsn        = "mysql:host=$host;dbname=$dbname"; // will be used in PDO

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>

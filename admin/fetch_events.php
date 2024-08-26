<?php
// Database connection
require_once '../db_connect.php';

// Fetch events from the database
$stmt = $pdo->query("SELECT * FROM booking");
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output the events data as JSON
header('Content-Type: application/json');
echo json_encode($events);
?>

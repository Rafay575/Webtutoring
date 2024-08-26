<?php
// Include the database connection file
require_once 'db_connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Prepare SQL query
    $query = "INSERT INTO contactus (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);

    // After executing the query
    if ($stmt->execute([$name, $email, $subject, $message])) {
        $response = array("success" => true);
          // Output JSON response
          header('Content-Type: application/json');
          echo json_encode($response);
          header("Location:http://localhost/Webtutoring/");
         
    } else {
        $response = array("success" => false);
    }

    // Output JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
   

}
?>

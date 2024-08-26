<?php
// Include the database connection file
// require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer-master/src/Exception.php';
require 'phpmailer/PHPMailer-master/src/PHPMailer.php';
require 'phpmailer/PHPMailer-master/src/SMTP.php';
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $package = htmlspecialchars(strip_tags($_POST['package']));
    $timing = htmlspecialchars(strip_tags($_POST['timing']));
    $date = htmlspecialchars(strip_tags($_POST['date']));
    
    // Prepare SQL query
    $query = "INSERT INTO booking (name, email, subject, package,timing,booking_date) VALUES (?, ?, ?, ?,?,?)";
    $stmt = $pdo->prepare($query);

    // After executing the query
    if ($stmt->execute([$name, $email, $subject, $package,$timing,$date])) {
        $response = array("success" => true);
        
        $mail = new PHPMailer(true); // Set to true to enable exceptions
        // Set mailer to use SMTP
        $mail->isSMTP();

        // SMTP settings
        $mail->Host = 'smtp.gmail.com'; // Change this to your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'rafaymalik5763@gmail.com'; // Change this to your SMTP username
        $mail->Password = 'mfznnzkmaksviday'; // Change this to your SMTP password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Sender and recipient
        $mail->setFrom('rafaymalik5763@gmail.com', 'Rafay'); // Change this to your email address and name
        $mail->addAddress($email, $name); // Change this to the recipient's email address and name

        // Email subject and body
        $mail->Subject = 'New Booking Notification';
        $mail->Body = "Hello,\n\nA new booking has been made.\n\nName: $name\nEmail: $email\nSubject: $subject\nPackage: $package\nDate: $date\nTimings: $timing";

        // Send email
        if ($mail->send()) {
            echo 'Email sent successfully';
            header("Location: http://localhost/Webtutoring/");
        } else {
            echo 'Error sending email: ' . $mail->ErrorInfo;
        }

    // Send email
    mail($to, $subject, $message, $headers);
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

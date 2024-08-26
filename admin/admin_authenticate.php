<?php
session_start();

// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform basic authentication (You should use secure authentication mechanisms in a real-world application)
    if ($username === 'admin' && $password === 'password') {
        // Authentication successful
        $_SESSION['admin'] = true; // Set admin session variable
        header("Location: admin_dashboard.php"); // Redirect to admin dashboard
        exit();
    } else {
        // Authentication failed
        header("Location: admin_login.php?error=1"); // Redirect to login page with error parameter
        exit();
    }
} else {
    // Redirect to login page if form data is not provided
    header("Location: index.php");
    exit();
}
?>

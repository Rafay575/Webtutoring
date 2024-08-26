<?php
session_start();
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig('credentials.json'); // Path to your JSON file
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . 'oauth2callback.php');
$client->addScope(Google_Service_Calendar::CALENDAR_EVENTS);

// Check if we have an authorization code, then retrieve the access token
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Check if there was an error.
    if (array_key_exists('error', $token)) {
        throw new Exception(join(', ', $token));
    }

    // Store the token in the session for later use.
    $_SESSION['access_token'] = $token;

    // Redirect to a page of your choice or back to the main app:
    header('Location: ./some_main_page.php');
    exit();
}

// If there's no code in the GET variable, this is an error state (typically happens if the user denied the request)
if (!isset($_GET['code'])) {
    echo 'Access Denied or Authorization Failed. Please try again.';
}
?>

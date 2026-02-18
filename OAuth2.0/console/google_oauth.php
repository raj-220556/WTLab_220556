<?php
session_start();
require_once '../../vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../../");
    $dotenv->load();

    $client = new Google\Client();
    $client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
    $client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
    $client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URL']);
    
    // Add Scopes so Google knows what data to give you
    $client->addScope("email");
    $client->addScope("profile");
    

    // STEP 1: If no code is present, send the user TO Google
    if (!isset($_GET['code'])) {
        $authUrl = $client->createAuthUrl();
        header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
        exit();
    }

    // STEP 2: If code IS present, handle the callback FROM Google
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    
    if (isset($token['error'])) {
        throw new Exception('Error fetching token: ' . $token['error_description']);
    }

    $client->setAccessToken($token);
    $google_oauth = new Google\Service\Oauth2($client);
    $userInfo = $google_oauth->userinfo->get();

    $_SESSION['access_token'] = $token;
    $_SESSION['user_email']   = $userInfo->email;
    $_SESSION['user_name']    = $userInfo->name;
    $_SESSION['user_picture'] = $userInfo->picture;

    header('Location: dashboard.php');
    exit(); 

} catch (Exception $e) {
    echo 'Critical Error: ' . $e->getMessage();
}
<?php

require 'config.php';
session_start();

if (!isset($_GET['code'])) {
    die("Authorization failed.");
}

// 1. Exchange the 'code' for an Access Token
$ch = curl_init(TOKEN_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'client_id' => GITHUB_CLIENT_ID,
    'client_secret' => GITHUB_CLIENT_SECRET,
    'code' => $_GET['code'],
    'redirect_uri' => REDIRECT_URL
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
$response = json_decode(curl_exec($ch), true);
$access_token = $response['access_token'];

// 2. Use the Access Token to get User Data
$ch = curl_init(USER_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $access_token,
    'User-Agent: PHP-App' // GitHub requires a User-Agent header
]);
$user_data = json_decode(curl_exec($ch), true);

// 3. Display data or save to Database
echo "<h1>Welcome, " . $user_data['login'] . "</h1>";
echo "<img src='" . $user_data['avatar_url'] . "' width='100'>";
echo "<pre>"; print_r($user_data); echo "</pre>";
?>
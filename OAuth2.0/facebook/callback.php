<?php
// 1. Load config and start session (Facebook SDK needs sessions)
require_once 'fb-config.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Try to get the access token
try {
    $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    die('Graph returned an error: ' . $e->getMessage());
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When SDK fails (e.g., path issues)
    die('Facebook SDK returned an error: ' . $e->getMessage());
}

// 3. Check if we actually got a token
if (!isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.1 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Reason: " . $helper->getErrorReason() . "\n";
        echo "Description: " . $helper->getErrorDescription() . "\n";
    } else {
        header('HTTP/1.1 400 Bad Request');
        echo 'Bad request - No token received.';
    }
    exit;
}

// 4. Use the token to fetch user profile data
try {
    // We request the id, name, email, and profile picture
    $response = $fb->get('/me?fields=id,name,email,picture', $accessToken->getValue());
    $user = $response->getGraphUser();

    echo "<h1>Login Successful!</h1>";
    echo "Welcome, " . htmlspecialchars($user->getName()) . "<br>";
    echo "Email: " . htmlspecialchars($user->getEmail()) . "<br>";
    echo "<img src='" . $user['picture']['url'] . "' alt='Profile Picture'>";
    
    // For your ASOC project, you would usually save $user['id'] to your database here.
    
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    die('Graph returned an error: ' . $e->getMessage());
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    die('Facebook SDK returned an error: ' . $e->getMessage());
}
?>
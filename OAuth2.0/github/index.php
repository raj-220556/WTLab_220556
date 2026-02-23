<?php
require 'config.php';
$login_url = AUTHORIZE_URL . "?" . http_build_query([
    'client_id' => GITHUB_CLIENT_ID,
    'redirect_uri' => REDIRECT_URL,
    'scope' => 'user:email', // Request access to user's email
    'state' => bin2hex(random_bytes(16)) // Security token to prevent CSRF
]);
?>

<a href="<?php echo $login_url; ?>" style="padding: 10px; background: #333; color: #fff; text-decoration: none; border-radius: 5px;">
    Login with GitHub
</a>
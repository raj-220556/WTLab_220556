<?php
require_once 'fb-config.php';

// Permissions we want to request from the user
$permissions = ['public_profile'];

// Generate the login URL
$loginUrl = $helper->getLoginUrl($_ENV['FB_REDIRECT_URL'], $permissions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login to ASOC</title>
    <style>
        .fb-btn {
            background-color: #1877f2;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h2>Access the Security Operations Center</h2>
    <a href="<?php echo htmlspecialchars($loginUrl); ?>" class="fb-btn">
        Login with Facebook
    </a>
</body>
</html>
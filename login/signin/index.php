<?php
require_once '../../OAuth2.0/facebook/fb-config.php';

// Permissions we want to request from the user
$permissions = ['public_profile'];

// Generate the login URL
$loginUrl = $helper->getLoginUrl($_ENV['FB_REDIRECT_URL'], $permissions);
?>

<?php
require '../../OAuth2.0/github/config.php';
$login_url = AUTHORIZE_URL . "?" . http_build_query([
    'client_id' => GITHUB_CLIENT_ID,
    'redirect_uri' => REDIRECT_URL,
    'scope' => 'user:email', // Request access to user's email
    'state' => bin2hex(random_bytes(16)) // Security token to prevent CSRF
]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & sign</title>
    <link rel="stylesheet" href="../../assets/css/sigin-style.css">
    <!-- <link rel="stylesheet" href="../../assets/css/registration.css"> -->
    <script src="https://kit.fontawesome.com/677403275e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" id="signup-form">
        <form action="" method="POST">
            <div>
                <p>Username</p>
                <div class="fields">
                    <i class="fa-regular fa-user" id="icons"></i>
                    <input id="fname" type="text" placeholder="John" name="username">
                </div>
                
            </div>
            <div>
                <p>Name</p>
                <div class="fields">
                    <i class="fa-regular fa-user" id="icons"></i>
                    <input id="lname" type="text" placeholder="John Doe" name="name">
                </div>
            </div>

            <div>
                <p>Email Address</p>
                <div class="fields"> 
                    <i class="fa-regular fa-envelope" id="icons"></i>
                    <input id="email" type="email" placeholder="john@gmai.com" name="email">
                </div>
            </div>
            <div>
                <p>Password</p>
                <div class="fields">
                    <i class="fa-solid fa-lock" id="icons"></i>
                    <input id="passwd" type="password" placeholder="......." name="password">
                </div>
            </div>
            
            <input type="submit" name="signup" id="btn" value="signup">
        </form>
        <div class="other">
            <a href="../../OAuth2.0/console/google_oauth.php">
                <i class="fa-brands fa-google"></i>
                <p>Google</p>
            </a>

            <a href="<?php echo htmlspecialchars($loginUrl); ?>">
                <i class="fa-brands fa-facebook"></i>
                <p>Facebook</p>
            </a>
            <a href="<?php echo $login_url; ?>">
                <i class="fa-brands fa-github"></i>
                <p>Github</p>
            </a>
        </div>
        <div>
            Already have an account? 
            <button onclick="toggleForms()">Sign in</button>
        </div>
    </div>

    <div class="container" id="signin-form" style="display: none;">
        <form action="" method="POST">
            <div>
                <p>Username</p>
                <div class="fields">
                    <i class="fa-regular fa-user" id="icons"></i>
                    <input id="fname" type="text" placeholder="John" name="username">
                </div>
                
            </div>

            <div>
                <p>Password</p>
                <div class="fields">
                    <i class="fa-solid fa-lock" id="icons"></i>
                    <input id="passwd" type="password" placeholder="......." name="password">
                </div>
            </div>
            <a href="#forgot">Forgot Password?</a>
            <input type="submit" name="signin" id="btn" value="signin">
        </form>

        <div class="other">
            <a href="../../OAuth2.0/console/google_oauth.php">
                <i class="fa-brands fa-google"></i>
                <p>Google</p>
            </a>

            <a href="<?php echo htmlspecialchars($loginUrl); ?>">
                <i class="fa-brands fa-facebook"></i>
                <p>Facebook</p>
            </a>
            <a href="<?php echo $login_url; ?>">
                <i class="fa-brands fa-github"></i>
                <p>Github</p>
            </a>
        </div>
        <div>
            Don't have an account? 
            <button onclick="toggleForms()">Sign up</button>
        </div>
    </div>
    <script src="../../assets/js/sigin-js.js"></script>
</body>
</html>
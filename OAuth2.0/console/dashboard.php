<?php
session_start();

// 1. Protection: If no token exists, the user isn't logged in
if (!isset($_SESSION['access_token'])) {
    header('Location: sign.php'); // Redirect to your login page
    exit();
}

// 2. Retrieve data from the session
$userEmail = $_SESSION['user_email'] ?? 'Unknown Email';
$userName  = $_SESSION['user_name'] ?? 'User';
$userPic   = $_SESSION['user_picture'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SudoSchool - Dashboard</title>
    <style>
        .profile-card { border: 1px solid #ccc; padding: 20px; width: 300px; border-radius: 8px; }
        .profile-pic { border-radius: 50%; width: 100px; }
    </style>
</head>
<body>

    <h1>Welcome to the Dashboard</h1>
    
    <div class="profile-card">
        <?php if ($userPic): ?>
            <img src="<?php echo $userPic; ?>" class="profile-pic" alt="Profile Picture">
        <?php endif; ?>
        
        <h3>Hello, <?php echo htmlspecialchars($userName); ?>!</h3>
        <p>Email: <?php echo htmlspecialchars($userEmail); ?></p>
        
        <hr>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
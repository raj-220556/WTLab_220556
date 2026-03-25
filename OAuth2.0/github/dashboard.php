<?php
session_start();

// Redirect to login if no session exists
if (!isset($_SESSION['user'])) {
    header('Location: index.php'); // Or wherever your login button is
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style>
        .user-card { border: 1px solid #ddd; padding: 20px; width: 300px; text-align: center; }
        .avatar { border-radius: 50%; width: 100px; }
    </style>
</head>
<body>

    <h1>Dashboard</h1>
    
    <div class="user-card">
        <img src="<?php echo $user['avatar']; ?>" class="avatar">
        <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>
        <p>GitHub Username: @<?php echo htmlspecialchars($user['username']); ?></p>
        <hr>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
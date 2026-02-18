<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & sign</title>

    <script src="https://kit.fontawesome.com/677403275e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="input-field">
                <input type="text" name="username" placeholder="username" required>
                <label for="username">username</label>
            </div>
            <div class="input-field">
                <input type="text" name="name" placeholder="name" required>
                <label for="name">name</label>
            </div>

            <div class="input-field">
                <input type="email" name="email" placeholder="email" required>
                <label for="email">email</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" placeholder="password" required>
                <label for="username">password</label>
            </div>
            <input type="submit" name="signup" id="btn" value="signup">
        </form>
        <div class="or">
            <a href=""><i class="fa-brands fa-google"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
        <div>
            
        </div>
    </div>
</body>
</html>
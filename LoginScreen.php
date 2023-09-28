<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["username"] != null) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Login.php" method="POST" class="main">
        <strong class="Text">Login</strong>
        <input type="text" class="usernameLogin" name="username" id="username" placeholder="Enter username" required>
        <input type="password" name="password" class="password" id="password" placeholder="Enter password" required>
        <input type="submit" id="submit" class="submit" value="Login">
        <a href="RegisterScreen.php" class="alreadyText">Don't have an account? Click to Register</a>
    </form>
</body>
</html>
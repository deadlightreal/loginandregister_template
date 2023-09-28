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
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Register.php" method="POST" class="main">
        <strong class="Text">Register</strong>
        <input type="text" class="username" name="username" id="username" placeholder="Enter username" required>
        <input type="email" name="email" class="email" id="email" placeholder="Enter email" required>
        <input type="password" name="password" class="password" id="password" placeholder="Enter password" required>
        <input type="submit" id="submit" class="submit" value="Register">
        <a href="LoginScreen.php" class="alreadyText">Already have an account? Click to Login</a>
    </form>
</body>
</html>
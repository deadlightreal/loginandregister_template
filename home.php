<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["username"] != null) {
    echo $_SESSION["username"];
}
else {
    header("Location: RegisterScreen.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="logout.php">
        <input type="submit" value="logout">
    </form>
</body>
</html>
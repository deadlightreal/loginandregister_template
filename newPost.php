<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["username"] != null) {
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
    <title>New post</title>
    <form action="addPost.php" method="POST">
        <input type="text" name="text" id="text" required>
        <input type="submit" value="Add post">
    </form>
</head>
<body>
    
</body>
</html>
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="logout.php">
        <input type="submit" value="logout">
    </form>
    <table class="posts">
        <tr>
        <?php
        include "dbConnection.php";
        $data = "SELECT * FROM posts";
        $result = $sql->query($data);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='post'><td class='owner'>" . $row["owner"] . "</td></tr>";
                echo "<tr class='post'><td class='posttext' colspan='2'>" . $row["text"] . "</td></tr>";
            }
        }
        ?>
        </tr>
    </table>
    <form action="newPost.php" method="POST">
        <input type="submit" value="New Post">
    </form>
</body>
</html>

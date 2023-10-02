<?php
    session_start();
    include "dbConnection.php";
    $text = $_POST["text"];
    $owner = $_SESSION["username"];

    $code = "INSERT INTO `posts` (`text`, `owner`) VALUES ('$text', '$owner')";
    $mysql = mysqli_query($sql, $code);
    header("Location: home.php");
?>
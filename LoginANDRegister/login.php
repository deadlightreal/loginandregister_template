<?php
session_start();
include "dbConnection.php";
if ((isset($_SESSION["username"]) && $_SESSION["username"] != null)) {
    header("Location: home.php");
}
else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sqlCode = "SELECT * FROM `users` WHERE `username` LIKE '$username'";
    $mysql = mysqli_query($sql, $sqlCode);
    
    while ($row = mysqli_fetch_assoc($mysql)) {
        $userpassword = $row['password'];
        $userusername = $row['username'];
        if ($password == $userpassword) {
            header("Location: home.php");
            $_SESSION["username"] = $username;
        }
        else {
            echo "Wrong username or password!!!";
        }
    }
}
?>

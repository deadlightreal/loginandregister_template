<?php
session_start();
include "dbConnection.php";
if (isset($_SESSION["username"]) && $_SESSION["username"] != null) {
    header("Location: home.php");
}
else {
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sqlCode = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
        $mysql = mysqli_query($sql, $sqlCode);
        header("Location: LoginScreen.php");
        $_SESSION["username"] = $username;
    }
    else {  
        echo "Enter username, email and password!!!";
    }
}
?>

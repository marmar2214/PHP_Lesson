<?php
    session_start();
    $email = "admin@gmail.com";
    $password = "12345678";

    $user_email = $_POST["email"];
    $user_password = $_POST["password"];
    echo $user_email, $user_password;
    if ($email == $user_email && $password == $user_password) {
        $_SESSION["user_email"] = $user_email;
        $_SESSION["user_name"] = "Admin";

        header("location:login.php");
    }else {
        header("location:login.php");
    }
?>
<?php
    session_start();
    unset($_SESSION["user_name"]);
    unset($_SESSION["user_email"]);
    header("location:login.php");
?>
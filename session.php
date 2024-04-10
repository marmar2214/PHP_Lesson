<?php

session_start();

$_SESSION["name"] = "Kyaw Kyaw";
$_SESSION["email"] = "kyawkyaw@gmail.com";

if(isset($_SESSION["name"]) && isset($_SESSION["email"])){
    echo "<h1>".$_SESSION["name"]."</h1>";
    echo "<h1>".$_SESSION["email"]."</h1>";
}
?>
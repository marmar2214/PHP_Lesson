<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION["user_name"]) && isset($_SESSION["user_email"])){
            echo "<h1>User Name is ".$_SESSION["user_name"]."</h1>";
            echo "<a href='logout.php'>Logout</a>";
        }else{
    ?>
    <form action="login_action.php" method="POST">
        Email : <input type="email" name="email" id="email">
        <br><br>
        Password : <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Login">
    </form>
    <?php
        }
    ?>
</body>
</html>
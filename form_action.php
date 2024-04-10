<?php

    var_dump($_POST);
    $name = $_POST["employee_name"];
    $email = $_POST["employee_email"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee name is <?php echo $name ?></h1>
    <h1>Employee email is <?php echo $email ?></h1>
</body>
</html>
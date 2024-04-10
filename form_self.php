<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // var_dump($_SERVER);
        $name = $_POST["employee_name"];
        $email = $_POST["employee_email"];
    }else {
        $name = "Please submit name";
        $email = "Please submit email";
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    

    <div class="container" my-5>
        <h3 class="text-center my-5">Add Form</h3>
        <div class="row">
            <div class="offset-md-4 col-md-4">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="employee_name" placeholder="Eg.Mg Mg">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="employee_email" placeholder="name@example.com">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
            </div>
        </div>

        <h1>Employee name is <?php echo $name ?></h1>
        <h1>Employee email is <?php echo $email ?></h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
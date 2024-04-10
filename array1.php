<?php
    // Index Array 
    $laptops = array("MacBook", "Dell","Lenovo","HP","AUSUS");
    // echo $laptops;
    print_r($laptops);
    echo"<br>";
    echo $laptops[3];
    $fruits =[];
    $fruits[0] = "Apple";
    $fruits[1] = "Orange";
    $fruits[2] = "Mango";
    $fruits[3] = "Banana";
    print_r($fruits);
    echo"<br>";

    // Associative Array 
    $alphabet = [
        "A"=> 1,
        "B"=> 2,
        "C"=> 3,
        "D"=> 4,
        "E"=> 5
    ];
    print_r($alphabet);
    echo "<br>";

    $students =[
        "name"=> "Mg Mg",
        "age"=> 27,
        "email"=>"mgmg@gmail.com"
    ];
    echo "<h3>".$students['name']."</h3>";

    // Multidimensional Array
    $foods = [
        'breakfast' => ['Mohingar', 'Nangyi Thote', 'Kaung Nyin Paung'],
        'launch' => ['Shan-Style rice', 'Rice and Burma Curry'],
        'dinner' => ['Fried Noodle', 'Malar Xiaungaou'],
    ];
    print_r($foods);
    echo "<br>";
    echo $foods['breakfast'][1];

    


?>
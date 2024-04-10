<?php
    $programmings = ["Python", "Java", "JavaScript", "PHP","C#","C","C++","R","Dark","Go"];
    sort($programmings);
    foreach($programmings as $value){
        echo "<h3>$value<h3>";
    }
    echo"<hr>";
    rsort($programmings);
    foreach($programmings as $value){
        echo "<h3>$value<h3>";
    }

    $employees = [
        'name' => 'Aung Aung',
        'email' => 'aungaung@gmail.com',
        'position' => 'Backend Developer',
        'address' => 'Yangon'
    ];
    asort($employees);
    foreach ($employees as $key => $value){
        echo "<h3>Key is $key and Vlue is $value</h3>";
    }
    echo "<hr>";
    arsort($employees);
    foreach($employees as $key => $value){
        echo"<h3>Key is $key and Value is $value<h3>";
    }

    echo"<hr>";
    ksort($employees);
    foreach($employees as $key => $value){
        echo "<h3>Key is $key and Value is $value<h3>";
    }
    echo"<hr>";
    krsort($employees);
    foreach ($employees as $key=>$value){
        echo "<h3>Key is $key and Value is $value</h3>";
    }


    $colors =["Red", "Green", "Blue", "Black", "White"];
    print_r($colors);
    echo "<br>";

    array_push($colors,"Brown");
    print_r($colors);
    echo"<br>";
    array_pop($colors);
    print_r($colors);
    echo"<br>";
    unset($colors[2]);
    print_r($colors);
    echo"<br>";

    // Array to String
    $actors =['Daung', 'Pyi Ti Oo', 'Lu Min', 'Thet Mon Myint','Paing Phyo Thu'];
    echo gettype($actors)."<br>";
    $actors_string = implode(' ',$actors);
    echo "<p>$actors_string</p>";
    echo gettype($actors_string);
    echo "<br>";

    // string to array 
    $actors_array = explode(' ',$actors_string);
    print_r($actors_array);
    echo"<br>";
    echo gettype($actors_array);
    echo"<br>";
    
?>
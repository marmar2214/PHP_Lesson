<?php
    
    $name = "Mar Mar Kyi";
    $address = "Mandalay";

    echo "My name is $name";
    echo "<br>";
    echo 'My name is $name';
    echo "<br>";
    echo 'I live in' .$address;
    echo "<br>";
    echo $name.' Live in '.$address;
    echo "<br>";

    $txt = "Kyaw Ye Htun"; //$txt is a string//assign string to a variable
    echo "I love".$txt."!";
    echo "<br>";

    $x = 5;   // $x is an integer
    $y = 10;
    echo $x + $y;
    echo "<br>";


    $firstName = "Lay";
    $lastName = "Phyu";
    $fullName = $firstName.' '.$lastName;
    echo "$fullName";
    echo "<br>";
    $firstName .= $lastName; //addition variable and variable 
    echo $firstName;
    echo "<br>";

    // PHP has no command for declaring a variable, and the data type depends on the value of variables.
    // PHP supports the following data types:
    // string
    // integer 
    // float (floating point numbers-also called double)
    // boolean
    // array
    // object
    // null 
    // resource 

    echo "<p>Get the Data Type of a variable, use the var_dump() function</p>";
    $x = 5;
    var_dump($x);

    var_dump(5); //integer
    echo "<br>";
    var_dump("John"); //string
    echo "<br>";
    var_dump(3.14); //float
    echo "<br>";
    var_dump(true); //boolean
    echo "<br>";
    var_dump([2, 3, 56]); //object
    echo "<br>";
    var_dump(NULL);

    echo "<br>";
    echo "<br>";
    $x = $y = $z = "Book";
    echo $y; //assign the same value to multiple variables in one line
    echo "<br>";
    echo "<br>";


    //trim()
    $trim_name = " Myo Gyi ";
    echo "Rocker$trim_name";
    echo "<br>";
    echo "Rocker".trim($trim_name);
    echo "<br>";

    //strlen(string)
    echo strlen($trim_name);
    echo "<br>";
    echo strlen($name);
    echo "<br>";
    echo strtoupper($name);
    echo "<br>";
    echo strtolower($name);
    echo "<br>";

    // substr(string, start(0), number)
    $string_eg = "This is string";
    echo substr($string_eg, 5,7);
    echo "<br>";

    // str_replace(search, replace, subject)
    $string_replace = "Hello Mandalay";
    echo $string_replace;
    echo "<br>";
    $str_rep = str_replace("Mandalay", "Smart City", $string_replace);
    echo $str_rep;



 
?>
<?php
    // Function
    function myName(){
        echo "<h1>My name is Mar Mar Kyi</h1>";
    }

    myName();

    //Function with Argument
    $brother = "Mg Mg";
    function myBrother($name){
        echo "<h1>My Brother Name is $name</h1>";

    }

    myBrother($brother);

    $num1 = 10;
    $num2 = 20;
    function add($num1, $num2){
        $result = $num1 + $num2;
        echo "<p>Adding result is $result</p>";
    }

    add($num1, $num2);

    $number = [23, 32];
    function numberArray($num){
        $result = $num[1] - $num[0];
        echo"<p>Sub result is $result</p>";
    }
    numberArray($number);

    $n =30;
    function myNumber($number = 50){
        echo "<p>My Number is $number</p>";
    }
    myNumber($n);
?>
<?php
    //Global Scope
    $x = 5; //global scope

    function myTest(){
        //using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    echo "<p>Variable x outside function is: $x</p>";


    //Local Scope
    function myTest_2(){
         $y = 5; //local scope
         echo "<p>Variable x inside function is: $y</p>";
    }
    myTest_2();
    //using x outside the function will generate an error
    echo "<p>Variable x outside the function is: $y</p>";
    

    //PHP The global Keyword
    $x = 5;  //
    $y = 10;

    function myTest_3(){
        global $x, $y;
        $y = $x + $y; 
    }
    myTest_3();
    echo $y; 
?>
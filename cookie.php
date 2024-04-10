<?php

    setcookie("age","17",time()+3600);
    var_dump($_COOKIE);

    if ($_COOKIE["age"] == "18"){
        echo "<h1>You can buy</h1>";
    }else {
        echo "<h1>You can't buy</h1>";
    }
?>
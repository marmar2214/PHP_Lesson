<?php

// One Condition
$x = 10;
$y = 10;

if($x == $y){
    echo "<h3>X and Y are equal.</h3>";
}


// Two Condition

date_default_timezone_set("Asia/Yangon");

$t = date("h:i:sa");
echo "$t";

if($t >= 20 && $t <=22){
    echo "<h3>Training time.</h3>";
}else {
    echo "<h3>Working time.</h3>";
}


// Many Condition 

$d = date("D");
echo $d;

if ($d == "Mon"){
    echo "<h3>Today is Monday</h3>";
}else if ($d == "Tue"){
    echo "<h3>Today is Tuesday</h3>";
}else if ($d == "Wed"){
    echo "<h3>Today is Wednesday</h3>";
}else if ($d == "Thu"){
    echo "<h3>Today is Thursday</h3>";
}else if ($d == "Fri"){
    echo "<h3>Today is Super Friday</h3>";
}else {
    echo "<h3>Today is Holiday</h3>";
}


?>
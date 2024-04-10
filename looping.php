<?php

// For loop - 
// Know the beginning and the end. If you know where to start and where to end, use "For Loop"
$a = 0;
$b = 0;

for ($i = 0; $i < 5; $i++){
    $a += 10;
    $b += 5;
}
echo "<h3>Looping end is a = $a and b = $b.</h3>";

// While Loop
$j = 0;
$num = 50;
while ($j == 10){
    $num --;
    $j++;
}
echo "<h3>Looping end is num = $num and j = $j.</h3>";

//Do While loop
$k = 0;
$n = 50;
do{
    $n++;
    $k++;
}while($k == 10);
echo "<h3>The Looping end is n = $n and k = $k</h3>";

// Foreach loop
$programming = ['JavaScript','PHP','Java','C#','Python','Go','R','Dark'];
echo $programming[1];
foreach($programming as $key => $value){
    echo "<h3>Key is $key and Value is $value.</h3>";
}
for ($g = 0; $g <
 count($programming); $g++){
    echo "<h3>Key is $g and Value is $programming[$g]</h3>";
}

?>
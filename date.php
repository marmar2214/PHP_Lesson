<?php

    echo "<h1>Date</h1>";
    echo "Today is".date("Y-m-d")."<br>";
    echo "Today is".date("d.m.Y")."<br>";
    echo "Today is".date("Y/m/d")."<br>";
    echo "Today is".date("d M Y")."<br>";
    echo "Today is".date("l")."<br>";

    echo "<h1>Time</h1>";
    echo "This is".date("h:i:sa")."<br>";
    
    echo date_default_timezone_get();
    echo "<br>";
    date_default_timezone_set("Asia/Yangon");
    echo "Time is".date("h:i:sa")."<br>";

    echo "<h1>String to Time</h1>";

    $tomorrow = strtotime("tomorrow");
    echo "Tomorrow is".date("d.m.Y", $tomorrow)."<br>";
    
    $next_saturday = strtotime("next Saturday");
    echo "Next Saturday is ".date("d.m.Y", $next_saturday)."<br>";

    $next_2weeks = strtotime("+2 weeks");
    echo "Next two weeks is" .date("d.m.Y", $next_2weeks)."<br>";

    $last_2weeks = strtotime("-2 weeks");
    echo "Last two weeks is" .date("d.m.Y", $last_2weeks)."<br>";

    $last_2days = strtotime("-2 days");
    echo "Last two days is".date("d.m.Y", $last_2days)."<br>";

    $next_3months = strtotime("+3 months");
    echo "Next 3 months is" .date("d.m.Y", $next_3months)."<br>";

?>
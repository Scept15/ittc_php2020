<?php

//timezone setting our timezone
echo date_default_timezone_set("Asia/Manila");
echo "<br>";
//example
$date = "Sept. 15, 2020  1:32 PM";
echo $date;
echo "<br>";
// manepulate format
echo date("Y-m-d H:i:s ",strtotime($date));












?>
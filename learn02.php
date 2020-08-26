<?php


//

$text = "Kamusta po?";
$number = 25;
$num1 = 25;
$num2 = "25";
$float = 99.9;
$boolean = true;
$array = array($text, $number, $float, $boolean);


// constant
define("Master", "PinoyPinoy", true);



// $number += $num1;

// echo $number;

echo "<BR>";
//if statement


if($number == $num1){
    echo "true";
}else{
    echo "false";
}

echo "<BR>";
//if statement


if($number === $num2){
    echo "true";
}else{
    echo "false";
}

echo "<BR>";
//if statement


if($number !== $num2){
    echo "true";
}else{
    echo "false";
}
<?php

//logiCAL
$space = "<br>";
$text = "Kamusta po?";
$number = 25;
$num1 = 25;
$num2 = "25";
$float = 99.9;
$boolean = true;
$array = array($text, $number, $float, $boolean);


$mango = "green";
$size = "big";

// && --> AND = masatisfy dalawang condition

// xor = may masatisfy na isa lang dapat

// || --> OR may masatisfy kahit isa lang

if($mango == "yellow" AND $size == "big"){
echo "pede na kainin";
}else{
    echo "wag muna  ";
}

echo $space;

if($mango == "yellow" OR $size == "small"){
    echo "pede na kainin";
    }else{
        echo "hilaw pa ";
    }

echo $space;

 if($mango == "yellow" xor $size == "big"){
echo "true ";
}else{
    echo "false ";
}

echo $space;

//elseif(){}

if($mango == "yellow" AND $size == "big"){
    echo "true";
    }elseif($mango == "green" AND $size == "big"){
        echo "true";
    }else{
        echo "false";
        }
    
    echo $space;

    // same lang

    if($mango == "yellow" AND $size == "big" || $mango == "green" AND $size == "big"){
        echo "true";
        }else{
            echo "false";
            }
        
    

?>
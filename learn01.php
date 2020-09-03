<?php


// strings
$text = "Kamusta po?";
$number = 25;
$float = 99.9;
$boolean = true;
$array = array($text, $number, $float, $boolean);




// 1st parameter "looking for" 2nd parameter "what to change" 3rd parameter "in what variable"
$old = str_replace(" ", "",$text);
// Kamusta ?  ===  Kamustapo?

// couting length
echo strlen($old);
echo "<br>";
echo "<br>";
// finding position
echo strpos($text, "po");


?>
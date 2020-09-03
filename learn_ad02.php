<?php

$fruits = array("mangga" => "mango", "mansanas" => "apple", "saging" => "banana", "pinya" => "pineapple");
// count the fruits
$total = count($fruits);

$numbers = array(3,1,10,9,8,2,5,7,4,6);
// print_r to view details.
 print_r($fruits);

 echo "<br>";
 echo "<br>";

 echo $fruits["saging"];


 echo "<br>";
 echo "<br>";

//sorting numbers  sort / rsort
rsort($numbers);
print_r($numbers);

echo "<br>";
 echo "<br>";

 //finding search in array // filtering
// 1st parameter what to search 2nd parameter what array
 if(in_array("mango", $fruits)){
     echo "true";
 }else{
     echo "false";
 }

 ?>
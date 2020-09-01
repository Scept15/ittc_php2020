<?php


$fruits = array("mango", "apple", "banana", "pineapple");
// count the fruits
$total = count($fruits);


 print_r($fruits);
 echo "<br>";

echo "the total of fruits is ".$total;

echo "<br>";
echo "<br>";

echo $fruits[1];



echo "<br>";
echo "<br>";

echo " Displaying the array <br>";   

for($x = 0; $x < $total; $x++){
    echo $fruits[$x]. "<br>";

}













?>
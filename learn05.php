<?php
// loop
$space = "<br>";
$text = "Kamusta po?";
$x = 1;
$y = 21;
$num2 = "25";
$float = 99.9;
$boolean = true;
$data_types = array($text, $y, $float, $boolean);


$mango = "green";
$size = "big";



while($x <= 10){
    echo "count of this is ".$x."<br>";
    $x++;
}

echo $space.$space;

do{
    echo "count to ".$x."<br>";
    $x++;
}while($x <= 10);

echo $space;

for($i = 1; $i <= 5; $i++){
    echo "this ".$i."<br>";
}

echo $space;


foreach($data_types as $values){

    echo $values."<br>";

}








?>
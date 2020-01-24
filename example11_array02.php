<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php array 02</title>
</head>
<body>
    <h1>Array 02</h1>
    <?php

    $numbers = [];

    $numbers[1] = 'one';
    $numbers[2] = 'two';
    $numbers[3] = 'three';
    $numbers[4] = 'four';
    $numbers[5] = 'five';
    $numbers[6] = 'six';

    echo $numbers[3] .'<br>';
    echo $numbers[5] .'<br><hr>';

    $var1 = 3;
    $var2 = 5;

    echo $numbers[$var1] .'<br>';
    echo $numbers[$var2] .'<br><hr>';

    echo "<p> Simplier";

    $phil = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
    ];

    $roll = rand(1, 6);
        echo '<p> Random number is : ' . $phil[$roll] . '</p>';

     if($roll == 6){
         echo '<p> You WIn!</p>';
     }else{
         echo '<p> You Lose!  <br>  Try Again!</p> <hr>';
     }

     $birthday['scept'] = '15-sept-1994';
     $birthday['ny'] = '14-jan-1997';
     $birthday['1st'] = '14-nov-2018';

     echo 'ny birthday : ' . $birthday['ny'] . '<br><hr>';


     $cel = [
         'scept' => '15-sept-1994',
         'ny' => '14-jan-1997',
         '1st' => '14-nov-2018'
         
     ];

     echo 'scept  :' . $cel['scept'] . '<br><hr>';


?>
</body>
</html>
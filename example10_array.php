<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Array </title>
</head>
<body>

<h1>Array</h1>
    <?php
    $myarray = [ 'school', 2, '100'];

    echo $myarray[0] .'<br>'; // school
    echo $myarray[1] .'<br>'; // 2
    echo $myarray[2] .'<br><hr>'; // 100

    $myarray[1] = 3;
    echo $myarray[1] .'<br><hr>';

    $myarray[2] = 'park';
    echo $myarray[2] .'<br><hr>';

    $myarray[3] = 'ny';
    echo $myarray[3] .'<br><hr>';

    $myarray [] = 5;
    echo '<p> room ' . $myarray [4] . '<br><hr>';

?>
</body>
</html>
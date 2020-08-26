<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Data</title>
</head>
<body>
    <h1>Get data</h1>
    <?php

    $name = $_GET[name];
    $pass = $_GET[password];
    $email = $_GET[email];
    $age = $_GET[age];
    $birthday = $_GET[birthday];
    $gender = $_GET[r1];
    
    echo '<p> Name is :' . $name . 
    '<br> Email is :' . $email . 
    '<br> Password is :' . $pass . 
    '<br>  Age is :' . $age . 
    '<br> Birthday is :' . $birthday . 
    '<br> Gender is :' . $gender . '</p>';
    






?>
</body>
</html>
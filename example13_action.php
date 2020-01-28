<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> example 13 form</title>
</head>
<style>
$userid{
    width: 1000px;
    display: inline-block;

}

</style>
<body>
    <h1>Example 13 Get form</h1>
  
    <?php
     
     $userid = $_GET[userid];
     $pass = $_GET[userpw];
     $pass2 = $_GET[userpw2];
     $fname = $_GET[firstname];
     $mname = $_GET[middlename];
     $lname = $_GET[lastname];
    $birth = $_GET[birth];
    $address = $_GET[address];
    $post = $_GET[post];

    echo '<p>  User ID is : ' . $userid . 
    '<br><br> Password is : ' . $pass . 
    '<br><br> Check Password is : ' . $pass2 . 
    '<br><br> First Name is : ' . $fname . 
    '<br><br> Middle Name is : ' . $mname . 
    '<br><br> Last Name is : ' . $lname . 
    '<br><br> Birthday is : ' . $birth . 
    '<br><br> Address is : ' . $address . 
    '<br><br> Post Number is : ' . $post . '</p>';


?>

</body>
</html>
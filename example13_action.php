<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> example 13 action page </title>
</head>
<body>
    
  
    <?php
     
     $id = $_POST['id'];
     $userid = $_POST[userid];
     $pass = $_POST[userpw];
     $pass2 = $_POST[userpw2];
     $fname = $_POST[firstname];
     $mname = $_POST[middlename];
     $lname = $_POST[lastname];
    $birth = $_POST[birth];
    $address = $_POST[address];
    $post = $_POST[post];

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');

    if ($id){
        // edit record
        $sql = 'UPDATE example13
        SET userid = :userid,
        firstname = :firstname,
        middlename = :middlename,
        lastname = :lastname,
        birthday = :birthday,
        address = :address,
        post = :post';
        if ($userpw){
            $sql .= ',password = :password';
        }
        $sql .= 'WHERE id = :id';
        $stmt = $pdo->preprare($sql);
        $params = [
            'userid' => $userid,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'lastname' => $lastname,
            'birthday' => $birthday,
            'address' => $address,
            'post' => $post,
            
            'id' => $id,
        ];
        if ($userpw){
            $params['password'] = $userpw;
        }
        $stmt->execute($params);


    } else {
        // create new record
    
    
    $stmt = $pdo->prepare('INSERT INTO example13( Userid, Password, Firstname, Middlename, Lastname, Birthday, Address, Post 
    ) VALUES (
        ?,?,?,?,?,?,?,?
    )');
   $return = $stmt->execute([ $userid, $pass, $fname, $mname, $lname, $birth, $address, $post]);

    }

    print_r($stmt->errorinfo());

    echo ' User ID is : ' . $userid . '<br><br>';
    echo ' Password is : ' . $pass . '<br><br>';
    echo ' Check Password is : ' . $pass2 . '<br><br>';
    echo ' First Name is : ' . $fname . '<br><br>';
    echo ' Middle Name is : ' . $mname . '<br><br>';
    echo ' Last Name is : ' . $lname . '<br><br>';
    echo ' Birthday is : ' . $birth . '<br><br>';
    echo ' Address is : ' . $address . '<br><br>';
    echo ' Post Number is : ' . $post . '<br>';
    ?>


    <a href="example13_list.php">Go to list</a>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Example Member Form</title>

    <style>
    body{
         /* background-image: url(https://thumbs.dreamstime.com/z/female-index-finger-crooked-reckoning-come-over-here-isolated-white-background-32486828.jpg);
        background-repeat: no-repeat; 
            SAMPLE BACKGROUND NOT GOOD!

        */

        background-image: url(pred.jpg);

        /* CONTINUE THIS ONE */
    }
   header{
        color: aqua;
        background-color: grey;
      
        text-align: center;
        margin: -8px;
        height: 100px;
        box-shadow: 0px 0px 10px 2px grey;
        overflow: hidden;
    }

    h1{
        margin-top: 20px;
         font-size: 3rem;
         
    }
    
   

    form{
        display: inline-block;
        position: relative;
        margin-left: 38%;
        margin-top: 100px ;
        margin-right: -8px;
        padding: 10px 60px;
        background-image: url(https://www.geeky-gadgets.com/wp-content/uploads/2019/04/Acer-Predator-Triton-500.jpg);
        background-size: cover;
        
        box-shadow: 0px 0px 10px 2px black;
        
         
    }
  
    
        label{
         color: aqua;   
         width: 100px;
         display: inline-block;
        }

        
    </style>

</head>

<body>
        <?php
    $id= $_GET['id'];

    if ($id){
        
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM example13 WHERE ID = ?');
    $stmt->execute([ $id ]);
    $item = $stmt->fetch();
    } else{
        $item =[];
    }
        ?>

    <header>
        <h1>Join Us!</h1>
    </header>

    <form method="POST" action="example13_action.php">
        <input type="hidden" name="id" value="<?=$item['ID']?>" />
        <label>User Name</label>
        <input type="text" name="userid" id="userid" placeholder="User ID" maxlength="20" value="<?=$item['Userid']?>"><br><br>
        <label>Password</label>
        <input type="password" name="userpw" id="userpw" placeholder="User Password" maxlength="16"><br><br>
        <label>Password Check</label>
        <input type="password" name="userpw2" id="userpw2" placeholder="Password Check" maxlength="16"><br><br>
        <label>First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="First name" maxlength="20" value="<?=$item['Firstname']?>"><br><br>
        <label>Middle Name</label>
        <input type="text" name="middlename" id="middlename" placeholder="Middle name" maxlength="20" value="<?=$item['Middlename']?>"><br><br>
        <label>Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Last name" maxlength="20" value="<?=$item['Lastname']?>"><br><br>
        <label>Birthday</label>
        <input type="date" name="birth" id="birthday" value="<?=$item['Birthday']?>"><br><br>
        <label>Address</label>
        <input type="text" name="address" id="address" placeholder="Address" size="40" value="<?=$item['Address']?>"><br><br>
        <label>Post number</label>
        <input type="number" name="post" id="post" placeholder="Post number" maxlength="4" value="<?=$item['Post']?>"><br><br>
   



        <input type="submit" value="Join">  

    </form>

</body>
</html>
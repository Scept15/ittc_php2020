<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <?php
    $id = $_GET['id'];

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM example13 WHERE ID = ?');
    $stmt->execute([ $id ]);
    $item = $stmt->fetch();

    echo '<p>  User ID is : ' . $item['Userid'] . 
    '<br><br> Password is : ' . $item['Password'] . 
    '<br><br> First Name is : ' . $item['Firstname'] . 
    '<br><br> Middle Name is : ' . $item['Middlename'] . 
    '<br><br> Last Name is : ' . $item['Lastname'] . 
    '<br><br> Birthday is : ' . $item['Birthday'] . 
    '<br><br> Address is : ' . $item['Address'] . 
    '<br><br> Post Number is : ' . $item['Post'] . '</p>';


    ?>
    <a href="example13.php?id=<?=$item['ID'] ?>">Edit </a>
<br><br>
    <form  id="delete-form" action="example13_member_delete.php" method="post">
        <input type="hidden" name="id" value="<?=$item['ID']?>"/>
        <button type="submit">Delete</button>
    </form>
    <script>
    $(function() {
        $('#delete-form').submit(function(event){
            if(!confirm('Do you REALLY want to delete this ')){
                event.preventDefault();
            }
        });
    });
    </script>
</body>
</html>
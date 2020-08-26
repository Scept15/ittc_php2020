<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST PHP</title>
</head>
<body>
    <?php

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
$stmt = $pdo->prepare('SELECT * FROM example13');
$stmt->execute();
$list = $stmt->fetchALL();


print_r($stmt->errorinfo());


?>
<a href="example13.php">Create User</a>

<table>
    <thead>
        <tr>
            <th>UserId</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $item) { ?>
            <tr>
                <td><a href="example13_view.php?id=<?=$item['ID']?>"><?=$item['Userid']?></a></td>
                <td><?=$item['Firstname']?> <?=$item['Middlename']?> <?=$item['Lastname']?> </td> 
                <td><?=$item['Birthday']?> </td>
                <td><?=$item['Address']?> </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

    
</body>
</html>
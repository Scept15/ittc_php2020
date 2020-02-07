<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application List</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
    <style>

    body{
        background-image: url("../image/sunset.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;

    }
    th{
        border: 3px solid black; 
        padding: 0 50px;
        color: white;
        font-family: 'Heebo', sans-serif;
        font-size: 18px;
        /* PUT A SIZE THIS BORDER */        
    }
    .create{
        margin-left: 20%; 
        text-decoration: none;
        color: darkorange;
        font-size: 20px;
    }
    .create:hover{
        color: fuchsia;
    }
    .name{
        text-decoration: none;
        color: cornflowerblue;
    }
    .name:visited{
        color: beige;
    }
    .name:hover{
        color: fuchsia;
    }
    .name:active{
        color: saddlebrown;
    }
    td{
        border: .3px solid mistyrose;
        text-align: center;
        text-transform: capitalize;
        color: beige;
    }

    #image{
        height: 100px;
        weight: 100px;
    }
    </style>
</head>
<body>
    <?php
      $SKILL_RATE_TEXTS = [
        '1' => 'Beginner',
        '2' => 'Advanced',
        '3' => 'Expert'
    ];

    $pdo = new PDO('mysql:host=localhost;dbname=Application_Form', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM Application');
    $stmt->execute();
    $list = $stmt->fetchALL();


    print_r($stmt->errorinfo());


    ?>

    
    <hr>
<a class="create" href="application_form.php">Create User</a>
<br><br>
<table>
    <thead>
        <tr class="border">
            <th>Name</th>
            <th>Cellphone Number</th>
            <th>Address</th>
            <th>Birthday</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Status</th>
            <th>Spouse</th>
            <th>Children</th>
            <th>Religion</th>
            <th>Pastor</th>
            <th>Elementary</th>
            <th>Year</th>
            <th>High School</th>
            <th>Year</th>
            <th>College</th>
            <th>Year</th>
            <th>Post Graduate</th>
            <th>Year</th>
            <th>Special Skills</th>
            <th>Literate</th>
            <th>Year</th>
            <th>Month</th>
            <th>Rate</th>
            <th>Employed</th>
            <th>Company</th>
            <th>Position</th>
            <th>Character Ref.</th>
            <th>Address</th>
            <th>Character Ref.</th>
            <th>Address</th>
            <th>Contact Person</th>
            <th>Contact Number</th>
            <th>Picture Perfect</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $item) {?>
            <tr>
                <td><a class="name" href="application_view.php?id=<?=$item['id']?>"><?=$item['name']?></a></td>
                <td><?=$item['number']?></td>
                <td><?=$item['address']?></td>
                <td><?=$item['birthday']?></td>
                <td><?=$item['age']?></td>
                <td><?=$item['gender']?></td>
                <td><?=$item['height']?> cm</td>
                <td><?=$item['weight']?> kg</td>
                <td><?=$item['status']?></td>
                <td><?=$item['spouse']?></td>
                <td><?=$item['children']?></td>
                <td><?=$item['religion']?></td>
                <td><?=$item['pastor']?></td>
                <td><?=$item['elementary']?></td>
                <td><?=$item['year1']?></td>
                <td><?=$item['hs']?></td>
                <td><?=$item['year2']?></td>
                <td><?=$item['college']?></td>
                <td><?=$item['year3']?></td>
                <td><?=$item['graduate']?></td>
                <td><?=$item['year4']?></td>
                <td><?=$item['skill']?></td>
                <td><?=$item['literate']?></td>
                <td><?=$item['yearuse']?></td>
                <td><?=$item['monthuse']?></td>
                <td><?=$SKILL_RATE_TEXTS[$item['rate']]?></td>
                <td><?=$item['employed']?></td>
                <td><?=$item['company']?></td>
                <td><?=$item['position']?></td>
                <td><?=$item['char1']?></td>
                <td><?=$item['address1']?></td>
                <td><?=$item['char2']?></td>
                <td><?=$item['address2']?></td>
                <td><?=$item['emergency']?></td>
                <td><?=$item['emergencynumber']?></td>
                <td><img id="image" src="<?=$item['Picture']?>" alt=""></td>
            </tr>
        <?php } ?>
    </tbody>

</table>





</body>
</html>
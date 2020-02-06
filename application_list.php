<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application List</title>
    <style>
    
    image{

    }
    </style>
</head>
<body>
    <?php

    $pdo = new PDO('mysql:host=localhost;dbname=Application_Form', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM Application');
    $stmt->execute();
    $list = $stmt->fetchALL();


    print_r($stmt->errorinfo());


    ?>
    <hr>
<a href="application_form.php">Create User</a>

<table>
    <thead>
        <tr>
            <th colspan="3">Name</th>
            <th colspan="3">Cellphone Number</th>
            <th colspan="3">Address</th>
            <th colspan="3">Birthday</th>
            <th colspan="3">Age</th>
            <th colspan="3">Gender</th>
            <th colspan="3">Height</th>
            <th colspan="3">Weight</th>
            <th colspan="3">Status</th>
            <th colspan="3">Spouse</th>
            <th colspan="3">Children</th>
            <th colspan="3">Religion</th>
            <th colspan="3">Pastor</th>
            <th colspan="3">Elementary</th>
            <th colspan="3">Year</th>
            <th colspan="3">High School</th>
            <th colspan="3">Year</th>
            <th colspan="3">College</th>
            <th colspan="3">Year</th>
            <th colspan="3">Post Graduate</th>
            <th colspan="3">Year</th>
            <th colspan="3">Special Skills</th>
            <th colspan="3">Literate</th>
            <th colspan="3">Year</th>
            <th colspan="3">Month</th>
            <th colspan="3">Rate</th>
            <th colspan="3">Employed</th>
            <th colspan="3">Company</th>
            <th colspan="3">Position</th>
            <th colspan="3">Character Ref.</th>
            <th colspan="3">Address</th>
            <th colspan="3">Character Ref.</th>
            <th colspan="3">Address</th>
            <th colspan="3">Contact Person</th>
            <th colspan="3">Contact Number</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $item) {?>
            <tr>
                <td colspan="3"><a href="application_view.php?id=<?=$item['id']?>"><?=$item['name']?></a></td>
                <td colspan="3"><?=$item['number']?></td>
                <td colspan="3"><?=$item['address']?></td>
                <td colspan="3"><?=$item['birthday']?></td>
                <td colspan="3"><?=$item['age']?></td>
                <td colspan="3"><?=$item['gender']?></td>
                <td colspan="3"><?=$item['height']?></td>
                <td colspan="3"><?=$item['weight']?></td>
                <td colspan="3"><?=$item['status']?></td>
                <td colspan="3"><?=$item['spouse']?></td>
                <td colspan="3"><?=$item['children']?></td>
                <td colspan="3"><?=$item['religion']?></td>
                <td colspan="3"><?=$item['pastor']?></td>
                <td colspan="3"><?=$item['elementary']?></td>
                <td colspan="3"><?=$item['year1']?></td>
                <td colspan="3"><?=$item['hs']?></td>
                <td colspan="3"><?=$item['year2']?></td>
                <td colspan="3"><?=$item['college']?></td>
                <td colspan="3"><?=$item['year3']?></td>
                <td colspan="3"><?=$item['graduate']?></td>
                <td colspan="3"><?=$item['year4']?></td>
                <td colspan="3"><?=$item['skill']?></td>
                <td colspan="3"><?=$item['literate']?></td>
                <td colspan="3"><?=$item['yearuse']?></td>
                <td colspan="3"><?=$item['monthuse']?></td>
                <td colspan="3"><?=$item['rate']?></td>
                <td colspan="3"><?=$item['employed']?></td>
                <td colspan="3"><?=$item['company']?></td>
                <td colspan="3"><?=$item['position']?></td>
                <td colspan="3"><?=$item['char1']?></td>
                <td colspan="3"><?=$item['address1']?></td>
                <td colspan="3"><?=$item['char2']?></td>
                <td colspan="3"><?=$item['address2']?></td>
                <td colspan="3"><?=$item['emergency']?></td>
                <td colspan="3"><?=$item['emergencynumber']?></td>
                <td><img class="image" src="<?=$item['Picture']?>" alt=""></td>
            </tr>
        <?php } ?>
    </tbody>

</table>





</body>
</html>
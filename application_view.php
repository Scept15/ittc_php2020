<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applicaiton View</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <?php
    $id = $_GET['id'];

    $pdo = new PDO('mysql:host=localhost;dbname=Application_Form', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM Application WHERE id = ?');
    $stmt->execute([ $id ]);
    $item = $stmt->fetch();

    echo '<p>I. PERSONAL DATA </p><br><br>';
    echo ' Name is : ' . $item ['name'] . '<br><br>';
    echo ' Cellphone Number is : ' . $item['number'] . '<br><br>';
    echo ' Address is : ' . $item['address'] . '<br><br>';
    echo ' Birthday is : ' . $item['birthday'] . '<br><br>';
    echo ' Age is : ' . $item['age'] . '<br><br>';
    echo ' Gender is : ' . $item['gender'] . '<br><br>';
    echo ' Height is : ' . $item['height'] . '<br><br>';
    echo ' Weight is : ' . $item['weight'] . '<br><br>';
    echo ' Civil status is : ' . $item['status'] . '<br><br>';
    echo ' Name of is spouse is : ' . $item['spouse'] . '<br><br>';
    echo ' Number of Children : ' . $item['children'] . '<br><br>';
    echo ' Religion is : ' . $item['religion'] . '<br><br>';
    echo ' Name of Pastor is : ' . $item['pastor'] . '<br><br> <br><br>';
    
    echo '<p>II. EDUCATIONAL BACKGROUND </p><br><br> <br><br> ';
    echo ' Elementary School is : ' . $item['elementary'] . '  Year : ' . $year1 . '<br><br>';
    echo ' High School is : ' . $item['hs'] . '  Year : ' . $item['year2'] . '<br><br>';
    echo ' College School is : ' . $item['college'] . '  Year : ' . $item['year3'] . '<br><br>';
    echo ' Post Graduate is : ' . $item['graduate'] . ' Year : ' . $item['year4'] . '<br><br>';
    echo ' Special Skills are : ' . $item['skill'] . '<br><br><br><br>';

    echo '<p>III. QUESTIONS  </p><br><br>';
    echo ' Computer literate : ' . $item['literate'] . '<br><br>';
    echo ' Years and Months using Computer : ' . $item['yearuse'] . ' and ' . $item['monthuse'] . '<br><br>';
    echo ' Computer skill rate is : ' . $item['rate'] . '<br><br>';
    echo ' Employed : ' . $item['employed'] . '<br><br>';
    echo ' (If yes) Name of Company is : ' . $item['company'] . '<br><br>';
    echo ' Position is : ' . $item['positon'] . '<br><br><br><br>';

    echo '<p>IV. CHARACTER REFERENCE </p><br><br>';
    echo ' Name 1 is : ' . $item['char1'] . '<br><br>';
    echo ' Address is : ' . $item['address1'] . '<br><br>';
    echo ' Name 2 is : ' . $item['char2'] . '<br><br>';
    echo ' Address is : ' . $item['address2'] . '<br><br><br><br>';

    echo '<p> V. Person to be contacted in case of emergency </p><br><br>';
    echo ' Name : ' . $item['emergency'] . '<br><br>';
    echo ' Contact Number : ' . $item['emergencynumber'] . '<br><br>';

    ?>
    <a href="application_form.php?id=<?=$item['id'] ?>">Edit </a>
    <br><br>
    <form id="delete-form" action="application_form_delete.php" method="POST">
        <input type="hidden" name="id" value="<?=$item['id']?>"/>
        <button type="submit">Delete</button>

    </form>
    <script>
        $(function() {
            $('#delete-form').submit(function(event){
                if(!confirm('Do you REALLY want to delete this form ')){
                    event.preventDefault();
                }
            });
        });
     </script>


        
</body>
</html>
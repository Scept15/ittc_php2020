<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Action</title>
    <style>
    a{
        text-decoration: none;
        color: darkkhaki;
    }
    a{
    color: teal;
    }
    a:active{
        color: indianred;
    }
   

    a:hover{
        color: magenta;
    }
    
    </style>
</head>
<body>

    <h1>APPLICATION ACTION</h1>

    <?php


    $filepath = null;

     if ($_FILES['img_select']['error'] === UPLOAD_ERR_OK) {   
        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
        $uploadfile = $uploaddir . basename($_FILES['img_select']['name']);

        if (!is_dir($uploaddir)){
            mkdir($uploaddir);

        }
        //print_r($_FILES);

        if (move_uploaded_file($_FILES['img_select']['tmp_name'], $uploadfile)){
            // echo "file upload succes.";
            $filepath = '/uploads/'.basename($_FILES['img_select']['name']);
        } else {

            echo 'file information:';
            print_r($_FILES);
        }
     }



    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $status = $_POST['status'];
    $spouse = $_POST['spouse'];
    $children = $_POST['children'];
    $religion = $_POST['religion'];
    $pastor = $_POST['pastor'];

    $elementary = $_POST['elementary'];
    $year1 = $_POST['year1'];
    $hs = $_POST['hs'];
    $year2 = $_POST['year2'];
    $college = $_POST['college'];
    $year3 = $_POST['year3'];
    $graduate = $_POST['graduate'];
    $year4 = $_POST['year4'];
    $skill = $_POST['skill'];
    
    $literate = $_POST['literate'];
    $yearuse = $_POST['yearuse'];
    $monthuse = $_POST['monthuse'];
    $rate = $_POST['rate'];
    $employed = $_POST['employed'];
    $company = $_POST['company'];
    $positon = $_POST['position'];

    $char1 = $_POST['char1'];
    $address1 = $_POST['address1'];
    $char2 = $_POST['char2'];
    $address2 = $_POST['address2'];

    $emergency = $_POST['emergency'];
    $emergencynumber = $_POST['emergencynumber'];

    $pdo = new PDO('mysql:host=localhost;dbname=Application_Form', 'root', 'zxcv1234');

    if ($id){
        //edit record
        $sql = 'UPDATE Application
        SET name = :name,
        number = :number,
        address = :address,
        birthday = :birthday,
        age = :age,
        gender = :gender,
        height = :height,
        weight = :weight,
        status = :status,
        spouse = :spouse,
        children = :children,
        religion = :religion,
        pastor = :pastor,
        elementary = :elementary,
        year1 = :year1,
        hs = :hs,
        year2 = :year2,
        college = :college,
        year3 = :year3,
        graduate = :graduate,
        year4 = :year4,
        skill = :skill,
        literate = :literate,
        yearuse = :yearuse,
        monthuse = :monthuse,
        rate = :rate,
        employed = :employed,
        company = :company,
        position = :position,
        char1 = :char1,
        address1 = :address1,
        char2 = :char2,
        address2 = :address2,
        emergency = :emergency,
        emergencynumber = :emergencynumber,
        post = :post';

    if ($filepath){
        $sql .= ',Picture = :Picture'; 
    }
    
    $sql .= 'WHERE id = :id';

    $stmt = $pdo->prepare($sql);


    $params = [
        'name' => $name,
        'number' => $number,
        'address' => $address,
        'birthday' => $birthday,
        'age' => $age,
        'gender' => $gender,
        'height' => $height,
        'weight' => $weight,
        'status' => $status,
        'spouse' => $spouse,
        'children' => $children,
        'religion' => $religion,
        'pastor' => $pastor,
        'elementary' => $elementary,
        'year1' => $year1,
        'hs' => $hs,
        'year2' => $year2,
        'college' => $college,
        'year3' => $year3,
        'graduate' => $graduate,
        'year4' => $year4,
        'skill' => $skill,
        'literate' => $literate,
        'yearuse' => $yearuse,
        'monthuse' => $monthuse,
        'rate' => $rate,
        'employed' => $employed,
        'company' => $company,
        'position' => $positon,
        'char1' => $char1,
        'address1' => $address1,
        'char2' => $char2,
        'address2' => $address2,
        'emergency' => $emergency,
        'emergencynumber' => $emergencynumber,
        'post' => $post,
        'id' => $id,
    ];


    if ($filepath){
        $params['Picture'] = $filepath; 
    }
    $stmt->execute($params);

} else {
    // create new record

    $stmt = $pdo->prepare('INSERT INTO Application( name, number, address, birthday, age,
    gender, height, weight, status, spouse, children, religion, pastor, elementary, year1, 
    hs, year2, college, year3, graduate, year4, skill, literate, yearuse, monthuse, rate, employed, company, position, 
    char1, address1, char2, address2, emergency, emergencynumber, Picture 
    ) VALUES (
        ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?
    )');
    $return = $stmt->execute([ $name, $number, $address, $birthday, $age, 
    $gender, $height, $weight, $status, $spouse, $children, $religion, $pastor, $elementary, $year1, 
    $hs, $year2, $college, $year3, $graduate, $year4, $skill, $literate, $yearuse, $monthuse, $rate, $employed, $company, $positon, 
    $char1, $address1, $char2, $address2, $emergency, $emergencynumber, $filepath]);
}

    
    print_r($stmt->errorinfo());





    echo '<p>I. PERSONAL DATA </p><br><br>';
    echo ' Name is : ' . $name . '<br><br>';
    echo ' Cellphone Number is : ' . $number . '<br><br>';
    echo ' Address is : ' . $address . '<br><br>';
    echo ' Birthday is : ' . $birthday . '<br><br>';
    echo ' Age is : ' . $age . '<br><br>';
    echo ' Gender is : ' . $gender . '<br><br>';
    echo ' Height is : ' . $height . '<br><br>';
    echo ' Weight is : ' . $weight . '<br><br>';
    echo ' Civil status is : ' . $status . '<br><br>';
    echo ' Name of is spouse is : ' . $spouse . '<br><br>';
    echo ' Number of Children : ' . $children . '<br><br>';
    echo ' Religion is : ' . $religion . '<br><br>';
    echo ' Name of Pastor is : ' . $pastor . '<br><br> <br><br>';
    
    echo '<p>II. EDUCATIONAL BACKGROUND </p><br><br> <br><br> ';
    echo ' Elementary School is : ' . $elementary . '  Year : ' . $year1 . '<br><br>';
    echo ' High School is : ' . $hs . '  Year : ' . $year2 . '<br><br>';
    echo ' College School is : ' . $college . '  Year : ' . $year3 . '<br><br>';
    echo ' Post Graduate is : ' . $graduate . ' Year : ' . $year4 . '<br><br>';
    echo ' Special Skills are : ' . $skill . '<br><br><br><br>';

    echo '<p>III. QUESTIONS  </p><br><br>';
    echo ' Computer literate : ' . $literate . '<br><br>';
    echo ' Years and Months using Computer : ' . $yearuse . ' years and ' . $monthuse . ' months<br><br>';
    echo ' Computer skill rate is : ' . $rate . '<br><br>';
    echo ' Employed : ' . $employed . '<br><br>';
    echo ' (If yes) Name of Company is : ' . $company . '<br><br>';
    echo ' Position is : ' . $positon . '<br><br><br><br>';

    echo '<p>IV. CHARACTER REFERENCE </p><br><br>';
    echo ' Name 1 is : ' . $char1 . '<br><br>';
    echo ' Address is : ' . $address1 . '<br><br>';
    echo ' Name 2 is : ' . $char2 . '<br><br>';
    echo ' Address is : ' . $address2 . '<br><br><br><br>';

    echo '<p> V. Person to be contacted in case of emergency </p><br><br>';
    echo ' Name : ' . $emergency . '<br><br>';
    echo ' Contact Number : ' . $emergencynumber . '<br><br>';


    ?>


    
    <a class="applist" href="application_list.php">Go to Application list</a>
    
</body>
</html>
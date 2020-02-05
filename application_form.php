<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Form</title>
    <STYLE> 
    header{
        text-align: center;
    }


    </STYLE>
</head>
<body>

    <?php
    $id= $_GET['id'];

    if ($id){
        
    $pdo = new PDO('mysql:host=localhost;dbname=Application_Form', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('SELECT * FROM Application WHERE id = ?');
    $stmt->execute([ $id ]);
    $item = $stmt->fetch();
    } else{
        $item =[];
    }
        ?>





<div class="border">    
    <header>
        <div>
            <h1>IT TRAINING CENTER</h1>
        </div>
        <div>
            APPLICATION FORM
        </div>
    </header>
<br><br>
<hr>
<br>
    <form method="POST" action="application_action.php">
    <input type="hidden" name="id" value="<?=$item['id']?>" />
        <p class="bold">I. PERSONAL DATA :</p><br>
        <label>Picture update :  </label>
        <input type="file"><br><br>
        <label for="">Name :</label>
        <input type="text" name="name" id="name" placeholder="Fullname" maxlength="40" value="<?=$item['name']?>"><br><br>
        <label for="">Cellphone Number :</label>
        <input type="number" name="number" id="number" maxlength="12" value="<?=$item['number']?>"><br><br>
        <label for="">Address :</label>
        <input type="text" name="address" id="address" maxlength="60" value="<?=$item['address']?>"><br><br>
        <label for="">Birthday :</label>
        <input type="date" name="birthday" id="birthday" value="<?=$item['birthday']?>">
        <label for="">Age</label>
        <input type="number" name="age" id="age" value="<?=$item['age']?>"><br><br>
        <label for="">Gender : </label>
        Man <input type="radio" name="gender" id="gender" value="man" <?php if ($item['gender'] == 'man') { ?>checked<?php } ?>> Woman <input type="radio" name="gender" id="gender" value="woman" <?php if ($item['gender'] == 'woman') { ?>checked<?php } ?>><br><br> 
        <label for="">Height : </label>
        <input type="number" name="height" id="height" placeholder="Cm" value="<?=$item['height']?>">   
        <label for="">  Weight</label>
        <input type="number" name="weight" id="weight" placeholder="Kg" value="<?=$item['weight']?>"><br><br>
        <label for="">Civil Status :</label>
        <input type="text" name="status" id="status" placeholder="Citizen" value="<?=$item['status']?>"><br><br>
        <label for="">Name of Spouse (If Married) :</label>
        <input type="text" name="spouse" id="spouse" value="<?=$item['spouse']?>"><br><br>
        <label for="">Number of Children (If Have) :</label>
        <input type="number" name="children" id="children" value="<?=$item['children']?>"><br><br>
        <label for="">Religious Affiliation :</label>
        <input type="text" name="religion" id="religion" value="<?=$item['religion']?>"><br><br>
        <label for="">Name of Pastor :</label>
        <input type="text" name="pastor" id="pastor" value="<?=$item['paster']?>">

        <hr>
        <p class="bold">II. EDUCATIONAL BACKGROUND :</p>
        <label for="">Elementary :</label>
        <input type="text" name="elementary" id="elementary" value="<?=$item['elementary']?>">
        <label for="">Year :</label>
        <input type="number" name="year1" id="year1" value="<?=$item['year1']?>"><br><br>

        <label for="">High School :</label>
        <input type="text" name="hs" id="hs" value="<?=$item['hs']?>">
        <label for="">Year :</label>
        <input type="number" name="year2" id="year2" value="<?=$item['year2']?>"><br><br>

        <label for="">College :</label>
        <input type="text" name="college" id="college" value="<?=$item['college']?>">
        <label for="">Year :</label>
        <input type="number" name="year3" id="year3" value="<?=$item['year3']?>"><br><br>

        <label for="">Post Graduate :</label>
        <input type="text" name="graduate" id="graduate" value="<?=$item['graduate']?>">
        <label for="">Year :</label>
        <input type="number" name="year4" id="year4" value="<?=$item['year4']?>"><br><br>
        <label for="">Special Skills :</label>
        <textarea name="skill" id="skill" value="<?=$item['skill']?>"></textarea>

        <hr>

        <p class="bold">III. QUESTIONS</p>
        <label for="">1. Are you a computer literate?  </label>
        Yes <input type="radio" name="literate" id="literate" value="yes"<?php if ($item['literate'] == 'yes') { ?>checked<?php } ?>> No <input type="radio" name="literate" id="literate" value="no"<?php if ($item['literat'] == 'no') { ?>checked<?php } ?>><br><br>
        <label for="">2. How long have you been using the computer? </label><br><br>
        <input type="number" name="yearuse" id="yearuse" value="<?=$item['yearuse']?>">Year  <input type="number" name="monthuse" id="monthuse" value="<?=$item['monthuse']?>"> Months <br><br>
        <label for="">3. If you rate your computer skills, Kindly check :</label>
        (1)Beginner user <input type="radio" name="rate" id="rate" value="1" <?php if ($item['rate'] == '1') { ?>checked<?php } ?>> (2)Advance user <input type="radio" name="rate" id="rate" value="2" <?php if ($item['rate'] == '2') { ?>checked<?php } ?>> (3) Expert user <input type="radio" name="rate" id="rate" value="3" <?php if ($item['rate'] == '3') { ?>checked<?php } ?>><br><br>
        <label for="">4. Are you currently employed?</label>
         Yes<input type="radio" name="employed" id="employed" value="yes" <?php if ($item['employed'] == 'yes') { ?>checked<?php } ?>> No<input type="radio" name="employed" id="employed" value="no" <?php if ($item['employed'] == 'no') { ?>checked<?php } ?>><br><br>
         <label for="">5. (4 - If yes) Name of Company?</label><br>
         Company <input type="text" name="company" id="company" placeholder="Company Name" value="<?=$item['company']?>">Position <input type="text" name="position" id="position" placeholder="Position" value="<?=$item['position']?>"><br>
         
         <hr>

         <p class="bold">IV. CHARACTER REFERENCES :</p>
        <label for="">Name 1 :</label>
        <input type="text" name="char1" id="char1" placeholder="Full Name" value="<?=$item['char1']?>"><br><br>
        <label for="">Address :</label>
        <input type="text" name="address1" id="address1" value="<?=$item['address1']?>"><br><br>
        <label for="">Name 2 :</label>
        <input type="text" name="char2" id="char2" placeholder="Full Name" value="<?=$item['char2']?>"><br><br>
        <label for="">Address :</label>
        <input type="text" name="address2" id="address2" value="<?=$item['address2']?>"><br><br>

        <hr>

        <p clas="bold">Person to be contacted in case of emergency :</p>

        <Label>Name: </Label>
        <input type="text" name="emergency" id="emergency" placeholder="Full Name" value="<?=$item['emergency']?>">
        <label for="">Contact Number :</label>
        <input type="text" name="emergencynumber" id="emergencynumber" value="<?=$item['emergencynumber']?>">

        <br><br>
        
        <div class="submit">
        <input type="submit" value="Save Data">
        </div>
    </form>
</div>

    
</body>
</html>
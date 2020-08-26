<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Lemonada|Roboto+Slab&display=swap" rel="stylesheet">
    <STYLE> 
    .border{
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: auto;
        margin-right: auto;
        height: 80%;
        width: 70%;
        border: solid black;
        box-shadow: 0px 0px 10px 2px;

        background-image:url("../image/pred.jpg");
        
    }
    form{
        margin-left: 50px;
        color: powderblue;
    }
    
    .head{
        margin-right: auto;
        margin-left: auto;
        margin-top: -8px;
        margin-bottom: -8px;
        width: 90%;
        height: 150px;
        text-align: center;
        /* box-shadow: 0px 0px 10px 2px grey;  */
    }
    h4{
        margin-bottom: 30px;
        color:firebrick;
    }
    
    h1{
        margin-top: 20px;
        color: maroon;
        text-shadow: 1px .5px lightcyan;
    }
    p{
        margin-top: 20px;
        color: grey;
    }
    .bold{
        color: lavenderblush;
        font-family: 'Roboto Slab', serif;
    }
    .submit{
      margin-left:630px;
      margin-bottom: 30px;
    }
    .submit input{
        background-color: maroon;
        padding: 5px 10px 5px 10px;
        border: .3px solid grey ;
      cursor: pointer;
      box-shadow: 0px 0px 3px 1px grey;
      font-family: 'Lemonada', cursive;
      font-size: 15px;
    }
    .submit input:hover{
        color: mistyrose;
        box-shadow: 0px 0px 3px 1px mistyrose;
    }
    .submit input:active{
        color: black;
        box-shadow: 0px 0px 3px 1px grey;
    }
  /*   {
    form{
        display: inline-block;
        position: relative;
    }
    label{
        display: inline-block;
    }
  */

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
            <div class="head">
                <div>
                    <h4>Join Us!</h4>
                </div>
                <div>
                    <h1>ITTC TRAINING CENTER</h1>
                </div>
                <div>
                   <p> APPLICATION FORM</p>
                </div>   
            </div>
    
    <hr>
    
        <div class="form">
            <form method="POST" action="application_action.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$item['id']?>" />
                <p class="bold"><b>I. PERSONAL DATA :<b></p><br>
                <label>Picture update :  </label>
                <input type="file" name="img_select" required ><br><br>
                <label for="">Name :</label>
                <input type="text" name="name" id="name" placeholder="Fullname" maxlength="40" value="<?=$item['name']?>" required><br><br>
                <label for="">Cellphone Number :</label>
                <input type="number" name="number" id="number" maxlength="12" value="<?=$item['number']?>"><br><br>
                <label for="">Address :</label>
                <input type="text" name="address" id="address" maxlength="60" size="50" value="<?=$item['address']?>"><br><br>
                <label for="">Birthday :</label>
                <input type="date" name="birthday" id="birthday" value="<?=$item['birthday']?>">&nbsp;&nbsp;&gt;&lt;&quot;&#13;
                <label for="">Age</label>
                <input type="number" name="age" id="age" value="<?=$item['age']?>" min="18" max="120">&nbsp;yrs old<br><br>
                <label for="">Gender : </label>
                Man <input type="radio" name="gender" id="gender" value="man" <?php if ($item['gender'] == 'man') { ?>checked<?php } ?>> Woman <input type="radio" name="gender" id="gender" value="woman" <?php if ($item['gender'] == 'woman') { ?>checked<?php } ?>><br><br> 
                <label for="">Height : </label>
                <input type="number" name="height" id="height" placeholder="Cm" value="<?=$item['height']?>">&nbsp;Cm&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">  Weight</label>
                <input type="number" name="weight" id="weight" placeholder="Kg" value="<?=$item['weight']?>">&nbsp;Kg&nbsp;&nbsp;<br><br>
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
                <input type="number" name="yearuse" id="yearuse" value="<?=$item['yearuse']?>" maxlength="20" size="20">Year  <input type="number" name="monthuse" id="monthuse" value="<?=$item['monthuse']?>" maxlength="20" size="20"> Months <br><br>
                <label for="">3. If you rate your computer skills, Kindly check :</label>
                (1)Beginner user <input type="radio" name="rate" id="rate" value="1" <?php if ($item['rate'] == '1') { ?>checked<?php } ?>> (2)Advance user <input type="radio" name="rate" id="rate" value="2" <?php if ($item['rate'] == '2') { ?>checked<?php } ?>> (3) Expert user <input type="radio" name="rate" id="rate" value="3" <?php if ($item['rate'] == '3') { ?>checked<?php } ?>><br><br>
                <label for="">4. Are you currently employed?</label>
                Yes<input type="radio" name="employed" id="employed" value="yes" <?php if ($item['employed'] == 'yes') { ?>checked<?php } ?>> No<input type="radio" name="employed" id="employed" value="no" <?php if ($item['employed'] == 'no') { ?>checked<?php } ?>><br><br>
                <label for="">5. (4 - If yes) Name of Company?</label><br><br>
                Company <input type="text" name="company" id="company" placeholder="Company Name" value="<?=$item['company']?>">&nbsp;&nbsp;
                Position <input type="text" name="position" id="position" placeholder="Position" value="<?=$item['position']?>"><br>
                
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

                <p class="bold">V. Person to be contacted in case of emergency :</p>

                <Label>Name: </Label>
                <input type="text" name="emergency" id="emergency" placeholder="Full Name" value="<?=$item['emergency']?>">
                <label for="">Contact Number :</label>&nbsp;&nbsp;
                <input type="text" name="emergencynumber" id="emergencynumber" value="<?=$item['emergencynumber']?>">
        </div>
        <br>
            
                <div class="submit">
                <input type="submit" value="Save Data" required>
                </div>
        </form>
    </div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php if</title>
</head>
<body>
    <?php
        // if(condition){
        //
        // }
        $roll = rand(1,10);
        echo "random number is : " . $roll . "<br>";

        if($roll < 2){
            echo " you win <br>
             Thank you!";
        }else{
            echo " Sorry, you lose! <br> try again! <br>";     
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Assinment</title>
</head>
<body>
    <h2>Project Chapter2</h2>
    <?php 
    if ( ! isset($_POST['submit'])){
    ?> 
    <form action="" method="post">
        <label for="">Enter your age</label>
        <input type="text" name="age" id="">
        <input type="submit" value="Submit" name="submit">
    </form>  
    <?php
    }
    else{   
        $age = $_POST['age'];
        if ($age <= 9){ 
            echo "Youe are in the red tent";
        }
        elseif ($age> 9 && $age <= 12){ 
            echo "Youe are in the yellow tent";
        }
        elseif ($age> 13 && $age <= 15){ 
            echo "Youe are in the green tent";
        }
        else{
            echo "You are blue tent";
        }
    }
    ?>
   
</body>
</html>
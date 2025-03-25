<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo"<h2> This program will tell you leap year or not</h2>";
        if (!isset($_POST["subm"])) {
    ?>
            <form action="" method="post">
            <label for="">Enter a Year</label>
            <input type="text" name="year" id="">
            <input type="submit" value="submit" name="submit">
            </form>
    <?php  }
        else{
            $year = $_POST["year"];
            if ($year%4!=0 || $year%100== 0) {
                echo "This year is not a leap year";
            }  
            else{
                echo "This year is a leap year";
            }
        }
    ?>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Project 3-1: Odd/Even Number Tester</h2>
<?php
    if (!isset($_POST['submit'])) {
?>
 <form method="post">
 Enter value: <br/>
 <input type="text" name="today" size="3" />
 <p>
 <input type="submit" name="submit" value="Submit" />
 </form>
<?php
 // if form submitted
 // process form input
    }
 else {

    // handle multiple possibilities
    // define a different message for each day
    $today = $_POST['today'];
    if ($today == 'Monday') {
     echo 'Monday\'s child is fair of face.';
    } elseif ($today == 'Tuesday') {
     echo 'Tuesday\'s child is full of grace.';
    } elseif ($today == 'Wednesday') {
     echo 'Wednesday\'s child is full of woe.';
    } elseif ($today == 'Thursday') {
     echo 'Thursday\'s child has far to go.';
    } elseif ($today == 'Friday') {
     echo 'Friday\'s child is loving and giving.';
    } elseif ($today == 'Saturday') {
     echo 'Saturday\'s child works hard for a living.';
    } else {
     echo 'No information available for that day';
    }
    
    }
?>
</body>
</html>
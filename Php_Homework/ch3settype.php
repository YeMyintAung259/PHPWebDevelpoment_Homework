<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    $testVar = 8.23;
    echo $testVar,"<br>";
    settype($testVar,"string");
    echo $testVar,"<br>";
    settype($testVar,"integer");
    echo $testVar,"<br>";
    settype($testVar,"float");
    echo $testVar,"<br>";
    settype($testVar,"boolean");
    echo $testVar,"<br>";
?>
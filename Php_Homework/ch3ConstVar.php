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
    $rate = "1.52";
    $USDollar ="20.00";
    $CADollar=$rate*$USDollar;
    define("RATE",1.52);
    echo "<br>Rate Varable", RATE;
    $CA_Dollar= $USDollar*RATE;
    echo "<br>Candian Dollar= ", $CA_Dollar;
?>
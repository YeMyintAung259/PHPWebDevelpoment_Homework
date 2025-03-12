<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Project 2-1: USD/EUR Currency Conversion</h2>     
<?php         
define ('EXCHANGE_RATE', 0.70); 
$dollars = 150; 
 
$euros = $dollars * EXCHANGE_RATE;     
echo "$dollars USD is equivalent to: $euros EUR";     
?> 
</body>
</html>
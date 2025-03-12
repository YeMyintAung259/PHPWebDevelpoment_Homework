<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Success!</h2> 
<?php     
$type = $_POST['selType'];     
$color = $_POST['txtColor']; 
 
 echo "Your $color $type is ready. Safe driving!";     
?>
</body>
</html>
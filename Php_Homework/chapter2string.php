<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// extract substring 
// output: 'come' 
$str = 'Welcome to nowhere'; 
echo substr($str, 3, 4); 
?>

<?php 
// extract substring 
// output: 'come here' 
$str = 'Welcome to nowhere'; 
echo substr($str, 3, 5) . substr($str, -4, 4); 
?>
<?php 
// replace '@' with 'at' 
// output: 'john at domain.net' 
$str = 'john@domain.net'; 
echo str_replace('@', ' at ', $str); 
?>
 <?php 
// remove leading and trailing whitespace 
// output 'a b   c' 
$str = '  a b   c   '; 
echo trim($str); 
?>
</body>
</html>
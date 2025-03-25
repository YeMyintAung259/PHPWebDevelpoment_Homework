<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// convert to binary 
// output: 1000 
echo decbin(8); 
// convert to hexadecimal 
// output: 8 
echo dechex(8); 
// convert to octal 
// output: 10 
echo decoct(8); 
// convert from octal 
// output: 8 
echo octdec(10); 
// convert from hexadecimal 
// output: 101 
echo hexdec(65); 
// convert from binary 
// output: 8 
echo bindec(1000); 
?>
 <?php 
// format as decimal number 
// output: 00065 
printf("%05d", 65); 
// format as floating-point number 
// output: 00239.000 
printf("%09.3f", 239); 
// format as octal number 
// output:   10 
printf("%4o", 8); 
// format number 
// incorporate into string 
// output: 'I see 8 apples and 26.00 oranges' 
printf("I see %4d apples and %4.2f oranges", 8, 26); 
?>
</body>
</html>
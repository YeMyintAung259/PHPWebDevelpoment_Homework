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
    $string = "Line 1 \n\t Line 2";
    echo $string;
    $string1 = " String in \n\t double qutoes;";
    echo $string1;
    $string1 = ' String in \n\t single qutoes;';
    echo $string1;

    $num =10;
    $string2="There are '$num' people in line ";
    $string3='There are "$num" people in line ';
    // echo $string2" \n "$string3;

    $string4="The variable name is \$var <br>";
    echo $string4;
    $string5 = "where is Sally\'s house. <br>";
    echo $string5;

    $txt = "hello world!";
    $txt1 = "What a nice day!";
    echo $txt." ".$txt1;

    echo "Sally has $num chldren";

?>
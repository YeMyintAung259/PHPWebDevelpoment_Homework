<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $x = 89;
        define ('ABC', $x+1);
        $x += ABC;
        echo $x;
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=array(1,2,3,4,5);
    $b=array(6,7,8,9,10);
    print_r($a);
    echo "<br>";
    print_r($b);
    $marge=array_merge($a,$b);
    echo "<br>";
    print_r($marge);
    ?>
</body>
</html>
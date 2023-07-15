<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a= "welcome to php functions";
    echo $a;
    echo "<br>";
    echo strlen($a);
    echo "<br>";
    echo strtoupper($a);
    echo "<br>";
    echo ord($a);
    echo "<br>";
    echo str_replace("o","@",$a);

    ?>
</body>
</html>
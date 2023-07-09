<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "hello"."<br>";
    echo "How are you?"."<br>";
    $a=10;
    $b=5;
    $add =$a + $b;
    echo "addition is:".$add."<br>";
    $sub =$a-$b;
    echo "substraction is :".$sub."<br>";
    $mul=$a*$b;
    echo "multiplication is:".$mul."<br>";
    $div=$a/$b;
    echo "division is:".$div."<br>";
    echo"value of a is:".$a."<br>";
    $c= "123.abc";
    echo "type of a is:".gettype($c)."<br>";
    settype($c,"int");
    echo "After conversion type of a is:".gettype($c)."<br>";
    ?>
</body>
</html>
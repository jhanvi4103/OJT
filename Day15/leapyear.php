<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $year=2016;
    if((($year%4==0) && ($year%100!=0) || ($year%400==0))){
        echo "$year is a leap year";
    }
    else{
        echo "$year is not a leap year";
    }
    ?>
</body>
</html>

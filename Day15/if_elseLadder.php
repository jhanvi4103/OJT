<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $marks = 67;
    if($marks<50){
        echo "fail"."<br>";
    }
    else if($marks>=50 && $marks<60){
        echo "D grade"."<br>";
    }
    else if($marks>=60 && $marks<70){
        echo "C grade"."<br>";
    }
    else if($marks>=70 && $marks<80){
        echo "B grade"."<br>";

    }
    else if($marks>=80 && $marks<90){
        echo "A grade"."<br>";
    }
    else if($marks>=90 && $marks<100){
        echo "A+ grade"."<br>";
    }
    else{
        echo "Invalid"."<btr>";
    } 
    ?>
</body>
</html>
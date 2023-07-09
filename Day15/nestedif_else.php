<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=15;
    $b=45;
    $c=10;
    echo($a>$b)?("<br>".$a."is grater"):
    ("<br>".$b."is grater");
    // if else:
    if ($a>$b){
        echo "<br>".$a."is grater";
    }
    else{
        echo "<br>".$b."is grater";
    }
    // nested if else:
        if($a>$b){
            if($a>$c)
            {
                echo "<br>".$a."is grater";
            }else{
                echo "<br>".$c."is grater";
            }
        }else{
            if($b>$c){
                echo "<br>".$b."is grater";
            }
            else{
                echo "<br>".$c."is grater";
            }
        }
        
    ?>
</body>
</html>
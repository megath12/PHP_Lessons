<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
/*     $x = 12;
    $y = 24;
    echo "Is X bigger than Y? ";
    if($x>$y){
        echo "true";
    }
    else if($x==$y){
        echo "equals";
    }
    else{
        echo "false";
    } */

    $x=-22;

    switch ($x) {
        case '1':
            echo "number 1";
            break;
        case '2':
            echo "number 2";
            break;
        case '3':
            echo "number 3";
            break;
        case '0':
            echo "number 0";
            break;        
        default:
            echo "negative number";
            break;
    }


    ?>

</body>
</html>
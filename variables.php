<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $x=42;  //global scope
    function num(){
        $y=23;  // global Scope
        echo $GLOBALS['x'];
    }
    num();

    ?>


</body>
</html>
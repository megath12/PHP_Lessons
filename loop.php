
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>

    <?php
    
    $x=0;
    while($x<=5){
        echo $x;
        $x++;
    }
    echo " Fin while <br>".$x;


    $e=0;
    do{
        echo $e;
        $e++;
    }
    while($e<=5);
    echo " Fin do while".$e;
    echo "<br>";

    for ($i = 0;$i <=5 ;$i++) {
        echo " Hola".$i;
    }
    echo"<br>";

    $nombres = array("major","league","hacking","time","traveller","ooo","sald","aurora");
    foreach ($nombres as $key) {
        echo $key." ";
    }
    ?>
</body>
</html>

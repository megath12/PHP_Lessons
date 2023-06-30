<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET">
    <input type="text" name="person">
    <button>Escribir</button>
</form>


    <?php
        //obtengo el valor de person en el form
        /* como una variable*/
        $nombre = $_GET['person'];
        echo $nombre." que gusto verte";
    ?>


</body>
</html>


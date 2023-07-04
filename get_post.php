<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="GET">
        <input type="hidden" name="name" value="dani">
        <button type="submit">Submit</button>
    </form>
    

    <?php
        $nom = $_GET['name'];
        echo $nom;
    ?>

</body>
</html>
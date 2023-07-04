<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <br>
    <h2>Calculator</h2>
    <br>
    <form action="" method="get">
        <label for="">Number</label>
        <input type="text" name="num1" id="">
        <br> <br>
        <label for="">Number</label>
        <input type="text" name="num2" id="">
        <br> <br>
        <select name="operator" id="">
            <option value="1">None</option>
            <option value="2">Add</option>
            <option value="3">Substract</option>
            <option value="4">Division</option>
            <option value="5">Multiply</option>
            <option value="6">Power</option>
            <option value="7">Rem</option>
        </select>
        <button type="submit" name="submit">Calculate</button>
    </form>
    <h4>Result</h4>
    
    <?php
        if(isset($_GET['submit'])){
            $n1 = $_GET['num1'];
            $n2 = $_GET['num2'];
            $op = $_GET['operator'];
            switch ($op) {
                case 2:
                    echo $n1+$n2;
                    break;
                case 3:
                    echo $n1-$n2;
                    break;
                case 4:
                    echo $n1/$n2;
                    break;
                case 5:
                    echo $n1*$n2;
                    break;
                case 6:
                    echo $n1**$n2;
                    break;
                case 7:
                    echo $n1%$n2;
                    break;
                default:
                    echo "Escribe una operación";
            }
        }
    
    ?>

</body>
</html>
<?php
    function sum($num) {
        $sum = 0;
        for ($i = 0; $i < strlen($num); $i++){
            $sum += $num[$i];
        }
        return $sum;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>
        <p>Insira o numero para ter os digitos somados: </p>
        <input type="number" name="num"> <br>
        <button type="submit" name="submit" value="submit"> Calcular </button>
</form>
<p> O resultado é: </p>
<?php

    if(isset($_GET['num'])){
        $num = $_GET['num'];
        echo sum($num);
    }

?>

</body>
</html>
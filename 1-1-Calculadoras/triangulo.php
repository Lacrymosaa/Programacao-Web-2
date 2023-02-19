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
        <p>Insira a base do triangulo: </p>
        <input type="number" name="base"> <br>
        <p>Insira a altura do triangulo: </p>
        <input type="number" name="altura"> <br>
        <button type="submit" name="submit" value="submit"> Calcular </button>
</form>
<p> O resultado é: </p>
<?php

    if(isset($_GET['submit'])){
        $base = $_GET['base'];
        $altura = $_GET['altura'];
        echo $base * $altura / 2;
    }

?>

</body>
</html>
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
        <p>Insira o raio do circulo: </p>
        <input type="number" name="raio"> <br>
        <button type="submit" name="submit" value="submit"> Calcular </button>
</form>
<p> O resultado é: </p>
<?php

    if(isset($_GET['submit'])){
        $raio = $_GET['raio'];
        $pi = 3.1415926535898;
        echo $pi * ($raio * $raio);
    }

?>

</body>
</html>
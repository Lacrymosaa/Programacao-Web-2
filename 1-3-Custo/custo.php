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
        <p>Insira o preço de venda: </p>
        <input type="number" name="venda"> <br>
        <p>Insira a % de lucro: </p>
        <input type="number" name="perc"> <br>
        <button type="submit" name="submit" value="submit"> Calcular </button>
</form>
<p> O resultado preço de custo é: </p>
<?php

    if(isset($_GET['submit'])){
        $venda = $_GET['venda'];
        $perc = $_GET['perc'];
        echo $venda - ($venda * $perc / 100);
    }

?>

</body>
</html>
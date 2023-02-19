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
        <p>Insira o lado do quadrado: </p>
        <input type="number" name="lado"> <br>
        <button type="submit" name="submit" value="submit"> Calcular </button>
</form>
<p> O resultado é: </p>
<?php

    if(isset($_GET['submit'])){
        $lado = $_GET['lado'];
        echo $lado * $lado;
    }

?>

</body>
</html>
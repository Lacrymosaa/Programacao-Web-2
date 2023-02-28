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
        <p>Insira o valor do emprestimo: </p>
        <input type="number" name="emprestimo"> <br>
        <p>Insira os juros: </p>
        <input type="number" step="0.01" name="juros"> <br>
        <p>Insira o número de parcelas: </p>
        <input type="number" name="parcelas"> <br>
        <button type="submit" name="submit" value="submit"> Calcular </button>
</form>
<p> A parcela mensal é: </p>
<?php

    if(isset($_GET['submit'])){
        $valoremprestimo = $_GET['emprestimo'];
        $juros = $_GET['juros'];
        $qtParcela = $_GET['parcelas'];
        $i = $juros / 100;
        $parcela = $valoremprestimo * ((((1 + $i) ** $qtParcela) * $i) / (((1 + $i) ** $qtParcela) - 1));
        echo $parcela;
    }

?>

</body>
</html>
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
        <p>Insira o peso do peixe: </p>
        <input type="number" name="peso"> <br>
        <button type="submit" name="submit" value="submit"> Calcular </button>
</form>
<p> É necessário pagar: </p>
<?php

    if(isset($_GET['submit'])){
        $peso = $_GET['peso'];
        $excesso = 0;
        $pagamento = 0;
        $centavos = 0.80;
        if($peso <= 50){
            echo('Sem multa');
        } else if($peso >=55 && $peso < 60){
            $peso = $peso - 55;
            $excesso = $peso * $centavos;
            $pagamento = 8 + $excesso;   
            echo $pagamento;
        } else{
            $excesso = $peso - 50;
            $pagamento = $excesso * $centavos;
            echo $pagamento;
        }
    }

?>

</body>
</html>
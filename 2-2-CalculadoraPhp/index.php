<?php
require_once('calculadora.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="index.php">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1"><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2"><br>

        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="">Selecione uma operação</option>
            <option value="soma">Soma</option>
            <option value="subtrai">Subtração</option>
            <option value="multiplica">Multiplicação</option>
            <option value="divide">Divisão</option>
            <option value="potencia">Potência</option>
            <option value="porcentagem">Porcentagem</option>
            <option value="raiz">Raiz Quadrada</option>
            <option value="zerar">Zerar Resultado</option>
            <option value="desfaz">Desfazer Última Operação</option>
        </select><br>

        <input type="submit" name="calcular" value="Calcular">
<?php
    if (isset($_POST['calcular']) && isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['operacao'])) {
        if (isset($_POST['calcular'])) {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $operacao = $_POST['operacao'];
    
            $calculadora = new Calculadora();
    
            switch ($operacao) {
                case 'soma':
                    $calculadora->soma($valor1, $valor2);
                    break;
                case 'subtrai':
                    $calculadora->subtrai($valor1, $valor2);
                    break;
                case 'multiplica':
                    $calculadora->multiplica($valor1, $valor2);
                    break;
                case 'divide':
                    $calculadora->divide($valor1, $valor2);
                    break;
                case 'potencia':
                    $calculadora->potencia($valor1, $valor2);
                    break;
                case 'porcentagem':
                    $calculadora->porcentagem($valor1);
                    break;
                case 'raiz':
                    $calculadora->raiz($valor1);
                    break;
                case 'zerar':
                    $calculadora->zerar();
                    break;
                case 'desfaz':
                    $calculadora->desfaz();
                    break;
                default:
                    echo 'Operação inválida!';
                    break;
            }    
            ?> <br>
            <?php
            echo 'Resultado: ' . $calculadora->getRes();
            ?> <br>
            <?php
            // Mostra raiz quadrada
            if ($operacao == 'raiz') {
                echo 'Raiz quadrada: ' . $calculadora->getRes();
            }

            // Mostra último resultado
            if ($operacao == 'desfaz') {
                echo 'Último resultado: ' . $calculadora->desfaz();
            }

        }
      }
      
   

?>

    </form>
</body>
</html>
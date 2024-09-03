<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bootstrap demo</title>



</head>

<body>
    <h1>Resposta do Exercicio 1</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $valor = $_POST['valor'];
            $qtd_caracteres = strlen($valor);
            $maiusculo = strtoupper($valor);
            $minusculo = strtolower($valor);

            echo "<p>Sua palavra em maiusculo e: $maiusculo</p>";
            echo "<p>Sua palavra em minusculo e: $minusculo</p>";
            echo "<p>Quantidade de caracteres $qtd_caracteres</p>";


            $ano = 2024;
            $mes = 6;
            $dia = 13;

            if(checkdate($mes, $dia, $ano)){
                echo "<p>data valida</p>";
            }
            else {
                echo "<p>data invalida</p>";

            }


            $menor = min(1, 2, 3, 4, 5);
            echo "<p>Menor valor: $menor</p>";

            $maior = max(1, 2, 3, 4, 5);
            echo "<p>Menor valor: $maior</p>";

            $aleatorio = rand(1, 100);
            echo "<p>seu numero aleatorio foi: $aleatorio</p>";

            $numero = 1568.54;
            $moeda = number_format($numero, 2, ",", ".");
            echo "<p>sua moeda formatada e $moeda</p>";





        } catch (Exception $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    ?>



</body>

</html>
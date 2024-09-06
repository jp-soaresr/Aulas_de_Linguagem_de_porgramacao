<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bootstrap demo</title>



</head>

<body>
    <h1>Resposta do Exercicio 4</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $valor1 = $_POST['valor1'];


            
            if ($valor1 >= 100) {
                $valor_desconto = $valor1 * (15 / 100);
                $desconto_final = $valor1 - $valor_desconto;

                echo "<p> Seu Produto tem direito a um desocnto, sendo que seu novo valor e: $desconto_final</p>";
            } else
                echo "<p>Voce nao tem deconto e seu produto continua custando: $valor1</p>";
        } catch (Exception $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    ?>



</body>

</html>
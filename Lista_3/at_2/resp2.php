<?php 
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bootstrap demo</title>



</head>

<body>
    <h1>Resposta do Exercicio 2</h1>

    <?php
    function nomesMai(string $palavra): array{
        return [
            'maiuscula' => strtoupper($palavra),
            'minuscula' => strtolower($palavra)
        ];
    }
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $palavra = $_POST['palavra'];

            $resultado = nomesMai($palavra);

            echo "<p>Sua palavra em maiúsculas é: " . $resultado['maiuscula'] . "</p>"; 
            echo "<p>Sua palavra em minúsculas é: " . $resultado['minuscula'] . "</p>";

        } catch (Exception $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    ?>



</body>

</html>
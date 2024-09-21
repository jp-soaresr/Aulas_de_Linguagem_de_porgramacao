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
    <h1>Resposta do Exercicio 7</h1>

    <?php

    function diferenca_data($dataInicio, $dataFim)
    {
        if ($dataInicio && $dataFim) {
            $diferenca = $dataInicio->diff($dataFim);
            return $diferenca->days;
        } else {
            return false;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $dataInicio = DateTime::createFromFormat('d/m/Y', $_POST['dataInicio']);
            $dataFim = DateTime::createFromFormat('d/m/Y', $_POST['dataFim']);


            $diferenca = diferenca_data($dataInicio, $dataFim);

            if ($diferenca !== false) {
                echo ("O tempo de diferença entre a data: " . $dataInicio->format('d/m/Y') . " e a data: " . $dataFim->format('d/m/Y') . " é de: $diferenca dias");
            } else {
                echo ("Sua data é inválida.");
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    ?>
</body>

</html>

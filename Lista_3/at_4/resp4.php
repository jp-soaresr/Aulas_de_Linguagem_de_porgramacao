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
    <h1>Resposta do Exercicio 3</h1>

    <?php
    
    function formatarData(int $valor1, int $valor2, int $valor3): string {
        return sprintf('%02d/%02d/%04d', $valor1, $valor2, $valor3);
    }

    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $valor3 = $_POST['valor3'];

            

        } catch (Exception $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    ?>



</body>

</html>
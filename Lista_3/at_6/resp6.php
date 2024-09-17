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
    <h1>Resposta do Exercicio 6</h1>

    <?php
    
    function aredondando_numero($valor1)
        {
            return round($valor1);
        }

    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $valor1 = (int) $_POST['valor1'];
            

            $resposta = aredondando_numero($valor1);
            echo "<p>A raiz do seu numero e: $resposta</p>";
            
        }

            

        catch (Exception $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    ?>



</body>

</html>
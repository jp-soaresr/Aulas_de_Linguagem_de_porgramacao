<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bootstrap demo</title>



  </head>
  <body>
    <h1>Resposta do Exercicio 19</h1>

    <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            // Recebe e valida o valor dos dias do formulário
            $dias = isset($_POST['dias']) ? (float)$_POST['dias'] : 0;
            
            // Converte dias para horas, minutos e segundos
            $totalHoras = $dias * 24;
            $totalMinutos = $totalHoras * 60;
            $totalSegundos = $totalMinutos * 60;
    
            // Exibe o resultado
            echo "<div class='mt-4'>";
            echo "<h3>Resultado:</h3>";
            echo "<p>$dias dias equivalem a:</p>";
            echo "<ul>";
            echo "<li>$totalHoras horas</li>";
            echo "<li>$totalMinutos minutos</li>";
            echo "<li>$totalSegundos segundos</li>";
            echo "</ul>";
            echo "</div>";
    
        } catch (Exception $e) {
            echo "<p>Erro! " . $e->getMessage() . "</p>";
        }
    }

    ?>


    
  </body>
</html>
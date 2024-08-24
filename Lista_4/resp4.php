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
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            try {

                $valor1 = (int) $_POST['valor1'] ?? 0;   // forma de validar valores, ou e um ou outro. caso tenha valor recebe ele caso nao recebe 0 
                $valor2 = (int) $_POST['valor2'] ?? 0;
                // +  - * /  %  ++  --   **
                if( $valor1 != 0){

                    $resultado = $valor2 / $valor1;
                    echo "<p>Soma: $resultado </p>";
                }
                else
                    echo "<p> O divisor informado e 0, informe outro valor </p>";

            }catch(Exception $e){

                echo "Erro! " .$e -> getMessage();
            }
        }

    ?>


    
  </body>
</html>
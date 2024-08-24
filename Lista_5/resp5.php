<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bootstrap demo</title>



  </head>
  <body>
    <h1>Resposta do Exercicio 5</h1>

    <?php
        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            try {

                $valor1 = (int) $_POST['valor1'] ?? 0;   // forma de validar valores, ou e um ou outro. caso tenha valor recebe ele caso nao recebe 0 
                $valor2 = (int) $_POST['valor2'] ?? 0;
                $valor3 = (int) $_POST['valor3'] ?? 0;
                // +  - * /  %  ++  --   **
                
                $resultado = ($valor1 + $valor2 + $valor3) / 3;
                echo "<p>Sua media e: $resultado </p>";
                
            }catch(Exception $e){

                echo "Erro! " .$e -> getMessage();
            }
        }

    ?>


    
  </body>
</html>
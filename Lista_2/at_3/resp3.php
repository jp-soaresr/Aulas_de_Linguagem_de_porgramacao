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
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];

          if($valor1 == $valor2){
            echo "<p> Seu dois numero sao iguai, por tanto o maior numero e $valor2</p>";
          }
          elseif ($valor1 > $valor2){
            echo "<p> $valor1 $valor2</p>";
          }
          else 
            echo "<p>$valor2 $valor1</p>";


  
        } catch(Exception $e){
            echo "Erro:". $e ->getMessage();
        }
    }

    ?>


    
  </body>
</html>
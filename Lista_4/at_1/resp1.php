<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bootstrap demo</title>



</head>

<body>
    <h1>Resposta do Exercicio 9</h1>

    <?php

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $nome = $_POST['nome$nome'];
            $telefone = $_POST['telefones'];
            $contatos = [];

            $erro = false;

            foreach ($nome as $i => $valor) {
                $telefone = $telefones[$i];

                if (array_key_exists($valor, $contatos)) {
                    echo "<p>O nome $valor já existe!</p>";
                    $erro = true;
                } elseif (in_array($telefone, $contatos)) {
                    echo "<p>O telefone $telefone já existe</p>";
                    $erro = true;
                } else {
                    $contatos[$valor] = $telefone;
                }
            }

            ksort($contatos);

            if (!$erro) {
                echo "<p>Lista de contatos</p>";
                foreach ($contatos as $nome => $telefone) {
                    echo "<p>Nome: $nome - Telefone: $telefone</p>";
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    ?>



</body>

</html>

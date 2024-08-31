<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Primeiro_exercicio</title>
</head>

<body class="contatiner">

    <h1>Exercicio 1</h1>
    <form action="exer1.php" method="POST">
        <div class="row m-5">
            <div class="col">
                <label for="valor1">Informe o valor 1:</label>
                <input type="number" class="form-control" name="valor1" id="valor1">
            </div>
            <div class="col">
                <label for="valor2">Informe o valor 2:</label>
                <input type="number" class="form-control" name="valor2" id="valor2">
            </div>
        </div>

        <div class="row">
            <div class="col">

                <button type="submit" class="btn btn-primary m-4">Enviar</button>

            </div>
        </div>

    </form>


</body>

</html>
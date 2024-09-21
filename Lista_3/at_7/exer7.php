<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Primeiro_exercicio</title>
</head>

<body class="contatiner">

    <h1>Exercicio 7</h1>
    <form action="resp7.php" method="POST">
        <div class="row m-5">
            <div class="col">
                <p>Informe sua primeira data</p>
                <label for="dataInicio">sendo dia/mes/ano:</label>
                <input type="text" class="form-control" name="dataInicio" id="dataInicio"  placeholder="dd/mm/yyyy">
            </div>
            
        </div>
        <div class="row m-5">
            <div class="col">
                <p>Informe sua segunda data</p>
                <label for="dataFim">sendo dia/mes/ano:</label>
                <input type="text" class="form-control" name="dataFim" id="dataFim"  placeholder="dd/mm/yyyy">
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
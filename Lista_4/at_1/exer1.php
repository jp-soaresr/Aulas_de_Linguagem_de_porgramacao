<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Contatos</title>
</head>

<body class="container">
    <h1>Cadastro de Contatos</h1>
    <form action="processar_contatos.php" method="POST">
        <div id="contatos">
            <div class="row mb-3 border p-3 rounded">
                <div class="col">
                    <label for="nome1" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome[]" id="nome1" required>
                </div>
                <div class="col">
                    <label for="telefone1" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefone[]" id="telefone1" required>
                </div>
            </div>
            <div class="row mb-3 border p-3 rounded">
                <div class="col">
                    <label for="nome2" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome[]" id="nome2" required>
                </div>
                <div class="col">
                    <label for="telefone2" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefone[]" id="telefone2" required>
                </div>
            </div>
            <div class="row mb-3 border p-3 rounded">
                <div class="col">
                    <label for="nome3" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome[]" id="nome3" required>
                </div>
                <div class="col">
                    <label for="telefone3" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefone[]" id="telefone3" required>
                </div>
            </div>
            <div class="row mb-3 border p-3 rounded">
                <div class="col">
                    <label for="nome4" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome[]" id="nome4" required>
                </div>
                <div class="col">
                    <label for="telefone4" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefone[]" id="telefone4" required>
                </div>
            </div>
            <div class="row mb-3 border p-3 rounded">
                <div class="col">
                    <label for="nome5" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome[]" id="nome5" required>
                </div>
                <div class="col">
                    <label for="telefone5" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefone[]" id="telefone5" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Contatos</button>
    </form>
</body>

</html>
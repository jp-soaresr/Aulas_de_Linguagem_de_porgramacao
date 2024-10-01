<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="largura=largura-do-dispositivo, escala-inicial=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Documento</title>
</header>

<body>
    <?php
    include("nav.php");
    ?>
    <main class="conteiner">

        <h1>hoje é dia <?php echo  date(" d/m/Y "); ?> </h1>
        <form action="Aula1/resposta.php" método="POST">
            <input tipo="texto" nome="valor" />
            <button type="submit">Enviar</button>
        </form>
    </main>


</body>

</html>
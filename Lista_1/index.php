<!DOCTYPE html>
<html lang="pt-br">
<cabeça>
    <meta charset="UTF-8">
    <meta name="viewport" content="largura=largura-do-dispositivo, escala-inicial=1.0">
    <title>Documento</title>
</cabeçalho>
<corpo>
    <h1>hoje é dia <?php  echo  date ( " d/m/Y " ); ?> </h1>
    <form action="Aula1/resposta.php" método="POST">
        <input tipo="texto" nome="valor" />
        <button type="submit">Enviar</button>
    </form>

</corpo>
</html>
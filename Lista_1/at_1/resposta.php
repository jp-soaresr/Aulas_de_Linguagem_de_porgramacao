<!DOCTYPE html>
<html lang="pt">
<cabeça>
    <meta charset="UTF-8">
    <meta name="viewport" content="largura=largura-do-dispositivo, escala-inicial=1.0">
    <title>Documento</title>
</cabeçalho>
<corpo>
    <?php
        
        $valor = (int) $_POST['valor'];
        $valor = (float) $_POST['valor'];
        $valor = (string) $_POST['valor'];
        //$valor = (bool) $_POST['valor'];



        echo   'Valor informado: ' .$valor;


    ?>
</corpo>
</html>
<?php 
    include "funcao.php";
    
    $numero = $_POST["numero"]  ;

    if ($numero > 0) {
        echo raizQuadrada($numero);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <input type="number" name="numero" min="1" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
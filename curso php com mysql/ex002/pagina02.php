<?php 
    session_start();
    echo "Segunda página";
    echo "<br>" . $_SESSION["usuario"] . "<br>" . $_SESSION["texto"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP - Página 2</title>
</head>
<body>
    <a href="home.php">clica</a>
</body>
</html>
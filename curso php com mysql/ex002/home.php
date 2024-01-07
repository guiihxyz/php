<?php 
    session_start();
    if(isset($_POST["form_usuario"])) {
        $_SESSION["usuario"] = $_POST["form_usuario"];
        $_SESSION["texto"] = "texto para teste";
    }


    if ($_SESSION["usuario"] != "") {
        echo $_SESSION["usuario"];
        echo "<br>" . $_SESSION["texto"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <style>
        * {
            font-size: 1.2em;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <input type="text" name="form_usuario" id="">
        <input type="submit" value="Enviar">
    </form>

    <a href="pagina02.php">clica</a>
</body>
</html>
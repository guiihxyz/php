<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 1.1em;
        }
        
        body {
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php 
        $numero = $_GET["num"] ?? 1;
    ?>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="idnum">Digite o número:</label>
            <input type="number" name="num" id="idnum"> <br>
            <input type="submit" value="Calcular"> <br>
        </form>

        <?php 
            for($i = 0; $i <= 10; $i++) {
                echo "$i x $numero = " . ($i * $numero) . "<br>";
            }
        ?>
    </main>
</body>
</html>
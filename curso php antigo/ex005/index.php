<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 1.5em;
        }

        body {
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php 
        for($i = 0; $i <= 10; $i++) {
            echo "$i ";
        }
        echo "<br>";

        for($i = 10; $i > 0; $i--) {
            echo "$i ";
        }
        echo "<br>";
    ?>
</body>
</html>
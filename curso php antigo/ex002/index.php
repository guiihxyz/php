<!DOCTYPE html>
<html lang="en">
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
        $operador = "soma";

        switch($operador) {
            case "soma":
                echo "é pra somar";
                break;
            case "subtrair":
                echo "é pra subtrair";
                break;
            default:
                echo "erro";
        }

        $numeros = 1;
        
        switch($numeros) {
            case 1:
            case 2:
            case 3:
            case 4:
                echo "numeros de 1 a 4";
                break;
            default:
                echo "erro";
        }
    ?>
</body>
</html>
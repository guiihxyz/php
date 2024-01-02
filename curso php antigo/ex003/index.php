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
        $contador = 0;
        $maximo = 10;
        while($contador < $maximo) {
            $contador++;
            if ($contador != $maximo) {
                echo "$contador, ";
            } else {
                echo "$contador";
            }
        }

        echo "<br>";

        $contador2 = 0;
        $ativado = false;

        while($contador2 < 10) {
            $contador2++;
            echo "$contador2 normal ";
            if ($contador2 == 5) {
                echo "OPA! 5! CONTINUEI!";
                continue; //break;
            }
        }
    ?>
</body>
</html>
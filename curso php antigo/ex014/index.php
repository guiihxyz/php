<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <pre>
        <?php 
            $matriz = array(
                array(6, 4),
                array(12, 8)
            );
            $matriz[0][1] = $matriz[1][0];
            print_r($matriz);
        ?>
    </pre>
</body>
</html>
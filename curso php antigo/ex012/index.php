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
            $valores = array(1 => "um", 4 => "parabens feliz aniversario", 9 => "salve", 15 => "oi");
            unset($valores[9]);
            print_r($valores);
        ?>
    </pre>
</body>
</html>
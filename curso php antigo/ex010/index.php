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
            $comidas = array("Maçã", "Hamburguer", "Pizza", "Arroz", "Macarronaitions");
            print_r($comidas);
            $comidas[] = "Salsicha";
            print_r($comidas);
        ?>
    </pre>
</body>
</html>
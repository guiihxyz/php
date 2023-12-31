<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            echo "O número escolhido foi <strong>$numero</strong> <br>";
            echo " O seu antecessor é " . ($numero - 1) . "<br>";
            echo " O seu sucessor é " . ($numero + 1);
        ?>
    </main>
</body>
</html>
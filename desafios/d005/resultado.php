<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            $inteira = (int) $numero;
            $fracionaria = $numero - $inteira;
            echo "Analisando o número <strong>$numero</strong> informado pelo usuário:";
            echo "<ul>
            <li>A parte inteira do número é <strong>$inteira</strong></li>
            <li>A parte fracionária do número é <strong>$fracionaria</strong></li>
            ";
        ?>
    </main>
</body>
</html>
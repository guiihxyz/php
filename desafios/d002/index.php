<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
        $numero = mt_rand(0, 100);
        echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
        echo "<p>O valor gerado foi <strong>$numero</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>
    </main>
</body>
</html>
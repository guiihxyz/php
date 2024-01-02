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
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $numero = $_REQUEST["numero"] ?? 0;
            $dolarAtual = 4.86;
            $valorConvertido = $numero / $dolarAtual;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL") . " equivalem a " . "<strong>" . numfmt_format_currency($padrao, $valorConvertido, "USD" . "</strong></p>");
            echo "<p><strong>Cotação fixa de R$ 4,86</strong> informada diretamente no código.</p>"
        ?>
    </main>
</body>
</html>
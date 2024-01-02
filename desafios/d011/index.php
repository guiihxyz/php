<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $reaj = $_GET["reaj"] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.10" value="<?=$preco?>">
            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="porcentagem">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" value="<?=$reaj?>" oninput="mudarValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
            $aumento = $preco * $reaj / 100;
            $novoPreco = $preco + $aumento;
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>Custava <strong><?=$preco?></strong>, com aumento de <strong><?=$reaj?></strong>, custará <strong><?=$novoPreco?></strong> a partir de agora</p>
    </section>

    <script>
        mudarValor()
        function mudarValor() {
            porcentagem.innerText = reaj.value
        }
    </script>
</body>
</html>
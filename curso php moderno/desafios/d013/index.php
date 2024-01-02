<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET["saque"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="asque">Qual valor você quer sacar?</label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;
        $tot100 = floor($resto / 100);
        $resto %= 100;
        $tot50 = floor($resto / 50);
        $resto %= 50;
        $tot10 = floor($resto / 10);
        $resto %= 100;
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>
    <section>
        <h2>Saque de <?=$saque?> realizado</h2>
        <p>Notas sacadas:</p>
        <ul>
            <li><img src="images/100-reais.jpg" alt="100 reais" class="nota"> x<?=$tot100?></li>
            <li><img src="images/50-reais.jpg" alt="50 reais" class="nota">  x<?=$tot50?></li>
            <li><img src="images/10-reais.jpg" alt="10 reais" class="nota">  x<?=$tot10?></li>
            <li><img src="images/5-reais.jpg" alt="5 reais" class="nota">  x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>
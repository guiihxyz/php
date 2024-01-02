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
        $valor1 = $_GET["v1"] ?? 1;
        $peso1 = $_GET["p1"] ?? 1;
        $valor2 = $_GET["v2"] ?? 1;
        $peso2 = $_GET["p2"] ?? 1;
   ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" required min="1">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>" required min="1">
            <label for="v1">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" required min="1">
            <label for="v1">2° Peso</label>
            <input type="number" name="p1" id="p2" value="<?=$peso2?>" required min="1">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        ?>
        <h2>Calculando Médias</h2>
        <p>Valores: <strong><?=$valor1?> e <?=$valor2?></strong>:</p>
        <p>Média: <?=$ma?></p>
        <p>Ponderada: <?=$mp?></p>
    </section>
</body>
</html>
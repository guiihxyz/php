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
        $salarioMinimo = 1_412.60;
        $salario = $_GET["sal"] ?? $salarioMinimo;
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de R$<strong><?=number_format($salarioMinimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>

        <?php 
            $total = intdiv($salario, $salarioMinimo);
            $sobra = $salario % $salarioMinimo;

            echo "<p>Ganha $total salários mínimos.";
            echo "<p>E sobra R$<strong>" . number_format($sobra, 2, ",", ".") . "</strong></p>";
        ?>
    </section>
</body>
</html>
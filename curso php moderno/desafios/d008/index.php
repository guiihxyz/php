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
        $numero = $_GET["numero"] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $rq = sqrt($numero);
            $rc = $numero ** (1/3);

            echo "<p>Raiz Quadrada: <strong>$rq</strong>";
            echo "<p>Raiz Cúbica: <strong>$rc</strong>";
        ?>
    </section>
</body>
</html>
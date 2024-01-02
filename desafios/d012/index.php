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
        $total_segundos = $_GET["seg"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$numero?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        $sobra = $total_segundos;
        $semana = (int) ($sobra / 604_800);
        $sobra %= 604_800;
        $dia = (int) ($sobra / 86_400);
        $sobra %= 86_400;
        $hora = (int) ($sobra / 3_600);
        $sobra %= 3_600;
        $minuto = (int) ($sobra / 60);
        $sobra %= 60;
        $segundo = $sobra;
    ?>

    <section>
      <h2>Resultado:</h2>  
      <ul>
        <li><?=$semana?> semanas</li>
        <li><?=$dia?> dias</li>
        <li><?=$hora?> horas</li>
        <li><?=$minuto?> minutos</li>
        <li><?=$segundo?> segundos</li>
      </ul>
    </section>
</body>
</html>
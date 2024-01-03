<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        function mudarValor(&$x) {
            $x += 2;
            echo "<p>$x</p>";
        }
        
        $a = 3;
        mudarValor($a);
        echo "<p>$a</p>";
    ?>
</body>
</html>
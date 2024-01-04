<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table> <tr>
        <?php
            $numeros = range(5, 20, 2);

            foreach($numeros as $valor) {
                echo "<td>$valor ";
            }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    <?php 
        $cadastro = array(
            "nome" => "João",
            "idade" => "23",
            "peso" => "78.5",
            "nacionalidade" => "Brasileiro",
        );
        $cadastro["esporte"] = "Futebol";
        
        foreach($cadastro as $campo => $resposta) {
            echo "<p>O campo $campo possui $resposta</p>";
        }
    ?>
</body>
</html>
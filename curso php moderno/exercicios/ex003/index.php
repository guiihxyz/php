<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos com PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $numero = 0b1011;
        // echo "O valor da variável é $numero";

        // $v = "Guilherme";
        // var_dump($v);
      
        // $num = (int) 3e2; //3 x 10(2)
        // //echo "O valor é $num"
        // var_dump($num);

        // $num = (int) "950";
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);

        // $vet = [6, 2, "Maria", false, 9, 3, 5];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>
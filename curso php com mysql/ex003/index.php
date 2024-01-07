<?php 
    class Minecraft {
        public $personagem = "steve";
        public $blocos;
        public $linguagem;
        public $cor_favorita;

        public function escolherBloco() {
            echo "<br> sei lá escolhe qualquer um ai";
        }
    }

    class Minecraft2 extends Minecraft {
        public function logs() {
            echo "<br>nota de update:<br> sim<br> sim<br> wr293532<br> ksdafddso<br> ls";
        }
    }

    $jogo_minecraft = new Minecraft;

    echo $jogo_minecraft->personagem;
    
    //$jogo_minecraft->escolherBloco();

    $jogo_minecraft2 = new Minecraft2;

    $jogo_minecraft2->escolherBloco();
    $jogo_minecraft2->logs();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
    
</body>
</html>
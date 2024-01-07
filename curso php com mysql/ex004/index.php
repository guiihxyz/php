<?php
    class Jogos {
        public $farcry3 = true;
        public $minecraft = true;
        public $freefire = false;
        public $fortnite = true;

        public function verificarJogo($jogo) {
            if (isset($this->$jogo)) {
                if ($this->$jogo == true) {
                    return "$jogo é crackeado não";
                } else {
                    return "$jogo é crackeado safado";
                }
            } else {
                return "$jogo não está na classe";
            }
        }
    }

    $jogos = new Jogos;

    echo $jogos->verificarJogo("thesims4");
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
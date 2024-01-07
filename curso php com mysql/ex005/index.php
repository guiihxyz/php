<?php 
    class Momentos {
        public static $propriedade_feliz = "estou feliz <br>";

        public static function metodoEstatico() {
            return "estático";
        }
    }

    $momentos = new Momentos;

    echo $momentos::$propriedade_feliz;
    echo $momentos::metodoEstatico();
?>
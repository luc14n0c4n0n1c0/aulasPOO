<?php

class Exemplo {
    public static $propriedade_estatica = "Isso é uma propriedade estática.";

    public static function metodo_estatico() {
        echo "Isso é um método estático.";
    }
}

// acessando uma propriedade estática
echo Exemplo::$propriedade_estatica;

// chamando um método estático
Exemplo::metodo_estatico();

?>

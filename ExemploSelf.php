<?php

class Exemplo {
    public static $propriedade_estatica = "Isso é uma propriedade estática.";

    public static function metodo_estatico() {
        echo self::$propriedade_estatica;
    }
}

// chamando um método estático que acessa uma propriedade estática usando self
Exemplo::metodo_estatico(); // imprime "Isso é uma propriedade estática."

?>


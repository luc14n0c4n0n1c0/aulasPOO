<?php

class Exemplo {
    public static $propriedade_estatica = "Isso � uma propriedade est�tica.";

    public static function metodo_estatico() {
        echo self::$propriedade_estatica;
    }
}

// chamando um m�todo est�tico que acessa uma propriedade est�tica usando self
Exemplo::metodo_estatico(); // imprime "Isso � uma propriedade est�tica."

?>


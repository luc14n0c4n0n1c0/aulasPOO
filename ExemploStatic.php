<?php

class Exemplo {
    public static $propriedade_estatica = "Isso � uma propriedade est�tica.";

    public static function metodo_estatico() {
        echo "Isso � um m�todo est�tico.";
    }
}

// acessando uma propriedade est�tica
echo Exemplo::$propriedade_estatica;

// chamando um m�todo est�tico
Exemplo::metodo_estatico();

?>

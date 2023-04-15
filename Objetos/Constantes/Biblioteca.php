<?php

    class Biblioteca {

        const Nome = "GTK ";      

    }

    class Aplicacao extends Biblioteca {
        //declaração das constantes
        const Ambiente  =  "Gnome Desktop ";
        const Versao    =  "3.8 ";

        //método construtor
        function __construct($Nome) {
            echo parent::Nome . self::Ambiente . self::Versao . $Nome . "<br>";
        }
    }

    //acessa as constantes externamente
    echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "<br>";

    new Aplicacao("dia");
    new Aplicacao("Gimp");
?>

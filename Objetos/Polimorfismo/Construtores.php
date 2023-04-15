<?php

    //carrega as classes
    include_once 'Pessoa.php';
    include_once 'Conta.php';

    //Criação do objeto $Carlso
    $carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, "10/04/1976", "Ensino Médio", 650.00);

    echo "Manipulando o objeto {$carlos->Nome}: <br>";

    echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} <br>";
?>
<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}


$pessoa = new Pessoa("João", 30);
echo $pessoa->nome; // saída: João
echo $pessoa->idade; // saída: 30

$pessoa1 = new Pessoa("Luciano", 23);
echo $pessoa1->nome; // saída: Luciano
echo $pessoa1->idade; // saída: 23


?>


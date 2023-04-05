<?php

class Pessoa {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function __destruct() {
        echo "O objeto foi destruído.";
    }
}

// Criando um objeto Pessoa
$pessoa = new Pessoa("João");

// Destruindo o objeto Pessoa
unset($pessoa);

?>
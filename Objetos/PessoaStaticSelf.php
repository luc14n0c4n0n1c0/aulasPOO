<?php

class Pessoa {
    private static $totalPessoas = 0;
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
        self::$totalPessoas++;
    }

    public static function getTotalPessoas() {
        return self::$totalPessoas;
    }

    public function getNome() {
        return $this->nome;
    }
}

$pessoa1 = new Pessoa("João");
$pessoa2 = new Pessoa("Maria");

echo "Quantidade total de pessoas: " . Pessoa::getTotalPessoas(); 

?>

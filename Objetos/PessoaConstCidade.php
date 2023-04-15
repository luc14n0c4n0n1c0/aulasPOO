<?php

class Pessoa {
    private $nome;
    private $idade;
    private $cidade;

    public function __construct($nome, $idade, $cidade = "Desconhecido") {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->setCidade($cidade);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($parametro) {
        if (!empty($parametro)) {
            return $this->cidade = $parametro;
        } else {
            echo "O nome da cidade não pode ser vazio!<br>";
        }
    }
}

// Criando um objeto Pessoa com cidade especificada
$pessoa1 = new Pessoa("João", 30, "Sao Paulo");

// Criando um objeto Pessoa sem cidade especificada
$pessoa2 = new Pessoa("Maria", 25);

// Imprimindo informações sobre as pessoas
echo $pessoa1->getNome() . " tem " . $pessoa1->getIdade() . " anos e mora em " . $pessoa1->getCidade() . ".<br>";
echo $pessoa2->getNome() . " tem " . $pessoa2->getIdade() . " anos e mora em " . $pessoa2->getCidade() . ".<br>";

$pessoa1->setCidade("Cianorte");

// Imprimindo informações sobre as pessoas
echo $pessoa1->getNome() . " tem " . $pessoa1->getIdade() . " anos e mora em " . $pessoa1->getCidade() . ".<br>";
echo $pessoa2->getNome() . " tem " . $pessoa2->getIdade() . " anos e mora em " . $pessoa2->getCidade() . ".<br>";

// Criando um objeto Pessoa cidade nulla
$pessoa3 = new Pessoa("Luciano", 23, "");

?>


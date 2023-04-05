<?php

class Pessoa {
    private $nome;
    private $idade;
    private $cidade;
    
    public function __construct($nome, $idade, $cidade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
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
    
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}

$pessoa1 = new Pessoa("João", 25, "São Paulo");
echo "Nome: " . $pessoa1->getNome() . "<br>";
echo "Idade: " . $pessoa1->getIdade() . "<br>";
echo "Cidade: " . $pessoa1->getCidade() . "<br>";

$pessoa1->setCidade("Rio de Janeiro");
echo "Cidade (atualizada): " . $pessoa1->getCidade() . "<br>";


?>


<?php

class Funcionario {
    private $nome;
    private $idade;
    private $salario;

    public function __construct($nome, $idade, $salario) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}

// Criando três instâncias da classe Funcionario
$funcionario1 = new Funcionario("João", 30, 5000);
$funcionario2 = new Funcionario("Maria", 28, 5500);
$funcionario3 = new Funcionario("Carlos", 35, 6000);

// Alterando atributos dos funcionários cadastrados
$funcionario1->setNome("João Silva");
$funcionario1->setIdade(31);
$funcionario1->setSalario(5100);

// Exibindo atributos dos funcionários cadastrados
echo "Funcionário 1: " . $funcionario1->getNome() . ", " . $funcionario1->getIdade() . " anos, R$ " . $funcionario1->getSalario() . "<br>";
echo "Funcionário 2: " . $funcionario2->getNome() . ", " . $funcionario2->getIdade() . " anos, R$ " . $funcionario2->getSalario() . "<br>";
echo "Funcionário 3: " . $funcionario3->getNome() . ", " . $funcionario3->getIdade() . " anos, R$ " . $funcionario3->getSalario() . "<br>";

?>


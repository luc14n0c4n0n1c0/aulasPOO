<?php

class Funcionario {
  private $nome;
  private $cpf;
  private $idade;
  private $salario;

  public function __construct($nome, $cpf, $idade, $salario) {
    $this->setNome($nome);
    $this->setCpf($cpf);
    $this->setIdade($idade);
    $this->setSalario($salario);
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    if (empty($nome)) {
      echo "O nome deve ser uma string não vazia.<br>";
    } else {
      $this->nome = $nome;
    }
  }

  public function getCpf() {
    return $this->cpf;
  }

  public function setCpf($cpf) {
    if (strlen($cpf) != 11) {
      echo "O CPF deve ser um número de 11 dígitos.<br>";
    } else {
      $this->cpf = $cpf;
    }
  }

  public function getIdade() {
    return $this->idade;
  }

  public function setIdade($idade) {
    if ($idade < 0) {
      echo "A idade deve ser um número positivo.<br>";
    } else {
      $this->idade = $idade;
    }
  }

  public function getSalario() {
    return $this->salario;
  }

  public function setSalario($salario) {
    if ($salario <= 0) {
      echo "O salário deve ser um número positivo.<br>";
    } else {
      $this->salario = $salario;
    }
  }
}

// Instâncias da classe Funcionario
$funcionario1 = new Funcionario("João", "12345678901", 30, 3000);
$funcionario2 = new Funcionario("Maria", "09876543210", 25, 2500);
$funcionario3 = new Funcionario("José", "98765432109", 42, 5000);

// Alterando e exibindo os atributos dos funcionários cadastrados
$funcionario1->setNome("João da Silva");
echo "Nome do funcionário 1: " . $funcionario1->getNome() . "<br>";

$funcionario2->setIdade(30);
echo "Idade do funcionário 2: " . $funcionario2->getIdade() . "<br>";

$funcionario3->setSalario(6000);
echo "Salário do funcionário 3: " . $funcionario3->getSalario() . "<br>";

// Alterando e exibindo os atributos dos funcionários cadastrados
$funcionario1->setNome("");
echo "Nome do funcionário 1: " . $funcionario1->getNome() . "<br>";

$funcionario2->setIdade(-5);
echo "Idade do funcionário 2: " . $funcionario2->getIdade() . "<br>";

$funcionario3->setSalario(-6000);
echo "Salário do funcionário 3: " . $funcionario3->getSalario() . "<br>";

// Alterando e exibindo os atributos dos funcionários cadastrados
$funcionario1->setNome(564646);
echo "Nome do funcionário 1: " . $funcionario1->getNome() . "<br>";

$funcionario2->setIdade("80");
echo "Idade do funcionário 2: " . $funcionario2->getIdade() . "<br>";

$funcionario3->setSalario(-s6000);
echo "Salário do funcionário 3: " . $funcionario3->getSalario() . "<br>";


?>



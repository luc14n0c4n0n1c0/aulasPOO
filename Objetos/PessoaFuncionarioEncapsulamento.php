<?php

class Pessoa {
    private $nome;
    private $idade;
    private $cpf;
  
    public function __construct($nome, $idade, $cpf) {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setCpf($cpf);
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
  }
  
  class Funcionario {
    private $pessoa;
    private $salario;
  
    public function __construct($pessoa, $salario) {
      $this->setPessoa($pessoa);
      $this->setSalario($salario);
    }
  
    public function getPessoa() {
      return $this->pessoa;
    }
  
    public function setPessoa($pessoa) {
      if (!$pessoa instanceof Pessoa) {
        echo "O parâmetro deve ser uma instância de Pessoa.<br>";
      } else {
        $this->pessoa = $pessoa;
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
  
    // Instâncias da classe Pessoa
    $pessoa1 = new Pessoa("João da Silva", 30, "12345678901",);
    $pessoa2 = new Pessoa("Maria de Souza", 25, "09876543210",);
    $pessoa3 = new Pessoa("José dos Santos", 42, "98765432109",);
  
    // Instâncias da classe Funcionario
    $funcionario1 = new Funcionario($pessoa1, 3000);
    $funcionario2 = new Funcionario($pessoa2, 2500);
    $funcionario3 = new Funcionario($pessoa3, 5000);
  
    // Alterando e exibindo os atributos dos funcionários cadastrados
    $funcionario1->getPessoa()->setNome("João da Silva Santos");
    echo "Nome da pessoa do funcionário 1: " . $funcionario1->getPessoa()->getNome() . "<br>";
  
    $funcionario2->getPessoa()->setIdade(30);
    echo "Idade da pessoa do funcionário 2: " . $funcionario2->getPessoa()->getNome() . "<br>";

    // Alterando e exibindo os atributos dos funcionários cadastrados
    $pessoa1->setNome("João da Silva");
    echo "Nome da pessoa do funcionário 1: " . $funcionario1->getPessoa()->getNome() . "<br>";

    $pessoa2->setIdade(30);
    echo "Idade da pessoa do funcionário 2: " . $funcionario2->getPessoa()->getIdade() . "<br>";

    $pessoa3->setNome("");
    echo "Nome da pessoa do funcionário 3: " . $funcionario3->getPessoa()->getNome() . "<br>";

    $pessoa1->setIdade(-5);
    echo "Idade da pessoa do funcionário 1: " . $funcionario1->getPessoa()->getIdade() . "<br>";

    $pessoa2->setCpf("123");
    echo "CPF da pessoa do funcionário 2: " . $funcionario2->getPessoa()->getCpf() . "<br>";

    $pessoa3->setCpf("9876543210123");
    echo "CPF da pessoa do funcionário 3: " . $funcionario3->getPessoa()->getCpf() . "<br>";

    echo "Salário do funcionário 1: " . $pessoa1->getNome() . " " . $funcionario1->getSalario() . "<br>";
    
    echo "Salário do funcionário 2: " . $pessoa2->getNome() . " " . $funcionario2->getSalario() . "<br>";
   
    echo "Salário do funcionário 3: " . $pessoa3->getNome() . " " . $funcionario3->getSalario() . "<br>";
    

?>
  
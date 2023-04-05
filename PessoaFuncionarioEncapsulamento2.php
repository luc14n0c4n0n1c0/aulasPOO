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
    private $posicao;
    private $cargo;
  
    public function __construct($pessoa, $salario, $cargo) {
      $this->setPessoa($pessoa);
      $this->setSalario($salario);
      $this->posicao = 1; // Inicializa a posição hierárquica com 1
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
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

    public function getPosicao() {
        return $this->posicao;
    }

    public function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    public function trabalhar() {
        echo "O funcionario está trabalhando...<br>";
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "O funcionário recebeu um aumento de R$ " . $valor . "!<br>";
    }

    public function promover() {
        $aumento = $this->salario * 0.2; // aumenta o salário em 20%
        $this->salario += $aumento;
        $this->posicao++; // aumenta a posição hierarquica do funcionário em um nível
        echo "O funcionário foi promovido para a posição " . $this->posicao . " e seu novo salário é de R$ " . $this->salario . ".<br>";
    }

    public function calcularImpostos() {
        $impostos = $this->salario * 0.2; // calcula 20% do salário como impostos
        return $impostos;
    }
  }
  
    // Instâncias da classe Pessoa
    $pessoa1 = new Pessoa("João da Silva", 30, "12345678901",);
    $pessoa2 = new Pessoa("Maria de Souza", 25, "09876543210",);
    $pessoa3 = new Pessoa("José dos Santos", 42, "98765432109",);
  
    // Instâncias da classe Funcionario
    $funcionario1 = new Funcionario($pessoa1, 3000, "Vendedor");
    $funcionario2 = new Funcionario($pessoa2, 2500, "Atendente");
    $funcionario3 = new Funcionario($pessoa3, 5000, "Analista de Sistemas");
  
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
    
    //utilizar dos métodos
    echo "Dados do funcionario 1: <br>";
    echo "Cargo: " . $funcionario1->getCargo() . "Salário: R$ " . $funcionario1->getSalario() . "<br>";
    $funcionario1->trabalhar();
    $funcionario1->receberAumento(1000.00);
    echo "Novo salário do funcionário 1: R$ " . $funcionario1->getSalario() . "<br>";
    echo "Novo salário do funcionário 2: R$ " . $funcionario2->getSalario() . "<br>";                 
    echo "Novo salário do funcionário 3: R$ " . $funcionario3->getSalario() . "<br>";

    // Promovendo o funcionário 1
    $funcionario1->promover();
    echo "Funcionário 1: Recebeu uma promoção " . $pessoa1->getNome() . " possui a posiçao: " . $funcionario1->getPosicao() . "<br>";
    
    // Calculando impostos do funcionário 1
    $impostos_funcionario1 = $funcionario1->calcularImpostos();
    echo "Impostos do funcionário 1: R$ " . $impostos_funcionario1 . "<br>";

    // Promovendo o funcionário 2
    $funcionario2->promover();
    echo "Funcionário 2: Recebeu uma promoção " . $pessoa2->getNome() . " possui a posiçao: " . $funcionario2->getPosicao() . "<br>";

    // Calculando impostos do funcionário 2
    $impostos_funcionario2 = $funcionario2->calcularImpostos();
    echo "Impostos do funcionário 2: R$ " . $impostos_funcionario2 . "<br>";

    // Promovendo o funcionário 3
    $funcionario3->promover();
    echo "Funcionário 3: Recebeu uma promoção " . $pessoa2->getNome() . " possui a posiçao: " . $funcionario2->getPosicao() . "<br>";

    // Calculando impostos do funcionário 3
    $impostos_funcionario3 = $funcionario3->calcularImpostos();
    echo "Impostos do funcionário 3: R$ " . $impostos_funcionario3 . "<br>";

?>
  
<?php

class Pessoa {
  private $nome;
  private $idade;
  private $altura;
  private $peso;

  public function __construct($nome, $idade, $altura, $peso) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->altura = $altura;
    $this->peso = $peso;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getIdade() {
    return $this->idade;
  }

  public function getAltura() {
    return $this->altura;
  }

  public function getPeso() {
    return $this->peso;
  }

  public function andar() {
    echo $this->nome . " está andando...<br>";
  }

  public function pular() {
    echo $this->nome . " está pulando...<br>";
  }

  public function falar($mensagem) {
    echo $this->nome . " diz: " . $mensagem . "<br>";
  }
}


class Funcionario {
  private $cargo;
  private $salario;

  public static $funcionarios = array();

  public function __construct($cargo, $salario) {
    $this->cargo = $cargo;
    $this->salario = $salario;
    self::$funcionarios[] = $this; // adiciona o funcionário ao array de funcionários
  }

  public function getCargo() {
    return $this->cargo;
  }

  public function getSalario() {
    return $this->salario;
  }

  public function trabalhar() {
    echo "O funcionário está trabalhando...<br>";
  }

  public function receberAumento($valor) {
    $this->salario += $valor;
    echo "O funcionário recebeu um aumento de R$ " . $valor . "!<br>";
  }

  public static function aumentarSalarioTodos() {
    foreach (self::$funcionarios as $funcionario) {
      $aumento = $funcionario->getSalario() * 0.1;
      $funcionario->receberAumento($aumento);
    }
  }

  public static function mediaSalarial() {
    $totalSalarios = 0;
    foreach (self::$funcionarios as $funcionario) {
      $totalSalarios += $funcionario->getSalario();
	  echo "Valor da varíavel totalSalarios: R$ " . $totalSalarios . "<br>";
    }
    return $media = round($totalSalarios / count(self::$funcionarios),2);
    
  }

  public static function totalFuncionarios() {
    $total = count(self::$funcionarios);
    echo "Total de funcionários cadastrados: " . $total . "<br>";
  }
}


// criação dos objetos Pessoa e Funcionario
$pessoa1 = new Pessoa("Maria", 20, 1.68, 58);
$pessoa2 = new Pessoa("João", 35, 1.75, 80);
$pessoa3 = new Pessoa("José", 42, 1.80, 78);

$funcionario1 = new Funcionario("Analista de Sistemas", 5000.00);
$funcionario2 = new Funcionario("Desenvolvedor Full Stack", 8000.00);
$funcionario3 = new Funcionario("Gerente de Projetos", 12000.00);

// utilização dos métodos
echo "Dados do funcionário 1: ";
echo "Cargo: " . $funcionario1->getCargo() . ", Salário: R$ " . 
     $funcionario1->getSalario() . "<br>";
$funcionario1->trabalhar();
$funcionario1->receberAumento(1000.00);
echo "Novo salário do funcionário 1: R$ " . $funcionario1->getSalario() . "<br>";

// aumento salarial de todos os funcionários em 10%
$funcionario1->aumentarSalarioTodos(10);
echo "Salário do funcionário 1 após aumento geral: R$ " . $funcionario1->getSalario() . "<br>";
echo "Salário do funcionário 2 após aumento geral: R$ " . $funcionario2->getSalario() . "<br>";
echo "Salário do funcionário 3 após aumento geral: R$ " . $funcionario3->getSalario() . "<br>";

// média salarial dos funcionários
echo "Média salarial dos funcionários: R$ " . $funcionario1->mediaSalarial() . "<br>";

// quantidade total de funcionários cadastrados
echo "Total de funcionários cadastrados: " . $funcionario1->totalFuncionarios() . "<br>";

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
    echo $this->nome . " est� andando...<br>";
  }

  public function pular() {
    echo $this->nome . " est� pulando...<br>";
  }

  public function falar($mensagem) {
    echo $this->nome . " diz: " . $mensagem . "<br>";
  }
}


class Funcionario {
  private $cargo;
  private $salario;
  private $posicao;

  public static $funcionarios = array();

  public function __construct($cargo, $salario, $posicao) {
    $this->cargo = $cargo;
    $this->salario = $salario;
    $this->posicao = $posicao;
    self::$funcionarios[] = $this; // adiciona o funcion�rio ao array de funcion�rios
  }

  public function getCargo() {
    return $this->cargo;
  }

  public function getSalario() {
    return $this->salario;
  }

  public function getPosicao() {
    return $this->posicao;
  }

  public function trabalhar() {
    echo "O funcion�rio est� trabalhando...<br>";
  }

  public function receberAumento($valor) {
    $this->salario += $valor;
    echo "O funcion�rio recebeu um aumento de R$ " . $valor . "!<br>";
  }

  public static function aumentarSalarioTodos($percentual) {
    foreach (self::$funcionarios as $funcionario) {
      $aumento = $funcionario->getSalario() * ($percentual / 100);
      $funcionario->receberAumento($aumento);
    }
  }

  public static function mediaSalarial() {
    $totalSalarios = 0;
    foreach (self::$funcionarios as $funcionario) {
      $totalSalarios += $funcionario->getSalario();
    }
    return round($totalSalarios / count(self::$funcionarios), 2);
  }

  public static function totalFuncionarios() {
    return count(self::$funcionarios);
  }

  public function promover() {
    $aumento = $this->salario * 0.2; // aumenta o sal�rio em 20%
    $this->salario += $aumento;
    $this->posicao++; // aumenta a posi��o hier�rquica do funcion�rio em um n�vel
    echo "O funcion�rio foi promovido para a posi��o " . $this->posicao . " e seu novo sal�rio � de R$ " . $this->salario . ".<br>";
  }

  public function calcularImpostos() {
    $impostos = $this->salario * 0.2; // calcula 20% do sal�rio como impostos
    return $impostos;
  }
}



// cria��o dos objetos Pessoa e Funcionario
$pessoa1 = new Pessoa("Maria", 20, 1.68, 58);
$pessoa2 = new Pessoa("Jo�o", 35, 1.75, 80);
$pessoa3 = new Pessoa("Jos�", 42, 1.80, 78);

$funcionario1 = new Funcionario("Analista de Sistemas", 5000.00);
$funcionario2 = new Funcionario("Desenvolvedor Full Stack", 8000.00);
$funcionario3 = new Funcionario("Gerente de Projetos", 12000.00);

// utiliza��o dos m�todos
echo "Dados do funcion�rio 1: ";
echo "Cargo: " . $funcionario1->getCargo() . ", Sal�rio: R$ " . 
     $funcionario1->getSalario() . "<br>";
$funcionario1->trabalhar();
$funcionario1->receberAumento(1000.00);
echo "Novo sal�rio do funcion�rio 1: R$ " . $funcionario1->getSalario() . "<br>";

// aumento salarial de todos os funcion�rios em 10%
$funcionario1->aumentarSalarioTodos(10);
echo "Sal�rio do funcion�rio 1 ap�s aumento geral: R$ " . $funcionario1->getSalario() . "<br>";
echo "Sal�rio do funcion�rio 2 ap�s aumento geral: R$ " . $funcionario2->getSalario() . "<br>";
echo "Sal�rio do funcion�rio 3 ap�s aumento geral: R$ " . $funcionario3->getSalario() . "<br>";

// m�dia salarial dos funcion�rios
echo "M�dia salarial dos funcion�rios: R$ " . $funcionario1->mediaSalarial() . "<br>";

// quantidade total de funcion�rios cadastrados
echo "Total de funcion�rios cadastrados: " . $funcionario1->totalFuncionarios() . "<br>";



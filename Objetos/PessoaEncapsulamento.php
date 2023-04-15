<?php

class Pessoa {
  private $idade;
  private $altura;
  private $peso;

  public function __construct($idade, $altura, $peso) {
    $this->idade = $idade;
    $this->altura = $altura;
    $this->peso = $peso;
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
    echo "Estou andando...";
  }

  public function pular() {
    echo "Estou pulando...";
  }

  public function falar() {
    echo "Estou falando...";
  }
}

$maria = new Pessoa(20, 1.68, 58);
echo "O peso de maria: " . $maria->getPeso() . "<br>";

$joao = new Pessoa(35, 1.75, 80);

$jose = new Pessoa(42, 1.80, 78);

echo "Dados da pessoa Maria: ";
echo "Idade: " . $maria->getIdade() . " anos, Altura: " . $maria->getAltura() . " m, Peso: " . $maria->getPeso() . " kg <br>";
$maria->andar(); // chamando o método andar da instância $maria
echo "<br>";

echo "Dados da pessoa João: ";
echo "Idade: " . $joao->getIdade() . " anos, Altura: " . $joao->getAltura() . " m, Peso: " . $joao->getPeso() . " kg <br>";
$joao->pular(); // chamando o método andar da instância $maria
echo "<br>";

echo "Dados da pessoa José: ";
echo "Idade: " . $jose->getIdade() . " anos, Altura: " . $jose->getAltura() . " m, Peso: " . $jose->getPeso() . " kg <br>";
$jose->falar(); // chamando o método andar da instância $maria
echo "<br>";

?>

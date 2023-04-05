<?php

class Pessoa {
  public $idade;
  public $altura;
  public $peso;

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

$maria = new Pessoa();
$maria->idade = 20;
$maria->altura = 1.68;
$maria->peso = 58;

$joao = new Pessoa();
$joao->idade = 35;
$joao->altura = 1.75;
$joao->peso = 80;

$jose = new Pessoa();
$jose->idade = 42;
$jose->altura = 1.80;
$jose->peso = 78;

echo "Dados da pessoa Maria: ";
echo "Idade: " . $maria->idade . " anos, Altura: " . $maria->altura . " m, Peso: " . $maria->peso . " kg <br>";
$maria->andar(); // chamando o m�todo andar da inst�ncia $maria
echo "<br>";

echo "Dados da pessoa Jo�o: ";
echo "Idade: " . $joao->idade . " anos, Altura: " . $joao->altura . " m, Peso: " . $joao->peso . " kg <br>";
$joao->pular(); // chamando o m�todo pular da inst�ncia $joao
echo "<br>";

echo "Dados da pessoa Jos�: ";
echo "Idade: " . $jose->idade . " anos, Altura: " . $jose->altura . " m, Peso: " . $jose->peso . " kg <br>";
$jose->falar(); // chamando o m�todo falar da inst�ncia $jose
echo "<br>";

?>

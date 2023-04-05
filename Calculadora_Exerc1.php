<?php

class Calculadora {
  public static function soma($num1, $num2) {
    return $num1 + $num2;
  }

  public function multiplica($num1, $num2) {
    return $num1 * $num2;
  }
}

// Exemplo de uso do método soma (não é necessário instanciar a classe)
echo Calculadora::soma(2, 3); // Resultado: 5

// Exemplo de uso do método multiplica (é necessário instanciar a classe)
$calculadora = new Calculadora();
echo $calculadora->multiplica(2, 3); // Resultado: 6

?>
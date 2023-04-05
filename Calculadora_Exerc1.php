<?php

class Calculadora {
  public static function soma($num1, $num2) {
    return $num1 + $num2;
  }

  public function multiplica($num1, $num2) {
    return $num1 * $num2;
  }
}

// Exemplo de uso do m�todo soma (n�o � necess�rio instanciar a classe)
echo Calculadora::soma(2, 3); // Resultado: 5

// Exemplo de uso do m�todo multiplica (� necess�rio instanciar a classe)
$calculadora = new Calculadora();
echo $calculadora->multiplica(2, 3); // Resultado: 6

?>
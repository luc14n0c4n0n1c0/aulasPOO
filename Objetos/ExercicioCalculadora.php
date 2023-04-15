<?php

class Calculadora {
    public static function soma($a, $b) {
        return $a + $b;
    }
    
    public static function multiplica($a, $b) {
        return self::soma($a, $a) * $b;
    }
}

echo "Soma = " . Calculadora::soma(2, 3) . "<br>"; // Imprime 5
echo "Multiplicação = " . Calculadora::multiplica(2, 3) . "<br>"; // Imprime 6


?>

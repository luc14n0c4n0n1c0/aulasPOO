<?Php

class Calculadora {
    private $valor1;
    private $valor2;
    
    public function __construct($valor1, $valor2) {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }
    
    public function somar() {
        return $this->valor1 + $this->valor2;
    }
    
    public function subtrair() {
        return $this->valor1 - $this->valor2;
    }
}
    
    $calc = new Calculadora(10, 5);
    echo $calc->somar() - $calc->subtrair();
    
?>
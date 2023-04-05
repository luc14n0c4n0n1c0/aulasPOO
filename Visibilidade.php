<?php

class Visibilidade {
    public $varPublic;
    protected $varProtected;
    private $varPrivate;
    
    public function __construct($var1, $var2, $var3) {
        $this->varPublic = $var1;
        $this->varProtected = $var2;
        $this->varPrivate = $var3;  
    }
}

$visibilityTest = new Visibilidade(1, 2, 3);
echo "Atributo Public: " . $visibilityTest->varPublic; // Atributo Public: 1
echo "Atributo Protected: " . $visibilityTest->varProtected; // erro: propriedade protegida
echo "Atributo Private: " . $visibilityTest->varPrivate; // erro: propriedade privada

?>
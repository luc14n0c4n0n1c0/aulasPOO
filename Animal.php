<?Php

class Animal {
    private $especie;
    private $peso;
    
    public function __construct($especie, $peso) {
        $this->especie = $especie;
        $this->peso = $peso;
    }
    
    public function getEspecie() {
        return $this->especie;
    }
    
    public function getPeso() {
        return $this->peso;
    }
    
    public function setPeso($novoPeso) {
        $this->peso = $novoPeso;
    }
}
    
    $animal1 = new Animal("Leão", 200);
    $animal2 = new Animal("Girafa", 400);
    $animal1->setPeso(250);
    $animal2->peso = 500;

?>
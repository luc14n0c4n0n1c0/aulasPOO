<?Php

class Carro {
    private $marca;
    private $modelo;
    
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    
    public function getMarca() {
        return $this->marca;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
}
    
    $carro1 = new Carro("Ford", "Fusion");
    echo "Carro 1: " . var_dump($carro1) . "<br><br>";
    $carro2 = $carro1;
    echo "<br>Carro 2: " . var_dump($carro2) . "<br><br>";
    $carro2->setModelo("Ka");
    echo "<br>Carro 2: " .var_dump($carro2) . "<br><br>";

    echo "Carro 1: " . var_dump($carro1) . "<br><br>";

?>
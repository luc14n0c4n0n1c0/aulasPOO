<?php

class Veiculo {
    protected $marca;
    protected $modelo;
    protected $cor;
    protected $velocidade;

    public function __construct($marca, $modelo, $cor) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->velocidade = 0;
    }

    public function acelerar() {
        $this->velocidade += 10;
        echo "Acelerando o veículo!<br>";
    }

    public function frear() {
        $this->velocidade -= 10;
    }
}

class Carro extends Veiculo {
    public function __construct($marca, $modelo, $cor) {
        parent::__construct($marca, $modelo, $cor);
    }
}

class Fusca extends Carro {
    public function buzinar() {
        echo "Buzina do Fusca!";
    }
}

class Porsche extends Carro {
    public function acelerar() {
        $this->velocidade += 20;
    }
}

class Ferrari extends Carro {
    public function acelerar() {
        $this->velocidade += 30;
    }
}


$fusca = new Fusca("Volkswagen", "Fusca", "Azul");
$porsche = new Porsche("Porsche", "911", "Prata");
$ferrari = new Ferrari("Ferrari", "F40", "Vermelho");

// Acelerando os carros
$fusca->acelerar();
$porsche->acelerar();
$ferrari->acelerar();

// Usando método específico do Fusca
$fusca->buzinar();

// Freando os carros
$fusca->frear();
$porsche->frear();
$ferrari->frear();


?>

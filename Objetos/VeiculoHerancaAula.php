<?php

class Veiculo {
    protected $marca;
    protected $modelo;
    protected $cor;
    protected $velocidade;
    protected $passageiros;
    protected $ligado;

    public function __construct($marca, $modelo, $cor) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->velocidade = 0;
        $this->passageiros = 0;
        $this->ligado = false;
    }

    public function acelerar($incremento) {
        if ($this->ligado) {
            $novaVelocidade = $this->velocidade + $incremento;
            if ($novaVelocidade >= 0 && $novaVelocidade <= 300) {
                $this->velocidade = $novaVelocidade;
            } else {
                echo "A velocidade deve ser entre 0 e 300 km<br>";
            }
        } else {
            echo "O veículo está desligado.<br>";
        }
    }

    public function frear($decremento) {
        if ($this->ligado) {
            $novaVelocidade = $this->velocidade - $decremento;
            if ($novaVelocidade >= 0 && $novavelocidade <= 300) {
                $this->velocidade = $novaVelocidade;
            } else {
                echo "A velocidade deve ser entre 0 e 300 km<br>";
            }
        } else {
            echo "O veículo está desligado.<br>";
        }
    }

    public function getVelocidade() {
        return $this->$velocidade;
    }

    public function getPassageiro() {
        return $this->$passageiros;
    }

    public function ligar() {
        $this->ligado = true;
    }

    public function desligar() {
        $this->ligado = false;
    }

    public function adicionarPassageiro($numero) {
        if ($numero >= 0 ) {
           $this->passageiros += $numero; 
        } else {
            echo "O número de passageiros não pode ser negativo.<br>";
        }
    }
}

class Carro extends Veiculo {
    public function __construct($marca, $modelo, $cor) {
        parent::__construct($marca, $modelo, $cor);
    }

    public function adicionarPassageiro($numero) {
        if ($this->passageiros + $numero <= 5 ) {
           parent::adicionarPassageiro($numero); 
        } else {
            echo "O número de passageiros não mais de 5 passagerios.<br>";
        }
    }
}

class Fusca extends Carro {
    public function buzinar() {
        echo "Buzina do Fusca!<br>";
    }
}

class Porsche extends Carro {
    public function acelerar($incremento) {
        parent::acelerar($incremento * 3);
    }
}

class Ferrari extends Carro {
    public function acelerar($incremento) {
        parent::acelerar($incremento * 4);
    }
}

class Motocicleta extends Veiculo {
    private $cilindrada;

    public function __construct($marca, $modelo, $cor, $cilindrada) {
        parent::__construct($marca, $modelo, $cor);
        $this->cilindrada = $cilindrada;
    } 

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function empinar() {
        if ($this->ligado == True) {
            echo "A motocicleta está empinando!<br>";
        } else {
            echo "A moticicleta está desligada!<br>";
        }
    }

    public function adicionarPassageiro($numero) {
        if ($this->passageiros + $numero <= 2 ) {
           parent::adicionarPassageiro($numero); 
        } else {
            echo "O número de passageiros não mais de 2 passagerios.<br>";
        }
    }

}


$fusca = new Fusca("Volkswagen", "Fusca", "Azul");
$porsche = new Porsche("Porsche", "911", "Prata");
$ferrari = new Ferrari("Ferrari", "F40", "Vermelho");

// Acelerando os carros
$fusca->ligar();
$fusca->acelerar(50);
//echo "A velocidade do Fusca é: " . $fusca->getVelocidade() . " km/h<br>";
//$porsche->acelerar();
//$ferrari->acelerar();

// Usando método específico do Fusca
$fusca->buzinar();

// Freando os carros
//$fusca->frear();
//$porsche->frear();
//$ferrari->frear();


?>

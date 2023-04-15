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
                echo "A velocidade deve estar entre 0 e 300 km/h.<br>";
            }
        } else {
            echo "O veículo está desligado.<br>";
        }
    }

    public function frear($decremento) {
        if ($this->ligado) {
            $novaVelocidade = $this->velocidade - $decremento;
            if ($novaVelocidade >= 0 && $novaVelocidade <= 300) {
                $this->velocidade = $novaVelocidade;
            } else {
                echo "A velocidade deve estar entre 0 e 300 km/h.<br>";
            }
        } else {
            echo "O veículo está desligado.<br>";
        }
        
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function getPassageiros() {
        return $this->passageiros;
    }

    public function ligar() {
        $this->ligado = true;
    }

    public function desligar() {
        $this->ligado = false;
    }

    public function adicionarPassageiro($numero) {
        if ($numero >= 0) {
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
        if ($this->passageiros + $numero <= 5) {
            parent::adicionarPassageiro($numero);
        } else {
            echo "Um carro não pode ter mais de 5 passageiros.<br>";
        }
    }
}

class Fusca extends Carro {
    public function buzinar() {
        echo "O Fusca está buzinando!<br>";
    }
}

class Porsche extends Carro {
    public function acelerar($incremento) {
        parent::acelerar($incremento * 2);
    }
}

class Ferrari extends Carro {
    public function acelerar($incremento) {
        parent::acelerar($incremento * 3);
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
        if ($this->ligado) {
            echo "A motocicleta está empinando!<br>";
        } else {
            echo "A motocicleta está desligada.<br>";
        }
    }

    public function adicionarPassageiro($numero) {
        if ($this->passageiros + $numero <= 2) {
            parent::adicionarPassageiro($numero);
        } else {
            echo "Uma motocicleta não pode ter mais de 2 passageiros.<br>";
        }
    }
}

class Scooter extends Motocicleta {
    public function __construct($marca, $modelo, $cor, $cilindrada) {
        parent::__construct($marca, $modelo, $cor, $cilindrada);
    }

    public function buzinar() {
        echo "O Scooter está buzinando!<br>";
    }
}

class Esportiva extends Motocicleta {
    public function __construct($marca, $modelo, $cor, $cilindrada) {
        parent::__construct($marca, $modelo, $cor, $cilindrada);
    }

    public function acelerarRapidamente() {
        parent::acelerar(100);
    }
}

class Caminhao extends Veiculo {
    private $capacidadeCarga;
    private $eixos;

    public function __construct($marca, $modelo, $cor, $capacidadeCarga, $eixos) {
        parent::__construct($marca, $modelo, $cor);
        $this->capacidadeCarga = $capacidadeCarga;
        $this->eixos = $eixos;
    }

    public function getCapacidadeCarga() {
        return $this->capacidadeCarga;
    }

    public function getEixos() {
        return $this->eixos;
    }
}


// Exemplos de uso
$fusca = new Fusca("Volkswagen", "Fusca", "Azul");
$fusca->ligar();
$fusca->acelerar(50);
echo "A velocidade do Fusca é: " . $fusca->getVelocidade() . " km/h<br>";

$porche = new Porsche("Porsche", "911", "Vermelho");
$porche->ligar();
$porche->acelerar(50);
echo "A velocidade do Porsche é: " . $porche->getVelocidade() . " km/h<br>";

$ferrari = new Ferrari("Ferrari", "F40", "Amarelo");
$ferrari->ligar();
$ferrari->acelerar(50);

echo "A velocidade do Fusca é: " . $fusca->getVelocidade() . " km/h<br>";
$fusca->adicionarPassageiro(4);
echo "O Fusca tem " . $fusca->getPassageiros() . " passageiros a bordo<br>";
$fusca->desligar();

$porsche = new Carro("Porsche", "911", "Vermelho", 2);
$porsche->ligar();
$porsche->acelerar(100);
echo "A velocidade do Porsche é: " . $porsche->getVelocidade() . " km/h<br>";
$porsche->adicionarPassageiro(2);
echo "O Porsche tem " . $porsche->getPassageiros() . " passageiro a bordo<br>";
$porsche->desligar();

$ferrari = new Carro("Ferrari", "488", "Amarelo", 2);
$ferrari->ligar();
$ferrari->acelerar(50);
echo "A velocidade da Ferrari é: " . $ferrari->getVelocidade() . " km/h<br>";
$ferrari->adicionarPassageiro(6);
echo "A Ferrari tem " . $ferrari->getPassageiros() . " passageiro a bordo<br>";
$ferrari->desligar();

$motocicleta = new Motocicleta("Honda", "CB 500F", "Branco", 500);
$motocicleta->ligar();
$motocicleta->acelerar(50);
echo "A velocidade da motocicleta é: " . $motocicleta->getVelocidade() . " km/h<br>";
$motocicleta->adicionarPassageiro(1);
echo "A motocicleta tem " . $motocicleta->getPassageiros() . " passageiro a bordo<br>";
$motocicleta->empinar();
$motocicleta->desligar();

$scooter = new Scooter("Honda", "PCX", "Vermelho", 150);
$scooter->ligar();
$scooter->acelerar(30);
echo "A velocidade do Scooter é: " . $scooter->getVelocidade() . " km/h<br>";
$scooter->adicionarPassageiro(1);
echo "O Scooter tem " . $scooter->getPassageiros() . " passageiro a bordo<br>";
$scooter->buzinar();
$scooter->desligar();

$esportiva = new Esportiva("Yamaha", "R1", "Azul", 1000);
$esportiva->ligar();
$esportiva->acelerar(60);
echo "A velocidade da Esportiva é: " . $esportiva->getVelocidade() . " km/h<br>";
$esportiva->acelerarRapidamente();
echo "A velocidade da Esportiva após acelerar rapidamente é: " . $esportiva->getVelocidade() . " km/h<br>";
$esportiva->adicionarPassageiro(1);
echo "A Esportiva tem " . $esportiva->getPassageiros() . " passageiro a bordo<br>";
$esportiva->empinar();
$esportiva->desligar();

$caminhao = new Caminhao("Volvo", "FH", "Branco", 20000, 6);
$caminhao->ligar();
$caminhao->acelerar(40);
echo "A velocidade do caminhão é: " . $caminhao->getVelocidade() . " km/h<br>";
echo "A capacidade de carga do caminhão é: " . $caminhao->getCapacidadeCarga() . " kg<br>";
echo "O caminhão tem " . $caminhao->getEixos() . " eixos<br>";
$caminhao->desligar();


?>
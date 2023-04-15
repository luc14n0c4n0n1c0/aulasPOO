<?php

class Lampada {
   private $ligada;
   private $potencia;
   private $intensidade;

   public function __construct($potencia) {
      $this->ligada = false;
      $this->potencia = $potencia;
      $this->intensidade = 100;
   }

   public function ligar() {
      $this->ligada = true;
   }

   public function desligar() {
      $this->ligada = false;
   }

   public function getEstado() {
      return $this->ligada ? "Ligada" : "Desligada";
   }

   public function getPotencia() {
      return $this->potencia;
   }

   public function conectarDimmer() {
      $this->intensidade = 50;
   }

   public function aumentarIntensidade() {
      $this->intensidade += 10;
      if ($this->intensidade > 100) {
         $this->intensidade = 100;
      }
   }

   public function diminuirIntensidade() {
      $this->intensidade -= 10;
      if ($this->intensidade < 0) {
         $this->intensidade = 0;
      }
   }

   public function getIntensidade() {
      return $this->intensidade;
   }
}

class Dimmer {
  private $intensidade;
  private $lampada;

  public function __construct($lampada) {
      $this->intensidade = 50;
      $this->lampada = $lampada;
  }

  public function aumentarIntensidade() {
      $this->intensidade += 10;
      if ($this->intensidade > 100) {
          $this->intensidade = 100;
      }
      $this->lampada->aumentarIntensidade();
  }

  public function diminuirIntensidade() {
      $this->intensidade -= 10;
      if ($this->intensidade < 0) {
          $this->intensidade = 0;
      }
      $this->lampada->diminuirIntensidade();
  }

  public function getIntensidade() {
      return $this->intensidade;
  }
}

$lampada = new Lampada(100);

// verificando o estado da lâmpada (inicialmente desligada)
echo "A lâmpada está " . ($lampada->getEstado() ? "ligada" : "desligada") . "<br>";

// ligando a lâmpada
$lampada->ligar();
echo "A lâmpada está " . ($lampada->getEstado() ? "ligada" : "desligada") . "<br>";

// verificando a potência da lâmpada
echo "A potência da lâmpada é de " . $lampada->getPotencia() . " watts<br>";

// criando um novo dimmer com intensidade inicial de 50%
$dimmer = new Dimmer($lampada);

// conectando a lâmpada ao dimmer
$lampada->conectarDimmer($dimmer);

// verificando a intensidade atual do dimmer
echo "A intensidade do dimmer é de " . $dimmer->getIntensidade() . "%<br>";

// aumentando a intensidade do dimmer para 75%
$dimmer->aumentarIntensidade(25);

// verificando a intensidade atual do dimmer
echo "A intensidade do dimmer é de " . $dimmer->getIntensidade() . "%<br>";

// diminuindo a intensidade do dimmer para 25%
$dimmer->diminuirIntensidade(50);

// verificando a intensidade atual do dimmer
echo "A intensidade do dimmer é de " . $dimmer->getIntensidade() . "%<br>";


?>

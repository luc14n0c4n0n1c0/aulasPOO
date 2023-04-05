<?php

class ContaBancaria {
  private $saldo;
  private $limite;

  public function depositar($valor) {
    $this->saldo += $valor;
  }
  
  public function sacar($valor) {
    if ($this->saldo + $this->limite >= $valor) {
      $this->saldo -= $valor;
      return true;
    }
    return false;
  }

  public function consultarSaldo() {
    return $this->saldo;
  }

  // getters e setters para os atributos privados

  public function getSaldo() {
    return $this->saldo;
  }

  public function setSaldo($saldo) {
    $this->saldo = $saldo;
  }

  public function getLimite() {
    return $this->limite;
  }

  public function setLimite($limite) {
    $this->limite = $limite;
  }
}

// utilização da classe

$conta = new ContaBancaria();
$conta->setSaldo(1000);
$conta->setLimite(500);

echo "Saldo atual: " . $conta->getSaldo() . "\n";
$conta->depositar(200);
echo "Saldo atual: " . $conta->getSaldo() . "\n";
$conta->sacar(1500);
echo "Saldo atual: " . $conta->getSaldo() . "\n";

?>

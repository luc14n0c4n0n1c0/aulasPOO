<?php

class ContaBancaria {
    private $saldo;
    private $limite;

    public function __construct($saldo = 0, $limite = 0) {
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($this->saldo + $this->limite >= $valor) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }

    public function consultarSaldo() {
        return $this->saldo;
    }
}

// Criando uma conta bancária com saldo inicial de R$ 1000,00 e limite de R$ 500,00
$minhaConta = new ContaBancaria(1000, 500);

// Consultando o saldo atual
echo "Saldo atual: R$ " . $minhaConta->consultarSaldo() . "<br>"; // Saldo atual: R$ 1000

// Depositando R$ 500,00
$minhaConta->depositar(500);

// Consultando o saldo atual
echo "Saldo atual: R$ " . $minhaConta->consultarSaldo() . "<br>"; // Saldo atual: R$ 1500

// Sacando R$ 2000,00
if ($minhaConta->sacar(2000)) {
    echo "Saque realizado com sucesso.<br>";
} else {
    echo "Não foi possível realizar o saque. Saldo insuficiente.<br>";
}

// Consultando o saldo atual
echo "Saldo atual: R$ " . $minhaConta->consultarSaldo() . "<br>"; // Saldo atual: R$ 1500

// Sacando R$ 200,00
if ($minhaConta->sacar(200)) {
    echo "Saque realizado com sucesso.<br>";
} else {
    echo "Não foi possível realizar o saque. Saldo insuficiente.<br>";
}

// Consultando o saldo atual
echo "Saldo atual: R$ " . $minhaConta->consultarSaldo() . "<br>"; // Saldo atual: R$ 1300


?>

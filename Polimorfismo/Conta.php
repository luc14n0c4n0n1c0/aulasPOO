<?php

require_once 'Pessoa.php';

class Conta {
    var $agencia;
    var $codigo;
    var $dataDeCriacao;
    var $titular;
    var $senha;
    var $saldo;
    var $cancelada;

    function __construct(Pessoa $titular) {
        $this->titular = $titular;
    }

    function retirar($quantia){
        if ($quantia > 0) {
            $this->saldo -= $quantia;
        }
    }

    function depositar($quantia){
        if ($quantia > 0){
            if ($quantia > 0){
                $this->saldo += $quantia;
            }
        }
    }

    function obterSaldo() {
        return $this->saldo;
    }

}

?>
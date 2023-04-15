<?php

require_once 'Pessoa.php';

class Conta {
    private $agencia;
    private $codigo;
    private $dataDeCriacao;
    private $titular;
    private $senha;
    private $saldo;
    private $cancelada;

    function __construct(Pessoa $titular, $Agencia, $Codigo, $DataDeCriacao, $Senha, $Saldo) {
        $this->titular = $titular;
        $this->codigo = $Codigo;
        $this->dataDeCriacao = $DataDeCriacao;
        $this->senha = $Senha;

        //Chamada a outro médoto da Classe
        $this->Depositar($Saldo);
        $this->Cancelada = false;
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

    function __destruct() {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada...<br>";
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
        return $this;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
        return $this;
    }

    public function getDataDeCriacao() {
        return $this->dataDeCriacao;
    }

    public function setDataDeCriacao($dataDeCriacao) {
        $this->dataDeCriacao = $dataDeCriacao;
        return $this;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
        return $this;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha)  {
        $this->senha = $senha;
        return $this;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
        return $this;
    }

    public function getCancelada() {
        return $this->cancelada;
    }

    public function setCancelada($cancelada) {
        $this->cancelada = $cancelada;
        return $this;
    }
}

?>
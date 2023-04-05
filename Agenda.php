<?php

class Agenda {
    public $dia;
    public $mes;
    public $ano;
    public $anotacao;

    public function anote($dia, $mes, $ano, $nota) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
        $this->anotacao = $nota;
        $this->validaData();
    }

    public function validaData() {
        if (($this->dia < 0) || ($this->dia > 31) || ($this->mes < 0) || ($this->mes > 12)) {
            $this->dia = 0;
            $this->mes = 0;
            $this->ano = 0;
            $this->anotacao = "ANOTAÇÃO NÃO INSERIDA: DATA INVÁLIDA";
        }
    }

    public function mostraAnotacao() {
        echo $this->dia . "/" . $this->mes . "/" . $this->ano . ": " . $this->anotacao . "<br>";
    }
}

$agenda1 = new Agenda();
$agenda2 = new Agenda();

$agenda1->anote(2, 10, 2023, "DIA DAS CRIANÇAS");
$agenda2->anote(7, 15, 2023, "INDEPENDÊNCIA DO BRASIL");

$agenda1->mostraAnotacao();
$agenda2->mostraAnotacao();

$agenda2->dia = 7;
$agenda2->mes = 15;
$agenda2->ano = 2023;
$agenda2->anotacao = "INDEPENDÊNCIA DO BRASIL";
$agenda2->mostraAnotacao();

?>
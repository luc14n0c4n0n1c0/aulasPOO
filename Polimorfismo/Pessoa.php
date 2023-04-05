<?php

class Pessoa {

    var $codigo;
    var $nome;
    var $altura;
    var $idade;
    var $nascimento;
    var $escolaridade;
    var $salario;

    /*Método Crescer
    *aumenta a altura em $centimentos
     */
    function Crescer($centimentos){
        if ($centimetros > 0) {
            $this->altura += $centimetros;
        }
    }

    /*método formar
    * altera a Escolaridade para $titulacao
    */
    function Formar($titulacao){
        $this->escolaridade = $titulacao;
    }

    /*método envelhecer
    * aumenta a Idade em $anos
    */
    function Evelhecer($anos){
        if ($anos > 0){
            $this->idade += $anos;
        }
    }

}

?>
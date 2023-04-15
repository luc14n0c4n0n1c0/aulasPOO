<?php

class Pessoa {

    private $codigo;
    private $nome;
    private $altura;
    private $idade;
    private $nascimento;
    private $escolaridade;
    private $salario;


    //Método construtor
    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario) {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }

    /*Método Crescer
    *aumenta a altura em $centimentos
     */
    function crescer($Centimentos){
        if ($centimetros > 0) {
            $this->altura += $Centimetros;
        }
    }

    /*método formar
    * altera a Escolaridade para $titulacao
    */
    function formar($Titulacao){
        $this->escolaridade = $Titulacao;
    }

    /*método envelhecer
    * aumenta a Idade em $anos
    */
    function evelhecer($Anos){
        if ($anos > 0){
            $this->idade += $Anos;
        }
    }

    //método destrutor
    function __destruct(){
        echo "Objeto {$this->Nome} finalizado...<br>";
    }

}

?>
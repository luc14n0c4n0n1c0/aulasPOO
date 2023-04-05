<?php

class Pessoa {
    private $nome;
    private $idade;
    private static $totalPessoas = 0;
    private $numeroPessoal; 
    private static $numeroPessoalStatico = 1; 

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->numeroPessoal = self::$numeroPessoalStatico; 
        self::$numeroPessoalStatico++; 
        self::$totalPessoas++;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public static function getTotalPessoas() {
        return self::$totalPessoas;
    }

    public function getNumeroPessoal() {
        return $this->numeroPessoal;
    }

    public static function getNumeroPessoalStatico() {
        return self::$numeroPessoalStatico;
    }

    public function aniversario() {
        $this->idade++;
    }

    public function podeVotar() {
        return $this->idade >= 16;
    }

    public function podeDirigir() {
        return $this->idade >= 18;
    }

    public function podeBeber() {
        return $this->idade >= 21;
    }

    public static function maisVelha(Pessoa $pessoa1, Pessoa $pessoa2) {
        if ($pessoa1->idade > $pessoa2->idade) {
            return $pessoa1;
        } else {
            return $pessoa2;
        }
    }
}

$pessoa1 = new Pessoa("João", 25);
$pessoa2 = new Pessoa("Maria", 30);

echo "Total de pessoas: " . Pessoa::getTotalPessoas() . "<br>"; 

echo $pessoa1->getNome() . " tem o número pessoal " . $pessoa1->getNumeroPessoal() . "<br>"; 
echo $pessoa2->getNome() . " tem o número pessoal " . $pessoa2->getNumeroPessoal() . "<br>"; 

echo "O próximo número pessoal será " . Pessoa::getNumeroPessoalStatico() . "<br>"; 

?>

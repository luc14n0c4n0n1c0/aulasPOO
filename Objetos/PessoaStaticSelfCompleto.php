<?php

class Pessoa {
    private $nome;
    private $idade;
    private static $totalPessoas = 0;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
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

// Criando duas pessoas
$pessoa1 = new Pessoa("João", 25);
$pessoa2 = new Pessoa("Maria", 30);

// Imprimindo o total de pessoas criadas até o momento
echo "Total de pessoas: " . Pessoa::getTotalPessoas() . "<br>"; // Total de pessoas: 2

// Verificando se as pessoas podem votar, dirigir e beber
echo $pessoa1->getNome() . " pode votar? " . ($pessoa1->podeVotar() ? "Sim" : "Não") . "<br>"; // João pode votar? Sim
echo $pessoa1->getNome() . " pode dirigir? " . ($pessoa1->podeDirigir() ? "Sim" : "Não") . "<br>"; // João pode dirigir? Sim
echo $pessoa1->getNome() . " pode beber? " . ($pessoa1->podeBeber() ? "Sim" : "Não") . "<br>"; // João pode beber? Não

echo $pessoa2->getNome() . " pode votar? " . ($pessoa2->podeVotar() ? "Sim" : "Não") . "<br>"; // Maria pode votar? Sim
echo $pessoa2->getNome() . " pode dirigir? " . ($pessoa2->podeDirigir() ? "Sim" : "Não") . "<br>"; // Maria pode dirigir? Sim
echo $pessoa2->getNome() . " pode beber? " . ($pessoa2->podeBeber() ? "Sim" : "Não") . "<br>"; // Maria pode beber? Sim

// Fazendo as pessoas aniversariarem
$pessoa1->aniversario();
$pessoa2->aniversario();

// Imprimindo as idades atualizadas
echo $pessoa1->getNome() . " tem " . $pessoa1->getIdade() . " anos.<br>"; // João tem 26 anos.
echo $pessoa2->getNome() . " tem " . $pessoa2->getIdade() . " anos.<br>"; // Maria tem 31 anos.

// Verificando qual pessoa é mais velha
$pessoaMaisVelha = Pessoa::maisVelha($pessoa1, $pessoa2);
echo "A pessoa mais velha é " . $pessoaMaisVelha->getNome() . ".<br>"; // A pessoa mais velha é Maria.


?>

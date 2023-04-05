<?php

class Candidato {
    private $nome;
    private $quantidadeDeVotos;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->quantidadeDeVotos = 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getQuantidadeDeVotos() {
        return $this->quantidadeDeVotos;
    }

    private function validarVoto() {
        // Aqui poderia ser incluída alguma lógica para validar se é possível votar ou não
        // Por exemplo, se a votação já acabou ou se o candidato foi desclassificado
        return true;
    }

    public function acrescentarVoto() {
        if ($this->validarVoto()) {
            $this->quantidadeDeVotos++;
        }
    }
}

// Testando o programa

$candidato1 = new Candidato("João");
$candidato2 = new Candidato("Maria");

$candidato1->acrescentarVoto();
$candidato1->acrescentarVoto();
$candidato2->acrescentarVoto();

echo "Candidato " . $candidato1->getNome() . " recebeu " . $candidato1->getQuantidadeDeVotos() . " votos.<br>";
echo "Candidato " . $candidato2->getNome() . " recebeu " . $candidato2->getQuantidadeDeVotos() . " votos.<br>";

?>
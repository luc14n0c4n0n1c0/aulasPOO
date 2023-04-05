<?php

class Pessoa {
    private $olhos;
    private $cabelo;
    private $usaOculos;
    private $roupa;
    private $objetoMao;

    public function __construct($olhos, $cabelo, $usaOculos, $roupa, $objetoMao) {
        $this->olhos = $olhos;
        $this->cabelo = $cabelo;
        $this->usaOculos = $usaOculos;
        $this->roupa = $roupa;
        $this->objetoMao = $objetoMao;
    }

    public function getOlhos() {
        return $this->olhos;
    }

    public function getCabelo() {
        return $this->cabelo;
    }

    public function usaOculos() {
        return $this->usaOculos;
    }

    public function getRoupa() {
        return $this->roupa;
    }

    public function getObjetoMao() {
        return $this->objetoMao;
    }
}

class Objeto {
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
}

$pessoa = new Pessoa('azuis', 'castanhos', true, 'calça jeans e blazer', new Objeto('lâmpada'));

echo "A pessoa tem olhos " . $pessoa->getOlhos() . ", cabelos " . $pessoa->getCabelo() . " e usa óculos? " . ($pessoa->usaOculos() ? "Sim" : "Não") . ".";
echo "<br>";
echo "Está usando " . $pessoa->getRoupa() . ".";
echo "<br>";
echo "Na mão, está segurando uma " . $pessoa->getObjetoMao()->getTipo() . ".";
?>

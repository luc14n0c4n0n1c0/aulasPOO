<?php

class Produto {
    private $fabricante;
    private $produtoInfo;

    public function __construct(Fabricante $fabricante, ProdutoInfo $produtoInfo) {
        $this->fabricante = $fabricante;
        $this->produtoInfo = $produtoInfo;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function setFabricante(Fabricante $fabricante) {
        $this->fabricante = $fabricante;
    }

    public function getProdutoInfo() {
        return $this->produtoInfo;
    }

    public function setProdutoInfo(ProdutoInfo $produtoInfo) {
        $this->produtoInfo = $produtoInfo;
    }
}

class Fabricante {
    private $produtos;

    public function __construct() {
        $this->produtos = array();
    }

    public function addProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function getProdutos() {
        return $this->produtos;
    }
}

class ProdutoInfo {
    private $descricao;
    private $valor;
    private $cor;

    public function __construct($descricao, $valor, $cor) {
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->cor = $cor;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
}

$fabricante = new Fabricante();

$produto1 = new Produto($fabricante, new ProdutoInfo("Caneta", 3.0, "Azul"));
$produto2 = new Produto($fabricante, new ProdutoInfo("Lápis", 1.5, "Preto"));

$fabricante->addProduto($produto1);
$fabricante->addProduto($produto2);

foreach ($fabricante->getProdutos() as $produto) {
    echo "Produto: " . $produto->getProdutoInfo()->getDescricao() . "<br>";
    echo "Valor: " . $produto->getProdutoInfo()->getValor() . "<br>";
    echo "Cor: " . $produto->getProdutoInfo()->getCor() . "<br><br>";
}


?>




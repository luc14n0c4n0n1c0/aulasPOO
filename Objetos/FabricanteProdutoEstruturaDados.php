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
    private $fabricanteInfo;

    public function __construct(FabricanteInfo $fabricanteInfo) {
        $this->produtos = array();
        $this->fabricanteInfo = $fabricanteInfo;
    }

    public function addProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function getFabricanteInfo() {
        return $this->fabricanteInfo;
    }

    public function setFabricanteInfo(FabricanteInfo $fabricanteInfo) {
        $this->fabricanteInfo = $fabricanteInfo;
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

class FabricanteInfo {
    private $nome;
    private $endereco;

    public function __construct($nome, $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}


$fabricanteInfo = new FabricanteInfo("Faber Castell", "Rua A, 123");

$fabricante = new Fabricante($fabricanteInfo);

$produto1 = new Produto($fabricante, new ProdutoInfo("Caneta", 3.0, "Azul"));
$produto2 = new Produto($fabricante, new ProdutoInfo("Lápis", 1.5, "Preto"));

$fabricante->addProduto($produto1);
$fabricante->addProduto($produto2);

echo "Fabricante: " . $fabricante->getFabricanteInfo()->getNome() . "<br>";
echo "Endereço: " . $fabricante->getFabricanteInfo()->getEndereco() . "<br><br>";

foreach ($fabricante->getProdutos() as $produto) {
    echo "Produto: " . $produto->getProdutoInfo()->getDescricao() . "<br>";
    echo "Valor: " . $produto->getProdutoInfo()->getValor() . "<br>";
    echo "Cor: " . $produto->getProdutoInfo()->getCor() . "<br><br>";
}

}


?>

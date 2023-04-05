<?php

class Estoque {
    private $produto;
    private $quantidade;
    private $preco;
    private static $totalProdutos = 0;

    public function __construct($produto, $quantidade, $preco) {
        $this->setProduto($produto);
        $this->setQuantidade($quantidade);
        $this->setPreco($preco);
        self::$totalProdutos += $quantidade;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setProduto($produto) {
        if (empty($produto)) {
            throw new Exception("Produto inválido.");
        }
        $this->produto = $produto;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        if ($quantidade < 0) {
            throw new Exception("Quantidade inválida.");
        }
        $this->quantidade = $quantidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            throw new Exception("Preço inválido.");
        }
        $this->preco = $preco;
    }

    public static function getTotalProdutos() {
        return self::$totalProdutos;
    }

    public function adicionarProdutos($quantidade) {
        $this->setQuantidade($this->getQuantidade() + $quantidade);
        self::$totalProdutos += $quantidade;
    }

    public function removerProdutos($quantidade) {
        $this->setQuantidade($this->getQuantidade() - $quantidade);
        self::$totalProdutos -= $quantidade;
    }

    public function atualizarPreco($preco) {
        $this->setPreco($preco);
    }

    public function consultarProduto() {
        return array(
            "produto" => $this->getProduto(),
            "quantidade" => $this->getQuantidade(),
            "preco" => $this->getPreco()
        );
    }

    public function valorTotalEstoque() {
        return $this->getQuantidade() * $this->getPreco();
    }
}

$estoque1 = new Estoque("", 10, 5);
$estoque2 = new Estoque("Produto 2", 5, 20);

$estoque1->adicionarProdutos(5);
$estoque1->removerProdutos(3);

echo "Total de produtos no estoque: " . Estoque::getTotalProdutos() . "\n";


?>


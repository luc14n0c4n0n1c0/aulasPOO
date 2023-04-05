<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Implemente os métodos getter e setter aqui

    public function info_produto() {
        return "Nome: {$this->nome}, Preço: {$this->preco}, Quantidade: {$this->quantidade}";
    }
}

class Estoque {
    private $produtos = array();

    public function adicionar_produto($produto) {
        // Implemente o método adicionar_produto aqui
    }

    public function remover_produto($nome_produto) {
        // Implemente o método remover_produto aqui
    }

    public function listar_produtos() {
        // Implemente o método listar_produtos aqui
    }
}

// Instanciando objetos da classe Produto
$produto1 = new Produto("Mouse", 50.0, 10);
$produto2 = new Produto("Teclado", 150.0, 5);

// Instanciando um objeto da classe Estoque
$estoque = new Estoque();

// Adicionando produtos ao estoque
$estoque->adicionar_produto($produto1);
$estoque->adicionar_produto($produto2);

// Listando produtos do estoque
$estoque->listar_produtos();

// Removendo um produto do estoque
$estoque->remover_produto("Mouse");

// Listando produtos do estoque após remover o produto
$estoque->listar_produtos();

?>


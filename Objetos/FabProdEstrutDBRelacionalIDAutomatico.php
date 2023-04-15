<?php

class Produto {
    private $id;
    private $fabricante;
    private $produtoInfo;
    private static $currentId = 1;

    public function __construct(Fabricante $fabricante, ProdutoInfo $produtoInfo) {
        $this->id = self::$currentId++;
        $this->fabricante = $fabricante;
        $this->produtoInfo = $produtoInfo;
    }

    public function getId() {
        return $this->id;
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
    private $id;
    private $produtos;
    private $fabricanteInfo;
    private static $currentId = 1;

    public function __construct(FabricanteInfo $fabricanteInfo) {
        $this->id = self::$currentId++;
        $this->produtos = array();
        $this->fabricanteInfo = $fabricanteInfo;
    }

    public function getId() {
        return $this->id;
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

    public function addProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }
}

class ProdutoInfo {
    private $id;
    private $descricao;
    private $valor;
    private $cor;
    private static $currentId = 1;

    public function __construct($descricao, $valor, $cor) {
        $this->id = self::$currentId++;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->cor = $cor;
    }

    public function getId() {
        return $this->id;
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
	private $id;
	private $nome;
	private $endereco;
    private static $currentId = 1;
	
	public function __construct($nome, $endereco) {
		$this->id = self::$currentId++; // removido o parâmetro $id, já que ele não é usado
		$this->nome = $nome;
		$this->endereco = $endereco;
	}

	public function getId() {
		return $this->id;
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

$fabricanteInfo1 = new FabricanteInfo("Faber Castell", "Rua A, 123");
$fabricanteInfo2 = new FabricanteInfo("BIC", "Rua B, 456");

$fabricante1 = new Fabricante($fabricanteInfo1);
$fabricante2 = new Fabricante($fabricanteInfo2);

$produto1 = new Produto($fabricante1, new ProdutoInfo("Caneta", 3.0, "Azul"));
$produto2 = new Produto($fabricante1, new ProdutoInfo("Lápis", 1.5, "Preto"));
$produto3 = new Produto($fabricante2, new ProdutoInfo("Borracha", 2.0, "Branco"));

$fabricante1->addProduto($produto1);
$fabricante1->addProduto($produto2);
$fabricante2->addProduto($produto3);

$produtos = array($produto1, $produto2, $produto3);
$fabricantes = array($fabricante1, $fabricante2);

foreach ($fabricantes as $fabricante) {
	echo "Fabricante ID: " . $fabricante->getId() . "<br>";
	echo "Nome: " . $fabricante->getFabricanteInfo()->getNome() . "<br>";
	echo "Endereço: " . $fabricante->getFabricanteInfo()->getEndereco() . "<br><br>";
}

foreach ($produtos as $produto) {
    echo "Produto ID: " . $produto->getId() . "<br>";
    echo "Produto: " . $produto->getProdutoInfo()->getDescricao() . "<br>";
    echo "Valor: " . $produto->getProdutoInfo()->getValor() . "<br>";
    echo "Cor: " . $produto->getProdutoInfo()->getCor() . "<br>";
    echo "Fabricante ID: " . $produto->getFabricante()->getFabricanteInfo()->getId() . "<br>";
    echo "Fabricante: " . $produto->getFabricante()->getFabricanteInfo()->getNome() . "<br><br>";
}


?>




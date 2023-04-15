<?php

class Produto {
	
	private $fabricante;
	
	public function __construct() {
	
	}
	
	public function getFabricante() {
		return $this->fabricante;
	}
	
	public function setFabricante($val) {
		$this->fabricante = $val;
	}
	
}

class Fabricante {
	
	private $produtos;
	
	public function __construct() {
		$this->produtos = array();
	}
	
	public function getProdutos() {
		return $this->produtos;
	}
	
	public function setProdutos($val) {
		$this->produtos = $val;
	}
	
}

$fabricante1 = new Fabricante();
$produto1 = new Produto();
$produto2 = new Produto();

// Associa��o entre Fabricante e Produto
$fabricante1->setProdutos(array($produto1, $produto2));
$produto1->setFabricante($fabricante1);
$produto2->setFabricante($fabricante1);

// Acessando a associa��o
echo "Produtos do fabricante: <br>";
$produtos = $fabricante1->getProdutos();
foreach ($produtos as $produto) {
	echo " - Produto <br>";
}

echo "Fabricante do produto 1: <br>";
$fabricante = $produto1->getFabricante();
echo " - Fabricante <br>";

?>



// A associa��o entre as classes Produto e Fabricante � de agrega��o, onde um objeto da classe Fabricante pode ser associado a um ou v�rios objetos da classe Produto.
/*A agrega��o � um tipo de associa��o entre classes em que uma classe � composta por outras classes, ou seja, possui uma rela��o de "tem-um" com as outras classes. No c�digo fornecido, a classe Produto possui uma associa��o com a classe Fabricante atrav�s do atributo mFabricante, indicando que um produto tem um fabricante.*/

/*Podemos identificar a agrega��o no c�digo observando a rela��o entre as classes, em que a classe Produto possui uma refer�ncia para um objeto da classe Fabricante. Al�m disso, a classe Fabricante � independente da classe Produto e pode existir por si s�, sem a necessidade de estar associada a um produto. Isso caracteriza a rela��o como uma agrega��o, em que uma classe � composta por outra, mas n�o � uma parte essencial dela.*/

/*A associa��o entre as classes Produto e Fabricante � uma agrega��o, onde a classe Produto mant�m uma refer�ncia para um �nico objeto da classe Fabricante atrav�s do membro privado $mFabricante e a classe Fabricante mant�m uma refer�ncia para uma cole��o de objetos da classe Produto atrav�s do membro privado $mProdutos, que � um array do tipo Produto. Essa rela��o � representada no diagrama de classe com uma seta unidirecional com o n�mero "1" do lado da classe Produto e um asterisco (*) do lado da classe Fabricante. Essa associa��o significa que um objeto da classe Produto precisa de um objeto da classe Fabricante para existir, mas o objeto da classe Fabricante pode existir sem o objeto da classe Produto.*/
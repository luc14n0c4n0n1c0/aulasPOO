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

// Associação entre Fabricante e Produto
$fabricante1->setProdutos(array($produto1, $produto2));
$produto1->setFabricante($fabricante1);
$produto2->setFabricante($fabricante1);

// Acessando a associação
echo "Produtos do fabricante: <br>";
$produtos = $fabricante1->getProdutos();
foreach ($produtos as $produto) {
	echo " - Produto <br>";
}

echo "Fabricante do produto 1: <br>";
$fabricante = $produto1->getFabricante();
echo " - Fabricante <br>";

?>



// A associação entre as classes Produto e Fabricante é de agregação, onde um objeto da classe Fabricante pode ser associado a um ou vários objetos da classe Produto.
/*A agregação é um tipo de associação entre classes em que uma classe é composta por outras classes, ou seja, possui uma relação de "tem-um" com as outras classes. No código fornecido, a classe Produto possui uma associação com a classe Fabricante através do atributo mFabricante, indicando que um produto tem um fabricante.*/

/*Podemos identificar a agregação no código observando a relação entre as classes, em que a classe Produto possui uma referência para um objeto da classe Fabricante. Além disso, a classe Fabricante é independente da classe Produto e pode existir por si só, sem a necessidade de estar associada a um produto. Isso caracteriza a relação como uma agregação, em que uma classe é composta por outra, mas não é uma parte essencial dela.*/

/*A associação entre as classes Produto e Fabricante é uma agregação, onde a classe Produto mantém uma referência para um único objeto da classe Fabricante através do membro privado $mFabricante e a classe Fabricante mantém uma referência para uma coleção de objetos da classe Produto através do membro privado $mProdutos, que é um array do tipo Produto. Essa relação é representada no diagrama de classe com uma seta unidirecional com o número "1" do lado da classe Produto e um asterisco (*) do lado da classe Fabricante. Essa associação significa que um objeto da classe Produto precisa de um objeto da classe Fabricante para existir, mas o objeto da classe Fabricante pode existir sem o objeto da classe Produto.*/
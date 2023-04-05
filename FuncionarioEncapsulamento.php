<?Php

class Pessoa {

    private $nome;
    private $idade;
    private $altura;
    private $peso;

    public function  __construct($nome, $idade, $altura, $peso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function andar(){
        echo "Estou andando.... <br><br>";
    }

    public function pular() {
        echo "Estou pulando....<br><br>";
    }

    public function falar() {
        echo "Estou falando....<br><br>";
    }
} 

class Funcionario {
    private $cargo;
    private $salario;
    private $posicao;

    public static $funcionarios = array();

    public function __construct($cargo, $salario){
        $this->cargo = $cargo;
        $this->salario = $salario;
        self::$funcionarios[] = $this; //adiciona a funcionário ao array de funcionários
        $this->posicao = 1; // Inicializa a posição hierárquica com 1
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getPosicao() {
        return $this->posicao;
    }

    public function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    public function trabalhar() {
        echo "O funcionario está trabalhando...<br>";
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "O funcionário recebeu um aumento de R$ " . $valor . "!<br>";
    }
 
    public static function aumentarSalarioTodos() {
       foreach (self::$funcionarios as $funcionario) {
         $aumento = $funcionario->getSalario() * 0.1;
         $funcionario->receberAumento($aumento);
       }
    }
          
    public static function medialSalarial() {
        $totalSalarios = 0;
        foreach (self::$funcionarios as $funcionario){
            $totalSalarios += $funcionario->getSalario();
            echo "Valor de variável totalSalarios: R$ " . $totalSalarios . "<br>";
        }
        return $media = round($totalSalarios / count(self::$funcionarios),2);
    }

    public static function totalFuncionarios() {
        $total = count(self::$funcionarios);
        echo "Total de funcionários cadastrados: " . $total . "<br>";
    }

    public function promover() {
        $aumento = $this->salario * 0.2; // aumenta o salário em 20%
        $this->salario += $aumento;
        $this->posicao++; // aumenta a posição hierarquica do funcionário em um nível
        echo "O funcionário foi promovido para a posição " . $this->posicao . " e seu novo salário é de R$ " . $this->salario . ".<br>";
    }
    
    public function calcularImpostos() {
        $impostos = $this->salario * 0.2; // calcula 20% do salário como impostos
        return $impostos;
    }
}

$pessoa1 = new Pessoa("Maria", 20, 1.68, 58);
$pessoa2 = new Pessoa("João", 35, 1.75, 80);
$pessoa3 = new Pessoa("José", 42, 1.80, 78);

$funcionario1 = new Funcionario("Analista de Sistemas", 5000.00);
$funcionario2 = new Funcionario("Desenvolvedor Full Stack", 8000.00);
$funcionario3 = new Funcionario("Gerente de Projetos", 12000.00);

//utilizar dos métodos
echo "Dados do funcionario 1: <br>";
echo "Cargo: " . $funcionario1->getCargo() . "Salário: R$ " . 
            $funcionario1->getSalario() . "<br>";
$funcionario1->trabalhar();
$funcionario1->receberAumento(1000.00);
echo "Novo salário do funcionário 1: R$ " .
                     $funcionario1->getSalario() . "<br>";
echo "Novo salário do funcionário 2: R$ " .
                     $funcionario2->getSalario() . "<br>";                 
echo "Novo salário do funcionário 3: R$ " .
                     $funcionario3->getSalario() . "<br>";

//aumento salarial de todos os funcionários em 10%
$funcionario1->aumentarSalarioTodos(10);
echo "Salário do funcionário 1 após aumento geral: R$ " . $funcionario1->getSalario() . "<br>";
echo "Salário do funcionário 2 após aumento geral: R$ " . $funcionario2->getSalario() . "<br>";
echo "Salário do funcionário 3 após aumento geral: R$ " . $funcionario3->getSalario() . "<br>";
                     
//média salarial dos funcionários
echo "Média salarial dos funcionários: R$ " .
                     $funcionario1->medialSalarial() . "<br>";

// Promovendo o funcionário 1
$funcionario1->promover();

// Calculando impostos do funcionário 1
$impostos_funcionario1 = $funcionario1->calcularImpostos();
echo "Impostos do funcionário 1: R$ " . $impostos_funcionario1 . "<br>";

// Promovendo o funcionário 2
$funcionario2->promover();

// Calculando impostos do funcionário 2
$impostos_funcionario2 = $funcionario2->calcularImpostos();
echo "Impostos do funcionário 2: R$ " . $impostos_funcionario2 . "<br>";

// Promovendo o funcionário 3
$funcionario3->promover();

// Calculando impostos do funcionário 3
$impostos_funcionario3 = $funcionario3->calcularImpostos();
echo "Impostos do funcionário 3: R$ " . $impostos_funcionario3 . "<br>";

?>
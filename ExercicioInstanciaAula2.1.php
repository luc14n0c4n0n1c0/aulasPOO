<?Php


class Pessoa {

    //atributos
    public $nome;
    public $idade;
    public $altura;
    public $peso;

    //metodos
    public function andar() {
        echo "Estou andando...";
    }

    public function pular() {
        echo "Estou pulando...";
    }

    public function falar() {
        echo "Estou falando...";
    }    

    public function calcularIMC($peso, $altura) {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    public function compararAltura($altura1, $altura2) {
        //$diferenca = ($altura1 > $altura2) ? ($altura1 - $altura2) : ($altura2 - $altura1);
        if ($altura1 > $altura2) {
            $diferenca = $altura1 - $altura2;
        } else {
            $diferenca = $altura2 - $altura1;
        }
        return $diferenca * 100; // converte para centímetros
    }
       

    public function dizerOla($nome) {
        return "Olá, $nome!";
    }

    public function fazerAniversario() {
        $this->idade++;
    }

    public function apresentar() {
        return "Oi, meu nome é $this->nome, tenho $this->idade anos, $this->altura m de altura e peso $this->peso kg.";
    }

}

// Criando a instância Ana e atribuindo valores
$ana = new Pessoa();
$ana->nome = "Ana";
$ana->idade = 25;
$ana->altura = 1.65;
$ana->peso = 60;

// Criando a instância Paulo e calculando o IMC
$paulo = new Pessoa();
$paulo->nome = "Paulo";
$paulo->idade = 30;
$paulo->altura = 1.8;
$paulo->peso = 75;
$imcPaulo = $paulo->calcularIMC($paulo->peso, $paulo->altura);
echo "O IMC de $paulo->nome é $imcPaulo. <br>";

// Comparando alturas
$julia = new Pessoa();
$julia->nome = "Julia";
$julia->idade = 28;
$julia->altura = 1.7;
$julia->peso = 58;
$diferencaAltura = $julia->compararAltura($julia->altura, $ana->altura);
echo "A diferença de altura entre $julia->nome e $ana->nome é de $diferencaAltura cm. <br>";

// Saudação personalizada
$lucas = new Pessoa();
$lucas->nome = "Lucas";
$lucas->idade = 22;
$lucas->altura = 1.75;
$lucas->peso = 70;
$saudacao = $lucas->dizerOla($lucas->nome);
echo "$saudacao <br>";

// Fazendo aniversário
$ana->fazerAniversario();
echo "Nova idade de $ana->nome: $ana->idade <br>";

// Apresentando pessoa
$apresentacaoAna = $ana->apresentar();
echo "$apresentacaoAna";

?>
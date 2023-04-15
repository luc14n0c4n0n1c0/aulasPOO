<?Php

class Pessoa {
    public $nome;       // atributo público
    protected $idade;  // atributo protegido
    private $cpf;       // atributo privado
  
    public function __construct($nome, $idade, $cpf) {
      $this->nome = $nome;
      $this->idade = $idade;
      $this->cpf = $cpf;
    }
  
    public function apresentar() {
      echo "Oi, meu nome é " . $this->nome . ", tenho " . $this->idade . " anos e meu CPF é " . $this->cpf . ". <br>";
    }
  
    protected function calcularIdade() {
      return $this->idade * 365; // calcula a idade em dias
    }
  
    private function exibirCpf() {
      echo "CPF: " . $this->cpf;
    }
  }
  
  class Aluno extends Pessoa {
    public function apresentar() {
      parent::apresentar(); // sobrescreve o método apresentar() para incluir a informação de que é um aluno.
      echo " Eu sou um aluno. <br>";
    }
  }
  
  $maria = new Pessoa("Maria", 25, "123.456.789-10");
  $maria->apresentar();  // "Oi, meu nome é Maria, tenho 25 anos e meu CPF é 123.456.789-10."
  // $maria->idade = 26;  // erro, tentando acessar um atributo protegido
  // $maria->cpf = "111.222.333-44";  // erro, tentando acessar um atributo privado
  // $maria->calcularIdade();  // erro, tentando acessar um método protegido
  // $maria->exibirCpf();  // erro, tentando acessar um método privado
  
  $joao = new Aluno("João", 20, "999.888.777-66");
  $joao->apresentar();  // "Oi, meu nome é João, tenho 20 anos e meu CPF é 999.888.777-66. Eu sou um aluno."
  // $joao->idade = 21;  // erro, tentando acessar um atributo protegido de outra classe
  

?>
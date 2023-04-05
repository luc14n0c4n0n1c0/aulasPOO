<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;
    private $emprestado;

    public function __construct($titulo, $autor, $ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->emprestado = false;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function isEmprestado() {
        return $this->emprestado;
    }

    public function emprestar() {
        $this->emprestado = true;
    }

    public function devolver() {
        $this->emprestado = false;
    }
}

class Usuario {
    private $nome;
    private $telefone;

    public function __construct($nome, $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}

class Biblioteca {
    private $livros;
    private $usuarios;

    public function __construct() {
        $this->livros = array();
        $this->usuarios = array();
    }

    public function adicionarLivro($livro) {
        array_push($this->livros, $livro);
    }

    public function removerLivro($livro) {
        $key = array_search($livro, $this->livros);
        if ($key !== false) {
            unset($this->livros[$key]);
        }
    }

    public function listarLivros() {
        return $this->livros;
    }

    public function buscarLivro($titulo) {
        foreach ($this->livros as $livro) {
            if ($livro->getTitulo() == $titulo) {
                return $livro;
            }
        }
        return null;
    }

    public function adicionarUsuario($usuario) {
        array_push($this->usuarios, $usuario);
    }

    public function removerUsuario($usuario) {
        $key = array_search($usuario, $this->usuarios);
        if ($key !== false) {
            unset($this->usuarios[$key]);
        }
    }
}

//Exemplo de uso das classes:
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954);
$livro2 = new Livro("A Guerra dos Tronos", "George R.R. Martin", 1996);
$usuario1 = new Usuario("João da Silva", "123456789");
$usuario2 = new Usuario("Maria Oliveira", "987654321");

$biblioteca = new Biblioteca();
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarUsuario($usuario1);
$biblioteca->adicionarUsuario($usuario2);


/ Emprestando um livro para um usuário
$livroEmprestado = $biblioteca->buscarLivro("O Senhor dos Anéis");
$usuario = $biblioteca->buscarUsuario("João Silva");
$livroEmprestado->emprestar($usuario);

// Devolvendo o livro emprestado
$livroDevolvido = $biblioteca->buscarLivro("O Senhor dos Anéis");
$livroDevolvido->devolver();

// Listando os livros da biblioteca
$livros = $biblioteca->listarLivros();
foreach ($livros as $livro) {
    echo $livro->getTitulo() . " - " . $livro->getAutor() . " - " . $livro->getAno() . "\n";
}


?>

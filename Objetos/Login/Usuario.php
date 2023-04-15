<?php

require_once "ConexaoDB.php";

class Usuario {
    // Atributos privados da classe
    private $nome;
    private $email;
    private $senha;

    // Método construtor da classe
    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    // Métodos públicos para acessar os atributos da classe (encapsulamento)
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public static function login($email, $senha) {
        // Conexão com o banco de dados
        $conexao = ConexaoDB::getInstance()->getConnection();
    
        // Consulta para verificar se o usuário existe
        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('ss', $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Verifica se encontrou algum registro
        if ($result->num_rows > 0) {
            // Retorna o primeiro registro encontrado
            $dadosUsuario = $result->fetch_assoc();
    
            // Cria um objeto Usuario com os dados do registro encontrado
            $usuario = new Usuario($dadosUsuario['nome'], $dadosUsuario['email'], $dadosUsuario['senha']);
    
            // Retorna o objeto Usuario
            return $usuario;
        } else {
            // Não encontrou nenhum registro, retorna null
            return null;
        }
    }
    
}

?>

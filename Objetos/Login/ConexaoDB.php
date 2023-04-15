<?php

class ConexaoDB {

    private $host;
    private $user;
    private $password;
    private $database;
    private $conexao;
    private static $instance = null;

    private function __construct($host, $user, $password, $database) {
        $this->conexao = new mysqli($host, $user, $password, $database);

        if ($this->conexao->connect_errno) {
            echo "Falha ao conectar com o banco de dados: " . $this->conexao->connect_error;
            exit();
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new ConexaoDB('localhost', 'root', '', 'loginphp');
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conexao;
    }

    public function __destruct() {
        $this->conexao->close();
        echo "Objeto finalizado...<br>";
    }

    public function query($sql) {
        $result = $this->conexao->query($sql);
        
        if (!$result) {
            echo "Erro na consulta ao banco de dados: " . $this->conexao->error;
            exit();
        }
        
        return $result;
    }
}

?>

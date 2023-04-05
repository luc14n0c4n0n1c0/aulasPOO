<?php

class DatabaseConnection {
    private $host;
    private $user;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $this->connection = mysqli_connect($host, $user, $password, $database);
        
        if (mysqli_connect_errno()) {
            echo "Falha ao conectar com o banco de dados: " . mysqli_connect_error();
            exit();
        }
    }

    public function __destruct() {
        mysqli_close($this->connection);
        echo "Objeto finalizado...<br>";
    }

    public function query($sql) {
        $result = mysqli_query($this->connection, $sql);
        
        if (!$result) {
            echo "Erro na consulta ao banco de dados: " . mysqli_error($this->connection);
            exit();
        }
        
        return $result;
    }
}

// Exemplo de uso
$db = new DatabaseConnection('localhost', 'root', '', 'RH');
$result = $db->query('SELECT ID_EMPREGADO, NM_EMPREGADO, VL_SALARIO FROM EMPREGADO');
// A conexão com o banco de dados será fechada automaticamente quando o objeto $db for destruído


// Criando a tabela HTML
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Salário</th>";
echo "</tr>";

// Iterando sobre o resultado da consulta e adicionando as linhas da tabela
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['ID_EMPREGADO']."</td>";
    echo "<td>".$row['NM_EMPREGADO']."</td>";
    echo "<td>".$row['VL_SALARIO']."</td>";
    echo "</tr>";
}

echo "</table>";

// Fecha a conexão com o banco de dados
$db = null;

// Criando a tabela HTML
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Salário</th>";
echo "</tr>";

// Iterando sobre o resultado da consulta e adicionando as linhas da tabela
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['ID_EMPREGADO']."</td>";
    echo "<td>".$row['NM_EMPREGADO']."</td>";
    echo "<td>".$row['VL_SALARIO']."</td>";
    echo "</tr>";
}

echo "</table>";

?>
<?php
require_once "ConexaoDB.php";
require_once "Usuario.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<p>As senhas não coincidem. Por favor, tente novamente.</p>";
        exit;
    }

    // Verificar se o token é válido e não expirou
    // Implemente sua lógica aqui

    // Atualizar a senha do usuário no banco de dados
    // Implemente sua lógica aqui

    header('Location: ResetSenha.php?success=1');
    exit;
}
?>

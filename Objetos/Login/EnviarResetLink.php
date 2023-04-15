<?php
require_once "ConexaoDB.php";
require_once "Usuario.php";
// Inclua a biblioteca de envio de e-mail de sua escolha aqui

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Verifica se o e-mail existe no banco de dados
    $conexao = ConexaoDB::getInstance()->getConnection();
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Gera um token único
        $token = bin2hex(random_bytes(32));

        // Salva o token no banco de dados com a data de expiração
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour")); // Token válido por 1 hora
        $sql = "UPDATE usuarios SET reset_token = :token, token_expiry = :expiry WHERE email = :email";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':token', $token);
        $stmt->bindValue(':expiry', $expiry);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        // Envia o e-mail com o link de redefinição de senha
        $reset_link = "https://yourwebsite.com/reset_password.php?token=$token";

        // Implemente a lógica de envio de e-mail aqui usando a biblioteca escolhida
    } else {
        // E-mail não encontrado no banco de dados
        // Você pode mostrar uma mensagem de erro ou simplesmente informar que um e-mail foi enviado, mesmo que não exista,
        // para evitar a enumeração de usuários
    }
}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <!-- Adicione seu CSS aqui -->
</head>
<body>
    <h1>Redefinir Senha</h1>
    <?php
    if (isset($_GET['success'])) {
        echo "<p>Sua senha foi redefinida com sucesso. <a href='Login.php'>Faça login</a>.</p>";
    } else {
    ?>
    <form method="post" action="AlterarSenha.php">
        <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
        <label for="password">Nova senha:</label>
        <input type="password" id="password" name="password" required>
        <label for="confirm_password">Confirme a nova senha:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <button type="submit">Redefinir Senha</button>
    </form>
    <?php } ?>
</body>
</html>

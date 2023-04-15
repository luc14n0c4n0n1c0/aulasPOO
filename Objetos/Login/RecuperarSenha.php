<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu sua senha</title>
    <!-- Adicione seu CSS aqui -->
</head>
<body>
    <h1>Esqueceu sua senha</h1>
    <p>Informe seu e-mail e enviaremos um link para redefinir sua senha.</p>
    <form method="post" action="EnviarResetLink.php">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Enviar link de redefinição</button>
    </form>
</body>
</html>


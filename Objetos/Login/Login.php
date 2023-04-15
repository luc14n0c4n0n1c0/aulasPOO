<?php
// Inclui o arquivo com a classe Usuario
require_once "Usuario.php";

session_start();

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os valores dos campos de email e senha
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Chama o método login da classe Usuario
    $usuario = Usuario::login($email, $senha);


    // Verifica se o login foi bem sucedido
    if ($usuario != null) {
        $mensagem = "<p>Bem vindo, " . $usuario->getNome() . "!</p>";

        $_SESSION['nome'] = $usuario->getNome();
        $_SESSION['email'] = $usuario->getEmail();
        header("Location: Principal.php");
        exit;
        
    } else {
        $mensagem = "<p>Usuário ou senha inválidos.</p>";
    }
}



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login com PHP e MySQL</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
		}
        h1 {
		    margin: 20px 0;
		    text-align: center;
	    }

	    .container {
		    width: 400px;
		    margin: 0 auto;
		    background-color: #fff;
		    padding: 20px;
		    border-radius: 5px;
		    box-shadow: 0px 0px 10px #aaa;
	    }

	    .form-group {
		    margin-bottom: 10px;
	    }

	    label {
		    display: block;
		    margin-bottom: 5px;
		    font-weight: bold;
	    }

	    input[type="email"],
	    input[type="password"] {
		    display: block;
		    width: 100%;
		    padding: 10px;
		    border-radius: 3px;
		    border: 1px solid #ccc;
		    font-size: 16px;
	    }

	    button {
		    display: block;
		    width: 100%;
		    padding: 10px;
		    border-radius: 3px;
		    border: none;
		    background-color: #2196f3;
		    color: #fff;
		    font-size: 16px;
		    cursor: pointer;
		    transition: background-color 0.3s ease;
	    }

	    button:hover {
		    background-color: #0e91d8;
	    }

	    .error {
		    color: red;
		    font-size: 14px;
		    margin-top: 5px;
	    }
    </style>
</head>
<body>
	<h1>Login com PHP e MySQL</h1>
    <div class="container">
	<?php
		// Verifica se o formulário foi submetido
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// Obtém os valores dos campos de email e senha
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			// Chama o método login da classe Usuario
			$usuario = Usuario::login($email, $senha);

			// Verifica se o login foi bem sucedido
			if ($usuario != null) {
				echo "<p>Bem vindo, " . $usuario->getNome() . "!</p>";
			} else {
				echo "<p class='error'>Usuário ou senha inválidos.</p>";
			}
		}
	?>

	<form method="post" action="">
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" id="email" name="email" required>
		</div>

		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" id="senha" name="senha" required>
		</div>

		<button type="submit">Entrar</button>
        <a href="RecuperarSenha.php">Esqueceu sua senha?</a>

	</form>
</div>
</body>
</html>
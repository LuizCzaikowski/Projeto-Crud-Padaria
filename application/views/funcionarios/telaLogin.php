<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="/CursoCode/css/estiloCadLog.css">
	<script type="text/javascript" src="/CursoCode/js/jquery-3.4.1.min"></script>
	<script type="text/javascript" src="/CursoCode/js/bootstrap.min.js"></script>
</head>
<body>
<div id="corpo-form">
	<h1>Entrar</h1>
	<form method="POST" action="/CursoCode/index.php/Login/Autenticar">
		Email: <input type="email" name="email" placeholder="Email">
		Senha: <input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Acessar">
		<a href="/CursoCode/index.php/Funcionarios/formFuncionarios">Ainda não é inscrito? <strong>Cadastre-se</strong></a>

	</form>
</div>
</body>
</html>

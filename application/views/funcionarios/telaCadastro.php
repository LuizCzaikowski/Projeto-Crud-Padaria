<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/CursoCode/css/estiloCadLog.css">
		<script type="text/javascript" src="/CursoCode/js/jquery-3.4.1.min"></script>
		<script type="text/javascript" src="/CursoCode/js/bootstrap.min.js"></script>
</head>
<body>
<div id="corpo-form-cad">
	<h1>Cadastrar</h1>
	<form method="POST" action="/CursoCode/index.php/Funcionarios/recebePost">
		Nome: <input type="text" name="nome" placeholder="Nome" maxlength="30">
		Telefone: <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
		Email: <input type="email" name="email" placeholder="Email" maxlength="40">
		Função: <input type="text" name="funcao" placeholder="funcao" maxlength="20">
		Senha: <input type="password" name="senha" placeholder="Senha" maxlength="15">
		Confirmar Senha: <input type="password" name="confirmar_senha" placeholder="Confirmar Senha" maxlength="15">
		<input type="submit" value="Cadastrar">

	</form>
</div>
</body>
</html>



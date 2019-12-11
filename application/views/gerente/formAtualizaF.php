<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Atulizar Dados</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="/CursoCode/css/estiloCadLog.css">
	<script type="text/javascript" src="/CursoCode/js/jquery-3.4.1.min"></script>
	<script type="text/javascript" src="/CursoCode/js/bootstrap.min.js"></script>
</head>
<body>
<div id="corpo-form-cad">
	<h1>Cadastrar</h1>
	<form method="POST" action="/CursoCode/index.php/Gerente/atualizarDadosF">
		      <input type="hidden" name="id" value="<?= $funcionario->id?>">
		Nome: <input type="text" name="nome" value="<?= $funcionario->nome ?>">
		Telefone: <input type="text" name="telefone" value="<?= $funcionario->telefone ?>">
		Email: <input type="email" name="email" value="<?= $funcionario->email ?>">
		Função: <input type="text" name="funcao" value="<?= $funcionario->funcao ?>">
		Salário: <input type="text" name="salario" value="<?= $funcionario->salario ?>">
		Senha: <input type="password" name="senha" value="<?= $funcionario->senha ?>">
		Confirmar Senha: <input type="password" name="confirmar_senha" value="<?= $funcionario->confirmar_senha ?>">
		<input type="submit" value="Atualizar">

	</form>
</div>
</body>
</html>

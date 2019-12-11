<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funcionários</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="/CursoCode/css/estiloListaFuncionarios.css?version=12">
	<script type="text/javascript" src="/CursoCode/js/jquery-3.4.1.min"></script>
	<script type="text/javascript" src="/CursoCode/js/bootstrap.min.js"></script>
</head>
<body>

	<?php if($this->session->flashdata("success")) : ?>
		<?= $this->session->flashdata("success") ?>
	<?php endif ?>

	<?php if($this->session->flashdata("danger")) : ?>
		<?= $this->session->flashdata("danger") ?>

	<?php endif ?>
		<h1>Funcionarios</h1>

		<table border="1">
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Função</th>
				<th>Salário</th>
				<th>Ações</th>
			</tr>
			<?php foreach ($funcionarios as $funcionario) {?>
				<tr>
					<td><?= $funcionario->id; ?></td>
					<td><?= $funcionario->nome; ?></td>
					<td><?= $funcionario->telefone; ?></td>
					<td><?= $funcionario->email; ?></td>
					<td><?= $funcionario->funcao; ?></td>
					<td><?= $funcionario->salario; ?></td>
					<td><a href="/CursoCode/index.php/Gerente/deletaFuncionario?id=<?= $funcionario->id ?>">Excluir</a></td>
					<td><a href="/CursoCode/index.php/Gerente/formAtualizaF?id=<?= $funcionario->id ?>">Atualizar</a> </td>
				</tr>
			<?php }?>

	<a href="/CursoCode/index.php/Gerente/formFuncionarios">Cadastrar Funcionário</a>
	<a href="/CursoCode/index.php/Gerente/telaSessaoGerente">Voltar</a>

		</table>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Estoque</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/CursoCode/css/estiloProdutos.css?version=12">
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
<h1>Estoque</h1>

<table border="1">
	<tr>
		<th>Código</th>
		<th>Nome</th>
		<th>Quantidade</th>
		<th>Preço Fornecedor</th>
		<th>Data de entrada do produto</th>
		<th>Validade</th>
	</tr>
	<?php foreach ($estoque as $estoque) {?>
		<tr>
			<td><?= $estoque->produto_id; ?></td>
			<td><?= $estoque->nome; ?></td>
			<td><?= $estoque->quantidade; ?></td>
			<td><?= $estoque->preco_fornecedor; ?></td>
			<td><?= $estoque->data_entrada; ?></td>
			<td><?= $estoque->data_validade; ?></td>
		</tr>
	<?php }?>

	<a href="/CursoCode/index.php/Estoque/formEstoqueF">Cadastrar produto no estoque</a>
	<a href="/CursoCode/index.php/Funcionarios/telaSessao">Voltar</a>

</table>
</body>
</html>

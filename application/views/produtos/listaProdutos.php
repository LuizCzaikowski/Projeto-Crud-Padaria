<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <link rel="stylesheet" href="/CursoCode/css/estiloProdutos.css?version=12">
		<script type="text/javascript" src="/CursoCode/js/jquery-3.4.1.min"></script>
		<script type="text/javascript" src="/CursoCode/js/bootstrap.min.js"></script>
		<title>Produtos</title>
</head>
<body>

	<?php if($this->session->flashdata("success")) : ?>
		<?= $this->session->flashdata("success") ?>
	<?php endif ?>

	<?php if($this->session->flashdata("danger")) : ?>
		<?= $this->session->flashdata("danger") ?>

	<?php endif ?>
	<h1>Produtos</h1>

	<table border="1">
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Preço</th>
		</tr>
		<?php foreach ($produtos as $produto) {?>
		<tr>
			<td><?= $produto->produto_id; ?></td>
			<td><?= $produto->nome; ?></td>
			<td><?= $produto->preco; ?></td>
		</tr>
		<?php }?>

		<a href="/CursoCode/index.php/Produtos/formProdutos">Cadastrar Produto</a>
		<a href="/CursoCode/index.php/Gerente/telaSessaoGerente">Voltar</a>

	</table>
</body>
</html>

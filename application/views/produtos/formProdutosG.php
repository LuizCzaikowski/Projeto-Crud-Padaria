<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Formulário</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="/CursoCode/css/estiloFormPro.css?version=12">
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
		<div id="corpo">
			<h1>Formulário de produtos</h1>
			<form action="/CursoCode/index.php/Produtos/novoProduto" method="POST">
				Nome: <input type="text" name="nome" placeholder="Nome do produto">
				Preço: <input type="text" name="preco" placeholder="Valor do produto">
				<input type="submit" value="Cadastrar Produto">
				<a href="/CursoCode/index.php/Produtos/listarProdutos">Voltar</a>
			</form>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de Estoque</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="UTF-8">
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
			<form action="/CursoCode/index.php/Estoque/novoProduto" method="POST">
				Nome: <input type="text" name="nome" placeholder="Nome do produto">
				Quantidade <input type="text" name="quantidade" placeholder="Quantidade de produtos">
				Preço fornecedor: <input type="text" name="preco_fornecedor" placeholder="Valor do fornecedor">
				Data de entrada:     <input type="text" name="data_entrada" placeholder="Data de entrada">
				Data de validade:    <input type="text" name="data_validade" placeholder="Data de validade">
				<input type="submit" value="Cadastrar Produto">
				<a href="/CursoCode/index.php/Estoque/listarEstoqueGerente">Voltar</a>

			</form>
		</div>

</body>
</html>

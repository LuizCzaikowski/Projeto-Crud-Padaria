<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Logado</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="/CursoCode/css/estiloHome.css">
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

		<nav class="menu">
			<ul>
				<li><a href="/CursoCode/index.php/Funcionarios/telaSessao">Home</a></li>
				<li><a href="/CursoCode/index.php/Estoque/listarEstoqueFuncionario">Estoque</a></li>
				<li><a href="/CursoCode/index.php/Produtos/listarProdutosF">Produtos</a></li>
				<!--<li><a href="">Encomendas</a></li>-->
				<li><a >Contato</a>
					<ul>
						<li><a href="https://www.google.com">Facebook</a></li>
					</ul>
				</li>
				<li><a href="/CursoCode/index.php/Login/logout">Sair</a></li>
			</ul>
		</nav>
</body>
</html>

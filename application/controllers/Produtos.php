<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller
{
	public function index()
	{
		$texto = "Você está usando o controller Produtos";
		$dados = array("mensagem" => $texto);
		$this->load->view("produtos/lista", $dados);
	}

	public function listar_array()
	{
		$this->load->model("ProdutosModel", "produtos");

		$resultado = $this->produtos->listar_todos();

		echo "<pre>";

		var_dump($resultado);
	}

	public function listarProdutos()
	{
		$this->load->model("ProdutosModel", "produtos");

		$resultado = $this->produtos->listar_todos();

		$dados = array("produtos" => $resultado);

		$this->load->view("produtos/listaProdutos", $dados);
	}

	public function listarProdutosF()
	{
		$this->load->model("ProdutosModel", "produtos");

		$resultado = $this->produtos->listar_todos();

		$dados = array("produtos" => $resultado);

		$this->load->view("produtos/listaProdutosF", $dados);
	}

	public function formProdutos()
	{
			$this->load->view('produtos/formProdutosG');
	}

	public function formProdutosF()
	{
		$this->load->view('produtos/formProdutos');
	}

	public function novoProduto()
	{
		$produtos = array(
			"produto_id" => $this->input->post("produto_id"),
			"nome" => $this->input->post("nome"),
			"preco" => $this->input->post("preco"),
		);
		$this->load->model("ProdutosModel");
		$this->ProdutosModel->salva($produtos);
		$this->session->set_flashdata("success", "Produto cadastrado");
		$this->load->view('produtos/formProdutosG');
	}

	public function novoProdutoF()
	{
		$produtos = array(
			"produto_id" => $this->input->post("produto_id"),
			"nome" => $this->input->post("nome"),
			"preco" => $this->input->post("preco"),
		);
		$this->load->model("ProdutosModel");
		$this->ProdutosModel->salva($produtos);
		$this->session->set_flashdata("success", "Produto cadastrado");
		$this->load->view('produtos/formProdutos');
	}

}

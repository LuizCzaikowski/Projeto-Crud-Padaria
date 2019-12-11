<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estoque extends CI_Controller
{
	public function listarEstoqueGerente()
	{
		$this->load->model("EstoqueModel", "estoque");

		$resultado = $this->estoque->listar_estoque();

		$dados = array("estoque" => $resultado);

		$this->load->view("estoque/listaEstoqueGerente", $dados);
	}

	public function listarEstoqueFuncionario()
	{
		$this->load->model("EstoqueModel", "estoque");

		$resultado = $this->estoque->listar_estoque();

		$dados = array("estoque" => $resultado);

		$this->load->view("estoque/listaEstoqueFuncionario", $dados);
	}

	public function formEstoqueG()
	{
		$this->load->view('estoque/formEstoqueG');
	}

	public function formEstoqueF()
	{
		$this->load->view('estoque/formEstoqueF');
	}

	public function novoProduto()
	{
		$estoque = array(
			"produto_id" => $this->input->post("produto_id"),
			"nome" => $this->input->post("nome"),
			"quantidade" => $this->input->post("quantidade"),
			"preco_fornecedor" => $this->input->post("preco_fornecedor"),
			"data_entrada" => $this->input->post("data_entrada"),
			"data_validade" => $this->input->post("data_validade"),
		);
		$this->load->model("EstoqueModel");
		$this->EstoqueModel->salva($estoque);
		$this->session->set_flashdata("success", "Produto cadastrado");
		$this->load->view('estoque/formEstoqueG');
	}

	public function novoProdutoF()
	{
		$estoque = array(
			"produto_id" => $this->input->post("produto_id"),
			"nome" => $this->input->post("nome"),
			"quantidade" => $this->input->post("quantidade"),
			"preco_fornecedor" => $this->input->post("preco_fornecedor"),
			"data_entrada" => $this->input->post("data_entrada"),
			"data_validade" => $this->input->post("data_validade"),
		);
		$this->load->model("EstoqueModel");
		$this->EstoqueModel->salva($estoque);
		$this->session->set_flashdata("success", "Produto cadastrado");
		$this->load->view('estoque/formEstoqueF');

	}
}

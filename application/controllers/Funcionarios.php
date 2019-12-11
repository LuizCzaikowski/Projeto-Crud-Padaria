<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller
{
	public function formFuncionarios ()
	{
		$this->load->view('funcionarios/telaCadastro');
	}

	public function formLogin()
	{
		$this->load->view('funcionarios/telaLogin');
	}

	public function telaInicial()
	{
		$this->load->view('funcionarios/telaInicial');
	}

	public function telaSessao()
	{
		$this->load->view('funcionarios/telaSessao');
	}

	public function telaFunGen()
	{
		$this->load->view('telaFunGen');
	}

	public function telaFunGenC()
	{
		$this->load->view('telaFunGenC');
	}

	public function recebePost()
	{
		$funcionarios = array(
			"nome" => $this->input->post("nome"),
			"telefone" => $this->input->post("telefone"),
			"email" => $this->input->post("email"),
			"funcao" => $this->input->post("funcao"),
			"salario" => $this->input->post("salario"),
			"senha" => md5($this->input->post("senha")),
			"confirmar_senha" => md5($this->input->post("confirmar_senha"))
		);
		$this->load->model('FuncionariosModel');
		$this->FuncionariosModel->insere($funcionarios);
		$this->load->view('funcionarios/telaLogin');

	}

	public function listarFuncionarios()
	{
		$this->load->model("FuncionariosModel", "funcionarios");

		$resultado = $this->funcionarios->listarFuncionarios();

		$dados = array("funcionarios" => $resultado);

		$this->load->view("gerente/listarFuncionarios", $dados);
	}
       
}

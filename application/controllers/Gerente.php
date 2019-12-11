<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerente extends CI_Controller
{

	public function recebePost()
	{
		$gerente = array(
			"nome" => $this->input->post("nome"),
			"telefone" => $this->input->post("telefone"),
			"email" => $this->input->post("email"),
			"salario" => $this->input->post("salario"),
			"senha" => md5($this->input->post("senha")),
			"confirmar_senha" => md5($this->input->post("confirmar_senha"))
		);
		$this->load->model('GerenteModel');
		$this->GerenteModel->insere($gerente);
		$this->load->view('gerente/telaLoginGerente');


	}

	public function deletaFuncionario()
	{
		$id = $_GET['id'];
		$this->load->model('GerenteModel');
		$this->GerenteModel->excluir($id);
		$this->load->view('gerente/telaSessao');
	}

	public function formAtualizaF()
	{
		$id = $_GET['id'];
		$this->load->model('GerenteModel');
		$vetor["funcionario"] = $this->GerenteModel->atualiza($id);
		$this->load->view('gerente/formAtualizaF', $vetor);
	}

	public function atualizarDadosF()
	{
		$this->load->model('GerenteModel');
		$this->GerenteModel->update();
		$this->load->view('gerente/telaSessao');
	}

	public function recebePostFuncionario()
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
		$this->load->view('funcionarios/telaCadastroG');


	}

	public function formFuncionarios()
	{
		$this->load->view('funcionarios/telaCadastroG');
	}

	public function cadastro()
	{
		$this->load->view('gerente/telaCadastro');
	}

	public function telaSessaoGerente()
	{
		$this->load->view('gerente/telaSessao');
	}

	public function formGerente ()
	{
		$this->load->view('gerente/telaLoginGerente');
	}
}

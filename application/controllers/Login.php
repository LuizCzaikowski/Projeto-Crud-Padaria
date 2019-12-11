<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function autenticar()
	{
		$this->load->model("FuncionariosModel");
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$funcionarios = $this->FuncionariosModel->logarFuncionarios($email, $senha);
		if ($funcionarios)
		{
			$this->session->set_userdata("usuario_logado", $funcionarios);
			$this->session->set_flashdata("success", "");
			$this->load->view('funcionarios/telaSessao');
		}else{
			$this->session->set_flashdata("danger", "Email ou senha inválidos!");
			$this->load->view('funcionarios/telaLogin');
		}

	}

	public function autenticarGerente()
	{
		$this->load->model("GerenteModel");
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$gerente = $this->GerenteModel->logarGerente($email, $senha);
		if ($gerente)
		{
			$this->session->set_userdata("usuario_logadoG", $gerente);
			$this->session->set_flashdata("success", "");
			$this->load->view('gerente/telaSessao');
		}
		else{
			$this->session->set_flashdata("danger", "Email ou senha inválidos!!");
			$this->load->view('gerente/telaCadGerente');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success", "Deslogado com sucesso!");
		$this->load->view('funcionarios/telaInicial');
	}

	public function logout2()
	{
		$this->session->unset_userdata("usuario_logadoG");
		$this->session->set_flashdata("success", "Deslogado com sucesso!");
		$this->load->view('funcionarios/telaInicial');
	}

}

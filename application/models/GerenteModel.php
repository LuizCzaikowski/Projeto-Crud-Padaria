<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GerenteModel extends CI_Model
{
	public $nome;
	public $telefone;
	public $email;
	public $funcao;
	public $salario;
	public $senha;
	public $confirmar_senha;

	public function insere($gerente)
	{
		return $this->db->insert('gerente', $gerente);
	}

	public function logarGerente($email, $senha)
	{
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$gerente = $this->db->get("gerente")->row_array();
		return $gerente;

	}

	public function excluir($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("funcionarios");
	}

	public function atualiza($id)
	{
		$this->db->where("id", $id);
		return $this->db->get("funcionarios")->row();
	}

	public function update()
	{
		$this->nome = $this->input->post("nome");
		$this->telefone = $this->input->post("telefone");
		$this->email = $this->input->post("email");
		$this->funcao = $this->input->post("funcao");
		$this->salario = $this->input->post("salario");
		$this->senha = $this->input->post("senha");
		$this->confirmar_senha = $this->input->post("confirmar_senha");
		$id = $this->input->post("id");
		$this->db->where("id", $id);
		$this->db->update("funcionarios", $this);

	}

}

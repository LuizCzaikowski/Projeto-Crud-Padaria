<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionariosModel extends CI_Model
{
	public function insere($funcionarios)
	{
		return $this->db->insert('funcionarios', $funcionarios);
	}

	public function logarFuncionarios($email, $senha)
	{
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$funcionarios = $this->db->get("funcionarios")->row_array();
		return $funcionarios;
	}

	public function listarFuncionarios()
	{
		$this->db->select("id, nome, telefone, email, funcao, salario");

		$resultado = $this->db->get("funcionarios")->result();

		return $resultado;
	}
}

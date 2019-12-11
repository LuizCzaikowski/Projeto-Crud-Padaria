<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutosModel extends CI_Model
{
	public function listar_todos()
	{
		$this->db->select("produto_id, nome, preco");

		$resultado = $this->db->get("produtos")->result();

		return $resultado;
	}

	public function salva($produtos)
	{
		$this->db->insert("produtos", $produtos);
	}
}

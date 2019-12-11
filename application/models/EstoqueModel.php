<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstoqueModel extends CI_Model
{
	public function listar_estoque()
	{
		$this->db->select("produto_id, nome, quantidade, preco_fornecedor, data_entrada, data_validade");

		$resultado = $this->db->get("estoque")->result();

		return $resultado;
	}

	public function salva($estoque)
	{
		$this->db->insert("estoque", $estoque);
	}
}

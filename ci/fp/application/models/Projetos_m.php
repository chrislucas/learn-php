<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projetos_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

	public function criar_projeto($projeto) {
		$this->db->insert('tbl_pro_projeto', $projeto);
		return $this->db->insert_id();
	}

	public function buscar_projetos($id_empresa) {
		$this->db->where('id_empresa', $id_empresa);
		$rs = $this->db->get('tbl_pro_projeto');
		var_dump($rs);
		die();
		return $rs->result_array();
	}

	public function buscar_projeto($projeto) {
		$this->db->where('id_projeto', $projeto['id_projeto']);
		$this->db->where('id_empresa', $projeto['id_empresa']);
		$rs = $this->db->get('tbl_pro_projeto');
		return $rs->result_array();
	}

	public function editar_projeto($projeto) {
		$this->db->where('id_projeto', $projeto['id_projeto']);
		$this->db->where('id_projeto', $projeto['id_projeto']);
		$this->db->trans_begin();

		$this->db->update('tbl_pro_projeto', $projeto);

		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}

	}

	public function remover_projeto($projeto) {
		$this->db->where('id_projeto', $projeto['id_projeto']);
		$this->db->where('id_projeto', $projeto['id_projeto']);
		$this->db->trans_begin();

		$this->db->delete('tbl_pro_projeto');

		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    return false;
		}
		else{
			$this->db->trans_commit();
			return true;
		}
	}


}

/* End of file Projetos_m.php */
/* Location: ./application/models/Projetos_m.php */

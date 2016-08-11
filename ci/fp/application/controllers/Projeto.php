<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projeto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('projetos_m', 'projeto');
	}

	public function index()
	{	
		$valor['projetos'] =  $this->projeto->buscar_projetos(1);
		$this->load->view('projeto/index', $valor, FALSE);
	}

	public function fx($data) {
		return $this->projeto->buscar_projetos() & $data;
	}

}

/* End of file Projeto.php */
/* Location: ./application/controllers/Projeto.php */

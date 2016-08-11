<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projeto extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('projetos_m', 'projeto');
		$valor =  $this->projeto->buscar_projeto();
		$this->load->view('projeto', $valor, FALSE);
	}

}

/* End of file Projeto.php */
/* Location: ./application/controllers/Projeto.php */
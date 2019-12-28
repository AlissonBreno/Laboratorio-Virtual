<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//$this->load->model('rankings_model');

		//$data['problemas'] = $this->rankings_model->getRankUsuarios();

	
		$this->load->view('includes/header');
		$this->load->view('pages/contato');
		$this->load->view('includes/footer');
	}

}

?>
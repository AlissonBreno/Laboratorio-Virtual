<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Ossos extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->load->model('ossos_model');
		$var['div'] = $this->ossos_model->retorna_ossos();

		$this->load->view('includes/header');		
		$this->load->view('pages/ossos',$var);
		$this->load->view('includes/footer');
	}

	public function cadastrar_osso(){
		$this->load->view('includes/header');
		$this->load->view('cadastrar_osso');
		$this->load->view('includes/footer');
	}

	public function cadastrar_divisao(){
		$this->load->model('ossos_model');	
		$this->ossos_model->cadastrar_divisao();
	}
}
?>
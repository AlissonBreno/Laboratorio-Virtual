<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login');
		$this->load->view('includes/footer');
	}

	public function logar(){
		$this->load->model('login_model');		
		$this->login_model->logar();
	}

	public function sair(){		
		$this->session->sess_destroy();
		redirect('login');
	}
	

}

?>
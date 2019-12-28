<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$tipo = $this->session->userdata('tipo');
		if($tipo == 2 || $tipo == 3 || $tipo == 0){
			$this->load->view('includes/header');
			$this->load->view('pages/dashboard');
			$this->load->view('includes/footer');	
		}else{
			redirect('home');
		}
	}

}

?>
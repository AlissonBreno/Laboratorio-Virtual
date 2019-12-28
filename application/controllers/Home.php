<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$user = $this->session->userdata('codigo');
	}

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('pages/inicial');
		$this->load->view('includes/footer');
	}
	
}

?>
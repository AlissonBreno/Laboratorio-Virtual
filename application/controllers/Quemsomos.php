<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Quemsomos extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('pages/quemsomos');
		$this->load->view('includes/footer');
	}
}
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Ossos extends CI_Controller{
	public function index(){
		$this->load->view('includes/header');		
		$var['div'] = $this->padrao_model->retorna_ossos();
		$this->load->view('pages/ossos',$var);
		$this->load->view('includes/footer');
	}
}
?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Correcoes extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	//Carrega Lista de Exercícios
	public function index(){
		$this->load->model('correcoes_model');
		$this->load->model('exercicios_model');
		$this->load->model('cat_exercicios_model');
		$this->dados['correcoes'] = $this->correcoes_model->getCorrecoes();
		$this->dados['exercicios'] = $this->exercicios_model->getExercicios();
		$this->dados['cat_exercicios'] = $this->cat_exercicios_model->getCatExercicios();

		$tipo = $this->session->userdata('tipo');
		if($tipo == 2 || $tipo == 3 || $tipo == 0){
			$this->load->view('includes/header');
			$this->load->view('list/correcoes', $this->dados);
			//$this->load->view('modal/modal_correcao');
			$this->load->view('includes/footer');	
		}else{
			redirect('home');
		}
	}


}

?>
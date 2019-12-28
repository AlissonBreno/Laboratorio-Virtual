<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index($id = NULL){

		$id = $this->session->userdata('codigo');

		$this->load->model('perfil_model');
		$lista = $this->perfil_model->buscaExRes();
		$dados = array("tbl_exer_res" => $lista);

		$tipo = $this->session->userdata('tipo');
		if($tipo == 1 || $tipo == 2 || $tipo == 3 || $tipo == 0){
			//Usuários ordenados
			$this->load->model('rankings_model');
			
			$rank['usuarios'] = $this->rankings_model->getOrdenaUsuarios();
			

			if($id==NULL){
				redirect('home');	
			}

			$this->load->model('perfil_model');

			$query = $this->perfil_model->getUsuarioById($id);


			if($query==NULL){
				redirect('home');	
			}

			$info['campos'] = $query;

			$this->load->view('includes/header', $dados);
			$this->load->view('pages/perfil', $info + $rank);
			$this->load->view('includes/footer');
		}
		else{
			redirect('home');
		}
	}

}
?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Exercicios extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	//Carrega Lista de Exercícios
	public function index(){
		$this->load->model('exercicios_model');
		$this->load->model('cat_exercicios_model');
		$dados['exercicios'] = $this->exercicios_model->getExercicios();
		$dados['cat_exercicios'] = $this->cat_exercicios_model->getCatExercicios();

		$tipo = $this->session->userdata('tipo');
		if($tipo == 2 || $tipo == 3 || $tipo == 0){
			$this->load->view('includes/header');
			$this->load->view('list/exercicios', $dados);
			$this->load->view('modal/modal_exercicio');
			$this->load->view('includes/footer');	
		}else{
			redirect('home');
		}
	}

	//Carrega página de Cadastro de Exercícios
	public function Cadastrar(){

		$this->dados['flag'] = $this->input->post('flag');

		//carrega categoria de exercícios
		$this->load->model('cat_exercicios_model');
		$this->dados['cat_exercicios'] = $this->cat_exercicios_model->getCatExercicios();


		$this->load->view('includes/header');
		$this->load->view('add/exercicio', $this->dados);
		$this->load->view('includes/footer');
	}

	//Carrega página de visualização de Exercícios
	public function Visualizar($id = NULL){
		if($id == NULL){
			$this->session->set_flashdata('erro', 'Id inválido!');
			redirect('usuarios');
		}

		$this->load->model('usuarios_model');
		$query = $this->usuarios_model->getUsuarioById($id);

		if($query == NULL){
			$this->session->set_flashdata('erro', 'a Função não retornou nada!');
			redirect('usuarios');
		}

		$dados['usuarios'] = $query;

		$this->load->view('includes/header');
		$this->load->view('detail/usuario', $dados);
		$this->load->view('includes/footer');
	}

	//Carrega página de Atualização
	public function Atualizar($id = NULl){

		//carrega categoria de exercícios
		$this->load->model('cat_exercicios_model');
		$dados['cat_exercicios'] = $this->cat_exercicios_model->getCatExercicios();

		if($id == NULL){
			$this->session->set_flashdata('erro', 'Id inválido!');
			redirect('exercicios');
		}

		$this->load->model('exercicios_model');
		$query = $this->exercicios_model->getExercicioById($id);

		if($query == NULL){
			$this->session->set_flashdata('erro', 'a Função não retornou nada!');
			redirect('exercicios');
		}

		$dados['exercicios'] = $query;

		$this->load->view('includes/header');
		$this->load->view('edit/exercicio', $dados);
		$this->load->view('includes/footer');
	}

	//Salva registros (Cadastro ou Edição)
	public function Salvar(){	
		$this->load->model('exercicios_model');

		$dados['Nom_Exe'] = $this->input->post('nome');
		$dados['Cat_Exe'] = $this->input->post('categoria');
		$dados['Desc_Exe'] = $this->input->post('descricao');

		if($this->input->post('Dis_Exe') == 0){
			$dados['RespC_Exe'] = $this->input->post('resp_correta');
			$dados['Op1_Exe'] = $this->input->post('Op_1');
			$dados['Op2_Exe'] = $this->input->post('Op_2');
			$dados['Op3_Exe'] = $this->input->post('Op_3');
			$dados['Op4_Exe'] = $this->input->post('Op_4');
			$dados['Op5_Exe'] = $this->input->post('Op_5');
			$dados['Op6_Exe'] = $this->input->post('Op_6');
		}
		else{
			$dados['Dis_Exe'] = $this->input->post('Dis_Exe');

		}

		//Salvar Registro Alterado
		if($this->input->post('id') != NULL){

			$dadosATT['Nom_Exe'] = $this->input->post('nome');
			$dadosATT['Cat_Exe'] = $this->input->post('categoria');
			$dadosATT['Desc_Exe'] = $this->input->post('descricao');
			if($this->input->post('Dis_Exe') == 0){
				$dadosATT['RespC_Exe'] = $this->input->post('resp_correta');
				$dadosATT['Op1_Exe'] = $this->input->post('Op_1');
				$dadosATT['Op2_Exe'] = $this->input->post('Op_2');
				$dadosATT['Op3_Exe'] = $this->input->post('Op_3');
				$dadosATT['Op4_Exe'] = $this->input->post('Op_4');
				$dadosATT['Op5_Exe'] = $this->input->post('Op_5');
				$dadosATT['Op6_Exe'] = $this->input->post('Op_6');
			}
			else{
				$dadosATT['Dis_Exe'] = $this->input->post('Dis_Exe');

			}
			
			$this->exercicios_model->editExercicio	($dadosATT, $this->input->post('id'));
			$this->session->set_flashdata('mensagem', 'Edição realizada com Sucesso!');
			redirect('exercicios');
		
		//Salva um novo registro
		} else {
			$this->exercicios_model->addExercicio($dados);
			$this->session->set_flashdata('mensagem', 'Cadastrado realizado com Sucesso!');
			redirect('exercicios');
		}

	}

	public function Analisar($id = NULL){

		$this->load->model('exercicios_model');
		$query = $this->exercicios_model->getExercicioById($id);

		if($query == NULL){
			$this->session->set_flashdata('erro', 'a Função não retornou nada!');
			redirect('exercicios');
		}

		$dados['exercicios'] = $query;

		$this->load->view('includes/header');
		$this->load->view('edit/aprovacao/exercicio', $dados);
		$this->load->view('includes/footer');
	}

	public function ativar_exercicio(){
		$dadosATT['Status_Exe'] = 1;

		$this->load->model('exercicios_model');
		$this->exercicios_model->editExercicio($dadosATT, $this->input->post('id'));
		$this->session->set_flashdata('mensagem', 'O exercício agora está ativo!');
		redirect('exercicios');
	}
	public function reanalisar_exercicio(){
		$dadosATT['Status_Exe'] = 0;

		$this->load->model('exercicios_model');
		$this->exercicios_model->editExercicio($dadosATT, $this->input->post('id'));
		$this->session->set_flashdata('mensagem', 'O exercício agora está ativo!');
		redirect('exercicios');
	}
	public function inativar_exercicio(){
		$dadosATT['Status_Exe'] = 2;

		$this->load->model('exercicios_model');
		$this->exercicios_model->editExercicio($dadosATT, $this->input->post('id'));
		$this->session->set_flashdata('mensagem', 'O exercício agora está ativo!');
		redirect('exercicios');
	}

}

?>
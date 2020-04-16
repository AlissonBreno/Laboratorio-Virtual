<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	//Carrega Lista de Usuários
	public function index(){
		$this->load->model('usuarios_model');
		$dados['usuarios'] = $this->usuarios_model->getUsuarios();

		$tipo = $this->session->userdata('tipo');
		if($tipo == 2 || $tipo == 3 || $tipo == 0){
			$this->load->view('includes/header');
			$this->load->view('list/usuarios', $dados);
			$this->load->view('includes/footer');	
		}else{
			redirect('home');
		}
	}

	//Carrega página de Cadastro de usuários
	public function Cadastrar(){
		$this->load->view('includes/header');
		$this->load->view('add/usuario');
		$this->load->view('includes/footer');
	}

	//Carrega página de visualização de usuários
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
		$this->load->view('edit/usuario', $dados);
		$this->load->view('includes/footer');
	}

	//Salva registros (Cadastro ou Edição)
	public function Salvar(){	
		$this->load->model('usuarios_model');

		$dados['Ema_Usu'] = $this->input->post('email');
		$dados['Sen_Usu'] = 'ifsuldeminas';
		$dados['Tip_Usu'] = $this->input->post('tipo');
		$dados['Nom_Usu'] = $this->input->post('nome');
		$dados['Sob_Usu'] = $this->input->post('sobrenome');
		$dados['Rank_Usu'] = 0;
		$dados['Acer_Usu'] = 0;
		$dados['Tent_Usu'] = 0;

		//Salvar Registro Alterado
		if($this->input->post('id') != NULL){
			
			$dadosATT['Ema_Usu'] = $this->input->post('email');
			$dadosATT['Sen_Usu'] = $this->input->post('senha');
			$dadosATT['Tip_Usu'] = $this->input->post('tipo');
			$dadosATT['Nom_Usu'] = $this->input->post('nome');
			$dadosATT['Sob_Usu'] = $this->input->post('sobrenome');
			
			$this->usuarios_model->editUsuario($dadosATT, $this->input->post('id'));
			$this->session->set_flashdata('mensagem', 'Edição realizada com Sucesso!');
			redirect('usuarios');
		
		//Salva um novo registro
		} else {
			$this->usuarios_model->addUsuario($dados);
			$this->session->set_flashdata('mensagem', 'Cadastrado realizado com Sucesso!');
			redirect('usuarios');
		}

	}

	public function Apagar($id = NULL){
		if($id == NULL){
			$this->session->set_flashdata('erro', 'Id inválido!');
			redirect('usuarios');
		}

		$this->load->model('usuarios_model');
		$query = $this->usuarios_model->getUsuarioById($id);

		if($query != NULL){
			$this->usuarios_model->apagarUsuario($query->Cod_Usu);
			$this->session->set_flashdata('mensagem', 'Exclusão realizada com Sucesso!');
			redirect('usuarios');
		}else{
			$this->session->set_flashdata('erro', 'Exclusão não pode ser realizada');
			redirect('usuarios');
		}

	}

}

?>
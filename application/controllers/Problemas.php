<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Problemas extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('pages/problemas');
		$this->load->view('includes/footer');
	}

	public function sistema_osseo_Bovino(){

		$tipo = $this->session->userdata('tipo');
		if($tipo == 1 || $tipo == 2 || $tipo == 3 || $tipo == 0){
			$this->load->view('includes/header');
			$this->load->view('problemas/soBovino');
			$this->load->view('includes/footer');
		}
		else{
			redirect('home');
		}
	}

	public function listar_todos(){
		$tipo = $this->session->userdata('tipo');
		if($tipo == 1 || $tipo == 2 || $tipo == 3 || $tipo == 0){
			// Seleciona os Problemas
			$this->load->model('problemas_model');

			$dados['exercicios'] = $this->problemas_model->getProblemas();

			// Seleciona os Usuários
			$this->load->model('usuarios_model');
			$dadoss['usuarios'] = $this->usuarios_model->getUsuarios();

			// Seleciona os Exercícios resolvidos
			$dadosres['eresolvidos'] = $this->problemas_model->getProblemas_Res();

			$this->load->view('includes/header', $dadoss + $dadosres);
			$this->load->view('problemas/listarTodos', $dados);
			$this->load->view('includes/footer');
		}
		else{
			redirect('home');
		}
	}

	public function exercicio($id = NULL, $idu = NULL){

		$idu = $this->session->userdata('codigo');

		$this->load->model('perfil_model');

		$querie = $this->perfil_model->getUsuarioById($idu);


		if($querie==NULL){
			redirect('home');	
		}

		$info['campos'] = $querie;

		
			
		if($id==NULL){
			redirect('home');	
		}
		
		// Seleciona Problema por Id
		$this->load->model('problemas_model');

		$query = $this->problemas_model->getExercicioById($id);

		if($query==NULL){
			redirect('problemas');	
		}
		$dados['exercicios'] = $query;

		$this->load->model('usuarios_model');

		$dadoss['usuarios'] = $this->usuarios_model->getUsuarios();

		$this->load->view('includes/header', $info);
		$this->load->view('problemas/post_exercicio', $dados + $dadoss);
		$this->load->view('includes/footer');
	
	}

	public function enviar_resposta(){
		$this->load->model('problemas_model');
		$dados['Nom_ER'] = $this->input->post('nome');
		$dados['Cat_ER'] = $this->input->post('assunto');
		$dados['Dat_ER'] = date("Y-m-d");
		$dados['Alu_ER'] = $this->session->userdata('codigo');
		$dados['Cod_Exe'] = $this->input->post('id');
		$dados['Cat_ER'] = 1;

		

		$cor = $this->input->post('correta');
		$op = $this->input->post('opcao');

		$env = $this->input->post('env') + 1;
		$todos['Ten_Exe'] = $env;
		$t = $this->input->post('tentativas') + 1;
		$a = $this->input->post('acertos') + 1;
		$tent['Tent_Usu'] = $t;
		$acert['Acer_Usu'] = $a;
		$status['Sta_ER'] = 1;

		if($this->input->post('dissertativo') == 1){
			$dados['Sta_ER'] = 2;

			//Enviar para tabela de avaliação
			$opa = $this->problemas_model->verificaPendencia($this->input->post('id'), $this->session->userdata('codigo'));
			if($opa != NULL){
				if($opa->Cod_Exe == $this->input->post('id')){
					$this->session->set_flashdata('mensagem', 'Você já respondeu essa questão. Por favor, aguarde até que sua resposta seja avaliada para tentar novamente.');
					redirect('problemas');
				}
			}else{
				$this->problemas_model->addExercicio($dados,$this->input->post('id'), $status, $acert, $this->session->userdata('codigo'));
				$this->problemas_model->editExercicio($todos,$this->input->post('id'));
				$this->problemas_model->addTent($tent,$this->session->userdata('codigo'));
				$this->session->set_flashdata('mensagem', 'Sua resposta foi enviada aos avaliadores. Aguarde o resultado!');
				redirect('problemas');
			}

		}else if($cor == $op){
			$dados['Sta_ER'] = 1;
			$this->problemas_model->addExercicio($dados,$this->input->post('id'), $status, $acert, $this->session->userdata('codigo'));
			$this->problemas_model->editExercicio($todos,$this->input->post('id'));
			$this->problemas_model->addTent($tent,$this->session->userdata('codigo'));
			$this->session->set_flashdata('mensagem', 'Muito bem! Sua resposta para o problema está correta!');
			redirect('problemas');
		}else{
			$status['Sta_ER'] = 0;
			$this->problemas_model->addExercicio($dados,$this->input->post('id'),$status, $acert, $this->session->userdata('codigo'));
			$this->problemas_model->editExercicio($todos,$this->input->post('id'));
			$this->problemas_model->addTent($tent,$this->session->userdata('codigo'));
			$this->session->set_flashdata('mensagem', 'Infelizmente, a resposta não é esta. Tente novamente');
			redirect('problemas');
		}
	}
	public function enviar_resposta_Diss(){
		$this->load->model('problemas_model');

		$dados['Nom_EP'] = $this->input->post('nome');
		$dados['Ass_EP'] = $this->input->post('assunto');
		$dados['Dat_EP'] = date("Y-m-d");
		$dados['Res_EP'] = $this->input->post('resposta');
		$dados['Alu_EP'] = $this->session->userdata('codigo');
		$dados['Cod_Exe'] = $this->input->post('id');
		$dados['Sta_EP'] = false;

		$dadosPen['Nom_ER'] = $this->input->post('nome');
		$dadosPen['Cat_ER'] = $this->input->post('assunto');
		$dadosPen['Dat_ER'] = date("Y-m-d");
		$dadosPen['Alu_ER'] = $this->session->userdata('codigo');
		$dadosPen['Sta_ER'] = 2;
		$dadosPen['Cod_Exe'] = $this->input->post('id');
		$dadosPen['Tip_ER'] = 2;

		$cor = $this->input->post('correta');
		$op = $this->input->post('opcao');

		$env = $this->input->post('env') + 1;
		$todos['Env_Exe'] = $env;
		$t = $this->input->post('tentativas') + 1;
		$tent['Tent_Usu'] = $t;

		//Enviar para tabela de avaliação
		$opa = $this->problemas_model->get_EnviaExercicioByIdPendente($this->input->post('id'), $this->session->userdata('codigo'));
		if($opa != NULL){
			if($opa->Cod_Exe == $this->input->post('id')){
				$this->session->set_flashdata('mensagem', 'Você já respondeu essa questão. Por favor, aguarde até que sua resposta seja avaliada para tentar novamente.');
				redirect('problemas');
			}
		}else{
			$status['Sta_ER'] = 2;
			$this->problemas_model->addExercicio($dadosPen,$this->input->post('id'), $status, $acert, $this->session->userdata('codigo'));
			$this->problemas_model->addExePendente($dados,$this->input->post('id'));
			$this->problemas_model->editExercicio($todos,$this->input->post('id'));
			$this->problemas_model->addTent($tent,$this->session->userdata('codigo'));
			$this->session->set_flashdata('mensagem', 'Sua resposta foi enviada aos avaliadores. Aguarde o resultado!');
			redirect('problemas');
		}
		

	}
}
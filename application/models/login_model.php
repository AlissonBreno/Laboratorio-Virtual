<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

	public function logar(){
		$this->db->select('*')->from('tbl_usu')->where('Ema_Usu',$this->input->post('email'));
		$res = $this->db->get()->result();
		var_dump($res);
		if($res != null){
			$this->session->set_userdata('codigo',$res[0]->Cod_Usu);
			$this->session->set_userdata('email',$res[0]->Ema_Usu);
			$this->session->set_userdata('senha',$res[0]->Sen_Usu);
			$this->session->set_userdata('tipo', $res[0]->Tip_Usu);
			$this->session->set_userdata('nome', $res[0]->Nom_Usu);
			$this->session->set_userdata('sobrenome', $res[0]->Sob_Usu);
			$this->session->set_userdata('rank', $res[0]->Rank_Usu);
			$this->session->set_userdata('acertos', $res[0]->Acer_Usu);
			$this->session->set_userdata('tentativas', $res[0]->Tent_Usu);
			$this->session->set_userdata('logado','1');
			redirect('home');
		}else{
			redirect('login');
		}
	}

}

?>
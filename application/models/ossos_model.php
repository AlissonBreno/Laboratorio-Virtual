<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ossos_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function retorna_ossos(){
		$this->db->select('*')->from('tbl_div')->where('Oss_Div',$this->input->post('slct3'))->where('Vis_Div',$this->input->post('visao'));
		return $this->db->get()->result();
	}

	public function cadastrar_divisao(){
		$cad = array(
			"Img_Div"=>$_FILES['imagem_divisão']['name'],
			"Oss_Ori_Div"=>$_FILES['imagem_osso']['name'],
			"Nom_Div"=>$this->input->post('nome'),
			"Oss_Div"=>$this->input->post('osso'),
			"Vis_Div"=>$this->input->post('visao'),
			"Nom_Cie_Div"=>$this->input->post('nome_cientifico'),
			"Inf_Div"=>$this->input->post('informacoes')
		);
		$this->db->insert('tbl_div',$cad);
		redirect('padrao/ossos');
	}

}
?>
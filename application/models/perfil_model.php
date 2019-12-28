<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Perfil_model extends CI_Model{

	public function buscaExRes(){
		return $this->db->get("tbl_exer_res")->result_array();
	}
	public function getUsuarioById($id = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Cod_Usu', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_usu");
			return $query->row();
		}
	}

}
?>
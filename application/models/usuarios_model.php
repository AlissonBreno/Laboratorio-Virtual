<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuarios_model extends CI_Model{

	public function getUsuarios(){
		
		$query = $this->db->get('tbl_usu');
		return $query->result();
		
	}
	public function addUsuario($dados = NULL){
		if ($dados != NULL){
			$this->db->insert('tbl_usu', $dados);
		}
	}

	public function editUsuario($dadosATT = NULL, $id = NULL){
		if($dadosATT != NULL && $id != NULL){
			$this->db->update('tbl_usu', $dadosATT, array('Cod_Usu'=>$id)); 
		}
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

	public function apagarUsuario($id = NULL){
		if($id != NULL){
			$this->db->delete('tbl_usu', array('Cod_Usu' => $id));
		}
	}

}

?>
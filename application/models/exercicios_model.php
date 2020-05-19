<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Exercicios_model extends CI_Model{

	public function getExercicios(){
		$query = $this->db->get('tbl_exe');
		return $query->result();
		
	}
	public function addExercicio($dados = NULL){
		if ($dados != NULL){
			$this->db->insert('tbl_exe', $dados);
		}
	}

	public function editExercicio($dadosATT = NULL, $id = NULL){
		if($dadosATT != NULL && $id != NULL){
			$this->db->update('tbl_exe', $dadosATT, array('Cod_Exe'=>$id)); 
		}
	}
	
	public function getExercicioById($id = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Cod_Exe', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exe");
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
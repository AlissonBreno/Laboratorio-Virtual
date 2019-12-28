<?php 

class Problemas_model extends CI_Model{

	public function getProblemas(){
		$query = $this->db->get('tbl_exer');
		return $query->result();	
	}

	public function getProblemas_Res(){
		$query = $this->db->get('tbl_exer_res');
		return $query->result();	
	}

	public function getProblemas_Pen($id = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Cod_Exe', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exer_pen");
			return $query->row();
		}	
	}

	public function getExercicioById($id = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Cod_Exe', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exer");
			return $query->row();
		}
	}

	public function getExercicioByTipo($id = NULL){
		$query = $this->db->query('SELECT Tip_Exe FROM tbl_exer WHERE Cod_Exe ='.$id.'');
		$row = $query->row();
		return $row->Tip_Exe;

		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Cod_Exe', $id);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exer");
			return $query->row();
		}
	}

	public function get_EnviaExercicioById($id = NULL, $idu = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Cod_Exe', $id);
			$this->db->where('Alu_ER',$idu);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exer_res");
			return $query->row();
		}
	}

	public function addExercicio($dados = NULL, $id = NULL, $status = NULL, $acert = NULL, $idu = NULL){

		$opa = $this->problemas_model->get_EnviaExercicioById($id, $idu);
		if($opa != NULL){
			if($opa->Alu_ER != $idu){
				if ($dados != NULL){
					$this->db->insert('tbl_exer_res', $dados);
				}
				if($acert != NULL && $id != NULL){
					$this->db->update('tbl_usu', $acert, array('Cod_Usu'=>$idu)); 
				}	
			}else{
				if ($dados != NULL){
					$this->db->update('tbl_exer_res', $status, array('Cod_Exe'=>$id, 'Alu_ER' =>$idu)); 
				}
				if($acert != NULL && $id != NULL){
					$this->db->update('tbl_usu', $acert, array('Cod_Usu'=>$idu)); 
				}	
			}
		}else{
			if ($dados != NULL){
				$this->db->insert('tbl_exer_res', $dados);
			}
			if($acert != NULL && $idu != NULL){
				$this->db->update('tbl_usu', $acert, array('Cod_Usu'=>$idu)); 
			}
		}
	}

	public function get_EnviaExercicioByIdPendente($id = NULL, $idu = NULL){
		if($id != NULL){
			// Verific se o Id está no Banco de Dados
			$this->db->where('Cod_Exe', $id);
			$this->db->where('Alu_EP', $idu);
			// Limita apenas a um registro.
			$this->db->limit(1); 
			//pega o usuário referente a $id
			$query = $this->db->get("tbl_exer_pen");
			return $query->row();
		}
	}
	
	public function addExePendente($dados = NULL, $id = NULL){
		$opa = $this->problemas_model->get_EnviaExercicioByIdPendente($id);
		
		if ($dados != NULL){
			$this->db->insert('tbl_exer_pen', $dados);
		}
	}

	public function editExercicio($todos = NULL, $id = NULL){
		if($todos != NULL && $id != NULL){
			$this->db->update('tbl_exer', $todos, array('Cod_Exe'=>$id)); 
		}
	}

	public function addTent($tent = NULL, $id = NULL){
		if($tent != NULL && $id != NULL){
			$this->db->update('tbl_usu', $tent, array('Cod_Usu'=>$id)); 
		}
	}

}
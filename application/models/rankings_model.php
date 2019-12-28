<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings_model extends CI_Model{

	public function getOrdenaUsuarios(){
		$this->db->order_by('Acer_Usu', 'DESC');
		$query = $this->db->get('tbl_usu');
		//$this->rankings_model->getRankUsuarios();
		return $query->result();
		
	}
	
	public function getRankUsuarios(){
		$query = $this->db->query('SELECT * FROM tbl_usu');
		$linhas = $query->num_rows();

		$i = 1;
		for ($rank = array(); count($rank) < $linhas; $rank = array_unique($rank)) {
		    $rank[] = $i;
			$i++;
		}

		return $rank;

	}

}
?>
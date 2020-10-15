<?php

class Login_Model extends CI_Model {
	
	public function Check_Login($table, $where) {
		return $this->db->get_where($table, $where);
	}

	public function GetWhere($table, $data){
		$res=$this->db->get_where($table, $data);
		return $res->result_array();
	}

}

?>
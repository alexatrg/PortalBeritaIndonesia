<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_Model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function GetData($table){
		$res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
		return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
	}

	public function GetWhere($table, $data){
		$res=$this->db->get_where($table, $data);
		return $res->result_array();
	}
	
	public function Insert($table,$data){
		$res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
		return $res; // Kode ini digunakan untuk mengembalikan hasil $res
	}
}

?>
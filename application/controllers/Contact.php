<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('Contact_View');
	}

	public function Insert()
	{
		$this->load->model('Contact_Model');

		$data = array(
			'id_contact' => $this->input->post('id_contact'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
	 	);

	 	$data = $this->Contact_Model->Insert('tbl_contact', $data);

		echo "<script> alert('Terimakasih telah menghubungi kami. Pesan Anda akan kami balas segera mungkin.'); location='" . base_url('Contact') . "'</script>";
	 }
}

?>
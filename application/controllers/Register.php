<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_Model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('Register_View');
	}

	public function Insert()
    {
		$this->load->model('Register_Model');

		$data = array(
			'id_user' => $this->input->post('id_user'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'status' => "User",
	 	);

	 	$data = $this->Register_Model->Insert('tbl_user', $data);

		echo "<script> alert('Terimakasih telah melakukan pendaftaran. Anda sudah bisa Login.'); location='" . base_url('Login') . "'</script>";
	}

	public function Register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Address', 'required|trim');
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'this email has already registered'
        ]);

        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('Register');
        } 

        else 
        {
            $data = [
                'username' => htmlspecialchars($this->input->post('username')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
				'status' => "user",
            ];

            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terimakasih telah melakukan pendaftaran. Anda sudah bisa Login.</div>');
            redirect('Login');
        }
    }
}

?>
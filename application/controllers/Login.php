<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Login_Model');
        $this->load->library('form_validation');
	}

	public function index() 
	{
		if($this->session->userdata('login') != "success")
		{
			$this->load->view("Login_View");
		}

		else 
		{
			if($this->session->userdata('status') == "user")
			{
				redirect(base_url("UserDashboard"));
			}

			else if($this->session->userdata('status') == "admin")
			{
				redirect(base_url("Admin"));
			}
		}
	}

	public function Insert() 
	{
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		
		$where = array(
			'username' => $username,
			'password' => $password
		);
		
		$cek = $this->Login_Model->Check_Login("tbl_user", $where)->num_rows();
		
		if($cek > 0) {
			$data_user = $this->Login_Model->GetWhere('tbl_user', array('username' => $username));

			$data_session = array(
				'id_user' => $data_user[0]['id_user'],
				'nama' => $data_user[0]['nama'],
				'status' => $data_user[0]['status'],
				'login' => "success",
			);

			$this->session->set_userdata($data_session);

			if($this->session->userdata('status') == "user")
			{
				redirect(base_url("UserDashboard"));
			}

			if($this->session->userdata('status') == "admin")
			{
				redirect(base_url("Admin"));
			}
		}
		
		else {
			echo "<script> alert('Username atau Password Salah.'); location='" . base_url('Login') . "'</script>";
		}
	}

	public function Login()
    {
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) 
        {
            $this->load->view('Login');
        }

        else 
        {
        	$email = $this->input->post('email');
		    $password = $this->input->post('password');
		    $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		    if ($user)
		    {
		        if (password_verify($password, $user['password'])) 
		        {
		            $data = [
		                'id_user' => $user['id_user'],
		                'nama' => $user['nama'],
		                'email' => $user['email'],
		                'status' => $user['status'],
						'login' => "success",
		            ];

		            $this->session->set_userdata($data);

		            if ($this->session->userdata('status') == "user") 
		            {
		                redirect('UserDashboard');
		            } 

		            else if ($this->session->userdata('status') == "admin") 
		            {
		                redirect('Admin');
		            }
		        }
		    } 

		    else {
		        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda belum terdaftar.</div>');
            	redirect('Login');
		    }
        }
    }
}

?>
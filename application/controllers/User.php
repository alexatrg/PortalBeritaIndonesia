<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
				$this->load->model('User_Model');
				$data = $this->User_Model->GetData('tbl_user'); $data = array('data' => $data);
				$this->load->view('User_View', $data);
			}
		}
	}
	
	public function Add()
	{
		$this->load->view('User_Add');
	}

	public function Insert()
	{
		$upload = $this->UploadImage();

		if($upload['result'] == "success") 
		{
			$this->load->model('User_Model');

			$data = array(
				'id_user' => $this->input->post('id_user'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'status' => $this->input->post('status'),
				'deskripsi_gambar' => $this->input->post('deskripsi_gambar'),
				'nama_gambar' => $upload['file']['file_name'],
				'ukuran_gambar' => $upload['file']['file_size'],
				'tipe_gambar' => $upload['file']['file_type'],
		 	);

		 	$data = $this->User_Model->Insert('tbl_user', $data);
		 	redirect(base_url('User'),'refresh');

			//$this->SaveImage();
		}

		else 
		{
			$data['message'] = $upload['error'];
			$this->load->view('User_Add', $data);
		}
	}

	public function Delete($id_user)
	{
		$id_user = array('id_user' => $id_user);
		$this->load->model('User_Model');
		$this->User_Model->Delete('tbl_user', $id_user);
		redirect(base_url('User'),'refresh');
	}

	public function Edit($id_user)
	{
		$this->load->model('User_Model');
		$user = $this->User_Model->GetWhere('tbl_user', array('id_user' => $id_user));
	
		$data = array(
			'id_user' => $user[0]['id_user'],
			'username' => $user[0]['username'],
			'email' => $user[0]['email'],
			'password' => $user[0]['password'],
			'nama' => $user[0]['nama'],
			'alamat' => $user[0]['alamat'],
			'status' => $user[0]['status'],
			'deskripsi_gambar' => $user[0]['deskripsi_gambar'],
			'nama_gambar' => $user[0]['nama_gambar'],
			'ukuran_gambar' => $user[0]['ukuran_gambar'],
			'tipe_gambar' => $user[0]['tipe_gambar'],
		);
	
		$this->load->view('User_Edit', $data);
	}

	public function Update()
	{
		// Update Gambar
		$upload = $this->UploadImage();
			
		if($upload['result'] == "success") 
		{
			$id_user = $_POST['id_user'];
			$deskripsi_gambar = $_POST['deskripsi_gambar'];

			$data = array(
				'id_user' => $id_user,
				'deskripsi_gambar' => $deskripsi_gambar,
				'nama_gambar' => $upload['file']['file_name'],
				'ukuran_gambar' => $upload['file']['file_size'],
				'tipe_gambar' => $upload['file']['file_type'],
			);
			
			$where = array('id_user' => $id_user);
			$this->load->model('User_Model');
			$this->User_Model->Update('tbl_user', $data, $where);
		} 

		else 
		{
			$data['message'] = $upload['error'];
		}

		// Update User
		$id_user = $_POST['id_user'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$status = $_POST['status'];

		$data = array(
			'id_user' => $id_user,
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'nama' => $nama,
			'alamat' => $alamat,
			'status' => $status,
		);

		$where = array('id_user' => $id_user);
		$this->load->model('User_Model');
		$res = $this->User_Model->Update('tbl_user', $data,$where); 

		if ($res>0) {
			redirect(base_url('User'),'refresh');
		}
	}

	public function UploadImage() 
	{
		$config['upload_path'] = './images/user/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('input_gambar')) {
			$return = array('result' => 'success', 'file' => $this->upload->data(),'error' => '');
			return $return;
		} 
		else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function SaveImage($upload) 
	{
		$data = array(
			'id_user' => $this->input->post('id_user'),
			'deskripsi_gambar' => $this->input->post('deskripsi_gambar'),
			'nama_gambar' => $upload['file']['file_name'],
			'ukuran_gambar' => $upload['file']['file_size'],
			'tipe_gambar' => $upload['file']['file_type'],
	 	);

		$data = $this->User_Model->Insert('tbl_user', $data);
	} 

	public function aksi_upload() {
		$config['upload_path'] = './images/user/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 1024;
		
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		
		if(!$this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors()); 
		} 
		else {
			$data = array('upload_data' => $this->upload->data()); 
		}
	}


}

?>
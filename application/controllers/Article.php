<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

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
				$this->load->model('Article_Model');
				$data = $this->Article_Model->GetData('tbl_artikel');
				$data = array('data' => $data);
				$this->load->view('Article_View', $data);
			}
		}
	}

	public function Add()
	{
		$this->load->view('Article_Add');
	}

	public function Insert()
	{
		$upload = $this->UploadImage();

		if($upload['result'] == "success") 
		{
			$this->load->model('Article_Model');

			$data = array(
				'id_artikel' => $this->input->post('id_artikel'),
				'judul' => $this->input->post('judul'),
				'kategori' => $this->input->post('kategori'),
				'tanggal' => $this->input->post('tanggal'),
				'konten' => $this->input->post('konten'),
				'deskripsi_gambar' => $this->input->post('deskripsi_gambar'),
				'nama_gambar' => $upload['file']['file_name'],
				'ukuran_gambar' => $upload['file']['file_size'],
				'tipe_gambar' => $upload['file']['file_type'],
		 	);

		 	$data = $this->Article_Model->Insert('tbl_artikel', $data);
		 	redirect(base_url('Article'),'refresh');
		}

		else 
		{
			$data['message'] = $upload['error'];
			$this->load->view('Article_Add', $data);
		}
	}

	public function Delete($id_artikel)
	{
		$id_artikel = array('id_artikel' => $id_artikel);
		$this->load->model('Article_Model');
		$this->Article_Model->Delete('tbl_artikel', $id_artikel);
		redirect(base_url('Article'),'refresh');
	}

	public function Edit($id_artikel)
	{
		$this->load->model('Article_Model');
		$artikel = $this->Article_Model->GetWhere('tbl_artikel', array('id_artikel' => $id_artikel));
	
		$data = array(
			'id_artikel' => $artikel[0]['id_artikel'],
			'judul' => $artikel[0]['judul'],
			'kategori' => $artikel[0]['kategori'],
			'tanggal' => $artikel[0]['tanggal'],
			'konten' => $artikel[0]['konten'],
			'deskripsi_gambar' => $artikel[0]['deskripsi_gambar'],
			'nama_gambar' => $artikel[0]['nama_gambar'],
			'ukuran_gambar' => $artikel[0]['ukuran_gambar'],
			'tipe_gambar' => $artikel[0]['tipe_gambar'],
		);
	
		$this->load->view('Article_Edit', $data);
	}

	public function Update()
	{
		// Update Gambar
		$upload = $this->UploadImage();
			
		if($upload['result'] == "success") 
		{
			$id_artikel = $_POST['id_artikel'];
			$deskripsi_gambar = $_POST['deskripsi_gambar'];

			$data = array(
				'id_artikel' => $id_artikel,
				'deskripsi_gambar' => $deskripsi_gambar,
				'nama_gambar' => $upload['file']['file_name'],
				'ukuran_gambar' => $upload['file']['file_size'],
				'tipe_gambar' => $upload['file']['file_type'],
			);
			
			$where = array('id_artikel' => $id_artikel);
			$this->load->model('Article_Model');
			$this->Article_Model->Update('tbl_artikel', $data, $where);
		} 

		else 
		{
			$data['message'] = $upload['error'];
		}

		// Update Artikel
		$id_artikel = $_POST['id_artikel'];
		$judul = $_POST['judul'];
		$kategori = $_POST['kategori'];
		$tanggal = $_POST['tanggal'];
		$konten = $_POST['konten'];
		$deskripsi_gambar = $_POST['deskripsi_gambar'];

		$data = array(
			'id_artikel' => $id_artikel,
			'judul' => $judul,
			'kategori' => $kategori,
			'tanggal' => $tanggal,
			'konten' => $konten,
			'deskripsi_gambar' => $deskripsi_gambar,
		);

		$where = array('id_artikel' => $id_artikel);
		$this->load->model('Article_Model');
		$res = $this->Article_Model->Update('tbl_artikel', $data, $where); 

		if ($res>0) {
			redirect(base_url('Article'),'refresh');
		}
	}

	public function UploadImage() {
		$config['upload_path'] = './images/content/';
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
			'id_artikel' => $this->input->post('id_artikel'),
			'deskripsi_gambar' => $this->input->post('deskripsi_gambar'),
			'nama_gambar' => $upload['file']['file_name'],
			'ukuran_gambar' => $upload['file']['file_size'],
			'tipe_gambar' => $upload['file']['file_type'],
	 	);

		$data = $this->Article_Model->Insert('tbl_artikel', $data);
	} 

	public function aksi_upload() 
	{
		$config['upload_path'] = './images/content/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 1024;
		
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		
		if (!$this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors()); 
		} 
		else {
			$data = array('upload_data' => $this->upload->data()); 
		}
	}
}

?>
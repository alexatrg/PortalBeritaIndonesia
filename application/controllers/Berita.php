<?php

class Berita extends CI_Controller {
    function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("beritautama");
	}

	public function id($id)
	{
		$data['id'] = $id;
		$this->load->view('berita',$data);
	}
}

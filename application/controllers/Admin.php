<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
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
				$this->load->view("Admin_View");
			}
		}
	}

	public function Logout()
    {
        $this->session->sess_destroy();
		redirect(base_url("Login"));
    }
}

?>
<?php

class UserDashboard extends CI_Controller {
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
				$this->load->view("UserDashboard_View");
			}

			else if($this->session->userdata('status') == "admin")
			{
				redirect(base_url("Admin"));
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
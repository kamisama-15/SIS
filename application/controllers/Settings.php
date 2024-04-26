<?php 


	/**
	* 
	*/
	class Settings extends CI_controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('Settings_model');
			if (!$this->session->userdata('UserLoginSession')) {
			redirect(base_url('welcome/login'));
			}
		}

		function view_settings(){
			$data['settings']=$this->Settings_model->view_settings();
			$this->load->view('templates/header');
			$this->load->view('settings/settings',$data);
		}
		function configure_settings() {
	    $data = $this->Settings_model->configure_settings();
	    echo json_encode($data);
	}

	}
 ?>
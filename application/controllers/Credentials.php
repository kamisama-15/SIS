<?php 

	/**
	* 
	*/
	class Credentials extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function good_moral(){
			$this->load->view('templates/header');
			$this->load->view('certificates/good_moral');
		}
		function diploma(){
			$this->load->view('templates/header');
			$this->load->view('certificates/diploma');
		}
	}


 ?>
<?php 

	/**
	* 
	*/
	class Forms extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Student_model');
			$this->load->model('Form_model');
			$this->load->model('Transaction_model');
		}
		function elementary_form(){
			$this->load->view('templates/header');
			$this->load->view('form137/elementary');
		}
		function highschool_form(){
			$this->load->view('templates/header');
			$this->load->view('form137/high_school');
		}
		function senior_highschool_form(){
			$data['shs_subjs']=$this->Form_model->shs_subj();
			$data['shs_grds']=$this->Form_model->shs_grd();
			$this->load->view('templates/header');
			$this->load->view('form137/senior_high_school',$data);
		}

	}

 ?>
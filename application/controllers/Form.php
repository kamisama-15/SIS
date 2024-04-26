<?php 

	/**
	* 
	*/
	class Form extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Student_model');
			$this->load->model('Form_model');
			$this->load->model('Transaction_model');
		}

		function view_forms(){
			$data['students']=$this->Student_model->view_students();
			$this->load->view('templates/header');
			$this->load->view('form/form',$data);
		}
		function student_request($std_id){
			$data['student']=$this->Student_model->student_profile($std_id);
			$data['forms']=$this->Form_model->forms();
			$this->load->view('templates/header');
			$this->load->view('form/request',$data);
		}
		function insert_transaction(){
			$data=$this->Transaction_model->insert_transaction();
			echo json_encode($data);
		}
		function view_request($std_id) {
		    $data['transactions'] = $this->Transaction_model->transactions($std_id);
		    // $data['forms'] = $this->Transaction_model->form_id($rq_id); // Uncomment this if needed
		    $this->load->view('templates/header');
		    $this->load->view('form/view_request', $data);
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
		function insert_form_elementary(){
		$data=$this->Form_model->insert_form_elementary();
		echo json_encode($data);
		}
	}

 ?>
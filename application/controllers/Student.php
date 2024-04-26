<?php 

class Student extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct(); 
		$this->load->model('Student_model');
		$this->load->model('Course_model');
		$this->load->model('Form_model');
		$this->load->model('GradeLevel_model');
		$this->load->model('Strand_model');
		if (!$this->session->userdata('UserLoginSession')) {
			redirect(base_url('welcome/login'));
		}
    }
    function view_students(){
		$data['students']=$this->Student_model->view_students();
        $this->load->view('templates/header');
        $this->load->view('student/view_students',$data);
    }
    function add_student(){
		$data['LRNS']=$this->Student_model->lrn_availability();
		$data['grade_levels']=$this->GradeLevel_model->grade_levels();
		$data['strands']=$this->Strand_model->strands();
	     $this->load->view('templates/header');
        $this->load->view('student/add_student',$data);
    }
    function insert_student(){
		$data=$this->Student_model->insert_student();
		echo json_encode($data);
	}
	function student_profile($std_id){
		$data['student']=$this->Student_model->student_profile($std_id);
		$data['requests']=$this->Student_model->request_history($std_id);
		$data['courses']=$this->Course_model->courses();
		$data['forms']=$this->Form_model->forms();
        $this->load->view('templates/header');
        $this->load->view('student/student_profile',$data);
	}
	function edit_student($std_id){
		$data['LRNS']=$this->Student_model->lrn_availability();
		$data['student']=$this->Student_model->edit_student($std_id);
		$data['grade_levels']=$this->GradeLevel_model->grade_levels();
		$data['strands']=$this->Strand_model->strands();
        $this->load->view('templates/header');
        $this->load->view('student/edit_student',$data);
    }
    function update_student(){
			$data=$this->Student_model->update_student();
			echo json_encode($data);
	}
	function delete_student(){
			$data=$this->Student_model->delete_student();
			echo json_encode($data);
	}
	function add_request(){
		$data=$this->Student_model->add_request();
		echo json_encode($data);
	}
	function update_request(){
		$data=$this->Student_model->update_request();
		echo json_encode($data);
	}
}

?>

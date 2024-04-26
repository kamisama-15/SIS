<?php 

	/**
	* 
	*/
	class Users extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('User_model');
			if (!$this->session->userdata('UserLoginSession')) {
			redirect(base_url('welcome/login'));
			}
			$udata = $this->session->userdata('UserLoginSession');
	    if ($udata && isset($udata['username'])) {
	        $query = $this->db->get_where('users', array('username' => $udata['username']));
	        $user = $query->row();
	        if ($user && $user->user_type == 2) {

	            redirect(base_url('welcome/dashboard'));
	        }
	    }
		}
		function view_users(){

			$data['users']=$this->User_model->view_users();
			$this->load->view('templates/header');
			$this->load->view('admin/users',$data);

		}
		function add_users(){
			$data['usernames'] = $this->User_model->username_availability();
			$this->load->view('templates/header');
			$this->load->view('admin/manage_user',$data);

		}

		function edit_user($id){
			$data['usernames'] = $this->User_model->username_availability();
			$data['user']=$this->User_model->edit_user($id);
			$this->load->view('templates/header');
			$this->load->view('admin/edit_users',$data);

		}
		function update_user(){
		$data=$this->User_model->update_user();
		echo json_encode($data);
		}
		function delete_user(){
		$data=$this->User_model->delete_user();
		echo json_encode($data);
		}
		function user_profile($id){
			$data['usernames'] = $this->User_model->username_availability();
		    $data['user'] = $this->User_model->user_profile($id);
		    $this->load->view('templates/header');
		    $this->load->view('admin/user_profile', $data);
		}
		function update_user_profile(){
		$data=$this->User_model->update_user_profile();
		echo json_encode($data);
		}

	}


 ?>
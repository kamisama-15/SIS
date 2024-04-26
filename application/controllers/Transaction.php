<?php 

	class Transaction extends CI_controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('Transaction_model');
			if (!$this->session->userdata('UserLoginSession')) {
			redirect(base_url('welcome/login'));
			}
		}
		function view_transactions(){
			$data['transactions']=$this->Transaction_model->view_transactions();
			$this->load->view('templates/header');
			$this->load->view('transaction/transaction_list',$data);

		}
		function delete_transaction(){
			$data=$this->Transaction_model->delete_transaction();
			echo json_encode($data);
		}
	}


 ?>
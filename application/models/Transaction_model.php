<?php 


	class Transaction_model extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function view_transactions() {
            $this->db->select('students.std_id, students.*, request.*');
            $this->db->from('students');
            $this->db->join('request', 'students.std_id = request.std_id'); 
            $this->db->group_by('students.std_id'); 
            $result = $this->db->get();
            return $result->result();
        }



	 		function insert_transaction() {
                if ($this->input->is_ajax_request()) {
                    $std_id = $this->input->post('std_id');
                    $rq_date = $this->input->post('rq_date');
                    $rq_name = $this->input->post('rq_name');
                    $rq_contact = $this->input->post('rq_contact');
                    $rq_type = $this->input->post('rq_type');
                    $rq_rc_name = $this->input->post('rq_rc_name');
                    $form_ids = $this->input->post('forms');
                    $others_text = $this->input->post('others_text');
                    $query = "INSERT INTO `request` (`form_id`, `rq_date`, `rq_name`, `rq_contact`, `rq_type`,`rq_rc_name`,`std_id`, `others`) 
                              VALUES (?, ?, ?, ?,?,?, ?, ?)";
                    $result = $this->db->query($query, array($form_ids, $rq_date, $rq_name, $rq_contact, $rq_type,$rq_rc_name, $std_id, $others_text));

                    if ($result) {
                        echo json_encode(array('result' => 'SUCCESS'));
                    } else {
                        echo json_encode(array('result' => 'FAILED', 'msg' => 'Failed to insert data'));
                    }
                } else {
                    echo json_encode(array('result' => 'FAILED', 'msg' => 'Not an AJAX request'));
                }
            }

		  function transactions($std_id) {
            $this->db->select('*');
            $this->db->from('request');
            $this->db->join('students', 'students.std_id = request.std_id', 'left');
            // $this->db->join('forms', 'forms.form_id = request.form_id', 'left');
            $this->db->where('request.std_id', $std_id); 
            $query = $this->db->get();
            return $query->result(); 
        }

	    function form_id($form_id){
            $this->db->select('*');
            $this->db->from('forms');
            $this->db->where('form_id', $form_id); 
            $query = $this->db->get();
            return $query->row();
        }
        function delete_transaction(){
              $rq_id=$this->input->post('rq_id');
              $this->db->where('rq_id',$rq_id);
              $result=$this->db->delete('request');
              if($result){
                return array('result'=>'SUCCESS');
              }else{
                return array('result'=>'FAILED','msg'=>$this->db->error());
              }
            }

}

	
 ?>
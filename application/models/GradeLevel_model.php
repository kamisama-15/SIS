<?php 


	/**
	* 
	*/
	class GradeLevel_model extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function grade_levels() {
		    $this->db->select('*');
		    $this->db->from('grade_level');
		    $result = $this->db->get();
		    return $result->result();
		}
		// function edit_grade_levels($std_id) {
		//     $this->db->select('*');
		//     $this->db->from('grade_level');
  //     		$this->db->where('std_id', $std_id);
		//     $result = $this->db->get()->row();
		//     return $result->result();
		// }
	}



 ?>
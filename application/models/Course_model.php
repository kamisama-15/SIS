<?php 
	
	/**
	* 
	*/
	class Course_model extends CI_model
	{
		
		function __construct()
		{
			parent:: __construct();
		}
		function courses() {
		    $this->db->select('course_list.*, department_list.name as department_name');
		    $this->db->from('course_list');
		    $this->db->join('department_list', 'course_list.department_id = department_list.id');
		    $result = $this->db->get();
		    return $result->result();
		}

	}



 ?>
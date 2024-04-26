<?php 


	/**
	* 
	*/
	class Strand_model extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function strands() {
		    $this->db->select('*');
		    $this->db->from('strand');
		    $result = $this->db->get();
		    return $result->result();
		}
		// function edit_strand($std_id) {
		//     $this->db->select('*');
		//     $this->db->from('strand');
  //     		$this->db->where('std_id', $std_id);
		//     $result = $this->db->get()->row();
		//     return $result->result();
		// }
	}



 ?>
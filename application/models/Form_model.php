<?php 

/**
* 
*/
class Form_model extends CI_model
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function forms(){
		$this->db->select('*');
		$this->db->from('forms');
	    $result = $this->db->get();
	    return $result->result();
	}
	function insert_form_elementary(){
    $last_name = $this->input->post('last_name');
    $first_name = $this->input->post('first_name');
    $name_ext = $this->input->post('name_ext');
    $middle_name = $this->input->post('middle_name');
    $LRN = $this->input->post('LRN');
    $birthdate = $this->input->post('birthdate');
    $sex = $this->input->post('sex');
    $kpr = $this->input->post('kpr'); 
    $ecccdChck = $this->input->post('ecccdChck');
    $kcoc = $this->input->post('kcoc');
    $school_name = $this->input->post('school_name');
    $school_id = $this->input->post('school_id');
    $school_address = $this->input->post('school_address');
    $pept_passer = $this->input->post('pept_passer');
    $rating = $this->input->post('rating');
    $others = $this->input->post('others');
    $otherschck = $this->input->post('otherschck'); 

    $query = "INSERT INTO `frm_elem` (`frm_elem_id`, `last_name`, `first_name`, `name_ext`, `middle_name`, `birthdate`, `LRN`, `sex`, `kpr`, `ecccdChck`, `kcoc`, `school_name`, `school_id`, `school_address`, `pept_passer`, `rating`, `others`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $result = $this->db->query($query, array($last_name, $first_name, $name_ext, $middle_name, $birthdate, $LRN, $sex, $kpr, $ecccdChck, $kcoc, $school_name, $school_id, $school_address, $pept_passer, $rating, $others));

    

    if($result){  
        return array('result' => 'SUCCESS');
    } else {
        return array('result' => 'FAILED', 'msg' => $this->db->error());
    }
}
    function shs_subj(){
        $this->db->select('*');
        $this->db->from('shs_subj');
        $result = $this->db->get();
        return $result->result();
    }
    function shs_grd(){
        $this->db->select('*');
        $this->db->from('shs_grd');
        $result = $this->db->get();
        return $result->result();
    }


}
 ?>
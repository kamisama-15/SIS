 <?php 
  
  /**
  * 
  */
  class Student_model extends CI_Model
  {
    
        function __construct()
        {
          parent::__construct();
        }
        function view_students(){
          $this->db->select('*');
          $this->db->from('students');
          $this->db->join('grade_level','grade_level.grd_id = students.grd_id','left');
          $result=$this->db->get();
          return $result->result();
        }

        function insert_student(){
            $lrn = $this->input->post('roll'); 
            $first_name = $this->input->post('firstname');
            $middle_name = $this->input->post('middlename');
            $last_name = $this->input->post('lastname');
            $gender = $this->input->post('gender');
            $grd_id = $this->input->post('grd_id');
            $str_id = $this->input->post('str_id');

            $query = "INSERT INTO `students` (`LRN`, `first_name`, `middle_name`, `last_name`, `gender`, `grd_id`, `str_id`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $result = $this->db->query($query, array($lrn, $first_name, $middle_name, $last_name, $gender, $grd_id, $str_id));

            if($result){  
                return array('result'=>'SUCCESS');
            } else {
                return array('result'=>'FAILED','msg'=>$this->db->error());
            }
        }

      function student_profile($std_id){
            $this->db->select('*');
            $this->db->from('students');
            $this->db->join('grade_level','grade_level.grd_id = students.grd_id');
            $this->db->join('strand','strand.str_id = students.str_id', 'left'); 
            $this->db->where('std_id', $std_id);
            $result = $this->db->get()->row();
            return $result; 
        }

      function edit_student($std_id){
        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('std_id', $std_id);
        $result = $this->db->get()->row();
        return $result; 
      }


    function update_student()
    {
        $std_id = $this->input->post('std_id');
        $lrn = $this->input->post('roll');
        $first_name = $this->input->post('firstname');
        $middle_name = $this->input->post('middlename');
        $last_name = $this->input->post('lastname');
        $gender = $this->input->post('gender');
        $grd_id = $this->input->post('grd_id');
        $str_id = $this->input->post('str_id');
        $this->db->set('LRN', $lrn);
        $this->db->set('first_name', $first_name);
        $this->db->set('middle_name', $middle_name);
        $this->db->set('last_name', $last_name);
        $this->db->set('gender', $gender);
        $this->db->set('grd_id', $grd_id);
        $this->db->set('str_id', $str_id);

        $this->db->where('std_id', $std_id);

        $result = $this->db->update('students');

        if ($result) {
            return json_encode(array('result' => 'SUCCESS'));
        } else {
            return json_encode(array('result' => 'FAILED', 'msg' => $this->db->error()));
        }
    }

        function delete_student(){
          $std_id=$this->input->post('std_id');
          $this->db->where('std_id',$std_id);
          $result=$this->db->delete('students');
          if($result){
            return array('result'=>'SUCCESS');
          }else{
            return array('result'=>'FAILED','msg'=>$this->db->error());
          }
        }
       function add_request() {
            $std_id = $this->input->post('std_id');
            $rq_date = $this->input->post('rq_date');
            $rq_name = $this->input->post('rq_name');
            $rq_contact = $this->input->post('rq_contact');
            $rq_type = $this->input->post('rq_type');
            $form_id = $this->input->post('form_id');

            $query = "INSERT INTO `request` (`form_id`, `rq_date`, `rq_name`, `rq_contact`, `rq_type`, `std_id`) 
                      VALUES (?, ?, ?, ?, ?, ?)";

            $result = $this->db->query($query, array($form_id, $rq_date, $rq_name, $rq_contact, $rq_type, $std_id));

            if ($result) {
                return array('result' => 'SUCCESS');
            } else {
                return array('result' => 'FAILED', 'msg' => $this->db->error());
            }
        }
     function request_history($std_id){
          $this->db->select('*');
          $this->db->from('request');
          $this->db->join('forms','forms.form_id = request.form_id');
          $this->db->where('std_id', $std_id);
          $result = $this->db->get()->result_array();
          return $result; 
      }
      function update_request(){
        $rq_id = $this->input->post('rq_id');
        $rq_date = $this->input->post('rq_date');
        $rq_name = $this->input->post('rq_name');
        $rq_contact = $this->input->post('rq_contact');
        $rq_type = $this->input->post('rq_type');
        $form_id = $this->input->post('form_id'); 

        $this->db->set('rq_date', $rq_date);
        $this->db->set('rq_name', $rq_name);
        $this->db->set('rq_contact', $rq_contact);
        $this->db->set('rq_type', $rq_type);
        $this->db->set('form_id', $form_id);

        $this->db->where('rq_id', $rq_id);

        $result = $this->db->update('request');

        if ($result) {
            return json_encode(array('result' => 'SUCCESS'));
        } else {
            return json_encode(array('result' => 'FAILED', 'msg' => $this->db->error()));
        }
      }
      function lrn_availability(){
        $this->db->select('LRN');
        $this->db->from('students');
        $result=$this->db->get();
        return $result->result();
      }




 

    }
?>

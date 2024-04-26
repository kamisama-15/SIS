<?php 

class User_model extends CI_Model {

	function insertuser($data)
	{
		$this->db->insert('users',$data);
	}

	function checkPasswordByUsername($password, $username) {
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
    function view_users(){
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('id !=', 1);
    $result = $this->db->get();
    return $result->result();
}

    function edit_user($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $result = $this->db->get()->row(); 
        return $result;
    }
    function username_availability(){
        $this->db->select('username');
        $this->db->from('users');
        $result=$this->db->get();
        return $result->result();
    }
    
    public function update_user() {
    $id = $this->input->post('id'); 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('user_type', 'User Type', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $user_type = $this->input->post('user_type');
            
            $avatar_path = $this->input->post('existing_avatar');
            if (!empty($_FILES['avatar']['name'])) {
                $image_directory = './uploads/users';
                if (!is_dir($image_directory)) {
                    mkdir($image_directory, 0777, true);
                }
                $config['upload_path'] = $image_directory;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('avatar')) {
                    $avatar_data = $this->upload->data();
                    $avatar_path = $image_directory . '/' . $avatar_data['file_name'];
                } else {
                    return array('success' => false, 'message' => $this->upload->display_errors());
                }
            }
            
            $data = array(
                'username' => $username,
                'password' => sha1($password),
                'first_name' => $first_name,
                'last_name' => $last_name,
                'user_type' => $user_type,
                'avatar' => isset($avatar_data['file_name']) ? $avatar_data['file_name'] : $avatar_path,
                'status' => '1'
            );

            $this->db->where('id', $id);
            $this->db->update('users', $data);

            return array('success' => true, 'message' => 'User details updated successfully');
        } else {
            return array('success' => false, 'message' => validation_errors());
        }
    }
}
    function delete_user(){
          $id=$this->input->post('id');
          $this->db->where('id',$id);
          $result=$this->db->delete('users');
          if($result){
            return array('result'=>'SUCCESS');
          }else{
            return array('result'=>'FAILED','msg'=>$this->db->error());
          }
        }
    function user_profile($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $result = $this->db->get()->row(); 
        return $result;
    }
public function update_user_profile() {
    $id = $this->input->post('id');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $first_name = $this->input->post('firstname');
            $last_name = $this->input->post('lastname');
            
            $avatar_path = $this->input->post('existing_avatar');
            if (!empty($_FILES['avatar']['name'])) {
                $image_directory = './uploads/users';
                if (!is_dir($image_directory)) {
                    mkdir($image_directory, 0777, true);
                }
                $config['upload_path'] = $image_directory;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('avatar')) {
                    $avatar_data = $this->upload->data();
                    $avatar_path = $image_directory . '/' . $avatar_data['file_name'];
                } else {
                    return array('success' => false, 'message' => $this->upload->display_errors());
                }
            }
            
            if (!empty($password)) {
                $password = sha1($password);
            } else {
                $existing_user = $this->db->get_where('users', array('id' => $id))->row();
                $password = $existing_user->password;
            }
            
            $data = array(
                'username' => $username,
                'password' => $password,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'avatar' => isset($avatar_data['file_name']) ? $avatar_data['file_name'] : basename($avatar_path), 
                'status' => '1'
            );

            $this->db->where('id', $id);
            $this->db->update('users', $data);

            return array('success' => true, 'message' => 'User details updated successfully');
        } else {
            return array('success' => false, 'message' => validation_errors());
        }
    }
}





}
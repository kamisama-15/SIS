<?php

class Settings_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
    }
    function view_settings(){
        $this->db->select('*');
        $this->db->from('system_info');
        $result = $this->db->get()->row();
        return $result;
    }

   function configure_settings()
{
    $sys_name = $this->input->post('sys_name');
    $short_name = $this->input->post('short_name');

    $image_directory = './uploads/';
    if (!is_dir($image_directory)) {
        mkdir($image_directory, 0777, true); 
    }

    $existing_data = $this->db->get('system_info')->row_array();

    $data = array(
        'sys_name' => $sys_name,
        'short_name' => $short_name,
    );

    if (!empty($_FILES['sys_logo']['name'])) {
        $config['upload_path'] = $image_directory;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('sys_logo')) {
            $upload_data = $this->upload->data();
            $data['sys_logo'] = $upload_data['file_name'];
        } else {
            $error = $this->upload->display_errors();
            $response = array('result' => 'FAILED', 'msg' => $error);
            echo json_encode($response);
            return;
        }
    }

    if (!empty($_FILES['sys_cover']['name'])) {
        $config['upload_path'] = $image_directory;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('sys_cover')) {
            $upload_data = $this->upload->data();
            $data['sys_cover'] = $upload_data['file_name'];
        } else {
            $error = $this->upload->display_errors();
            $response = array('result' => 'FAILED', 'msg' => $error);
            echo json_encode($response);
            return;
        }
    }

    if ($existing_data) {
        $this->db->update('system_info', $data);
    } else {
        $this->db->insert('system_info', $data);
    }

    if ($this->db->affected_rows() > 0) {
        $response = array('result' => 'SUCCESS');
    } else {
        $response = array('result' => 'FAILED', 'msg' => 'Failed to insert or update data.');
    }

    echo json_encode($response);
}

}

?>

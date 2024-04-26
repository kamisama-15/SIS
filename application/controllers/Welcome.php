<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

    	function registerNow()
{
    $image_directory = './uploads/users';
    $default_avatar = 'default.png'; // Corrected default avatar path

    if (!is_dir($image_directory)) {
        mkdir($image_directory, 0777, true);
    }

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
            $avatar_filename = $default_avatar;

            if (!empty($_FILES['avatar']['name'])) {
                $config['upload_path'] = $image_directory;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('avatar')) {
                    $avatar_data = $this->upload->data();
                    $avatar_filename = $avatar_data['file_name'];
                }
            }

            $data = array(
                'username' => $username,
                'password' => sha1($password),
                'first_name' => $first_name,
                'last_name' => $last_name,
                'user_type' => $user_type,
                'avatar' => $avatar_filename,
                'created_at' => date('Y-m-d H:i:s'), // Correct syntax for date
                'status' => '1'
            );

            $this->load->model('user_model');
            $insert_id = $this->user_model->insertuser($data);
            if ($insert_id) {
                $response = array('success' => true, 'message' => 'Successfully User Created');
            } else {
                $response = array('success' => false, 'message' => 'Failed to create user');
            }
        } else {
            $response = array('success' => false, 'message' => validation_errors());
        }

        echo json_encode($response);
    }
}

//     function registerNow()
// {
//     $image_directory = './uploads/users';
//     if (!is_dir($image_directory)) {
//         mkdir($image_directory, 0777, true);
//     }

//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//         $this->form_validation->set_rules('first_name', 'First Name', 'required');
//         $this->form_validation->set_rules('last_name', 'Last Name', 'required');
//         $this->form_validation->set_rules('username', 'Username', 'required');
//         $this->form_validation->set_rules('user_type', 'User Type', 'required');
//         $this->form_validation->set_rules('password', 'Password', 'required');

//         if ($this->form_validation->run() == TRUE) {
//             $username = $this->input->post('username');
//             $username_exists = $this->user_model->checkUsernameExists($username);
//             if ($username_exists) {
//                 $response = array('success' => false, 'message' => 'Username already exists');
//             } else {
//                 $password = $this->input->post('password');
//                 $first_name = $this->input->post('first_name');
//                 $last_name = $this->input->post('last_name');
//                 $user_type = $this->input->post('user_type');

//                 // Upload avatar file
//                 $config['upload_path'] = $image_directory;
//                 $config['allowed_types'] = 'gif|jpg|png';
//                 $config['max_size'] = 2048;
//                 $config['encrypt_name'] = TRUE;

//                 $this->load->library('upload', $config);

//                 if ($this->upload->do_upload('avatar')) {
//                     $avatar_data = $this->upload->data();
//                     $avatar_filename = $avatar_data['file_name'];
//                 } else {
//                     $avatar_path = ''; 
//                 }

//                 $data = array(
//                     'username' => $username,
//                     'password' => sha1($password),
//                     'first_name' => $first_name,
//                     'last_name' => $last_name,
//                     'user_type' => $user_type,
//                     'avatar' => $avatar_filename, 
//                     'status' => '1'
//                 );

//                 $insert_id = $this->user_model->insertuser($data);
//                 if ($insert_id) {
//                     $response = array('success' => true, 'message' => 'Successfully User Created');
//                 } else {
//                     $response = array('success' => false, 'message' => 'Failed to create user');
//                 }
//             }
//         } else {
//             $response = array('success' => false, 'message' => validation_errors());
//         }

//         echo json_encode($response);
//     }
// }



	function login()
	{
		$this->load->view('login');
	}

	function loginnow()
    {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $password = sha1($password);

            $this->load->model('user_model');
            $status = $this->user_model->checkPasswordByUsername($password, $username);

            if ($status != false) {
                $username = $status->username;
                // $email = $status->email;

                $session_data = array(
                    'username' => $username,
                    // 'email' => $email,
                );

                $this->session->set_userdata('UserLoginSession', $session_data);

                redirect(base_url('welcome/dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Username or Password is Wrong');
                redirect(base_url('welcome/login'));
            }
        } else {
            $this->session->set_flashdata('error', 'Fill all the required fields');
            redirect(base_url('welcome/login'));
        }
    }
}


	function dashboard()
	{	

		$this->load->view('templates/header');
		$this->load->view('dashboard');
	}

	function logout()
	{
		session_destroy();
		redirect(base_url('welcome/login'));
	}
}

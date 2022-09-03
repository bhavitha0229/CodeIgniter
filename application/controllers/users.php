<?php

class Users extends CI_Controller
{
    //public function show()
    //{
    //$this->load->model('user_model');

    // $result = $this->user_model->get_users();

    //$data['welcome'] = "Welcome to my page";

    // $data['results'] = $this->user_model->get_users(1);
    // $this->load->view('user_view', $data);

    // foreach ($result as $object) {
    //     echo $object->id . "<br>";
    //     echo $object->password . "<br>";
    // }

    // public function insert()
    // {
    //     $username = "peter";
    //     $password = "secret";

    //     $this->user_model->create_users([
    //         'username' => $username,
    //         'password' => $password
    //     ]);
    // }

    // public function update()
    // {
    //     $id = 3;
    //     $username = "siddu";
    //     $password = "no password";

    //     $this->user_model->update_users([
    //         'username' => $username,
    //         'password' => $password
    //     ], $id);
    // }
    // public function delete()
    // {
    //     $id = 3;
    //     $this->user_model->delete_users($id);
    // }
    //}

    // $_POST['username'];
    // echo  $this->input->post('username');
    public function register()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            //redirect('http://google.com');

            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main', $data);
        } else {
            if ($this->user_model->create_user()) {
                $this->session->set_flashdata('user_registered', 'User has been');
                redirect('home/index');
            } else {
            }
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                // echo validation_errors();
                'errors' => validation_errors()

            );
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password);

            if ($user_id) {
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true

                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'You are now logged in');

                // $data['main_view'] = "admin_view";
                // $this->load->view('layouts/main', $data);

                redirect('home/index');
            } else {
                $this->session->set_flashdata('login_failed', 'Sorry You are not logged in');
                redirect('home/index');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home/index');
    }
}
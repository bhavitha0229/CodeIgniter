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

    public function login()
    {
        // $_POST['username'];
        echo  $this->input->post('username');
    }
}
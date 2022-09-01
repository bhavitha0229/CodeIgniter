<?php

class Home extends CI_Controller
{
    public function index()
    {
        //echo "This is the home controller";
        $data['main_view'] = "home_view";
        $this->load->view('layouts/main', $data);
    }
}

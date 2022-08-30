<?php

class Home extends CI_Controller
{
    public function index()
    {
        //echo "This is the home controller";
        $this->load->view('home_view');
    }
}
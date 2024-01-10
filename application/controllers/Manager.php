<?php
class Manger extends CI_Controller
{
    public function index()
    {
        $this->load->view('manager/login');
    }
    public function login()
    {
        $this->load->view('manager/login');
    }
}

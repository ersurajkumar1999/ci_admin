<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function login()
    {
        $this->load->view('admin/login');
    }
}

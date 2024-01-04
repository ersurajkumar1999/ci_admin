<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function login()
    {
        $this->load->view('admin/login');
    }
    public function dashboard()
    {
        $this->load->view('admin/dashboard');
    }
    public function logout()
    {
        echo "Logout";
    }
}

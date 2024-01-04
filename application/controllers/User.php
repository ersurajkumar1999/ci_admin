<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function login()
    {
        $this->load->view('user/login');
    }
    public function dashboard()
    {
        $this->load->view('user/dashboard');
    }
    public function logout()
    {
        echo "Logout";
    }
}

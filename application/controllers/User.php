<?php
class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('user/login');
    }
    public function login()
    {
        $this->load->view('user/login');
    }
}
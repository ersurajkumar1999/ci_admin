<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('User_Model');
    }
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function dashboard()
    {
        $this->load->view('admin/dashboard');
    }
    public function manager_list()
    {
        $userType = 'Manager';
        $managers = $this->User_Model->allUserData($userType);

        $data['managers'] = $managers;
        $this->load->view('admin/manager-list', $data);
    }
}

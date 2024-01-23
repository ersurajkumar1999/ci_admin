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

        $this->load->view('admin/manager/index', $data);
    }
    public function user_list()
    {
        $userType = 'User';
        $users = $this->User_Model->allUserData($userType);
        $data['users'] = $users;
        $this->load->view('admin/user/index', $data);
    }
    public function create_user()
    {
        $this->load->view('admin/user/create');
    }
    public function store_user()
    {
        $data = array();
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['user_type'] = "User";
        $data['password'] = $this->input->post('password'); //md5($this->input->post('password'));
        // echo "<pre>";print_r($data);exit;
        $userLastId = $this->User_Model->storeUserData($data);
        if ($userLastId) {
            $this->session->set_flashdata('success', 'User Added Successfully');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong! Please try again');
        }
        redirect('admin/user_list');
    }
    public function user_edit($userId)
    {

        $this->load->view('admin/user/user-edit');
    }
}

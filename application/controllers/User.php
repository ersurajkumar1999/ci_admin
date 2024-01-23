<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');
        
    }
    public function index()
    {
        $this->load->view('user/login');
    }
    public function register()
    {
        $this->load->view('user/register');
    }
    public function create()
    {
        $data = array();
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['user_type'] = "User";//$this->input->post('user_type');
        $data['password'] = $this->input->post('password');//md5($this->input->post('password'));
        $userLastId = $this->User_model->storeUserData($data);
        if($userLastId){
            $this->session->set_flashdata('success', 'User Added Successfully');
        }else{
            $this->session->set_flashdata('error', 'Something went wrong! Please try again');
        }
        redirect('user/register');
    }
}

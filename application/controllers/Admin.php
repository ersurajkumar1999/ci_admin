<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }
    public function dashboard()
    {
        $this->load->view('admin/dashboard');
    }
    public function index()
    {
        $this->load->view('admin/login');
    }
    public function login()
    {
        $this->load->view('admin/login');
    }
    public function user_list()
    {
        $data = array();
        $userType = "User";
        $data['userdata'] = $this->Admin_model->allUserdata($userType);
        $this->load->view('admin/user_list',$data);
    }
    public function manager_list()
    {
        $data = array();
        $userType = "Manager";
        $data['userdata'] = $this->Admin_model->allUserdata($userType);
        $this->load->view('admin/user_list',$data);
    }
    public function add_user()
    {
        $this->load->view('admin/add_user');
    }

    public function insertuser(){
        $formArray = array();
        $formArray['name'] = $this->input->post('name');
        $formArray['email'] = $this->input->post('email');
        $formArray['number'] = $this->input->post('number');
        $formArray['gender'] = $this->input->post('gender');
        $formArray['image'] = $this->input->post('image');
        $formArray['dob'] = $this->input->post('dob');
        $formArray['user_type'] = $this->input->post('user_type');
        $this->Admin_model->insertData($formArray);
        $this->session->set_flashdata('success', 'User Added Successfully');
        redirect('admin/user_list'); 
    }
    
    public function editeuser($uer_id){
        $data = array();
        $data['alldatausers'] = $this->Admin_model->getDataById($uer_id);
        $this->load->view('admin/editeuser',$data); 
    }
    public function update_user($uer_id){
        $formArray = array();
        $formArray['name'] = $this->input->post('name');
        $formArray['email'] = $this->input->post('email');
        $formArray['number'] = $this->input->post('number');
        $formArray['gender'] = $this->input->post('gender');
        $formArray['image'] = $this->input->post('image');
        $formArray['dob'] = $this->input->post('dob');
        $formArray['user_type'] = "User";
        $this->Admin_model->updateUser($uer_id,$formArray);
        $this->session->set_flashdata('success', 'User Updated Successfully');
        redirect('admin/user_list');
    }
    public function deleteUser($uer_id){
        $this->Admin_model->deletedata($uer_id);
        redirect('admin/user_list');
    }
}

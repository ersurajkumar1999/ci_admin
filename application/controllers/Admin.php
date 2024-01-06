<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    public function dashboard()
    {

        $this->load->view('admin/dashboard');
    }
    public function user_list()
    {
        $data = array();
        $data['admindata'] = $this->User_model->alladmidata();
        $this->load->view('admin/user-list', $data);
    }
    public function profile()
    {
        $this->load->view('admin/profile');
    }
    public function faq_page()
    {
        $this->load->view('admin/faq-page');
    }
    public function contact()
    {
        $this->load->view('admin/contact');
    }
    public function register()
    {
        $this->load->view('admin/register');
    }
    public function login()
    {
        $this->load->view('admin/login');
    }
    public function pages_error_404()
    {
        $this->load->view('admin/pages-error-404');
    }
    public function pages_blank()
    {
        $this->load->view('admin/pages-blank');
    }
    public function add_new_user()
    {
        $this->load->view('admin/add_new-user');
    }

    //start Insert Update Delete Listing Add New admin data in database
    public function insertuser()
    {
        $formArrary = array();
        $formArrary['admin_name'] = $this->input->post('username');
        $formArrary['admin_email'] = $this->input->post('email');
        $formArrary['phone_number'] = $this->input->post('number');
        $formArrary['admin_password'] = $this->input->post('password');
        $formArrary['confrum_password'] = $this->input->post('confirmpassword');
        $this->User_model->addNewUser($formArrary);
        $this->session->set_flashdata('success', 'User Added Successfully');
        redirect('admin/user_list');
    }

    public function edituser_admin($admin_id)
    {
        $data = array();
        $data['alldataadmin'] = $this->User_model->getDataById($admin_id);
        $this->load->view('admin/edituser_admin', $data);
    }

    public function update_admin($admin_id)
    {
        $formArrary = array();
        $formArrary['admin_name'] = $this->input->post('username');
        $formArrary['admin_email'] = $this->input->post('email');
        $formArrary['phone_number'] = $this->input->post('number');
        $formArrary['admin_password'] = $this->input->post('password');
        $formArrary['confrum_password'] = $this->input->post('confirmpassword');
        $this->User_model->updateadin($admin_id, $formArrary);
        $this->session->set_flashdata('success','User Updated Successfully');
        redirect('admin/user_list');
    }

    public function deleteAdmin($uer_id)
    {
        $this->User_model->deletedata($uer_id);
        redirect('admin/user_list');
    } //End Insert Update Delete Listing Add New admin data in database


    //start Insert Update Delete Listing admin ragistation data in database
    public function admin_ragistation()
    {
        $formArrary = array();
        $formArrary['admin_name'] = $this->input->post('username');
        $formArrary['admin_email'] = $this->input->post('email');
        $formArrary['phone_number'] = $this->input->post('number');
        $formArrary['admin_password'] = $this->input->post('password');
        $formArrary['confrum_password'] = $this->input->post('terms');
        $this->User_model->addNewUser($formArrary);
        $this->session->set_flashdata('success', 'User Added Successfully');
        redirect('admin/register');
    }


    public function logout()
    {
        echo "Logout";
    }
}

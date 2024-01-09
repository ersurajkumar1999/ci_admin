<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function dashboard()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            // Redirect to login page or perform some other action if the user is not logged in
            redirect('admin/login');
        }
        $this->load->view('admin/dashboard');
    }

    public function user_list()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            redirect('admin/login');
        }
        $data = array();
        $data['admindata'] = $this->User_model->alladmidata();
        $this->load->view('admin/user-list', $data);
    }

    public function profile()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            redirect('admin/login');
        }
        $this->load->view('admin/profile');
    }

    public function faq_page()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            redirect('admin/login');
        }
        $this->load->view('admin/faq-page');
    }

    public function contact()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            redirect('admin/login');
        }
        $this->load->view('admin/contact');
    }

    public function register()
    {
        $this->load->view('admin/register');
    }

    public function pages_error_404()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            redirect('admin/login');
        }
        $this->load->view('admin/pages-error-404');
    }

    public function pages_blank()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            redirect('admin/login');
        }
        $this->load->view('admin/pages-blank');
    }

    public function add_new_user()
    {
        $adminId = $this->session->userdata('adminId');
        if (!$adminId) {
            redirect('admin/login');
        }
        $this->load->view('admin/add_new-user');
    }

    public function insertuser()
    {
        $formArrary = array();
        $formArrary['admin_name'] = $this->input->post('username');
        $formArrary['admin_email'] = $this->input->post('email');
        $formArrary['admin_password'] = $this->input->post('password');
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
        $this->User_model->updateadin($admin_id, $formArrary);
        $this->session->set_flashdata('success', 'User Updated Successfully');
        redirect('admin/user_list');
    }

    public function deleteAdmin($uer_id)
    {
        $this->User_model->deletedata($uer_id);
        redirect('admin/user_list');
    }

    public function admin_ragistation()
    {
        $formArrary = array();
        $formArrary['admin_name'] = $this->input->post('username');
        $formArrary['admin_email'] = $this->input->post('email');
        $formArrary['phone_number'] = $this->input->post('number');
        $formArrary['admin_password'] = $this->input->post('password');
        $this->User_model->addNewUser($formArrary);
        $this->session->set_flashdata('success', 'User Added Successfully');
        redirect('admin/register');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function admin_login()
    {
        $email = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->findUserByEmail($email);

        if ($user) {
            if ($user['admin_password'] === $password) {
                $admin_id = $user['id'];
                $this->session->set_userdata('adminId', $admin_id);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password galat hai');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('error', 'Email galat hai');
            redirect('admin/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("adminId");
        redirect('admin/login');
    }
}

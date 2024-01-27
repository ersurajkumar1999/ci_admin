 <?php
    class Admin extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('session');
            $this->load->database();
            $this->load->model('User_Model');
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
            $data['password'] = $this->input->post('password');
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
            $data = array();
            $data['user'] = $this->User_Model->getDataById($userId);

            $this->load->view('admin/user/user_edit', $data);
        }

        public function update_user($user_id)
        {
            $data = array();
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->User_Model->updateUser($user_id, $data);
            $this->session->set_flashdata('success', 'User Updated Successfully');
            redirect('admin/user_list');
        }

        public function deleteUser($user_id)
        {
            $this->User_Model->deletedata($user_id);
            redirect('admin/user_list');
        }

        public function create_manager()
        {
            $this->load->view('admin/manager/create_manager');
        }
        public function store_manager()
        {
            $data = array();
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['user_type'] = "Manager";
            $data['password'] = $this->input->post('password');
            // echo "<pre>";print_r($data);exit;
            $userLastId = $this->User_Model->storemanagerData($data);
            if ($userLastId) {
                $this->session->set_flashdata('success', 'User Added Successfully');
            } else {
                $this->session->set_flashdata('error', 'Something went wrong! Please try again');
            }
            redirect('admin/manager_list');
        }

        public function manager_edit($user_id)
        {
            $data = array();
            $data['manager'] = $this->User_Model->getDataById($user_id);
            $this->load->view('admin/manager/manager_edit', $data);
        }

        public function update_manager($user_id)
        {
            $data = array();
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->User_Model->updatemanager($user_id, $data);
            $this->session->set_flashdata('success', 'User Updated Successfully');
            redirect('admin/manager_list');
        }

        public function deleteManager($user_id)
        {
            $this->User_Model->deletemanager($user_id);
            redirect('admin/manager_list');
        }
        public function index()
        {
            $this->load->view('admin/admin_user_login');
        }
        public function admin_login()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_Model->findUserByEmail($email);

            if ($user) {
                if ($user['password'] === $password) {
                    $user_id = $user['id'];
                    $this->session->set_userdata('adminId', $user_id);
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
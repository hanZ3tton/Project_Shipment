<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        $this->load->library('session');
        $this->load->model('Auth_model'); // Assuming you have a User_model for user operations
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->database();

        if ($this->session->userdata('username') == null) {
            redirect('auth');
        }
    }

    public function index()
    {
        $page = $this->input->get('page');
        $search = $this->input->get('search');

        $config['base_url'] = base_url('app/user/index');
        $config['total_rows'] = $this->Auth_model->count_all($search);
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['user'] = $this->Auth_model->get_pagination($config['per_page'], $page, $search);

        $data['pagination_links'] = $this->pagination->create_links();
        $data['title'] = 'User List';
        $data['view'] = 'app/user/index';

        $this->load->view('app', $data);
    }

    public function create()
    {
        $data['title'] = 'Create User Page';

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[14]|alpha_dash|is_unique[user.username]');
        $this->form_validation->set_rules('fullName', 'Fullname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('postalCode', 'Postal Code', 'required|numeric');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phoneNum', 'Phone Number', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['view'] = 'app/user/create';
            $this->load->view('app', $data);
        } else {
            $this->Auth_model->create_user();
            redirect('app/user');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit User Page';
        $data['users'] = $this->Auth_model->getUserById($id);
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[14]|alpha_dash');
        $this->form_validation->set_rules('fullName', 'Fullname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('postalCode', 'Postal Code', 'required|numeric');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phoneNum', 'Phone Number', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['view'] = 'app/user/edit';
            $this->load->view('app', $data);
        } else {
            $this->Auth_model->update_user($id);
            redirect('app/user');
        }
    }
    public function delete($id)
    {
        if ($id == $this->session->userdata('user_id')) {
            $this->session->set_flashdata('error', 'You cannot delete your own account.');
            redirect('app/user');
        }
        $this->Auth_model->deleteUser($id);
        redirect('app/user');
    }
}

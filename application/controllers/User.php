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
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'List User Page';
        $data['users'] = $this->Auth_model->getAllUsers();
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('user/index', $data);
        $this->load->view('templates/admin_footer');
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
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar');
            $this->load->view('user/create');
            $this->load->view('templates/admin_footer');
        } else {
            $this->Auth_model->create_user();
            redirect('user');
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
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar');
            $this->load->view('user/edit', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Auth_model->update_user($id);
            redirect('user');
        }
    }
    public function delete($id)
    {
        $this->Auth_model->deleteUser($id);
        redirect('user');
    }
}

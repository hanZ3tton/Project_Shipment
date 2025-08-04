<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Auth_model->get_user($username);

            if ($user &&  $user['password'] == $password) {
                // Set session data
                $this->session->set_userdata('username', $user['username']);
                redirect('dashboard'); // Redirect to the dashboard or another page
            } else {
                echo "error";
            }
        }
        // Load the login view

    }

    public function registration()
    {
        // Load the registration view
        $data['title'] = 'Registration Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/registration', $data);
        $this->load->view('templates/auth_footer');
    }


    public function logout()
    {
        // Perform logout operations
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    // Additional methods for authentication can be added here
}

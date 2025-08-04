<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('User_model'); // Assuming you have a User_model for user operations
        $this->load->library('form_validation');
        $this->load->database();
    }
    public function index()
    {
        // Load the login view
        $data['title'] = 'Login Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login', $data);
        $this->load->view('templates/auth_footer');
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

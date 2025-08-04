<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        // Load the login view
        $data['title'] = 'Login Page';
        $this->load->view('auth/login', $data);
    }

    public function logout()
    {
        // Perform logout operations
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function register()
    {
        // Load the registration view
        $this->load->view('auth/register');
    }

    // Additional methods for authentication can be added here
}

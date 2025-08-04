<?php
class Auth extends CI_Controller
{

    public function login()
    {
        // Load the login view
        $this->load->view('auth/login');
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

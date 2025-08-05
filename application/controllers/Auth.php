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

        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $data['title'] = 'Login Page';
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Auth_model->get_user($username);

            if ($user && password_verify($password, $user['password'])) {
                // Set session data
                $this->session->set_userdata('username', $user['username']);
                redirect('dashboard'); // Redirect to the dashboard or another page
            } else {
                $this->form_validation->set_rules('login_failed', '', 'callback_dummy_login');
                $this->form_validation->set_message('dummy_login', 'incorrect username or password');
                $this->form_validation->run();
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login', $data);
                $this->load->view('templates/auth_footer');
            }
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('fullName', 'Fullname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('postalCode', 'Postal Code', 'required|numeric');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|min_length[8]|alpha_numeric');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $this->Auth_model->create_user();
            redirect('dashboard'); // Redirect to the login page after successful registration
        }
    }


    public function logout()
    {
        // Perform logout operations
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function dummy_login()
    {
        return FALSE;
    }
}

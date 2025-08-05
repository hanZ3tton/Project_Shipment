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
        $data['title'] = 'List User Page';

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('user/create');
        $this->load->view('templates/admin_footer');
    }

    public function edit()
    {
        $data['title'] = 'List User Page';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/auth_footer');
    }
}

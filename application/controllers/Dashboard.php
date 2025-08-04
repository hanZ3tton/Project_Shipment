<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        // $this->load->library('session');
        // $this->load->model('Dashboard_model'); // Assuming you have a User_model for user operations
        // $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('dashboard/index');
        $this->load->view('templates/auth_footer');
    }
}

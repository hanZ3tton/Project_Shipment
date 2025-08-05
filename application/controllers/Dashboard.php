<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        $this->load->library('session');
        // $this->load->model('Dashboard_model'); // Assuming you have a Dashboard_model for dashboard operations
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {

        $data['title'] = 'dashboard page';
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/admin_footer');
    }
}

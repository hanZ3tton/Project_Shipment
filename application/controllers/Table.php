<?php
class Table extends CI_Controller
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
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('table/index');
        $this->load->view('templates/footer');
    }
}

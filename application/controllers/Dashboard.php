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
        //if (!$this->session->userdata('username')) {
        //redirect('auth'); // Redirect to login if not logged in
        // }

        $data['title'] = 'Dashboard';
        // $data['user_data'] = $this->Dashboard_model->get_user_data($this->session->userdata('username')); 
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        //$this->load->view('templates/footer');
    }
}

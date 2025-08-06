<?php
class Shipment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary libraries, models, or helpers here
        $this->load->library('session');
        // $this->load->model('Shipment_model'); // Assuming you have a Shipment_model for shipment operations
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Shipment List';
        $data['view'] = 'app/shipment/index';
        $data['view_style'] = 'app/shipment/index_style';
        $data['view_script'] = 'app/shipment/index_script';
        $this->load->view('app', $data);
    }
}

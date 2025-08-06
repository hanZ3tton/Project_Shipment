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
        // $data['shipments'] = $this->Shipment_model->getAllShipments();
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar');
        $this->load->view('shipment/index');
        $this->load->view('templates/admin_footer');
    }
}

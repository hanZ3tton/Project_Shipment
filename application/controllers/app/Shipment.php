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
        if ($this->session->userdata('username') == null) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Shipment List';
        $data['view'] = 'app/shipment/index';
        $data['view_style'] = 'app/shipment/index_style';
        $data['view_script'] = 'app/shipment/index_script';
        $this->load->view('app', $data);
    }
    public function create()
    {
        $data['title'] = 'Create Shipment';

        // Set validation rules
        $this->form_validation->set_rules('senderName', 'Sender Name', 'required');
        $this->form_validation->set_rules('senderEmail', 'Sender Email', 'required|valid_email');
        $this->form_validation->set_rules('senderAddress', 'Sender Address', 'required');
        $this->form_validation->set_rules('senderCountry', 'Sender Country', 'required');
        $this->form_validation->set_rules('senderCity', 'Sender City', 'required');
        $this->form_validation->set_rules('senderPostalCode', 'Sender Postal Code', 'required');
        $this->form_validation->set_rules('senderPhone', 'Sender Phone', 'required');
        $this->form_validation->set_rules('receiverName', 'Receiver Name', 'required');
        $this->form_validation->set_rules('receiverEmail', 'Receiver Email', 'required|valid_email');
        $this->form_validation->set_rules('receiverAddress', 'Receiver Address', 'required');
        $this->form_validation->set_rules('receiverCountry', 'Receiver Country', 'required');
        $this->form_validation->set_rules('receiverCity', 'Receiver City', 'required');
        $this->form_validation->set_rules('receiverPostalCode', 'Receiver Postal Code', 'required');
        $this->form_validation->set_rules('receiverPhone', 'Receiver Phone', 'required');
        $this->form_validation->set_rules('itemDescription', 'Item Description', 'required');
        $this->form_validation->set_rules('itemWeight', 'Item Weight', 'required|numeric');
        $this->form_validation->set_rules('itemLength', 'Item Length', 'required');
        $this->form_validation->set_rules('itemWidth', 'Item Width', 'required');
        $this->form_validation->set_rules('itemHeight', 'Item Height', 'required');
        $this->form_validation->set_rules('itemCategory', 'Item Category', 'required');


        if ($this->form_validation->run() == FALSE) {
            // Load the form view with validation
            $data['title'] = 'Shipment List';
            $data['view'] = 'app/shipment/create';
            $data['view_style'] = 'app/shipment/index_style';
            $data['view_script'] = 'app/shipment/index_script';
            $this->load->view('app', $data);
        } else {
            // If validation passes, create the shipment
            $this->load->model('Shipment_model');
            if ($this->Shipment_model->create_shipment()) {
                $this->session->set_flashdata('success', 'Shipment created successfully!');
                redirect('app/shipment');
            } else {
                $this->session->set_flashdata('error', 'Failed to create shipment. Please try again.');
                redirect('app/shipment/create');
            }
        }
    }
}

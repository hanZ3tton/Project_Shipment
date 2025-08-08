<?php

class Shipment_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create_shipment()
    {
        // Prepare shipment data
        $data = array(
            'sender_name' => $this->input->post('senderName'),
            'sender_email' => $this->input->post('senderEmail'),
            'sender_address' => $this->input->post('senderAddress'),
            'sender_country' => $this->input->post('senderCountry'),
            'sender_city' => $this->input->post('senderCity'),
            'sender_postal_code' => $this->input->post('senderPostalCode'),
            'sender_phone_number' => $this->input->post('senderPhone'),
            'receiver_name' => $this->input->post('receiverName'),
            'receiver_email' => $this->input->post('receiverEmail'),
            'receiver_address' => $this->input->post('receiverAddress'),
            'receiver_country' => $this->input->post('receiverCountry'),
            'receiver_city' => $this->input->post('receiverCity'),
            'receiver_postal_code' => $this->input->post('receiverPostalCode'),
            'receiver_phone_number' => $this->input->post('receiverPhone'),
            'item_description' => $this->input->post('itemDescription'),
            'weight' => $this->input->post('itemWeight'),
            'length' => $this->input->post('itemLength'),
            'width' => $this->input->post('itemWidth'),
            'height' => $this->input->post('itemHeight'),
            'category_id' => $this->input->post('itemCategory'),
        );
        // Insert shipment data into the database
        return $this->db->insert('shipment', $data);
    }

    public function get_all_shipments()
    {
        // Retrieve all shipments from the database
        $query = $this->db->get('shipment');
        return $query->result_array();
    }

    public function get_shipment_by_id($id)
    {
        // Retrieve a specific shipment by ID
        $query = $this->db->get_where('shipment', ['id' => $id]);
        return $query->row_array();
    }
    public function update_shipment($id)
    {
        // Prepare updated shipment data
        $data = array(
            'sender_name' => $this->input->post('senderName'),
            'sender_email' => $this->input->post('senderEmail'),
            'sender_address' => $this->input->post('senderAddress'),
            'sender_country' => $this->input->post('senderCountry'),
            'sender_city' => $this->input->post('senderCity'),
            'sender_postal_code' => $this->input->post('senderPostalCode'),
            'sender_phone_number' => $this->input->post('senderPhone'),
            'receiver_name' => $this->input->post('receiverName'),
            'receiver_email' => $this->input->post('receiverEmail'),
            'receiver_address' => $this->input->post('receiverAddress'),
            'receiver_country' => $this->input->post('receiverCountry'),
            'receiver_city' => $this->input->post('receiverCity'),
            'receiver_postal_code' => $this->input->post('receiverPostalCode'),
            'receiver_phone_number' => $this->input->post('receiverPhone'),
            'item_description' => $this->input->post('itemDescription'),
            'item_weight' => $this->input->post('itemWeight'),
            'item_length' => $this->input->post('itemLength'),
            'item_width' => $this->input->post('itemWidth'),
            'item_height' => $this->input->post('itemHeight'),
            'item_category' => $this->input->post('itemCategory'),
        );
        // Update shipment data in the database
        $this->db->where('id', $id);
        return $this->db->update('shipment', $data);
    }
}

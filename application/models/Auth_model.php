<?php
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load the database
    }

    // Method to get user by email
    public function get_user($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        return $query->row_array(); // Return a single row as an associative array
    }

    // Method to create a new user
    public function create_user()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'full_name' => $this->input->post('fullName'),
            'email' => $this->input->post('email'),
            'city' => $this->input->post('city'),
            'postal_code' => $this->input->post('postalCode'),
            'address' => $this->input->post('address'),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT), // Hash the password
        ); {

            return $this->db->insert('user', $data); // Insert data into the users table
        }
    }
}

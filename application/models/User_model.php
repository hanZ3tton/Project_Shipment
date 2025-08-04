<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load the database
    }

    // Method to get user by email
    public function get_user_by_email($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row_array(); // Return a single row as an associative array
    }

    // Method to create a new user
    public function create_user($data)
    {
        return $this->db->insert('users', $data); // Insert data into the users table
    }
}

<?php
class Auth_model extends CI_Model
{
    protected $table = 'user'; // Define the table name

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load the database
        date_default_timezone_set('Asia/Jakarta');
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
            'phone_number' => $this->input->post('phoneNum'),
            'city' => $this->input->post('city'),
            'postal_code' => $this->input->post('postalCode'),
            'address' => $this->input->post('address'),
            'created_at' => date('Y-m-d h:i:s'), // Set the current timestamp
            'updated_at' => date('Y-m-d h:i:s'), // Set the current timestamp
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT), // Hash the password
        ); {

            return $this->db->insert('user', $data); // Insert data into the users table
        }
    }
    public function getAllUsers()
    {
        return $this->db->get('user')->result();
    }
    public function update_user($id)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'full_name' => $this->input->post('fullName'),
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('phoneNum'),
            'city' => $this->input->post('city'),
            'postal_code' => $this->input->post('postalCode'),
            'address' => $this->input->post('address'),
            'updated_at' => date('Y-m-d H:i:s'), // Set the current timestamp
        );
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array(); // array
    }
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user'); // Delete user by ID
    }

    // Get User Pagination
    public function get_pagination($limit, $offset, $searchQuery = null)
    {
        $this->db->limit($limit, $offset);

        $this->buildQueryTable($searchQuery);

        $query = $this->db->get($this->table);
        return $query->result();
    }

    function buildQueryTable($searchQuery = null)
    {
        if ($searchQuery) {
            $this->db->like('username', $searchQuery);
        }
    }

    function count_all($searchQuery = null)
    {

        $this->buildQueryTable($searchQuery);

        return $this->db->count_all_results($this->table);
    }
}

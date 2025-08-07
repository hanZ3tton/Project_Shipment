<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sample extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('pagination');
        $this->load->helper('url');
    }

    public function index()
    {

        $page = $this->input->get('page');
        $search = $this->input->get('search');

        $config['base_url'] = base_url('app/sample/index');
        $config['total_rows'] = $this->auth_model->count_all($search);
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['user'] = $this->auth_model->get_pagination($config['per_page'], $page, $search);

        $data['pagination_links'] = $this->pagination->create_links();
        $data['view'] = 'app/sample/index';

        $this->load->view('app', $data);
    }
}

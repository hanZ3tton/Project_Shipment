<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Global Pagination Configuration
| -------------------------------------------------------------------
| This file contains the global pagination template used across the site
| to ensure a consistent look and feel (Bootstrap 4).
|
| Any settings here can be overridden by passing a new value in the
| $this->pagination->initialize() call in your controller.
*/

// --- Konfigurasi untuk URL Query String (?page=1) ---
$config['page_query_string']    = TRUE;
$config['query_string_segment'] = 'page';
$config['use_page_numbers']     = TRUE;
$config['reuse_query_string'] = TRUE;

// --- Styling Bootstrap 4 ---
$config['full_tag_open']    = '<ul class="pagination justify-content-center">';
$config['full_tag_close']   = '</ul>';

$config['first_link']       = 'First';
$config['first_tag_open']   = '<li class="page-item">';
$config['first_tag_close']  = '</li>';

$config['last_link']        = 'Last';
$config['last_tag_open']    = '<li class="page-item">';
$config['last_tag_close']   = '</li>';

$config['next_link']        = '&raquo;';
$config['next_tag_open']    = '<li class="page-item">';
$config['next_tag_close']   = '</li>';

$config['prev_link']        = '&laquo;';
$config['prev_tag_open']    = '<li class="page-item">';
$config['prev_tag_close']   = '</li>';

$config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
$config['cur_tag_close']    = '</a></li>';

$config['num_tag_open']     = '<li class="page-item">';
$config['num_tag_close']    = '</li>';

$config['attributes']       = array('class' => 'page-link');

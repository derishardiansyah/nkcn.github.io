<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
    }

    public function index()
    {
        $this->load->view('user/head');
        $this->load->view('user/header');
        $this->load->view('user/about_us');
        $this->load->view('user/footer');
    }
}

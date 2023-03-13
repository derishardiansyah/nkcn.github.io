<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
        $this->load->model('model_upt');
    }

    public function index()
    {
        $data['get_maps'] = $this->M_model->SemuaData();
        $data = array(
            'maps' => $this->M_model->tampil(),
            'upt' => $this->M_model->tampil_upt()
        );

        // total data
        $data['get_admin'] = $this->db->get('tb_admin')->num_rows();
        $data['get_user'] = $this->db->get('tb_user')->num_rows();
        $data['get_maps'] = $this->db->get('tb_maps')->num_rows();
        $data['get_lembaga'] = $this->db->get('tb_lembaga')->num_rows();
        $data['get_upt'] = $this->db->get('tb_upt')->num_rows();

        $this->load->view('admin/head');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
        $this->load->view('admin/javascript');
    }

    public function maps()
    {
        $data = [
            "tb_maps" => $this->M_model->maps()

        ];
    }

    public function lembaga()
    {
        $data = [
            "tb_lembaga" => $this->M_model->lembaga()
        ];
    }

    public function upt()
    {
        $data = [
            "tb_upt" => $this->M_model->upt()
        ];
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Anda sudah keluar!
          </div>');
        redirect('login_admin');
    }
}

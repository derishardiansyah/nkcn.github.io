<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_admin');
        $this->load->model('tambah_model');
        $this->load->model('ubah_model');
        $this->load->model('hapus_model');
    }

    public function index()
    {
        $x['data'] = $this->model_admin->show_admin();
        $this->load->view('admin/head');
        $this->load->view('admin/dashboard_admin', $x);
        $this->load->view('admin/footer');
        $this->load->view('admin/javascript');
    }

    public function deskripsi_admin($id_admin)
    {
        $data = [
            "tb_admin" => $this->M_model->deskripsi_admin($id_admin),
            "get_admin" => $this->M_model->SemuaData()

        ];
    }

    public function tambah_admin()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/tambah');
        $this->load->view('admin/javascript');
    }

    public function simpan()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        if ($this->tambah_model->tambah_admin($data) == TRUE) {
            $this->session->set_flashdata('tambah_admin', true);
        } else {
            $this->session->set_flashdata('tambah_admin', false);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambah!
      </div>');
        redirect(base_url('admin'));
    }

    public function hapus_admin($id_admin)
    {
        $this->hapus_model->hapus_admin($id_admin);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('admin');
    }

    public function ubah_admin($id_admin)
    {
        $data['tb_admin'] = $this->ubah_model->ambil_id_admin($id_admin);
        $this->load->view('admin/dashboard_admin', $data);
        redirect('admin');
    }

    public function proses_ubah_admin($id_admin = null)
    {
        $this->ubah_model->proses_ubah_admin($id_admin);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('admin');
    }
}

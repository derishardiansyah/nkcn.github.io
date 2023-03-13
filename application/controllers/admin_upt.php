<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_upt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_upt');
        $this->load->model('tambah_model');
        $this->load->model('ubah_model');
        $this->load->model('hapus_model');
    }

    public function index()
    {
        $x['data'] = $this->model_upt->show_upt();
        $this->load->view('admin/head');
        $this->load->view('admin/upt/dashboard_upt', $x);
        $this->load->view('admin/footer');
        $this->load->view('admin/javascript');
    }

    public function tambah_upt()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/upt/tambah');
        $this->load->view('admin/javascript');
    }

    public function simpan()
    {
        $data = array(
            'nama_upt' => $this->input->post('nama_upt'),
            'provinsi' => $this->input->post('provinsi'),
            'alamat' => $this->input->post('alamat'),
            'kontak' => $this->input->post('kontak'),
            'website' => $this->input->post('website'),
            'latitude' => $this->input->post('latitude'),
            'longtitude' => $this->input->post('longtitude')
        );

        if ($this->tambah_model->tambah_upt($data) == TRUE) {
            $this->session->set_flashdata('tambah_upt', true);
        } else {
            $this->session->set_flashdata('tambah_upt', false);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambah!
      </div>');
        redirect(base_url('admin_upt'));
    }

    public function hapus_upt($id_upt)
    {
        $this->hapus_model->hapus_upt($id_upt);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('admin_upt');
    }

    public function ubah_upt($id_upt)
    {
        $data['tb_upt'] = $this->ubah_model->ambil_id_upt($id_upt);
        $this->load->view('admin/upt/dashboard_upt', $data);
        redirect('admin_upt');
    }

    public function proses_ubah_upt($id_upt = null)
    {
        $this->ubah_model->proses_ubah_upt($id_upt);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('admin_upt');
    }
}

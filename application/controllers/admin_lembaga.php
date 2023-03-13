<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_lembaga extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_lembaga');
        $this->load->model('tambah_model');
        $this->load->model('ubah_model');
        $this->load->model('hapus_model');
    }

    public function index()
    {
        $x['data'] = $this->model_lembaga->show_lembaga();
        $this->load->view('admin/head');
        $this->load->view('admin/lembaga/dashboard_lembaga', $x);
        $this->load->view('admin/footer');
        $this->load->view('admin/javascript');
    }

    public function tambah_lembaga()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/lembaga/tambah');
        $this->load->view('admin/javascript');
    }

    public function simpan()
    {
        $data = array(
            'nama_lembaga' => $this->input->post('nama_lembaga'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kontak' => $this->input->post('kontak'),
            'website' => $this->input->post('website'),
            'gambar' => $this->input->post('gambar')
        );

        if ($this->tambah_model->tambah_lembaga($data) == TRUE) {
            $this->session->set_flashdata('tambah_lembaga', true);
        } else {
            $this->session->set_flashdata('tambah_lembaga', false);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambah!
      </div>');
        redirect(base_url('admin_lembaga'));
    }

    public function hapus_lembaga($id_deskripsi)
    {
        $this->hapus_model->hapus_lembaga($id_deskripsi);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('admin_lembaga');
    }

    public function ubah_lembaga($id_deskripsi)
    {
        $data['tb_lembaga'] = $this->ubah_model->ambil_id_lembaga($id_deskripsi);
        $this->load->view('admin/lembaga/dashboard_lembaga', $data);
        redirect('admin_lembaga');
    }

    public function proses_ubah_lembaga($id_deskripsi = null)
    {
        $this->ubah_model->proses_ubah_lembaga($id_deskripsi);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('admin_lembaga');
    }
}

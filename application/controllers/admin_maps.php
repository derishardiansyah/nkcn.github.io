<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_maps extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_maps');
        $this->load->model('tambah_model');
        $this->load->model('ubah_model');
        $this->load->model('hapus_model');
    }

    public function index()
    {
        $x['data'] = $this->model_maps->show_maps();
        $this->load->view('admin/head');
        $this->load->view('admin/maps/dashboard_maps', $x);
        $this->load->view('admin/footer');
        $this->load->view('admin/javascript');
    }

    public function tambah_maps()
    {

        $this->load->view('admin/head');
        $this->load->view('admin/maps/tambah');
        $this->load->view('admin/javascript');
    }

    public function simpan()
    {
        $data = array(
            'nama_lembaga' => $this->input->post('nama_lembaga'),
            'isu' => $this->input->post('isu'),
            'wilayah_kegiatan' => $this->input->post('wilayah_kegiatan'),
            'latitude' => $this->input->post('latitude'),
            'longtitude' => $this->input->post('longtitude'),
            'tahun' => $this->input->post('tahun'),
            'negara' => $this->input->post('negara')
        );

        if ($this->tambah_model->tambah_maps($data) == TRUE) {
            $this->session->set_flashdata('tambah_maps', true);
        } else {
            $this->session->set_flashdata('tambah_maps', false);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambah!
      </div>');
        redirect(base_url('admin_maps'));
    }

    public function hapus_maps($id_lembaga)
    {
        $this->hapus_model->hapus_maps($id_lembaga);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('admin_maps');
    }

    public function ubah_maps($id_lembaga)
    {
        $data['tb_maps'] = $this->ubah_model->ambil_id_maps($id_lembaga);
        $this->load->view('admin/maps/dashboard_maps', $data);
        redirect('admin_maps');
    }

    public function proses_ubah_maps($id_lembaga = null)
    {
        $this->ubah_model->proses_ubah_maps($id_lembaga);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('admin_maps');
    }
}

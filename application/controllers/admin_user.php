<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_user');
        $this->load->model('tambah_model');
        $this->load->model('ubah_model');
        $this->load->model('hapus_model');
    }

    public function index()
    {
        $x['data'] = $this->model_user->show_user();
        $this->load->view('admin/head');
        $this->load->view('admin/user/dashboard_user', $x);
        $this->load->view('admin/footer');
        $this->load->view('admin/javascript');
    }

    public function tambah_user()
    {
        $this->load->view('admin/head');
        $this->load->view('admin/user/tambah');
        $this->load->view('admin/javascript');
    }

    public function simpan()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nip' => $this->input->post('nip'),
            'email' => $this->input->post('email')
        );

        if ($this->tambah_model->tambah_user($data) == TRUE) {
            $this->session->set_flashdata('tambah_user', true);
        } else {
            $this->session->set_flashdata('tambah_user', false);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambah!
      </div>');
        redirect(base_url('admin_user'));
    }

    public function hapus_user($id_user)
    {
        $this->hapus_model->hapus_user($id_user);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('admin_user');
    }

    public function ubah_user($id_user)
    {
        $data['tb_user'] = $this->ubah_model->ambil_id_user($id_user);
        $this->load->view('admin/user/dashboard_user', $data);
        redirect('admin_user');
    }

    public function proses_ubah_user($id_user = null)
    {
        $this->ubah_model->proses_ubah_user($id_user);
        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('admin_user');
    }
}

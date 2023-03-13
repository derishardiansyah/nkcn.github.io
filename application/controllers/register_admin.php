<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Register';
        $this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[tb_admin.username]', [
            'is_unique' => 'Nama sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required');


        if ($this->form_validation->run() == false) {

            $this->load->view('register/head', $data);
            $this->load->view('register/register_admin');
            $this->load->view('register/javascript');
        } else {
            $data = [
                // true untuk menghindari cross side scriptying
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('tb_admin', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat! akun sudah dibuat. Silahkan Login
      </div>');
            redirect('login_admin');
        }
    }
}

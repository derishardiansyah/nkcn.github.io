<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Register';
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_rules('nip', 'nip', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);


        if ($this->form_validation->run() == false) {

            $this->load->view('register/head', $data);
            $this->load->view('register/register_user');
            $this->load->view('register/javascript');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nip' => htmlspecialchars($this->input->post('nip', true))
            ];
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Selamat! akun sudah dibuat. Silahkan Login
      </div>');
            redirect('login_user');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Login';
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('login/head', $data);
            $this->load->view('login/login_admin');
            $this->load->view('login/javascript');
        } else {
            // validation success
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $tb_admin = $this->db->get_where('tb_admin', ['username' => $username])->row_array();
        if ($tb_admin) {
            // usernya ada
            if ($tb_admin) {
                // cek password
                if (password_verify($password, $tb_admin['password'])) {
                    $data = [
                        'username' => $tb_admin['username'],
                        'password' => $tb_admin['password']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Password Salah!
              </div>');
                    redirect('login_admin');
                }
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Username belum terdaftar!
          </div>');
            redirect('login_admin');
        }
    }
}

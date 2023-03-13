<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_user extends CI_Controller
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
        $this->form_validation->set_rules('nip', 'nip', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');


        if ($this->form_validation->run() == false) {
            $this->load->view('login/head', $data);
            $this->load->view('login/login_user');
            $this->load->view('login/javascript');
        } else {
            // validation success
            $this->login();
        }
    }
    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nip = $this->input->post('nip');
        $email = $this->input->post('email');

        $tb_user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        if ($tb_user) {
            // usernya ada
            if ($tb_user) {
                // cek password
                if (password_verify($password, $tb_user['password'])) {
                    $data = [
                        'username' => $tb_user['username'],
                        'password' => $tb_user['password'],
                        'nip' => $tb_user['nip'],
                        'email' => $tb_user['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Password Salah!
          </div>');
                    redirect('login_user');
                }
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar!
          </div>');
            redirect('login_user');
        }
    }
}

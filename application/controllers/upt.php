<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_model');
        $this->load->model('model_maps');
        $this->load->model('model_lembaga');
        $this->load->model('model_upt');
    }

    public function deskripsi_lembaga($id_deskripsi)
    {
        $data = [
            'maps' => $this->M_model->tampil(),
            'upt' => $this->M_model->tampil_upt(),
            'lembaga' => $this->M_model->tampil_lembaga(),
            "tb_lembaga" => $this->M_model->deskripsi_lembaga($id_deskripsi),
            "get_lembaga" => $this->M_model->SemuaData()
        ];
        $data['data'] = $this->model_maps->show_maps();
        $data['data'] = $this->model_upt->show_upt();
        $data['data'] = $this->model_lembaga->show_lembaga();
        $this->load->view('user/head');
        $this->load->view('user/header');
        $this->load->view('lembaga/lembaga', $data);
        $this->load->view('user/main_lembaga', $data);
        // $this->load->view('user/footer');
        $this->load->view('user/javascript');
    }

    public function deskripsi_maps($id_lembaga)
    {
        $data = [
            'maps' => $this->M_model->tampil(),
            'upt' => $this->M_model->tampil_upt(),
            'lembaga' => $this->M_model->tampil_lembaga(),
            "tb_maps" => $this->M_model->deskripsi_maps($id_lembaga),
            "get_maps" => $this->M_model->SemuaData()
        ];
        $data['data'] = $this->model_maps->show_maps();
        $data['data'] = $this->model_upt->show_upt();
        $data['data'] = $this->model_lembaga->show_lembaga();
        $this->load->view('user/head');
        $this->load->view('user/header');
        $this->load->view('lembaga/lembaga', $data);
        $this->load->view('upt/upt', $data);
        $this->load->view('user/main_lembaga', $data);
        // $this->load->view('user/footer');
        $this->load->view('user/javascript');
    }
    public function deskripsi_upt($id_upt)
    {
        $data = [
            'maps' => $this->M_model->tampil(),
            'upt' => $this->M_model->tampil_upt(),
            'lembaga' => $this->M_model->tampil_lembaga(),
            "tb_upt" => $this->M_model->deskripsi_upt($id_upt),
            "get_upt" => $this->M_model->SemuaData(),
            "get_lembaga" => $this->M_model->SemuaData()
        ];
        $data['data'] = $this->model_upt->show_upt();
        $data['data'] = $this->model_maps->show_maps();
        $data['data'] = $this->model_lembaga->show_lembaga();
        $this->load->view('user/head');
        $this->load->view('user/header');
        $this->load->view('upt/upt', $data);
        $this->load->view('user/main_lembaga', $data);
        // $this->load->view('user/footer');
        $this->load->view('user/javascript');
    }
}

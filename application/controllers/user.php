<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_model');
		$this->load->model('model_maps');
		$this->load->model('model_lembaga');
		$this->load->model('model_upt');
	}

	public function index()
	{
		$data = array(
			'maps' => $this->M_model->tampil(),
			'upt' => $this->M_model->tampil_upt(),
			'lembaga' => $this->M_model->tampil_lembaga()
		);
		$data['get_lembaga'] = $this->M_model->SemuaData();
		$data['get_maps'] = $this->M_model->SemuaData();
		$data['get_upt'] = $this->M_model->SemuaData();
		$data['data'] = $this->model_maps->show_maps();
		$data['data'] = $this->model_upt->show_upt();

		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/main', $data);
		$this->load->view('user/footer');
		$this->load->view('user/javascript');
	}

	public function deskripsi_user($id_user)
	{
		$data = [
			"tb_user" => $this->M_model->deskripsi_user($id_user),
			"get_user" => $this->M_model->SemuaData()
		];
	}

	public function deskripsi_upt($id_upt)
	{
		$data = [
			"tb_upt" => $this->M_model->deskripsi_upt($id_upt),
			"get_upt" => $this->M_model->SemuaData()
		];
	}

	public function deskripsi_lembaga($id_lembaga)
	{
		$data = [
			"tb_lembaga" => $this->M_model->deskripsi_upt($id_lembaga),
			"get_lembaga" => $this->M_model->SemuaData()
		];
	}
}

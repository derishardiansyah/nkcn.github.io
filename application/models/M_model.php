<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_model extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('tb_lembaga')->result_array();
        return $this->db->get('tb_maps')->result_array();
        return $this->db->get('tb_admin')->result_array();
        return $this->db->get('tb_user')->result_array();
        return $this->db->get('tb_upt')->result_array();
    }

    public function deskripsi_lembaga($id_deskripsi)
    {
        $query = $this->db->query("SELECT * FROM tb_lembaga WHERE id_deskripsi = '$id_deskripsi'");
        return $query->result_array();
    }

    public function deskripsi_maps($id_lembaga)
    {
        $query = $this->db->query("SELECT * FROM tb_maps WHERE id_lembaga = '$id_lembaga'");
        return $query->result_array();
    }

    public function deskripsi_admin($id_admin)
    {
        $query = $this->db->query("SELECT * FROM tb_admin WHERE id_admin = '$id_admin'");
        return $query->result_array();
    }

    public function deskripsi_user($id_user)
    {
        $query = $this->db->query("SELECT * FROM tb_user WHERE id_user = '$id_user'");
        return $query->result_array();
    }

    public function deskripsi_upt($id_upt)
    {
        $query = $this->db->query("SELECT * FROM tb_upt WHERE id_upt = '$id_upt'");
        return $query->result_array();
    }

    public function maps()
    {
        $data = $this->db->get('tb_maps')->result_array();
        echo json_encode($data);
    }

    public function lembaga()
    {
        $data = $this->db->get('tb_lembaga')->result_array();
        echo json_encode($data);
    }

    public function upt()
    {
        $data = $this->db->get('tb_upt')->result_array();
        echo json_encode($data);
    }

    public function get_admin()
    {
        $query = $this->db->get('tb_admin');
        return $query;
    }

    public function get_user()
    {
        $query = $this->db->get('tb_user');
        return $query;
    }

    public function get_lembaga()
    {
        $query = $this->db->get('tb_lembaga');
        return $query;
    }

    public function get_maps()
    {
        $query = $this->db->get('tb_maps');
        return $query;
    }

    public function get_upt()
    {
        $query = $this->db->get('tb_upt');
        return $query;
    }

    // fungsi tampil database
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tb_maps');
        $this->db->order_by('id_lembaga', 'lembaga');
        return $this->db->get()->result();
    }

    public function tampil_upt()
    {
        $this->db->select('*');
        $this->db->from('tb_upt');
        $this->db->order_by('id_upt', 'upt');
        return $this->db->get()->result();
    }

    public function tampil_lembaga()
    {
        $this->db->select('*');
        $this->db->from('tb_lembaga');
        $this->db->order_by('id_deskripsi', 'deskripsi');
        return $this->db->get()->result();
    }

    public function username()
    {
        $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
    }
}

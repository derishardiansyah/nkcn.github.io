<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ubah_model extends CI_Model
{
    public function ambil_id_maps($id_lembaga)
    {
        return $this->db->get_where('tb_maps', ['id_lembaga' => $id_lembaga])->row_array();
    }
    public function proses_ubah_maps()
    {
        $data = [
            "nama_lembaga" => $this->input->post('nama_lembaga'),
            "isu" => $this->input->post('isu'),
            "wilayah_kegiatan" => $this->input->post('wilayah_kegiatan'),
            "latitude" => $this->input->post('latitude'),
            "longtitude" => $this->input->post('longtitude'),
            "tahun" => $this->input->post('tahun')
        ];

        $this->db->where('id_lembaga', $this->input->post('id_lembaga'));
        $this->db->update('tb_maps', $data);
    }

    public function ambil_id_lembaga($id_deskripsi)
    {
        return $this->db->get_where('tb_lembaga', ['id_deskripsi' => $id_deskripsi])->row_array();
    }
    public function proses_ubah_lembaga()
    {
        $data = [
            "nama_lembaga" => $this->input->post('nama_lembaga'),
            "deskripsi" => $this->input->post('deskripsi'),
            "kontak" => $this->input->post('kontak'),
            "website" => $this->input->post('website'),
            "gambar" => $this->input->post('gambar')
        ];

        $this->db->where('id_deskripsi', $this->input->post('id_deskripsi'));
        $this->db->update('tb_lembaga', $data);
    }

    public function ambil_id_user($id_user)
    {
        return $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
    }
    public function proses_ubah_user()
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "nip" => $this->input->post('nip'),
            "email" => $this->input->post('email')
        ];

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tb_user', $data);
    }

    public function ambil_id_admin($id_admin)
    {
        return $this->db->get_where('tb_admin', ['id_admin' => $id_admin])->row_array();
    }
    public function proses_ubah_admin()
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password')
        ];

        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('tb_admin', $data);
    }

    public function ambil_id_upt($id_upt)
    {
        return $this->db->get_where('tb_upt', ['id_upt' => $id_upt])->row_array();
    }
    public function proses_ubah_upt()
    {
        $data = [
            "nama_upt" => $this->input->post('nama_upt'),
            "provinsi" => $this->input->post('provinsi'),
            "alamat" => $this->input->post('alamat'),
            "kontak" => $this->input->post('kontak'),
            "website" => $this->input->post('website'),
            "latitude" => $this->input->post('latitude'),
            "longtitude" => $this->input->post('longtitude')
        ];

        $this->db->where('id_upt', $this->input->post('id_upt'));
        $this->db->update('tb_upt', $data);
    }
}

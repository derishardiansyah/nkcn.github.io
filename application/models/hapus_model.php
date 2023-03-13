<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hapus_model extends CI_Model
{
    public function hapus_maps($id_lembaga)
    {
        $this->db->where('id_lembaga', $id_lembaga);
        $this->db->delete('tb_maps');
    }

    public function hapus_lembaga($id_deskripsi)
    {
        $this->db->where('id_deskripsi', $id_deskripsi);
        $this->db->delete('tb_lembaga');
    }

    public function hapus_user($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('tb_user');
    }

    public function hapus_admin($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('tb_admin');
    }

    public function hapus_upt($id_upt)
    {
        $this->db->where('id_upt', $id_upt);
        $this->db->delete('tb_upt');
    }
}

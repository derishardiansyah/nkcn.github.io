<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_model extends CI_Model
{
    public function tambah_maps($data)
    {
        $this->db->insert('tb_maps', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function tambah_lembaga($data)
    {
        $this->db->insert('tb_lembaga', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function tambah_admin($data)
    {
        $this->db->insert('tb_admin', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function tambah_user($data)
    {
        $this->db->insert('tb_user', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function tambah_upt($data)
    {
        $this->db->insert('tb_upt', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
}

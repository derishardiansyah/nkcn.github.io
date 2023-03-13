<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_lembaga extends CI_Model
{
    function show_lembaga()
    {

        $hasil = $this->db->query("SELECT * FROM tb_lembaga");

        return $hasil;
    }

    function get()
    {
        $data = $this->db->get('tb_lembaga');
        return $data;
    }
}

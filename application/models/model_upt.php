<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_upt extends CI_Model
{
    function show_upt()
    {

        $hasil = $this->db->query("SELECT * FROM tb_upt ");

        return $hasil;
    }

    function get()
    {
        $data = $this->db->get('tb_upt');
        return $data;
    }
}

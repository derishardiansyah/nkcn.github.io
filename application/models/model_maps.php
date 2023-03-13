<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_maps extends CI_Model
{
    function show_maps()
    {

        $hasil = $this->db->query("SELECT * FROM tb_maps");

        return $hasil;
    }
}

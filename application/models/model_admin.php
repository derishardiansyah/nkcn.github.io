<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{
    function show_admin()
    {

        $hasil = $this->db->query("SELECT * FROM tb_admin");

        return $hasil;
    }
}

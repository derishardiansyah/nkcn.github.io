<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    function show_user()
    {

        $hasil = $this->db->query("SELECT * FROM tb_user");

        return $hasil;
    }
}

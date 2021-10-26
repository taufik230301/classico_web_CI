<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model
{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_mahasiswa(){
        return $this->db->get('data_mahasiswa')->result_array();
    }
}
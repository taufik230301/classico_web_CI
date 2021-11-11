<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model
{

    function __construct(){
        parent::__construct();
        // $this->load->database();
    }
    
    public function get_mahasiswa(){
        return $this->db->get('data_mahasiswa')->result_array();
    }

    public function tambah_mahasiswa($data){
        $this->db->insert('data_mahasiswa', $data);
        
    }

    public function edit_mahasiswa($data, $id){
        $this->db->where('id', $id);
        $this->db->update('data_mahasiswa',$data);
        return TRUE;
    }

    public function hapus_mahasiswa($id){
        return $this->db->delete('data_mahasiswa', array('id'=> $id));
    }

    
}
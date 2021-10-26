<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_mahasiswa');
    }

    public function index(){
        $data['mahasiswa'] = $this->model_mahasiswa->get_mahasiswa();
        $this->load->view('home', $data);
    }
}
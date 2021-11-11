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

    public function tambah(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $no_hp = $this->input->post('no_hp');
        $jurusan = $this->input->post('jurusan');
        $ipk = $this->input->post('ipk');

        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'no_hp' => $no_hp,
            'jurusan' => $jurusan,
            'ipk' => $ipk
        );
        
        $this->model_mahasiswa->tambah_mahasiswa($data);
        redirect('mahasiswa/index');
    }

    public function edit(){
        $id = $this->input->post('id');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $no_hp = $this->input->post('no_hp');
        $jurusan = $this->input->post('jurusan');
        $ipk = $this->input->post('ipk');
        // echo $id; 
        // echo $nim;
        // echo $nama;
        // echo $no_hp;
        // echo $jurusan;
        // echo $ipk;
        // die();
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'no_hp' => $no_hp,
            'jurusan' => $jurusan,
            'ipk' => $ipk
        );
        $this->model_mahasiswa->edit_mahasiswa($data, $id);
        redirect('mahasiswa/index');
    }

    public function hapus($id){
        $this->model_mahasiswa->hapus_mahasiswa($id);
        redirect('mahasiswa/index');

    }
    
}
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '011012';
        $this->mhs1->nama = 'Witri Ardiyanti';
        $this->mhs1->gender = 'P';
        $this->mhs1->ipk = 3.97;
        $this->load->model('mahasiswa_model', 'mhs2');

        $this->mhs2->id = 2;
        $this->mhs2->nim = '011013';
        $this->mhs2->nama = 'Jeyano Lathi';
        $this->mhs2->gender = 'L';
        $this->mhs2->ipk = 3.95;

        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('mahasiswa/index', $data);
    }

    public function Create()
    {
        $this->load->view('mahasiswa/form');
    } 

    public function Simpan()
    {
        $nama= $this->input->post('nama');
        $nim= $this->input->post('nim');
        $gender= $this->input->post('gender');
        $tgl_lahir= $this->input->post('tgl_lahir');
        $tmp_lahir= $this->input->post('tmp_lahir');
        $ipk= $this->input->post('ipk');

        $data= array(
            'nama' => $nama,
            'nim' => $nim,
            'gender' => $gender,
            'tgl_lahir' => $tgl_lahir,
            'tmp_lahir' => $tmp_lahir,
            'ipk' => $ipk,
        );
        // var_dump($data);

        $this->load->view('mahasiswa/hasil', $data);
    }
}
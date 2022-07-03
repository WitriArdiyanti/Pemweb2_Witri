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
}
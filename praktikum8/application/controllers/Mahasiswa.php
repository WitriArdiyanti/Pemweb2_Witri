<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
       $data['mahasiswa']=$this->Mahasiswa_model->tampil_data()->result();

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
        $prodi= $this->input->post('prodi');

        $data= array(
            'nama' => $nama,
            'nim' => $nim,
            'gender' => $gender,
            'tgl_lahir' => $tgl_lahir,
            'tmp_lahir' => $tmp_lahir,
            'ipk' => $ipk,
            'prodi_kode' => $prodi,
        );

        $this->Mahasiswa_model->input_data($data, 'mahasiswa');
        redirect('mahasiswa/index');
    }
}
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Jefrey';
        $this->dsn1->nidn = '0123';
        $this->dsn1->gender = 'L';
        $this->dsn1->tmp_lahir = 'Bandung';
        $this->dsn1->tgl_lahir = '1996-02-02';
        $this->dsn1->pendidikan = 'S3';
        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Julian';
        $this->dsn2->nidn = '0123';
        $this->dsn2->gender = 'L';
        $this->dsn2->tmp_lahir = 'Jakarta';
        $this->dsn2->tgl_lahir = '1997-06-01';
        $this->dsn2->pendidikan = 'S2';
        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nama = 'Keynara';
        $this->dsn3->nidn = '0123';
        $this->dsn3->gender = 'P';
        $this->dsn3->tmp_lahir = 'Bogor';
        $this->dsn3->tgl_lahir = '1998-04-06';
        $this->dsn3->pendidikan = 'S2';
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('dosen/index', $data);
    }
}
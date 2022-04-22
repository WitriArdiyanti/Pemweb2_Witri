<?php

class BMI {
    public $berat;
    public $tinggi;

    function __construct($berat, $tinggi) 
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function getBerat()
    {
        return $this->berat;
    }

    function getTinggi()
    {
        return $this->tinggi;
    }

    function getNilai()
    {
        $berat_Badan= $this->berat;
        $tinggi_Badan= ($this->tinggi * 0.01) ** 2;
        
        $nilai_BMI = $berat_Badan / $tinggi_Badan;
        return number_format($nilai_BMI, 1);
    }

    function getStatus ($_nilai){
        if ($_nilai >= 30.0) {
            return 'Obesitas';
        } else if ($_nilai <= 29.0 && $_nilai >= 25.0) {
            return 'Kelebihan Bobot';
        } else if ($_nilai <= 24.9 && $_nilai >= 18.5) {
            return 'Normal / Ideal';
        } else if ($_nilai <= 18.4) {
            return 'Kekurangan Bobot';
        } else {
        return 'Tidak Ditemukan';
        }
    }
}

class Pasien {
    public $id;
    // public $kode;
    public $nama;
    public $tmp_Lahir;
    public $tgl_periksa;
    public $email;
    public $gender;

    function __construct($nama, $tmp_Lahir, $tgl_periksa, $email, $gender)
    {
        // $this->kode = $kode;
        $this->nama = $nama;
        $this->tmp_Lahir = $tmp_Lahir;
        $this->tgl_Lahir = $tgl_periksa;
        $this->email = $email;
        $this->gender = $gender;
    }

    function getKode()
    {
        $noUrut = 3;
        $noUrut++;
        $char = "user";
        $kode = $char . sprintf("%03s", $noUrut);
        return $kode;
    }

    function getNama()
    {
        return $this->nama;
    }

    function getTempatLahir()
    {
        return $this->tmp_Lahir;
    }

    function getTanggalPeriksa()
    {
        $dob = $this->tgl_periksa;
        $date = date("d-m-Y", strtotime($dob));
        return $date;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getGender()
    {
        return $this->gender;
    }
}

class BMIPasien{
    public BMI $bmi;
    public $tanggal;
    public Pasien $pasien;

    function __construct($bmi, $tanggal, $pasien)
    {
        $_classBMI = new BMI;
        $this->bmi = $_classBMI.getNilai();

        
        $_classPasien = new Pasien;
        $this->pasien = $_classPasien.getNama();
        $this->tanggal = $_classPasien.get;
    }
}

?>

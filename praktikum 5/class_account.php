<?php

class Account
{
    public $nama;
    public $saldo;
    public $norek;

    public function __construct($nama, $saldo, $rekening)
    {
        $this->nama = $nama;
        $this->saldo = $saldo;
        $this->norek = $rekening;
    }


    public function deposit($nominal)
    {
        $this->saldo += $nominal;
    }

    public function withdraw($jumlah)
    {
        $this->saldo -= $jumlah;
    }

    public function cetak()
    {

        echo "No Account : " . $this->norek . "<br>";
        echo "Atas Nama : <b>" . $this->nama . "</b><br>";
        echo "Saldo Anda Sebesar : <b>" . $this->saldo . "</b><br><br>";

    }
}

class AccountBank extends Account
{
    public function customerTransfer(Account $nama, $duit)
    {
        $this->saldo -= $duit;
        $nama->deposit($duit);
    }
}

$ahmad = new AccountBank('Ahmad', 6000000, 'C001');
$budi = new AccountBank('Budi', 5350000, 'C002');
$kurniawan = new AccountBank('Kurniawan', 2500000, 'C003');

echo "Saldo awal <br>";
$ahmad->cetak();

$ahmad->deposit(1000000);
echo "Saldo deposit 1juta <br>";
$ahmad->cetak();

echo "Saldo awal <br>";
$budi->cetak();
$ahmad->customerTransfer($budi, 500000);
echo "Setelah ditransfer 500.000 oleh Ahmad <br>";
$budi->cetak();

echo "Kemudian Budi menarik uangnya 2,5 jt <br>";
$budi->withdraw(2500000);
$budi->cetak();

echo "Saldo awal <br>";
$kurniawan->cetak();
$ahmad->customerTransfer($kurniawan, 1500000);
echo "Setelah transfer 1,5 jt oleh Ahmad <br>";
$kurniawan->cetak()

?>
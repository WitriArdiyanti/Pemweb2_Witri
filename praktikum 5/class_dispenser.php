<?php
    class Dispenser
    {
        protected $volume;
        protected $hargaSegelas;
        private $volumeGelas = 250;
        public $namaMinuman;

        public function isi ($vol) {
        $this->volume = $vol;
        }   

        public function hargaSegelas($harga)
        {
            $this->hargaSegelas = $harga;
        }

        public function namaMinum($nama)
        {
            $this->namaMinuman = $nama;
        }

        public function beli()
        {
            $this->volume -= $this->volumeGelas;
    
            if ($this->volume >= 0) {
                echo "Selamat Pembelian minuman <b>" . $this->namaMinuman . "</b> Berhasil <br>";
            } else {
                echo "Maaf, Stok Minuman <b>" . $this->namaMinuman . "</b> Habis <br>";
            }
        }
    }

$minuman = new Dispenser();
$minuman->isi(1000);
$minuman->hargaSegelas(5000);
$minuman->namaMinum("Jus jeruk");

$minuman->beli();
$minuman->beli();
$minuman->beli();
$minuman->beli();
$minuman->beli();
?>
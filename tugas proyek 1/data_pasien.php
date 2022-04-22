<?php

require_once 'hitungan_BMI.php';


include('template/header.php');

include('template/sidebar.php');

$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$tmp_Lahir = isset($_POST['tmp_Lahir']) ? $_POST['tmp_Lahir'] : '';
$tgl_periksa = isset($_POST['tgl_periksa']) ? $_POST['tgl_periksa'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$berat = isset($_POST['berat']) ? $_POST['berat'] : '';
$tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';


$bmi = new BMI($berat, $tinggi);
$pasien = new Pasien($nama, $tmp_Lahir, $tgl_periksa, $email, $gender);

$berat_pasien = $bmi->getNilai();
$status = $bmi->getStatus($berat_pasien);

$convert_berat = number_format($bmi->getBerat(), 1);

$pasien1 = ['tanggal' => '10-04-2022', 'kode' => 'user001', 'nama' => 'Ahmad',  'gender' => 'Pria', 'berat' => 69.8, 'tinggi' => 169, 'bmi' => 24.7, 'status' => 'Normal / Ideal'];
$pasien2 = ['tanggal' => '10-04-2022', 'kode' => 'user002', 'nama' => 'Rina', 'gender' => 'Wanita', 'berat' => 55.3, 'tinggi' => 165, 'bmi' => 20.3, 'status' => 'Normal / Ideal'];
$pasien3 = ['tanggal' => '11-04-2022', 'kode' => 'user003', 'nama' => 'Lutfi', 'gender' => 'Pria', 'berat' => 68.2, 'tinggi' => 171, 'bmi' => 15.4, 'status' => 'Kekurangan Bobot'];

$get_bmi_pasien = ['tanggal' => $tanggal, 'kode' => $pasien->getKode(), 'nama' => $pasien->getNama(), 'gender' => $pasien->getGender(), 'berat' => $convert_berat, 'tinggi' => $bmi->getTinggi(), 'bmi' => $bmi->getNilai(), 'status' => $status];

$data_pasien = [$pasien1, $pasien2, $pasien3, $get_bmi_pasien];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kalkulator BMI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Hasil Perhitungan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Hasil Perhitungan BMI</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">


                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Hasil Data Body Mass Index(BMI)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Periksa</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>Berat</th>
                                    <th>Tinggi</th>
                                    <th>BMI</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tinggiody>
                                <?php
                                $nomor = 1;
                                foreach ($data_pasien as $x) {
                                    echo '<tr>';
                                    echo '<td>' . $nomor++ . '</td>';
                                    echo '<td>' . $x['tanggal'] . '</td>';
                                    echo '<td>' . $x['kode'] . '</td>';
                                    echo '<td>' . $x['nama'] . '</td>';
                                    echo '<td>' . $x['gender'] . '</td>';
                                    echo '<td>' . $x['berat'] . '</td>';
                                    echo '<td>' . $x['tinggi'] . '</td>';
                                    echo '<td>' . $x['bmi'] . '</td>';
                                    echo '<td>' . $x['status']  . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tinggiody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php

include('template/footer.php');

?>
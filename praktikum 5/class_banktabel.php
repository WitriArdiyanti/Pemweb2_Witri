<?php
require_once 'get_databank.php';

$nama = $_POST['nama'] ?? '';
$norek = $_POST['norek'] ?? '';
$saldo = $_POST['saldo'] ?? '';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Account bank</title>

</head>

<body>

    <div class="container-fluid">
        <h5>Form Input Data Customer</h5>
        <hr>

        <form action="#" method="post">

            <div class="d-flex justify-content-center ">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Nomor Rekening</label>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" name="norek" required placeholder="Masukan Rekening">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Nama</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nama" required placeholder="Masukan Nama">
                </div>
            </div>


            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Saldo</label>
                </div>
                <div class="col-md-6">
                    <input type="number" required class="form-control" name="saldo" placeholder="Masukan Saldo">
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success" name="submit">Kirim</button>
                    <button type="button" class="btn btn-primary"><a style="text-decoration: none; color:white;" href="BankWithTable.php">Reset Data</a></button>

                    <a class="btn btn-info" href="BankNoTable.php" role="button">Cek Bank</a>
                </div>
            </div>

        </form>

        <hr>

        <table class="table table-hover">
            <thead>
                <th>No</th>
                <th>Nomer Rekening</th>
                <th>Nama</th>
                <th>Saldo</th>
            </thead>
            <tbody>
                
                <?php
                $user1 = new AccountBank('C001', 'Ahmad', 6000000);
                $user2 = new AccountBank('C002', 'Budi', 5350000);
                $user3 = new AccountBank('C003', 'Kurniawan', 2500000);

                $new_iser = new AccountBank($norek, $nama, $saldo);

                $array_user = [$user1, $user2, $user3, $new_iser];

                if (isset($_POST['submit'])) {
                    $no = 1;
                    foreach ($array_user as $x) {
                ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $x->nomor ?></td>
                            <td><?= $x->user ?></td>
                            <td><?= "Rp. " . number_format($x->saldo)  ?></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
        </table>
        <hr>

    </div>
</body>
</html>
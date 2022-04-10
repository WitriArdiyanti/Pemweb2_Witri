<?php 
require_once "classMahasiswa.php";

$witri=new Mahasiswa("Witri Ardiyanti","0110121131","SI","2021",3.9);
$wirda=new Mahasiswa("Wirda Turjanah","01112103912","SI","2021", 3.4);
$nana=new Mahasiswa("Najwa Afia","0110221174","TI","2021", 2.9);
$joy=new Mahasiswa("Joyse Maydossiming","0110121128","SI","2021", 3.8);
$data=[$witri, $wirda, $nana, $joy];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th><th>NIM</th><th>Nama</th>
                    <th>Prodi</th><th>Tahun Angkatan</th><th>IPK</th><th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                        foreach($data as $mahasiswa){
                    ?>    
                    <tr>
                        <td><?= $nomor; ?></td>
                        <td><?= $mahasiswa->nim; ?></td>
                        <td><?= $mahasiswa->nama; ?></td>
                        <td><?= $mahasiswa->prodi; ?></td>
                        <td><?= $mahasiswa->thn_angkatan; ?></td>
                        <td><?= $mahasiswa->ipk; ?></td>
                        <td><?= $mahasiswa->predikat_ipk(); ?></td>
                    </tr>
                <?php
                    $nomor++;
                    }
                ?>
            </tbody>
        </table>
</body>
</html> 
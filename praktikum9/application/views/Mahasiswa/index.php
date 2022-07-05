<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Data Mahasiswa</h3> <a href="<?= base_url().'mahasiswa/Create'?>">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>IPK</th>
            <td>Prodi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $mhs->nim; ?></td>
                <td><?= $mhs->nama; ?></td>
                <td><?= $mhs->gender; ?></td>
                <td><?= $mhs->tmp_lahir; ?></td>
                <td><?= $mhs->tgl_lahir; ?></td>
                <td><?= $mhs->ipk; ?></td>
                <td><?= $mhs->prodi_kode; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
        <br>
        
</body>

</html>
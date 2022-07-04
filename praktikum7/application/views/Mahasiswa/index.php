<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Data Mahasiswa</h3>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>IPK</th>
            <th>Predikat</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($list_mhs as $mhs) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $mhs->nim; ?></td>
                <td><?= $mhs->nama; ?></td>
                <td><?= $mhs->gender; ?></td>
                <td><?= $mhs->ipk; ?></td>
                <td><?= $mhs->predikat(); ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
        <br>
        <a href="<?= base_url().'mahasiswa/Create'?>">Form</a>
</body>

</html>
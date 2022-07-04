<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Input Data</h1>
  <form action="<?=base_url().'mahasiswa/Simpan'?>" method="post">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <div class="form-group row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <label for="text" class="col-2 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">NIM</label> 
    <div class="col-4">
      <input id="text" name="nim" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Gender</label> 
    <div class="col-4">
      <select id="select" name="gender" class="custom-select">
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Tanggal Lahir</label> 
    <div class="col-4">
      <input id="text" name="tgl_lahir" type="date" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Tempat Lahir</label> 
    <div class="col-4">
      <input id="text" name="tmp_lahir" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">IPK</label> 
    <div class="col-4">
      <input id="text" name="ipk" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Program Studi</label> 
    <div class="col-4">
      <select id="select" name="prodi" class="custom-select">
        <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
</html>



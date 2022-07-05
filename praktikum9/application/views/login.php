<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Login</h1>
  <form action="<?=base_url().'Auth/login'?>" method="post">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <div class="form-group row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <label for="text" class="col-2 col-form-label">Username</label> 
    <div class="col-4">
      <input id="text" name="username" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Email</label> 
    <div class="col-4">
      <input id="email" name="email" type="email" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">password</label> 
    <div class="col-4">
      <input id="password" name="password" type="password" class="form-control">
    </div>
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



<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Velvet-Login.com </title>
  <link rel="shortcut icon" href="./Welcome to Otong.com_files/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Welcome to Otong.com_files/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="./Welcome to Otong.com_files/jquery.min.js.download"></script>
  <script src="./Welcome to Otong.com_files/bootstrap.min.js.download"></script>
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid" style="padding: 10% 8% 10% 8%">
    <div class="row">
      <div class="col-md-6 text-center">
        <img src="./Welcome to Otong.com_files/login.jpg" style="max-width: 100%; border-radius :5px;">
      </div>
      <div class="col-md-6">
        <form>
          <h2>Silahkan Login</h2>
          <div class="form-group">
            <input placeholder="Masukan Email" type="email" class="form-control" id="part-login" style="border:2px solid black;border-radius:0; border-top:0; border-left:0; border-right:0">
          </div>
          <div class="form-group">
            <input placeholder="Password" type="password" class="form-control" id="part-login" style="border:2px solid black; border-radius:0; border-top:0; border-left:0; border-right:0">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me</label>
          </div>
          <button type="button" class="btn btn-dark"> Masuk </button>
        </form>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>
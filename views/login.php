<?php
  session_start();
  if (@$_SESSION['admin']) {
    header('location: admin/beranda.php');
  } else if(@$_SESSION['manager']) {
      header('location: manager/beranda.php');
  } else if(@$_SESSION['user']) {
      header('location: user/beranda.php');
  } else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login SPK</title>
  <!-- Bootstrap core CSS-->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Login Sistem</div>
      <div class="card-body">
        <?php
          if(@$_SESSION['login']):
            echo "<p class='alert alert-danger'>".$_SESSION['login']."</p>";
            unset($_SESSION['login']);
          endif;
        ?>
        <form action="../core/Route.php?route=login" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" name="username" type="text" placeholder="Masukan Username">
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input class="form-control" id="pass" name="password" type="password" placeholder="Masukan Password">
          </div>
          <button type="submit" class="btn btn-outline-primary btn-block" >Login</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
<?php } ?>

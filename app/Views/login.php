<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Belajar Buat Aplikasi Codeigniter4</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/adminlte.css">
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="assets/dist/css/font.css" rel="stylesheet">
  <link href="assets/dist/css/ionic.css" rel="stylesheet">
  <!-- Untuk icon -->
  <link rel="shortcut icon" href="assets/images/matadeveloper.png" /> <!-- mengambil file gambar pada folder asset -->
</head>
<body class="hold-transition login-page" style="background-image: linear-gradient(0deg,#381c88,#3c6dff);">
<div class="login-box">
  <div class="login-logo">
    <!-- <img src="assets/images/matadeveloper.png" width="100" height="100"><br> -->
    <b>Belajar Buat Aplikasi Codeigniter4</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><marquee>Silahkan Login Untuk Masuk</marquee></p>
      <?php if(session()->getFlashdata('message')){ ?>
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i>Perhatian !!!</h5>
       <?php echo session()->getFlashdata('message');?>
      </div>
      <?php } ?>
    <!-- <a href=""></a> -->
    <!-- Kita arahkan form login ke controller Login -->
      <form action="Login/sign_in" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <button type="submit" name="login" class="btn btn-primary btn-block">LOGIN</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- <form></form> -->
      <!-- /.social-auth-links -->
      <p class="mb-0" style="text-align: center;">
        <span style="text-align: center;">
          Page rendered in <strong>{elapsed_time}</strong> seconds
        </span>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="assets/dist/js/demo.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="assets/dist/js/pages/dashboard2.js"></script>
</body>
</html>

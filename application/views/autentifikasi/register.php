<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <link rel="shortcut icon" type="image/x-icon" href=<?php echo base_url("assets/pictures/logo.png"); ?> />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/plugins/fontawesome-free/css/all.min.css"); ?>>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/plugins/sweetalert2/sweetalert2.min.css") ?>>
  <!-- Toastr -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/plugins/toastr/toastr.min.css") ?>>
  <!-- Theme style -->
  <link rel="stylesheet" href=<?php echo base_url("assets/adminlte/dist/css/adminlte.min.css") ?>>

  <style>
    body {
        background-image: url('<?php echo base_url('assets/pictures/background_auth.jpg'); ?>'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
        background-size: cover;
        background-position: center;
        height: 100vh; /* This ensures the background image covers the entire viewport height */
    }
    #bg {
      box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
-webkit-box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
-moz-box-shadow: -2px -1px 14px 1px rgba(0,0,0,0.75);
    }
</style>

</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href=<?php echo base_url("home")?>><b>Miracle</b>Florist</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="<?= base_url("autentifikasi/register") ?>" method="post">
          <div class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Full name" name="name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <?= form_error("name", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Email" name="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <?= form_error("email", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Phone" name="phone">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <?= form_error("phone", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <textarea class="form-control" placeholder="Address" name="address"></textarea>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <?= form_error("address", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error("password", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="mb-3">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error("password_confirmation", "<small class='text-danger'>", "</small>") ?>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4 text-center">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
        </form>

        <p class="mb-0 text-center mt-2">
          <a href=<?php echo base_url("autentifikasi") ?> class="text-center">I already have account</a>
        </p>
      </div>
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src=<?php echo base_url("assets/adminlte/plugins/jquery/jquery.min.js") ?>></script>
  <!-- Bootstrap 4 -->
  <script src=<?php echo base_url("assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
  <!-- AdminLTE App -->
  <script src=<?php echo base_url("assets/adminlte/dist/js/adminlte.min.js") ?>></script>
</body>

</html>

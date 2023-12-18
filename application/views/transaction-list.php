<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transaction Page</title>

  <link rel="shortcut icon" type="image/x-icon" href=<?php echo base_url("assets/pictures/logo.png"); ?> />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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

  <link rel="stylesheet" href=<?php echo base_url('assets/css/login.css'); ?>>

  <style>
    body {
      background-image: url('<?php echo base_url('assets/pictures/background_auth.jpg'); ?>');
      /* Replace 'path/to/your/image.jpg' with the actual path to your image */
      background-size: cover;
      background-position: center;
      height: 100vh;
      /* This ensures the background image covers the entire viewport height */
    }

    #bg {
      box-shadow: -2px -1px 14px 1px rgba(0, 0, 0, 0.75);
      -webkit-box-shadow: -2px -1px 14px 1px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: -2px -1px 14px 1px rgba(0, 0, 0, 0.75);
    }
  </style>

</head>

<body>
  <div class="container d-flex align-item-center justify-content-center mx-auto">
    <div class="row">
      <div class="col">
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Transaction</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Product Name</th>
                          <th>Product Price</th>
                          <th>Customers</th>
                          <th>Address</th>
                          <th>Quantity</th>
                          <th>Total</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;

                        foreach ($transactions as $transaction) {
                          ?>
                          <tr>
                            <th>
                              <?= $no ?>
                            </th>
                            <th>
                              <?= $transaction->product_name ?>
                            </th>
                            <th>
                              <?= $transaction->product_price ?>
                            </th>
                            <th>
                              <?= $transaction->user_name ?>
                            </th>
                            <th>
                              <?= $transaction->address ?>
                            </th>
                            <th>
                              <?= $transaction->quantity ?>
                            </th>
                            <th>
                              <?= $transaction->total ?>
                            </th>
                            <th>
                              <?= $transaction->status ?>
                            </th>
                          </tr>

                          <?php
                          $no++;
                        }
                        ?>

                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <a href="<?= base_url("home") ?>" class="btn btn-danger">Kembali</a>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      </section>
    </div>
  </div>
  </div>
  <!-- jQuery -->
  <script src=<?php echo base_url("assets/adminlte/plugins/jquery/jquery.min.js") ?>></script>
  <!-- Bootstrap 4 -->
  <script src=<?php echo base_url("assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
  <!-- AdminLTE App -->
  <script src=<?php echo base_url("assets/adminlte/dist/js/adminlte.min.js") ?>></script>
</body>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=<?php echo base_url("assets/adminlte/plugins/jquery/jquery.min.js") ?>></script>
<!-- Bootstrap 4 -->
<script src=<?php echo base_url("assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
<!-- AdminLTE App -->
<script src=<?php echo base_url("assets/adminlte/dist/js/adminlte.min.js") ?>></script>
</body>

</html>
<!-- content -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="btn btn-lg btn-info mb-4">Add Product</div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Product Name</th>
                      <th>Product Price</th>
                      <th>Stock</th>
                      <th>Image</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;

                    foreach ($products as $product) {
                      ?>
                      <tr>
                        <th>
                          <?= $no ?>
                        </th>
                        <th>
                          <?= $product->name ?>
                        </th>
                        <th>
                          <?= $product->price ?>
                        </th>
                        <th>
                          <?= $product->stock ?>
                        </th>
                        <th>
                          <?= $product->image ?>
                        </th>
                        <th>
                        <a href="<?= base_url("admin/user_edit/") . $product->id ?>" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                        <a href="<?= base_url("admin/product_delete/") . $product->id ?>" class="btn btn-sm btn-danger"><i
                              class="fas fa-trash"></i></a>
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
            <!-- /.card -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  </section>




  <!-- jQuery -->
  <script src=<?php echo base_url("assets/adminlte/plugins/jquery/jquery.min.js") ?>></script>
  <!-- Bootstrap 4 -->
  <script src=<?php echo base_url("assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
  <!-- jsGrid -->
  <script src=<?php echo base_url("assets/adminlte/plugins/jsgrid/demos/db.js") ?>></script>
  <script src=<?php echo base_url("assets/adminlte/plugins/jsgrid/jsgrid.min.js") ?>></script>
  <!-- AdminLTE App -->
  <script src=<?php echo base_url("assets/adminlte/dist/js/adminlte.min.js") ?>></script>

  </script>

  </body>
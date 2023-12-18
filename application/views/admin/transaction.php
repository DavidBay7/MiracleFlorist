<!-- content -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaction Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Transaction</li>
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
                      <th></th>
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
                        <th>
                          <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-default<?= $transaction->id ?>">
                            <i class="fa fa-pen"></i>
                          </button>
                          <div class="modal fade" id="modal-default<?= $transaction->id ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action=<?php echo base_url("admin/transaction_process/") . $transaction->id ?>
                                    method="post">
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                          <label>Status</label>
                                          <select class="form-control" name="status">
                                            <option>Process</option>
                                            <option>Shipping</option>
                                            <option>Success</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                  </form>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
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
<!-- content -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Users Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="d-flex mb-4">
				<a href="<?= base_url("admin/user_add") ?>" class="btn btn-lg btn-info">Add user <i
						class="fas fa-plus pl-3"></i></a>
			</div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead> 
                    <tr>
                      <th>No</th>
                      <th>User Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Role</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;

                    foreach ($users as $user) {
                      ?>
                      <tr>
                        <th>
                          <?= $no ?>
                        </th>
                        <th>
                          <?= $user->name ?>
                        </th>
                        <th>
                          <?= $user->email ?>
                        </th>
                        <th>
                          <?= $user->phone ?>
                        </th>
                        <th>
                          <?= $user->address ?>
                        </th>
                        <th>
                          <?= $user->role_role ?>
                        </th>
                        <th>
                        <a href="<?= base_url("admin/user_edit/") . $user->id ?>" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                          <a href="<?= base_url("admin/user_delete/") . $user->id ?>" class="btn btn-sm btn-danger"><i
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
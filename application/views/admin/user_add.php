<!-- content -->
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
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
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data
			</h6>
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<div class="row align-items-center">
					<?= $this->session->flashdata("alert") ?>
					<form action="<?= current_url() ?>" method="post" class="col-12">
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="role_id" class="form-label">Role</label></div>
							<div class="col-9">
								<select class="form-control" id="role_id" name="role_id">
									<option disabled <?= set_value("role_id") == "" ? "selected" : "" ?>>Pilih Role
									</option>
									<?php
									foreach ($roles as $role) {
										?>
										<option value="<?= $role->id ?>" <?= $role->id == set_value("role_id") ? "selected" : "" ?>><?= $role->role ?></option>
										<?php
									}
									?>
								</select>
							</div>
							<?= form_error("role_id", "<small class='col-9 text-danger'>"), "</small>" ?>
						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="name" class="form-label">Nama Lengkap</label></div>
							<div class="col-9"><input type="text" class="form-control" id="name" name="name"
									value="<?= set_value("name") ?>">
							</div>
							<?= form_error("name", "<small class='col-9 text-danger'>"), "</small>" ?>
						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="phone" class="form-label">Nomor Handphone</label></div>
							<div class="col-9"><input type="text" class="form-control" id="phone" name="phone"
									value="<?= set_value("phone") ?>">
							</div>
							<?= form_error("phone", "<small class='col-9 text-danger'>"), "</small>" ?>
						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="address" class="form-label">Alamat</label></div>
							<div class="col-9"><textarea name="address" id="address" cols="100%" class="form-control"
									rows="3"><?= set_value("address") ?></textarea>
							</div>
							<?= form_error("address", "<small class='col-9 text-danger'>"), "</small>" ?>

						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-3"><label for="email" class="form-label">Email</label></div>
							<div class="col-9"><input type="email" class="form-control" id="email" name="email"
									value="<?= set_value("email") ?>">
							</div>
							<?= form_error("email", "<small class='col-9 text-danger'>"), "</small>" ?>

						</div>
						<div class="row justify-content-end mb-2">
							<div class="col-3"><label for="password" class="form-label">Password</label></div>
							<div class="col-9">
								<input type="password" class="form-control" id="password" name="password">
							</div>
							<?= form_error("password", "<small class='col-9 text-danger'>"), "</small>" ?>

						</div>
						<div class="row justify-content-end mb-2">
							<div class="col-3"><label for="password_confirmation" class="form-label">Password
									Konfirmasi</label>
							</div>
							<div class="col-9">
								<input type="password" class="form-control" id="password_confirmation"
									name="password_confirmation">
							</div>
							<?= form_error("password_confirmation", "<small class='col-9 text-danger'>"), "</small>" ?>

						</div>
						<div class="row justify-content-end mb-3">
							<div class="col-9">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<a href="<?= base_url("admin/user") ?>" class="btn btn-danger">Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

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
  
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary">
      <!-- Brand Logo -->
      <a href="admin/dashboard" class="brand-link">
        <span class="brand-text font-weight-light">Miracle Florist</span>
      </a>

      <!-- Sidebar -->
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="navbar-nav sidebar sidebar-dark">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href=<?php echo base_url("home") ?> class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=<?php echo base_url("admin") ?> class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">DATA TABLE</li>

          <li class="nav-item">
            <a href=<?php echo base_url("admin/transaction") ?> class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Transaction
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=<?php echo base_url("admin/product") ?> class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=<?php echo base_url("admin/user") ?> class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=<?php echo base_url("admin/role") ?> class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Roles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=<?php echo base_url("admin/message") ?> class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=<?php echo base_url("admin/logout")?> class="nav-link">
              <i class="fa-solid fa-message"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <!-- /.sidebar -->
    </aside>
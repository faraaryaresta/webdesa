<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url("homeawal")?>" class="nav-link">Home</a>
      </li>
      
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?= base_url() ?>assets/img/lambang.jpg" alt="Admin Desa" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Desa </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/img/fara.ico" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Farah Aryaresta</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url() ?>adminA" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url() ?>userA" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User      
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url() ?>pendudukA" class="nav-link " >
              <i class="nav-icon fas fa-th"></i>
              <p>
                Penduduk     
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url() ?>beritaA" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Berita     
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url() ?>SuratB" class="nav-link " >
              <i class="nav-icon fas fa-th"></i>
              <p>
                Surat Online     
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign"></i>
              <p>Log Out</p>
            </a>
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">

  <a href="<?php echo base_url("adminA/tambah"); ?>"><input type="button" value="Tambah Data"></a>
  <a href="<?php echo base_url("exportadmin.php"); ?>"><input type="button" style="background: green" value="Export Excel"></a>
  <a href="<?php echo base_url("lapAdminpdf.php"); ?>"><input type="button" style="background: red" value="Export PDF"></a><br><br>
    <table border="2" cellpadding="20" >

    <thead bgcolor='#6799cf'>
        <th>Id</th>
        <th>Nama pengguna</th>
        <th>Email</th>
        <th>Password MD5</th>
        <th colspan="2" class="text-center">Aksi</th>
        </thead>
      <?php
      
      if( ! empty($adminn)){ // Jika data adminA tidak sama dengan kosong, artinya jika data adminA ada
        foreach($adminn as $data){
          echo "<tr bgcolor='white'>
          <td>".$data->id."</td>
          <td>".$data->username."</td>
          <td>".$data->email."</td>
          <td>".$data->password."</td>
          <td><a href='".base_url("adminA/ubah/".$data->id)."'>Ubah</a></td>
          <td><a href='".base_url("adminA/hapus/".$data->id)."'>Hapus</td>
          </tr>";
        }
      }else{ // Jika data adminA kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
              


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>template/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>template/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Farmasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset("plugins/fontawesome-free/css/all.min.css") }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="{{ asset(plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css) }}"> --}}
  <!-- iCheck -->
  {{-- <link rel="stylesheet" href="{{ asset(plugins/icheck-bootstrap/icheck-bootstrap.min.css) }}"> --}}
  <!-- JQVMap -->
  {{-- <link rel="stylesheet" href="{{ asset(plugins/jqvmap/jqvmap.min.css) }}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("dist/css/adminlte.min.css") }}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{ asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}>
  {{-- important --}}
  <link rel="stylesheet" href={{ asset("plugins/datatables/datatables.css") }}>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Daterange picker -->
  {{-- <link rel="stylesheet" href="{{ asset(plugins/daterangepicker/daterangepicker.css) }}"> --}}
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="{{ asset(plugins/summernote/summernote-bs4.min.css) }}"> --}}

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <style>
    .input {
      font-size: 14px;
      color: gray;
      padding: 10px 10px;
      border-radius: 4px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        {{-- For registration belum dibuat --}}
        {{-- <form action=""></form> --}}
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist\img\AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistem Farmasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" class="d-block">User</a>
        </div>
      </div>

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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Obat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('obat.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok Obat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('type.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Obat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Obat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('satuan.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Satuan Obat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{  route('brand.index')  }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/resep" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resep Obat</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li> --}}
              {{-- <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li> --}}
              {{-- <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Transaksi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan Obat</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian Obat</p>
                </a>
              </li> --}}
              {{-- <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li> --}}
              {{-- <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li> --}}
            </ul>
          </li>
      
          <li class="nav-header">Setting</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Setting</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Tambah User</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                Sistem Farmasi
              </h3>
              <main>
                {{-- slot --}}
              </main>
            </div><!-- /.card-header -->
          </div>
        </section>
    </div>

    <div class="container">
      @yield('content')
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 Kelompok Farmasi</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<!-- ChartJS -->
{{-- <script src={{ asset("plugins/chart.js/Chart.min.js") }}></script> --}}
<!-- Sparkline -->
{{-- <script src={{ asset("plugins/sparklines/sparkline.js") }}></script> --}}
<!-- JQVMap -->
{{-- <script src={{ asset("plugins/jqvmap/jquery.vmap.min.js") }}></script> --}}
{{-- <script src={{ asset("plugins/jqvmap/maps/jquery.vmap.usa.js") }}></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src={{ asset("plugins/jquery-knob/jquery.knob.min.js") }}></script> --}}
<!-- daterangepicker -->
{{-- <script src={{ asset("plugins/moment/moment.min.js") }}></script> --}}
{{-- <script src={{ asset("plugins/daterangepicker/daterangepicker.js") }}></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src={{ asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}></script> --}}
<!-- Summernote -->
{{-- <script src={{ asset("plugins/summernote/summernote-bs4.min.js") }}></script> --}}
<!-- overlayScrollbars -->
<script src={{ asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}></script>
<!-- AdminLTE App -->
<script src={{ asset("dist/js/adminlte.js") }}></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src={{ asset("dist/js/demo.js") }}></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset("dist/js/pages/dashboard.js") }}></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datepicker({
            format: "yyyy/mm/dd",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true, 
            orientation: "auto"
        });
    });
    $(function () {
        $('#datetimepicker2').datepicker({
            format: "yyyy/mm/dd",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true, 
            orientation: "auto"
        });
    });
</script>
<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
@stack('js')
<script src={{ asset("plugins/datatables/jquery.dataTables.js") }}></script>
</body>
</html>

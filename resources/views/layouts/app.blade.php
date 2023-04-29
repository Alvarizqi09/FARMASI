
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
  <link rel="stylesheet" href={{ asset("plugins/datatables/datatables.css") }}>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
<body>


  
      @yield('content')
  


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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
<script src={{ asset("plugins/datatables/jquery.dataTables.js") }}></script>
</body>
</html>

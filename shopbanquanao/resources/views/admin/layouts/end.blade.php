<!-- jQuery -->
<script src="{{ URL("plugins/jquery/jquery.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL("plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL("plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- ChartJS -->
<script src="{{ URL("plugins/chart.js/Chart.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ URL("plugins/sparklines/sparkline.js") }}"></script>
<!-- JQVMap -->
<script src="{{ URL("plugins/jqvmap/jquery.vmap.min.js") }}"></script>
<script src="{{ URL("plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL("plugins/jquery-knob/jquery.knob.min.js") }}"></script>
<!-- daterangepicker -->
<script src="{{ URL("plugins/moment/moment.min.js") }}"></script>
<script src="{{ URL("plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
<!-- Summernote -->
<script src="{{ URL("plugins/summernote/summernote-bs4.min.js") }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL("dist/js/adminlte.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL("dist/js/demo.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL("dist/js/pages/dashboard.js") }}"></script>

<script src="{{ URL("plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ URL("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ URL("plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ URL("plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
<script src="{{ URL("plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>

<script src="{{ URL("dist/js/script.js?v=").rand(1111,99999) }}"></script>

</body>
</html>

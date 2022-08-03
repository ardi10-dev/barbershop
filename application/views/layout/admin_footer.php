<footer class="main-footer">
    <strong>Copyright ; 2014-2022 Barber</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url("assets/admiin/")?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url("assets/admiin/")?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url("assets/admiin/")?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url("assets/admiin/")?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url("assets/admiin/")?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url("assets/admiin/")?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url("assets/admiin/")?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url("assets/admiin/")?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url("assets/admiin/")?>plugins/moment/moment.min.js"></script>
<script src="<?=base_url("assets/admiin/")?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url("assets/admiin/")?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url("assets/admiin/")?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url("assets/admiin/")?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url("assets/admiin/")?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url("assets/admiin/")?>dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url("assets/admiin/")?>dist/js/pages/dashboard.js"></script>
<script>
        $('.custom-file-input').on('change', function(){
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label'.addClass("selected").html(fileName);
        })
</script>
</body>
</html>

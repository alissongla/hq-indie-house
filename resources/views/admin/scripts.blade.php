<!-- jQuery -->
<script src={{ secure_asset('admin/plugins/jquery/jquery.min.js') }}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ secure_asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{ secure_asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- ChartJS -->
<script src={{ secure_asset('admin/plugins/chart.js/Chart.min.js') }}></script>
<!-- Sparkline -->
<script src={{ secure_asset('admin/plugins/sparklines/sparkline.js') }}></script>
<!-- JQVMap -->
<script src={{ secure_asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}></script>
<script src={{ secure_asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}></script>
<!-- jQuery Knob Chart -->
<script src={{ secure_asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}></script>
<!-- daterangepicker -->
<script src={{ secure_asset('admin/plugins/moment/moment.min.js') }}></script>
<script src={{ secure_asset('admin/plugins/daterangepicker/daterangepicker.js')}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{ secure_asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}></script>
<!-- Summernote -->
<script src={{ secure_asset('admin/plugins/summernote/summernote-bs4.min.js') }}></script>
<!-- overlayScrollbars -->
<script src={{ secure_asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ secure_asset('admin/dist/js/adminlte.js') }}></script>

<!-- AdminLTE for demo purposes -->
<script src={{ secure_asset('admin/dist/js/demo.js') }}></script>

<!-- Select2 -->
<script src={{ secure_asset('admin/plugins/select2/js/select2.full.min.js') }}></script>

<!-- Ion Slider -->
<script src={{ secure_asset('admin/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}></script>

<script>
    $(document).ready(function () {
        $('.select2').select2();
        $('.editorTexto').summernote();

        $('#criNota').ionRangeSlider({
            min     : 0,
            max     : 5,
            type    : 'single',
            step    : .5,
            prettify: false,
            hasGrid : true
        })
    });
</script>

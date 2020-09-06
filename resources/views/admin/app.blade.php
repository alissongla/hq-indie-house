<!DOCTYPE html>
<html>
<head>
  @include('admin/layouts/head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
   @include('admin/layouts/navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin/layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
  @section('main-content')
    @show
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('admin/layouts/footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')
</body>
</html>

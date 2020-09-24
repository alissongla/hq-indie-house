<!DOCTYPE html>
<html lang="pt-BR">

<head>

  @include('user/layouts/head')

</head>

<body>

  @include('user/layouts/navbar')

  @section('main-content')
    @show

  <!-- Footer -->
  <footer>
    @include('user/layouts/footer')
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src={{ secure_asset('user/js/jquery/jquery.min.js')}}></script>
  <script src={{ secure_asset('user/js/bootstrap/bootstrap.bundle.min.js')}}></script>

  <!-- Custom scripts for this template -->
  <script src={{ secure_asset('user/js/clean-blog.min.js') }}></script>
  @section('footer')
    @show

</body>

</html>

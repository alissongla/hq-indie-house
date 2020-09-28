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
<<<<<<< HEAD
  <script src={{ asset('user/js/jquery/jquery.min.js')}}></script>
  <script src={{ asset('user/js/bootstrap/bootstrap.min.js')}}></script>

  <!-- Custom scripts for this template -->
  <script src={{ asset('user/js/clean-blog.min.js') }}></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/themes/krajee-svg/theme.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/locales/pt-BR.js"></script>
  <script type="text/javascript">
     $('#ratingPost').rating({
        displayOnly: true,
        hoverOnClear: false,
        containerClass: 'is-star',
        theme: 'krajee-svg',
        language:'pt-BR'
    });
</script>
=======
  <script src={{ secure_asset('user/js/jquery/jquery.min.js')}}></script>
  <script src={{ secure_asset('user/js/bootstrap/bootstrap.bundle.min.js')}}></script>

  <!-- Custom scripts for this template -->
  <script src={{ secure_asset('user/js/clean-blog.min.js') }}></script>
>>>>>>> 2c81c7429babd8e3ec03e8e3d4be802084dd42be
  @section('footer')
    @show

</body>

</html>

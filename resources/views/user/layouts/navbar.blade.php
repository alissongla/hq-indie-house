<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="mainNav">
    <div class="container">
        <img src={{ asset('img/logoHQ.png') }} width="200" height="100" class="d-inline-block align-top" alt="">
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home')}}">Destaques</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('ultimas-noticias')}}">Últimas notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home')}}">Críticas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('podcasts')}}">Podcast / Áudiopost</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home')}}">Entrevista / Matérias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home')}}">Perfis</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

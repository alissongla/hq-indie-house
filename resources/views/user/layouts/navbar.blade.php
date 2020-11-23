<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="mainNav">
    <div class="container">
        <img src={{ secure_asset('img/logoHQ.png') }} width="200" height="100" class="d-inline-block align-top" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home')}}">Destaques</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('ultimas-noticias')}}">Últimas notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('criticas')}}">Críticas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-podcasts')}}">Podcast / Áudiopost</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-interviews')}}">Entrevista / Matérias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user-profiles')}}">Perfis</a>
            </li>

            </ul>
        </div>
    </div>
  </nav>

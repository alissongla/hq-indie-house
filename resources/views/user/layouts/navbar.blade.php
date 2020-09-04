<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="mainNav">
    <div class="container">
        <img src={{ asset('img/logoHQ.png') }} width="200" height="100" class="d-inline-block align-top" alt="">
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Destaques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Últimas notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Críticas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Podcast / Áudiopost</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Entrevista / Matérias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url(@yield('bg-img'))">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>@yield('title')</h1>
            <span class="subheading">@yield('sub-heading')</span>
          </div>
        </div>
      </div>
    </div>
  </header>

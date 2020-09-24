 @extends('user/app')

 @section('main-content')
  <!-- Main Content -->
  <div class="container">
    @include('user/components/carousel')
    <div class="row mb-5">
        <div class="col-4">
            <div class="row" id="ultimaCritica">
                <img class='img-block' src={{ asset('uploads/img/Bitter-root.jpg') }} alt="">
                <div class="img-efeito">
                    <div class="img-texto">Última Crítica</div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="col">
                <div class="row" id="ultimaEntrevista">
                    <img class='img-block' src={{ asset('uploads/img/Bitter-root.jpg') }} alt="">
                    <div class="img-efeito">
                        <div class="img-texto">Última Entrevista</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="col">
                <div class="row" id="ultimoPodcast">
                    <img class='img-block' src={{ asset('uploads/img/Bitter-root.jpg') }} alt="">
                    <div class="img-efeito">
                        <div class="img-texto">Último Podcast</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-9">
            <h3 style="text-align: center">Últimas Notícias</h3>
            @foreach ($news as $noticia)
                <div class="row mb-5">
                    <div class="col-6">
                        <img src={{ asset('img/Bitter-root.jpg') }} alt="" width="100%">
                    </div>
                    <div class="col-6" style="vertical-align: middle">
                    <h2><a href="{{ route('post', $noticia->slug)}}">{{ $noticia->title }}</a></h2>
                    <p><span class="meta">Postado por {{ $noticia->author }} as {{ $noticia->created_at->diffForHumans()}}</p>
                    </div>

                </div>
            @endforeach

            <ul class="pager">
            <a href="{{ route('ultimas-noticias') }}">Ver mais</a>
            </ul>
        </div>
        <div class="col">
            <iframe src="https://open.spotify.com/embed/playlist/0Ntxi04q5LMVpWV5Ljo1Dh" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>

    </div>
  </div>

  <hr>
 @endsection

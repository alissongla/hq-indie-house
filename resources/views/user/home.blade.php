 @extends('user/app')

 @section('main-content')
  <!-- Main Content -->
  <div class="container">
    <div id="carouselNovidades" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
                <a href="{{route('home')}}">
                    <img class="d-block w-100" src={{ asset(Storage::disk('public')->url($interview->image)) }} alt="{{$interview->image_caption}}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$interview->title}}</h5>
                        <p>{{$interview->subtitle}}</p>
                    </div>
                </a>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src={{ asset(Storage::disk('public')->url($review->image)) }} alt="{{$review->image_caption}}">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$review->title}}</h5>
                <p>{{$review->subtitle}}</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src={{ asset(Storage::disk('public')->url($podcast->image)) }} alt="{{$podcast->image_caption}}">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{$podcast->title}}</h5>
                <p>{{$podcast->subtitle}}</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselNovidades" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselNovidades" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h3 style="text-align: center">Últimas Notícias</h3>
            @foreach ($news as $noticia)
                <div class="row mb-5">
                    <div class="col-6">
                        <img src={{ asset(Storage::disk('public')->url($noticia->image)) }} alt="{{$noticia->image_caption}}" width="100%">
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
    </div>
  </div>

  <hr>
 @endsection
